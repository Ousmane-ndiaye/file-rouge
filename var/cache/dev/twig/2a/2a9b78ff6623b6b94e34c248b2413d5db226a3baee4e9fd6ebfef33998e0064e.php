<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_bc1bfe15eb0c1682c3df10213cf5a9ec1e103b13f1bcab79bcdc91cd6a77def5 extends Twig_Template
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
        $__internal_bff96bf1755fbe37dd4cbab9e364941d18e6bfa8e6bc894a8e21128aa7f7441d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bff96bf1755fbe37dd4cbab9e364941d18e6bfa8e6bc894a8e21128aa7f7441d->enter($__internal_bff96bf1755fbe37dd4cbab9e364941d18e6bfa8e6bc894a8e21128aa7f7441d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_3023921fb7984df820aad21c434dad9dbbbf30ad55203acbf2893b9d26aa898f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3023921fb7984df820aad21c434dad9dbbbf30ad55203acbf2893b9d26aa898f->enter($__internal_3023921fb7984df820aad21c434dad9dbbbf30ad55203acbf2893b9d26aa898f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_bff96bf1755fbe37dd4cbab9e364941d18e6bfa8e6bc894a8e21128aa7f7441d->leave($__internal_bff96bf1755fbe37dd4cbab9e364941d18e6bfa8e6bc894a8e21128aa7f7441d_prof);

        
        $__internal_3023921fb7984df820aad21c434dad9dbbbf30ad55203acbf2893b9d26aa898f->leave($__internal_3023921fb7984df820aad21c434dad9dbbbf30ad55203acbf2893b9d26aa898f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
