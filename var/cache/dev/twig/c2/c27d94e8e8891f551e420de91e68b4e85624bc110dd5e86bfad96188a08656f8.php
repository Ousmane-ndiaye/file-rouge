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
        $__internal_db83578f9c3ac102e90a780bc1dce02deaa9bcad62ec89ee0895962338d1c2e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db83578f9c3ac102e90a780bc1dce02deaa9bcad62ec89ee0895962338d1c2e5->enter($__internal_db83578f9c3ac102e90a780bc1dce02deaa9bcad62ec89ee0895962338d1c2e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_6466f002f3c78b5367c21900d6ff58ed767482ef33476870cf626c94528ec3e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6466f002f3c78b5367c21900d6ff58ed767482ef33476870cf626c94528ec3e3->enter($__internal_6466f002f3c78b5367c21900d6ff58ed767482ef33476870cf626c94528ec3e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_db83578f9c3ac102e90a780bc1dce02deaa9bcad62ec89ee0895962338d1c2e5->leave($__internal_db83578f9c3ac102e90a780bc1dce02deaa9bcad62ec89ee0895962338d1c2e5_prof);

        
        $__internal_6466f002f3c78b5367c21900d6ff58ed767482ef33476870cf626c94528ec3e3->leave($__internal_6466f002f3c78b5367c21900d6ff58ed767482ef33476870cf626c94528ec3e3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_25d46a59d4304f2bf5d7be150cfe0903a50563fedb340488e76c6d479f776c7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25d46a59d4304f2bf5d7be150cfe0903a50563fedb340488e76c6d479f776c7e->enter($__internal_25d46a59d4304f2bf5d7be150cfe0903a50563fedb340488e76c6d479f776c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b597d6f526af625dadf27c4bf9aded2bd0d4a03c8eaa46e058f9352047f77baa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b597d6f526af625dadf27c4bf9aded2bd0d4a03c8eaa46e058f9352047f77baa->enter($__internal_b597d6f526af625dadf27c4bf9aded2bd0d4a03c8eaa46e058f9352047f77baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_b597d6f526af625dadf27c4bf9aded2bd0d4a03c8eaa46e058f9352047f77baa->leave($__internal_b597d6f526af625dadf27c4bf9aded2bd0d4a03c8eaa46e058f9352047f77baa_prof);

        
        $__internal_25d46a59d4304f2bf5d7be150cfe0903a50563fedb340488e76c6d479f776c7e->leave($__internal_25d46a59d4304f2bf5d7be150cfe0903a50563fedb340488e76c6d479f776c7e_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_3b195613d7ebe70251731bbc73342167896fc8640b7736f3871501382044f189 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b195613d7ebe70251731bbc73342167896fc8640b7736f3871501382044f189->enter($__internal_3b195613d7ebe70251731bbc73342167896fc8640b7736f3871501382044f189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0dfa6b9d922f3847ccf0f9218ee09d841917ce5e515e4e6522a76a0589680280 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dfa6b9d922f3847ccf0f9218ee09d841917ce5e515e4e6522a76a0589680280->enter($__internal_0dfa6b9d922f3847ccf0f9218ee09d841917ce5e515e4e6522a76a0589680280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_0dfa6b9d922f3847ccf0f9218ee09d841917ce5e515e4e6522a76a0589680280->leave($__internal_0dfa6b9d922f3847ccf0f9218ee09d841917ce5e515e4e6522a76a0589680280_prof);

        
        $__internal_3b195613d7ebe70251731bbc73342167896fc8640b7736f3871501382044f189->leave($__internal_3b195613d7ebe70251731bbc73342167896fc8640b7736f3871501382044f189_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca2101f894986160042f980f1fc86d448ec3e27cb595cc0f82ca7473136cc30d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca2101f894986160042f980f1fc86d448ec3e27cb595cc0f82ca7473136cc30d->enter($__internal_ca2101f894986160042f980f1fc86d448ec3e27cb595cc0f82ca7473136cc30d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6b9fea66e488637eda22f51049c17488d1cf585f3eea260b224cef964eb1058d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b9fea66e488637eda22f51049c17488d1cf585f3eea260b224cef964eb1058d->enter($__internal_6b9fea66e488637eda22f51049c17488d1cf585f3eea260b224cef964eb1058d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6b9fea66e488637eda22f51049c17488d1cf585f3eea260b224cef964eb1058d->leave($__internal_6b9fea66e488637eda22f51049c17488d1cf585f3eea260b224cef964eb1058d_prof);

        
        $__internal_ca2101f894986160042f980f1fc86d448ec3e27cb595cc0f82ca7473136cc30d->leave($__internal_ca2101f894986160042f980f1fc86d448ec3e27cb595cc0f82ca7473136cc30d_prof);

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
