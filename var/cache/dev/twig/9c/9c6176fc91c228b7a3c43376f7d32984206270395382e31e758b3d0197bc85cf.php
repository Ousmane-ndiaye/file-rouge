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
        $__internal_d4e0410a19fd3b2d975d6b1f0433c901e96f1c36f66aebc120664afce0e9448e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4e0410a19fd3b2d975d6b1f0433c901e96f1c36f66aebc120664afce0e9448e->enter($__internal_d4e0410a19fd3b2d975d6b1f0433c901e96f1c36f66aebc120664afce0e9448e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservation:index.html.twig"));

        $__internal_b1d4a46d8b70b67f318d1ed5d3044a5f2e4024bf5db943e6ed0d9bbf22e6ee01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1d4a46d8b70b67f318d1ed5d3044a5f2e4024bf5db943e6ed0d9bbf22e6ee01->enter($__internal_b1d4a46d8b70b67f318d1ed5d3044a5f2e4024bf5db943e6ed0d9bbf22e6ee01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservation:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4e0410a19fd3b2d975d6b1f0433c901e96f1c36f66aebc120664afce0e9448e->leave($__internal_d4e0410a19fd3b2d975d6b1f0433c901e96f1c36f66aebc120664afce0e9448e_prof);

        
        $__internal_b1d4a46d8b70b67f318d1ed5d3044a5f2e4024bf5db943e6ed0d9bbf22e6ee01->leave($__internal_b1d4a46d8b70b67f318d1ed5d3044a5f2e4024bf5db943e6ed0d9bbf22e6ee01_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_8ea46f5e61ba47ad87b350388b4bf0edeb6107fa23b222893c59ba756cdadc08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ea46f5e61ba47ad87b350388b4bf0edeb6107fa23b222893c59ba756cdadc08->enter($__internal_8ea46f5e61ba47ad87b350388b4bf0edeb6107fa23b222893c59ba756cdadc08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_97ae33aa18951be237639a87c78bfd18b2f9a611ceeeca52ef1f27f3e2d82a7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97ae33aa18951be237639a87c78bfd18b2f9a611ceeeca52ef1f27f3e2d82a7d->enter($__internal_97ae33aa18951be237639a87c78bfd18b2f9a611ceeeca52ef1f27f3e2d82a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_97ae33aa18951be237639a87c78bfd18b2f9a611ceeeca52ef1f27f3e2d82a7d->leave($__internal_97ae33aa18951be237639a87c78bfd18b2f9a611ceeeca52ef1f27f3e2d82a7d_prof);

        
        $__internal_8ea46f5e61ba47ad87b350388b4bf0edeb6107fa23b222893c59ba756cdadc08->leave($__internal_8ea46f5e61ba47ad87b350388b4bf0edeb6107fa23b222893c59ba756cdadc08_prof);

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
