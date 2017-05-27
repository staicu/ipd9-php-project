<?php

/* admin_customer_add.html.twig */
class __TwigTemplate_e01b0dc6e178e64d5bf5597581a25453146b0c92ccbd361eeb7532c25bf981d7 extends Twig_Template
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
            echo "                        Customer ";
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

                            <input class=\"form-control\" type=\"number\" name=\"id\" value=\"";
            // line 21
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" 
                                   ";
            // line 22
            if (((((isset($context["operation"]) ? $context["operation"] : null) == "Delete") || ((isset($context["operation"]) ? $context["operation"] : null) == "Update")) || (            // line 23
(isset($context["operation"]) ? $context["operation"] : null) == "Select"))) {
                // line 24
                echo " 
                                   readonly
                            ";
            }
            // line 27
            echo "                            required>
                    </div>
                    ";
        }
        // line 30
        echo "                        ";
        if (((isset($context["url"]) ? $context["url"] : null) == "survey")) {
            // line 31
            echo "                            <div class=\"form-group\">


                                <label class=\"control-label\">Survey Name </label>
                                <input class=\"form-control\" type=\"text\" name=\"surveyname\" value=\"";
            // line 35
            echo twig_escape_filter($this->env, (isset($context["surveyname"]) ? $context["surveyname"] : null), "html", null, true);
            echo "\"required>
                            </div>
                            <div class=\"form-group\">

                                <h4 class=\"text-danger\">Customer Information  </h4>

                            </div>
                        ";
        }
        // line 43
        echo "                        <div class=\"form-group\">
                            <label class=\"control-label\">Name </label>
                            <input class=\"form-control\" type=\"text\" name=\"name\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "\" required>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label\">Email </label>
                            <input class=\"form-control\" type=\"email\" name=\"email\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true);
        echo "\" required>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label\">Phone Number</label>
                            <input class=\"form-control\" 
                                   type='tel' pattern='[\\(]\\d{3}[\\)]\\d{3}[\\-]\\d{4}' title='Phone Number (Format: (999)999-9999)'
                                   name=\"phone\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["phone"]) ? $context["phone"] : null), "html", null, true);
        echo "\" required>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label\">Company </label>
                            <input class=\"form-control\" type=\"text\" name=\"company\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["company"]) ? $context["company"] : null), "html", null, true);
        echo "\" required>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label\">Position </label>
                            <input class=\"form-control\" type=\"text\" name=\"position\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["position"]) ? $context["position"] : null), "html", null, true);
        echo "\" required>
                        </div>
                            <button class=\"btn btn-success btn-block\" type=\"submit\"> ";
        // line 65
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
        return array (  142 => 65,  137 => 63,  130 => 59,  123 => 55,  114 => 49,  107 => 45,  103 => 43,  92 => 35,  86 => 31,  83 => 30,  78 => 27,  73 => 24,  71 => 23,  70 => 22,  66 => 21,  59 => 16,  57 => 15,  52 => 13,  46 => 11,  40 => 9,  38 => 8,  31 => 3,  28 => 2,  11 => 1,);
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

                            <input class=\"form-control\" type=\"number\" name=\"id\" value=\"{{id}}\" 
                                   {% if ((operation == \"Delete\") or (operation == \"Update\")
                                        or (operation == \"Select\"))
                                   %} 
                                   readonly
                            {%endif%}
                            required>
                    </div>
                    {% endif %}
                        {% if url == \"survey\" %}
                            <div class=\"form-group\">


                                <label class=\"control-label\">Survey Name </label>
                                <input class=\"form-control\" type=\"text\" name=\"surveyname\" value=\"{{surveyname}}\"required>
                            </div>
                            <div class=\"form-group\">

                                <h4 class=\"text-danger\">Customer Information  </h4>

                            </div>
                        {% endif %}
                        <div class=\"form-group\">
                            <label class=\"control-label\">Name </label>
                            <input class=\"form-control\" type=\"text\" name=\"name\" value=\"{{name}}\" required>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label\">Email </label>
                            <input class=\"form-control\" type=\"email\" name=\"email\" value=\"{{email}}\" required>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label\">Phone Number</label>
                            <input class=\"form-control\" 
                                   type='tel' pattern='[\\(]\\d{3}[\\)]\\d{3}[\\-]\\d{4}' title='Phone Number (Format: (999)999-9999)'
                                   name=\"phone\" value=\"{{phone}}\" required>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label\">Company </label>
                            <input class=\"form-control\" type=\"text\" name=\"company\" value=\"{{company}}\" required>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label\">Position </label>
                            <input class=\"form-control\" type=\"text\" name=\"position\" value=\"{{position}}\" required>
                        </div>
                            <button class=\"btn btn-success btn-block\" type=\"submit\"> {{operation}} </button>
         
                    </form>
                </div>
            </div>
        </div>
        {% endblock %}{# empty Twig template #}", "admin_customer_add.html.twig", "C:\\xampp\\htdocs\\ipd9-php-project\\templates\\admin_customer_add.html.twig");
    }
}
