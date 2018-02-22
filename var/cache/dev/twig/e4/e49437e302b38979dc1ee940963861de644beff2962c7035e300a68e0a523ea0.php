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
        $__internal_a3c7b274b98da1e2e30201e0e45d9b36e1d3d95c17a7d6a75ee216b99c993eb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3c7b274b98da1e2e30201e0e45d9b36e1d3d95c17a7d6a75ee216b99c993eb5->enter($__internal_a3c7b274b98da1e2e30201e0e45d9b36e1d3d95c17a7d6a75ee216b99c993eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_cff5e0ff0c6b4a107297a716e5c2de2bff5d7732083a2cce45a2d2084821cd2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cff5e0ff0c6b4a107297a716e5c2de2bff5d7732083a2cce45a2d2084821cd2d->enter($__internal_cff5e0ff0c6b4a107297a716e5c2de2bff5d7732083a2cce45a2d2084821cd2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_a3c7b274b98da1e2e30201e0e45d9b36e1d3d95c17a7d6a75ee216b99c993eb5->leave($__internal_a3c7b274b98da1e2e30201e0e45d9b36e1d3d95c17a7d6a75ee216b99c993eb5_prof);

        
        $__internal_cff5e0ff0c6b4a107297a716e5c2de2bff5d7732083a2cce45a2d2084821cd2d->leave($__internal_cff5e0ff0c6b4a107297a716e5c2de2bff5d7732083a2cce45a2d2084821cd2d_prof);

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
