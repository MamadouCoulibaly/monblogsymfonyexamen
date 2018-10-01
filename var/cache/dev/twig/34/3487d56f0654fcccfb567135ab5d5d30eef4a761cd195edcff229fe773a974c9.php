<?php

/* MainBundle:Post:new.html.twig */
class __TwigTemplate_6d53b01c56eb0e3f766983362c2b9db1173b95462564e2bf262bdea2b8a0b5a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle::layout.html.twig", "MainBundle:Post:new.html.twig", 1);
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
        $__internal_db8a9b28bf34ce9e444c57550df55b7bf193765b7c575709762056b0bd06ed8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db8a9b28bf34ce9e444c57550df55b7bf193765b7c575709762056b0bd06ed8c->enter($__internal_db8a9b28bf34ce9e444c57550df55b7bf193765b7c575709762056b0bd06ed8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Post:new.html.twig"));

        $__internal_4a37f184efdcd4b6ccacf0e7c370b00b867f9d0b3772d20e790bea7d32a7aa8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a37f184efdcd4b6ccacf0e7c370b00b867f9d0b3772d20e790bea7d32a7aa8e->enter($__internal_4a37f184efdcd4b6ccacf0e7c370b00b867f9d0b3772d20e790bea7d32a7aa8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Post:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db8a9b28bf34ce9e444c57550df55b7bf193765b7c575709762056b0bd06ed8c->leave($__internal_db8a9b28bf34ce9e444c57550df55b7bf193765b7c575709762056b0bd06ed8c_prof);

        
        $__internal_4a37f184efdcd4b6ccacf0e7c370b00b867f9d0b3772d20e790bea7d32a7aa8e->leave($__internal_4a37f184efdcd4b6ccacf0e7c370b00b867f9d0b3772d20e790bea7d32a7aa8e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f25ba8dc02e86bc8ebdea4d30ab34fca587f66b3045923cf66204e3f46fa5fa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f25ba8dc02e86bc8ebdea4d30ab34fca587f66b3045923cf66204e3f46fa5fa2->enter($__internal_f25ba8dc02e86bc8ebdea4d30ab34fca587f66b3045923cf66204e3f46fa5fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2cdce6de63dbd1f5f33a2774895040814d1806da27579143064188481f7d12f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cdce6de63dbd1f5f33a2774895040814d1806da27579143064188481f7d12f8->enter($__internal_2cdce6de63dbd1f5f33a2774895040814d1806da27579143064188481f7d12f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>New Post</h1>

    <div class=\"jumbotron\">
        ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
            <div class=\"form-group\">
                <label class=\"col-md-2 control-label\">Title</label>
                <div class=\"col-md-10\">
                    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), "title", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "ex: How to build a new Symfony Blog")));
        echo "
                </div> 
            </div>
            <div class=\"form-group\">
                <label class=\"col-md-2 control-label\">Subtitle</label>
                <div class=\"col-md-10\">
                    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), "subtitle", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "ex: Learn the fastest way")));
        echo "
                </div> 
            </div>
            <div class=\"form-group\">
                <label class=\"col-md-2 control-label\">Author</label>
                <div class=\"col-md-10\">
                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), "author", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div> 
            </div>
            <div class=\"form-group\">
                <label class=\"col-md-2 control-label\">Post</label>
                <div class=\"col-md-10\">
                    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), "post", array()), 'widget', array("attr" => array("class" => "form-control", "type" => "textarea", "placeholder" => "Ex: How to build a new Symfony Blog", "style" => "height:300px;")));
        echo "
                </div> 
            </div>
            <div class=\"form-group\">
                <label class=\"col-md-2 control-label\">Main Image URL</label>
                <div class=\"col-md-10\">
                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->getSourceContext()); })()), "image", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div> 
            </div>
            <div class=\"form-group\">
                <label class=\"col-md-2 control-label\">Category</label>
                <div class=\"col-md-10\">
                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->getSourceContext()); })()), "category", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Choose category")));
        echo "
                </div> 
            </div>
            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 44, $this->getSourceContext()); })()), 'widget');
        echo "
            <a class=\"btn btn-default\" href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("secure_post_index");
        echo "\">Back to the list</a>
            <input class=\"btn btn-success\" type=\"submit\" value=\"Create\" />
        ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->getSourceContext()); })()), 'form_end');
        echo "
    </div>

";
        
        $__internal_2cdce6de63dbd1f5f33a2774895040814d1806da27579143064188481f7d12f8->leave($__internal_2cdce6de63dbd1f5f33a2774895040814d1806da27579143064188481f7d12f8_prof);

        
        $__internal_f25ba8dc02e86bc8ebdea4d30ab34fca587f66b3045923cf66204e3f46fa5fa2->leave($__internal_f25ba8dc02e86bc8ebdea4d30ab34fca587f66b3045923cf66204e3f46fa5fa2_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Post:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 47,  116 => 45,  112 => 44,  106 => 41,  97 => 35,  88 => 29,  79 => 23,  70 => 17,  61 => 11,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'MainBundle::layout.html.twig' %}

{% block body %}
    <h1>New Post</h1>

    <div class=\"jumbotron\">
        {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
            <div class=\"form-group\">
                <label class=\"col-md-2 control-label\">Title</label>
                <div class=\"col-md-10\">
                    {{ form_widget(form.title, {'attr': {'class': 'form-control', 'placeholder': 'ex: How to build a new Symfony Blog'}}) }}
                </div> 
            </div>
            <div class=\"form-group\">
                <label class=\"col-md-2 control-label\">Subtitle</label>
                <div class=\"col-md-10\">
                    {{ form_widget(form.subtitle, {'attr': {'class': 'form-control', 'placeholder': 'ex: Learn the fastest way'}}) }}
                </div> 
            </div>
            <div class=\"form-group\">
                <label class=\"col-md-2 control-label\">Author</label>
                <div class=\"col-md-10\">
                    {{ form_widget(form.author, {'attr': {'class': 'form-control'}}) }}
                </div> 
            </div>
            <div class=\"form-group\">
                <label class=\"col-md-2 control-label\">Post</label>
                <div class=\"col-md-10\">
                    {{ form_widget(form.post, {'attr': {'class': 'form-control', 'type':'textarea', 'placeholder': 'Ex: How to build a new Symfony Blog', 'style': 'height:300px;'}}) }}
                </div> 
            </div>
            <div class=\"form-group\">
                <label class=\"col-md-2 control-label\">Main Image URL</label>
                <div class=\"col-md-10\">
                    {{ form_widget(form.image, {'attr': {'class': 'form-control'}}) }}
                </div> 
            </div>
            <div class=\"form-group\">
                <label class=\"col-md-2 control-label\">Category</label>
                <div class=\"col-md-10\">
                    {{ form_widget(form.category, {'attr': {'class': 'form-control', 'placeholder': 'Choose category'}}) }}
                </div> 
            </div>
            {{ form_widget(form) }}
            <a class=\"btn btn-default\" href=\"{{ path('secure_post_index') }}\">Back to the list</a>
            <input class=\"btn btn-success\" type=\"submit\" value=\"Create\" />
        {{ form_end(form) }}
    </div>

{% endblock %}
", "MainBundle:Post:new.html.twig", "/home/geek/Bureau/symfony-blog/src/MainBundle/Resources/views/Post/new.html.twig");
    }
}
