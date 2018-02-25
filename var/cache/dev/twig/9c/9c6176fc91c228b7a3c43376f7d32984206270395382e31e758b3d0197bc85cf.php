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
        $__internal_e025ceecbe1bb8f8e76d0a79de1accb09c487c547ea549893836c0983d602bc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e025ceecbe1bb8f8e76d0a79de1accb09c487c547ea549893836c0983d602bc0->enter($__internal_e025ceecbe1bb8f8e76d0a79de1accb09c487c547ea549893836c0983d602bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservation:index.html.twig"));

        $__internal_b82e9f3f97d176b656f36292f29c7e8d8c9d431fa9e264587fa628dcdd0b718a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b82e9f3f97d176b656f36292f29c7e8d8c9d431fa9e264587fa628dcdd0b718a->enter($__internal_b82e9f3f97d176b656f36292f29c7e8d8c9d431fa9e264587fa628dcdd0b718a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservation:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e025ceecbe1bb8f8e76d0a79de1accb09c487c547ea549893836c0983d602bc0->leave($__internal_e025ceecbe1bb8f8e76d0a79de1accb09c487c547ea549893836c0983d602bc0_prof);

        
        $__internal_b82e9f3f97d176b656f36292f29c7e8d8c9d431fa9e264587fa628dcdd0b718a->leave($__internal_b82e9f3f97d176b656f36292f29c7e8d8c9d431fa9e264587fa628dcdd0b718a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_46f47d71e0ff5acc6576447a1d1018835a3094ce7651ab73506626b8f06fd318 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46f47d71e0ff5acc6576447a1d1018835a3094ce7651ab73506626b8f06fd318->enter($__internal_46f47d71e0ff5acc6576447a1d1018835a3094ce7651ab73506626b8f06fd318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_99df01f373d291b5582bb20d4e75b0eca4dbc15c009e0ff14a3f3da85a96d0d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99df01f373d291b5582bb20d4e75b0eca4dbc15c009e0ff14a3f3da85a96d0d6->enter($__internal_99df01f373d291b5582bb20d4e75b0eca4dbc15c009e0ff14a3f3da85a96d0d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_99df01f373d291b5582bb20d4e75b0eca4dbc15c009e0ff14a3f3da85a96d0d6->leave($__internal_99df01f373d291b5582bb20d4e75b0eca4dbc15c009e0ff14a3f3da85a96d0d6_prof);

        
        $__internal_46f47d71e0ff5acc6576447a1d1018835a3094ce7651ab73506626b8f06fd318->leave($__internal_46f47d71e0ff5acc6576447a1d1018835a3094ce7651ab73506626b8f06fd318_prof);

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
