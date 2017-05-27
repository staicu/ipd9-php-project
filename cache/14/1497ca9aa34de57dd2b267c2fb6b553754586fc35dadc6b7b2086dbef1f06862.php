<?php

/* admin_customer_info.html.twig */
class __TwigTemplate_125d31fa55a0985d8749e931e9b3664cd1db97f20dd7139580d3343ac5ff0d73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "admin_customer_info.html.twig", 1);
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
            <div class=\"well\">
                <h3 class=\"text-danger\">
                    Customer Information                       
                    <div style=\"display: inline \" class=\"buttons\"><a class=\"btn btn-primary\" role=\"butt  on\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["linkToGoBack"]) ? $context["linkToGoBack"] : null), "html", null, true);
        echo "\">Go Back</a></div>

                </h3>
                <form method=\"post\"  action=\"/admin/customer/";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "\" enctype=\"multipart/form-data\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Customer ID </label>

                        <input class=\"form-control\" type=\"number\" name=\"id\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" 
                               readonly
                               required>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-label\">Name </label>
                        <input class=\"form-control\" type=\"text\" name=\"name\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "\" readonly>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-label\">Email </label>
                        <input class=\"form-control\" type=\"email\" name=\"email\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true);
        echo "\" readonly>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-label\">Phone Number</label>
                        <input class=\"form-control\" 
                               name=\"phone\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["phone"]) ? $context["phone"] : null), "html", null, true);
        echo "\" readonly>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-label\">Company </label>
                        <input class=\"form-control\" type=\"text\" name=\"company\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["company"]) ? $context["company"] : null), "html", null, true);
        echo "\" readonly>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-label\">Position </label>
                        <input class=\"form-control\" type=\"text\" name=\"position\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["position"]) ? $context["position"] : null), "html", null, true);
        echo "\" readonly>
                    </div>

                </form>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "admin_customer_info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 38,  82 => 34,  75 => 30,  67 => 25,  60 => 21,  51 => 15,  44 => 11,  38 => 8,  31 => 3,  28 => 2,  11 => 1,);
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
            <div class=\"well\">
                <h3 class=\"text-danger\">
                    Customer Information                       
                    <div style=\"display: inline \" class=\"buttons\"><a class=\"btn btn-primary\" role=\"butt  on\" href=\"{{linkToGoBack}}\">Go Back</a></div>

                </h3>
                <form method=\"post\"  action=\"/admin/customer/{{url}}\" enctype=\"multipart/form-data\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Customer ID </label>

                        <input class=\"form-control\" type=\"number\" name=\"id\" value=\"{{id}}\" 
                               readonly
                               required>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-label\">Name </label>
                        <input class=\"form-control\" type=\"text\" name=\"name\" value=\"{{name}}\" readonly>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-label\">Email </label>
                        <input class=\"form-control\" type=\"email\" name=\"email\" value=\"{{email}}\" readonly>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-label\">Phone Number</label>
                        <input class=\"form-control\" 
                               name=\"phone\" value=\"{{phone}}\" readonly>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-label\">Company </label>
                        <input class=\"form-control\" type=\"text\" name=\"company\" value=\"{{company}}\" readonly>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-label\">Position </label>
                        <input class=\"form-control\" type=\"text\" name=\"position\" value=\"{{position}}\" readonly>
                    </div>

                </form>
            </div>
        </div>
    </div>
{% endblock %}{# empty Twig template #}", "admin_customer_info.html.twig", "C:\\xampp\\htdocs\\ipd9-php-project\\templates\\admin_customer_info.html.twig");
    }
}
