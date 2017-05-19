<?php

/* admin_customer_list.html.twig */
class __TwigTemplate_7765fa961c1deb03b2d72ae936897118cd6b861821386a233bd7f4616f3b0eec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "admin_customer_list.html.twig", 1);
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
        <table id=\"example\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
            <thead >
                <tr >
                    <th>Id</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Operations</th>
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
                        <td><a href=\"/admin/customer/edit/";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
            echo "\">Update</a>
                    <a href=\"/admin/customer/delete/";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "id", array()), "html", null, true);
            echo "\">Delete</a>
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
        return "admin_customer_list.html.twig";
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
    <div class=\"container\" style =\"padding-top: 100px;color: orange\" >
        <table id=\"example\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
            <thead >
                <tr >
                    <th>Id</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Operations</th>
                </tr>
            </thead>
            <tbody>
               
                {% for s in userList %}
                    <tr><td>{{s.id}}</td>
                        <td>{{s.name}}</td>
                        <td>{{s.phone}}</td>
                        <td><a href=\"/admin/customer/edit/{{s.id}}\">Update</a>
                    <a href=\"/admin/customer/delete/{{s.id}}\">Delete</a>
                </td>
                    </tr>   
                {% endfor %}
            </tbody>
        </table>
    </div>
{% endblock %}", "admin_customer_list.html.twig", "C:\\xampp\\htdocs\\ipd9-php-project\\templates\\admin_customer_list.html.twig");
    }
}
