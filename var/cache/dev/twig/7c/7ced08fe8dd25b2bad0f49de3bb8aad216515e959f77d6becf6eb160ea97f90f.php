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
        $__internal_7f3f03c1254b96829a0f62fa24b0f2c4385822f59b1ba0483decdfd704ddfbd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f3f03c1254b96829a0f62fa24b0f2c4385822f59b1ba0483decdfd704ddfbd7->enter($__internal_7f3f03c1254b96829a0f62fa24b0f2c4385822f59b1ba0483decdfd704ddfbd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_cd7bc5cb962f38fa36348c8c4538d96ed43eeff7b98f5a40d0e4972f41e3194b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd7bc5cb962f38fa36348c8c4538d96ed43eeff7b98f5a40d0e4972f41e3194b->enter($__internal_cd7bc5cb962f38fa36348c8c4538d96ed43eeff7b98f5a40d0e4972f41e3194b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f3f03c1254b96829a0f62fa24b0f2c4385822f59b1ba0483decdfd704ddfbd7->leave($__internal_7f3f03c1254b96829a0f62fa24b0f2c4385822f59b1ba0483decdfd704ddfbd7_prof);

        
        $__internal_cd7bc5cb962f38fa36348c8c4538d96ed43eeff7b98f5a40d0e4972f41e3194b->leave($__internal_cd7bc5cb962f38fa36348c8c4538d96ed43eeff7b98f5a40d0e4972f41e3194b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_321a2a806f311c103a12c43f72182e7b5898a8730ddc869662e0fff117c37445 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_321a2a806f311c103a12c43f72182e7b5898a8730ddc869662e0fff117c37445->enter($__internal_321a2a806f311c103a12c43f72182e7b5898a8730ddc869662e0fff117c37445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_624e6aa0f5bfb48234c9ed79ea87a67d8e56932be3271a0110ca8d8997336535 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_624e6aa0f5bfb48234c9ed79ea87a67d8e56932be3271a0110ca8d8997336535->enter($__internal_624e6aa0f5bfb48234c9ed79ea87a67d8e56932be3271a0110ca8d8997336535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_624e6aa0f5bfb48234c9ed79ea87a67d8e56932be3271a0110ca8d8997336535->leave($__internal_624e6aa0f5bfb48234c9ed79ea87a67d8e56932be3271a0110ca8d8997336535_prof);

        
        $__internal_321a2a806f311c103a12c43f72182e7b5898a8730ddc869662e0fff117c37445->leave($__internal_321a2a806f311c103a12c43f72182e7b5898a8730ddc869662e0fff117c37445_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_168d534db8beb21eabf9c967acf523641a25471590081dfdded7429954f3d5ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_168d534db8beb21eabf9c967acf523641a25471590081dfdded7429954f3d5ed->enter($__internal_168d534db8beb21eabf9c967acf523641a25471590081dfdded7429954f3d5ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b1e9e1918868ba7965aa1d4ad08811d3d4078995fec154c7b3afc153f335cc83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1e9e1918868ba7965aa1d4ad08811d3d4078995fec154c7b3afc153f335cc83->enter($__internal_b1e9e1918868ba7965aa1d4ad08811d3d4078995fec154c7b3afc153f335cc83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b1e9e1918868ba7965aa1d4ad08811d3d4078995fec154c7b3afc153f335cc83->leave($__internal_b1e9e1918868ba7965aa1d4ad08811d3d4078995fec154c7b3afc153f335cc83_prof);

        
        $__internal_168d534db8beb21eabf9c967acf523641a25471590081dfdded7429954f3d5ed->leave($__internal_168d534db8beb21eabf9c967acf523641a25471590081dfdded7429954f3d5ed_prof);

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
