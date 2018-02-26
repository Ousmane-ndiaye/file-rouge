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
        $__internal_f48da785a38910375867facbc04abf959a7742f2bc664cdb030e6572e76ea0d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f48da785a38910375867facbc04abf959a7742f2bc664cdb030e6572e76ea0d5->enter($__internal_f48da785a38910375867facbc04abf959a7742f2bc664cdb030e6572e76ea0d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base1.html.twig"));

        $__internal_fda8b5fc551d86d2bfc4de7965a47d885f02a674dc7d9bb10fe1f97e72a7940c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fda8b5fc551d86d2bfc4de7965a47d885f02a674dc7d9bb10fe1f97e72a7940c->enter($__internal_fda8b5fc551d86d2bfc4de7965a47d885f02a674dc7d9bb10fe1f97e72a7940c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base1.html.twig"));

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
        // line 28
        echo "</head>

<body>
";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 589
        echo "<!--/.body-->
";
        // line 590
        $this->displayBlock('scripts', $context, $blocks);
        // line 613
        echo "</body>

</html>";
        
        $__internal_f48da785a38910375867facbc04abf959a7742f2bc664cdb030e6572e76ea0d5->leave($__internal_f48da785a38910375867facbc04abf959a7742f2bc664cdb030e6572e76ea0d5_prof);

        
        $__internal_fda8b5fc551d86d2bfc4de7965a47d885f02a674dc7d9bb10fe1f97e72a7940c->leave($__internal_fda8b5fc551d86d2bfc4de7965a47d885f02a674dc7d9bb10fe1f97e72a7940c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee28c66bd41bddb19857caa6a430e467cfadf83b07b625352ae30f45dc0da2f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee28c66bd41bddb19857caa6a430e467cfadf83b07b625352ae30f45dc0da2f9->enter($__internal_ee28c66bd41bddb19857caa6a430e467cfadf83b07b625352ae30f45dc0da2f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4abc9b593959b720c207565e32d27ab8347c8b735a405b628a5e2b8d9d418b43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4abc9b593959b720c207565e32d27ab8347c8b735a405b628a5e2b8d9d418b43->enter($__internal_4abc9b593959b720c207565e32d27ab8347c8b735a405b628a5e2b8d9d418b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    <title>Soultana - Dashboard</title>
    ";
        
        $__internal_4abc9b593959b720c207565e32d27ab8347c8b735a405b628a5e2b8d9d418b43->leave($__internal_4abc9b593959b720c207565e32d27ab8347c8b735a405b628a5e2b8d9d418b43_prof);

        
        $__internal_ee28c66bd41bddb19857caa6a430e467cfadf83b07b625352ae30f45dc0da2f9->leave($__internal_ee28c66bd41bddb19857caa6a430e467cfadf83b07b625352ae30f45dc0da2f9_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c635e17734aa6176440896cdcfeada182bb5c056ab3eb4193e79c01c4d968e25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c635e17734aa6176440896cdcfeada182bb5c056ab3eb4193e79c01c4d968e25->enter($__internal_c635e17734aa6176440896cdcfeada182bb5c056ab3eb4193e79c01c4d968e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_fbb5c08a43131c8f57e73261fae72073eca8972f451f43f13f3807256276c92b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbb5c08a43131c8f57e73261fae72073eca8972f451f43f13f3807256276c92b->enter($__internal_fbb5c08a43131c8f57e73261fae72073eca8972f451f43f13f3807256276c92b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/css/monstyle.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/css/print.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        // line 19
        echo "    ";
        // line 20
        echo "
    <!--Custom Font-->
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">
    <!--[if lt IE 9]>
\t<script src=\"js/html5shiv.js\"></script>
\t<script src=\"js/respond.min.js\"></script>
    <![endif]-->
    ";
        
        $__internal_fbb5c08a43131c8f57e73261fae72073eca8972f451f43f13f3807256276c92b->leave($__internal_fbb5c08a43131c8f57e73261fae72073eca8972f451f43f13f3807256276c92b_prof);

        
        $__internal_c635e17734aa6176440896cdcfeada182bb5c056ab3eb4193e79c01c4d968e25->leave($__internal_c635e17734aa6176440896cdcfeada182bb5c056ab3eb4193e79c01c4d968e25_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e2d2fbd4f445c504469ec49e33e8ad5ec6a99eee784b1a4b1a660a3ca5be8e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e2d2fbd4f445c504469ec49e33e8ad5ec6a99eee784b1a4b1a660a3ca5be8e1->enter($__internal_0e2d2fbd4f445c504469ec49e33e8ad5ec6a99eee784b1a4b1a660a3ca5be8e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a263985d7d83c6efab5eb2fcc1ba5ce28a8452cf5fd5bfb3d11844793a8f34b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a263985d7d83c6efab5eb2fcc1ba5ce28a8452cf5fd5bfb3d11844793a8f34b9->enter($__internal_a263985d7d83c6efab5eb2fcc1ba5ce28a8452cf5fd5bfb3d11844793a8f34b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 32
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 113
        echo "

    ";
        // line 115
        $this->displayBlock('slidebar', $context, $blocks);
        // line 166
        echo "    <div class=\"col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main\">
    ";
        // line 167
        $this->displayBlock('main', $context, $blocks);
        // line 583
        echo "    <div class=\"col-sm-12\">
        <p class=\"back-link\">Lumino Theme by <a href=\"https://www.medialoot.com\">Medialoot</a></p>
    </div>
    </div>
    <!--/.main-->
";
        
        $__internal_a263985d7d83c6efab5eb2fcc1ba5ce28a8452cf5fd5bfb3d11844793a8f34b9->leave($__internal_a263985d7d83c6efab5eb2fcc1ba5ce28a8452cf5fd5bfb3d11844793a8f34b9_prof);

        
        $__internal_0e2d2fbd4f445c504469ec49e33e8ad5ec6a99eee784b1a4b1a660a3ca5be8e1->leave($__internal_0e2d2fbd4f445c504469ec49e33e8ad5ec6a99eee784b1a4b1a660a3ca5be8e1_prof);

    }

    // line 32
    public function block_header($context, array $blocks = array())
    {
        $__internal_d99a7fbdd98a815521cff2528a14bd2ee6f865ecbc3214207f56a2da984b17e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d99a7fbdd98a815521cff2528a14bd2ee6f865ecbc3214207f56a2da984b17e0->enter($__internal_d99a7fbdd98a815521cff2528a14bd2ee6f865ecbc3214207f56a2da984b17e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_ab186a386f5f5f0609d1a72c68e4c2909187f00f9985e27a35609d532eb8cc6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab186a386f5f5f0609d1a72c68e4c2909187f00f9985e27a35609d532eb8cc6e->enter($__internal_ab186a386f5f5f0609d1a72c68e4c2909187f00f9985e27a35609d532eb8cc6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 33
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
        
        $__internal_ab186a386f5f5f0609d1a72c68e4c2909187f00f9985e27a35609d532eb8cc6e->leave($__internal_ab186a386f5f5f0609d1a72c68e4c2909187f00f9985e27a35609d532eb8cc6e_prof);

        
        $__internal_d99a7fbdd98a815521cff2528a14bd2ee6f865ecbc3214207f56a2da984b17e0->leave($__internal_d99a7fbdd98a815521cff2528a14bd2ee6f865ecbc3214207f56a2da984b17e0_prof);

    }

    // line 115
    public function block_slidebar($context, array $blocks = array())
    {
        $__internal_cd4c075d158e29041d70e8b1ee4eda68078e0d871ae5715286b36df70573741b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd4c075d158e29041d70e8b1ee4eda68078e0d871ae5715286b36df70573741b->enter($__internal_cd4c075d158e29041d70e8b1ee4eda68078e0d871ae5715286b36df70573741b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slidebar"));

        $__internal_e1d6fb196e3a8d4d8bedee649b5f7a8c9dbd19e1e918612d3feead6382f68a60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1d6fb196e3a8d4d8bedee649b5f7a8c9dbd19e1e918612d3feead6382f68a60->enter($__internal_e1d6fb196e3a8d4d8bedee649b5f7a8c9dbd19e1e918612d3feead6382f68a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slidebar"));

        // line 116
        echo "    <div id=\"sidebar-collapse\" class=\"col-sm-3 col-lg-2 sidebar\">
        <div class=\"profile-sidebar\">
            <div class=\"profile-userpic\" id=\"photo-profil\">
                <img src=\"";
        // line 119
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
        // line 134
        $this->displayBlock('accueil', $context, $blocks);
        echo " ><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_accueil");
        echo "\" class=\"\"><em class=\"fa fa-dashboard\">&nbsp;</em> Tableau de bord</a></li>
            <li><a href=\"widgets.html\" class=\"\"><em class=\"fa fa-calendar\">&nbsp;</em> Calendrier</a></li>
            <li><a href=\"charts.html\" class=\"\"><em class=\"fa fa-bar-chart\">&nbsp;</em> Charts</a></li>
            <li ";
        // line 137
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
        // line 161
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_index");
        echo "\"><em class=\"fa fa-power-off\">&nbsp;</em> Logout</a></li>
        </ul>
    </div>
    <!--/.sidebar-->
    ";
        
        $__internal_e1d6fb196e3a8d4d8bedee649b5f7a8c9dbd19e1e918612d3feead6382f68a60->leave($__internal_e1d6fb196e3a8d4d8bedee649b5f7a8c9dbd19e1e918612d3feead6382f68a60_prof);

        
        $__internal_cd4c075d158e29041d70e8b1ee4eda68078e0d871ae5715286b36df70573741b->leave($__internal_cd4c075d158e29041d70e8b1ee4eda68078e0d871ae5715286b36df70573741b_prof);

    }

    // line 134
    public function block_accueil($context, array $blocks = array())
    {
        $__internal_713e891b0fd2f0611f966b7cfef2bf86d40d2cb03858b634d9e951f40602c7bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_713e891b0fd2f0611f966b7cfef2bf86d40d2cb03858b634d9e951f40602c7bc->enter($__internal_713e891b0fd2f0611f966b7cfef2bf86d40d2cb03858b634d9e951f40602c7bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "accueil"));

        $__internal_363c7013f8b08787e28dc7980f0577fc76ac278a1a5ab36bb4bb4b0181122288 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_363c7013f8b08787e28dc7980f0577fc76ac278a1a5ab36bb4bb4b0181122288->enter($__internal_363c7013f8b08787e28dc7980f0577fc76ac278a1a5ab36bb4bb4b0181122288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "accueil"));

        echo " class=\"active\" ";
        
        $__internal_363c7013f8b08787e28dc7980f0577fc76ac278a1a5ab36bb4bb4b0181122288->leave($__internal_363c7013f8b08787e28dc7980f0577fc76ac278a1a5ab36bb4bb4b0181122288_prof);

        
        $__internal_713e891b0fd2f0611f966b7cfef2bf86d40d2cb03858b634d9e951f40602c7bc->leave($__internal_713e891b0fd2f0611f966b7cfef2bf86d40d2cb03858b634d9e951f40602c7bc_prof);

    }

    // line 137
    public function block_reservation($context, array $blocks = array())
    {
        $__internal_3a8034bdf0677b40a8ad2b7c1d5b04dc5514f1bd8b6129c54cebf34cc8513c09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a8034bdf0677b40a8ad2b7c1d5b04dc5514f1bd8b6129c54cebf34cc8513c09->enter($__internal_3a8034bdf0677b40a8ad2b7c1d5b04dc5514f1bd8b6129c54cebf34cc8513c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reservation"));

        $__internal_13b892c34b3167d4e60bc9471bc520498a9192e3123afb77cf0bebe9d83fa804 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13b892c34b3167d4e60bc9471bc520498a9192e3123afb77cf0bebe9d83fa804->enter($__internal_13b892c34b3167d4e60bc9471bc520498a9192e3123afb77cf0bebe9d83fa804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reservation"));

        echo " class=\"active\" ";
        
        $__internal_13b892c34b3167d4e60bc9471bc520498a9192e3123afb77cf0bebe9d83fa804->leave($__internal_13b892c34b3167d4e60bc9471bc520498a9192e3123afb77cf0bebe9d83fa804_prof);

        
        $__internal_3a8034bdf0677b40a8ad2b7c1d5b04dc5514f1bd8b6129c54cebf34cc8513c09->leave($__internal_3a8034bdf0677b40a8ad2b7c1d5b04dc5514f1bd8b6129c54cebf34cc8513c09_prof);

    }

    // line 167
    public function block_main($context, array $blocks = array())
    {
        $__internal_cbb5890bf93230940aac109bae4adc250f80f368a90879f9f51ecd48ed1d838a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbb5890bf93230940aac109bae4adc250f80f368a90879f9f51ecd48ed1d838a->enter($__internal_cbb5890bf93230940aac109bae4adc250f80f368a90879f9f51ecd48ed1d838a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_f9041c22d79f43782d95010dd3642632e660c5d56e35eeed3860185382cca3f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9041c22d79f43782d95010dd3642632e660c5d56e35eeed3860185382cca3f5->enter($__internal_f9041c22d79f43782d95010dd3642632e660c5d56e35eeed3860185382cca3f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 168
        echo "        <div class=\"row\">
            <ol class=\"breadcrumb\">
                <li>
                    <a href=\"#\">
                        <em class=\"fa fa-home\"></em>
                    </a>
                </li>
                <li class=\"active\"> ";
        // line 175
        $this->displayBlock('titre_page_li', $context, $blocks);
        echo " </li>
            </ol>
        </div>
        <!--/.row-->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\"> ";
        // line 181
        $this->displayBlock('titre_page_h1', $context, $blocks);
        echo " </h1>
            </div>
        </div>
        <!--/.row-->
        <div id=\"charge_page\">
            ";
        // line 186
        $this->displayBlock('contenus', $context, $blocks);
        // line 580
        echo "        </div>
        <!--/.contenus-->
    ";
        
        $__internal_f9041c22d79f43782d95010dd3642632e660c5d56e35eeed3860185382cca3f5->leave($__internal_f9041c22d79f43782d95010dd3642632e660c5d56e35eeed3860185382cca3f5_prof);

        
        $__internal_cbb5890bf93230940aac109bae4adc250f80f368a90879f9f51ecd48ed1d838a->leave($__internal_cbb5890bf93230940aac109bae4adc250f80f368a90879f9f51ecd48ed1d838a_prof);

    }

    // line 175
    public function block_titre_page_li($context, array $blocks = array())
    {
        $__internal_7fed8d013df87790fc26633f0481ba3e2d2c2b8af525e9b41f61aa7bcd97290d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fed8d013df87790fc26633f0481ba3e2d2c2b8af525e9b41f61aa7bcd97290d->enter($__internal_7fed8d013df87790fc26633f0481ba3e2d2c2b8af525e9b41f61aa7bcd97290d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_li"));

        $__internal_9f678a85904e48923d6e1a6b53962afa5224ae6be1faf7cae0e70339b470216d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f678a85904e48923d6e1a6b53962afa5224ae6be1faf7cae0e70339b470216d->enter($__internal_9f678a85904e48923d6e1a6b53962afa5224ae6be1faf7cae0e70339b470216d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_li"));

        echo " tableau de bord ";
        
        $__internal_9f678a85904e48923d6e1a6b53962afa5224ae6be1faf7cae0e70339b470216d->leave($__internal_9f678a85904e48923d6e1a6b53962afa5224ae6be1faf7cae0e70339b470216d_prof);

        
        $__internal_7fed8d013df87790fc26633f0481ba3e2d2c2b8af525e9b41f61aa7bcd97290d->leave($__internal_7fed8d013df87790fc26633f0481ba3e2d2c2b8af525e9b41f61aa7bcd97290d_prof);

    }

    // line 181
    public function block_titre_page_h1($context, array $blocks = array())
    {
        $__internal_0081939566ec89e29d08aa9ff473f454f43323baf96d3a2f6d1115463d5e4ac8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0081939566ec89e29d08aa9ff473f454f43323baf96d3a2f6d1115463d5e4ac8->enter($__internal_0081939566ec89e29d08aa9ff473f454f43323baf96d3a2f6d1115463d5e4ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_h1"));

        $__internal_5167acd5ffdf4f330a2bb705317844bc275b96208403c8d0b559194a7bc7469e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5167acd5ffdf4f330a2bb705317844bc275b96208403c8d0b559194a7bc7469e->enter($__internal_5167acd5ffdf4f330a2bb705317844bc275b96208403c8d0b559194a7bc7469e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_h1"));

        echo " Tableau de bord ";
        
        $__internal_5167acd5ffdf4f330a2bb705317844bc275b96208403c8d0b559194a7bc7469e->leave($__internal_5167acd5ffdf4f330a2bb705317844bc275b96208403c8d0b559194a7bc7469e_prof);

        
        $__internal_0081939566ec89e29d08aa9ff473f454f43323baf96d3a2f6d1115463d5e4ac8->leave($__internal_0081939566ec89e29d08aa9ff473f454f43323baf96d3a2f6d1115463d5e4ac8_prof);

    }

    // line 186
    public function block_contenus($context, array $blocks = array())
    {
        $__internal_995ab74a2f514ffb61da58b195c08eb39537105e961bbce10c87b025b87c951c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_995ab74a2f514ffb61da58b195c08eb39537105e961bbce10c87b025b87c951c->enter($__internal_995ab74a2f514ffb61da58b195c08eb39537105e961bbce10c87b025b87c951c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        $__internal_9121bd2f1ec434a4c0fb0b285b1c67f69924a6671cc94eb00a21b67e44451308 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9121bd2f1ec434a4c0fb0b285b1c67f69924a6671cc94eb00a21b67e44451308->enter($__internal_9121bd2f1ec434a4c0fb0b285b1c67f69924a6671cc94eb00a21b67e44451308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        // line 187
        echo "            <div class=\"panel panel-container\">
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
                                    <img src=\"http://placehold.it/60/30a5ff/fff\" alt=\"User Avatar\" class=\"img-circle\" />
                                    </span>
                                    <div class=\"chat-body clearfix\">
                                        <div class=\"header\"><strong class=\"primary-font\">John Doe</strong> <small class=\"text-muted\">32 mins ago</small></div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc.</p>
                                    </div>
                                </li>
                                <li class=\"right clearfix\"><span class=\"chat-img pull-right\">
                                    <img src=\"http://placehold.it/60/dde0e6/5f6468\" alt=\"User Avatar\" class=\"img-circle\" />
                                    </span>
                                    <div class=\"chat-body clearfix\">
                                        <div class=\"header\"><strong class=\"pull-left primary-font\">Jane Doe</strong> <small class=\"text-muted\">6 mins ago</small></div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc.</p>
                                    </div>
                                </li>
                                <li class=\"left clearfix\"><span class=\"chat-img pull-left\">
                                    <img src=\"http://placehold.it/60/30a5ff/fff\" alt=\"User Avatar\" class=\"img-circle\" />
                                    </span>
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
                                    <button class=\"btn btn-primary btn-md\" id=\"btn-chat\">Send</button>
                            </span></div>
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
                                    <button class=\"btn btn-primary btn-md\" id=\"btn-todo\">Add</button>
                            </span></div>
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
            </div>
            <!--/.col-->
        ";
        
        $__internal_9121bd2f1ec434a4c0fb0b285b1c67f69924a6671cc94eb00a21b67e44451308->leave($__internal_9121bd2f1ec434a4c0fb0b285b1c67f69924a6671cc94eb00a21b67e44451308_prof);

        
        $__internal_995ab74a2f514ffb61da58b195c08eb39537105e961bbce10c87b025b87c951c->leave($__internal_995ab74a2f514ffb61da58b195c08eb39537105e961bbce10c87b025b87c951c_prof);

    }

    // line 590
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_4b7338d40e1571874c7ef23abc06d6a328ff95eba5a2ecbb77acd68b1ceb83b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b7338d40e1571874c7ef23abc06d6a328ff95eba5a2ecbb77acd68b1ceb83b7->enter($__internal_4b7338d40e1571874c7ef23abc06d6a328ff95eba5a2ecbb77acd68b1ceb83b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_da013b3d462be381c6db793a479578c045db87b21f34e09bdc3fc01a86bdac34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da013b3d462be381c6db793a479578c045db87b21f34e09bdc3fc01a86bdac34->enter($__internal_da013b3d462be381c6db793a479578c045db87b21f34e09bdc3fc01a86bdac34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 591
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/jquery-3.3.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 592
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 593
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/chart.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 594
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/chart-data.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 595
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/easypiechart.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 596
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/easypiechart-data.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 597
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 598
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/custom.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 599
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/monscript.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 600
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/print.min.js"), "html", null, true);
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
        
        $__internal_da013b3d462be381c6db793a479578c045db87b21f34e09bdc3fc01a86bdac34->leave($__internal_da013b3d462be381c6db793a479578c045db87b21f34e09bdc3fc01a86bdac34_prof);

        
        $__internal_4b7338d40e1571874c7ef23abc06d6a328ff95eba5a2ecbb77acd68b1ceb83b7->leave($__internal_4b7338d40e1571874c7ef23abc06d6a328ff95eba5a2ecbb77acd68b1ceb83b7_prof);

    }

    public function getTemplateName()
    {
        return "base1.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  945 => 600,  941 => 599,  937 => 598,  933 => 597,  929 => 596,  925 => 595,  921 => 594,  917 => 593,  913 => 592,  908 => 591,  899 => 590,  497 => 187,  488 => 186,  470 => 181,  452 => 175,  440 => 580,  438 => 186,  430 => 181,  421 => 175,  412 => 168,  403 => 167,  385 => 137,  367 => 134,  352 => 161,  323 => 137,  315 => 134,  297 => 119,  292 => 116,  283 => 115,  194 => 33,  185 => 32,  170 => 583,  168 => 167,  165 => 166,  163 => 115,  159 => 113,  156 => 32,  147 => 31,  130 => 20,  128 => 19,  124 => 16,  120 => 15,  116 => 14,  112 => 13,  108 => 12,  103 => 11,  94 => 10,  83 => 8,  74 => 7,  62 => 613,  60 => 590,  57 => 589,  55 => 31,  50 => 28,  47 => 10,  45 => 7,  37 => 1,);
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
    <link href=\"{{asset('admin/css/monstyle.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('admin/css/styles.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('admin/css/print.min.css')}}\" rel=\"stylesheet\">
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
                <li class=\"active\"> {% block titre_page_li %} tableau de bord {% endblock %} </li>
            </ol>
        </div>
        <!--/.row-->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\"> {% block titre_page_h1 %} Tableau de bord {% endblock %} </h1>
            </div>
        </div>
        <!--/.row-->
        <div id=\"charge_page\">
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
                                    <img src=\"http://placehold.it/60/30a5ff/fff\" alt=\"User Avatar\" class=\"img-circle\" />
                                    </span>
                                    <div class=\"chat-body clearfix\">
                                        <div class=\"header\"><strong class=\"primary-font\">John Doe</strong> <small class=\"text-muted\">32 mins ago</small></div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc.</p>
                                    </div>
                                </li>
                                <li class=\"right clearfix\"><span class=\"chat-img pull-right\">
                                    <img src=\"http://placehold.it/60/dde0e6/5f6468\" alt=\"User Avatar\" class=\"img-circle\" />
                                    </span>
                                    <div class=\"chat-body clearfix\">
                                        <div class=\"header\"><strong class=\"pull-left primary-font\">Jane Doe</strong> <small class=\"text-muted\">6 mins ago</small></div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc.</p>
                                    </div>
                                </li>
                                <li class=\"left clearfix\"><span class=\"chat-img pull-left\">
                                    <img src=\"http://placehold.it/60/30a5ff/fff\" alt=\"User Avatar\" class=\"img-circle\" />
                                    </span>
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
                                    <button class=\"btn btn-primary btn-md\" id=\"btn-chat\">Send</button>
                            </span></div>
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
                                    <button class=\"btn btn-primary btn-md\" id=\"btn-todo\">Add</button>
                            </span></div>
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
            </div>
            <!--/.col-->
        {% endblock %}
        </div>
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
    <script src=\"{{asset('admin/js/print.min.js')}}\"></script>
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
