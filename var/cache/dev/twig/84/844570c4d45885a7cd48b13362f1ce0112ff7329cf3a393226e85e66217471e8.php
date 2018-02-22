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
        $__internal_2a568a39e0e4d27a6c6adfccc48a03cd6f6dedec44acf2c5c7c2c8bb8a0ee4b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a568a39e0e4d27a6c6adfccc48a03cd6f6dedec44acf2c5c7c2c8bb8a0ee4b4->enter($__internal_2a568a39e0e4d27a6c6adfccc48a03cd6f6dedec44acf2c5c7c2c8bb8a0ee4b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_3c9cdb4e7ad68c061b63868ce5d6bdde7206f288c1467f182ba05308724d88e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c9cdb4e7ad68c061b63868ce5d6bdde7206f288c1467f182ba05308724d88e5->enter($__internal_3c9cdb4e7ad68c061b63868ce5d6bdde7206f288c1467f182ba05308724d88e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2a568a39e0e4d27a6c6adfccc48a03cd6f6dedec44acf2c5c7c2c8bb8a0ee4b4->leave($__internal_2a568a39e0e4d27a6c6adfccc48a03cd6f6dedec44acf2c5c7c2c8bb8a0ee4b4_prof);

        
        $__internal_3c9cdb4e7ad68c061b63868ce5d6bdde7206f288c1467f182ba05308724d88e5->leave($__internal_3c9cdb4e7ad68c061b63868ce5d6bdde7206f288c1467f182ba05308724d88e5_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d022f86220c4d16c4e84d47a648e9ed642350365b1d97601b9f48b61b8ff85f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d022f86220c4d16c4e84d47a648e9ed642350365b1d97601b9f48b61b8ff85f9->enter($__internal_d022f86220c4d16c4e84d47a648e9ed642350365b1d97601b9f48b61b8ff85f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8c30d3be0ffca572cc55c8fa58f4fc6375e5c847578119395d78e122f23eaac8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c30d3be0ffca572cc55c8fa58f4fc6375e5c847578119395d78e122f23eaac8->enter($__internal_8c30d3be0ffca572cc55c8fa58f4fc6375e5c847578119395d78e122f23eaac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8c30d3be0ffca572cc55c8fa58f4fc6375e5c847578119395d78e122f23eaac8->leave($__internal_8c30d3be0ffca572cc55c8fa58f4fc6375e5c847578119395d78e122f23eaac8_prof);

        
        $__internal_d022f86220c4d16c4e84d47a648e9ed642350365b1d97601b9f48b61b8ff85f9->leave($__internal_d022f86220c4d16c4e84d47a648e9ed642350365b1d97601b9f48b61b8ff85f9_prof);

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
