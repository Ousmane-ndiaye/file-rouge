<?php

/* reservation/connexion.html.twig */
class __TwigTemplate_23f5c3ec863c508fe51413a224ef8272125dc24ce425ba497d8a7626487b872a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "reservation/connexion.html.twig", 1);
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
        $__internal_a667f5e116122aceffb95fc23376772b116d941a53639a528169bb0c87230a2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a667f5e116122aceffb95fc23376772b116d941a53639a528169bb0c87230a2d->enter($__internal_a667f5e116122aceffb95fc23376772b116d941a53639a528169bb0c87230a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/connexion.html.twig"));

        $__internal_8a9b6d46f94b87285917eba149071b9e77886477087a449210302f2e22d7af99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a9b6d46f94b87285917eba149071b9e77886477087a449210302f2e22d7af99->enter($__internal_8a9b6d46f94b87285917eba149071b9e77886477087a449210302f2e22d7af99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/connexion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a667f5e116122aceffb95fc23376772b116d941a53639a528169bb0c87230a2d->leave($__internal_a667f5e116122aceffb95fc23376772b116d941a53639a528169bb0c87230a2d_prof);

        
        $__internal_8a9b6d46f94b87285917eba149071b9e77886477087a449210302f2e22d7af99->leave($__internal_8a9b6d46f94b87285917eba149071b9e77886477087a449210302f2e22d7af99_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_3df851fa52c07f6da1e4af13e3c8276948c7f3bb8cce7d8e9847bb1645ff3f4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3df851fa52c07f6da1e4af13e3c8276948c7f3bb8cce7d8e9847bb1645ff3f4e->enter($__internal_3df851fa52c07f6da1e4af13e3c8276948c7f3bb8cce7d8e9847bb1645ff3f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9bfc79657fb68d6df10605d9638dc1972d32e15ab860da6a96e04b027e517e8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bfc79657fb68d6df10605d9638dc1972d32e15ab860da6a96e04b027e517e8e->enter($__internal_9bfc79657fb68d6df10605d9638dc1972d32e15ab860da6a96e04b027e517e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Connexion";
        
        $__internal_9bfc79657fb68d6df10605d9638dc1972d32e15ab860da6a96e04b027e517e8e->leave($__internal_9bfc79657fb68d6df10605d9638dc1972d32e15ab860da6a96e04b027e517e8e_prof);

        
        $__internal_3df851fa52c07f6da1e4af13e3c8276948c7f3bb8cce7d8e9847bb1645ff3f4e->leave($__internal_3df851fa52c07f6da1e4af13e3c8276948c7f3bb8cce7d8e9847bb1645ff3f4e_prof);

    }

    // line 3
    public function block_contenus($context, array $blocks = array())
    {
        $__internal_4e3fe0fa12352431538143c2695ecf2d4b884b84ba05105ea4f743c5aa350acd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e3fe0fa12352431538143c2695ecf2d4b884b84ba05105ea4f743c5aa350acd->enter($__internal_4e3fe0fa12352431538143c2695ecf2d4b884b84ba05105ea4f743c5aa350acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        $__internal_03a3283e6f0fe234e2865277b4efb387864d3998eb2017f20c081bb4d08c443a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03a3283e6f0fe234e2865277b4efb387864d3998eb2017f20c081bb4d08c443a->enter($__internal_03a3283e6f0fe234e2865277b4efb387864d3998eb2017f20c081bb4d08c443a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

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
        
        $__internal_03a3283e6f0fe234e2865277b4efb387864d3998eb2017f20c081bb4d08c443a->leave($__internal_03a3283e6f0fe234e2865277b4efb387864d3998eb2017f20c081bb4d08c443a_prof);

        
        $__internal_4e3fe0fa12352431538143c2695ecf2d4b884b84ba05105ea4f743c5aa350acd->leave($__internal_4e3fe0fa12352431538143c2695ecf2d4b884b84ba05105ea4f743c5aa350acd_prof);

    }

    public function getTemplateName()
    {
        return "reservation/connexion.html.twig";
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
{% endblock %}", "reservation/connexion.html.twig", "/var/www/html/File_Rouge/original/soultana.sn/app/Resources/views/reservation/connexion.html.twig");
    }
}
