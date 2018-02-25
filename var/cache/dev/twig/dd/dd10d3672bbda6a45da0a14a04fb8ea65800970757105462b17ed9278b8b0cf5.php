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
        $__internal_9198161e53a19fcdc6bf10da407aace2a8b2310758d5ed9d71fd36f18534941b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9198161e53a19fcdc6bf10da407aace2a8b2310758d5ed9d71fd36f18534941b->enter($__internal_9198161e53a19fcdc6bf10da407aace2a8b2310758d5ed9d71fd36f18534941b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_629af87b69744bbcf1ffd486d704f2797aa0ca969be6c1a65badb27f906453fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_629af87b69744bbcf1ffd486d704f2797aa0ca969be6c1a65badb27f906453fb->enter($__internal_629af87b69744bbcf1ffd486d704f2797aa0ca969be6c1a65badb27f906453fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_9198161e53a19fcdc6bf10da407aace2a8b2310758d5ed9d71fd36f18534941b->leave($__internal_9198161e53a19fcdc6bf10da407aace2a8b2310758d5ed9d71fd36f18534941b_prof);

        
        $__internal_629af87b69744bbcf1ffd486d704f2797aa0ca969be6c1a65badb27f906453fb->leave($__internal_629af87b69744bbcf1ffd486d704f2797aa0ca969be6c1a65badb27f906453fb_prof);

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
