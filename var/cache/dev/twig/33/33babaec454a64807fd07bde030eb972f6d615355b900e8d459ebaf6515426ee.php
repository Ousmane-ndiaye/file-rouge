<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_426715d15a10e67499cb0f79af6dc60ac848ad426fa8e22c415a951118105d86 extends Twig_Template
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
        $__internal_3340b7795965345478aade8efed90315586e42e29b005757a7bc0f269dd5699c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3340b7795965345478aade8efed90315586e42e29b005757a7bc0f269dd5699c->enter($__internal_3340b7795965345478aade8efed90315586e42e29b005757a7bc0f269dd5699c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_158ecae16bb955d420c3b3e9c08fd6c459bf64e925f054ca12c3bcdb58c84a37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_158ecae16bb955d420c3b3e9c08fd6c459bf64e925f054ca12c3bcdb58c84a37->enter($__internal_158ecae16bb955d420c3b3e9c08fd6c459bf64e925f054ca12c3bcdb58c84a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_3340b7795965345478aade8efed90315586e42e29b005757a7bc0f269dd5699c->leave($__internal_3340b7795965345478aade8efed90315586e42e29b005757a7bc0f269dd5699c_prof);

        
        $__internal_158ecae16bb955d420c3b3e9c08fd6c459bf64e925f054ca12c3bcdb58c84a37->leave($__internal_158ecae16bb955d420c3b3e9c08fd6c459bf64e925f054ca12c3bcdb58c84a37_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
