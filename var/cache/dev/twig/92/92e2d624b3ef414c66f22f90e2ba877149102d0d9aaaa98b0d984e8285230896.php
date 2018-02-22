<?php

/* :reservation:connexion.html.twig */
class __TwigTemplate_23f5c3ec863c508fe51413a224ef8272125dc24ce425ba497d8a7626487b872a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":reservation:connexion.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'contenus' => array($this, 'block_contenus'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d3bd2c4a35ec4c67683acefcfbca589ff106c8465d81db9283ff1cd8c12ca70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d3bd2c4a35ec4c67683acefcfbca589ff106c8465d81db9283ff1cd8c12ca70->enter($__internal_8d3bd2c4a35ec4c67683acefcfbca589ff106c8465d81db9283ff1cd8c12ca70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservation:connexion.html.twig"));

        $__internal_9ee135d88dc44064ea4f094c720901ffaf372135cbe881bf7e78eba22e1266f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ee135d88dc44064ea4f094c720901ffaf372135cbe881bf7e78eba22e1266f7->enter($__internal_9ee135d88dc44064ea4f094c720901ffaf372135cbe881bf7e78eba22e1266f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":reservation:connexion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d3bd2c4a35ec4c67683acefcfbca589ff106c8465d81db9283ff1cd8c12ca70->leave($__internal_8d3bd2c4a35ec4c67683acefcfbca589ff106c8465d81db9283ff1cd8c12ca70_prof);

        
        $__internal_9ee135d88dc44064ea4f094c720901ffaf372135cbe881bf7e78eba22e1266f7->leave($__internal_9ee135d88dc44064ea4f094c720901ffaf372135cbe881bf7e78eba22e1266f7_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a86c3394f0b5abeff19f94d27bdd2b2e37cff3c603a0406e9c4e039fa02ae35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a86c3394f0b5abeff19f94d27bdd2b2e37cff3c603a0406e9c4e039fa02ae35->enter($__internal_5a86c3394f0b5abeff19f94d27bdd2b2e37cff3c603a0406e9c4e039fa02ae35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c06ffe6522841069c9b57e837380542d0aec61f0cc32bd824a1d8754444ea8eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c06ffe6522841069c9b57e837380542d0aec61f0cc32bd824a1d8754444ea8eb->enter($__internal_c06ffe6522841069c9b57e837380542d0aec61f0cc32bd824a1d8754444ea8eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Connexion";
        
        $__internal_c06ffe6522841069c9b57e837380542d0aec61f0cc32bd824a1d8754444ea8eb->leave($__internal_c06ffe6522841069c9b57e837380542d0aec61f0cc32bd824a1d8754444ea8eb_prof);

        
        $__internal_5a86c3394f0b5abeff19f94d27bdd2b2e37cff3c603a0406e9c4e039fa02ae35->leave($__internal_5a86c3394f0b5abeff19f94d27bdd2b2e37cff3c603a0406e9c4e039fa02ae35_prof);

    }

    // line 3
    public function block_contenus($context, array $blocks = array())
    {
        $__internal_4785d94a5293768fa07b397c0f9fa37412c391904e201b858495fb36ec582496 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4785d94a5293768fa07b397c0f9fa37412c391904e201b858495fb36ec582496->enter($__internal_4785d94a5293768fa07b397c0f9fa37412c391904e201b858495fb36ec582496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        $__internal_48a9e06d434144a4fbed1f7bdd40fc68b55f889d5fe107a522f9f4b9036095ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48a9e06d434144a4fbed1f7bdd40fc68b55f889d5fe107a522f9f4b9036095ed->enter($__internal_48a9e06d434144a4fbed1f7bdd40fc68b55f889d5fe107a522f9f4b9036095ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        // line 4
        echo "<div class=\"page-head\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"page-head-content\">
                <h1 class=\"page-title\">Home New account / Sign in </h1>
            </div>
        </div>
    </div>
</div>
<!-- End page header -->


<!-- register-area -->
<div class=\"register-area\" style=\"background-color: rgb(249, 249, 249);\">
    <div class=\"container\">

        <div class=\"col-md-6\">
            <div class=\"box-for overflow\">
                <div class=\"col-md-12 col-xs-12 register-blocks\">
                    <h2>New account : </h2>
                    <form action=\"\" method=\"post\">
                        <input type=\"hidden\" name=\"typeform\" id=\"typeform\" value=\"inscription\"/>
                        <input type=\"hidden\" name=\"idBien\" id=\"idBien\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["bien"] ?? $this->getContext($context, "bien")), 0, array(), "array"), "id", array()), "html", null, true);
        echo "\"/>
                        <div class=\"form-group\">
                            <label for=\"nomClient\">Prénom et Nom</label>
                            <input type=\"text\" class=\"form-control\" name=\"nomClient\" id=\"nomClient\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"numCni\">Numéro pièce</label>
                            <input type=\"number\" class=\"form-control\" name=\"numCni\" id=\"numCni\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"adresse\">Adresse</label>
                            <input type=\"text\" class=\"form-control\" name=\"adresse\" id=\"adresse\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"email\">Email</label>
                            <input type=\"text\" class=\"form-control\" name=\"email\" id=\"email\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"telephone\">téléphone</label>
                            <input type=\"number\" class=\"form-control\" name=\"telephone\" id=\"telephone\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"login\">nom d'utilisateur</label>
                            <input type=\"text\" class=\"form-control\" name=\"login\" id=\"login\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"password\">Password</label>
                            <input type=\"password\" class=\"form-control\" name=\"password\" id=\"password\">
                        </div>
                        <div class=\"text-center\">
                            <button type=\"submit\" class=\"btn btn-default\">S'inscrire</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class=\"col-md-6\">
            <div class=\"box-for overflow\">
                <div class=\"col-md-12 col-xs-12 login-blocks\">
                    <h2>Login : </h2>
                    <form action=\"\" method=\"post\">
                        <input type=\"hidden\" name=\"typeform\" id=\"typeform\" value=\"connexion\"/>
                        <input type=\"hidden\" name=\"idBien\" id=\"idBien\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["bien"] ?? $this->getContext($context, "bien")), 0, array(), "array"), "id", array()), "html", null, true);
        echo "\"/>
                        <div class=\"form-group\">
                            <label for=\"login\">Nom d'utilisateur</label>
                            <input type=\"text\" class=\"form-control\" name=\"login\" id=\"login\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"password\">Password</label>
                            <input type=\"password\" class=\"form-control\" name=\"password\" id=\"password\">
                        </div>
                        <div class=\"text-center\">
                            <button type=\"submit\" class=\"btn btn-default\">Se connecter</button>
                        </div>
                    </form>
                    <br>

                    <h2>Social login : </h2>

                    <p>
                        <a class=\"login-social\" href=\"#\"><i class=\"fa fa-facebook\"></i>&nbsp;Facebook</a>
                        <a class=\"login-social\" href=\"#\"><i class=\"fa fa-google-plus\"></i>&nbsp;Gmail</a>
                        <a class=\"login-social\" href=\"#\"><i class=\"fa fa-twitter\"></i>&nbsp;Twitter</a>
                    </p>
                </div>

            </div>
        </div>

    </div>
</div>
";
        
        $__internal_48a9e06d434144a4fbed1f7bdd40fc68b55f889d5fe107a522f9f4b9036095ed->leave($__internal_48a9e06d434144a4fbed1f7bdd40fc68b55f889d5fe107a522f9f4b9036095ed_prof);

        
        $__internal_4785d94a5293768fa07b397c0f9fa37412c391904e201b858495fb36ec582496->leave($__internal_4785d94a5293768fa07b397c0f9fa37412c391904e201b858495fb36ec582496_prof);

    }

    public function getTemplateName()
    {
        return ":reservation:connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 69,  92 => 26,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}Connexion{% endblock %}
{% block contenus %}
<div class=\"page-head\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"page-head-content\">
                <h1 class=\"page-title\">Home New account / Sign in </h1>
            </div>
        </div>
    </div>
</div>
<!-- End page header -->


<!-- register-area -->
<div class=\"register-area\" style=\"background-color: rgb(249, 249, 249);\">
    <div class=\"container\">

        <div class=\"col-md-6\">
            <div class=\"box-for overflow\">
                <div class=\"col-md-12 col-xs-12 register-blocks\">
                    <h2>New account : </h2>
                    <form action=\"\" method=\"post\">
                        <input type=\"hidden\" name=\"typeform\" id=\"typeform\" value=\"inscription\"/>
                        <input type=\"hidden\" name=\"idBien\" id=\"idBien\" value=\"{{ bien[0].id }}\"/>
                        <div class=\"form-group\">
                            <label for=\"nomClient\">Prénom et Nom</label>
                            <input type=\"text\" class=\"form-control\" name=\"nomClient\" id=\"nomClient\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"numCni\">Numéro pièce</label>
                            <input type=\"number\" class=\"form-control\" name=\"numCni\" id=\"numCni\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"adresse\">Adresse</label>
                            <input type=\"text\" class=\"form-control\" name=\"adresse\" id=\"adresse\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"email\">Email</label>
                            <input type=\"text\" class=\"form-control\" name=\"email\" id=\"email\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"telephone\">téléphone</label>
                            <input type=\"number\" class=\"form-control\" name=\"telephone\" id=\"telephone\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"login\">nom d'utilisateur</label>
                            <input type=\"text\" class=\"form-control\" name=\"login\" id=\"login\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"password\">Password</label>
                            <input type=\"password\" class=\"form-control\" name=\"password\" id=\"password\">
                        </div>
                        <div class=\"text-center\">
                            <button type=\"submit\" class=\"btn btn-default\">S'inscrire</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class=\"col-md-6\">
            <div class=\"box-for overflow\">
                <div class=\"col-md-12 col-xs-12 login-blocks\">
                    <h2>Login : </h2>
                    <form action=\"\" method=\"post\">
                        <input type=\"hidden\" name=\"typeform\" id=\"typeform\" value=\"connexion\"/>
                        <input type=\"hidden\" name=\"idBien\" id=\"idBien\" value=\"{{ bien[0].id }}\"/>
                        <div class=\"form-group\">
                            <label for=\"login\">Nom d'utilisateur</label>
                            <input type=\"text\" class=\"form-control\" name=\"login\" id=\"login\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"password\">Password</label>
                            <input type=\"password\" class=\"form-control\" name=\"password\" id=\"password\">
                        </div>
                        <div class=\"text-center\">
                            <button type=\"submit\" class=\"btn btn-default\">Se connecter</button>
                        </div>
                    </form>
                    <br>

                    <h2>Social login : </h2>

                    <p>
                        <a class=\"login-social\" href=\"#\"><i class=\"fa fa-facebook\"></i>&nbsp;Facebook</a>
                        <a class=\"login-social\" href=\"#\"><i class=\"fa fa-google-plus\"></i>&nbsp;Gmail</a>
                        <a class=\"login-social\" href=\"#\"><i class=\"fa fa-twitter\"></i>&nbsp;Twitter</a>
                    </p>
                </div>

            </div>
        </div>

    </div>
</div>
{% endblock %}", ":reservation:connexion.html.twig", "/var/www/html/File_Rouge/original/soultana.sn/app/Resources/views/reservation/connexion.html.twig");
    }
}
