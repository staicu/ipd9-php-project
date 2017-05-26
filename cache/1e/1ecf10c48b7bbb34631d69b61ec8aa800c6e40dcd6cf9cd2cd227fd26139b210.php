<?php

/* passreset.html.twig */
class __TwigTemplate_ac187cc401ce9a395f3e641df0a432da34b1fc2e50b7ccd8ae6b0da1ff8e103a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "passreset.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
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
    public function block_header($context, array $blocks = array())
    {
        echo "Password reset";
    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Password reset</h1>
    
    ";
        // line 8
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 9
            echo "        <p><b>We couldn't find email you provided in our system.
                Try again or register a new account</b></p>
    ";
        }
        // line 12
        echo "    
    <form method=\"POST\">
        Enter your email: <input type=\"email\" placeholder=\"Enter email here\" name=\"email\"><br><br>
       <div style=\"text-align:center;\">
           <input type=\"submit\" value=\"Request password reset\"></div>
    </form>
";
    }

    public function getTemplateName()
    {
        return "passreset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 12,  44 => 9,  42 => 8,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
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

{% block header %}Password reset{% endblock %}

{% block container %}
    <h1>Password reset</h1>
    
    {% if error %}
        <p><b>We couldn't find email you provided in our system.
                Try again or register a new account</b></p>
    {% endif %}
    
    <form method=\"POST\">
        Enter your email: <input type=\"email\" placeholder=\"Enter email here\" name=\"email\"><br><br>
       <div style=\"text-align:center;\">
           <input type=\"submit\" value=\"Request password reset\"></div>
    </form>
{% endblock %}
", "passreset.html.twig", "C:\\xampp\\htdocs\\phpproject\\templates\\passreset.html.twig");
    }
}
