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
        $__internal_f27776be1eb17f34e2418938c1ac0783a03654707ba6c9da471d52bd88c4da4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f27776be1eb17f34e2418938c1ac0783a03654707ba6c9da471d52bd88c4da4c->enter($__internal_f27776be1eb17f34e2418938c1ac0783a03654707ba6c9da471d52bd88c4da4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_ce631cd52f8dfaa4e66d49fce50d8e952196fd8b268c550c39ddc9d7f64b1edd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce631cd52f8dfaa4e66d49fce50d8e952196fd8b268c550c39ddc9d7f64b1edd->enter($__internal_ce631cd52f8dfaa4e66d49fce50d8e952196fd8b268c550c39ddc9d7f64b1edd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_f27776be1eb17f34e2418938c1ac0783a03654707ba6c9da471d52bd88c4da4c->leave($__internal_f27776be1eb17f34e2418938c1ac0783a03654707ba6c9da471d52bd88c4da4c_prof);

        
        $__internal_ce631cd52f8dfaa4e66d49fce50d8e952196fd8b268c550c39ddc9d7f64b1edd->leave($__internal_ce631cd52f8dfaa4e66d49fce50d8e952196fd8b268c550c39ddc9d7f64b1edd_prof);

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
