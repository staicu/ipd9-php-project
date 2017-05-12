<?php

/* add_success.html.twig */
class __TwigTemplate_ac4994609db1c68b1b8b221320cca833ded8c3f78815b383487be5df7350c6c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "add_success.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'message' => array($this, 'block_message'),
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
        echo "Add was successfull";
    }

    // line 5
    public function block_message($context, array $blocks = array())
    {
        // line 6
        echo "    
Add  ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["task"]) ? $context["task"] : null), "html", null, true);
        echo " was successfull
    <a href=\"/\">Click tocontinue to the website</a>.

";
    }

    public function getTemplateName()
    {
        return "add_success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
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

{% block title %}Add was successfull{% endblock %}

{% block message %}
    
Add  {{task}} was successfull
    <a href=\"/\">Click tocontinue to the website</a>.

{% endblock message %}", "add_success.html.twig", "C:\\xampp\\htdocs\\gitphp\\slimtodo\\templates\\add_success.html.twig");
    }
}
