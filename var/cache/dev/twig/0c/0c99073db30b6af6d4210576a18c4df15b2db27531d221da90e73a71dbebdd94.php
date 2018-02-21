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
        $__internal_807828e57a0c9a9e5ea34f8d05d8159d7d57bb77e36e52ef839e22b0aa52154e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_807828e57a0c9a9e5ea34f8d05d8159d7d57bb77e36e52ef839e22b0aa52154e->enter($__internal_807828e57a0c9a9e5ea34f8d05d8159d7d57bb77e36e52ef839e22b0aa52154e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_496a62bafbb1f3f4b0f60e61ab0ec60200f293c4e913dc305bdbd46a731371a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_496a62bafbb1f3f4b0f60e61ab0ec60200f293c4e913dc305bdbd46a731371a7->enter($__internal_496a62bafbb1f3f4b0f60e61ab0ec60200f293c4e913dc305bdbd46a731371a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_807828e57a0c9a9e5ea34f8d05d8159d7d57bb77e36e52ef839e22b0aa52154e->leave($__internal_807828e57a0c9a9e5ea34f8d05d8159d7d57bb77e36e52ef839e22b0aa52154e_prof);

        
        $__internal_496a62bafbb1f3f4b0f60e61ab0ec60200f293c4e913dc305bdbd46a731371a7->leave($__internal_496a62bafbb1f3f4b0f60e61ab0ec60200f293c4e913dc305bdbd46a731371a7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_eeca280b9268ab8aebd89e8a4306ad6654a162e71ed0b7daccfd24144672f3a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eeca280b9268ab8aebd89e8a4306ad6654a162e71ed0b7daccfd24144672f3a1->enter($__internal_eeca280b9268ab8aebd89e8a4306ad6654a162e71ed0b7daccfd24144672f3a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1eab937fa5b0e7a8eed0d6f4e2459bb481ee44aacb488103d877268c7cb65d1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eab937fa5b0e7a8eed0d6f4e2459bb481ee44aacb488103d877268c7cb65d1b->enter($__internal_1eab937fa5b0e7a8eed0d6f4e2459bb481ee44aacb488103d877268c7cb65d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1eab937fa5b0e7a8eed0d6f4e2459bb481ee44aacb488103d877268c7cb65d1b->leave($__internal_1eab937fa5b0e7a8eed0d6f4e2459bb481ee44aacb488103d877268c7cb65d1b_prof);

        
        $__internal_eeca280b9268ab8aebd89e8a4306ad6654a162e71ed0b7daccfd24144672f3a1->leave($__internal_eeca280b9268ab8aebd89e8a4306ad6654a162e71ed0b7daccfd24144672f3a1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_634b3205a7aa0424421af0922e76cf32e810ebd483476f75462d96ba137882ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_634b3205a7aa0424421af0922e76cf32e810ebd483476f75462d96ba137882ea->enter($__internal_634b3205a7aa0424421af0922e76cf32e810ebd483476f75462d96ba137882ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0ef6e83131aea2f9326d6f8574b10b785ca73d5a3e11325476896b59d2e823af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ef6e83131aea2f9326d6f8574b10b785ca73d5a3e11325476896b59d2e823af->enter($__internal_0ef6e83131aea2f9326d6f8574b10b785ca73d5a3e11325476896b59d2e823af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0ef6e83131aea2f9326d6f8574b10b785ca73d5a3e11325476896b59d2e823af->leave($__internal_0ef6e83131aea2f9326d6f8574b10b785ca73d5a3e11325476896b59d2e823af_prof);

        
        $__internal_634b3205a7aa0424421af0922e76cf32e810ebd483476f75462d96ba137882ea->leave($__internal_634b3205a7aa0424421af0922e76cf32e810ebd483476f75462d96ba137882ea_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6fd745e221aaff2abf5adf9da6b64d9053182615709455f3abe137d76a7a4c4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fd745e221aaff2abf5adf9da6b64d9053182615709455f3abe137d76a7a4c4c->enter($__internal_6fd745e221aaff2abf5adf9da6b64d9053182615709455f3abe137d76a7a4c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_203be05398350827bb0f0c6c4332b46cbd9d8cb035aca935898d3a160f9c7159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_203be05398350827bb0f0c6c4332b46cbd9d8cb035aca935898d3a160f9c7159->enter($__internal_203be05398350827bb0f0c6c4332b46cbd9d8cb035aca935898d3a160f9c7159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_203be05398350827bb0f0c6c4332b46cbd9d8cb035aca935898d3a160f9c7159->leave($__internal_203be05398350827bb0f0c6c4332b46cbd9d8cb035aca935898d3a160f9c7159_prof);

        
        $__internal_6fd745e221aaff2abf5adf9da6b64d9053182615709455f3abe137d76a7a4c4c->leave($__internal_6fd745e221aaff2abf5adf9da6b64d9053182615709455f3abe137d76a7a4c4c_prof);

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
