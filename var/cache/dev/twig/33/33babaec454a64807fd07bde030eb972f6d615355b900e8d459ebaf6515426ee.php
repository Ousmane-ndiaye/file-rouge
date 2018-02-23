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
        $__internal_eb1e06c9eaccde32bb9e64e6ec816809d8a7eaff831a717e1d988d17d3947173 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb1e06c9eaccde32bb9e64e6ec816809d8a7eaff831a717e1d988d17d3947173->enter($__internal_eb1e06c9eaccde32bb9e64e6ec816809d8a7eaff831a717e1d988d17d3947173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_eec012d43d1fcaf6b3e2bcce844715e53d6e6d9e4fb6ec33226176e1f2a69220 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eec012d43d1fcaf6b3e2bcce844715e53d6e6d9e4fb6ec33226176e1f2a69220->enter($__internal_eec012d43d1fcaf6b3e2bcce844715e53d6e6d9e4fb6ec33226176e1f2a69220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_eb1e06c9eaccde32bb9e64e6ec816809d8a7eaff831a717e1d988d17d3947173->leave($__internal_eb1e06c9eaccde32bb9e64e6ec816809d8a7eaff831a717e1d988d17d3947173_prof);

        
        $__internal_eec012d43d1fcaf6b3e2bcce844715e53d6e6d9e4fb6ec33226176e1f2a69220->leave($__internal_eec012d43d1fcaf6b3e2bcce844715e53d6e6d9e4fb6ec33226176e1f2a69220_prof);

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
