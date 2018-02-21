<?php

/* admin/listebien.html.twig */
class __TwigTemplate_9d0f6050a4ac7249871c0ae5462aefb9178979f520422651cf4e4ec92693421d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/listebien.html.twig", 1);
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
        $__internal_f885bbc86d124333d319e0a4ad0c82f4e3ee2ff351ab7808b3fe20ec35fecccb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f885bbc86d124333d319e0a4ad0c82f4e3ee2ff351ab7808b3fe20ec35fecccb->enter($__internal_f885bbc86d124333d319e0a4ad0c82f4e3ee2ff351ab7808b3fe20ec35fecccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/listebien.html.twig"));

        $__internal_c5c6412980cd5bdd001b8f3ff9e736cc2bacd5a3f3c4d2e3e4017798d6b23911 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5c6412980cd5bdd001b8f3ff9e736cc2bacd5a3f3c4d2e3e4017798d6b23911->enter($__internal_c5c6412980cd5bdd001b8f3ff9e736cc2bacd5a3f3c4d2e3e4017798d6b23911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/listebien.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f885bbc86d124333d319e0a4ad0c82f4e3ee2ff351ab7808b3fe20ec35fecccb->leave($__internal_f885bbc86d124333d319e0a4ad0c82f4e3ee2ff351ab7808b3fe20ec35fecccb_prof);

        
        $__internal_c5c6412980cd5bdd001b8f3ff9e736cc2bacd5a3f3c4d2e3e4017798d6b23911->leave($__internal_c5c6412980cd5bdd001b8f3ff9e736cc2bacd5a3f3c4d2e3e4017798d6b23911_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_5e160abcaa0938f192520be94e6562b72450700c71e0fb72bec7b159024d368e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e160abcaa0938f192520be94e6562b72450700c71e0fb72bec7b159024d368e->enter($__internal_5e160abcaa0938f192520be94e6562b72450700c71e0fb72bec7b159024d368e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_68363a1ebbebc8146f7e3dc81f85ea653086f7fe7c0c3b7728c7d21622edeb94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68363a1ebbebc8146f7e3dc81f85ea653086f7fe7c0c3b7728c7d21622edeb94->enter($__internal_68363a1ebbebc8146f7e3dc81f85ea653086f7fe7c0c3b7728c7d21622edeb94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Connexion";
        
        $__internal_68363a1ebbebc8146f7e3dc81f85ea653086f7fe7c0c3b7728c7d21622edeb94->leave($__internal_68363a1ebbebc8146f7e3dc81f85ea653086f7fe7c0c3b7728c7d21622edeb94_prof);

        
        $__internal_5e160abcaa0938f192520be94e6562b72450700c71e0fb72bec7b159024d368e->leave($__internal_5e160abcaa0938f192520be94e6562b72450700c71e0fb72bec7b159024d368e_prof);

    }

    // line 3
    public function block_contenus($context, array $blocks = array())
    {
        $__internal_3b3494c8d62d4476557f482834bc908189a699042288cbbd1a6f28d3f1a4f417 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b3494c8d62d4476557f482834bc908189a699042288cbbd1a6f28d3f1a4f417->enter($__internal_3b3494c8d62d4476557f482834bc908189a699042288cbbd1a6f28d3f1a4f417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        $__internal_82c6ed0675a23f4bb4e69b46522233b79979dc60c4ccdd1217124de29680929c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82c6ed0675a23f4bb4e69b46522233b79979dc60c4ccdd1217124de29680929c->enter($__internal_82c6ed0675a23f4bb4e69b46522233b79979dc60c4ccdd1217124de29680929c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        // line 4
        echo "    <table class=\"table\" id=\"tablebien\" border=\"2\">
        <thead>
            <tr>
                <th>TYPE DE BIEN</th>
                <th>ADRESSE</th>
                <th>MONTANT LOCATION</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["biens"] ?? $this->getContext($context, "biens")));
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 14
            echo "            <tr>
                <td scope=\"row\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "nomTypeBien", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "adresse", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["bien"], "prixLoc", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        </tbody>
    </table>
";
        
        $__internal_82c6ed0675a23f4bb4e69b46522233b79979dc60c4ccdd1217124de29680929c->leave($__internal_82c6ed0675a23f4bb4e69b46522233b79979dc60c4ccdd1217124de29680929c_prof);

        
        $__internal_3b3494c8d62d4476557f482834bc908189a699042288cbbd1a6f28d3f1a4f417->leave($__internal_3b3494c8d62d4476557f482834bc908189a699042288cbbd1a6f28d3f1a4f417_prof);

    }

    public function getTemplateName()
    {
        return "admin/listebien.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 20,  94 => 17,  90 => 16,  86 => 15,  83 => 14,  79 => 13,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
    <table class=\"table\" id=\"tablebien\" border=\"2\">
        <thead>
            <tr>
                <th>TYPE DE BIEN</th>
                <th>ADRESSE</th>
                <th>MONTANT LOCATION</th>
            </tr>
        </thead>
        <tbody>
        {% for bien in biens %}
            <tr>
                <td scope=\"row\">{{ bien.nomTypeBien }}</td>
                <td>{{ bien.adresse }}</td>
                <td>{{ bien.prixLoc }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}", "admin/listebien.html.twig", "/var/www/html/File_Rouge/original/soultana.sn/app/Resources/views/admin/listebien.html.twig");
    }
}
