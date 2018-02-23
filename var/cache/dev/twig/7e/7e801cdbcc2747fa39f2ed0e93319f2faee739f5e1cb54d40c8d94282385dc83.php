<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_d8add65daa6b4b2b35f02ed7c4b0ab966cc0d9d0bcaa1ee841fb5270089c261e extends Twig_Template
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
        $__internal_6da914e7c1caa3f980439f2aa324af4da3f73af1dd0caa9915f5c824ce3952ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6da914e7c1caa3f980439f2aa324af4da3f73af1dd0caa9915f5c824ce3952ea->enter($__internal_6da914e7c1caa3f980439f2aa324af4da3f73af1dd0caa9915f5c824ce3952ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_247545e857894e402ca790b2d32e7f34fa70e270f590d30246d64b31b7b175fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_247545e857894e402ca790b2d32e7f34fa70e270f590d30246d64b31b7b175fe->enter($__internal_247545e857894e402ca790b2d32e7f34fa70e270f590d30246d64b31b7b175fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_6da914e7c1caa3f980439f2aa324af4da3f73af1dd0caa9915f5c824ce3952ea->leave($__internal_6da914e7c1caa3f980439f2aa324af4da3f73af1dd0caa9915f5c824ce3952ea_prof);

        
        $__internal_247545e857894e402ca790b2d32e7f34fa70e270f590d30246d64b31b7b175fe->leave($__internal_247545e857894e402ca790b2d32e7f34fa70e270f590d30246d64b31b7b175fe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
