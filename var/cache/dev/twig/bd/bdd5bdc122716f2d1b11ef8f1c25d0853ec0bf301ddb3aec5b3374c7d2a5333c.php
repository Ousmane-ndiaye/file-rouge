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
        $__internal_1cb3664907ac1399ea3cfc4f82edf1d0485dfc723e13b89efec5b4bc1f3ae631 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cb3664907ac1399ea3cfc4f82edf1d0485dfc723e13b89efec5b4bc1f3ae631->enter($__internal_1cb3664907ac1399ea3cfc4f82edf1d0485dfc723e13b89efec5b4bc1f3ae631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_f882585beb53cf3280ae2b1bb126c4b82e3bfe9180a4c3a876854639d37a6540 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f882585beb53cf3280ae2b1bb126c4b82e3bfe9180a4c3a876854639d37a6540->enter($__internal_f882585beb53cf3280ae2b1bb126c4b82e3bfe9180a4c3a876854639d37a6540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_1cb3664907ac1399ea3cfc4f82edf1d0485dfc723e13b89efec5b4bc1f3ae631->leave($__internal_1cb3664907ac1399ea3cfc4f82edf1d0485dfc723e13b89efec5b4bc1f3ae631_prof);

        
        $__internal_f882585beb53cf3280ae2b1bb126c4b82e3bfe9180a4c3a876854639d37a6540->leave($__internal_f882585beb53cf3280ae2b1bb126c4b82e3bfe9180a4c3a876854639d37a6540_prof);

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
