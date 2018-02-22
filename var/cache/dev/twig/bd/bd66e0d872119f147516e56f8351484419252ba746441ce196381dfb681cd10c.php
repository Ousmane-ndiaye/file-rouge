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
        $__internal_85c8fc45ee624cba3123ef4d6eb5661e8090a300b43b424f54c160c5d9df0c59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85c8fc45ee624cba3123ef4d6eb5661e8090a300b43b424f54c160c5d9df0c59->enter($__internal_85c8fc45ee624cba3123ef4d6eb5661e8090a300b43b424f54c160c5d9df0c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_84d36dbe653e1c87f929759fbe4576c253ecf1c71a3e46f0ddd8dfa4a58ec0ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84d36dbe653e1c87f929759fbe4576c253ecf1c71a3e46f0ddd8dfa4a58ec0ad->enter($__internal_84d36dbe653e1c87f929759fbe4576c253ecf1c71a3e46f0ddd8dfa4a58ec0ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_85c8fc45ee624cba3123ef4d6eb5661e8090a300b43b424f54c160c5d9df0c59->leave($__internal_85c8fc45ee624cba3123ef4d6eb5661e8090a300b43b424f54c160c5d9df0c59_prof);

        
        $__internal_84d36dbe653e1c87f929759fbe4576c253ecf1c71a3e46f0ddd8dfa4a58ec0ad->leave($__internal_84d36dbe653e1c87f929759fbe4576c253ecf1c71a3e46f0ddd8dfa4a58ec0ad_prof);

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
