<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_adff7e66d28e8c251b05b20a64e055107e624eb6c69a71332300bd399814b055 extends Twig_Template
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
        $__internal_a25641d1cf0d3f4b7f2e62f80cf5225c6fd3467b1029669b4e3b77039340046c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a25641d1cf0d3f4b7f2e62f80cf5225c6fd3467b1029669b4e3b77039340046c->enter($__internal_a25641d1cf0d3f4b7f2e62f80cf5225c6fd3467b1029669b4e3b77039340046c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_56853d364f2d80072d4ec87c638492983f4456221f03a3d7336793d1eb8869a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56853d364f2d80072d4ec87c638492983f4456221f03a3d7336793d1eb8869a7->enter($__internal_56853d364f2d80072d4ec87c638492983f4456221f03a3d7336793d1eb8869a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_a25641d1cf0d3f4b7f2e62f80cf5225c6fd3467b1029669b4e3b77039340046c->leave($__internal_a25641d1cf0d3f4b7f2e62f80cf5225c6fd3467b1029669b4e3b77039340046c_prof);

        
        $__internal_56853d364f2d80072d4ec87c638492983f4456221f03a3d7336793d1eb8869a7->leave($__internal_56853d364f2d80072d4ec87c638492983f4456221f03a3d7336793d1eb8869a7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
