<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_bbb0aa1f805fd68f685c79c392f39261e47eb7f562a943d2e9ed1d80ab763973 extends Twig_Template
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
        $__internal_f4e162247001f58bb7a3f5b440a60359a5aac4650b005c48d2caf4d8b062beb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4e162247001f58bb7a3f5b440a60359a5aac4650b005c48d2caf4d8b062beb4->enter($__internal_f4e162247001f58bb7a3f5b440a60359a5aac4650b005c48d2caf4d8b062beb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_3be20c53d1ee0fd47b2ad9054d2d31c9db86fdcd243a134ff26b187365a0b9fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3be20c53d1ee0fd47b2ad9054d2d31c9db86fdcd243a134ff26b187365a0b9fb->enter($__internal_3be20c53d1ee0fd47b2ad9054d2d31c9db86fdcd243a134ff26b187365a0b9fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_f4e162247001f58bb7a3f5b440a60359a5aac4650b005c48d2caf4d8b062beb4->leave($__internal_f4e162247001f58bb7a3f5b440a60359a5aac4650b005c48d2caf4d8b062beb4_prof);

        
        $__internal_3be20c53d1ee0fd47b2ad9054d2d31c9db86fdcd243a134ff26b187365a0b9fb->leave($__internal_3be20c53d1ee0fd47b2ad9054d2d31c9db86fdcd243a134ff26b187365a0b9fb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
