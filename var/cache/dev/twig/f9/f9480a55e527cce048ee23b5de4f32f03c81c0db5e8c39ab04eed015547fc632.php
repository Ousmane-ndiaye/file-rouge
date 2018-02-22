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
        $__internal_586b6050a0c327326fc17f75488262b9a72d35b0fe44cfdfeed627e4077f44f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_586b6050a0c327326fc17f75488262b9a72d35b0fe44cfdfeed627e4077f44f9->enter($__internal_586b6050a0c327326fc17f75488262b9a72d35b0fe44cfdfeed627e4077f44f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:listebien.html.twig"));

        $__internal_0ec5f78f3e3ce64dea3f9cc072d2d3c862155170d0703c4d2c1437dfe5e8ba36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ec5f78f3e3ce64dea3f9cc072d2d3c862155170d0703c4d2c1437dfe5e8ba36->enter($__internal_0ec5f78f3e3ce64dea3f9cc072d2d3c862155170d0703c4d2c1437dfe5e8ba36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:listebien.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_586b6050a0c327326fc17f75488262b9a72d35b0fe44cfdfeed627e4077f44f9->leave($__internal_586b6050a0c327326fc17f75488262b9a72d35b0fe44cfdfeed627e4077f44f9_prof);

        
        $__internal_0ec5f78f3e3ce64dea3f9cc072d2d3c862155170d0703c4d2c1437dfe5e8ba36->leave($__internal_0ec5f78f3e3ce64dea3f9cc072d2d3c862155170d0703c4d2c1437dfe5e8ba36_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_c100b20c884fb067c35cddf8a1c5ec2e50a2f23f4d9f1c565ccd32ee30355e66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c100b20c884fb067c35cddf8a1c5ec2e50a2f23f4d9f1c565ccd32ee30355e66->enter($__internal_c100b20c884fb067c35cddf8a1c5ec2e50a2f23f4d9f1c565ccd32ee30355e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b20fa92a1fe890b88ec721f9686a3a8dd1d143a17a5aaf66685004290c04881a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b20fa92a1fe890b88ec721f9686a3a8dd1d143a17a5aaf66685004290c04881a->enter($__internal_b20fa92a1fe890b88ec721f9686a3a8dd1d143a17a5aaf66685004290c04881a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Connexion";
        
        $__internal_b20fa92a1fe890b88ec721f9686a3a8dd1d143a17a5aaf66685004290c04881a->leave($__internal_b20fa92a1fe890b88ec721f9686a3a8dd1d143a17a5aaf66685004290c04881a_prof);

        
        $__internal_c100b20c884fb067c35cddf8a1c5ec2e50a2f23f4d9f1c565ccd32ee30355e66->leave($__internal_c100b20c884fb067c35cddf8a1c5ec2e50a2f23f4d9f1c565ccd32ee30355e66_prof);

    }

    // line 3
    public function block_contenus($context, array $blocks = array())
    {
        $__internal_0491110f755b7c2c67a8ead0f5c0851fb47f80730913e20a5b3efa4ece183b27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0491110f755b7c2c67a8ead0f5c0851fb47f80730913e20a5b3efa4ece183b27->enter($__internal_0491110f755b7c2c67a8ead0f5c0851fb47f80730913e20a5b3efa4ece183b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

        $__internal_1ff563634c67487609bd8838e0cf7068968174b13dc31d62c8d1039b4a4f9e89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ff563634c67487609bd8838e0cf7068968174b13dc31d62c8d1039b4a4f9e89->enter($__internal_1ff563634c67487609bd8838e0cf7068968174b13dc31d62c8d1039b4a4f9e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenus"));

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
        
        $__internal_1ff563634c67487609bd8838e0cf7068968174b13dc31d62c8d1039b4a4f9e89->leave($__internal_1ff563634c67487609bd8838e0cf7068968174b13dc31d62c8d1039b4a4f9e89_prof);

        
        $__internal_0491110f755b7c2c67a8ead0f5c0851fb47f80730913e20a5b3efa4ece183b27->leave($__internal_0491110f755b7c2c67a8ead0f5c0851fb47f80730913e20a5b3efa4ece183b27_prof);

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
