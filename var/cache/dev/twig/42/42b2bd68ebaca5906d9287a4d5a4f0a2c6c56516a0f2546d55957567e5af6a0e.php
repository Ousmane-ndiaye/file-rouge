<?php

/* ::base.html.twig */
class __TwigTemplate_a04947d5009d507072a9ba6506ebae3c79fdd03aece5081d3ae329be8551f7d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@RESERVATION/layout.html.twig", "::base.html.twig", 1);
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
        $__internal_e66a6b6d9bf18c53781ccde685c95425f37caa3c71add478d50def6c0c4acd71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e66a6b6d9bf18c53781ccde685c95425f37caa3c71add478d50def6c0c4acd71->enter($__internal_e66a6b6d9bf18c53781ccde685c95425f37caa3c71add478d50def6c0c4acd71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_27cbb201a29d147aa9e8f694082581bb1a5c691e3048e5825e9d5f61894f8712 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27cbb201a29d147aa9e8f694082581bb1a5c691e3048e5825e9d5f61894f8712->enter($__internal_27cbb201a29d147aa9e8f694082581bb1a5c691e3048e5825e9d5f61894f8712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e66a6b6d9bf18c53781ccde685c95425f37caa3c71add478d50def6c0c4acd71->leave($__internal_e66a6b6d9bf18c53781ccde685c95425f37caa3c71add478d50def6c0c4acd71_prof);

        
        $__internal_27cbb201a29d147aa9e8f694082581bb1a5c691e3048e5825e9d5f61894f8712->leave($__internal_27cbb201a29d147aa9e8f694082581bb1a5c691e3048e5825e9d5f61894f8712_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a03a71aeeca69e30e38335924766da56448d924419e5d8b02380c4271d3ba41d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a03a71aeeca69e30e38335924766da56448d924419e5d8b02380c4271d3ba41d->enter($__internal_a03a71aeeca69e30e38335924766da56448d924419e5d8b02380c4271d3ba41d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_86c1f3cfcb50790e9f803ea6acf135be625349bed6192fe8edab19d9b5c0cf7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86c1f3cfcb50790e9f803ea6acf135be625349bed6192fe8edab19d9b5c0cf7e->enter($__internal_86c1f3cfcb50790e9f803ea6acf135be625349bed6192fe8edab19d9b5c0cf7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        // line 536
        echo "    ";
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_86c1f3cfcb50790e9f803ea6acf135be625349bed6192fe8edab19d9b5c0cf7e->leave($__internal_86c1f3cfcb50790e9f803ea6acf135be625349bed6192fe8edab19d9b5c0cf7e_prof);

        
        $__internal_a03a71aeeca69e30e38335924766da56448d924419e5d8b02380c4271d3ba41d->leave($__internal_a03a71aeeca69e30e38335924766da56448d924419e5d8b02380c4271d3ba41d_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_ebecfb3797601870c612749999a25c051c8cf49f23f57a66894977e0f070dca8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebecfb3797601870c612749999a25c051c8cf49f23f57a66894977e0f070dca8->enter($__internal_ebecfb3797601870c612749999a25c051c8cf49f23f57a66894977e0f070dca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_3fafa6a8cecda91dda495778e53045e7e18f6c17906161b78f9b28dcc4de7629 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fafa6a8cecda91dda495778e53045e7e18f6c17906161b78f9b28dcc4de7629->enter($__internal_3fafa6a8cecda91dda495778e53045e7e18f6c17906161b78f9b28dcc4de7629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_3fafa6a8cecda91dda495778e53045e7e18f6c17906161b78f9b28dcc4de7629->leave($__internal_3fafa6a8cecda91dda495778e53045e7e18f6c17906161b78f9b28dcc4de7629_prof);

        
        $__internal_ebecfb3797601870c612749999a25c051c8cf49f23f57a66894977e0f070dca8->leave($__internal_ebecfb3797601870c612749999a25c051c8cf49f23f57a66894977e0f070dca8_prof);

    }

    // line 65
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_dc9b7d373c8f87161bb66036e3ca90a333cc1d542301cc2be2622b24a53d816c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc9b7d373c8f87161bb66036e3ca90a333cc1d542301cc2be2622b24a53d816c->enter($__internal_dc9b7d373c8f87161bb66036e3ca90a333cc1d542301cc2be2622b24a53d816c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_467d0a78f25faff06bb3cf2619ff580088474224e09fe304654c33484bb4bc0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_467d0a78f25faff06bb3cf2619ff580088474224e09fe304654c33484bb4bc0e->enter($__internal_467d0a78f25faff06bb3cf2619ff580088474224e09fe304654c33484bb4bc0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

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
                        <a href=\"index.html\" class=\"active\">Accueil</a>
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
        
        $__internal_467d0a78f25faff06bb3cf2619ff580088474224e09fe304654c33484bb4bc0e->leave($__internal_467d0a78f25faff06bb3cf2619ff580088474224e09fe304654c33484bb4bc0e_prof);

        
        $__internal_dc9b7d373c8f87161bb66036e3ca90a333cc1d542301cc2be2622b24a53d816c->leave($__internal_dc9b7d373c8f87161bb66036e3ca90a333cc1d542301cc2be2622b24a53d816c_prof);

    }

    // line 108
    public function block_contenus($context, array $blocks = array())
    {
        $__internal_10582455104bb70ab4c72dec061d5d6722b4b533c63afffda81827298f11f239 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10582455104bb70ab4c72dec061d5d6722b4b533c63afffda81827298f11f239->enter($__internal_10582455104bb70ab4c72dec061d5d6722b4b533c63afffda81827298f11f239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        $__internal_cb967708c28653429cbd922b269c42dd4f9a47f8effbcdaf5f655166e43f4e60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb967708c28653429cbd922b269c42dd4f9a47f8effbcdaf5f655166e43f4e60->enter($__internal_cb967708c28653429cbd922b269c42dd4f9a47f8effbcdaf5f655166e43f4e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        // line 109
        echo "    ";
        $this->displayBlock('slide', $context, $blocks);
        // line 219
        echo "    ";
        $this->displayBlock('catalogue', $context, $blocks);
        // line 278
        echo "    ";
        $this->displayBlock('bienvenu', $context, $blocks);
        // line 345
        echo "    ";
        $this->displayBlock('temoignages1', $context, $blocks);
        // line 421
        echo "    ";
        $this->displayBlock('temoignages2', $context, $blocks);
        // line 488
        echo "    ";
        $this->displayBlock('zone_de_recherche', $context, $blocks);
        // line 535
        echo "    ";
        
        $__internal_cb967708c28653429cbd922b269c42dd4f9a47f8effbcdaf5f655166e43f4e60->leave($__internal_cb967708c28653429cbd922b269c42dd4f9a47f8effbcdaf5f655166e43f4e60_prof);

        
        $__internal_10582455104bb70ab4c72dec061d5d6722b4b533c63afffda81827298f11f239->leave($__internal_10582455104bb70ab4c72dec061d5d6722b4b533c63afffda81827298f11f239_prof);

    }

    // line 109
    public function block_slide($context, array $blocks = array())
    {
        $__internal_dcf25158c540bb0671e829264b985916261cad47d686577ea6731a69e4974649 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcf25158c540bb0671e829264b985916261cad47d686577ea6731a69e4974649->enter($__internal_dcf25158c540bb0671e829264b985916261cad47d686577ea6731a69e4974649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        $__internal_3e6387f80591b7d3bdb0d6df2cea2310b9fad2a49dc98efb6faa1aae96cbdd29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e6387f80591b7d3bdb0d6df2cea2310b9fad2a49dc98efb6faa1aae96cbdd29->enter($__internal_3e6387f80591b7d3bdb0d6df2cea2310b9fad2a49dc98efb6faa1aae96cbdd29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

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
        // line 214
        echo "                </div>
            </div>
        </div>
    </div>
    ";
        
        $__internal_3e6387f80591b7d3bdb0d6df2cea2310b9fad2a49dc98efb6faa1aae96cbdd29->leave($__internal_3e6387f80591b7d3bdb0d6df2cea2310b9fad2a49dc98efb6faa1aae96cbdd29_prof);

        
        $__internal_dcf25158c540bb0671e829264b985916261cad47d686577ea6731a69e4974649->leave($__internal_dcf25158c540bb0671e829264b985916261cad47d686577ea6731a69e4974649_prof);

    }

    // line 125
    public function block_form_recherche($context, array $blocks = array())
    {
        $__internal_4c766fa3ec7fe4c72914cf1c2bafc5da2a9f352f8cf60c55028c740dd8f31100 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c766fa3ec7fe4c72914cf1c2bafc5da2a9f352f8cf60c55028c740dd8f31100->enter($__internal_4c766fa3ec7fe4c72914cf1c2bafc5da2a9f352f8cf60c55028c740dd8f31100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_recherche"));

        $__internal_452ac2ed933b70c4fde006e0bec37d84795bbafa779876021b43997073c3afe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_452ac2ed933b70c4fde006e0bec37d84795bbafa779876021b43997073c3afe4->enter($__internal_452ac2ed933b70c4fde006e0bec37d84795bbafa779876021b43997073c3afe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_recherche"));

        // line 126
        echo "                    <div class=\"search-form wow pulse changements\" data-wow-delay=\"0.8s\">
                        <form action=\"\" method=\"post\" class=\"form-inline\">
                            <input type=\"hidden\" class=\"form-control\" name=\"form_type\" aria-describedby=\"helpId\" value=\"rechercher\">
                            <button class=\"btn  toggle-btn\" type=\"button\">
                                <i class=\"fa fa-bars\"></i>
                            </button>
                            <div class=\"form-group\">
                                <select name=\"lieu\" id=\"lunchBegins\" class=\"selectpicker inputForm\" data-live-search=\"true\" data-live-search-style=\"begins\" title=\"Choisir une localité\">
                                ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["villes"] ?? $this->getContext($context, "villes")));
        foreach ($context['_seq'] as $context["_key"] => $context["ville"]) {
            // line 135
            echo "                                    <option> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ville"], "nomVille", array()), "html", null, true);
            echo " </option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ville'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "                                </select>
                            </div>
                            <div class=\"form-group\">
                                <select name=\"typeBien\" id=\"basic\" class=\"selectpicker show-tick form-control\" title=\"Choisir un bien\">
                                ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["typesBien"] ?? $this->getContext($context, "typesBien")));
        foreach ($context['_seq'] as $context["_key"] => $context["typeBien"]) {
            // line 142
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
        // line 144
        echo "                                </select>
                            </div>
                            <div class=\"form-group mar-r-20\">
                                ";
        // line 148
        echo "                                <input type=\"text\" name=\"prix\" class=\"span2 prix_compris\" data-slider-min=\"50\" data-slider-max=\"5000\" data-slider-step=\"5\" data-slider-value=\"[50,5000]\" value=\"50,5000\" id=\"price-range\"><br/>
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
                                        <input type=\"text\" class=\"span2\" value=\"\" data-slider-min=\"1\" data-slider-max=\"20\" data-slider-step=\"5\" data-slider-value=\"[0,20]\" id=\"min-baths\"><br/>
                                        <b class=\"pull-left color numero\">1</b>
                                        <b class=\"pull-right color numero\">20</b>
                                    </div>
                                    <!-- End of -->
                                    <div class=\"form-group mar-l-20\">
                                        <label for=\"property-geo\">Nombre chambre à coucher :</label>
                                        <input type=\"text\" class=\"span2\" value=\"\" data-slider-min=\"1\" data-slider-max=\"20\" data-slider-step=\"5\" data-slider-value=\"[0,20]\" id=\"min-bed\"><br/>
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
        
        $__internal_452ac2ed933b70c4fde006e0bec37d84795bbafa779876021b43997073c3afe4->leave($__internal_452ac2ed933b70c4fde006e0bec37d84795bbafa779876021b43997073c3afe4_prof);

        
        $__internal_4c766fa3ec7fe4c72914cf1c2bafc5da2a9f352f8cf60c55028c740dd8f31100->leave($__internal_4c766fa3ec7fe4c72914cf1c2bafc5da2a9f352f8cf60c55028c740dd8f31100_prof);

    }

    // line 219
    public function block_catalogue($context, array $blocks = array())
    {
        $__internal_cb7685645d52bcff56bdf89aa2ced48c91f357e5bedfe105167929aa99124e8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb7685645d52bcff56bdf89aa2ced48c91f357e5bedfe105167929aa99124e8e->enter($__internal_cb7685645d52bcff56bdf89aa2ced48c91f357e5bedfe105167929aa99124e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "catalogue"));

        $__internal_374e5be90d43e5adb72232462d69d259de35af8bd70fa029d0c9fe39c2958663 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_374e5be90d43e5adb72232462d69d259de35af8bd70fa029d0c9fe39c2958663->enter($__internal_374e5be90d43e5adb72232462d69d259de35af8bd70fa029d0c9fe39c2958663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "catalogue"));

        // line 220
        echo "    <!-- property area -->
    <div class=\"content-area home-area-1 recent-property\" style=\"background-color: #FCFCFC; padding-bottom: 55px;\">
        <div class=\"container\">
            ";
        // line 223
        $this->displayBlock('titre_catalogue', $context, $blocks);
        // line 233
        echo "            ";
        $this->displayBlock('articles', $context, $blocks);
        // line 275
        echo "        </div>
    </div>
    ";
        
        $__internal_374e5be90d43e5adb72232462d69d259de35af8bd70fa029d0c9fe39c2958663->leave($__internal_374e5be90d43e5adb72232462d69d259de35af8bd70fa029d0c9fe39c2958663_prof);

        
        $__internal_cb7685645d52bcff56bdf89aa2ced48c91f357e5bedfe105167929aa99124e8e->leave($__internal_cb7685645d52bcff56bdf89aa2ced48c91f357e5bedfe105167929aa99124e8e_prof);

    }

    // line 223
    public function block_titre_catalogue($context, array $blocks = array())
    {
        $__internal_e294c5fdc0d74b3c2d8411b75c9dcfb26daaf094ec1b165968a800d252e7995a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e294c5fdc0d74b3c2d8411b75c9dcfb26daaf094ec1b165968a800d252e7995a->enter($__internal_e294c5fdc0d74b3c2d8411b75c9dcfb26daaf094ec1b165968a800d252e7995a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_catalogue"));

        $__internal_164d31de2d0fda25fda1aecdab3eaf7a87d71e4818275ac71b3f49054e24df60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_164d31de2d0fda25fda1aecdab3eaf7a87d71e4818275ac71b3f49054e24df60->enter($__internal_164d31de2d0fda25fda1aecdab3eaf7a87d71e4818275ac71b3f49054e24df60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_catalogue"));

        // line 224
        echo "            <div class=\"row\">
                <div class=\"col-md-10 col-md-offset-1 col-sm-12 text-center page-title\">
                    <!-- /.feature title -->
                    <h2>Top des propriétés soumises</h2>
                    <p>Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium. Nullam sed arcu ultricies .
                    </p>
                </div>
            </div>
            ";
        
        $__internal_164d31de2d0fda25fda1aecdab3eaf7a87d71e4818275ac71b3f49054e24df60->leave($__internal_164d31de2d0fda25fda1aecdab3eaf7a87d71e4818275ac71b3f49054e24df60_prof);

        
        $__internal_e294c5fdc0d74b3c2d8411b75c9dcfb26daaf094ec1b165968a800d252e7995a->leave($__internal_e294c5fdc0d74b3c2d8411b75c9dcfb26daaf094ec1b165968a800d252e7995a_prof);

    }

    // line 233
    public function block_articles($context, array $blocks = array())
    {
        $__internal_7c21902ab4773e1de08c3f50ea78a88120f8d3dd7f10bdd7880df94fa86f890b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c21902ab4773e1de08c3f50ea78a88120f8d3dd7f10bdd7880df94fa86f890b->enter($__internal_7c21902ab4773e1de08c3f50ea78a88120f8d3dd7f10bdd7880df94fa86f890b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "articles"));

        $__internal_076bcc4eb8da6495e9bbdc5220090bd1cce47fc879fd3ec51c45d17a44b653e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_076bcc4eb8da6495e9bbdc5220090bd1cce47fc879fd3ec51c45d17a44b653e4->enter($__internal_076bcc4eb8da6495e9bbdc5220090bd1cce47fc879fd3ec51c45d17a44b653e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "articles"));

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
            echo "
                                    </a>
                                </h5>
                                <div class=\"dot-hr\"></div>
                                <span class=\"pull-left\">
                                    <b>Surface :</b>
                                    ";
            // line 250
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "surface", array()), "html", null, true);
            echo "
                                </span>
                                <span class=\"proerty-price pull-right\">";
            // line 252
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
        // line 257
        echo "                    <div class=\"col-sm-6 col-md-3 p0\">
                        <div class=\"box-tree more-proerty text-center\">
                            <div class=\"item-tree-icon\">
                                <i class=\"fa fa-th\"></i>
                            </div>
                            <div class=\"more-entry overflow\">
                                <h5>
                                    <a href=\"property-1.html\">DU MAL À DECIDER ?
                                    </a>
                                </h5>
                                <h5 class=\"tree-sub-ttl\">Voir toutes les propriétés</h5>
                                <a href=\"\" ><button class=\"btn border-btn more-black\" value=\"All properties\">Toutes les propriétés</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ";
        
        $__internal_076bcc4eb8da6495e9bbdc5220090bd1cce47fc879fd3ec51c45d17a44b653e4->leave($__internal_076bcc4eb8da6495e9bbdc5220090bd1cce47fc879fd3ec51c45d17a44b653e4_prof);

        
        $__internal_7c21902ab4773e1de08c3f50ea78a88120f8d3dd7f10bdd7880df94fa86f890b->leave($__internal_7c21902ab4773e1de08c3f50ea78a88120f8d3dd7f10bdd7880df94fa86f890b_prof);

    }

    // line 278
    public function block_bienvenu($context, array $blocks = array())
    {
        $__internal_f76410d687d550b960cbe6c0368afef0d2a93aa276e72482b102db6dfa8b5471 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f76410d687d550b960cbe6c0368afef0d2a93aa276e72482b102db6dfa8b5471->enter($__internal_f76410d687d550b960cbe6c0368afef0d2a93aa276e72482b102db6dfa8b5471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bienvenu"));

        $__internal_13d8369c1d9676a385ca53647fc683217ac0523f04769a7ed5551f53a58ddf65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13d8369c1d9676a385ca53647fc683217ac0523f04769a7ed5551f53a58ddf65->enter($__internal_13d8369c1d9676a385ca53647fc683217ac0523f04769a7ed5551f53a58ddf65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bienvenu"));

        // line 279
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
                                    <h2>SOUL TANA
                                    </h2>
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
                                        <h3>Any help
                                        </h3>
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
        
        $__internal_13d8369c1d9676a385ca53647fc683217ac0523f04769a7ed5551f53a58ddf65->leave($__internal_13d8369c1d9676a385ca53647fc683217ac0523f04769a7ed5551f53a58ddf65_prof);

        
        $__internal_f76410d687d550b960cbe6c0368afef0d2a93aa276e72482b102db6dfa8b5471->leave($__internal_f76410d687d550b960cbe6c0368afef0d2a93aa276e72482b102db6dfa8b5471_prof);

    }

    // line 345
    public function block_temoignages1($context, array $blocks = array())
    {
        $__internal_f2d0118b93b9990e8372bd83d63a8c4017da0a7a0710260fa41ab720d9655d09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2d0118b93b9990e8372bd83d63a8c4017da0a7a0710260fa41ab720d9655d09->enter($__internal_f2d0118b93b9990e8372bd83d63a8c4017da0a7a0710260fa41ab720d9655d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "temoignages1"));

        $__internal_620101ce6eed6187ab2959a26dd096324b5bdcfa110ecfe2e865ec82e4a1084c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_620101ce6eed6187ab2959a26dd096324b5bdcfa110ecfe2e865ec82e4a1084c->enter($__internal_620101ce6eed6187ab2959a26dd096324b5bdcfa110ecfe2e865ec82e4a1084c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "temoignages1"));

        // line 346
        echo "    <!--TESTIMONIALS -->
    <div class=\"testimonial-area recent-property\" style=\"background-color: #FCFCFC; padding-bottom: 15px;\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-10 col-md-offset-1 col-sm-12 text-center page-title\">
                    <!-- /.feature title -->
                    <h2>Nos Clients ont dit
                    </h2>
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
                                        <strong>Ohidul Islam,
                                        </strong>
                                        <i>Web Designer</i>
                                    </h4>
                                </div>
                                <div class=\"client-face wow fadeInRight\" data-wow-delay=\".9s\">
                                    <img src=\"";
        // line 371
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
        // line 384
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
        // line 397
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
        // line 410
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
        
        $__internal_620101ce6eed6187ab2959a26dd096324b5bdcfa110ecfe2e865ec82e4a1084c->leave($__internal_620101ce6eed6187ab2959a26dd096324b5bdcfa110ecfe2e865ec82e4a1084c_prof);

        
        $__internal_f2d0118b93b9990e8372bd83d63a8c4017da0a7a0710260fa41ab720d9655d09->leave($__internal_f2d0118b93b9990e8372bd83d63a8c4017da0a7a0710260fa41ab720d9655d09_prof);

    }

    // line 421
    public function block_temoignages2($context, array $blocks = array())
    {
        $__internal_eda197c9fc294e5b90c06ee8c7b2b00bdd44ae62c9fe722b05361dd8f9e7ad15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eda197c9fc294e5b90c06ee8c7b2b00bdd44ae62c9fe722b05361dd8f9e7ad15->enter($__internal_eda197c9fc294e5b90c06ee8c7b2b00bdd44ae62c9fe722b05361dd8f9e7ad15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "temoignages2"));

        $__internal_4dc2e7876790e2a3ef423a296494361ec73d27497e8229b287342fc21ed4ff70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dc2e7876790e2a3ef423a296494361ec73d27497e8229b287342fc21ed4ff70->enter($__internal_4dc2e7876790e2a3ef423a296494361ec73d27497e8229b287342fc21ed4ff70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "temoignages2"));

        // line 422
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
        
        $__internal_4dc2e7876790e2a3ef423a296494361ec73d27497e8229b287342fc21ed4ff70->leave($__internal_4dc2e7876790e2a3ef423a296494361ec73d27497e8229b287342fc21ed4ff70_prof);

        
        $__internal_eda197c9fc294e5b90c06ee8c7b2b00bdd44ae62c9fe722b05361dd8f9e7ad15->leave($__internal_eda197c9fc294e5b90c06ee8c7b2b00bdd44ae62c9fe722b05361dd8f9e7ad15_prof);

    }

    // line 488
    public function block_zone_de_recherche($context, array $blocks = array())
    {
        $__internal_63bf0c77383db37fa15e8aafafaae99564564281884c9aa87fc4f116ad4d9c97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63bf0c77383db37fa15e8aafafaae99564564281884c9aa87fc4f116ad4d9c97->enter($__internal_63bf0c77383db37fa15e8aafafaae99564564281884c9aa87fc4f116ad4d9c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "zone_de_recherche"));

        $__internal_98264cb273fa47d445f7a68ad2848e436b9ff981e3bf72b102fa92d926374361 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98264cb273fa47d445f7a68ad2848e436b9ff981e3bf72b102fa92d926374361->enter($__internal_98264cb273fa47d445f7a68ad2848e436b9ff981e3bf72b102fa92d926374361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "zone_de_recherche"));

        // line 489
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
        
        $__internal_98264cb273fa47d445f7a68ad2848e436b9ff981e3bf72b102fa92d926374361->leave($__internal_98264cb273fa47d445f7a68ad2848e436b9ff981e3bf72b102fa92d926374361_prof);

        
        $__internal_63bf0c77383db37fa15e8aafafaae99564564281884c9aa87fc4f116ad4d9c97->leave($__internal_63bf0c77383db37fa15e8aafafaae99564564281884c9aa87fc4f116ad4d9c97_prof);

    }

    // line 536
    public function block_footer($context, array $blocks = array())
    {
        $__internal_76eff4c5aa79be444c537574826695d79f01b5b511372d1d0b5180f14f9affe4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76eff4c5aa79be444c537574826695d79f01b5b511372d1d0b5180f14f9affe4->enter($__internal_76eff4c5aa79be444c537574826695d79f01b5b511372d1d0b5180f14f9affe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_af74635b0a02e8abd18d76f2c888998a6dd013cb4025d29c01943a325a2a9346 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af74635b0a02e8abd18d76f2c888998a6dd013cb4025d29c01943a325a2a9346->enter($__internal_af74635b0a02e8abd18d76f2c888998a6dd013cb4025d29c01943a325a2a9346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 537
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
        // line 548
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
        // line 579
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
        // line 593
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
        // line 607
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
        
        $__internal_af74635b0a02e8abd18d76f2c888998a6dd013cb4025d29c01943a325a2a9346->leave($__internal_af74635b0a02e8abd18d76f2c888998a6dd013cb4025d29c01943a325a2a9346_prof);

        
        $__internal_76eff4c5aa79be444c537574826695d79f01b5b511372d1d0b5180f14f9affe4->leave($__internal_76eff4c5aa79be444c537574826695d79f01b5b511372d1d0b5180f14f9affe4_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1019 => 607,  1002 => 593,  985 => 579,  951 => 548,  938 => 537,  929 => 536,  874 => 489,  865 => 488,  790 => 422,  781 => 421,  760 => 410,  744 => 397,  728 => 384,  712 => 371,  685 => 346,  676 => 345,  601 => 279,  592 => 278,  565 => 257,  554 => 252,  549 => 250,  538 => 244,  529 => 240,  524 => 237,  520 => 236,  516 => 234,  507 => 233,  489 => 224,  480 => 223,  468 => 275,  465 => 233,  463 => 223,  458 => 220,  449 => 219,  374 => 148,  369 => 144,  358 => 142,  354 => 141,  348 => 137,  339 => 135,  335 => 134,  325 => 126,  316 => 125,  302 => 214,  300 => 125,  288 => 116,  284 => 115,  280 => 114,  274 => 110,  265 => 109,  255 => 535,  252 => 488,  249 => 421,  246 => 345,  243 => 278,  240 => 219,  237 => 109,  228 => 108,  192 => 82,  183 => 76,  171 => 66,  162 => 65,  96 => 8,  87 => 7,  76 => 536,  73 => 108,  70 => 65,  68 => 7,  62 => 3,  53 => 2,  11 => 1,);
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
                        <a href=\"index.html\" class=\"active\">Accueil</a>
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
                        <form action=\"\" method=\"post\" class=\"form-inline\">
                            <input type=\"hidden\" class=\"form-control\" name=\"form_type\" aria-describedby=\"helpId\" value=\"rechercher\">
                            <button class=\"btn  toggle-btn\" type=\"button\">
                                <i class=\"fa fa-bars\"></i>
                            </button>
                            <div class=\"form-group\">
                                <select name=\"lieu\" id=\"lunchBegins\" class=\"selectpicker inputForm\" data-live-search=\"true\" data-live-search-style=\"begins\" title=\"Choisir une localité\">
                                {% for ville in villes %}
                                    <option> {{ ville.nomVille }} </option>
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
                                {# <input type=\"text\" name=\"prix_choisi\" id=\"prix_choisi\" class=\"filter-option\" placeholder=\"Votre budget\" /> #}
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
                                        <input type=\"text\" class=\"span2\" value=\"\" data-slider-min=\"1\" data-slider-max=\"20\" data-slider-step=\"5\" data-slider-value=\"[0,20]\" id=\"min-baths\"><br/>
                                        <b class=\"pull-left color numero\">1</b>
                                        <b class=\"pull-right color numero\">20</b>
                                    </div>
                                    <!-- End of -->
                                    <div class=\"form-group mar-l-20\">
                                        <label for=\"property-geo\">Nombre chambre à coucher :</label>
                                        <input type=\"text\" class=\"span2\" value=\"\" data-slider-min=\"1\" data-slider-max=\"20\" data-slider-step=\"5\" data-slider-value=\"[0,20]\" id=\"min-bed\"><br/>
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
                    <p>Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium. Nullam sed arcu ultricies .
                    </p>
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
                                    <a href=\"{{path('reservation_approuver',{'idBien':bien.id})}}s\">Superbe {{ bien.nomTypeBien }}
                                    </a>
                                </h5>
                                <div class=\"dot-hr\"></div>
                                <span class=\"pull-left\">
                                    <b>Surface :</b>
                                    {{ bien.surface }}
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
                                    <a href=\"property-1.html\">DU MAL À DECIDER ?
                                    </a>
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
                                    <h2>SOUL TANA
                                    </h2>
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
                                        <h3>Any help
                                        </h3>
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
                    <h2>Nos Clients ont dit
                    </h2>
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
                                        <strong>Ohidul Islam,
                                        </strong>
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
                                        <strong>Ohidul Islam,
                                        </strong>
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
{% endblock %}", "::base.html.twig", "/var/www/html/File_Rouge/original/soultana.sn/app/Resources/views/base.html.twig");
    }
}
