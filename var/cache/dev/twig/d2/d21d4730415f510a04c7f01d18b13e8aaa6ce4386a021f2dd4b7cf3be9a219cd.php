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
        $__internal_792697b0336e14c5ae37ff47baacd19c18ac5902d2a8a217e9067fc380a2154f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_792697b0336e14c5ae37ff47baacd19c18ac5902d2a8a217e9067fc380a2154f->enter($__internal_792697b0336e14c5ae37ff47baacd19c18ac5902d2a8a217e9067fc380a2154f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_0c31da42afc1304c4fe2e77e89076adc9efbb04d9ec852a5d45439adb6ed5363 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c31da42afc1304c4fe2e77e89076adc9efbb04d9ec852a5d45439adb6ed5363->enter($__internal_0c31da42afc1304c4fe2e77e89076adc9efbb04d9ec852a5d45439adb6ed5363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_792697b0336e14c5ae37ff47baacd19c18ac5902d2a8a217e9067fc380a2154f->leave($__internal_792697b0336e14c5ae37ff47baacd19c18ac5902d2a8a217e9067fc380a2154f_prof);

        
        $__internal_0c31da42afc1304c4fe2e77e89076adc9efbb04d9ec852a5d45439adb6ed5363->leave($__internal_0c31da42afc1304c4fe2e77e89076adc9efbb04d9ec852a5d45439adb6ed5363_prof);

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
