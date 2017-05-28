<?php

/* delete_response.html.twig */
class __TwigTemplate_9b02a1035886d977933724a169c89a5102011609ace5b3eea4b64de30ccb8f38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "delete_response.html.twig", 1);
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

    // line 2
    public function block_container($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"row row-login\" >
        <div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1\">
            <form method=\"post\"  action=\"/admin/responses/specificresponse/delete\" enctype=\"multipart/form-data\">

                <h3 class=\"text-center\" style =\"color: orange\">Reponse was deleted from Database. no: 
                    <input style=\"max-width: 50px\" type=\"number\" name=\"id\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" required readonly>
                    <div style=\"display: inline \" class=\"buttons\"><a class=\"btn btn-primary\" role=\"butt  on\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["linkToGoBack"]) ? $context["linkToGoBack"] : null), "html", null, true);
        echo "\">Go Back</a></div>

                </h3>
            </form>
        </div>
    </div>


";
    }

    public function getTemplateName()
    {
        return "delete_response.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 9,  38 => 8,  31 => 3,  28 => 2,  11 => 1,);
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
{% block container %}
    <div class=\"row row-login\" >
        <div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1\">
            <form method=\"post\"  action=\"/admin/responses/specificresponse/delete\" enctype=\"multipart/form-data\">

                <h3 class=\"text-center\" style =\"color: orange\">Reponse was deleted from Database. no: 
                    <input style=\"max-width: 50px\" type=\"number\" name=\"id\" value=\"{{id}}\" required readonly>
                    <div style=\"display: inline \" class=\"buttons\"><a class=\"btn btn-primary\" role=\"butt  on\" href=\"{{linkToGoBack}}\">Go Back</a></div>

                </h3>
            </form>
        </div>
    </div>


{% endblock %}", "delete_response.html.twig", "C:\\xampp\\htdocs\\ipd9-php-project\\templates\\delete_response.html.twig");
    }
}
