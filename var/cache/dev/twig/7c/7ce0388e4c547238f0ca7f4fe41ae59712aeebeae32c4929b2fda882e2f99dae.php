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
        $__internal_84b683116c56aced89857cda8d431cb8ff3054ea38b7dbffc565b4f5ebb2b40c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84b683116c56aced89857cda8d431cb8ff3054ea38b7dbffc565b4f5ebb2b40c->enter($__internal_84b683116c56aced89857cda8d431cb8ff3054ea38b7dbffc565b4f5ebb2b40c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_52dd9270a27927005b01b7d3f856768ba85ac5eb9d3d6fa13a47e8a54565fda1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52dd9270a27927005b01b7d3f856768ba85ac5eb9d3d6fa13a47e8a54565fda1->enter($__internal_52dd9270a27927005b01b7d3f856768ba85ac5eb9d3d6fa13a47e8a54565fda1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_84b683116c56aced89857cda8d431cb8ff3054ea38b7dbffc565b4f5ebb2b40c->leave($__internal_84b683116c56aced89857cda8d431cb8ff3054ea38b7dbffc565b4f5ebb2b40c_prof);

        
        $__internal_52dd9270a27927005b01b7d3f856768ba85ac5eb9d3d6fa13a47e8a54565fda1->leave($__internal_52dd9270a27927005b01b7d3f856768ba85ac5eb9d3d6fa13a47e8a54565fda1_prof);

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
