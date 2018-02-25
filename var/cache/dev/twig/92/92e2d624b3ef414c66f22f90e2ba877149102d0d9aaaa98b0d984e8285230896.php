<?php

/* :reservation:connexion.html.twig */
class __TwigTemplate_23f5c3ec863c508fe51413a224ef8272125dc24ce425ba497d8a7626487b872a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":reservation:connexion.html.twig", 1);
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
        $__internal_7f178e807f17763a0c110de8921eba2909dacab7e6faeedbe3321c769c280a71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f178e807f17763a0c110de8921eba2909dacab7e6faeedbe3321c769c280a71->enter($__internal_7f178e807f17763a0c110de8921eba2909dacab7e6faeedbe3321c769c280a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservation:connexion.html.twig"));

        $__internal_74befd0dca57350b98d350086197689e26d85eee259f29e6a78b0381ae5fe98a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74befd0dca57350b98d350086197689e26d85eee259f29e6a78b0381ae5fe98a->enter($__internal_74befd0dca57350b98d350086197689e26d85eee259f29e6a78b0381ae5fe98a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservation:connexion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f178e807f17763a0c110de8921eba2909dacab7e6faeedbe3321c769c280a71->leave($__internal_7f178e807f17763a0c110de8921eba2909dacab7e6faeedbe3321c769c280a71_prof);

        
        $__internal_74befd0dca57350b98d350086197689e26d85eee259f29e6a78b0381ae5fe98a->leave($__internal_74befd0dca57350b98d350086197689e26d85eee259f29e6a78b0381ae5fe98a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_da0260be61656ea403948c4178b58e970e7093035acfa1055d12e4ddb140d340 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da0260be61656ea403948c4178b58e970e7093035acfa1055d12e4ddb140d340->enter($__internal_da0260be61656ea403948c4178b58e970e7093035acfa1055d12e4ddb140d340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_92e86a43e3ff9b489ae9ab29109def1e39914fa1be3a1a831a54a0c1673a9cd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92e86a43e3ff9b489ae9ab29109def1e39914fa1be3a1a831a54a0c1673a9cd9->enter($__internal_92e86a43e3ff9b489ae9ab29109def1e39914fa1be3a1a831a54a0c1673a9cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Connexion";
        
        $__internal_92e86a43e3ff9b489ae9ab29109def1e39914fa1be3a1a831a54a0c1673a9cd9->leave($__internal_92e86a43e3ff9b489ae9ab29109def1e39914fa1be3a1a831a54a0c1673a9cd9_prof);

        
        $__internal_da0260be61656ea403948c4178b58e970e7093035acfa1055d12e4ddb140d340->leave($__internal_da0260be61656ea403948c4178b58e970e7093035acfa1055d12e4ddb140d340_prof);

    }

    // line 3
    public function block_contenus($context, array $blocks = array())
    {
        $__internal_3f7c8dfff7c32d7c2da21501f9f0a69afe5109272fd1886ee634b5a974018abb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f7c8dfff7c32d7c2da21501f9f0a69afe5109272fd1886ee634b5a974018abb->enter($__internal_3f7c8dfff7c32d7c2da21501f9f0a69afe5109272fd1886ee634b5a974018abb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        $__internal_00a5d3b2f9a5decc6f7a8f60e062503e0decea585a96f8d4a736fcf78510e346 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00a5d3b2f9a5decc6f7a8f60e062503e0decea585a96f8d4a736fcf78510e346->enter($__internal_00a5d3b2f9a5decc6f7a8f60e062503e0decea585a96f8d4a736fcf78510e346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        // line 4
        echo "<div class=\"page-head\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"page-head-content\">
                <h1 class=\"page-title\">Accueil Nouveau compte / Connexion </h1>
            </div>
        </div>
    </div>
</div>
<!-- End page header -->

<!-- register-area -->
<div class=\"register-area\" style=\"background-color: rgb(249, 249, 249);\">
    <div class=\"container\">

        <div class=\"col-md-6\">
            <div class=\"box-for overflow\">
                <div class=\"col-md-12 col-xs-12 register-blocks\">
                    <h2>Nouveau compte : </h2>
                    <form action=\"\" method=\"post\" data-form=\"form_inscription\">
                        <div class=\"alert alert-danger cacher\" id=\"form_inscription\" role=\"alert\">
                            <ul>
                            </ul>
                        </div>
                        <input type=\"hidden\" name=\"typeformInscrit\" id=\"typeformInscrit\" value=\"inscription\"/>
                        <input type=\"hidden\" name=\"idBienInscrit\" id=\"idBienInscrit\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["bien"] ?? $this->getContext($context, "bien")), 0, array(), "array"), "id", array()), "html", null, true);
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
            </div>
        </div>

        <div class=\"col-md-6\">
            <div class=\"box-for overflow\">
                <div class=\"col-md-12 col-xs-12 login-blocks\">
                    <h2>Connexion : </h2>
                    <form action=\"\" method=\"post\" data-form=\"form_connexion\">
                        <div class=\"alert alert-danger cacher\" id=\"form_connexion\" role=\"alert\">
                            <ul>

                            </ul>
                        </div>
                        <input type=\"hidden\" name=\"typeform\" id=\"typeform\" value=\"connexion\"/>
                        <input type=\"hidden\" name=\"idBien\" id=\"idBien\" value=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["bien"] ?? $this->getContext($context, "bien")), 0, array(), "array"), "id", array()), "html", null, true);
        echo "\"/>
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
                    <br>

                    <h2>Social login : </h2>

                    <p>
                        <a class=\"login-social\" href=\"#\"><i class=\"fa fa-facebook\"></i>&nbsp;Facebook</a>
                        <a class=\"login-social\" href=\"#\"><i class=\"fa fa-google-plus\"></i>&nbsp;Gmail</a>
                        <a class=\"login-social\" href=\"#\"><i class=\"fa fa-twitter\"></i>&nbsp;Twitter</a>
                    </p>
                </div>

            </div>
        </div>

    </div>
</div>
";
        
        $__internal_00a5d3b2f9a5decc6f7a8f60e062503e0decea585a96f8d4a736fcf78510e346->leave($__internal_00a5d3b2f9a5decc6f7a8f60e062503e0decea585a96f8d4a736fcf78510e346_prof);

        
        $__internal_3f7c8dfff7c32d7c2da21501f9f0a69afe5109272fd1886ee634b5a974018abb->leave($__internal_3f7c8dfff7c32d7c2da21501f9f0a69afe5109272fd1886ee634b5a974018abb_prof);

    }

    public function getTemplateName()
    {
        return ":reservation:connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 77,  95 => 29,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
                <h1 class=\"page-title\">Accueil Nouveau compte / Connexion </h1>
            </div>
        </div>
    </div>
</div>
<!-- End page header -->

<!-- register-area -->
<div class=\"register-area\" style=\"background-color: rgb(249, 249, 249);\">
    <div class=\"container\">

        <div class=\"col-md-6\">
            <div class=\"box-for overflow\">
                <div class=\"col-md-12 col-xs-12 register-blocks\">
                    <h2>Nouveau compte : </h2>
                    <form action=\"\" method=\"post\" data-form=\"form_inscription\">
                        <div class=\"alert alert-danger cacher\" id=\"form_inscription\" role=\"alert\">
                            <ul>
                            </ul>
                        </div>
                        <input type=\"hidden\" name=\"typeformInscrit\" id=\"typeformInscrit\" value=\"inscription\"/>
                        <input type=\"hidden\" name=\"idBienInscrit\" id=\"idBienInscrit\" value=\"{{ bien[0].id }}\"/>
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
            </div>
        </div>

        <div class=\"col-md-6\">
            <div class=\"box-for overflow\">
                <div class=\"col-md-12 col-xs-12 login-blocks\">
                    <h2>Connexion : </h2>
                    <form action=\"\" method=\"post\" data-form=\"form_connexion\">
                        <div class=\"alert alert-danger cacher\" id=\"form_connexion\" role=\"alert\">
                            <ul>

                            </ul>
                        </div>
                        <input type=\"hidden\" name=\"typeform\" id=\"typeform\" value=\"connexion\"/>
                        <input type=\"hidden\" name=\"idBien\" id=\"idBien\" value=\"{{ bien[0].id }}\"/>
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
                    <br>

                    <h2>Social login : </h2>

                    <p>
                        <a class=\"login-social\" href=\"#\"><i class=\"fa fa-facebook\"></i>&nbsp;Facebook</a>
                        <a class=\"login-social\" href=\"#\"><i class=\"fa fa-google-plus\"></i>&nbsp;Gmail</a>
                        <a class=\"login-social\" href=\"#\"><i class=\"fa fa-twitter\"></i>&nbsp;Twitter</a>
                    </p>
                </div>

            </div>
        </div>

    </div>
</div>
{% endblock %}", ":reservation:connexion.html.twig", "/var/www/html/File_Rouge/original/soultana.sn/app/Resources/views/reservation/connexion.html.twig");
    }
}
