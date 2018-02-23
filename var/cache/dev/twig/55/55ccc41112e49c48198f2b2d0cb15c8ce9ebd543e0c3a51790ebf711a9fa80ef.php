<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_d610b6f7cbf271f814bc81037ab9817720676c898364090f3be1a24adc0fd1de extends Twig_Template
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
        $__internal_158e544d7516cb443977ef37f916ee58a60fb65eb6c01e5a989a8e52c048704d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_158e544d7516cb443977ef37f916ee58a60fb65eb6c01e5a989a8e52c048704d->enter($__internal_158e544d7516cb443977ef37f916ee58a60fb65eb6c01e5a989a8e52c048704d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_34f11fee11bb3b009ed8647d9ddbc5a20d6cbf0e5679ca872b40cd3cd2ea693b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34f11fee11bb3b009ed8647d9ddbc5a20d6cbf0e5679ca872b40cd3cd2ea693b->enter($__internal_34f11fee11bb3b009ed8647d9ddbc5a20d6cbf0e5679ca872b40cd3cd2ea693b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_158e544d7516cb443977ef37f916ee58a60fb65eb6c01e5a989a8e52c048704d->leave($__internal_158e544d7516cb443977ef37f916ee58a60fb65eb6c01e5a989a8e52c048704d_prof);

        
        $__internal_34f11fee11bb3b009ed8647d9ddbc5a20d6cbf0e5679ca872b40cd3cd2ea693b->leave($__internal_34f11fee11bb3b009ed8647d9ddbc5a20d6cbf0e5679ca872b40cd3cd2ea693b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
