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
        $__internal_59290cfcf1006df9795151c76669d7f552d4dd03609bd361541cae5f167ae97a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59290cfcf1006df9795151c76669d7f552d4dd03609bd361541cae5f167ae97a->enter($__internal_59290cfcf1006df9795151c76669d7f552d4dd03609bd361541cae5f167ae97a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_ebb5109ebc1f073f4b184f55cef4aba5f918dc23ab8baa2927678e46b7aa6e7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebb5109ebc1f073f4b184f55cef4aba5f918dc23ab8baa2927678e46b7aa6e7b->enter($__internal_ebb5109ebc1f073f4b184f55cef4aba5f918dc23ab8baa2927678e46b7aa6e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_59290cfcf1006df9795151c76669d7f552d4dd03609bd361541cae5f167ae97a->leave($__internal_59290cfcf1006df9795151c76669d7f552d4dd03609bd361541cae5f167ae97a_prof);

        
        $__internal_ebb5109ebc1f073f4b184f55cef4aba5f918dc23ab8baa2927678e46b7aa6e7b->leave($__internal_ebb5109ebc1f073f4b184f55cef4aba5f918dc23ab8baa2927678e46b7aa6e7b_prof);

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
