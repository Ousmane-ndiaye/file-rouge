<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_b5d43fe3e85ca92b0ff46e869f5e860176ac738f3de27fed1fd1a33b641008e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1dd9510b8f9da65bc4d07f707b5ede61afa459fcdf238eb73154a620b0195aac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dd9510b8f9da65bc4d07f707b5ede61afa459fcdf238eb73154a620b0195aac->enter($__internal_1dd9510b8f9da65bc4d07f707b5ede61afa459fcdf238eb73154a620b0195aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_71280c63c0844e652524fcf82fb2bc569aaf12fadcb4d3d41689ec79a5e53daa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71280c63c0844e652524fcf82fb2bc569aaf12fadcb4d3d41689ec79a5e53daa->enter($__internal_71280c63c0844e652524fcf82fb2bc569aaf12fadcb4d3d41689ec79a5e53daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1dd9510b8f9da65bc4d07f707b5ede61afa459fcdf238eb73154a620b0195aac->leave($__internal_1dd9510b8f9da65bc4d07f707b5ede61afa459fcdf238eb73154a620b0195aac_prof);

        
        $__internal_71280c63c0844e652524fcf82fb2bc569aaf12fadcb4d3d41689ec79a5e53daa->leave($__internal_71280c63c0844e652524fcf82fb2bc569aaf12fadcb4d3d41689ec79a5e53daa_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_6f1718e722ab48370179e18af56d6f7f39493c803d9501c1fc58e0f23dc2cbb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f1718e722ab48370179e18af56d6f7f39493c803d9501c1fc58e0f23dc2cbb5->enter($__internal_6f1718e722ab48370179e18af56d6f7f39493c803d9501c1fc58e0f23dc2cbb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_ccbd716172d3959f8697325ab2c4c94a885ee23d408d9c3ba337abb970c6d676 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccbd716172d3959f8697325ab2c4c94a885ee23d408d9c3ba337abb970c6d676->enter($__internal_ccbd716172d3959f8697325ab2c4c94a885ee23d408d9c3ba337abb970c6d676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_ccbd716172d3959f8697325ab2c4c94a885ee23d408d9c3ba337abb970c6d676->leave($__internal_ccbd716172d3959f8697325ab2c4c94a885ee23d408d9c3ba337abb970c6d676_prof);

        
        $__internal_6f1718e722ab48370179e18af56d6f7f39493c803d9501c1fc58e0f23dc2cbb5->leave($__internal_6f1718e722ab48370179e18af56d6f7f39493c803d9501c1fc58e0f23dc2cbb5_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6fae101e2f53fb19753c029b1b5a3811063aea8d94539998ed91eff878af2ee7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fae101e2f53fb19753c029b1b5a3811063aea8d94539998ed91eff878af2ee7->enter($__internal_6fae101e2f53fb19753c029b1b5a3811063aea8d94539998ed91eff878af2ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c37454dcbee09dd947f1c9e137b1e734ab9de58e27a3b63cd8b05a8e720bd4de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c37454dcbee09dd947f1c9e137b1e734ab9de58e27a3b63cd8b05a8e720bd4de->enter($__internal_c37454dcbee09dd947f1c9e137b1e734ab9de58e27a3b63cd8b05a8e720bd4de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_c37454dcbee09dd947f1c9e137b1e734ab9de58e27a3b63cd8b05a8e720bd4de->leave($__internal_c37454dcbee09dd947f1c9e137b1e734ab9de58e27a3b63cd8b05a8e720bd4de_prof);

        
        $__internal_6fae101e2f53fb19753c029b1b5a3811063aea8d94539998ed91eff878af2ee7->leave($__internal_6fae101e2f53fb19753c029b1b5a3811063aea8d94539998ed91eff878af2ee7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
