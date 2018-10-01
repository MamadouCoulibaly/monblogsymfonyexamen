<?php

/* MainBundle:Category:show.html.twig */
class __TwigTemplate_a9ac85811928b6f165c78da78e58be7781de2bc1350537873a7e02c1de1e83e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle::layout.html.twig", "MainBundle:Category:show.html.twig", 1);
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
        $__internal_e7bd8c747940e50cce557708d6b299fcce4bd8d4af2d09f00f577dbdb1a055db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7bd8c747940e50cce557708d6b299fcce4bd8d4af2d09f00f577dbdb1a055db->enter($__internal_e7bd8c747940e50cce557708d6b299fcce4bd8d4af2d09f00f577dbdb1a055db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Category:show.html.twig"));

        $__internal_3e65577b9cb430fc45d4cf746d15abd73fcbc2e493f767436ef8df1b90ac5310 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e65577b9cb430fc45d4cf746d15abd73fcbc2e493f767436ef8df1b90ac5310->enter($__internal_3e65577b9cb430fc45d4cf746d15abd73fcbc2e493f767436ef8df1b90ac5310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Category:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7bd8c747940e50cce557708d6b299fcce4bd8d4af2d09f00f577dbdb1a055db->leave($__internal_e7bd8c747940e50cce557708d6b299fcce4bd8d4af2d09f00f577dbdb1a055db_prof);

        
        $__internal_3e65577b9cb430fc45d4cf746d15abd73fcbc2e493f767436ef8df1b90ac5310->leave($__internal_3e65577b9cb430fc45d4cf746d15abd73fcbc2e493f767436ef8df1b90ac5310_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0af317efb19840ba711fe1a7a078eff8d29828abd8856011f78916d238713fd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0af317efb19840ba711fe1a7a078eff8d29828abd8856011f78916d238713fd2->enter($__internal_0af317efb19840ba711fe1a7a078eff8d29828abd8856011f78916d238713fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_84cb6f57312a449482e876af237e8674bfe8558b59687ca6c3c71bf48a39a57c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84cb6f57312a449482e876af237e8674bfe8558b59687ca6c3c71bf48a39a57c->enter($__internal_84cb6f57312a449482e876af237e8674bfe8558b59687ca6c3c71bf48a39a57c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Category</h1>

    <div class=\"table-responsive\">
        <table class=\"table table-hover\">
            <tbody>
                <tr>
                    <th>Id</th>
                    <td>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 11, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 15, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Code</th>
                    <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 19, $this->getSourceContext()); })()), "code", array()), "html", null, true);
        echo "</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div>
        <a class=\"btn btn-default\" href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("secure_category_index");
        echo "\">Back to the list</a>
        <a class=\"btn btn-primary\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("secure_category_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new Twig_Error_Runtime('Variable "category" does not exist.', 27, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 28, $this->getSourceContext()); })()), 'form_start', array("attr" => array("style" => "display:inline")));
        echo "
            <input class=\"btn btn-danger\" type=\"submit\" value=\"Delete\">
        ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 30, $this->getSourceContext()); })()), 'form_end');
        echo "
    </div>
";
        
        $__internal_84cb6f57312a449482e876af237e8674bfe8558b59687ca6c3c71bf48a39a57c->leave($__internal_84cb6f57312a449482e876af237e8674bfe8558b59687ca6c3c71bf48a39a57c_prof);

        
        $__internal_0af317efb19840ba711fe1a7a078eff8d29828abd8856011f78916d238713fd2->leave($__internal_0af317efb19840ba711fe1a7a078eff8d29828abd8856011f78916d238713fd2_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Category:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 30,  90 => 28,  86 => 27,  82 => 26,  72 => 19,  65 => 15,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'MainBundle::layout.html.twig' %}

{% block body %}
    <h1>Category</h1>

    <div class=\"table-responsive\">
        <table class=\"table table-hover\">
            <tbody>
                <tr>
                    <th>Id</th>
                    <td>{{ category.id }}</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>{{ category.name }}</td>
                </tr>
                <tr>
                    <th>Code</th>
                    <td>{{ category.code }}</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div>
        <a class=\"btn btn-default\" href=\"{{ path('secure_category_index') }}\">Back to the list</a>
        <a class=\"btn btn-primary\" href=\"{{ path('secure_category_edit', { 'id': category.id }) }}\">Edit</a>
        {{ form_start(delete_form, {'attr': {'style': 'display:inline'}}) }}
            <input class=\"btn btn-danger\" type=\"submit\" value=\"Delete\">
        {{ form_end(delete_form) }}
    </div>
{% endblock %}
", "MainBundle:Category:show.html.twig", "/home/geek/Bureau/symfony-blog/src/MainBundle/Resources/views/Category/show.html.twig");
    }
}
