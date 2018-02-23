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
        $__internal_655fa7e137f853aeafe1e09adff2ce72c3e0b29c1e4b6f72cfcb6bda1cffdb86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_655fa7e137f853aeafe1e09adff2ce72c3e0b29c1e4b6f72cfcb6bda1cffdb86->enter($__internal_655fa7e137f853aeafe1e09adff2ce72c3e0b29c1e4b6f72cfcb6bda1cffdb86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_547daa036ceeb2d4af81995ff4bbc1075955b49971e491936705694e802c46ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_547daa036ceeb2d4af81995ff4bbc1075955b49971e491936705694e802c46ea->enter($__internal_547daa036ceeb2d4af81995ff4bbc1075955b49971e491936705694e802c46ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_655fa7e137f853aeafe1e09adff2ce72c3e0b29c1e4b6f72cfcb6bda1cffdb86->leave($__internal_655fa7e137f853aeafe1e09adff2ce72c3e0b29c1e4b6f72cfcb6bda1cffdb86_prof);

        
        $__internal_547daa036ceeb2d4af81995ff4bbc1075955b49971e491936705694e802c46ea->leave($__internal_547daa036ceeb2d4af81995ff4bbc1075955b49971e491936705694e802c46ea_prof);

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
