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
        $__internal_fdbe44f49e51a53299b7eedaadfd7603cf21b3f4b009555d4868858fdc6e49cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdbe44f49e51a53299b7eedaadfd7603cf21b3f4b009555d4868858fdc6e49cc->enter($__internal_fdbe44f49e51a53299b7eedaadfd7603cf21b3f4b009555d4868858fdc6e49cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_986a9615027d91f7dca46db61d9c670b262d862466393a1a881c42f52e41e381 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_986a9615027d91f7dca46db61d9c670b262d862466393a1a881c42f52e41e381->enter($__internal_986a9615027d91f7dca46db61d9c670b262d862466393a1a881c42f52e41e381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_fdbe44f49e51a53299b7eedaadfd7603cf21b3f4b009555d4868858fdc6e49cc->leave($__internal_fdbe44f49e51a53299b7eedaadfd7603cf21b3f4b009555d4868858fdc6e49cc_prof);

        
        $__internal_986a9615027d91f7dca46db61d9c670b262d862466393a1a881c42f52e41e381->leave($__internal_986a9615027d91f7dca46db61d9c670b262d862466393a1a881c42f52e41e381_prof);

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
