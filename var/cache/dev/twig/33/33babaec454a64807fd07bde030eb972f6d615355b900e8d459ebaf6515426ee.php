<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_426715d15a10e67499cb0f79af6dc60ac848ad426fa8e22c415a951118105d86 extends Twig_Template
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
        $__internal_58bfa16ae45179eb96a484004e7ea09b30c49d69e5e3ad123ddb3fc39fb8daf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58bfa16ae45179eb96a484004e7ea09b30c49d69e5e3ad123ddb3fc39fb8daf2->enter($__internal_58bfa16ae45179eb96a484004e7ea09b30c49d69e5e3ad123ddb3fc39fb8daf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_6108b2136709277bd06c0c5ea91d3a7f27de5a0320280627a821ffd85d79eb1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6108b2136709277bd06c0c5ea91d3a7f27de5a0320280627a821ffd85d79eb1b->enter($__internal_6108b2136709277bd06c0c5ea91d3a7f27de5a0320280627a821ffd85d79eb1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_58bfa16ae45179eb96a484004e7ea09b30c49d69e5e3ad123ddb3fc39fb8daf2->leave($__internal_58bfa16ae45179eb96a484004e7ea09b30c49d69e5e3ad123ddb3fc39fb8daf2_prof);

        
        $__internal_6108b2136709277bd06c0c5ea91d3a7f27de5a0320280627a821ffd85d79eb1b->leave($__internal_6108b2136709277bd06c0c5ea91d3a7f27de5a0320280627a821ffd85d79eb1b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
