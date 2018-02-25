<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_22f436b747089ac4b2bb71f1cc99874e82c0e76be258f6b9f829e6bdebfb49f1 extends Twig_Template
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
        $__internal_9e1a19af0d7d5589af8c6196e4691afd6a7ca1d0eeb70d95658a4e79aaf156dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e1a19af0d7d5589af8c6196e4691afd6a7ca1d0eeb70d95658a4e79aaf156dc->enter($__internal_9e1a19af0d7d5589af8c6196e4691afd6a7ca1d0eeb70d95658a4e79aaf156dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_2b33cdd72a4ada15c5e5c2bbb8a1a91cc6d06a84c2a5a055e10dad2e1735bf88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b33cdd72a4ada15c5e5c2bbb8a1a91cc6d06a84c2a5a055e10dad2e1735bf88->enter($__internal_2b33cdd72a4ada15c5e5c2bbb8a1a91cc6d06a84c2a5a055e10dad2e1735bf88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_9e1a19af0d7d5589af8c6196e4691afd6a7ca1d0eeb70d95658a4e79aaf156dc->leave($__internal_9e1a19af0d7d5589af8c6196e4691afd6a7ca1d0eeb70d95658a4e79aaf156dc_prof);

        
        $__internal_2b33cdd72a4ada15c5e5c2bbb8a1a91cc6d06a84c2a5a055e10dad2e1735bf88->leave($__internal_2b33cdd72a4ada15c5e5c2bbb8a1a91cc6d06a84c2a5a055e10dad2e1735bf88_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
