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
        $__internal_62090f4c553f1eda88678fa10c7ff07dbe5568675f2fbce484183056d2775dfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62090f4c553f1eda88678fa10c7ff07dbe5568675f2fbce484183056d2775dfe->enter($__internal_62090f4c553f1eda88678fa10c7ff07dbe5568675f2fbce484183056d2775dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_a08b608befc88d4ebb9560593581bf67d0faa55f92c3a8a32625717bfa9852b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a08b608befc88d4ebb9560593581bf67d0faa55f92c3a8a32625717bfa9852b6->enter($__internal_a08b608befc88d4ebb9560593581bf67d0faa55f92c3a8a32625717bfa9852b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_62090f4c553f1eda88678fa10c7ff07dbe5568675f2fbce484183056d2775dfe->leave($__internal_62090f4c553f1eda88678fa10c7ff07dbe5568675f2fbce484183056d2775dfe_prof);

        
        $__internal_a08b608befc88d4ebb9560593581bf67d0faa55f92c3a8a32625717bfa9852b6->leave($__internal_a08b608befc88d4ebb9560593581bf67d0faa55f92c3a8a32625717bfa9852b6_prof);

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
