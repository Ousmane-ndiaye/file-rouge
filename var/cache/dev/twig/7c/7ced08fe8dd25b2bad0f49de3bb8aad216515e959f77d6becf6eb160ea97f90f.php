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
        $__internal_9f82e658460692612d9509ba033ed4021f8ff4b3ff8a84c02f4bfeaad01f90a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f82e658460692612d9509ba033ed4021f8ff4b3ff8a84c02f4bfeaad01f90a7->enter($__internal_9f82e658460692612d9509ba033ed4021f8ff4b3ff8a84c02f4bfeaad01f90a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_cbb08070b4518470b267d7da2cd73b73e5a08ca385a14075d08efecf599e0c43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbb08070b4518470b267d7da2cd73b73e5a08ca385a14075d08efecf599e0c43->enter($__internal_cbb08070b4518470b267d7da2cd73b73e5a08ca385a14075d08efecf599e0c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f82e658460692612d9509ba033ed4021f8ff4b3ff8a84c02f4bfeaad01f90a7->leave($__internal_9f82e658460692612d9509ba033ed4021f8ff4b3ff8a84c02f4bfeaad01f90a7_prof);

        
        $__internal_cbb08070b4518470b267d7da2cd73b73e5a08ca385a14075d08efecf599e0c43->leave($__internal_cbb08070b4518470b267d7da2cd73b73e5a08ca385a14075d08efecf599e0c43_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0debe02d2a570a166fca2132099597d15dc63d0b5dd13c41ddd1a3491005613f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0debe02d2a570a166fca2132099597d15dc63d0b5dd13c41ddd1a3491005613f->enter($__internal_0debe02d2a570a166fca2132099597d15dc63d0b5dd13c41ddd1a3491005613f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3cb01c7e936b36f4ac3f073d9bd9ffb4917fcaea6ba9502edc943c85ae907ec6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cb01c7e936b36f4ac3f073d9bd9ffb4917fcaea6ba9502edc943c85ae907ec6->enter($__internal_3cb01c7e936b36f4ac3f073d9bd9ffb4917fcaea6ba9502edc943c85ae907ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3cb01c7e936b36f4ac3f073d9bd9ffb4917fcaea6ba9502edc943c85ae907ec6->leave($__internal_3cb01c7e936b36f4ac3f073d9bd9ffb4917fcaea6ba9502edc943c85ae907ec6_prof);

        
        $__internal_0debe02d2a570a166fca2132099597d15dc63d0b5dd13c41ddd1a3491005613f->leave($__internal_0debe02d2a570a166fca2132099597d15dc63d0b5dd13c41ddd1a3491005613f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4cb30cca80d0f364cb13287d166095f4832b130e19fa202c9fcc2c80682da1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4cb30cca80d0f364cb13287d166095f4832b130e19fa202c9fcc2c80682da1c->enter($__internal_c4cb30cca80d0f364cb13287d166095f4832b130e19fa202c9fcc2c80682da1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8dd738d8af4539a95697adea3268e2bd41d85cb2fb58f1091d042991ced35128 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dd738d8af4539a95697adea3268e2bd41d85cb2fb58f1091d042991ced35128->enter($__internal_8dd738d8af4539a95697adea3268e2bd41d85cb2fb58f1091d042991ced35128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8dd738d8af4539a95697adea3268e2bd41d85cb2fb58f1091d042991ced35128->leave($__internal_8dd738d8af4539a95697adea3268e2bd41d85cb2fb58f1091d042991ced35128_prof);

        
        $__internal_c4cb30cca80d0f364cb13287d166095f4832b130e19fa202c9fcc2c80682da1c->leave($__internal_c4cb30cca80d0f364cb13287d166095f4832b130e19fa202c9fcc2c80682da1c_prof);

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
