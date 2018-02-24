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
        $__internal_c44c73941e64f0d242db4f5e9b0cbbdd62fe4fe8bbb504c22092b0b7ae0a6198 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c44c73941e64f0d242db4f5e9b0cbbdd62fe4fe8bbb504c22092b0b7ae0a6198->enter($__internal_c44c73941e64f0d242db4f5e9b0cbbdd62fe4fe8bbb504c22092b0b7ae0a6198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/reservation.html.twig"));

        $__internal_07eee982b6e9e3f36608748092ccf12c766180a238191150fc08629242863868 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07eee982b6e9e3f36608748092ccf12c766180a238191150fc08629242863868->enter($__internal_07eee982b6e9e3f36608748092ccf12c766180a238191150fc08629242863868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/reservation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c44c73941e64f0d242db4f5e9b0cbbdd62fe4fe8bbb504c22092b0b7ae0a6198->leave($__internal_c44c73941e64f0d242db4f5e9b0cbbdd62fe4fe8bbb504c22092b0b7ae0a6198_prof);

        
        $__internal_07eee982b6e9e3f36608748092ccf12c766180a238191150fc08629242863868->leave($__internal_07eee982b6e9e3f36608748092ccf12c766180a238191150fc08629242863868_prof);

    }

    // line 2
    public function block_accueil($context, array $blocks = array())
    {
        $__internal_4955f7f8bc4b3f0ca53bd22e8b04fd916a0564d1d2e79875a7ac54c72682575e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4955f7f8bc4b3f0ca53bd22e8b04fd916a0564d1d2e79875a7ac54c72682575e->enter($__internal_4955f7f8bc4b3f0ca53bd22e8b04fd916a0564d1d2e79875a7ac54c72682575e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "accueil"));

        $__internal_c17e052491c7b39cf8ed9e05d383829786fafdc68261c49a06ceca0f676c2ae1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c17e052491c7b39cf8ed9e05d383829786fafdc68261c49a06ceca0f676c2ae1->enter($__internal_c17e052491c7b39cf8ed9e05d383829786fafdc68261c49a06ceca0f676c2ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "accueil"));

        // line 3
        echo "    ";
        echo "class=\" \"";
        echo "
