<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_2a3726c8ee160b6e7e6ec19455e1b5132f877b116a8ed2a93d8875e57ccfdb0d extends Twig_Template
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
        $__internal_fe3fc53bb9543e9a37dc46b844f583cdcfd714a28399316e231da390b8cf7396 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe3fc53bb9543e9a37dc46b844f583cdcfd714a28399316e231da390b8cf7396->enter($__internal_fe3fc53bb9543e9a37dc46b844f583cdcfd714a28399316e231da390b8cf7396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_87f8003006016a36324a4c97bc82c0c759f499624844bfdbe97df094465d8de9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87f8003006016a36324a4c97bc82c0c759f499624844bfdbe97df094465d8de9->enter($__internal_87f8003006016a36324a4c97bc82c0c759f499624844bfdbe97df094465d8de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_fe3fc53bb9543e9a37dc46b844f583cdcfd714a28399316e231da390b8cf7396->leave($__internal_fe3fc53bb9543e9a37dc46b844f583cdcfd714a28399316e231da390b8cf7396_prof);

        
        $__internal_87f8003006016a36324a4c97bc82c0c759f499624844bfdbe97df094465d8de9->leave($__internal_87f8003006016a36324a4c97bc82c0c759f499624844bfdbe97df094465d8de9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
