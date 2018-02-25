<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_b9fe2bef1d1b026e3c0b7736f21e572ac9473006c19ab78375174fdd839a7745 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d0523b6e42d70357c4371894ea0dc6c4d553f6ba052b5b5f844e4d3a20f31c5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0523b6e42d70357c4371894ea0dc6c4d553f6ba052b5b5f844e4d3a20f31c5a->enter($__internal_d0523b6e42d70357c4371894ea0dc6c4d553f6ba052b5b5f844e4d3a20f31c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_eced61abe1cfb1ed0ea8adc25aa663df57c660d2d7cbd8396886d7e457927a52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eced61abe1cfb1ed0ea8adc25aa663df57c660d2d7cbd8396886d7e457927a52->enter($__internal_eced61abe1cfb1ed0ea8adc25aa663df57c660d2d7cbd8396886d7e457927a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_d0523b6e42d70357c4371894ea0dc6c4d553f6ba052b5b5f844e4d3a20f31c5a->leave($__internal_d0523b6e42d70357c4371894ea0dc6c4d553f6ba052b5b5f844e4d3a20f31c5a_prof);

        
        $__internal_eced61abe1cfb1ed0ea8adc25aa663df57c660d2d7cbd8396886d7e457927a52->leave($__internal_eced61abe1cfb1ed0ea8adc25aa663df57c660d2d7cbd8396886d7e457927a52_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
