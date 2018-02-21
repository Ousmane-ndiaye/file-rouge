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
        $__internal_fa4f4d64ec7331e002aa646cb1971df119412261cecd15965f3bac2254599c52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa4f4d64ec7331e002aa646cb1971df119412261cecd15965f3bac2254599c52->enter($__internal_fa4f4d64ec7331e002aa646cb1971df119412261cecd15965f3bac2254599c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_6d7d263014c61350df42e2a58e7c693a8073f5ca053a605a47507174c4abf4a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d7d263014c61350df42e2a58e7c693a8073f5ca053a605a47507174c4abf4a3->enter($__internal_6d7d263014c61350df42e2a58e7c693a8073f5ca053a605a47507174c4abf4a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_fa4f4d64ec7331e002aa646cb1971df119412261cecd15965f3bac2254599c52->leave($__internal_fa4f4d64ec7331e002aa646cb1971df119412261cecd15965f3bac2254599c52_prof);

        
        $__internal_6d7d263014c61350df42e2a58e7c693a8073f5ca053a605a47507174c4abf4a3->leave($__internal_6d7d263014c61350df42e2a58e7c693a8073f5ca053a605a47507174c4abf4a3_prof);

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
