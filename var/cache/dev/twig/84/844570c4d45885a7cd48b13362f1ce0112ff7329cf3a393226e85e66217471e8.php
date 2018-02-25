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
        $__internal_08bd2b4da69042f17a95f0b08e78f70beaa61139a449064df1f6ab018cb3823e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08bd2b4da69042f17a95f0b08e78f70beaa61139a449064df1f6ab018cb3823e->enter($__internal_08bd2b4da69042f17a95f0b08e78f70beaa61139a449064df1f6ab018cb3823e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_b58d394f60cfe7e2ae33deda8ab5d31c9268c1d1a44ccd0eacfeeaa425785cfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b58d394f60cfe7e2ae33deda8ab5d31c9268c1d1a44ccd0eacfeeaa425785cfd->enter($__internal_b58d394f60cfe7e2ae33deda8ab5d31c9268c1d1a44ccd0eacfeeaa425785cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_08bd2b4da69042f17a95f0b08e78f70beaa61139a449064df1f6ab018cb3823e->leave($__internal_08bd2b4da69042f17a95f0b08e78f70beaa61139a449064df1f6ab018cb3823e_prof);

        
        $__internal_b58d394f60cfe7e2ae33deda8ab5d31c9268c1d1a44ccd0eacfeeaa425785cfd->leave($__internal_b58d394f60cfe7e2ae33deda8ab5d31c9268c1d1a44ccd0eacfeeaa425785cfd_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_3d8f3d5dd92e17f9c26c17f04de109f1f15cd71de6f129ca81a9aa0b59ff6957 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d8f3d5dd92e17f9c26c17f04de109f1f15cd71de6f129ca81a9aa0b59ff6957->enter($__internal_3d8f3d5dd92e17f9c26c17f04de109f1f15cd71de6f129ca81a9aa0b59ff6957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_acf989418e6f069340768ad33de35e50bbb338fbb59ec89bdab357df60765683 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acf989418e6f069340768ad33de35e50bbb338fbb59ec89bdab357df60765683->enter($__internal_acf989418e6f069340768ad33de35e50bbb338fbb59ec89bdab357df60765683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_acf989418e6f069340768ad33de35e50bbb338fbb59ec89bdab357df60765683->leave($__internal_acf989418e6f069340768ad33de35e50bbb338fbb59ec89bdab357df60765683_prof);

        
        $__internal_3d8f3d5dd92e17f9c26c17f04de109f1f15cd71de6f129ca81a9aa0b59ff6957->leave($__internal_3d8f3d5dd92e17f9c26c17f04de109f1f15cd71de6f129ca81a9aa0b59ff6957_prof);

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
