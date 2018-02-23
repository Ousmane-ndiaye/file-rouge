<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_05c675fbdfb49a052cb5ce133271eca023ace22c43429e5dba605e0b95730305 extends Twig_Template
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
        $__internal_2d2a8c687893aac8a6e1203df1f7df4f33b2b56da34b6856c9cfde43606b47ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d2a8c687893aac8a6e1203df1f7df4f33b2b56da34b6856c9cfde43606b47ff->enter($__internal_2d2a8c687893aac8a6e1203df1f7df4f33b2b56da34b6856c9cfde43606b47ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_0a0e97298871b5f5bd18842e0cc98902357375a8c162f2931fef928c8cc9f272 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a0e97298871b5f5bd18842e0cc98902357375a8c162f2931fef928c8cc9f272->enter($__internal_0a0e97298871b5f5bd18842e0cc98902357375a8c162f2931fef928c8cc9f272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_2d2a8c687893aac8a6e1203df1f7df4f33b2b56da34b6856c9cfde43606b47ff->leave($__internal_2d2a8c687893aac8a6e1203df1f7df4f33b2b56da34b6856c9cfde43606b47ff_prof);

        
        $__internal_0a0e97298871b5f5bd18842e0cc98902357375a8c162f2931fef928c8cc9f272->leave($__internal_0a0e97298871b5f5bd18842e0cc98902357375a8c162f2931fef928c8cc9f272_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
