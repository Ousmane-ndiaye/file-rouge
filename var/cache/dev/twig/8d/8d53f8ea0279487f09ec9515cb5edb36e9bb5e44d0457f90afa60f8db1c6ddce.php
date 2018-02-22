<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_71e7de65dc322f3baf9afdbd684d2d1da932942dc33f335d8588eb99db32a9d5 extends Twig_Template
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
        $__internal_d7ee9bd13462d54bd47e8691ba1896e25d8eae37a4865c5a6c20a607f7c11fee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7ee9bd13462d54bd47e8691ba1896e25d8eae37a4865c5a6c20a607f7c11fee->enter($__internal_d7ee9bd13462d54bd47e8691ba1896e25d8eae37a4865c5a6c20a607f7c11fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_1a8ee2c48cd23455824d829cfa6ff04dad1ecdd37c6aa55599cfc5635db12201 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a8ee2c48cd23455824d829cfa6ff04dad1ecdd37c6aa55599cfc5635db12201->enter($__internal_1a8ee2c48cd23455824d829cfa6ff04dad1ecdd37c6aa55599cfc5635db12201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_d7ee9bd13462d54bd47e8691ba1896e25d8eae37a4865c5a6c20a607f7c11fee->leave($__internal_d7ee9bd13462d54bd47e8691ba1896e25d8eae37a4865c5a6c20a607f7c11fee_prof);

        
        $__internal_1a8ee2c48cd23455824d829cfa6ff04dad1ecdd37c6aa55599cfc5635db12201->leave($__internal_1a8ee2c48cd23455824d829cfa6ff04dad1ecdd37c6aa55599cfc5635db12201_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
