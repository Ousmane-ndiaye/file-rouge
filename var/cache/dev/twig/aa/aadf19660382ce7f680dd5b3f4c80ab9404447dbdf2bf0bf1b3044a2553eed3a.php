<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_15e3cac8b41070ebff04035ece6b4d630489bc4135419d985cd2a85660b856bb extends Twig_Template
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
        $__internal_6d1073ffa1e5757096855a8cdc56387c14d36f9b9f49c7d2235f4499db788d75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d1073ffa1e5757096855a8cdc56387c14d36f9b9f49c7d2235f4499db788d75->enter($__internal_6d1073ffa1e5757096855a8cdc56387c14d36f9b9f49c7d2235f4499db788d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_e84a0ab8f151354caace00bdcc9d827a7fb1ec6d6ef8fd704f129cbb7272ce37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e84a0ab8f151354caace00bdcc9d827a7fb1ec6d6ef8fd704f129cbb7272ce37->enter($__internal_e84a0ab8f151354caace00bdcc9d827a7fb1ec6d6ef8fd704f129cbb7272ce37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_6d1073ffa1e5757096855a8cdc56387c14d36f9b9f49c7d2235f4499db788d75->leave($__internal_6d1073ffa1e5757096855a8cdc56387c14d36f9b9f49c7d2235f4499db788d75_prof);

        
        $__internal_e84a0ab8f151354caace00bdcc9d827a7fb1ec6d6ef8fd704f129cbb7272ce37->leave($__internal_e84a0ab8f151354caace00bdcc9d827a7fb1ec6d6ef8fd704f129cbb7272ce37_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
