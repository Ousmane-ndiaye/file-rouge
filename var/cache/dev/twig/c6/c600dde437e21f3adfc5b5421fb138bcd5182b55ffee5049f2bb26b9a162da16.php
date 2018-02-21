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
        $__internal_7e26124e241a6e9ac32518670d09e158d55272de7dac42ab9fd1b55c448b78d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e26124e241a6e9ac32518670d09e158d55272de7dac42ab9fd1b55c448b78d2->enter($__internal_7e26124e241a6e9ac32518670d09e158d55272de7dac42ab9fd1b55c448b78d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_e261614f5478b344b9c96b0a491e08f8ef8c2a303410cba54032fccf098e77df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e261614f5478b344b9c96b0a491e08f8ef8c2a303410cba54032fccf098e77df->enter($__internal_e261614f5478b344b9c96b0a491e08f8ef8c2a303410cba54032fccf098e77df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_7e26124e241a6e9ac32518670d09e158d55272de7dac42ab9fd1b55c448b78d2->leave($__internal_7e26124e241a6e9ac32518670d09e158d55272de7dac42ab9fd1b55c448b78d2_prof);

        
        $__internal_e261614f5478b344b9c96b0a491e08f8ef8c2a303410cba54032fccf098e77df->leave($__internal_e261614f5478b344b9c96b0a491e08f8ef8c2a303410cba54032fccf098e77df_prof);

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
