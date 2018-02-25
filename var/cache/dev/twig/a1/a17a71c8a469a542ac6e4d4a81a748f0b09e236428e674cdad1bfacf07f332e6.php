<?php

/* admin/reservation.html.twig */
class __TwigTemplate_3ed7906d5f2e409372f9203a2d1ec3ea3762cd307c7b0ed0de42fb4a403491d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base1.html.twig", "admin/reservation.html.twig", 1);
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
        $__internal_26c7df050b9814ee62710be067fcf0cbdbf91711be3dd9fb1aece64c10445d31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26c7df050b9814ee62710be067fcf0cbdbf91711be3dd9fb1aece64c10445d31->enter($__internal_26c7df050b9814ee62710be067fcf0cbdbf91711be3dd9fb1aece64c10445d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/reservation.html.twig"));

        $__internal_98070317784d87bee5e8a8c6716cb29b991b1accba3ca4d6202f07ec8fb0ffce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98070317784d87bee5e8a8c6716cb29b991b1accba3ca4d6202f07ec8fb0ffce->enter($__internal_98070317784d87bee5e8a8c6716cb29b991b1accba3ca4d6202f07ec8fb0ffce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/reservation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26c7df050b9814ee62710be067fcf0cbdbf91711be3dd9fb1aece64c10445d31->leave($__internal_26c7df050b9814ee62710be067fcf0cbdbf91711be3dd9fb1aece64c10445d31_prof);

        
        $__internal_98070317784d87bee5e8a8c6716cb29b991b1accba3ca4d6202f07ec8fb0ffce->leave($__internal_98070317784d87bee5e8a8c6716cb29b991b1accba3ca4d6202f07ec8fb0ffce_prof);

    }

    // line 2
    public function block_accueil($context, array $blocks = array())
    {
        $__internal_078bdb10c35eb39c39620e5fbbc70d2e079c7c5edc0b78b6599ffd302e46e489 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_078bdb10c35eb39c39620e5fbbc70d2e079c7c5edc0b78b6599ffd302e46e489->enter($__internal_078bdb10c35eb39c39620e5fbbc70d2e079c7c5edc0b78b6599ffd302e46e489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "accueil"));

        $__internal_3d4c67ff2d6210f159a2819e13f5b75c893d943abbd4938891577864c63ac718 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d4c67ff2d6210f159a2819e13f5b75c893d943abbd4938891577864c63ac718->enter($__internal_3d4c67ff2d6210f159a2819e13f5b75c893d943abbd4938891577864c63ac718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "accueil"));

        // line 3
        echo "    ";
        echo "class=\" \"";
        echo "
