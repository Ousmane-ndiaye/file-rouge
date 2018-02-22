<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_65cd183cbef2017a4ed5a8ab9559aeae8ec6a6ea905ba1e8c166a3923f4d11ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_910070ac0366cf9aea5d56e73f65ffbbc5bed17772a9189881a0c920d42492bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_910070ac0366cf9aea5d56e73f65ffbbc5bed17772a9189881a0c920d42492bb->enter($__internal_910070ac0366cf9aea5d56e73f65ffbbc5bed17772a9189881a0c920d42492bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_8b8bfdddd4375350c4b4f79808d8da1e23478fe2d433e4cfaff0d97fc52ca06f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b8bfdddd4375350c4b4f79808d8da1e23478fe2d433e4cfaff0d97fc52ca06f->enter($__internal_8b8bfdddd4375350c4b4f79808d8da1e23478fe2d433e4cfaff0d97fc52ca06f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
";
        
        $__internal_910070ac0366cf9aea5d56e73f65ffbbc5bed17772a9189881a0c920d42492bb->leave($__internal_910070ac0366cf9aea5d56e73f65ffbbc5bed17772a9189881a0c920d42492bb_prof);

        
        $__internal_8b8bfdddd4375350c4b4f79808d8da1e23478fe2d433e4cfaff0d97fc52ca06f->leave($__internal_8b8bfdddd4375350c4b4f79808d8da1e23478fe2d433e4cfaff0d97fc52ca06f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/var/www/html/File_Rouge/original/soultana.sn/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
