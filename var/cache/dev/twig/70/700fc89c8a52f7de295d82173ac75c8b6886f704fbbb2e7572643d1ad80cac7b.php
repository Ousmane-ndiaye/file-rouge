<?php

/* base1.html.twig */
class __TwigTemplate_4cd5a20413dcb4641539b1ece8e02c7a22cf319bb455a0476a93efb01f7abb47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'slidebar' => array($this, 'block_slidebar'),
            'accueil' => array($this, 'block_accueil'),
            'reservation' => array($this, 'block_reservation'),
            'main' => array($this, 'block_main'),
            'titre_page_li' => array($this, 'block_titre_page_li'),
            'titre_page_h1' => array($this, 'block_titre_page_h1'),
            'contenus' => array($this, 'block_contenus'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8648cfa668287969e45cc0dd32e9819173baf529303580586c6b972e67550377 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8648cfa668287969e45cc0dd32e9819173baf529303580586c6b972e67550377->enter($__internal_8648cfa668287969e45cc0dd32e9819173baf529303580586c6b972e67550377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base1.html.twig"));

        $__internal_801e167925c4a9517f309b579efe662be6b27ac119814ebe390869b3f25c487e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_801e167925c4a9517f309b579efe662be6b27ac119814ebe390869b3f25c487e->enter($__internal_801e167925c4a9517f309b579efe662be6b27ac119814ebe390869b3f25c487e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base1.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 10
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "</head>

<body>
";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 588
        echo "<!--/.body-->
";
        // line 589
        $this->displayBlock('scripts', $context, $blocks);
        // line 611
        echo "</body>

</html>";
        
        $__internal_8648cfa668287969e45cc0dd32e9819173baf529303580586c6b972e67550377->leave($__internal_8648cfa668287969e45cc0dd32e9819173baf529303580586c6b972e67550377_prof);

        
        $__internal_801e167925c4a9517f309b579efe662be6b27ac119814ebe390869b3f25c487e->leave($__internal_801e167925c4a9517f309b579efe662be6b27ac119814ebe390869b3f25c487e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a8e7bbcb1da4bf76a893c55626214df20368874058feb49ad3f60745aab754c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8e7bbcb1da4bf76a893c55626214df20368874058feb49ad3f60745aab754c9->enter($__internal_a8e7bbcb1da4bf76a893c55626214df20368874058feb49ad3f60745aab754c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fad859e2ea6764438ee49a6f37cc44484891887744089d8800856f7b136ebff0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fad859e2ea6764438ee49a6f37cc44484891887744089d8800856f7b136ebff0->enter($__internal_fad859e2ea6764438ee49a6f37cc44484891887744089d8800856f7b136ebff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    <title>Soultana - Dashboard</title>
    ";
        
        $__internal_fad859e2ea6764438ee49a6f37cc44484891887744089d8800856f7b136ebff0->leave($__internal_fad859e2ea6764438ee49a6f37cc44484891887744089d8800856f7b136ebff0_prof);

        
        $__internal_a8e7bbcb1da4bf76a893c55626214df20368874058feb49ad3f60745aab754c9->leave($__internal_a8e7bbcb1da4bf76a893c55626214df20368874058feb49ad3f60745aab754c9_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3307fffdb6e422ddc9085d10300a4e00a169cba835cb4bbc5570ffce2baafb8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3307fffdb6e422ddc9085d10300a4e00a169cba835cb4bbc5570ffce2baafb8c->enter($__internal_3307fffdb6e422ddc9085d10300a4e00a169cba835cb4bbc5570ffce2baafb8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_578f492f24900a04033fce7af899a4ad08f48d57d13e35c0efec3413cbcf126f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_578f492f24900a04033fce7af899a4ad08f48d57d13e35c0efec3413cbcf126f->enter($__internal_578f492f24900a04033fce7af899a4ad08f48d57d13e35c0efec3413cbcf126f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/css/datepicker3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/css/monstyle.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        // line 18
        echo "    ";
        // line 19
        echo "
    <!--Custom Font-->
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">
    <!--[if lt IE 9]>
\t<script src=\"js/html5shiv.js\"></script>
\t<script src=\"js/respond.min.js\"></script>
    <![endif]-->
    ";
        
        $__internal_578f492f24900a04033fce7af899a4ad08f48d57d13e35c0efec3413cbcf126f->leave($__internal_578f492f24900a04033fce7af899a4ad08f48d57d13e35c0efec3413cbcf126f_prof);

        
        $__internal_3307fffdb6e422ddc9085d10300a4e00a169cba835cb4bbc5570ffce2baafb8c->leave($__internal_3307fffdb6e422ddc9085d10300a4e00a169cba835cb4bbc5570ffce2baafb8c_prof);

    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ad06cac2b908ad8ae5cbc472e681266abb2873515883d8d4257b4b2685967f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ad06cac2b908ad8ae5cbc472e681266abb2873515883d8d4257b4b2685967f4->enter($__internal_9ad06cac2b908ad8ae5cbc472e681266abb2873515883d8d4257b4b2685967f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ef2c07d23a8cae255a32371f44cd131a5cbed3195a81739ebc387ef027a3e24a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef2c07d23a8cae255a32371f44cd131a5cbed3195a81739ebc387ef027a3e24a->enter($__internal_ef2c07d23a8cae255a32371f44cd131a5cbed3195a81739ebc387ef027a3e24a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 31
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 112
        echo "

    ";
        // line 114
        $this->displayBlock('slidebar', $context, $blocks);
        // line 165
        echo "    <div class=\"col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main\">
    ";
        // line 166
        $this->displayBlock('main', $context, $blocks);
        // line 582
        echo "    <div class=\"col-sm-12\">
        <p class=\"back-link\">Lumino Theme by <a href=\"https://www.medialoot.com\">Medialoot</a></p>
    </div>
    </div>
    <!--/.main-->
";
        
        $__internal_ef2c07d23a8cae255a32371f44cd131a5cbed3195a81739ebc387ef027a3e24a->leave($__internal_ef2c07d23a8cae255a32371f44cd131a5cbed3195a81739ebc387ef027a3e24a_prof);

        
        $__internal_9ad06cac2b908ad8ae5cbc472e681266abb2873515883d8d4257b4b2685967f4->leave($__internal_9ad06cac2b908ad8ae5cbc472e681266abb2873515883d8d4257b4b2685967f4_prof);

    }

    // line 31
    public function block_header($context, array $blocks = array())
    {
        $__internal_d1d790d1228d918dcec18938c77b84c69bcfb1e53050e97a65365a38936194ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1d790d1228d918dcec18938c77b84c69bcfb1e53050e97a65365a38936194ef->enter($__internal_d1d790d1228d918dcec18938c77b84c69bcfb1e53050e97a65365a38936194ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_ba7605ad004fed100ab048d4e3083f1fb33ed47df894ea4794080a114f007c76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba7605ad004fed100ab048d4e3083f1fb33ed47df894ea4794080a114f007c76->enter($__internal_ba7605ad004fed100ab048d4e3083f1fb33ed47df894ea4794080a114f007c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 32
        echo "    <nav class=\"navbar navbar-custom navbar-fixed-top\" role=\"navigation\">
        <div class=\"container-fluid\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#sidebar-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\"><span>SOULTANA </span>Admin</a>
                <ul class=\"nav navbar-top-links navbar-right\">
                    <li class=\"dropdown\">
                        <a class=\"dropdown-toggle count-info\" data-toggle=\"dropdown\" href=\"#\">
                            <em class=\"fa fa-envelope\"></em><span class=\"label label-danger\">15</span>
                        </a>
                        <ul class=\"dropdown-menu dropdown-messages\">
                            <li>
                                <div class=\"dropdown-messages-box\">
                                    <a href=\"profile.html\" class=\"pull-left\">
                                        <img alt=\"image\" class=\"img-circle\" src=\"http://placehold.it/40/30a5ff/fff\">
                                    </a>
                                    <div class=\"message-body\"><small class=\"pull-right\">3 mins ago</small>
                                        <a href=\"#\"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
                                        <br /><small class=\"text-muted\">1:24 pm - 25/03/2015</small></div>
                                </div>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <div class=\"dropdown-messages-box\">
                                    <a href=\"profile.html\" class=\"pull-left\">
                                        <img alt=\"image\" class=\"img-circle\" src=\"http://placehold.it/40/30a5ff/fff\">
                                    </a>
                                    <div class=\"message-body\"><small class=\"pull-right\">1 hour ago</small>
                                        <a href=\"#\">New message from <strong>Jane Doe</strong>.</a>
                                        <br /><small class=\"text-muted\">12:27 pm - 25/03/2015</small></div>
                                </div>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <div class=\"all-button\">
                                    <a href=\"#\">
                                        <em class=\"fa fa-inbox\"></em> <strong>All Messages</strong>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a class=\"dropdown-toggle count-info\" data-toggle=\"dropdown\" href=\"#\">
                            <em class=\"fa fa-bell\"></em><span class=\"label label-info\">5</span>
                        </a>
                        <ul class=\"dropdown-menu dropdown-alerts\">
                            <li>
                                <a href=\"#\">
                                    <div><em class=\"fa fa-envelope\"></em> 1 New Message
                                        <span class=\"pull-right text-muted small\">3 mins ago</span></div>
                                </a>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <a href=\"#\">
                                    <div><em class=\"fa fa-heart\"></em> 12 New Likes
                                        <span class=\"pull-right text-muted small\">4 mins ago</span></div>
                                </a>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <a href=\"#\">
                                    <div><em class=\"fa fa-user\"></em> 5 New Followers
                                        <span class=\"pull-right text-muted small\">4 mins ago</span></div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.container-fluid -->
    </nav>
    ";
        
        $__internal_ba7605ad004fed100ab048d4e3083f1fb33ed47df894ea4794080a114f007c76->leave($__internal_ba7605ad004fed100ab048d4e3083f1fb33ed47df894ea4794080a114f007c76_prof);

        
        $__internal_d1d790d1228d918dcec18938c77b84c69bcfb1e53050e97a65365a38936194ef->leave($__internal_d1d790d1228d918dcec18938c77b84c69bcfb1e53050e97a65365a38936194ef_prof);

    }

    // line 114
    public function block_slidebar($context, array $blocks = array())
    {
        $__internal_4f567e5c23bf43b300c13186721de5821ede82069bc1785a3faf833d9c5d82d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f567e5c23bf43b300c13186721de5821ede82069bc1785a3faf833d9c5d82d3->enter($__internal_4f567e5c23bf43b300c13186721de5821ede82069bc1785a3faf833d9c5d82d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slidebar"));

        $__internal_c36e90ee58a8a75197852becc269cc9f6167ab86f18efd0a77204b5e9d88de62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c36e90ee58a8a75197852becc269cc9f6167ab86f18efd0a77204b5e9d88de62->enter($__internal_c36e90ee58a8a75197852becc269cc9f6167ab86f18efd0a77204b5e9d88de62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slidebar"));

        // line 115
        echo "    <div id=\"sidebar-collapse\" class=\"col-sm-3 col-lg-2 sidebar\">
        <div class=\"profile-sidebar\">
            <div class=\"profile-userpic\" id=\"photo-profil\">
                <img src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/images/photo-profil/client-face2.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"photo profil\">
            </div>
            <div class=\"profile-usertitle\" id=\"utilisateur\">
                <div class=\"profile-usertitle-name\" style=\"color: #30a5ff; font-size: 14px; font-weight: bold;\">Nom d'utilisateur</div>
                <div class=\"profile-usertitle-status\"><span class=\"indicator label-success\"></span>En ligne</div>
            </div>
            <div class=\"clear\"></div>
        </div>
        <div class=\"divider\"></div>
        <form role=\"search\">
            <div class=\"form-group\">
                <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
            </div>
        </form>
        <ul class=\"nav menu\" id=\"menu_nav\">
            <li ";
        // line 133
        $this->displayBlock('accueil', $context, $blocks);
        echo " ><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_accueil");
        echo "\" class=\"\"><em class=\"fa fa-dashboard\">&nbsp;</em> Tableau de bord</a></li>
            <li><a href=\"widgets.html\" class=\"\"><em class=\"fa fa-calendar\">&nbsp;</em> Calendrier</a></li>
            <li><a href=\"charts.html\" class=\"\"><em class=\"fa fa-bar-chart\">&nbsp;</em> Charts</a></li>
            <li ";
        // line 136
        $this->displayBlock('reservation', $context, $blocks);
        echo "><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_reservation");
        echo "\"><em class=\"fa fa-registered\">&nbsp;</em> Réservation</a></li>
            <li><a href=\"panels.html\" class=\"\"><em class=\"fa fa-clone\">&nbsp;</em> Alerts &amp; Panels</a></li>
            <li class=\"parent \">
                <a data-toggle=\"collapse\" href=\"#sub-item-1\" class=\"\">
                    <em class=\"fa fa-navicon\">&nbsp;</em> Multilevel <span data-toggle=\"collapse\" href=\"#sub-item-1\" class=\"icon pull-right\"><em class=\"fa fa-plus\"></em></span>
                </a>
                <ul class=\"children collapse\" id=\"sub-item-1\">
                    <li>
                        <a class=\"\" href=\"#\">
                            <span class=\"fa fa-arrow-right\">&nbsp;</span> Sub Item 1
                        </a>
                    </li>
                    <li>
                        <a class=\"\" href=\"#\">
                            <span class=\"fa fa-arrow-right\">&nbsp;</span> Sub Item 2
                        </a>
                    </li>
                    <li>
                        <a class=\"\" href=\"#\">
                            <span class=\"fa fa-arrow-right\">&nbsp;</span> Sub Item 3
                        </a>
                    </li>
                </ul>
            </li>
            <li><a href=\"";
        // line 160
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_index");
        echo "\"><em class=\"fa fa-power-off\">&nbsp;</em> Logout</a></li>
        </ul>
    </div>
    <!--/.sidebar-->
    ";
        
        $__internal_c36e90ee58a8a75197852becc269cc9f6167ab86f18efd0a77204b5e9d88de62->leave($__internal_c36e90ee58a8a75197852becc269cc9f6167ab86f18efd0a77204b5e9d88de62_prof);

        
        $__internal_4f567e5c23bf43b300c13186721de5821ede82069bc1785a3faf833d9c5d82d3->leave($__internal_4f567e5c23bf43b300c13186721de5821ede82069bc1785a3faf833d9c5d82d3_prof);

    }

    // line 133
    public function block_accueil($context, array $blocks = array())
    {
        $__internal_fa1e6cecb41a0ef12432cc24542b00f4192cc7714f6eba760d62a99084a3e4c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa1e6cecb41a0ef12432cc24542b00f4192cc7714f6eba760d62a99084a3e4c8->enter($__internal_fa1e6cecb41a0ef12432cc24542b00f4192cc7714f6eba760d62a99084a3e4c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "accueil"));

        $__internal_05986fca3033fe5aa45f490c2ce6fbe7240e381eff89a3188d4631e41c8a03e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05986fca3033fe5aa45f490c2ce6fbe7240e381eff89a3188d4631e41c8a03e5->enter($__internal_05986fca3033fe5aa45f490c2ce6fbe7240e381eff89a3188d4631e41c8a03e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "accueil"));

        echo " class=\"active\" ";
        
        $__internal_05986fca3033fe5aa45f490c2ce6fbe7240e381eff89a3188d4631e41c8a03e5->leave($__internal_05986fca3033fe5aa45f490c2ce6fbe7240e381eff89a3188d4631e41c8a03e5_prof);

        
        $__internal_fa1e6cecb41a0ef12432cc24542b00f4192cc7714f6eba760d62a99084a3e4c8->leave($__internal_fa1e6cecb41a0ef12432cc24542b00f4192cc7714f6eba760d62a99084a3e4c8_prof);

    }

    // line 136
    public function block_reservation($context, array $blocks = array())
    {
        $__internal_ade677ef749e8538b6adcc6ab2dab8220a310ee46fe7353c827fe61333bac5d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ade677ef749e8538b6adcc6ab2dab8220a310ee46fe7353c827fe61333bac5d9->enter($__internal_ade677ef749e8538b6adcc6ab2dab8220a310ee46fe7353c827fe61333bac5d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reservation"));

        $__internal_4a444e35f14a05d2fae42bde78647c81a45553775187140d9d9946327254698b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a444e35f14a05d2fae42bde78647c81a45553775187140d9d9946327254698b->enter($__internal_4a444e35f14a05d2fae42bde78647c81a45553775187140d9d9946327254698b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reservation"));

        echo " class=\"active\" ";
        
        $__internal_4a444e35f14a05d2fae42bde78647c81a45553775187140d9d9946327254698b->leave($__internal_4a444e35f14a05d2fae42bde78647c81a45553775187140d9d9946327254698b_prof);

        
        $__internal_ade677ef749e8538b6adcc6ab2dab8220a310ee46fe7353c827fe61333bac5d9->leave($__internal_ade677ef749e8538b6adcc6ab2dab8220a310ee46fe7353c827fe61333bac5d9_prof);

    }

    // line 166
    public function block_main($context, array $blocks = array())
    {
        $__internal_d35e0f116ec74f3f25cf8abcb22e494e8bce0acc91b2f4bdc32b1277e616ed95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d35e0f116ec74f3f25cf8abcb22e494e8bce0acc91b2f4bdc32b1277e616ed95->enter($__internal_d35e0f116ec74f3f25cf8abcb22e494e8bce0acc91b2f4bdc32b1277e616ed95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_b36a86cc76853062208c77a9815544da972d627096447c9ae797e01d47302901 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b36a86cc76853062208c77a9815544da972d627096447c9ae797e01d47302901->enter($__internal_b36a86cc76853062208c77a9815544da972d627096447c9ae797e01d47302901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 167
        echo "        <div class=\"row\">
            <ol class=\"breadcrumb\">
                <li>
                    <a href=\"#\">
                        <em class=\"fa fa-home\"></em>
                    </a>
                </li>
                <li class=\"active\">";
        // line 174
        $this->displayBlock('titre_page_li', $context, $blocks);
        echo " </li>
            </ol>
        </div>
        <!--/.row-->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 180
        $this->displayBlock('titre_page_h1', $context, $blocks);
        echo "</h1>
            </div>
        </div>
        <!--/.row-->
        ";
        // line 184
        $this->displayBlock('contenus', $context, $blocks);
        // line 580
        echo "        <!--/.contenus-->
    ";
        
        $__internal_b36a86cc76853062208c77a9815544da972d627096447c9ae797e01d47302901->leave($__internal_b36a86cc76853062208c77a9815544da972d627096447c9ae797e01d47302901_prof);

        
        $__internal_d35e0f116ec74f3f25cf8abcb22e494e8bce0acc91b2f4bdc32b1277e616ed95->leave($__internal_d35e0f116ec74f3f25cf8abcb22e494e8bce0acc91b2f4bdc32b1277e616ed95_prof);

    }

    // line 174
    public function block_titre_page_li($context, array $blocks = array())
    {
        $__internal_e33d2177837e199340140a4e2fa93c3e0dc6182d7ac78df0c9d1df21c6bf31f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e33d2177837e199340140a4e2fa93c3e0dc6182d7ac78df0c9d1df21c6bf31f0->enter($__internal_e33d2177837e199340140a4e2fa93c3e0dc6182d7ac78df0c9d1df21c6bf31f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_li"));

        $__internal_b3b5f689d82cfdaf2c231684cd6f1facca26c7ca1d23a6219afbc0ca89d5612f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3b5f689d82cfdaf2c231684cd6f1facca26c7ca1d23a6219afbc0ca89d5612f->enter($__internal_b3b5f689d82cfdaf2c231684cd6f1facca26c7ca1d23a6219afbc0ca89d5612f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_li"));

        echo " tableau de bord";
        
        $__internal_b3b5f689d82cfdaf2c231684cd6f1facca26c7ca1d23a6219afbc0ca89d5612f->leave($__internal_b3b5f689d82cfdaf2c231684cd6f1facca26c7ca1d23a6219afbc0ca89d5612f_prof);

        
        $__internal_e33d2177837e199340140a4e2fa93c3e0dc6182d7ac78df0c9d1df21c6bf31f0->leave($__internal_e33d2177837e199340140a4e2fa93c3e0dc6182d7ac78df0c9d1df21c6bf31f0_prof);

    }

    // line 180
    public function block_titre_page_h1($context, array $blocks = array())
    {
        $__internal_53d4dfd50e60eca3ff1134bfa8c5cd6e03fc843c225f11157c8fb5ffb0171eeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53d4dfd50e60eca3ff1134bfa8c5cd6e03fc843c225f11157c8fb5ffb0171eeb->enter($__internal_53d4dfd50e60eca3ff1134bfa8c5cd6e03fc843c225f11157c8fb5ffb0171eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_h1"));

        $__internal_84bcd1b970f114351dc10fbfe6b3306db410e96639aba41bb6e837c21cf0535e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84bcd1b970f114351dc10fbfe6b3306db410e96639aba41bb6e837c21cf0535e->enter($__internal_84bcd1b970f114351dc10fbfe6b3306db410e96639aba41bb6e837c21cf0535e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_h1"));

        echo "Tableau de bord";
        
        $__internal_84bcd1b970f114351dc10fbfe6b3306db410e96639aba41bb6e837c21cf0535e->leave($__internal_84bcd1b970f114351dc10fbfe6b3306db410e96639aba41bb6e837c21cf0535e_prof);

        
        $__internal_53d4dfd50e60eca3ff1134bfa8c5cd6e03fc843c225f11157c8fb5ffb0171eeb->leave($__internal_53d4dfd50e60eca3ff1134bfa8c5cd6e03fc843c225f11157c8fb5ffb0171eeb_prof);

    }

    // line 184
    public function block_contenus($context, array $blocks = array())
    {
        $__internal_6888fe0801d6d3eb2356ca592c31fa03f28d9baa78fc3e13282e65a4d1417170 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6888fe0801d6d3eb2356ca592c31fa03f28d9baa78fc3e13282e65a4d1417170->enter($__internal_6888fe0801d6d3eb2356ca592c31fa03f28d9baa78fc3e13282e65a4d1417170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        $__internal_aea1e9ff22249bb002b21e02be22c3dff8babc1c8483ce188d0a0bcc1585ebd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aea1e9ff22249bb002b21e02be22c3dff8babc1c8483ce188d0a0bcc1585ebd5->enter($__internal_aea1e9ff22249bb002b21e02be22c3dff8babc1c8483ce188d0a0bcc1585ebd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        // line 185
        echo "
        <div class=\"panel panel-container\">
            <div class=\"row\">
                <div class=\"col-xs-6 col-md-3 col-lg-3 no-padding\">
                    <div class=\"panel panel-teal panel-widget border-right\">
                        <div class=\"row no-padding\"><em class=\"fa fa-xl fa-shopping-cart color-blue\"></em>
                            <div class=\"large\">120</div>
                            <div class=\"text-muted\">New Orders</div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xs-6 col-md-3 col-lg-3 no-padding\">
                    <div class=\"panel panel-blue panel-widget border-right\">
                        <div class=\"row no-padding\"><em class=\"fa fa-xl fa-comments color-orange\"></em>
                            <div class=\"large\">52</div>
                            <div class=\"text-muted\">Comments</div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xs-6 col-md-3 col-lg-3 no-padding\">
                    <div class=\"panel panel-orange panel-widget border-right\">
                        <div class=\"row no-padding\"><em class=\"fa fa-xl fa-users color-teal\"></em>
                            <div class=\"large\">24</div>
                            <div class=\"text-muted\">New Users</div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xs-6 col-md-3 col-lg-3 no-padding\">
                    <div class=\"panel panel-red panel-widget \">
                        <div class=\"row no-padding\"><em class=\"fa fa-xl fa-search color-red\"></em>
                            <div class=\"large\">25.2k</div>
                            <div class=\"text-muted\">Page Views</div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.row-->
        </div>
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        Site Traffic Overview
                        <ul class=\"pull-right panel-settings panel-button-tab-right\">
                            <li class=\"dropdown\">
                                <a class=\"pull-right dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                    <em class=\"fa fa-cogs\"></em>
                                </a>
                                <ul class=\"dropdown-menu dropdown-menu-right\">
                                    <li>
                                        <ul class=\"dropdown-settings\">
                                            <li>
                                                <a href=\"#\">
                                                    <em class=\"fa fa-cog\"></em> Settings 1
                                                </a>
                                            </li>
                                            <li class=\"divider\"></li>
                                            <li>
                                                <a href=\"#\">
                                                    <em class=\"fa fa-cog\"></em> Settings 2
                                                </a>
                                            </li>
                                            <li class=\"divider\"></li>
                                            <li>
                                                <a href=\"#\">
                                                    <em class=\"fa fa-cog\"></em> Settings 3
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <span class=\"pull-right clickable panel-toggle panel-button-tab-left\"><em class=\"fa fa-toggle-up\"></em></span></div>
                    <div class=\"panel-body\">
                        <div class=\"canvas-wrapper\">
                            <canvas class=\"main-chart\" id=\"line-chart\" height=\"200\" width=\"600\"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.row-->

        <div class=\"row\">
            <div class=\"col-xs-6 col-md-3\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-body easypiechart-panel\">
                        <h4>New Orders</h4>
                        <div class=\"easypiechart\" id=\"easypiechart-blue\" data-percent=\"92\"><span class=\"percent\">92%</span></div>
                    </div>
                </div>
            </div>
            <div class=\"col-xs-6 col-md-3\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-body easypiechart-panel\">
                        <h4>Comments</h4>
                        <div class=\"easypiechart\" id=\"easypiechart-orange\" data-percent=\"65\"><span class=\"percent\">65%</span></div>
                    </div>
                </div>
            </div>
            <div class=\"col-xs-6 col-md-3\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-body easypiechart-panel\">
                        <h4>New Users</h4>
                        <div class=\"easypiechart\" id=\"easypiechart-teal\" data-percent=\"56\"><span class=\"percent\">56%</span></div>
                    </div>
                </div>
            </div>
            <div class=\"col-xs-6 col-md-3\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-body easypiechart-panel\">
                        <h4>Visitors</h4>
                        <div class=\"easypiechart\" id=\"easypiechart-red\" data-percent=\"27\"><span class=\"percent\">27%</span></div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.row-->

        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"panel panel-default chat\">
                    <div class=\"panel-heading\">
                        Chat
                        <ul class=\"pull-right panel-settings panel-button-tab-right\">
                            <li class=\"dropdown\">
                                <a class=\"pull-right dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                    <em class=\"fa fa-cogs\"></em>
                                </a>
                                <ul class=\"dropdown-menu dropdown-menu-right\">
                                    <li>
                                        <ul class=\"dropdown-settings\">
                                            <li>
                                                <a href=\"#\">
                                                    <em class=\"fa fa-cog\"></em> Settings 1
                                                </a>
                                            </li>
                                            <li class=\"divider\"></li>
                                            <li>
                                                <a href=\"#\">
                                                    <em class=\"fa fa-cog\"></em> Settings 2
                                                </a>
                                            </li>
                                            <li class=\"divider\"></li>
                                            <li>
                                                <a href=\"#\">
                                                    <em class=\"fa fa-cog\"></em> Settings 3
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <span class=\"pull-right clickable panel-toggle panel-button-tab-left\"><em class=\"fa fa-toggle-up\"></em></span></div>
                    <div class=\"panel-body\">
                        <ul>
                            <li class=\"left clearfix\"><span class=\"chat-img pull-left\">
\t\t\t\t\t\t\t\t<img src=\"http://placehold.it/60/30a5ff/fff\" alt=\"User Avatar\" class=\"img-circle\" />
\t\t\t\t\t\t\t\t</span>
                                <div class=\"chat-body clearfix\">
                                    <div class=\"header\"><strong class=\"primary-font\">John Doe</strong> <small class=\"text-muted\">32 mins ago</small></div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc.</p>
                                </div>
                            </li>
                            <li class=\"right clearfix\"><span class=\"chat-img pull-right\">
\t\t\t\t\t\t\t\t<img src=\"http://placehold.it/60/dde0e6/5f6468\" alt=\"User Avatar\" class=\"img-circle\" />
\t\t\t\t\t\t\t\t</span>
                                <div class=\"chat-body clearfix\">
                                    <div class=\"header\"><strong class=\"pull-left primary-font\">Jane Doe</strong> <small class=\"text-muted\">6 mins ago</small></div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc.</p>
                                </div>
                            </li>
                            <li class=\"left clearfix\"><span class=\"chat-img pull-left\">
\t\t\t\t\t\t\t\t<img src=\"http://placehold.it/60/30a5ff/fff\" alt=\"User Avatar\" class=\"img-circle\" />
\t\t\t\t\t\t\t\t</span>
                                <div class=\"chat-body clearfix\">
                                    <div class=\"header\"><strong class=\"primary-font\">John Doe</strong> <small class=\"text-muted\">32 mins ago</small></div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class=\"panel-footer\">
                        <div class=\"input-group\">
                            <input id=\"btn-input\" type=\"text\" class=\"form-control input-md\" placeholder=\"Type your message here...\" /><span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-md\" id=\"btn-chat\">Send</button>
\t\t\t\t\t\t</span></div>
                    </div>
                </div>
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        To-do List
                        <ul class=\"pull-right panel-settings panel-button-tab-right\">
                            <li class=\"dropdown\">
                                <a class=\"pull-right dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                    <em class=\"fa fa-cogs\"></em>
                                </a>
                                <ul class=\"dropdown-menu dropdown-menu-right\">
                                    <li>
                                        <ul class=\"dropdown-settings\">
                                            <li>
                                                <a href=\"#\">
                                                    <em class=\"fa fa-cog\"></em> Settings 1
                                                </a>
                                            </li>
                                            <li class=\"divider\"></li>
                                            <li>
                                                <a href=\"#\">
                                                    <em class=\"fa fa-cog\"></em> Settings 2
                                                </a>
                                            </li>
                                            <li class=\"divider\"></li>
                                            <li>
                                                <a href=\"#\">
                                                    <em class=\"fa fa-cog\"></em> Settings 3
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <span class=\"pull-right clickable panel-toggle panel-button-tab-left\"><em class=\"fa fa-toggle-up\"></em></span></div>
                    <div class=\"panel-body\">
                        <ul class=\"todo-list\">
                            <li class=\"todo-list-item\">
                                <div class=\"checkbox\">
                                    <input type=\"checkbox\" id=\"checkbox-1\" />
                                    <label for=\"checkbox-1\">Make coffee</label>
                                </div>
                                <div class=\"pull-right action-buttons\">
                                    <a href=\"#\" class=\"trash\">
                                        <em class=\"fa fa-trash\"></em>
                                    </a>
                                </div>
                            </li>
                            <li class=\"todo-list-item\">
                                <div class=\"checkbox\">
                                    <input type=\"checkbox\" id=\"checkbox-2\" />
                                    <label for=\"checkbox-2\">Check emails</label>
                                </div>
                                <div class=\"pull-right action-buttons\">
                                    <a href=\"#\" class=\"trash\">
                                        <em class=\"fa fa-trash\"></em>
                                    </a>
                                </div>
                            </li>
                            <li class=\"todo-list-item\">
                                <div class=\"checkbox\">
                                    <input type=\"checkbox\" id=\"checkbox-3\" />
                                    <label for=\"checkbox-3\">Reply to Jane</label>
                                </div>
                                <div class=\"pull-right action-buttons\">
                                    <a href=\"#\" class=\"trash\">
                                        <em class=\"fa fa-trash\"></em>
                                    </a>
                                </div>
                            </li>
                            <li class=\"todo-list-item\">
                                <div class=\"checkbox\">
                                    <input type=\"checkbox\" id=\"checkbox-4\" />
                                    <label for=\"checkbox-4\">Make more coffee</label>
                                </div>
                                <div class=\"pull-right action-buttons\">
                                    <a href=\"#\" class=\"trash\">
                                        <em class=\"fa fa-trash\"></em>
                                    </a>
                                </div>
                            </li>
                            <li class=\"todo-list-item\">
                                <div class=\"checkbox\">
                                    <input type=\"checkbox\" id=\"checkbox-5\" />
                                    <label for=\"checkbox-5\">Work on the new design</label>
                                </div>
                                <div class=\"pull-right action-buttons\">
                                    <a href=\"#\" class=\"trash\">
                                        <em class=\"fa fa-trash\"></em>
                                    </a>
                                </div>
                            </li>
                            <li class=\"todo-list-item\">
                                <div class=\"checkbox\">
                                    <input type=\"checkbox\" id=\"checkbox-6\" />
                                    <label for=\"checkbox-6\">Get feedback on design</label>
                                </div>
                                <div class=\"pull-right action-buttons\">
                                    <a href=\"#\" class=\"trash\">
                                        <em class=\"fa fa-trash\"></em>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class=\"panel-footer\">
                        <div class=\"input-group\">
                            <input id=\"btn-input\" type=\"text\" class=\"form-control input-md\" placeholder=\"Add new task\" /><span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-md\" id=\"btn-todo\">Add</button>
\t\t\t\t\t\t</span></div>
                    </div>
                </div>
            </div>
            <!--/.col-->


            <div class=\"col-md-6\">
                <div class=\"panel panel-default \">
                    <div class=\"panel-heading\">
                        Timeline
                        <ul class=\"pull-right panel-settings panel-button-tab-right\">
                            <li class=\"dropdown\">
                                <a class=\"pull-right dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                    <em class=\"fa fa-cogs\"></em>
                                </a>
                                <ul class=\"dropdown-menu dropdown-menu-right\">
                                    <li>
                                        <ul class=\"dropdown-settings\">
                                            <li>
                                                <a href=\"#\">
                                                    <em class=\"fa fa-cog\"></em> Settings 1
                                                </a>
                                            </li>
                                            <li class=\"divider\"></li>
                                            <li>
                                                <a href=\"#\">
                                                    <em class=\"fa fa-cog\"></em> Settings 2
                                                </a>
                                            </li>
                                            <li class=\"divider\"></li>
                                            <li>
                                                <a href=\"#\">
                                                    <em class=\"fa fa-cog\"></em> Settings 3
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <span class=\"pull-right clickable panel-toggle panel-button-tab-left\"><em class=\"fa fa-toggle-up\"></em></span></div>
                    <div class=\"panel-body timeline-container\">
                        <ul class=\"timeline\">
                            <li>
                                <div class=\"timeline-badge\"><em class=\"glyphicon glyphicon-pushpin\"></em></div>
                                <div class=\"timeline-panel\">
                                    <div class=\"timeline-heading\">
                                        <h4 class=\"timeline-title\">Lorem ipsum dolor sit amet</h4>
                                    </div>
                                    <div class=\"timeline-body\">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at sodales nisl. Donec malesuada orci ornare risus finibus feugiat.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class=\"timeline-badge primary\"><em class=\"glyphicon glyphicon-link\"></em></div>
                                <div class=\"timeline-panel\">
                                    <div class=\"timeline-heading\">
                                        <h4 class=\"timeline-title\">Lorem ipsum dolor sit amet</h4>
                                    </div>
                                    <div class=\"timeline-body\">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class=\"timeline-badge\"><em class=\"glyphicon glyphicon-camera\"></em></div>
                                <div class=\"timeline-panel\">
                                    <div class=\"timeline-heading\">
                                        <h4 class=\"timeline-title\">Lorem ipsum dolor sit amet</h4>
                                    </div>
                                    <div class=\"timeline-body\">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at sodales nisl. Donec malesuada orci ornare risus finibus feugiat.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class=\"timeline-badge\"><em class=\"glyphicon glyphicon-paperclip\"></em></div>
                                <div class=\"timeline-panel\">
                                    <div class=\"timeline-heading\">
                                        <h4 class=\"timeline-title\">Lorem ipsum dolor sit amet</h4>
                                    </div>
                                    <div class=\"timeline-body\">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/.col-->
        </div>
        <!--/.row-->
        ";
        
        $__internal_aea1e9ff22249bb002b21e02be22c3dff8babc1c8483ce188d0a0bcc1585ebd5->leave($__internal_aea1e9ff22249bb002b21e02be22c3dff8babc1c8483ce188d0a0bcc1585ebd5_prof);

        
        $__internal_6888fe0801d6d3eb2356ca592c31fa03f28d9baa78fc3e13282e65a4d1417170->leave($__internal_6888fe0801d6d3eb2356ca592c31fa03f28d9baa78fc3e13282e65a4d1417170_prof);

    }

    // line 589
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_c07083d14233e026ba6d5d7f7d863748247602bca7a4aae1c92f3aa873424ff6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c07083d14233e026ba6d5d7f7d863748247602bca7a4aae1c92f3aa873424ff6->enter($__internal_c07083d14233e026ba6d5d7f7d863748247602bca7a4aae1c92f3aa873424ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_3a833ecb377062fd00de4c555d6ecb1841f617d082cec2cc99f1b96f181e5f70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a833ecb377062fd00de4c555d6ecb1841f617d082cec2cc99f1b96f181e5f70->enter($__internal_3a833ecb377062fd00de4c555d6ecb1841f617d082cec2cc99f1b96f181e5f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 590
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/jquery-3.3.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 591
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 592
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/chart.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 593
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/chart-data.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 594
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/easypiechart.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 595
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/easypiechart-data.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 596
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 597
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/custom.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 598
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/monscript.js"), "html", null, true);
        echo "\"></script>
    <script>
        window.onload = function() {
            var chart1 = document.getElementById(\"line-chart\").getContext(\"2d\");
            window.myLine = new Chart(chart1).Line(lineChartData, {
                responsive: true,
                scaleLineColor: \"rgba(0,0,0,.2)\",
                scaleGridLineColor: \"rgba(0,0,0,.05)\",
                scaleFontColor: \"#c5c7cc\"
            });
        };
    </script>
";
        
        $__internal_3a833ecb377062fd00de4c555d6ecb1841f617d082cec2cc99f1b96f181e5f70->leave($__internal_3a833ecb377062fd00de4c555d6ecb1841f617d082cec2cc99f1b96f181e5f70_prof);

        
        $__internal_c07083d14233e026ba6d5d7f7d863748247602bca7a4aae1c92f3aa873424ff6->leave($__internal_c07083d14233e026ba6d5d7f7d863748247602bca7a4aae1c92f3aa873424ff6_prof);

    }

    public function getTemplateName()
    {
        return "base1.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  937 => 598,  933 => 597,  929 => 596,  925 => 595,  921 => 594,  917 => 593,  913 => 592,  909 => 591,  904 => 590,  895 => 589,  491 => 185,  482 => 184,  464 => 180,  446 => 174,  435 => 580,  433 => 184,  426 => 180,  417 => 174,  408 => 167,  399 => 166,  381 => 136,  363 => 133,  348 => 160,  319 => 136,  311 => 133,  293 => 118,  288 => 115,  279 => 114,  190 => 32,  181 => 31,  166 => 582,  164 => 166,  161 => 165,  159 => 114,  155 => 112,  152 => 31,  143 => 30,  126 => 19,  124 => 18,  120 => 15,  116 => 14,  112 => 13,  108 => 12,  103 => 11,  94 => 10,  83 => 8,  74 => 7,  62 => 611,  60 => 589,  57 => 588,  55 => 30,  50 => 27,  47 => 10,  45 => 7,  37 => 1,);
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
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% block title %}
    <title>Soultana - Dashboard</title>
    {% endblock %}
    {% block stylesheets %}
    <link href=\"{{asset('admin/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('admin/css/font-awesome.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('admin/css/datepicker3.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('admin/css/styles.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('admin/css/monstyle.css')}}\" rel=\"stylesheet\">
    {# <script type=\"text/javascript\" src=\"{{asset('DataTables/datatables.min.js')}}\"></script>
    <link rel=\"stylesheet\" href=\"{{asset('DataTables/datatables.min.css')}}\" type=\"text/css\"/> #}
    {# <script src=\"{{asset('admin/js/jquery-1.11.1.min.js')}}\"></script> #}

    <!--Custom Font-->
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">
    <!--[if lt IE 9]>
\t<script src=\"js/html5shiv.js\"></script>
\t<script src=\"js/respond.min.js\"></script>
    <![endif]-->
    {% endblock %}
</head>

<body>
{% block body %}
    {% block header %}
    <nav class=\"navbar navbar-custom navbar-fixed-top\" role=\"navigation\">
        <div class=\"container-fluid\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#sidebar-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t<span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\"><span>SOULTANA </span>Admin</a>
                <ul class=\"nav navbar-top-links navbar-right\">
                    <li class=\"dropdown\">
                        <a class=\"dropdown-toggle count-info\" data-toggle=\"dropdown\" href=\"#\">
                            <em class=\"fa fa-envelope\"></em><span class=\"label label-danger\">15</span>
                        </a>
                        <ul class=\"dropdown-menu dropdown-messages\">
                            <li>
                                <div class=\"dropdown-messages-box\">
                                    <a href=\"profile.html\" class=\"pull-left\">
                                        <img alt=\"image\" class=\"img-circle\" src=\"http://placehold.it/40/30a5ff/fff\">
                                    </a>
                                    <div class=\"message-body\"><small class=\"pull-right\">3 mins ago</small>
                                        <a href=\"#\"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
                                        <br /><small class=\"text-muted\">1:24 pm - 25/03/2015</small></div>
                                </div>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <div class=\"dropdown-messages-box\">
                                    <a href=\"profile.html\" class=\"pull-left\">
                                        <img alt=\"image\" class=\"img-circle\" src=\"http://placehold.it/40/30a5ff/fff\">
                                    </a>
                                    <div class=\"message-body\"><small class=\"pull-right\">1 hour ago</small>
                                        <a href=\"#\">New message from <strong>Jane Doe</strong>.</a>
                                        <br /><small class=\"text-muted\">12:27 pm - 25/03/2015</small></div>
                                </div>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <div class=\"all-button\">
                                    <a href=\"#\">
                                        <em class=\"fa fa-inbox\"></em> <strong>All Messages</strong>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class=\"dropdown\">
                        <a class=\"dropdown-toggle count-info\" data-toggle=\"dropdown\" href=\"#\">
                            <em class=\"fa fa-bell\"></em><span class=\"label label-info\">5</span>
                        </a>
                        <ul class=\"dropdown-menu dropdown-alerts\">
                            <li>
                                <a href=\"#\">
                                    <div><em class=\"fa fa-envelope\"></em> 1 New Message
                                        <span class=\"pull-right text-muted small\">3 mins ago</span></div>
                                </a>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <a href=\"#\">
                                    <div><em class=\"fa fa-heart\"></em> 12 New Likes
                                        <span class=\"pull-right text-muted small\">4 mins ago</span></div>
                                </a>
                            </li>
                            <li class=\"divider\"></li>
                            <li>
                                <a href=\"#\">
                                    <div><em class=\"fa fa-user\"></em> 5 New Followers
                                        <span class=\"pull-right text-muted small\">4 mins ago</span></div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.container-fluid -->
    </nav>
    {% endblock %}


    {% block slidebar %}
    <div id=\"sidebar-collapse\" class=\"col-sm-3 col-lg-2 sidebar\">
        <div class=\"profile-sidebar\">
            <div class=\"profile-userpic\" id=\"photo-profil\">
                <img src=\"{{asset('admin/images/photo-profil/client-face2.png')}}\" class=\"img-responsive\" alt=\"photo profil\">
            </div>
            <div class=\"profile-usertitle\" id=\"utilisateur\">
                <div class=\"profile-usertitle-name\" style=\"color: #30a5ff; font-size: 14px; font-weight: bold;\">Nom d'utilisateur</div>
                <div class=\"profile-usertitle-status\"><span class=\"indicator label-success\"></span>En ligne</div>
            </div>
            <div class=\"clear\"></div>
        </div>
        <div class=\"divider\"></div>
        <form role=\"search\">
            <div class=\"form-group\">
                <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
            </div>
        </form>
        <ul class=\"nav menu\" id=\"menu_nav\">
            <li {% block accueil %} class=\"active\" {% endblock %} ><a href=\"{{path('admin_accueil')}}\" class=\"\"><em class=\"fa fa-dashboard\">&nbsp;</em> Tableau de bord</a></li>
            <li><a href=\"widgets.html\" class=\"\"><em class=\"fa fa-calendar\">&nbsp;</em> Calendrier</a></li>
            <li><a href=\"charts.html\" class=\"\"><em class=\"fa fa-bar-chart\">&nbsp;</em> Charts</a></li>
            <li {% block reservation %} class=\"active\" {% endblock %}><a href=\"{{path('admin_reservation')}}\"><em class=\"fa fa-registered\">&nbsp;</em> Réservation</a></li>
            <li><a href=\"panels.html\" class=\"\"><em class=\"fa fa-clone\">&nbsp;</em> Alerts &amp; Panels</a></li>
            <li class=\"parent \">
                <a data-toggle=\"collapse\" href=\"#sub-item-1\" class=\"\">
                    <em class=\"fa fa-navicon\">&nbsp;</em> Multilevel <span data-toggle=\"collapse\" href=\"#sub-item-1\" class=\"icon pull-right\"><em class=\"fa fa-plus\"></em></span>
                </a>
                <ul class=\"children collapse\" id=\"sub-item-1\">
                    <li>
                        <a class=\"\" href=\"#\">
                            <span class=\"fa fa-arrow-right\">&nbsp;</span> Sub Item 1
                        </a>
                    </li>
                    <li>
                        <a class=\"\" href=\"#\">
                            <span class=\"fa fa-arrow-right\">&nbsp;</span> Sub Item 2
                        </a>
                    </li>
                    <li>
                        <a class=\"\" href=\"#\">
                            <span class=\"fa fa-arrow-right\">&nbsp;</span> Sub Item 3
                        </a>
                    </li>
                </ul>
            </li>
            <li><a href=\"{{path('admin_index')}}\"><em class=\"fa fa-power-off\">&nbsp;</em> Logout</a></li>
        </ul>
    </div>
    <!--/.sidebar-->
    {% endblock %}
    <div class=\"col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main\">
    {% block main %}
        <div class=\"row\">
            <ol class=\"breadcrumb\">
                <li>
                    <a href=\"#\">
                        <em class=\"fa fa-home\"></em>
                    </a>
                </li>
                <li class=\"active\">{% block titre_page_li %} tableau de bord{% endblock %} </li>
            </ol>
        </div>
        <!--/.row-->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">{% block titre_page_h1 %}Tableau de bord{% endblock %}</h1>
            </div>
        </div>
        <!--/.row-->
        {% block contenus %}

        <div class=\"panel panel-container\">
            <div class=\"row\">
                <div class=\"col-xs-6 col-md-3 col-lg-3 no-padding\">
                    <div class=\"panel panel-teal panel-widget border-right\">
                        <div class=\"row no-padding\"><em class=\"fa fa-xl fa-shopping-cart color-blue\"></em>
                            <div class=\"large\">120</div>
                            <div class=\"text-muted\">New Orders</div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xs-6 col-md-3 col-lg-3 no-padding\">
                    <div class=\"panel panel-blue panel-widget border-right\">
                        <div class=\"row no-padding\"><em class=\"fa fa-xl fa-comments color-orange\"></em>
                            <div class=\"large\">52</div>
                            <div class=\"text-muted\">Comments</div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xs-6 col-md-3 col-lg-3 no-padding\">
                    <div class=\"panel panel-orange panel-widget border-right\">
                        <div class=\"row no-padding\"><em class=\"fa fa-xl fa-users color-teal\"></em>
                            <div class=\"large\">24</div>
                            <div class=\"text-muted\">New Users</div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xs-6 col-md-3 col-lg-3 no-padding\">
                    <div class=\"panel panel-red panel-widget \">
                        <div class=\"row no-padding\"><em class=\"fa fa-xl fa-search color-red\"></em>
                            <div class=\"large\">25.2k</div>
                            <div class=\"text-muted\">Page Views</div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.row-->
        </div>
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        Site Traffic Overview
                        <ul class=\"pull-right panel-settings panel-button-tab-right\">
                            <li class=\"dropdown\">
                                <a class=\"pull-right dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                    <em class=\"fa fa-cogs\"></em>
                                </a>
                                <ul class=\"dropdown-menu dropdown-menu-right\">
                                    <li>
                                        <ul class=\"dropdown-settings\">
                                            <li>
                                                <a href=\"#\">
                                                    <em class=\"fa fa-cog\"></em> Settings 1
                                                </a>
                                            </li>
                                            <li class=\"divider\"></li>
                                            <li>
                                                <a href=\"#\">
                                                    <em class=\"fa fa-cog\"></em> Settings 2
                                                </a>
                                            </li>
                                            <li class=\"divider\"></li>
                                            <li>
                                                <a href=\"#\">
                                                    <em class=\"fa fa-cog\"></em> Settings 3
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <span class=\"pull-right clickable panel-toggle panel-button-tab-left\"><em class=\"fa fa-toggle-up\"></em></span></div>
                    <div class=\"panel-body\">
                        <div class=\"canvas-wrapper\">
                            <canvas class=\"main-chart\" id=\"line-chart\" height=\"200\" width=\"600\"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.row-->

        <div class=\"row\">
            <div class=\"col-xs-6 col-md-3\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-body easypiechart-panel\">
                        <h4>New Orders</h4>
                        <div class=\"easypiechart\" id=\"easypiechart-blue\" data-percent=\"92\"><span class=\"percent\">92%</span></div>
                    </div>
                </div>
            </div>
            <div class=\"col-xs-6 col-md-3\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-body easypiechart-panel\">
                        <h4>Comments</h4>
                        <div class=\"easypiechart\" id=\"easypiechart-orange\" data-percent=\"65\"><span class=\"percent\">65%</span></div>
                    </div>
                </div>
            </div>
            <div class=\"col-xs-6 col-md-3\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-body easypiechart-panel\">
                        <h4>New Users</h4>
                        <div class=\"easypiechart\" id=\"easypiechart-teal\" data-percent=\"56\"><span class=\"percent\">56%</span></div>
                    </div>
                </div>
            </div>
            <div class=\"col-xs-6 col-md-3\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-body easypiechart-panel\">
                        <h4>Visitors</h4>
                        <div class=\"easypiechart\" id=\"easypiechart-red\" data-percent=\"27\"><span class=\"percent\">27%</span></div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.row-->

        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"panel panel-default chat\">
                    <div class=\"panel-heading\">
                        Chat
                        <ul class=\"pull-right panel-settings panel-button-tab-right\">
                            <li class=\"dropdown\">
                                <a class=\"pull-right dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                    <em class=\"fa fa-cogs\"></em>
                                </a>
                                <ul class=\"dropdown-menu dropdown-menu-right\">
                                    <li>
                                        <ul class=\"dropdown-settings\">
                                            <li>
                                                <a href=\"#\">
                                                    <em class=\"fa fa-cog\"></em> Settings 1
                                                </a>
                                            </li>
                                            <li class=\"divider\"></li>
                                            <li>
                                                <a href=\"#\">
                                                    <em class=\"fa fa-cog\"></em> Settings 2
                                                </a>
                                            </li>
                                            <li class=\"divider\"></li>
                                            <li>
                                                <a href=\"#\">
                                                    <em class=\"fa fa-cog\"></em> Settings 3
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <span class=\"pull-right clickable panel-toggle panel-button-tab-left\"><em class=\"fa fa-toggle-up\"></em></span></div>
                    <div class=\"panel-body\">
                        <ul>
                            <li class=\"left clearfix\"><span class=\"chat-img pull-left\">
\t\t\t\t\t\t\t\t<img src=\"http://placehold.it/60/30a5ff/fff\" alt=\"User Avatar\" class=\"img-circle\" />
\t\t\t\t\t\t\t\t</span>
                                <div class=\"chat-body clearfix\">
                                    <div class=\"header\"><strong class=\"primary-font\">John Doe</strong> <small class=\"text-muted\">32 mins ago</small></div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc.</p>
                                </div>
                            </li>
                            <li class=\"right clearfix\"><span class=\"chat-img pull-right\">
\t\t\t\t\t\t\t\t<img src=\"http://placehold.it/60/dde0e6/5f6468\" alt=\"User Avatar\" class=\"img-circle\" />
\t\t\t\t\t\t\t\t</span>
                                <div class=\"chat-body clearfix\">
                                    <div class=\"header\"><strong class=\"pull-left primary-font\">Jane Doe</strong> <small class=\"text-muted\">6 mins ago</small></div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc.</p>
                                </div>
                            </li>
                            <li class=\"left clearfix\"><span class=\"chat-img pull-left\">
\t\t\t\t\t\t\t\t<img src=\"http://placehold.it/60/30a5ff/fff\" alt=\"User Avatar\" class=\"img-circle\" />
\t\t\t\t\t\t\t\t</span>
                                <div class=\"chat-body clearfix\">
                                    <div class=\"header\"><strong class=\"primary-font\">John Doe</strong> <small class=\"text-muted\">32 mins ago</small></div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class=\"panel-footer\">
                        <div class=\"input-group\">
                            <input id=\"btn-input\" type=\"text\" class=\"form-control input-md\" placeholder=\"Type your message here...\" /><span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-md\" id=\"btn-chat\">Send</button>
\t\t\t\t\t\t</span></div>
                    </div>
                </div>
                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\">
                        To-do List
                        <ul class=\"pull-right panel-settings panel-button-tab-right\">
                            <li class=\"dropdown\">
                                <a class=\"pull-right dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                    <em class=\"fa fa-cogs\"></em>
                                </a>
                                <ul class=\"dropdown-menu dropdown-menu-right\">
                                    <li>
                                        <ul class=\"dropdown-settings\">
                                            <li>
                                                <a href=\"#\">
                                                    <em class=\"fa fa-cog\"></em> Settings 1
                                                </a>
                                            </li>
                                            <li class=\"divider\"></li>
                                            <li>
                                                <a href=\"#\">
                                                    <em class=\"fa fa-cog\"></em> Settings 2
                                                </a>
                                            </li>
                                            <li class=\"divider\"></li>
                                            <li>
                                                <a href=\"#\">
                                                    <em class=\"fa fa-cog\"></em> Settings 3
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <span class=\"pull-right clickable panel-toggle panel-button-tab-left\"><em class=\"fa fa-toggle-up\"></em></span></div>
                    <div class=\"panel-body\">
                        <ul class=\"todo-list\">
                            <li class=\"todo-list-item\">
                                <div class=\"checkbox\">
                                    <input type=\"checkbox\" id=\"checkbox-1\" />
                                    <label for=\"checkbox-1\">Make coffee</label>
                                </div>
                                <div class=\"pull-right action-buttons\">
                                    <a href=\"#\" class=\"trash\">
                                        <em class=\"fa fa-trash\"></em>
                                    </a>
                                </div>
                            </li>
                            <li class=\"todo-list-item\">
                                <div class=\"checkbox\">
                                    <input type=\"checkbox\" id=\"checkbox-2\" />
                                    <label for=\"checkbox-2\">Check emails</label>
                                </div>
                                <div class=\"pull-right action-buttons\">
                                    <a href=\"#\" class=\"trash\">
                                        <em class=\"fa fa-trash\"></em>
                                    </a>
                                </div>
                            </li>
                            <li class=\"todo-list-item\">
                                <div class=\"checkbox\">
                                    <input type=\"checkbox\" id=\"checkbox-3\" />
                                    <label for=\"checkbox-3\">Reply to Jane</label>
                                </div>
                                <div class=\"pull-right action-buttons\">
                                    <a href=\"#\" class=\"trash\">
                                        <em class=\"fa fa-trash\"></em>
                                    </a>
                                </div>
                            </li>
                            <li class=\"todo-list-item\">
                                <div class=\"checkbox\">
                                    <input type=\"checkbox\" id=\"checkbox-4\" />
                                    <label for=\"checkbox-4\">Make more coffee</label>
                                </div>
                                <div class=\"pull-right action-buttons\">
                                    <a href=\"#\" class=\"trash\">
                                        <em class=\"fa fa-trash\"></em>
                                    </a>
                                </div>
                            </li>
                            <li class=\"todo-list-item\">
                                <div class=\"checkbox\">
                                    <input type=\"checkbox\" id=\"checkbox-5\" />
                                    <label for=\"checkbox-5\">Work on the new design</label>
                                </div>
                                <div class=\"pull-right action-buttons\">
                                    <a href=\"#\" class=\"trash\">
                                        <em class=\"fa fa-trash\"></em>
                                    </a>
                                </div>
                            </li>
                            <li class=\"todo-list-item\">
                                <div class=\"checkbox\">
                                    <input type=\"checkbox\" id=\"checkbox-6\" />
                                    <label for=\"checkbox-6\">Get feedback on design</label>
                                </div>
                                <div class=\"pull-right action-buttons\">
                                    <a href=\"#\" class=\"trash\">
                                        <em class=\"fa fa-trash\"></em>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class=\"panel-footer\">
                        <div class=\"input-group\">
                            <input id=\"btn-input\" type=\"text\" class=\"form-control input-md\" placeholder=\"Add new task\" /><span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary btn-md\" id=\"btn-todo\">Add</button>
\t\t\t\t\t\t</span></div>
                    </div>
                </div>
            </div>
            <!--/.col-->


            <div class=\"col-md-6\">
                <div class=\"panel panel-default \">
                    <div class=\"panel-heading\">
                        Timeline
                        <ul class=\"pull-right panel-settings panel-button-tab-right\">
                            <li class=\"dropdown\">
                                <a class=\"pull-right dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                    <em class=\"fa fa-cogs\"></em>
                                </a>
                                <ul class=\"dropdown-menu dropdown-menu-right\">
                                    <li>
                                        <ul class=\"dropdown-settings\">
                                            <li>
                                                <a href=\"#\">
                                                    <em class=\"fa fa-cog\"></em> Settings 1
                                                </a>
                                            </li>
                                            <li class=\"divider\"></li>
                                            <li>
                                                <a href=\"#\">
                                                    <em class=\"fa fa-cog\"></em> Settings 2
                                                </a>
                                            </li>
                                            <li class=\"divider\"></li>
                                            <li>
                                                <a href=\"#\">
                                                    <em class=\"fa fa-cog\"></em> Settings 3
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <span class=\"pull-right clickable panel-toggle panel-button-tab-left\"><em class=\"fa fa-toggle-up\"></em></span></div>
                    <div class=\"panel-body timeline-container\">
                        <ul class=\"timeline\">
                            <li>
                                <div class=\"timeline-badge\"><em class=\"glyphicon glyphicon-pushpin\"></em></div>
                                <div class=\"timeline-panel\">
                                    <div class=\"timeline-heading\">
                                        <h4 class=\"timeline-title\">Lorem ipsum dolor sit amet</h4>
                                    </div>
                                    <div class=\"timeline-body\">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at sodales nisl. Donec malesuada orci ornare risus finibus feugiat.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class=\"timeline-badge primary\"><em class=\"glyphicon glyphicon-link\"></em></div>
                                <div class=\"timeline-panel\">
                                    <div class=\"timeline-heading\">
                                        <h4 class=\"timeline-title\">Lorem ipsum dolor sit amet</h4>
                                    </div>
                                    <div class=\"timeline-body\">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class=\"timeline-badge\"><em class=\"glyphicon glyphicon-camera\"></em></div>
                                <div class=\"timeline-panel\">
                                    <div class=\"timeline-heading\">
                                        <h4 class=\"timeline-title\">Lorem ipsum dolor sit amet</h4>
                                    </div>
                                    <div class=\"timeline-body\">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at sodales nisl. Donec malesuada orci ornare risus finibus feugiat.</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class=\"timeline-badge\"><em class=\"glyphicon glyphicon-paperclip\"></em></div>
                                <div class=\"timeline-panel\">
                                    <div class=\"timeline-heading\">
                                        <h4 class=\"timeline-title\">Lorem ipsum dolor sit amet</h4>
                                    </div>
                                    <div class=\"timeline-body\">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--/.col-->
        </div>
        <!--/.row-->
        {% endblock %}
        <!--/.contenus-->
    {% endblock %}
    <div class=\"col-sm-12\">
        <p class=\"back-link\">Lumino Theme by <a href=\"https://www.medialoot.com\">Medialoot</a></p>
    </div>
    </div>
    <!--/.main-->
{% endblock %}
<!--/.body-->
{% block scripts %}
    <script src=\"{{asset('admin/js/jquery-3.3.1.min.js')}}\"></script>
    <script src=\"{{asset('admin/js/bootstrap.min.js')}}\"></script>
    <script src=\"{{asset('admin/js/chart.min.js')}}\"></script>
    <script src=\"{{asset('admin/js/chart-data.js')}}\"></script>
    <script src=\"{{asset('admin/js/easypiechart.js')}}\"></script>
    <script src=\"{{asset('admin/js/easypiechart-data.js')}}\"></script>
    <script src=\"{{asset('admin/js/bootstrap-datepicker.js')}}\"></script>
    <script src=\"{{asset('admin/js/custom.js')}}\"></script>
    <script src=\"{{asset('admin/js/monscript.js')}}\"></script>
    <script>
        window.onload = function() {
            var chart1 = document.getElementById(\"line-chart\").getContext(\"2d\");
            window.myLine = new Chart(chart1).Line(lineChartData, {
                responsive: true,
                scaleLineColor: \"rgba(0,0,0,.2)\",
                scaleGridLineColor: \"rgba(0,0,0,.05)\",
                scaleFontColor: \"#c5c7cc\"
            });
        };
    </script>
{% endblock %}
</body>

</html>", "base1.html.twig", "/var/www/html/File_Rouge/original/soultana.sn/app/Resources/views/base1.html.twig");
    }
}
