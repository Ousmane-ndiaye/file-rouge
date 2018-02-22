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
        $__internal_3c14d9e5a418c95f8285e28fcab96723f4cd187a67f8ce161c73d6dd50839fd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c14d9e5a418c95f8285e28fcab96723f4cd187a67f8ce161c73d6dd50839fd5->enter($__internal_3c14d9e5a418c95f8285e28fcab96723f4cd187a67f8ce161c73d6dd50839fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_91950b6235d7f9c301399ae53d723559d70d9d90913f02614c55ebb1a0c92a8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91950b6235d7f9c301399ae53d723559d70d9d90913f02614c55ebb1a0c92a8d->enter($__internal_91950b6235d7f9c301399ae53d723559d70d9d90913f02614c55ebb1a0c92a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_3c14d9e5a418c95f8285e28fcab96723f4cd187a67f8ce161c73d6dd50839fd5->leave($__internal_3c14d9e5a418c95f8285e28fcab96723f4cd187a67f8ce161c73d6dd50839fd5_prof);

        
        $__internal_91950b6235d7f9c301399ae53d723559d70d9d90913f02614c55ebb1a0c92a8d->leave($__internal_91950b6235d7f9c301399ae53d723559d70d9d90913f02614c55ebb1a0c92a8d_prof);

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
