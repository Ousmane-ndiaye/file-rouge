<?php

/* admin/contrat.html.twig */
class __TwigTemplate_9d76964389d7c8b2d3136662f0ee0551fcdeabd0293f72ab8e2b8e60c5045cdb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base1.html.twig", "admin/contrat.html.twig", 1);
        $this->blocks = array(
            'accueil' => array($this, 'block_accueil'),
            'titre_page_li' => array($this, 'block_titre_page_li'),
            'titre_page_h1' => array($this, 'block_titre_page_h1'),
            'contenus' => array($this, 'block_contenus'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8ef86d2dcee5ee4d049b39b9bb96c95b99cd2e0f816eb96d548017111c9bec60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ef86d2dcee5ee4d049b39b9bb96c95b99cd2e0f816eb96d548017111c9bec60->enter($__internal_8ef86d2dcee5ee4d049b39b9bb96c95b99cd2e0f816eb96d548017111c9bec60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/contrat.html.twig"));

        $__internal_78d995bbe3dace4be810abe8953e1bab8fcaaa381c28e3a63e59a4cf39a1b0e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78d995bbe3dace4be810abe8953e1bab8fcaaa381c28e3a63e59a4cf39a1b0e2->enter($__internal_78d995bbe3dace4be810abe8953e1bab8fcaaa381c28e3a63e59a4cf39a1b0e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/contrat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ef86d2dcee5ee4d049b39b9bb96c95b99cd2e0f816eb96d548017111c9bec60->leave($__internal_8ef86d2dcee5ee4d049b39b9bb96c95b99cd2e0f816eb96d548017111c9bec60_prof);

        
        $__internal_78d995bbe3dace4be810abe8953e1bab8fcaaa381c28e3a63e59a4cf39a1b0e2->leave($__internal_78d995bbe3dace4be810abe8953e1bab8fcaaa381c28e3a63e59a4cf39a1b0e2_prof);

    }

    // line 2
    public function block_accueil($context, array $blocks = array())
    {
        $__internal_3efa347df799518a63b94ecc28812f15bb576957c218b930759de95e35da626d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3efa347df799518a63b94ecc28812f15bb576957c218b930759de95e35da626d->enter($__internal_3efa347df799518a63b94ecc28812f15bb576957c218b930759de95e35da626d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "accueil"));

        $__internal_85430b5c7e56382116e6d18bd3eb5d03c7ac8db849da12d82e6c28abf9117355 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85430b5c7e56382116e6d18bd3eb5d03c7ac8db849da12d82e6c28abf9117355->enter($__internal_85430b5c7e56382116e6d18bd3eb5d03c7ac8db849da12d82e6c28abf9117355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "accueil"));

        // line 3
        echo "    ";
        echo "class=\" \"";
        echo "
";
        
        $__internal_85430b5c7e56382116e6d18bd3eb5d03c7ac8db849da12d82e6c28abf9117355->leave($__internal_85430b5c7e56382116e6d18bd3eb5d03c7ac8db849da12d82e6c28abf9117355_prof);

        
        $__internal_3efa347df799518a63b94ecc28812f15bb576957c218b930759de95e35da626d->leave($__internal_3efa347df799518a63b94ecc28812f15bb576957c218b930759de95e35da626d_prof);

    }

    // line 5
    public function block_titre_page_li($context, array $blocks = array())
    {
        $__internal_5b5c697e28286913109bfe41248104c9617348a41fb402c4b5483136688e7f01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b5c697e28286913109bfe41248104c9617348a41fb402c4b5483136688e7f01->enter($__internal_5b5c697e28286913109bfe41248104c9617348a41fb402c4b5483136688e7f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_li"));

        $__internal_cc2b04a571b117d5919c8b6109e7d9b0008c16b753b8b77ce3d1adb3ba0a6ea1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc2b04a571b117d5919c8b6109e7d9b0008c16b753b8b77ce3d1adb3ba0a6ea1->enter($__internal_cc2b04a571b117d5919c8b6109e7d9b0008c16b753b8b77ce3d1adb3ba0a6ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_li"));

        // line 6
        echo "    ";
        echo "Réservation";
        echo "
";
        
        $__internal_cc2b04a571b117d5919c8b6109e7d9b0008c16b753b8b77ce3d1adb3ba0a6ea1->leave($__internal_cc2b04a571b117d5919c8b6109e7d9b0008c16b753b8b77ce3d1adb3ba0a6ea1_prof);

        
        $__internal_5b5c697e28286913109bfe41248104c9617348a41fb402c4b5483136688e7f01->leave($__internal_5b5c697e28286913109bfe41248104c9617348a41fb402c4b5483136688e7f01_prof);

    }

    // line 8
    public function block_titre_page_h1($context, array $blocks = array())
    {
        $__internal_a773d8e83d5e051ff2bab08a6af20e55fbf7bd6022a3e8efef6b687da54b0e78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a773d8e83d5e051ff2bab08a6af20e55fbf7bd6022a3e8efef6b687da54b0e78->enter($__internal_a773d8e83d5e051ff2bab08a6af20e55fbf7bd6022a3e8efef6b687da54b0e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_h1"));

        $__internal_98bd06b4fd25f6a1bf0992771b7523e48e688be9dbe1dbbdd8addf2bedc42c2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98bd06b4fd25f6a1bf0992771b7523e48e688be9dbe1dbbdd8addf2bedc42c2e->enter($__internal_98bd06b4fd25f6a1bf0992771b7523e48e688be9dbe1dbbdd8addf2bedc42c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_h1"));

        // line 9
        echo "    ";
        echo "Gestion des réservations contrat";
        echo "
";
        
        $__internal_98bd06b4fd25f6a1bf0992771b7523e48e688be9dbe1dbbdd8addf2bedc42c2e->leave($__internal_98bd06b4fd25f6a1bf0992771b7523e48e688be9dbe1dbbdd8addf2bedc42c2e_prof);

        
        $__internal_a773d8e83d5e051ff2bab08a6af20e55fbf7bd6022a3e8efef6b687da54b0e78->leave($__internal_a773d8e83d5e051ff2bab08a6af20e55fbf7bd6022a3e8efef6b687da54b0e78_prof);

    }

    // line 11
    public function block_contenus($context, array $blocks = array())
    {
        $__internal_204650802f64d84c020f6d436018a1f740079014d7c27afad5956e1be0ae7cbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_204650802f64d84c020f6d436018a1f740079014d7c27afad5956e1be0ae7cbe->enter($__internal_204650802f64d84c020f6d436018a1f740079014d7c27afad5956e1be0ae7cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        $__internal_6586d28b1e57272e33ac119b8ed0c18710533a44335577883270b2fffc1b1abd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6586d28b1e57272e33ac119b8ed0c18710533a44335577883270b2fffc1b1abd->enter($__internal_6586d28b1e57272e33ac119b8ed0c18710533a44335577883270b2fffc1b1abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        // line 12
        echo "    <div class=\"row\" id=\"charge_contrat\">
        <div class=\"col-md-12\">
            <div class=\"panel panel-default dark-overlay\">
                <div class=\"panel-heading\">
                    Finalisation du demande de réservation faites par ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "nomClient", array()), "html", null, true);
        echo "
                </div>
                <div class=\"panel-body row\">
                    <div class=\"col-md-12\">
                        <div class=\"panel panel-primary panel-body row\">
                            <div class=\"col-md-12\">
                                <div class=\"panel panel-blue\">
                                    <div class=\"panel-heading dark-overlay\">
                                        Détail du bien
                                    </div>
                                    <div class=\"panel-body row\">
                                        <ul class=\"col-md-4 ul_detail\">
                                            <li>
                                                <span class=\"droite\"> nom  </span> :
                                            </li>
                                            <li>
                                                <span class=\"droite\"> adresse </span> :
                                            </li>
                                            <li>
                                                <span class=\"droite\"> localité </span> :
                                            </li>
                                            <li>
                                                <span class=\"droite\"> type </span> :
                                            </li>
                                            <li>
                                                <span class=\"droite\"> proprietaire </span> :
                                            </li>
                                            <li>
                                                <span class=\"droite\"> montant </span> :
                                            </li>
                                            <li>
                                                <span class=\"droite\"> caution </span> :
                                            </li>
                                        </ul>
                                        <ul class=\"col-md-8 ul_detail\">
                                            <li>
                                                <span class=\"faux_droite\"> ";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "nomBien", array()), "html", null, true);
        echo " </span>
                                            </li>
                                            <li>
                                                <span class=\"faux_droite\"> ";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "adresse", array()), "html", null, true);
        echo " </span>
                                            </li>
                                            <li>
                                                <span class=\"faux_droite\"> ";
        // line 58
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "nomVille", array()) . ", ") . $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "nomQuartier", array())), "html", null, true);
        echo " </span>
                                            </li>
                                            <li>
                                                <span class=\"faux_droite\"> ";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "nomTypeBien", array()), "html", null, true);
        echo " </span>
                                            </li>
                                            <li>
                                                <span class=\"faux_droite\"> ";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "nomComplet", array()), "html", null, true);
        echo " </span>
                                            </li>
                                            <li>
                                                <span class=\"faux_droite\"> ";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "prixLoc", array()), "html", null, true);
        echo " fcfa </span>
                                            </li>
                                            <li>
                                                <span class=\"faux_droite\"> 50000 fcfa </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--/.col-->
                            <div class=\"col-md-12\">
                                <div class=\"panel panel-blue\">
                                    <div class=\"panel-heading dark-overlay\">
                                        Détail du client
                                    </div>
                                    <div class=\"panel-body row\">
                                        <ul class=\"col-md-4 ul_detail\">
                                            <li>
                                                <span class=\"droite\"> prénom & nom  </span> :
                                            </li>
                                            <li>
                                                <span class=\"droite\"> Numéro cni </span> :
                                            </li>
                                            <li>
                                                <span class=\"droite\"> adresse </span> :
                                            </li>
                                            <li>
                                                <span class=\"droite\"> e-mail </span> :
                                            </li>
                                            <li>
                                                <span class=\"droite\"> téléphone </span> :
                                            </li>
                                        </ul>
                                        <ul class=\"col-md-8 ul_detail\">
                                            <li>
                                                <span class=\"faux_droite\"> ";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "nomClient", array()), "html", null, true);
        echo " </span>
                                            </li>
                                            <li>
                                                <span class=\"faux_droite\"> ";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "Client_cni", array()), "html", null, true);
        echo " </span>
                                            </li>
                                            <li>
                                                <span class=\"faux_droite\"> ";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "Client_adresse", array()), "html", null, true);
        echo " </span>
                                            </li>
                                            <li>
                                                <span class=\"faux_droite\"> ";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "Client_email", array()), "html", null, true);
        echo " </span>
                                            </li>
                                            <li>
                                                <span class=\"faux_droite\"> ";
        // line 114
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "Client_telephone", array()), "html", null, true);
        echo " </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--/.col-->
                            <div class=\"col-md-12\">
                                <div class=\"panel panel-blue\">
                                    <div class=\"panel-heading dark-overlay\">
                                        Formalité du contrat
                                    </div>
                                    <div class=\"panel-body row\">
                                        <ul class=\"col-md-4 ul_detail\">
                                            <li>
                                                <span class=\"droite\"> Mensualité  </span> :
                                            </li>
                                            <li>
                                                <span class=\"droite\"> Caution </span> :
                                            </li>
                                            <li>
                                                <span class=\"droite\"> Total </span> :
                                            </li>
                                            <li>
                                                <form method=\"POST\" class=\"form-group\">
                                                    <div class=\"checkbox\">
                                                        <label style=\"font-weight: bold;\">
                                                            <input type=\"checkbox\" id=\"contrat_renouvable\" value=\"contrat de 1 an renouvelable\"> Contrat de 1 an renouvelable
                                                        </label>
                                                    </div>
                                                </form>
                                            </li>
                                        </ul>
                                        <ul class=\"col-md-8 ul_detail\">
                                            <li>
                                                <span class=\"faux_droite\"> ";
        // line 149
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "prixLoc", array()), "html", null, true);
        echo " fcfa </span>
                                            </li>
                                            <li>
                                                <span class=\"faux_droite\"> 50000 fcfa</span>
                                            </li>
                                            <li>
                                                <span class=\"faux_droite\"> ";
        // line 155
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "prixLoc", array()) + 50000), "html", null, true);
        echo " fcfa </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--/.col-->
                            <div class=\"col-md-12\">
                                <div class=\"panel panel-blue\">
                                    <div class=\"panel-heading dark-overlay\">
                                        Terme du contrat
                                    </div>
                                    <div class=\"panel-body row\">
                                        <div class=\"col-md-12\">
                                            <form method=\"POST\" class=\"form-group\">
                                                <div class=\"form-group\">
                                                    <label>Text area</label>
                                                    <textarea class=\"form-control\" rows=\"5\"></textarea>
                                                </div>
                                                <div class=\"checkbox\">
                                                    <label style=\"font-weight: bold;\">
                                                        <input type=\"checkbox\" name=\"soumContrat\" id=\"soumContrat\" value=\"accepter\"> Accepter
                                                    </label>
                                                    <label style=\"font-weight: bold;\">
                                                        <input type=\"checkbox\" name=\"soumContrat\" id=\"soumContrat\" value=\"refuser\"> Refuser
                                                    </label>
                                                </div>
                                                <button style=\"color: #1a2b3c;\" type=\"submit\" class=\"btn btn-sucess\">Enregistrer</button>
                                            </form>
                                        </div>
                                    </di>
                                </div>
                            </div>
                            <!--/.col-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-12\">
            &nbsp;
        </div>
        <!--/.col-->
    </div>
