<?php

/* :admin:accueil.html.twig */
class __TwigTemplate_ea46664aabeccd3da7341480fff545441ec789321de69c953e14fd49be61acea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base1.html.twig", ":admin:accueil.html.twig", 1);
        $this->blocks = array(
            'reservation' => array($this, 'block_reservation'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dfd95e3c2540afb116de982bc6ef9fd4c96bf61bd98ac0d0703cc490d9451c62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfd95e3c2540afb116de982bc6ef9fd4c96bf61bd98ac0d0703cc490d9451c62->enter($__internal_dfd95e3c2540afb116de982bc6ef9fd4c96bf61bd98ac0d0703cc490d9451c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:accueil.html.twig"));

        $__internal_6361fadade9277d22123a027122ab09f75199592fcaaf6483a1eb3eb32980da7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6361fadade9277d22123a027122ab09f75199592fcaaf6483a1eb3eb32980da7->enter($__internal_6361fadade9277d22123a027122ab09f75199592fcaaf6483a1eb3eb32980da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfd95e3c2540afb116de982bc6ef9fd4c96bf61bd98ac0d0703cc490d9451c62->leave($__internal_dfd95e3c2540afb116de982bc6ef9fd4c96bf61bd98ac0d0703cc490d9451c62_prof);

        
        $__internal_6361fadade9277d22123a027122ab09f75199592fcaaf6483a1eb3eb32980da7->leave($__internal_6361fadade9277d22123a027122ab09f75199592fcaaf6483a1eb3eb32980da7_prof);

    }

    // line 2
    public function block_reservation($context, array $blocks = array())
    {
        $__internal_32f08c0d7d0189cfbb70b1800a346e2e8320b8c54492f300138b8be990927cd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32f08c0d7d0189cfbb70b1800a346e2e8320b8c54492f300138b8be990927cd1->enter($__internal_32f08c0d7d0189cfbb70b1800a346e2e8320b8c54492f300138b8be990927cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reservation"));

        $__internal_9139234eaffefab58fe08d4a358341efcac4deef79ee1926b93604ffb592e38d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9139234eaffefab58fe08d4a358341efcac4deef79ee1926b93604ffb592e38d->enter($__internal_9139234eaffefab58fe08d4a358341efcac4deef79ee1926b93604ffb592e38d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reservation"));

        // line 3
        echo "    ";
        echo "class=\" \"";
        echo "
";
        
        $__internal_9139234eaffefab58fe08d4a358341efcac4deef79ee1926b93604ffb592e38d->leave($__internal_9139234eaffefab58fe08d4a358341efcac4deef79ee1926b93604ffb592e38d_prof);

        
        $__internal_32f08c0d7d0189cfbb70b1800a346e2e8320b8c54492f300138b8be990927cd1->leave($__internal_32f08c0d7d0189cfbb70b1800a346e2e8320b8c54492f300138b8be990927cd1_prof);

    }

    public function getTemplateName()
    {
        return ":admin:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base1.html.twig' %}
{% block reservation %}
    {{ 'class=\" \"' }}
{% endblock %}
", ":admin:accueil.html.twig", "/var/www/html/File_Rouge/original/soultana.sn/app/Resources/views/admin/accueil.html.twig");
    }
}
