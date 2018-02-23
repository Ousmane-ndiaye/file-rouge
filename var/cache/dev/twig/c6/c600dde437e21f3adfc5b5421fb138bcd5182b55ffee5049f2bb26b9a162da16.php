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
        $__internal_65c06358ae23e91bcd041c984075c4294f0280b4954fdbac8a942147f1d75dd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65c06358ae23e91bcd041c984075c4294f0280b4954fdbac8a942147f1d75dd0->enter($__internal_65c06358ae23e91bcd041c984075c4294f0280b4954fdbac8a942147f1d75dd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_46093bc7d2fe1a395d6b80157857e87e3d891e536c1fe0e3857973bdbdf15188 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46093bc7d2fe1a395d6b80157857e87e3d891e536c1fe0e3857973bdbdf15188->enter($__internal_46093bc7d2fe1a395d6b80157857e87e3d891e536c1fe0e3857973bdbdf15188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_65c06358ae23e91bcd041c984075c4294f0280b4954fdbac8a942147f1d75dd0->leave($__internal_65c06358ae23e91bcd041c984075c4294f0280b4954fdbac8a942147f1d75dd0_prof);

        
        $__internal_46093bc7d2fe1a395d6b80157857e87e3d891e536c1fe0e3857973bdbdf15188->leave($__internal_46093bc7d2fe1a395d6b80157857e87e3d891e536c1fe0e3857973bdbdf15188_prof);

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
