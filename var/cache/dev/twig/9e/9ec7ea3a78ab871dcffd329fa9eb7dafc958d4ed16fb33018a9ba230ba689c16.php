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
        $__internal_f72e33a2fda8b0258e2e3bf4a59809969c4f776feea2e2e9d0ef4dbd3a401fc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f72e33a2fda8b0258e2e3bf4a59809969c4f776feea2e2e9d0ef4dbd3a401fc5->enter($__internal_f72e33a2fda8b0258e2e3bf4a59809969c4f776feea2e2e9d0ef4dbd3a401fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RESERVATIONBundle:Default:index.html.twig"));

        $__internal_2508a27be3b129206f567e6d8996e0306d57d80b1c3687d456f59282a6ef2d66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2508a27be3b129206f567e6d8996e0306d57d80b1c3687d456f59282a6ef2d66->enter($__internal_2508a27be3b129206f567e6d8996e0306d57d80b1c3687d456f59282a6ef2d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RESERVATIONBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f72e33a2fda8b0258e2e3bf4a59809969c4f776feea2e2e9d0ef4dbd3a401fc5->leave($__internal_f72e33a2fda8b0258e2e3bf4a59809969c4f776feea2e2e9d0ef4dbd3a401fc5_prof);

        
        $__internal_2508a27be3b129206f567e6d8996e0306d57d80b1c3687d456f59282a6ef2d66->leave($__internal_2508a27be3b129206f567e6d8996e0306d57d80b1c3687d456f59282a6ef2d66_prof);

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
