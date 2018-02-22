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
        $__internal_6a2b5f8023fb77ec3c6ca70bd123bfd615629c61daf52827c0a117411a77728d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a2b5f8023fb77ec3c6ca70bd123bfd615629c61daf52827c0a117411a77728d->enter($__internal_6a2b5f8023fb77ec3c6ca70bd123bfd615629c61daf52827c0a117411a77728d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_4102487e8c55374b9ab3460d1f4f70c86a81135d63e65c8d1b4968828b81fd9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4102487e8c55374b9ab3460d1f4f70c86a81135d63e65c8d1b4968828b81fd9c->enter($__internal_4102487e8c55374b9ab3460d1f4f70c86a81135d63e65c8d1b4968828b81fd9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_6a2b5f8023fb77ec3c6ca70bd123bfd615629c61daf52827c0a117411a77728d->leave($__internal_6a2b5f8023fb77ec3c6ca70bd123bfd615629c61daf52827c0a117411a77728d_prof);

        
        $__internal_4102487e8c55374b9ab3460d1f4f70c86a81135d63e65c8d1b4968828b81fd9c->leave($__internal_4102487e8c55374b9ab3460d1f4f70c86a81135d63e65c8d1b4968828b81fd9c_prof);

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
