<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_e890e2471bf63b9d90d0658ad6bb37d460be625522422327e9f6ddf2f41e11a0 extends Twig_Template
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
        $__internal_a4085d6629f1ebe17647fc5a81f7ea3e05898b733c25c07cab7b6bce6fd804d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4085d6629f1ebe17647fc5a81f7ea3e05898b733c25c07cab7b6bce6fd804d0->enter($__internal_a4085d6629f1ebe17647fc5a81f7ea3e05898b733c25c07cab7b6bce6fd804d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_433b651fb4f156bff97fd4a93df329b384981e040c476b92a3f2d3b5465c2fc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_433b651fb4f156bff97fd4a93df329b384981e040c476b92a3f2d3b5465c2fc5->enter($__internal_433b651fb4f156bff97fd4a93df329b384981e040c476b92a3f2d3b5465c2fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_a4085d6629f1ebe17647fc5a81f7ea3e05898b733c25c07cab7b6bce6fd804d0->leave($__internal_a4085d6629f1ebe17647fc5a81f7ea3e05898b733c25c07cab7b6bce6fd804d0_prof);

        
        $__internal_433b651fb4f156bff97fd4a93df329b384981e040c476b92a3f2d3b5465c2fc5->leave($__internal_433b651fb4f156bff97fd4a93df329b384981e040c476b92a3f2d3b5465c2fc5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}