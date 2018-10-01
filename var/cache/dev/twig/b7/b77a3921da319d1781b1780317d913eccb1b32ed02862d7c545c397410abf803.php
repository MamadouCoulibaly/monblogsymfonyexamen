<?php

/* MainBundle:Category:edit.html.twig */
class __TwigTemplate_e6f21be670a4c8b2a3ac0929daa86dd53b33cdb0b54eb6196cf0dcf0e7acbbc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle::layout.html.twig", "MainBundle:Category:edit.html.twig", 1);
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
        $__internal_cacf2ee84ba51f1ab406bc0dea150fa2d6e0e5910e3314d12dca34ad893b87fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cacf2ee84ba51f1ab406bc0dea150fa2d6e0e5910e3314d12dca34ad893b87fb->enter($__internal_cacf2ee84ba51f1ab406bc0dea150fa2d6e0e5910e3314d12dca34ad893b87fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Category:edit.html.twig"));

        $__internal_e41a69252f254862b6a13552b840fa5cbb017d6c4b581cb7ba16334c9d9e0d82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e41a69252f254862b6a13552b840fa5cbb017d6c4b581cb7ba16334c9d9e0d82->enter($__internal_e41a69252f254862b6a13552b840fa5cbb017d6c4b581cb7ba16334c9d9e0d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Category:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cacf2ee84ba51f1ab406bc0dea150fa2d6e0e5910e3314d12dca34ad893b87fb->leave($__internal_cacf2ee84ba51f1ab406bc0dea150fa2d6e0e5910e3314d12dca34ad893b87fb_prof);

        
        $__internal_e41a69252f254862b6a13552b840fa5cbb017d6c4b581cb7ba16334c9d9e0d82->leave($__internal_e41a69252f254862b6a13552b840fa5cbb017d6c4b581cb7ba16334c9d9e0d82_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b2e3071ddffdf16f190927328058bf02507f7adbe62a54ce3b21cb7db855169 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b2e3071ddffdf16f190927328058bf02507f7adbe62a54ce3b21cb7db855169->enter($__internal_1b2e3071ddffdf16f190927328058bf02507f7adbe62a54ce3b21cb7db855169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fa7cb2ac551a3d6baa5998dd68e4ca568c4d4daf884c2da971d48c66f0339ae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa7cb2ac551a3d6baa5998dd68e4ca568c4d4daf884c2da971d48c66f0339ae0->enter($__internal_fa7cb2ac551a3d6baa5998dd68e4ca568c4d4daf884c2da971d48c66f0339ae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Edit Category</h1>

    <div class=\"jumbotron\">
        ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 7, $this->getSourceContext()); })()), 'form_start', array("attr" => array("class" => "form-inline")));
        echo "
            <div>
                <label class=\"col-md-2\">Name</label>
                ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 10, $this->getSourceContext()); })()), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
            <div>
                <label class=\"col-md-2\">Code (clean URL)</label>
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 14, $this->getSourceContext()); })()), "code", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 15, $this->getSourceContext()); })()), 'widget');
        echo "
            </div>
            <input class=\"btn btn-success\" type=\"submit\" value=\"Edit category\" />
        ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 18, $this->getSourceContext()); })()), 'form_end');
        echo "
        <hr>
        <div>
            <a class=\"btn btn-default\" href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("secure_category_index");
        echo "\">Back to the list</a>
            ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 22, $this->getSourceContext()); })()), 'form_start', array("attr" => array("style" => "display:inline")));
        echo "
                <input class=\"btn btn-danger\" type=\"submit\" value=\"Delete\">
            ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 24, $this->getSourceContext()); })()), 'form_end');
        echo "
        </div>
    </div>

";
        
        $__internal_fa7cb2ac551a3d6baa5998dd68e4ca568c4d4daf884c2da971d48c66f0339ae0->leave($__internal_fa7cb2ac551a3d6baa5998dd68e4ca568c4d4daf884c2da971d48c66f0339ae0_prof);

        
        $__internal_1b2e3071ddffdf16f190927328058bf02507f7adbe62a54ce3b21cb7db855169->leave($__internal_1b2e3071ddffdf16f190927328058bf02507f7adbe62a54ce3b21cb7db855169_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Category:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 24,  87 => 22,  83 => 21,  77 => 18,  71 => 15,  67 => 14,  60 => 10,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'MainBundle::layout.html.twig' %}

{% block body %}
    <h1>Edit Category</h1>

    <div class=\"jumbotron\">
        {{ form_start(edit_form, {'attr': {'class': 'form-inline'}}) }}
            <div>
                <label class=\"col-md-2\">Name</label>
                {{ form_widget(edit_form.name, {'attr': {'class': 'form-control'}}) }}
            </div>
            <div>
                <label class=\"col-md-2\">Code (clean URL)</label>
                {{ form_widget(edit_form.code, {'attr': {'class': 'form-control'}}) }}
                {{ form_widget(edit_form) }}
            </div>
            <input class=\"btn btn-success\" type=\"submit\" value=\"Edit category\" />
        {{ form_end(edit_form) }}
        <hr>
        <div>
            <a class=\"btn btn-default\" href=\"{{ path('secure_category_index') }}\">Back to the list</a>
            {{ form_start(delete_form, {'attr': {'style': 'display:inline'}}) }}
                <input class=\"btn btn-danger\" type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </div>
    </div>

{% endblock %}
", "MainBundle:Category:edit.html.twig", "/home/geek/Bureau/symfony-blog/src/MainBundle/Resources/views/Category/edit.html.twig");
    }
}
