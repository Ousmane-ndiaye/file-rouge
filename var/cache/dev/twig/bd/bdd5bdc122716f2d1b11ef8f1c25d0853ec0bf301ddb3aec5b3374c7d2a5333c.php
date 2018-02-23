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
        $__internal_75455c17d7b5bd46829525d47e25d8aa06c62edd6101e6dcbd8890a5771ff40f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75455c17d7b5bd46829525d47e25d8aa06c62edd6101e6dcbd8890a5771ff40f->enter($__internal_75455c17d7b5bd46829525d47e25d8aa06c62edd6101e6dcbd8890a5771ff40f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_5a1355d109b4559ffb4f51510bfb81433b1ae526ab3b93c0f87ec7091bddad57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a1355d109b4559ffb4f51510bfb81433b1ae526ab3b93c0f87ec7091bddad57->enter($__internal_5a1355d109b4559ffb4f51510bfb81433b1ae526ab3b93c0f87ec7091bddad57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_75455c17d7b5bd46829525d47e25d8aa06c62edd6101e6dcbd8890a5771ff40f->leave($__internal_75455c17d7b5bd46829525d47e25d8aa06c62edd6101e6dcbd8890a5771ff40f_prof);

        
        $__internal_5a1355d109b4559ffb4f51510bfb81433b1ae526ab3b93c0f87ec7091bddad57->leave($__internal_5a1355d109b4559ffb4f51510bfb81433b1ae526ab3b93c0f87ec7091bddad57_prof);

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
