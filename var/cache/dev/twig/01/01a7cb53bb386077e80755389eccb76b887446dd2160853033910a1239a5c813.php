<?php

/* admin/accueil.html.twig */
class __TwigTemplate_ea46664aabeccd3da7341480fff545441ec789321de69c953e14fd49be61acea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base1.html.twig", "admin/accueil.html.twig", 1);
        $this->blocks = array(
            'reservation' => array($this, 'block_reservation'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c9bd6d359e03a256896fe4beae8b9115ed1977c153bd6c0ae3938380b863b2b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9bd6d359e03a256896fe4beae8b9115ed1977c153bd6c0ae3938380b863b2b6->enter($__internal_c9bd6d359e03a256896fe4beae8b9115ed1977c153bd6c0ae3938380b863b2b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/accueil.html.twig"));

        $__internal_af8462b5ab950742b4162f6f6866b9c2d29c6e0d2b3b4e6b241896285ab873ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af8462b5ab950742b4162f6f6866b9c2d29c6e0d2b3b4e6b241896285ab873ff->enter($__internal_af8462b5ab950742b4162f6f6866b9c2d29c6e0d2b3b4e6b241896285ab873ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9bd6d359e03a256896fe4beae8b9115ed1977c153bd6c0ae3938380b863b2b6->leave($__internal_c9bd6d359e03a256896fe4beae8b9115ed1977c153bd6c0ae3938380b863b2b6_prof);

        
        $__internal_af8462b5ab950742b4162f6f6866b9c2d29c6e0d2b3b4e6b241896285ab873ff->leave($__internal_af8462b5ab950742b4162f6f6866b9c2d29c6e0d2b3b4e6b241896285ab873ff_prof);

    }

    // line 2
    public function block_reservation($context, array $blocks = array())
    {
        $__internal_7f459b706141d54ff83dd1ba000e3358ddf2f3fbe21b168d354769c3aaaa75d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f459b706141d54ff83dd1ba000e3358ddf2f3fbe21b168d354769c3aaaa75d7->enter($__internal_7f459b706141d54ff83dd1ba000e3358ddf2f3fbe21b168d354769c3aaaa75d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reservation"));

        $__internal_ba481816596ace7dd40e0451165bed71c4fae7edce4377cff0ea388882ce9d2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba481816596ace7dd40e0451165bed71c4fae7edce4377cff0ea388882ce9d2c->enter($__internal_ba481816596ace7dd40e0451165bed71c4fae7edce4377cff0ea388882ce9d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reservation"));

        // line 3
        echo "    ";
        echo "class=\" \"";
        echo "
";
        
        $__internal_ba481816596ace7dd40e0451165bed71c4fae7edce4377cff0ea388882ce9d2c->leave($__internal_ba481816596ace7dd40e0451165bed71c4fae7edce4377cff0ea388882ce9d2c_prof);

        
        $__internal_7f459b706141d54ff83dd1ba000e3358ddf2f3fbe21b168d354769c3aaaa75d7->leave($__internal_7f459b706141d54ff83dd1ba000e3358ddf2f3fbe21b168d354769c3aaaa75d7_prof);

    }

    public function getTemplateName()
    {
        return "admin/accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base1.html.twig' %}
{% block reservation %}
    {{ 'class=\" \"' }}
{% endblock %}
", "admin/accueil.html.twig", "/var/www/html/File_Rouge/original/soultana.sn/app/Resources/views/admin/accueil.html.twig");
    }
}
