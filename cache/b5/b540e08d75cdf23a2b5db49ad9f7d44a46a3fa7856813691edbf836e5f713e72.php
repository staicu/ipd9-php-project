<?php

/* admin_list.html.twig */
class __TwigTemplate_422e0c1971d0fba4bbf1f3b4c7c8c8b9abe5d815d94645c777349d578f05d654 extends Twig_Template
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
        echo "    <div class=\"container\" style =\"padding-top: 100px;color: orange\" >
        <h1 class=\"text-center\">List of ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["titlelist"]) ? $context["titlelist"] : null), "html", null, true);
        echo ". ";
        echo twig_escape_filter($this->env, (isset($context["extraTitle"]) ? $context["extraTitle"] : null), "html", null, true);
        echo "</h1>
        <table id=\"example\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
            <thead >
                <tr >
                    ";
        // line 8
        if (((isset($context["titlelist"]) ? $context["titlelist"] : null) == "Customers")) {
            // line 9
            echo "                        <th>Id</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Operations</th>
                        ";
        }
        // line 15
        echo "                        ";
        if (((isset($context["titlelist"]) ? $context["titlelist"] : null) == "Survey Template")) {
            // line 16
            echo "                        <th>Id</th>
                        <th>Name</th>
                        <th>ID Question 1</th>
                        <th>Question 1</th>
                        <th>ID Question 2</th>
                        <th>Question 2</th>

                        <th>Operations</th>
                        ";
        }
        // line 25
        echo "                        ";
        if (((isset($context["titlelist"]) ? $context["titlelist"] : null) == "Questions")) {
            // line 26
            echo "                        <th>Id</th>
                        <th>Question</th>
                        <th>Answer 1</th>
                        <th>Answer 2</th>
                        <th>Operations</th>
                        ";
        }
        // line 32
        echo "                </tr>
            </thead>

            <tbody>
                ";
        // line 36
        if (((isset($context["titlelist"]) ? $context["titlelist"] : null) == "Customers")) {
            // line 37
            echo "
                    ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["userList"]) ? $context["userList"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 39
                echo "                        <tr><td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "name", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "phone", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "email", array()), "html", null, true);
                echo "</td>
                            <td><a style=\"color:red;\" href=\"/admin/customer/edit/";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                echo "\">Update</a>
                                <a style=\"color:red;\" href=\"/admin/customer/delete/";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                echo "\">Delete</a>
                            </td>
                        </tr>   
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                ";
        }
        // line 49
        echo "                ";
        if (((isset($context["titlelist"]) ? $context["titlelist"] : null) == "Survey Template")) {
            // line 50
            echo "
                <form action=\"/action_page.php\" method=\"get\">

                    ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["userList"]) ? $context["userList"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 54
                echo "
                        <tr><td>";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "name", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "idquestion1", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "question1", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "idquestion2", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "question2", array()), "html", null, true);
                echo "</td>
                            <td>
                                <a style=\"color:red;\" href=\"/admin/template/delete/";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                echo "\">Delete</a>
                            </td>
                        </tr>   
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "
                ";
        }
        // line 68
        echo "                ";
        if (((isset($context["titlelist"]) ? $context["titlelist"] : null) == "Questions")) {
            // line 69
            echo "                    <form action=\"/admin/template/add/step1\" method=\"post\" >
                        ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["userList"]) ? $context["userList"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 71
                echo "                            <tr><td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "question", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "ans1", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "ans2", array()), "html", null, true);
                echo "</td>
                                <td>
                                    ";
                // line 76
                if (((isset($context["admin"]) ? $context["admin"] : null) == "template")) {
                    // line 77
                    echo "                                        <input id=\"id\" type=\"checkbox\" name=\"id[]\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                    echo "\">
                                    ";
                } else {
                    // line 79
                    echo "                                        <a style=\"color:red;\" href=\"/admin/question/edit/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                    echo "\">Update</a>
                                        <a style=\"color:red;\" href=\"/admin/question/delete/";
                    // line 80
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                    echo "\">Delete</a>
                                    ";
                }
                // line 82
                echo "                                </td>
                            </tr>   
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "                        ";
            if (((isset($context["admin"]) ? $context["admin"] : null) == "template")) {
                // line 86
                echo "                            <input type=\"submit\" value=\"Next\">
                        ";
            }
            // line 88
            echo "                    </form>
                ";
        }
        // line 90
        echo "                </tbody>

        </table>
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
        return array (  246 => 90,  242 => 88,  238 => 86,  235 => 85,  227 => 82,  222 => 80,  217 => 79,  211 => 77,  209 => 76,  204 => 74,  200 => 73,  196 => 72,  191 => 71,  187 => 70,  184 => 69,  181 => 68,  177 => 66,  167 => 62,  162 => 60,  158 => 59,  154 => 58,  150 => 57,  146 => 56,  142 => 55,  139 => 54,  135 => 53,  130 => 50,  127 => 49,  124 => 48,  114 => 44,  110 => 43,  106 => 42,  102 => 41,  98 => 40,  93 => 39,  89 => 38,  86 => 37,  84 => 36,  78 => 32,  70 => 26,  67 => 25,  56 => 16,  53 => 15,  45 => 9,  43 => 8,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
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
    <div class=\"container\" style =\"padding-top: 100px;color: orange\" >
        <h1 class=\"text-center\">List of {{titlelist}}. {{extraTitle}}</h1>
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
                            <td><a style=\"color:red;\" href=\"/admin/customer/edit/{{s.id}}\">Update</a>
                                <a style=\"color:red;\" href=\"/admin/customer/delete/{{s.id}}\">Delete</a>
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
                                <a style=\"color:red;\" href=\"/admin/template/delete/{{s.id}}\">Delete</a>
                            </td>
                        </tr>   
                    {% endfor %}

                {%endif%}
                {% if titlelist == \"Questions\"%}
                    <form action=\"/admin/template/add/step1\" method=\"post\" >
                        {% for s in userList %}
                            <tr><td>{{s.id}}</td>
                                <td>{{s.question}}</td>
                                <td>{{s.ans1}}</td>
                                <td>{{s.ans2}}</td>
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
                        {% if admin == \"template\"%}
                            <input type=\"submit\" value=\"Next\">
                        {%endif%}
                    </form>
                {%endif%}
                </tbody>

        </table>
    </div>

{% endblock %}", "admin_list.html.twig", "C:\\xampp\\htdocs\\ipd9-php-project\\templates\\admin_list.html.twig");
    }
}
