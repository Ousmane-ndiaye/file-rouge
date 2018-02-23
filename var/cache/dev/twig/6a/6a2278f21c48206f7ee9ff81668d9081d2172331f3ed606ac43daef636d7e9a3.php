<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_e890e2471bf63b9d90d0658ad6bb37d460be625522422327e9f6ddf2f41e11a0 extends Twig_Template
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
        $__internal_399562a98ec56923e493e4bb87fe9231efcf20005efa35d9630b5fc6b8b7671d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_399562a98ec56923e493e4bb87fe9231efcf20005efa35d9630b5fc6b8b7671d->enter($__internal_399562a98ec56923e493e4bb87fe9231efcf20005efa35d9630b5fc6b8b7671d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_2759d769c1bea156fb77275930b51fa46ece77fa71a28402e481bd04ed65730b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2759d769c1bea156fb77275930b51fa46ece77fa71a28402e481bd04ed65730b->enter($__internal_2759d769c1bea156fb77275930b51fa46ece77fa71a28402e481bd04ed65730b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_399562a98ec56923e493e4bb87fe9231efcf20005efa35d9630b5fc6b8b7671d->leave($__internal_399562a98ec56923e493e4bb87fe9231efcf20005efa35d9630b5fc6b8b7671d_prof);

        
        $__internal_2759d769c1bea156fb77275930b51fa46ece77fa71a28402e481bd04ed65730b->leave($__internal_2759d769c1bea156fb77275930b51fa46ece77fa71a28402e481bd04ed65730b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
