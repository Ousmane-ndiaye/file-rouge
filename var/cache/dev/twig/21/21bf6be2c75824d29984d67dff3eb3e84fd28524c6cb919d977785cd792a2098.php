<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_b899e230b900d2b3d22cc796f5c3e88ddc745e5e93d6d9aceea31f84a82f7bb0 extends Twig_Template
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
        $__internal_38e7357a2852dde8bd334e6c10c1510da90411abb933664b0ee300e139dbcddc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38e7357a2852dde8bd334e6c10c1510da90411abb933664b0ee300e139dbcddc->enter($__internal_38e7357a2852dde8bd334e6c10c1510da90411abb933664b0ee300e139dbcddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_4bf4b38f511d1708c533015589fd0462abc2f188cd2e89d7075627ba4a485cad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bf4b38f511d1708c533015589fd0462abc2f188cd2e89d7075627ba4a485cad->enter($__internal_4bf4b38f511d1708c533015589fd0462abc2f188cd2e89d7075627ba4a485cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_38e7357a2852dde8bd334e6c10c1510da90411abb933664b0ee300e139dbcddc->leave($__internal_38e7357a2852dde8bd334e6c10c1510da90411abb933664b0ee300e139dbcddc_prof);

        
        $__internal_4bf4b38f511d1708c533015589fd0462abc2f188cd2e89d7075627ba4a485cad->leave($__internal_4bf4b38f511d1708c533015589fd0462abc2f188cd2e89d7075627ba4a485cad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
