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
        $__internal_c1f80344429dc2750c2f5e535704212ae93d6475765619d89b6e5f87beb7c2a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1f80344429dc2750c2f5e535704212ae93d6475765619d89b6e5f87beb7c2a4->enter($__internal_c1f80344429dc2750c2f5e535704212ae93d6475765619d89b6e5f87beb7c2a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_e3c7fa13acb416cc23d9e04a3f4f141f480bab8d13ce8a8f1866dd3fc3104185 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3c7fa13acb416cc23d9e04a3f4f141f480bab8d13ce8a8f1866dd3fc3104185->enter($__internal_e3c7fa13acb416cc23d9e04a3f4f141f480bab8d13ce8a8f1866dd3fc3104185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_c1f80344429dc2750c2f5e535704212ae93d6475765619d89b6e5f87beb7c2a4->leave($__internal_c1f80344429dc2750c2f5e535704212ae93d6475765619d89b6e5f87beb7c2a4_prof);

        
        $__internal_e3c7fa13acb416cc23d9e04a3f4f141f480bab8d13ce8a8f1866dd3fc3104185->leave($__internal_e3c7fa13acb416cc23d9e04a3f4f141f480bab8d13ce8a8f1866dd3fc3104185_prof);

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
