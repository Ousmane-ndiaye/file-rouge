<?php

/* @RESERVATION/layout.html.twig */
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
        $__internal_8352db26a2b69a7680a1ae2f114ac86c9b4bdc63d6547216c00ad91e43588db1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8352db26a2b69a7680a1ae2f114ac86c9b4bdc63d6547216c00ad91e43588db1->enter($__internal_8352db26a2b69a7680a1ae2f114ac86c9b4bdc63d6547216c00ad91e43588db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@RESERVATION/layout.html.twig"));

        $__internal_639ea062bb010f5ba7b96e97f4601da835779cfbc79194a774cc9bd83752e590 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_639ea062bb010f5ba7b96e97f4601da835779cfbc79194a774cc9bd83752e590->enter($__internal_639ea062bb010f5ba7b96e97f4601da835779cfbc79194a774cc9bd83752e590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@RESERVATION/layout.html.twig"));

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
        // line 115
        echo "    </body>
</html>

";
        
        $__internal_8352db26a2b69a7680a1ae2f114ac86c9b4bdc63d6547216c00ad91e43588db1->leave($__internal_8352db26a2b69a7680a1ae2f114ac86c9b4bdc63d6547216c00ad91e43588db1_prof);

        
        $__internal_639ea062bb010f5ba7b96e97f4601da835779cfbc79194a774cc9bd83752e590->leave($__internal_639ea062bb010f5ba7b96e97f4601da835779cfbc79194a774cc9bd83752e590_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_11c1421ededa6bd26b84b2105bc26f41ca709d2ea3ee5c46a6bcd1c2f11a2be0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11c1421ededa6bd26b84b2105bc26f41ca709d2ea3ee5c46a6bcd1c2f11a2be0->enter($__internal_11c1421ededa6bd26b84b2105bc26f41ca709d2ea3ee5c46a6bcd1c2f11a2be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_aa56083c9c0a2e0120cf3496b6debd525160cbb20c4c78ea3a19d5b0615f81dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa56083c9c0a2e0120cf3496b6debd525160cbb20c4c78ea3a19d5b0615f81dc->enter($__internal_aa56083c9c0a2e0120cf3496b6debd525160cbb20c4c78ea3a19d5b0615f81dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_aa56083c9c0a2e0120cf3496b6debd525160cbb20c4c78ea3a19d5b0615f81dc->leave($__internal_aa56083c9c0a2e0120cf3496b6debd525160cbb20c4c78ea3a19d5b0615f81dc_prof);

        
        $__internal_11c1421ededa6bd26b84b2105bc26f41ca709d2ea3ee5c46a6bcd1c2f11a2be0->leave($__internal_11c1421ededa6bd26b84b2105bc26f41ca709d2ea3ee5c46a6bcd1c2f11a2be0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_03e3208c11feca667b4b28a4725eb6fe329620dd3c62de830c472a56d7a6a963 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03e3208c11feca667b4b28a4725eb6fe329620dd3c62de830c472a56d7a6a963->enter($__internal_03e3208c11feca667b4b28a4725eb6fe329620dd3c62de830c472a56d7a6a963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ebf428d2bec4082bf72f70a8e72e0d75f686cc85bc7410cf1632478bea48058a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebf428d2bec4082bf72f70a8e72e0d75f686cc85bc7410cf1632478bea48058a->enter($__internal_ebf428d2bec4082bf72f70a8e72e0d75f686cc85bc7410cf1632478bea48058a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_ebf428d2bec4082bf72f70a8e72e0d75f686cc85bc7410cf1632478bea48058a->leave($__internal_ebf428d2bec4082bf72f70a8e72e0d75f686cc85bc7410cf1632478bea48058a_prof);

        
        $__internal_03e3208c11feca667b4b28a4725eb6fe329620dd3c62de830c472a56d7a6a963->leave($__internal_03e3208c11feca667b4b28a4725eb6fe329620dd3c62de830c472a56d7a6a963_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_db01101649452ef02b4c7a08eae1bbe159cf2fc3b83d4038d29c297fce48925f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db01101649452ef02b4c7a08eae1bbe159cf2fc3b83d4038d29c297fce48925f->enter($__internal_db01101649452ef02b4c7a08eae1bbe159cf2fc3b83d4038d29c297fce48925f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_762074be010bce015c6dcd0def835e68b5fb0aa5e2f830242fcd86d336047fd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_762074be010bce015c6dcd0def835e68b5fb0aa5e2f830242fcd86d336047fd5->enter($__internal_762074be010bce015c6dcd0def835e68b5fb0aa5e2f830242fcd86d336047fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 49
        echo "
        ";
        
        $__internal_762074be010bce015c6dcd0def835e68b5fb0aa5e2f830242fcd86d336047fd5->leave($__internal_762074be010bce015c6dcd0def835e68b5fb0aa5e2f830242fcd86d336047fd5_prof);

        
        $__internal_db01101649452ef02b4c7a08eae1bbe159cf2fc3b83d4038d29c297fce48925f->leave($__internal_db01101649452ef02b4c7a08eae1bbe159cf2fc3b83d4038d29c297fce48925f_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2ab45c768abdf3ab4163194d0e7aefe3b6542493845325b551ebfc06a45869ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ab45c768abdf3ab4163194d0e7aefe3b6542493845325b551ebfc06a45869ec->enter($__internal_2ab45c768abdf3ab4163194d0e7aefe3b6542493845325b551ebfc06a45869ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_45ae157425a377f1fc823427377147f6e2d2741e1ecde057c454603ce04f010a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45ae157425a377f1fc823427377147f6e2d2741e1ecde057c454603ce04f010a->enter($__internal_45ae157425a377f1fc823427377147f6e2d2741e1ecde057c454603ce04f010a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/modernizr-2.6.2.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-1.10.2.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap-hover-dropdown.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/easypiechart.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.easypiechart.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/wow.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/icheck.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/price-range.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/lightslider.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/monfichier.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 71
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
        
        $__internal_45ae157425a377f1fc823427377147f6e2d2741e1ecde057c454603ce04f010a->leave($__internal_45ae157425a377f1fc823427377147f6e2d2741e1ecde057c454603ce04f010a_prof);

        
        $__internal_2ab45c768abdf3ab4163194d0e7aefe3b6542493845325b551ebfc06a45869ec->leave($__internal_2ab45c768abdf3ab4163194d0e7aefe3b6542493845325b551ebfc06a45869ec_prof);

    }

    public function getTemplateName()
    {
        return "@RESERVATION/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 71,  280 => 70,  276 => 69,  271 => 67,  267 => 66,  263 => 65,  258 => 63,  254 => 62,  249 => 60,  245 => 59,  240 => 57,  236 => 56,  232 => 55,  228 => 54,  222 => 52,  213 => 51,  202 => 49,  193 => 48,  181 => 37,  177 => 36,  173 => 35,  169 => 34,  165 => 33,  161 => 32,  157 => 31,  153 => 30,  149 => 29,  145 => 28,  141 => 27,  137 => 26,  133 => 25,  129 => 24,  125 => 23,  121 => 22,  117 => 21,  113 => 20,  98 => 7,  89 => 6,  72 => 5,  59 => 115,  56 => 51,  54 => 48,  41 => 39,  39 => 6,  35 => 5,  29 => 1,);
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

", "@RESERVATION/layout.html.twig", "/var/www/html/File_Rouge/original/soultana.sn/src/SNT/ReservationBundle/Resources/views/layout.html.twig");
    }
}
