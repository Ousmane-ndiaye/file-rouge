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
        $__internal_2ba91b106e96a9f5e7dae6bdc6f1bf5e4fd51043845c548541de8ce9e2f91701 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ba91b106e96a9f5e7dae6bdc6f1bf5e4fd51043845c548541de8ce9e2f91701->enter($__internal_2ba91b106e96a9f5e7dae6bdc6f1bf5e4fd51043845c548541de8ce9e2f91701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_9af779298c89021050d709dd3062d878044a355c2caf72ad88337bf5c34410b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9af779298c89021050d709dd3062d878044a355c2caf72ad88337bf5c34410b2->enter($__internal_9af779298c89021050d709dd3062d878044a355c2caf72ad88337bf5c34410b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2ba91b106e96a9f5e7dae6bdc6f1bf5e4fd51043845c548541de8ce9e2f91701->leave($__internal_2ba91b106e96a9f5e7dae6bdc6f1bf5e4fd51043845c548541de8ce9e2f91701_prof);

        
        $__internal_9af779298c89021050d709dd3062d878044a355c2caf72ad88337bf5c34410b2->leave($__internal_9af779298c89021050d709dd3062d878044a355c2caf72ad88337bf5c34410b2_prof);

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
