<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_36ad9e7e8f14078c02ec478cec0b2ca9201c6ae985cb598b03c5191159e3899d extends Twig_Template
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
        $__internal_cfff8171e2f0043e91f974a1a25c636525d0247710a49434b15b608857554d19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfff8171e2f0043e91f974a1a25c636525d0247710a49434b15b608857554d19->enter($__internal_cfff8171e2f0043e91f974a1a25c636525d0247710a49434b15b608857554d19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_96023c8f38f33d7628d8179d47113f7099a59a4da1ce9e7477319d5375da6522 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96023c8f38f33d7628d8179d47113f7099a59a4da1ce9e7477319d5375da6522->enter($__internal_96023c8f38f33d7628d8179d47113f7099a59a4da1ce9e7477319d5375da6522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_cfff8171e2f0043e91f974a1a25c636525d0247710a49434b15b608857554d19->leave($__internal_cfff8171e2f0043e91f974a1a25c636525d0247710a49434b15b608857554d19_prof);

        
        $__internal_96023c8f38f33d7628d8179d47113f7099a59a4da1ce9e7477319d5375da6522->leave($__internal_96023c8f38f33d7628d8179d47113f7099a59a4da1ce9e7477319d5375da6522_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
