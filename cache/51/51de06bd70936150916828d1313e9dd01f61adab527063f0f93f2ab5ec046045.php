<?php

/* survey_customer_template.html.twig */
class __TwigTemplate_24f7db17c27fee82222ccf5208c5874b57adee1e66d74df7b339d8cf4e58fe1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "survey_customer_template.html.twig", 1);
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
        echo "    <form method=\"post\"  action=\"/admin/customer/survey/answer\" enctype=\"multipart/form-data\">
    <div style=\"text-align:center\" class=\"row row-login\" >
        <div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1\">
            

                <h3 class=\"text-center\" style =\"color: orange\">
                    Hi ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userselected"]) ? $context["userselected"] : null), "name", array()), "html", null, true);
        echo ". Please answer <br>
                    Survey: \"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "\" Questions 
                  

                </h3>
                    <button style=\"display: inline\" class=\"btn btn-primary\" type=\"submit\" required> Register Survey </button>         
                <div style=\"display: inline \" class=\"buttons\"><a class=\"btn btn-primary\" role=\"butt  on\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["linkToGoBack"]) ? $context["linkToGoBack"] : null), "html", null, true);
        echo "\">Go Back</a></div>

                

        </div>
    </div>


    ";
        // line 23
        if (((isset($context["operation"]) ? $context["operation"] : null) != "Deleted")) {
            // line 24
            echo "        <div class=\"container\" style =\"padding-top: 50px;color: orange\" >       
            <table id=\"example\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                <thead >
                    <tr>
                        <th>Question</th>

                        <th> Answer 1 </th>
                        <th> Answer 2 </th>
                        <th> Answer 3 </th>
                        <th> Answer 4 </th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 37
            $context["counter"] = 0;
            // line 38
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["template"]) ? $context["template"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["q"]) {
                // line 39
                echo "                        ";
                $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : null) + 1);
                // line 40
                echo "                        <tr>
                            <td>";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["q"], "question", array()), "html", null, true);
                echo "</td>
                            <td> <input type=\"radio\" name=\"selection";
                // line 42
                echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : null), "html", null, true);
                echo "\" value=\"1\" required>  ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["q"], "ans1", array()), "html", null, true);
                echo "</td>
                            <td> <input type=\"radio\" name=\"selection";
                // line 43
                echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : null), "html", null, true);
                echo "\" value=\"2\">  ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["q"], "ans2", array()), "html", null, true);
                echo "</td>
                            <td> <input type=\"radio\" name=\"selection";
                // line 44
                echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : null), "html", null, true);
                echo "\" value=\"3\">  ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["q"], "ans3", array()), "html", null, true);
                echo "</td>
                            <td> <input type=\"radio\" name=\"selection";
                // line 45
                echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : null), "html", null, true);
                echo "\" value=\"4\">  ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["q"], "ans4", array()), "html", null, true);
                echo "</td>  
                        </tr>    
                        
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['q'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "                </tbody>
            </table>
        </div>
    ";
        }
        // line 52
        echo " 
    </form>
";
    }

    public function getTemplateName()
    {
        return "survey_customer_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 52,  126 => 49,  114 => 45,  108 => 44,  102 => 43,  96 => 42,  92 => 41,  89 => 40,  86 => 39,  81 => 38,  79 => 37,  64 => 24,  62 => 23,  51 => 15,  43 => 10,  39 => 9,  31 => 3,  28 => 2,  11 => 1,);
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
    <form method=\"post\"  action=\"/admin/customer/survey/answer\" enctype=\"multipart/form-data\">
    <div style=\"text-align:center\" class=\"row row-login\" >
        <div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1\">
            

                <h3 class=\"text-center\" style =\"color: orange\">
                    Hi {{userselected.name}}. Please answer <br>
                    Survey: \"{{name}}\" Questions 
                  

                </h3>
                    <button style=\"display: inline\" class=\"btn btn-primary\" type=\"submit\" required> Register Survey </button>         
                <div style=\"display: inline \" class=\"buttons\"><a class=\"btn btn-primary\" role=\"butt  on\" href=\"{{linkToGoBack}}\">Go Back</a></div>

                

        </div>
    </div>


    {%if operation != \"Deleted\" %}
        <div class=\"container\" style =\"padding-top: 50px;color: orange\" >       
            <table id=\"example\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                <thead >
                    <tr>
                        <th>Question</th>

                        <th> Answer 1 </th>
                        <th> Answer 2 </th>
                        <th> Answer 3 </th>
                        <th> Answer 4 </th>
                    </tr>
                </thead>
                <tbody>
                    {% set counter = 0 %}
                    {% for q in template %}
                        {% set counter = counter + 1 %}
                        <tr>
                            <td>{{q.question}}</td>
                            <td> <input type=\"radio\" name=\"selection{{counter}}\" value=\"1\" required>  {{q.ans1}}</td>
                            <td> <input type=\"radio\" name=\"selection{{counter}}\" value=\"2\">  {{q.ans2}}</td>
                            <td> <input type=\"radio\" name=\"selection{{counter}}\" value=\"3\">  {{q.ans3}}</td>
                            <td> <input type=\"radio\" name=\"selection{{counter}}\" value=\"4\">  {{q.ans4}}</td>  
                        </tr>    
                        
                    {% endfor %}
                </tbody>
            </table>
        </div>
    {% endif%} 
    </form>
{% endblock %}", "survey_customer_template.html.twig", "C:\\xampp\\htdocs\\ipd9-php-project\\templates\\survey_customer_template.html.twig");
    }
}
