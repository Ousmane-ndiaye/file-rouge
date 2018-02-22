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
        $__internal_f54a2d05b991b1e2b0bdc14b6d3c32e09827accb5b3560c8e6a9e1ebbcec9e78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f54a2d05b991b1e2b0bdc14b6d3c32e09827accb5b3560c8e6a9e1ebbcec9e78->enter($__internal_f54a2d05b991b1e2b0bdc14b6d3c32e09827accb5b3560c8e6a9e1ebbcec9e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_92a9820a633c71f7529c3300d6e70e3ff919cbb05a4082e714f6613c7a5c876e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92a9820a633c71f7529c3300d6e70e3ff919cbb05a4082e714f6613c7a5c876e->enter($__internal_92a9820a633c71f7529c3300d6e70e3ff919cbb05a4082e714f6613c7a5c876e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_f54a2d05b991b1e2b0bdc14b6d3c32e09827accb5b3560c8e6a9e1ebbcec9e78->leave($__internal_f54a2d05b991b1e2b0bdc14b6d3c32e09827accb5b3560c8e6a9e1ebbcec9e78_prof);

        
        $__internal_92a9820a633c71f7529c3300d6e70e3ff919cbb05a4082e714f6613c7a5c876e->leave($__internal_92a9820a633c71f7529c3300d6e70e3ff919cbb05a4082e714f6613c7a5c876e_prof);

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
