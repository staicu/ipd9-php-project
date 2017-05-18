<?php

/* register.html.twig */
class __TwigTemplate_439044ce3cdf01a168d88c3a4b229e100d6d51127a368cffacf9fbc26a9069cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "register.html.twig", 1);
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
        echo "    <div class=\"row row-login\">
                    <div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1\">
                        <h1 class=\"text-center\">360 imagine</h1>
                        <div class=\"well\">
                            <h3 class=\"text-danger\">Customer Registration </h3>
                            <form method=\"post\"  action=\"/admin/users/add\" enctype=\"multipart/form-data\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Name </label>
                                    <input class=\"form-control\" type=\"text\" name=\"name\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "\">
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Email </label>
                                    <input class=\"form-control\" type=\"text\" name=\"email\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true);
        echo "\">
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Phone Number</label>
                                    <input class=\"form-control\" type=\"text\" name=\"phone\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["phone"]) ? $context["phone"] : null), "html", null, true);
        echo "\">
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Company </label>
                                    <input class=\"form-control\" type=\"text\" name=\"company\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["company"]) ? $context["company"] : null), "html", null, true);
        echo "\">
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Position </label>
                                    <input class=\"form-control\" type=\"text\" name=\"position\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["position"]) ? $context["position"] : null), "html", null, true);
        echo "\">
                                </div>
                                <button class=\"btn btn-success btn-block\" type=\"submit\"> Register </button>
                            </form>
                        </div>
                    </div>
                </div>
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
        return array (  69 => 27,  62 => 23,  55 => 19,  48 => 15,  41 => 11,  31 => 3,  28 => 2,  11 => 1,);
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
    <div class=\"row row-login\">
                    <div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1\">
                        <h1 class=\"text-center\">360 imagine</h1>
                        <div class=\"well\">
                            <h3 class=\"text-danger\">Customer Registration </h3>
                            <form method=\"post\"  action=\"/admin/users/add\" enctype=\"multipart/form-data\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Name </label>
                                    <input class=\"form-control\" type=\"text\" name=\"name\" value=\"{{name}}\">
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Email </label>
                                    <input class=\"form-control\" type=\"text\" name=\"email\" value=\"{{email}}\">
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Phone Number</label>
                                    <input class=\"form-control\" type=\"text\" name=\"phone\" value=\"{{phone}}\">
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Company </label>
                                    <input class=\"form-control\" type=\"text\" name=\"company\" value=\"{{company}}\">
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Position </label>
                                    <input class=\"form-control\" type=\"text\" name=\"position\" value=\"{{position}}\">
                                </div>
                                <button class=\"btn btn-success btn-block\" type=\"submit\"> Register </button>
                            </form>
                        </div>
                    </div>
                </div>
{% endblock %}{# empty Twig template #}", "register.html.twig", "C:\\xampp\\htdocs\\php\\ipd9project\\web\\html\\register.html.twig");
    }
}
