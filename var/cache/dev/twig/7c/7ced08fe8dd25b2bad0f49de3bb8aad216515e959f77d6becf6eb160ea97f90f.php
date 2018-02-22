<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_80510a88aaf2dd5f69b1390322441018455b468488e97e95a301dda3024907a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c76a54c259f16a3da67d7d9f9b1972440939dea3108afde2dacb8b21f198686 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c76a54c259f16a3da67d7d9f9b1972440939dea3108afde2dacb8b21f198686->enter($__internal_6c76a54c259f16a3da67d7d9f9b1972440939dea3108afde2dacb8b21f198686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_4b26093fa261c4e833f1478ba738c2ee939a5a99a8a31cdc1e376b02ee10eb34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b26093fa261c4e833f1478ba738c2ee939a5a99a8a31cdc1e376b02ee10eb34->enter($__internal_4b26093fa261c4e833f1478ba738c2ee939a5a99a8a31cdc1e376b02ee10eb34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c76a54c259f16a3da67d7d9f9b1972440939dea3108afde2dacb8b21f198686->leave($__internal_6c76a54c259f16a3da67d7d9f9b1972440939dea3108afde2dacb8b21f198686_prof);

        
        $__internal_4b26093fa261c4e833f1478ba738c2ee939a5a99a8a31cdc1e376b02ee10eb34->leave($__internal_4b26093fa261c4e833f1478ba738c2ee939a5a99a8a31cdc1e376b02ee10eb34_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e1949d320d9155430b253d3af8439fa31cba07addd4b23f4b71e216035962384 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1949d320d9155430b253d3af8439fa31cba07addd4b23f4b71e216035962384->enter($__internal_e1949d320d9155430b253d3af8439fa31cba07addd4b23f4b71e216035962384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_45f4fba666f37051b9b43969c443da8201710dea4c30967e5d42a8cba1745cc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45f4fba666f37051b9b43969c443da8201710dea4c30967e5d42a8cba1745cc7->enter($__internal_45f4fba666f37051b9b43969c443da8201710dea4c30967e5d42a8cba1745cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_45f4fba666f37051b9b43969c443da8201710dea4c30967e5d42a8cba1745cc7->leave($__internal_45f4fba666f37051b9b43969c443da8201710dea4c30967e5d42a8cba1745cc7_prof);

        
        $__internal_e1949d320d9155430b253d3af8439fa31cba07addd4b23f4b71e216035962384->leave($__internal_e1949d320d9155430b253d3af8439fa31cba07addd4b23f4b71e216035962384_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1501d737cbb55dedd087bb506ce54603fd2d9216d7ca531ae0e8e4a849fae578 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1501d737cbb55dedd087bb506ce54603fd2d9216d7ca531ae0e8e4a849fae578->enter($__internal_1501d737cbb55dedd087bb506ce54603fd2d9216d7ca531ae0e8e4a849fae578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2a1c09e1bb0bcb796130f186a2b3e89612f74bad118f7517418ed4ed77bef81b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a1c09e1bb0bcb796130f186a2b3e89612f74bad118f7517418ed4ed77bef81b->enter($__internal_2a1c09e1bb0bcb796130f186a2b3e89612f74bad118f7517418ed4ed77bef81b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_2a1c09e1bb0bcb796130f186a2b3e89612f74bad118f7517418ed4ed77bef81b->leave($__internal_2a1c09e1bb0bcb796130f186a2b3e89612f74bad118f7517418ed4ed77bef81b_prof);

        
        $__internal_1501d737cbb55dedd087bb506ce54603fd2d9216d7ca531ae0e8e4a849fae578->leave($__internal_1501d737cbb55dedd087bb506ce54603fd2d9216d7ca531ae0e8e4a849fae578_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
