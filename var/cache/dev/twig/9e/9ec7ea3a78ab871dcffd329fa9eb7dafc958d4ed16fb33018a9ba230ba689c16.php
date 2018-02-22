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
        $__internal_2777e969b9af6736f5104743db4bf4e099d53ac65d4d879605bbd3783e428f6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2777e969b9af6736f5104743db4bf4e099d53ac65d4d879605bbd3783e428f6c->enter($__internal_2777e969b9af6736f5104743db4bf4e099d53ac65d4d879605bbd3783e428f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RESERVATIONBundle:Default:index.html.twig"));

        $__internal_5cf093b4b1400083b55e525296c99201580c01dab024cde1acc3642c9afad5f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cf093b4b1400083b55e525296c99201580c01dab024cde1acc3642c9afad5f1->enter($__internal_5cf093b4b1400083b55e525296c99201580c01dab024cde1acc3642c9afad5f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RESERVATIONBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2777e969b9af6736f5104743db4bf4e099d53ac65d4d879605bbd3783e428f6c->leave($__internal_2777e969b9af6736f5104743db4bf4e099d53ac65d4d879605bbd3783e428f6c_prof);

        
        $__internal_5cf093b4b1400083b55e525296c99201580c01dab024cde1acc3642c9afad5f1->leave($__internal_5cf093b4b1400083b55e525296c99201580c01dab024cde1acc3642c9afad5f1_prof);

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
