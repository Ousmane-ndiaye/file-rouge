<?php

/* :admin:index.html.twig */
class __TwigTemplate_946b988a10d7a375c92e0055fd9f8c4dd70f20b56ae50d2c684b937e36a2bd52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base1.html.twig", ":admin:index.html.twig", 1);
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
        $__internal_45ff74e6345b91d3e4c5b5ca30e215cf35dd8b674e16412152a85b25b465aa03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45ff74e6345b91d3e4c5b5ca30e215cf35dd8b674e16412152a85b25b465aa03->enter($__internal_45ff74e6345b91d3e4c5b5ca30e215cf35dd8b674e16412152a85b25b465aa03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:index.html.twig"));

        $__internal_ac9e13cab8d84c699fc2c9208ab3273c3e5406dcb60004034c2c4e6538559901 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac9e13cab8d84c699fc2c9208ab3273c3e5406dcb60004034c2c4e6538559901->enter($__internal_ac9e13cab8d84c699fc2c9208ab3273c3e5406dcb60004034c2c4e6538559901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45ff74e6345b91d3e4c5b5ca30e215cf35dd8b674e16412152a85b25b465aa03->leave($__internal_45ff74e6345b91d3e4c5b5ca30e215cf35dd8b674e16412152a85b25b465aa03_prof);

        
        $__internal_ac9e13cab8d84c699fc2c9208ab3273c3e5406dcb60004034c2c4e6538559901->leave($__internal_ac9e13cab8d84c699fc2c9208ab3273c3e5406dcb60004034c2c4e6538559901_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_82a037f0bb91d316eb305fd230a06c4d1c0e906637383e5ce7cc51f482b23fab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82a037f0bb91d316eb305fd230a06c4d1c0e906637383e5ce7cc51f482b23fab->enter($__internal_82a037f0bb91d316eb305fd230a06c4d1c0e906637383e5ce7cc51f482b23fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9c38cbf1b28f1c434a1c874a532417b7d1c695735a451aed7a3374b2a487e9b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c38cbf1b28f1c434a1c874a532417b7d1c695735a451aed7a3374b2a487e9b8->enter($__internal_9c38cbf1b28f1c434a1c874a532417b7d1c695735a451aed7a3374b2a487e9b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4\">
        <div class=\"login-panel panel panel-default\">
            <div class=\"panel-heading\">Connexion</div>
            <div class=\"panel-body\">
                <form action=\"#\" method=\"post\" data-form=\"form_connexion\">
                    <div class=\"alert alert-danger cacher\" id=\"form_connexion\">
                        <ul>
                        </ul>
                    </div>
                    <fieldset>
                        <div class=\"form-group\">
                            <input class=\"form-control\" placeholder=\"E-mail\" name=\"email\" type=\"email\" data-champ=\"E-mail\" autofocus=\"\">
                        </div>
                        <div class=\"form-group\">
                            <input class=\"form-control\" placeholder=\"Mot de passe\" name=\"password\" type=\"password\" data-champ=\"Mot de passe\" value=\"\">
                        </div>
                        <div class=\"checkbox\">
                            <label>
                                <input name=\"remember\" type=\"checkbox\" value=\"Remember Me\">Se souvenir de moi
                            </label>
                        </div>
                        <div class=\"text-left\">
                            <button type=\"submit\" class=\"btn btn-primary\">Se connecter</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_9c38cbf1b28f1c434a1c874a532417b7d1c695735a451aed7a3374b2a487e9b8->leave($__internal_9c38cbf1b28f1c434a1c874a532417b7d1c695735a451aed7a3374b2a487e9b8_prof);

        
        $__internal_82a037f0bb91d316eb305fd230a06c4d1c0e906637383e5ce7cc51f482b23fab->leave($__internal_82a037f0bb91d316eb305fd230a06c4d1c0e906637383e5ce7cc51f482b23fab_prof);

    }

    public function getTemplateName()
    {
        return ":admin:index.html.twig";
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
    <div class=\"col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4\">
        <div class=\"login-panel panel panel-default\">
            <div class=\"panel-heading\">Connexion</div>
            <div class=\"panel-body\">
                <form action=\"#\" method=\"post\" data-form=\"form_connexion\">
                    <div class=\"alert alert-danger cacher\" id=\"form_connexion\">
                        <ul>
                        </ul>
                    </div>
                    <fieldset>
                        <div class=\"form-group\">
                            <input class=\"form-control\" placeholder=\"E-mail\" name=\"email\" type=\"email\" data-champ=\"E-mail\" autofocus=\"\">
                        </div>
                        <div class=\"form-group\">
                            <input class=\"form-control\" placeholder=\"Mot de passe\" name=\"password\" type=\"password\" data-champ=\"Mot de passe\" value=\"\">
                        </div>
                        <div class=\"checkbox\">
                            <label>
                                <input name=\"remember\" type=\"checkbox\" value=\"Remember Me\">Se souvenir de moi
                            </label>
                        </div>
                        <div class=\"text-left\">
                            <button type=\"submit\" class=\"btn btn-primary\">Se connecter</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
{% endblock %}", ":admin:index.html.twig", "/var/www/html/File_Rouge/original/soultana.sn/app/Resources/views/admin/index.html.twig");
    }
}
