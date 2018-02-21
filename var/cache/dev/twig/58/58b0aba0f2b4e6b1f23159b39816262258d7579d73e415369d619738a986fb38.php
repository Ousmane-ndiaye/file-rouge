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
        $__internal_b96849761592c7cf23c0df46ed6b7f8802233a69dd4ff2e93cecd9d5772f51d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b96849761592c7cf23c0df46ed6b7f8802233a69dd4ff2e93cecd9d5772f51d6->enter($__internal_b96849761592c7cf23c0df46ed6b7f8802233a69dd4ff2e93cecd9d5772f51d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_4248d87077b9f0e2eb8157d00f9d31144776fa4d7a1c51440dd753ba7e8c219c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4248d87077b9f0e2eb8157d00f9d31144776fa4d7a1c51440dd753ba7e8c219c->enter($__internal_4248d87077b9f0e2eb8157d00f9d31144776fa4d7a1c51440dd753ba7e8c219c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_b96849761592c7cf23c0df46ed6b7f8802233a69dd4ff2e93cecd9d5772f51d6->leave($__internal_b96849761592c7cf23c0df46ed6b7f8802233a69dd4ff2e93cecd9d5772f51d6_prof);

        
        $__internal_4248d87077b9f0e2eb8157d00f9d31144776fa4d7a1c51440dd753ba7e8c219c->leave($__internal_4248d87077b9f0e2eb8157d00f9d31144776fa4d7a1c51440dd753ba7e8c219c_prof);

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
