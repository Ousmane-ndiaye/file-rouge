<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_516e269c86ccf40cbe577d545e1c637ea0a44deb19c6abcabb7b750b11e3d9f9 extends Twig_Template
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
        $__internal_9d6445b1e15ad8700b6798ebdb52fa12835dd72df98b19ec3d775fe8d954aea9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d6445b1e15ad8700b6798ebdb52fa12835dd72df98b19ec3d775fe8d954aea9->enter($__internal_9d6445b1e15ad8700b6798ebdb52fa12835dd72df98b19ec3d775fe8d954aea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_214f719a207309825f4a1043a7f9c0253278c83fd5f8f8b216c74d55e8c6ad39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_214f719a207309825f4a1043a7f9c0253278c83fd5f8f8b216c74d55e8c6ad39->enter($__internal_214f719a207309825f4a1043a7f9c0253278c83fd5f8f8b216c74d55e8c6ad39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_9d6445b1e15ad8700b6798ebdb52fa12835dd72df98b19ec3d775fe8d954aea9->leave($__internal_9d6445b1e15ad8700b6798ebdb52fa12835dd72df98b19ec3d775fe8d954aea9_prof);

        
        $__internal_214f719a207309825f4a1043a7f9c0253278c83fd5f8f8b216c74d55e8c6ad39->leave($__internal_214f719a207309825f4a1043a7f9c0253278c83fd5f8f8b216c74d55e8c6ad39_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
