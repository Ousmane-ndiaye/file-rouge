<?php

/* :reservation:index.html.twig */
class __TwigTemplate_5165123f1ce604fc509cc5736164d4bfe37af9e34b0a16dc78fb87b4df26d37b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":reservation:index.html.twig", 1);
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
        $__internal_2aacc4f7b769390993d07406ea9c0f183272bf667ed092623ef7dc251edcb57b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2aacc4f7b769390993d07406ea9c0f183272bf667ed092623ef7dc251edcb57b->enter($__internal_2aacc4f7b769390993d07406ea9c0f183272bf667ed092623ef7dc251edcb57b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservation:index.html.twig"));

        $__internal_b1b93cb2f1e2a2a5a2e2670ef825dc8438d8692dd806492e5fa1a16030ea0e45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1b93cb2f1e2a2a5a2e2670ef825dc8438d8692dd806492e5fa1a16030ea0e45->enter($__internal_b1b93cb2f1e2a2a5a2e2670ef825dc8438d8692dd806492e5fa1a16030ea0e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservation:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2aacc4f7b769390993d07406ea9c0f183272bf667ed092623ef7dc251edcb57b->leave($__internal_2aacc4f7b769390993d07406ea9c0f183272bf667ed092623ef7dc251edcb57b_prof);

        
        $__internal_b1b93cb2f1e2a2a5a2e2670ef825dc8438d8692dd806492e5fa1a16030ea0e45->leave($__internal_b1b93cb2f1e2a2a5a2e2670ef825dc8438d8692dd806492e5fa1a16030ea0e45_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_de7dce3649aaa1f6fa30be356acb4a47fc57ff77d4f271b424fa1973c10f105c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de7dce3649aaa1f6fa30be356acb4a47fc57ff77d4f271b424fa1973c10f105c->enter($__internal_de7dce3649aaa1f6fa30be356acb4a47fc57ff77d4f271b424fa1973c10f105c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_42baee1e8abf7ac48e547b50abee3e255ecc34fc4006ed99df15954333baad6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42baee1e8abf7ac48e547b50abee3e255ecc34fc4006ed99df15954333baad6e->enter($__internal_42baee1e8abf7ac48e547b50abee3e255ecc34fc4006ed99df15954333baad6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_42baee1e8abf7ac48e547b50abee3e255ecc34fc4006ed99df15954333baad6e->leave($__internal_42baee1e8abf7ac48e547b50abee3e255ecc34fc4006ed99df15954333baad6e_prof);

        
        $__internal_de7dce3649aaa1f6fa30be356acb4a47fc57ff77d4f271b424fa1973c10f105c->leave($__internal_de7dce3649aaa1f6fa30be356acb4a47fc57ff77d4f271b424fa1973c10f105c_prof);

    }

    public function getTemplateName()
    {
        return ":reservation:index.html.twig";
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
{% block title %}Accueil{% endblock %}", ":reservation:index.html.twig", "/var/www/html/File_Rouge/original/soultana.sn/app/Resources/views/reservation/index.html.twig");
    }
}
