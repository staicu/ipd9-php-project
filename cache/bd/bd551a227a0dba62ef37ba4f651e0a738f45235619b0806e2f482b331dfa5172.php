<?php

/* index.html.twig */
class __TwigTemplate_5dc266b695d42b289c8c76d85ed7a8b0495aa23904e99976334970536065a02b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'container' => array($this, 'block_container'),
            'container1' => array($this, 'block_container1'),
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
    <title>survey</title>
    <link rel=\"stylesheet\" href=\"/html/assets/bootstrap/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700\">
    <link rel=\"stylesheet\" href=\"/html/assets/fonts/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"/html/assets/fonts/ionicons.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"/html/assets/css/styles.min.css\">
</head>

<body>
    <nav class=\"navbar navbar-default\">
        <div class=\"container-fluid\">
            <div class=\"navbar-header\"><a class=\"navbar-brand navbar-link\" href=\"#\">360 imagine</a>
                <button class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navcol-2\"><span class=\"sr-only\">Toggle navigation</span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span></button>
            </div>
            <div class=\"collapse navbar-collapse\" id=\"navcol-2\">
                <ul class=\"nav navbar-nav hidden-xs hidden-sm navbar-right\" id=\"desktop-toolbar\">
                    <li class=\"dropdown\">
                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\" href=\"#\"> 360 <i class=\"fa fa-chevron-down fa-fw\"></i></a>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            <li role=\"presentation\"><a href=\"/\"><i class=\"fa fa-user fa-fw\"></i> Menu </a></li>
                            <li role=\"presentation\"><a href=\"/logout\"><i class=\"fa fa-power-off fa-fw\"></i>Logout </a></li>
                        </ul>
                    </li>
                </ul>
                <ul class=\"nav navbar-nav visible-xs-block visible-sm-block\" id=\"mobile-nav\">
                    <li role=\"presentation\"><a href=\"/\"><i class=\"fa fa-home fa-fw\"></i> Menu </a></li>
                    <li role=\"presentation\"><a href=\"/logout\"><i class=\"fa fa-star fa-fw\"></i> Logout</a></li>
                    
                    
                </ul>
            </div>
        </div>
    </nav>
    <div></div>
    <div>
        <div class=\"header-blue\">
           
                ";
        // line 45
        $this->displayBlock('container', $context, $blocks);
        // line 46
        echo "                
           
                ";
        // line 48
        $this->displayBlock('container1', $context, $blocks);
        // line 49
        echo "        </div>
    </div>
    <div class=\"footer-basic\">
        <footer>
            <div class=\"social\"><a href=\"#\"><i class=\"icon ion-social-instagram\"></i></a><a href=\"#\"><i class=\"icon ion-social-snapchat\"></i></a><a href=\"#\"><i class=\"icon ion-social-twitter\"></i></a><a href=\"#\"><i class=\"icon ion-social-facebook\"></i></a></div>
            <ul class=\"list-inline\">
                <li><a href=\"#\">Home</a></li>
                <li><a href=\"#\">Services</a></li>
                <li><a href=\"#\">About</a></li>
                <li><a href=\"#\">Terms</a></li>
                <li><a href=\"#\">Privacy Policy</a></li>
            </ul>
            <p class=\"copyright\">Imagine 360 © 2017</p>
        </footer>
    </div>
    <script src=\"/html/assets/js/jquery.min.js\"></script>
    <script src=\"/html/assets/bootstrap/js/bootstrap.min.js\"></script>
    <script src=\"https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js\"></script>
    <script src=\"https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js\"></script>
    <script src=\"/html/assets/js/script.min.js\"></script>
</body>

</html>";
    }

    // line 45
    public function block_container($context, array $blocks = array())
    {
    }

    // line 48
    public function block_container1($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  106 => 48,  101 => 45,  75 => 49,  73 => 48,  69 => 46,  67 => 45,  21 => 1,);
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
    <title>survey</title>
    <link rel=\"stylesheet\" href=\"/html/assets/bootstrap/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700\">
    <link rel=\"stylesheet\" href=\"/html/assets/fonts/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"/html/assets/fonts/ionicons.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"/html/assets/css/styles.min.css\">
</head>

<body>
    <nav class=\"navbar navbar-default\">
        <div class=\"container-fluid\">
            <div class=\"navbar-header\"><a class=\"navbar-brand navbar-link\" href=\"#\">360 imagine</a>
                <button class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navcol-2\"><span class=\"sr-only\">Toggle navigation</span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span></button>
            </div>
            <div class=\"collapse navbar-collapse\" id=\"navcol-2\">
                <ul class=\"nav navbar-nav hidden-xs hidden-sm navbar-right\" id=\"desktop-toolbar\">
                    <li class=\"dropdown\">
                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\" href=\"#\"> 360 <i class=\"fa fa-chevron-down fa-fw\"></i></a>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            <li role=\"presentation\"><a href=\"/\"><i class=\"fa fa-user fa-fw\"></i> Menu </a></li>
                            <li role=\"presentation\"><a href=\"/logout\"><i class=\"fa fa-power-off fa-fw\"></i>Logout </a></li>
                        </ul>
                    </li>
                </ul>
                <ul class=\"nav navbar-nav visible-xs-block visible-sm-block\" id=\"mobile-nav\">
                    <li role=\"presentation\"><a href=\"/\"><i class=\"fa fa-home fa-fw\"></i> Menu </a></li>
                    <li role=\"presentation\"><a href=\"/logout\"><i class=\"fa fa-star fa-fw\"></i> Logout</a></li>
                    
                    
                </ul>
            </div>
        </div>
    </nav>
    <div></div>
    <div>
        <div class=\"header-blue\">
           
                {% block container %}{% endblock %}
                
           
                {% block container1 %}{% endblock %}
        </div>
    </div>
    <div class=\"footer-basic\">
        <footer>
            <div class=\"social\"><a href=\"#\"><i class=\"icon ion-social-instagram\"></i></a><a href=\"#\"><i class=\"icon ion-social-snapchat\"></i></a><a href=\"#\"><i class=\"icon ion-social-twitter\"></i></a><a href=\"#\"><i class=\"icon ion-social-facebook\"></i></a></div>
            <ul class=\"list-inline\">
                <li><a href=\"#\">Home</a></li>
                <li><a href=\"#\">Services</a></li>
                <li><a href=\"#\">About</a></li>
                <li><a href=\"#\">Terms</a></li>
                <li><a href=\"#\">Privacy Policy</a></li>
            </ul>
            <p class=\"copyright\">Imagine 360 © 2017</p>
        </footer>
    </div>
    <script src=\"/html/assets/js/jquery.min.js\"></script>
    <script src=\"/html/assets/bootstrap/js/bootstrap.min.js\"></script>
    <script src=\"https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js\"></script>
    <script src=\"https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js\"></script>
    <script src=\"/html/assets/js/script.min.js\"></script>
</body>

</html>", "index.html.twig", "C:\\xampp\\htdocs\\php\\ipd9project\\web\\html\\index.html.twig");
    }
}
