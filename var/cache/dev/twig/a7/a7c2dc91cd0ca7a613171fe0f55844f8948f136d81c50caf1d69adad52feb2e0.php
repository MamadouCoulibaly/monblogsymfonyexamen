<?php

/* MainBundle::layout.html.twig */
class __TwigTemplate_49fe8380f9f5a1a2f7b0cf615691cd645b1d79df071165d8cb5fb43ad564c539 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MainBundle::layout.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_070e284bb1e847ca4b8416a0dde3ee7dd846377d65ee6de66be6217ae309eb60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_070e284bb1e847ca4b8416a0dde3ee7dd846377d65ee6de66be6217ae309eb60->enter($__internal_070e284bb1e847ca4b8416a0dde3ee7dd846377d65ee6de66be6217ae309eb60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle::layout.html.twig"));

        $__internal_862da81743f77394157951410d11c7492c86fb82cf7595fdc2c5b9ba826d39d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_862da81743f77394157951410d11c7492c86fb82cf7595fdc2c5b9ba826d39d6->enter($__internal_862da81743f77394157951410d11c7492c86fb82cf7595fdc2c5b9ba826d39d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_070e284bb1e847ca4b8416a0dde3ee7dd846377d65ee6de66be6217ae309eb60->leave($__internal_070e284bb1e847ca4b8416a0dde3ee7dd846377d65ee6de66be6217ae309eb60_prof);

        
        $__internal_862da81743f77394157951410d11c7492c86fb82cf7595fdc2c5b9ba826d39d6->leave($__internal_862da81743f77394157951410d11c7492c86fb82cf7595fdc2c5b9ba826d39d6_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_a6664e893925b9ec23c88faea5d38e5bf9b627b17debf1cf9d7bdc5034035317 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6664e893925b9ec23c88faea5d38e5bf9b627b17debf1cf9d7bdc5034035317->enter($__internal_a6664e893925b9ec23c88faea5d38e5bf9b627b17debf1cf9d7bdc5034035317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_407eecadc322c2aa0e9d57b9563899a3399f1f8d4abf13728e3a5991b0d0691e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_407eecadc322c2aa0e9d57b9563899a3399f1f8d4abf13728e3a5991b0d0691e->enter($__internal_407eecadc322c2aa0e9d57b9563899a3399f1f8d4abf13728e3a5991b0d0691e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("main_secure_index");
        echo "\">monBlog </a>
            </div>
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li>
                        <a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("secure_category_index");
        echo "\">Categories</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("secure_post_index");
        echo "\">Posts</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("secure_comment_index");
        echo "\">Commentaires</a>
                    </li>
                </ul>

                <ul class=\"nav navbar-nav navbar-right\">
                    <li><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_logout");
        echo "\">Logout <span class=\"glyphicon glyphicon-log-out\" aria-hidden=\"true\"></span></a></li>
                </ul>
            </div>
        </div>
    </nav>
";
        
        $__internal_407eecadc322c2aa0e9d57b9563899a3399f1f8d4abf13728e3a5991b0d0691e->leave($__internal_407eecadc322c2aa0e9d57b9563899a3399f1f8d4abf13728e3a5991b0d0691e_prof);

        
        $__internal_a6664e893925b9ec23c88faea5d38e5bf9b627b17debf1cf9d7bdc5034035317->leave($__internal_a6664e893925b9ec23c88faea5d38e5bf9b627b17debf1cf9d7bdc5034035317_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 29,  80 => 24,  74 => 21,  68 => 18,  60 => 13,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block header %}
    <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"{{path('main_secure_index')}}\">monBlog </a>
            </div>
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li>
                        <a href=\"{{path('secure_category_index')}}\">Categories</a>
                    </li>
                    <li>
                        <a href=\"{{path('secure_post_index')}}\">Posts</a>
                    </li>
                    <li>
                        <a href=\"{{path('secure_comment_index')}}\">Commentaires</a>
                    </li>
                </ul>

                <ul class=\"nav navbar-nav navbar-right\">
                    <li><a href=\"{{path('_logout')}}\">Logout <span class=\"glyphicon glyphicon-log-out\" aria-hidden=\"true\"></span></a></li>
                </ul>
            </div>
        </div>
    </nav>
{% endblock %}
", "MainBundle::layout.html.twig", "/home/geek/Bureau/coulibalyblogtdsi/src/MainBundle/Resources/views/layout.html.twig");
    }
}
