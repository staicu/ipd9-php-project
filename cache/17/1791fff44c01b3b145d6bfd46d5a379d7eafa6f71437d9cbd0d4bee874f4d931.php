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
                <h3 class=\"text-danger\">
                    ";
        // line 8
        if (((isset($context["url"]) ? $context["url"] : null) != "survey")) {
            // line 9
            echo "                    Customer ";
            echo twig_escape_filter($this->env, (isset($context["operation"]) ? $context["operation"] : null), "html", null, true);
            echo " 
                    ";
        }
        // line 11
        echo "                    ";
        echo twig_escape_filter($this->env, (isset($context["extraoperation"]) ? $context["extraoperation"] : null), "html", null, true);
        echo " </h3>

                <form method=\"post\"  action=\"/admin/customer/";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "\" enctype=\"multipart/form-data\">

                    ";
        // line 15
        if (((isset($context["id"]) ? $context["id"] : null) > 0)) {
            // line 16
            echo "
                        <div class=\"form-group\">
                            
                            <label class=\"control-label\">Customer ID </label>
                            <input class=\"form-control\" type=\"text\" name=\"id\" value=\"";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\">
                        </div>
                    ";
        }
        // line 23
        echo "                    ";
        if (((isset($context["url"]) ? $context["url"] : null) == "survey")) {
            // line 24
            echo "                        <div class=\"form-group\">
                             <h4 class=\"text-danger\">Survey Information  - Enter Date Start Survey</h4>
                              <label class=\"control-label\">Survey Date </label>
                            <input class=\"form-control\" type=\"date\" name=\"surveydate\" value=\"";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["surveydate"]) ? $context["surveydate"] : null), "html", null, true);
            echo "\">

                            <label class=\"control-label\">Survey Name </label>
                            <input class=\"form-control\" type=\"text\" name=\"surveyname\" value=\"";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["surveyname"]) ? $context["surveyname"] : null), "html", null, true);
            echo "\">
                        </div>
                        <div class=\"form-group\">
                            
                            <h4 class=\"text-danger\">Customer Information  </h4>
                                                   
                        </div>
                    ";
        }
        // line 38
        echo "                    <div class=\"form-group\">
                        <label class=\"control-label\">Name </label>
                        <input class=\"form-control\" type=\"text\" name=\"name\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-label\">Email </label>
                        <input class=\"form-control\" type=\"text\" name=\"email\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-label\">Phone Number</label>
                        <input class=\"form-control\" type=\"text\" name=\"phone\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["phone"]) ? $context["phone"] : null), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-label\">Company </label>
                        <input class=\"form-control\" type=\"text\" name=\"company\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["company"]) ? $context["company"] : null), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-label\">Position </label>
                        <input class=\"form-control\" type=\"text\" name=\"position\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["position"]) ? $context["position"] : null), "html", null, true);
        echo "\">
                    </div>
                    <button class=\"btn btn-success btn-block\" type=\"submit\"> ";
        // line 58
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
        return array (  133 => 58,  128 => 56,  121 => 52,  114 => 48,  107 => 44,  100 => 40,  96 => 38,  85 => 30,  79 => 27,  74 => 24,  71 => 23,  65 => 20,  59 => 16,  57 => 15,  52 => 13,  46 => 11,  40 => 9,  38 => 8,  31 => 3,  28 => 2,  11 => 1,);
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
                <h3 class=\"text-danger\">
                    {% if url != \"survey\" %}
                    Customer {{operation}} 
                    {% endif %}
                    {{extraoperation}} </h3>

                <form method=\"post\"  action=\"/admin/customer/{{url}}\" enctype=\"multipart/form-data\">

                    {% if id >0 %}

                        <div class=\"form-group\">
                            
                            <label class=\"control-label\">Customer ID </label>
                            <input class=\"form-control\" type=\"text\" name=\"id\" value=\"{{id}}\">
                        </div>
                    {% endif %}
                    {% if url == \"survey\" %}
                        <div class=\"form-group\">
                             <h4 class=\"text-danger\">Survey Information  - Enter Date Start Survey</h4>
                              <label class=\"control-label\">Survey Date </label>
                            <input class=\"form-control\" type=\"date\" name=\"surveydate\" value=\"{{surveydate}}\">

                            <label class=\"control-label\">Survey Name </label>
                            <input class=\"form-control\" type=\"text\" name=\"surveyname\" value=\"{{surveyname}}\">
                        </div>
                        <div class=\"form-group\">
                            
                            <h4 class=\"text-danger\">Customer Information  </h4>
                                                   
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
