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
        $__internal_1f9ae70a40f81490750008d75f11baf950110ecb11e685a0eb9b10e0b2038879 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f9ae70a40f81490750008d75f11baf950110ecb11e685a0eb9b10e0b2038879->enter($__internal_1f9ae70a40f81490750008d75f11baf950110ecb11e685a0eb9b10e0b2038879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_d8221451054368ece3dc10db6551272d70b6eea47111fa7a7be12dd80918702d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8221451054368ece3dc10db6551272d70b6eea47111fa7a7be12dd80918702d->enter($__internal_d8221451054368ece3dc10db6551272d70b6eea47111fa7a7be12dd80918702d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f9ae70a40f81490750008d75f11baf950110ecb11e685a0eb9b10e0b2038879->leave($__internal_1f9ae70a40f81490750008d75f11baf950110ecb11e685a0eb9b10e0b2038879_prof);

        
        $__internal_d8221451054368ece3dc10db6551272d70b6eea47111fa7a7be12dd80918702d->leave($__internal_d8221451054368ece3dc10db6551272d70b6eea47111fa7a7be12dd80918702d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f1c1f9b3d45204b7e66626a04a054359c46e28a1377928c013a01064e724bf5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1c1f9b3d45204b7e66626a04a054359c46e28a1377928c013a01064e724bf5b->enter($__internal_f1c1f9b3d45204b7e66626a04a054359c46e28a1377928c013a01064e724bf5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3e04ddbf3e1e099f7dd8ae3b4fc0ab39c7db39c1a7770e6a92c378668be8281f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e04ddbf3e1e099f7dd8ae3b4fc0ab39c7db39c1a7770e6a92c378668be8281f->enter($__internal_3e04ddbf3e1e099f7dd8ae3b4fc0ab39c7db39c1a7770e6a92c378668be8281f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_3e04ddbf3e1e099f7dd8ae3b4fc0ab39c7db39c1a7770e6a92c378668be8281f->leave($__internal_3e04ddbf3e1e099f7dd8ae3b4fc0ab39c7db39c1a7770e6a92c378668be8281f_prof);

        
        $__internal_f1c1f9b3d45204b7e66626a04a054359c46e28a1377928c013a01064e724bf5b->leave($__internal_f1c1f9b3d45204b7e66626a04a054359c46e28a1377928c013a01064e724bf5b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_77699dcbd71adf4c033ccb6c7d0c3470a9c75aaa001c408f01f3df6b62a8b6a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77699dcbd71adf4c033ccb6c7d0c3470a9c75aaa001c408f01f3df6b62a8b6a5->enter($__internal_77699dcbd71adf4c033ccb6c7d0c3470a9c75aaa001c408f01f3df6b62a8b6a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a79ccd71d939795cb429e283ae08cc0cb3487bc1223663dcb34d6664828d2036 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a79ccd71d939795cb429e283ae08cc0cb3487bc1223663dcb34d6664828d2036->enter($__internal_a79ccd71d939795cb429e283ae08cc0cb3487bc1223663dcb34d6664828d2036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a79ccd71d939795cb429e283ae08cc0cb3487bc1223663dcb34d6664828d2036->leave($__internal_a79ccd71d939795cb429e283ae08cc0cb3487bc1223663dcb34d6664828d2036_prof);

        
        $__internal_77699dcbd71adf4c033ccb6c7d0c3470a9c75aaa001c408f01f3df6b62a8b6a5->leave($__internal_77699dcbd71adf4c033ccb6c7d0c3470a9c75aaa001c408f01f3df6b62a8b6a5_prof);

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