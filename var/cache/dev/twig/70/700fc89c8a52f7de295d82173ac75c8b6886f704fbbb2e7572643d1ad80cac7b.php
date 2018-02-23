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
            'body' => array($this, 'block_body'),
            'navbar' => array($this, 'block_navbar'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f80de7fd7ae3f3ab38f4f5f4d25d4920c30d40795103f0f23741081ac3c3359 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f80de7fd7ae3f3ab38f4f5f4d25d4920c30d40795103f0f23741081ac3c3359->enter($__internal_8f80de7fd7ae3f3ab38f4f5f4d25d4920c30d40795103f0f23741081ac3c3359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base1.html.twig"));

        $__internal_6ea15a37cd5a2213e0c81653ea273cd1c4d223425a233d1e27a5c5b55e0ba431 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ea15a37cd5a2213e0c81653ea273cd1c4d223425a233d1e27a5c5b55e0ba431->enter($__internal_6ea15a37cd5a2213e0c81653ea273cd1c4d223425a233d1e27a5c5b55e0ba431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base1.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/css/datepicker3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!--Custom Font-->
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">
    <!--[if lt IE 9]>
\t<script src=\"js/html5shiv.js\"></script>
\t<script src=\"js/respond.min.js\"></script>
\t<![endif]-->
</head>

<body>
    ";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 105
        echo "
    <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/chart.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/chart-data.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/easypiechart.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/easypiechart-data.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("admin/js/custom.js"), "html", null, true);
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

</body>

</html>";
        
        $__internal_8f80de7fd7ae3f3ab38f4f5f4d25d4920c30d40795103f0f23741081ac3c3359->leave($__internal_8f80de7fd7ae3f3ab38f4f5f4d25d4920c30d40795103f0f23741081ac3c3359_prof);

        
        $__internal_6ea15a37cd5a2213e0c81653ea273cd1c4d223425a233d1e27a5c5b55e0ba431->leave($__internal_6ea15a37cd5a2213e0c81653ea273cd1c4d223425a233d1e27a5c5b55e0ba431_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_78d130a353f92e92b3ef678dc2fdcd5f7da7d55e101d28e29a47f3352b5d1434 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78d130a353f92e92b3ef678dc2fdcd5f7da7d55e101d28e29a47f3352b5d1434->enter($__internal_78d130a353f92e92b3ef678dc2fdcd5f7da7d55e101d28e29a47f3352b5d1434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c2587077cf95e7f5261e4cb253bb416b27633e65743d78d9ae7fad26edc94e0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2587077cf95e7f5261e4cb253bb416b27633e65743d78d9ae7fad26edc94e0d->enter($__internal_c2587077cf95e7f5261e4cb253bb416b27633e65743d78d9ae7fad26edc94e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "<title>Soultana - Dashboard</title>";
        
        $__internal_c2587077cf95e7f5261e4cb253bb416b27633e65743d78d9ae7fad26edc94e0d->leave($__internal_c2587077cf95e7f5261e4cb253bb416b27633e65743d78d9ae7fad26edc94e0d_prof);

        
        $__internal_78d130a353f92e92b3ef678dc2fdcd5f7da7d55e101d28e29a47f3352b5d1434->leave($__internal_78d130a353f92e92b3ef678dc2fdcd5f7da7d55e101d28e29a47f3352b5d1434_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ba0bc35f2aa76587941407096a203fde093f4f669c4963874a9942319a56095 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ba0bc35f2aa76587941407096a203fde093f4f669c4963874a9942319a56095->enter($__internal_1ba0bc35f2aa76587941407096a203fde093f4f669c4963874a9942319a56095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dae3d8234df82526227c012d247c623bc9c4d8b8a57f659178ffed9a11e01b9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dae3d8234df82526227c012d247c623bc9c4d8b8a57f659178ffed9a11e01b9d->enter($__internal_dae3d8234df82526227c012d247c623bc9c4d8b8a57f659178ffed9a11e01b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 23
        echo "    ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 104
        echo "    ";
        
        $__internal_dae3d8234df82526227c012d247c623bc9c4d8b8a57f659178ffed9a11e01b9d->leave($__internal_dae3d8234df82526227c012d247c623bc9c4d8b8a57f659178ffed9a11e01b9d_prof);

        
        $__internal_1ba0bc35f2aa76587941407096a203fde093f4f669c4963874a9942319a56095->leave($__internal_1ba0bc35f2aa76587941407096a203fde093f4f669c4963874a9942319a56095_prof);

    }

    // line 23
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_54ac6ec526c649c990e76d604c21bf8030329f18da40d217bd0e236f17fa9f53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54ac6ec526c649c990e76d604c21bf8030329f18da40d217bd0e236f17fa9f53->enter($__internal_54ac6ec526c649c990e76d604c21bf8030329f18da40d217bd0e236f17fa9f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_705831f4670f1a2fe4be30a2f975ce9a2ba64c77a26d735c77ffa0dd6afcf381 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_705831f4670f1a2fe4be30a2f975ce9a2ba64c77a26d735c77ffa0dd6afcf381->enter($__internal_705831f4670f1a2fe4be30a2f975ce9a2ba64c77a26d735c77ffa0dd6afcf381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 24
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
        
        $__internal_705831f4670f1a2fe4be30a2f975ce9a2ba64c77a26d735c77ffa0dd6afcf381->leave($__internal_705831f4670f1a2fe4be30a2f975ce9a2ba64c77a26d735c77ffa0dd6afcf381_prof);

        
        $__internal_54ac6ec526c649c990e76d604c21bf8030329f18da40d217bd0e236f17fa9f53->leave($__internal_54ac6ec526c649c990e76d604c21bf8030329f18da40d217bd0e236f17fa9f53_prof);

    }

    public function getTemplateName()
    {
        return "base1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 24,  164 => 23,  154 => 104,  151 => 23,  142 => 22,  124 => 7,  98 => 113,  94 => 112,  90 => 111,  86 => 110,  82 => 109,  78 => 108,  74 => 107,  70 => 106,  67 => 105,  65 => 22,  51 => 11,  47 => 10,  43 => 9,  38 => 8,  36 => 7,  28 => 1,);
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
    {% block title %}<title>Soultana - Dashboard</title>{% endblock %}
    <link href=\"{{asset('admin/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('admin/css/font-awesome.min.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('admin/css/datepicker3.css')}}\" rel=\"stylesheet\">
    <link href=\"{{asset('admin/css/styles.css')}}\" rel=\"stylesheet\">

    <!--Custom Font-->
    <link href=\"https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">
    <!--[if lt IE 9]>
\t<script src=\"js/html5shiv.js\"></script>
\t<script src=\"js/respond.min.js\"></script>
\t<![endif]-->
</head>

<body>
    {% block body %}
    {% block navbar %}
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
    {% endblock %}

    <script src=\"{{asset('admin/js/jquery-1.11.1.min.js')}}\"></script>
    <script src=\"{{asset('admin/js/bootstrap.min.js')}}\"></script>
    <script src=\"{{asset('admin/js/chart.min.js')}}\"></script>
    <script src=\"{{asset('admin/js/chart-data.js')}}\"></script>
    <script src=\"{{asset('admin/js/easypiechart.js')}}\"></script>
    <script src=\"{{asset('admin/js/easypiechart-data.js')}}\"></script>
    <script src=\"{{asset('admin/js/bootstrap-datepicker.js')}}\"></script>
    <script src=\"{{asset('admin/js/custom.js')}}\"></script>
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

</body>

</html>", "base1.html.twig", "/var/www/html/File_Rouge/original/soultana.sn/app/Resources/views/base1.html.twig");
    }
}
