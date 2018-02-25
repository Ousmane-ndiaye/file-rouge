<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_bc1bfe15eb0c1682c3df10213cf5a9ec1e103b13f1bcab79bcdc91cd6a77def5 extends Twig_Template
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
        $__internal_a9397627ecc1670642da91aa3689376ff2db1967e69bbfc5d150ed81c5f0f18e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9397627ecc1670642da91aa3689376ff2db1967e69bbfc5d150ed81c5f0f18e->enter($__internal_a9397627ecc1670642da91aa3689376ff2db1967e69bbfc5d150ed81c5f0f18e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_87ae6eb47ab2453d386cea2847fefc55314afca76a75fb90d48fb705c15632bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87ae6eb47ab2453d386cea2847fefc55314afca76a75fb90d48fb705c15632bd->enter($__internal_87ae6eb47ab2453d386cea2847fefc55314afca76a75fb90d48fb705c15632bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a9397627ecc1670642da91aa3689376ff2db1967e69bbfc5d150ed81c5f0f18e->leave($__internal_a9397627ecc1670642da91aa3689376ff2db1967e69bbfc5d150ed81c5f0f18e_prof);

        
        $__internal_87ae6eb47ab2453d386cea2847fefc55314afca76a75fb90d48fb705c15632bd->leave($__internal_87ae6eb47ab2453d386cea2847fefc55314afca76a75fb90d48fb705c15632bd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
