<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_0cf73d5893792eeda0d00fb03587ceee5be4f7472e9df275352e545c949b5e3b extends Twig_Template
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
        $__internal_95689bc1a57c0e7f2edeb4b9a245135b933b3a354bb1e93d17e13679c7ca90bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95689bc1a57c0e7f2edeb4b9a245135b933b3a354bb1e93d17e13679c7ca90bb->enter($__internal_95689bc1a57c0e7f2edeb4b9a245135b933b3a354bb1e93d17e13679c7ca90bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_b3eddcc5fa7961c31d8c8f881b399383beab0ce3ad388c9a41693e023dfe2437 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3eddcc5fa7961c31d8c8f881b399383beab0ce3ad388c9a41693e023dfe2437->enter($__internal_b3eddcc5fa7961c31d8c8f881b399383beab0ce3ad388c9a41693e023dfe2437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_95689bc1a57c0e7f2edeb4b9a245135b933b3a354bb1e93d17e13679c7ca90bb->leave($__internal_95689bc1a57c0e7f2edeb4b9a245135b933b3a354bb1e93d17e13679c7ca90bb_prof);

        
        $__internal_b3eddcc5fa7961c31d8c8f881b399383beab0ce3ad388c9a41693e023dfe2437->leave($__internal_b3eddcc5fa7961c31d8c8f881b399383beab0ce3ad388c9a41693e023dfe2437_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
