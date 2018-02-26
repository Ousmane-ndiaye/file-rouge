<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_21e1384dbb5ce9486a9d17503df7b90e48bc1b6ea63609664f02070f7deb3d3f extends Twig_Template
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
        $__internal_35cefc0bccc84c3789c62dd2074fb6caff0ae56900d52fcf219dce9db93a976e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35cefc0bccc84c3789c62dd2074fb6caff0ae56900d52fcf219dce9db93a976e->enter($__internal_35cefc0bccc84c3789c62dd2074fb6caff0ae56900d52fcf219dce9db93a976e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_efc15888fcd378d6ed2b839e1db6cbbf8f54643fb11b884d51f5fd81499f99eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efc15888fcd378d6ed2b839e1db6cbbf8f54643fb11b884d51f5fd81499f99eb->enter($__internal_efc15888fcd378d6ed2b839e1db6cbbf8f54643fb11b884d51f5fd81499f99eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_35cefc0bccc84c3789c62dd2074fb6caff0ae56900d52fcf219dce9db93a976e->leave($__internal_35cefc0bccc84c3789c62dd2074fb6caff0ae56900d52fcf219dce9db93a976e_prof);

        
        $__internal_efc15888fcd378d6ed2b839e1db6cbbf8f54643fb11b884d51f5fd81499f99eb->leave($__internal_efc15888fcd378d6ed2b839e1db6cbbf8f54643fb11b884d51f5fd81499f99eb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fa7f4b95e0029fb1cdb4861bac0b1415ca95f90cd517b1862ab9e10e03428aaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa7f4b95e0029fb1cdb4861bac0b1415ca95f90cd517b1862ab9e10e03428aaa->enter($__internal_fa7f4b95e0029fb1cdb4861bac0b1415ca95f90cd517b1862ab9e10e03428aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8e668309a6c2d91e133ebf722b4e1fecbe604ab88dffa01d3107f4059f095a96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e668309a6c2d91e133ebf722b4e1fecbe604ab88dffa01d3107f4059f095a96->enter($__internal_8e668309a6c2d91e133ebf722b4e1fecbe604ab88dffa01d3107f4059f095a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_8e668309a6c2d91e133ebf722b4e1fecbe604ab88dffa01d3107f4059f095a96->leave($__internal_8e668309a6c2d91e133ebf722b4e1fecbe604ab88dffa01d3107f4059f095a96_prof);

        
        $__internal_fa7f4b95e0029fb1cdb4861bac0b1415ca95f90cd517b1862ab9e10e03428aaa->leave($__internal_fa7f4b95e0029fb1cdb4861bac0b1415ca95f90cd517b1862ab9e10e03428aaa_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_3b0a33ee5104e3345a85d378627c34dda489912485816d54b10ef22ff597d292 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b0a33ee5104e3345a85d378627c34dda489912485816d54b10ef22ff597d292->enter($__internal_3b0a33ee5104e3345a85d378627c34dda489912485816d54b10ef22ff597d292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bdcd26d8d2a708e37cbfbc1e6ba6bb1393906708887465a2d963bf0b013c5452 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdcd26d8d2a708e37cbfbc1e6ba6bb1393906708887465a2d963bf0b013c5452->enter($__internal_bdcd26d8d2a708e37cbfbc1e6ba6bb1393906708887465a2d963bf0b013c5452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_bdcd26d8d2a708e37cbfbc1e6ba6bb1393906708887465a2d963bf0b013c5452->leave($__internal_bdcd26d8d2a708e37cbfbc1e6ba6bb1393906708887465a2d963bf0b013c5452_prof);

        
        $__internal_3b0a33ee5104e3345a85d378627c34dda489912485816d54b10ef22ff597d292->leave($__internal_3b0a33ee5104e3345a85d378627c34dda489912485816d54b10ef22ff597d292_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_da55b1504a2ed6b572d435170a0f11c92230893d435b7b0110e11fc6fc7e235a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da55b1504a2ed6b572d435170a0f11c92230893d435b7b0110e11fc6fc7e235a->enter($__internal_da55b1504a2ed6b572d435170a0f11c92230893d435b7b0110e11fc6fc7e235a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_836ba47dd9693f1a98974fc300217ce4a9d420557fa478b371f4596789b6869d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_836ba47dd9693f1a98974fc300217ce4a9d420557fa478b371f4596789b6869d->enter($__internal_836ba47dd9693f1a98974fc300217ce4a9d420557fa478b371f4596789b6869d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_836ba47dd9693f1a98974fc300217ce4a9d420557fa478b371f4596789b6869d->leave($__internal_836ba47dd9693f1a98974fc300217ce4a9d420557fa478b371f4596789b6869d_prof);

        
        $__internal_da55b1504a2ed6b572d435170a0f11c92230893d435b7b0110e11fc6fc7e235a->leave($__internal_da55b1504a2ed6b572d435170a0f11c92230893d435b7b0110e11fc6fc7e235a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
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
", "@Twig/layout.html.twig", "/var/www/html/FILE-ROUGE/original/file-rouge/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
