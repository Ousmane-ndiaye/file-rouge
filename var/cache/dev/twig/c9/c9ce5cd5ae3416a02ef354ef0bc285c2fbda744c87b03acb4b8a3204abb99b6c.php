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
        $__internal_17afa3be574d5af3212ed91182b349ef0ca8bc77a3e930d8dee491ecf5bdcb6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17afa3be574d5af3212ed91182b349ef0ca8bc77a3e930d8dee491ecf5bdcb6b->enter($__internal_17afa3be574d5af3212ed91182b349ef0ca8bc77a3e930d8dee491ecf5bdcb6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_f69a10470bc463131e6cc800c32ac3e5eb3c36b2a06816becdf36daac26240a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f69a10470bc463131e6cc800c32ac3e5eb3c36b2a06816becdf36daac26240a9->enter($__internal_f69a10470bc463131e6cc800c32ac3e5eb3c36b2a06816becdf36daac26240a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_17afa3be574d5af3212ed91182b349ef0ca8bc77a3e930d8dee491ecf5bdcb6b->leave($__internal_17afa3be574d5af3212ed91182b349ef0ca8bc77a3e930d8dee491ecf5bdcb6b_prof);

        
        $__internal_f69a10470bc463131e6cc800c32ac3e5eb3c36b2a06816becdf36daac26240a9->leave($__internal_f69a10470bc463131e6cc800c32ac3e5eb3c36b2a06816becdf36daac26240a9_prof);

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
