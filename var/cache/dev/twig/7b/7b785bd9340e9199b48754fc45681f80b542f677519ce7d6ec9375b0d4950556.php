<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_964e8ad35f4cbf0d7dcd1b9d02a66645a5af639f97878953f462401a21938253 extends Twig_Template
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
        $__internal_05bf5bf334bfdeb3fa8b2c5769054ab0a72c5c986e5bb1d5e7361996a907459d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05bf5bf334bfdeb3fa8b2c5769054ab0a72c5c986e5bb1d5e7361996a907459d->enter($__internal_05bf5bf334bfdeb3fa8b2c5769054ab0a72c5c986e5bb1d5e7361996a907459d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_e9176859c406eae62c0ffa4b0db6e8e44cd8b4c9f6988b53f45f7dd5f76dfdb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9176859c406eae62c0ffa4b0db6e8e44cd8b4c9f6988b53f45f7dd5f76dfdb2->enter($__internal_e9176859c406eae62c0ffa4b0db6e8e44cd8b4c9f6988b53f45f7dd5f76dfdb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_05bf5bf334bfdeb3fa8b2c5769054ab0a72c5c986e5bb1d5e7361996a907459d->leave($__internal_05bf5bf334bfdeb3fa8b2c5769054ab0a72c5c986e5bb1d5e7361996a907459d_prof);

        
        $__internal_e9176859c406eae62c0ffa4b0db6e8e44cd8b4c9f6988b53f45f7dd5f76dfdb2->leave($__internal_e9176859c406eae62c0ffa4b0db6e8e44cd8b4c9f6988b53f45f7dd5f76dfdb2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
