<?php

/* add.html.twig */
class __TwigTemplate_b3a177579cb6a7e6ae05871394ac77334b6695dda7665aa389a8d1fd9dc7cc5e extends Twig_Template
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
    <h1>Add a to do task</h1>
    
    <form method=\"post\">
    ownerId: <input  type=\"name\" name=\"ownerId\" ><br>
    task: <input type=\"name\" name=\"task\"><br>
    dueDate:  <input type=\"date\" name=\"dueDate\"><br>
    isDone: <input type=\"date\" name=\"isDone\"><br>
    
    <input type=\"submit\" value=\"add\">
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
        return array (  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
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
    
    <h1>Add a to do task</h1>
    
    <form method=\"post\">
    ownerId: <input  type=\"name\" name=\"ownerId\" ><br>
    task: <input type=\"name\" name=\"task\"><br>
    dueDate:  <input type=\"date\" name=\"dueDate\"><br>
    isDone: <input type=\"date\" name=\"isDone\"><br>
    
    <input type=\"submit\" value=\"add\">
</form>
{% endblock content %}
        
", "add.html.twig", "C:\\xampp\\htdocs\\gitphp\\slimtodo\\templates\\add.html.twig");
    }
}
