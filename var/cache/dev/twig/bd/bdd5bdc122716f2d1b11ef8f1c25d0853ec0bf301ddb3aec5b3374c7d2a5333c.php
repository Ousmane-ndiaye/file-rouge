<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_bbb0aa1f805fd68f685c79c392f39261e47eb7f562a943d2e9ed1d80ab763973 extends Twig_Template
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
        $__internal_c823ddcad5faf0008a965e0148172101b07530ff9dc2e01fc1a4fd353ad5c6ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c823ddcad5faf0008a965e0148172101b07530ff9dc2e01fc1a4fd353ad5c6ff->enter($__internal_c823ddcad5faf0008a965e0148172101b07530ff9dc2e01fc1a4fd353ad5c6ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_6f6758041ce4345e13d55f5bbb37e100c12e47d22e113de193b10bc1033295cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f6758041ce4345e13d55f5bbb37e100c12e47d22e113de193b10bc1033295cf->enter($__internal_6f6758041ce4345e13d55f5bbb37e100c12e47d22e113de193b10bc1033295cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_c823ddcad5faf0008a965e0148172101b07530ff9dc2e01fc1a4fd353ad5c6ff->leave($__internal_c823ddcad5faf0008a965e0148172101b07530ff9dc2e01fc1a4fd353ad5c6ff_prof);

        
        $__internal_6f6758041ce4345e13d55f5bbb37e100c12e47d22e113de193b10bc1033295cf->leave($__internal_6f6758041ce4345e13d55f5bbb37e100c12e47d22e113de193b10bc1033295cf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
