<?php

/* admin_template_add.html.twig */
class __TwigTemplate_a56dca794cf362994aea3abcca1907008347747d98c95a8fda61439a4e105925 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "admin_template_add.html.twig", 1);
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
                <h3 class=\"text-danger\">Template ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["operation"]) ? $context["operation"] : null), "html", null, true);
        echo ".<br> ";
        echo twig_escape_filter($this->env, (isset($context["extraTitle"]) ? $context["extraTitle"] : null), "html", null, true);
        echo "   </h3>

                <form method=\"post\"  action=\"/admin/template/";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "\" enctype=\"multipart/form-data\">

                    ";
        // line 11
        if (((isset($context["id"]) ? $context["id"] : null) > 0)) {
            // line 12
            echo "
                        <div class=\"form-group\">
                            <label class=\"control-label\">Template ID </label>
                            <input class=\"form-control\" type=\"number \" name=\"id\" value=\"";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" required
                                   ";
            // line 16
            if (((((isset($context["operation"]) ? $context["operation"] : null) == "Delete") || ((isset($context["operation"]) ? $context["operation"] : null) == "Update")) || (            // line 17
(isset($context["operation"]) ? $context["operation"] : null) == "Select"))) {
                // line 18
                echo " 
                                   readonly
                            ";
            }
            // line 21
            echo "

                            >
                    </div>
                    ";
        }
        // line 26
        echo "
                        <div class=\"form-group\">
                            <label class=\"control-label\">Name </label>
                            <input class=\"form-control\" type=\"text\" name=\"name\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "\"
                                   
                                   ";
        // line 31
        if (((((isset($context["operation"]) ? $context["operation"] : null) == "Delete") || ((isset($context["operation"]) ? $context["operation"] : null) == "Update")) || (        // line 32
(isset($context["operation"]) ? $context["operation"] : null) == "Select"))) {
            // line 33
            echo " 
                                   readonly
                            ";
        }
        // line 36
        echo "                                   
                                   >
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label\">ID Question 1 </label>
                            <input class=\"form-control\" type=\"number\" name=\"idquestion1\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["idquestion1"]) ? $context["idquestion1"] : null), "html", null, true);
        echo "\" required readonly>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label\">Question 1 </label>
                            <input class=\"form-control\" type=\"text\" name=\"question1\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["question1"]) ? $context["question1"] : null), "html", null, true);
        echo "\" required readonly>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label\">ID Question 2 </label>
                            <input class=\"form-control\" type=\"number\" name=\"idquestion2\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["idquestion2"]) ? $context["idquestion2"] : null), "html", null, true);
        echo "\" required readonly>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label\">Question 2</label>
                            <input class=\"form-control\" type=\"text\" name=\"question2\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["question2"]) ? $context["question2"] : null), "html", null, true);
        echo "\" required readonly>
                        </div>

                        <button class=\"btn btn-success btn-block\" type=\"submit\" required> ";
        // line 56
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
        return "admin_template_add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 56,  121 => 53,  114 => 49,  107 => 45,  100 => 41,  93 => 36,  88 => 33,  86 => 32,  85 => 31,  80 => 29,  75 => 26,  68 => 21,  63 => 18,  61 => 17,  60 => 16,  56 => 15,  51 => 12,  49 => 11,  44 => 9,  37 => 7,  31 => 3,  28 => 2,  11 => 1,);
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
                <h3 class=\"text-danger\">Template {{operation}}.<br> {{extraTitle}}   </h3>

                <form method=\"post\"  action=\"/admin/template/{{url}}\" enctype=\"multipart/form-data\">

                    {% if id >0 %}

                        <div class=\"form-group\">
                            <label class=\"control-label\">Template ID </label>
                            <input class=\"form-control\" type=\"number \" name=\"id\" value=\"{{id}}\" required
                                   {% if ((operation == \"Delete\") or (operation == \"Update\")
                                        or (operation == \"Select\"))
                                   %} 
                                   readonly
                            {%endif%}


                            >
                    </div>
                    {% endif %}

                        <div class=\"form-group\">
                            <label class=\"control-label\">Name </label>
                            <input class=\"form-control\" type=\"text\" name=\"name\" value=\"{{name}}\"
                                   
                                   {% if ((operation == \"Delete\") or (operation == \"Update\")
                                        or (operation == \"Select\"))
                                   %} 
                                   readonly
                            {%endif%}
                                   
                                   >
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label\">ID Question 1 </label>
                            <input class=\"form-control\" type=\"number\" name=\"idquestion1\" value=\"{{idquestion1}}\" required readonly>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label\">Question 1 </label>
                            <input class=\"form-control\" type=\"text\" name=\"question1\" value=\"{{question1}}\" required readonly>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label\">ID Question 2 </label>
                            <input class=\"form-control\" type=\"number\" name=\"idquestion2\" value=\"{{idquestion2}}\" required readonly>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label\">Question 2</label>
                            <input class=\"form-control\" type=\"text\" name=\"question2\" value=\"{{question2}}\" required readonly>
                        </div>

                        <button class=\"btn btn-success btn-block\" type=\"submit\" required> {{operation}} </button>
                    </form>
                </div>
            </div>
        </div>
        {% endblock %}{# empty Twig template #}", "admin_template_add.html.twig", "C:\\xampp\\htdocs\\ipd9project\\templates\\admin_template_add.html.twig");
    }
}
