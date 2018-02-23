<?php

/* admin/listebien.html.twig */
class __TwigTemplate_9d0f6050a4ac7249871c0ae5462aefb9178979f520422651cf4e4ec92693421d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/listebien.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'contenus' => array($this, 'block_contenus'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c731ece77e7409c8c78afc27d7c523f713bd83b5e63b21f706ed4122e7766870 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c731ece77e7409c8c78afc27d7c523f713bd83b5e63b21f706ed4122e7766870->enter($__internal_c731ece77e7409c8c78afc27d7c523f713bd83b5e63b21f706ed4122e7766870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/listebien.html.twig"));

        $__internal_16167a5523ecdfc4dcbbbce00091f2b2e0370d52744b6991f47382b32ca56e18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16167a5523ecdfc4dcbbbce00091f2b2e0370d52744b6991f47382b32ca56e18->enter($__internal_16167a5523ecdfc4dcbbbce00091f2b2e0370d52744b6991f47382b32ca56e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/listebien.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c731ece77e7409c8c78afc27d7c523f713bd83b5e63b21f706ed4122e7766870->leave($__internal_c731ece77e7409c8c78afc27d7c523f713bd83b5e63b21f706ed4122e7766870_prof);

        
        $__internal_16167a5523ecdfc4dcbbbce00091f2b2e0370d52744b6991f47382b32ca56e18->leave($__internal_16167a5523ecdfc4dcbbbce00091f2b2e0370d52744b6991f47382b32ca56e18_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ae24884cef89161a506c70948b73565391cd3643ba53e603af95c757225dab6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae24884cef89161a506c70948b73565391cd3643ba53e603af95c757225dab6c->enter($__internal_ae24884cef89161a506c70948b73565391cd3643ba53e603af95c757225dab6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_357095f43466a54764d8c05d92bbd3399b9bb838200656accf85bb807fd4e704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_357095f43466a54764d8c05d92bbd3399b9bb838200656accf85bb807fd4e704->enter($__internal_357095f43466a54764d8c05d92bbd3399b9bb838200656accf85bb807fd4e704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Connexion";
        
        $__internal_357095f43466a54764d8c05d92bbd3399b9bb838200656accf85bb807fd4e704->leave($__internal_357095f43466a54764d8c05d92bbd3399b9bb838200656accf85bb807fd4e704_prof);

        
        $__internal_ae24884cef89161a506c70948b73565391cd3643ba53e603af95c757225dab6c->leave($__internal_ae24884cef89161a506c70948b73565391cd3643ba53e603af95c757225dab6c_prof);

    }

    // line 3
    public function block_contenus($context, array $blocks = array())
    {
        $__internal_0fd2d9746b12f383574ff9cd4ba54f008c03e8417dac86c9d36104c133020b92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fd2d9746b12f383574ff9cd4ba54f008c03e8417dac86c9d36104c133020b92->enter($__internal_0fd2d9746b12f383574ff9cd4ba54f008c03e8417dac86c9d36104c133020b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        $__internal_768df348fedb341b573fd3f42aebe0799bf4c5534a270f420e16b837e0fd3ee8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_768df348fedb341b573fd3f42aebe0799bf4c5534a270f420e16b837e0fd3ee8->enter($__internal_768df348fedb341b573fd3f42aebe0799bf4c5534a270f420e16b837e0fd3ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        // line 4
        echo "<div class=\"page-head\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"page-head-content\">
                <h1 class=\"page-title\">Accueil Admin </h1>
            </div>
        </div>
    </div>
</div>
<!-- End page header -->
<table class=\"table\" id=\"tablebien\" border=\"2\">
    <thead>
        <tr>
            <th>TYPE DE BIEN</th>
            <th>ADRESSE</th>
            <th>MONTANT LOCATION</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biens"] ?? $this->getContext($context, "biens")));
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 24
            echo "        <tr>
            <td scope=\"row\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "nomTypeBien", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "adresse", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "prixLoc", array()), "html", null, true);
            echo "</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </tbody>
</table>
<div style=\"width: 500px; margin: auto; backrgound-color: black;\">
    <form action=\"\" method=\"post\" data-form=\"form_connexion\">
        <div class=\"alert alert-danger cacher\" id=\"form_connexion\" role=\"alert\">
            <ul>

            </ul>
        </div>
        <input type=\"hidden\" name=\"typeform\" id=\"typeform\" value=\"connexion\"/>
        <div class=\"form-group\">
            <label for=\"login\">Nom d'utilisateur</label>
            <input type=\"text\" class=\"form-control\" name=\"login\" id=\"login\" data-champ=\"nom d'utilisateur\">
        </div>
        <div class=\"form-group\">
            <label for=\"password\">Password</label>
            <input type=\"password\" class=\"form-control\" name=\"password\" id=\"password\" data-champ=\"mot de passe\">
        </div>
        <div class=\"text-center\">
            <button type=\"submit\" class=\"btn btn-default\">Se connecter</button>
        </div>
    </form>
    <a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("test_ajax");
        echo "\" name=\"tablebien\" id=\"tablebien\" class=\"bg-primary\" >Bien</a>
</div>
";
        
        $__internal_768df348fedb341b573fd3f42aebe0799bf4c5534a270f420e16b837e0fd3ee8->leave($__internal_768df348fedb341b573fd3f42aebe0799bf4c5534a270f420e16b837e0fd3ee8_prof);

        
        $__internal_0fd2d9746b12f383574ff9cd4ba54f008c03e8417dac86c9d36104c133020b92->leave($__internal_0fd2d9746b12f383574ff9cd4ba54f008c03e8417dac86c9d36104c133020b92_prof);

    }

    public function getTemplateName()
    {
        return "admin/listebien.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 52,  113 => 30,  104 => 27,  100 => 26,  96 => 25,  93 => 24,  89 => 23,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}Connexion{% endblock %}
{% block contenus %}
<div class=\"page-head\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"page-head-content\">
                <h1 class=\"page-title\">Accueil Admin </h1>
            </div>
        </div>
    </div>
</div>
<!-- End page header -->
<table class=\"table\" id=\"tablebien\" border=\"2\">
    <thead>
        <tr>
            <th>TYPE DE BIEN</th>
            <th>ADRESSE</th>
            <th>MONTANT LOCATION</th>
        </tr>
    </thead>
    <tbody>
    {% for bien in biens %}
        <tr>
            <td scope=\"row\">{{ bien.nomTypeBien }}</td>
            <td>{{ bien.adresse }}</td>
            <td>{{ bien.prixLoc }}</td>
        </tr>
    {% endfor %}
    </tbody>
</table>
<div style=\"width: 500px; margin: auto; backrgound-color: black;\">
    <form action=\"\" method=\"post\" data-form=\"form_connexion\">
        <div class=\"alert alert-danger cacher\" id=\"form_connexion\" role=\"alert\">
            <ul>

            </ul>
        </div>
        <input type=\"hidden\" name=\"typeform\" id=\"typeform\" value=\"connexion\"/>
        <div class=\"form-group\">
            <label for=\"login\">Nom d'utilisateur</label>
            <input type=\"text\" class=\"form-control\" name=\"login\" id=\"login\" data-champ=\"nom d'utilisateur\">
        </div>
        <div class=\"form-group\">
            <label for=\"password\">Password</label>
            <input type=\"password\" class=\"form-control\" name=\"password\" id=\"password\" data-champ=\"mot de passe\">
        </div>
        <div class=\"text-center\">
            <button type=\"submit\" class=\"btn btn-default\">Se connecter</button>
        </div>
    </form>
    <a href=\"{{ path('test_ajax') }}\" name=\"tablebien\" id=\"tablebien\" class=\"bg-primary\" >Bien</a>
</div>
{% endblock %}", "admin/listebien.html.twig", "/var/www/html/File_Rouge/original/soultana.sn/app/Resources/views/admin/listebien.html.twig");
    }
}
