<?php

/* list_all_responses.html.twig */
class __TwigTemplate_c9b9c3a9a16278d3789cf9bb3b299a9bd3bce6758cf4a6ca90e39873783c72ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "list_all_responses.html.twig", 1);
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
        <h4 class=\"text-center\" style =\"color: orange\"> List of All the Survey Reponses <input style=\"max-width: 50px ;align-content: center\" type=\"number\" name=\"id\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["noOfAllResponses"]) ? $context["noOfAllResponses"] : null), "html", null, true);
        echo "\" required readonly></h4> 
    </div>

    <div class=\"container\" style =\"padding-top: 50px;color: orange\" >       
        <table style =\"color: orange\" id=\"example\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
            <thead >
                <tr >
                    <th>Response Id<br>Select to display</th>
                    <th>User Id</th>
                    <th>User Name</th>
                    <th>Template Id</th>
                    <th>Template Name</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allResponses"]) ? $context["allResponses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["sr"]) {
            // line 30
            echo "                    <tr>                                        
                

                        <td><a style=\"color:red;\" href=\"/admin/responses/specificresponse/";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["sr"], "responseId", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["sr"], "responseId", array()), "html", null, true);
            echo "</a></td>
                        <td> ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["sr"], "userId", array()), "html", null, true);
            echo "</td>
                        <td> ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["sr"], "userName", array()), "html", null, true);
            echo "</td>
                        <td> ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["sr"], "templateId", array()), "html", null, true);
            echo "</td>
                         <td> ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["sr"], "templateName", array()), "html", null, true);
            echo "</td>

                    </tr>    
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "            </tbody>
        </table>
    </div>

   

";
    }

    public function getTemplateName()
    {
        return "list_all_responses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 41,  92 => 37,  88 => 36,  84 => 35,  80 => 34,  74 => 33,  69 => 30,  65 => 29,  47 => 14,  38 => 8,  31 => 3,  28 => 2,  11 => 1,);
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
        <h4 class=\"text-center\" style =\"color: orange\"> List of All the Survey Reponses <input style=\"max-width: 50px ;align-content: center\" type=\"number\" name=\"id\" value=\"{{noOfAllResponses}}\" required readonly></h4> 
    </div>

    <div class=\"container\" style =\"padding-top: 50px;color: orange\" >       
        <table style =\"color: orange\" id=\"example\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
            <thead >
                <tr >
                    <th>Response Id<br>Select to display</th>
                    <th>User Id</th>
                    <th>User Name</th>
                    <th>Template Id</th>
                    <th>Template Name</th>
                </tr>
            </thead>
            <tbody>
                {% for sr in allResponses %}
                    <tr>                                        
                

                        <td><a style=\"color:red;\" href=\"/admin/responses/specificresponse/{{sr.responseId}}\">{{sr.responseId}}</a></td>
                        <td> {{sr.userId}}</td>
                        <td> {{sr.userName}}</td>
                        <td> {{sr.templateId}}</td>
                         <td> {{sr.templateName}}</td>

                    </tr>    
                {% endfor %}
            </tbody>
        </table>
    </div>

   

{% endblock %}", "list_all_responses.html.twig", "C:\\xampp\\htdocs\\ipd9-php-project\\templates\\list_all_responses.html.twig");
    }
}
