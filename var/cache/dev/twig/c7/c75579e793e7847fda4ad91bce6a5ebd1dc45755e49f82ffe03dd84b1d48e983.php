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
        $__internal_1d7d9dc2e249622ad9dc257e396b740235994ca4b619bdf43c1e59840b0360a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d7d9dc2e249622ad9dc257e396b740235994ca4b619bdf43c1e59840b0360a3->enter($__internal_1d7d9dc2e249622ad9dc257e396b740235994ca4b619bdf43c1e59840b0360a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_8dd663a50360cf8ad3817581fb8e07881d8c82919ab207a53e8b609cb669244e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dd663a50360cf8ad3817581fb8e07881d8c82919ab207a53e8b609cb669244e->enter($__internal_8dd663a50360cf8ad3817581fb8e07881d8c82919ab207a53e8b609cb669244e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d7d9dc2e249622ad9dc257e396b740235994ca4b619bdf43c1e59840b0360a3->leave($__internal_1d7d9dc2e249622ad9dc257e396b740235994ca4b619bdf43c1e59840b0360a3_prof);

        
        $__internal_8dd663a50360cf8ad3817581fb8e07881d8c82919ab207a53e8b609cb669244e->leave($__internal_8dd663a50360cf8ad3817581fb8e07881d8c82919ab207a53e8b609cb669244e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5198913d095924e252b98646ad5715a8b8331e61ca91ece9a7a09752346128a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5198913d095924e252b98646ad5715a8b8331e61ca91ece9a7a09752346128a6->enter($__internal_5198913d095924e252b98646ad5715a8b8331e61ca91ece9a7a09752346128a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6a8b66642ee8dfe9bb590c92ad5e3c102a69564f496c341048ff6f5b85a78d98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a8b66642ee8dfe9bb590c92ad5e3c102a69564f496c341048ff6f5b85a78d98->enter($__internal_6a8b66642ee8dfe9bb590c92ad5e3c102a69564f496c341048ff6f5b85a78d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_6a8b66642ee8dfe9bb590c92ad5e3c102a69564f496c341048ff6f5b85a78d98->leave($__internal_6a8b66642ee8dfe9bb590c92ad5e3c102a69564f496c341048ff6f5b85a78d98_prof);

        
        $__internal_5198913d095924e252b98646ad5715a8b8331e61ca91ece9a7a09752346128a6->leave($__internal_5198913d095924e252b98646ad5715a8b8331e61ca91ece9a7a09752346128a6_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e5d53fd580ae6ec0f23d1c73351771287048c105cc5e0e3ff2a803e379f332eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5d53fd580ae6ec0f23d1c73351771287048c105cc5e0e3ff2a803e379f332eb->enter($__internal_e5d53fd580ae6ec0f23d1c73351771287048c105cc5e0e3ff2a803e379f332eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8cc47115208d6b267f281c5df1ff6473bea3f2c46889e3c349ec76b44c670c92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cc47115208d6b267f281c5df1ff6473bea3f2c46889e3c349ec76b44c670c92->enter($__internal_8cc47115208d6b267f281c5df1ff6473bea3f2c46889e3c349ec76b44c670c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8cc47115208d6b267f281c5df1ff6473bea3f2c46889e3c349ec76b44c670c92->leave($__internal_8cc47115208d6b267f281c5df1ff6473bea3f2c46889e3c349ec76b44c670c92_prof);

        
        $__internal_e5d53fd580ae6ec0f23d1c73351771287048c105cc5e0e3ff2a803e379f332eb->leave($__internal_e5d53fd580ae6ec0f23d1c73351771287048c105cc5e0e3ff2a803e379f332eb_prof);

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
