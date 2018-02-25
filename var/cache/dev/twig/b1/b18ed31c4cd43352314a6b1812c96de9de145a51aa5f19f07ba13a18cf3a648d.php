<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_6e2cd8997458de8dcd3f435ed9c87348b1b76877eaeadbb74e1360f924f641f6 extends Twig_Template
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
        $__internal_d1e30753c5e6d1175895c720483d3c93fe04f8678b793cfd6695309af2f30a41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1e30753c5e6d1175895c720483d3c93fe04f8678b793cfd6695309af2f30a41->enter($__internal_d1e30753c5e6d1175895c720483d3c93fe04f8678b793cfd6695309af2f30a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_6a00bc027a8b6680f665ca39852da2bbb73d40bbdb03493910ffc7161cc2ac6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a00bc027a8b6680f665ca39852da2bbb73d40bbdb03493910ffc7161cc2ac6d->enter($__internal_6a00bc027a8b6680f665ca39852da2bbb73d40bbdb03493910ffc7161cc2ac6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d1e30753c5e6d1175895c720483d3c93fe04f8678b793cfd6695309af2f30a41->leave($__internal_d1e30753c5e6d1175895c720483d3c93fe04f8678b793cfd6695309af2f30a41_prof);

        
        $__internal_6a00bc027a8b6680f665ca39852da2bbb73d40bbdb03493910ffc7161cc2ac6d->leave($__internal_6a00bc027a8b6680f665ca39852da2bbb73d40bbdb03493910ffc7161cc2ac6d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
