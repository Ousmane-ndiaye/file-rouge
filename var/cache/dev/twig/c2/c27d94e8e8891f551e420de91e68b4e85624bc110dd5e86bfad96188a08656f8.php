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
        $__internal_09edaf328671208bb08783ee9523a83fda0c854fc61b7d2e41ce76fa6c008580 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09edaf328671208bb08783ee9523a83fda0c854fc61b7d2e41ce76fa6c008580->enter($__internal_09edaf328671208bb08783ee9523a83fda0c854fc61b7d2e41ce76fa6c008580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_70ec82c7ff42aa3c0373c5faa1eb34161a05ae598b94a1e2a5d5f032c6120212 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70ec82c7ff42aa3c0373c5faa1eb34161a05ae598b94a1e2a5d5f032c6120212->enter($__internal_70ec82c7ff42aa3c0373c5faa1eb34161a05ae598b94a1e2a5d5f032c6120212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_09edaf328671208bb08783ee9523a83fda0c854fc61b7d2e41ce76fa6c008580->leave($__internal_09edaf328671208bb08783ee9523a83fda0c854fc61b7d2e41ce76fa6c008580_prof);

        
        $__internal_70ec82c7ff42aa3c0373c5faa1eb34161a05ae598b94a1e2a5d5f032c6120212->leave($__internal_70ec82c7ff42aa3c0373c5faa1eb34161a05ae598b94a1e2a5d5f032c6120212_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d4cf651c988f7b85124b6a3902d92c384ac494b61970cb74039e8b2090413cf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4cf651c988f7b85124b6a3902d92c384ac494b61970cb74039e8b2090413cf5->enter($__internal_d4cf651c988f7b85124b6a3902d92c384ac494b61970cb74039e8b2090413cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d87236f603ae2fa1ed43a16d9d45680689086ffb01a142d58deb3652011479d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d87236f603ae2fa1ed43a16d9d45680689086ffb01a142d58deb3652011479d8->enter($__internal_d87236f603ae2fa1ed43a16d9d45680689086ffb01a142d58deb3652011479d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d87236f603ae2fa1ed43a16d9d45680689086ffb01a142d58deb3652011479d8->leave($__internal_d87236f603ae2fa1ed43a16d9d45680689086ffb01a142d58deb3652011479d8_prof);

        
        $__internal_d4cf651c988f7b85124b6a3902d92c384ac494b61970cb74039e8b2090413cf5->leave($__internal_d4cf651c988f7b85124b6a3902d92c384ac494b61970cb74039e8b2090413cf5_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_e3ad2487fbbbb7072921e006dc232769a913291f544c4127a2668d2e0c88083a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3ad2487fbbbb7072921e006dc232769a913291f544c4127a2668d2e0c88083a->enter($__internal_e3ad2487fbbbb7072921e006dc232769a913291f544c4127a2668d2e0c88083a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_976e6c16181c3ef2d6d38b3738bad5b80a44c4ee6412e28d9a3c6a10c5f3fad5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_976e6c16181c3ef2d6d38b3738bad5b80a44c4ee6412e28d9a3c6a10c5f3fad5->enter($__internal_976e6c16181c3ef2d6d38b3738bad5b80a44c4ee6412e28d9a3c6a10c5f3fad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_976e6c16181c3ef2d6d38b3738bad5b80a44c4ee6412e28d9a3c6a10c5f3fad5->leave($__internal_976e6c16181c3ef2d6d38b3738bad5b80a44c4ee6412e28d9a3c6a10c5f3fad5_prof);

        
        $__internal_e3ad2487fbbbb7072921e006dc232769a913291f544c4127a2668d2e0c88083a->leave($__internal_e3ad2487fbbbb7072921e006dc232769a913291f544c4127a2668d2e0c88083a_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b71d535e987e7ae396b4ba304c3d3e76997a28567e43a61d0be2d6b16f670a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b71d535e987e7ae396b4ba304c3d3e76997a28567e43a61d0be2d6b16f670a2->enter($__internal_1b71d535e987e7ae396b4ba304c3d3e76997a28567e43a61d0be2d6b16f670a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4c2c19f615796995be8abe129ce2ec1d398d50976cce20924d9447ac6c28bbd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c2c19f615796995be8abe129ce2ec1d398d50976cce20924d9447ac6c28bbd6->enter($__internal_4c2c19f615796995be8abe129ce2ec1d398d50976cce20924d9447ac6c28bbd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4c2c19f615796995be8abe129ce2ec1d398d50976cce20924d9447ac6c28bbd6->leave($__internal_4c2c19f615796995be8abe129ce2ec1d398d50976cce20924d9447ac6c28bbd6_prof);

        
        $__internal_1b71d535e987e7ae396b4ba304c3d3e76997a28567e43a61d0be2d6b16f670a2->leave($__internal_1b71d535e987e7ae396b4ba304c3d3e76997a28567e43a61d0be2d6b16f670a2_prof);

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
