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
        $__internal_36a949079c330a3df2fde5d7261c6fc21bd12af71aad0f5584761411ff4190c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36a949079c330a3df2fde5d7261c6fc21bd12af71aad0f5584761411ff4190c8->enter($__internal_36a949079c330a3df2fde5d7261c6fc21bd12af71aad0f5584761411ff4190c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_a7ef30f6513c55345f2fb1eb00697e0f018544fdb4bf10a894607f925af311c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7ef30f6513c55345f2fb1eb00697e0f018544fdb4bf10a894607f925af311c2->enter($__internal_a7ef30f6513c55345f2fb1eb00697e0f018544fdb4bf10a894607f925af311c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_36a949079c330a3df2fde5d7261c6fc21bd12af71aad0f5584761411ff4190c8->leave($__internal_36a949079c330a3df2fde5d7261c6fc21bd12af71aad0f5584761411ff4190c8_prof);

        
        $__internal_a7ef30f6513c55345f2fb1eb00697e0f018544fdb4bf10a894607f925af311c2->leave($__internal_a7ef30f6513c55345f2fb1eb00697e0f018544fdb4bf10a894607f925af311c2_prof);

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
