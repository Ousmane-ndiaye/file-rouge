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
        $__internal_d45a61da1c9d93d65d11d3fa0440da79db1ae4767168667685a652248d77b581 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d45a61da1c9d93d65d11d3fa0440da79db1ae4767168667685a652248d77b581->enter($__internal_d45a61da1c9d93d65d11d3fa0440da79db1ae4767168667685a652248d77b581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_12756451edb9d84b1653e5fe043af603f300c3ddec37a611c218b8351fe2ea4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12756451edb9d84b1653e5fe043af603f300c3ddec37a611c218b8351fe2ea4a->enter($__internal_12756451edb9d84b1653e5fe043af603f300c3ddec37a611c218b8351fe2ea4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_d45a61da1c9d93d65d11d3fa0440da79db1ae4767168667685a652248d77b581->leave($__internal_d45a61da1c9d93d65d11d3fa0440da79db1ae4767168667685a652248d77b581_prof);

        
        $__internal_12756451edb9d84b1653e5fe043af603f300c3ddec37a611c218b8351fe2ea4a->leave($__internal_12756451edb9d84b1653e5fe043af603f300c3ddec37a611c218b8351fe2ea4a_prof);

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
