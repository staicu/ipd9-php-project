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
                        <th>Answer 3</th>
                        <th>Answer 4</th>
                        <th>Operations</th>
                        ";
        }
        // line 34
        echo "                </tr>
            </thead>

            <tbody>
                ";
        // line 38
        if (((isset($context["titlelist"]) ? $context["titlelist"] : null) == "Customers")) {
            // line 39
            echo "
                    ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["userList"]) ? $context["userList"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 41
                echo "                        <tr><td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "name", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "phone", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "email", array()), "html", null, true);
                echo "</td>
                            <td>
                                ";
                // line 46
                if (((isset($context["onlyselect"]) ? $context["onlyselect"] : null) == 1)) {
                    // line 47
                    echo "                                    <a style=\"color:red;\" href=\"/admin/customer/select/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                    echo "\">Select</a>

                                ";
                } else {
                    // line 50
                    echo "                                    <a style=\"color:red;\" href=\"/admin/customer/edit/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                    echo "\">Update</a>
                                    <a style=\"color:red;\" href=\"/admin/customer/delete/";
                    // line 51
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                    echo "\">Delete</a>
                                    <a style=\"color:red;\" href=\"/admin/customer/select/";
                    // line 52
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                    echo "\">Select</a>
                                ";
                }
                // line 54
                echo "                            </td>
                        </tr>   
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "                ";
        }
        // line 58
        echo "                ";
        if (((isset($context["titlelist"]) ? $context["titlelist"] : null) == "Survey Template")) {
            // line 59
            echo "
                <form action=\"/action_page.php\" method=\"get\">

                    ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["userList"]) ? $context["userList"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 63
                echo "
                        <tr><td>";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "name", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "idquestion1", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "question1", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "idquestion2", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "question2", array()), "html", null, true);
                echo "</td>
                            <td>
                                ";
                // line 71
                if (((isset($context["onlyselect"]) ? $context["onlyselect"] : null) == 1)) {
                    // line 72
                    echo "                                    <a style=\"color:red;\" href=\"/admin/template/select/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                    echo "\">Select</a>
                                ";
                } else {
                    // line 74
                    echo "                                    <a style=\"color:red;\" href=\"/admin/template/delete/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                    echo "\">Delete</a>
                                    <a style=\"color:red;\" href=\"/admin/template/select/";
                    // line 75
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                    echo "\">Select</a>
                                ";
                }
                // line 77
                echo "                            </td>
                        </tr>   
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "
                ";
        }
        // line 82
        echo "                ";
        if (((isset($context["titlelist"]) ? $context["titlelist"] : null) == "Questions")) {
            // line 83
            echo "                    <form action=\"/admin/template/add/step1\" method=\"post\" >
                        ";
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["userList"]) ? $context["userList"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 85
                echo "                            <tr><td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "question", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "ans1", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 88
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "ans2", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 89
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "ans3", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 90
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "ans4", array()), "html", null, true);
                echo "</td>
                                <td>
                                    ";
                // line 92
                if (((isset($context["admin"]) ? $context["admin"] : null) == "template")) {
                    // line 93
                    echo "                                        <input id=\"id\" type=\"checkbox\" name=\"id[]\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                    echo "\">
                                    ";
                } else {
                    // line 95
                    echo "                                        <a style=\"color:red;\" href=\"/admin/question/edit/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                    echo "\">Update</a>
                                        <a style=\"color:red;\" href=\"/admin/question/delete/";
                    // line 96
                    echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                    echo "\">Delete</a>
                                    ";
                }
                // line 98
                echo "                                </td>
                            </tr>   
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "                        ";
            if (((isset($context["admin"]) ? $context["admin"] : null) == "template")) {
                // line 102
                echo "                            <input type=\"submit\" value=\"Next\">
                        ";
            }
            // line 104
            echo "                    </form>
                ";
        }
        // line 106
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
        return array (  290 => 106,  286 => 104,  282 => 102,  279 => 101,  271 => 98,  266 => 96,  261 => 95,  255 => 93,  253 => 92,  248 => 90,  244 => 89,  240 => 88,  236 => 87,  232 => 86,  227 => 85,  223 => 84,  220 => 83,  217 => 82,  213 => 80,  205 => 77,  200 => 75,  195 => 74,  189 => 72,  187 => 71,  182 => 69,  178 => 68,  174 => 67,  170 => 66,  166 => 65,  162 => 64,  159 => 63,  155 => 62,  150 => 59,  147 => 58,  144 => 57,  136 => 54,  131 => 52,  127 => 51,  122 => 50,  115 => 47,  113 => 46,  108 => 44,  104 => 43,  100 => 42,  95 => 41,  91 => 40,  88 => 39,  86 => 38,  80 => 34,  70 => 26,  67 => 25,  56 => 16,  53 => 15,  45 => 9,  43 => 8,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
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
                    <form action=\"/admin/template/add/step1\" method=\"post\" >
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
