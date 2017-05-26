<?php

/* infoheader.html.twig */
class __TwigTemplate_e7b9faa125a572576477506dd9b390190d961fae05478b76be1bb3b4a8cfe3b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("index.html.twig", "infoheader.html.twig", 3);
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
                    <pre >
                        <font color=red size=5>
                            ";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["textToDisplay"]) ? $context["textToDisplay"] : null), "html", null, true);
        echo " 
                    </pre> 

                    </font>
                    </p>
                </div>
                <div class=\"buttons\"><a class=\"btn btn-primary\" role=\"butt  on\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["linkToGoBack"]) ? $context["linkToGoBack"] : null), "html", null, true);
        echo "\">Go Back</a></div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "infoheader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 20,  45 => 14,  38 => 10,  31 => 5,  28 => 4,  11 => 3,);
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
                    <pre >
                        <font color=red size=5>
                            {{textToDisplay}} 
                    </pre> 

                    </font>
                    </p>
                </div>
                <div class=\"buttons\"><a class=\"btn btn-primary\" role=\"butt  on\" href=\"{{linkToGoBack}}\">Go Back</a></div>
            </div>
        </div>
    </div>
{% endblock %}", "infoheader.html.twig", "C:\\xampp\\htdocs\\ipd9-php-project\\templates\\infoheader.html.twig");
    }
}
