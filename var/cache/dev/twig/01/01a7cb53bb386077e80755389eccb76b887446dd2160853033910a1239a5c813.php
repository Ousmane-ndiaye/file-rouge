<?php

/* :admin:accueil.html.twig */
class __TwigTemplate_ea46664aabeccd3da7341480fff545441ec789321de69c953e14fd49be61acea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base1.html.twig", ":admin:accueil.html.twig", 1);
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
        $__internal_fae62ff6814effbfc9959bf080ae3e5ab01ed36fa9df8939753e912827186a67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fae62ff6814effbfc9959bf080ae3e5ab01ed36fa9df8939753e912827186a67->enter($__internal_fae62ff6814effbfc9959bf080ae3e5ab01ed36fa9df8939753e912827186a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:accueil.html.twig"));

        $__internal_d3937336ac8ceaee6f001bb2428dc671939f8418255cb3e415964fd89f5418e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3937336ac8ceaee6f001bb2428dc671939f8418255cb3e415964fd89f5418e0->enter($__internal_d3937336ac8ceaee6f001bb2428dc671939f8418255cb3e415964fd89f5418e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fae62ff6814effbfc9959bf080ae3e5ab01ed36fa9df8939753e912827186a67->leave($__internal_fae62ff6814effbfc9959bf080ae3e5ab01ed36fa9df8939753e912827186a67_prof);

        
        $__internal_d3937336ac8ceaee6f001bb2428dc671939f8418255cb3e415964fd89f5418e0->leave($__internal_d3937336ac8ceaee6f001bb2428dc671939f8418255cb3e415964fd89f5418e0_prof);

    }

    // line 2
    public function block_reservation($context, array $blocks = array())
    {
        $__internal_52ca3bd4b9fdae3109e4caea691228a0a7e7689d8a8db9d4ab05b863ca7d4bb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52ca3bd4b9fdae3109e4caea691228a0a7e7689d8a8db9d4ab05b863ca7d4bb6->enter($__internal_52ca3bd4b9fdae3109e4caea691228a0a7e7689d8a8db9d4ab05b863ca7d4bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reservation"));

        $__internal_ae1c28794adfb5384f3c743ff16fe68faf87703ca73de1c766a418118b8ffe75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae1c28794adfb5384f3c743ff16fe68faf87703ca73de1c766a418118b8ffe75->enter($__internal_ae1c28794adfb5384f3c743ff16fe68faf87703ca73de1c766a418118b8ffe75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reservation"));

        // line 3
        echo "    ";
        echo "class=\" \"";
        echo "
";
        
        $__internal_ae1c28794adfb5384f3c743ff16fe68faf87703ca73de1c766a418118b8ffe75->leave($__internal_ae1c28794adfb5384f3c743ff16fe68faf87703ca73de1c766a418118b8ffe75_prof);

        
        $__internal_52ca3bd4b9fdae3109e4caea691228a0a7e7689d8a8db9d4ab05b863ca7d4bb6->leave($__internal_52ca3bd4b9fdae3109e4caea691228a0a7e7689d8a8db9d4ab05b863ca7d4bb6_prof);

    }

    public function getTemplateName()
    {
        return ":admin:accueil.html.twig";
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
", ":admin:accueil.html.twig", "/var/www/html/File_Rouge/original/soultana.sn/app/Resources/views/admin/accueil.html.twig");
    }
}
