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
        $__internal_4822c411cc77199b8819fae76dc44a7700262624810473bcd43b3386a609a712 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4822c411cc77199b8819fae76dc44a7700262624810473bcd43b3386a609a712->enter($__internal_4822c411cc77199b8819fae76dc44a7700262624810473bcd43b3386a609a712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_6b6027b1ef8b5336e6d4ab70b75ff2d3ec3bf38ba5ceefbf59520c68a4abdd9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b6027b1ef8b5336e6d4ab70b75ff2d3ec3bf38ba5ceefbf59520c68a4abdd9c->enter($__internal_6b6027b1ef8b5336e6d4ab70b75ff2d3ec3bf38ba5ceefbf59520c68a4abdd9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4822c411cc77199b8819fae76dc44a7700262624810473bcd43b3386a609a712->leave($__internal_4822c411cc77199b8819fae76dc44a7700262624810473bcd43b3386a609a712_prof);

        
        $__internal_6b6027b1ef8b5336e6d4ab70b75ff2d3ec3bf38ba5ceefbf59520c68a4abdd9c->leave($__internal_6b6027b1ef8b5336e6d4ab70b75ff2d3ec3bf38ba5ceefbf59520c68a4abdd9c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7a9d2dd8bf2a6551fe9e405be06952e2b20c328d951a97597cb6af1d7f7d3f6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a9d2dd8bf2a6551fe9e405be06952e2b20c328d951a97597cb6af1d7f7d3f6d->enter($__internal_7a9d2dd8bf2a6551fe9e405be06952e2b20c328d951a97597cb6af1d7f7d3f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ee362f2de0cc5edfb53cb8a8fd57a10ea52dfcf45d6fa19a4d576798e045096f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee362f2de0cc5edfb53cb8a8fd57a10ea52dfcf45d6fa19a4d576798e045096f->enter($__internal_ee362f2de0cc5edfb53cb8a8fd57a10ea52dfcf45d6fa19a4d576798e045096f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ee362f2de0cc5edfb53cb8a8fd57a10ea52dfcf45d6fa19a4d576798e045096f->leave($__internal_ee362f2de0cc5edfb53cb8a8fd57a10ea52dfcf45d6fa19a4d576798e045096f_prof);

        
        $__internal_7a9d2dd8bf2a6551fe9e405be06952e2b20c328d951a97597cb6af1d7f7d3f6d->leave($__internal_7a9d2dd8bf2a6551fe9e405be06952e2b20c328d951a97597cb6af1d7f7d3f6d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_50a9978d7251f7f88a5a6c4c44ccb7613637864f037b405aab6779fc17e88311 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50a9978d7251f7f88a5a6c4c44ccb7613637864f037b405aab6779fc17e88311->enter($__internal_50a9978d7251f7f88a5a6c4c44ccb7613637864f037b405aab6779fc17e88311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_402c23d55effef7a9c03fb82c72bfc13c5437942118e9df8ca736fcdc0b7dfbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_402c23d55effef7a9c03fb82c72bfc13c5437942118e9df8ca736fcdc0b7dfbf->enter($__internal_402c23d55effef7a9c03fb82c72bfc13c5437942118e9df8ca736fcdc0b7dfbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_402c23d55effef7a9c03fb82c72bfc13c5437942118e9df8ca736fcdc0b7dfbf->leave($__internal_402c23d55effef7a9c03fb82c72bfc13c5437942118e9df8ca736fcdc0b7dfbf_prof);

        
        $__internal_50a9978d7251f7f88a5a6c4c44ccb7613637864f037b405aab6779fc17e88311->leave($__internal_50a9978d7251f7f88a5a6c4c44ccb7613637864f037b405aab6779fc17e88311_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c6a231004f040941eddb6e6fca75483a1c0d866b71f6e78059d1c028d73257bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6a231004f040941eddb6e6fca75483a1c0d866b71f6e78059d1c028d73257bc->enter($__internal_c6a231004f040941eddb6e6fca75483a1c0d866b71f6e78059d1c028d73257bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c0b9435a32b8d66fbf8145f194f64281984daaabfc5759c93f87b805528e439d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0b9435a32b8d66fbf8145f194f64281984daaabfc5759c93f87b805528e439d->enter($__internal_c0b9435a32b8d66fbf8145f194f64281984daaabfc5759c93f87b805528e439d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_c0b9435a32b8d66fbf8145f194f64281984daaabfc5759c93f87b805528e439d->leave($__internal_c0b9435a32b8d66fbf8145f194f64281984daaabfc5759c93f87b805528e439d_prof);

        
        $__internal_c6a231004f040941eddb6e6fca75483a1c0d866b71f6e78059d1c028d73257bc->leave($__internal_c6a231004f040941eddb6e6fca75483a1c0d866b71f6e78059d1c028d73257bc_prof);

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
