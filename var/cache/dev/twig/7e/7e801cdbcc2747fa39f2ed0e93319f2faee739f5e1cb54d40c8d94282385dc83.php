<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_d8add65daa6b4b2b35f02ed7c4b0ab966cc0d9d0bcaa1ee841fb5270089c261e extends Twig_Template
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
        $__internal_ba13278d2933a07e77965a32362e5cb65510697b076499ac857872c5915d9b80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba13278d2933a07e77965a32362e5cb65510697b076499ac857872c5915d9b80->enter($__internal_ba13278d2933a07e77965a32362e5cb65510697b076499ac857872c5915d9b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_5f74754fea0a8f9d8586d1ce065b8b2725ce88bb18c8debfe60de2c92c930b0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f74754fea0a8f9d8586d1ce065b8b2725ce88bb18c8debfe60de2c92c930b0c->enter($__internal_5f74754fea0a8f9d8586d1ce065b8b2725ce88bb18c8debfe60de2c92c930b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_ba13278d2933a07e77965a32362e5cb65510697b076499ac857872c5915d9b80->leave($__internal_ba13278d2933a07e77965a32362e5cb65510697b076499ac857872c5915d9b80_prof);

        
        $__internal_5f74754fea0a8f9d8586d1ce065b8b2725ce88bb18c8debfe60de2c92c930b0c->leave($__internal_5f74754fea0a8f9d8586d1ce065b8b2725ce88bb18c8debfe60de2c92c930b0c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
