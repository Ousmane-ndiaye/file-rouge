<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_b2d01e4c6530e5f02e811e4cfcadf3de9b280b8fcffbc527ba11c8c8de15be07 extends Twig_Template
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
        $__internal_00f055d0195e300bf6fd19c7907991b73f1065d0eea7804b6a9499d1d5191100 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00f055d0195e300bf6fd19c7907991b73f1065d0eea7804b6a9499d1d5191100->enter($__internal_00f055d0195e300bf6fd19c7907991b73f1065d0eea7804b6a9499d1d5191100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_dc72def489a8111e5a045d13cec042d7745cb8d2c22ee52fad27656b2988804a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc72def489a8111e5a045d13cec042d7745cb8d2c22ee52fad27656b2988804a->enter($__internal_dc72def489a8111e5a045d13cec042d7745cb8d2c22ee52fad27656b2988804a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_00f055d0195e300bf6fd19c7907991b73f1065d0eea7804b6a9499d1d5191100->leave($__internal_00f055d0195e300bf6fd19c7907991b73f1065d0eea7804b6a9499d1d5191100_prof);

        
        $__internal_dc72def489a8111e5a045d13cec042d7745cb8d2c22ee52fad27656b2988804a->leave($__internal_dc72def489a8111e5a045d13cec042d7745cb8d2c22ee52fad27656b2988804a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
