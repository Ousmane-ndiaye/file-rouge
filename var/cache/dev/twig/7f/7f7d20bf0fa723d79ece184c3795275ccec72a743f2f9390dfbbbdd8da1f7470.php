<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8036970b2f6c4eebcb26741f343431e46198547e170ecb11af2f9ef3d6502a5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_d8312fce460cd40491d8b4ff753767f4d45407d9ce27e5813f0a1a5ecf0386c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8312fce460cd40491d8b4ff753767f4d45407d9ce27e5813f0a1a5ecf0386c2->enter($__internal_d8312fce460cd40491d8b4ff753767f4d45407d9ce27e5813f0a1a5ecf0386c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b6a1d99a037b773c70ceaa62eb0f6b530ba34a78a66c6189c135abfe538f93ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6a1d99a037b773c70ceaa62eb0f6b530ba34a78a66c6189c135abfe538f93ce->enter($__internal_b6a1d99a037b773c70ceaa62eb0f6b530ba34a78a66c6189c135abfe538f93ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8312fce460cd40491d8b4ff753767f4d45407d9ce27e5813f0a1a5ecf0386c2->leave($__internal_d8312fce460cd40491d8b4ff753767f4d45407d9ce27e5813f0a1a5ecf0386c2_prof);

        
        $__internal_b6a1d99a037b773c70ceaa62eb0f6b530ba34a78a66c6189c135abfe538f93ce->leave($__internal_b6a1d99a037b773c70ceaa62eb0f6b530ba34a78a66c6189c135abfe538f93ce_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d49f1bf4cc75a9468830093e3a2ac4e91ba7c6b8c8c94e6c2a1b6b731db78b69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d49f1bf4cc75a9468830093e3a2ac4e91ba7c6b8c8c94e6c2a1b6b731db78b69->enter($__internal_d49f1bf4cc75a9468830093e3a2ac4e91ba7c6b8c8c94e6c2a1b6b731db78b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8b5a2a42093a414a8fb538d438d1898e6d1308e5e8cc92ef4138a8e17ce7baa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b5a2a42093a414a8fb538d438d1898e6d1308e5e8cc92ef4138a8e17ce7baa2->enter($__internal_8b5a2a42093a414a8fb538d438d1898e6d1308e5e8cc92ef4138a8e17ce7baa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8b5a2a42093a414a8fb538d438d1898e6d1308e5e8cc92ef4138a8e17ce7baa2->leave($__internal_8b5a2a42093a414a8fb538d438d1898e6d1308e5e8cc92ef4138a8e17ce7baa2_prof);

        
        $__internal_d49f1bf4cc75a9468830093e3a2ac4e91ba7c6b8c8c94e6c2a1b6b731db78b69->leave($__internal_d49f1bf4cc75a9468830093e3a2ac4e91ba7c6b8c8c94e6c2a1b6b731db78b69_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0d7ec41120d23bf5869396aac8718c8f75fde7d7afb65c08464ebee672128a14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d7ec41120d23bf5869396aac8718c8f75fde7d7afb65c08464ebee672128a14->enter($__internal_0d7ec41120d23bf5869396aac8718c8f75fde7d7afb65c08464ebee672128a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f31b4e4e2b08d23ff86ba96c907d99fd16842976c98de1a0c32d311dfd8c3276 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f31b4e4e2b08d23ff86ba96c907d99fd16842976c98de1a0c32d311dfd8c3276->enter($__internal_f31b4e4e2b08d23ff86ba96c907d99fd16842976c98de1a0c32d311dfd8c3276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_f31b4e4e2b08d23ff86ba96c907d99fd16842976c98de1a0c32d311dfd8c3276->leave($__internal_f31b4e4e2b08d23ff86ba96c907d99fd16842976c98de1a0c32d311dfd8c3276_prof);

        
        $__internal_0d7ec41120d23bf5869396aac8718c8f75fde7d7afb65c08464ebee672128a14->leave($__internal_0d7ec41120d23bf5869396aac8718c8f75fde7d7afb65c08464ebee672128a14_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4b92b07c39c6a5f0e0794bbd1c2b5cfa72b322bb530397843f2573cf85ca904a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b92b07c39c6a5f0e0794bbd1c2b5cfa72b322bb530397843f2573cf85ca904a->enter($__internal_4b92b07c39c6a5f0e0794bbd1c2b5cfa72b322bb530397843f2573cf85ca904a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c700f08c1620be19ab2a37e86d30c1f7a5026508c0def617c6cc44643ee86daa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c700f08c1620be19ab2a37e86d30c1f7a5026508c0def617c6cc44643ee86daa->enter($__internal_c700f08c1620be19ab2a37e86d30c1f7a5026508c0def617c6cc44643ee86daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_c700f08c1620be19ab2a37e86d30c1f7a5026508c0def617c6cc44643ee86daa->leave($__internal_c700f08c1620be19ab2a37e86d30c1f7a5026508c0def617c6cc44643ee86daa_prof);

        
        $__internal_4b92b07c39c6a5f0e0794bbd1c2b5cfa72b322bb530397843f2573cf85ca904a->leave($__internal_4b92b07c39c6a5f0e0794bbd1c2b5cfa72b322bb530397843f2573cf85ca904a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/FILE-ROUGE/original/file-rouge/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
