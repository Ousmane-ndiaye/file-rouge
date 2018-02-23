<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_52c014fc3cd0c4635ced7b994c29f11953e244a0aa7f52e7a871d0d09cbbeebf extends Twig_Template
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
        $__internal_fe7f57394a3afa90db54ffbe87eb2ad57956ee3694be81480ffc9f7064497236 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe7f57394a3afa90db54ffbe87eb2ad57956ee3694be81480ffc9f7064497236->enter($__internal_fe7f57394a3afa90db54ffbe87eb2ad57956ee3694be81480ffc9f7064497236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_c93320f86450ac20bcc4aeaa8f6f0bbbece8947c6c7d36443680ea12edd4edd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c93320f86450ac20bcc4aeaa8f6f0bbbece8947c6c7d36443680ea12edd4edd3->enter($__internal_c93320f86450ac20bcc4aeaa8f6f0bbbece8947c6c7d36443680ea12edd4edd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_fe7f57394a3afa90db54ffbe87eb2ad57956ee3694be81480ffc9f7064497236->leave($__internal_fe7f57394a3afa90db54ffbe87eb2ad57956ee3694be81480ffc9f7064497236_prof);

        
        $__internal_c93320f86450ac20bcc4aeaa8f6f0bbbece8947c6c7d36443680ea12edd4edd3->leave($__internal_c93320f86450ac20bcc4aeaa8f6f0bbbece8947c6c7d36443680ea12edd4edd3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
