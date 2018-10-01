<?php

/* MainBundle:Category:index.html.twig */
class __TwigTemplate_85a853fdcdbefca7128477773a8ef70e18983a0f666310194e39815c3acd1ce7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle::layout.html.twig", "MainBundle:Category:index.html.twig", 1);
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
        $__internal_91fb608809e4b47e26aba5da55b0f6fd463e563b3de4323e1d2b62284262b269 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91fb608809e4b47e26aba5da55b0f6fd463e563b3de4323e1d2b62284262b269->enter($__internal_91fb608809e4b47e26aba5da55b0f6fd463e563b3de4323e1d2b62284262b269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Category:index.html.twig"));

        $__internal_272a4161393b96a7a2d2f1bc34af21b2a66de4a7e3a7c1e373246d685aed978f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_272a4161393b96a7a2d2f1bc34af21b2a66de4a7e3a7c1e373246d685aed978f->enter($__internal_272a4161393b96a7a2d2f1bc34af21b2a66de4a7e3a7c1e373246d685aed978f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Category:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91fb608809e4b47e26aba5da55b0f6fd463e563b3de4323e1d2b62284262b269->leave($__internal_91fb608809e4b47e26aba5da55b0f6fd463e563b3de4323e1d2b62284262b269_prof);

        
        $__internal_272a4161393b96a7a2d2f1bc34af21b2a66de4a7e3a7c1e373246d685aed978f->leave($__internal_272a4161393b96a7a2d2f1bc34af21b2a66de4a7e3a7c1e373246d685aed978f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_176b0f16be3ba7fc402c3e52bb620bf8a9713a5dc8cda5a4044c762d5251fdb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_176b0f16be3ba7fc402c3e52bb620bf8a9713a5dc8cda5a4044c762d5251fdb2->enter($__internal_176b0f16be3ba7fc402c3e52bb620bf8a9713a5dc8cda5a4044c762d5251fdb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a40d651900a4d2adcf549d0fc4318f716b5f0d64544371855d9f2cfc97363379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a40d651900a4d2adcf549d0fc4318f716b5f0d64544371855d9f2cfc97363379->enter($__internal_a40d651900a4d2adcf549d0fc4318f716b5f0d64544371855d9f2cfc97363379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Categories</h1>

    <div class=\"table-responsive\">
        <table class=\"table table-hover\">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Code</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new Twig_Error_Runtime('Variable "categories" does not exist.', 17, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 18
            echo "                <tr>
                    <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("secure_category_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "id", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "name", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "code", array()), "html", null, true);
            echo "</td>
                    <td>
                        <ul>
                            <li>
                                <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("secure_category_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "id", array()))), "html", null, true);
            echo "\">show</a>
                            </li>
                            <li>
                                <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("secure_category_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "            </tbody>
        </table>
    </div>
    <div>
        <a class=\"btn btn-primary\" href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("secure_category_new");
        echo "\">Create a new category</a>
    </div>

";
        
        $__internal_a40d651900a4d2adcf549d0fc4318f716b5f0d64544371855d9f2cfc97363379->leave($__internal_a40d651900a4d2adcf549d0fc4318f716b5f0d64544371855d9f2cfc97363379_prof);

        
        $__internal_176b0f16be3ba7fc402c3e52bb620bf8a9713a5dc8cda5a4044c762d5251fdb2->leave($__internal_176b0f16be3ba7fc402c3e52bb620bf8a9713a5dc8cda5a4044c762d5251fdb2_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Category:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 38,  106 => 34,  94 => 28,  88 => 25,  81 => 21,  77 => 20,  71 => 19,  68 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'MainBundle::layout.html.twig' %}

{% block body %}
    <h1>Categories</h1>

    <div class=\"table-responsive\">
        <table class=\"table table-hover\">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Code</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {% for category in categories %}
                <tr>
                    <td><a href=\"{{ path('secure_category_show', { 'id': category.id }) }}\">{{ category.id }}</a></td>
                    <td>{{ category.name }}</td>
                    <td>{{ category.code }}</td>
                    <td>
                        <ul>
                            <li>
                                <a href=\"{{ path('secure_category_show', { 'id': category.id }) }}\">show</a>
                            </li>
                            <li>
                                <a href=\"{{ path('secure_category_edit', { 'id': category.id }) }}\">edit</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
    <div>
        <a class=\"btn btn-primary\" href=\"{{ path('secure_category_new') }}\">Create a new category</a>
    </div>

{% endblock %}
", "MainBundle:Category:index.html.twig", "/home/geek/Bureau/coulibalyblogtdsi/src/MainBundle/Resources/views/Category/index.html.twig");
    }
}
