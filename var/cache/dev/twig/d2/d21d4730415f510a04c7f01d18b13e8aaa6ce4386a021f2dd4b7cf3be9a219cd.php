<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_e36cc2d1e5b1ef6c3bcd5a752e528a6427402c3d616a37af426dc1280df0edb8 extends Twig_Template
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
        $__internal_bb6316a31c2dd7b557b97765a23fda95f38e39f22a0d193ffac8b07d34bdfdd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb6316a31c2dd7b557b97765a23fda95f38e39f22a0d193ffac8b07d34bdfdd4->enter($__internal_bb6316a31c2dd7b557b97765a23fda95f38e39f22a0d193ffac8b07d34bdfdd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_78454136f55d3b1108ad76ec2d8b315e06ac1b36218ea9100eb64f6f397f364f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78454136f55d3b1108ad76ec2d8b315e06ac1b36218ea9100eb64f6f397f364f->enter($__internal_78454136f55d3b1108ad76ec2d8b315e06ac1b36218ea9100eb64f6f397f364f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_bb6316a31c2dd7b557b97765a23fda95f38e39f22a0d193ffac8b07d34bdfdd4->leave($__internal_bb6316a31c2dd7b557b97765a23fda95f38e39f22a0d193ffac8b07d34bdfdd4_prof);

        
        $__internal_78454136f55d3b1108ad76ec2d8b315e06ac1b36218ea9100eb64f6f397f364f->leave($__internal_78454136f55d3b1108ad76ec2d8b315e06ac1b36218ea9100eb64f6f397f364f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
