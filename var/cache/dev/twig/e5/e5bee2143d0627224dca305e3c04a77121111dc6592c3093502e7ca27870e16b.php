<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_26960580563a11c44a96bc0f144c4b7d13b3e178f155ad9bddef9ab2b8f7f204 extends Twig_Template
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
        $__internal_25de2972dcf3eefd14ef9d071a60eccb5b6adda734c21d9e97cec1463212fb5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25de2972dcf3eefd14ef9d071a60eccb5b6adda734c21d9e97cec1463212fb5f->enter($__internal_25de2972dcf3eefd14ef9d071a60eccb5b6adda734c21d9e97cec1463212fb5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_b509a1796ce42242e14491f5acbba4655f827a7cd2bb5dd045c3d003c769cb73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b509a1796ce42242e14491f5acbba4655f827a7cd2bb5dd045c3d003c769cb73->enter($__internal_b509a1796ce42242e14491f5acbba4655f827a7cd2bb5dd045c3d003c769cb73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_25de2972dcf3eefd14ef9d071a60eccb5b6adda734c21d9e97cec1463212fb5f->leave($__internal_25de2972dcf3eefd14ef9d071a60eccb5b6adda734c21d9e97cec1463212fb5f_prof);

        
        $__internal_b509a1796ce42242e14491f5acbba4655f827a7cd2bb5dd045c3d003c769cb73->leave($__internal_b509a1796ce42242e14491f5acbba4655f827a7cd2bb5dd045c3d003c769cb73_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
