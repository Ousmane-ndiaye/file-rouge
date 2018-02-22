<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_cc9fae85d52094140cdb8b7a0c6582e3d66e16c384a68aa3d2462db8a09be459 extends Twig_Template
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
        $__internal_117263c5c4be2248d0342ce950733ed858c6554e9671a5adf9addf68af1e3cfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_117263c5c4be2248d0342ce950733ed858c6554e9671a5adf9addf68af1e3cfb->enter($__internal_117263c5c4be2248d0342ce950733ed858c6554e9671a5adf9addf68af1e3cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_1ed22c255ed9d494d51190644f19e6b8fce889ddd1f5d66946a0721c215c77ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ed22c255ed9d494d51190644f19e6b8fce889ddd1f5d66946a0721c215c77ce->enter($__internal_1ed22c255ed9d494d51190644f19e6b8fce889ddd1f5d66946a0721c215c77ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_117263c5c4be2248d0342ce950733ed858c6554e9671a5adf9addf68af1e3cfb->leave($__internal_117263c5c4be2248d0342ce950733ed858c6554e9671a5adf9addf68af1e3cfb_prof);

        
        $__internal_1ed22c255ed9d494d51190644f19e6b8fce889ddd1f5d66946a0721c215c77ce->leave($__internal_1ed22c255ed9d494d51190644f19e6b8fce889ddd1f5d66946a0721c215c77ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
