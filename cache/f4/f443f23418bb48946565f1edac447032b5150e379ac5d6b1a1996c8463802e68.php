<?php

/* list_statistics.html.twig */
class __TwigTemplate_e032a430e719fc368e97d5c341e50f4b4472471496607133185f432fc1800a49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "list_statistics.html.twig", 1);
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
            <h3 class=\"text-center\" style =\"color: orange\">Survey Statistics 


                <div style=\"display: inline \" class=\"buttons\"><a class=\"btn btn-primary\" role=\"butt  on\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["linkToGoBack"]) ? $context["linkToGoBack"] : null), "html", null, true);
        echo "\">Go Back</a></div>
            </h3>
        </div>
    </div>

    <div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1\">
        <h4 class=\"text-center\" style =\"color: orange\">Customer List Participating in Surveys <input style=\"max-width: 30px ;align-content: center\" type=\"number\" name=\"id\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["numberOfCustomers"]) ? $context["numberOfCustomers"] : null), "html", null, true);
        echo "\" required readonly></h4> 
    </div>

    <div class=\"container\" style =\"padding-top: 50px;color: orange\" >       
        <table style =\"color: orange\" id=\"example\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
            <thead >
                <tr >
                    <th>Id</th>
                    <th>User Name</th>
                    <th>User Email</th>
                    <th>User Phone</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["userInSurvey"]) ? $context["userInSurvey"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
            // line 29
            echo "                    <tr>
                        <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "userId", array()), "html", null, true);
            echo "</td>
                        <td> ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "userName", array()), "html", null, true);
            echo "</td>
                        <td> ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "userEmail", array()), "html", null, true);
            echo "</td>
                        <td> ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["u"], "userPhone", array()), "html", null, true);
            echo "</td>

                    </tr>    
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "            </tbody>
        </table>
    </div>

    <div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1\">
        <h4 class=\"text-center\" style =\"color: orange\">
            Number of All the Customers Registered
            <input style=\"max-width: 50px ;align-content: center\" type=\"number\" name=\"id\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["noOfAllUsers"]) ? $context["noOfAllUsers"] : null), "html", null, true);
        echo "\" required readonly>
        </h4> 
    </div>  
    <div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1\">
        <h4 class=\"text-center\" style =\"color: orange\">
            Number of Customers that Answered Choice 1 for the Questions :
            <input style=\"max-width: 50px ;align-content: center\" type=\"number\" name=\"id\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["noOfCustCh1"]) ? $context["noOfCustCh1"] : null), "html", null, true);
        echo "\" required readonly>
        </h4> 
    </div> 
    <div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1\">
        <h4 class=\"text-center\" style =\"color: orange\">
            Number of Customers that Answered Choice 2 for the Questions :
            <input style=\"max-width: 50px ;align-content: center\" type=\"number\" name=\"id\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["noOfCustCh2"]) ? $context["noOfCustCh2"] : null), "html", null, true);
        echo "\" required readonly>
        </h4> 
    </div> 
    <div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1\">
        <h4 class=\"text-center\" style =\"color: orange\">
            Number of Customers that Answered Choice 3 for the Questions :
            <input style=\"max-width: 50px ;align-content: center\" type=\"number\" name=\"id\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["noOfCustCh3"]) ? $context["noOfCustCh3"] : null), "html", null, true);
        echo "\" required readonly>
        </h4> 
    </div> 
    <div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1\">
        <h4 class=\"text-center\" style =\"color: orange\">
            Number of Customers that Answered Choice 4 for the Questions :
            <input style=\"max-width: 50px ;align-content: center\" type=\"number\" name=\"id\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["noOfCustCh4"]) ? $context["noOfCustCh4"] : null), "html", null, true);
        echo "\" required readonly>
        </h4> 
    </div> 

    <div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1\">
        <h4 class=\"text-center\" style =\"color: orange\">Number of Questions Used in Surveys <input style=\"max-width: 50px ;align-content: center\" type=\"number\" name=\"id\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["noDistinctQuestionUsed"]) ? $context["noDistinctQuestionUsed"] : null), "html", null, true);
        echo "\" required readonly></h4> 
    </div>   


    <div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1\">
        <h4 class=\"text-center\" style =\"color: orange\">All Questions Available for Surveys 
            <input style=\"max-width: 50px ;align-content: center\" type=\"number\" name=\"id\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["noAllQuestionAvailable"]) ? $context["noAllQuestionAvailable"] : null), "html", null, true);
        echo "\" required readonly>
        </h4> 
    </div>
    <div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1\">
        <h4 class=\"text-center\" style =\"color: orange\">Number of Answer in Surveys 
            <input style=\"max-width: 50px ;align-content: center\" type=\"number\" name=\"id\" value=\"";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["totalNoOfAnswersInSurveys"]) ? $context["totalNoOfAnswersInSurveys"] : null), "html", null, true);
        echo "\" required readonly>
        </h4> 
    </div>
    <div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1\">
        <h4 class=\"text-center\" style =\"color: orange\">
            Questions that were never user in Surveys
        </h4> 
    </div>
    <div class=\"container\" style =\"padding-top: 50px;color: orange\" >       
        <table style =\"color: orange\" id=\"example\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
            <thead >
                <tr >
                    <th></th>
                    <th>Question</th>
                    <th></th>

                </tr>
            </thead>
            <tbody>
                ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questionNotUsedSurveys"]) ? $context["questionNotUsedSurveys"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["q"]) {
            // line 104
            echo "                    <tr>

                        <td></td>
                        <td> ";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute($context["q"], "question", array()), "html", null, true);
            echo "</td>
                        <td> </td>

                    </tr>    
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['q'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "            </tbody>
        </table>
    </div>

    <div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1\">
        <h4 class=\"text-center\" style =\"color: orange\">Templates used in Surveys <input style=\"max-width: 30px \" type=\"number\" name=\"id\" value=\"";
        // line 117
        echo twig_escape_filter($this->env, (isset($context["numberOfTemplates"]) ? $context["numberOfTemplates"] : null), "html", null, true);
        echo "\" required readonly></h4> 
    </div>

    <div class=\"container\" style =\"padding-top: 50px;color: orange\" >       
        <table style =\"color: orange\" id=\"example\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
            <thead >
                <tr >
                    <th>Template ID</th>
                    <th>Template Name</th>
                    <th>Question</th>

                </tr>
            </thead>
            <tbody>
                ";
        // line 131
        $context["previousTemplateId"] = "";
        // line 132
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["templatesUsedInSurveys"]) ? $context["templatesUsedInSurveys"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 133
            echo "
                    ";
            // line 134
            if (((isset($context["previousTemplateId"]) ? $context["previousTemplateId"] : null) != $this->getAttribute($context["t"], "templateId", array()))) {
                // line 135
                echo "                        ";
                $context["previousTemplateId"] = $this->getAttribute($context["t"], "templateId", array());
                // line 136
                echo "                        <tr>

                            <td>";
                // line 138
                echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "templateId", array()), "html", null, true);
                echo "</td>
                            <td> ";
                // line 139
                echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "templateName", array()), "html", null, true);
                echo "</td>
                            <td></td>
                        </tr> 

                    ";
            }
            // line 143
            echo "  
                    <tr>
                        <td></td>
                        <td></td>
                        <td> ";
            // line 147
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "question", array()), "html", null, true);
            echo "</td>
                    </tr> 
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "            </tbody>
        </table>
    </div>


