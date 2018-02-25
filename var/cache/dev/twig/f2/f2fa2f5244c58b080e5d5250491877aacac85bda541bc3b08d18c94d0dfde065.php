<?php

/* admin/detail.html.twig */
class __TwigTemplate_e0352f7c1d1322bfe2997d7b65d72a542c19823f168e1978285d1b856d6d83bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base1.html.twig", "admin/detail.html.twig", 1);
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
        $__internal_da6651e499b2a10648e7a116bdf2261e73b018673f7b4b4e01e2256db09c1185 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da6651e499b2a10648e7a116bdf2261e73b018673f7b4b4e01e2256db09c1185->enter($__internal_da6651e499b2a10648e7a116bdf2261e73b018673f7b4b4e01e2256db09c1185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/detail.html.twig"));

        $__internal_91134b2f13915e66c4b34ac5f1fc4c77754b5781fd30b4279c921759117cca93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91134b2f13915e66c4b34ac5f1fc4c77754b5781fd30b4279c921759117cca93->enter($__internal_91134b2f13915e66c4b34ac5f1fc4c77754b5781fd30b4279c921759117cca93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da6651e499b2a10648e7a116bdf2261e73b018673f7b4b4e01e2256db09c1185->leave($__internal_da6651e499b2a10648e7a116bdf2261e73b018673f7b4b4e01e2256db09c1185_prof);

        
        $__internal_91134b2f13915e66c4b34ac5f1fc4c77754b5781fd30b4279c921759117cca93->leave($__internal_91134b2f13915e66c4b34ac5f1fc4c77754b5781fd30b4279c921759117cca93_prof);

    }

    // line 2
    public function block_accueil($context, array $blocks = array())
    {
        $__internal_af8bebc9f08d9d392d762929b9120c26f6b700df44c3c15e47fda10f7ca050ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af8bebc9f08d9d392d762929b9120c26f6b700df44c3c15e47fda10f7ca050ab->enter($__internal_af8bebc9f08d9d392d762929b9120c26f6b700df44c3c15e47fda10f7ca050ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "accueil"));

        $__internal_c03ce1816d42fc27a4fcd7ee9ee6ad36a996588148e6973d486fd22988ed3e43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c03ce1816d42fc27a4fcd7ee9ee6ad36a996588148e6973d486fd22988ed3e43->enter($__internal_c03ce1816d42fc27a4fcd7ee9ee6ad36a996588148e6973d486fd22988ed3e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "accueil"));

        // line 3
        echo "    ";
        echo "class=\" \"";
        echo "
