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
        $__internal_a3e0e5182fbc67a8dc15cade18b65e20094ad94af7cfb179766ccb287bda685b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3e0e5182fbc67a8dc15cade18b65e20094ad94af7cfb179766ccb287bda685b->enter($__internal_a3e0e5182fbc67a8dc15cade18b65e20094ad94af7cfb179766ccb287bda685b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base1.html.twig"));

        $__internal_f8f17164e7f4bcf8b760d6b0fe5f13aa353b8bd892bd3e852bfb93d7c43bfec1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8f17164e7f4bcf8b760d6b0fe5f13aa353b8bd892bd3e852bfb93d7c43bfec1->enter($__internal_f8f17164e7f4bcf8b760d6b0fe5f13aa353b8bd892bd3e852bfb93d7c43bfec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base1.html.twig"));

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
        // line 24
        echo "</head>

<body>
";
        // line 27
        $this->displayBlock('body', $context, $blocks);
        // line 588
        echo "<!--/.body-->
";
        // line 589
        $this->displayBlock('scripts', $context, $blocks);
        // line 611
        echo "</body>

</html>";
        
        $__internal_a3e0e5182fbc67a8dc15cade18b65e20094ad94af7cfb179766ccb287bda685b->leave($__internal_a3e0e5182fbc67a8dc15cade18b65e20094ad94af7cfb179766ccb287bda685b_prof);

        
        $__internal_f8f17164e7f4bcf8b760d6b0fe5f13aa353b8bd892bd3e852bfb93d7c43bfec1->leave($__internal_f8f17164e7f4bcf8b760d6b0fe5f13aa353b8bd892bd3e852bfb93d7c43bfec1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b4b3377b5f07dbec60a572fbedeaeed3db77af1c23b31cce551f10b63d3d3377 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4b3377b5f07dbec60a572fbedeaeed3db77af1c23b31cce551f10b63d3d3377->enter($__internal_b4b3377b5f07dbec60a572fbedeaeed3db77af1c23b31cce551f10b63d3d3377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_465867f3668b9928d4f9417f92310815b0a69551d340229c445190847c8a16d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_465867f3668b9928d4f9417f92310815b0a69551d340229c445190847c8a16d5->enter($__internal_465867f3668b9928d4f9417f92310815b0a69551d340229c445190847c8a16d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    <title>Soultana - Dashboard</title>
    ";
        
        $__internal_465867f3668b9928d4f9417f92310815b0a69551d340229c445190847c8a16d5->leave($__internal_465867f3668b9928d4f9417f92310815b0a69551d340229c445190847c8a16d5_prof);

        
        $__internal_b4b3377b5f07dbec60a572fbedeaeed3db77af1c23b31cce551f10b63d3d3377->leave($__internal_b4b3377b5f07dbec60a572fbedeaeed3db77af1c23b31cce551f10b63d3d3377_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cfa103d0fdb312d3c186709a759ac3aa1b8859bdb9daf8450c016a9a1e3a9c60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfa103d0fdb312d3c186709a759ac3aa1b8859bdb9daf8450c016a9a1e3a9c60->enter($__internal_cfa103d0fdb312d3c186709a759ac3aa1b8859bdb9daf8450c016a9a1e3a9c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e6b1901a2d14ef57b4dcd7329fc0bbea356d5a13b3e75a06ad3ec1266969d02f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6b1901a2d14ef57b4dcd7329fc0bbea356d5a13b3e75a06ad3ec1266969d02f->enter($__internal_e6b1901a2d14ef57b4dcd7329fc0bbea356d5a13b3e75a06ad3ec1266969d02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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

    <!--Custom Font-->
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">
    <!--[if lt IE 9]>
\t<script src=\"js/html5shiv.js\"></script>
\t<script src=\"js/respond.min.js\"></script>
    <![endif]-->
    ";
        
        $__internal_e6b1901a2d14ef57b4dcd7329fc0bbea356d5a13b3e75a06ad3ec1266969d02f->leave($__internal_e6b1901a2d14ef57b4dcd7329fc0bbea356d5a13b3e75a06ad3ec1266969d02f_prof);

        
        $__internal_cfa103d0fdb312d3c186709a759ac3aa1b8859bdb9daf8450c016a9a1e3a9c60->leave($__internal_cfa103d0fdb312d3c186709a759ac3aa1b8859bdb9daf8450c016a9a1e3a9c60_prof);

    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef7df039abeddb3be6c63fe05c8733a47077f58caf3cc9f83f3c52d39abd841e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef7df039abeddb3be6c63fe05c8733a47077f58caf3cc9f83f3c52d39abd841e->enter($__internal_ef7df039abeddb3be6c63fe05c8733a47077f58caf3cc9f83f3c52d39abd841e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_753f3e707b86aa07e88c38c2f0a934427c1a189ff576017abe997414303ea689 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_753f3e707b86aa07e88c38c2f0a934427c1a189ff576017abe997414303ea689->enter($__internal_753f3e707b86aa07e88c38c2f0a934427c1a189ff576017abe997414303ea689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 28
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 109
        echo "

    ";
        // line 111
        $this->displayBlock('slidebar', $context, $blocks);
        // line 162
        echo "    <div class=\"col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main\">
    ";
        // line 163
        $this->displayBlock('main', $context, $blocks);
        // line 582
        echo "    <div class=\"col-sm-12\">
        <p class=\"back-link\">Lumino Theme by <a href=\"https://www.medialoot.com\">Medialoot</a></p>
    </div>
    </div>
    <!--/.main-->
";
        
        $__internal_753f3e707b86aa07e88c38c2f0a934427c1a189ff576017abe997414303ea689->leave($__internal_753f3e707b86aa07e88c38c2f0a934427c1a189ff576017abe997414303ea689_prof);

        
        $__internal_ef7df039abeddb3be6c63fe05c8733a47077f58caf3cc9f83f3c52d39abd841e->leave($__internal_ef7df039abeddb3be6c63fe05c8733a47077f58caf3cc9f83f3c52d39abd841e_prof);

    }

    // line 28
    public function block_header($context, array $blocks = array())
    {
        $__internal_14ce7b0bb585a2e1ae11f1f6da45ef5dcb295556435dc926aabaee222d87a636 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14ce7b0bb585a2e1ae11f1f6da45ef5dcb295556435dc926aabaee222d87a636->enter($__internal_14ce7b0bb585a2e1ae11f1f6da45ef5dcb295556435dc926aabaee222d87a636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_7d301896092a69cc7a4313492b36bccec743e7b281740ff4944ba62eee6d2a6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d301896092a69cc7a4313492b36bccec743e7b281740ff4944ba62eee6d2a6c->enter($__internal_7d301896092a69cc7a4313492b36bccec743e7b281740ff4944ba62eee6d2a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 29
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
        
        $__internal_7d301896092a69cc7a4313492b36bccec743e7b281740ff4944ba62eee6d2a6c->leave($__internal_7d301896092a69cc7a4313492b36bccec743e7b281740ff4944ba62eee6d2a6c_prof);

        
        $__internal_14ce7b0bb585a2e1ae11f1f6da45ef5dcb295556435dc926aabaee222d87a636->leave($__internal_14ce7b0bb585a2e1ae11f1f6da45ef5dcb295556435dc926aabaee222d87a636_prof);

    }

    // line 111
    public function block_slidebar($context, array $blocks = array())
    {
        $__internal_37f943c6a4d1f622f748b4bebe4c6f0568970bcbae4a9a799350edba60446f32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37f943c6a4d1f622f748b4bebe4c6f0568970bcbae4a9a799350edba60446f32->enter($__internal_37f943c6a4d1f622f748b4bebe4c6f0568970bcbae4a9a799350edba60446f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slidebar"));

        $__internal_6bbe74bc4d1e01d7f94e025cf001d31446e77c68fb3283adff118a6d7d6c2327 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bbe74bc4d1e01d7f94e025cf001d31446e77c68fb3283adff118a6d7d6c2327->enter($__internal_6bbe74bc4d1e01d7f94e025cf001d31446e77c68fb3283adff118a6d7d6c2327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slidebar"));

        // line 112
        echo "    <div id=\"sidebar-collapse\" class=\"col-sm-3 col-lg-2 sidebar\">
        <div class=\"profile-sidebar\">
            <div class=\"profile-userpic\" id=\"photo-profil\">
                <img src=\"";
        // line 115
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
        // line 130
        $this->displayBlock('accueil', $context, $blocks);
        echo " ><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_accueil");
        echo "\" class=\"\"><em class=\"fa fa-dashboard\">&nbsp;</em> Tableau de bord</a></li>
            <li><a href=\"widgets.html\" class=\"\"><em class=\"fa fa-calendar\">&nbsp;</em> Calendrier</a></li>
            <li><a href=\"charts.html\" class=\"\"><em class=\"fa fa-bar-chart\">&nbsp;</em> Charts</a></li>
            <li ";
        // line 133
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
        // line 157
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_index");
        echo "\"><em class=\"fa fa-power-off\">&nbsp;</em> Logout</a></li>
        </ul>
    </div>
    <!--/.sidebar-->
    ";
        
        $__internal_6bbe74bc4d1e01d7f94e025cf001d31446e77c68fb3283adff118a6d7d6c2327->leave($__internal_6bbe74bc4d1e01d7f94e025cf001d31446e77c68fb3283adff118a6d7d6c2327_prof);

        
        $__internal_37f943c6a4d1f622f748b4bebe4c6f0568970bcbae4a9a799350edba60446f32->leave($__internal_37f943c6a4d1f622f748b4bebe4c6f0568970bcbae4a9a799350edba60446f32_prof);

    }

    // line 130
    public function block_accueil($context, array $blocks = array())
    {
        $__internal_6de6a2f4c377ac3d3ecec2a9ce8ab8653374c9f306a2d5105eb7bb29410ece74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6de6a2f4c377ac3d3ecec2a9ce8ab8653374c9f306a2d5105eb7bb29410ece74->enter($__internal_6de6a2f4c377ac3d3ecec2a9ce8ab8653374c9f306a2d5105eb7bb29410ece74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "accueil"));

        $__internal_ff34dc0edcef99dfb7bb565a6a61173f78e7ba40d243e75697956c63f625c2d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff34dc0edcef99dfb7bb565a6a61173f78e7ba40d243e75697956c63f625c2d5->enter($__internal_ff34dc0edcef99dfb7bb565a6a61173f78e7ba40d243e75697956c63f625c2d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "accueil"));

        echo " class=\"active\" ";
        
        $__internal_ff34dc0edcef99dfb7bb565a6a61173f78e7ba40d243e75697956c63f625c2d5->leave($__internal_ff34dc0edcef99dfb7bb565a6a61173f78e7ba40d243e75697956c63f625c2d5_prof);

        
        $__internal_6de6a2f4c377ac3d3ecec2a9ce8ab8653374c9f306a2d5105eb7bb29410ece74->leave($__internal_6de6a2f4c377ac3d3ecec2a9ce8ab8653374c9f306a2d5105eb7bb29410ece74_prof);

    }

    // line 133
    public function block_reservation($context, array $blocks = array())
    {
        $__internal_fbe4a92feff48c2c9e570647b276bdad270fb7db2b196d1793c859d656dd6de2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbe4a92feff48c2c9e570647b276bdad270fb7db2b196d1793c859d656dd6de2->enter($__internal_fbe4a92feff48c2c9e570647b276bdad270fb7db2b196d1793c859d656dd6de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reservation"));

        $__internal_fb9fc8acdb6ae059cfd644037246dcd4e00b41858acee355231ac101bb1b4cdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb9fc8acdb6ae059cfd644037246dcd4e00b41858acee355231ac101bb1b4cdc->enter($__internal_fb9fc8acdb6ae059cfd644037246dcd4e00b41858acee355231ac101bb1b4cdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reservation"));

        echo " class=\"active\" ";
        
        $__internal_fb9fc8acdb6ae059cfd644037246dcd4e00b41858acee355231ac101bb1b4cdc->leave($__internal_fb9fc8acdb6ae059cfd644037246dcd4e00b41858acee355231ac101bb1b4cdc_prof);

        
        $__internal_fbe4a92feff48c2c9e570647b276bdad270fb7db2b196d1793c859d656dd6de2->leave($__internal_fbe4a92feff48c2c9e570647b276bdad270fb7db2b196d1793c859d656dd6de2_prof);

    }

    // line 163
    public function block_main($context, array $blocks = array())
    {
        $__internal_7fcb37e333469d82d4bbe5f5e8252915c8a17d77855bcf96e938a97fa8a93d90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fcb37e333469d82d4bbe5f5e8252915c8a17d77855bcf96e938a97fa8a93d90->enter($__internal_7fcb37e333469d82d4bbe5f5e8252915c8a17d77855bcf96e938a97fa8a93d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_b433322f0487d1181570d8ed590364268f647f6f80ce696d744c08ac0d8e5a36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b433322f0487d1181570d8ed590364268f647f6f80ce696d744c08ac0d8e5a36->enter($__internal_b433322f0487d1181570d8ed590364268f647f6f80ce696d744c08ac0d8e5a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 164
        echo "        <div class=\"row\">
            <ol class=\"breadcrumb\">
                <li>
                    <a href=\"#\">
                        <em class=\"fa fa-home\"></em>
                    </a>
                </li>
                <li class=\"active\">";
        // line 171
        $this->displayBlock('titre_page_li', $context, $blocks);
        echo " </li>
            </ol>
        </div>
        <!--/.row-->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 177
        $this->displayBlock('titre_page_h1', $context, $blocks);
        echo "</h1>
            </div>
        </div>
        <!--/.row-->
        ";
        // line 181
        $this->displayBlock('contenus', $context, $blocks);
        // line 580
        echo "        <!--/.contenus-->
    ";
        
        $__internal_b433322f0487d1181570d8ed590364268f647f6f80ce696d744c08ac0d8e5a36->leave($__internal_b433322f0487d1181570d8ed590364268f647f6f80ce696d744c08ac0d8e5a36_prof);

        
        $__internal_7fcb37e333469d82d4bbe5f5e8252915c8a17d77855bcf96e938a97fa8a93d90->leave($__internal_7fcb37e333469d82d4bbe5f5e8252915c8a17d77855bcf96e938a97fa8a93d90_prof);

    }

    // line 171
    public function block_titre_page_li($context, array $blocks = array())
    {
        $__internal_f29ac2d1e8339eec5ddd5daf726ab2edfed7ced5301befa5569e5bcd2789e5a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f29ac2d1e8339eec5ddd5daf726ab2edfed7ced5301befa5569e5bcd2789e5a3->enter($__internal_f29ac2d1e8339eec5ddd5daf726ab2edfed7ced5301befa5569e5bcd2789e5a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_li"));

        $__internal_7182cac8cbec5eeeeedd6a985e7395f652c3a47e87606276a709314472d149e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7182cac8cbec5eeeeedd6a985e7395f652c3a47e87606276a709314472d149e2->enter($__internal_7182cac8cbec5eeeeedd6a985e7395f652c3a47e87606276a709314472d149e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_li"));

        echo " tableau de bord";
        
        $__internal_7182cac8cbec5eeeeedd6a985e7395f652c3a47e87606276a709314472d149e2->leave($__internal_7182cac8cbec5eeeeedd6a985e7395f652c3a47e87606276a709314472d149e2_prof);

        
        $__internal_f29ac2d1e8339eec5ddd5daf726ab2edfed7ced5301befa5569e5bcd2789e5a3->leave($__internal_f29ac2d1e8339eec5ddd5daf726ab2edfed7ced5301befa5569e5bcd2789e5a3_prof);

    }

    // line 177
    public function block_titre_page_h1($context, array $blocks = array())
    {
        $__internal_8afa0ebd6a2b5d5fb301833ad6ed8d3e63c80e1825db68a0e2a6ffbd571bea1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8afa0ebd6a2b5d5fb301833ad6ed8d3e63c80e1825db68a0e2a6ffbd571bea1e->enter($__internal_8afa0ebd6a2b5d5fb301833ad6ed8d3e63c80e1825db68a0e2a6ffbd571bea1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_h1"));

        $__internal_4f684885d3b2aa04580144cf64d90a0f737628b51d942712c28499fd118357d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f684885d3b2aa04580144cf64d90a0f737628b51d942712c28499fd118357d2->enter($__internal_4f684885d3b2aa04580144cf64d90a0f737628b51d942712c28499fd118357d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_h1"));

        echo "Tableau de bord";
        
        $__internal_4f684885d3b2aa04580144cf64d90a0f737628b51d942712c28499fd118357d2->leave($__internal_4f684885d3b2aa04580144cf64d90a0f737628b51d942712c28499fd118357d2_prof);

        
        $__internal_8afa0ebd6a2b5d5fb301833ad6ed8d3e63c80e1825db68a0e2a6ffbd571bea1e->leave($__internal_8afa0ebd6a2b5d5fb301833ad6ed8d3e63c80e1825db68a0e2a6ffbd571bea1e_prof);

    }

    // line 181
    public function block_contenus($context, array $blocks = array())
    {
        $__internal_46ce53fbf605d7cc0a195699a43899c081fc0d29dfbc6e7095ff387e5a58519e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46ce53fbf605d7cc0a195699a43899c081fc0d29dfbc6e7095ff387e5a58519e->enter($__internal_46ce53fbf605d7cc0a195699a43899c081fc0d29dfbc6e7095ff387e5a58519e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        $__internal_76757c3327fdfd0fa7e061f7dd8a7a67e73929feb6ec3843c8f452b88f0ef794 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76757c3327fdfd0fa7e061f7dd8a7a67e73929feb6ec3843c8f452b88f0ef794->enter($__internal_76757c3327fdfd0fa7e061f7dd8a7a67e73929feb6ec3843c8f452b88f0ef794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        // line 182
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
            <div class=\"col-sm-12\">
                <p class=\"back-link\">Lumino Theme by <a href=\"https://www.medialoot.com\">Medialoot</a></p>
            </div>
        </div>
        <!--/.row-->
        ";
        
        $__internal_76757c3327fdfd0fa7e061f7dd8a7a67e73929feb6ec3843c8f452b88f0ef794->leave($__internal_76757c3327fdfd0fa7e061f7dd8a7a67e73929feb6ec3843c8f452b88f0ef794_prof);

        
        $__internal_46ce53fbf605d7cc0a195699a43899c081fc0d29dfbc6e7095ff387e5a58519e->leave($__internal_46ce53fbf605d7cc0a195699a43899c081fc0d29dfbc6e7095ff387e5a58519e_prof);

    }

    // line 589
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_8103800bb7d0904474b9eb3863f289842aff2d2371cb14a0391974e974edc72c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8103800bb7d0904474b9eb3863f289842aff2d2371cb14a0391974e974edc72c->enter($__internal_8103800bb7d0904474b9eb3863f289842aff2d2371cb14a0391974e974edc72c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_5eb8e8f17cb29d5ac1c9bbecea2dedb9b3a082edb95f707d7b84c6f8ffb6930d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eb8e8f17cb29d5ac1c9bbecea2dedb9b3a082edb95f707d7b84c6f8ffb6930d->enter($__internal_5eb8e8f17cb29d5ac1c9bbecea2dedb9b3a082edb95f707d7b84c6f8ffb6930d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

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
        
        $__internal_5eb8e8f17cb29d5ac1c9bbecea2dedb9b3a082edb95f707d7b84c6f8ffb6930d->leave($__internal_5eb8e8f17cb29d5ac1c9bbecea2dedb9b3a082edb95f707d7b84c6f8ffb6930d_prof);

        
        $__internal_8103800bb7d0904474b9eb3863f289842aff2d2371cb14a0391974e974edc72c->leave($__internal_8103800bb7d0904474b9eb3863f289842aff2d2371cb14a0391974e974edc72c_prof);

    }

    public function getTemplateName()
    {
        return "base1.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  936 => 598,  932 => 597,  928 => 596,  924 => 595,  920 => 594,  916 => 593,  912 => 592,  908 => 591,  903 => 590,  894 => 589,  487 => 182,  478 => 181,  460 => 177,  442 => 171,  431 => 580,  429 => 181,  422 => 177,  413 => 171,  404 => 164,  395 => 163,  377 => 133,  359 => 130,  344 => 157,  315 => 133,  307 => 130,  289 => 115,  284 => 112,  275 => 111,  186 => 29,  177 => 28,  162 => 582,  160 => 163,  157 => 162,  155 => 111,  151 => 109,  148 => 28,  139 => 27,  120 => 15,  116 => 14,  112 => 13,  108 => 12,  103 => 11,  94 => 10,  83 => 8,  74 => 7,  62 => 611,  60 => 589,  57 => 588,  55 => 27,  50 => 24,  47 => 10,  45 => 7,  37 => 1,);
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
            <div class=\"col-sm-12\">
                <p class=\"back-link\">Lumino Theme by <a href=\"https://www.medialoot.com\">Medialoot</a></p>
            </div>
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
