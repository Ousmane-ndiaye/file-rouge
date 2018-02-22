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
        $__internal_0bc068afc4ab13d77e3727b69c70c16803707ffd5dfc526bcfc8280141af81fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bc068afc4ab13d77e3727b69c70c16803707ffd5dfc526bcfc8280141af81fe->enter($__internal_0bc068afc4ab13d77e3727b69c70c16803707ffd5dfc526bcfc8280141af81fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_9ccda07b3d6b47f3aca4bf76f8fe2adb728e7ed97474ea4e588b5e80c3d43aba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ccda07b3d6b47f3aca4bf76f8fe2adb728e7ed97474ea4e588b5e80c3d43aba->enter($__internal_9ccda07b3d6b47f3aca4bf76f8fe2adb728e7ed97474ea4e588b5e80c3d43aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bc068afc4ab13d77e3727b69c70c16803707ffd5dfc526bcfc8280141af81fe->leave($__internal_0bc068afc4ab13d77e3727b69c70c16803707ffd5dfc526bcfc8280141af81fe_prof);

        
        $__internal_9ccda07b3d6b47f3aca4bf76f8fe2adb728e7ed97474ea4e588b5e80c3d43aba->leave($__internal_9ccda07b3d6b47f3aca4bf76f8fe2adb728e7ed97474ea4e588b5e80c3d43aba_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_587f8c0096573d1fbd341631a25940c2c17fbbeda37c49f9058ca3e94cf6f028 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_587f8c0096573d1fbd341631a25940c2c17fbbeda37c49f9058ca3e94cf6f028->enter($__internal_587f8c0096573d1fbd341631a25940c2c17fbbeda37c49f9058ca3e94cf6f028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a0f93b41f0eb9a34a478e7a43d0a942f91ab76d284539b8bd954065cf8b53569 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0f93b41f0eb9a34a478e7a43d0a942f91ab76d284539b8bd954065cf8b53569->enter($__internal_a0f93b41f0eb9a34a478e7a43d0a942f91ab76d284539b8bd954065cf8b53569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a0f93b41f0eb9a34a478e7a43d0a942f91ab76d284539b8bd954065cf8b53569->leave($__internal_a0f93b41f0eb9a34a478e7a43d0a942f91ab76d284539b8bd954065cf8b53569_prof);

        
        $__internal_587f8c0096573d1fbd341631a25940c2c17fbbeda37c49f9058ca3e94cf6f028->leave($__internal_587f8c0096573d1fbd341631a25940c2c17fbbeda37c49f9058ca3e94cf6f028_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c395c88c208393e50f694ff5cfab81fe3457f571a2e2a6505760b2eb9bbfacdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c395c88c208393e50f694ff5cfab81fe3457f571a2e2a6505760b2eb9bbfacdc->enter($__internal_c395c88c208393e50f694ff5cfab81fe3457f571a2e2a6505760b2eb9bbfacdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_98a3312ecf6ee5e893064d6e1f6c7295443f9f53016346b33863a0331e72b29c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98a3312ecf6ee5e893064d6e1f6c7295443f9f53016346b33863a0331e72b29c->enter($__internal_98a3312ecf6ee5e893064d6e1f6c7295443f9f53016346b33863a0331e72b29c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_98a3312ecf6ee5e893064d6e1f6c7295443f9f53016346b33863a0331e72b29c->leave($__internal_98a3312ecf6ee5e893064d6e1f6c7295443f9f53016346b33863a0331e72b29c_prof);

        
        $__internal_c395c88c208393e50f694ff5cfab81fe3457f571a2e2a6505760b2eb9bbfacdc->leave($__internal_c395c88c208393e50f694ff5cfab81fe3457f571a2e2a6505760b2eb9bbfacdc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_20a9fb2c3ca44012fd81972c5b7e41e01a01d218571558e43aa53ed52a1eb1f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20a9fb2c3ca44012fd81972c5b7e41e01a01d218571558e43aa53ed52a1eb1f5->enter($__internal_20a9fb2c3ca44012fd81972c5b7e41e01a01d218571558e43aa53ed52a1eb1f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8ac78118c3bf24f5b59d9e223663197a458c2816c108e621a920575f8b553489 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ac78118c3bf24f5b59d9e223663197a458c2816c108e621a920575f8b553489->enter($__internal_8ac78118c3bf24f5b59d9e223663197a458c2816c108e621a920575f8b553489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8ac78118c3bf24f5b59d9e223663197a458c2816c108e621a920575f8b553489->leave($__internal_8ac78118c3bf24f5b59d9e223663197a458c2816c108e621a920575f8b553489_prof);

        
        $__internal_20a9fb2c3ca44012fd81972c5b7e41e01a01d218571558e43aa53ed52a1eb1f5->leave($__internal_20a9fb2c3ca44012fd81972c5b7e41e01a01d218571558e43aa53ed52a1eb1f5_prof);

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
