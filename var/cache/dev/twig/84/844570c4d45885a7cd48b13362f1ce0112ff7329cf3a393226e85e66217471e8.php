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
        $__internal_4974967a8ee8cb4e639bf9684c1cd37f29c81979e718f8fbc67f7ff9d76c369d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4974967a8ee8cb4e639bf9684c1cd37f29c81979e718f8fbc67f7ff9d76c369d->enter($__internal_4974967a8ee8cb4e639bf9684c1cd37f29c81979e718f8fbc67f7ff9d76c369d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_92472b254e49fbbaf44b20346e0a99c7af57649f14b1483dd3b0c8b78ad8c313 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92472b254e49fbbaf44b20346e0a99c7af57649f14b1483dd3b0c8b78ad8c313->enter($__internal_92472b254e49fbbaf44b20346e0a99c7af57649f14b1483dd3b0c8b78ad8c313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_4974967a8ee8cb4e639bf9684c1cd37f29c81979e718f8fbc67f7ff9d76c369d->leave($__internal_4974967a8ee8cb4e639bf9684c1cd37f29c81979e718f8fbc67f7ff9d76c369d_prof);

        
        $__internal_92472b254e49fbbaf44b20346e0a99c7af57649f14b1483dd3b0c8b78ad8c313->leave($__internal_92472b254e49fbbaf44b20346e0a99c7af57649f14b1483dd3b0c8b78ad8c313_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d8e8e964745edf5e86a28cd9f39439cfa9b5de5155c571fdc5363b92b1e6af0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8e8e964745edf5e86a28cd9f39439cfa9b5de5155c571fdc5363b92b1e6af0c->enter($__internal_d8e8e964745edf5e86a28cd9f39439cfa9b5de5155c571fdc5363b92b1e6af0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_54a447280742b57a1e6b9e6a9ee842685b5b820a1640f9a964a19884365ecb0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54a447280742b57a1e6b9e6a9ee842685b5b820a1640f9a964a19884365ecb0d->enter($__internal_54a447280742b57a1e6b9e6a9ee842685b5b820a1640f9a964a19884365ecb0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_54a447280742b57a1e6b9e6a9ee842685b5b820a1640f9a964a19884365ecb0d->leave($__internal_54a447280742b57a1e6b9e6a9ee842685b5b820a1640f9a964a19884365ecb0d_prof);

        
        $__internal_d8e8e964745edf5e86a28cd9f39439cfa9b5de5155c571fdc5363b92b1e6af0c->leave($__internal_d8e8e964745edf5e86a28cd9f39439cfa9b5de5155c571fdc5363b92b1e6af0c_prof);

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
