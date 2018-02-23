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
        $__internal_d593769102db9e95ed483126f84c5f1832b7cadc5d75fca9e13f5bfec02d444d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d593769102db9e95ed483126f84c5f1832b7cadc5d75fca9e13f5bfec02d444d->enter($__internal_d593769102db9e95ed483126f84c5f1832b7cadc5d75fca9e13f5bfec02d444d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservation:connexion.html.twig"));

        $__internal_96ca33b87e6365a109363ad56d95b7c06e49b62937d8907c2932baa86f512ab8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96ca33b87e6365a109363ad56d95b7c06e49b62937d8907c2932baa86f512ab8->enter($__internal_96ca33b87e6365a109363ad56d95b7c06e49b62937d8907c2932baa86f512ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservation:connexion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d593769102db9e95ed483126f84c5f1832b7cadc5d75fca9e13f5bfec02d444d->leave($__internal_d593769102db9e95ed483126f84c5f1832b7cadc5d75fca9e13f5bfec02d444d_prof);

        
        $__internal_96ca33b87e6365a109363ad56d95b7c06e49b62937d8907c2932baa86f512ab8->leave($__internal_96ca33b87e6365a109363ad56d95b7c06e49b62937d8907c2932baa86f512ab8_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_c7cde6462cb82b378da5b326cb64716c3562c8792e9b2c3bfdb65342f6b444ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7cde6462cb82b378da5b326cb64716c3562c8792e9b2c3bfdb65342f6b444ca->enter($__internal_c7cde6462cb82b378da5b326cb64716c3562c8792e9b2c3bfdb65342f6b444ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4b51a090e50f841a8885d4ea2f883bfd9fde59380486eeec8535fab31a87f2db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b51a090e50f841a8885d4ea2f883bfd9fde59380486eeec8535fab31a87f2db->enter($__internal_4b51a090e50f841a8885d4ea2f883bfd9fde59380486eeec8535fab31a87f2db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Connexion";
        
        $__internal_4b51a090e50f841a8885d4ea2f883bfd9fde59380486eeec8535fab31a87f2db->leave($__internal_4b51a090e50f841a8885d4ea2f883bfd9fde59380486eeec8535fab31a87f2db_prof);

        
        $__internal_c7cde6462cb82b378da5b326cb64716c3562c8792e9b2c3bfdb65342f6b444ca->leave($__internal_c7cde6462cb82b378da5b326cb64716c3562c8792e9b2c3bfdb65342f6b444ca_prof);

    }

    // line 3
    public function block_contenus($context, array $blocks = array())
    {
        $__internal_cff0ff5e9903fc175f379866c320bab8f9a5027d44fc1d0b66d5512cb841442f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cff0ff5e9903fc175f379866c320bab8f9a5027d44fc1d0b66d5512cb841442f->enter($__internal_cff0ff5e9903fc175f379866c320bab8f9a5027d44fc1d0b66d5512cb841442f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        $__internal_2fdadf3a84af9528037bdcf34c50817fbbfad24006b0dfac90a52c354359760a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fdadf3a84af9528037bdcf34c50817fbbfad24006b0dfac90a52c354359760a->enter($__internal_2fdadf3a84af9528037bdcf34c50817fbbfad24006b0dfac90a52c354359760a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

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
        
        $__internal_2fdadf3a84af9528037bdcf34c50817fbbfad24006b0dfac90a52c354359760a->leave($__internal_2fdadf3a84af9528037bdcf34c50817fbbfad24006b0dfac90a52c354359760a_prof);

        
        $__internal_cff0ff5e9903fc175f379866c320bab8f9a5027d44fc1d0b66d5512cb841442f->leave($__internal_cff0ff5e9903fc175f379866c320bab8f9a5027d44fc1d0b66d5512cb841442f_prof);

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
