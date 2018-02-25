<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_45bf5c7d21036b1fd2c456510a44c89889dbb06d472826a666f9502bdc6ffb24 extends Twig_Template
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
        $__internal_7a8e15326529732a6e37c9fca46c6eab2923a8df5254f695bd92f00d93d4addc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a8e15326529732a6e37c9fca46c6eab2923a8df5254f695bd92f00d93d4addc->enter($__internal_7a8e15326529732a6e37c9fca46c6eab2923a8df5254f695bd92f00d93d4addc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_027a737b38b089fd7227486fa909593247dbc1e245d35ac92874777b443b96ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_027a737b38b089fd7227486fa909593247dbc1e245d35ac92874777b443b96ca->enter($__internal_027a737b38b089fd7227486fa909593247dbc1e245d35ac92874777b443b96ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_7a8e15326529732a6e37c9fca46c6eab2923a8df5254f695bd92f00d93d4addc->leave($__internal_7a8e15326529732a6e37c9fca46c6eab2923a8df5254f695bd92f00d93d4addc_prof);

        
        $__internal_027a737b38b089fd7227486fa909593247dbc1e245d35ac92874777b443b96ca->leave($__internal_027a737b38b089fd7227486fa909593247dbc1e245d35ac92874777b443b96ca_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
