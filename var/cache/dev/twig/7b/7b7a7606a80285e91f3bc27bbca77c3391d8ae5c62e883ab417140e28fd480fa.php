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
        $__internal_1ca86930aa32d8f894b08f7f7ba6f2b22c3142ad73a9157b0c1335840dedfc86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ca86930aa32d8f894b08f7f7ba6f2b22c3142ad73a9157b0c1335840dedfc86->enter($__internal_1ca86930aa32d8f894b08f7f7ba6f2b22c3142ad73a9157b0c1335840dedfc86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_0af4f67c9b0bd510c2c8a1468f7771d03264c00c564093005ec386e656cdb07a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0af4f67c9b0bd510c2c8a1468f7771d03264c00c564093005ec386e656cdb07a->enter($__internal_0af4f67c9b0bd510c2c8a1468f7771d03264c00c564093005ec386e656cdb07a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_1ca86930aa32d8f894b08f7f7ba6f2b22c3142ad73a9157b0c1335840dedfc86->leave($__internal_1ca86930aa32d8f894b08f7f7ba6f2b22c3142ad73a9157b0c1335840dedfc86_prof);

        
        $__internal_0af4f67c9b0bd510c2c8a1468f7771d03264c00c564093005ec386e656cdb07a->leave($__internal_0af4f67c9b0bd510c2c8a1468f7771d03264c00c564093005ec386e656cdb07a_prof);

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
