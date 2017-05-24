<?php

/* menu.html.twig */
class __TwigTemplate_e6db0ccfecdd602111bb5af4270423812a8d4ce94dea5bf5b5aa7e998fec26ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("index.html.twig", "menu.html.twig", 2);
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

    // line 3
    public function block_container($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\" style=\"padding-top: 100px\">
        <div class=\"panel-group\" role=\"tablist\" aria-multiselectable=\"true\" id=\"accordion-1\">


            <div class=\"panel panel-default\">
                <div class=\"panel-heading\" role=\"tab\">
                    <h4 class=\"panel-title\"><a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion-1\" aria-expanded=\"false\" href=\"#accordion-1 .item-1\">Start a Survey</a></h4></div>

                <div class=\"panel-collapse collapse item-1\" role=\"tabpanel\">
                    <div class=\"panel-body\"><span><a href=\"/admin/start/survey/addcustomer\">Start Survey</a>.</span></div>
                    <div class=\"panel-body\"><span><a href=\"/admin/template/add\">Create a Template</a>.</span></div>
                    <div class=\"panel-body\"><span><a href=\"/admin/template/list/select\">Select a Template from List</a>.</span></div>
                    <div class=\"panel-body\"><span><a href=\"/admin/customer/add\">Register a Customer</a>.</span></div>
                    <div class=\"panel-body\"><span><a href=\"/admin/customer/list\">Select a Customer from List</a>.</span></div>

                </div>
            </div>

            <div class=\"panel panel-default\">
                <div class=\"panel-heading\" role=\"tab\">
                    <h4 class=\"panel-title\"><a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion-1\" aria-expanded=\"false\" href=\"#accordion-1 .item-2\">Customer</a></h4></div>
                <div class=\"panel-collapse collapse item-2\" role=\"tabpanel\">


                    <div class=\"panel-body\"><span><a href=\"/admin/customer/add\">Register a Customer</a>.</span></div>
                    <div class=\"panel-body\"><span><a href=\"/admin/customer/list\">List of Customers</a>.</span></div>


                </div>
            </div>



            <div class=\"panel panel-default\">
                <div class=\"panel-heading\" role=\"tab\">
                    <h4 class=\"panel-title\"><a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion-1\" aria-expanded=\"false\" href=\"#accordion-1 .item-3\">Survey Template</a></h4></div>
                <div class=\"panel-collapse collapse item-3\" role=\"tabpanel\">
                    <div class=\"panel-body\"><span><a href=\"/admin/template/add\">Create a Template</a>.</span></div>
                    <div class=\"panel-body\"><span><a href=\"/admin/template/list\">List of Template</a>.</span></div>

                </div>
            </div>

            <div class=\"panel panel-default\">
                <div class=\"panel-heading\" role=\"tab\">
                    <h4 class=\"panel-title\"><a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion-1\" aria-expanded=\"false\" href=\"#accordion-1 .item-4\">Question for Survey</a></h4></div>
                <div class=\"panel-collapse collapse item-4\" role=\"tabpanel\">
                    <div class=\"panel-body\"><span><a href=\"/admin/question/add\">Create a Question</a>.</span></div>
                    <div class=\"panel-body\"><span><a href=\"/admin/question/list\">List of Questions</a>.</span></div>

                </div>
            </div>

            <div class=\"panel panel-default\">
                <div class=\"panel-heading\" role=\"tab\">
                    <h4 class=\"panel-title\"><a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion-1\" aria-expanded=\"false\" href=\"#accordion-1 .item-5\">Marketing Tools</a></h4></div>
                <div class=\"panel-collapse collapse item-5\" role=\"tabpanel\">
                    <div class=\"panel-body\"><span><a href=\"/admin/responses/list\">List of All Reponses</a>.</span></div>
                    <div class=\"panel-body\"><span><a href=\"/analizedata\">Analize Survey Data</a>.</span></div>

                </div>
            </div>



        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"index.html.twig\" %}
{% block container %}
    <div class=\"container\" style=\"padding-top: 100px\">
        <div class=\"panel-group\" role=\"tablist\" aria-multiselectable=\"true\" id=\"accordion-1\">


            <div class=\"panel panel-default\">
                <div class=\"panel-heading\" role=\"tab\">
                    <h4 class=\"panel-title\"><a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion-1\" aria-expanded=\"false\" href=\"#accordion-1 .item-1\">Start a Survey</a></h4></div>

                <div class=\"panel-collapse collapse item-1\" role=\"tabpanel\">
                    <div class=\"panel-body\"><span><a href=\"/admin/start/survey/addcustomer\">Start Survey</a>.</span></div>
                    <div class=\"panel-body\"><span><a href=\"/admin/template/add\">Create a Template</a>.</span></div>
                    <div class=\"panel-body\"><span><a href=\"/admin/template/list/select\">Select a Template from List</a>.</span></div>
                    <div class=\"panel-body\"><span><a href=\"/admin/customer/add\">Register a Customer</a>.</span></div>
                    <div class=\"panel-body\"><span><a href=\"/admin/customer/list\">Select a Customer from List</a>.</span></div>

                </div>
            </div>

            <div class=\"panel panel-default\">
                <div class=\"panel-heading\" role=\"tab\">
                    <h4 class=\"panel-title\"><a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion-1\" aria-expanded=\"false\" href=\"#accordion-1 .item-2\">Customer</a></h4></div>
                <div class=\"panel-collapse collapse item-2\" role=\"tabpanel\">


                    <div class=\"panel-body\"><span><a href=\"/admin/customer/add\">Register a Customer</a>.</span></div>
                    <div class=\"panel-body\"><span><a href=\"/admin/customer/list\">List of Customers</a>.</span></div>


                </div>
            </div>



            <div class=\"panel panel-default\">
                <div class=\"panel-heading\" role=\"tab\">
                    <h4 class=\"panel-title\"><a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion-1\" aria-expanded=\"false\" href=\"#accordion-1 .item-3\">Survey Template</a></h4></div>
                <div class=\"panel-collapse collapse item-3\" role=\"tabpanel\">
                    <div class=\"panel-body\"><span><a href=\"/admin/template/add\">Create a Template</a>.</span></div>
                    <div class=\"panel-body\"><span><a href=\"/admin/template/list\">List of Template</a>.</span></div>

                </div>
            </div>

            <div class=\"panel panel-default\">
                <div class=\"panel-heading\" role=\"tab\">
                    <h4 class=\"panel-title\"><a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion-1\" aria-expanded=\"false\" href=\"#accordion-1 .item-4\">Question for Survey</a></h4></div>
                <div class=\"panel-collapse collapse item-4\" role=\"tabpanel\">
                    <div class=\"panel-body\"><span><a href=\"/admin/question/add\">Create a Question</a>.</span></div>
                    <div class=\"panel-body\"><span><a href=\"/admin/question/list\">List of Questions</a>.</span></div>

                </div>
            </div>

            <div class=\"panel panel-default\">
                <div class=\"panel-heading\" role=\"tab\">
                    <h4 class=\"panel-title\"><a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion-1\" aria-expanded=\"false\" href=\"#accordion-1 .item-5\">Marketing Tools</a></h4></div>
                <div class=\"panel-collapse collapse item-5\" role=\"tabpanel\">
                    <div class=\"panel-body\"><span><a href=\"/admin/responses/list\">List of All Reponses</a>.</span></div>
                    <div class=\"panel-body\"><span><a href=\"/analizedata\">Analize Survey Data</a>.</span></div>

                </div>
            </div>



        </div>
    </div>
{% endblock %}{# empty Twig template #}", "menu.html.twig", "C:\\xampp\\htdocs\\ipd9project\\templates\\menu.html.twig");
    }
}
