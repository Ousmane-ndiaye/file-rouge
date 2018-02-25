<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_b568a4e5ad5ee8f8a71ee37d960e4e2d9c0e55ce8af49f736810b4afd8eae854 extends Twig_Template
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
        $__internal_73dcf3f7940b5730903154fd20961973f3b81b0fd182c31f67620d9da76b359c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73dcf3f7940b5730903154fd20961973f3b81b0fd182c31f67620d9da76b359c->enter($__internal_73dcf3f7940b5730903154fd20961973f3b81b0fd182c31f67620d9da76b359c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_1c5a7d30f56d83e462a748cfda1024d47511bcc8c4a81baad3568457f37b6aed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c5a7d30f56d83e462a748cfda1024d47511bcc8c4a81baad3568457f37b6aed->enter($__internal_1c5a7d30f56d83e462a748cfda1024d47511bcc8c4a81baad3568457f37b6aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_73dcf3f7940b5730903154fd20961973f3b81b0fd182c31f67620d9da76b359c->leave($__internal_73dcf3f7940b5730903154fd20961973f3b81b0fd182c31f67620d9da76b359c_prof);

        
        $__internal_1c5a7d30f56d83e462a748cfda1024d47511bcc8c4a81baad3568457f37b6aed->leave($__internal_1c5a7d30f56d83e462a748cfda1024d47511bcc8c4a81baad3568457f37b6aed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
