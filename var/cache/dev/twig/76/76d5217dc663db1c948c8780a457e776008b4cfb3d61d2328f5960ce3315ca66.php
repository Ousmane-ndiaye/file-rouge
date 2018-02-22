<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_652c6f5da4d22f130958983ebeea86daebc195a5a376933eae19786aaffdeeb3 extends Twig_Template
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
        $__internal_a3270bd916ddd442b64ef5bc50069a995980ae31316a1aef5ea9a60d8de425b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3270bd916ddd442b64ef5bc50069a995980ae31316a1aef5ea9a60d8de425b9->enter($__internal_a3270bd916ddd442b64ef5bc50069a995980ae31316a1aef5ea9a60d8de425b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_2da743038c23a1747699e25b0e06045f56d97a2ecbbc6fe4aedcf76457e14ba1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2da743038c23a1747699e25b0e06045f56d97a2ecbbc6fe4aedcf76457e14ba1->enter($__internal_2da743038c23a1747699e25b0e06045f56d97a2ecbbc6fe4aedcf76457e14ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_a3270bd916ddd442b64ef5bc50069a995980ae31316a1aef5ea9a60d8de425b9->leave($__internal_a3270bd916ddd442b64ef5bc50069a995980ae31316a1aef5ea9a60d8de425b9_prof);

        
        $__internal_2da743038c23a1747699e25b0e06045f56d97a2ecbbc6fe4aedcf76457e14ba1->leave($__internal_2da743038c23a1747699e25b0e06045f56d97a2ecbbc6fe4aedcf76457e14ba1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
