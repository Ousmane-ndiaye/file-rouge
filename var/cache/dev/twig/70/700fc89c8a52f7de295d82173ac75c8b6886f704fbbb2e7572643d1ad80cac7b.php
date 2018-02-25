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
        $__internal_0eec1e539e8e53a8838d0961cac493a1eb18cea6d2af5742d8ba8e2ddfa23d35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0eec1e539e8e53a8838d0961cac493a1eb18cea6d2af5742d8ba8e2ddfa23d35->enter($__internal_0eec1e539e8e53a8838d0961cac493a1eb18cea6d2af5742d8ba8e2ddfa23d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base1.html.twig"));

        $__internal_212ba5552846690392b735ec4772222372b581087e57dd59e166f55f0ea28f10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_212ba5552846690392b735ec4772222372b581087e57dd59e166f55f0ea28f10->enter($__internal_212ba5552846690392b735ec4772222372b581087e57dd59e166f55f0ea28f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base1.html.twig"));

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
        // line 612
        echo "</body>

</html>";
        
        $__internal_0eec1e539e8e53a8838d0961cac493a1eb18cea6d2af5742d8ba8e2ddfa23d35->leave($__internal_0eec1e539e8e53a8838d0961cac493a1eb18cea6d2af5742d8ba8e2ddfa23d35_prof);

        
        $__internal_212ba5552846690392b735ec4772222372b581087e57dd59e166f55f0ea28f10->leave($__internal_212ba5552846690392b735ec4772222372b581087e57dd59e166f55f0ea28f10_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9bd730d370411e9a94b6e1346be9afb16e9325f03634b99a51670a78d01dc311 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bd730d370411e9a94b6e1346be9afb16e9325f03634b99a51670a78d01dc311->enter($__internal_9bd730d370411e9a94b6e1346be9afb16e9325f03634b99a51670a78d01dc311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_06dbc5131a116a80579894957be9160946659582540ee54e22f5afe7d35b9ab3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06dbc5131a116a80579894957be9160946659582540ee54e22f5afe7d35b9ab3->enter($__internal_06dbc5131a116a80579894957be9160946659582540ee54e22f5afe7d35b9ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    <title>Soultana - Dashboard</title>
    ";
        
        $__internal_06dbc5131a116a80579894957be9160946659582540ee54e22f5afe7d35b9ab3->leave($__internal_06dbc5131a116a80579894957be9160946659582540ee54e22f5afe7d35b9ab3_prof);

        
        $__internal_9bd730d370411e9a94b6e1346be9afb16e9325f03634b99a51670a78d01dc311->leave($__internal_9bd730d370411e9a94b6e1346be9afb16e9325f03634b99a51670a78d01dc311_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_26d9ae05a165bd714d15aada797e207de4913b20bf90d426bbe4b47c100e5a86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26d9ae05a165bd714d15aada797e207de4913b20bf90d426bbe4b47c100e5a86->enter($__internal_26d9ae05a165bd714d15aada797e207de4913b20bf90d426bbe4b47c100e5a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_46c9ed167bfc541374fb00b3fe80dbe135989aaaeba8211d5e1f30e1ba1a3c94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46c9ed167bfc541374fb00b3fe80dbe135989aaaeba8211d5e1f30e1ba1a3c94->enter($__internal_46c9ed167bfc541374fb00b3fe80dbe135989aaaeba8211d5e1f30e1ba1a3c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/css/styles.css"), "html", null, true);
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
        
        $__internal_46c9ed167bfc541374fb00b3fe80dbe135989aaaeba8211d5e1f30e1ba1a3c94->leave($__internal_46c9ed167bfc541374fb00b3fe80dbe135989aaaeba8211d5e1f30e1ba1a3c94_prof);

        
        $__internal_26d9ae05a165bd714d15aada797e207de4913b20bf90d426bbe4b47c100e5a86->leave($__internal_26d9ae05a165bd714d15aada797e207de4913b20bf90d426bbe4b47c100e5a86_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_0dda6cad750baed7d6bf807c57e62993fa95e152a15ec0354959fe8ecc169945 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dda6cad750baed7d6bf807c57e62993fa95e152a15ec0354959fe8ecc169945->enter($__internal_0dda6cad750baed7d6bf807c57e62993fa95e152a15ec0354959fe8ecc169945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6eebf7a1ac866c96911d486205c62b2ecee70d60f02df7cfe8d289d6f5e9fb27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eebf7a1ac866c96911d486205c62b2ecee70d60f02df7cfe8d289d6f5e9fb27->enter($__internal_6eebf7a1ac866c96911d486205c62b2ecee70d60f02df7cfe8d289d6f5e9fb27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6eebf7a1ac866c96911d486205c62b2ecee70d60f02df7cfe8d289d6f5e9fb27->leave($__internal_6eebf7a1ac866c96911d486205c62b2ecee70d60f02df7cfe8d289d6f5e9fb27_prof);

        
        $__internal_0dda6cad750baed7d6bf807c57e62993fa95e152a15ec0354959fe8ecc169945->leave($__internal_0dda6cad750baed7d6bf807c57e62993fa95e152a15ec0354959fe8ecc169945_prof);

    }

    // line 32
    public function block_header($context, array $blocks = array())
    {
        $__internal_b6302166fc3e20e1d277b998c060fd6accbf08e1ee5571165b5d240e78562830 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6302166fc3e20e1d277b998c060fd6accbf08e1ee5571165b5d240e78562830->enter($__internal_b6302166fc3e20e1d277b998c060fd6accbf08e1ee5571165b5d240e78562830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_1e950f0f23e718a3ad09f5add52d9029cdb177be7ba4436375c544e8f92acf6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e950f0f23e718a3ad09f5add52d9029cdb177be7ba4436375c544e8f92acf6e->enter($__internal_1e950f0f23e718a3ad09f5add52d9029cdb177be7ba4436375c544e8f92acf6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_1e950f0f23e718a3ad09f5add52d9029cdb177be7ba4436375c544e8f92acf6e->leave($__internal_1e950f0f23e718a3ad09f5add52d9029cdb177be7ba4436375c544e8f92acf6e_prof);

        
        $__internal_b6302166fc3e20e1d277b998c060fd6accbf08e1ee5571165b5d240e78562830->leave($__internal_b6302166fc3e20e1d277b998c060fd6accbf08e1ee5571165b5d240e78562830_prof);

    }

    // line 115
    public function block_slidebar($context, array $blocks = array())
    {
        $__internal_55634c0126b1cfb3458089771e24195a45f2453e697ccd514b8eaa415ef83011 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55634c0126b1cfb3458089771e24195a45f2453e697ccd514b8eaa415ef83011->enter($__internal_55634c0126b1cfb3458089771e24195a45f2453e697ccd514b8eaa415ef83011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slidebar"));

        $__internal_02e1a2a98bcf59141452298cebf9c421690da87672f5a38b4331330f10f9e479 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02e1a2a98bcf59141452298cebf9c421690da87672f5a38b4331330f10f9e479->enter($__internal_02e1a2a98bcf59141452298cebf9c421690da87672f5a38b4331330f10f9e479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "slidebar"));

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
        
        $__internal_02e1a2a98bcf59141452298cebf9c421690da87672f5a38b4331330f10f9e479->leave($__internal_02e1a2a98bcf59141452298cebf9c421690da87672f5a38b4331330f10f9e479_prof);

        
        $__internal_55634c0126b1cfb3458089771e24195a45f2453e697ccd514b8eaa415ef83011->leave($__internal_55634c0126b1cfb3458089771e24195a45f2453e697ccd514b8eaa415ef83011_prof);

    }

    // line 134
    public function block_accueil($context, array $blocks = array())
    {
        $__internal_dffb196042fbe51b026e24989dc881dd6d169b15c867f4040d2b1bc2f0c3f728 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dffb196042fbe51b026e24989dc881dd6d169b15c867f4040d2b1bc2f0c3f728->enter($__internal_dffb196042fbe51b026e24989dc881dd6d169b15c867f4040d2b1bc2f0c3f728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "accueil"));

        $__internal_9f5cbee142594e72774b8e7da1ebcfb28629f8738bb363deb3601b2ad76482e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f5cbee142594e72774b8e7da1ebcfb28629f8738bb363deb3601b2ad76482e3->enter($__internal_9f5cbee142594e72774b8e7da1ebcfb28629f8738bb363deb3601b2ad76482e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "accueil"));

        echo " class=\"active\" ";
        
        $__internal_9f5cbee142594e72774b8e7da1ebcfb28629f8738bb363deb3601b2ad76482e3->leave($__internal_9f5cbee142594e72774b8e7da1ebcfb28629f8738bb363deb3601b2ad76482e3_prof);

        
        $__internal_dffb196042fbe51b026e24989dc881dd6d169b15c867f4040d2b1bc2f0c3f728->leave($__internal_dffb196042fbe51b026e24989dc881dd6d169b15c867f4040d2b1bc2f0c3f728_prof);

    }

    // line 137
    public function block_reservation($context, array $blocks = array())
    {
        $__internal_993881eddabc6dbf53dd89f1747b775441bc4d0b9f9171a246c6bf964e857f74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_993881eddabc6dbf53dd89f1747b775441bc4d0b9f9171a246c6bf964e857f74->enter($__internal_993881eddabc6dbf53dd89f1747b775441bc4d0b9f9171a246c6bf964e857f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reservation"));

        $__internal_676106135a379ccef600279c7168af3407badc5c679373600e4dda968c5bdae3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_676106135a379ccef600279c7168af3407badc5c679373600e4dda968c5bdae3->enter($__internal_676106135a379ccef600279c7168af3407badc5c679373600e4dda968c5bdae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reservation"));

        echo " class=\"active\" ";
        
        $__internal_676106135a379ccef600279c7168af3407badc5c679373600e4dda968c5bdae3->leave($__internal_676106135a379ccef600279c7168af3407badc5c679373600e4dda968c5bdae3_prof);

        
        $__internal_993881eddabc6dbf53dd89f1747b775441bc4d0b9f9171a246c6bf964e857f74->leave($__internal_993881eddabc6dbf53dd89f1747b775441bc4d0b9f9171a246c6bf964e857f74_prof);

    }

    // line 167
    public function block_main($context, array $blocks = array())
    {
        $__internal_25f8f03f1fbdcf5d6c1b8b317294c51c518b6b8b57428cea17aded70f0619c59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25f8f03f1fbdcf5d6c1b8b317294c51c518b6b8b57428cea17aded70f0619c59->enter($__internal_25f8f03f1fbdcf5d6c1b8b317294c51c518b6b8b57428cea17aded70f0619c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_fb11469f481946ffaa5248ee603ce757ae592d59cbe0dd7e1f1ad4d19ce33ab9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb11469f481946ffaa5248ee603ce757ae592d59cbe0dd7e1f1ad4d19ce33ab9->enter($__internal_fb11469f481946ffaa5248ee603ce757ae592d59cbe0dd7e1f1ad4d19ce33ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 168
        echo "        <div class=\"row\">
            <ol class=\"breadcrumb\">
                <li>
                    <a href=\"#\">
                        <em class=\"fa fa-home\"></em>
                    </a>
                </li>
                <li class=\"active\">";
        // line 175
        $this->displayBlock('titre_page_li', $context, $blocks);
        echo " </li>
            </ol>
        </div>
        <!--/.row-->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">";
        // line 181
        $this->displayBlock('titre_page_h1', $context, $blocks);
        echo "</h1>
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
        
        $__internal_fb11469f481946ffaa5248ee603ce757ae592d59cbe0dd7e1f1ad4d19ce33ab9->leave($__internal_fb11469f481946ffaa5248ee603ce757ae592d59cbe0dd7e1f1ad4d19ce33ab9_prof);

        
        $__internal_25f8f03f1fbdcf5d6c1b8b317294c51c518b6b8b57428cea17aded70f0619c59->leave($__internal_25f8f03f1fbdcf5d6c1b8b317294c51c518b6b8b57428cea17aded70f0619c59_prof);

    }

    // line 175
    public function block_titre_page_li($context, array $blocks = array())
    {
        $__internal_e4ae9d91cc4907990b5b454ae3c01706f9e74b003ad09e24aa945f84e6a9d5b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4ae9d91cc4907990b5b454ae3c01706f9e74b003ad09e24aa945f84e6a9d5b3->enter($__internal_e4ae9d91cc4907990b5b454ae3c01706f9e74b003ad09e24aa945f84e6a9d5b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_li"));

        $__internal_3eaa16c3cc0ad23f42de500f64f21d7fd4ef77c8b0b29c01e3c2244e52d2719b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eaa16c3cc0ad23f42de500f64f21d7fd4ef77c8b0b29c01e3c2244e52d2719b->enter($__internal_3eaa16c3cc0ad23f42de500f64f21d7fd4ef77c8b0b29c01e3c2244e52d2719b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_li"));

        echo " tableau de bord";
        
        $__internal_3eaa16c3cc0ad23f42de500f64f21d7fd4ef77c8b0b29c01e3c2244e52d2719b->leave($__internal_3eaa16c3cc0ad23f42de500f64f21d7fd4ef77c8b0b29c01e3c2244e52d2719b_prof);

        
        $__internal_e4ae9d91cc4907990b5b454ae3c01706f9e74b003ad09e24aa945f84e6a9d5b3->leave($__internal_e4ae9d91cc4907990b5b454ae3c01706f9e74b003ad09e24aa945f84e6a9d5b3_prof);

    }

    // line 181
    public function block_titre_page_h1($context, array $blocks = array())
    {
        $__internal_286a3c64a73745d629d59d51f988555c648e4297dc1d7993b9aef73264a18dcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_286a3c64a73745d629d59d51f988555c648e4297dc1d7993b9aef73264a18dcc->enter($__internal_286a3c64a73745d629d59d51f988555c648e4297dc1d7993b9aef73264a18dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_h1"));

        $__internal_d2a093d0ce91e5041802ee1da08c4031815c6bde432c073245535babd97ac528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2a093d0ce91e5041802ee1da08c4031815c6bde432c073245535babd97ac528->enter($__internal_d2a093d0ce91e5041802ee1da08c4031815c6bde432c073245535babd97ac528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre_page_h1"));

        echo "Tableau de bord";
        
        $__internal_d2a093d0ce91e5041802ee1da08c4031815c6bde432c073245535babd97ac528->leave($__internal_d2a093d0ce91e5041802ee1da08c4031815c6bde432c073245535babd97ac528_prof);

        
        $__internal_286a3c64a73745d629d59d51f988555c648e4297dc1d7993b9aef73264a18dcc->leave($__internal_286a3c64a73745d629d59d51f988555c648e4297dc1d7993b9aef73264a18dcc_prof);

    }

    // line 186
    public function block_contenus($context, array $blocks = array())
    {
        $__internal_bf1c84ae694f031656ec2f5e88dff8e21eb59160f9eefa25d805ff3ca68627bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf1c84ae694f031656ec2f5e88dff8e21eb59160f9eefa25d805ff3ca68627bb->enter($__internal_bf1c84ae694f031656ec2f5e88dff8e21eb59160f9eefa25d805ff3ca68627bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        $__internal_f70d4b99eada13ee1ed5975c6a232d4fba04f6908b33b028fac6f3acfca42f0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f70d4b99eada13ee1ed5975c6a232d4fba04f6908b33b028fac6f3acfca42f0b->enter($__internal_f70d4b99eada13ee1ed5975c6a232d4fba04f6908b33b028fac6f3acfca42f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

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
        
        $__internal_f70d4b99eada13ee1ed5975c6a232d4fba04f6908b33b028fac6f3acfca42f0b->leave($__internal_f70d4b99eada13ee1ed5975c6a232d4fba04f6908b33b028fac6f3acfca42f0b_prof);

        
        $__internal_bf1c84ae694f031656ec2f5e88dff8e21eb59160f9eefa25d805ff3ca68627bb->leave($__internal_bf1c84ae694f031656ec2f5e88dff8e21eb59160f9eefa25d805ff3ca68627bb_prof);

    }

    // line 590
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_ac400f3c4b3d55a975b34031b75f6ae14404d7da2a50fe8ccb4f29f487f9d57b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac400f3c4b3d55a975b34031b75f6ae14404d7da2a50fe8ccb4f29f487f9d57b->enter($__internal_ac400f3c4b3d55a975b34031b75f6ae14404d7da2a50fe8ccb4f29f487f9d57b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_eb7bc8a1a334eec7e8b4a71217ebbc4f805892b3f482e1c60cde0be2741089b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb7bc8a1a334eec7e8b4a71217ebbc4f805892b3f482e1c60cde0be2741089b7->enter($__internal_eb7bc8a1a334eec7e8b4a71217ebbc4f805892b3f482e1c60cde0be2741089b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

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
        
        $__internal_eb7bc8a1a334eec7e8b4a71217ebbc4f805892b3f482e1c60cde0be2741089b7->leave($__internal_eb7bc8a1a334eec7e8b4a71217ebbc4f805892b3f482e1c60cde0be2741089b7_prof);

        
        $__internal_ac400f3c4b3d55a975b34031b75f6ae14404d7da2a50fe8ccb4f29f487f9d57b->leave($__internal_ac400f3c4b3d55a975b34031b75f6ae14404d7da2a50fe8ccb4f29f487f9d57b_prof);

    }

    public function getTemplateName()
    {
        return "base1.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  941 => 599,  937 => 598,  933 => 597,  929 => 596,  925 => 595,  921 => 594,  917 => 593,  913 => 592,  908 => 591,  899 => 590,  497 => 187,  488 => 186,  470 => 181,  452 => 175,  440 => 580,  438 => 186,  430 => 181,  421 => 175,  412 => 168,  403 => 167,  385 => 137,  367 => 134,  352 => 161,  323 => 137,  315 => 134,  297 => 119,  292 => 116,  283 => 115,  194 => 33,  185 => 32,  170 => 583,  168 => 167,  165 => 166,  163 => 115,  159 => 113,  156 => 32,  147 => 31,  130 => 20,  128 => 19,  124 => 16,  120 => 15,  116 => 14,  112 => 13,  108 => 12,  103 => 11,  94 => 10,  83 => 8,  74 => 7,  62 => 612,  60 => 590,  57 => 589,  55 => 31,  50 => 28,  47 => 10,  45 => 7,  37 => 1,);
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
    <link href=\"{{asset('admin/css/styles.css')}}\" rel=\"stylesheet\">
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
