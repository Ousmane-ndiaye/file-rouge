<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_35adecb451e73ce7cceefb6918fd41de51bebb7b720e57934a1b209162db4a81 extends Twig_Template
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
        $__internal_57fc5c6c160eb2ea6bbbd9525aba462b65ed39fec96f15e48ba7d793f5f734a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57fc5c6c160eb2ea6bbbd9525aba462b65ed39fec96f15e48ba7d793f5f734a1->enter($__internal_57fc5c6c160eb2ea6bbbd9525aba462b65ed39fec96f15e48ba7d793f5f734a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_37fad466f86669df413ccd5704e999262b3173a72a8c552cd2393fd9e5cff527 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37fad466f86669df413ccd5704e999262b3173a72a8c552cd2393fd9e5cff527->enter($__internal_37fad466f86669df413ccd5704e999262b3173a72a8c552cd2393fd9e5cff527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_57fc5c6c160eb2ea6bbbd9525aba462b65ed39fec96f15e48ba7d793f5f734a1->leave($__internal_57fc5c6c160eb2ea6bbbd9525aba462b65ed39fec96f15e48ba7d793f5f734a1_prof);

        
        $__internal_37fad466f86669df413ccd5704e999262b3173a72a8c552cd2393fd9e5cff527->leave($__internal_37fad466f86669df413ccd5704e999262b3173a72a8c552cd2393fd9e5cff527_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
