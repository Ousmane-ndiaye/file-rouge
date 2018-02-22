<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_cdf3da827ae15155c54c8a96aa20bd1c1d3a1d98fc877ab9bb83957028972073 extends Twig_Template
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
        $__internal_245b8332de3c508fcd5569b048f4c34c764e32001fbf2987f3caf2af4535e621 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_245b8332de3c508fcd5569b048f4c34c764e32001fbf2987f3caf2af4535e621->enter($__internal_245b8332de3c508fcd5569b048f4c34c764e32001fbf2987f3caf2af4535e621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_230ff33f54197344f2d0cb1e8370cf81e5f45d8554201c33a82e3c72ce481767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_230ff33f54197344f2d0cb1e8370cf81e5f45d8554201c33a82e3c72ce481767->enter($__internal_230ff33f54197344f2d0cb1e8370cf81e5f45d8554201c33a82e3c72ce481767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_245b8332de3c508fcd5569b048f4c34c764e32001fbf2987f3caf2af4535e621->leave($__internal_245b8332de3c508fcd5569b048f4c34c764e32001fbf2987f3caf2af4535e621_prof);

        
        $__internal_230ff33f54197344f2d0cb1e8370cf81e5f45d8554201c33a82e3c72ce481767->leave($__internal_230ff33f54197344f2d0cb1e8370cf81e5f45d8554201c33a82e3c72ce481767_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
