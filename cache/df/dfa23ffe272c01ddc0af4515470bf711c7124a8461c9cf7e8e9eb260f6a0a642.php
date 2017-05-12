<?php

/* login.html.twig */
class __TwigTemplate_d71db46d711372cb601560d90730757db1ee06be385ef82f8d56880a8ee955e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Login";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
";
        // line 7
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 8
            echo "    <p class=\"errorList\">Login failed try again.</p>
";
        }
        // line 10
        echo "
<form method=\"post\">
    Email: <input type=\"email\" name=\"email\"><br>
    Password: <input type=\"password\" name=\"pass\"><br>
    <input type=\"submit\" value=\"Login\">
</form>

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
        return array (  47 => 10,  43 => 8,  41 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"master.html.twig\" %}

{% block title %}Login{% endblock %}

{% block content %}

{% if error %}
    <p class=\"errorList\">Login failed try again.</p>
{% endif %}

<form method=\"post\">
    Email: <input type=\"email\" name=\"email\"><br>
    Password: <input type=\"password\" name=\"pass\"><br>
    <input type=\"submit\" value=\"Login\">
</form>

{% endblock content %}

", "login.html.twig", "C:\\xampp\\htdocs\\gitphp\\slimtodo\\templates\\login.html.twig");
    }
}
