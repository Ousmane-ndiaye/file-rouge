<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_744c421e1e08f50138d3bbccba9c4a78f28b416ceaa0f4f9657b3d6a934e1471 extends Twig_Template
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
        $__internal_191c76ad828e1f7ec86bfca09064e7a0a0d2fe39758754732d27df894c3c9d8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_191c76ad828e1f7ec86bfca09064e7a0a0d2fe39758754732d27df894c3c9d8e->enter($__internal_191c76ad828e1f7ec86bfca09064e7a0a0d2fe39758754732d27df894c3c9d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_c68646b855ea5535c66060bbc2ce2e9645fef5b1410cd1cf92fd7003cbb37768 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c68646b855ea5535c66060bbc2ce2e9645fef5b1410cd1cf92fd7003cbb37768->enter($__internal_c68646b855ea5535c66060bbc2ce2e9645fef5b1410cd1cf92fd7003cbb37768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_191c76ad828e1f7ec86bfca09064e7a0a0d2fe39758754732d27df894c3c9d8e->leave($__internal_191c76ad828e1f7ec86bfca09064e7a0a0d2fe39758754732d27df894c3c9d8e_prof);

        
        $__internal_c68646b855ea5535c66060bbc2ce2e9645fef5b1410cd1cf92fd7003cbb37768->leave($__internal_c68646b855ea5535c66060bbc2ce2e9645fef5b1410cd1cf92fd7003cbb37768_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
