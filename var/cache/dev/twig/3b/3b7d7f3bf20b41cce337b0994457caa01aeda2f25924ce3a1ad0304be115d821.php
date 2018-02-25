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
        $__internal_ad44692b687c7f74c5c4569d539729b72c3687631dc953cb90dcc9bd424446e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad44692b687c7f74c5c4569d539729b72c3687631dc953cb90dcc9bd424446e6->enter($__internal_ad44692b687c7f74c5c4569d539729b72c3687631dc953cb90dcc9bd424446e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_39d8c2d0e779982e1c70c0deeb7833c02ffbcfcb95dc76683202761da461887d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39d8c2d0e779982e1c70c0deeb7833c02ffbcfcb95dc76683202761da461887d->enter($__internal_39d8c2d0e779982e1c70c0deeb7833c02ffbcfcb95dc76683202761da461887d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_ad44692b687c7f74c5c4569d539729b72c3687631dc953cb90dcc9bd424446e6->leave($__internal_ad44692b687c7f74c5c4569d539729b72c3687631dc953cb90dcc9bd424446e6_prof);

        
        $__internal_39d8c2d0e779982e1c70c0deeb7833c02ffbcfcb95dc76683202761da461887d->leave($__internal_39d8c2d0e779982e1c70c0deeb7833c02ffbcfcb95dc76683202761da461887d_prof);

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
