<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_627299fa42cfd848fd182d99a5255e474fc3368ddd730c0603fa8257bf337c23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_536d273e93c09b1413bbbe6a7b1cc1dd4a30237409d3bab994a19356d1e58d8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_536d273e93c09b1413bbbe6a7b1cc1dd4a30237409d3bab994a19356d1e58d8c->enter($__internal_536d273e93c09b1413bbbe6a7b1cc1dd4a30237409d3bab994a19356d1e58d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_71025d48971d73788cc26b484c192eca34a5673894807fe7bc44aa8f67fc4f56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71025d48971d73788cc26b484c192eca34a5673894807fe7bc44aa8f67fc4f56->enter($__internal_71025d48971d73788cc26b484c192eca34a5673894807fe7bc44aa8f67fc4f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_536d273e93c09b1413bbbe6a7b1cc1dd4a30237409d3bab994a19356d1e58d8c->leave($__internal_536d273e93c09b1413bbbe6a7b1cc1dd4a30237409d3bab994a19356d1e58d8c_prof);

        
        $__internal_71025d48971d73788cc26b484c192eca34a5673894807fe7bc44aa8f67fc4f56->leave($__internal_71025d48971d73788cc26b484c192eca34a5673894807fe7bc44aa8f67fc4f56_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b8ac40256581060bb4da3f2ea3d65f9411bdbbdfe526ca69e3360fdb960c2853 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8ac40256581060bb4da3f2ea3d65f9411bdbbdfe526ca69e3360fdb960c2853->enter($__internal_b8ac40256581060bb4da3f2ea3d65f9411bdbbdfe526ca69e3360fdb960c2853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fcaff56aba1366e9937a4d4cdaaac38ada25ecc1d49d9963555ae130881c00dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcaff56aba1366e9937a4d4cdaaac38ada25ecc1d49d9963555ae130881c00dc->enter($__internal_fcaff56aba1366e9937a4d4cdaaac38ada25ecc1d49d9963555ae130881c00dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_fcaff56aba1366e9937a4d4cdaaac38ada25ecc1d49d9963555ae130881c00dc->leave($__internal_fcaff56aba1366e9937a4d4cdaaac38ada25ecc1d49d9963555ae130881c00dc_prof);

        
        $__internal_b8ac40256581060bb4da3f2ea3d65f9411bdbbdfe526ca69e3360fdb960c2853->leave($__internal_b8ac40256581060bb4da3f2ea3d65f9411bdbbdfe526ca69e3360fdb960c2853_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_228ced6e7d4e89fc2a53fc7a53bdcb9e00587f28e94a70c56181d81154f936d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_228ced6e7d4e89fc2a53fc7a53bdcb9e00587f28e94a70c56181d81154f936d1->enter($__internal_228ced6e7d4e89fc2a53fc7a53bdcb9e00587f28e94a70c56181d81154f936d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f013b7f9b94736fade9db7aec84b9a7343ceff9b660a7e35d0272b9a420d48e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f013b7f9b94736fade9db7aec84b9a7343ceff9b660a7e35d0272b9a420d48e3->enter($__internal_f013b7f9b94736fade9db7aec84b9a7343ceff9b660a7e35d0272b9a420d48e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_f013b7f9b94736fade9db7aec84b9a7343ceff9b660a7e35d0272b9a420d48e3->leave($__internal_f013b7f9b94736fade9db7aec84b9a7343ceff9b660a7e35d0272b9a420d48e3_prof);

        
        $__internal_228ced6e7d4e89fc2a53fc7a53bdcb9e00587f28e94a70c56181d81154f936d1->leave($__internal_228ced6e7d4e89fc2a53fc7a53bdcb9e00587f28e94a70c56181d81154f936d1_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_22a86be6249db1190fcd7ca399039dd8d45424a5891eea0dccdd0ea549f238e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22a86be6249db1190fcd7ca399039dd8d45424a5891eea0dccdd0ea549f238e0->enter($__internal_22a86be6249db1190fcd7ca399039dd8d45424a5891eea0dccdd0ea549f238e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1e334aa1b40a48538345884f2f3c9fc345c7c3b5bc9b1cb8846c597d7fda43fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e334aa1b40a48538345884f2f3c9fc345c7c3b5bc9b1cb8846c597d7fda43fd->enter($__internal_1e334aa1b40a48538345884f2f3c9fc345c7c3b5bc9b1cb8846c597d7fda43fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1e334aa1b40a48538345884f2f3c9fc345c7c3b5bc9b1cb8846c597d7fda43fd->leave($__internal_1e334aa1b40a48538345884f2f3c9fc345c7c3b5bc9b1cb8846c597d7fda43fd_prof);

        
        $__internal_22a86be6249db1190fcd7ca399039dd8d45424a5891eea0dccdd0ea549f238e0->leave($__internal_22a86be6249db1190fcd7ca399039dd8d45424a5891eea0dccdd0ea549f238e0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