";
        
        $__internal_6586d28b1e57272e33ac119b8ed0c18710533a44335577883270b2fffc1b1abd->leave($__internal_6586d28b1e57272e33ac119b8ed0c18710533a44335577883270b2fffc1b1abd_prof);

        
        $__internal_204650802f64d84c020f6d436018a1f740079014d7c27afad5956e1be0ae7cbe->leave($__internal_204650802f64d84c020f6d436018a1f740079014d7c27afad5956e1be0ae7cbe_prof);

    }

    public function getTemplateName()
    {
        return "admin/contrat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 155,  293 => 149,  255 => 114,  249 => 111,  243 => 108,  237 => 105,  231 => 102,  193 => 67,  187 => 64,  181 => 61,  175 => 58,  169 => 55,  163 => 52,  124 => 16,  118 => 12,  109 => 11,  96 => 9,  87 => 8,  74 => 6,  65 => 5,  52 => 3,  43 => 2,  11 => 1,);
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
{% block accueil %}
    {{ 'class=\" \"' }}
{% endblock %}
{% block titre_page_li %}
    {{ 'Réservation' }}
{% endblock %}
{% block titre_page_h1 %}
    {{ 'Gestion des réservations contrat' }}
{% endblock %}
{% block contenus %}
    <div class=\"row\" id=\"charge_contrat\">
        <div class=\"col-md-12\">
            <div class=\"panel panel-default dark-overlay\">
                <div class=\"panel-heading\">
                    Finalisation du demande de réservation faites par {{ reservation[0].nomClient }}
                </div>
                <div class=\"panel-body row\">
                    <div class=\"col-md-12\">
                        <div class=\"panel panel-primary panel-body row\">
                            <div class=\"col-md-12\">
                                <div class=\"panel panel-blue\">
                                    <div class=\"panel-heading dark-overlay\">
                                        Détail du bien
                                    </div>
                                    <div class=\"panel-body row\">
                                        <ul class=\"col-md-4 ul_detail\">
                                            <li>
                                                <span class=\"droite\"> nom  </span> :
                                            </li>
                                            <li>
                                                <span class=\"droite\"> adresse </span> :
                                            </li>
                                            <li>
                                                <span class=\"droite\"> localité </span> :
                                            </li>
                                            <li>
                                                <span class=\"droite\"> type </span> :
                                            </li>
                                            <li>
                                                <span class=\"droite\"> proprietaire </span> :
                                            </li>
                                            <li>
                                                <span class=\"droite\"> montant </span> :
                                            </li>
                                            <li>
                                                <span class=\"droite\"> caution </span> :
                                            </li>
                                        </ul>
                                        <ul class=\"col-md-8 ul_detail\">
                                            <li>
                                                <span class=\"faux_droite\"> {{ reservation[0].nomBien }} </span>
                                            </li>
                                            <li>
                                                <span class=\"faux_droite\"> {{ reservation[0].adresse }} </span>
                                            </li>
                                            <li>
                                                <span class=\"faux_droite\"> {{ reservation[0].nomVille ~\", \"~reservation[0].nomQuartier }} </span>
                                            </li>
                                            <li>
                                                <span class=\"faux_droite\"> {{ reservation[0].nomTypeBien }} </span>
                                            </li>
                                            <li>
                                                <span class=\"faux_droite\"> {{ reservation[0].nomComplet }} </span>
                                            </li>
                                            <li>
                                                <span class=\"faux_droite\"> {{ reservation[0].prixLoc}} fcfa </span>
                                            </li>
                                            <li>
                                                <span class=\"faux_droite\"> 50000 fcfa </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--/.col-->
                            <div class=\"col-md-12\">
                                <div class=\"panel panel-blue\">
                                    <div class=\"panel-heading dark-overlay\">
                                        Détail du client
                                    </div>
                                    <div class=\"panel-body row\">
                                        <ul class=\"col-md-4 ul_detail\">
                                            <li>
                                                <span class=\"droite\"> prénom & nom  </span> :
                                            </li>
                                            <li>
                                                <span class=\"droite\"> Numéro cni </span> :
                                            </li>
                                            <li>
                                                <span class=\"droite\"> adresse </span> :
                                            </li>
                                            <li>
                                                <span class=\"droite\"> e-mail </span> :
                                            </li>
                                            <li>
                                                <span class=\"droite\"> téléphone </span> :
                                            </li>
                                        </ul>
                                        <ul class=\"col-md-8 ul_detail\">
                                            <li>
                                                <span class=\"faux_droite\"> {{ reservation[0].nomClient }} </span>
                                            </li>
                                            <li>
                                                <span class=\"faux_droite\"> {{ reservation[0].Client_cni }} </span>
                                            </li>
                                            <li>
                                                <span class=\"faux_droite\"> {{ reservation[0].Client_adresse }} </span>
                                            </li>
                                            <li>
                                                <span class=\"faux_droite\"> {{ reservation[0].Client_email }} </span>
                                            </li>
                                            <li>
                                                <span class=\"faux_droite\"> {{ reservation[0].Client_telephone }} </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--/.col-->
                            <div class=\"col-md-12\">
                                <div class=\"panel panel-blue\">
                                    <div class=\"panel-heading dark-overlay\">
                                        Formalité du contrat
                                    </div>
                                    <div class=\"panel-body row\">
                                        <ul class=\"col-md-4 ul_detail\">
                                            <li>
                                                <span class=\"droite\"> Mensualité  </span> :
                                            </li>
                                            <li>
                                                <span class=\"droite\"> Caution </span> :
                                            </li>
                                            <li>
                                                <span class=\"droite\"> Total </span> :
                                            </li>
                                            <li>
                                                <form method=\"POST\" class=\"form-group\">
                                                    <div class=\"checkbox\">
                                                        <label style=\"font-weight: bold;\">
                                                            <input type=\"checkbox\" id=\"contrat_renouvable\" value=\"contrat de 1 an renouvelable\"> Contrat de 1 an renouvelable
                                                        </label>
                                                    </div>
                                                </form>
                                            </li>
                                        </ul>
                                        <ul class=\"col-md-8 ul_detail\">
                                            <li>
                                                <span class=\"faux_droite\"> {{ reservation[0].prixLoc }} fcfa </span>
                                            </li>
                                            <li>
                                                <span class=\"faux_droite\"> 50000 fcfa</span>
                                            </li>
                                            <li>
                                                <span class=\"faux_droite\"> {{ reservation[0].prixLoc + 50000 }} fcfa </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--/.col-->
                            <div class=\"col-md-12\">
                                <div class=\"panel panel-blue\">
                                    <div class=\"panel-heading dark-overlay\">
                                        Terme du contrat
                                    </div>
                                    <div class=\"panel-body row\">
                                        <div class=\"col-md-12\">
                                            <form method=\"POST\" class=\"form-group\">
                                                <div class=\"form-group\">
                                                    <label>Text area</label>
                                                    <textarea class=\"form-control\" rows=\"5\"></textarea>
                                                </div>
                                                <div class=\"checkbox\">
                                                    <label style=\"font-weight: bold;\">
                                                        <input type=\"checkbox\" name=\"soumContrat\" id=\"soumContrat\" value=\"accepter\"> Accepter
                                                    </label>
                                                    <label style=\"font-weight: bold;\">
                                                        <input type=\"checkbox\" name=\"soumContrat\" id=\"soumContrat\" value=\"refuser\"> Refuser
                                                    </label>
                                                </div>
                                                <button style=\"color: #1a2b3c;\" type=\"submit\" class=\"btn btn-sucess\">Enregistrer</button>
                                            </form>
                                        </div>
                                    </di>
                                </div>
                            </div>
                            <!--/.col-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-12\">
            &nbsp;
        </div>
        <!--/.col-->
    </div>
{% endblock %}", "admin/contrat.html.twig", "/var/www/html/File_Rouge/original/soultana.sn/app/Resources/views/admin/contrat.html.twig");
    }
}