";
    }

    public function getTemplateName()
    {
        return "list_statistics.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 150,  266 => 147,  260 => 143,  252 => 139,  248 => 138,  244 => 136,  241 => 135,  239 => 134,  236 => 133,  231 => 132,  229 => 131,  212 => 117,  205 => 112,  194 => 107,  189 => 104,  185 => 103,  163 => 84,  155 => 79,  146 => 73,  138 => 68,  129 => 62,  120 => 56,  111 => 50,  102 => 44,  93 => 37,  83 => 33,  79 => 32,  75 => 31,  71 => 30,  68 => 29,  64 => 28,  47 => 14,  38 => 8,  31 => 3,  28 => 2,  11 => 1,);
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
            <h3 class=\"text-center\" style =\"color: orange\">Survey Statistics 


                <div style=\"display: inline \" class=\"buttons\"><a class=\"btn btn-primary\" role=\"butt  on\" href=\"{{linkToGoBack}}\">Go Back</a></div>
            </h3>
        </div>
    </div>

    <div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1\">
        <h4 class=\"text-center\" style =\"color: orange\">Customer List Participating in Surveys <input style=\"max-width: 30px ;align-content: center\" type=\"number\" name=\"id\" value=\"{{numberOfCustomers}}\" required readonly></h4> 
    </div>

    <div class=\"container\" style =\"padding-top: 50px;color: orange\" >       
        <table style =\"color: orange\" id=\"example\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
            <thead >
                <tr >
                    <th>Id</th>
                    <th>User Name</th>
                    <th>User Email</th>
                    <th>User Phone</th>
                </tr>
            </thead>
            <tbody>
                {% for u in userInSurvey %}
                    <tr>
                        <td>{{u.userId}}</td>
                        <td> {{u.userName}}</td>
                        <td> {{u.userEmail}}</td>
                        <td> {{u.userPhone}}</td>

                    </tr>    
                {% endfor %}
            </tbody>
        </table>
    </div>

    <div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1\">
        <h4 class=\"text-center\" style =\"color: orange\">
            Number of All the Customers Registered
            <input style=\"max-width: 50px ;align-content: center\" type=\"number\" name=\"id\" value=\"{{noOfAllUsers}}\" required readonly>
        </h4> 
    </div>  
    <div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1\">
        <h4 class=\"text-center\" style =\"color: orange\">
            Number of Customers that Answered Choice 1 for the Questions :
            <input style=\"max-width: 50px ;align-content: center\" type=\"number\" name=\"id\" value=\"{{noOfCustCh1}}\" required readonly>
        </h4> 
    </div> 
    <div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1\">
        <h4 class=\"text-center\" style =\"color: orange\">
            Number of Customers that Answered Choice 2 for the Questions :
            <input style=\"max-width: 50px ;align-content: center\" type=\"number\" name=\"id\" value=\"{{noOfCustCh2}}\" required readonly>
        </h4> 
    </div> 
    <div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1\">
        <h4 class=\"text-center\" style =\"color: orange\">
            Number of Customers that Answered Choice 3 for the Questions :
            <input style=\"max-width: 50px ;align-content: center\" type=\"number\" name=\"id\" value=\"{{noOfCustCh3}}\" required readonly>
        </h4> 
    </div> 
    <div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1\">
        <h4 class=\"text-center\" style =\"color: orange\">
            Number of Customers that Answered Choice 4 for the Questions :
            <input style=\"max-width: 50px ;align-content: center\" type=\"number\" name=\"id\" value=\"{{noOfCustCh4}}\" required readonly>
        </h4> 
    </div> 

    <div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1\">
        <h4 class=\"text-center\" style =\"color: orange\">Number of Questions Used in Surveys <input style=\"max-width: 50px ;align-content: center\" type=\"number\" name=\"id\" value=\"{{noDistinctQuestionUsed}}\" required readonly></h4> 
    </div>   


    <div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1\">
        <h4 class=\"text-center\" style =\"color: orange\">All Questions Available for Surveys 
            <input style=\"max-width: 50px ;align-content: center\" type=\"number\" name=\"id\" value=\"{{noAllQuestionAvailable}}\" required readonly>
        </h4> 
    </div>
    <div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1\">
        <h4 class=\"text-center\" style =\"color: orange\">Number of Answer in Surveys 
            <input style=\"max-width: 50px ;align-content: center\" type=\"number\" name=\"id\" value=\"{{totalNoOfAnswersInSurveys}}\" required readonly>
        </h4> 
    </div>
    <div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1\">
        <h4 class=\"text-center\" style =\"color: orange\">
            Questions that were never user in Surveys
        </h4> 
    </div>
    <div class=\"container\" style =\"padding-top: 50px;color: orange\" >       
        <table style =\"color: orange\" id=\"example\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
            <thead >
                <tr >
                    <th></th>
                    <th>Question</th>
                    <th></th>

                </tr>
            </thead>
            <tbody>
                {% for q in questionNotUsedSurveys %}
                    <tr>

                        <td></td>
                        <td> {{q.question}}</td>
                        <td> </td>

                    </tr>    
                {% endfor %}
            </tbody>
        </table>
    </div>

    <div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1\">
        <h4 class=\"text-center\" style =\"color: orange\">Templates used in Surveys <input style=\"max-width: 30px \" type=\"number\" name=\"id\" value=\"{{numberOfTemplates}}\" required readonly></h4> 
    </div>

    <div class=\"container\" style =\"padding-top: 50px;color: orange\" >       
        <table style =\"color: orange\" id=\"example\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
            <thead >
                <tr >
                    <th>Template ID</th>
                    <th>Template Name</th>
                    <th>Question</th>

                </tr>
            </thead>
            <tbody>
                {%set previousTemplateId = \"\" %}
                {% for t in templatesUsedInSurveys %}

                    {%if previousTemplateId != t.templateId%}
                        {%set previousTemplateId = t.templateId %}
                        <tr>

                            <td>{{t.templateId}}</td>
                            <td> {{t.templateName}}</td>
                            <td></td>
                        </tr> 

                    {%endif%}  
                    <tr>
                        <td></td>
                        <td></td>
                        <td> {{t.question}}</td>
                    </tr> 
                {% endfor %}
            </tbody>
        </table>
    </div>


{% endblock %}", "list_statistics.html.twig", "C:\\xampp\\htdocs\\ipd9-php-project\\templates\\list_statistics.html.twig");
    }
}
