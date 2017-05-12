<?php

/* master.html.twig */
class __TwigTemplate_0fda6d7581a451a875b8594079722868e8f16e0c3743e00ccac7649c3b2d012e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'headExtra' => array($this, 'block_headExtra'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <link rel=\"stylesheet\" href=\"/styles.css\"/>
        <meta charset=\"UTF-8\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('headExtra', $context, $blocks);
        // line 8
        echo "    </head>
    <body>
        <div id=\"centerContent\">
            <div id=\"header\">
                ";
        // line 12
        if ((isset($context["todouser"]) ? $context["todouser"] : null)) {
            // line 13
            echo "                    Welcome ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todouser"]) ? $context["todouser"] : null), "name", array()), "html", null, true);
            echo ", you may <a href=\"/logout\">logout</a>.
                ";
        } else {
            // line 15
            echo "                    You may <a href=\"/login\">login</a> or <a href=\"/register\">register</a>.
                ";
        }
        // line 17
        echo "            </div>
            <div id=\"content\">
            ";
        // line 19
        $this->displayBlock('content', $context, $blocks);
        // line 20
        echo "            </div>
            <div id=\"footer\">            
       &copy; Copyright 2011 by <a href=\"http://domain.invalid/\">you</a>.            
            </div>
        </div>
    </body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
    }

    // line 7
    public function block_headExtra($context, array $blocks = array())
    {
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "master.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 19,  74 => 7,  69 => 6,  59 => 20,  57 => 19,  53 => 17,  49 => 15,  43 => 13,  41 => 12,  35 => 8,  33 => 7,  29 => 6,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <link rel=\"stylesheet\" href=\"/styles.css\"/>
        <meta charset=\"UTF-8\">
        <title>{% block title %}{% endblock %}</title>
        {% block headExtra %}{% endblock %}
    </head>
    <body>
        <div id=\"centerContent\">
            <div id=\"header\">
                {% if todouser %}
                    Welcome {{ todouser.name }}, you may <a href=\"/logout\">logout</a>.
                {% else %}
                    You may <a href=\"/login\">login</a> or <a href=\"/register\">register</a>.
                {% endif %}
            </div>
            <div id=\"content\">
            {% block content %}{% endblock %}
            </div>
            <div id=\"footer\">            
       &copy; Copyright 2011 by <a href=\"http://domain.invalid/\">you</a>.            
            </div>
        </div>
    </body>
</html>", "master.html.twig", "C:\\xampp\\htdocs\\ipd9\\slimtodo\\templates\\master.html.twig");
    }
}
