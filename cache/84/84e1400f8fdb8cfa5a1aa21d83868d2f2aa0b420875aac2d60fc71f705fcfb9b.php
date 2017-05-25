<?php

/* list_template.html.twig */
class __TwigTemplate_b8bab4863ecc46aa62369e12aed1d08d39038d7252d1c8c899e11b02ac87d0ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "list_template.html.twig", 1);
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
        echo "     <div class=\"row row-login\" >
        <div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1\">
            <h3 class=\"text-center\">Template List</h3>
           
        </div>
    </div>
    <div class=\"container\" style =\"padding-top: 100px;color: orange\" >       
        <table id=\"example\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
            <thead >
                <tr >
                    <th>name</th>
                    <th>id</th>
                    <th>Question</th>
                    <th>Answer 1</th>
                    <th>Answer 2</th>
                    <th>Answer 3</th>
                    <th>Answer 4</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["templatelist"]) ? $context["templatelist"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 24
            echo "                    <tr><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "name", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "idtemplate", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "question", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "ans1", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "ans2", array()), "html", null, true);
            echo "</td>                      
                         <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "ans3", array()), "html", null, true);
            echo "</td>
                         <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "ans4", array()), "html", null, true);
            echo "</td>
                    </tr>   
";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : null), "id", array()), "html", null, true);
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "            </tbody>
        </table>
    </div>

";
    }

    public function getTemplateName()
    {
        return "list_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 34,  87 => 32,  82 => 30,  78 => 29,  74 => 28,  70 => 27,  66 => 26,  62 => 25,  57 => 24,  53 => 23,  31 => 3,  28 => 2,  11 => 1,);
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
            <h3 class=\"text-center\">Template List</h3>
           
        </div>
    </div>
    <div class=\"container\" style =\"padding-top: 100px;color: orange\" >       
        <table id=\"example\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
            <thead >
                <tr >
                    <th>name</th>
                    <th>id</th>
                    <th>Question</th>
                    <th>Answer 1</th>
                    <th>Answer 2</th>
                    <th>Answer 3</th>
                    <th>Answer 4</th>
                </tr>
            </thead>
            <tbody>
                {% for t in templatelist %}
                    <tr><td>{{t.name}}</td>
                        <td>{{t.idtemplate}}</td>
                        <td>{{t.question}}</td>
                        <td>{{t.ans1}}</td>
                        <td>{{t.ans2}}</td>                      
                         <td>{{t.ans3}}</td>
                         <td>{{t.ans4}}</td>
                    </tr>   
{{template.id}}
                {% endfor %}
            </tbody>
        </table>
    </div>

{% endblock %}", "list_template.html.twig", "C:\\xampp\\htdocs\\ipd9-php-project\\templates\\list_template.html.twig");
    }
}
