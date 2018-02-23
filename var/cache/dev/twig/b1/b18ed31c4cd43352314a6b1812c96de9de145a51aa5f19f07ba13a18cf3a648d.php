<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_6e2cd8997458de8dcd3f435ed9c87348b1b76877eaeadbb74e1360f924f641f6 extends Twig_Template
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
        $__internal_f6b49590e31fb2544403c378cc3dc2a129d6cd3b46b4e5c6e4d65069a10f8ff8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6b49590e31fb2544403c378cc3dc2a129d6cd3b46b4e5c6e4d65069a10f8ff8->enter($__internal_f6b49590e31fb2544403c378cc3dc2a129d6cd3b46b4e5c6e4d65069a10f8ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_23720921b8f01488374f4ce14bc553fe054610a05b1e4e0d4375f0259b23e4e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23720921b8f01488374f4ce14bc553fe054610a05b1e4e0d4375f0259b23e4e9->enter($__internal_23720921b8f01488374f4ce14bc553fe054610a05b1e4e0d4375f0259b23e4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_f6b49590e31fb2544403c378cc3dc2a129d6cd3b46b4e5c6e4d65069a10f8ff8->leave($__internal_f6b49590e31fb2544403c378cc3dc2a129d6cd3b46b4e5c6e4d65069a10f8ff8_prof);

        
        $__internal_23720921b8f01488374f4ce14bc553fe054610a05b1e4e0d4375f0259b23e4e9->leave($__internal_23720921b8f01488374f4ce14bc553fe054610a05b1e4e0d4375f0259b23e4e9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
