<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_15e3cac8b41070ebff04035ece6b4d630489bc4135419d985cd2a85660b856bb extends Twig_Template
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
        $__internal_48e77a1863af49ed828c5bb5d9fef0b909f16d407428b4e636a1cc3dff73fc76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48e77a1863af49ed828c5bb5d9fef0b909f16d407428b4e636a1cc3dff73fc76->enter($__internal_48e77a1863af49ed828c5bb5d9fef0b909f16d407428b4e636a1cc3dff73fc76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_226a134b526b45f9cb55f1e79488035d750e2d18adf330bba9c902ec72ca762a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_226a134b526b45f9cb55f1e79488035d750e2d18adf330bba9c902ec72ca762a->enter($__internal_226a134b526b45f9cb55f1e79488035d750e2d18adf330bba9c902ec72ca762a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_48e77a1863af49ed828c5bb5d9fef0b909f16d407428b4e636a1cc3dff73fc76->leave($__internal_48e77a1863af49ed828c5bb5d9fef0b909f16d407428b4e636a1cc3dff73fc76_prof);

        
        $__internal_226a134b526b45f9cb55f1e79488035d750e2d18adf330bba9c902ec72ca762a->leave($__internal_226a134b526b45f9cb55f1e79488035d750e2d18adf330bba9c902ec72ca762a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
