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
                        <th>Operations</th>
                        ";
        }
        // line 14
        echo "                        ";
        if (((isset($context["titlelist"]) ? $context["titlelist"] : null) == "Suveys")) {
            // line 15
            echo "                        <th>Id</th>
                        <th>Name</th>
                        <th>Question 1</th>
                        <th>Question 2</th>
                        <th>Operations</th>
                        ";
        }
        // line 21
        echo "                        ";
        if (((isset($context["titlelist"]) ? $context["titlelist"] : null) == "Questions")) {
            // line 22
            echo "                        <th>Id</th>
                        <th>Question</th>
                        <th>Answer 1</th>
                        <th>Answer 2</th>
                        <th>Operations</th>
                        ";
        }
        // line 28
        echo "                </tr>
            </thead>
            <tbody>
                ";
        // line 31
        if (((isset($context["titlelist"]) ? $context["titlelist"] : null) == "Customers")) {
            // line 32
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["userList"]) ? $context["userList"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 33
                echo "                        <tr><td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "name", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "phone", array()), "html", null, true);
                echo "</td>
                            <td><a style=\"color:red;\" href=\"/admin/customer/edit/";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                echo "\">Update</a>
                                <a style=\"color:red;\" href=\"/admin/customer/delete/";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                echo "\">Delete</a>
                            </td>
                        </tr>   
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "                ";
        }
        // line 42
        echo "                ";
        if (((isset($context["titlelist"]) ? $context["titlelist"] : null) == "Suveys")) {
            // line 43
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["userList"]) ? $context["userList"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 44
                echo "                        <tr><td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "name", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "idquestion1", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "idquestion2", array()), "html", null, true);
                echo "</td>
                            <td><a style=\"color:red;\" href=\"/admin/survey/edit/";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                echo "\">Update</a>
                                <a style=\"color:red;\" href=\"/admin/survey/delete/";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                echo "\">Delete</a>
                            </td>
                        </tr>   
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                ";
        }
        // line 54
        echo "                ";
        if (((isset($context["titlelist"]) ? $context["titlelist"] : null) == "Questions")) {
            // line 55
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["userList"]) ? $context["userList"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                // line 56
                echo "                        <tr><td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "question", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "ans1", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "ans2", array()), "html", null, true);
                echo "</td>
                            <td><a style=\"color:red;\" href=\"/admin/question/edit/";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                echo "\">Update</a>
                                <a style=\"color:red;\" href=\"/admin/question/delete/";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
                echo "\">Delete</a>
                            </td>
                        </tr>   
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "                ";
        }
        // line 66
        echo "            </tbody>
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
        return array (  198 => 66,  195 => 65,  185 => 61,  181 => 60,  177 => 59,  173 => 58,  169 => 57,  164 => 56,  159 => 55,  156 => 54,  153 => 53,  143 => 49,  139 => 48,  135 => 47,  131 => 46,  127 => 45,  122 => 44,  117 => 43,  114 => 42,  111 => 41,  101 => 37,  97 => 36,  93 => 35,  89 => 34,  84 => 33,  79 => 32,  77 => 31,  72 => 28,  64 => 22,  61 => 21,  53 => 15,  50 => 14,  43 => 9,  41 => 8,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
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
        <h1 class=\"text-center\">List of {{titlelist}}</h1>
        <table id=\"example\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
            <thead >
                <tr >
                    {% if titlelist == \"Customers\"%}
                        <th>Id</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Operations</th>
                        {%endif%}
                        {% if titlelist == \"Suveys\"%}
                        <th>Id</th>
                        <th>Name</th>
                        <th>Question 1</th>
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
                            <td><a style=\"color:red;\" href=\"/admin/customer/edit/{{s.id}}\">Update</a>
                                <a style=\"color:red;\" href=\"/admin/customer/delete/{{s.id}}\">Delete</a>
                            </td>
                        </tr>   
                    {% endfor %}
                {%endif%}
                {% if titlelist == \"Suveys\"%}
                    {% for s in userList %}
                        <tr><td>{{s.id}}</td>
                            <td>{{s.name}}</td>
                            <td>{{s.idquestion1}}</td>
                            <td>{{s.idquestion2}}</td>
                            <td><a style=\"color:red;\" href=\"/admin/survey/edit/{{s.id}}\">Update</a>
                                <a style=\"color:red;\" href=\"/admin/survey/delete/{{s.id}}\">Delete</a>
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
                            <td><a style=\"color:red;\" href=\"/admin/question/edit/{{s.id}}\">Update</a>
                                <a style=\"color:red;\" href=\"/admin/question/delete/{{s.id}}\">Delete</a>
                            </td>
                        </tr>   
                    {% endfor %}
                {%endif%}
            </tbody>
        </table>
    </div>
{% endblock %}", "admin_list.html.twig", "C:\\xampp\\htdocs\\ipd9-php-project\\templates\\admin_list.html.twig");
    }
}
