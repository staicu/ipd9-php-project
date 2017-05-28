<?php

/* list_single_response.html.twig */
class __TwigTemplate_eb6a70b07cf6f840020c9c8fbd5613f8f43e61fa0634e68f8904ee83483c72d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "list_single_response.html.twig", 1);
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

                <h3 class=\"text-center\" style =\"color: orange\">Survey Statistics 
                    <input style=\"max-width: 50px\" type=\"number\" name=\"id\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" required readonly>
                    <div style=\"display: inline \" class=\"buttons\"><a class=\"btn btn-primary\" role=\"butt  on\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["linkToGoBack"]) ? $context["linkToGoBack"] : null), "html", null, true);
        echo "\">Go Back</a></div>
                    <button style=\"display: inline\" class=\"btn btn-primary\" type=\"submit\" required> Delete </button>

                </h3>
            </form>
        </div>
    </div>

    <div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1\">
        <h4 class=\"text-center\" style =\"color: orange\"> Information for Survey Reponse </h4> 
    </div>

    <div class=\"container\" style =\"padding-top: 50px;color: orange\" >       
        <table style =\"color: orange\" id=\"example\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
            <thead >
                <tr >
                    <th>Template Id</th>
                    <th>User Name</th>
                    <th>User Id</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allResponses1"]) ? $context["allResponses1"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["ar1"]) {
            // line 35
            echo "                    <tr>                                        


                        <td> ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["ar1"], "templateId", array()), "html", null, true);
            echo "</td>
                        <td> ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["ar1"], "templateName", array()), "html", null, true);
            echo "</td>
                        <td> ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["ar1"], "userId", array()), "html", null, true);
            echo "</td>
                        <td> ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["ar1"], "userName", array()), "html", null, true);
            echo "</td>
                        <td> ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["ar1"], "userEmail", array()), "html", null, true);
            echo "</td>
                        <td> ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["ar1"], "userPhone", array()), "html", null, true);
            echo "</td>

                    </tr>    
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ar1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "            </tbody>
        </table>
        <div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1\">
            <h4 class=\"text-center\" style =\"color: orange\"> Questions And Answers </h4> 
        </div>
        <table style =\"color: orange\" id=\"example\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
            <thead >
                <tr >
                    <th>Question</th>
                    <th>Choice no</th>
                    <th>Answer 1</th>
                    <th>Answer 2</th>
                    <th>Answer 3</th>
                    <th>Answer 4</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allResponses4"]) ? $context["allResponses4"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["ar1"]) {
            // line 65
            echo "                    <tr>                                        


                        <td> ";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["ar1"], "question", array()), "html", null, true);
            echo "</td>
                        <td> ";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["ar1"], "choiceId", array()), "html", null, true);
            echo "</td>
                        <td> ";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["ar1"], "ans1", array()), "html", null, true);
            echo "</td>
                        <td> ";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["ar1"], "ans2", array()), "html", null, true);
            echo "</td>
                        <td> ";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["ar1"], "ans3", array()), "html", null, true);
            echo "</td>
                        <td> ";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["ar1"], "ans4", array()), "html", null, true);
            echo "</td>

                    </tr>    
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ar1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "            </tbody>
        </table>
    </div>



";
    }

    public function getTemplateName()
    {
        return "list_single_response.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 77,  157 => 73,  153 => 72,  149 => 71,  145 => 70,  141 => 69,  137 => 68,  132 => 65,  128 => 64,  109 => 47,  99 => 43,  95 => 42,  91 => 41,  87 => 40,  83 => 39,  79 => 38,  74 => 35,  70 => 34,  42 => 9,  38 => 8,  31 => 3,  28 => 2,  11 => 1,);
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

                <h3 class=\"text-center\" style =\"color: orange\">Survey Statistics 
                    <input style=\"max-width: 50px\" type=\"number\" name=\"id\" value=\"{{id}}\" required readonly>
                    <div style=\"display: inline \" class=\"buttons\"><a class=\"btn btn-primary\" role=\"butt  on\" href=\"{{linkToGoBack}}\">Go Back</a></div>
                    <button style=\"display: inline\" class=\"btn btn-primary\" type=\"submit\" required> Delete </button>

                </h3>
            </form>
        </div>
    </div>

    <div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1\">
        <h4 class=\"text-center\" style =\"color: orange\"> Information for Survey Reponse </h4> 
    </div>

    <div class=\"container\" style =\"padding-top: 50px;color: orange\" >       
        <table style =\"color: orange\" id=\"example\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
            <thead >
                <tr >
                    <th>Template Id</th>
                    <th>User Name</th>
                    <th>User Id</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                {% for ar1 in allResponses1 %}
                    <tr>                                        


                        <td> {{ar1.templateId}}</td>
                        <td> {{ar1.templateName}}</td>
                        <td> {{ar1.userId}}</td>
                        <td> {{ar1.userName}}</td>
                        <td> {{ar1.userEmail}}</td>
                        <td> {{ar1.userPhone}}</td>

                    </tr>    
                {% endfor %}
            </tbody>
        </table>
        <div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1\">
            <h4 class=\"text-center\" style =\"color: orange\"> Questions And Answers </h4> 
        </div>
        <table style =\"color: orange\" id=\"example\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
            <thead >
                <tr >
                    <th>Question</th>
                    <th>Choice no</th>
                    <th>Answer 1</th>
                    <th>Answer 2</th>
                    <th>Answer 3</th>
                    <th>Answer 4</th>
                </tr>
            </thead>
            <tbody>
                {% for ar1 in allResponses4 %}
                    <tr>                                        


                        <td> {{ar1.question}}</td>
                        <td> {{ar1.choiceId}}</td>
                        <td> {{ar1.ans1}}</td>
                        <td> {{ar1.ans2}}</td>
                        <td> {{ar1.ans3}}</td>
                        <td> {{ar1.ans4}}</td>

                    </tr>    
                {% endfor %}
            </tbody>
        </table>
    </div>



{% endblock %}", "list_single_response.html.twig", "C:\\xampp\\htdocs\\ipd9-php-project\\templates\\list_single_response.html.twig");
    }
}
