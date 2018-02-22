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
        $__internal_c043fca43b00f435e90496117a7c6398c44b44a850121c307337b5cd36defffe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c043fca43b00f435e90496117a7c6398c44b44a850121c307337b5cd36defffe->enter($__internal_c043fca43b00f435e90496117a7c6398c44b44a850121c307337b5cd36defffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RESERVATIONBundle::layout.html.twig"));

        $__internal_f5e0aa3809286683f41200d93a8daa4e7c43bf75c7ad8bb7113d71a6afb16f43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5e0aa3809286683f41200d93a8daa4e7c43bf75c7ad8bb7113d71a6afb16f43->enter($__internal_f5e0aa3809286683f41200d93a8daa4e7c43bf75c7ad8bb7113d71a6afb16f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RESERVATIONBundle::layout.html.twig"));

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
        
        $__internal_c043fca43b00f435e90496117a7c6398c44b44a850121c307337b5cd36defffe->leave($__internal_c043fca43b00f435e90496117a7c6398c44b44a850121c307337b5cd36defffe_prof);

        
        $__internal_f5e0aa3809286683f41200d93a8daa4e7c43bf75c7ad8bb7113d71a6afb16f43->leave($__internal_f5e0aa3809286683f41200d93a8daa4e7c43bf75c7ad8bb7113d71a6afb16f43_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ebe37c05882a8a001b278ef5536f3e8baba56937f2c8d4094bf9bab9bf42d616 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebe37c05882a8a001b278ef5536f3e8baba56937f2c8d4094bf9bab9bf42d616->enter($__internal_ebe37c05882a8a001b278ef5536f3e8baba56937f2c8d4094bf9bab9bf42d616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a6fb239d8a48d0a1585445a0b8237bf7fc05dfde039f76ea1d9dce3a3e3b7cfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6fb239d8a48d0a1585445a0b8237bf7fc05dfde039f76ea1d9dce3a3e3b7cfa->enter($__internal_a6fb239d8a48d0a1585445a0b8237bf7fc05dfde039f76ea1d9dce3a3e3b7cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_a6fb239d8a48d0a1585445a0b8237bf7fc05dfde039f76ea1d9dce3a3e3b7cfa->leave($__internal_a6fb239d8a48d0a1585445a0b8237bf7fc05dfde039f76ea1d9dce3a3e3b7cfa_prof);

        
        $__internal_ebe37c05882a8a001b278ef5536f3e8baba56937f2c8d4094bf9bab9bf42d616->leave($__internal_ebe37c05882a8a001b278ef5536f3e8baba56937f2c8d4094bf9bab9bf42d616_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8d43fbbb4a7d0ac5d8e9a1879385db52e4abb0711c5077a3f6161a968fef84f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d43fbbb4a7d0ac5d8e9a1879385db52e4abb0711c5077a3f6161a968fef84f2->enter($__internal_8d43fbbb4a7d0ac5d8e9a1879385db52e4abb0711c5077a3f6161a968fef84f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0f9ef194213f5e01640ff841519cb25be23536fff5f05021589be3ac635945f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f9ef194213f5e01640ff841519cb25be23536fff5f05021589be3ac635945f4->enter($__internal_0f9ef194213f5e01640ff841519cb25be23536fff5f05021589be3ac635945f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_0f9ef194213f5e01640ff841519cb25be23536fff5f05021589be3ac635945f4->leave($__internal_0f9ef194213f5e01640ff841519cb25be23536fff5f05021589be3ac635945f4_prof);

        
        $__internal_8d43fbbb4a7d0ac5d8e9a1879385db52e4abb0711c5077a3f6161a968fef84f2->leave($__internal_8d43fbbb4a7d0ac5d8e9a1879385db52e4abb0711c5077a3f6161a968fef84f2_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e65429f9a81d0d29c38418b41e0b0fa0b3c7219bed41a1b320feb108aaaa17e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e65429f9a81d0d29c38418b41e0b0fa0b3c7219bed41a1b320feb108aaaa17e->enter($__internal_2e65429f9a81d0d29c38418b41e0b0fa0b3c7219bed41a1b320feb108aaaa17e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bd3543e4eb7c8b185327f86b821d5284dd0b35cf8dbe371307c6c9ec562ebdf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd3543e4eb7c8b185327f86b821d5284dd0b35cf8dbe371307c6c9ec562ebdf0->enter($__internal_bd3543e4eb7c8b185327f86b821d5284dd0b35cf8dbe371307c6c9ec562ebdf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 49
        echo "
        ";
        
        $__internal_bd3543e4eb7c8b185327f86b821d5284dd0b35cf8dbe371307c6c9ec562ebdf0->leave($__internal_bd3543e4eb7c8b185327f86b821d5284dd0b35cf8dbe371307c6c9ec562ebdf0_prof);

        
        $__internal_2e65429f9a81d0d29c38418b41e0b0fa0b3c7219bed41a1b320feb108aaaa17e->leave($__internal_2e65429f9a81d0d29c38418b41e0b0fa0b3c7219bed41a1b320feb108aaaa17e_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_98f7486037fb526b5b7b6751edbcd58692706f53111d7ef09b1d94b88160ff89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98f7486037fb526b5b7b6751edbcd58692706f53111d7ef09b1d94b88160ff89->enter($__internal_98f7486037fb526b5b7b6751edbcd58692706f53111d7ef09b1d94b88160ff89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_642edaaccc93d7485731ef2557bd91b709502b5fae0b426f84e0e0dad9196098 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_642edaaccc93d7485731ef2557bd91b709502b5fae0b426f84e0e0dad9196098->enter($__internal_642edaaccc93d7485731ef2557bd91b709502b5fae0b426f84e0e0dad9196098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_642edaaccc93d7485731ef2557bd91b709502b5fae0b426f84e0e0dad9196098->leave($__internal_642edaaccc93d7485731ef2557bd91b709502b5fae0b426f84e0e0dad9196098_prof);

        
        $__internal_98f7486037fb526b5b7b6751edbcd58692706f53111d7ef09b1d94b88160ff89->leave($__internal_98f7486037fb526b5b7b6751edbcd58692706f53111d7ef09b1d94b88160ff89_prof);

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

", "RESERVATIONBundle::layout.html.twig", "/var/www/html/File_Rouge/original/soultana.sn/src/SNT/ReservationBundle/Resources/views/layout.html.twig");
    }
}
