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
        $__internal_3a61db91d6d91d45c894267ed06aa06852a24e68f5ffd6d68533a4760cf8d1cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a61db91d6d91d45c894267ed06aa06852a24e68f5ffd6d68533a4760cf8d1cb->enter($__internal_3a61db91d6d91d45c894267ed06aa06852a24e68f5ffd6d68533a4760cf8d1cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_8fd1e3622842d3cc953a816f58f3fa725c90ca78ab4e1f3c3981c8187dcd2e20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fd1e3622842d3cc953a816f58f3fa725c90ca78ab4e1f3c3981c8187dcd2e20->enter($__internal_8fd1e3622842d3cc953a816f58f3fa725c90ca78ab4e1f3c3981c8187dcd2e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_3a61db91d6d91d45c894267ed06aa06852a24e68f5ffd6d68533a4760cf8d1cb->leave($__internal_3a61db91d6d91d45c894267ed06aa06852a24e68f5ffd6d68533a4760cf8d1cb_prof);

        
        $__internal_8fd1e3622842d3cc953a816f58f3fa725c90ca78ab4e1f3c3981c8187dcd2e20->leave($__internal_8fd1e3622842d3cc953a816f58f3fa725c90ca78ab4e1f3c3981c8187dcd2e20_prof);

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
