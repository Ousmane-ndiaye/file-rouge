<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_2f2e5890ceb5219354dfa04e1836adfa25b0acab71c7ad33dcab7a774e484068 extends Twig_Template
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
        $__internal_7ca3d7409bfe7b514b1fa3b0e9985af0f68c7a31ead51ab3be0be78a559dcce6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ca3d7409bfe7b514b1fa3b0e9985af0f68c7a31ead51ab3be0be78a559dcce6->enter($__internal_7ca3d7409bfe7b514b1fa3b0e9985af0f68c7a31ead51ab3be0be78a559dcce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_1513e6b01eee2f83f17a4c3876445edca7e4c6a01bb26fc8a7c07399f077ffac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1513e6b01eee2f83f17a4c3876445edca7e4c6a01bb26fc8a7c07399f077ffac->enter($__internal_1513e6b01eee2f83f17a4c3876445edca7e4c6a01bb26fc8a7c07399f077ffac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_7ca3d7409bfe7b514b1fa3b0e9985af0f68c7a31ead51ab3be0be78a559dcce6->leave($__internal_7ca3d7409bfe7b514b1fa3b0e9985af0f68c7a31ead51ab3be0be78a559dcce6_prof);

        
        $__internal_1513e6b01eee2f83f17a4c3876445edca7e4c6a01bb26fc8a7c07399f077ffac->leave($__internal_1513e6b01eee2f83f17a4c3876445edca7e4c6a01bb26fc8a7c07399f077ffac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
