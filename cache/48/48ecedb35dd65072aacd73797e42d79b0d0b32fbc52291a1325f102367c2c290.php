<?php

/* display_template.html.twig */
class __TwigTemplate_03d5a290f86912239d6d124107e201b48bccdda356f4c02584edc7521d862d44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "display_template.html.twig", 1);
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
            <h3 class=\"text-center\">Template Created</h3>
            <div class=\"well\">
                
                <form method=\"post\"  action=\"/admin/template/add/step2\" enctype=\"multipart/form-data\"> 
                    <div class=\"form-group\">
                        <label class=\"control-label\">Template Name</label>
                        <input class=\"form-control\" type=\"text\" name=\"templatename\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["templatename"]) ? $context["templatename"] : null), "html", null, true);
        echo "\" required readonly>
                    </div>
                    <button class=\"btn btn-success btn-block\" type=\"submit\"> Template List </button>
                </form>
            </div>
        </div>
    </div>
    <div class=\"container\" style =\"padding-top: 100px;color: orange\" >       
        <table id=\"example\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
            <thead >
                <tr >
                    <th>Id</th>
                    <th>Question</th>
                    <th>Answer 1</th>
                    <th>Answer 2</th>
                    <th>Answer 3</th>
                    <th>Answer 4</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["selectedQuestions"]) ? $context["selectedQuestions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 32
            echo "                    <tr><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "question", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "ans1", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "ans2", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "ans3", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "ans4", array()), "html", null, true);
            echo "</td>
                    </tr>   
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "            </tbody>
        </table>
    </div>

";
    }

    public function getTemplateName()
    {
        return "display_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 40,  89 => 37,  85 => 36,  81 => 35,  77 => 34,  73 => 33,  68 => 32,  64 => 31,  41 => 11,  31 => 3,  28 => 2,  11 => 1,);
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
            <h3 class=\"text-center\">Template Created</h3>
            <div class=\"well\">
                
                <form method=\"post\"  action=\"/admin/template/add/step2\" enctype=\"multipart/form-data\"> 
                    <div class=\"form-group\">
                        <label class=\"control-label\">Template Name</label>
                        <input class=\"form-control\" type=\"text\" name=\"templatename\" value=\"{{templatename}}\" required readonly>
                    </div>
                    <button class=\"btn btn-success btn-block\" type=\"submit\"> Template List </button>
                </form>
            </div>
        </div>
    </div>
    <div class=\"container\" style =\"padding-top: 100px;color: orange\" >       
        <table id=\"example\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
            <thead >
                <tr >
                    <th>Id</th>
                    <th>Question</th>
                    <th>Answer 1</th>
                    <th>Answer 2</th>
                    <th>Answer 3</th>
                    <th>Answer 4</th>
                </tr>
            </thead>
            <tbody>
                {% for s in selectedQuestions %}
                    <tr><td>{{s.id}}</td>
                        <td>{{s.question}}</td>
                        <td>{{s.ans1}}</td>
                        <td>{{s.ans2}}</td>
                        <td>{{s.ans3}}</td>
                        <td>{{s.ans4}}</td>
                    </tr>   
                {% endfor %}
            </tbody>
        </table>
    </div>

{% endblock %}", "display_template.html.twig", "C:\\xampp\\htdocs\\phpproject\\templates\\display_template.html.twig");
    }
}
