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
        $__internal_6324555dcc65f078a1803c3cca541789e9e4736b25106379f4eb478d7f072af6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6324555dcc65f078a1803c3cca541789e9e4736b25106379f4eb478d7f072af6->enter($__internal_6324555dcc65f078a1803c3cca541789e9e4736b25106379f4eb478d7f072af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_7ad72a67f108507f609bcdd9eb77f02aeb130a2c2ad8df1142013ea92246adab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ad72a67f108507f609bcdd9eb77f02aeb130a2c2ad8df1142013ea92246adab->enter($__internal_7ad72a67f108507f609bcdd9eb77f02aeb130a2c2ad8df1142013ea92246adab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_6324555dcc65f078a1803c3cca541789e9e4736b25106379f4eb478d7f072af6->leave($__internal_6324555dcc65f078a1803c3cca541789e9e4736b25106379f4eb478d7f072af6_prof);

        
        $__internal_7ad72a67f108507f609bcdd9eb77f02aeb130a2c2ad8df1142013ea92246adab->leave($__internal_7ad72a67f108507f609bcdd9eb77f02aeb130a2c2ad8df1142013ea92246adab_prof);

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
