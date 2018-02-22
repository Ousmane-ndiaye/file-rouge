<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_cb1a7cc564830439bd3f0d72399e2624cdf3cd1facaba6c48ae6f93c34d0943b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_83dcc5a4f6100d3e7238e7754110645b0b78893345a0f11a2540285710305113 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83dcc5a4f6100d3e7238e7754110645b0b78893345a0f11a2540285710305113->enter($__internal_83dcc5a4f6100d3e7238e7754110645b0b78893345a0f11a2540285710305113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_eaa716c562e96f4b1eb978967cd085f7a5d5ffdb12d9e9837fc5ddd8613ee12a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaa716c562e96f4b1eb978967cd085f7a5d5ffdb12d9e9837fc5ddd8613ee12a->enter($__internal_eaa716c562e96f4b1eb978967cd085f7a5d5ffdb12d9e9837fc5ddd8613ee12a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83dcc5a4f6100d3e7238e7754110645b0b78893345a0f11a2540285710305113->leave($__internal_83dcc5a4f6100d3e7238e7754110645b0b78893345a0f11a2540285710305113_prof);

        
        $__internal_eaa716c562e96f4b1eb978967cd085f7a5d5ffdb12d9e9837fc5ddd8613ee12a->leave($__internal_eaa716c562e96f4b1eb978967cd085f7a5d5ffdb12d9e9837fc5ddd8613ee12a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f0bf22fc87af19e830984a31367ff919f44a2f789f3ddc4cdf1a50efe3782f5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0bf22fc87af19e830984a31367ff919f44a2f789f3ddc4cdf1a50efe3782f5b->enter($__internal_f0bf22fc87af19e830984a31367ff919f44a2f789f3ddc4cdf1a50efe3782f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_05eaf4dea6ae700e30e3f82b6d728fd973b58d77eb11d72dd01decfbe864f040 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05eaf4dea6ae700e30e3f82b6d728fd973b58d77eb11d72dd01decfbe864f040->enter($__internal_05eaf4dea6ae700e30e3f82b6d728fd973b58d77eb11d72dd01decfbe864f040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_05eaf4dea6ae700e30e3f82b6d728fd973b58d77eb11d72dd01decfbe864f040->leave($__internal_05eaf4dea6ae700e30e3f82b6d728fd973b58d77eb11d72dd01decfbe864f040_prof);

        
        $__internal_f0bf22fc87af19e830984a31367ff919f44a2f789f3ddc4cdf1a50efe3782f5b->leave($__internal_f0bf22fc87af19e830984a31367ff919f44a2f789f3ddc4cdf1a50efe3782f5b_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ee21d60d449dc5af2c2e95c29c7fd3572ee9066291282dd3641037b4ec9c3b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ee21d60d449dc5af2c2e95c29c7fd3572ee9066291282dd3641037b4ec9c3b0->enter($__internal_9ee21d60d449dc5af2c2e95c29c7fd3572ee9066291282dd3641037b4ec9c3b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5f3564f434d19c518d8a3ed42d4e6e130ccfbe88c79d37dd7f79d42d4f0fd574 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f3564f434d19c518d8a3ed42d4e6e130ccfbe88c79d37dd7f79d42d4f0fd574->enter($__internal_5f3564f434d19c518d8a3ed42d4e6e130ccfbe88c79d37dd7f79d42d4f0fd574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5f3564f434d19c518d8a3ed42d4e6e130ccfbe88c79d37dd7f79d42d4f0fd574->leave($__internal_5f3564f434d19c518d8a3ed42d4e6e130ccfbe88c79d37dd7f79d42d4f0fd574_prof);

        
        $__internal_9ee21d60d449dc5af2c2e95c29c7fd3572ee9066291282dd3641037b4ec9c3b0->leave($__internal_9ee21d60d449dc5af2c2e95c29c7fd3572ee9066291282dd3641037b4ec9c3b0_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_de640f6d2dfa18879cd4fd416d213f652cdca5876801456232ae3d467284923c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de640f6d2dfa18879cd4fd416d213f652cdca5876801456232ae3d467284923c->enter($__internal_de640f6d2dfa18879cd4fd416d213f652cdca5876801456232ae3d467284923c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_960e82f9004b11789d771ae9e3fd55fb524bbe1af780355036f447f1f7043843 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_960e82f9004b11789d771ae9e3fd55fb524bbe1af780355036f447f1f7043843->enter($__internal_960e82f9004b11789d771ae9e3fd55fb524bbe1af780355036f447f1f7043843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_960e82f9004b11789d771ae9e3fd55fb524bbe1af780355036f447f1f7043843->leave($__internal_960e82f9004b11789d771ae9e3fd55fb524bbe1af780355036f447f1f7043843_prof);

        
        $__internal_de640f6d2dfa18879cd4fd416d213f652cdca5876801456232ae3d467284923c->leave($__internal_de640f6d2dfa18879cd4fd416d213f652cdca5876801456232ae3d467284923c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
