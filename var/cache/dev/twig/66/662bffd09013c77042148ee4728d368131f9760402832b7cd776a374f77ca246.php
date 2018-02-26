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
        $__internal_659489418a5f048a3e2eb40e3e54c9ade374d04f0778fde5bdfd1b5106823c3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_659489418a5f048a3e2eb40e3e54c9ade374d04f0778fde5bdfd1b5106823c3e->enter($__internal_659489418a5f048a3e2eb40e3e54c9ade374d04f0778fde5bdfd1b5106823c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/contrat.html.twig"));

        $__internal_52ed9b7aaaa5fea5a8473b969910ce597e29bd766249857e88e08b2c2b4e7cb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52ed9b7aaaa5fea5a8473b969910ce597e29bd766249857e88e08b2c2b4e7cb7->enter($__internal_52ed9b7aaaa5fea5a8473b969910ce597e29bd766249857e88e08b2c2b4e7cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/contrat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_659489418a5f048a3e2eb40e3e54c9ade374d04f0778fde5bdfd1b5106823c3e->leave($__internal_659489418a5f048a3e2eb40e3e54c9ade374d04f0778fde5bdfd1b5106823c3e_prof);

        
        $__internal_52ed9b7aaaa5fea5a8473b969910ce597e29bd766249857e88e08b2c2b4e7cb7->leave($__internal_52ed9b7aaaa5fea5a8473b969910ce597e29bd766249857e88e08b2c2b4e7cb7_prof);

    }

    // line 2
    public function block_accueil($context, array $blocks = array())
    {
        $__internal_23198f0b239885ac04b92a60e0cd8468f20f8f94fe2d98bab4c4b74d01bd2ea7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23198f0b239885ac04b92a60e0cd8468f20f8f94fe2d98bab4c4b74d01bd2ea7->enter($__internal_23198f0b239885ac04b92a60e0cd8468f20f8f94fe2d98bab4c4b74d01bd2ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "accueil"));

        $__internal_d11c91f4f686e6db4107f38b0fcae8241a30966777b18404b013a681526225d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d11c91f4f686e6db4107f38b0fcae8241a30966777b18404b013a681526225d7->enter($__internal_d11c91f4f686e6db4107f38b0fcae8241a30966777b18404b013a681526225d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "accueil"));

        // line 3
        echo "    ";
        echo "class=\" \"";
        echo "
