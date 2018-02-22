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
        $__internal_cb5dedcfe6a120f187ce99c6d022012d861bdef49e5ceb74c9ed37611f08e1de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb5dedcfe6a120f187ce99c6d022012d861bdef49e5ceb74c9ed37611f08e1de->enter($__internal_cb5dedcfe6a120f187ce99c6d022012d861bdef49e5ceb74c9ed37611f08e1de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_127ba99c39ea5f8e6802bd83b92b3dbc270eb8578d8c9e5d98f836ac548b6dd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_127ba99c39ea5f8e6802bd83b92b3dbc270eb8578d8c9e5d98f836ac548b6dd2->enter($__internal_127ba99c39ea5f8e6802bd83b92b3dbc270eb8578d8c9e5d98f836ac548b6dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb5dedcfe6a120f187ce99c6d022012d861bdef49e5ceb74c9ed37611f08e1de->leave($__internal_cb5dedcfe6a120f187ce99c6d022012d861bdef49e5ceb74c9ed37611f08e1de_prof);

        
        $__internal_127ba99c39ea5f8e6802bd83b92b3dbc270eb8578d8c9e5d98f836ac548b6dd2->leave($__internal_127ba99c39ea5f8e6802bd83b92b3dbc270eb8578d8c9e5d98f836ac548b6dd2_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_30f2408e5f1388827fb22b7067256f78db6c5228e8a6768e316c7e2ff33fefe7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30f2408e5f1388827fb22b7067256f78db6c5228e8a6768e316c7e2ff33fefe7->enter($__internal_30f2408e5f1388827fb22b7067256f78db6c5228e8a6768e316c7e2ff33fefe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_b902b6ebdc21ab5f4dfcc98397eff17190ba8d26606e97dcac9867b649391057 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b902b6ebdc21ab5f4dfcc98397eff17190ba8d26606e97dcac9867b649391057->enter($__internal_b902b6ebdc21ab5f4dfcc98397eff17190ba8d26606e97dcac9867b649391057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_b902b6ebdc21ab5f4dfcc98397eff17190ba8d26606e97dcac9867b649391057->leave($__internal_b902b6ebdc21ab5f4dfcc98397eff17190ba8d26606e97dcac9867b649391057_prof);

        
        $__internal_30f2408e5f1388827fb22b7067256f78db6c5228e8a6768e316c7e2ff33fefe7->leave($__internal_30f2408e5f1388827fb22b7067256f78db6c5228e8a6768e316c7e2ff33fefe7_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_54469c16dbbae0bd36c38493fc8e0abb462264bd1e4ab6921a692deeb10efbbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54469c16dbbae0bd36c38493fc8e0abb462264bd1e4ab6921a692deeb10efbbc->enter($__internal_54469c16dbbae0bd36c38493fc8e0abb462264bd1e4ab6921a692deeb10efbbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2782594cbb913a62ddf35999090d2606a617e64e87cae78f0bf26a8fdeb3a3ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2782594cbb913a62ddf35999090d2606a617e64e87cae78f0bf26a8fdeb3a3ae->enter($__internal_2782594cbb913a62ddf35999090d2606a617e64e87cae78f0bf26a8fdeb3a3ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_2782594cbb913a62ddf35999090d2606a617e64e87cae78f0bf26a8fdeb3a3ae->leave($__internal_2782594cbb913a62ddf35999090d2606a617e64e87cae78f0bf26a8fdeb3a3ae_prof);

        
        $__internal_54469c16dbbae0bd36c38493fc8e0abb462264bd1e4ab6921a692deeb10efbbc->leave($__internal_54469c16dbbae0bd36c38493fc8e0abb462264bd1e4ab6921a692deeb10efbbc_prof);

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
