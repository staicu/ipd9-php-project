<?php

/* /login/login.html.twig */
class __TwigTemplate_a8a0b795a8bef4a5a5afc6a1164a27149381a15f7c5305a53bd3c90b378ce331 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("htmlmastermaster.html.twig", "/login/login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'message' => array($this, 'block_message'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "htmlmastermaster.html.twig";
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
        return "/login/login.html.twig";
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
        return new Twig_Source("{% extends \"\\html\\master\\master.html.twig\" %}

{% block title %}Add was successfull{% endblock %}

{% block message %}
    
Add  {{task}} was successfull
    <a href=\"/\">Click tocontinue to the website</a>.

{% endblock message %}", "/login/login.html.twig", "C:\\xampp\\htdocs\\ipd9-php-project\\web\\html\\login\\login.html.twig");
    }
}
