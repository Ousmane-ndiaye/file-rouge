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
        $__internal_1eb07c5b1b469322057a559a1674fb213c81c36cc83d30cb5e1fbe3f47449aab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1eb07c5b1b469322057a559a1674fb213c81c36cc83d30cb5e1fbe3f47449aab->enter($__internal_1eb07c5b1b469322057a559a1674fb213c81c36cc83d30cb5e1fbe3f47449aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_dc1e2a952ae4b7415d6e0873eeb1e1f9e00834e26d240e2367f53311a2772ecb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc1e2a952ae4b7415d6e0873eeb1e1f9e00834e26d240e2367f53311a2772ecb->enter($__internal_dc1e2a952ae4b7415d6e0873eeb1e1f9e00834e26d240e2367f53311a2772ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_1eb07c5b1b469322057a559a1674fb213c81c36cc83d30cb5e1fbe3f47449aab->leave($__internal_1eb07c5b1b469322057a559a1674fb213c81c36cc83d30cb5e1fbe3f47449aab_prof);

        
        $__internal_dc1e2a952ae4b7415d6e0873eeb1e1f9e00834e26d240e2367f53311a2772ecb->leave($__internal_dc1e2a952ae4b7415d6e0873eeb1e1f9e00834e26d240e2367f53311a2772ecb_prof);

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
