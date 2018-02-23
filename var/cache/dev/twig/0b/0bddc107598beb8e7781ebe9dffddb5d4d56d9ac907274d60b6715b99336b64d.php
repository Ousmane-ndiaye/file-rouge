<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_d9906a7bb6d4587fc2ea785007594fb1945e70c549a8eb237652fa8e706c8c68 extends Twig_Template
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
        $__internal_6e71bc82ed8d71c442342f0e9d73ca22600aad8a699c2927a8d5094bf8031a59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e71bc82ed8d71c442342f0e9d73ca22600aad8a699c2927a8d5094bf8031a59->enter($__internal_6e71bc82ed8d71c442342f0e9d73ca22600aad8a699c2927a8d5094bf8031a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_cdac2d18b43645f5bb9a6b71d7e93f69a6105bea3eaced41482d3b7c6678cf3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdac2d18b43645f5bb9a6b71d7e93f69a6105bea3eaced41482d3b7c6678cf3d->enter($__internal_cdac2d18b43645f5bb9a6b71d7e93f69a6105bea3eaced41482d3b7c6678cf3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_6e71bc82ed8d71c442342f0e9d73ca22600aad8a699c2927a8d5094bf8031a59->leave($__internal_6e71bc82ed8d71c442342f0e9d73ca22600aad8a699c2927a8d5094bf8031a59_prof);

        
        $__internal_cdac2d18b43645f5bb9a6b71d7e93f69a6105bea3eaced41482d3b7c6678cf3d->leave($__internal_cdac2d18b43645f5bb9a6b71d7e93f69a6105bea3eaced41482d3b7c6678cf3d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
