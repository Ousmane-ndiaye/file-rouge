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
        $__internal_2fc0ac1a95e70109adde561066b9c58d634df24c1b0c2f49c4ea0bdb6fafa09c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fc0ac1a95e70109adde561066b9c58d634df24c1b0c2f49c4ea0bdb6fafa09c->enter($__internal_2fc0ac1a95e70109adde561066b9c58d634df24c1b0c2f49c4ea0bdb6fafa09c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_ef03d4349834aa9d0997d7f1e169c06c0e5fc8ca433bc345298e9c0e36d0a781 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef03d4349834aa9d0997d7f1e169c06c0e5fc8ca433bc345298e9c0e36d0a781->enter($__internal_ef03d4349834aa9d0997d7f1e169c06c0e5fc8ca433bc345298e9c0e36d0a781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_2fc0ac1a95e70109adde561066b9c58d634df24c1b0c2f49c4ea0bdb6fafa09c->leave($__internal_2fc0ac1a95e70109adde561066b9c58d634df24c1b0c2f49c4ea0bdb6fafa09c_prof);

        
        $__internal_ef03d4349834aa9d0997d7f1e169c06c0e5fc8ca433bc345298e9c0e36d0a781->leave($__internal_ef03d4349834aa9d0997d7f1e169c06c0e5fc8ca433bc345298e9c0e36d0a781_prof);

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
