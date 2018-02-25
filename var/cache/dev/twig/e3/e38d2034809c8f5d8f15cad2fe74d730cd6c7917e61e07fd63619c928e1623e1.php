<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_5a2fe667ffb853048e57f164ce6f24e226f1ff151c606fe9cb902b81e31f21e6 extends Twig_Template
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
        $__internal_0960816a4e113c8c7dd475642ed113c44e26278821344946b316f4e3c2c318e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0960816a4e113c8c7dd475642ed113c44e26278821344946b316f4e3c2c318e9->enter($__internal_0960816a4e113c8c7dd475642ed113c44e26278821344946b316f4e3c2c318e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_d12ff9f3f5326ed6826784af02677dbe370c0dd4a00ad68d9773851a4ec01141 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d12ff9f3f5326ed6826784af02677dbe370c0dd4a00ad68d9773851a4ec01141->enter($__internal_d12ff9f3f5326ed6826784af02677dbe370c0dd4a00ad68d9773851a4ec01141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_0960816a4e113c8c7dd475642ed113c44e26278821344946b316f4e3c2c318e9->leave($__internal_0960816a4e113c8c7dd475642ed113c44e26278821344946b316f4e3c2c318e9_prof);

        
        $__internal_d12ff9f3f5326ed6826784af02677dbe370c0dd4a00ad68d9773851a4ec01141->leave($__internal_d12ff9f3f5326ed6826784af02677dbe370c0dd4a00ad68d9773851a4ec01141_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
