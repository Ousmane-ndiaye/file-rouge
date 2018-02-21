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
        $__internal_925a1f45f852908a07719b39aba040c2da12e75c1fbfc4501aaa3ae27c18d6b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_925a1f45f852908a07719b39aba040c2da12e75c1fbfc4501aaa3ae27c18d6b0->enter($__internal_925a1f45f852908a07719b39aba040c2da12e75c1fbfc4501aaa3ae27c18d6b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_4955e2e44d2c6c0dec8669b0618c7b6761d68283ad1840cc4128ced7523e7e5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4955e2e44d2c6c0dec8669b0618c7b6761d68283ad1840cc4128ced7523e7e5e->enter($__internal_4955e2e44d2c6c0dec8669b0618c7b6761d68283ad1840cc4128ced7523e7e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_925a1f45f852908a07719b39aba040c2da12e75c1fbfc4501aaa3ae27c18d6b0->leave($__internal_925a1f45f852908a07719b39aba040c2da12e75c1fbfc4501aaa3ae27c18d6b0_prof);

        
        $__internal_4955e2e44d2c6c0dec8669b0618c7b6761d68283ad1840cc4128ced7523e7e5e->leave($__internal_4955e2e44d2c6c0dec8669b0618c7b6761d68283ad1840cc4128ced7523e7e5e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_497dac7f034ca22d34a9f45bb19d7607ccf03ca9c31943e8a161cdfdc475d14f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_497dac7f034ca22d34a9f45bb19d7607ccf03ca9c31943e8a161cdfdc475d14f->enter($__internal_497dac7f034ca22d34a9f45bb19d7607ccf03ca9c31943e8a161cdfdc475d14f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_53fbd4457883b566c82dbc385022943bc84af8e175025c0909fa409c335ac26d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53fbd4457883b566c82dbc385022943bc84af8e175025c0909fa409c335ac26d->enter($__internal_53fbd4457883b566c82dbc385022943bc84af8e175025c0909fa409c335ac26d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_53fbd4457883b566c82dbc385022943bc84af8e175025c0909fa409c335ac26d->leave($__internal_53fbd4457883b566c82dbc385022943bc84af8e175025c0909fa409c335ac26d_prof);

        
        $__internal_497dac7f034ca22d34a9f45bb19d7607ccf03ca9c31943e8a161cdfdc475d14f->leave($__internal_497dac7f034ca22d34a9f45bb19d7607ccf03ca9c31943e8a161cdfdc475d14f_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_3bad61f0b8b92ce3ceb701773f537b87474b5f31831b291f50774c080d0eae02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bad61f0b8b92ce3ceb701773f537b87474b5f31831b291f50774c080d0eae02->enter($__internal_3bad61f0b8b92ce3ceb701773f537b87474b5f31831b291f50774c080d0eae02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_09cb30ad3f45348427e333d9cb7998f14156767425da2f89f20a772f10d08fa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09cb30ad3f45348427e333d9cb7998f14156767425da2f89f20a772f10d08fa1->enter($__internal_09cb30ad3f45348427e333d9cb7998f14156767425da2f89f20a772f10d08fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_09cb30ad3f45348427e333d9cb7998f14156767425da2f89f20a772f10d08fa1->leave($__internal_09cb30ad3f45348427e333d9cb7998f14156767425da2f89f20a772f10d08fa1_prof);

        
        $__internal_3bad61f0b8b92ce3ceb701773f537b87474b5f31831b291f50774c080d0eae02->leave($__internal_3bad61f0b8b92ce3ceb701773f537b87474b5f31831b291f50774c080d0eae02_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_585f0bbd4ebf5242540c7ea92317f1e8a4e8083e15c96a2ba36c57ab586b5734 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_585f0bbd4ebf5242540c7ea92317f1e8a4e8083e15c96a2ba36c57ab586b5734->enter($__internal_585f0bbd4ebf5242540c7ea92317f1e8a4e8083e15c96a2ba36c57ab586b5734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_33fa38bc54523384fc8b81c817cc3f02d0b1af6cb7612d6900b7f84d5d8a828f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33fa38bc54523384fc8b81c817cc3f02d0b1af6cb7612d6900b7f84d5d8a828f->enter($__internal_33fa38bc54523384fc8b81c817cc3f02d0b1af6cb7612d6900b7f84d5d8a828f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_33fa38bc54523384fc8b81c817cc3f02d0b1af6cb7612d6900b7f84d5d8a828f->leave($__internal_33fa38bc54523384fc8b81c817cc3f02d0b1af6cb7612d6900b7f84d5d8a828f_prof);

        
        $__internal_585f0bbd4ebf5242540c7ea92317f1e8a4e8083e15c96a2ba36c57ab586b5734->leave($__internal_585f0bbd4ebf5242540c7ea92317f1e8a4e8083e15c96a2ba36c57ab586b5734_prof);

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
