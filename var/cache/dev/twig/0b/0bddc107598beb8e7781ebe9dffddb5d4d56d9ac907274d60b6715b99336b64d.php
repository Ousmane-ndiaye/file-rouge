<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_d9906a7bb6d4587fc2ea785007594fb1945e70c549a8eb237652fa8e706c8c68 extends Twig_Template
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
        $__internal_f293c626a9d71a7cca53fc7d2c3868721e6ea8fc77aa9ce79a0d31806c4c7f74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f293c626a9d71a7cca53fc7d2c3868721e6ea8fc77aa9ce79a0d31806c4c7f74->enter($__internal_f293c626a9d71a7cca53fc7d2c3868721e6ea8fc77aa9ce79a0d31806c4c7f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_4d2467eeb36a264c4c41b5ebe632c3c24f1fcdfb77607f20c171e3ca85543c5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d2467eeb36a264c4c41b5ebe632c3c24f1fcdfb77607f20c171e3ca85543c5c->enter($__internal_4d2467eeb36a264c4c41b5ebe632c3c24f1fcdfb77607f20c171e3ca85543c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_f293c626a9d71a7cca53fc7d2c3868721e6ea8fc77aa9ce79a0d31806c4c7f74->leave($__internal_f293c626a9d71a7cca53fc7d2c3868721e6ea8fc77aa9ce79a0d31806c4c7f74_prof);

        
        $__internal_4d2467eeb36a264c4c41b5ebe632c3c24f1fcdfb77607f20c171e3ca85543c5c->leave($__internal_4d2467eeb36a264c4c41b5ebe632c3c24f1fcdfb77607f20c171e3ca85543c5c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
