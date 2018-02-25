<?php

/* RESERVATIONBundle:Default:index.html.twig */
class __TwigTemplate_76eba2022b4542c215ae0eb31fdadb6088cfdd99120253745feb5bd1a372463e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "RESERVATIONBundle:Default:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1ae5645096368d92732261e0eedfd0f13677c34b26e4bf5817a09af1f5dfa75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1ae5645096368d92732261e0eedfd0f13677c34b26e4bf5817a09af1f5dfa75->enter($__internal_b1ae5645096368d92732261e0eedfd0f13677c34b26e4bf5817a09af1f5dfa75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RESERVATIONBundle:Default:index.html.twig"));

        $__internal_434d63848b9eb66be9d6f32ca5077b3f0336a62bec151df3d683b96042d7146d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_434d63848b9eb66be9d6f32ca5077b3f0336a62bec151df3d683b96042d7146d->enter($__internal_434d63848b9eb66be9d6f32ca5077b3f0336a62bec151df3d683b96042d7146d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RESERVATIONBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1ae5645096368d92732261e0eedfd0f13677c34b26e4bf5817a09af1f5dfa75->leave($__internal_b1ae5645096368d92732261e0eedfd0f13677c34b26e4bf5817a09af1f5dfa75_prof);

        
        $__internal_434d63848b9eb66be9d6f32ca5077b3f0336a62bec151df3d683b96042d7146d->leave($__internal_434d63848b9eb66be9d6f32ca5077b3f0336a62bec151df3d683b96042d7146d_prof);

    }

    public function getTemplateName()
    {
        return "RESERVATIONBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}
", "RESERVATIONBundle:Default:index.html.twig", "/var/www/html/File_Rouge/original/soultana.sn/src/SNT/ReservationBundle/Resources/views/Default/index.html.twig");
    }
}