";
        
        $__internal_3d4c67ff2d6210f159a2819e13f5b75c893d943abbd4938891577864c63ac718->leave($__internal_3d4c67ff2d6210f159a2819e13f5b75c893d943abbd4938891577864c63ac718_prof);

        
        $__internal_078bdb10c35eb39c39620e5fbbc70d2e079c7c5edc0b78b6599ffd302e46e489->leave($__internal_078bdb10c35eb39c39620e5fbbc70d2e079c7c5edc0b78b6599ffd302e46e489_prof);

    }

    // line 5
    public function block_titre_page_li($context, array $blocks = array())
    {
        $__internal_a97a96b5f147a0349dd99e73c44c9a7fc9846788d7bf7a7ffe37ea95f0fcfebb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a97a96b5f147a0349dd99e73c44c9a7fc9846788d7bf7a7ffe37ea95f0fcfebb->enter($__internal_a97a96b5f147a0349dd99e73c44c9a7fc9846788d7bf7a7ffe37ea95f0fcfebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_li"));

        $__internal_5e46d15fc67cfe6513ecc91b4fb010208cc4ed9103b57215fbc5564b47b7ddf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e46d15fc67cfe6513ecc91b4fb010208cc4ed9103b57215fbc5564b47b7ddf9->enter($__internal_5e46d15fc67cfe6513ecc91b4fb010208cc4ed9103b57215fbc5564b47b7ddf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_li"));

        // line 6
        echo "    Réservation
";
        
        $__internal_5e46d15fc67cfe6513ecc91b4fb010208cc4ed9103b57215fbc5564b47b7ddf9->leave($__internal_5e46d15fc67cfe6513ecc91b4fb010208cc4ed9103b57215fbc5564b47b7ddf9_prof);

        
        $__internal_a97a96b5f147a0349dd99e73c44c9a7fc9846788d7bf7a7ffe37ea95f0fcfebb->leave($__internal_a97a96b5f147a0349dd99e73c44c9a7fc9846788d7bf7a7ffe37ea95f0fcfebb_prof);

    }

    // line 8
    public function block_titre_page_h1($context, array $blocks = array())
    {
        $__internal_8b9167f944932af7b462d572cb6e087cbc08b0b3455cdbd7f35ecf9589a4c2af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b9167f944932af7b462d572cb6e087cbc08b0b3455cdbd7f35ecf9589a4c2af->enter($__internal_8b9167f944932af7b462d572cb6e087cbc08b0b3455cdbd7f35ecf9589a4c2af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_h1"));

        $__internal_dca1ea7999a5a8703a109422a2d57eda9835b7f7e253dfede431d3b97c143eb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dca1ea7999a5a8703a109422a2d57eda9835b7f7e253dfede431d3b97c143eb3->enter($__internal_dca1ea7999a5a8703a109422a2d57eda9835b7f7e253dfede431d3b97c143eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_h1"));

        // line 9
        echo "    Gestion des réservations
";
        
        $__internal_dca1ea7999a5a8703a109422a2d57eda9835b7f7e253dfede431d3b97c143eb3->leave($__internal_dca1ea7999a5a8703a109422a2d57eda9835b7f7e253dfede431d3b97c143eb3_prof);

        
        $__internal_8b9167f944932af7b462d572cb6e087cbc08b0b3455cdbd7f35ecf9589a4c2af->leave($__internal_8b9167f944932af7b462d572cb6e087cbc08b0b3455cdbd7f35ecf9589a4c2af_prof);

    }

    // line 11
    public function block_contenus($context, array $blocks = array())
    {
        $__internal_d70d8199621921c2ff0d1895be459c7f617193966c4fc62cdcbc2856d6620554 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d70d8199621921c2ff0d1895be459c7f617193966c4fc62cdcbc2856d6620554->enter($__internal_d70d8199621921c2ff0d1895be459c7f617193966c4fc62cdcbc2856d6620554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        $__internal_48a82180a4c40849c24fafd2963d5272bf5842a69b9f7d58c75d628604e48cec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48a82180a4c40849c24fafd2963d5272bf5842a69b9f7d58c75d628604e48cec->enter($__internal_48a82180a4c40849c24fafd2963d5272bf5842a69b9f7d58c75d628604e48cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        // line 12
        echo "<div class=\"row\">
    <div class=\"col-md-12\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                Liste des demandes de réservation
                <span class=\"pull-right clickable panel-toggle panel-button-tab-left\"><em class=\"fa fa-toggle-up\"></em></span></div>
            <div class=\"panel-body\">
                <div class=\"tableau\">
                    <table class=\"table table-{1:striped|sm|bordered|hover|inverse} table-inverse table-responsive\" id=\"liste_reservation\">
                        <thead class=\"thead-inverse\">
                            <tr id=\"th_1\">
                                <th style=\"width: 47.5%; border-right: 1px solid white; height: 20px;\" colspan=\"4\">Client</th>
                                <th style=\"width: 47.5%; border-right: 1px solid white; height: 20px;\" colspan=\"4\">Bien</th>
                                <th style=\"width: 5%; height: 20px;\" colspan=\"1\">Détails</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr id=\"th_2\">
                                <!-- CLIENT -->
                                <td style=\"width: 2%;\">#</td>
                                <td style=\"width: 17%;\">Prénom & Nom</td>
                                <td style=\"width: 23%;\"> E-mail</td>
                                <td style=\"width: 8%;\">Téléphone</td>
                                <!-- /.CLIENT -->
                                <!-- BIEN -->
                                <td style=\"width: 15%;\">Nom</td>
                                <td style=\"width: 10%;\">Image</td>
                                <td style=\"width: 10%;\">Adresse</td>
                                <td style=\"width: 10%;\">Montant</td>
                                <td style=\"width: 5%;\">&nbsp;</td>
                                <!-- /.BIEN -->
                            </tr>
                            ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reservations"] ?? $this->getContext($context, "reservations")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 45
            echo "                            <tr>
                                <td scope=\"row\">";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "nomClient", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "Client_email", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "Client_telephone", array()), "html", null, true);
            echo "</d>
                                <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "nomBien", array()), "html", null, true);
            echo "</td>
                                <td class=\"bien_photo\"><img src=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["reservation"], "chemin", array())), "html", null, true);
            echo "\"/></td>
                                <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "adresse", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "prixLoc", array()), "html", null, true);
            echo " f</td>
                                <td><a class=\"btn btn-primary voir_detail\" data-idreservation=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "Reservation_id", array()), "html", null, true);
            echo "\" data-idbien=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "Bien_id", array()), "html", null, true);
            echo "\" data-idclient=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "Client_id", array()), "html", null, true);
            echo "\" title=\"Voir les détails\">voir</a></td>
                            </tr>
                            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/.row-->
";
        
        $__internal_48a82180a4c40849c24fafd2963d5272bf5842a69b9f7d58c75d628604e48cec->leave($__internal_48a82180a4c40849c24fafd2963d5272bf5842a69b9f7d58c75d628604e48cec_prof);

        
        $__internal_d70d8199621921c2ff0d1895be459c7f617193966c4fc62cdcbc2856d6620554->leave($__internal_d70d8199621921c2ff0d1895be459c7f617193966c4fc62cdcbc2856d6620554_prof);

    }

    public function getTemplateName()
    {
        return "admin/reservation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 57,  200 => 54,  196 => 53,  192 => 52,  188 => 51,  184 => 50,  180 => 49,  176 => 48,  172 => 47,  168 => 46,  165 => 45,  148 => 44,  114 => 12,  105 => 11,  94 => 9,  85 => 8,  74 => 6,  65 => 5,  52 => 3,  43 => 2,  11 => 1,);
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
<div class=\"row\">
    <div class=\"col-md-12\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                Liste des demandes de réservation
                <span class=\"pull-right clickable panel-toggle panel-button-tab-left\"><em class=\"fa fa-toggle-up\"></em></span></div>
            <div class=\"panel-body\">
                <div class=\"tableau\">
                    <table class=\"table table-{1:striped|sm|bordered|hover|inverse} table-inverse table-responsive\" id=\"liste_reservation\">
                        <thead class=\"thead-inverse\">
                            <tr id=\"th_1\">
                                <th style=\"width: 47.5%; border-right: 1px solid white; height: 20px;\" colspan=\"4\">Client</th>
                                <th style=\"width: 47.5%; border-right: 1px solid white; height: 20px;\" colspan=\"4\">Bien</th>
                                <th style=\"width: 5%; height: 20px;\" colspan=\"1\">Détails</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr id=\"th_2\">
                                <!-- CLIENT -->
                                <td style=\"width: 2%;\">#</td>
                                <td style=\"width: 17%;\">Prénom & Nom</td>
                                <td style=\"width: 23%;\"> E-mail</td>
                                <td style=\"width: 8%;\">Téléphone</td>
                                <!-- /.CLIENT -->
                                <!-- BIEN -->
                                <td style=\"width: 15%;\">Nom</td>
                                <td style=\"width: 10%;\">Image</td>
                                <td style=\"width: 10%;\">Adresse</td>
                                <td style=\"width: 10%;\">Montant</td>
                                <td style=\"width: 5%;\">&nbsp;</td>
                                <!-- /.BIEN -->
                            </tr>
                            {% for reservation in reservations %}
                            <tr>
                                <td scope=\"row\">{{ loop.index }}</td>
                                <td>{{ reservation.nomClient }}</td>
                                <td>{{ reservation.Client_email }}</td>
                                <td>{{ reservation.Client_telephone }}</d>
                                <td>{{ reservation.nomBien}}</td>
                                <td class=\"bien_photo\"><img src=\"{{ asset(reservation.chemin) }}\"/></td>
                                <td>{{ reservation.adresse}}</td>
                                <td>{{ reservation.prixLoc}} f</td>
                                <td><a class=\"btn btn-primary voir_detail\" data-idreservation=\"{{ reservation.Reservation_id }}\" data-idbien=\"{{ reservation.Bien_id }}\" data-idclient=\"{{ reservation.Client_id }}\" title=\"Voir les détails\">voir</a></td>
                            </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/.row-->
{% endblock %}", "admin/reservation.html.twig", "/var/www/html/File_Rouge/original/soultana.sn/app/Resources/views/admin/reservation.html.twig");
    }
}
