<?php

/* congratulation.html.twig */
class __TwigTemplate_a61758cf5f6f48f4a30cd7ced51e25499250eb4e7f9d94c561bc6b6155a7f3c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("index.html.twig", "congratulation.html.twig", 3);
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

    // line 4
    public function block_container($context, array $blocks = array())
    {
        // line 5
        echo "
    <div class=\"container\"> 
        <div class=\"highlight-blue\">
            <div class=\"container\">
                <div class=\"intro\">
                    <h2 class=\"text-center\">Congratulation</h2>
                    <p class=\"text-center\">";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["textToDisplay"]) ? $context["textToDisplay"] : null), "html", null, true);
        echo " . </p>
                </div>
                <div class=\"buttons\"><a class=\"btn btn-primary\" role=\"button\" href=\"/\">Menu</a></div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "congratulation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 11,  31 => 5,  28 => 4,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("

{% extends \"index.html.twig\" %}
{% block container %}

    <div class=\"container\"> 
        <div class=\"highlight-blue\">
            <div class=\"container\">
                <div class=\"intro\">
                    <h2 class=\"text-center\">Congratulation</h2>
                    <p class=\"text-center\">{{textToDisplay}} . </p>
                </div>
                <div class=\"buttons\"><a class=\"btn btn-primary\" role=\"button\" href=\"/\">Menu</a></div>
            </div>
        </div>
    </div>
{% endblock %}", "congratulation.html.twig", "C:\\xampp\\htdocs\\ipd9-php-project\\web\\html\\congratulation.html.twig");
    }
}
