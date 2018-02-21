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
        $__internal_37c2e7bf09d083874d43420ac0a643bf1667eb8fdcac9a778f9d3a9ad923ea7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37c2e7bf09d083874d43420ac0a643bf1667eb8fdcac9a778f9d3a9ad923ea7b->enter($__internal_37c2e7bf09d083874d43420ac0a643bf1667eb8fdcac9a778f9d3a9ad923ea7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_28f3f70bca722636828c5b7d5cb905e6d853dee63e5c69104f5e679232f6e8ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28f3f70bca722636828c5b7d5cb905e6d853dee63e5c69104f5e679232f6e8ae->enter($__internal_28f3f70bca722636828c5b7d5cb905e6d853dee63e5c69104f5e679232f6e8ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_37c2e7bf09d083874d43420ac0a643bf1667eb8fdcac9a778f9d3a9ad923ea7b->leave($__internal_37c2e7bf09d083874d43420ac0a643bf1667eb8fdcac9a778f9d3a9ad923ea7b_prof);

        
        $__internal_28f3f70bca722636828c5b7d5cb905e6d853dee63e5c69104f5e679232f6e8ae->leave($__internal_28f3f70bca722636828c5b7d5cb905e6d853dee63e5c69104f5e679232f6e8ae_prof);

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
