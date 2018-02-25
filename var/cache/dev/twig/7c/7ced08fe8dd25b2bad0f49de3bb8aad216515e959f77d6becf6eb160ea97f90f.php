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
        $__internal_5a7dadd00dfec3660d40b7d6a5a93a4ed2f9fb3a2389a331d7f9ae4b7244dee5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a7dadd00dfec3660d40b7d6a5a93a4ed2f9fb3a2389a331d7f9ae4b7244dee5->enter($__internal_5a7dadd00dfec3660d40b7d6a5a93a4ed2f9fb3a2389a331d7f9ae4b7244dee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_f00f33410522b3bcf03570c8849dfcd548e723edb1c7eaf88a5f26c36a99576a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f00f33410522b3bcf03570c8849dfcd548e723edb1c7eaf88a5f26c36a99576a->enter($__internal_f00f33410522b3bcf03570c8849dfcd548e723edb1c7eaf88a5f26c36a99576a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a7dadd00dfec3660d40b7d6a5a93a4ed2f9fb3a2389a331d7f9ae4b7244dee5->leave($__internal_5a7dadd00dfec3660d40b7d6a5a93a4ed2f9fb3a2389a331d7f9ae4b7244dee5_prof);

        
        $__internal_f00f33410522b3bcf03570c8849dfcd548e723edb1c7eaf88a5f26c36a99576a->leave($__internal_f00f33410522b3bcf03570c8849dfcd548e723edb1c7eaf88a5f26c36a99576a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4d0b004ad7621e29a7ee71bc4c87df833d5259825cc25b527ecc5b3bddf9cfdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d0b004ad7621e29a7ee71bc4c87df833d5259825cc25b527ecc5b3bddf9cfdd->enter($__internal_4d0b004ad7621e29a7ee71bc4c87df833d5259825cc25b527ecc5b3bddf9cfdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7c00f10367287b1c5cdb363848eb22a8f403af9c284075b2e8770b222d343d37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c00f10367287b1c5cdb363848eb22a8f403af9c284075b2e8770b222d343d37->enter($__internal_7c00f10367287b1c5cdb363848eb22a8f403af9c284075b2e8770b222d343d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7c00f10367287b1c5cdb363848eb22a8f403af9c284075b2e8770b222d343d37->leave($__internal_7c00f10367287b1c5cdb363848eb22a8f403af9c284075b2e8770b222d343d37_prof);

        
        $__internal_4d0b004ad7621e29a7ee71bc4c87df833d5259825cc25b527ecc5b3bddf9cfdd->leave($__internal_4d0b004ad7621e29a7ee71bc4c87df833d5259825cc25b527ecc5b3bddf9cfdd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_530f86c892ec9de6b766f295a54a5f38d0645ab9ab2a198b075255ee907cf45a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_530f86c892ec9de6b766f295a54a5f38d0645ab9ab2a198b075255ee907cf45a->enter($__internal_530f86c892ec9de6b766f295a54a5f38d0645ab9ab2a198b075255ee907cf45a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ed0678e3ac9e937c473626b46609d26103fb41a77bcaf5421708f3f2ea79f927 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed0678e3ac9e937c473626b46609d26103fb41a77bcaf5421708f3f2ea79f927->enter($__internal_ed0678e3ac9e937c473626b46609d26103fb41a77bcaf5421708f3f2ea79f927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ed0678e3ac9e937c473626b46609d26103fb41a77bcaf5421708f3f2ea79f927->leave($__internal_ed0678e3ac9e937c473626b46609d26103fb41a77bcaf5421708f3f2ea79f927_prof);

        
        $__internal_530f86c892ec9de6b766f295a54a5f38d0645ab9ab2a198b075255ee907cf45a->leave($__internal_530f86c892ec9de6b766f295a54a5f38d0645ab9ab2a198b075255ee907cf45a_prof);

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
