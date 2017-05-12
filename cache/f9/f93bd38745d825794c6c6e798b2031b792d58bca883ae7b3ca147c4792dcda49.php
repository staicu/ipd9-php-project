<?php

/* register.html.twig */
class __TwigTemplate_2f05e3b8cb6fc30ea8434f998a29f2c1492cee6af1c9f276ec8164557a5f7cfe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "register.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'headExtra' => array($this, 'block_headExtra'),
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
        echo "User registration";
    }

    // line 5
    public function block_headExtra($context, array $blocks = array())
    {
        // line 6
        echo "
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
<script>
    \$(document).ready(function() {
        \$(\"#emailInUse\").hide();
        \$(\"input[name=email]\").keyup(function() {
            var email = \$(this).val();
            //console.log(\"Keyup: \" + email);
            if (email === \"\") {
                \$(\"#emailInUse\").hide();
                return;
            }
            \$.get(\"/ajax/emailused/\" + email, function(result) {
                result = eval(result);
                if (result) {
                    \$(\"#emailInUse\").show();
                } else {
                    \$(\"#emailInUse\").hide();
                }
            });
        });
    });
</script>

";
    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
        // line 34
        echo "    
";
        // line 35
        if ((isset($context["errorList"]) ? $context["errorList"] : null)) {
            // line 36
            echo "    <ul class=\"errorList\">
        ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errorList"]) ? $context["errorList"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 38
                echo "            <li>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "    </ul>
";
        }
        // line 42
        echo "
<form method=\"post\">
    Email: <input type=\"email\" name=\"email\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "email", array()), "html", null, true);
        echo "\">
        <span id=\"emailInUse\">Email already registered</span><br>
    Password <input type=\"password\" name=\"pass1\"><br>
    Password (repeated) <input type=\"password\" name=\"pass2\"><br>
    <input type=\"submit\" value=\"Register\">
</form>

";
    }

    public function getTemplateName()
    {
        return "register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 44,  95 => 42,  91 => 40,  82 => 38,  78 => 37,  75 => 36,  73 => 35,  70 => 34,  67 => 33,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
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

{% block title %}User registration{% endblock %}

{% block headExtra %}

<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
<script>
    \$(document).ready(function() {
        \$(\"#emailInUse\").hide();
        \$(\"input[name=email]\").keyup(function() {
            var email = \$(this).val();
            //console.log(\"Keyup: \" + email);
            if (email === \"\") {
                \$(\"#emailInUse\").hide();
                return;
            }
            \$.get(\"/ajax/emailused/\" + email, function(result) {
                result = eval(result);
                if (result) {
                    \$(\"#emailInUse\").show();
                } else {
                    \$(\"#emailInUse\").hide();
                }
            });
        });
    });
</script>

{% endblock headExtra %}


{% block content %}
    
{% if errorList %}
    <ul class=\"errorList\">
        {% for error in errorList %}
            <li>{{ error }}</li>
        {% endfor %}
    </ul>
{% endif %}

<form method=\"post\">
    Email: <input type=\"email\" name=\"email\" value=\"{{v.email}}\">
        <span id=\"emailInUse\">Email already registered</span><br>
    Password <input type=\"password\" name=\"pass1\"><br>
    Password (repeated) <input type=\"password\" name=\"pass2\"><br>
    <input type=\"submit\" value=\"Register\">
</form>

{% endblock content %}
        
", "register.html.twig", "C:\\xampp\\htdocs\\gitphp\\slimtodo\\templates\\register.html.twig");
    }
}
