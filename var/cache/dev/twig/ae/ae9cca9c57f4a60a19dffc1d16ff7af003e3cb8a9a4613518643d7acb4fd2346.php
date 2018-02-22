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
        $__internal_c11dc772b36195eddc308460abea06485889e69f87c3e9f1379edb066f76899c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c11dc772b36195eddc308460abea06485889e69f87c3e9f1379edb066f76899c->enter($__internal_c11dc772b36195eddc308460abea06485889e69f87c3e9f1379edb066f76899c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_f62461719bf60ace14a00a68b12e121d21dff11636b8a7733160834478053953 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f62461719bf60ace14a00a68b12e121d21dff11636b8a7733160834478053953->enter($__internal_f62461719bf60ace14a00a68b12e121d21dff11636b8a7733160834478053953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c11dc772b36195eddc308460abea06485889e69f87c3e9f1379edb066f76899c->leave($__internal_c11dc772b36195eddc308460abea06485889e69f87c3e9f1379edb066f76899c_prof);

        
        $__internal_f62461719bf60ace14a00a68b12e121d21dff11636b8a7733160834478053953->leave($__internal_f62461719bf60ace14a00a68b12e121d21dff11636b8a7733160834478053953_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c2ecf09dfea86a1247d805c0d1a9011177d02cad5f90911bc51fccdc5a5f55f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2ecf09dfea86a1247d805c0d1a9011177d02cad5f90911bc51fccdc5a5f55f1->enter($__internal_c2ecf09dfea86a1247d805c0d1a9011177d02cad5f90911bc51fccdc5a5f55f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_41f3a05f53dd439cfdc756f76ead44d8d6f03d8105a55daf626746b4c700f817 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41f3a05f53dd439cfdc756f76ead44d8d6f03d8105a55daf626746b4c700f817->enter($__internal_41f3a05f53dd439cfdc756f76ead44d8d6f03d8105a55daf626746b4c700f817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_41f3a05f53dd439cfdc756f76ead44d8d6f03d8105a55daf626746b4c700f817->leave($__internal_41f3a05f53dd439cfdc756f76ead44d8d6f03d8105a55daf626746b4c700f817_prof);

        
        $__internal_c2ecf09dfea86a1247d805c0d1a9011177d02cad5f90911bc51fccdc5a5f55f1->leave($__internal_c2ecf09dfea86a1247d805c0d1a9011177d02cad5f90911bc51fccdc5a5f55f1_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_72bf0713daca96fa27c409ade4bdf590e107cce34a2335b7f308b3380f6656af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72bf0713daca96fa27c409ade4bdf590e107cce34a2335b7f308b3380f6656af->enter($__internal_72bf0713daca96fa27c409ade4bdf590e107cce34a2335b7f308b3380f6656af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_12636e6c0adf7e31bda764c499446f99491353b20ef788459af72f41d4f36922 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12636e6c0adf7e31bda764c499446f99491353b20ef788459af72f41d4f36922->enter($__internal_12636e6c0adf7e31bda764c499446f99491353b20ef788459af72f41d4f36922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_12636e6c0adf7e31bda764c499446f99491353b20ef788459af72f41d4f36922->leave($__internal_12636e6c0adf7e31bda764c499446f99491353b20ef788459af72f41d4f36922_prof);

        
        $__internal_72bf0713daca96fa27c409ade4bdf590e107cce34a2335b7f308b3380f6656af->leave($__internal_72bf0713daca96fa27c409ade4bdf590e107cce34a2335b7f308b3380f6656af_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_5958a2263cedd69e6c15bf9c4a7eb58892f8859b445e50fa29d21611ec712df1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5958a2263cedd69e6c15bf9c4a7eb58892f8859b445e50fa29d21611ec712df1->enter($__internal_5958a2263cedd69e6c15bf9c4a7eb58892f8859b445e50fa29d21611ec712df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cba5303ac770c22db88fb6fb975bff3032b52c4795b54e6b2e492b76b077d3d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cba5303ac770c22db88fb6fb975bff3032b52c4795b54e6b2e492b76b077d3d8->enter($__internal_cba5303ac770c22db88fb6fb975bff3032b52c4795b54e6b2e492b76b077d3d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_cba5303ac770c22db88fb6fb975bff3032b52c4795b54e6b2e492b76b077d3d8->leave($__internal_cba5303ac770c22db88fb6fb975bff3032b52c4795b54e6b2e492b76b077d3d8_prof);

        
        $__internal_5958a2263cedd69e6c15bf9c4a7eb58892f8859b445e50fa29d21611ec712df1->leave($__internal_5958a2263cedd69e6c15bf9c4a7eb58892f8859b445e50fa29d21611ec712df1_prof);

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
