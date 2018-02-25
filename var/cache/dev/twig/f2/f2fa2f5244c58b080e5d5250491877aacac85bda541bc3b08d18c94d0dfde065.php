<?php

/* :admin:detail.html.twig */
class __TwigTemplate_e0352f7c1d1322bfe2997d7b65d72a542c19823f168e1978285d1b856d6d83bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base1.html.twig", ":admin:detail.html.twig", 1);
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
        $__internal_58da368d832c09a04b71d7e0cf5d0531d24cc8ab192f6873315692bff76517a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58da368d832c09a04b71d7e0cf5d0531d24cc8ab192f6873315692bff76517a0->enter($__internal_58da368d832c09a04b71d7e0cf5d0531d24cc8ab192f6873315692bff76517a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:detail.html.twig"));

        $__internal_c560ed8502f3cb19126508f11b1a0e68b8e81f01e27c8c9110a8c996d0701bf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c560ed8502f3cb19126508f11b1a0e68b8e81f01e27c8c9110a8c996d0701bf2->enter($__internal_c560ed8502f3cb19126508f11b1a0e68b8e81f01e27c8c9110a8c996d0701bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58da368d832c09a04b71d7e0cf5d0531d24cc8ab192f6873315692bff76517a0->leave($__internal_58da368d832c09a04b71d7e0cf5d0531d24cc8ab192f6873315692bff76517a0_prof);

        
        $__internal_c560ed8502f3cb19126508f11b1a0e68b8e81f01e27c8c9110a8c996d0701bf2->leave($__internal_c560ed8502f3cb19126508f11b1a0e68b8e81f01e27c8c9110a8c996d0701bf2_prof);

    }

    // line 2
    public function block_accueil($context, array $blocks = array())
    {
        $__internal_45bd7f24e305c6ba26fcc0c32e631f7d49e246e600fec7259169b4b2cdb1ceee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45bd7f24e305c6ba26fcc0c32e631f7d49e246e600fec7259169b4b2cdb1ceee->enter($__internal_45bd7f24e305c6ba26fcc0c32e631f7d49e246e600fec7259169b4b2cdb1ceee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "accueil"));

        $__internal_b69cd0cf9694c561f631d74c4c0987d47de4bf9b4f113867c4992b011295ecbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b69cd0cf9694c561f631d74c4c0987d47de4bf9b4f113867c4992b011295ecbe->enter($__internal_b69cd0cf9694c561f631d74c4c0987d47de4bf9b4f113867c4992b011295ecbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "accueil"));

        // line 3
        echo "    ";
        echo "class=\" \"";
        echo "
