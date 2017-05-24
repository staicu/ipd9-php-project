<?php

/* admin_question_add.html.twig */
class __TwigTemplate_92f197d1080b5ebab401cffb99c3921ce207c106ea5f502e2de3c689d80f9c65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "admin_question_add.html.twig", 1);
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
                <h3 class=\"text-danger\">";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["operation"]) ? $context["operation"] : null), "html", null, true);
        echo " Question</h3>

                <form method=\"post\"  action=\"/admin/question/";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "\" enctype=\"multipart/form-data\">

                    ";
        // line 11
        if (((isset($context["id"]) ? $context["id"] : null) > 0)) {
            // line 12
            echo "
                        <div class=\"form-group\">
                            <label class=\"control-label\">question ID </label>
                            <input class=\"form-control\" type=\"number\" name=\"id\" value=\"";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" required readonly>
                        </div>
                    ";
        }
        // line 18
        echo "
                    <div class=\"form-group\">
                        <label class=\"control-label\">Question </label>
                        <input class=\"form-control\" type=\"text\" name=\"question\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["question"]) ? $context["question"] : null), "html", null, true);
        echo "\" required>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-label\">Answer 1 </label>
                        <input class=\"form-control\" type=\"text\" name=\"ans1\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["ans1"]) ? $context["ans1"] : null), "html", null, true);
        echo "\" required>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-label\">Answer 2</label>
                        <input class=\"form-control\" type=\"text\" name=\"ans2\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["ans2"]) ? $context["ans2"] : null), "html", null, true);
        echo "\" required>
                    </div>
                    
                    <button class=\"btn btn-success btn-block\" type=\"submit\"> ";
        // line 32
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
        return "admin_question_add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 32,  79 => 29,  72 => 25,  65 => 21,  60 => 18,  54 => 15,  49 => 12,  47 => 11,  42 => 9,  37 => 7,  31 => 3,  28 => 2,  11 => 1,);
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
                <h3 class=\"text-danger\">{{operation}} Question</h3>

                <form method=\"post\"  action=\"/admin/question/{{url}}\" enctype=\"multipart/form-data\">

                    {% if id >0 %}

                        <div class=\"form-group\">
                            <label class=\"control-label\">question ID </label>
                            <input class=\"form-control\" type=\"number\" name=\"id\" value=\"{{id}}\" required readonly>
                        </div>
                    {% endif %}

                    <div class=\"form-group\">
                        <label class=\"control-label\">Question </label>
                        <input class=\"form-control\" type=\"text\" name=\"question\" value=\"{{question}}\" required>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-label\">Answer 1 </label>
                        <input class=\"form-control\" type=\"text\" name=\"ans1\" value=\"{{ans1}}\" required>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-label\">Answer 2</label>
                        <input class=\"form-control\" type=\"text\" name=\"ans2\" value=\"{{ans2}}\" required>
                    </div>
                    
                    <button class=\"btn btn-success btn-block\" type=\"submit\"> {{operation}} </button>
                </form>
            </div>
        </div>
    </div>
{% endblock %}", "admin_question_add.html.twig", "C:\\xampp\\htdocs\\ipd9project\\templates\\admin_question_add.html.twig");
    }
}
