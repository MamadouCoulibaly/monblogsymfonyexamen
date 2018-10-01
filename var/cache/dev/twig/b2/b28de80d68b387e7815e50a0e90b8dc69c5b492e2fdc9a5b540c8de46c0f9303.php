<?php

/* MainBundle:Secure:index.html.twig */
class __TwigTemplate_089346e9a8d005db554a4d2f30455420d8713bc839d3e219f5ffb0e7b66e060e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle::layout.html.twig", "MainBundle:Secure:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MainBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_654fa61ab0683ba5d38e516b2d7a06e71d8c050a7116f41c0d38f7ab09d2158e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_654fa61ab0683ba5d38e516b2d7a06e71d8c050a7116f41c0d38f7ab09d2158e->enter($__internal_654fa61ab0683ba5d38e516b2d7a06e71d8c050a7116f41c0d38f7ab09d2158e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Secure:index.html.twig"));

        $__internal_8de01aaf9f072218edea9106b0b73c1c31cb7d476b57c4a9a696b2b05785bbf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8de01aaf9f072218edea9106b0b73c1c31cb7d476b57c4a9a696b2b05785bbf8->enter($__internal_8de01aaf9f072218edea9106b0b73c1c31cb7d476b57c4a9a696b2b05785bbf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Secure:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_654fa61ab0683ba5d38e516b2d7a06e71d8c050a7116f41c0d38f7ab09d2158e->leave($__internal_654fa61ab0683ba5d38e516b2d7a06e71d8c050a7116f41c0d38f7ab09d2158e_prof);

        
        $__internal_8de01aaf9f072218edea9106b0b73c1c31cb7d476b57c4a9a696b2b05785bbf8->leave($__internal_8de01aaf9f072218edea9106b0b73c1c31cb7d476b57c4a9a696b2b05785bbf8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_366f0afe1b78453e6ab8915a153378d129a5e7d24ac0110dc0aabdaf77d7bdc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_366f0afe1b78453e6ab8915a153378d129a5e7d24ac0110dc0aabdaf77d7bdc3->enter($__internal_366f0afe1b78453e6ab8915a153378d129a5e7d24ac0110dc0aabdaf77d7bdc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e7b28666b25996fa033401d76bd313747b8a9359dc65e9ef0f2dc5d1deb7fd72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7b28666b25996fa033401d76bd313747b8a9359dc65e9ef0f2dc5d1deb7fd72->enter($__internal_e7b28666b25996fa033401d76bd313747b8a9359dc65e9ef0f2dc5d1deb7fd72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<h1>welcome to coulibaly blog.</h1>
";
        
        $__internal_e7b28666b25996fa033401d76bd313747b8a9359dc65e9ef0f2dc5d1deb7fd72->leave($__internal_e7b28666b25996fa033401d76bd313747b8a9359dc65e9ef0f2dc5d1deb7fd72_prof);

        
        $__internal_366f0afe1b78453e6ab8915a153378d129a5e7d24ac0110dc0aabdaf77d7bdc3->leave($__internal_366f0afe1b78453e6ab8915a153378d129a5e7d24ac0110dc0aabdaf77d7bdc3_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Secure:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'MainBundle::layout.html.twig' %}

{% block body %}
\t<h1>welcome to coulibaly blog.</h1>
{% endblock %}", "MainBundle:Secure:index.html.twig", "/home/geek/Bureau/coulibalyblogtdsi/src/MainBundle/Resources/views/Secure/index.html.twig");
    }
}
