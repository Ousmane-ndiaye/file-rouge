<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_b9fe2bef1d1b026e3c0b7736f21e572ac9473006c19ab78375174fdd839a7745 extends Twig_Template
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
        $__internal_066730886cf45f30f26a41c69f20ccc65bf795bc811b6f89b05296488c3abe6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_066730886cf45f30f26a41c69f20ccc65bf795bc811b6f89b05296488c3abe6f->enter($__internal_066730886cf45f30f26a41c69f20ccc65bf795bc811b6f89b05296488c3abe6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_eedaa14d0d203592e7816b76b1dbb2727d6fa19027f013247acf87cae3255aff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eedaa14d0d203592e7816b76b1dbb2727d6fa19027f013247acf87cae3255aff->enter($__internal_eedaa14d0d203592e7816b76b1dbb2727d6fa19027f013247acf87cae3255aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_066730886cf45f30f26a41c69f20ccc65bf795bc811b6f89b05296488c3abe6f->leave($__internal_066730886cf45f30f26a41c69f20ccc65bf795bc811b6f89b05296488c3abe6f_prof);

        
        $__internal_eedaa14d0d203592e7816b76b1dbb2727d6fa19027f013247acf87cae3255aff->leave($__internal_eedaa14d0d203592e7816b76b1dbb2727d6fa19027f013247acf87cae3255aff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
