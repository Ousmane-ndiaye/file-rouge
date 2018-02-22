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
        $__internal_98b4f15d2659d0fe9a7904c01e520a395d38f1c821c165abc079ac2b95b424b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98b4f15d2659d0fe9a7904c01e520a395d38f1c821c165abc079ac2b95b424b5->enter($__internal_98b4f15d2659d0fe9a7904c01e520a395d38f1c821c165abc079ac2b95b424b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_49eeff2b0b8f0dfe45c63c8a6920f04cd1cbd03807917f1800a65cdd7bc1dc33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49eeff2b0b8f0dfe45c63c8a6920f04cd1cbd03807917f1800a65cdd7bc1dc33->enter($__internal_49eeff2b0b8f0dfe45c63c8a6920f04cd1cbd03807917f1800a65cdd7bc1dc33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98b4f15d2659d0fe9a7904c01e520a395d38f1c821c165abc079ac2b95b424b5->leave($__internal_98b4f15d2659d0fe9a7904c01e520a395d38f1c821c165abc079ac2b95b424b5_prof);

        
        $__internal_49eeff2b0b8f0dfe45c63c8a6920f04cd1cbd03807917f1800a65cdd7bc1dc33->leave($__internal_49eeff2b0b8f0dfe45c63c8a6920f04cd1cbd03807917f1800a65cdd7bc1dc33_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8a64c52ed77abf0f6225e1d610ff3cd7e040628d1d06c05d32e50bff50bf7b4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a64c52ed77abf0f6225e1d610ff3cd7e040628d1d06c05d32e50bff50bf7b4d->enter($__internal_8a64c52ed77abf0f6225e1d610ff3cd7e040628d1d06c05d32e50bff50bf7b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_319b58bad1737dd0f9cdcc5342ee78790ee93ecde0649479f13788e2add20c71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319b58bad1737dd0f9cdcc5342ee78790ee93ecde0649479f13788e2add20c71->enter($__internal_319b58bad1737dd0f9cdcc5342ee78790ee93ecde0649479f13788e2add20c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_319b58bad1737dd0f9cdcc5342ee78790ee93ecde0649479f13788e2add20c71->leave($__internal_319b58bad1737dd0f9cdcc5342ee78790ee93ecde0649479f13788e2add20c71_prof);

        
        $__internal_8a64c52ed77abf0f6225e1d610ff3cd7e040628d1d06c05d32e50bff50bf7b4d->leave($__internal_8a64c52ed77abf0f6225e1d610ff3cd7e040628d1d06c05d32e50bff50bf7b4d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0c7070aa12542231aa7dc50b0634a8563cd6b3195cf6a5969d644a8989d334b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0c7070aa12542231aa7dc50b0634a8563cd6b3195cf6a5969d644a8989d334b->enter($__internal_d0c7070aa12542231aa7dc50b0634a8563cd6b3195cf6a5969d644a8989d334b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_439a5b486a0f4b4aed44d07d4782c1e5f6b2a212be8f023460dcc5886dabbd34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_439a5b486a0f4b4aed44d07d4782c1e5f6b2a212be8f023460dcc5886dabbd34->enter($__internal_439a5b486a0f4b4aed44d07d4782c1e5f6b2a212be8f023460dcc5886dabbd34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_439a5b486a0f4b4aed44d07d4782c1e5f6b2a212be8f023460dcc5886dabbd34->leave($__internal_439a5b486a0f4b4aed44d07d4782c1e5f6b2a212be8f023460dcc5886dabbd34_prof);

        
        $__internal_d0c7070aa12542231aa7dc50b0634a8563cd6b3195cf6a5969d644a8989d334b->leave($__internal_d0c7070aa12542231aa7dc50b0634a8563cd6b3195cf6a5969d644a8989d334b_prof);

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
