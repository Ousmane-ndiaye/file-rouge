<?php

/* base.html.twig */
class __TwigTemplate_a04947d5009d507072a9ba6506ebae3c79fdd03aece5081d3ae329be8551f7d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@RESERVATION/layout.html.twig", "base.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'navbar' => array($this, 'block_navbar'),
            'contenus' => array($this, 'block_contenus'),
            'slide' => array($this, 'block_slide'),
            'form_recherche' => array($this, 'block_form_recherche'),
            'catalogue' => array($this, 'block_catalogue'),
            'titre_catalogue' => array($this, 'block_titre_catalogue'),
            'articles' => array($this, 'block_articles'),
            'bienvenu' => array($this, 'block_bienvenu'),
            'temoignages1' => array($this, 'block_temoignages1'),
            'temoignages2' => array($this, 'block_temoignages2'),
            'zone_de_recherche' => array($this, 'block_zone_de_recherche'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@RESERVATION/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_720d64bd3570b7aa3d863942938abb54716425ccaf8ac09f00f8390744848e16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_720d64bd3570b7aa3d863942938abb54716425ccaf8ac09f00f8390744848e16->enter($__internal_720d64bd3570b7aa3d863942938abb54716425ccaf8ac09f00f8390744848e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6b5f51a3291d14a27f236ab2568359758247430ae5a776f52267648b61791084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b5f51a3291d14a27f236ab2568359758247430ae5a776f52267648b61791084->enter($__internal_6b5f51a3291d14a27f236ab2568359758247430ae5a776f52267648b61791084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_720d64bd3570b7aa3d863942938abb54716425ccaf8ac09f00f8390744848e16->leave($__internal_720d64bd3570b7aa3d863942938abb54716425ccaf8ac09f00f8390744848e16_prof);

        
        $__internal_6b5f51a3291d14a27f236ab2568359758247430ae5a776f52267648b61791084->leave($__internal_6b5f51a3291d14a27f236ab2568359758247430ae5a776f52267648b61791084_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_96ae938b074e0f0ace085fb5c42d996e825365fbe4b501ffcfc8f7b30e881f9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96ae938b074e0f0ace085fb5c42d996e825365fbe4b501ffcfc8f7b30e881f9b->enter($__internal_96ae938b074e0f0ace085fb5c42d996e825365fbe4b501ffcfc8f7b30e881f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_60272f8b6c9af13f23864c9be189e4c000f094627f086eb8bf6b4b7fcb7bd480 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60272f8b6c9af13f23864c9be189e4c000f094627f086eb8bf6b4b7fcb7bd480->enter($__internal_60272f8b6c9af13f23864c9be189e4c000f094627f086eb8bf6b4b7fcb7bd480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div id=\"preloader\">
        <div id=\"status\">&nbsp;</div>
    </div>
    <!-- Body content -->
    ";
        // line 7
        $this->displayBlock('header', $context, $blocks);
        // line 65
        echo "    ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 108
        echo "    ";
        $this->displayBlock('contenus', $context, $blocks);
        // line 528
        echo "    ";
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_60272f8b6c9af13f23864c9be189e4c000f094627f086eb8bf6b4b7fcb7bd480->leave($__internal_60272f8b6c9af13f23864c9be189e4c000f094627f086eb8bf6b4b7fcb7bd480_prof);

        
        $__internal_96ae938b074e0f0ace085fb5c42d996e825365fbe4b501ffcfc8f7b30e881f9b->leave($__internal_96ae938b074e0f0ace085fb5c42d996e825365fbe4b501ffcfc8f7b30e881f9b_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_ae716e3478c16c4b3e760c6dfeeb59d033da85fd22fc33311e3ec323b9d5c4bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae716e3478c16c4b3e760c6dfeeb59d033da85fd22fc33311e3ec323b9d5c4bf->enter($__internal_ae716e3478c16c4b3e760c6dfeeb59d033da85fd22fc33311e3ec323b9d5c4bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_eecf0af16f3f2128da54fdeede9cdd49b00148ec3dad68016b72ee25353e74c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eecf0af16f3f2128da54fdeede9cdd49b00148ec3dad68016b72ee25353e74c2->enter($__internal_eecf0af16f3f2128da54fdeede9cdd49b00148ec3dad68016b72ee25353e74c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 8
        echo "    <div class=\"header-connect\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-5 col-sm-8  col-xs-12\">
                    <div class=\"header-half header-call\">
                        <p>
                            <span>
                                <i class=\"pe-7s-call\"></i>
                                +221 33 800 00 00</span>
                            <span>
                                <i class=\"pe-7s-mail\"></i>
                                soultanaimmo@gmail.com</span>
                        </p>
                    </div>
                </div>

                <div class=\"col-md-2 col-md-offset-5  col-sm-3 col-sm-offset-1  col-xs-12\">
                    <div class=\"header-half header-social\">
                        <ul class=\"list-inline\">
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-facebook\"></i>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-twitter\"></i>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-vine\"></i>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-linkedin\"></i>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-dribbble\"></i>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-instagram\"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End top header -->
    ";
        
        $__internal_eecf0af16f3f2128da54fdeede9cdd49b00148ec3dad68016b72ee25353e74c2->leave($__internal_eecf0af16f3f2128da54fdeede9cdd49b00148ec3dad68016b72ee25353e74c2_prof);

        
        $__internal_ae716e3478c16c4b3e760c6dfeeb59d033da85fd22fc33311e3ec323b9d5c4bf->leave($__internal_ae716e3478c16c4b3e760c6dfeeb59d033da85fd22fc33311e3ec323b9d5c4bf_prof);

    }

    // line 65
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_7ab10ec6580d417d5ac7300c73ddd078c1422ce88b8fb0d2ff5340bc5423520c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ab10ec6580d417d5ac7300c73ddd078c1422ce88b8fb0d2ff5340bc5423520c->enter($__internal_7ab10ec6580d417d5ac7300c73ddd078c1422ce88b8fb0d2ff5340bc5423520c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_5038804c2707fee5ee68a8a2d72de06fd502174c7c0bcab5a85516d2fe38cabc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5038804c2707fee5ee68a8a2d72de06fd502174c7c0bcab5a85516d2fe38cabc->enter($__internal_5038804c2707fee5ee68a8a2d72de06fd502174c7c0bcab5a85516d2fe38cabc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 66
        echo "    <nav class=\"navbar navbar-default\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navigation\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"index.html\"><img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\" alt=\"\"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse yamm\" id=\"navigation\">
                <div class=\"button navbar-right\">
                    <button class=\"navbar-btn nav-button wow bounceInRight login\" data-wow-delay=\"0.45s\"><a style=\"color: white;\" href=\"";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_connexion", array("action" => 0));
        echo "\">Login</a></button>
                </div>
                <ul class=\"main-nav nav navbar-nav navbar-right\">
                    <li class=\"ymm-sw \" data-wow-delay=\"0.1s\">
                        <a href=\"\" class=\"active\">Accueil</a>
                    </li>

                    <li class=\"wow fadeInDown\" data-wow-delay=\"0.2s\">
                        <a class=\"\" href=\"properties.html\">Aide et conseils</a>
                    </li>

                    <li class=\"wow fadeInDown\" data-wow-delay=\"0.3s\">
                        <a class=\"\" href=\"property.html\">Propriètaire</a>
                    </li>

                    <li class=\"wow fadeInDown\" data-wow-delay=\"0.5s\">
                        <a href=\"contact.html\">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <!-- End of nav bar -->
    ";
        
        $__internal_5038804c2707fee5ee68a8a2d72de06fd502174c7c0bcab5a85516d2fe38cabc->leave($__internal_5038804c2707fee5ee68a8a2d72de06fd502174c7c0bcab5a85516d2fe38cabc_prof);

        
        $__internal_7ab10ec6580d417d5ac7300c73ddd078c1422ce88b8fb0d2ff5340bc5423520c->leave($__internal_7ab10ec6580d417d5ac7300c73ddd078c1422ce88b8fb0d2ff5340bc5423520c_prof);

    }

    // line 108
    public function block_contenus($context, array $blocks = array())
    {
        $__internal_0bfb217b5b7f59b3db615358eeec208729caef883f1e21ab9d793f9bbe12c6f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bfb217b5b7f59b3db615358eeec208729caef883f1e21ab9d793f9bbe12c6f7->enter($__internal_0bfb217b5b7f59b3db615358eeec208729caef883f1e21ab9d793f9bbe12c6f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        $__internal_723467ca929b481c62b3100a7ef8acd76a3b0387d68f1872e05e8cf93cb5eadd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_723467ca929b481c62b3100a7ef8acd76a3b0387d68f1872e05e8cf93cb5eadd->enter($__internal_723467ca929b481c62b3100a7ef8acd76a3b0387d68f1872e05e8cf93cb5eadd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        // line 109
        echo "    ";
        $this->displayBlock('slide', $context, $blocks);
        // line 220
        echo "    ";
        $this->displayBlock('catalogue', $context, $blocks);
        // line 275
        echo "    ";
        $this->displayBlock('bienvenu', $context, $blocks);
        // line 340
        echo "    ";
        $this->displayBlock('temoignages1', $context, $blocks);
        // line 413
        echo "    ";
        $this->displayBlock('temoignages2', $context, $blocks);
        // line 480
        echo "    ";
        $this->displayBlock('zone_de_recherche', $context, $blocks);
        // line 527
        echo "    ";
        
        $__internal_723467ca929b481c62b3100a7ef8acd76a3b0387d68f1872e05e8cf93cb5eadd->leave($__internal_723467ca929b481c62b3100a7ef8acd76a3b0387d68f1872e05e8cf93cb5eadd_prof);

        
        $__internal_0bfb217b5b7f59b3db615358eeec208729caef883f1e21ab9d793f9bbe12c6f7->leave($__internal_0bfb217b5b7f59b3db615358eeec208729caef883f1e21ab9d793f9bbe12c6f7_prof);

    }

    // line 109
    public function block_slide($context, array $blocks = array())
    {
        $__internal_66869af4d803c8a81810dd721d99283c0aac81aae3f9cb69e851e2e70bfd8013 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66869af4d803c8a81810dd721d99283c0aac81aae3f9cb69e851e2e70bfd8013->enter($__internal_66869af4d803c8a81810dd721d99283c0aac81aae3f9cb69e851e2e70bfd8013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        $__internal_671fc7540a93a9e4f2977c8f7cec23e08bcb0c8ea0c20995a8c356bc14c76ffd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_671fc7540a93a9e4f2977c8f7cec23e08bcb0c8ea0c20995a8c356bc14c76ffd->enter($__internal_671fc7540a93a9e4f2977c8f7cec23e08bcb0c8ea0c20995a8c356bc14c76ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        // line 110
        echo "    <div class=\"slider-area\">
        <div class=\"slider\">
            <div id=\"bg-slider\" class=\"owl-carousel owl-theme\">

                <div class=\"item\"><img src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/slide1/slider-image-1.jpg"), "html", null, true);
        echo "\" alt=\"GTA V\"></div>
                <div class=\"item\"><img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/slide1/slider-image-2.jpg"), "html", null, true);
        echo "\" alt=\"The Last of us\"></div>
                <div class=\"item\"><img src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/slide1/slider-image-1.jpg"), "html", null, true);
        echo "\" alt=\"GTA V\"></div>

            </div>
        </div>
        <div class=\"slider-content\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12\">
                    <h2 class=\"notre_slogan\" style=\"color: #FDC600; font-weight: bold; text-shadow: #000000 1px 1px, #000000 -1px 1px, #000000 -1px -1px, #000000 1px -1px;\">1er sur l'immobilier des particuliers</h2>
                    <p class=\"notre_devise\" style=\"font-size: 18px; text-shadow:#FDC600 1px 1px, #FDC600 -1px 1px, #FDC600 -1px -1px, #FDC600 1px -1px;\">Leader dans ce domaine, la satisfaction de nos visiteurs fait notre bonheur !</p>
                    ";
        // line 125
        $this->displayBlock('form_recherche', $context, $blocks);
        // line 215
        echo "                </div>
            </div>
        </div>
    </div>
    ";
        
        $__internal_671fc7540a93a9e4f2977c8f7cec23e08bcb0c8ea0c20995a8c356bc14c76ffd->leave($__internal_671fc7540a93a9e4f2977c8f7cec23e08bcb0c8ea0c20995a8c356bc14c76ffd_prof);

        
        $__internal_66869af4d803c8a81810dd721d99283c0aac81aae3f9cb69e851e2e70bfd8013->leave($__internal_66869af4d803c8a81810dd721d99283c0aac81aae3f9cb69e851e2e70bfd8013_prof);

    }

    // line 125
    public function block_form_recherche($context, array $blocks = array())
    {
        $__internal_519e5f213aefcca91d19d716a56f190a2b7e677969fa63d39a27ce2d8e67a63e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_519e5f213aefcca91d19d716a56f190a2b7e677969fa63d39a27ce2d8e67a63e->enter($__internal_519e5f213aefcca91d19d716a56f190a2b7e677969fa63d39a27ce2d8e67a63e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_recherche"));

        $__internal_ded25a4bc019be0212fb3b071c78f3e45807b011c71d8546b7423a7088b10495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ded25a4bc019be0212fb3b071c78f3e45807b011c71d8546b7423a7088b10495->enter($__internal_ded25a4bc019be0212fb3b071c78f3e45807b011c71d8546b7423a7088b10495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_recherche"));

        // line 126
        echo "                    <div class=\"search-form wow pulse changements\" data-wow-delay=\"0.8s\">
                        <form action=\"\" method=\"post\" data-form=\"form_recherche\" class=\"form-inline\">
                            <input type=\"hidden\" class=\"form-control\" name=\"form_type\" aria-describedby=\"helpId\" value=\"rechercher\">
                            <button class=\"btn  toggle-btn\" type=\"button\">
                                <i class=\"fa fa-bars\"></i>
                            </button>
                            <div class=\"form-group\">
                                ";
        // line 134
        echo "                                <select name=\"lieu\" id=\"lunchBegins\" class=\"selectpicker inputForm\" data-live-search=\"true\" data-live-search-style=\"begins\" title=\"Choisir une localité\">
                                ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["villes"] ?? $this->getContext($context, "villes")));
        foreach ($context['_seq'] as $context["_key"] => $context["ville"]) {
            // line 136
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ville"], "id", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ville"], "nomVille", array()), "html", null, true);
            echo " </option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ville'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "                                </select>
                            </div>
                            <div class=\"form-group\">
                                <select name=\"typeBien\" id=\"basic\" class=\"selectpicker show-tick form-control\" title=\"Choisir un bien\">
                                ";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["typesBien"] ?? $this->getContext($context, "typesBien")));
        foreach ($context['_seq'] as $context["_key"] => $context["typeBien"]) {
            // line 143
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["typeBien"], "id", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["typeBien"], "nomTypeBien", array()), "html", null, true);
            echo " </option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typeBien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "                                </select>
                            </div>
                            <div class=\"form-group mar-r-20\">
                                <input type=\"text\" name=\"prix_choisi\" id=\"prix_choisi\" class=\"filter-option\" placeholder=\"\" readonly=\"true\" />
                                <input type=\"text\" name=\"prix\" class=\"span2 prix_compris\" data-slider-min=\"50\" data-slider-max=\"5000\" data-slider-step=\"5\" data-slider-value=\"[50,5000]\" value=\"50,5000\" id=\"price-range\"><br/>
                                <b class=\"pull-left color numero\">50 000f</b>
                                <b class=\"pull-right color numero\">500 000 000f</b>
                            </div>
                            <!-- End of -->
                            <button class=\"btn search-btn\" type=\"submit\">
                                <i class=\"fa fa-search\"></i>
                            </button>
                            <div style=\"display: none;\" class=\"search-toggle\">
                                <div class=\"search-row\">
                                    <div class=\"form-group mar-r-20\">
                                        <label for=\"price-range\">Nombre de salle de bains :</label>
                                        <input type=\"text\" name=\"nbreSallebains\" class=\"span2\" value=\"\" data-slider-min=\"1\" data-slider-max=\"20\" data-slider-step=\"5\" data-slider-value=\"[0,20]\" id=\"min-baths\"><br/>
                                        <b class=\"pull-left color numero\">1</b>
                                        <b class=\"pull-right color numero\">20</b>
                                    </div>
                                    <!-- End of -->
                                    <div class=\"form-group mar-l-20\">
                                        <label for=\"property-geo\">Nombre chambre à coucher :</label>
                                        <input type=\"text\" name=\"nbreChambres\" class=\"span2\" value=\"\" data-slider-min=\"1\" data-slider-max=\"20\" data-slider-step=\"5\" data-slider-value=\"[0,20]\" id=\"min-bed\"><br/>
                                        <b class=\"pull-left color numero\">1</b>
                                        <b class=\"pull-right color numero\">20</b>
                                    </div>
                                    <!-- End of -->
                                </div>
                                <br>
                                <div class=\"search-row\">
                                    <div class=\"form-group\">
                                        <div class=\"checkbox\">
                                            <label>
                                                <input type=\"checkbox\" name=\"meuble\" id=\"meuble\">
                                                Meublé
                                            </label>
                                        </div>
                                    </div>
                                    <!-- End of -->
                                    <div class=\"form-group\">
                                        <div class=\"checkbox\">
                                            <label>
                                                <input type=\"checkbox\" name=\"balcon\" id=\"balcon\">
                                                Avec balcon
                                            </label>
                                        </div>
                                    </div>
                                    <!-- End of -->
                                    <div class=\"form-group\">
                                        <div class=\"checkbox\">
                                            <label>
                                                <input type=\"checkbox\" name=\"parking\" id=\"parking\">
                                                Avec parking
                                            </label>
                                        </div>
                                    </div>
                                    <!-- End of -->
                                </div>

                                <div class=\"search-row\">
                                    <hr>
                                </div>
                                <button class=\"btn search-btn prop-btm-sheaerch\" type=\"submit\">
                                    <i class=\"fa fa-search\"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                    ";
        
        $__internal_ded25a4bc019be0212fb3b071c78f3e45807b011c71d8546b7423a7088b10495->leave($__internal_ded25a4bc019be0212fb3b071c78f3e45807b011c71d8546b7423a7088b10495_prof);

        
        $__internal_519e5f213aefcca91d19d716a56f190a2b7e677969fa63d39a27ce2d8e67a63e->leave($__internal_519e5f213aefcca91d19d716a56f190a2b7e677969fa63d39a27ce2d8e67a63e_prof);

    }

    // line 220
    public function block_catalogue($context, array $blocks = array())
    {
        $__internal_42c1d5fe905494bcb437d6da189c4dc5a3b3e0f329148f8cbc98c0891a93d197 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42c1d5fe905494bcb437d6da189c4dc5a3b3e0f329148f8cbc98c0891a93d197->enter($__internal_42c1d5fe905494bcb437d6da189c4dc5a3b3e0f329148f8cbc98c0891a93d197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "catalogue"));

        $__internal_c8d2f2a7c4e91cb6edcc762c64f4c65a92dae4643aefd1912184bb43b5ab03ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8d2f2a7c4e91cb6edcc762c64f4c65a92dae4643aefd1912184bb43b5ab03ad->enter($__internal_c8d2f2a7c4e91cb6edcc762c64f4c65a92dae4643aefd1912184bb43b5ab03ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "catalogue"));

        // line 221
        echo "    <!-- property area -->
    <div class=\"content-area home-area-1 recent-property\" style=\"background-color: #FCFCFC; padding-bottom: 55px;\">
        <div class=\"container\">
            ";
        // line 224
        $this->displayBlock('titre_catalogue', $context, $blocks);
        // line 233
        echo "            ";
        $this->displayBlock('articles', $context, $blocks);
        // line 272
        echo "        </div>
    </div>
    ";
        
        $__internal_c8d2f2a7c4e91cb6edcc762c64f4c65a92dae4643aefd1912184bb43b5ab03ad->leave($__internal_c8d2f2a7c4e91cb6edcc762c64f4c65a92dae4643aefd1912184bb43b5ab03ad_prof);

        
        $__internal_42c1d5fe905494bcb437d6da189c4dc5a3b3e0f329148f8cbc98c0891a93d197->leave($__internal_42c1d5fe905494bcb437d6da189c4dc5a3b3e0f329148f8cbc98c0891a93d197_prof);

    }

    // line 224
    public function block_titre_catalogue($context, array $blocks = array())
    {
        $__internal_8d0e0079874d71a2aa5c368a2adad6bf858d0f6e178de44f0a0f592cb13c2e9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d0e0079874d71a2aa5c368a2adad6bf858d0f6e178de44f0a0f592cb13c2e9b->enter($__internal_8d0e0079874d71a2aa5c368a2adad6bf858d0f6e178de44f0a0f592cb13c2e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_catalogue"));

        $__internal_a6c93645e18b54f852c01438a6a62161213bfb17e93089766160a6fe4c3c273f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6c93645e18b54f852c01438a6a62161213bfb17e93089766160a6fe4c3c273f->enter($__internal_a6c93645e18b54f852c01438a6a62161213bfb17e93089766160a6fe4c3c273f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_catalogue"));

        // line 225
        echo "            <div class=\"row\">
                <div class=\"col-md-10 col-md-offset-1 col-sm-12 text-center page-title\">
                    <!-- /.feature title -->
                    <h2>Top des propriétés soumises</h2>
                    <p>Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium. Nullam sed arcu ultricies .</p>
                </div>
            </div>
            ";
        
        $__internal_a6c93645e18b54f852c01438a6a62161213bfb17e93089766160a6fe4c3c273f->leave($__internal_a6c93645e18b54f852c01438a6a62161213bfb17e93089766160a6fe4c3c273f_prof);

        
        $__internal_8d0e0079874d71a2aa5c368a2adad6bf858d0f6e178de44f0a0f592cb13c2e9b->leave($__internal_8d0e0079874d71a2aa5c368a2adad6bf858d0f6e178de44f0a0f592cb13c2e9b_prof);

    }

    // line 233
    public function block_articles($context, array $blocks = array())
    {
        $__internal_faf0d570374b93b545a2563e7dca10233ed4c7d946c1584342135c3f6ca467d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faf0d570374b93b545a2563e7dca10233ed4c7d946c1584342135c3f6ca467d1->enter($__internal_faf0d570374b93b545a2563e7dca10233ed4c7d946c1584342135c3f6ca467d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "articles"));

        $__internal_fabba2981bcd0c2b2aa50bc3130895a975b5a47530065fa3c16b10d62e9b22d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fabba2981bcd0c2b2aa50bc3130895a975b5a47530065fa3c16b10d62e9b22d3->enter($__internal_fabba2981bcd0c2b2aa50bc3130895a975b5a47530065fa3c16b10d62e9b22d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "articles"));

        // line 234
        echo "            <div class=\"row\">
                <div class=\"proerty-th\">
                    ";
        // line 236
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biens"] ?? $this->getContext($context, "biens")));
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 237
            echo "                    <div class=\"col-sm-6 col-md-3 p0\">
                        <div class=\"box-two proerty-item\">
                            <div class=\"item-thumb\">
                                <a href=\"";
            // line 240
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_approuver", array("idBien" => $this->getAttribute($context["bien"], "id", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["bien"], "chemin", array())), "html", null, true);
            echo "\"></a>
                            </div>
                            <div class=\"item-entry overflow\">
                                <h5>
                                    <a href=\"";
            // line 244
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reservation_approuver", array("idBien" => $this->getAttribute($context["bien"], "id", array()))), "html", null, true);
            echo "s\">Superbe ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "nomTypeBien", array()), "html", null, true);
            echo "</a>
                                </h5>
                                <div class=\"dot-hr\"></div>
                                <span class=\"pull-left\">
                                    <b>Surface : </b>";
            // line 248
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "surface", array()), "html", null, true);
            echo "
                                </span>
                                <span class=\"proerty-price pull-right\">";
            // line 250
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "prixLoc", array()), "html", null, true);
            echo " f</span>
                            </div>
                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 255
        echo "                    <div class=\"col-sm-6 col-md-3 p0\">
                        <div class=\"box-tree more-proerty text-center\">
                            <div class=\"item-tree-icon\">
                                <i class=\"fa fa-th\"></i>
                            </div>
                            <div class=\"more-entry overflow\">
                                <h5>
                                    <a href=\"property-1.html\">DU MAL À DECIDER ?</a>
                                </h5>
                                <h5 class=\"tree-sub-ttl\">Voir toutes les propriétés</h5>
                                <a href=\"\" ><button class=\"btn border-btn more-black\" value=\"All properties\">Toutes les propriétés</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ";
        
        $__internal_fabba2981bcd0c2b2aa50bc3130895a975b5a47530065fa3c16b10d62e9b22d3->leave($__internal_fabba2981bcd0c2b2aa50bc3130895a975b5a47530065fa3c16b10d62e9b22d3_prof);

        
        $__internal_faf0d570374b93b545a2563e7dca10233ed4c7d946c1584342135c3f6ca467d1->leave($__internal_faf0d570374b93b545a2563e7dca10233ed4c7d946c1584342135c3f6ca467d1_prof);

    }

    // line 275
    public function block_bienvenu($context, array $blocks = array())
    {
        $__internal_7ac378ad3cb1cdd52fda4edbebb026486a8a34bdfa095f8c59a2ed5b1b50cb00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ac378ad3cb1cdd52fda4edbebb026486a8a34bdfa095f8c59a2ed5b1b50cb00->enter($__internal_7ac378ad3cb1cdd52fda4edbebb026486a8a34bdfa095f8c59a2ed5b1b50cb00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bienvenu"));

        $__internal_52875bc6fe4f69b2a26031bf74fccbd7e9f26b5fe9022459906a664ec5375ffd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52875bc6fe4f69b2a26031bf74fccbd7e9f26b5fe9022459906a664ec5375ffd->enter($__internal_52875bc6fe4f69b2a26031bf74fccbd7e9f26b5fe9022459906a664ec5375ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bienvenu"));

        // line 276
        echo "    <!--Welcome area -->
    <div class=\"Welcome-area\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 Welcome-entry col-sm-12\">
                    <div class=\"col-md-5 col-md-offset-2 col-sm-6 col-xs-12\">
                        <div class=\"welcome_text wow fadeInLeft\" data-wow-delay=\"0.3s\" data-wow-offset=\"100\">
                            <div class=\"row\">
                                <div class=\"col-md-10 col-md-offset-1 col-sm-12 text-center page-title\">
                                    <!-- /.feature title -->
                                    <h2>SOUL TANA</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-5 col-sm-6 col-xs-12\">
                        <div class=\"welcome_services wow fadeInRight\" data-wow-delay=\"0.3s\" data-wow-offset=\"100\">
                            <div class=\"row\">
                                <div class=\"col-xs-6 m-padding\">
                                    <div class=\"welcome-estate\">
                                        <div class=\"welcome-icon\">
                                            <i class=\"pe-7s-home pe-4x\"></i>
                                        </div>
                                        <h3>Any property</h3>
                                    </div>
                                </div>
                                <div class=\"col-xs-6 m-padding\">
                                    <div class=\"welcome-estate\">
                                        <div class=\"welcome-icon\">
                                            <i class=\"pe-7s-users pe-4x\"></i>
                                        </div>
                                        <h3>More Clients</h3>
                                    </div>
                                </div>

                                <div class=\"col-xs-12 text-center\">
                                    <i class=\"welcome-circle\"></i>
                                </div>

                                <div class=\"col-xs-6 m-padding\">
                                    <div class=\"welcome-estate\">
                                        <div class=\"welcome-icon\">
                                            <i class=\"pe-7s-notebook pe-4x\"></i>
                                        </div>
                                        <h3>Easy to use</h3>
                                    </div>
                                </div>
                                <div class=\"col-xs-6 m-padding\">
                                    <div class=\"welcome-estate\">
                                        <div class=\"welcome-icon\">
                                            <i class=\"pe-7s-help2 pe-4x\"></i>
                                        </div>
                                        <h3>Any help</h3>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        
        $__internal_52875bc6fe4f69b2a26031bf74fccbd7e9f26b5fe9022459906a664ec5375ffd->leave($__internal_52875bc6fe4f69b2a26031bf74fccbd7e9f26b5fe9022459906a664ec5375ffd_prof);

        
        $__internal_7ac378ad3cb1cdd52fda4edbebb026486a8a34bdfa095f8c59a2ed5b1b50cb00->leave($__internal_7ac378ad3cb1cdd52fda4edbebb026486a8a34bdfa095f8c59a2ed5b1b50cb00_prof);

    }

    // line 340
    public function block_temoignages1($context, array $blocks = array())
    {
        $__internal_b6336788cbd586ed15d81ea097d42dc19e94fd14ad9f4fd46f3c85f8c4ed2920 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6336788cbd586ed15d81ea097d42dc19e94fd14ad9f4fd46f3c85f8c4ed2920->enter($__internal_b6336788cbd586ed15d81ea097d42dc19e94fd14ad9f4fd46f3c85f8c4ed2920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "temoignages1"));

        $__internal_a1bbb9ce8a77d632defede5dc3cb2f06ca498afb7f1cd34b2367690ab43038e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1bbb9ce8a77d632defede5dc3cb2f06ca498afb7f1cd34b2367690ab43038e6->enter($__internal_a1bbb9ce8a77d632defede5dc3cb2f06ca498afb7f1cd34b2367690ab43038e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "temoignages1"));

        // line 341
        echo "    <!--TESTIMONIALS -->
    <div class=\"testimonial-area recent-property\" style=\"background-color: #FCFCFC; padding-bottom: 15px;\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-10 col-md-offset-1 col-sm-12 text-center page-title\">
                    <!-- /.feature title -->
                    <h2>Nos Clients ont dit</h2>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"row testimonial\">
                    <div class=\"col-md-12\">
                        <div id=\"testimonial-slider\">
                            <div class=\"item\">
                                <div class=\"client-text\">
                                    <p>Nulla quis dapibus nisl. Suspendisse llam sed arcu ultried arcu ultricies !</p>
                                    <h4>
                                        <strong>Ohidul Islam,</strong>
                                        <i>Web Designer</i>
                                    </h4>
                                </div>
                                <div class=\"client-face wow fadeInRight\" data-wow-delay=\".9s\">
                                    <img src=\"";
        // line 364
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/client-face1.png"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"client-text\">
                                    <p>Nulla quis dapibus nisl. Suspendisse llam sed arcu ultried arcu ultricies !</p>
                                    <h4>
                                        <strong>Ohidul Islam,</strong>
                                        <i>Web Designer</i>
                                    </h4>
                                </div>
                                <div class=\"client-face\">
                                    <img src=\"";
        // line 376
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/client-face2.png"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"client-text\">
                                    <p>Nulla quis dapibus nisl. Suspendisse llam sed arcu ultried arcu ultricies !</p>
                                    <h4>
                                        <strong>Ohidul Islam,
                                        </strong>
                                        <i>Web Designer</i>
                                    </h4>
                                </div>
                                <div class=\"client-face\">
                                    <img src=\"";
        // line 389
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/client-face1.png"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"client-text\">
                                    <p>Nulla quis dapibus nisl. Suspendisse llam sed arcu ultried arcu ultricies !</p>
                                    <h4>
                                        <strong>Ohidul Islam,
                                        </strong>
                                        <i>Web Designer</i>
                                    </h4>
                                </div>
                                <div class=\"client-face\">
                                    <img src=\"";
        // line 402
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/client-face2.png"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    ";
        
        $__internal_a1bbb9ce8a77d632defede5dc3cb2f06ca498afb7f1cd34b2367690ab43038e6->leave($__internal_a1bbb9ce8a77d632defede5dc3cb2f06ca498afb7f1cd34b2367690ab43038e6_prof);

        
        $__internal_b6336788cbd586ed15d81ea097d42dc19e94fd14ad9f4fd46f3c85f8c4ed2920->leave($__internal_b6336788cbd586ed15d81ea097d42dc19e94fd14ad9f4fd46f3c85f8c4ed2920_prof);

    }

    // line 413
    public function block_temoignages2($context, array $blocks = array())
    {
        $__internal_9c91d90a39f25e33045caacf29243e77a17fac3feef4a526b94dc619975b0c51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c91d90a39f25e33045caacf29243e77a17fac3feef4a526b94dc619975b0c51->enter($__internal_9c91d90a39f25e33045caacf29243e77a17fac3feef4a526b94dc619975b0c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "temoignages2"));

        $__internal_dcbe199ee0b38adabfaf9e446c1611247a4353cc73ac871e952875c5c89fa011 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcbe199ee0b38adabfaf9e446c1611247a4353cc73ac871e952875c5c89fa011->enter($__internal_dcbe199ee0b38adabfaf9e446c1611247a4353cc73ac871e952875c5c89fa011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "temoignages2"));

        // line 414
        echo "    <!-- Count area -->
    <div class=\"count-area\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-10 col-md-offset-1 col-sm-12 text-center page-title\">
                    <!-- /.feature title -->
                    <h2>Vous Pouvez Nous Faire Confiance
                    </h2>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12 col-xs-12 percent-blocks m-main\" data-waypoint-scroll=\"true\">
                    <div class=\"row\">
                        <div class=\"col-sm-3 col-xs-6\">
                            <div class=\"count-item\">
                                <div class=\"count-item-circle\">
                                    <span class=\"pe-7s-users\"></span>
                                </div>
                                <div class=\"chart\" data-percent=\"5000\">
                                    <h2 class=\"percent\" id=\"counter\">0</h2>
                                    <h5>Client satisfaits
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-3 col-xs-6\">
                            <div class=\"count-item\">
                                <div class=\"count-item-circle\">
                                    <span class=\"pe-7s-home\"></span>
                                </div>
                                <div class=\"chart\" data-percent=\"12000\">
                                    <h2 class=\"percent\" id=\"counter1\">0</h2>
                                    <h5>propriétés en stock</h5>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-3 col-xs-6\">
                            <div class=\"count-item\">
                                <div class=\"count-item-circle\">
                                    <span class=\"pe-7s-flag\"></span>
                                </div>
                                <div class=\"chart\" data-percent=\"120\">
                                    <h2 class=\"percent\" id=\"counter2\">0</h2>
                                    <h5>VILLES ENREGISTRÉES
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-3 col-xs-6\">
                            <div class=\"count-item\">
                                <div class=\"count-item-circle\">
                                    <span class=\"pe-7s-graph2\"></span>
                                </div>
                                <div class=\"chart\" data-percent=\"5000\">
                                    <h2 class=\"percent\" id=\"counter3\">5000</h2>
                                    <h5>BRANCHES DE CONCESSION</h5>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        
        $__internal_dcbe199ee0b38adabfaf9e446c1611247a4353cc73ac871e952875c5c89fa011->leave($__internal_dcbe199ee0b38adabfaf9e446c1611247a4353cc73ac871e952875c5c89fa011_prof);

        
        $__internal_9c91d90a39f25e33045caacf29243e77a17fac3feef4a526b94dc619975b0c51->leave($__internal_9c91d90a39f25e33045caacf29243e77a17fac3feef4a526b94dc619975b0c51_prof);

    }

    // line 480
    public function block_zone_de_recherche($context, array $blocks = array())
    {
        $__internal_90396124e93e8a0855fe3b1542672a1bedd188d2971cc252bfdab942bcf1dde2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90396124e93e8a0855fe3b1542672a1bedd188d2971cc252bfdab942bcf1dde2->enter($__internal_90396124e93e8a0855fe3b1542672a1bedd188d2971cc252bfdab942bcf1dde2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "zone_de_recherche"));

        $__internal_173c66ad22d39b6eccbe0bb682c389faa2088cb3181c910c83920b803cc054da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_173c66ad22d39b6eccbe0bb682c389faa2088cb3181c910c83920b803cc054da->enter($__internal_173c66ad22d39b6eccbe0bb682c389faa2088cb3181c910c83920b803cc054da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "zone_de_recherche"));

        // line 481
        echo "    <!-- boy-sale area -->
    <div class=\"boy-sale-area\">
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"col-md-6 col-sm-10 col-sm-offset-1 col-md-offset-0 col-xs-12\">
                    <div class=\"asks-first\">
                        <div class=\"asks-first-circle\">
                            <span class=\"fa fa-search\"></span>
                        </div>
                        <div class=\"asks-first-info\">
                            <h2>CHERCHEZ VOUS UNE  Propriété ?</h2>
                            <p>
                                varius od lio eget conseq uat blandit, lorem auglue comm lodo nisl no us nibh mas lsa</p>
                        </div>
                        <div class=\"asks-first-arrow\">
                            <a href=\"properties.html\">
                                <span class=\"fa fa-angle-right\"></span></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-sm-10 col-sm-offset-1 col-xs-12 col-md-offset-0\">
                    <div class=\"asks-first\">
                        <div class=\"asks-first-circle\">
                            <span class=\"fa fa-usd\"></span>
                        </div>
                        <div class=\"asks-first-info\">
                            <h2>VENDEZ VOUS UNE Propriété ?</h2>
                            <p>
                                varius od lio eget conseq uat blandit, lorem auglue comm lodo nisl no us nibh mas lsa</p>
                        </div>
                        <div class=\"asks-first-arrow\">
                            <a href=\"properties.html\">
                                <span class=\"fa fa-angle-right\"></span></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-xs-12\">
                    <p class=\"asks-call\">QUESTIONS? APPELEZ NOUS :
                        <span class=\"strong\">
                            + 221 33 800 00 00</span></p>
                </div>
            </div>
        </div>
    </div>
    ";
        
        $__internal_173c66ad22d39b6eccbe0bb682c389faa2088cb3181c910c83920b803cc054da->leave($__internal_173c66ad22d39b6eccbe0bb682c389faa2088cb3181c910c83920b803cc054da_prof);

        
        $__internal_90396124e93e8a0855fe3b1542672a1bedd188d2971cc252bfdab942bcf1dde2->leave($__internal_90396124e93e8a0855fe3b1542672a1bedd188d2971cc252bfdab942bcf1dde2_prof);

    }

    // line 528
    public function block_footer($context, array $blocks = array())
    {
        $__internal_8a6d7f241dc5eef7b4ae64831c762c41071b39de89290955c526213e57113ca0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a6d7f241dc5eef7b4ae64831c762c41071b39de89290955c526213e57113ca0->enter($__internal_8a6d7f241dc5eef7b4ae64831c762c41071b39de89290955c526213e57113ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_db28d7d81302baef2bc1bf2044603e1e0ce40fd325695312dd3e682308d5ede2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db28d7d81302baef2bc1bf2044603e1e0ce40fd325695312dd3e682308d5ede2->enter($__internal_db28d7d81302baef2bc1bf2044603e1e0ce40fd325695312dd3e682308d5ede2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 529
        echo "    <!-- Footer area-->
    <div class=\"footer-area\">
        <div class=\" footer\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-md-3 col-sm-6 wow fadeInRight animated\">
                        <div class=\"single-footer\">
                            <h4>À propos de nous </h4>
                            <div class=\"footer-title-line\"></div>

                            <img src=\"";
        // line 540
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/footer-logo.png"), "html", null, true);
        echo "\" alt=\"\" class=\"wow pulse\" data-wow-delay=\"1s\">
                            <p>Lorem ipsum dolor cum necessitatibus su quisquam molestias. Vel unde, blanditiis.</p>
                            <ul class=\"footer-adress\">
                                <li><i class=\"pe-7s-map-marker strong\"> </i> 9089 your adress her</li>
                                <li><i class=\"pe-7s-mail strong\"> </i> soultanaimmo@gmail.com</li>
                                <li><i class=\"pe-7s-call strong\"> </i> + 221 33 800 00 00</li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 wow fadeInRight animated\">
                        <div class=\"single-footer\">
                            <h4>liens rapides </h4>
                            <div class=\"footer-title-line\"></div>
                            <ul class=\"footer-menu\">
                                <li><a href=\"properties.html\">Properties</a>  </li>
                                <li><a href=\"#\">Services</a>  </li>
                                <li><a href=\"submit-property.html\">Submit property </a></li>
                                <li><a href=\"contact.html\">Contact us</a></li>
                                <li><a href=\"faq.html\">fqa</a>  </li>
                                <li><a href=\"faq.html\">Terms </a>  </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 wow fadeInRight animated\">
                        <div class=\"single-footer\">
                            <h4>News</h4>
                            <div class=\"footer-title-line\"></div>
                            <ul class=\"footer-blog\">
                                <li>
                                    <div class=\"col-md-3 col-sm-4 col-xs-4 blg-thumb p0\">
                                        <a href=\"single.html\">
                                            <img src=\"";
        // line 571
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/demo/small-proerty-2.jpg"), "html", null, true);
        echo "\">
                                        </a>
                                        <span class=\"blg-date\">12-12-2016</span>

                                    </div>
                                    <div class=\"col-md-8  col-sm-8 col-xs-8  blg-entry\">
                                        <h6> <a href=\"single.html\">Add news functions </a></h6>
                                        <p style=\"line-height: 17px; padding: 8px 2px;\">Lorem ipsum dolor sit amet, nulla ...</p>
                                    </div>
                                </li>

                                <li>
                                    <div class=\"col-md-3 col-sm-4 col-xs-4 blg-thumb p0\">
                                        <a href=\"single.html\">
                                            <img src=\"";
        // line 585
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/demo/small-proerty-2.jpg"), "html", null, true);
        echo "\">
                                        </a>
                                        <span class=\"blg-date\">12-12-2016</span>

                                    </div>
                                    <div class=\"col-md-8  col-sm-8 col-xs-8  blg-entry\">
                                        <h6> <a href=\"single.html\">Add news functions </a></h6>
                                        <p style=\"line-height: 17px; padding: 8px 2px;\">Lorem ipsum dolor sit amet, nulla ...</p>
                                    </div>
                                </li>

                                <li>
                                    <div class=\"col-md-3 col-sm-4 col-xs-4 blg-thumb p0\">
                                        <a href=\"single.html\">
                                            <img src=\"";
        // line 599
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/demo/small-proerty-2.jpg"), "html", null, true);
        echo "\">
                                        </a>
                                        <span class=\"blg-date\">12-12-2016</span>

                                    </div>
                                    <div class=\"col-md-8  col-sm-8 col-xs-8  blg-entry\">
                                        <h6> <a href=\"single.html\">Add news functions </a></h6>
                                        <p style=\"line-height: 17px; padding: 8px 2px;\">Lorem ipsum dolor sit amet, nulla ...</p>
                                    </div>
                                </li>


                            </ul>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 wow fadeInRight animated\">
                        <div class=\"single-footer news-letter\">
                            <h4>Restez en contact</h4>
                            <div class=\"footer-title-line\"></div>
                            <p>Lorem ipsum dolor sit amet, nulla  suscipit similique quisquam molestias. Vel unde, blanditiis.</p>

                            <form>
                                <div class=\"input-group\">
                                    <input class=\"form-control\" type=\"text\" placeholder=\"E-mail ... \">
                                    <span class=\"input-group-btn\">
                                        <button class=\"btn btn-primary subscribe\" type=\"button\"><i class=\"pe-7s-paper-plane pe-2x\"></i></button>
                                    </span>
                                </div>
                                <!-- /input-group -->
                            </form>

                            <div class=\"social pull-right\">
                                <ul>
                                    <li><a class=\"wow fadeInUp animated\" href=\"https://twitter.com/kimarotec\"><i class=\"fa fa-twitter\"></i></a></li>
                                    <li><a class=\"wow fadeInUp animated\" href=\"https://www.facebook.com/kimarotec\" data-wow-delay=\"0.2s\"><i class=\"fa fa-facebook\"></i></a></li>
                                    <li><a class=\"wow fadeInUp animated\" href=\"https://plus.google.com/kimarotec\" data-wow-delay=\"0.3s\"><i class=\"fa fa-google-plus\"></i></a></li>
                                    <li><a class=\"wow fadeInUp animated\" href=\"https://instagram.com/kimarotec\" data-wow-delay=\"0.4s\"><i class=\"fa fa-instagram\"></i></a></li>
                                    <li><a class=\"wow fadeInUp animated\" href=\"https://instagram.com/kimarotec\" data-wow-delay=\"0.6s\"><i class=\"fa fa-dribbble\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class=\"footer-copy text-center\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"pull-left\">
                        <span> (C) <a href=\"http://www.KimaroTec.com\">KimaroTheme</a> , All rights reserved 2016  </span>
                    </div>
                    <div class=\"bottom-menu pull-right\">
                        <ul>
                            <li><a class=\"wow fadeInUp animated\" href=\"#\" data-wow-delay=\"0.2s\">Home</a></li>
                            <li><a class=\"wow fadeInUp animated\" href=\"#\" data-wow-delay=\"0.3s\">Property</a></li>
                            <li><a class=\"wow fadeInUp animated\" href=\"#\" data-wow-delay=\"0.4s\">Faq</a></li>
                            <li><a class=\"wow fadeInUp animated\" href=\"#\" data-wow-delay=\"0.6s\">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        
        $__internal_db28d7d81302baef2bc1bf2044603e1e0ce40fd325695312dd3e682308d5ede2->leave($__internal_db28d7d81302baef2bc1bf2044603e1e0ce40fd325695312dd3e682308d5ede2_prof);

        
        $__internal_8a6d7f241dc5eef7b4ae64831c762c41071b39de89290955c526213e57113ca0->leave($__internal_8a6d7f241dc5eef7b4ae64831c762c41071b39de89290955c526213e57113ca0_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1013 => 599,  996 => 585,  979 => 571,  945 => 540,  932 => 529,  923 => 528,  868 => 481,  859 => 480,  784 => 414,  775 => 413,  754 => 402,  738 => 389,  722 => 376,  707 => 364,  682 => 341,  673 => 340,  600 => 276,  591 => 275,  565 => 255,  554 => 250,  549 => 248,  540 => 244,  531 => 240,  526 => 237,  522 => 236,  518 => 234,  509 => 233,  492 => 225,  483 => 224,  471 => 272,  468 => 233,  466 => 224,  461 => 221,  452 => 220,  373 => 145,  362 => 143,  358 => 142,  352 => 138,  341 => 136,  337 => 135,  334 => 134,  325 => 126,  316 => 125,  302 => 215,  300 => 125,  288 => 116,  284 => 115,  280 => 114,  274 => 110,  265 => 109,  255 => 527,  252 => 480,  249 => 413,  246 => 340,  243 => 275,  240 => 220,  237 => 109,  228 => 108,  192 => 82,  183 => 76,  171 => 66,  162 => 65,  96 => 8,  87 => 7,  76 => 528,  73 => 108,  70 => 65,  68 => 7,  62 => 3,  53 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@RESERVATION/layout.html.twig' %}
{% block body %}
    <div id=\"preloader\">
        <div id=\"status\">&nbsp;</div>
    </div>
    <!-- Body content -->
    {% block header %}
    <div class=\"header-connect\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-5 col-sm-8  col-xs-12\">
                    <div class=\"header-half header-call\">
                        <p>
                            <span>
                                <i class=\"pe-7s-call\"></i>
                                +221 33 800 00 00</span>
                            <span>
                                <i class=\"pe-7s-mail\"></i>
                                soultanaimmo@gmail.com</span>
                        </p>
                    </div>
                </div>

                <div class=\"col-md-2 col-md-offset-5  col-sm-3 col-sm-offset-1  col-xs-12\">
                    <div class=\"header-half header-social\">
                        <ul class=\"list-inline\">
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-facebook\"></i>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-twitter\"></i>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-vine\"></i>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-linkedin\"></i>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-dribbble\"></i>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-instagram\"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End top header -->
    {% endblock %}
    {% block navbar %}
    <nav class=\"navbar navbar-default\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navigation\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"index.html\"><img src=\"{{asset('assets/img/logo.png')}}\" alt=\"\"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse yamm\" id=\"navigation\">
                <div class=\"button navbar-right\">
                    <button class=\"navbar-btn nav-button wow bounceInRight login\" data-wow-delay=\"0.45s\"><a style=\"color: white;\" href=\"{{path('reservation_connexion',{'action':0})}}\">Login</a></button>
                </div>
                <ul class=\"main-nav nav navbar-nav navbar-right\">
                    <li class=\"ymm-sw \" data-wow-delay=\"0.1s\">
                        <a href=\"\" class=\"active\">Accueil</a>
                    </li>

                    <li class=\"wow fadeInDown\" data-wow-delay=\"0.2s\">
                        <a class=\"\" href=\"properties.html\">Aide et conseils</a>
                    </li>

                    <li class=\"wow fadeInDown\" data-wow-delay=\"0.3s\">
                        <a class=\"\" href=\"property.html\">Propriètaire</a>
                    </li>

                    <li class=\"wow fadeInDown\" data-wow-delay=\"0.5s\">
                        <a href=\"contact.html\">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <!-- End of nav bar -->
    {% endblock %}
    {% block contenus %}
    {% block slide %}
    <div class=\"slider-area\">
        <div class=\"slider\">
            <div id=\"bg-slider\" class=\"owl-carousel owl-theme\">

                <div class=\"item\"><img src=\"{{asset('assets/img/slide1/slider-image-1.jpg')}}\" alt=\"GTA V\"></div>
                <div class=\"item\"><img src=\"{{asset('assets/img/slide1/slider-image-2.jpg')}}\" alt=\"The Last of us\"></div>
                <div class=\"item\"><img src=\"{{asset('assets/img/slide1/slider-image-1.jpg')}}\" alt=\"GTA V\"></div>

            </div>
        </div>
        <div class=\"slider-content\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12\">
                    <h2 class=\"notre_slogan\" style=\"color: #FDC600; font-weight: bold; text-shadow: #000000 1px 1px, #000000 -1px 1px, #000000 -1px -1px, #000000 1px -1px;\">1er sur l'immobilier des particuliers</h2>
                    <p class=\"notre_devise\" style=\"font-size: 18px; text-shadow:#FDC600 1px 1px, #FDC600 -1px 1px, #FDC600 -1px -1px, #FDC600 1px -1px;\">Leader dans ce domaine, la satisfaction de nos visiteurs fait notre bonheur !</p>
                    {% block form_recherche %}
                    <div class=\"search-form wow pulse changements\" data-wow-delay=\"0.8s\">
                        <form action=\"\" method=\"post\" data-form=\"form_recherche\" class=\"form-inline\">
                            <input type=\"hidden\" class=\"form-control\" name=\"form_type\" aria-describedby=\"helpId\" value=\"rechercher\">
                            <button class=\"btn  toggle-btn\" type=\"button\">
                                <i class=\"fa fa-bars\"></i>
                            </button>
                            <div class=\"form-group\">
                                {# <input type=\"text\" name=\"lieu\" id=\"lieu\" class=\"\" placeholder=\"Saisir une localité\"/> #}
                                <select name=\"lieu\" id=\"lunchBegins\" class=\"selectpicker inputForm\" data-live-search=\"true\" data-live-search-style=\"begins\" title=\"Choisir une localité\">
                                {% for ville in villes %}
                                    <option value=\"{{ ville.id }}\"> {{ ville.nomVille }} </option>
                                {% endfor %}
                                </select>
                            </div>
                            <div class=\"form-group\">
                                <select name=\"typeBien\" id=\"basic\" class=\"selectpicker show-tick form-control\" title=\"Choisir un bien\">
                                {% for typeBien in typesBien %}
                                    <option value=\"{{ typeBien.id }}\"> {{ typeBien.nomTypeBien }} </option>
                                {% endfor %}
                                </select>
                            </div>
                            <div class=\"form-group mar-r-20\">
                                <input type=\"text\" name=\"prix_choisi\" id=\"prix_choisi\" class=\"filter-option\" placeholder=\"\" readonly=\"true\" />
                                <input type=\"text\" name=\"prix\" class=\"span2 prix_compris\" data-slider-min=\"50\" data-slider-max=\"5000\" data-slider-step=\"5\" data-slider-value=\"[50,5000]\" value=\"50,5000\" id=\"price-range\"><br/>
                                <b class=\"pull-left color numero\">50 000f</b>
                                <b class=\"pull-right color numero\">500 000 000f</b>
                            </div>
                            <!-- End of -->
                            <button class=\"btn search-btn\" type=\"submit\">
                                <i class=\"fa fa-search\"></i>
                            </button>
                            <div style=\"display: none;\" class=\"search-toggle\">
                                <div class=\"search-row\">
                                    <div class=\"form-group mar-r-20\">
                                        <label for=\"price-range\">Nombre de salle de bains :</label>
                                        <input type=\"text\" name=\"nbreSallebains\" class=\"span2\" value=\"\" data-slider-min=\"1\" data-slider-max=\"20\" data-slider-step=\"5\" data-slider-value=\"[0,20]\" id=\"min-baths\"><br/>
                                        <b class=\"pull-left color numero\">1</b>
                                        <b class=\"pull-right color numero\">20</b>
                                    </div>
                                    <!-- End of -->
                                    <div class=\"form-group mar-l-20\">
                                        <label for=\"property-geo\">Nombre chambre à coucher :</label>
                                        <input type=\"text\" name=\"nbreChambres\" class=\"span2\" value=\"\" data-slider-min=\"1\" data-slider-max=\"20\" data-slider-step=\"5\" data-slider-value=\"[0,20]\" id=\"min-bed\"><br/>
                                        <b class=\"pull-left color numero\">1</b>
                                        <b class=\"pull-right color numero\">20</b>
                                    </div>
                                    <!-- End of -->
                                </div>
                                <br>
                                <div class=\"search-row\">
                                    <div class=\"form-group\">
                                        <div class=\"checkbox\">
                                            <label>
                                                <input type=\"checkbox\" name=\"meuble\" id=\"meuble\">
                                                Meublé
                                            </label>
                                        </div>
                                    </div>
                                    <!-- End of -->
                                    <div class=\"form-group\">
                                        <div class=\"checkbox\">
                                            <label>
                                                <input type=\"checkbox\" name=\"balcon\" id=\"balcon\">
                                                Avec balcon
                                            </label>
                                        </div>
                                    </div>
                                    <!-- End of -->
                                    <div class=\"form-group\">
                                        <div class=\"checkbox\">
                                            <label>
                                                <input type=\"checkbox\" name=\"parking\" id=\"parking\">
                                                Avec parking
                                            </label>
                                        </div>
                                    </div>
                                    <!-- End of -->
                                </div>

                                <div class=\"search-row\">
                                    <hr>
                                </div>
                                <button class=\"btn search-btn prop-btm-sheaerch\" type=\"submit\">
                                    <i class=\"fa fa-search\"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                    {% endblock %}
                </div>
            </div>
        </div>
    </div>
    {% endblock %}
    {% block catalogue %}
    <!-- property area -->
    <div class=\"content-area home-area-1 recent-property\" style=\"background-color: #FCFCFC; padding-bottom: 55px;\">
        <div class=\"container\">
            {% block titre_catalogue %}
            <div class=\"row\">
                <div class=\"col-md-10 col-md-offset-1 col-sm-12 text-center page-title\">
                    <!-- /.feature title -->
                    <h2>Top des propriétés soumises</h2>
                    <p>Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium. Nullam sed arcu ultricies .</p>
                </div>
            </div>
            {% endblock %}
            {% block articles %}
            <div class=\"row\">
                <div class=\"proerty-th\">
                    {% for bien in biens %}
                    <div class=\"col-sm-6 col-md-3 p0\">
                        <div class=\"box-two proerty-item\">
                            <div class=\"item-thumb\">
                                <a href=\"{{path('reservation_approuver',{'idBien':bien.id})}}\"><img src=\"{{asset(bien.chemin)}}\"></a>
                            </div>
                            <div class=\"item-entry overflow\">
                                <h5>
                                    <a href=\"{{path('reservation_approuver',{'idBien':bien.id})}}s\">Superbe {{ bien.nomTypeBien }}</a>
                                </h5>
                                <div class=\"dot-hr\"></div>
                                <span class=\"pull-left\">
                                    <b>Surface : </b>{{ bien.surface }}
                                </span>
                                <span class=\"proerty-price pull-right\">{{ bien.prixLoc }} f</span>
                            </div>
                        </div>
                    </div>
                    {% endfor %}
                    <div class=\"col-sm-6 col-md-3 p0\">
                        <div class=\"box-tree more-proerty text-center\">
                            <div class=\"item-tree-icon\">
                                <i class=\"fa fa-th\"></i>
                            </div>
                            <div class=\"more-entry overflow\">
                                <h5>
                                    <a href=\"property-1.html\">DU MAL À DECIDER ?</a>
                                </h5>
                                <h5 class=\"tree-sub-ttl\">Voir toutes les propriétés</h5>
                                <a href=\"\" ><button class=\"btn border-btn more-black\" value=\"All properties\">Toutes les propriétés</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {% endblock %}
        </div>
    </div>
    {% endblock %}
    {% block bienvenu %}
    <!--Welcome area -->
    <div class=\"Welcome-area\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 Welcome-entry col-sm-12\">
                    <div class=\"col-md-5 col-md-offset-2 col-sm-6 col-xs-12\">
                        <div class=\"welcome_text wow fadeInLeft\" data-wow-delay=\"0.3s\" data-wow-offset=\"100\">
                            <div class=\"row\">
                                <div class=\"col-md-10 col-md-offset-1 col-sm-12 text-center page-title\">
                                    <!-- /.feature title -->
                                    <h2>SOUL TANA</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-5 col-sm-6 col-xs-12\">
                        <div class=\"welcome_services wow fadeInRight\" data-wow-delay=\"0.3s\" data-wow-offset=\"100\">
                            <div class=\"row\">
                                <div class=\"col-xs-6 m-padding\">
                                    <div class=\"welcome-estate\">
                                        <div class=\"welcome-icon\">
                                            <i class=\"pe-7s-home pe-4x\"></i>
                                        </div>
                                        <h3>Any property</h3>
                                    </div>
                                </div>
                                <div class=\"col-xs-6 m-padding\">
                                    <div class=\"welcome-estate\">
                                        <div class=\"welcome-icon\">
                                            <i class=\"pe-7s-users pe-4x\"></i>
                                        </div>
                                        <h3>More Clients</h3>
                                    </div>
                                </div>

                                <div class=\"col-xs-12 text-center\">
                                    <i class=\"welcome-circle\"></i>
                                </div>

                                <div class=\"col-xs-6 m-padding\">
                                    <div class=\"welcome-estate\">
                                        <div class=\"welcome-icon\">
                                            <i class=\"pe-7s-notebook pe-4x\"></i>
                                        </div>
                                        <h3>Easy to use</h3>
                                    </div>
                                </div>
                                <div class=\"col-xs-6 m-padding\">
                                    <div class=\"welcome-estate\">
                                        <div class=\"welcome-icon\">
                                            <i class=\"pe-7s-help2 pe-4x\"></i>
                                        </div>
                                        <h3>Any help</h3>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {% endblock %}
    {% block temoignages1 %}
    <!--TESTIMONIALS -->
    <div class=\"testimonial-area recent-property\" style=\"background-color: #FCFCFC; padding-bottom: 15px;\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-10 col-md-offset-1 col-sm-12 text-center page-title\">
                    <!-- /.feature title -->
                    <h2>Nos Clients ont dit</h2>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"row testimonial\">
                    <div class=\"col-md-12\">
                        <div id=\"testimonial-slider\">
                            <div class=\"item\">
                                <div class=\"client-text\">
                                    <p>Nulla quis dapibus nisl. Suspendisse llam sed arcu ultried arcu ultricies !</p>
                                    <h4>
                                        <strong>Ohidul Islam,</strong>
                                        <i>Web Designer</i>
                                    </h4>
                                </div>
                                <div class=\"client-face wow fadeInRight\" data-wow-delay=\".9s\">
                                    <img src=\"{{asset('assets/img/client-face1.png')}}\" alt=\"\">
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"client-text\">
                                    <p>Nulla quis dapibus nisl. Suspendisse llam sed arcu ultried arcu ultricies !</p>
                                    <h4>
                                        <strong>Ohidul Islam,</strong>
                                        <i>Web Designer</i>
                                    </h4>
                                </div>
                                <div class=\"client-face\">
                                    <img src=\"{{asset('assets/img/client-face2.png')}}\" alt=\"\">
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"client-text\">
                                    <p>Nulla quis dapibus nisl. Suspendisse llam sed arcu ultried arcu ultricies !</p>
                                    <h4>
                                        <strong>Ohidul Islam,
                                        </strong>
                                        <i>Web Designer</i>
                                    </h4>
                                </div>
                                <div class=\"client-face\">
                                    <img src=\"{{asset('assets/img/client-face1.png')}}\" alt=\"\">
                                </div>
                            </div>
                            <div class=\"item\">
                                <div class=\"client-text\">
                                    <p>Nulla quis dapibus nisl. Suspendisse llam sed arcu ultried arcu ultricies !</p>
                                    <h4>
                                        <strong>Ohidul Islam,
                                        </strong>
                                        <i>Web Designer</i>
                                    </h4>
                                </div>
                                <div class=\"client-face\">
                                    <img src=\"{{asset('assets/img/client-face2.png')}}\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {% endblock %}
    {% block temoignages2 %}
    <!-- Count area -->
    <div class=\"count-area\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-10 col-md-offset-1 col-sm-12 text-center page-title\">
                    <!-- /.feature title -->
                    <h2>Vous Pouvez Nous Faire Confiance
                    </h2>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12 col-xs-12 percent-blocks m-main\" data-waypoint-scroll=\"true\">
                    <div class=\"row\">
                        <div class=\"col-sm-3 col-xs-6\">
                            <div class=\"count-item\">
                                <div class=\"count-item-circle\">
                                    <span class=\"pe-7s-users\"></span>
                                </div>
                                <div class=\"chart\" data-percent=\"5000\">
                                    <h2 class=\"percent\" id=\"counter\">0</h2>
                                    <h5>Client satisfaits
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-3 col-xs-6\">
                            <div class=\"count-item\">
                                <div class=\"count-item-circle\">
                                    <span class=\"pe-7s-home\"></span>
                                </div>
                                <div class=\"chart\" data-percent=\"12000\">
                                    <h2 class=\"percent\" id=\"counter1\">0</h2>
                                    <h5>propriétés en stock</h5>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-3 col-xs-6\">
                            <div class=\"count-item\">
                                <div class=\"count-item-circle\">
                                    <span class=\"pe-7s-flag\"></span>
                                </div>
                                <div class=\"chart\" data-percent=\"120\">
                                    <h2 class=\"percent\" id=\"counter2\">0</h2>
                                    <h5>VILLES ENREGISTRÉES
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-3 col-xs-6\">
                            <div class=\"count-item\">
                                <div class=\"count-item-circle\">
                                    <span class=\"pe-7s-graph2\"></span>
                                </div>
                                <div class=\"chart\" data-percent=\"5000\">
                                    <h2 class=\"percent\" id=\"counter3\">5000</h2>
                                    <h5>BRANCHES DE CONCESSION</h5>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {% endblock  %}
    {% block zone_de_recherche %}
    <!-- boy-sale area -->
    <div class=\"boy-sale-area\">
        <div class=\"container\">
            <div class=\"row\">

                <div class=\"col-md-6 col-sm-10 col-sm-offset-1 col-md-offset-0 col-xs-12\">
                    <div class=\"asks-first\">
                        <div class=\"asks-first-circle\">
                            <span class=\"fa fa-search\"></span>
                        </div>
                        <div class=\"asks-first-info\">
                            <h2>CHERCHEZ VOUS UNE  Propriété ?</h2>
                            <p>
                                varius od lio eget conseq uat blandit, lorem auglue comm lodo nisl no us nibh mas lsa</p>
                        </div>
                        <div class=\"asks-first-arrow\">
                            <a href=\"properties.html\">
                                <span class=\"fa fa-angle-right\"></span></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6 col-sm-10 col-sm-offset-1 col-xs-12 col-md-offset-0\">
                    <div class=\"asks-first\">
                        <div class=\"asks-first-circle\">
                            <span class=\"fa fa-usd\"></span>
                        </div>
                        <div class=\"asks-first-info\">
                            <h2>VENDEZ VOUS UNE Propriété ?</h2>
                            <p>
                                varius od lio eget conseq uat blandit, lorem auglue comm lodo nisl no us nibh mas lsa</p>
                        </div>
                        <div class=\"asks-first-arrow\">
                            <a href=\"properties.html\">
                                <span class=\"fa fa-angle-right\"></span></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-xs-12\">
                    <p class=\"asks-call\">QUESTIONS? APPELEZ NOUS :
                        <span class=\"strong\">
                            + 221 33 800 00 00</span></p>
                </div>
            </div>
        </div>
    </div>
    {% endblock  %}
    {% endblock %}
    {% block footer %}
    <!-- Footer area-->
    <div class=\"footer-area\">
        <div class=\" footer\">
            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-md-3 col-sm-6 wow fadeInRight animated\">
                        <div class=\"single-footer\">
                            <h4>À propos de nous </h4>
                            <div class=\"footer-title-line\"></div>

                            <img src=\"{{asset('assets/img/footer-logo.png')}}\" alt=\"\" class=\"wow pulse\" data-wow-delay=\"1s\">
                            <p>Lorem ipsum dolor cum necessitatibus su quisquam molestias. Vel unde, blanditiis.</p>
                            <ul class=\"footer-adress\">
                                <li><i class=\"pe-7s-map-marker strong\"> </i> 9089 your adress her</li>
                                <li><i class=\"pe-7s-mail strong\"> </i> soultanaimmo@gmail.com</li>
                                <li><i class=\"pe-7s-call strong\"> </i> + 221 33 800 00 00</li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 wow fadeInRight animated\">
                        <div class=\"single-footer\">
                            <h4>liens rapides </h4>
                            <div class=\"footer-title-line\"></div>
                            <ul class=\"footer-menu\">
                                <li><a href=\"properties.html\">Properties</a>  </li>
                                <li><a href=\"#\">Services</a>  </li>
                                <li><a href=\"submit-property.html\">Submit property </a></li>
                                <li><a href=\"contact.html\">Contact us</a></li>
                                <li><a href=\"faq.html\">fqa</a>  </li>
                                <li><a href=\"faq.html\">Terms </a>  </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 wow fadeInRight animated\">
                        <div class=\"single-footer\">
                            <h4>News</h4>
                            <div class=\"footer-title-line\"></div>
                            <ul class=\"footer-blog\">
                                <li>
                                    <div class=\"col-md-3 col-sm-4 col-xs-4 blg-thumb p0\">
                                        <a href=\"single.html\">
                                            <img src=\"{{asset('assets/img/demo/small-proerty-2.jpg')}}\">
                                        </a>
                                        <span class=\"blg-date\">12-12-2016</span>

                                    </div>
                                    <div class=\"col-md-8  col-sm-8 col-xs-8  blg-entry\">
                                        <h6> <a href=\"single.html\">Add news functions </a></h6>
                                        <p style=\"line-height: 17px; padding: 8px 2px;\">Lorem ipsum dolor sit amet, nulla ...</p>
                                    </div>
                                </li>

                                <li>
                                    <div class=\"col-md-3 col-sm-4 col-xs-4 blg-thumb p0\">
                                        <a href=\"single.html\">
                                            <img src=\"{{asset('assets/img/demo/small-proerty-2.jpg')}}\">
                                        </a>
                                        <span class=\"blg-date\">12-12-2016</span>

                                    </div>
                                    <div class=\"col-md-8  col-sm-8 col-xs-8  blg-entry\">
                                        <h6> <a href=\"single.html\">Add news functions </a></h6>
                                        <p style=\"line-height: 17px; padding: 8px 2px;\">Lorem ipsum dolor sit amet, nulla ...</p>
                                    </div>
                                </li>

                                <li>
                                    <div class=\"col-md-3 col-sm-4 col-xs-4 blg-thumb p0\">
                                        <a href=\"single.html\">
                                            <img src=\"{{asset('assets/img/demo/small-proerty-2.jpg')}}\">
                                        </a>
                                        <span class=\"blg-date\">12-12-2016</span>

                                    </div>
                                    <div class=\"col-md-8  col-sm-8 col-xs-8  blg-entry\">
                                        <h6> <a href=\"single.html\">Add news functions </a></h6>
                                        <p style=\"line-height: 17px; padding: 8px 2px;\">Lorem ipsum dolor sit amet, nulla ...</p>
                                    </div>
                                </li>


                            </ul>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-sm-6 wow fadeInRight animated\">
                        <div class=\"single-footer news-letter\">
                            <h4>Restez en contact</h4>
                            <div class=\"footer-title-line\"></div>
                            <p>Lorem ipsum dolor sit amet, nulla  suscipit similique quisquam molestias. Vel unde, blanditiis.</p>

                            <form>
                                <div class=\"input-group\">
                                    <input class=\"form-control\" type=\"text\" placeholder=\"E-mail ... \">
                                    <span class=\"input-group-btn\">
                                        <button class=\"btn btn-primary subscribe\" type=\"button\"><i class=\"pe-7s-paper-plane pe-2x\"></i></button>
                                    </span>
                                </div>
                                <!-- /input-group -->
                            </form>

                            <div class=\"social pull-right\">
                                <ul>
                                    <li><a class=\"wow fadeInUp animated\" href=\"https://twitter.com/kimarotec\"><i class=\"fa fa-twitter\"></i></a></li>
                                    <li><a class=\"wow fadeInUp animated\" href=\"https://www.facebook.com/kimarotec\" data-wow-delay=\"0.2s\"><i class=\"fa fa-facebook\"></i></a></li>
                                    <li><a class=\"wow fadeInUp animated\" href=\"https://plus.google.com/kimarotec\" data-wow-delay=\"0.3s\"><i class=\"fa fa-google-plus\"></i></a></li>
                                    <li><a class=\"wow fadeInUp animated\" href=\"https://instagram.com/kimarotec\" data-wow-delay=\"0.4s\"><i class=\"fa fa-instagram\"></i></a></li>
                                    <li><a class=\"wow fadeInUp animated\" href=\"https://instagram.com/kimarotec\" data-wow-delay=\"0.6s\"><i class=\"fa fa-dribbble\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class=\"footer-copy text-center\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"pull-left\">
                        <span> (C) <a href=\"http://www.KimaroTec.com\">KimaroTheme</a> , All rights reserved 2016  </span>
                    </div>
                    <div class=\"bottom-menu pull-right\">
                        <ul>
                            <li><a class=\"wow fadeInUp animated\" href=\"#\" data-wow-delay=\"0.2s\">Home</a></li>
                            <li><a class=\"wow fadeInUp animated\" href=\"#\" data-wow-delay=\"0.3s\">Property</a></li>
                            <li><a class=\"wow fadeInUp animated\" href=\"#\" data-wow-delay=\"0.4s\">Faq</a></li>
                            <li><a class=\"wow fadeInUp animated\" href=\"#\" data-wow-delay=\"0.6s\">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {% endblock %}
{% endblock %}", "base.html.twig", "/var/www/html/File_Rouge/original/soultana.sn/app/Resources/views/base.html.twig");
    }
}
