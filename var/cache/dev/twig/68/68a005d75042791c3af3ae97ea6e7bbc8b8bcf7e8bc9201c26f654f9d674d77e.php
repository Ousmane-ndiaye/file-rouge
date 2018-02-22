<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_54d037e5162dfa915310efd058dc1aa6cbcf6bbba891aa6883f83f55c86cb241 extends Twig_Template
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
        $__internal_65222b214b4e1ceccc951361516751fc1b39ad39261fe35d26204bde9a8132e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65222b214b4e1ceccc951361516751fc1b39ad39261fe35d26204bde9a8132e9->enter($__internal_65222b214b4e1ceccc951361516751fc1b39ad39261fe35d26204bde9a8132e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_5c09186368cdaa3d4491c9e3456198063d83a42f223cf455fd6ce4a1d55f579e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c09186368cdaa3d4491c9e3456198063d83a42f223cf455fd6ce4a1d55f579e->enter($__internal_5c09186368cdaa3d4491c9e3456198063d83a42f223cf455fd6ce4a1d55f579e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_65222b214b4e1ceccc951361516751fc1b39ad39261fe35d26204bde9a8132e9->leave($__internal_65222b214b4e1ceccc951361516751fc1b39ad39261fe35d26204bde9a8132e9_prof);

        
        $__internal_5c09186368cdaa3d4491c9e3456198063d83a42f223cf455fd6ce4a1d55f579e->leave($__internal_5c09186368cdaa3d4491c9e3456198063d83a42f223cf455fd6ce4a1d55f579e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
