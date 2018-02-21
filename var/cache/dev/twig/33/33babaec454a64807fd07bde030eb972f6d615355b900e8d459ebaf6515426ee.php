<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_426715d15a10e67499cb0f79af6dc60ac848ad426fa8e22c415a951118105d86 extends Twig_Template
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
        $__internal_dfcfa1c350e1334262d531a5a207c5be7df77621b765c3f760d453d0fcfe483b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfcfa1c350e1334262d531a5a207c5be7df77621b765c3f760d453d0fcfe483b->enter($__internal_dfcfa1c350e1334262d531a5a207c5be7df77621b765c3f760d453d0fcfe483b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_2116f5711630ed37578a8da5fa3d6a43cc4fd52b555443ae5b3e8d257d3e315b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2116f5711630ed37578a8da5fa3d6a43cc4fd52b555443ae5b3e8d257d3e315b->enter($__internal_2116f5711630ed37578a8da5fa3d6a43cc4fd52b555443ae5b3e8d257d3e315b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_dfcfa1c350e1334262d531a5a207c5be7df77621b765c3f760d453d0fcfe483b->leave($__internal_dfcfa1c350e1334262d531a5a207c5be7df77621b765c3f760d453d0fcfe483b_prof);

        
        $__internal_2116f5711630ed37578a8da5fa3d6a43cc4fd52b555443ae5b3e8d257d3e315b->leave($__internal_2116f5711630ed37578a8da5fa3d6a43cc4fd52b555443ae5b3e8d257d3e315b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
