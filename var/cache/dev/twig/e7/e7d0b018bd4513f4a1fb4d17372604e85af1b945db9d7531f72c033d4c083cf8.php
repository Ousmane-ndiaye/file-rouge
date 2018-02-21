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
        $__internal_140c9cfbf7777a9364f887334685747403b2b29fa1c81cf4451a9a01563a99aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_140c9cfbf7777a9364f887334685747403b2b29fa1c81cf4451a9a01563a99aa->enter($__internal_140c9cfbf7777a9364f887334685747403b2b29fa1c81cf4451a9a01563a99aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_b8ca02151ec22a613bd87cd2d7df62b05261de34b5cec7235dd20629f990e390 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8ca02151ec22a613bd87cd2d7df62b05261de34b5cec7235dd20629f990e390->enter($__internal_b8ca02151ec22a613bd87cd2d7df62b05261de34b5cec7235dd20629f990e390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_140c9cfbf7777a9364f887334685747403b2b29fa1c81cf4451a9a01563a99aa->leave($__internal_140c9cfbf7777a9364f887334685747403b2b29fa1c81cf4451a9a01563a99aa_prof);

        
        $__internal_b8ca02151ec22a613bd87cd2d7df62b05261de34b5cec7235dd20629f990e390->leave($__internal_b8ca02151ec22a613bd87cd2d7df62b05261de34b5cec7235dd20629f990e390_prof);

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
