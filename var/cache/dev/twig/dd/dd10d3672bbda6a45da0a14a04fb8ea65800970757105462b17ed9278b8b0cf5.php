<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_2e05385a48fb93e57cefc7a5ee95c1483f2138a9660630f4a5004e72335f3939 extends Twig_Template
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
        $__internal_3513f4ddcd7ba0d82bc93273d6a775bba1645c65098bc4abd0c47a81eb9da469 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3513f4ddcd7ba0d82bc93273d6a775bba1645c65098bc4abd0c47a81eb9da469->enter($__internal_3513f4ddcd7ba0d82bc93273d6a775bba1645c65098bc4abd0c47a81eb9da469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_bf728c6a4845ee4706432e7ed5546084fc489c943ff40dac4f4081010003d94f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf728c6a4845ee4706432e7ed5546084fc489c943ff40dac4f4081010003d94f->enter($__internal_bf728c6a4845ee4706432e7ed5546084fc489c943ff40dac4f4081010003d94f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_3513f4ddcd7ba0d82bc93273d6a775bba1645c65098bc4abd0c47a81eb9da469->leave($__internal_3513f4ddcd7ba0d82bc93273d6a775bba1645c65098bc4abd0c47a81eb9da469_prof);

        
        $__internal_bf728c6a4845ee4706432e7ed5546084fc489c943ff40dac4f4081010003d94f->leave($__internal_bf728c6a4845ee4706432e7ed5546084fc489c943ff40dac4f4081010003d94f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
