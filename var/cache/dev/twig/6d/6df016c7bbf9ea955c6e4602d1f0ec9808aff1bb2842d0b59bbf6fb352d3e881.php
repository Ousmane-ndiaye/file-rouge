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
        $__internal_30d2fc51cda58dacb74148bd340c929ae07ccc08d986eec1b01f6b7cfa048b0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30d2fc51cda58dacb74148bd340c929ae07ccc08d986eec1b01f6b7cfa048b0b->enter($__internal_30d2fc51cda58dacb74148bd340c929ae07ccc08d986eec1b01f6b7cfa048b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_e381a4d1bd5fd45b9b7bc2bfed8325bcdf9daf3924eea6b69beea030eab05b90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e381a4d1bd5fd45b9b7bc2bfed8325bcdf9daf3924eea6b69beea030eab05b90->enter($__internal_e381a4d1bd5fd45b9b7bc2bfed8325bcdf9daf3924eea6b69beea030eab05b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30d2fc51cda58dacb74148bd340c929ae07ccc08d986eec1b01f6b7cfa048b0b->leave($__internal_30d2fc51cda58dacb74148bd340c929ae07ccc08d986eec1b01f6b7cfa048b0b_prof);

        
        $__internal_e381a4d1bd5fd45b9b7bc2bfed8325bcdf9daf3924eea6b69beea030eab05b90->leave($__internal_e381a4d1bd5fd45b9b7bc2bfed8325bcdf9daf3924eea6b69beea030eab05b90_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_992b8daffa666edea15941a2b35a0cc52546a830bd52313f6716e364d45a413a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_992b8daffa666edea15941a2b35a0cc52546a830bd52313f6716e364d45a413a->enter($__internal_992b8daffa666edea15941a2b35a0cc52546a830bd52313f6716e364d45a413a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f86e41532873e08eaecefcf8aa36608a09f3facdbc3c104f23ce2a0f9b4936d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f86e41532873e08eaecefcf8aa36608a09f3facdbc3c104f23ce2a0f9b4936d7->enter($__internal_f86e41532873e08eaecefcf8aa36608a09f3facdbc3c104f23ce2a0f9b4936d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f86e41532873e08eaecefcf8aa36608a09f3facdbc3c104f23ce2a0f9b4936d7->leave($__internal_f86e41532873e08eaecefcf8aa36608a09f3facdbc3c104f23ce2a0f9b4936d7_prof);

        
        $__internal_992b8daffa666edea15941a2b35a0cc52546a830bd52313f6716e364d45a413a->leave($__internal_992b8daffa666edea15941a2b35a0cc52546a830bd52313f6716e364d45a413a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e590b8f736e229eb307be9c13a14a2d42eb53777b696802535aa27e3e611bd10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e590b8f736e229eb307be9c13a14a2d42eb53777b696802535aa27e3e611bd10->enter($__internal_e590b8f736e229eb307be9c13a14a2d42eb53777b696802535aa27e3e611bd10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_17b17d1c2115b082b7113e16792a54752e4e1b3bdaaa305c87cddee1330f3baf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17b17d1c2115b082b7113e16792a54752e4e1b3bdaaa305c87cddee1330f3baf->enter($__internal_17b17d1c2115b082b7113e16792a54752e4e1b3bdaaa305c87cddee1330f3baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_17b17d1c2115b082b7113e16792a54752e4e1b3bdaaa305c87cddee1330f3baf->leave($__internal_17b17d1c2115b082b7113e16792a54752e4e1b3bdaaa305c87cddee1330f3baf_prof);

        
        $__internal_e590b8f736e229eb307be9c13a14a2d42eb53777b696802535aa27e3e611bd10->leave($__internal_e590b8f736e229eb307be9c13a14a2d42eb53777b696802535aa27e3e611bd10_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e1363afbbea6e63b3e597ca8de295a9ae34d52b2230ef114b20bd09bf1016058 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1363afbbea6e63b3e597ca8de295a9ae34d52b2230ef114b20bd09bf1016058->enter($__internal_e1363afbbea6e63b3e597ca8de295a9ae34d52b2230ef114b20bd09bf1016058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_25089e865a346231af115ee7f1336b52008f92ea1fdb1145e1d067e12b5bb48a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25089e865a346231af115ee7f1336b52008f92ea1fdb1145e1d067e12b5bb48a->enter($__internal_25089e865a346231af115ee7f1336b52008f92ea1fdb1145e1d067e12b5bb48a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_25089e865a346231af115ee7f1336b52008f92ea1fdb1145e1d067e12b5bb48a->leave($__internal_25089e865a346231af115ee7f1336b52008f92ea1fdb1145e1d067e12b5bb48a_prof);

        
        $__internal_e1363afbbea6e63b3e597ca8de295a9ae34d52b2230ef114b20bd09bf1016058->leave($__internal_e1363afbbea6e63b3e597ca8de295a9ae34d52b2230ef114b20bd09bf1016058_prof);

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
