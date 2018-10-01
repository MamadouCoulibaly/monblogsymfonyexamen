<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f92ab5ce66d377c3d9aaf694e119d3deb2e99090d589bc9f3c5ab1d5e4a56f9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_acfa299bda92ba87022435b99f02450147e7a1bd279649b94cd1b09beaa40661 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acfa299bda92ba87022435b99f02450147e7a1bd279649b94cd1b09beaa40661->enter($__internal_acfa299bda92ba87022435b99f02450147e7a1bd279649b94cd1b09beaa40661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_10eb24bc89a26db31c0ee12eea50886f886ccd4f3f0081dfe3af7afc3521497f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10eb24bc89a26db31c0ee12eea50886f886ccd4f3f0081dfe3af7afc3521497f->enter($__internal_10eb24bc89a26db31c0ee12eea50886f886ccd4f3f0081dfe3af7afc3521497f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acfa299bda92ba87022435b99f02450147e7a1bd279649b94cd1b09beaa40661->leave($__internal_acfa299bda92ba87022435b99f02450147e7a1bd279649b94cd1b09beaa40661_prof);

        
        $__internal_10eb24bc89a26db31c0ee12eea50886f886ccd4f3f0081dfe3af7afc3521497f->leave($__internal_10eb24bc89a26db31c0ee12eea50886f886ccd4f3f0081dfe3af7afc3521497f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e4f7d0c59cc43fe50138fc6f5099e797f924da1ffde99972ad5f225480a198d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4f7d0c59cc43fe50138fc6f5099e797f924da1ffde99972ad5f225480a198d4->enter($__internal_e4f7d0c59cc43fe50138fc6f5099e797f924da1ffde99972ad5f225480a198d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9798f4d1746ebd03e4268df2d810675acd0f1947aeb59c46674b08339e23437a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9798f4d1746ebd03e4268df2d810675acd0f1947aeb59c46674b08339e23437a->enter($__internal_9798f4d1746ebd03e4268df2d810675acd0f1947aeb59c46674b08339e23437a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9798f4d1746ebd03e4268df2d810675acd0f1947aeb59c46674b08339e23437a->leave($__internal_9798f4d1746ebd03e4268df2d810675acd0f1947aeb59c46674b08339e23437a_prof);

        
        $__internal_e4f7d0c59cc43fe50138fc6f5099e797f924da1ffde99972ad5f225480a198d4->leave($__internal_e4f7d0c59cc43fe50138fc6f5099e797f924da1ffde99972ad5f225480a198d4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2f498bdd846aa4d306ddfb72dd5b52459e602599ea9eb26998adb9894ac5a11f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f498bdd846aa4d306ddfb72dd5b52459e602599ea9eb26998adb9894ac5a11f->enter($__internal_2f498bdd846aa4d306ddfb72dd5b52459e602599ea9eb26998adb9894ac5a11f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e9a2fca0f357193e216f4c68a0a07ff314fb056d3b2ef0458babac5d7f71e528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9a2fca0f357193e216f4c68a0a07ff314fb056d3b2ef0458babac5d7f71e528->enter($__internal_e9a2fca0f357193e216f4c68a0a07ff314fb056d3b2ef0458babac5d7f71e528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e9a2fca0f357193e216f4c68a0a07ff314fb056d3b2ef0458babac5d7f71e528->leave($__internal_e9a2fca0f357193e216f4c68a0a07ff314fb056d3b2ef0458babac5d7f71e528_prof);

        
        $__internal_2f498bdd846aa4d306ddfb72dd5b52459e602599ea9eb26998adb9894ac5a11f->leave($__internal_2f498bdd846aa4d306ddfb72dd5b52459e602599ea9eb26998adb9894ac5a11f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2beb07489e70e511381e77a6f9f422417fbc181ce40e573fef7c99df14358afc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2beb07489e70e511381e77a6f9f422417fbc181ce40e573fef7c99df14358afc->enter($__internal_2beb07489e70e511381e77a6f9f422417fbc181ce40e573fef7c99df14358afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_02643279b355bd40b2c3ff8abc6570bce8a39fa9ef4ff698f7708870949d6887 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02643279b355bd40b2c3ff8abc6570bce8a39fa9ef4ff698f7708870949d6887->enter($__internal_02643279b355bd40b2c3ff8abc6570bce8a39fa9ef4ff698f7708870949d6887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_02643279b355bd40b2c3ff8abc6570bce8a39fa9ef4ff698f7708870949d6887->leave($__internal_02643279b355bd40b2c3ff8abc6570bce8a39fa9ef4ff698f7708870949d6887_prof);

        
        $__internal_2beb07489e70e511381e77a6f9f422417fbc181ce40e573fef7c99df14358afc->leave($__internal_2beb07489e70e511381e77a6f9f422417fbc181ce40e573fef7c99df14358afc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/geek/Bureau/coulibalyblogtdsi/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