";
        
        $__internal_c03ce1816d42fc27a4fcd7ee9ee6ad36a996588148e6973d486fd22988ed3e43->leave($__internal_c03ce1816d42fc27a4fcd7ee9ee6ad36a996588148e6973d486fd22988ed3e43_prof);

        
        $__internal_af8bebc9f08d9d392d762929b9120c26f6b700df44c3c15e47fda10f7ca050ab->leave($__internal_af8bebc9f08d9d392d762929b9120c26f6b700df44c3c15e47fda10f7ca050ab_prof);

    }

    // line 5
    public function block_titre_page_li($context, array $blocks = array())
    {
        $__internal_c8d15c21ffcb8c0c6e75f350b125387c2dfe4d38f7878a1a6ea877d5d48539f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8d15c21ffcb8c0c6e75f350b125387c2dfe4d38f7878a1a6ea877d5d48539f5->enter($__internal_c8d15c21ffcb8c0c6e75f350b125387c2dfe4d38f7878a1a6ea877d5d48539f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_li"));

        $__internal_b28888ba5bde56c9fec497982f2788af17d2f2d700de96ab22f9409870493783 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b28888ba5bde56c9fec497982f2788af17d2f2d700de96ab22f9409870493783->enter($__internal_b28888ba5bde56c9fec497982f2788af17d2f2d700de96ab22f9409870493783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_li"));

        // line 6
        echo "    Réservation
";
        
        $__internal_b28888ba5bde56c9fec497982f2788af17d2f2d700de96ab22f9409870493783->leave($__internal_b28888ba5bde56c9fec497982f2788af17d2f2d700de96ab22f9409870493783_prof);

        
        $__internal_c8d15c21ffcb8c0c6e75f350b125387c2dfe4d38f7878a1a6ea877d5d48539f5->leave($__internal_c8d15c21ffcb8c0c6e75f350b125387c2dfe4d38f7878a1a6ea877d5d48539f5_prof);

    }

    // line 8
    public function block_titre_page_h1($context, array $blocks = array())
    {
        $__internal_d5422614c3e34653c586b4ddf757ed12c94ac67436a1c75e7ec3efc1c5374376 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5422614c3e34653c586b4ddf757ed12c94ac67436a1c75e7ec3efc1c5374376->enter($__internal_d5422614c3e34653c586b4ddf757ed12c94ac67436a1c75e7ec3efc1c5374376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_h1"));

        $__internal_18d02a61ffacdfa03b814b7301f5003d14ec34cc9003af3e0d4caa16e12b397c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18d02a61ffacdfa03b814b7301f5003d14ec34cc9003af3e0d4caa16e12b397c->enter($__internal_18d02a61ffacdfa03b814b7301f5003d14ec34cc9003af3e0d4caa16e12b397c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_h1"));

        // line 9
        echo "    Gestion des réservations
";
        
        $__internal_18d02a61ffacdfa03b814b7301f5003d14ec34cc9003af3e0d4caa16e12b397c->leave($__internal_18d02a61ffacdfa03b814b7301f5003d14ec34cc9003af3e0d4caa16e12b397c_prof);

        
        $__internal_d5422614c3e34653c586b4ddf757ed12c94ac67436a1c75e7ec3efc1c5374376->leave($__internal_d5422614c3e34653c586b4ddf757ed12c94ac67436a1c75e7ec3efc1c5374376_prof);

    }

    // line 11
    public function block_contenus($context, array $blocks = array())
    {
        $__internal_b4c979b42a02867b3c514dcd64959e740d5ff615fb082ace1b5ede54848c3408 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4c979b42a02867b3c514dcd64959e740d5ff615fb082ace1b5ede54848c3408->enter($__internal_b4c979b42a02867b3c514dcd64959e740d5ff615fb082ace1b5ede54848c3408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        $__internal_fd6cfdc24a449f9937a5f218f57bf8277abf9a89f18e25ffd93077d29e0da923 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd6cfdc24a449f9937a5f218f57bf8277abf9a89f18e25ffd93077d29e0da923->enter($__internal_fd6cfdc24a449f9937a5f218f57bf8277abf9a89f18e25ffd93077d29e0da923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        // line 12
        echo "    <div class=\"row\" id=\"charge_detail\">
        <div class=\"col-md-12\">
            <div class=\"panel panel-default dark-overlay\">
                <div class=\"panel-heading\">Détail du demande de réservation faites par ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "nomClient", array()), "html", null, true);
        echo "
                    <span class=\"pull-right clickable panel-toggle  panel-button-tab-left\"><em class=\"fa fa-toggle-up\"></em></span>
                </div>
                <div class=\"panel-body row\">
                    <div class=\"col-md-4\">
                        <div class=\"panel panel-primary panel-body\">
                            <img style=\"margin:0; padding:0; width:100%;\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "chemin", array())), "html", null, true);
        echo "\" alt=\"\"/>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"panel panel-primary panel-body\">
                            <img style=\"margin:0; padding:0; width:100%;\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "chemin", array())), "html", null, true);
        echo "\" alt=\"\"/>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"panel panel-primary panel-body\">
                            <img style=\"margin:0; padding:0; width:100%;\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "chemin", array())), "html", null, true);
        echo "\" alt=\"\"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.col-->
        <div class=\"col-md-6\">
            <div class=\"panel panel-blue\">
                <div class=\"panel-heading dark-overlay\">Détails du bien
                    <span class=\"pull-right clickable panel-toggle\"><em class=\"fa fa-toggle-up\"></em></span>
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
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "nomBien", array()), "html", null, true);
        echo " </span>
                        </li>
                        <li>
                            <span class=\"faux_droite\"> ";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "adresse", array()), "html", null, true);
        echo " </span>
                        </li>
                        <li>
                            <span class=\"faux_droite\"> ";
        // line 75
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "nomVille", array()) . ", ") . $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "nomQuartier", array())), "html", null, true);
        echo " </span>
                        </li>
                        <li>
                            <span class=\"faux_droite\"> ";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "nomTypeBien", array()), "html", null, true);
        echo " </span>
                        </li>
                        <li>
                            <span class=\"faux_droite\"> ";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "nomComplet", array()), "html", null, true);
        echo " </span>
                        </li>
                        <li>
                            <span class=\"faux_droite\"> ";
        // line 84
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
        <div class=\"col-md-6\">
            <div class=\"panel panel-blue\">
                <div class=\"panel-heading dark-overlay\">Détails du client
                    <span class=\"pull-right clickable panel-toggle\"><em class=\"fa fa-toggle-up\"></em></span>
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
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "nomClient", array()), "html", null, true);
        echo " </span>
                        </li>
                        <li>
                            <span class=\"faux_droite\"> ";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "Client_cni", array()), "html", null, true);
        echo " </span>
                        </li>
                        <li>
                            <span class=\"faux_droite\"> ";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "Client_adresse", array()), "html", null, true);
        echo " </span>
                        </li>
                        <li>
                            <span class=\"faux_droite\"> ";
        // line 128
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "Client_email", array()), "html", null, true);
        echo " </span>
                        </li>
                        <li>
                            <span class=\"faux_droite\"> ";
        // line 131
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "Client_telephone", array()), "html", null, true);
        echo " </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"col-md-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\"> Description
                    <span class=\"pull-right clickable panel-toggle  panel-button-tab-left\"><em class=\"fa fa-toggle-up\"></em></span>
                </div>
                <div class=\"panel-body row\">
                    <div class=\"col-md-12\">
                        <div class=\"panel panel-primary panel-body\">
                            <p>
                                ";
        // line 146
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "description", array()), "html", null, true);
        echo "
                            </p>
                            <div class=\"panel-body row\">
                                <ul class=\"col-md-6 ul_description\">
                                    <li class=\"row\">
                                        <span class=\"ele_description col-md-8\"> Meublé </span> <span class=\"reponse_description col-md-2\">";
        // line 151
        if (($this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "meuble", array()) == false)) {
            echo "Non";
        } else {
            echo "Oui";
        }
        echo "</span>
                                    </li>
                                    <li class=\"row\">
                                        <span class=\"ele_description col-md-8\"> balcon </span> <span class=\"reponse_description col-md-2\">";
        // line 154
        if (($this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "balcon", array()) == false)) {
            echo "Non";
        } else {
            echo "Oui";
        }
        echo "</span>
                                    </l>
                                    <li class=\"row\">
                                        <span class=\"ele_description col-md-8\"> parking </span> <span class=\"reponse_description col-md-2\">";
        // line 157
        if (($this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "parking", array()) == false)) {
            echo "Non";
        } else {
            echo "Oui";
        }
        echo "</span>
                                    </li>
                                </ul>
                                <ul class=\"col-md-6 ul_description\">
                                    <li class=\"row\">
                                        <span class=\"ele_description col-md-8\"> Surface </span> <span class=\"reponse_description col-md-2\">";
        // line 162
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "surface", array()), "html", null, true);
        echo "</span>
                                    </li>
                                    <li class=\"row\">
                                        <span class=\"ele_description col-md-8\"> chambre à coucher </span> <span class=\"reponse_description col-md-2\">";
        // line 165
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "nbreChambre", array()), "html", null, true);
        echo "</span>
                                    </li>
                                    <li class=\"row\">
                                        <span class=\"ele_description col-md-8\"> salle de bain </span> <span class=\"reponse_description col-md-2\">";
        // line 168
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "nbreSallebain", array()), "html", null, true);
        echo "</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row col-sm-12\">
            <span class=\"col-sm-3\">&nbsp;</span>
            <a class=\"btn btn-lg btn-primary col-sm-2\" id=\"btn_annuler_reserve\">Annuler</a>
            <span class=\"col-sm-2\">&nbsp;</span>
            <a class=\"btn btn-lg btn-primary col-sm-2\" id=\"btn_valider_reserve\" data-idreservation=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "Reservation_id", array()), "html", null, true);
        echo "\" data-idbien=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "Bien_id", array()), "html", null, true);
        echo "\" data-idclient=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["reservation"] ?? $this->getContext($context, "reservation")), 0, array(), "array"), "Client_id", array()), "html", null, true);
        echo "\">Valider</a>
            <span class=\"col-sm-3\">&nbsp;</span>
        </div>
        <div class=\"col-sm-12\">
            &nbsp;
        </div>
        <!--/.col-->
    </div>
