<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b0972ea85d093d38911027a775a817705c22243169e9b5875e4b3eceefab67c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_81ad629b46aeaa95b08a00766faede6374660cb5c9557bc6158deac5d8694804 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81ad629b46aeaa95b08a00766faede6374660cb5c9557bc6158deac5d8694804->enter($__internal_81ad629b46aeaa95b08a00766faede6374660cb5c9557bc6158deac5d8694804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_9af4aafa0fd24fdb56e4eace1d74fd0307f18d5eeb78e3759f89a9aec87151eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9af4aafa0fd24fdb56e4eace1d74fd0307f18d5eeb78e3759f89a9aec87151eb->enter($__internal_9af4aafa0fd24fdb56e4eace1d74fd0307f18d5eeb78e3759f89a9aec87151eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81ad629b46aeaa95b08a00766faede6374660cb5c9557bc6158deac5d8694804->leave($__internal_81ad629b46aeaa95b08a00766faede6374660cb5c9557bc6158deac5d8694804_prof);

        
        $__internal_9af4aafa0fd24fdb56e4eace1d74fd0307f18d5eeb78e3759f89a9aec87151eb->leave($__internal_9af4aafa0fd24fdb56e4eace1d74fd0307f18d5eeb78e3759f89a9aec87151eb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7800475514c3ece45f689c0e760b9a3595bc7eceb05b65815bb96e7ec760279d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7800475514c3ece45f689c0e760b9a3595bc7eceb05b65815bb96e7ec760279d->enter($__internal_7800475514c3ece45f689c0e760b9a3595bc7eceb05b65815bb96e7ec760279d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d0f2c0fd28389c83899a1106e5463d552071f2ac8911c67c4b15f187842d97bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0f2c0fd28389c83899a1106e5463d552071f2ac8911c67c4b15f187842d97bf->enter($__internal_d0f2c0fd28389c83899a1106e5463d552071f2ac8911c67c4b15f187842d97bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d0f2c0fd28389c83899a1106e5463d552071f2ac8911c67c4b15f187842d97bf->leave($__internal_d0f2c0fd28389c83899a1106e5463d552071f2ac8911c67c4b15f187842d97bf_prof);

        
        $__internal_7800475514c3ece45f689c0e760b9a3595bc7eceb05b65815bb96e7ec760279d->leave($__internal_7800475514c3ece45f689c0e760b9a3595bc7eceb05b65815bb96e7ec760279d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9e33ce3d0503308d977c2dc078b1bd4f4f2f67edd584e10ff2eb0f81e3ae5299 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e33ce3d0503308d977c2dc078b1bd4f4f2f67edd584e10ff2eb0f81e3ae5299->enter($__internal_9e33ce3d0503308d977c2dc078b1bd4f4f2f67edd584e10ff2eb0f81e3ae5299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9b389f6d0385e952e1e06c7b9c7f66047768962aed34c4a564b221caae468685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b389f6d0385e952e1e06c7b9c7f66047768962aed34c4a564b221caae468685->enter($__internal_9b389f6d0385e952e1e06c7b9c7f66047768962aed34c4a564b221caae468685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9b389f6d0385e952e1e06c7b9c7f66047768962aed34c4a564b221caae468685->leave($__internal_9b389f6d0385e952e1e06c7b9c7f66047768962aed34c4a564b221caae468685_prof);

        
        $__internal_9e33ce3d0503308d977c2dc078b1bd4f4f2f67edd584e10ff2eb0f81e3ae5299->leave($__internal_9e33ce3d0503308d977c2dc078b1bd4f4f2f67edd584e10ff2eb0f81e3ae5299_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5cebec2fc4b8761e85f49f76883552cd8b22d78b9b18c2011884df8730101a62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cebec2fc4b8761e85f49f76883552cd8b22d78b9b18c2011884df8730101a62->enter($__internal_5cebec2fc4b8761e85f49f76883552cd8b22d78b9b18c2011884df8730101a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_839334a359cdb333fca19f01978c41f6e3e3fcbae9aac006e50380c192ce9be4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_839334a359cdb333fca19f01978c41f6e3e3fcbae9aac006e50380c192ce9be4->enter($__internal_839334a359cdb333fca19f01978c41f6e3e3fcbae9aac006e50380c192ce9be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_839334a359cdb333fca19f01978c41f6e3e3fcbae9aac006e50380c192ce9be4->leave($__internal_839334a359cdb333fca19f01978c41f6e3e3fcbae9aac006e50380c192ce9be4_prof);

        
        $__internal_5cebec2fc4b8761e85f49f76883552cd8b22d78b9b18c2011884df8730101a62->leave($__internal_5cebec2fc4b8761e85f49f76883552cd8b22d78b9b18c2011884df8730101a62_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
