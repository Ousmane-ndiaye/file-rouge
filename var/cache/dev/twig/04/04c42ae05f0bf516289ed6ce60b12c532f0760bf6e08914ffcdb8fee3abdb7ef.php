<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_ff2814c4535e25ff5cc9ea8737fa8de347b740af97908b15085b3dd34d2f999a extends Twig_Template
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
        $__internal_61f4336904c2793266fe3407839a93074d49a7f4bd0121d88eeaacaf99350883 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61f4336904c2793266fe3407839a93074d49a7f4bd0121d88eeaacaf99350883->enter($__internal_61f4336904c2793266fe3407839a93074d49a7f4bd0121d88eeaacaf99350883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_58b1c328b28eaa3873cd1d5eee692a10193e5fb027a228804074640fe0aff2d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58b1c328b28eaa3873cd1d5eee692a10193e5fb027a228804074640fe0aff2d3->enter($__internal_58b1c328b28eaa3873cd1d5eee692a10193e5fb027a228804074640fe0aff2d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_61f4336904c2793266fe3407839a93074d49a7f4bd0121d88eeaacaf99350883->leave($__internal_61f4336904c2793266fe3407839a93074d49a7f4bd0121d88eeaacaf99350883_prof);

        
        $__internal_58b1c328b28eaa3873cd1d5eee692a10193e5fb027a228804074640fe0aff2d3->leave($__internal_58b1c328b28eaa3873cd1d5eee692a10193e5fb027a228804074640fe0aff2d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
