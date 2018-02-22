<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_5f270917a48f234e4fd9496ccf82bf7dea7e8dfaa2a11e2256bf27a95bd32720 extends Twig_Template
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
        $__internal_085b0857f275c8902319acdd05278aa6b187ee110519f417627e6407d9179dfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0857f275c8902319acdd05278aa6b187ee110519f417627e6407d9179dfc->enter($__internal_085b0857f275c8902319acdd05278aa6b187ee110519f417627e6407d9179dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_96b953edbd80fc06dbf69fd1f8fffc495fa0c137f6c7bbf6b6ee743abdabfd53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96b953edbd80fc06dbf69fd1f8fffc495fa0c137f6c7bbf6b6ee743abdabfd53->enter($__internal_96b953edbd80fc06dbf69fd1f8fffc495fa0c137f6c7bbf6b6ee743abdabfd53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_085b0857f275c8902319acdd05278aa6b187ee110519f417627e6407d9179dfc->leave($__internal_085b0857f275c8902319acdd05278aa6b187ee110519f417627e6407d9179dfc_prof);

        
        $__internal_96b953edbd80fc06dbf69fd1f8fffc495fa0c137f6c7bbf6b6ee743abdabfd53->leave($__internal_96b953edbd80fc06dbf69fd1f8fffc495fa0c137f6c7bbf6b6ee743abdabfd53_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
