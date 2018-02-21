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
        $__internal_a3474bbd72bf3bcacd49fd3f12ffe21ca12a32dac81a3a1a6487d5f0cd82a114 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3474bbd72bf3bcacd49fd3f12ffe21ca12a32dac81a3a1a6487d5f0cd82a114->enter($__internal_a3474bbd72bf3bcacd49fd3f12ffe21ca12a32dac81a3a1a6487d5f0cd82a114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_e236c352198ccb28e9321d918a53df20e004ac9fc4270b9e4342d504a58205de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e236c352198ccb28e9321d918a53df20e004ac9fc4270b9e4342d504a58205de->enter($__internal_e236c352198ccb28e9321d918a53df20e004ac9fc4270b9e4342d504a58205de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_a3474bbd72bf3bcacd49fd3f12ffe21ca12a32dac81a3a1a6487d5f0cd82a114->leave($__internal_a3474bbd72bf3bcacd49fd3f12ffe21ca12a32dac81a3a1a6487d5f0cd82a114_prof);

        
        $__internal_e236c352198ccb28e9321d918a53df20e004ac9fc4270b9e4342d504a58205de->leave($__internal_e236c352198ccb28e9321d918a53df20e004ac9fc4270b9e4342d504a58205de_prof);

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
