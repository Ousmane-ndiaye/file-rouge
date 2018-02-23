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
        $__internal_6c5cab4f19269d3545c635ea62944084811568a70a7931f6495f8c6163447bcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c5cab4f19269d3545c635ea62944084811568a70a7931f6495f8c6163447bcf->enter($__internal_6c5cab4f19269d3545c635ea62944084811568a70a7931f6495f8c6163447bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservation:index.html.twig"));

        $__internal_5c94226bafba13c647e5232969834d992114a3d0bdb3783c2d9aea6e1b7dad99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c94226bafba13c647e5232969834d992114a3d0bdb3783c2d9aea6e1b7dad99->enter($__internal_5c94226bafba13c647e5232969834d992114a3d0bdb3783c2d9aea6e1b7dad99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservation:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c5cab4f19269d3545c635ea62944084811568a70a7931f6495f8c6163447bcf->leave($__internal_6c5cab4f19269d3545c635ea62944084811568a70a7931f6495f8c6163447bcf_prof);

        
        $__internal_5c94226bafba13c647e5232969834d992114a3d0bdb3783c2d9aea6e1b7dad99->leave($__internal_5c94226bafba13c647e5232969834d992114a3d0bdb3783c2d9aea6e1b7dad99_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_9bc764c219193f572d642b45d620de8fbc8b021705153d822e40f4f3ed9246b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bc764c219193f572d642b45d620de8fbc8b021705153d822e40f4f3ed9246b2->enter($__internal_9bc764c219193f572d642b45d620de8fbc8b021705153d822e40f4f3ed9246b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4109e8822f4aa34a7f8a5a42bf8d1202a96da8f0cdc2ca6e05f3c1f7ada0cfb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4109e8822f4aa34a7f8a5a42bf8d1202a96da8f0cdc2ca6e05f3c1f7ada0cfb3->enter($__internal_4109e8822f4aa34a7f8a5a42bf8d1202a96da8f0cdc2ca6e05f3c1f7ada0cfb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_4109e8822f4aa34a7f8a5a42bf8d1202a96da8f0cdc2ca6e05f3c1f7ada0cfb3->leave($__internal_4109e8822f4aa34a7f8a5a42bf8d1202a96da8f0cdc2ca6e05f3c1f7ada0cfb3_prof);

        
        $__internal_9bc764c219193f572d642b45d620de8fbc8b021705153d822e40f4f3ed9246b2->leave($__internal_9bc764c219193f572d642b45d620de8fbc8b021705153d822e40f4f3ed9246b2_prof);

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
