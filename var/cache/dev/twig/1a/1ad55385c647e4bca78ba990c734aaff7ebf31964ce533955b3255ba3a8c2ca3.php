<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_bde844aa2457d72e49c1412f1abaaacab5460b987041c62c8a485669be47b9e9 extends Twig_Template
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
        $__internal_485e001f9f91a0c65ddd428ad5724d7d78fcdb2df071e187df6184182c2f5085 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_485e001f9f91a0c65ddd428ad5724d7d78fcdb2df071e187df6184182c2f5085->enter($__internal_485e001f9f91a0c65ddd428ad5724d7d78fcdb2df071e187df6184182c2f5085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_1d3c3b8f598689699cd876c95b68ccbf645459aaf8cdbfca2f50b37c560a3dda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d3c3b8f598689699cd876c95b68ccbf645459aaf8cdbfca2f50b37c560a3dda->enter($__internal_1d3c3b8f598689699cd876c95b68ccbf645459aaf8cdbfca2f50b37c560a3dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_485e001f9f91a0c65ddd428ad5724d7d78fcdb2df071e187df6184182c2f5085->leave($__internal_485e001f9f91a0c65ddd428ad5724d7d78fcdb2df071e187df6184182c2f5085_prof);

        
        $__internal_1d3c3b8f598689699cd876c95b68ccbf645459aaf8cdbfca2f50b37c560a3dda->leave($__internal_1d3c3b8f598689699cd876c95b68ccbf645459aaf8cdbfca2f50b37c560a3dda_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
