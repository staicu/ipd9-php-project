<?php

/* json_display_with_links.html.twig */
class __TwigTemplate_fcf338754412fcce2c3f7e711122f4f4231a63cbdbb41f93bd6cd9a1b3455391 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("index.html.twig", "json_display_with_links.html.twig", 3);
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
                    <form method=\"post\"  action=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["actionUrl"]) ? $context["actionUrl"] : null), "html", null, true);
        echo "\" enctype=\"multipart/form-data\">
                        <h2 class=\"text-center\" style=\"color: white \">";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["mainTitle"]) ? $context["mainTitle"] : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo " </h2>
                        <input style=\"max-width: 50px\" type=\"number\" name=\"id\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" required readonly>
                        ";
        // line 13
        if (((isset($context["action"]) ? $context["action"] : null) != "Select")) {
            // line 14
            echo "                        <button style=\"display: inline\" class=\"btn btn-primary\" type=\"submit\" required> ";
            echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : null), "html", null, true);
            echo " </button>
                        ";
        }
        // line 16
        echo "                        <div style=\"display: inline\" class=\"buttons\"><a class=\"btn btn-primary\" role=\"butt  on\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["goBack"]) ? $context["goBack"] : null), "html", null, true);
        echo "\">Go Back</a></div>

                        <p style=\"font-size: 40; color: white\" class=\"text-center\">

                            <font  size=5>
                        <pre>
                            ";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["textToDisplay"]) ? $context["textToDisplay"] : null), "html", null, true);
        echo " 
                        </pre>                                                                                                                                                         
                        </font>
                        </p>       
                    </form>
                </div>

            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "json_display_with_links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 22,  60 => 16,  54 => 14,  52 => 13,  48 => 12,  42 => 11,  38 => 10,  31 => 5,  28 => 4,  11 => 3,);
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
                    <form method=\"post\"  action=\"{{actionUrl}}\" enctype=\"multipart/form-data\">
                        <h2 class=\"text-center\" style=\"color: white \">{{mainTitle}} {{title}} </h2>
                        <input style=\"max-width: 50px\" type=\"number\" name=\"id\" value=\"{{id}}\" required readonly>
                        {%if action != \"Select\" %}
                        <button style=\"display: inline\" class=\"btn btn-primary\" type=\"submit\" required> {{action}} </button>
                        {% endif%}
                        <div style=\"display: inline\" class=\"buttons\"><a class=\"btn btn-primary\" role=\"butt  on\" href=\"{{goBack}}\">Go Back</a></div>

                        <p style=\"font-size: 40; color: white\" class=\"text-center\">

                            <font  size=5>
                        <pre>
                            {{textToDisplay}} 
                        </pre>                                                                                                                                                         
                        </font>
                        </p>       
                    </form>
                </div>

            </div>
        </div>
    </div>
{% endblock %}", "json_display_with_links.html.twig", "C:\\xampp\\htdocs\\ipd9-php-project\\templates\\json_display_with_links.html.twig");
    }
}
