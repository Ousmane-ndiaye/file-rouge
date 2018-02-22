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
        $__internal_1440cf172b281bef2d6f307b8995d3693bdcf8809d64352ab0110ece02fc1e8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1440cf172b281bef2d6f307b8995d3693bdcf8809d64352ab0110ece02fc1e8c->enter($__internal_1440cf172b281bef2d6f307b8995d3693bdcf8809d64352ab0110ece02fc1e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_288d7785f252149ca4fee64f9095295376938aec79b656f2cad30481eb596d69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_288d7785f252149ca4fee64f9095295376938aec79b656f2cad30481eb596d69->enter($__internal_288d7785f252149ca4fee64f9095295376938aec79b656f2cad30481eb596d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1440cf172b281bef2d6f307b8995d3693bdcf8809d64352ab0110ece02fc1e8c->leave($__internal_1440cf172b281bef2d6f307b8995d3693bdcf8809d64352ab0110ece02fc1e8c_prof);

        
        $__internal_288d7785f252149ca4fee64f9095295376938aec79b656f2cad30481eb596d69->leave($__internal_288d7785f252149ca4fee64f9095295376938aec79b656f2cad30481eb596d69_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_284e763ea73e144e88f9c36ccd5ad56e87c04c16accf056669cfd6944be1228b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_284e763ea73e144e88f9c36ccd5ad56e87c04c16accf056669cfd6944be1228b->enter($__internal_284e763ea73e144e88f9c36ccd5ad56e87c04c16accf056669cfd6944be1228b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_85222b7b65d7ee90c6beca2f00caab72a8145171d7749c4bd5acad1e269abcb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85222b7b65d7ee90c6beca2f00caab72a8145171d7749c4bd5acad1e269abcb6->enter($__internal_85222b7b65d7ee90c6beca2f00caab72a8145171d7749c4bd5acad1e269abcb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_85222b7b65d7ee90c6beca2f00caab72a8145171d7749c4bd5acad1e269abcb6->leave($__internal_85222b7b65d7ee90c6beca2f00caab72a8145171d7749c4bd5acad1e269abcb6_prof);

        
        $__internal_284e763ea73e144e88f9c36ccd5ad56e87c04c16accf056669cfd6944be1228b->leave($__internal_284e763ea73e144e88f9c36ccd5ad56e87c04c16accf056669cfd6944be1228b_prof);

    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        $__internal_8abe5d6e2b40ab66ed2d1929fb0506a4a606de08c5a052bbc10a227967b46886 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8abe5d6e2b40ab66ed2d1929fb0506a4a606de08c5a052bbc10a227967b46886->enter($__internal_8abe5d6e2b40ab66ed2d1929fb0506a4a606de08c5a052bbc10a227967b46886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_59fc2b7a9afe3b118948fe6a344d77c689419d7d3fabff6421fc947030151c09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59fc2b7a9afe3b118948fe6a344d77c689419d7d3fabff6421fc947030151c09->enter($__internal_59fc2b7a9afe3b118948fe6a344d77c689419d7d3fabff6421fc947030151c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_59fc2b7a9afe3b118948fe6a344d77c689419d7d3fabff6421fc947030151c09->leave($__internal_59fc2b7a9afe3b118948fe6a344d77c689419d7d3fabff6421fc947030151c09_prof);

        
        $__internal_8abe5d6e2b40ab66ed2d1929fb0506a4a606de08c5a052bbc10a227967b46886->leave($__internal_8abe5d6e2b40ab66ed2d1929fb0506a4a606de08c5a052bbc10a227967b46886_prof);

    }

    // line 65
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_a2f35d41139db4ca4212a25d44c71523eb7259dd2df2cbc60819270710c99c53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2f35d41139db4ca4212a25d44c71523eb7259dd2df2cbc60819270710c99c53->enter($__internal_a2f35d41139db4ca4212a25d44c71523eb7259dd2df2cbc60819270710c99c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_669e232b147ea9d1330eeafc7b6b9380cecc38fa115a37f75d90f35fa28bc528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_669e232b147ea9d1330eeafc7b6b9380cecc38fa115a37f75d90f35fa28bc528->enter($__internal_669e232b147ea9d1330eeafc7b6b9380cecc38fa115a37f75d90f35fa28bc528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

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
        
        $__internal_669e232b147ea9d1330eeafc7b6b9380cecc38fa115a37f75d90f35fa28bc528->leave($__internal_669e232b147ea9d1330eeafc7b6b9380cecc38fa115a37f75d90f35fa28bc528_prof);

        
        $__internal_a2f35d41139db4ca4212a25d44c71523eb7259dd2df2cbc60819270710c99c53->leave($__internal_a2f35d41139db4ca4212a25d44c71523eb7259dd2df2cbc60819270710c99c53_prof);

    }

    // line 108
    public function block_contenus($context, array $blocks = array())
    {
        $__internal_e7cea87a820ddbdf41edff61da9f8deab10bebb63fa030b6b2d666fe454a11d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7cea87a820ddbdf41edff61da9f8deab10bebb63fa030b6b2d666fe454a11d0->enter($__internal_e7cea87a820ddbdf41edff61da9f8deab10bebb63fa030b6b2d666fe454a11d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        $__internal_8f623ec6689f008388bf87921c925a2f2cadaab5cfbb9ecf279a5220531819bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f623ec6689f008388bf87921c925a2f2cadaab5cfbb9ecf279a5220531819bb->enter($__internal_8f623ec6689f008388bf87921c925a2f2cadaab5cfbb9ecf279a5220531819bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

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
        
        $__internal_8f623ec6689f008388bf87921c925a2f2cadaab5cfbb9ecf279a5220531819bb->leave($__internal_8f623ec6689f008388bf87921c925a2f2cadaab5cfbb9ecf279a5220531819bb_prof);

        
        $__internal_e7cea87a820ddbdf41edff61da9f8deab10bebb63fa030b6b2d666fe454a11d0->leave($__internal_e7cea87a820ddbdf41edff61da9f8deab10bebb63fa030b6b2d666fe454a11d0_prof);

    }

    // line 109
    public function block_slide($context, array $blocks = array())
    {
        $__internal_771a9c160671c133953b575f6444385597a30cf8854839a0cdb31c969c804ace = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_771a9c160671c133953b575f6444385597a30cf8854839a0cdb31c969c804ace->enter($__internal_771a9c160671c133953b575f6444385597a30cf8854839a0cdb31c969c804ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

        $__internal_fd7aa625b7027e90dda03a283836d3108ef184314b7abc80202aceb0feecf180 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd7aa625b7027e90dda03a283836d3108ef184314b7abc80202aceb0feecf180->enter($__internal_fd7aa625b7027e90dda03a283836d3108ef184314b7abc80202aceb0feecf180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slide"));

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
        
        $__internal_fd7aa625b7027e90dda03a283836d3108ef184314b7abc80202aceb0feecf180->leave($__internal_fd7aa625b7027e90dda03a283836d3108ef184314b7abc80202aceb0feecf180_prof);

        
        $__internal_771a9c160671c133953b575f6444385597a30cf8854839a0cdb31c969c804ace->leave($__internal_771a9c160671c133953b575f6444385597a30cf8854839a0cdb31c969c804ace_prof);

    }

    // line 125
    public function block_form_recherche($context, array $blocks = array())
    {
        $__internal_aec9bf5ca2fc13150856bbf8d91699103be4bc553dd8660ce68d84824905522d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aec9bf5ca2fc13150856bbf8d91699103be4bc553dd8660ce68d84824905522d->enter($__internal_aec9bf5ca2fc13150856bbf8d91699103be4bc553dd8660ce68d84824905522d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_recherche"));

        $__internal_de75337eb272e0dcd4cdba5259a6df79d4e0b8f4e62b2cbe05840613af693dad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de75337eb272e0dcd4cdba5259a6df79d4e0b8f4e62b2cbe05840613af693dad->enter($__internal_de75337eb272e0dcd4cdba5259a6df79d4e0b8f4e62b2cbe05840613af693dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_recherche"));

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
        
        $__internal_de75337eb272e0dcd4cdba5259a6df79d4e0b8f4e62b2cbe05840613af693dad->leave($__internal_de75337eb272e0dcd4cdba5259a6df79d4e0b8f4e62b2cbe05840613af693dad_prof);

        
        $__internal_aec9bf5ca2fc13150856bbf8d91699103be4bc553dd8660ce68d84824905522d->leave($__internal_aec9bf5ca2fc13150856bbf8d91699103be4bc553dd8660ce68d84824905522d_prof);

    }

    // line 219
    public function block_catalogue($context, array $blocks = array())
    {
        $__internal_685cc5ffdc8e12af96f59da5ec429f1934e83151ccc776499137dc076be8d2cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_685cc5ffdc8e12af96f59da5ec429f1934e83151ccc776499137dc076be8d2cc->enter($__internal_685cc5ffdc8e12af96f59da5ec429f1934e83151ccc776499137dc076be8d2cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "catalogue"));

        $__internal_ae1524c3b94e80d3066439cb26deab234264ae7ed80222455c6394a9e35e6b73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae1524c3b94e80d3066439cb26deab234264ae7ed80222455c6394a9e35e6b73->enter($__internal_ae1524c3b94e80d3066439cb26deab234264ae7ed80222455c6394a9e35e6b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "catalogue"));

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
        
        $__internal_ae1524c3b94e80d3066439cb26deab234264ae7ed80222455c6394a9e35e6b73->leave($__internal_ae1524c3b94e80d3066439cb26deab234264ae7ed80222455c6394a9e35e6b73_prof);

        
        $__internal_685cc5ffdc8e12af96f59da5ec429f1934e83151ccc776499137dc076be8d2cc->leave($__internal_685cc5ffdc8e12af96f59da5ec429f1934e83151ccc776499137dc076be8d2cc_prof);

    }

    // line 223
    public function block_titre_catalogue($context, array $blocks = array())
    {
        $__internal_af44c04a5eeae5dd88a1eec49ef04760c2211c3e5b18ed47d93ec0ccf7530931 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af44c04a5eeae5dd88a1eec49ef04760c2211c3e5b18ed47d93ec0ccf7530931->enter($__internal_af44c04a5eeae5dd88a1eec49ef04760c2211c3e5b18ed47d93ec0ccf7530931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_catalogue"));

        $__internal_970bc15635a5fcbcfdd9c832e0612b0f1cd7501f39e95be526876040b3d8747c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_970bc15635a5fcbcfdd9c832e0612b0f1cd7501f39e95be526876040b3d8747c->enter($__internal_970bc15635a5fcbcfdd9c832e0612b0f1cd7501f39e95be526876040b3d8747c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_catalogue"));

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
        
        $__internal_970bc15635a5fcbcfdd9c832e0612b0f1cd7501f39e95be526876040b3d8747c->leave($__internal_970bc15635a5fcbcfdd9c832e0612b0f1cd7501f39e95be526876040b3d8747c_prof);

        
        $__internal_af44c04a5eeae5dd88a1eec49ef04760c2211c3e5b18ed47d93ec0ccf7530931->leave($__internal_af44c04a5eeae5dd88a1eec49ef04760c2211c3e5b18ed47d93ec0ccf7530931_prof);

    }

    // line 233
    public function block_articles($context, array $blocks = array())
    {
        $__internal_4c5e23cfa2adff2b330c3b1b89978f35b778985501d6f3770ceaabd3208a56a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c5e23cfa2adff2b330c3b1b89978f35b778985501d6f3770ceaabd3208a56a7->enter($__internal_4c5e23cfa2adff2b330c3b1b89978f35b778985501d6f3770ceaabd3208a56a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "articles"));

        $__internal_e3dd43138e921edb3a04775150f6d78bc59fb4908259d6e11f750945061241b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3dd43138e921edb3a04775150f6d78bc59fb4908259d6e11f750945061241b6->enter($__internal_e3dd43138e921edb3a04775150f6d78bc59fb4908259d6e11f750945061241b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "articles"));

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
        
        $__internal_e3dd43138e921edb3a04775150f6d78bc59fb4908259d6e11f750945061241b6->leave($__internal_e3dd43138e921edb3a04775150f6d78bc59fb4908259d6e11f750945061241b6_prof);

        
        $__internal_4c5e23cfa2adff2b330c3b1b89978f35b778985501d6f3770ceaabd3208a56a7->leave($__internal_4c5e23cfa2adff2b330c3b1b89978f35b778985501d6f3770ceaabd3208a56a7_prof);

    }

    // line 278
    public function block_bienvenu($context, array $blocks = array())
    {
        $__internal_44667d04ce33f78bd05db1e8d5f47c59b5b8702351c273a7079037a4ae62c373 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44667d04ce33f78bd05db1e8d5f47c59b5b8702351c273a7079037a4ae62c373->enter($__internal_44667d04ce33f78bd05db1e8d5f47c59b5b8702351c273a7079037a4ae62c373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bienvenu"));

        $__internal_97e7f9d6641d4e7c33bcd353359d28bdd50b41903493998097b53e6b0b817eca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97e7f9d6641d4e7c33bcd353359d28bdd50b41903493998097b53e6b0b817eca->enter($__internal_97e7f9d6641d4e7c33bcd353359d28bdd50b41903493998097b53e6b0b817eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bienvenu"));

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
        
        $__internal_97e7f9d6641d4e7c33bcd353359d28bdd50b41903493998097b53e6b0b817eca->leave($__internal_97e7f9d6641d4e7c33bcd353359d28bdd50b41903493998097b53e6b0b817eca_prof);

        
        $__internal_44667d04ce33f78bd05db1e8d5f47c59b5b8702351c273a7079037a4ae62c373->leave($__internal_44667d04ce33f78bd05db1e8d5f47c59b5b8702351c273a7079037a4ae62c373_prof);

    }

    // line 345
    public function block_temoignages1($context, array $blocks = array())
    {
        $__internal_d7bd5352647b4d819972fee0e7f31305bf23ae4cc690968de30d15b803bc7848 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7bd5352647b4d819972fee0e7f31305bf23ae4cc690968de30d15b803bc7848->enter($__internal_d7bd5352647b4d819972fee0e7f31305bf23ae4cc690968de30d15b803bc7848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "temoignages1"));

        $__internal_f2d62c579b4cfe5dfaf89d25760f12edc521872d6f5a4f6f2a81a4e0fc4cb221 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2d62c579b4cfe5dfaf89d25760f12edc521872d6f5a4f6f2a81a4e0fc4cb221->enter($__internal_f2d62c579b4cfe5dfaf89d25760f12edc521872d6f5a4f6f2a81a4e0fc4cb221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "temoignages1"));

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
        
        $__internal_f2d62c579b4cfe5dfaf89d25760f12edc521872d6f5a4f6f2a81a4e0fc4cb221->leave($__internal_f2d62c579b4cfe5dfaf89d25760f12edc521872d6f5a4f6f2a81a4e0fc4cb221_prof);

        
        $__internal_d7bd5352647b4d819972fee0e7f31305bf23ae4cc690968de30d15b803bc7848->leave($__internal_d7bd5352647b4d819972fee0e7f31305bf23ae4cc690968de30d15b803bc7848_prof);

    }

    // line 421
    public function block_temoignages2($context, array $blocks = array())
    {
        $__internal_e06c1ed80101b963685bcd3aa27d898dd4938cf579484ab3bfad194db69ac251 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e06c1ed80101b963685bcd3aa27d898dd4938cf579484ab3bfad194db69ac251->enter($__internal_e06c1ed80101b963685bcd3aa27d898dd4938cf579484ab3bfad194db69ac251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "temoignages2"));

        $__internal_d2305b817bade1716e23cc038287faff27e24f62316af695c7439dc764e9ff4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2305b817bade1716e23cc038287faff27e24f62316af695c7439dc764e9ff4f->enter($__internal_d2305b817bade1716e23cc038287faff27e24f62316af695c7439dc764e9ff4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "temoignages2"));

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
        
        $__internal_d2305b817bade1716e23cc038287faff27e24f62316af695c7439dc764e9ff4f->leave($__internal_d2305b817bade1716e23cc038287faff27e24f62316af695c7439dc764e9ff4f_prof);

        
        $__internal_e06c1ed80101b963685bcd3aa27d898dd4938cf579484ab3bfad194db69ac251->leave($__internal_e06c1ed80101b963685bcd3aa27d898dd4938cf579484ab3bfad194db69ac251_prof);

    }

    // line 488
    public function block_zone_de_recherche($context, array $blocks = array())
    {
        $__internal_cb98ca4682a1d900fa5742d9c1e0b9b66f180a210e21d9a57ffdc5c7c222da71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb98ca4682a1d900fa5742d9c1e0b9b66f180a210e21d9a57ffdc5c7c222da71->enter($__internal_cb98ca4682a1d900fa5742d9c1e0b9b66f180a210e21d9a57ffdc5c7c222da71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "zone_de_recherche"));

        $__internal_d289e3e8a911275fbffcdfd404b82ffc69b7c0a5013e4cbf06ad345fa30ebb3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d289e3e8a911275fbffcdfd404b82ffc69b7c0a5013e4cbf06ad345fa30ebb3e->enter($__internal_d289e3e8a911275fbffcdfd404b82ffc69b7c0a5013e4cbf06ad345fa30ebb3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "zone_de_recherche"));

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
        
        $__internal_d289e3e8a911275fbffcdfd404b82ffc69b7c0a5013e4cbf06ad345fa30ebb3e->leave($__internal_d289e3e8a911275fbffcdfd404b82ffc69b7c0a5013e4cbf06ad345fa30ebb3e_prof);

        
        $__internal_cb98ca4682a1d900fa5742d9c1e0b9b66f180a210e21d9a57ffdc5c7c222da71->leave($__internal_cb98ca4682a1d900fa5742d9c1e0b9b66f180a210e21d9a57ffdc5c7c222da71_prof);

    }

    // line 536
    public function block_footer($context, array $blocks = array())
    {
        $__internal_e8052d73a9674f143971cfe0304a1de4afc908fe329a0a2e7a991bc6f3d7d837 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8052d73a9674f143971cfe0304a1de4afc908fe329a0a2e7a991bc6f3d7d837->enter($__internal_e8052d73a9674f143971cfe0304a1de4afc908fe329a0a2e7a991bc6f3d7d837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_0b0cb3c07359904f29d8a91452313d001c2881a258ea0ee04c251c8048aec689 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b0cb3c07359904f29d8a91452313d001c2881a258ea0ee04c251c8048aec689->enter($__internal_0b0cb3c07359904f29d8a91452313d001c2881a258ea0ee04c251c8048aec689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_0b0cb3c07359904f29d8a91452313d001c2881a258ea0ee04c251c8048aec689->leave($__internal_0b0cb3c07359904f29d8a91452313d001c2881a258ea0ee04c251c8048aec689_prof);

        
        $__internal_e8052d73a9674f143971cfe0304a1de4afc908fe329a0a2e7a991bc6f3d7d837->leave($__internal_e8052d73a9674f143971cfe0304a1de4afc908fe329a0a2e7a991bc6f3d7d837_prof);

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
{% endblock %}", "base.html.twig", "/var/www/html/File_Rouge/original/soultana.sn/app/Resources/views/base.html.twig");
    }
}
