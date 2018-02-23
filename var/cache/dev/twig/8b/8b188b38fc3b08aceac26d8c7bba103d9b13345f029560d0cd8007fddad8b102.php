<?php

/* admin/index.html.twig */
class __TwigTemplate_946b988a10d7a375c92e0055fd9f8c4dd70f20b56ae50d2c684b937e36a2bd52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base1.html.twig", "admin/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cbc2d276eebdffc1188dab635655ffbaecbeea2b3ccccd8907530f3906b99d1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbc2d276eebdffc1188dab635655ffbaecbeea2b3ccccd8907530f3906b99d1e->enter($__internal_cbc2d276eebdffc1188dab635655ffbaecbeea2b3ccccd8907530f3906b99d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_36e6ea708164324eae782a03517db58306511ab547b06e12b641e4d4c98be34a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36e6ea708164324eae782a03517db58306511ab547b06e12b641e4d4c98be34a->enter($__internal_36e6ea708164324eae782a03517db58306511ab547b06e12b641e4d4c98be34a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbc2d276eebdffc1188dab635655ffbaecbeea2b3ccccd8907530f3906b99d1e->leave($__internal_cbc2d276eebdffc1188dab635655ffbaecbeea2b3ccccd8907530f3906b99d1e_prof);

        
        $__internal_36e6ea708164324eae782a03517db58306511ab547b06e12b641e4d4c98be34a->leave($__internal_36e6ea708164324eae782a03517db58306511ab547b06e12b641e4d4c98be34a_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f24f5833e3c625a10120d14f8e8ee8a004544009d51378c98c91f950d8469d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f24f5833e3c625a10120d14f8e8ee8a004544009d51378c98c91f950d8469d6->enter($__internal_0f24f5833e3c625a10120d14f8e8ee8a004544009d51378c98c91f950d8469d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_57fa2c879ef2f2798ff676297f415ce81feff6fa65e319f7b6b6a76ed700a9a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57fa2c879ef2f2798ff676297f415ce81feff6fa65e319f7b6b6a76ed700a9a6->enter($__internal_57fa2c879ef2f2798ff676297f415ce81feff6fa65e319f7b6b6a76ed700a9a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"row\">
        <div class=\"col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4\">
            <div class=\"login-panel panel panel-default\">
                <div class=\"panel-heading\">Connexion</div>
                <div class=\"panel-body\">
                    <form action=\"#\" method=\"post\" data-form=\"form_connexion\">
                        <fieldset>
                            <div class=\"form-group\">
                                <input class=\"form-control\" placeholder=\"E-mail\" name=\"email\" type=\"email\" autofocus=\"\">
                            </div>
                            <div class=\"form-group\">
                                <input class=\"form-control\" placeholder=\"Mot de passe\" name=\"password\" type=\"password\" value=\"\">
                            </div>
                            <div class=\"checkbox\">
                                <label>
\t\t\t\t\t\t\t\t\t<input name=\"remember\" type=\"checkbox\" value=\"Remember Me\">Se souvenir de moi
\t\t\t\t\t\t\t\t</label>
                            </div>
                            <div class=\"text-left\">
                                <button type=\"submit\" class=\"btn btn-primary\">Se connecter</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.col-->
    </div>
    <!-- /.row -->
";
        
        $__internal_57fa2c879ef2f2798ff676297f415ce81feff6fa65e319f7b6b6a76ed700a9a6->leave($__internal_57fa2c879ef2f2798ff676297f415ce81feff6fa65e319f7b6b6a76ed700a9a6_prof);

        
        $__internal_0f24f5833e3c625a10120d14f8e8ee8a004544009d51378c98c91f950d8469d6->leave($__internal_0f24f5833e3c625a10120d14f8e8ee8a004544009d51378c98c91f950d8469d6_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base1.html.twig' %}
{% block body %}
    <div class=\"row\">
        <div class=\"col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4\">
            <div class=\"login-panel panel panel-default\">
                <div class=\"panel-heading\">Connexion</div>
                <div class=\"panel-body\">
                    <form action=\"#\" method=\"post\" data-form=\"form_connexion\">
                        <fieldset>
                            <div class=\"form-group\">
                                <input class=\"form-control\" placeholder=\"E-mail\" name=\"email\" type=\"email\" autofocus=\"\">
                            </div>
                            <div class=\"form-group\">
                                <input class=\"form-control\" placeholder=\"Mot de passe\" name=\"password\" type=\"password\" value=\"\">
                            </div>
                            <div class=\"checkbox\">
                                <label>
\t\t\t\t\t\t\t\t\t<input name=\"remember\" type=\"checkbox\" value=\"Remember Me\">Se souvenir de moi
\t\t\t\t\t\t\t\t</label>
                            </div>
                            <div class=\"text-left\">
                                <button type=\"submit\" class=\"btn btn-primary\">Se connecter</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.col-->
    </div>
    <!-- /.row -->
{% endblock %}", "admin/index.html.twig", "/var/www/html/File_Rouge/original/soultana.sn/app/Resources/views/admin/index.html.twig");
    }
}
