<?php

/* survey.html.twig */
class __TwigTemplate_69617b7b8490196b7078a808dfac3409dd3216bc5c10eaa299ed19d8cd82da1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "survey.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
            'container1' => array($this, 'block_container1'),
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
        <div class=\"row\">
            <section>
                <div class=\"wizard\">
                    <div class=\"wizard-inner\">
                        <div class=\"connecting-line\"></div>
                        <ul class=\"nav nav-tabs\" role=\"tablist\">

                            <li role=\"presentation\" class=\"active\">
                                <a href=\"#step1\" data-toggle=\"tab\" aria-controls=\"step1\" role=\"tab\" title=\"Step 1\">
                                    <span class=\"round-tab\">
                                        <i class=\"glyphicon glyphicon-folder-open\"></i>
                                    </span>
                                </a>
                            </li>

                            <li role=\"presentation\" class=\"disabled\">
                                <a href=\"#step2\" data-toggle=\"tab\" aria-controls=\"step2\" role=\"tab\" title=\"Step 2\">
                                    <span class=\"round-tab\">
                                        <i class=\"glyphicon glyphicon-pencil\"></i>
                                    </span>
                                </a>
                            </li>
                            <li role=\"presentation\" class=\"disabled\">
                                <a href=\"#step3\" data-toggle=\"tab\" aria-controls=\"step3\" role=\"tab\" title=\"Step 3\">
                                    <span class=\"round-tab\">
                                        <i class=\"glyphicon glyphicon-pencil\"></i>
                                    </span>
                                </a>
                            </li>

                            <li role=\"presentation\" class=\"disabled\">
                                <a href=\"#complete\" data-toggle=\"tab\" aria-controls=\"complete\" role=\"tab\" title=\"Complete\">
                                    <span class=\"round-tab\">
                                        <i class=\"glyphicon glyphicon-ok\"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <form role=\"form\">
                        <div class=\"tab-content\">
                            <div class=\"tab-pane active\" role=\"tabpanel\" id=\"step1\">
                                <h3>Question 1</h3>
                                <p>This is Question 1</p>
                                <ul class=\"list-inline pull-right\">
                                    <li><button type=\"button\" class=\"btn btn-primary next-step\">Save and continue</button></li>
                                </ul>
                            </div>
                            <div class=\"tab-pane\" role=\"tabpanel\" id=\"step2\">
                                <h3>Question 2</h3>
                                <p>This is Question 2</p>
                                <ul class=\"list-inline pull-right\">
                                    <li><button type=\"button\" class=\"btn btn-default prev-step\">Previous</button></li>
                                    <li><button type=\"button\" class=\"btn btn-primary next-step\">Save and continue</button></li>
                                </ul>
                            </div>
                            <div class=\"tab-pane\" role=\"tabpanel\" id=\"step3\">
                                <h3>Question 3</h3>
                                <p>This is Question 3</p>
                                <ul class=\"list-inline pull-right\">
                                    <li><button type=\"button\" class=\"btn btn-default prev-step\">Previous</button></li>
                                    <li><button type=\"button\" class=\"btn btn-default next-step\">Skip</button></li>
                                    <li><button type=\"button\" class=\"btn btn-primary btn-info-full next-step\">Save and continue</button></li>
                                </ul>
                            </div>
                            <div class=\"tab-pane\" role=\"tabpanel\" id=\"complete\">
                                <h3>Complete</h3>
                                <p>You have successfully completed the survey.</p>
                            </div>
                            <div class=\"clearfix\"></div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
