<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_ff2814c4535e25ff5cc9ea8737fa8de347b740af97908b15085b3dd34d2f999a extends Twig_Template
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
        $__internal_46900598a089ab156eee7839949abc31d4b3662acb9bc31d3ad0ea39f3b7207a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46900598a089ab156eee7839949abc31d4b3662acb9bc31d3ad0ea39f3b7207a->enter($__internal_46900598a089ab156eee7839949abc31d4b3662acb9bc31d3ad0ea39f3b7207a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_7a553088b933ba75a4aeeb4f47b1bca51cc292176e663f04cd0e9678b0e6ec48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a553088b933ba75a4aeeb4f47b1bca51cc292176e663f04cd0e9678b0e6ec48->enter($__internal_7a553088b933ba75a4aeeb4f47b1bca51cc292176e663f04cd0e9678b0e6ec48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_46900598a089ab156eee7839949abc31d4b3662acb9bc31d3ad0ea39f3b7207a->leave($__internal_46900598a089ab156eee7839949abc31d4b3662acb9bc31d3ad0ea39f3b7207a_prof);

        
        $__internal_7a553088b933ba75a4aeeb4f47b1bca51cc292176e663f04cd0e9678b0e6ec48->leave($__internal_7a553088b933ba75a4aeeb4f47b1bca51cc292176e663f04cd0e9678b0e6ec48_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
