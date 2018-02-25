<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_e8a4715959982d62a4eaa372133700d380573fa9f6c314ef5bd53288d0f741fa extends Twig_Template
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
        $__internal_da73947c76a5d223b5706c943bf3febcae1044a7863af61e787c08374cfa66b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da73947c76a5d223b5706c943bf3febcae1044a7863af61e787c08374cfa66b4->enter($__internal_da73947c76a5d223b5706c943bf3febcae1044a7863af61e787c08374cfa66b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_6e7201d0f31993b86434fa300715f33cba7c225d024adf6305298cadfa2d38cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e7201d0f31993b86434fa300715f33cba7c225d024adf6305298cadfa2d38cd->enter($__internal_6e7201d0f31993b86434fa300715f33cba7c225d024adf6305298cadfa2d38cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_da73947c76a5d223b5706c943bf3febcae1044a7863af61e787c08374cfa66b4->leave($__internal_da73947c76a5d223b5706c943bf3febcae1044a7863af61e787c08374cfa66b4_prof);

        
        $__internal_6e7201d0f31993b86434fa300715f33cba7c225d024adf6305298cadfa2d38cd->leave($__internal_6e7201d0f31993b86434fa300715f33cba7c225d024adf6305298cadfa2d38cd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
