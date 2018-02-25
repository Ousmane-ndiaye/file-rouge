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
        $__internal_98f27f9231348bfc7504c5fea040a9859cce0e504036861eedfa4eeba0f673e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98f27f9231348bfc7504c5fea040a9859cce0e504036861eedfa4eeba0f673e4->enter($__internal_98f27f9231348bfc7504c5fea040a9859cce0e504036861eedfa4eeba0f673e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/reservation.html.twig"));

        $__internal_f5c3c3f24de81428395977dc6cdeef42ee98d4742fdc4a43543ad4738fdc8eb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5c3c3f24de81428395977dc6cdeef42ee98d4742fdc4a43543ad4738fdc8eb6->enter($__internal_f5c3c3f24de81428395977dc6cdeef42ee98d4742fdc4a43543ad4738fdc8eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/reservation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98f27f9231348bfc7504c5fea040a9859cce0e504036861eedfa4eeba0f673e4->leave($__internal_98f27f9231348bfc7504c5fea040a9859cce0e504036861eedfa4eeba0f673e4_prof);

        
        $__internal_f5c3c3f24de81428395977dc6cdeef42ee98d4742fdc4a43543ad4738fdc8eb6->leave($__internal_f5c3c3f24de81428395977dc6cdeef42ee98d4742fdc4a43543ad4738fdc8eb6_prof);

    }

    // line 2
    public function block_accueil($context, array $blocks = array())
    {
        $__internal_c460adc2b052b069084f129fcbd5aeca85ed53df79727f9d2b1ca19d905a659c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c460adc2b052b069084f129fcbd5aeca85ed53df79727f9d2b1ca19d905a659c->enter($__internal_c460adc2b052b069084f129fcbd5aeca85ed53df79727f9d2b1ca19d905a659c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "accueil"));

        $__internal_d2e7528a81295733897407c97b989824818046a30a84f663fdd186b5ac8b3998 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2e7528a81295733897407c97b989824818046a30a84f663fdd186b5ac8b3998->enter($__internal_d2e7528a81295733897407c97b989824818046a30a84f663fdd186b5ac8b3998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "accueil"));

        // line 3
        echo "    ";
        echo "class=\" \"";
        echo "
