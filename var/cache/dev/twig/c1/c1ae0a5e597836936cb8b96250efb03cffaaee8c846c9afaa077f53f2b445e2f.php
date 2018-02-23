<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_229013a302df9d17dc51ed91f2085062b20b3dea64486f8ce4981a3dd907fd31 extends Twig_Template
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
        $__internal_13cef55cd47a8664e39a2507b082ba591f09372c17d517db7320f8b7dd93354a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13cef55cd47a8664e39a2507b082ba591f09372c17d517db7320f8b7dd93354a->enter($__internal_13cef55cd47a8664e39a2507b082ba591f09372c17d517db7320f8b7dd93354a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_2f82c085a188f4faf3cbae1fb6946f6aea9bfe147960e8350f0148e68c59af64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f82c085a188f4faf3cbae1fb6946f6aea9bfe147960e8350f0148e68c59af64->enter($__internal_2f82c085a188f4faf3cbae1fb6946f6aea9bfe147960e8350f0148e68c59af64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_13cef55cd47a8664e39a2507b082ba591f09372c17d517db7320f8b7dd93354a->leave($__internal_13cef55cd47a8664e39a2507b082ba591f09372c17d517db7320f8b7dd93354a_prof);

        
        $__internal_2f82c085a188f4faf3cbae1fb6946f6aea9bfe147960e8350f0148e68c59af64->leave($__internal_2f82c085a188f4faf3cbae1fb6946f6aea9bfe147960e8350f0148e68c59af64_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
