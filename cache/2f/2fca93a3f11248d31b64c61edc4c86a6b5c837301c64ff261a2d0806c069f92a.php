<?php

/* user/user.html.twig */
class __TwigTemplate_1d60e1cbe58c36f790afbbbd39f94a8b6d6e1efef134196bea06bb4eb5a45ae0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>user</title>
    <link rel=\"stylesheet\" href=\"assets/user/css/styles.min.css\">
</head>

<body>
    <div class=\"register-photo\">
        <div class=\"form-container\">
            <div class=\"image-holder\"></div>
            <form method=\"post\">
                <h2 class=\"text-center\"><strong>Create</strong> an account.</h2>
                <div class=\"form-group\">
                    <input class=\"form-control\" type=\"email\" name=\"email\" placeholder=\"Email\">
                </div>
                <div class=\"form-group\">
                    <input class=\"form-control\" type=\"password\" name=\"password\" placeholder=\"Password\">
                </div>
                <div class=\"form-group\">
                    <input class=\"form-control\" type=\"password\" name=\"password-repeat\" placeholder=\"Password (repeat)\">
                </div>
                <div class=\"form-group\">
                    <div class=\"checkbox\">
                        <label class=\"control-label\">
                            <input type=\"checkbox\">I agree to the license terms.</label>
                    </div>
                </div>
                <div class=\"form-group\">
                    <button class=\"btn btn-primary btn-block\" type=\"submit\">Sign Up</button>
                </div><a href=\"#\" class=\"already\">You already have an account? Login here.</a></form>
        </div>
    </div>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js\"></script>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "user/user.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>user</title>
    <link rel=\"stylesheet\" href=\"assets/user/css/styles.min.css\">
</head>

<body>
    <div class=\"register-photo\">
        <div class=\"form-container\">
            <div class=\"image-holder\"></div>
            <form method=\"post\">
                <h2 class=\"text-center\"><strong>Create</strong> an account.</h2>
                <div class=\"form-group\">
                    <input class=\"form-control\" type=\"email\" name=\"email\" placeholder=\"Email\">
                </div>
                <div class=\"form-group\">
                    <input class=\"form-control\" type=\"password\" name=\"password\" placeholder=\"Password\">
                </div>
                <div class=\"form-group\">
                    <input class=\"form-control\" type=\"password\" name=\"password-repeat\" placeholder=\"Password (repeat)\">
                </div>
                <div class=\"form-group\">
                    <div class=\"checkbox\">
                        <label class=\"control-label\">
                            <input type=\"checkbox\">I agree to the license terms.</label>
                    </div>
                </div>
                <div class=\"form-group\">
                    <button class=\"btn btn-primary btn-block\" type=\"submit\">Sign Up</button>
                </div><a href=\"#\" class=\"already\">You already have an account? Login here.</a></form>
        </div>
    </div>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js\"></script>
</body>

</html>", "user/user.html.twig", "C:\\xampp\\htdocs\\ipd9-php-project\\templates\\user\\user.html.twig");
    }
}
