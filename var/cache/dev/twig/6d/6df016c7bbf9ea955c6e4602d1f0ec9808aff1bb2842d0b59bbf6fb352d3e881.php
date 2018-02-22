<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_5de615a0208f2685a1eb05868ee35ffcca2bd97cf086fb0fe3f060e0bbbff1de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_4dbfbfd8673b00be61a02587fd412b821b2f3c4f73d5fd26af95238889e1ddf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dbfbfd8673b00be61a02587fd412b821b2f3c4f73d5fd26af95238889e1ddf7->enter($__internal_4dbfbfd8673b00be61a02587fd412b821b2f3c4f73d5fd26af95238889e1ddf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_a1909e530b175ecb2f1de6db085592f7fbb845db6a4f083a4e7dbe6d659c6ae9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1909e530b175ecb2f1de6db085592f7fbb845db6a4f083a4e7dbe6d659c6ae9->enter($__internal_a1909e530b175ecb2f1de6db085592f7fbb845db6a4f083a4e7dbe6d659c6ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4dbfbfd8673b00be61a02587fd412b821b2f3c4f73d5fd26af95238889e1ddf7->leave($__internal_4dbfbfd8673b00be61a02587fd412b821b2f3c4f73d5fd26af95238889e1ddf7_prof);

        
        $__internal_a1909e530b175ecb2f1de6db085592f7fbb845db6a4f083a4e7dbe6d659c6ae9->leave($__internal_a1909e530b175ecb2f1de6db085592f7fbb845db6a4f083a4e7dbe6d659c6ae9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ae9a5f4c50d68fd08c3e0c200167c7b6aec0a1f15b44c30307a133b8c5541bcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae9a5f4c50d68fd08c3e0c200167c7b6aec0a1f15b44c30307a133b8c5541bcb->enter($__internal_ae9a5f4c50d68fd08c3e0c200167c7b6aec0a1f15b44c30307a133b8c5541bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_207c2c4857b075d4c415a043fc98937f44bd9a1e0560f3bf54403e6537110f0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_207c2c4857b075d4c415a043fc98937f44bd9a1e0560f3bf54403e6537110f0b->enter($__internal_207c2c4857b075d4c415a043fc98937f44bd9a1e0560f3bf54403e6537110f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_207c2c4857b075d4c415a043fc98937f44bd9a1e0560f3bf54403e6537110f0b->leave($__internal_207c2c4857b075d4c415a043fc98937f44bd9a1e0560f3bf54403e6537110f0b_prof);

        
        $__internal_ae9a5f4c50d68fd08c3e0c200167c7b6aec0a1f15b44c30307a133b8c5541bcb->leave($__internal_ae9a5f4c50d68fd08c3e0c200167c7b6aec0a1f15b44c30307a133b8c5541bcb_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9bf08eb3cee2e6d5969e50c59d5bb68ecc139c40cbed6253f21da63da7dccb74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bf08eb3cee2e6d5969e50c59d5bb68ecc139c40cbed6253f21da63da7dccb74->enter($__internal_9bf08eb3cee2e6d5969e50c59d5bb68ecc139c40cbed6253f21da63da7dccb74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4f9624e917e2bc31c0180b8bbacf7141491f3d1a328e0a2b1bec22353cd81943 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f9624e917e2bc31c0180b8bbacf7141491f3d1a328e0a2b1bec22353cd81943->enter($__internal_4f9624e917e2bc31c0180b8bbacf7141491f3d1a328e0a2b1bec22353cd81943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_4f9624e917e2bc31c0180b8bbacf7141491f3d1a328e0a2b1bec22353cd81943->leave($__internal_4f9624e917e2bc31c0180b8bbacf7141491f3d1a328e0a2b1bec22353cd81943_prof);

        
        $__internal_9bf08eb3cee2e6d5969e50c59d5bb68ecc139c40cbed6253f21da63da7dccb74->leave($__internal_9bf08eb3cee2e6d5969e50c59d5bb68ecc139c40cbed6253f21da63da7dccb74_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ca065c479cf762091ac3b3214511e9313c1a42d3624b3cc5c72b011d2b329d27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca065c479cf762091ac3b3214511e9313c1a42d3624b3cc5c72b011d2b329d27->enter($__internal_ca065c479cf762091ac3b3214511e9313c1a42d3624b3cc5c72b011d2b329d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5fd19f5ea8b663b3586a972971d8c41d2319575f8aa63aa10ab8b32fa20f6843 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fd19f5ea8b663b3586a972971d8c41d2319575f8aa63aa10ab8b32fa20f6843->enter($__internal_5fd19f5ea8b663b3586a972971d8c41d2319575f8aa63aa10ab8b32fa20f6843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_5fd19f5ea8b663b3586a972971d8c41d2319575f8aa63aa10ab8b32fa20f6843->leave($__internal_5fd19f5ea8b663b3586a972971d8c41d2319575f8aa63aa10ab8b32fa20f6843_prof);

        
        $__internal_ca065c479cf762091ac3b3214511e9313c1a42d3624b3cc5c72b011d2b329d27->leave($__internal_ca065c479cf762091ac3b3214511e9313c1a42d3624b3cc5c72b011d2b329d27_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
