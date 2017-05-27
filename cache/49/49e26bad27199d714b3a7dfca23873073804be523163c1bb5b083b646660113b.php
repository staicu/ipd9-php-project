<?php

/* admin_list.html.twig */
class __TwigTemplate_049a75f0b2078070c13adfb734e8ce6ace46c03a97acf9958a90045f5b8fbdf6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "admin_list.html.twig", 1);
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
        echo "    <div class=\"container\" style =\"padding-top: 10px;color: orange\" >
        <form method=\"post\"  action=\"/admin/template/add/step1\" enctype=\"multipart/form-data\">
            <div style=\"text-align:center ; display: inline\" class=\"row row-login\" >

                <h1 class=\"text-center\">List of ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["titlelist"]) ? $context["titlelist"] : null), "html", null, true);
        echo ". 
                    ";
        // line 8
        if (((isset($context["admin"]) ? $context["admin"] : null) == "template")) {
            // line 9
            echo "                        <button  class=\"btn btn-primary\" type=\"submit\" required> Next </button>
                    ";
        }
        // line 11
        echo "                    <br>";
        echo twig_escape_filter($this->env, (isset($context["extraTitle"]) ? $context["extraTitle"] : null), "html", null, true);
        echo " 
                ";
        // line 12
        if (((isset($context["survey"]) ? $context["survey"] : null) == "survey")) {
            // line 13
            echo "                    <h3>Please Select a Customer.</h3>                    
                ";
        }
        // line 15
        echo "                </h1>
            </div>
            <table id=\"example\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                <thead >
                    <tr >
                        ";
        // line 20
        if (((isset($context["titlelist"]) ? $context["titlelist"] : null) == "Customers")) {
            // line 21
            echo "                            <th>Id</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Operations</th>
                            ";
        }
        // line 27
        echo "                            ";
        if (((isset($context["titlelist"]) ? $context["titlelist"] : null) == "Survey Template")) {
            // line 28
            echo "                            <th>Id</th>
                            <th>Name</th>
                            <th>ID Question 1</th>
                            <th>Question 1</th>
                            <th>ID Question 2</th>
                            <th>Question 2</th>

                            <th>Operations</th>
                            ";
        }
        // line 37
        echo "                            ";
        if (((isset($context["titlelist"]) ? $context["titlelist"] : null) == "Questions")) {
            // line 38
            echo "                            <th>Id</th>
                            <th>Question</th>
                            <th>Answer 1</th>
                            <th>Answer 2</th>
                            <th>Answer 3</th>
                            <th>Answer 4</th>
                            <th>Operations</th>
                            ";
        }
        // line 46
        echo "                    </tr>
                </thead>

                <tbody>
                    ";
        // line 50
        if (((isset($context["titlelist"]) ? $context["titlelist"] : null) == "Customers")) {
            // line 51
            echo "
                        ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["userList"]) ? $context["userList"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 53
                echo "                            <tr><td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "name", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "phone", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "email", array()), "html", null, true);
                echo "</td>
                                <td>
                                    ";
                // line 58
                if (((isset($context["onlyselect"]) ? $context["onlyselect"] : null) == 1)) {
                    // line 59
                    echo "                                        <a style=\"color:red;\" href=\"/admin/customer/select/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                    echo "\">Select</a>

                                    ";
                } else {
                    // line 62
                    echo "                                        <a style=\"color:red;\" href=\"/admin/customer/edit/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                    echo "\">Update</a>
                                        <a style=\"color:red;\" href=\"/admin/customer/delete/";
                    // line 63
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                    echo "\">Delete</a>
                                        <a style=\"color:red;\" href=\"/admin/customer/select/";
                    // line 64
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                    echo "\">Select</a>
                                    ";
                }
                // line 66
                echo "                                </td>
                            </tr>   
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "                    ";
        }
        // line 70
        echo "                    ";
        if (((isset($context["titlelist"]) ? $context["titlelist"] : null) == "Survey Template")) {
            // line 71
            echo "
                    <form action=\"/action_page.php\" method=\"get\">

                        ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["userList"]) ? $context["userList"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 75
                echo "
                            <tr><td>";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "name", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "idquestion1", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "question1", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "idquestion2", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "question2", array()), "html", null, true);
                echo "</td>
                                <td>
                                    ";
                // line 83
                if (((isset($context["onlyselect"]) ? $context["onlyselect"] : null) == 1)) {
                    // line 84
                    echo "                                        <a style=\"color:red;\" href=\"/admin/template/select/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                    echo "\">Select</a>
                                    ";
                } else {
                    // line 86
                    echo "                                        <a style=\"color:red;\" href=\"/admin/template/delete/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                    echo "\">Delete</a>
                                        <a style=\"color:red;\" href=\"/admin/template/select/";
                    // line 87
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                    echo "\">Select</a>
                                    ";
                }
                // line 89
                echo "                                </td>
                            </tr>   
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "
                    ";
        }
        // line 94
        echo "                    ";
        if (((isset($context["titlelist"]) ? $context["titlelist"] : null) == "Questions")) {
            // line 95
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["userList"]) ? $context["userList"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 96
                echo "                            <tr><td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 97
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "question", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 98
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "ans1", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 99
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "ans2", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 100
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "ans3", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 101
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "ans4", array()), "html", null, true);
                echo "</td>
                                <td>
                                    ";
                // line 103
                if (((isset($context["admin"]) ? $context["admin"] : null) == "template")) {
                    // line 104
                    echo "                                        <input id=\"id\" type=\"checkbox\" name=\"id[]\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                    echo "\">
                                    ";
                } else {
                    // line 106
                    echo "                                        <a style=\"color:red;\" href=\"/admin/question/edit/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                    echo "\">Update</a>
                                        <a style=\"color:red;\" href=\"/admin/question/delete/";
                    // line 107
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                    echo "\">Delete</a>
                                    ";
                }
                // line 109
                echo "                                </td>
                            </tr>   
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "
                    ";
        }
        // line 114
        echo "                    </tbody>

            </table>
        </form>
    </div>

