<?php

/* show_template.html.twig */
class __TwigTemplate_ccc058632a6293b4e2c3b0d64ef461b266fa1e1871bcdf259ecd853dd1889d1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "show_template.html.twig", 1);
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
            <form method=\"post\"  action=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["actionUrl"]) ? $context["actionUrl"] : null), "html", null, true);
        echo "\" enctype=\"multipart/form-data\">

                <h3 class=\"text-center\" style =\"color: orange\">";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["operation"]) ? $context["operation"] : null), "html", null, true);
        echo " Template: \"";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "\" 
                    ";
        // line 8
        if (((isset($context["operation"]) ? $context["operation"] : null) != "Deleted")) {
            echo "   
                        Questions
                    ";
        }
        // line 11
        echo "
                </h3>
                ";
        // line 13
        if (((isset($context["operation"]) ? $context["operation"] : null) != "Deleted")) {
            echo " 
                    <input style=\"max-width: 50px\" type=\"number\" name=\"id\" value=\"";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" required readonly>
                ";
        }
        // line 16
        echo "                ";
        if (((isset($context["operation"]) ? $context["operation"] : null) == "Delete")) {
            // line 17
            echo "                    <button style=\"display: inline\" class=\"btn btn-primary\" type=\"submit\" required> ";
            echo twig_escape_filter($this->env, (isset($context["operation"]) ? $context["operation"] : null), "html", null, true);
            echo " </button>
                ";
        }
        // line 18
        echo "            
                        <div style=\"display: inline \" class=\"buttons\"><a class=\"btn btn-primary\" role=\"butt  on\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["linkToGoBack"]) ? $context["linkToGoBack"] : null), "html", null, true);
        echo "\">Go Back</a></div>

                </form>

        </div>
    </div>


    ";
        // line 27
        if (((isset($context["operation"]) ? $context["operation"] : null) != "Deleted")) {
            // line 28
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
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["template"]) ? $context["template"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["q"]) {
                // line 42
                echo "                        <tr>
                            <td>";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["q"], "question", array()), "html", null, true);
                echo "</td>
                            <td> ";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["q"], "ans1", array()), "html", null, true);
                echo "</td>
                            <td> ";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["q"], "ans2", array()), "html", null, true);
                echo "</td>
                            <td> ";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["q"], "ans3", array()), "html", null, true);
                echo "</td>
                            <td> ";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["q"], "ans4", array()), "html", null, true);
                echo "</td>  
                        </tr>    
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['q'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                </tbody>
            </table>
        </div>
    ";
        }
        // line 53
        echo " 
";
    }

    public function getTemplateName()
    {
        return "show_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 53,  137 => 50,  128 => 47,  124 => 46,  120 => 45,  116 => 44,  112 => 43,  109 => 42,  105 => 41,  90 => 28,  88 => 27,  77 => 19,  74 => 18,  68 => 17,  65 => 16,  60 => 14,  56 => 13,  52 => 11,  46 => 8,  40 => 7,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
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
            <form method=\"post\"  action=\"{{actionUrl}}\" enctype=\"multipart/form-data\">

                <h3 class=\"text-center\" style =\"color: orange\">{{operation}} Template: \"{{name}}\" 
                    {%if operation != \"Deleted\" %}   
                        Questions
                    {% endif%}

                </h3>
                {%if operation != \"Deleted\" %} 
                    <input style=\"max-width: 50px\" type=\"number\" name=\"id\" value=\"{{id}}\" required readonly>
                {% endif%}
                {%if operation == \"Delete\"  %}
                    <button style=\"display: inline\" class=\"btn btn-primary\" type=\"submit\" required> {{operation}} </button>
                {% endif%}            
                        <div style=\"display: inline \" class=\"buttons\"><a class=\"btn btn-primary\" role=\"butt  on\" href=\"{{linkToGoBack}}\">Go Back</a></div>

                </form>

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
                    {% for q in template %}
                        <tr>
                            <td>{{q.question}}</td>
                            <td> {{q.ans1}}</td>
                            <td> {{q.ans2}}</td>
                            <td> {{q.ans3}}</td>
                            <td> {{q.ans4}}</td>  
                        </tr>    
                    {% endfor %}
                </tbody>
            </table>
        </div>
    {% endif%} 
{% endblock %}", "show_template.html.twig", "C:\\xampp\\htdocs\\ipd9-php-project\\templates\\show_template.html.twig");
    }
}
