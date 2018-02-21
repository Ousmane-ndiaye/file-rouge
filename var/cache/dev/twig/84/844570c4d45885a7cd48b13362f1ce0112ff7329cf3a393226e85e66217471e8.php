<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_80c55c5087d3696954d172ff4a55ff231052f4df06063093bf12476658e03caf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7c6930e894fc5bd1e4e32bb7eb180e7160cfc1dbd1f1e67b044bd075d14ba8d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c6930e894fc5bd1e4e32bb7eb180e7160cfc1dbd1f1e67b044bd075d14ba8d6->enter($__internal_7c6930e894fc5bd1e4e32bb7eb180e7160cfc1dbd1f1e67b044bd075d14ba8d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_dae0bb85df4043f06e4b47f0b43e5e3a91e29f4b79ab102babf7b592526a62e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dae0bb85df4043f06e4b47f0b43e5e3a91e29f4b79ab102babf7b592526a62e3->enter($__internal_dae0bb85df4043f06e4b47f0b43e5e3a91e29f4b79ab102babf7b592526a62e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7c6930e894fc5bd1e4e32bb7eb180e7160cfc1dbd1f1e67b044bd075d14ba8d6->leave($__internal_7c6930e894fc5bd1e4e32bb7eb180e7160cfc1dbd1f1e67b044bd075d14ba8d6_prof);

        
        $__internal_dae0bb85df4043f06e4b47f0b43e5e3a91e29f4b79ab102babf7b592526a62e3->leave($__internal_dae0bb85df4043f06e4b47f0b43e5e3a91e29f4b79ab102babf7b592526a62e3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ee7ca610b20d671fa2a3cc7d4714d4d8b1e63a641af497ef56e020a347c4a052 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee7ca610b20d671fa2a3cc7d4714d4d8b1e63a641af497ef56e020a347c4a052->enter($__internal_ee7ca610b20d671fa2a3cc7d4714d4d8b1e63a641af497ef56e020a347c4a052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0e0316a6452c5daa377220a0c19d9d7eaace2e97b10f9a8288f68eadccc4bfb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e0316a6452c5daa377220a0c19d9d7eaace2e97b10f9a8288f68eadccc4bfb9->enter($__internal_0e0316a6452c5daa377220a0c19d9d7eaace2e97b10f9a8288f68eadccc4bfb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0e0316a6452c5daa377220a0c19d9d7eaace2e97b10f9a8288f68eadccc4bfb9->leave($__internal_0e0316a6452c5daa377220a0c19d9d7eaace2e97b10f9a8288f68eadccc4bfb9_prof);

        
        $__internal_ee7ca610b20d671fa2a3cc7d4714d4d8b1e63a641af497ef56e020a347c4a052->leave($__internal_ee7ca610b20d671fa2a3cc7d4714d4d8b1e63a641af497ef56e020a347c4a052_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
