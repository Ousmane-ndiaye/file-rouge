<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_67417af1119ba75592b9b636a2f529736ea74d14ec1b5b1b7fe7bc4e8a3ecd85 extends Twig_Template
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
        $__internal_b8a6b42b8bea6ebae3ef643c8fc6620b3fabb165446dd240dc530be5291c86e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8a6b42b8bea6ebae3ef643c8fc6620b3fabb165446dd240dc530be5291c86e6->enter($__internal_b8a6b42b8bea6ebae3ef643c8fc6620b3fabb165446dd240dc530be5291c86e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_a0c0199aa66502d42752ad53cdb96d86e177b8164130a79716f26ee5763a89ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0c0199aa66502d42752ad53cdb96d86e177b8164130a79716f26ee5763a89ae->enter($__internal_a0c0199aa66502d42752ad53cdb96d86e177b8164130a79716f26ee5763a89ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_b8a6b42b8bea6ebae3ef643c8fc6620b3fabb165446dd240dc530be5291c86e6->leave($__internal_b8a6b42b8bea6ebae3ef643c8fc6620b3fabb165446dd240dc530be5291c86e6_prof);

        
        $__internal_a0c0199aa66502d42752ad53cdb96d86e177b8164130a79716f26ee5763a89ae->leave($__internal_a0c0199aa66502d42752ad53cdb96d86e177b8164130a79716f26ee5763a89ae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
