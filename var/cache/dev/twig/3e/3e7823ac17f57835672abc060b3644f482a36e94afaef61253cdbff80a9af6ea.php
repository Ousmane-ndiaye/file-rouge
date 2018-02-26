<?php

/* reservation/index.html.twig */
class __TwigTemplate_90e4766eb178108703bec6bb11ed5087379cc1e8a98965e3092261a6eb6f092c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reservation/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d1165eb467311896d69b324036e972efe62abcfd23a238cc65bb26a87c03727 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d1165eb467311896d69b324036e972efe62abcfd23a238cc65bb26a87c03727->enter($__internal_7d1165eb467311896d69b324036e972efe62abcfd23a238cc65bb26a87c03727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        $__internal_e6474825aa775fe4673cfa10a20bb9a6c52994c088c7f10eb781a3275b72e379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6474825aa775fe4673cfa10a20bb9a6c52994c088c7f10eb781a3275b72e379->enter($__internal_e6474825aa775fe4673cfa10a20bb9a6c52994c088c7f10eb781a3275b72e379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d1165eb467311896d69b324036e972efe62abcfd23a238cc65bb26a87c03727->leave($__internal_7d1165eb467311896d69b324036e972efe62abcfd23a238cc65bb26a87c03727_prof);

        
        $__internal_e6474825aa775fe4673cfa10a20bb9a6c52994c088c7f10eb781a3275b72e379->leave($__internal_e6474825aa775fe4673cfa10a20bb9a6c52994c088c7f10eb781a3275b72e379_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca2ec6a9144af3397ea383c3e40e43c5a9e3775d05ac309cee5f699a773a1d32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca2ec6a9144af3397ea383c3e40e43c5a9e3775d05ac309cee5f699a773a1d32->enter($__internal_ca2ec6a9144af3397ea383c3e40e43c5a9e3775d05ac309cee5f699a773a1d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a26ab31c19f8ccee8d1f136b95bcbaa9f0fdf91d8de31eb1c86c6caa0faae8fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a26ab31c19f8ccee8d1f136b95bcbaa9f0fdf91d8de31eb1c86c6caa0faae8fe->enter($__internal_a26ab31c19f8ccee8d1f136b95bcbaa9f0fdf91d8de31eb1c86c6caa0faae8fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_a26ab31c19f8ccee8d1f136b95bcbaa9f0fdf91d8de31eb1c86c6caa0faae8fe->leave($__internal_a26ab31c19f8ccee8d1f136b95bcbaa9f0fdf91d8de31eb1c86c6caa0faae8fe_prof);

        
        $__internal_ca2ec6a9144af3397ea383c3e40e43c5a9e3775d05ac309cee5f699a773a1d32->leave($__internal_ca2ec6a9144af3397ea383c3e40e43c5a9e3775d05ac309cee5f699a773a1d32_prof);

    }

    public function getTemplateName()
    {
        return "reservation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}Accueil{% endblock %}", "reservation/index.html.twig", "/var/www/html/FILE-ROUGE/original/file-rouge/app/Resources/views/reservation/index.html.twig");
    }
}
