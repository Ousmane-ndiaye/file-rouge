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
        $__internal_d25026d20afad96f0006840bdfd3497569f92ad8c2340bd9d52470e872512f27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d25026d20afad96f0006840bdfd3497569f92ad8c2340bd9d52470e872512f27->enter($__internal_d25026d20afad96f0006840bdfd3497569f92ad8c2340bd9d52470e872512f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_30d00824ac67d35e156723cb5a2659e9d0f15c97e80b94522ee03ff310ff9f47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30d00824ac67d35e156723cb5a2659e9d0f15c97e80b94522ee03ff310ff9f47->enter($__internal_30d00824ac67d35e156723cb5a2659e9d0f15c97e80b94522ee03ff310ff9f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_d25026d20afad96f0006840bdfd3497569f92ad8c2340bd9d52470e872512f27->leave($__internal_d25026d20afad96f0006840bdfd3497569f92ad8c2340bd9d52470e872512f27_prof);

        
        $__internal_30d00824ac67d35e156723cb5a2659e9d0f15c97e80b94522ee03ff310ff9f47->leave($__internal_30d00824ac67d35e156723cb5a2659e9d0f15c97e80b94522ee03ff310ff9f47_prof);

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
