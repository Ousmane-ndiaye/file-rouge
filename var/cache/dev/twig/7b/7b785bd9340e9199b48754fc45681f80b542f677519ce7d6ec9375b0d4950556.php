<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_964e8ad35f4cbf0d7dcd1b9d02a66645a5af639f97878953f462401a21938253 extends Twig_Template
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
        $__internal_74d025c9d60aa8d858a801c2cdfff2d570df6e2d8eaeaed223f41860625bada6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74d025c9d60aa8d858a801c2cdfff2d570df6e2d8eaeaed223f41860625bada6->enter($__internal_74d025c9d60aa8d858a801c2cdfff2d570df6e2d8eaeaed223f41860625bada6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_75e97c15d24f0c155e78352e8c0915986ab55cbe54ddd1bca17b291f57e24f91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75e97c15d24f0c155e78352e8c0915986ab55cbe54ddd1bca17b291f57e24f91->enter($__internal_75e97c15d24f0c155e78352e8c0915986ab55cbe54ddd1bca17b291f57e24f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_74d025c9d60aa8d858a801c2cdfff2d570df6e2d8eaeaed223f41860625bada6->leave($__internal_74d025c9d60aa8d858a801c2cdfff2d570df6e2d8eaeaed223f41860625bada6_prof);

        
        $__internal_75e97c15d24f0c155e78352e8c0915986ab55cbe54ddd1bca17b291f57e24f91->leave($__internal_75e97c15d24f0c155e78352e8c0915986ab55cbe54ddd1bca17b291f57e24f91_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
