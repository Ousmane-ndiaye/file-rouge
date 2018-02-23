<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_80510a88aaf2dd5f69b1390322441018455b468488e97e95a301dda3024907a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d16d8a33de3c1e4dfa67e8f1021ccfbe4e1a8d9f2934adabc13cf68c842f6e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d16d8a33de3c1e4dfa67e8f1021ccfbe4e1a8d9f2934adabc13cf68c842f6e7->enter($__internal_2d16d8a33de3c1e4dfa67e8f1021ccfbe4e1a8d9f2934adabc13cf68c842f6e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_15c43572792ddee08811d03453a90269dfb5c55f959bf212b7c11d13455fb314 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15c43572792ddee08811d03453a90269dfb5c55f959bf212b7c11d13455fb314->enter($__internal_15c43572792ddee08811d03453a90269dfb5c55f959bf212b7c11d13455fb314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d16d8a33de3c1e4dfa67e8f1021ccfbe4e1a8d9f2934adabc13cf68c842f6e7->leave($__internal_2d16d8a33de3c1e4dfa67e8f1021ccfbe4e1a8d9f2934adabc13cf68c842f6e7_prof);

        
        $__internal_15c43572792ddee08811d03453a90269dfb5c55f959bf212b7c11d13455fb314->leave($__internal_15c43572792ddee08811d03453a90269dfb5c55f959bf212b7c11d13455fb314_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a3ee92c4b8206e2b6f71966f5c75f4f0fa77902112fd20bb847ca38d38addf9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3ee92c4b8206e2b6f71966f5c75f4f0fa77902112fd20bb847ca38d38addf9b->enter($__internal_a3ee92c4b8206e2b6f71966f5c75f4f0fa77902112fd20bb847ca38d38addf9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dc15079c5e477bc3c6a6ab71efac012e168c547f6ca95bf2f5fd1e248f5dc5c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc15079c5e477bc3c6a6ab71efac012e168c547f6ca95bf2f5fd1e248f5dc5c5->enter($__internal_dc15079c5e477bc3c6a6ab71efac012e168c547f6ca95bf2f5fd1e248f5dc5c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_dc15079c5e477bc3c6a6ab71efac012e168c547f6ca95bf2f5fd1e248f5dc5c5->leave($__internal_dc15079c5e477bc3c6a6ab71efac012e168c547f6ca95bf2f5fd1e248f5dc5c5_prof);

        
        $__internal_a3ee92c4b8206e2b6f71966f5c75f4f0fa77902112fd20bb847ca38d38addf9b->leave($__internal_a3ee92c4b8206e2b6f71966f5c75f4f0fa77902112fd20bb847ca38d38addf9b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5b333727994b30ceed89d2a2606bcf3cbadbcaa5bf2e72b97df947d7b36a1cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5b333727994b30ceed89d2a2606bcf3cbadbcaa5bf2e72b97df947d7b36a1cf->enter($__internal_f5b333727994b30ceed89d2a2606bcf3cbadbcaa5bf2e72b97df947d7b36a1cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a43eec9eae6926ea627a502ae82096fea0a9fa307df11660679af616fa3a3763 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a43eec9eae6926ea627a502ae82096fea0a9fa307df11660679af616fa3a3763->enter($__internal_a43eec9eae6926ea627a502ae82096fea0a9fa307df11660679af616fa3a3763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_a43eec9eae6926ea627a502ae82096fea0a9fa307df11660679af616fa3a3763->leave($__internal_a43eec9eae6926ea627a502ae82096fea0a9fa307df11660679af616fa3a3763_prof);

        
        $__internal_f5b333727994b30ceed89d2a2606bcf3cbadbcaa5bf2e72b97df947d7b36a1cf->leave($__internal_f5b333727994b30ceed89d2a2606bcf3cbadbcaa5bf2e72b97df947d7b36a1cf_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
