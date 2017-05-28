<?php

function mailToCustomer($email,$emailSubject,$emailMessage) {
    $to = $email;
    $subject = $emailSubject;
    $message = $emailMessage;
    $headers = 'From:  laurian@ipd9.info' . "\r\n" .
            'Reply-To:  laurian@ipd9.info' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

   return mail($to, $subject, $message, $headers);
   
}

// PASSWOR RESET

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$app->map('/passreset', function () use ($app, $log) {
// Alternative to cron-scheduled cleanup
    if (rand(1, 1000) == 111) {
// TODO: do the cleanup 1 in 1000 accessed to /passreset URL
    }
    if ($app->request()->isGet()) {
        $app->render('/passrec/passreset.html.twig');
    } else {
        $email = $app->request()->post('email');
        $user = DB::queryFirstRow("SELECT * FROM admins WHERE email=%s", $email);
        if ($user) {
            $app->render('passreset_success.html.twig');
            $secretToken = generateRandomString(50);
// VERSION 1: delete and insert
            /*
              DB::delete('passresets', 'userID=%d', $user['ID']);
              DB::insert('passresets', array(
              'userID' => $user['ID'],
              'secretToken' => $secretToken,
              'expiryDateTime' => date("Y-m-d H:i:s", strtotime("+5 hours"))
              )); */
// VERSION 2: insert-update TODO
            DB::insertUpdate('passresets', array(
                'userID' => $user['id'],
                'secretToken' => $secretToken,
                'expiryDateTime' => date("Y-m-d H:i:s", strtotime("+5 minutes"))
            ));
// email user
            $url = 'http://' . $_SERVER['SERVER_NAME'] . '/passreset/' . $secretToken;
            $html = $app->view()->render('email_passreset.html.twig', array(
                'name' => $user['name'],
                'url' => $url
            ));
            $headers = "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
            $headers .= "From: Noreply <noreply@ipd8.info>\r\n";
            $headers .= "To: " . htmlentities($user['name']) . " <" . $email . ">\r\n";

            mail($email, "Password reset from Daycare", $html, $headers);
            $log->info("Password reset for $email email sent");
        } else {
            $app->render('passreset.html.twig', array('error' => TRUE));
        }
    }
})->via('GET', 'POST');

$app->map('/passreset/:secretToken', function($secretToken) use ($app) {
    $row = DB::queryFirstRow("SELECT * FROM passresets WHERE secretToken=%s", $secretToken);
    if (!$row) {
        $app->render('passreset_notfound_expired.html.twig');
        return;
    }
    if (strtotime($row['expiryDateTime']) < time()) {
        $app->render('passreset_notfound_expired.html.twig');
        return;
    }
//
    if ($app->request()->isGet()) {
        $app->render('passreset_form.html.twig');
    } else {
        $pass1 = $app->request()->post('pass1');
        $pass2 = $app->request()->post('pass2');
// TODO: verify password quality and that pass1 matches pass2
        $errorList = array();
        $msg = verifyPassword($pass1);
        if ($msg !== TRUE) {
            array_push($errorList, $msg);
        } else if ($pass1 != $pass2) {
            array_push($errorList, "Passwords don't match");
        }
//
        if ($errorList) {
            $app->render('passreset_form.html.twig', array(
                'errorList' => $errorList
            ));
        } else {
// success - reset the password
            DB::update('admins', array(
                'password' => password_hash($pass1, CRYPT_BLOWFISH)
                    ), "id=%d", $row['userID']);
            DB::delete('passresets', 'secretToken=%s', $secretToken);
            $app->render('passreset_form_success.html.twig');
            $log->info("Password reset completed for " . $row['email'] . " uid=" . $row['userID']);
        }
    }
})->via('GET', 'POST');


$app->get('/scheduled/daily', function() use ($app, $log) {
    DB::$error_handler = FALSE;
    DB::$throw_exception_on_error = TRUE;
    $log->debug("Daily scheduler run started");
// 1. clean up old password reset requests
    try {
        DB::delete('passresets', "expiryDateTime < NOW()");
        $log->debug("Password resets clean up, removed " . DB::affectedRows());
    } catch (MeekroDBException $e) {
        sql_error_handler(array(
            'error' => $e->getMessage(),
            'query' => $e->getQuery()
        ));
    }
    $log->debug("Daily scheduler run completed");
    echo "Completed";
});

$app->get('/emailexists/:email', function($email) use ($app, $log) {
    $user = DB::queryFirstRow("SELECT * FROM admins WHERE email=%s", $email);
    if ($user) {
        echo "Email already registered";
    }
});
