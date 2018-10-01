<?php

/* MainBundle:Comment:new.html.twig */
class __TwigTemplate_84c99a6998d5880b4b2b4760db4d3bf7517ff0114ce4c9d1d860eb10ad2dc3e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle::layout.html.twig", "MainBundle:Comment:new.html.twig", 1);
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
        $__internal_533037fc8190edb6a9c5ffbb83f3ef02a53e0f6666de82e7cd354f06bd80c3d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_533037fc8190edb6a9c5ffbb83f3ef02a53e0f6666de82e7cd354f06bd80c3d0->enter($__internal_533037fc8190edb6a9c5ffbb83f3ef02a53e0f6666de82e7cd354f06bd80c3d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Comment:new.html.twig"));

        $__internal_d879e08eec890c7dd8aa570390880892c6c1dc4fab70f9450b94565d0113a54a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d879e08eec890c7dd8aa570390880892c6c1dc4fab70f9450b94565d0113a54a->enter($__internal_d879e08eec890c7dd8aa570390880892c6c1dc4fab70f9450b94565d0113a54a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Comment:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_533037fc8190edb6a9c5ffbb83f3ef02a53e0f6666de82e7cd354f06bd80c3d0->leave($__internal_533037fc8190edb6a9c5ffbb83f3ef02a53e0f6666de82e7cd354f06bd80c3d0_prof);

        
        $__internal_d879e08eec890c7dd8aa570390880892c6c1dc4fab70f9450b94565d0113a54a->leave($__internal_d879e08eec890c7dd8aa570390880892c6c1dc4fab70f9450b94565d0113a54a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7caf6f2fad22d2b23d45276034044fd6b838353aaf960f161854940ab221a24d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7caf6f2fad22d2b23d45276034044fd6b838353aaf960f161854940ab221a24d->enter($__internal_7caf6f2fad22d2b23d45276034044fd6b838353aaf960f161854940ab221a24d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e92f5dabb1ca623fdb654d565ab707357ffdbf260043557c648fd397254a8d4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e92f5dabb1ca623fdb654d565ab707357ffdbf260043557c648fd397254a8d4b->enter($__internal_e92f5dabb1ca623fdb654d565ab707357ffdbf260043557c648fd397254a8d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Comment creation</h1>

    <div class=\"jumbotron\">
        ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
            <div class=\"form-group\">
                <label class=\"col-md-2 control-label\">Post</label>
                <div class=\"col-md-10\">
                    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), "post", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div> 
            </div>
            <div class=\"form-group\">
                <label class=\"col-md-2 control-label\">User</label>
                <div class=\"col-md-10\">
                    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), "user", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div> 
            </div>
            <div class=\"form-group\">
                <label class=\"col-md-2 control-label\">Comment</label>
                <div class=\"col-md-10\">
                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), "comment", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div> 
            </div>

            <div class=\"form-group\">
                <label class=\"col-md-2 control-label\">Response</label>
                <div class=\"col-md-10\">
                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->getSourceContext()); })()), "response", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div> 
            </div>


            <div class=\"form-group\">
                <label class=\"col-md-2 control-label\">Approved?</label>
                <div class=\"col-md-10\">
                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->getSourceContext()); })()), "approved", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div> 
            </div>

            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'widget');
        echo "
            <a class=\"btn btn-default\" href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("secure_comment_index");
        echo "\">Back to the list</a>
            <input class=\"btn btn-success\" type=\"submit\" value=\"Create comment\" />
        ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 45, $this->getSourceContext()); })()), 'form_end');
        echo "
    </div>

";
        
        $__internal_e92f5dabb1ca623fdb654d565ab707357ffdbf260043557c648fd397254a8d4b->leave($__internal_e92f5dabb1ca623fdb654d565ab707357ffdbf260043557c648fd397254a8d4b_prof);

        
        $__internal_7caf6f2fad22d2b23d45276034044fd6b838353aaf960f161854940ab221a24d->leave($__internal_7caf6f2fad22d2b23d45276034044fd6b838353aaf960f161854940ab221a24d_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Comment:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 45,  111 => 43,  107 => 42,  100 => 38,  89 => 30,  79 => 23,  70 => 17,  61 => 11,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'MainBundle::layout.html.twig' %}

{% block body %}
    <h1>Comment creation</h1>

    <div class=\"jumbotron\">
        {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
            <div class=\"form-group\">
                <label class=\"col-md-2 control-label\">Post</label>
                <div class=\"col-md-10\">
                    {{ form_widget(form.post, {'attr': {'class': 'form-control'}}) }}
                </div> 
            </div>
            <div class=\"form-group\">
                <label class=\"col-md-2 control-label\">User</label>
                <div class=\"col-md-10\">
                    {{ form_widget(form.user, {'attr': {'class': 'form-control'}}) }}
                </div> 
            </div>
            <div class=\"form-group\">
                <label class=\"col-md-2 control-label\">Comment</label>
                <div class=\"col-md-10\">
                    {{ form_widget(form.comment, {'attr': {'class': 'form-control'}}) }}
                </div> 
            </div>

            <div class=\"form-group\">
                <label class=\"col-md-2 control-label\">Response</label>
                <div class=\"col-md-10\">
                    {{ form_widget(form.response, {'attr': {'class': 'form-control'}}) }}
                </div> 
            </div>


            <div class=\"form-group\">
                <label class=\"col-md-2 control-label\">Approved?</label>
                <div class=\"col-md-10\">
                    {{ form_widget(form.approved, {'attr': {'class': 'form-control'}}) }}
                </div> 
            </div>

            {{ form_widget(form) }}
            <a class=\"btn btn-default\" href=\"{{ path('secure_comment_index') }}\">Back to the list</a>
            <input class=\"btn btn-success\" type=\"submit\" value=\"Create comment\" />
        {{ form_end(form) }}
    </div>

{% endblock %}
", "MainBundle:Comment:new.html.twig", "/home/geek/Bureau/coulibalyblogtdsi/src/MainBundle/Resources/views/Comment/new.html.twig");
    }
}
