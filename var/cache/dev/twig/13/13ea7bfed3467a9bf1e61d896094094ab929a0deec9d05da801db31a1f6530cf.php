<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_ec03dc96dbfb1a26d7fd588348b8dd0968ae4e0891b641a19b68775ff46a340e extends Twig_Template
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
        $__internal_e9ef5c8d2e348787ab77f5db5ded6993835b391a7a13c7ce40e3a5cbeaa6e377 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9ef5c8d2e348787ab77f5db5ded6993835b391a7a13c7ce40e3a5cbeaa6e377->enter($__internal_e9ef5c8d2e348787ab77f5db5ded6993835b391a7a13c7ce40e3a5cbeaa6e377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_6d3ff2048cc1d21a0d37c6bf3337fd621adf73bf67a4982b21f6085225d7cc37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d3ff2048cc1d21a0d37c6bf3337fd621adf73bf67a4982b21f6085225d7cc37->enter($__internal_6d3ff2048cc1d21a0d37c6bf3337fd621adf73bf67a4982b21f6085225d7cc37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_e9ef5c8d2e348787ab77f5db5ded6993835b391a7a13c7ce40e3a5cbeaa6e377->leave($__internal_e9ef5c8d2e348787ab77f5db5ded6993835b391a7a13c7ce40e3a5cbeaa6e377_prof);

        
        $__internal_6d3ff2048cc1d21a0d37c6bf3337fd621adf73bf67a4982b21f6085225d7cc37->leave($__internal_6d3ff2048cc1d21a0d37c6bf3337fd621adf73bf67a4982b21f6085225d7cc37_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
