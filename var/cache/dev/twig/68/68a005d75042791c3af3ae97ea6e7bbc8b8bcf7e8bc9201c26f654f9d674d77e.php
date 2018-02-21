<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_54d037e5162dfa915310efd058dc1aa6cbcf6bbba891aa6883f83f55c86cb241 extends Twig_Template
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
        $__internal_6f1487ea570af10d34f5484952e254332b4fe97cc971f0343e9036b388da5f8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f1487ea570af10d34f5484952e254332b4fe97cc971f0343e9036b388da5f8a->enter($__internal_6f1487ea570af10d34f5484952e254332b4fe97cc971f0343e9036b388da5f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_3d03502b02061e4dd531001642523700327c7217ddc02bbaf46c1a7f1fd87452 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d03502b02061e4dd531001642523700327c7217ddc02bbaf46c1a7f1fd87452->enter($__internal_3d03502b02061e4dd531001642523700327c7217ddc02bbaf46c1a7f1fd87452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_6f1487ea570af10d34f5484952e254332b4fe97cc971f0343e9036b388da5f8a->leave($__internal_6f1487ea570af10d34f5484952e254332b4fe97cc971f0343e9036b388da5f8a_prof);

        
        $__internal_3d03502b02061e4dd531001642523700327c7217ddc02bbaf46c1a7f1fd87452->leave($__internal_3d03502b02061e4dd531001642523700327c7217ddc02bbaf46c1a7f1fd87452_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
