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
        $__internal_32846c79f9a73e9fb0b43ac90db4354f4d351083fd7032a26e46b46eb342aa7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32846c79f9a73e9fb0b43ac90db4354f4d351083fd7032a26e46b46eb342aa7c->enter($__internal_32846c79f9a73e9fb0b43ac90db4354f4d351083fd7032a26e46b46eb342aa7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_31d93547fe5ebad94721259155337df212181fbc8b553a30975e32c2ab7f9152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31d93547fe5ebad94721259155337df212181fbc8b553a30975e32c2ab7f9152->enter($__internal_31d93547fe5ebad94721259155337df212181fbc8b553a30975e32c2ab7f9152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32846c79f9a73e9fb0b43ac90db4354f4d351083fd7032a26e46b46eb342aa7c->leave($__internal_32846c79f9a73e9fb0b43ac90db4354f4d351083fd7032a26e46b46eb342aa7c_prof);

        
        $__internal_31d93547fe5ebad94721259155337df212181fbc8b553a30975e32c2ab7f9152->leave($__internal_31d93547fe5ebad94721259155337df212181fbc8b553a30975e32c2ab7f9152_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_87ef3486bea11249f2996783e5a5960ddb7369f47237f9c65ac2cd69baca8b8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87ef3486bea11249f2996783e5a5960ddb7369f47237f9c65ac2cd69baca8b8c->enter($__internal_87ef3486bea11249f2996783e5a5960ddb7369f47237f9c65ac2cd69baca8b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7f3f0aee2320ef4528c058b7b38ab40d5a1c640756e057ff87f2d61d3855b378 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f3f0aee2320ef4528c058b7b38ab40d5a1c640756e057ff87f2d61d3855b378->enter($__internal_7f3f0aee2320ef4528c058b7b38ab40d5a1c640756e057ff87f2d61d3855b378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_7f3f0aee2320ef4528c058b7b38ab40d5a1c640756e057ff87f2d61d3855b378->leave($__internal_7f3f0aee2320ef4528c058b7b38ab40d5a1c640756e057ff87f2d61d3855b378_prof);

        
        $__internal_87ef3486bea11249f2996783e5a5960ddb7369f47237f9c65ac2cd69baca8b8c->leave($__internal_87ef3486bea11249f2996783e5a5960ddb7369f47237f9c65ac2cd69baca8b8c_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_0df61ed5a8a603c46de3fd2a6e20e750a47e6a82ed14efc2e1dbfd1ee60ce0db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0df61ed5a8a603c46de3fd2a6e20e750a47e6a82ed14efc2e1dbfd1ee60ce0db->enter($__internal_0df61ed5a8a603c46de3fd2a6e20e750a47e6a82ed14efc2e1dbfd1ee60ce0db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_655b47b60c37558e497c992b7df178195adcd49a13fcc3b0d3430b2f37df3df9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_655b47b60c37558e497c992b7df178195adcd49a13fcc3b0d3430b2f37df3df9->enter($__internal_655b47b60c37558e497c992b7df178195adcd49a13fcc3b0d3430b2f37df3df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_655b47b60c37558e497c992b7df178195adcd49a13fcc3b0d3430b2f37df3df9->leave($__internal_655b47b60c37558e497c992b7df178195adcd49a13fcc3b0d3430b2f37df3df9_prof);

        
        $__internal_0df61ed5a8a603c46de3fd2a6e20e750a47e6a82ed14efc2e1dbfd1ee60ce0db->leave($__internal_0df61ed5a8a603c46de3fd2a6e20e750a47e6a82ed14efc2e1dbfd1ee60ce0db_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_f041e77c08187a562e9147cbf8ea0526fe9df49abf38e0974232e2b8aa2ccd5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f041e77c08187a562e9147cbf8ea0526fe9df49abf38e0974232e2b8aa2ccd5a->enter($__internal_f041e77c08187a562e9147cbf8ea0526fe9df49abf38e0974232e2b8aa2ccd5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1ce4c1c6cc1bda8b39fab480d5b07bd3f2f7b67280c6c4fec6af8729f43976f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ce4c1c6cc1bda8b39fab480d5b07bd3f2f7b67280c6c4fec6af8729f43976f2->enter($__internal_1ce4c1c6cc1bda8b39fab480d5b07bd3f2f7b67280c6c4fec6af8729f43976f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_1ce4c1c6cc1bda8b39fab480d5b07bd3f2f7b67280c6c4fec6af8729f43976f2->leave($__internal_1ce4c1c6cc1bda8b39fab480d5b07bd3f2f7b67280c6c4fec6af8729f43976f2_prof);

        
        $__internal_f041e77c08187a562e9147cbf8ea0526fe9df49abf38e0974232e2b8aa2ccd5a->leave($__internal_f041e77c08187a562e9147cbf8ea0526fe9df49abf38e0974232e2b8aa2ccd5a_prof);

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
