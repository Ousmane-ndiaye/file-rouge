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
        $__internal_4707ab7d2707255c431225fffce0272e520c9c03c9138957f68e03d707c24966 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4707ab7d2707255c431225fffce0272e520c9c03c9138957f68e03d707c24966->enter($__internal_4707ab7d2707255c431225fffce0272e520c9c03c9138957f68e03d707c24966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_243ec8673626a340d5e36ff59d7072eaf15671efed5a8f9a8939ea4e6912bb93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_243ec8673626a340d5e36ff59d7072eaf15671efed5a8f9a8939ea4e6912bb93->enter($__internal_243ec8673626a340d5e36ff59d7072eaf15671efed5a8f9a8939ea4e6912bb93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4707ab7d2707255c431225fffce0272e520c9c03c9138957f68e03d707c24966->leave($__internal_4707ab7d2707255c431225fffce0272e520c9c03c9138957f68e03d707c24966_prof);

        
        $__internal_243ec8673626a340d5e36ff59d7072eaf15671efed5a8f9a8939ea4e6912bb93->leave($__internal_243ec8673626a340d5e36ff59d7072eaf15671efed5a8f9a8939ea4e6912bb93_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4158a796b025f34ecdf0dcab0175a52cdc65a0132621edeea9f0e6357b30016c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4158a796b025f34ecdf0dcab0175a52cdc65a0132621edeea9f0e6357b30016c->enter($__internal_4158a796b025f34ecdf0dcab0175a52cdc65a0132621edeea9f0e6357b30016c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_055185dea378ca0320b4c388fe43b90a35d24dd988536765f17249ac604f2c15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_055185dea378ca0320b4c388fe43b90a35d24dd988536765f17249ac604f2c15->enter($__internal_055185dea378ca0320b4c388fe43b90a35d24dd988536765f17249ac604f2c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_055185dea378ca0320b4c388fe43b90a35d24dd988536765f17249ac604f2c15->leave($__internal_055185dea378ca0320b4c388fe43b90a35d24dd988536765f17249ac604f2c15_prof);

        
        $__internal_4158a796b025f34ecdf0dcab0175a52cdc65a0132621edeea9f0e6357b30016c->leave($__internal_4158a796b025f34ecdf0dcab0175a52cdc65a0132621edeea9f0e6357b30016c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8a690183b4eb2a83de13aac5aafe47fa57b4c8b68a52d4ad6fdfc7666d0a7270 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a690183b4eb2a83de13aac5aafe47fa57b4c8b68a52d4ad6fdfc7666d0a7270->enter($__internal_8a690183b4eb2a83de13aac5aafe47fa57b4c8b68a52d4ad6fdfc7666d0a7270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_94f08d211f314122bb2917509a5bc40edca9ff0bd2b2c3f68103bce508a1317f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94f08d211f314122bb2917509a5bc40edca9ff0bd2b2c3f68103bce508a1317f->enter($__internal_94f08d211f314122bb2917509a5bc40edca9ff0bd2b2c3f68103bce508a1317f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_94f08d211f314122bb2917509a5bc40edca9ff0bd2b2c3f68103bce508a1317f->leave($__internal_94f08d211f314122bb2917509a5bc40edca9ff0bd2b2c3f68103bce508a1317f_prof);

        
        $__internal_8a690183b4eb2a83de13aac5aafe47fa57b4c8b68a52d4ad6fdfc7666d0a7270->leave($__internal_8a690183b4eb2a83de13aac5aafe47fa57b4c8b68a52d4ad6fdfc7666d0a7270_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5e8712483a84ff4ffd62f39f4e5c8b6e1b6be94b9d33bf44e22ccd08240dd837 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e8712483a84ff4ffd62f39f4e5c8b6e1b6be94b9d33bf44e22ccd08240dd837->enter($__internal_5e8712483a84ff4ffd62f39f4e5c8b6e1b6be94b9d33bf44e22ccd08240dd837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8cef0149c28503d4dbeb867a86c99098f1e10729e7e9a13a1dd2b8974cc2fcd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cef0149c28503d4dbeb867a86c99098f1e10729e7e9a13a1dd2b8974cc2fcd1->enter($__internal_8cef0149c28503d4dbeb867a86c99098f1e10729e7e9a13a1dd2b8974cc2fcd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_8cef0149c28503d4dbeb867a86c99098f1e10729e7e9a13a1dd2b8974cc2fcd1->leave($__internal_8cef0149c28503d4dbeb867a86c99098f1e10729e7e9a13a1dd2b8974cc2fcd1_prof);

        
        $__internal_5e8712483a84ff4ffd62f39f4e5c8b6e1b6be94b9d33bf44e22ccd08240dd837->leave($__internal_5e8712483a84ff4ffd62f39f4e5c8b6e1b6be94b9d33bf44e22ccd08240dd837_prof);

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