";
    }

    // line 82
    public function block_container1($context, array $blocks = array())
    {
        // line 83
        echo "    <div class=\"container\">
        <div class=\"card-deck-wrapper\">
            <div class=\"card-deck\">
                <div class=\"card\">
                    <img class=\"card-img-top\" src=\"\" alt=\"\">
                    <div class=\"card-block\">
                        <h4 class=\"card-title\">Answer 1</h4>
                        <p class=\"card-text\">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
                        </p>
                        <p class=\"card-text\"><small class=\"text-muted\">Footer 1</small></p>
                    </div>
                </div>
                <div class=\"card\">
                    <img class=\"card-img-top\" src=\"\" alt=\"\">
                    <div class=\"card-block\">
                        <h4 class=\"card-title\">Answer 2</h4>
                        <p class=\"card-text\">This card has supporting text below as a natural lead-in to additional content.</p>
                        <p class=\"card-text\"><small class=\"text-muted\">Footer 2</small></p>
                    </div>
                </div>
                <div class=\"card\">
                    <img class=\"card-img-top\" src=\"\" alt=\"\">
                    <div class=\"card-block\">
                        <h4 class=\"card-title\">Answer 3</h4>
                        <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        <p class=\"card-text\"><small class=\"text-muted\">Footer 3</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "survey.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 83,  114 => 82,  32 => 3,  29 => 2,  11 => 1,);
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
        <div class=\"row\">
            <section>
                <div class=\"wizard\">
                    <div class=\"wizard-inner\">
                        <div class=\"connecting-line\"></div>
                        <ul class=\"nav nav-tabs\" role=\"tablist\">

                            <li role=\"presentation\" class=\"active\">
                                <a href=\"#step1\" data-toggle=\"tab\" aria-controls=\"step1\" role=\"tab\" title=\"Step 1\">
                                    <span class=\"round-tab\">
                                        <i class=\"glyphicon glyphicon-folder-open\"></i>
                                    </span>
                                </a>
                            </li>

                            <li role=\"presentation\" class=\"disabled\">
                                <a href=\"#step2\" data-toggle=\"tab\" aria-controls=\"step2\" role=\"tab\" title=\"Step 2\">
                                    <span class=\"round-tab\">
                                        <i class=\"glyphicon glyphicon-pencil\"></i>
                                    </span>
                                </a>
                            </li>
                            <li role=\"presentation\" class=\"disabled\">
                                <a href=\"#step3\" data-toggle=\"tab\" aria-controls=\"step3\" role=\"tab\" title=\"Step 3\">
                                    <span class=\"round-tab\">
                                        <i class=\"glyphicon glyphicon-pencil\"></i>
                                    </span>
                                </a>
                            </li>

                            <li role=\"presentation\" class=\"disabled\">
                                <a href=\"#complete\" data-toggle=\"tab\" aria-controls=\"complete\" role=\"tab\" title=\"Complete\">
                                    <span class=\"round-tab\">
                                        <i class=\"glyphicon glyphicon-ok\"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <form role=\"form\">
                        <div class=\"tab-content\">
                            <div class=\"tab-pane active\" role=\"tabpanel\" id=\"step1\">
                                <h3>Question 1</h3>
                                <p>This is Question 1</p>
                                <ul class=\"list-inline pull-right\">
                                    <li><button type=\"button\" class=\"btn btn-primary next-step\">Save and continue</button></li>
                                </ul>
                            </div>
                            <div class=\"tab-pane\" role=\"tabpanel\" id=\"step2\">
                                <h3>Question 2</h3>
                                <p>This is Question 2</p>
                                <ul class=\"list-inline pull-right\">
                                    <li><button type=\"button\" class=\"btn btn-default prev-step\">Previous</button></li>
                                    <li><button type=\"button\" class=\"btn btn-primary next-step\">Save and continue</button></li>
                                </ul>
                            </div>
                            <div class=\"tab-pane\" role=\"tabpanel\" id=\"step3\">
                                <h3>Question 3</h3>
                                <p>This is Question 3</p>
                                <ul class=\"list-inline pull-right\">
                                    <li><button type=\"button\" class=\"btn btn-default prev-step\">Previous</button></li>
                                    <li><button type=\"button\" class=\"btn btn-default next-step\">Skip</button></li>
                                    <li><button type=\"button\" class=\"btn btn-primary btn-info-full next-step\">Save and continue</button></li>
                                </ul>
                            </div>
                            <div class=\"tab-pane\" role=\"tabpanel\" id=\"complete\">
                                <h3>Complete</h3>
                                <p>You have successfully completed the survey.</p>
                            </div>
                            <div class=\"clearfix\"></div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
{% endblock %}{# empty Twig template #}
{% block container1 %}
    <div class=\"container\">
        <div class=\"card-deck-wrapper\">
            <div class=\"card-deck\">
                <div class=\"card\">
                    <img class=\"card-img-top\" src=\"\" alt=\"\">
                    <div class=\"card-block\">
                        <h4 class=\"card-title\">Answer 1</h4>
                        <p class=\"card-text\">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
                        </p>
                        <p class=\"card-text\"><small class=\"text-muted\">Footer 1</small></p>
                    </div>
                </div>
                <div class=\"card\">
                    <img class=\"card-img-top\" src=\"\" alt=\"\">
                    <div class=\"card-block\">
                        <h4 class=\"card-title\">Answer 2</h4>
                        <p class=\"card-text\">This card has supporting text below as a natural lead-in to additional content.</p>
                        <p class=\"card-text\"><small class=\"text-muted\">Footer 2</small></p>
                    </div>
                </div>
                <div class=\"card\">
                    <img class=\"card-img-top\" src=\"\" alt=\"\">
                    <div class=\"card-block\">
                        <h4 class=\"card-title\">Answer 3</h4>
                        <p class=\"card-text\">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        <p class=\"card-text\"><small class=\"text-muted\">Footer 3</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}{# empty Twig template #}", "survey.html.twig", "C:\\xampp\\htdocs\\ipd9-php-project\\templates\\survey.html.twig");
    }
}
