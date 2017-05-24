<?php

/* index.html.twig */
class __TwigTemplate_b731fc2f645ddef88e9fe6fd9538378ac2afbaab917425d9bb88c3717fcf76bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
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
        <link rel=\"stylesheet\" href=\"/assets/bootstrap/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700\">
        <link rel=\"stylesheet\" href=\"/assets/fonts/font-awesome.min.css\">
        <link rel=\"stylesheet\" href=\"/assets/fonts/ionicons.min.css\">
        <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"/assets/css/styles.min.css\">
    </head>

    <body>
        <nav class=\"navbar navbar-default\">
            <div class=\"container-fluid\">
                <div class=\"navbar-header\">
                    <a class=\"navbar-brand navbar-link\" href=\"#\">360 imagine</a>
                    <a class=\"navbar-brand navbar-link\" href=\"#\">
                    ";
        // line 22
        if (((isset($context["topadmin"]) ? $context["topadmin"] : null) != "")) {
            // line 23
            echo "                            Admin : ";
            echo twig_escape_filter($this->env, (isset($context["topadmin"]) ? $context["topadmin"] : null), "html", null, true);
            echo "  
                            ";
        }
        // line 25
        echo "                    
                    
                    </a>
                    <a class=\"navbar-brand navbar-link\" href=\"/admin/template/select/";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["templateselectedid"]) ? $context["templateselectedid"] : null), "html", null, true);
        echo "\">
                        
                        ";
        // line 30
        if (((isset($context["toptemplate"]) ? $context["toptemplate"] : null) != "")) {
            // line 31
            echo "                            Selected Template: ";
            echo twig_escape_filter($this->env, (isset($context["toptemplate"]) ? $context["toptemplate"] : null), "html", null, true);
            echo "
                            ";
        }
        // line 33
        echo "                    
                    </a>
                    <a class=\"navbar-brand navbar-link\" href=\"/admin/customer/select/";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["userselectedid"]) ? $context["userselectedid"] : null), "html", null, true);
        echo "\">
                    ";
        // line 36
        if (((isset($context["topuser"]) ? $context["topuser"] : null) != "")) {
            // line 37
            echo "                            Surveyee Name : ";
            echo twig_escape_filter($this->env, (isset($context["topuser"]) ? $context["topuser"] : null), "html", null, true);
            echo "  
                            ";
        }
        // line 39
        echo "                    
                    </a>
                    
                    <button class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navcol-2\"><span class=\"sr-only\">Toggle navigation</span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span></button>
                </div>
                <div class=\"collapse navbar-collapse\" id=\"navcol-2\">
                    <ul class=\"nav navbar-nav hidden-xs hidden-sm navbar-right\" id=\"desktop-toolbar\">
                        <li class=\"dropdown\">
                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\" href=\"#\"> Menu <i class=\"fa fa-chevron-down fa-fw\"></i></a>
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

        <div class=\"header-blue\" >
        ";
        // line 65
        $this->displayBlock('header', $context, $blocks);
        // line 66
        echo "    ";
        $this->displayBlock('container', $context, $blocks);
        // line 67
        echo "

";
        // line 69
        $this->displayBlock('container1', $context, $blocks);
        // line 70
        echo "
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
<script src=\"/assets/js/jquery.min.js\"></script>
<script src=\"/assets/bootstrap/js/bootstrap.min.js\"></script>
<script src=\"https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js\"></script>
<script src=\"https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js\"></script>
<script src=\"/assets/js/script.min.js\"></script>
</body>

</html>";
    }

    // line 65
    public function block_header($context, array $blocks = array())
    {
    }

    // line 66
    public function block_container($context, array $blocks = array())
    {
    }

    // line 69
    public function block_container1($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 69,  157 => 66,  152 => 65,  126 => 70,  124 => 69,  120 => 67,  117 => 66,  115 => 65,  87 => 39,  81 => 37,  79 => 36,  75 => 35,  71 => 33,  65 => 31,  63 => 30,  58 => 28,  53 => 25,  47 => 23,  45 => 22,  22 => 1,);
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
        <link rel=\"stylesheet\" href=\"/assets/bootstrap/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700\">
        <link rel=\"stylesheet\" href=\"/assets/fonts/font-awesome.min.css\">
        <link rel=\"stylesheet\" href=\"/assets/fonts/ionicons.min.css\">
        <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"/assets/css/styles.min.css\">
    </head>

    <body>
        <nav class=\"navbar navbar-default\">
            <div class=\"container-fluid\">
                <div class=\"navbar-header\">
                    <a class=\"navbar-brand navbar-link\" href=\"#\">360 imagine</a>
                    <a class=\"navbar-brand navbar-link\" href=\"#\">
                    {% if topadmin != \"\"%}
                            Admin : {{topadmin}}  
                            {%endif%}
                    
                    
                    </a>
                    <a class=\"navbar-brand navbar-link\" href=\"/admin/template/select/{{templateselectedid}}\">
                        
                        {% if toptemplate != \"\"%}
                            Selected Template: {{toptemplate}}
                            {%endif%}
                    
                    </a>
                    <a class=\"navbar-brand navbar-link\" href=\"/admin/customer/select/{{userselectedid}}\">
                    {% if topuser != \"\"%}
                            Surveyee Name : {{topuser}}  
                            {%endif%}
                    
                    </a>
                    
                    <button class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navcol-2\"><span class=\"sr-only\">Toggle navigation</span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span></button>
                </div>
                <div class=\"collapse navbar-collapse\" id=\"navcol-2\">
                    <ul class=\"nav navbar-nav hidden-xs hidden-sm navbar-right\" id=\"desktop-toolbar\">
                        <li class=\"dropdown\">
                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\" href=\"#\"> Menu <i class=\"fa fa-chevron-down fa-fw\"></i></a>
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

        <div class=\"header-blue\" >
        {% block header %}{% endblock %}
    {% block container %}{% endblock %}


{% block container1 %}{% endblock %}

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
<script src=\"/assets/js/jquery.min.js\"></script>
<script src=\"/assets/bootstrap/js/bootstrap.min.js\"></script>
<script src=\"https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js\"></script>
<script src=\"https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js\"></script>
<script src=\"/assets/js/script.min.js\"></script>
</body>

</html>", "index.html.twig", "C:\\xampp\\htdocs\\ipd9project\\templates\\index.html.twig");
    }
}
