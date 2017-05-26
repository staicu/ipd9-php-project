<?php

/* list_onlytemplate.html.twig */
class __TwigTemplate_44baff0c29152804e9382172cb83695a0e24aabaa0fda838375a15418e1d3038 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "list_onlytemplate.html.twig", 1);
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
        echo "    <div class=\"row row-login\" >
        <div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1\">
            <h3 class=\"text-center\" style =\"color: orange\">Template List</h3>

        </div>
    </div>
    <div class=\"container\" style =\"padding-top: 50px;color: orange\" >       
        <table id=\"example\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
            <thead >
                <tr >
                    <th>id</th>
                    <th>name</th>
                    <td> Operations </td>
                </tr>
            </thead>
            <tbody>
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["templatelist"]) ? $context["templatelist"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 20
            echo "                    <tr>
                        <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "id", array()), "html", null, true);
            echo "</td>
                        <td> ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "name", array()), "html", null, true);
            echo "</td>
                        <td>
                            <a style=\"color:red;\" href=\"/admin/template/onlytemplatelist/delete/";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "id", array()), "html", null, true);
            echo "\">Delete</a>
                            <a style=\"color:red;\" href=\"/admin/template/onlytemplatelist/select/";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "id", array()), "html", null, true);
            echo "\">Select</a>
                        </td>
                    </tr>    
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "            </tbody>
        </table>
    </div>

";
    }

    public function getTemplateName()
    {
        return "list_onlytemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 29,  69 => 25,  65 => 24,  60 => 22,  56 => 21,  53 => 20,  49 => 19,  31 => 3,  28 => 2,  11 => 1,);
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
    <div class=\"row row-login\" >
        <div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1\">
            <h3 class=\"text-center\" style =\"color: orange\">Template List</h3>

        </div>
    </div>
    <div class=\"container\" style =\"padding-top: 50px;color: orange\" >       
        <table id=\"example\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
            <thead >
                <tr >
                    <th>id</th>
                    <th>name</th>
                    <td> Operations </td>
                </tr>
            </thead>
            <tbody>
                {% for t in templatelist %}
                    <tr>
                        <td>{{t.id}}</td>
                        <td> {{t.name}}</td>
                        <td>
                            <a style=\"color:red;\" href=\"/admin/template/onlytemplatelist/delete/{{t.id}}\">Delete</a>
                            <a style=\"color:red;\" href=\"/admin/template/onlytemplatelist/select/{{t.id}}\">Select</a>
                        </td>
                    </tr>    
                {% endfor %}
            </tbody>
        </table>
    </div>

{% endblock %}", "list_onlytemplate.html.twig", "C:\\xampp\\htdocs\\ipd9-php-project\\templates\\list_onlytemplate.html.twig");
    }
}
