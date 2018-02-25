<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_ad145957b7e6009e00103b81e21719a83e9b6329a9c19ddc328ea13bcea926d4 extends Twig_Template
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
        $__internal_3e29a53628ea89f2273d9a47d8039e2c157a92825717e80a01f10242a937c0e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e29a53628ea89f2273d9a47d8039e2c157a92825717e80a01f10242a937c0e3->enter($__internal_3e29a53628ea89f2273d9a47d8039e2c157a92825717e80a01f10242a937c0e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_1e848fc3f9ac3bd941c87f9e91896da0d29d84f112af248658116f0cc372930a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e848fc3f9ac3bd941c87f9e91896da0d29d84f112af248658116f0cc372930a->enter($__internal_1e848fc3f9ac3bd941c87f9e91896da0d29d84f112af248658116f0cc372930a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_3e29a53628ea89f2273d9a47d8039e2c157a92825717e80a01f10242a937c0e3->leave($__internal_3e29a53628ea89f2273d9a47d8039e2c157a92825717e80a01f10242a937c0e3_prof);

        
        $__internal_1e848fc3f9ac3bd941c87f9e91896da0d29d84f112af248658116f0cc372930a->leave($__internal_1e848fc3f9ac3bd941c87f9e91896da0d29d84f112af248658116f0cc372930a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
