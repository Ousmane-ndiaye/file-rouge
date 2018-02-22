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
        $__internal_7987884841bd132e78f83b64e99b7a35f24d31e7c8c9bed00d9252c4070f09ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7987884841bd132e78f83b64e99b7a35f24d31e7c8c9bed00d9252c4070f09ba->enter($__internal_7987884841bd132e78f83b64e99b7a35f24d31e7c8c9bed00d9252c4070f09ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_441c483654ac44a7365b6997a126e7e9b116ec523ffd3aecb2ab877c208abb7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_441c483654ac44a7365b6997a126e7e9b116ec523ffd3aecb2ab877c208abb7a->enter($__internal_441c483654ac44a7365b6997a126e7e9b116ec523ffd3aecb2ab877c208abb7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_7987884841bd132e78f83b64e99b7a35f24d31e7c8c9bed00d9252c4070f09ba->leave($__internal_7987884841bd132e78f83b64e99b7a35f24d31e7c8c9bed00d9252c4070f09ba_prof);

        
        $__internal_441c483654ac44a7365b6997a126e7e9b116ec523ffd3aecb2ab877c208abb7a->leave($__internal_441c483654ac44a7365b6997a126e7e9b116ec523ffd3aecb2ab877c208abb7a_prof);

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
