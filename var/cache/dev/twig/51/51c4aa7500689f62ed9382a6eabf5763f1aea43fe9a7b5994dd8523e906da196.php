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
        $__internal_556f99b5d283600b675842aae4d93ebe8e6b3f7fccecb40bd0ace826e5fa4ea3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_556f99b5d283600b675842aae4d93ebe8e6b3f7fccecb40bd0ace826e5fa4ea3->enter($__internal_556f99b5d283600b675842aae4d93ebe8e6b3f7fccecb40bd0ace826e5fa4ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_b852ccb1d7e99387fc4d93aae0cb84a55627b7bc178038e90eed93ea45d3a8f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b852ccb1d7e99387fc4d93aae0cb84a55627b7bc178038e90eed93ea45d3a8f1->enter($__internal_b852ccb1d7e99387fc4d93aae0cb84a55627b7bc178038e90eed93ea45d3a8f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_556f99b5d283600b675842aae4d93ebe8e6b3f7fccecb40bd0ace826e5fa4ea3->leave($__internal_556f99b5d283600b675842aae4d93ebe8e6b3f7fccecb40bd0ace826e5fa4ea3_prof);

        
        $__internal_b852ccb1d7e99387fc4d93aae0cb84a55627b7bc178038e90eed93ea45d3a8f1->leave($__internal_b852ccb1d7e99387fc4d93aae0cb84a55627b7bc178038e90eed93ea45d3a8f1_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_02105798b848fdca1deae4022ce973f2df21c9b262e0731003b4a2383eb8dcc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02105798b848fdca1deae4022ce973f2df21c9b262e0731003b4a2383eb8dcc5->enter($__internal_02105798b848fdca1deae4022ce973f2df21c9b262e0731003b4a2383eb8dcc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_35199dc7469d68069573244f40f83754816b05919b10c8776ebefa523c9bf8d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35199dc7469d68069573244f40f83754816b05919b10c8776ebefa523c9bf8d9->enter($__internal_35199dc7469d68069573244f40f83754816b05919b10c8776ebefa523c9bf8d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_35199dc7469d68069573244f40f83754816b05919b10c8776ebefa523c9bf8d9->leave($__internal_35199dc7469d68069573244f40f83754816b05919b10c8776ebefa523c9bf8d9_prof);

        
        $__internal_02105798b848fdca1deae4022ce973f2df21c9b262e0731003b4a2383eb8dcc5->leave($__internal_02105798b848fdca1deae4022ce973f2df21c9b262e0731003b4a2383eb8dcc5_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f2f156ee0dbd1673d8d1a50aa075af96b5b643ec98766e5400568cf53a2e1d37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2f156ee0dbd1673d8d1a50aa075af96b5b643ec98766e5400568cf53a2e1d37->enter($__internal_f2f156ee0dbd1673d8d1a50aa075af96b5b643ec98766e5400568cf53a2e1d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a41b0bf442322339e2d11981aaa6a599c8e311049156962f674f4376f1dbd2cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a41b0bf442322339e2d11981aaa6a599c8e311049156962f674f4376f1dbd2cd->enter($__internal_a41b0bf442322339e2d11981aaa6a599c8e311049156962f674f4376f1dbd2cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_a41b0bf442322339e2d11981aaa6a599c8e311049156962f674f4376f1dbd2cd->leave($__internal_a41b0bf442322339e2d11981aaa6a599c8e311049156962f674f4376f1dbd2cd_prof);

        
        $__internal_f2f156ee0dbd1673d8d1a50aa075af96b5b643ec98766e5400568cf53a2e1d37->leave($__internal_f2f156ee0dbd1673d8d1a50aa075af96b5b643ec98766e5400568cf53a2e1d37_prof);

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
