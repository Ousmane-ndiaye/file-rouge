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
        $__internal_9dea84e25ca59b30e3d109d1aab00f28549a6ec019ad095b93356343dc8f5bf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dea84e25ca59b30e3d109d1aab00f28549a6ec019ad095b93356343dc8f5bf2->enter($__internal_9dea84e25ca59b30e3d109d1aab00f28549a6ec019ad095b93356343dc8f5bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_b48bb5c7ac31af006a9876ef8f399b2b06a58b9e16a79dd3fb2823c9fbdf4a6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b48bb5c7ac31af006a9876ef8f399b2b06a58b9e16a79dd3fb2823c9fbdf4a6f->enter($__internal_b48bb5c7ac31af006a9876ef8f399b2b06a58b9e16a79dd3fb2823c9fbdf4a6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_9dea84e25ca59b30e3d109d1aab00f28549a6ec019ad095b93356343dc8f5bf2->leave($__internal_9dea84e25ca59b30e3d109d1aab00f28549a6ec019ad095b93356343dc8f5bf2_prof);

        
        $__internal_b48bb5c7ac31af006a9876ef8f399b2b06a58b9e16a79dd3fb2823c9fbdf4a6f->leave($__internal_b48bb5c7ac31af006a9876ef8f399b2b06a58b9e16a79dd3fb2823c9fbdf4a6f_prof);

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
