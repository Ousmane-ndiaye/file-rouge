<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_a673ceafd720c665011418fe4d7e17959c129a9bfa99d999ab0acaad0fb16271 extends Twig_Template
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
        $__internal_bf859ac602571fc471c447d02dbeba83503717926f15c8b701d0fe75a4ee23ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf859ac602571fc471c447d02dbeba83503717926f15c8b701d0fe75a4ee23ca->enter($__internal_bf859ac602571fc471c447d02dbeba83503717926f15c8b701d0fe75a4ee23ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_f9e41b0ff09523ce6af2ca66c285b9539820fb37f37a64437c868c9f9cbfc227 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9e41b0ff09523ce6af2ca66c285b9539820fb37f37a64437c868c9f9cbfc227->enter($__internal_f9e41b0ff09523ce6af2ca66c285b9539820fb37f37a64437c868c9f9cbfc227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_bf859ac602571fc471c447d02dbeba83503717926f15c8b701d0fe75a4ee23ca->leave($__internal_bf859ac602571fc471c447d02dbeba83503717926f15c8b701d0fe75a4ee23ca_prof);

        
        $__internal_f9e41b0ff09523ce6af2ca66c285b9539820fb37f37a64437c868c9f9cbfc227->leave($__internal_f9e41b0ff09523ce6af2ca66c285b9539820fb37f37a64437c868c9f9cbfc227_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