";
    }

    public function getTemplateName()
    {
        return "admin_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 114,  299 => 112,  291 => 109,  286 => 107,  281 => 106,  275 => 104,  273 => 103,  268 => 101,  264 => 100,  260 => 99,  256 => 98,  252 => 97,  247 => 96,  242 => 95,  239 => 94,  235 => 92,  227 => 89,  222 => 87,  217 => 86,  211 => 84,  209 => 83,  204 => 81,  200 => 80,  196 => 79,  192 => 78,  188 => 77,  184 => 76,  181 => 75,  177 => 74,  172 => 71,  169 => 70,  166 => 69,  158 => 66,  153 => 64,  149 => 63,  144 => 62,  137 => 59,  135 => 58,  130 => 56,  126 => 55,  122 => 54,  117 => 53,  113 => 52,  110 => 51,  108 => 50,  102 => 46,  92 => 38,  89 => 37,  78 => 28,  75 => 27,  67 => 21,  65 => 20,  58 => 15,  54 => 13,  52 => 12,  47 => 11,  43 => 9,  41 => 8,  37 => 7,  31 => 3,  28 => 2,  11 => 1,);
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
    <div class=\"container\" style =\"padding-top: 10px;color: orange\" >
        <form method=\"post\"  action=\"/admin/template/add/step1\" enctype=\"multipart/form-data\">
            <div style=\"text-align:center ; display: inline\" class=\"row row-login\" >

                <h1 class=\"text-center\">List of {{titlelist}}. 
                    {% if admin == \"template\"%}
                        <button  class=\"btn btn-primary\" type=\"submit\" required> Next </button>
                    {%endif%}
                    <br>{{extraTitle}} 
                {% if survey == \"survey\"%}
                    <h3>Please Select a Customer.</h3>                    
                {%endif%}
                </h1>
            </div>
            <table id=\"example\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
                <thead >
                    <tr >
                        {% if titlelist == \"Customers\"%}
                            <th>Id</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Operations</th>
                            {%endif%}
                            {% if titlelist == \"Survey Template\"%}
                            <th>Id</th>
                            <th>Name</th>
                            <th>ID Question 1</th>
                            <th>Question 1</th>
                            <th>ID Question 2</th>
                            <th>Question 2</th>

                            <th>Operations</th>
                            {%endif%}
                            {% if titlelist == \"Questions\"%}
                            <th>Id</th>
                            <th>Question</th>
                            <th>Answer 1</th>
                            <th>Answer 2</th>
                            <th>Answer 3</th>
                            <th>Answer 4</th>
                            <th>Operations</th>
                            {%endif%}
                    </tr>
                </thead>

                <tbody>
                    {% if titlelist == \"Customers\"%}

                        {% for s in userList %}
                            <tr><td>{{s.id}}</td>
                                <td>{{s.name}}</td>
                                <td>{{s.phone}}</td>
                                <td>{{s.email}}</td>
                                <td>
                                    {%if onlyselect == 1 %}
                                        <a style=\"color:red;\" href=\"/admin/customer/select/{{s.id}}\">Select</a>

                                    {%else%}
                                        <a style=\"color:red;\" href=\"/admin/customer/edit/{{s.id}}\">Update</a>
                                        <a style=\"color:red;\" href=\"/admin/customer/delete/{{s.id}}\">Delete</a>
                                        <a style=\"color:red;\" href=\"/admin/customer/select/{{s.id}}\">Select</a>
                                    {%endif%}
                                </td>
                            </tr>   
                        {% endfor %}
                    {%endif%}
                    {% if titlelist == \"Survey Template\"%}

                    <form action=\"/action_page.php\" method=\"get\">

                        {% for s in userList %}

                            <tr><td>{{s.id}}</td>
                                <td>{{s.name}}</td>
                                <td>{{s.idquestion1}}</td>
                                <td>{{s.question1}}</td>
                                <td>{{s.idquestion2}}</td>
                                <td>{{s.question2}}</td>
                                <td>
                                    {%if onlyselect == 1 %}
                                        <a style=\"color:red;\" href=\"/admin/template/select/{{s.id}}\">Select</a>
                                    {%else%}
                                        <a style=\"color:red;\" href=\"/admin/template/delete/{{s.id}}\">Delete</a>
                                        <a style=\"color:red;\" href=\"/admin/template/select/{{s.id}}\">Select</a>
                                    {%endif%}
                                </td>
                            </tr>   
                        {% endfor %}

                    {%endif%}
                    {% if titlelist == \"Questions\"%}
                        {% for s in userList %}
                            <tr><td>{{s.id}}</td>
                                <td>{{s.question}}</td>
                                <td>{{s.ans1}}</td>
                                <td>{{s.ans2}}</td>
                                <td>{{s.ans3}}</td>
                                <td>{{s.ans4}}</td>
                                <td>
                                    {% if admin == \"template\" %}
                                        <input id=\"id\" type=\"checkbox\" name=\"id[]\" value=\"{{s.id}}\">
                                    {%else %}
                                        <a style=\"color:red;\" href=\"/admin/question/edit/{{s.id}}\">Update</a>
                                        <a style=\"color:red;\" href=\"/admin/question/delete/{{s.id}}\">Delete</a>
                                    {%endif%}
                                </td>
                            </tr>   
                        {% endfor %}

                    {%endif%}
                    </tbody>

            </table>
        </form>
    </div>

{% endblock %}", "admin_list.html.twig", "C:\\xampp\\htdocs\\ipd9-php-project\\templates\\admin_list.html.twig");
    }
}