";
        
        $__internal_d11c91f4f686e6db4107f38b0fcae8241a30966777b18404b013a681526225d7->leave($__internal_d11c91f4f686e6db4107f38b0fcae8241a30966777b18404b013a681526225d7_prof);

        
        $__internal_23198f0b239885ac04b92a60e0cd8468f20f8f94fe2d98bab4c4b74d01bd2ea7->leave($__internal_23198f0b239885ac04b92a60e0cd8468f20f8f94fe2d98bab4c4b74d01bd2ea7_prof);

    }

    // line 5
    public function block_titre_page_li($context, array $blocks = array())
    {
        $__internal_ee1dae3d2f144e56746e741b1881c6ffc741fe57df1686489dec13a91d7023d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee1dae3d2f144e56746e741b1881c6ffc741fe57df1686489dec13a91d7023d2->enter($__internal_ee1dae3d2f144e56746e741b1881c6ffc741fe57df1686489dec13a91d7023d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_li"));

        $__internal_1c991f142e3123a965a9370a0d947f3bac507ad93baa177ed75d6887c732f97b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c991f142e3123a965a9370a0d947f3bac507ad93baa177ed75d6887c732f97b->enter($__internal_1c991f142e3123a965a9370a0d947f3bac507ad93baa177ed75d6887c732f97b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_li"));

        // line 6
        echo "    ";
        echo "Réservation";
        echo "
";
        
        $__internal_1c991f142e3123a965a9370a0d947f3bac507ad93baa177ed75d6887c732f97b->leave($__internal_1c991f142e3123a965a9370a0d947f3bac507ad93baa177ed75d6887c732f97b_prof);

        
        $__internal_ee1dae3d2f144e56746e741b1881c6ffc741fe57df1686489dec13a91d7023d2->leave($__internal_ee1dae3d2f144e56746e741b1881c6ffc741fe57df1686489dec13a91d7023d2_prof);

    }

    // line 8
    public function block_titre_page_h1($context, array $blocks = array())
    {
        $__internal_b92f17567afba268ca6e5cf3fdbfdcecd5a1476438c729d40989df649880991d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b92f17567afba268ca6e5cf3fdbfdcecd5a1476438c729d40989df649880991d->enter($__internal_b92f17567afba268ca6e5cf3fdbfdcecd5a1476438c729d40989df649880991d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_h1"));

        $__internal_3f442e11e50b0716c9077b057b5f9f4b9cff2b2fe980543f770213f54264286d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f442e11e50b0716c9077b057b5f9f4b9cff2b2fe980543f770213f54264286d->enter($__internal_3f442e11e50b0716c9077b057b5f9f4b9cff2b2fe980543f770213f54264286d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_h1"));

        // line 9
        echo "    ";
        echo "Gestion des réservations contrat";
        echo "
";
        
        $__internal_3f442e11e50b0716c9077b057b5f9f4b9cff2b2fe980543f770213f54264286d->leave($__internal_3f442e11e50b0716c9077b057b5f9f4b9cff2b2fe980543f770213f54264286d_prof);

        
        $__internal_b92f17567afba268ca6e5cf3fdbfdcecd5a1476438c729d40989df649880991d->leave($__internal_b92f17567afba268ca6e5cf3fdbfdcecd5a1476438c729d40989df649880991d_prof);

    }

    // line 11
    public function block_contenus($context, array $blocks = array())
    {
        $__internal_f72d7598e102fefd0bdb65d12cd830fcde8867ce6cc2ccb2ddccb4d10ce01243 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f72d7598e102fefd0bdb65d12cd830fcde8867ce6cc2ccb2ddccb4d10ce01243->enter($__internal_f72d7598e102fefd0bdb65d12cd830fcde8867ce6cc2ccb2ddccb4d10ce01243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        $__internal_2fd59335de9dbd2151d4efae5f177f2ead0ce17f13048769192f97c7fa429af0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fd59335de9dbd2151d4efae5f177f2ead0ce17f13048769192f97c7fa429af0->enter($__internal_2fd59335de9dbd2151d4efae5f177f2ead0ce17f13048769192f97c7fa429af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

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
                                                    <label>termes et conditions</label>
                                                    <textarea class=\"form-control\" readonly=\"true\" rows=\"15\">
                                                        Partie II– Les éléments de base du langage Python
                                                        II.1. Pourquoi Python ?
                                                        Quelques notions essentielles sur le langage Python
                                                        Python est un langage de programmation généraliste, facile à apprendre et rapide à
                                                        mettre en œuvre.
                                                        Python est généraliste car, selon les multiples réalisations qu'il a à son actif, il peut
                                                        être utilisé dans tous les domaines : écriture d'applications pour le Web (serveur
                                                        d'application Zope, framework Django), programmes de calculs mathématiques
                                                        (biblithèque SciPy), interfaces graphiques (il existe des supports de Python pour les
                                                        sytèmes d'interface graphique GTK, Qt, TK, wxWidget), programmation de scripts
                                                        systèmes, etc.
                                                        De fait, Python dispose d'une très large bibliothèque standard qui offre au
                                                        programmeur des outils très divers pour : la gestion réseau (librairie socket), la
                                                        manipulation du format xml, l'accès aux protocoles d'Internet (protocoles des services
                                                        courriel, divers protocoles web), l'accès aux éléments du système d'exploitation
                                                        sous-jacent (accès aux fichiers et répertoires, gestion des processus), l'écriture
                                                        d'interfaces graphiques (librairie Tkinter), l'accès aux bases de données relationnelles,
                                                        etc.
                                                        Il est aussi possible d'étendre Python en intégrant de nouveaux modules. Par exemple
                                                        la librairie PIL permet de traiter des images.
                                                        [The Python Standard Library: http://docs.python.org/2/library/index.html]
                                                        Python est facile à apprendre car de nombreuses opérations dévolues au programmeur
                                                        dans les langages classiques comme le langage C, par exemple la gestion de la
                                                        mémoire, sont prises en charge par l'interpréteur Python. De même, Python gère
                                                        dynamiquement les variables et libère le programmeur des déclarations de type.
                                                        De plus Python impose d'écrire les blocs d'instructions de manière indentée, ce qui
                                                        favorise grandement la lecture des programmes.
                                                        Enfin, en tant que langage interprété (voir dans la partie I de ce cours), Python est
                                                        rapide à mettre en œuvre. Il suffit de lancer la console Python pour avoir sous la min
                                                        de quoi tester directement des commandes et des structures de données. Cela est un
                                                        gain de temps pour le programmeur par rapport au cycle compilation/édition de liens
                                                        du langage C.
                                                    </textarea>
                                                </div>
                                                <div class=\"radio\">
                                                    <label style=\"font-weight: bold;\">
                                                        <input type=\"radio\" name=\"soumContrat\" class=\"soumContrat\" value=\"accepter\"> Accepter
                                                    </label>
                                                    <label style=\"font-weight: bold;\">
                                                        <input type=\"radio\" name=\"soumContrat\" class=\"soumContrat\" value=\"refuser\"> Refuser
                                                    </label>
                                                </div>
                                                <button style=\"color: #1a2b3c;\" id=\"pushContrat\"  type=\"submit\" class=\"btn btn-sucess\">Enregistrer</button>
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
        
        $__internal_2fd59335de9dbd2151d4efae5f177f2ead0ce17f13048769192f97c7fa429af0->leave($__internal_2fd59335de9dbd2151d4efae5f177f2ead0ce17f13048769192f97c7fa429af0_prof);

        
        $__internal_f72d7598e102fefd0bdb65d12cd830fcde8867ce6cc2ccb2ddccb4d10ce01243->leave($__internal_f72d7598e102fefd0bdb65d12cd830fcde8867ce6cc2ccb2ddccb4d10ce01243_prof);

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
                                                    <label>termes et conditions</label>
                                                    <textarea class=\"form-control\" readonly=\"true\" rows=\"15\">
                                                        Partie II– Les éléments de base du langage Python
                                                        II.1. Pourquoi Python ?
                                                        Quelques notions essentielles sur le langage Python
                                                        Python est un langage de programmation généraliste, facile à apprendre et rapide à
                                                        mettre en œuvre.
                                                        Python est généraliste car, selon les multiples réalisations qu'il a à son actif, il peut
                                                        être utilisé dans tous les domaines : écriture d'applications pour le Web (serveur
                                                        d'application Zope, framework Django), programmes de calculs mathématiques
                                                        (biblithèque SciPy), interfaces graphiques (il existe des supports de Python pour les
                                                        sytèmes d'interface graphique GTK, Qt, TK, wxWidget), programmation de scripts
                                                        systèmes, etc.
                                                        De fait, Python dispose d'une très large bibliothèque standard qui offre au
                                                        programmeur des outils très divers pour : la gestion réseau (librairie socket), la
                                                        manipulation du format xml, l'accès aux protocoles d'Internet (protocoles des services
                                                        courriel, divers protocoles web), l'accès aux éléments du système d'exploitation
                                                        sous-jacent (accès aux fichiers et répertoires, gestion des processus), l'écriture
                                                        d'interfaces graphiques (librairie Tkinter), l'accès aux bases de données relationnelles,
                                                        etc.
                                                        Il est aussi possible d'étendre Python en intégrant de nouveaux modules. Par exemple
                                                        la librairie PIL permet de traiter des images.
                                                        [The Python Standard Library: http://docs.python.org/2/library/index.html]
                                                        Python est facile à apprendre car de nombreuses opérations dévolues au programmeur
                                                        dans les langages classiques comme le langage C, par exemple la gestion de la
                                                        mémoire, sont prises en charge par l'interpréteur Python. De même, Python gère
                                                        dynamiquement les variables et libère le programmeur des déclarations de type.
                                                        De plus Python impose d'écrire les blocs d'instructions de manière indentée, ce qui
                                                        favorise grandement la lecture des programmes.
                                                        Enfin, en tant que langage interprété (voir dans la partie I de ce cours), Python est
                                                        rapide à mettre en œuvre. Il suffit de lancer la console Python pour avoir sous la min
                                                        de quoi tester directement des commandes et des structures de données. Cela est un
                                                        gain de temps pour le programmeur par rapport au cycle compilation/édition de liens
                                                        du langage C.
                                                    </textarea>
                                                </div>
                                                <div class=\"radio\">
                                                    <label style=\"font-weight: bold;\">
                                                        <input type=\"radio\" name=\"soumContrat\" class=\"soumContrat\" value=\"accepter\"> Accepter
                                                    </label>
                                                    <label style=\"font-weight: bold;\">
                                                        <input type=\"radio\" name=\"soumContrat\" class=\"soumContrat\" value=\"refuser\"> Refuser
                                                    </label>
                                                </div>
                                                <button style=\"color: #1a2b3c;\" id=\"pushContrat\"  type=\"submit\" class=\"btn btn-sucess\">Enregistrer</button>
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
