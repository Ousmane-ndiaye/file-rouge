<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_ac3c8afc7485c0d9cc2d552518f6bb65ab2eff845447274c1a0b9a1dc733a9dc extends Twig_Template
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
        $__internal_69069a8d4a65e453ef24345e67d8d2a10f1754ee53a35e76e09df6aefa54d8e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69069a8d4a65e453ef24345e67d8d2a10f1754ee53a35e76e09df6aefa54d8e5->enter($__internal_69069a8d4a65e453ef24345e67d8d2a10f1754ee53a35e76e09df6aefa54d8e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_2db593faf60df9f5790730f07a0b1a6dfdb8765ac64b4d8729b0f689dfe961d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2db593faf60df9f5790730f07a0b1a6dfdb8765ac64b4d8729b0f689dfe961d1->enter($__internal_2db593faf60df9f5790730f07a0b1a6dfdb8765ac64b4d8729b0f689dfe961d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_69069a8d4a65e453ef24345e67d8d2a10f1754ee53a35e76e09df6aefa54d8e5->leave($__internal_69069a8d4a65e453ef24345e67d8d2a10f1754ee53a35e76e09df6aefa54d8e5_prof);

        
        $__internal_2db593faf60df9f5790730f07a0b1a6dfdb8765ac64b4d8729b0f689dfe961d1->leave($__internal_2db593faf60df9f5790730f07a0b1a6dfdb8765ac64b4d8729b0f689dfe961d1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
