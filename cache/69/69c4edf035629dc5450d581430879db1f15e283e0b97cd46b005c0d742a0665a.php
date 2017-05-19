<?php

/* surveylist.html.twig */
class __TwigTemplate_c1d3e5eed41a36da098e53fceb45b47c4052b1df390bb925548b94aba63f4615 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "surveylist.html.twig", 1);
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
        echo "    <div class=\"container\">
        <table id=\"example\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Phone</th>
                    
                </tr>
            </thead>
            <tbody>
               
                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["userList"]) ? $context["userList"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 16
            echo "                    <tr><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "name", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "phone", array()), "html", null, true);
            echo "</td>
                        <td><a href=\"/admin/product/edit/";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
            echo "\">edit</a>
                    <a href=\"/admin/product/delete/";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
            echo "\">delete</a>
                </td>
                    </tr>   
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "            </tbody>
        </table>
    </div>
";
    }

    public function getTemplateName()
    {
        return "surveylist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 24,  66 => 20,  62 => 19,  58 => 18,  54 => 17,  49 => 16,  45 => 15,  31 => 3,  28 => 2,  11 => 1,);
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
    <div class=\"container\">
        <table id=\"example\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Phone</th>
                    
                </tr>
            </thead>
            <tbody>
               
                {% for s in userList %}
                    <tr><td>{{s.id}}</td>
                        <td>{{s.name}}</td>
                        <td>{{s.phone}}</td>
                        <td><a href=\"/admin/product/edit/{{s.id}}\">edit</a>
                    <a href=\"/admin/product/delete/{{s.id}}\">delete</a>
                </td>
                    </tr>   
                {% endfor %}
            </tbody>
        </table>
    </div>
{% endblock %}", "surveylist.html.twig", "C:\\xampp\\htdocs\\ipd9-php-project\\templates\\surveylist.html.twig");
    }
}
