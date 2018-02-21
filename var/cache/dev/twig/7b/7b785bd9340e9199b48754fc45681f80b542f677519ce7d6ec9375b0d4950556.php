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
        $__internal_c25fac9f0badc6ed63cdb5a417251954dc0e589dd219dc536a8c89cc1c3ff503 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c25fac9f0badc6ed63cdb5a417251954dc0e589dd219dc536a8c89cc1c3ff503->enter($__internal_c25fac9f0badc6ed63cdb5a417251954dc0e589dd219dc536a8c89cc1c3ff503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_3cec74bdccafc2323a335257912d8c8f9443b3b970909d0335c728ada4eec93f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cec74bdccafc2323a335257912d8c8f9443b3b970909d0335c728ada4eec93f->enter($__internal_3cec74bdccafc2323a335257912d8c8f9443b3b970909d0335c728ada4eec93f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_c25fac9f0badc6ed63cdb5a417251954dc0e589dd219dc536a8c89cc1c3ff503->leave($__internal_c25fac9f0badc6ed63cdb5a417251954dc0e589dd219dc536a8c89cc1c3ff503_prof);

        
        $__internal_3cec74bdccafc2323a335257912d8c8f9443b3b970909d0335c728ada4eec93f->leave($__internal_3cec74bdccafc2323a335257912d8c8f9443b3b970909d0335c728ada4eec93f_prof);

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
