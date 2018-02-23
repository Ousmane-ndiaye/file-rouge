<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_5a2fe667ffb853048e57f164ce6f24e226f1ff151c606fe9cb902b81e31f21e6 extends Twig_Template
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
        $__internal_4b00a6bb11b8b0e1cbe4e427a4e76f8e77f17f547425036af1e27cc2bad593de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b00a6bb11b8b0e1cbe4e427a4e76f8e77f17f547425036af1e27cc2bad593de->enter($__internal_4b00a6bb11b8b0e1cbe4e427a4e76f8e77f17f547425036af1e27cc2bad593de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_afcccfcebf8472ce879f35eb25870c401bf81d772399aeecd2eca4979a8241ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afcccfcebf8472ce879f35eb25870c401bf81d772399aeecd2eca4979a8241ea->enter($__internal_afcccfcebf8472ce879f35eb25870c401bf81d772399aeecd2eca4979a8241ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_4b00a6bb11b8b0e1cbe4e427a4e76f8e77f17f547425036af1e27cc2bad593de->leave($__internal_4b00a6bb11b8b0e1cbe4e427a4e76f8e77f17f547425036af1e27cc2bad593de_prof);

        
        $__internal_afcccfcebf8472ce879f35eb25870c401bf81d772399aeecd2eca4979a8241ea->leave($__internal_afcccfcebf8472ce879f35eb25870c401bf81d772399aeecd2eca4979a8241ea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
