<?php

/* show_survey_done.html.twig */
class __TwigTemplate_0eac3c461e606e88c445c08eed5b71d84331ae46ba01d0783d7e30d05f70b41c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "show_survey_done.html.twig", 1);
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
        echo "    <div style=\"text-align:center\" class=\"row row-login\" >
        <div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1\">

                <h3 class=\"text-center\" style =\"color: orange\">Survey For Customer: \"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["customername"]) ? $context["customername"] : null), "html", null, true);
        echo "\" 
                   

                </h3>

                <input style=\"max-width: 50px\" type=\"number\" name=\"id\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["surveyid"]) ? $context["surveyid"] : null), "html", null, true);
        echo "\" required readonly>
                <div style=\"display: inline \" class=\"buttons\"><a class=\"btn btn-primary\" role=\"butt  on\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["linkToGoBack"]) ? $context["linkToGoBack"] : null), "html", null, true);
        echo "\">Go Back</a></div>


        </div>
    </div>


    ";
        // line 19
        if (((isset($context["operation"]) ? $context["operation"] : null) != "Deleted")) {
            // line 20
            echo "        <div class=\"container\" style =\"padding-top: 50px;color: orange\" >       
            <table id=\"example\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                <thead >
                    <tr>
                        <th>Question</th>

                        <th> Choice </th>
                        <th> Answer 1 </th>
                        <th> Answer 2 </th>
                        <th> Answer 3 </th>
                        <th> Answer 4 </th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["surveyinserted"]) ? $context["surveyinserted"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 35
                echo "                        <tr>
                            <td>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "question", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "choice", array()), "html", null, true);
                echo "</td>
                            <td> ";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "ans1", array()), "html", null, true);
                echo "</td>
                            <td> ";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "ans2", array()), "html", null, true);
                echo "</td>
                            <td> ";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "ans3", array()), "html", null, true);
                echo "</td>
                            <td> ";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "ans4", array()), "html", null, true);
                echo "</td>  
                        </tr>    
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "                </tbody>
            </table>
        </div>
    ";
        }
        // line 47
        echo " 
";
    }

    public function getTemplateName()
    {
        return "show_survey_done.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 47,  112 => 44,  103 => 41,  99 => 40,  95 => 39,  91 => 38,  87 => 37,  83 => 36,  80 => 35,  76 => 34,  60 => 20,  58 => 19,  48 => 12,  44 => 11,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
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
    <div style=\"text-align:center\" class=\"row row-login\" >
        <div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1\">

                <h3 class=\"text-center\" style =\"color: orange\">Survey For Customer: \"{{customername}}\" 
                   

                </h3>

                <input style=\"max-width: 50px\" type=\"number\" name=\"id\" value=\"{{surveyid}}\" required readonly>
                <div style=\"display: inline \" class=\"buttons\"><a class=\"btn btn-primary\" role=\"butt  on\" href=\"{{linkToGoBack}}\">Go Back</a></div>


        </div>
    </div>


    {%if operation != \"Deleted\" %}
        <div class=\"container\" style =\"padding-top: 50px;color: orange\" >       
            <table id=\"example\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                <thead >
                    <tr>
                        <th>Question</th>

                        <th> Choice </th>
                        <th> Answer 1 </th>
                        <th> Answer 2 </th>
                        <th> Answer 3 </th>
                        <th> Answer 4 </th>
                    </tr>
                </thead>
                <tbody>
                    {% for s in surveyinserted %}
                        <tr>
                            <td>{{s.question}}</td>
                            <td>{{s.choice}}</td>
                            <td> {{s.ans1}}</td>
                            <td> {{s.ans2}}</td>
                            <td> {{s.ans3}}</td>
                            <td> {{s.ans4}}</td>  
                        </tr>    
                    {% endfor %}
                </tbody>
            </table>
        </div>
    {% endif%} 
{% endblock %}", "show_survey_done.html.twig", "C:\\xampp\\htdocs\\ipd9-php-project\\templates\\show_survey_done.html.twig");
    }
}
