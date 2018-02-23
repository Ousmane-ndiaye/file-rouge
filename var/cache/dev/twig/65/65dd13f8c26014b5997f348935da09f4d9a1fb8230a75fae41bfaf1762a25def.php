<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_c1a87904b4fba1800c6f0240b0ce2678c5a771c0de4fc173729bd5d5f9df1f11 extends Twig_Template
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
        $__internal_090147cf942b6c9f4667434d2145413a5e20e5d49f2d03ed86a0f97ece0b154e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_090147cf942b6c9f4667434d2145413a5e20e5d49f2d03ed86a0f97ece0b154e->enter($__internal_090147cf942b6c9f4667434d2145413a5e20e5d49f2d03ed86a0f97ece0b154e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_6cf3fa0eb706828db89887a61eb2879eb74e5a70d4ce352c20e8635441753e7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cf3fa0eb706828db89887a61eb2879eb74e5a70d4ce352c20e8635441753e7e->enter($__internal_6cf3fa0eb706828db89887a61eb2879eb74e5a70d4ce352c20e8635441753e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_090147cf942b6c9f4667434d2145413a5e20e5d49f2d03ed86a0f97ece0b154e->leave($__internal_090147cf942b6c9f4667434d2145413a5e20e5d49f2d03ed86a0f97ece0b154e_prof);

        
        $__internal_6cf3fa0eb706828db89887a61eb2879eb74e5a70d4ce352c20e8635441753e7e->leave($__internal_6cf3fa0eb706828db89887a61eb2879eb74e5a70d4ce352c20e8635441753e7e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
