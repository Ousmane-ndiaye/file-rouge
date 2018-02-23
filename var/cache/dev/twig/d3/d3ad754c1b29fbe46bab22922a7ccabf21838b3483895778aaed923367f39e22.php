<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_cc9fae85d52094140cdb8b7a0c6582e3d66e16c384a68aa3d2462db8a09be459 extends Twig_Template
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
        $__internal_2c9f78f18f3ddc1550e000269e8e724c1eb6558a3282bfb7f4510d998c4dec5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c9f78f18f3ddc1550e000269e8e724c1eb6558a3282bfb7f4510d998c4dec5d->enter($__internal_2c9f78f18f3ddc1550e000269e8e724c1eb6558a3282bfb7f4510d998c4dec5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_92deb819a7d50ecafba8aaa2983bc8c86ca2c48201dc25aaea13ccbe89070930 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92deb819a7d50ecafba8aaa2983bc8c86ca2c48201dc25aaea13ccbe89070930->enter($__internal_92deb819a7d50ecafba8aaa2983bc8c86ca2c48201dc25aaea13ccbe89070930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_2c9f78f18f3ddc1550e000269e8e724c1eb6558a3282bfb7f4510d998c4dec5d->leave($__internal_2c9f78f18f3ddc1550e000269e8e724c1eb6558a3282bfb7f4510d998c4dec5d_prof);

        
        $__internal_92deb819a7d50ecafba8aaa2983bc8c86ca2c48201dc25aaea13ccbe89070930->leave($__internal_92deb819a7d50ecafba8aaa2983bc8c86ca2c48201dc25aaea13ccbe89070930_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
