<?php

/* congratulation.html.twig */
class __TwigTemplate_17274bcef5be9c5413a92c9431ff65cb2ced5e6c4027774389f394a6c78762dc extends Twig_Template
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
            <div class=\"container\"  style=\"text-align:center\">
                <div class=\"intro\">
                    <h2 class=\"text-center\" style=\"color: white\">Congratulation</h2>
                    <p style=\"font-size: 20; color: white\" class=\"text-center\">";
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
            <div class=\"container\"  style=\"text-align:center\">
                <div class=\"intro\">
                    <h2 class=\"text-center\" style=\"color: white\">Congratulation</h2>
                    <p style=\"font-size: 20; color: white\" class=\"text-center\">{{textToDisplay}} . </p>
                </div>
                <div class=\"buttons\"><a class=\"btn btn-primary\" role=\"button\" href=\"/\">Menu</a></div>
            </div>
        </div>
    </div>
{% endblock %}", "congratulation.html.twig", "C:\\xampp\\htdocs\\ipd9-php-project\\templates\\congratulation.html.twig");
    }
}
