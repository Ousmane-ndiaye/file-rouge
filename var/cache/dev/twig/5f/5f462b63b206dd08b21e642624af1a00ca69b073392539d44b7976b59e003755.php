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
        $__internal_2b45db65e433b518dfee2d01e60d74e5af2b94e2aa18f5dbdf73cf491a731668 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b45db65e433b518dfee2d01e60d74e5af2b94e2aa18f5dbdf73cf491a731668->enter($__internal_2b45db65e433b518dfee2d01e60d74e5af2b94e2aa18f5dbdf73cf491a731668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_8efa91a682149605bdb0b51f17a3ec12f6da381d44e7c5401efb47e2c17cee0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8efa91a682149605bdb0b51f17a3ec12f6da381d44e7c5401efb47e2c17cee0f->enter($__internal_8efa91a682149605bdb0b51f17a3ec12f6da381d44e7c5401efb47e2c17cee0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_2b45db65e433b518dfee2d01e60d74e5af2b94e2aa18f5dbdf73cf491a731668->leave($__internal_2b45db65e433b518dfee2d01e60d74e5af2b94e2aa18f5dbdf73cf491a731668_prof);

        
        $__internal_8efa91a682149605bdb0b51f17a3ec12f6da381d44e7c5401efb47e2c17cee0f->leave($__internal_8efa91a682149605bdb0b51f17a3ec12f6da381d44e7c5401efb47e2c17cee0f_prof);

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
