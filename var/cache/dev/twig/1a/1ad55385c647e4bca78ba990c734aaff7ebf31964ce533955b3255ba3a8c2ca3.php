<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_bde844aa2457d72e49c1412f1abaaacab5460b987041c62c8a485669be47b9e9 extends Twig_Template
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
        $__internal_04e37d369728b74bcc676754e5cbef8511559aaab5e636e71a5b29bbc0d78925 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04e37d369728b74bcc676754e5cbef8511559aaab5e636e71a5b29bbc0d78925->enter($__internal_04e37d369728b74bcc676754e5cbef8511559aaab5e636e71a5b29bbc0d78925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_3b5639767d37892e3256abe4232d1757517e46f9d10a8435ca1fe0957e43fe32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b5639767d37892e3256abe4232d1757517e46f9d10a8435ca1fe0957e43fe32->enter($__internal_3b5639767d37892e3256abe4232d1757517e46f9d10a8435ca1fe0957e43fe32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_04e37d369728b74bcc676754e5cbef8511559aaab5e636e71a5b29bbc0d78925->leave($__internal_04e37d369728b74bcc676754e5cbef8511559aaab5e636e71a5b29bbc0d78925_prof);

        
        $__internal_3b5639767d37892e3256abe4232d1757517e46f9d10a8435ca1fe0957e43fe32->leave($__internal_3b5639767d37892e3256abe4232d1757517e46f9d10a8435ca1fe0957e43fe32_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
