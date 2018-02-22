<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_36ad9e7e8f14078c02ec478cec0b2ca9201c6ae985cb598b03c5191159e3899d extends Twig_Template
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
        $__internal_70dffe3b202ef6625ee3745275ec89640f490098f7b9bf195d5f3731d8e8b436 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70dffe3b202ef6625ee3745275ec89640f490098f7b9bf195d5f3731d8e8b436->enter($__internal_70dffe3b202ef6625ee3745275ec89640f490098f7b9bf195d5f3731d8e8b436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_0e8ecc3fdecbeb28af639c01e7e87813127a6123e406cac788d4562b920c0676 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e8ecc3fdecbeb28af639c01e7e87813127a6123e406cac788d4562b920c0676->enter($__internal_0e8ecc3fdecbeb28af639c01e7e87813127a6123e406cac788d4562b920c0676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_70dffe3b202ef6625ee3745275ec89640f490098f7b9bf195d5f3731d8e8b436->leave($__internal_70dffe3b202ef6625ee3745275ec89640f490098f7b9bf195d5f3731d8e8b436_prof);

        
        $__internal_0e8ecc3fdecbeb28af639c01e7e87813127a6123e406cac788d4562b920c0676->leave($__internal_0e8ecc3fdecbeb28af639c01e7e87813127a6123e406cac788d4562b920c0676_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
