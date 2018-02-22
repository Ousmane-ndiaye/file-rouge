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
        $__internal_32092c18eb2129ad7fb98745468c01929b1b3c43d3d05658933ec48f452e69b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32092c18eb2129ad7fb98745468c01929b1b3c43d3d05658933ec48f452e69b4->enter($__internal_32092c18eb2129ad7fb98745468c01929b1b3c43d3d05658933ec48f452e69b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_b7909ce2c0d2034fb53bbe70cd24e47e8c7e538000c113bd09e3e66ea47d1a90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7909ce2c0d2034fb53bbe70cd24e47e8c7e538000c113bd09e3e66ea47d1a90->enter($__internal_b7909ce2c0d2034fb53bbe70cd24e47e8c7e538000c113bd09e3e66ea47d1a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32092c18eb2129ad7fb98745468c01929b1b3c43d3d05658933ec48f452e69b4->leave($__internal_32092c18eb2129ad7fb98745468c01929b1b3c43d3d05658933ec48f452e69b4_prof);

        
        $__internal_b7909ce2c0d2034fb53bbe70cd24e47e8c7e538000c113bd09e3e66ea47d1a90->leave($__internal_b7909ce2c0d2034fb53bbe70cd24e47e8c7e538000c113bd09e3e66ea47d1a90_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_122d3c4d5ebb818123c19557b15ef013fe7d21a6d057cc806ca11700c9876114 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_122d3c4d5ebb818123c19557b15ef013fe7d21a6d057cc806ca11700c9876114->enter($__internal_122d3c4d5ebb818123c19557b15ef013fe7d21a6d057cc806ca11700c9876114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_f3fb0f27e20d4f3c47860c03d62c03169c5b705277bd85147e0802e30f460729 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3fb0f27e20d4f3c47860c03d62c03169c5b705277bd85147e0802e30f460729->enter($__internal_f3fb0f27e20d4f3c47860c03d62c03169c5b705277bd85147e0802e30f460729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_f3fb0f27e20d4f3c47860c03d62c03169c5b705277bd85147e0802e30f460729->leave($__internal_f3fb0f27e20d4f3c47860c03d62c03169c5b705277bd85147e0802e30f460729_prof);

        
        $__internal_122d3c4d5ebb818123c19557b15ef013fe7d21a6d057cc806ca11700c9876114->leave($__internal_122d3c4d5ebb818123c19557b15ef013fe7d21a6d057cc806ca11700c9876114_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2eb984e60352fddee7a60a2a25a250efce948c0629f1281a7fe4a70eb5fd61d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2eb984e60352fddee7a60a2a25a250efce948c0629f1281a7fe4a70eb5fd61d5->enter($__internal_2eb984e60352fddee7a60a2a25a250efce948c0629f1281a7fe4a70eb5fd61d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d5c87420dfef7a51eb1e50ec952fbb384ab330dfbe79c739a513a083eca3c25c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5c87420dfef7a51eb1e50ec952fbb384ab330dfbe79c739a513a083eca3c25c->enter($__internal_d5c87420dfef7a51eb1e50ec952fbb384ab330dfbe79c739a513a083eca3c25c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_d5c87420dfef7a51eb1e50ec952fbb384ab330dfbe79c739a513a083eca3c25c->leave($__internal_d5c87420dfef7a51eb1e50ec952fbb384ab330dfbe79c739a513a083eca3c25c_prof);

        
        $__internal_2eb984e60352fddee7a60a2a25a250efce948c0629f1281a7fe4a70eb5fd61d5->leave($__internal_2eb984e60352fddee7a60a2a25a250efce948c0629f1281a7fe4a70eb5fd61d5_prof);

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
