<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_283c715565f91e501b2996286beb476d5fcc8b62f4db023def832486c66ef5df extends Twig_Template
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
        $__internal_23fc51235eb201fbf1ffaf5336c2ff9e29b98aabe9a647a7b1bd7e441f5b98e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23fc51235eb201fbf1ffaf5336c2ff9e29b98aabe9a647a7b1bd7e441f5b98e5->enter($__internal_23fc51235eb201fbf1ffaf5336c2ff9e29b98aabe9a647a7b1bd7e441f5b98e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_d88c4c2bb834eb5aa0f7b55e8678a1e656b60b95e9f19e093761f7d6212e592a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d88c4c2bb834eb5aa0f7b55e8678a1e656b60b95e9f19e093761f7d6212e592a->enter($__internal_d88c4c2bb834eb5aa0f7b55e8678a1e656b60b95e9f19e093761f7d6212e592a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_23fc51235eb201fbf1ffaf5336c2ff9e29b98aabe9a647a7b1bd7e441f5b98e5->leave($__internal_23fc51235eb201fbf1ffaf5336c2ff9e29b98aabe9a647a7b1bd7e441f5b98e5_prof);

        
        $__internal_d88c4c2bb834eb5aa0f7b55e8678a1e656b60b95e9f19e093761f7d6212e592a->leave($__internal_d88c4c2bb834eb5aa0f7b55e8678a1e656b60b95e9f19e093761f7d6212e592a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
