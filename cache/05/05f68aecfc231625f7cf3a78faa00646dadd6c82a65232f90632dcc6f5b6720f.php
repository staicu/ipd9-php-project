<?php

/* menu.html.twig */
class __TwigTemplate_b37c9840b23aea18bbd2ccde61fcdc67999e3324d2fa84c0eb55b31ea5097fa8 extends Twig_Template
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
        echo "    <div class=\"container\" style=\"padding: 100\">
        <div class=\"panel-group\" role=\"tablist\" aria-multiselectable=\"true\" id=\"accordion-1\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\" role=\"tab\">
                    <h4 class=\"panel-title\">
                        <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion-1\" aria-expanded=\"false\" href=\"#accordion-1 .item-1\">
                            Register a Surveyee</a></h4></div>
                <div class=\"panel-collapse collapse in item-1\" role=\"tabpanel\">
                    <div class=\"panel-body\"><span><a href=\"/register\">Register a Surveyee</a>.</span></div>
                </div>
            </div>
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\" role=\"tab\">
                    <h4 class=\"panel-title\">
                        <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion-1\" aria-expanded=\"false\" href=\"#accordion-1 .item-2\">
                            List of Surveyee</a></h4></div>
                <div class=\"panel-collapse collapse item-2\" role=\"tabpanel\">
                    <div class=\"panel-body\"><span><a href=\"/admin/users/list\">List of  Surveyee</a>.</span></div>
                </div>
            </div>
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\" role=\"tab\">
                    <h4 class=\"panel-title\"><a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion-1\" aria-expanded=\"false\" href=\"#accordion-1 .item-3\">Create a Survey</a></h4></div>
                <div class=\"panel-collapse collapse item-3\" role=\"tabpanel\">
                    <div class=\"panel-body\"><span><a href=\"/createsurvey\">Create a Survey</a>.</span></div>
                </div>
            </div>
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\" role=\"tab\">
                    <h4 class=\"panel-title\"><a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion-1\" aria-expanded=\"false\" href=\"#accordion-1 .item-4\">List of Surveys</a></h4></div>
                <div class=\"panel-collapse collapse item-4\" role=\"tabpanel\">
                    <div class=\"panel-body\"><span><a href=\"/surveylist\">List of Surveys</a>.</span></div>
                </div>
            </div>
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\" role=\"tab\">
                    <h4 class=\"panel-title\"><a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion-1\" aria-expanded=\"false\" href=\"#accordion-1 .item-5\">Create a Question</a></h4></div>
                <div class=\"panel-collapse collapse item-5\" role=\"tabpanel\">
                    <div class=\"panel-body\"><span><a href=\"/questionlist\">List of Question</a>.</span></div>
                </div>
            </div>
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\" role=\"tab\">
                    <h4 class=\"panel-title\"><a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion-1\" aria-expanded=\"false\" href=\"#accordion-1 .item-6\">Start a Survey</a></h4></div>
                <div class=\"panel-collapse collapse item-6\" role=\"tabpanel\">
                    <div class=\"panel-body\"><span><a href=\"/survey\">Start a Survey</a>.</span></div>
                </div>
            </div>
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\" role=\"tab\">
                    <h4 class=\"panel-title\"><a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion-1\" aria-expanded=\"false\" href=\"#accordion-1 .item-7\">Accordion Item</a></h4></div>
                <div class=\"panel-collapse collapse item-7\" role=\"tabpanel\">
                    <div class=\"panel-body\"><span>Item body.</span></div>
                </div>
            </div><div class=\"panel panel-default\">
                <div class=\"panel-heading\" role=\"tab\">
                    <h4 class=\"panel-title\"><a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion-1\" aria-expanded=\"false\" href=\"#accordion-1 .item-8\">Accordion Item</a></h4></div>
                <div class=\"panel-collapse collapse item-8\" role=\"tabpanel\">
                    <div class=\"panel-body\"><span>Item body.</span></div>
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
    <div class=\"container\" style=\"padding: 100\">
        <div class=\"panel-group\" role=\"tablist\" aria-multiselectable=\"true\" id=\"accordion-1\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\" role=\"tab\">
                    <h4 class=\"panel-title\">
                        <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion-1\" aria-expanded=\"false\" href=\"#accordion-1 .item-1\">
                            Register a Surveyee</a></h4></div>
                <div class=\"panel-collapse collapse in item-1\" role=\"tabpanel\">
                    <div class=\"panel-body\"><span><a href=\"/register\">Register a Surveyee</a>.</span></div>
                </div>
            </div>
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\" role=\"tab\">
                    <h4 class=\"panel-title\">
                        <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion-1\" aria-expanded=\"false\" href=\"#accordion-1 .item-2\">
                            List of Surveyee</a></h4></div>
                <div class=\"panel-collapse collapse item-2\" role=\"tabpanel\">
                    <div class=\"panel-body\"><span><a href=\"/admin/users/list\">List of  Surveyee</a>.</span></div>
                </div>
            </div>
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\" role=\"tab\">
                    <h4 class=\"panel-title\"><a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion-1\" aria-expanded=\"false\" href=\"#accordion-1 .item-3\">Create a Survey</a></h4></div>
                <div class=\"panel-collapse collapse item-3\" role=\"tabpanel\">
                    <div class=\"panel-body\"><span><a href=\"/createsurvey\">Create a Survey</a>.</span></div>
                </div>
            </div>
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\" role=\"tab\">
                    <h4 class=\"panel-title\"><a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion-1\" aria-expanded=\"false\" href=\"#accordion-1 .item-4\">List of Surveys</a></h4></div>
                <div class=\"panel-collapse collapse item-4\" role=\"tabpanel\">
                    <div class=\"panel-body\"><span><a href=\"/surveylist\">List of Surveys</a>.</span></div>
                </div>
            </div>
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\" role=\"tab\">
                    <h4 class=\"panel-title\"><a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion-1\" aria-expanded=\"false\" href=\"#accordion-1 .item-5\">Create a Question</a></h4></div>
                <div class=\"panel-collapse collapse item-5\" role=\"tabpanel\">
                    <div class=\"panel-body\"><span><a href=\"/questionlist\">List of Question</a>.</span></div>
                </div>
            </div>
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\" role=\"tab\">
                    <h4 class=\"panel-title\"><a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion-1\" aria-expanded=\"false\" href=\"#accordion-1 .item-6\">Start a Survey</a></h4></div>
                <div class=\"panel-collapse collapse item-6\" role=\"tabpanel\">
                    <div class=\"panel-body\"><span><a href=\"/survey\">Start a Survey</a>.</span></div>
                </div>
            </div>
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\" role=\"tab\">
                    <h4 class=\"panel-title\"><a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion-1\" aria-expanded=\"false\" href=\"#accordion-1 .item-7\">Accordion Item</a></h4></div>
                <div class=\"panel-collapse collapse item-7\" role=\"tabpanel\">
                    <div class=\"panel-body\"><span>Item body.</span></div>
                </div>
            </div><div class=\"panel panel-default\">
                <div class=\"panel-heading\" role=\"tab\">
                    <h4 class=\"panel-title\"><a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion-1\" aria-expanded=\"false\" href=\"#accordion-1 .item-8\">Accordion Item</a></h4></div>
                <div class=\"panel-collapse collapse item-8\" role=\"tabpanel\">
                    <div class=\"panel-body\"><span>Item body.</span></div>
                </div>
            </div>


        </div>
    </div>
{% endblock %}{# empty Twig template #}", "menu.html.twig", "C:\\xampp\\htdocs\\ipd9-php-project\\web\\html\\menu.html.twig");
    }
}
