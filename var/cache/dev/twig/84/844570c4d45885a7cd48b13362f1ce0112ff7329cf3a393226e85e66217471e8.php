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
        $__internal_d63e5da6e399cef88120bc230068c4de20e560f4d73e3993b27606766f61ee32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d63e5da6e399cef88120bc230068c4de20e560f4d73e3993b27606766f61ee32->enter($__internal_d63e5da6e399cef88120bc230068c4de20e560f4d73e3993b27606766f61ee32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_792c0a79017fb9d00479a045bca9db7130578c350b1838783aa900eab362db7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_792c0a79017fb9d00479a045bca9db7130578c350b1838783aa900eab362db7d->enter($__internal_792c0a79017fb9d00479a045bca9db7130578c350b1838783aa900eab362db7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d63e5da6e399cef88120bc230068c4de20e560f4d73e3993b27606766f61ee32->leave($__internal_d63e5da6e399cef88120bc230068c4de20e560f4d73e3993b27606766f61ee32_prof);

        
        $__internal_792c0a79017fb9d00479a045bca9db7130578c350b1838783aa900eab362db7d->leave($__internal_792c0a79017fb9d00479a045bca9db7130578c350b1838783aa900eab362db7d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2b2ffbec906d87da3881db5dbd6c1558cc9c45ef98da791395edad8c066e4714 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b2ffbec906d87da3881db5dbd6c1558cc9c45ef98da791395edad8c066e4714->enter($__internal_2b2ffbec906d87da3881db5dbd6c1558cc9c45ef98da791395edad8c066e4714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_90846ff9b44d649f3ad26581502296640ce18e04baf0907c99f6ed3dfe2beb84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90846ff9b44d649f3ad26581502296640ce18e04baf0907c99f6ed3dfe2beb84->enter($__internal_90846ff9b44d649f3ad26581502296640ce18e04baf0907c99f6ed3dfe2beb84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_90846ff9b44d649f3ad26581502296640ce18e04baf0907c99f6ed3dfe2beb84->leave($__internal_90846ff9b44d649f3ad26581502296640ce18e04baf0907c99f6ed3dfe2beb84_prof);

        
        $__internal_2b2ffbec906d87da3881db5dbd6c1558cc9c45ef98da791395edad8c066e4714->leave($__internal_2b2ffbec906d87da3881db5dbd6c1558cc9c45ef98da791395edad8c066e4714_prof);

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