";
        
        $__internal_b69cd0cf9694c561f631d74c4c0987d47de4bf9b4f113867c4992b011295ecbe->leave($__internal_b69cd0cf9694c561f631d74c4c0987d47de4bf9b4f113867c4992b011295ecbe_prof);

        
        $__internal_45bd7f24e305c6ba26fcc0c32e631f7d49e246e600fec7259169b4b2cdb1ceee->leave($__internal_45bd7f24e305c6ba26fcc0c32e631f7d49e246e600fec7259169b4b2cdb1ceee_prof);

    }

    // line 5
    public function block_titre_page_li($context, array $blocks = array())
    {
        $__internal_7434c87da8b81f7968cdda5c9d88c5308313310b4af687f22ee1f250bcbee707 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7434c87da8b81f7968cdda5c9d88c5308313310b4af687f22ee1f250bcbee707->enter($__internal_7434c87da8b81f7968cdda5c9d88c5308313310b4af687f22ee1f250bcbee707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_li"));

        $__internal_2822b9bc5fa82f86765d57e8d56aa0f22e4f5e861402067462207f5b18e76bbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2822b9bc5fa82f86765d57e8d56aa0f22e4f5e861402067462207f5b18e76bbf->enter($__internal_2822b9bc5fa82f86765d57e8d56aa0f22e4f5e861402067462207f5b18e76bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_li"));

        // line 6
        echo "    Réservation
";
        
        $__internal_2822b9bc5fa82f86765d57e8d56aa0f22e4f5e861402067462207f5b18e76bbf->leave($__internal_2822b9bc5fa82f86765d57e8d56aa0f22e4f5e861402067462207f5b18e76bbf_prof);

        
        $__internal_7434c87da8b81f7968cdda5c9d88c5308313310b4af687f22ee1f250bcbee707->leave($__internal_7434c87da8b81f7968cdda5c9d88c5308313310b4af687f22ee1f250bcbee707_prof);

    }

    // line 8
    public function block_titre_page_h1($context, array $blocks = array())
    {
        $__internal_524076dfa66a35c9d64ee1b3f0f8ecab63c0029d0e91f459e28f7f965be1ae15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_524076dfa66a35c9d64ee1b3f0f8ecab63c0029d0e91f459e28f7f965be1ae15->enter($__internal_524076dfa66a35c9d64ee1b3f0f8ecab63c0029d0e91f459e28f7f965be1ae15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_h1"));

        $__internal_477b5fb49c021d7c50c953e0bf42a88ac246e432012cc07101e4b45080c5481f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_477b5fb49c021d7c50c953e0bf42a88ac246e432012cc07101e4b45080c5481f->enter($__internal_477b5fb49c021d7c50c953e0bf42a88ac246e432012cc07101e4b45080c5481f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_h1"));

        // line 9
        echo "    Gestion des réservations
";
        
        $__internal_477b5fb49c021d7c50c953e0bf42a88ac246e432012cc07101e4b45080c5481f->leave($__internal_477b5fb49c021d7c50c953e0bf42a88ac246e432012cc07101e4b45080c5481f_prof);

        
        $__internal_524076dfa66a35c9d64ee1b3f0f8ecab63c0029d0e91f459e28f7f965be1ae15->leave($__internal_524076dfa66a35c9d64ee1b3f0f8ecab63c0029d0e91f459e28f7f965be1ae15_prof);

    }

    // line 11
    public function block_contenus($context, array $blocks = array())
    {
        $__internal_4fc40beba4756e65500a24b63f189562487a669a8573bcff4435ed7639833ac3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fc40beba4756e65500a24b63f189562487a669a8573bcff4435ed7639833ac3->enter($__internal_4fc40beba4756e65500a24b63f189562487a669a8573bcff4435ed7639833ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        $__internal_2bcfbf991eb9d1fcf6009d04a04eb7b42936d1f280d18178aeab0ccd06f5e38e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bcfbf991eb9d1fcf6009d04a04eb7b42936d1f280d18178aeab0ccd06f5e38e->enter($__internal_2bcfbf991eb9d1fcf6009d04a04eb7b42936d1f280d18178aeab0ccd06f5e38e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

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
                            <span class=\"droite\"> montant location </span> :
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
        <div class=\"row col-sm-12\">
            <span class=\"col-sm-3\">&nbsp;</span>
            <a class=\"btn btn-lg btn-primary col-sm-2\" id=\"btn_annuler_reserve\">Annuler</a>
            <span class=\"col-sm-2\">&nbsp;</span>
            <a class=\"btn btn-lg btn-primary col-sm-2\" id=\"btn_valider_reserve\" data-idreservation=\"";
        // line 141
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
        
        $__internal_2bcfbf991eb9d1fcf6009d04a04eb7b42936d1f280d18178aeab0ccd06f5e38e->leave($__internal_2bcfbf991eb9d1fcf6009d04a04eb7b42936d1f280d18178aeab0ccd06f5e38e_prof);

        
        $__internal_4fc40beba4756e65500a24b63f189562487a669a8573bcff4435ed7639833ac3->leave($__internal_4fc40beba4756e65500a24b63f189562487a669a8573bcff4435ed7639833ac3_prof);

    }

    public function getTemplateName()
    {
        return ":admin:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 141,  277 => 131,  271 => 128,  265 => 125,  259 => 122,  253 => 119,  215 => 84,  209 => 81,  203 => 78,  197 => 75,  191 => 72,  185 => 69,  144 => 31,  136 => 26,  128 => 21,  119 => 15,  114 => 12,  105 => 11,  94 => 9,  85 => 8,  74 => 6,  65 => 5,  52 => 3,  43 => 2,  11 => 1,);
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
                            <span class=\"droite\"> montant location </span> :
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
{% endblock %}", ":admin:detail.html.twig", "/var/www/html/File_Rouge/original/soultana.sn/app/Resources/views/admin/detail.html.twig");
    }
}
