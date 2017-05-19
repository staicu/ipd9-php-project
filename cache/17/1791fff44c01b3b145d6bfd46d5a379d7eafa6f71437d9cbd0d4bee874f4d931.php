<?php

/* admin_customer_add.html.twig */
class __TwigTemplate_ece1f92c81c84d52aeefc73cb76513fecf5aed9da97e678de3b021759cd87eea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "admin_customer_add.html.twig", 1);
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
            <h1 class=\"text-center\">360 imagine</h1>
            <div class=\"well\">
                <h3 class=\"text-danger\">Customer ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["operation"]) ? $context["operation"] : null), "html", null, true);
        echo "   </h3>

                <form method=\"post\"  action=\"/admin/customer/";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "\" enctype=\"multipart/form-data\">

                    ";
        // line 11
        if (((isset($context["id"]) ? $context["id"] : null) > 0)) {
            // line 12
            echo "
                        <div class=\"form-group\">
                            <label class=\"control-label\">Customer ID </label>
                            <input class=\"form-control\" type=\"text\" name=\"id\" value=\"";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\">
                        </div>
                    ";
        }
        // line 18
        echo "
                    <div class=\"form-group\">
                        <label class=\"control-label\">Name </label>
                        <input class=\"form-control\" type=\"text\" name=\"name\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-label\">Email </label>
                        <input class=\"form-control\" type=\"text\" name=\"email\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-label\">Phone Number</label>
                        <input class=\"form-control\" type=\"text\" name=\"phone\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["phone"]) ? $context["phone"] : null), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-label\">Company </label>
                        <input class=\"form-control\" type=\"text\" name=\"company\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["company"]) ? $context["company"] : null), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-label\">Position </label>
                        <input class=\"form-control\" type=\"text\" name=\"position\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["position"]) ? $context["position"] : null), "html", null, true);
        echo "\">
                    </div>
                    <button class=\"btn btn-success btn-block\" type=\"submit\"> ";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["operation"]) ? $context["operation"] : null), "html", null, true);
        echo " </button>
                </form>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "admin_customer_add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 39,  93 => 37,  86 => 33,  79 => 29,  72 => 25,  65 => 21,  60 => 18,  54 => 15,  49 => 12,  47 => 11,  42 => 9,  37 => 7,  31 => 3,  28 => 2,  11 => 1,);
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
            <h1 class=\"text-center\">360 imagine</h1>
            <div class=\"well\">
                <h3 class=\"text-danger\">Customer {{operation}}   </h3>

                <form method=\"post\"  action=\"/admin/customer/{{url}}\" enctype=\"multipart/form-data\">

                    {% if id >0 %}

                        <div class=\"form-group\">
                            <label class=\"control-label\">Customer ID </label>
                            <input class=\"form-control\" type=\"text\" name=\"id\" value=\"{{id}}\">
                        </div>
                    {% endif %}

                    <div class=\"form-group\">
                        <label class=\"control-label\">Name </label>
                        <input class=\"form-control\" type=\"text\" name=\"name\" value=\"{{name}}\">
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-label\">Email </label>
                        <input class=\"form-control\" type=\"text\" name=\"email\" value=\"{{email}}\">
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-label\">Phone Number</label>
                        <input class=\"form-control\" type=\"text\" name=\"phone\" value=\"{{phone}}\">
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-label\">Company </label>
                        <input class=\"form-control\" type=\"text\" name=\"company\" value=\"{{company}}\">
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-label\">Position </label>
                        <input class=\"form-control\" type=\"text\" name=\"position\" value=\"{{position}}\">
                    </div>
                    <button class=\"btn btn-success btn-block\" type=\"submit\"> {{operation}} </button>
                </form>
            </div>
        </div>
    </div>
{% endblock %}{# empty Twig template #}", "admin_customer_add.html.twig", "C:\\xampp\\htdocs\\ipd9-php-project\\templates\\admin_customer_add.html.twig");
    }
}
