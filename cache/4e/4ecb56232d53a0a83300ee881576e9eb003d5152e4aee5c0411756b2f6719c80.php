<?php

/* user_selection_error.html.twig */
class __TwigTemplate_80712e483be901b19b567bc7167e88e121f8ac140790ab7f678094a81a2cc4a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("index.html.twig", "user_selection_error.html.twig", 3);
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
                    <h2 class=\"text-center\" style=\"color: white\">Customer not Selected</h2>
                    <p style=\"font-size: 20; color: white\" class=\"text-center\">";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["textToDisplay"]) ? $context["textToDisplay"] : null), "html", null, true);
        echo " . </p>
                </div>
                <div class=\"buttons\"><a class=\"btn btn-primary\" role=\"button\" href=\"/admin/customer/list/select\">Return to the Selection List</a></div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "user_selection_error.html.twig";
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
                    <h2 class=\"text-center\" style=\"color: white\">Customer not Selected</h2>
                    <p style=\"font-size: 20; color: white\" class=\"text-center\">{{textToDisplay}} . </p>
                </div>
                <div class=\"buttons\"><a class=\"btn btn-primary\" role=\"button\" href=\"/admin/customer/list/select\">Return to the Selection List</a></div>
            </div>
        </div>
    </div>
{% endblock %}", "user_selection_error.html.twig", "C:\\xampp\\htdocs\\ipd9project\\templates\\user_selection_error.html.twig");
    }
}
