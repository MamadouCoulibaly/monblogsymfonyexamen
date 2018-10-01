<?php

/* MainBundle:Category:new.html.twig */
class __TwigTemplate_81002c5d7cf466a2439d3d712d9fa4200f6c406893d6ffdb50a16618f3c35293 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle::layout.html.twig", "MainBundle:Category:new.html.twig", 1);
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
        $__internal_6a8f8721af1fe6e28963b07345b5d4d4022e5b6a293b6e4d4501e266a2b02923 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a8f8721af1fe6e28963b07345b5d4d4022e5b6a293b6e4d4501e266a2b02923->enter($__internal_6a8f8721af1fe6e28963b07345b5d4d4022e5b6a293b6e4d4501e266a2b02923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Category:new.html.twig"));

        $__internal_98b44ff13a83b1aa352780ddc1099a452704e21a8aaa3dcf05653eed902d44db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98b44ff13a83b1aa352780ddc1099a452704e21a8aaa3dcf05653eed902d44db->enter($__internal_98b44ff13a83b1aa352780ddc1099a452704e21a8aaa3dcf05653eed902d44db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Category:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a8f8721af1fe6e28963b07345b5d4d4022e5b6a293b6e4d4501e266a2b02923->leave($__internal_6a8f8721af1fe6e28963b07345b5d4d4022e5b6a293b6e4d4501e266a2b02923_prof);

        
        $__internal_98b44ff13a83b1aa352780ddc1099a452704e21a8aaa3dcf05653eed902d44db->leave($__internal_98b44ff13a83b1aa352780ddc1099a452704e21a8aaa3dcf05653eed902d44db_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b589b6a6b5b652ce4e0b9fb1313bcb222e02a7e28a75c8aaee5323cfa2f87c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b589b6a6b5b652ce4e0b9fb1313bcb222e02a7e28a75c8aaee5323cfa2f87c3->enter($__internal_9b589b6a6b5b652ce4e0b9fb1313bcb222e02a7e28a75c8aaee5323cfa2f87c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_468b2e6f5825c13c2efbbdf1c02028a768f2e644ff017028f93f5952546c0fe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_468b2e6f5825c13c2efbbdf1c02028a768f2e644ff017028f93f5952546c0fe3->enter($__internal_468b2e6f5825c13c2efbbdf1c02028a768f2e644ff017028f93f5952546c0fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>New Category</h1>

    <div class=\"jumbotron\">
        ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'form_start');
        echo "
            ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), "name", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Type the name of the category")));
        echo "
            ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'widget');
        echo "
            <hr>
            <a class=\"btn btn-default\" href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("secure_category_index");
        echo "\">Back to the list</a>
            <input class=\"btn btn-success\" type=\"submit\" value=\"Create\" />
        ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), 'form_end');
        echo "
    </div>
";
        
        $__internal_468b2e6f5825c13c2efbbdf1c02028a768f2e644ff017028f93f5952546c0fe3->leave($__internal_468b2e6f5825c13c2efbbdf1c02028a768f2e644ff017028f93f5952546c0fe3_prof);

        
        $__internal_9b589b6a6b5b652ce4e0b9fb1313bcb222e02a7e28a75c8aaee5323cfa2f87c3->leave($__internal_9b589b6a6b5b652ce4e0b9fb1313bcb222e02a7e28a75c8aaee5323cfa2f87c3_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Category:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 13,  67 => 11,  62 => 9,  58 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'MainBundle::layout.html.twig' %}

{% block body %}
    <h1>New Category</h1>

    <div class=\"jumbotron\">
        {{ form_start(form) }}
            {{ form_widget(form.name, {'attr': {'class': 'form-control', 'placeholder':'Type the name of the category'}}) }}
            {{ form_widget(form) }}
            <hr>
            <a class=\"btn btn-default\" href=\"{{ path('secure_category_index') }}\">Back to the list</a>
            <input class=\"btn btn-success\" type=\"submit\" value=\"Create\" />
        {{ form_end(form) }}
    </div>
{% endblock %}
", "MainBundle:Category:new.html.twig", "/home/geek/Bureau/coulibalyblogtdsi/src/MainBundle/Resources/views/Category/new.html.twig");
    }
}
