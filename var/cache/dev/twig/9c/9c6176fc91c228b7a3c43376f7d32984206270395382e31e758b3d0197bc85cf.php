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
        $__internal_a5f7aa2e8f443df208d7c269f9f955b067c3ab723c2314d596f368864745781b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5f7aa2e8f443df208d7c269f9f955b067c3ab723c2314d596f368864745781b->enter($__internal_a5f7aa2e8f443df208d7c269f9f955b067c3ab723c2314d596f368864745781b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservation:index.html.twig"));

        $__internal_b5884a9be3bd99a0ec2678ef4a5aff093de2b896483915b3c29c0382d0d6fc2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5884a9be3bd99a0ec2678ef4a5aff093de2b896483915b3c29c0382d0d6fc2a->enter($__internal_b5884a9be3bd99a0ec2678ef4a5aff093de2b896483915b3c29c0382d0d6fc2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservation:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5f7aa2e8f443df208d7c269f9f955b067c3ab723c2314d596f368864745781b->leave($__internal_a5f7aa2e8f443df208d7c269f9f955b067c3ab723c2314d596f368864745781b_prof);

        
        $__internal_b5884a9be3bd99a0ec2678ef4a5aff093de2b896483915b3c29c0382d0d6fc2a->leave($__internal_b5884a9be3bd99a0ec2678ef4a5aff093de2b896483915b3c29c0382d0d6fc2a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c28e9bfca8332debd2366e8a7ee788879e341afecf641f5916e5c50f92b1f56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c28e9bfca8332debd2366e8a7ee788879e341afecf641f5916e5c50f92b1f56->enter($__internal_5c28e9bfca8332debd2366e8a7ee788879e341afecf641f5916e5c50f92b1f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2f1ffb3a6b44de71660c840d08d47b99e7429e5b564db80cabb5e39806b46db3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f1ffb3a6b44de71660c840d08d47b99e7429e5b564db80cabb5e39806b46db3->enter($__internal_2f1ffb3a6b44de71660c840d08d47b99e7429e5b564db80cabb5e39806b46db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_2f1ffb3a6b44de71660c840d08d47b99e7429e5b564db80cabb5e39806b46db3->leave($__internal_2f1ffb3a6b44de71660c840d08d47b99e7429e5b564db80cabb5e39806b46db3_prof);

        
        $__internal_5c28e9bfca8332debd2366e8a7ee788879e341afecf641f5916e5c50f92b1f56->leave($__internal_5c28e9bfca8332debd2366e8a7ee788879e341afecf641f5916e5c50f92b1f56_prof);

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