";
        
        $__internal_c17e052491c7b39cf8ed9e05d383829786fafdc68261c49a06ceca0f676c2ae1->leave($__internal_c17e052491c7b39cf8ed9e05d383829786fafdc68261c49a06ceca0f676c2ae1_prof);

        
        $__internal_4955f7f8bc4b3f0ca53bd22e8b04fd916a0564d1d2e79875a7ac54c72682575e->leave($__internal_4955f7f8bc4b3f0ca53bd22e8b04fd916a0564d1d2e79875a7ac54c72682575e_prof);

    }

    // line 5
    public function block_titre_page_li($context, array $blocks = array())
    {
        $__internal_b6695074fb810aedf0e6e9bb9d6987082bd097dabd17ace2493b8f4e5093be53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6695074fb810aedf0e6e9bb9d6987082bd097dabd17ace2493b8f4e5093be53->enter($__internal_b6695074fb810aedf0e6e9bb9d6987082bd097dabd17ace2493b8f4e5093be53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_li"));

        $__internal_4dcf0ee59c25cf3a5b8c393968c259b3b161e03cbda14da2c0f145ba33682136 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dcf0ee59c25cf3a5b8c393968c259b3b161e03cbda14da2c0f145ba33682136->enter($__internal_4dcf0ee59c25cf3a5b8c393968c259b3b161e03cbda14da2c0f145ba33682136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_li"));

        // line 6
        echo "    Réservation
";
        
        $__internal_4dcf0ee59c25cf3a5b8c393968c259b3b161e03cbda14da2c0f145ba33682136->leave($__internal_4dcf0ee59c25cf3a5b8c393968c259b3b161e03cbda14da2c0f145ba33682136_prof);

        
        $__internal_b6695074fb810aedf0e6e9bb9d6987082bd097dabd17ace2493b8f4e5093be53->leave($__internal_b6695074fb810aedf0e6e9bb9d6987082bd097dabd17ace2493b8f4e5093be53_prof);

    }

    // line 8
    public function block_titre_page_h1($context, array $blocks = array())
    {
        $__internal_a3340e177679d8c0e7823de21eb5291c41531c48105901a244e454a27923e8aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3340e177679d8c0e7823de21eb5291c41531c48105901a244e454a27923e8aa->enter($__internal_a3340e177679d8c0e7823de21eb5291c41531c48105901a244e454a27923e8aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_h1"));

        $__internal_e2c83cdc8d18cb368c64c849efde4c75d4971f0d060e2a441ff671a31769778a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2c83cdc8d18cb368c64c849efde4c75d4971f0d060e2a441ff671a31769778a->enter($__internal_e2c83cdc8d18cb368c64c849efde4c75d4971f0d060e2a441ff671a31769778a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_h1"));

        // line 9
        echo "    Gestion des réservations
";
        
        $__internal_e2c83cdc8d18cb368c64c849efde4c75d4971f0d060e2a441ff671a31769778a->leave($__internal_e2c83cdc8d18cb368c64c849efde4c75d4971f0d060e2a441ff671a31769778a_prof);

        
        $__internal_a3340e177679d8c0e7823de21eb5291c41531c48105901a244e454a27923e8aa->leave($__internal_a3340e177679d8c0e7823de21eb5291c41531c48105901a244e454a27923e8aa_prof);

    }

    // line 11
    public function block_contenus($context, array $blocks = array())
    {
        $__internal_db625ad61e2fd705b05fb6bde5d9b6dc99778d40d6d6090d13f52985c7a057c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db625ad61e2fd705b05fb6bde5d9b6dc99778d40d6d6090d13f52985c7a057c0->enter($__internal_db625ad61e2fd705b05fb6bde5d9b6dc99778d40d6d6090d13f52985c7a057c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        $__internal_e65965a7ebb424b5679f4c8b2e62143da118fbfecdecbc245a5e65358337af59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e65965a7ebb424b5679f4c8b2e62143da118fbfecdecbc245a5e65358337af59->enter($__internal_e65965a7ebb424b5679f4c8b2e62143da118fbfecdecbc245a5e65358337af59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        // line 12
        echo "<div class=\"row\">
    <div class=\"col-md-12\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                Liste des demandes de réservation
                <span class=\"pull-right clickable panel-toggle panel-button-tab-left\"><em class=\"fa fa-toggle-up\"></em></span></div>
            <div class=\"panel-body\">
                <div class=\"\">
                    <table class=\"table table-{1:striped|sm|bordered|hover|inverse} table-inverse table-responsive\" id=\"liste_reservation\">
                        <thead class=\"thead-inverse\">
                            <tr>
                                <th>#</th>
                                <th>Nom du client</th>
                                <th>Nom du bien</th>
                                <th>Détails</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope=\"row\">1</td>
                                <td>teste</td>
                                <td>teste</td>
                                <td><a href=\"\">En savoir plus</a></d>
                            </tr>
                            <tr>
                                <td scope=\"row\">2</td>
                                <td>teste</td>
                                <td>teste</td>
                                <td><a href=\"\">En savoir plus</a></d>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/.row-->
";
        
        $__internal_e65965a7ebb424b5679f4c8b2e62143da118fbfecdecbc245a5e65358337af59->leave($__internal_e65965a7ebb424b5679f4c8b2e62143da118fbfecdecbc245a5e65358337af59_prof);

        
        $__internal_db625ad61e2fd705b05fb6bde5d9b6dc99778d40d6d6090d13f52985c7a057c0->leave($__internal_db625ad61e2fd705b05fb6bde5d9b6dc99778d40d6d6090d13f52985c7a057c0_prof);

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
        return array (  114 => 12,  105 => 11,  94 => 9,  85 => 8,  74 => 6,  65 => 5,  52 => 3,  43 => 2,  11 => 1,);
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
                <div class=\"\">
                    <table class=\"table table-{1:striped|sm|bordered|hover|inverse} table-inverse table-responsive\" id=\"liste_reservation\">
                        <thead class=\"thead-inverse\">
                            <tr>
                                <th>#</th>
                                <th>Nom du client</th>
                                <th>Nom du bien</th>
                                <th>Détails</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope=\"row\">1</td>
                                <td>teste</td>
                                <td>teste</td>
                                <td><a href=\"\">En savoir plus</a></d>
                            </tr>
                            <tr>
                                <td scope=\"row\">2</td>
                                <td>teste</td>
                                <td>teste</td>
                                <td><a href=\"\">En savoir plus</a></d>
                            </tr>
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
