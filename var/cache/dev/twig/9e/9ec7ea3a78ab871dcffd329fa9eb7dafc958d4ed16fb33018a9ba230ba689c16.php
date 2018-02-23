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
        $__internal_ad905066bf4bdb8da3511c3c33694214fd1871bdd7691503396333f743a327e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad905066bf4bdb8da3511c3c33694214fd1871bdd7691503396333f743a327e8->enter($__internal_ad905066bf4bdb8da3511c3c33694214fd1871bdd7691503396333f743a327e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RESERVATIONBundle:Default:index.html.twig"));

        $__internal_68988025e419a0172ccea9b278160d6d327499e7f4802f52cf0d211bc8b22943 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68988025e419a0172ccea9b278160d6d327499e7f4802f52cf0d211bc8b22943->enter($__internal_68988025e419a0172ccea9b278160d6d327499e7f4802f52cf0d211bc8b22943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RESERVATIONBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad905066bf4bdb8da3511c3c33694214fd1871bdd7691503396333f743a327e8->leave($__internal_ad905066bf4bdb8da3511c3c33694214fd1871bdd7691503396333f743a327e8_prof);

        
        $__internal_68988025e419a0172ccea9b278160d6d327499e7f4802f52cf0d211bc8b22943->leave($__internal_68988025e419a0172ccea9b278160d6d327499e7f4802f52cf0d211bc8b22943_prof);

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
