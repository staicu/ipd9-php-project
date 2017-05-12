<?php

/* add.html.twig */
class __TwigTemplate_fbdd759d6896a8b6c3b1d6c460bea5ae3c94507fa075c18a36dab86c38455a5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "add.html.twig", 1);
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
        echo "Add todo item";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    
";
        // line 7
        if ((isset($context["errorList"]) ? $context["errorList"] : null)) {
            // line 8
            echo "    <ul class=\"errorList\">
        ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errorList"]) ? $context["errorList"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 10
                echo "            <li>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "    </ul>
";
        }
        // line 14
        echo "
<form method=\"post\">
    Task: <input type=\"text\" name=\"task\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "task", array()), "html", null, true);
        echo "\"><br>
    Due date <input type=\"date\" name=\"dueDate\"><br>
    Is done? <input type=\"checkbox\" name=\"isDone\" value=\"checked\" ><br>
    <input type=\"submit\" value=\"Add task\">
</form>

";
    }

    public function getTemplateName()
    {
        return "add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 16,  63 => 14,  59 => 12,  50 => 10,  46 => 9,  43 => 8,  41 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
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

{% block title %}Add todo item{% endblock %}

{% block content %}
    
{% if errorList %}
    <ul class=\"errorList\">
        {% for error in errorList %}
            <li>{{ error }}</li>
        {% endfor %}
    </ul>
{% endif %}

<form method=\"post\">
    Task: <input type=\"text\" name=\"task\" value=\"{{v.task}}\"><br>
    Due date <input type=\"date\" name=\"dueDate\"><br>
    Is done? <input type=\"checkbox\" name=\"isDone\" value=\"checked\" ><br>
    <input type=\"submit\" value=\"Add task\">
</form>

{% endblock content %}
        
", "add.html.twig", "C:\\xampp\\htdocs\\ipd9\\slimtodo\\templates\\add.html.twig");
    }
}
