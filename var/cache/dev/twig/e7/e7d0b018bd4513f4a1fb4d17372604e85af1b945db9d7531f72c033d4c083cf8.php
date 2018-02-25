<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_a673ceafd720c665011418fe4d7e17959c129a9bfa99d999ab0acaad0fb16271 extends Twig_Template
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
        $__internal_77eb05196ed397515468005c3ecbf3732318eb6183c2865043eb5ddddaa66212 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77eb05196ed397515468005c3ecbf3732318eb6183c2865043eb5ddddaa66212->enter($__internal_77eb05196ed397515468005c3ecbf3732318eb6183c2865043eb5ddddaa66212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_4452e55058b43d395ee69c1d1f3805d2f65eb92de449478b801202846b0157d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4452e55058b43d395ee69c1d1f3805d2f65eb92de449478b801202846b0157d3->enter($__internal_4452e55058b43d395ee69c1d1f3805d2f65eb92de449478b801202846b0157d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_77eb05196ed397515468005c3ecbf3732318eb6183c2865043eb5ddddaa66212->leave($__internal_77eb05196ed397515468005c3ecbf3732318eb6183c2865043eb5ddddaa66212_prof);

        
        $__internal_4452e55058b43d395ee69c1d1f3805d2f65eb92de449478b801202846b0157d3->leave($__internal_4452e55058b43d395ee69c1d1f3805d2f65eb92de449478b801202846b0157d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
