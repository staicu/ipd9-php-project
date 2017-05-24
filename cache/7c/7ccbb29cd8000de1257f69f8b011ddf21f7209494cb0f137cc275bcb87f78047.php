<?php

/* login.html.twig */
class __TwigTemplate_4f1016257b826a8da7734a6232679e57ddada732c5f8aac20a6bf7c0a409a60c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "login.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        // line 4
        echo "
    <div class=\"row row-login\">
        <div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1\">
            <h1 class=\"text-center\">360 Imagine</h1>
            <div class=\"well\">
                <h3 class=\"text-danger\">Admin Login </h3>
                
                <form method=\"post\"  action=\"/\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Username </label>
                        <input class=\"form-control\" type=\"text\" name=\"name\">
                    </div>
                        <div class=\"form-group\">
                        <label class=\"control-label\">Password </label>
                        <input class=\"form-control\" type=\"password\" name=\"pass\">
                    </div>
                    <button class=\"btn btn-success btn-block\" type=\"submit\" value=\"/\">LOGIN </button>
                </form>
            </div>
        </div>
        <div class=\"col-md-12\"></div>
    </div>


";
    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"index.html.twig\" %}

{% block container %}

    <div class=\"row row-login\">
        <div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1\">
            <h1 class=\"text-center\">360 Imagine</h1>
            <div class=\"well\">
                <h3 class=\"text-danger\">Admin Login </h3>
                
                <form method=\"post\"  action=\"/\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Username </label>
                        <input class=\"form-control\" type=\"text\" name=\"name\">
                    </div>
                        <div class=\"form-group\">
                        <label class=\"control-label\">Password </label>
                        <input class=\"form-control\" type=\"password\" name=\"pass\">
                    </div>
                    <button class=\"btn btn-success btn-block\" type=\"submit\" value=\"/\">LOGIN </button>
                </form>
            </div>
        </div>
        <div class=\"col-md-12\"></div>
    </div>


{% endblock %}", "login.html.twig", "C:\\xampp\\htdocs\\ipd9project\\templates\\login.html.twig");
    }
}
