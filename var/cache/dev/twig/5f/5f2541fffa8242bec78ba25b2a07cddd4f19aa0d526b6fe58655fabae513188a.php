<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_3cbe54f18bcd2ec7904b5046b285c12f82dcedd8c9426bd5b09c59d5318f0d1c extends Twig_Template
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
        $__internal_d1eb1431cbf57f4a880379bfaa7a3465d923ddeff81e415f452cd0f0c61767dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1eb1431cbf57f4a880379bfaa7a3465d923ddeff81e415f452cd0f0c61767dc->enter($__internal_d1eb1431cbf57f4a880379bfaa7a3465d923ddeff81e415f452cd0f0c61767dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_fd929ab1458a213f62ffc6dd3916927bf8240ec28875e465e27ab9ddb7013db7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd929ab1458a213f62ffc6dd3916927bf8240ec28875e465e27ab9ddb7013db7->enter($__internal_fd929ab1458a213f62ffc6dd3916927bf8240ec28875e465e27ab9ddb7013db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_d1eb1431cbf57f4a880379bfaa7a3465d923ddeff81e415f452cd0f0c61767dc->leave($__internal_d1eb1431cbf57f4a880379bfaa7a3465d923ddeff81e415f452cd0f0c61767dc_prof);

        
        $__internal_fd929ab1458a213f62ffc6dd3916927bf8240ec28875e465e27ab9ddb7013db7->leave($__internal_fd929ab1458a213f62ffc6dd3916927bf8240ec28875e465e27ab9ddb7013db7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
