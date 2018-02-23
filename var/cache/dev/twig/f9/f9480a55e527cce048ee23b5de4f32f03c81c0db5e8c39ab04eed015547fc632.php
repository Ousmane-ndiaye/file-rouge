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
        $__internal_93c8987c3d549b85792affb924919efbe7a92d82a657b0c1e85950414df39108 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93c8987c3d549b85792affb924919efbe7a92d82a657b0c1e85950414df39108->enter($__internal_93c8987c3d549b85792affb924919efbe7a92d82a657b0c1e85950414df39108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/listebien.html.twig"));

        $__internal_c4998cc9ffde5659f7af3ed3fa210a3f338018f8de13dd1df0e07edd1a61c516 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4998cc9ffde5659f7af3ed3fa210a3f338018f8de13dd1df0e07edd1a61c516->enter($__internal_c4998cc9ffde5659f7af3ed3fa210a3f338018f8de13dd1df0e07edd1a61c516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/listebien.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93c8987c3d549b85792affb924919efbe7a92d82a657b0c1e85950414df39108->leave($__internal_93c8987c3d549b85792affb924919efbe7a92d82a657b0c1e85950414df39108_prof);

        
        $__internal_c4998cc9ffde5659f7af3ed3fa210a3f338018f8de13dd1df0e07edd1a61c516->leave($__internal_c4998cc9ffde5659f7af3ed3fa210a3f338018f8de13dd1df0e07edd1a61c516_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_d1da0a96069053289c8047cb0793368d1d655838c5c8eedcee5788e6bf69d9f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1da0a96069053289c8047cb0793368d1d655838c5c8eedcee5788e6bf69d9f7->enter($__internal_d1da0a96069053289c8047cb0793368d1d655838c5c8eedcee5788e6bf69d9f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9003f68f145641e906b506d0890d9358636e1c189d773851604c6e73c6f2b447 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9003f68f145641e906b506d0890d9358636e1c189d773851604c6e73c6f2b447->enter($__internal_9003f68f145641e906b506d0890d9358636e1c189d773851604c6e73c6f2b447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Connexion";
        
        $__internal_9003f68f145641e906b506d0890d9358636e1c189d773851604c6e73c6f2b447->leave($__internal_9003f68f145641e906b506d0890d9358636e1c189d773851604c6e73c6f2b447_prof);

        
        $__internal_d1da0a96069053289c8047cb0793368d1d655838c5c8eedcee5788e6bf69d9f7->leave($__internal_d1da0a96069053289c8047cb0793368d1d655838c5c8eedcee5788e6bf69d9f7_prof);

    }

    // line 3
    public function block_contenus($context, array $blocks = array())
    {
        $__internal_7c71d7872cd1fc809e09d4288410b5265f1e1d03f2b27782e329d2f37c72823a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c71d7872cd1fc809e09d4288410b5265f1e1d03f2b27782e329d2f37c72823a->enter($__internal_7c71d7872cd1fc809e09d4288410b5265f1e1d03f2b27782e329d2f37c72823a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        $__internal_aca06cafb51b94261c497ec00cf770049d1589daafcbc8a155c8e039389f5be2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aca06cafb51b94261c497ec00cf770049d1589daafcbc8a155c8e039389f5be2->enter($__internal_aca06cafb51b94261c497ec00cf770049d1589daafcbc8a155c8e039389f5be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

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
    <form action=\"\" method=\"post\" data-form=\"form_inscription\">
        <div class=\"alert alert-danger cacher\" id=\"form_inscription\" role=\"alert\">
            <ul>
            </ul>
        </div>
        <input type=\"hidden\" name=\"typeformInscrit\" id=\"typeformInscrit\" value=\"inscription\"/>
        <input type=\"hidden\" name=\"idBienInscrit\" id=\"idBienInscrit\" value=\"";
        // line 39
        echo "\"/>
        <div class=\"form-group\">
            <label for=\"nomClient\">Prénom et Nom</label>
            <input type=\"text\" class=\"form-control\" name=\"nomClientInscrit\" id=\"nomClientInscrit\" data-champ=\"Prénom et Nom\">
        </div>
        <div class=\"form-group\">
            <label for=\"numCni\">Numéro pièce</label>
            <input type=\"number\" class=\"form-control\" name=\"numCniInscrit\" id=\"numCniInscrit\" data-champ=\"numéro pièce\">
        </div>
        <div class=\"form-group\">
            <label for=\"adresse\">Adresse</label>
            <input type=\"text\" class=\"form-control\" name=\"adresseInscrit\" id=\"adresseInscrit\" data-champ=\"Adresse\">
        </div>
        <div class=\"form-group\">
            <label for=\"email\">Email</label>
            <input type=\"text\" class=\"form-control\" name=\"emailInscrit\" id=\"emailInscrit\" data-champ=\"email\">
        </div>
        <div class=\"form-group\">
            <label for=\"telephone\">téléphone</label>
            <input type=\"number\" class=\"form-control\" name=\"telephoneInscrit\" id=\"telephoneInscrit\" data-champ=\"téléphone\">
        </div>
        <div class=\"form-group\">
            <label for=\"login\">nom d'utilisateur</label>
            <input type=\"text\" class=\"form-control\" name=\"loginInscrit\" id=\"loginInscrit\" data-champ=\"nom d'utilisateur\">
        </div>
        <div class=\"form-group\">
            <label for=\"password\">Password</label>
            <input type=\"password\" class=\"form-control\" name=\"passwordInscrit\" id=\"passwordInscrit\" data-champ=\"mot de passe\">
        </div>
        <div class=\"text-center\">
            <button type=\"submit\" class=\"btn btn-default\">S'inscrire</button>
        </div>
    </form>
</div>
";
        
        $__internal_aca06cafb51b94261c497ec00cf770049d1589daafcbc8a155c8e039389f5be2->leave($__internal_aca06cafb51b94261c497ec00cf770049d1589daafcbc8a155c8e039389f5be2_prof);

        
        $__internal_7c71d7872cd1fc809e09d4288410b5265f1e1d03f2b27782e329d2f37c72823a->leave($__internal_7c71d7872cd1fc809e09d4288410b5265f1e1d03f2b27782e329d2f37c72823a_prof);

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
        return array (  124 => 39,  113 => 30,  104 => 27,  100 => 26,  96 => 25,  93 => 24,  89 => 23,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
    <form action=\"\" method=\"post\" data-form=\"form_inscription\">
        <div class=\"alert alert-danger cacher\" id=\"form_inscription\" role=\"alert\">
            <ul>
            </ul>
        </div>
        <input type=\"hidden\" name=\"typeformInscrit\" id=\"typeformInscrit\" value=\"inscription\"/>
        <input type=\"hidden\" name=\"idBienInscrit\" id=\"idBienInscrit\" value=\"{# {{ bien[0].id }} #}\"/>
        <div class=\"form-group\">
            <label for=\"nomClient\">Prénom et Nom</label>
            <input type=\"text\" class=\"form-control\" name=\"nomClientInscrit\" id=\"nomClientInscrit\" data-champ=\"Prénom et Nom\">
        </div>
        <div class=\"form-group\">
            <label for=\"numCni\">Numéro pièce</label>
            <input type=\"number\" class=\"form-control\" name=\"numCniInscrit\" id=\"numCniInscrit\" data-champ=\"numéro pièce\">
        </div>
        <div class=\"form-group\">
            <label for=\"adresse\">Adresse</label>
            <input type=\"text\" class=\"form-control\" name=\"adresseInscrit\" id=\"adresseInscrit\" data-champ=\"Adresse\">
        </div>
        <div class=\"form-group\">
            <label for=\"email\">Email</label>
            <input type=\"text\" class=\"form-control\" name=\"emailInscrit\" id=\"emailInscrit\" data-champ=\"email\">
        </div>
        <div class=\"form-group\">
            <label for=\"telephone\">téléphone</label>
            <input type=\"number\" class=\"form-control\" name=\"telephoneInscrit\" id=\"telephoneInscrit\" data-champ=\"téléphone\">
        </div>
        <div class=\"form-group\">
            <label for=\"login\">nom d'utilisateur</label>
            <input type=\"text\" class=\"form-control\" name=\"loginInscrit\" id=\"loginInscrit\" data-champ=\"nom d'utilisateur\">
        </div>
        <div class=\"form-group\">
            <label for=\"password\">Password</label>
            <input type=\"password\" class=\"form-control\" name=\"passwordInscrit\" id=\"passwordInscrit\" data-champ=\"mot de passe\">
        </div>
        <div class=\"text-center\">
            <button type=\"submit\" class=\"btn btn-default\">S'inscrire</button>
        </div>
    </form>
</div>
{% endblock %}", "admin/listebien.html.twig", "/var/www/html/File_Rouge/original/soultana.sn/app/Resources/views/admin/listebien.html.twig");
    }
}
