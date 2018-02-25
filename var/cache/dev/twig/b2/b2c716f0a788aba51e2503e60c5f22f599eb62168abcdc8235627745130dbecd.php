<?php

/* RESERVATIONBundle::layout.html.twig */
class __TwigTemplate_222f1b63373fa5bc0bc39865f5c202b4370ec044aa56df3003d598931c66f297 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ccbba403f58e45147c9f6850ce382d29edd7a997a3f306e3ab73ddba136a01fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccbba403f58e45147c9f6850ce382d29edd7a997a3f306e3ab73ddba136a01fe->enter($__internal_ccbba403f58e45147c9f6850ce382d29edd7a997a3f306e3ab73ddba136a01fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RESERVATIONBundle::layout.html.twig"));

        $__internal_06363cfefb2dbbb0f9a5cba7cf3a67bdaaced6c1edd556d4579521887c6fa724 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06363cfefb2dbbb0f9a5cba7cf3a67bdaaced6c1edd556d4579521887c6fa724->enter($__internal_06363cfefb2dbbb0f9a5cba7cf3a67bdaaced6c1edd556d4579521887c6fa724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RESERVATIONBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 39
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <style>
            .bs-searchbox input {
                color: red;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        ";
        // line 48
        $this->displayBlock('body', $context, $blocks);
        // line 51
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 116
        echo "    </body>
</html>

";
        
        $__internal_ccbba403f58e45147c9f6850ce382d29edd7a997a3f306e3ab73ddba136a01fe->leave($__internal_ccbba403f58e45147c9f6850ce382d29edd7a997a3f306e3ab73ddba136a01fe_prof);

        
        $__internal_06363cfefb2dbbb0f9a5cba7cf3a67bdaaced6c1edd556d4579521887c6fa724->leave($__internal_06363cfefb2dbbb0f9a5cba7cf3a67bdaaced6c1edd556d4579521887c6fa724_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea7af07a77b551dfb16b6b83de4cfe5e24cf89d1cdbcbdcfc31f32d09781b4a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea7af07a77b551dfb16b6b83de4cfe5e24cf89d1cdbcbdcfc31f32d09781b4a8->enter($__internal_ea7af07a77b551dfb16b6b83de4cfe5e24cf89d1cdbcbdcfc31f32d09781b4a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5ad0ea6aab6e47bbf5a8918d2236265e808801a6859757e724ebe3da1f334b4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ad0ea6aab6e47bbf5a8918d2236265e808801a6859757e724ebe3da1f334b4c->enter($__internal_5ad0ea6aab6e47bbf5a8918d2236265e808801a6859757e724ebe3da1f334b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_5ad0ea6aab6e47bbf5a8918d2236265e808801a6859757e724ebe3da1f334b4c->leave($__internal_5ad0ea6aab6e47bbf5a8918d2236265e808801a6859757e724ebe3da1f334b4c_prof);

        
        $__internal_ea7af07a77b551dfb16b6b83de4cfe5e24cf89d1cdbcbdcfc31f32d09781b4a8->leave($__internal_ea7af07a77b551dfb16b6b83de4cfe5e24cf89d1cdbcbdcfc31f32d09781b4a8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f0bd12c14e91efd302b182f6ca9222a2c4822dd33a551b6ca254fc90b0d40d7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0bd12c14e91efd302b182f6ca9222a2c4822dd33a551b6ca254fc90b0d40d7c->enter($__internal_f0bd12c14e91efd302b182f6ca9222a2c4822dd33a551b6ca254fc90b0d40d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5932107b7394bc6fa2d311a91399dbdf1d78b84037e9e9267efe3104033d3cb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5932107b7394bc6fa2d311a91399dbdf1d78b84037e9e9267efe3104033d3cb5->enter($__internal_5932107b7394bc6fa2d311a91399dbdf1d78b84037e9e9267efe3104033d3cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"description\" content=\"GARO is a real-estate template\">
        <meta name=\"author\" content=\"Kimarotec\">
        <meta name=\"keyword\" content=\"html5, css, bootstrap, property, real-estate theme , bootstrap template\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel=\"shortcut icon\" href=\"favicon.ico\" type=\"image/x-icon\">
        <link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\">

        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/normalize.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/font-awesome.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/fontello.css"), "html", null, true);
        echo "\">
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/fonts/icon-7-stroke/css/helper.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
        <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap-select.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/icheck.min_all.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/price-range.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/owl.carousel.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/owl.theme.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/owl.transitions.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/lightslider.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/responsive.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/monstyle.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("DataTables/datatables.min.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
        ";
        
        $__internal_5932107b7394bc6fa2d311a91399dbdf1d78b84037e9e9267efe3104033d3cb5->leave($__internal_5932107b7394bc6fa2d311a91399dbdf1d78b84037e9e9267efe3104033d3cb5_prof);

        
        $__internal_f0bd12c14e91efd302b182f6ca9222a2c4822dd33a551b6ca254fc90b0d40d7c->leave($__internal_f0bd12c14e91efd302b182f6ca9222a2c4822dd33a551b6ca254fc90b0d40d7c_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_29d5330888a208012bbb04c3a33e442bfbdb58ae017e9dd72736ca49247a03b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29d5330888a208012bbb04c3a33e442bfbdb58ae017e9dd72736ca49247a03b5->enter($__internal_29d5330888a208012bbb04c3a33e442bfbdb58ae017e9dd72736ca49247a03b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fc4809132c16c47969068cd46914edd88185c3614c697a0b629ccdc7db13e178 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc4809132c16c47969068cd46914edd88185c3614c697a0b629ccdc7db13e178->enter($__internal_fc4809132c16c47969068cd46914edd88185c3614c697a0b629ccdc7db13e178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 49
        echo "
        ";
        
        $__internal_fc4809132c16c47969068cd46914edd88185c3614c697a0b629ccdc7db13e178->leave($__internal_fc4809132c16c47969068cd46914edd88185c3614c697a0b629ccdc7db13e178_prof);

        
        $__internal_29d5330888a208012bbb04c3a33e442bfbdb58ae017e9dd72736ca49247a03b5->leave($__internal_29d5330888a208012bbb04c3a33e442bfbdb58ae017e9dd72736ca49247a03b5_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d9c1cede319c1dd8bcf76deb79a71fb78e7c50b6780721a5902e8dbdd3a85910 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9c1cede319c1dd8bcf76deb79a71fb78e7c50b6780721a5902e8dbdd3a85910->enter($__internal_d9c1cede319c1dd8bcf76deb79a71fb78e7c50b6780721a5902e8dbdd3a85910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5f38431ec3cf6c8cfe6d0827ebaf012d3a347e0da98eb53fa312a8db9acfe36b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f38431ec3cf6c8cfe6d0827ebaf012d3a347e0da98eb53fa312a8db9acfe36b->enter($__internal_5f38431ec3cf6c8cfe6d0827ebaf012d3a347e0da98eb53fa312a8db9acfe36b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/modernizr-2.6.2.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-1.10.2.min.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 56
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap-hover-dropdown.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/easypiechart.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.easypiechart.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/wow.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/icheck.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/price-range.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/lightslider.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/monfichier.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("DataTables/datatables.min.js"), "html", null, true);
        echo "\"></script>
        <script>
            \$(document).ready(function() {

                \$('#image-gallery').lightSlider({
                    gallery: true,
                    item: 1,
                    thumbItem: 9,
                    slideMargin: 0,
                    speed: 500,
                    auto: true,
                    loop: true,
                    onSliderLoad: function() {
                        \$('#image-gallery').removeClass('cS-hidden');
                    }
                });
            });
            \$(\"#tablebien\").dataTable({
                language: {
                    processing:     \"Traitement en cours...\",
                    search:         \"Rechercher&nbsp;:\",
                    lengthMenu:    \"Afficher _MENU_ &eacute;l&eacute;ments\",
                    info:           \"Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments\",
                    infoEmpty:      \"Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments\",
                    infoFiltered:   \"(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)\",
                    infoPostFix:    \"\",
                    loadingRecords: \"Chargement en cours...\",
                    zeroRecords:    \"Aucun &eacute;l&eacute;ment &agrave; afficher\",
                    emptyTable:     \"Aucune donnée disponible dans le tableau\",
                    paginate: {
                        first:      \"Premier\",
                        previous:   \"Pr&eacute;c&eacute;dent\",
                        next:       \"Suivant\",
                        last:       \"Dernier\"
                    },
                    aria: {
                        sortAscending:  \": activer pour trier la colonne par ordre croissant\",
                        sortDescending: \": activer pour trier la colonne par ordre décroissant\"
                    }
                }
            });

        </script>
        ";
        
        $__internal_5f38431ec3cf6c8cfe6d0827ebaf012d3a347e0da98eb53fa312a8db9acfe36b->leave($__internal_5f38431ec3cf6c8cfe6d0827ebaf012d3a347e0da98eb53fa312a8db9acfe36b_prof);

        
        $__internal_d9c1cede319c1dd8bcf76deb79a71fb78e7c50b6780721a5902e8dbdd3a85910->leave($__internal_d9c1cede319c1dd8bcf76deb79a71fb78e7c50b6780721a5902e8dbdd3a85910_prof);

    }

    public function getTemplateName()
    {
        return "RESERVATIONBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 72,  281 => 71,  277 => 70,  272 => 68,  268 => 67,  264 => 66,  259 => 64,  255 => 63,  250 => 61,  246 => 60,  241 => 58,  237 => 57,  232 => 56,  228 => 54,  222 => 52,  213 => 51,  202 => 49,  193 => 48,  181 => 37,  177 => 36,  173 => 35,  169 => 34,  165 => 33,  161 => 32,  157 => 31,  153 => 30,  149 => 29,  145 => 28,  141 => 27,  137 => 26,  133 => 25,  129 => 24,  125 => 23,  121 => 22,  117 => 21,  113 => 20,  98 => 7,  89 => 6,  72 => 5,  59 => 116,  56 => 51,  54 => 48,  41 => 39,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}{% endblock %}</title>
        {% block stylesheets %}
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"description\" content=\"GARO is a real-estate template\">
        <meta name=\"author\" content=\"Kimarotec\">
        <meta name=\"keyword\" content=\"html5, css, bootstrap, property, real-estate theme , bootstrap template\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel=\"shortcut icon\" href=\"favicon.ico\" type=\"image/x-icon\">
        <link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\">

        <link rel=\"stylesheet\" href=\"{{asset('assets/css/normalize.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/font-awesome.min.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/fontello.css')}}\">
        <link href=\"{{asset('assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css')}}\" rel=\"stylesheet\">
        <link href=\"{{asset('assets/fonts/icon-7-stroke/css/helper.css')}}\" rel=\"stylesheet\">
        <link href=\"{{asset('assets/css/animate.css')}}\" rel=\"stylesheet\" media=\"screen\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/bootstrap-select.min.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('bootstrap/css/bootstrap.min.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/icheck.min_all.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/price-range.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/owl.carousel.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/owl.theme.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/owl.transitions.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/lightslider.min.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/style.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/responsive.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('assets/css/monstyle.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('DataTables/datatables.min.css')}}\" type=\"text/css\"/>
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <style>
            .bs-searchbox input {
                color: red;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        {% block body %}

        {% endblock %}
        {% block javascripts %}
        <script src=\"{{asset('assets/js/modernizr-2.6.2.min.js')}}\"></script>

        <script src=\"{{asset('assets/js/jquery-1.10.2.min.js')}}\"></script>
        {# <script src=\"{{asset('assets/js/jquery-3.3.1.min.js')}}\"></script> #}
        <script src=\"{{asset('bootstrap/js/bootstrap.min.js')}}\"></script>
        <script src=\"{{asset('assets/js/bootstrap-select.min.js')}}\"></script>
        <script src=\"{{asset('assets/js/bootstrap-hover-dropdown.js')}}\"></script>

        <script src=\"{{asset('assets/js/easypiechart.min.js')}}\"></script>
        <script src=\"{{asset('assets/js/jquery.easypiechart.min.js')}}\"></script>

        <script src=\"{{asset('assets/js/owl.carousel.min.js')}}\"></script>
        <script src=\"{{asset('assets/js/wow.js')}}\"></script>

        <script src=\"{{asset('assets/js/icheck.min.js')}}\"></script>
        <script src=\"{{asset('assets/js/price-range.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{asset('assets/js/lightslider.min.js')}}\"></script>

        <script src=\"{{asset('assets/js/main.js')}}\"></script>
        <script src=\"{{asset('assets/js/monfichier.js')}}\"></script>
        <script type=\"text/javascript\" src=\"{{asset('DataTables/datatables.min.js')}}\"></script>
        <script>
            \$(document).ready(function() {

                \$('#image-gallery').lightSlider({
                    gallery: true,
                    item: 1,
                    thumbItem: 9,
                    slideMargin: 0,
                    speed: 500,
                    auto: true,
                    loop: true,
                    onSliderLoad: function() {
                        \$('#image-gallery').removeClass('cS-hidden');
                    }
                });
            });
            \$(\"#tablebien\").dataTable({
                language: {
                    processing:     \"Traitement en cours...\",
                    search:         \"Rechercher&nbsp;:\",
                    lengthMenu:    \"Afficher _MENU_ &eacute;l&eacute;ments\",
                    info:           \"Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments\",
                    infoEmpty:      \"Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments\",
                    infoFiltered:   \"(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)\",
                    infoPostFix:    \"\",
                    loadingRecords: \"Chargement en cours...\",
                    zeroRecords:    \"Aucun &eacute;l&eacute;ment &agrave; afficher\",
                    emptyTable:     \"Aucune donnée disponible dans le tableau\",
                    paginate: {
                        first:      \"Premier\",
                        previous:   \"Pr&eacute;c&eacute;dent\",
                        next:       \"Suivant\",
                        last:       \"Dernier\"
                    },
                    aria: {
                        sortAscending:  \": activer pour trier la colonne par ordre croissant\",
                        sortDescending: \": activer pour trier la colonne par ordre décroissant\"
                    }
                }
            });

        </script>
        {% endblock %}
    </body>
</html>

", "RESERVATIONBundle::layout.html.twig", "/var/www/html/File_Rouge/original/soultana.sn/src/SNT/ReservationBundle/Resources/views/layout.html.twig");
    }
}
