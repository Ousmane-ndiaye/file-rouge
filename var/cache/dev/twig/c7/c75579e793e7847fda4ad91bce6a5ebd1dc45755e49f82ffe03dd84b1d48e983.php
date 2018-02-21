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
        $__internal_e4f4ef78e4062e98343fd004bc02e90d60a88dc6601e5bf9924a808bdd19a9fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4f4ef78e4062e98343fd004bc02e90d60a88dc6601e5bf9924a808bdd19a9fe->enter($__internal_e4f4ef78e4062e98343fd004bc02e90d60a88dc6601e5bf9924a808bdd19a9fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_11109e9ae654cb0dd754c75f02c79294c87f869be38417b6160105f8e2b306f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11109e9ae654cb0dd754c75f02c79294c87f869be38417b6160105f8e2b306f7->enter($__internal_11109e9ae654cb0dd754c75f02c79294c87f869be38417b6160105f8e2b306f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4f4ef78e4062e98343fd004bc02e90d60a88dc6601e5bf9924a808bdd19a9fe->leave($__internal_e4f4ef78e4062e98343fd004bc02e90d60a88dc6601e5bf9924a808bdd19a9fe_prof);

        
        $__internal_11109e9ae654cb0dd754c75f02c79294c87f869be38417b6160105f8e2b306f7->leave($__internal_11109e9ae654cb0dd754c75f02c79294c87f869be38417b6160105f8e2b306f7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b8e8de4cbdd1bde0caa1fa09458b20a9555bdffee9dba444e645598daf1e3058 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8e8de4cbdd1bde0caa1fa09458b20a9555bdffee9dba444e645598daf1e3058->enter($__internal_b8e8de4cbdd1bde0caa1fa09458b20a9555bdffee9dba444e645598daf1e3058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bf32e64e9118cfe2b803f8f04810b0faf0483ae70c87d1bf618b418c533151fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf32e64e9118cfe2b803f8f04810b0faf0483ae70c87d1bf618b418c533151fe->enter($__internal_bf32e64e9118cfe2b803f8f04810b0faf0483ae70c87d1bf618b418c533151fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_bf32e64e9118cfe2b803f8f04810b0faf0483ae70c87d1bf618b418c533151fe->leave($__internal_bf32e64e9118cfe2b803f8f04810b0faf0483ae70c87d1bf618b418c533151fe_prof);

        
        $__internal_b8e8de4cbdd1bde0caa1fa09458b20a9555bdffee9dba444e645598daf1e3058->leave($__internal_b8e8de4cbdd1bde0caa1fa09458b20a9555bdffee9dba444e645598daf1e3058_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_06b26928a95c08b446b67096ef41661830ae54a7e1378bebf96f00de61494b68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06b26928a95c08b446b67096ef41661830ae54a7e1378bebf96f00de61494b68->enter($__internal_06b26928a95c08b446b67096ef41661830ae54a7e1378bebf96f00de61494b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a19cf47698742206177e2b167de4e50e5502cbaf1541de61d3fca3b36463188d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a19cf47698742206177e2b167de4e50e5502cbaf1541de61d3fca3b36463188d->enter($__internal_a19cf47698742206177e2b167de4e50e5502cbaf1541de61d3fca3b36463188d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a19cf47698742206177e2b167de4e50e5502cbaf1541de61d3fca3b36463188d->leave($__internal_a19cf47698742206177e2b167de4e50e5502cbaf1541de61d3fca3b36463188d_prof);

        
        $__internal_06b26928a95c08b446b67096ef41661830ae54a7e1378bebf96f00de61494b68->leave($__internal_06b26928a95c08b446b67096ef41661830ae54a7e1378bebf96f00de61494b68_prof);

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
