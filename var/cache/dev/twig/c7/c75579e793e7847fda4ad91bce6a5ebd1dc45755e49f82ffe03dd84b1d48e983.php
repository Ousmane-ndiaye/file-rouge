<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_00d473b1bc5ec8a1fce5cf7751332a771fa11b4b98ff1980c3827c2b5e3734a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_425500698b7f896069b0ed97309141e8e253a7f585a2c7b7fc74eab266a7636e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_425500698b7f896069b0ed97309141e8e253a7f585a2c7b7fc74eab266a7636e->enter($__internal_425500698b7f896069b0ed97309141e8e253a7f585a2c7b7fc74eab266a7636e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_c7351f55fd2afccbeff598caea33eb45a101bb643dc49b47e80cc9a862a34bd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7351f55fd2afccbeff598caea33eb45a101bb643dc49b47e80cc9a862a34bd1->enter($__internal_c7351f55fd2afccbeff598caea33eb45a101bb643dc49b47e80cc9a862a34bd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_425500698b7f896069b0ed97309141e8e253a7f585a2c7b7fc74eab266a7636e->leave($__internal_425500698b7f896069b0ed97309141e8e253a7f585a2c7b7fc74eab266a7636e_prof);

        
        $__internal_c7351f55fd2afccbeff598caea33eb45a101bb643dc49b47e80cc9a862a34bd1->leave($__internal_c7351f55fd2afccbeff598caea33eb45a101bb643dc49b47e80cc9a862a34bd1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_925ec9c43ced92656614dacd9d3ee889c40e5e22c9860f4e47b06c7e733cdadb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_925ec9c43ced92656614dacd9d3ee889c40e5e22c9860f4e47b06c7e733cdadb->enter($__internal_925ec9c43ced92656614dacd9d3ee889c40e5e22c9860f4e47b06c7e733cdadb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d35f8a0770c7ced0995f68276f0c08393d6d7c637c9ac3ecb70b46184a418e64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d35f8a0770c7ced0995f68276f0c08393d6d7c637c9ac3ecb70b46184a418e64->enter($__internal_d35f8a0770c7ced0995f68276f0c08393d6d7c637c9ac3ecb70b46184a418e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_d35f8a0770c7ced0995f68276f0c08393d6d7c637c9ac3ecb70b46184a418e64->leave($__internal_d35f8a0770c7ced0995f68276f0c08393d6d7c637c9ac3ecb70b46184a418e64_prof);

        
        $__internal_925ec9c43ced92656614dacd9d3ee889c40e5e22c9860f4e47b06c7e733cdadb->leave($__internal_925ec9c43ced92656614dacd9d3ee889c40e5e22c9860f4e47b06c7e733cdadb_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf97a095698c068dda77bba51ae36a1d1f38db5549c16831366c3d847bc5f1d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf97a095698c068dda77bba51ae36a1d1f38db5549c16831366c3d847bc5f1d3->enter($__internal_cf97a095698c068dda77bba51ae36a1d1f38db5549c16831366c3d847bc5f1d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6aa9775dcf7fccfb5b6e5f7be9a82303af7a0528436a010d9b5e970e9b899154 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6aa9775dcf7fccfb5b6e5f7be9a82303af7a0528436a010d9b5e970e9b899154->enter($__internal_6aa9775dcf7fccfb5b6e5f7be9a82303af7a0528436a010d9b5e970e9b899154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_6aa9775dcf7fccfb5b6e5f7be9a82303af7a0528436a010d9b5e970e9b899154->leave($__internal_6aa9775dcf7fccfb5b6e5f7be9a82303af7a0528436a010d9b5e970e9b899154_prof);

        
        $__internal_cf97a095698c068dda77bba51ae36a1d1f38db5549c16831366c3d847bc5f1d3->leave($__internal_cf97a095698c068dda77bba51ae36a1d1f38db5549c16831366c3d847bc5f1d3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
