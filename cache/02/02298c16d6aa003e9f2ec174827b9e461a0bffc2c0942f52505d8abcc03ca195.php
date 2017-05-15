<?php

/* /login/master.html */
class __TwigTemplate_bed9d7e569e1b74b2be327d8a730369be138cc35aaa0e42d2e61cdcebf21b05a extends Twig_Template
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
    <title>login</title>
    <link rel=\"stylesheet\" href=\"/html/login/assets/bootstrap/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Bitter:400,700\">
</head>

<body>
    <div></div>
    <div class=\"container\">
        <div class=\"row row-login\">
            <div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1\">
                <h1 class=\"text-center\">Admin Login</h1>
                <div class=\"well\">
                    <h3 class=\"text-danger\">Login </h3>
                    <form>
                        <div class=\"form-group\">
                            <label class=\"control-label\">Username </label>
                            <input class=\"form-control\" type=\"text\">
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label\">Password </label>
                            <input class=\"form-control\" type=\"password\">
                        </div>
                        <div class=\"form-group\">
                            <div class=\"checkbox\">
                                <label class=\"control-label\">
                                    <input type=\"checkbox\">Remember me</label>
                            </div>
                        </div>
                        <button class=\"btn btn-success btn-block\" type=\"submit\">LOGIN </button><a class=\"btn btn-link center-block\" role=\"button\" href=\"#\">Forget Password?</a></form>
                </div>
            </div>
        </div>
    </div>
    <script src=\"assets/js/jquery.min.js\"></script>
    <script src=\"assets/bootstrap/js/bootstrap.min.js\"></script>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "/login/master.html";
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
    <title>login</title>
    <link rel=\"stylesheet\" href=\"/html/login/assets/bootstrap/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Bitter:400,700\">
</head>

<body>
    <div></div>
    <div class=\"container\">
        <div class=\"row row-login\">
            <div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1\">
                <h1 class=\"text-center\">Admin Login</h1>
                <div class=\"well\">
                    <h3 class=\"text-danger\">Login </h3>
                    <form>
                        <div class=\"form-group\">
                            <label class=\"control-label\">Username </label>
                            <input class=\"form-control\" type=\"text\">
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label\">Password </label>
                            <input class=\"form-control\" type=\"password\">
                        </div>
                        <div class=\"form-group\">
                            <div class=\"checkbox\">
                                <label class=\"control-label\">
                                    <input type=\"checkbox\">Remember me</label>
                            </div>
                        </div>
                        <button class=\"btn btn-success btn-block\" type=\"submit\">LOGIN </button><a class=\"btn btn-link center-block\" role=\"button\" href=\"#\">Forget Password?</a></form>
                </div>
            </div>
        </div>
    </div>
    <script src=\"assets/js/jquery.min.js\"></script>
    <script src=\"assets/bootstrap/js/bootstrap.min.js\"></script>
</body>

</html>", "/login/master.html", "C:\\xampp\\htdocs\\ipd9-php-project\\web\\html\\login\\master.html");
    }
}
