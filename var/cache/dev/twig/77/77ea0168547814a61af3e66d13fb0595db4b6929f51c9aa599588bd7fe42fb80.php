<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a45254030d9cc98b662ca4ab41f1a18fca407871221561dd5b3a8f7c6d58d3e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_0f223a7c05b9ddf7d88ecac623e981cbf229c092cb314aeabd2d26175e6bdba1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f223a7c05b9ddf7d88ecac623e981cbf229c092cb314aeabd2d26175e6bdba1->enter($__internal_0f223a7c05b9ddf7d88ecac623e981cbf229c092cb314aeabd2d26175e6bdba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_0e5fa3d8f2b53af5e238a1b8eda0c1b1f9c4934f8e005ab0fc0d237ddff4fec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e5fa3d8f2b53af5e238a1b8eda0c1b1f9c4934f8e005ab0fc0d237ddff4fec3->enter($__internal_0e5fa3d8f2b53af5e238a1b8eda0c1b1f9c4934f8e005ab0fc0d237ddff4fec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f223a7c05b9ddf7d88ecac623e981cbf229c092cb314aeabd2d26175e6bdba1->leave($__internal_0f223a7c05b9ddf7d88ecac623e981cbf229c092cb314aeabd2d26175e6bdba1_prof);

        
        $__internal_0e5fa3d8f2b53af5e238a1b8eda0c1b1f9c4934f8e005ab0fc0d237ddff4fec3->leave($__internal_0e5fa3d8f2b53af5e238a1b8eda0c1b1f9c4934f8e005ab0fc0d237ddff4fec3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a0b58d788e97fea1b1f1f01ca06ad67aa9f0c1c3a9e9219927ee276423a5f36c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0b58d788e97fea1b1f1f01ca06ad67aa9f0c1c3a9e9219927ee276423a5f36c->enter($__internal_a0b58d788e97fea1b1f1f01ca06ad67aa9f0c1c3a9e9219927ee276423a5f36c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_076d253b25e996a179bde54eb63d0fdf091170caefe9aad7c3a78ecd07112a77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_076d253b25e996a179bde54eb63d0fdf091170caefe9aad7c3a78ecd07112a77->enter($__internal_076d253b25e996a179bde54eb63d0fdf091170caefe9aad7c3a78ecd07112a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_076d253b25e996a179bde54eb63d0fdf091170caefe9aad7c3a78ecd07112a77->leave($__internal_076d253b25e996a179bde54eb63d0fdf091170caefe9aad7c3a78ecd07112a77_prof);

        
        $__internal_a0b58d788e97fea1b1f1f01ca06ad67aa9f0c1c3a9e9219927ee276423a5f36c->leave($__internal_a0b58d788e97fea1b1f1f01ca06ad67aa9f0c1c3a9e9219927ee276423a5f36c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b4523581e93a6c8d4cd15c7a8ffe76a24ed2d18feae584e10bef3e1b7568ec02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4523581e93a6c8d4cd15c7a8ffe76a24ed2d18feae584e10bef3e1b7568ec02->enter($__internal_b4523581e93a6c8d4cd15c7a8ffe76a24ed2d18feae584e10bef3e1b7568ec02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_949361208305f9c169551fc87534326ee48fc2e7d2b7648ddcf14b9c71d797e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_949361208305f9c169551fc87534326ee48fc2e7d2b7648ddcf14b9c71d797e1->enter($__internal_949361208305f9c169551fc87534326ee48fc2e7d2b7648ddcf14b9c71d797e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_949361208305f9c169551fc87534326ee48fc2e7d2b7648ddcf14b9c71d797e1->leave($__internal_949361208305f9c169551fc87534326ee48fc2e7d2b7648ddcf14b9c71d797e1_prof);

        
        $__internal_b4523581e93a6c8d4cd15c7a8ffe76a24ed2d18feae584e10bef3e1b7568ec02->leave($__internal_b4523581e93a6c8d4cd15c7a8ffe76a24ed2d18feae584e10bef3e1b7568ec02_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c2cbee2323696c23c8efec4295189d63bb121b70636c7d974545e5302086e9e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2cbee2323696c23c8efec4295189d63bb121b70636c7d974545e5302086e9e5->enter($__internal_c2cbee2323696c23c8efec4295189d63bb121b70636c7d974545e5302086e9e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_880bad40bbafca5ea6442cd1ce85b41bd37168a918441f9eaa63b95a781246a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_880bad40bbafca5ea6442cd1ce85b41bd37168a918441f9eaa63b95a781246a8->enter($__internal_880bad40bbafca5ea6442cd1ce85b41bd37168a918441f9eaa63b95a781246a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_880bad40bbafca5ea6442cd1ce85b41bd37168a918441f9eaa63b95a781246a8->leave($__internal_880bad40bbafca5ea6442cd1ce85b41bd37168a918441f9eaa63b95a781246a8_prof);

        
        $__internal_c2cbee2323696c23c8efec4295189d63bb121b70636c7d974545e5302086e9e5->leave($__internal_c2cbee2323696c23c8efec4295189d63bb121b70636c7d974545e5302086e9e5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/FILE-ROUGE/original/file-rouge/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
