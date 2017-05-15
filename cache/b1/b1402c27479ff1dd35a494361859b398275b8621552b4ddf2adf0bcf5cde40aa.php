<?php

/* todolist.html.twig */
class __TwigTemplate_4dada630f3be645b204ec39cf2e3c02cdb6cc6f753b0267cd39817c0d1303de1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "todolist.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "TO do List";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
    <table>
        <tr>
            <td>Task Id</td>
            <td>ownerId</td>
            <td>task</td>
            <td>dueDate</td>
            <td>isDone</td>
        </tr>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["todoList"]) ? $context["todoList"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 16
            echo "            <tr>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "ownerId", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "task", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "dueDate", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "isDone", array()), "html", null, true);
            echo "</td>
                <td> <form method=\"post\">
                        <input type=\"submit\" value=\"Delete";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "\">
                    </form> </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    </table>
    <a href=\"/\">Click to continue to the website</a>.</p>
<a href=\"/add\">Click to Add to do list</a>.</p>


";
    }

    public function getTemplateName()
    {
        return "todolist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 27,  77 => 23,  72 => 21,  68 => 20,  64 => 19,  60 => 18,  56 => 17,  53 => 16,  49 => 15,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"master.html.twig\" %}

{% block title %}TO do List{% endblock %}

{% block content %}

    <table>
        <tr>
            <td>Task Id</td>
            <td>ownerId</td>
            <td>task</td>
            <td>dueDate</td>
            <td>isDone</td>
        </tr>
        {% for item in todoList %}
            <tr>
                <td>{{ item.id }}</td>
                <td>{{ item.ownerId }}</td>
                <td>{{ item.task }}</td>
                <td>{{ item.dueDate }}</td>
                <td>{{ item.isDone }}</td>
                <td> <form method=\"post\">
                        <input type=\"submit\" value=\"Delete{{ item.id }}\">
                    </form> </td>
            </tr>
        {% endfor %}
    </table>
    <a href=\"/\">Click to continue to the website</a>.</p>
<a href=\"/add\">Click to Add to do list</a>.</p>


{% endblock content %}
", "todolist.html.twig", "C:\\xampp\\htdocs\\ipd9-php-project\\templates\\todolist.html.twig");
    }
}
