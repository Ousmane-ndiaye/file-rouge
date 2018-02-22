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
        $__internal_c26f927b60c70ea8eb7ff3595fd85646eee51eac9339b73beb87124934fd2271 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c26f927b60c70ea8eb7ff3595fd85646eee51eac9339b73beb87124934fd2271->enter($__internal_c26f927b60c70ea8eb7ff3595fd85646eee51eac9339b73beb87124934fd2271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_139e2fba404524296035f27fe06feaf9aab2a3a2ca8dfedaee37ad5de6d3bf9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_139e2fba404524296035f27fe06feaf9aab2a3a2ca8dfedaee37ad5de6d3bf9f->enter($__internal_139e2fba404524296035f27fe06feaf9aab2a3a2ca8dfedaee37ad5de6d3bf9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_c26f927b60c70ea8eb7ff3595fd85646eee51eac9339b73beb87124934fd2271->leave($__internal_c26f927b60c70ea8eb7ff3595fd85646eee51eac9339b73beb87124934fd2271_prof);

        
        $__internal_139e2fba404524296035f27fe06feaf9aab2a3a2ca8dfedaee37ad5de6d3bf9f->leave($__internal_139e2fba404524296035f27fe06feaf9aab2a3a2ca8dfedaee37ad5de6d3bf9f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_21f0cc3a845040e39b249ed385036809b43a84abffab421bad024fce588ab571 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21f0cc3a845040e39b249ed385036809b43a84abffab421bad024fce588ab571->enter($__internal_21f0cc3a845040e39b249ed385036809b43a84abffab421bad024fce588ab571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b376c4043235a7ceb571f79c8a97c7c3a83982de9ebe8414ad60903327687672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b376c4043235a7ceb571f79c8a97c7c3a83982de9ebe8414ad60903327687672->enter($__internal_b376c4043235a7ceb571f79c8a97c7c3a83982de9ebe8414ad60903327687672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_b376c4043235a7ceb571f79c8a97c7c3a83982de9ebe8414ad60903327687672->leave($__internal_b376c4043235a7ceb571f79c8a97c7c3a83982de9ebe8414ad60903327687672_prof);

        
        $__internal_21f0cc3a845040e39b249ed385036809b43a84abffab421bad024fce588ab571->leave($__internal_21f0cc3a845040e39b249ed385036809b43a84abffab421bad024fce588ab571_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_b5191f299b1947440408d2ad47b26a9f213f8534d8040759b79160fd2e6f59c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5191f299b1947440408d2ad47b26a9f213f8534d8040759b79160fd2e6f59c7->enter($__internal_b5191f299b1947440408d2ad47b26a9f213f8534d8040759b79160fd2e6f59c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5d1cfe0e5336cfa8079009c55dc182f75f91e14181fee8df39da9131ae00ad53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d1cfe0e5336cfa8079009c55dc182f75f91e14181fee8df39da9131ae00ad53->enter($__internal_5d1cfe0e5336cfa8079009c55dc182f75f91e14181fee8df39da9131ae00ad53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_5d1cfe0e5336cfa8079009c55dc182f75f91e14181fee8df39da9131ae00ad53->leave($__internal_5d1cfe0e5336cfa8079009c55dc182f75f91e14181fee8df39da9131ae00ad53_prof);

        
        $__internal_b5191f299b1947440408d2ad47b26a9f213f8534d8040759b79160fd2e6f59c7->leave($__internal_b5191f299b1947440408d2ad47b26a9f213f8534d8040759b79160fd2e6f59c7_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_a940d93bb966a6b2547ac84111ad7f56a5a52d70d895162ebee6aedd56e466d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a940d93bb966a6b2547ac84111ad7f56a5a52d70d895162ebee6aedd56e466d4->enter($__internal_a940d93bb966a6b2547ac84111ad7f56a5a52d70d895162ebee6aedd56e466d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a23880e732ab72c7477448cfce43a8e0266dfce7b4b496500adade3a72e08086 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a23880e732ab72c7477448cfce43a8e0266dfce7b4b496500adade3a72e08086->enter($__internal_a23880e732ab72c7477448cfce43a8e0266dfce7b4b496500adade3a72e08086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a23880e732ab72c7477448cfce43a8e0266dfce7b4b496500adade3a72e08086->leave($__internal_a23880e732ab72c7477448cfce43a8e0266dfce7b4b496500adade3a72e08086_prof);

        
        $__internal_a940d93bb966a6b2547ac84111ad7f56a5a52d70d895162ebee6aedd56e466d4->leave($__internal_a940d93bb966a6b2547ac84111ad7f56a5a52d70d895162ebee6aedd56e466d4_prof);

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
