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
        $__internal_7b15a1560476b70ad8848749c9b3a74477898d3406aff66a8eede816c8edcc20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b15a1560476b70ad8848749c9b3a74477898d3406aff66a8eede816c8edcc20->enter($__internal_7b15a1560476b70ad8848749c9b3a74477898d3406aff66a8eede816c8edcc20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_7d1a89dd854ed502b947a59dc6d9d622b4987dd3d3a88b3f6b9fbb1d4c95896d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d1a89dd854ed502b947a59dc6d9d622b4987dd3d3a88b3f6b9fbb1d4c95896d->enter($__internal_7d1a89dd854ed502b947a59dc6d9d622b4987dd3d3a88b3f6b9fbb1d4c95896d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b15a1560476b70ad8848749c9b3a74477898d3406aff66a8eede816c8edcc20->leave($__internal_7b15a1560476b70ad8848749c9b3a74477898d3406aff66a8eede816c8edcc20_prof);

        
        $__internal_7d1a89dd854ed502b947a59dc6d9d622b4987dd3d3a88b3f6b9fbb1d4c95896d->leave($__internal_7d1a89dd854ed502b947a59dc6d9d622b4987dd3d3a88b3f6b9fbb1d4c95896d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_55c6f3bab7ecdd06c98ae2010329609c1887e14964cf8dd9a37f370090079754 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55c6f3bab7ecdd06c98ae2010329609c1887e14964cf8dd9a37f370090079754->enter($__internal_55c6f3bab7ecdd06c98ae2010329609c1887e14964cf8dd9a37f370090079754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b0cca3406d2409f65a24a1e46f9d750214d32212d6d0fcaf9d44a80cc4bb62dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0cca3406d2409f65a24a1e46f9d750214d32212d6d0fcaf9d44a80cc4bb62dd->enter($__internal_b0cca3406d2409f65a24a1e46f9d750214d32212d6d0fcaf9d44a80cc4bb62dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b0cca3406d2409f65a24a1e46f9d750214d32212d6d0fcaf9d44a80cc4bb62dd->leave($__internal_b0cca3406d2409f65a24a1e46f9d750214d32212d6d0fcaf9d44a80cc4bb62dd_prof);

        
        $__internal_55c6f3bab7ecdd06c98ae2010329609c1887e14964cf8dd9a37f370090079754->leave($__internal_55c6f3bab7ecdd06c98ae2010329609c1887e14964cf8dd9a37f370090079754_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4d9473d40b9cb6d021972868b07203c2d817bab83b72a41eb6ab22b94180cc45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d9473d40b9cb6d021972868b07203c2d817bab83b72a41eb6ab22b94180cc45->enter($__internal_4d9473d40b9cb6d021972868b07203c2d817bab83b72a41eb6ab22b94180cc45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e671f81fc6fdc0747b56e9c7a0b6c526f9b340e1d138f56266914e355ac1e657 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e671f81fc6fdc0747b56e9c7a0b6c526f9b340e1d138f56266914e355ac1e657->enter($__internal_e671f81fc6fdc0747b56e9c7a0b6c526f9b340e1d138f56266914e355ac1e657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e671f81fc6fdc0747b56e9c7a0b6c526f9b340e1d138f56266914e355ac1e657->leave($__internal_e671f81fc6fdc0747b56e9c7a0b6c526f9b340e1d138f56266914e355ac1e657_prof);

        
        $__internal_4d9473d40b9cb6d021972868b07203c2d817bab83b72a41eb6ab22b94180cc45->leave($__internal_4d9473d40b9cb6d021972868b07203c2d817bab83b72a41eb6ab22b94180cc45_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_882d0f70db5606ae1f3b0eb55a401ac59b0e27551261069ba8c50c5fa19f69f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_882d0f70db5606ae1f3b0eb55a401ac59b0e27551261069ba8c50c5fa19f69f5->enter($__internal_882d0f70db5606ae1f3b0eb55a401ac59b0e27551261069ba8c50c5fa19f69f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0d92768fc155f1b2216156352ffdc2431f500a60231a392be0835f3206d2d71c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d92768fc155f1b2216156352ffdc2431f500a60231a392be0835f3206d2d71c->enter($__internal_0d92768fc155f1b2216156352ffdc2431f500a60231a392be0835f3206d2d71c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0d92768fc155f1b2216156352ffdc2431f500a60231a392be0835f3206d2d71c->leave($__internal_0d92768fc155f1b2216156352ffdc2431f500a60231a392be0835f3206d2d71c_prof);

        
        $__internal_882d0f70db5606ae1f3b0eb55a401ac59b0e27551261069ba8c50c5fa19f69f5->leave($__internal_882d0f70db5606ae1f3b0eb55a401ac59b0e27551261069ba8c50c5fa19f69f5_prof);

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
