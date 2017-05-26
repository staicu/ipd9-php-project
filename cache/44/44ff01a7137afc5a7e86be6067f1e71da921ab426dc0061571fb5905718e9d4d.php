<?php

/* json_lists_with_links.html.twig */
class __TwigTemplate_9e93b7530a359cf64bec45845e226037eea1e0ac47cfa0d7c437a1bd76f1bc28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("index.html.twig", "json_lists_with_links.html.twig", 3);
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
                    <h2 class=\"text-center\" style=\"color: white\">";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</h2>
                    <p style=\"font-size: 40; color: white\" class=\"text-center\">

                        <font  size=5>
                    <pre>
                        ";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["textToDisplay"]) ? $context["textToDisplay"] : null), "html", null, true);
        echo " 
                    </pre>
                        </font>
                    </p>
                </div>
                <div class=\"buttons\"><a class=\"btn btn-primary\" role=\"butt  on\" href=\"/\">Menu</a></div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "json_lists_with_links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 15,  38 => 10,  31 => 5,  28 => 4,  11 => 3,);
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
                    <h2 class=\"text-center\" style=\"color: white\">{{title}}</h2>
                    <p style=\"font-size: 40; color: white\" class=\"text-center\">

                        <font  size=5>
                    <pre>
                        {{textToDisplay}} 
                    </pre>
                        </font>
                    </p>
                </div>
                <div class=\"buttons\"><a class=\"btn btn-primary\" role=\"butt  on\" href=\"/\">Menu</a></div>
            </div>
        </div>
    </div>
{% endblock %}", "json_lists_with_links.html.twig", "C:\\xampp\\htdocs\\ipd9-php-project\\templates\\json_lists_with_links.html.twig");
    }
}
