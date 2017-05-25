<?php

/* error_internal.html.twig */
class __TwigTemplate_20b44c2d83753242412a06ea8d5ab4d52f0fd163bfc4183b1f39f6acd5f8ef78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "error_internal.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
            'container1' => array($this, 'block_container1'),
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
    }

    // line 5
    public function block_container1($context, array $blocks = array())
    {
        // line 6
        echo "    <div style=\"text-align:center; color: white\" >
        <h1>Internal error</h1>
        <p>We're very sorry, we failed to fulfill your request.
            Our team of coding IPD9 has already
            been notified of your trouble.</p>
        <p><a href=\"/\">Click here</a> to continue</p>

    </div>
";
    }

    public function getTemplateName()
    {
        return "error_internal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  34 => 5,  29 => 3,  11 => 1,);
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

{% block container %}{% endblock %}

{% block container1 %}
    <div style=\"text-align:center; color: white\" >
        <h1>Internal error</h1>
        <p>We're very sorry, we failed to fulfill your request.
            Our team of coding IPD9 has already
            been notified of your trouble.</p>
        <p><a href=\"/\">Click here</a> to continue</p>

    </div>
{% endblock %}", "error_internal.html.twig", "C:\\xampp\\htdocs\\ipd9-php-project\\templates\\error_internal.html.twig");
    }
}
