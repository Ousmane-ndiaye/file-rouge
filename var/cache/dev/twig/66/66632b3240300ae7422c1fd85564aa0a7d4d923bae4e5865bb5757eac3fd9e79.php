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
        $__internal_ae7f1a95e357fb2b6e4bee19f44ed505d3bf6f3934430d84b526b4a61ec8520e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae7f1a95e357fb2b6e4bee19f44ed505d3bf6f3934430d84b526b4a61ec8520e->enter($__internal_ae7f1a95e357fb2b6e4bee19f44ed505d3bf6f3934430d84b526b4a61ec8520e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_61b20577fba895b60dc666b3d38120aebb4a1d4c258466558e9904a08a719f4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61b20577fba895b60dc666b3d38120aebb4a1d4c258466558e9904a08a719f4c->enter($__internal_61b20577fba895b60dc666b3d38120aebb4a1d4c258466558e9904a08a719f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_ae7f1a95e357fb2b6e4bee19f44ed505d3bf6f3934430d84b526b4a61ec8520e->leave($__internal_ae7f1a95e357fb2b6e4bee19f44ed505d3bf6f3934430d84b526b4a61ec8520e_prof);

        
        $__internal_61b20577fba895b60dc666b3d38120aebb4a1d4c258466558e9904a08a719f4c->leave($__internal_61b20577fba895b60dc666b3d38120aebb4a1d4c258466558e9904a08a719f4c_prof);

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
