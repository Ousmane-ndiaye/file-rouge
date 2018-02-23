<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_71e7de65dc322f3baf9afdbd684d2d1da932942dc33f335d8588eb99db32a9d5 extends Twig_Template
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
        $__internal_96373b83f4676be483603fc995f5147e5adbf1cd16f9eb2c32539b8a0afee634 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96373b83f4676be483603fc995f5147e5adbf1cd16f9eb2c32539b8a0afee634->enter($__internal_96373b83f4676be483603fc995f5147e5adbf1cd16f9eb2c32539b8a0afee634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_f067d30d61d7d8f751cbab70dcbe66a10d17d8cc21fdd99e3c54ed6304ed2569 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f067d30d61d7d8f751cbab70dcbe66a10d17d8cc21fdd99e3c54ed6304ed2569->enter($__internal_f067d30d61d7d8f751cbab70dcbe66a10d17d8cc21fdd99e3c54ed6304ed2569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_96373b83f4676be483603fc995f5147e5adbf1cd16f9eb2c32539b8a0afee634->leave($__internal_96373b83f4676be483603fc995f5147e5adbf1cd16f9eb2c32539b8a0afee634_prof);

        
        $__internal_f067d30d61d7d8f751cbab70dcbe66a10d17d8cc21fdd99e3c54ed6304ed2569->leave($__internal_f067d30d61d7d8f751cbab70dcbe66a10d17d8cc21fdd99e3c54ed6304ed2569_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
