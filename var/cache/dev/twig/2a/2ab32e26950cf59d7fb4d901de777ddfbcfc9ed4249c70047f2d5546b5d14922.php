<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_5f270917a48f234e4fd9496ccf82bf7dea7e8dfaa2a11e2256bf27a95bd32720 extends Twig_Template
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
        $__internal_e9a58da68100b2f2f0438a52b165f52e2198a213d6ce7bb614169e9d36ce2d4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9a58da68100b2f2f0438a52b165f52e2198a213d6ce7bb614169e9d36ce2d4c->enter($__internal_e9a58da68100b2f2f0438a52b165f52e2198a213d6ce7bb614169e9d36ce2d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_fd3da6748724ce9e4f80dd047eaf2ed1eb9c925f0f7c2c49f038d5ada4e37a59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd3da6748724ce9e4f80dd047eaf2ed1eb9c925f0f7c2c49f038d5ada4e37a59->enter($__internal_fd3da6748724ce9e4f80dd047eaf2ed1eb9c925f0f7c2c49f038d5ada4e37a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_e9a58da68100b2f2f0438a52b165f52e2198a213d6ce7bb614169e9d36ce2d4c->leave($__internal_e9a58da68100b2f2f0438a52b165f52e2198a213d6ce7bb614169e9d36ce2d4c_prof);

        
        $__internal_fd3da6748724ce9e4f80dd047eaf2ed1eb9c925f0f7c2c49f038d5ada4e37a59->leave($__internal_fd3da6748724ce9e4f80dd047eaf2ed1eb9c925f0f7c2c49f038d5ada4e37a59_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
