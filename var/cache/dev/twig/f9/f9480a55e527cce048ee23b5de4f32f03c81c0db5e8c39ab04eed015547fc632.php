<?php

/* :admin:listebien.html.twig */
class __TwigTemplate_9d0f6050a4ac7249871c0ae5462aefb9178979f520422651cf4e4ec92693421d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":admin:listebien.html.twig", 1);
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
        $__internal_919f5e183139f9f5b94b98bb602fe6da32718967cd95b6000e70f3334b77be4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_919f5e183139f9f5b94b98bb602fe6da32718967cd95b6000e70f3334b77be4c->enter($__internal_919f5e183139f9f5b94b98bb602fe6da32718967cd95b6000e70f3334b77be4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:listebien.html.twig"));

        $__internal_b368489e2a3b0d5636d00ff77e4ff5e901cb5e4bef83cb344e8ea8af1685e828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b368489e2a3b0d5636d00ff77e4ff5e901cb5e4bef83cb344e8ea8af1685e828->enter($__internal_b368489e2a3b0d5636d00ff77e4ff5e901cb5e4bef83cb344e8ea8af1685e828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:listebien.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_919f5e183139f9f5b94b98bb602fe6da32718967cd95b6000e70f3334b77be4c->leave($__internal_919f5e183139f9f5b94b98bb602fe6da32718967cd95b6000e70f3334b77be4c_prof);

        
        $__internal_b368489e2a3b0d5636d00ff77e4ff5e901cb5e4bef83cb344e8ea8af1685e828->leave($__internal_b368489e2a3b0d5636d00ff77e4ff5e901cb5e4bef83cb344e8ea8af1685e828_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_0860e336dd73f6e83abd8ccfc3e54eed0358ddcd24cb3635f54fbf273fbdf8b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0860e336dd73f6e83abd8ccfc3e54eed0358ddcd24cb3635f54fbf273fbdf8b7->enter($__internal_0860e336dd73f6e83abd8ccfc3e54eed0358ddcd24cb3635f54fbf273fbdf8b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_38618a56f6119d8198b53a984afe3cf80a21f556b4a0f0cfcdddeb744fd7b6ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38618a56f6119d8198b53a984afe3cf80a21f556b4a0f0cfcdddeb744fd7b6ce->enter($__internal_38618a56f6119d8198b53a984afe3cf80a21f556b4a0f0cfcdddeb744fd7b6ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Connexion";
        
        $__internal_38618a56f6119d8198b53a984afe3cf80a21f556b4a0f0cfcdddeb744fd7b6ce->leave($__internal_38618a56f6119d8198b53a984afe3cf80a21f556b4a0f0cfcdddeb744fd7b6ce_prof);

        
        $__internal_0860e336dd73f6e83abd8ccfc3e54eed0358ddcd24cb3635f54fbf273fbdf8b7->leave($__internal_0860e336dd73f6e83abd8ccfc3e54eed0358ddcd24cb3635f54fbf273fbdf8b7_prof);

    }

    // line 3
    public function block_contenus($context, array $blocks = array())
    {
        $__internal_fec75af6a37584b6a3e2b21d6aa6f7106b48ef9530bcf3233f6e38e19f68f9a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fec75af6a37584b6a3e2b21d6aa6f7106b48ef9530bcf3233f6e38e19f68f9a1->enter($__internal_fec75af6a37584b6a3e2b21d6aa6f7106b48ef9530bcf3233f6e38e19f68f9a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        $__internal_326612cdcf918a04a2442eb8deb0a5662f6112f2dc698f52eae96e349ffaa74f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_326612cdcf918a04a2442eb8deb0a5662f6112f2dc698f52eae96e349ffaa74f->enter($__internal_326612cdcf918a04a2442eb8deb0a5662f6112f2dc698f52eae96e349ffaa74f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

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
        
        $__internal_326612cdcf918a04a2442eb8deb0a5662f6112f2dc698f52eae96e349ffaa74f->leave($__internal_326612cdcf918a04a2442eb8deb0a5662f6112f2dc698f52eae96e349ffaa74f_prof);

        
        $__internal_fec75af6a37584b6a3e2b21d6aa6f7106b48ef9530bcf3233f6e38e19f68f9a1->leave($__internal_fec75af6a37584b6a3e2b21d6aa6f7106b48ef9530bcf3233f6e38e19f68f9a1_prof);

    }

    public function getTemplateName()
    {
        return ":admin:listebien.html.twig";
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
{% endblock %}", ":admin:listebien.html.twig", "/var/www/html/File_Rouge/original/soultana.sn/app/Resources/views/admin/listebien.html.twig");
    }
}
