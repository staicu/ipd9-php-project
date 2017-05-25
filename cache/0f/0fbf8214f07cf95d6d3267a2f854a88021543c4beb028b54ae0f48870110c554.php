<?php

/* admin_survey_question1.html.twig */
class __TwigTemplate_4e1319d3aff798eb9489318ffefdfea17e65822e0bfab6add64155af3061b61f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("index.html.twig", "admin_survey_question1.html.twig", 3);
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
            <form action=\"/admin/customer/survey/answer\" method=\"post\" >
                <div class=\"container\"  style=\"text-align:center\">
                    <h3 class=\"text-danger\">Hi ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : null), "html", null, true);
        echo ". Please select 1 answer per Question</h3>
                    <input type=\"submit\" value=\"Next\">
                    <table style=\"color: white\" id=\"example\" class=\"table table-bordered\" cellspacing=\"0\" width=\"100%\">

                        <thead>

                            <tr>
                                <th>Question</th>
                                <th>Answer 1</th>
                                <th> select this one</th>
                                <th>Answer 2</th>
                                <th>OR slect this one</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["question1"]) ? $context["question1"] : null), "html", null, true);
        echo "</td>
                                <td>";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["ans11"]) ? $context["ans11"] : null), "html", null, true);
        echo "</td>
                                <td><input type=\"radio\" name=\"selection1\" value=\"1\"></td>
                                <td>";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["ans12"]) ? $context["ans12"] : null), "html", null, true);
        echo "</td>
                                <td><input type=\"radio\" name=\"selection1\" value=\"2\"></td>
                            </tr>
                            <tr>
                                <td>";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["question2"]) ? $context["question2"] : null), "html", null, true);
        echo "</td>
                                <td>";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["ans21"]) ? $context["ans21"] : null), "html", null, true);
        echo "</td>
                                <td><input type=\"radio\" name=\"selection2\" value=\"1\"></td>
                                <td>";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["ans22"]) ? $context["ans22"] : null), "html", null, true);
        echo "</td>
                                <td><input type=\"radio\" name=\"selection2\" value=\"2\"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                

            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "admin_survey_question1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 36,  77 => 34,  73 => 33,  66 => 29,  61 => 27,  57 => 26,  38 => 10,  31 => 5,  28 => 4,  11 => 3,);
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
            <form action=\"/admin/customer/survey/answer\" method=\"post\" >
                <div class=\"container\"  style=\"text-align:center\">
                    <h3 class=\"text-danger\">Hi {{username}}. Please select 1 answer per Question</h3>
                    <input type=\"submit\" value=\"Next\">
                    <table style=\"color: white\" id=\"example\" class=\"table table-bordered\" cellspacing=\"0\" width=\"100%\">

                        <thead>

                            <tr>
                                <th>Question</th>
                                <th>Answer 1</th>
                                <th> select this one</th>
                                <th>Answer 2</th>
                                <th>OR slect this one</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{question1}}</td>
                                <td>{{ans11}}</td>
                                <td><input type=\"radio\" name=\"selection1\" value=\"1\"></td>
                                <td>{{ans12}}</td>
                                <td><input type=\"radio\" name=\"selection1\" value=\"2\"></td>
                            </tr>
                            <tr>
                                <td>{{question2}}</td>
                                <td>{{ans21}}</td>
                                <td><input type=\"radio\" name=\"selection2\" value=\"1\"></td>
                                <td>{{ans22}}</td>
                                <td><input type=\"radio\" name=\"selection2\" value=\"2\"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                

            </form>
        </div>
    </div>
{% endblock %}", "admin_survey_question1.html.twig", "C:\\xampp\\htdocs\\ipd9-php-project\\templates\\admin_survey_question1.html.twig");
    }
}
