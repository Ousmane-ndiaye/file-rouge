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
        $__internal_cd3d0a44b4b18d6b562992093e02febd100ecc36f20761c104c88bcc81b56bb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd3d0a44b4b18d6b562992093e02febd100ecc36f20761c104c88bcc81b56bb8->enter($__internal_cd3d0a44b4b18d6b562992093e02febd100ecc36f20761c104c88bcc81b56bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_a9b4000df1bd089f2aa7ccaaec7ee050e23c3b517acf6c5d180025b6c9a5da69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9b4000df1bd089f2aa7ccaaec7ee050e23c3b517acf6c5d180025b6c9a5da69->enter($__internal_a9b4000df1bd089f2aa7ccaaec7ee050e23c3b517acf6c5d180025b6c9a5da69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_cd3d0a44b4b18d6b562992093e02febd100ecc36f20761c104c88bcc81b56bb8->leave($__internal_cd3d0a44b4b18d6b562992093e02febd100ecc36f20761c104c88bcc81b56bb8_prof);

        
        $__internal_a9b4000df1bd089f2aa7ccaaec7ee050e23c3b517acf6c5d180025b6c9a5da69->leave($__internal_a9b4000df1bd089f2aa7ccaaec7ee050e23c3b517acf6c5d180025b6c9a5da69_prof);

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
