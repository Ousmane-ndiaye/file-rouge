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
        $__internal_2a6c33130280fab24b5cc2f04fb079f218c0fecfcc61753626fc274477282c98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a6c33130280fab24b5cc2f04fb079f218c0fecfcc61753626fc274477282c98->enter($__internal_2a6c33130280fab24b5cc2f04fb079f218c0fecfcc61753626fc274477282c98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_4f4c4ac6f520aa80cbc2efa05643e1cf569d95d5e65d4d10e36dbcd24fd0c37c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f4c4ac6f520aa80cbc2efa05643e1cf569d95d5e65d4d10e36dbcd24fd0c37c->enter($__internal_4f4c4ac6f520aa80cbc2efa05643e1cf569d95d5e65d4d10e36dbcd24fd0c37c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a6c33130280fab24b5cc2f04fb079f218c0fecfcc61753626fc274477282c98->leave($__internal_2a6c33130280fab24b5cc2f04fb079f218c0fecfcc61753626fc274477282c98_prof);

        
        $__internal_4f4c4ac6f520aa80cbc2efa05643e1cf569d95d5e65d4d10e36dbcd24fd0c37c->leave($__internal_4f4c4ac6f520aa80cbc2efa05643e1cf569d95d5e65d4d10e36dbcd24fd0c37c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3ec0c59ecebaac6d43b0a3270f922309f67031698531f470266de8656c3bdd32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ec0c59ecebaac6d43b0a3270f922309f67031698531f470266de8656c3bdd32->enter($__internal_3ec0c59ecebaac6d43b0a3270f922309f67031698531f470266de8656c3bdd32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d2b5aee45dd2adec0969c63ad8579dedd03fb59ab498c824ee1d6f6afae7b865 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2b5aee45dd2adec0969c63ad8579dedd03fb59ab498c824ee1d6f6afae7b865->enter($__internal_d2b5aee45dd2adec0969c63ad8579dedd03fb59ab498c824ee1d6f6afae7b865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d2b5aee45dd2adec0969c63ad8579dedd03fb59ab498c824ee1d6f6afae7b865->leave($__internal_d2b5aee45dd2adec0969c63ad8579dedd03fb59ab498c824ee1d6f6afae7b865_prof);

        
        $__internal_3ec0c59ecebaac6d43b0a3270f922309f67031698531f470266de8656c3bdd32->leave($__internal_3ec0c59ecebaac6d43b0a3270f922309f67031698531f470266de8656c3bdd32_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e250638b07177d924e642a8c3d95de1cd21f163a11dcbe2012bb61cea0202096 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e250638b07177d924e642a8c3d95de1cd21f163a11dcbe2012bb61cea0202096->enter($__internal_e250638b07177d924e642a8c3d95de1cd21f163a11dcbe2012bb61cea0202096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d9596a16f465329a6cfe6237a608394406f7d5fa13a94996495c2d3273b457be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9596a16f465329a6cfe6237a608394406f7d5fa13a94996495c2d3273b457be->enter($__internal_d9596a16f465329a6cfe6237a608394406f7d5fa13a94996495c2d3273b457be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d9596a16f465329a6cfe6237a608394406f7d5fa13a94996495c2d3273b457be->leave($__internal_d9596a16f465329a6cfe6237a608394406f7d5fa13a94996495c2d3273b457be_prof);

        
        $__internal_e250638b07177d924e642a8c3d95de1cd21f163a11dcbe2012bb61cea0202096->leave($__internal_e250638b07177d924e642a8c3d95de1cd21f163a11dcbe2012bb61cea0202096_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1c0b4b2d16424655cd544d0b5a6f8ecc0286bad4a80a150f97a67e215935c919 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c0b4b2d16424655cd544d0b5a6f8ecc0286bad4a80a150f97a67e215935c919->enter($__internal_1c0b4b2d16424655cd544d0b5a6f8ecc0286bad4a80a150f97a67e215935c919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d7c86ed1c22c2471e8c865febd12f6dbce6cae0dfeb133de3965adfd62c41171 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7c86ed1c22c2471e8c865febd12f6dbce6cae0dfeb133de3965adfd62c41171->enter($__internal_d7c86ed1c22c2471e8c865febd12f6dbce6cae0dfeb133de3965adfd62c41171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d7c86ed1c22c2471e8c865febd12f6dbce6cae0dfeb133de3965adfd62c41171->leave($__internal_d7c86ed1c22c2471e8c865febd12f6dbce6cae0dfeb133de3965adfd62c41171_prof);

        
        $__internal_1c0b4b2d16424655cd544d0b5a6f8ecc0286bad4a80a150f97a67e215935c919->leave($__internal_1c0b4b2d16424655cd544d0b5a6f8ecc0286bad4a80a150f97a67e215935c919_prof);

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