";
        
        $__internal_d2e7528a81295733897407c97b989824818046a30a84f663fdd186b5ac8b3998->leave($__internal_d2e7528a81295733897407c97b989824818046a30a84f663fdd186b5ac8b3998_prof);

        
        $__internal_c460adc2b052b069084f129fcbd5aeca85ed53df79727f9d2b1ca19d905a659c->leave($__internal_c460adc2b052b069084f129fcbd5aeca85ed53df79727f9d2b1ca19d905a659c_prof);

    }

    // line 5
    public function block_titre_page_li($context, array $blocks = array())
    {
        $__internal_6ac85a8a9c5d99aaab308be74667be98fd7c4b5cbdb292c761f5d9fbe5f7efc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ac85a8a9c5d99aaab308be74667be98fd7c4b5cbdb292c761f5d9fbe5f7efc3->enter($__internal_6ac85a8a9c5d99aaab308be74667be98fd7c4b5cbdb292c761f5d9fbe5f7efc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_li"));

        $__internal_3bb7fdfa8707ed16af861a820ca4a829ec512ef77f4f37553c0d04d4e361803b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bb7fdfa8707ed16af861a820ca4a829ec512ef77f4f37553c0d04d4e361803b->enter($__internal_3bb7fdfa8707ed16af861a820ca4a829ec512ef77f4f37553c0d04d4e361803b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_li"));

        // line 6
        echo "    Réservation
";
        
        $__internal_3bb7fdfa8707ed16af861a820ca4a829ec512ef77f4f37553c0d04d4e361803b->leave($__internal_3bb7fdfa8707ed16af861a820ca4a829ec512ef77f4f37553c0d04d4e361803b_prof);

        
        $__internal_6ac85a8a9c5d99aaab308be74667be98fd7c4b5cbdb292c761f5d9fbe5f7efc3->leave($__internal_6ac85a8a9c5d99aaab308be74667be98fd7c4b5cbdb292c761f5d9fbe5f7efc3_prof);

    }

    // line 8
    public function block_titre_page_h1($context, array $blocks = array())
    {
        $__internal_c089c29a0ff9b9755fd97cc7d02bf22a7adf3020a01128fb1e77a9a9f599cdb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c089c29a0ff9b9755fd97cc7d02bf22a7adf3020a01128fb1e77a9a9f599cdb8->enter($__internal_c089c29a0ff9b9755fd97cc7d02bf22a7adf3020a01128fb1e77a9a9f599cdb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_h1"));

        $__internal_62c2b9b9e691c13af9b0313d87e4a6d9d623bf6bf27ad37603d6a87f6224cd39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62c2b9b9e691c13af9b0313d87e4a6d9d623bf6bf27ad37603d6a87f6224cd39->enter($__internal_62c2b9b9e691c13af9b0313d87e4a6d9d623bf6bf27ad37603d6a87f6224cd39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_h1"));

        // line 9
        echo "    Gestion des réservations
";
        
        $__internal_62c2b9b9e691c13af9b0313d87e4a6d9d623bf6bf27ad37603d6a87f6224cd39->leave($__internal_62c2b9b9e691c13af9b0313d87e4a6d9d623bf6bf27ad37603d6a87f6224cd39_prof);

        
        $__internal_c089c29a0ff9b9755fd97cc7d02bf22a7adf3020a01128fb1e77a9a9f599cdb8->leave($__internal_c089c29a0ff9b9755fd97cc7d02bf22a7adf3020a01128fb1e77a9a9f599cdb8_prof);

    }

    // line 11
    public function block_contenus($context, array $blocks = array())
    {
        $__internal_850344d4c559349a08b9763900a06fce4d31c5286da1c15125af16c7e8f5c4d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_850344d4c559349a08b9763900a06fce4d31c5286da1c15125af16c7e8f5c4d8->enter($__internal_850344d4c559349a08b9763900a06fce4d31c5286da1c15125af16c7e8f5c4d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        $__internal_ece771a67edd9f719de1e5e8e4c7778eade7eb516a9d2c18f792672ed94a6a12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ece771a67edd9f719de1e5e8e4c7778eade7eb516a9d2c18f792672ed94a6a12->enter($__internal_ece771a67edd9f719de1e5e8e4c7778eade7eb516a9d2c18f792672ed94a6a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        // line 12
        echo "<div class=\"row\" id=\"charge_reservation\">
    <div class=\"col-md-12\" id=\"tableau\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                Liste des demandes de réservation
                <span class=\"pull-right clickable panel-toggle panel-button-tab-left\"><em class=\"fa fa-toggle-up\"></em></span>
            </div>
            <div class=\"panel-body\">
                <table class=\"table table-{1:inverse} table-inverse table-responsive\" id=\"liste_reservation\">
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
            echo "                        <tr>
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
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!--/.row-->
";
        
        $__internal_ece771a67edd9f719de1e5e8e4c7778eade7eb516a9d2c18f792672ed94a6a12->leave($__internal_ece771a67edd9f719de1e5e8e4c7778eade7eb516a9d2c18f792672ed94a6a12_prof);

        
        $__internal_850344d4c559349a08b9763900a06fce4d31c5286da1c15125af16c7e8f5c4d8->leave($__internal_850344d4c559349a08b9763900a06fce4d31c5286da1c15125af16c7e8f5c4d8_prof);

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
<div class=\"row\" id=\"charge_reservation\">
    <div class=\"col-md-12\" id=\"tableau\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                Liste des demandes de réservation
                <span class=\"pull-right clickable panel-toggle panel-button-tab-left\"><em class=\"fa fa-toggle-up\"></em></span>
            </div>
            <div class=\"panel-body\">
                <table class=\"table table-{1:inverse} table-inverse table-responsive\" id=\"liste_reservation\">
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
<!--/.row-->
{% endblock %}", "admin/reservation.html.twig", "/var/www/html/File_Rouge/original/soultana.sn/app/Resources/views/admin/reservation.html.twig");
    }
}