";
        
        $__internal_fd6cfdc24a449f9937a5f218f57bf8277abf9a89f18e25ffd93077d29e0da923->leave($__internal_fd6cfdc24a449f9937a5f218f57bf8277abf9a89f18e25ffd93077d29e0da923_prof);

        
        $__internal_b4c979b42a02867b3c514dcd64959e740d5ff615fb082ace1b5ede54848c3408->leave($__internal_b4c979b42a02867b3c514dcd64959e740d5ff615fb082ace1b5ede54848c3408_prof);

    }

    public function getTemplateName()
    {
        return "admin/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  363 => 181,  347 => 168,  341 => 165,  335 => 162,  323 => 157,  313 => 154,  303 => 151,  295 => 146,  277 => 131,  271 => 128,  265 => 125,  259 => 122,  253 => 119,  215 => 84,  209 => 81,  203 => 78,  197 => 75,  191 => 72,  185 => 69,  144 => 31,  136 => 26,  128 => 21,  119 => 15,  114 => 12,  105 => 11,  94 => 9,  85 => 8,  74 => 6,  65 => 5,  52 => 3,  43 => 2,  11 => 1,);
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
    Réservation
{% endblock %}
{% block titre_page_h1 %}
    Gestion des réservations
{% endblock %}
{% block contenus %}
    <div class=\"row\" id=\"charge_detail\">
        <div class=\"col-md-12\">
            <div class=\"panel panel-default dark-overlay\">
                <div class=\"panel-heading\">Détail du demande de réservation faites par {{ reservation[0].nomClient }}
                    <span class=\"pull-right clickable panel-toggle  panel-button-tab-left\"><em class=\"fa fa-toggle-up\"></em></span>
                </div>
                <div class=\"panel-body row\">
                    <div class=\"col-md-4\">
                        <div class=\"panel panel-primary panel-body\">
                            <img style=\"margin:0; padding:0; width:100%;\" src=\"{{asset(reservation[0].chemin)}}\" alt=\"\"/>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"panel panel-primary panel-body\">
                            <img style=\"margin:0; padding:0; width:100%;\" src=\"{{asset(reservation[0].chemin)}}\" alt=\"\"/>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"panel panel-primary panel-body\">
                            <img style=\"margin:0; padding:0; width:100%;\" src=\"{{asset(reservation[0].chemin)}}\" alt=\"\"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.col-->
        <div class=\"col-md-6\">
            <div class=\"panel panel-blue\">
                <div class=\"panel-heading dark-overlay\">Détails du bien
                    <span class=\"pull-right clickable panel-toggle\"><em class=\"fa fa-toggle-up\"></em></span>
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
        <div class=\"col-md-6\">
            <div class=\"panel panel-blue\">
                <div class=\"panel-heading dark-overlay\">Détails du client
                    <span class=\"pull-right clickable panel-toggle\"><em class=\"fa fa-toggle-up\"></em></span>
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
        <div class=\"col-md-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-heading\"> Description
                    <span class=\"pull-right clickable panel-toggle  panel-button-tab-left\"><em class=\"fa fa-toggle-up\"></em></span>
                </div>
                <div class=\"panel-body row\">
                    <div class=\"col-md-12\">
                        <div class=\"panel panel-primary panel-body\">
                            <p>
                                {{ reservation[0].description }}
                            </p>
                            <div class=\"panel-body row\">
                                <ul class=\"col-md-6 ul_description\">
                                    <li class=\"row\">
                                        <span class=\"ele_description col-md-8\"> Meublé </span> <span class=\"reponse_description col-md-2\">{% if reservation[0].meuble == false %}Non{% else %}Oui{% endif %}</span>
                                    </li>
                                    <li class=\"row\">
                                        <span class=\"ele_description col-md-8\"> balcon </span> <span class=\"reponse_description col-md-2\">{% if reservation[0].balcon == false %}Non{% else %}Oui{% endif %}</span>
                                    </l>
                                    <li class=\"row\">
                                        <span class=\"ele_description col-md-8\"> parking </span> <span class=\"reponse_description col-md-2\">{% if reservation[0].parking == false %}Non{% else %}Oui{% endif %}</span>
                                    </li>
                                </ul>
                                <ul class=\"col-md-6 ul_description\">
                                    <li class=\"row\">
                                        <span class=\"ele_description col-md-8\"> Surface </span> <span class=\"reponse_description col-md-2\">{{ reservation[0].surface }}</span>
                                    </li>
                                    <li class=\"row\">
                                        <span class=\"ele_description col-md-8\"> chambre à coucher </span> <span class=\"reponse_description col-md-2\">{{ reservation[0].nbreChambre }}</span>
                                    </li>
                                    <li class=\"row\">
                                        <span class=\"ele_description col-md-8\"> salle de bain </span> <span class=\"reponse_description col-md-2\">{{ reservation[0].nbreSallebain }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row col-sm-12\">
            <span class=\"col-sm-3\">&nbsp;</span>
            <a class=\"btn btn-lg btn-primary col-sm-2\" id=\"btn_annuler_reserve\">Annuler</a>
            <span class=\"col-sm-2\">&nbsp;</span>
            <a class=\"btn btn-lg btn-primary col-sm-2\" id=\"btn_valider_reserve\" data-idreservation=\"{{ reservation[0].Reservation_id }}\" data-idbien=\"{{ reservation[0].Bien_id }}\" data-idclient=\"{{ reservation[0].Client_id }}\">Valider</a>
            <span class=\"col-sm-3\">&nbsp;</span>
        </div>
        <div class=\"col-sm-12\">
            &nbsp;
        </div>
        <!--/.col-->
    </div>
{% endblock %}", "admin/detail.html.twig", "/var/www/html/File_Rouge/original/soultana.sn/app/Resources/views/admin/detail.html.twig");
    }
}
