<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_9ccef2ccdcd63730e4b49d5d36d4335b8121e225508512d987be3b6fceeda176 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb178043011efc478c762af426cbe0e4c13c9199326915d17af925c141b2542a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb178043011efc478c762af426cbe0e4c13c9199326915d17af925c141b2542a->enter($__internal_cb178043011efc478c762af426cbe0e4c13c9199326915d17af925c141b2542a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_fcb620f2178ca3ad6dacd74aa7610f083ccf654ec071527491aebf54cfcc619a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcb620f2178ca3ad6dacd74aa7610f083ccf654ec071527491aebf54cfcc619a->enter($__internal_fcb620f2178ca3ad6dacd74aa7610f083ccf654ec071527491aebf54cfcc619a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb178043011efc478c762af426cbe0e4c13c9199326915d17af925c141b2542a->leave($__internal_cb178043011efc478c762af426cbe0e4c13c9199326915d17af925c141b2542a_prof);

        
        $__internal_fcb620f2178ca3ad6dacd74aa7610f083ccf654ec071527491aebf54cfcc619a->leave($__internal_fcb620f2178ca3ad6dacd74aa7610f083ccf654ec071527491aebf54cfcc619a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d00956cbe6bd3c6a9ea01c4fe58a5b264390ab52cd84e2ec8f9e1f65d75d5a45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d00956cbe6bd3c6a9ea01c4fe58a5b264390ab52cd84e2ec8f9e1f65d75d5a45->enter($__internal_d00956cbe6bd3c6a9ea01c4fe58a5b264390ab52cd84e2ec8f9e1f65d75d5a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1e323981458a70802a0da547fb3b4a57ba073869029c8ddc51ec4691d23d807a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e323981458a70802a0da547fb3b4a57ba073869029c8ddc51ec4691d23d807a->enter($__internal_1e323981458a70802a0da547fb3b4a57ba073869029c8ddc51ec4691d23d807a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_1e323981458a70802a0da547fb3b4a57ba073869029c8ddc51ec4691d23d807a->leave($__internal_1e323981458a70802a0da547fb3b4a57ba073869029c8ddc51ec4691d23d807a_prof);

        
        $__internal_d00956cbe6bd3c6a9ea01c4fe58a5b264390ab52cd84e2ec8f9e1f65d75d5a45->leave($__internal_d00956cbe6bd3c6a9ea01c4fe58a5b264390ab52cd84e2ec8f9e1f65d75d5a45_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
