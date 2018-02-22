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
        $__internal_648d9fd007667d40bb67bd07eb817ab0a319f7f71b7cb7874749b11cc0a03496 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_648d9fd007667d40bb67bd07eb817ab0a319f7f71b7cb7874749b11cc0a03496->enter($__internal_648d9fd007667d40bb67bd07eb817ab0a319f7f71b7cb7874749b11cc0a03496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_c143dcf7fec98b8fd7a5816cbf06e07f41218534b4d93016ad8ecdf25f9dbb39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c143dcf7fec98b8fd7a5816cbf06e07f41218534b4d93016ad8ecdf25f9dbb39->enter($__internal_c143dcf7fec98b8fd7a5816cbf06e07f41218534b4d93016ad8ecdf25f9dbb39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_648d9fd007667d40bb67bd07eb817ab0a319f7f71b7cb7874749b11cc0a03496->leave($__internal_648d9fd007667d40bb67bd07eb817ab0a319f7f71b7cb7874749b11cc0a03496_prof);

        
        $__internal_c143dcf7fec98b8fd7a5816cbf06e07f41218534b4d93016ad8ecdf25f9dbb39->leave($__internal_c143dcf7fec98b8fd7a5816cbf06e07f41218534b4d93016ad8ecdf25f9dbb39_prof);

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
