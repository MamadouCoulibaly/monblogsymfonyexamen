<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_bce6e32dbb6509ea4d89eef663ca170d620a44d493279565d6bad0ad91f215ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_90dbec297db35a2e5b7059ba10a826a1be655a61475cbf7392a12afeb5241a83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90dbec297db35a2e5b7059ba10a826a1be655a61475cbf7392a12afeb5241a83->enter($__internal_90dbec297db35a2e5b7059ba10a826a1be655a61475cbf7392a12afeb5241a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5ac17e03e3c04180b4639deb3610931ed4b78ec139e368c071cd74ecafcc2e17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ac17e03e3c04180b4639deb3610931ed4b78ec139e368c071cd74ecafcc2e17->enter($__internal_5ac17e03e3c04180b4639deb3610931ed4b78ec139e368c071cd74ecafcc2e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90dbec297db35a2e5b7059ba10a826a1be655a61475cbf7392a12afeb5241a83->leave($__internal_90dbec297db35a2e5b7059ba10a826a1be655a61475cbf7392a12afeb5241a83_prof);

        
        $__internal_5ac17e03e3c04180b4639deb3610931ed4b78ec139e368c071cd74ecafcc2e17->leave($__internal_5ac17e03e3c04180b4639deb3610931ed4b78ec139e368c071cd74ecafcc2e17_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_32d5eb76bbd4b41aeef3011cfc70e1d0ff96694874d7c278d8db2e18fdb3aef1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32d5eb76bbd4b41aeef3011cfc70e1d0ff96694874d7c278d8db2e18fdb3aef1->enter($__internal_32d5eb76bbd4b41aeef3011cfc70e1d0ff96694874d7c278d8db2e18fdb3aef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3664ea5f2d74fac6785fa22cfb07cc2b2e0f4941dc57fc61f57d2d81c706dcf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3664ea5f2d74fac6785fa22cfb07cc2b2e0f4941dc57fc61f57d2d81c706dcf8->enter($__internal_3664ea5f2d74fac6785fa22cfb07cc2b2e0f4941dc57fc61f57d2d81c706dcf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_3664ea5f2d74fac6785fa22cfb07cc2b2e0f4941dc57fc61f57d2d81c706dcf8->leave($__internal_3664ea5f2d74fac6785fa22cfb07cc2b2e0f4941dc57fc61f57d2d81c706dcf8_prof);

        
        $__internal_32d5eb76bbd4b41aeef3011cfc70e1d0ff96694874d7c278d8db2e18fdb3aef1->leave($__internal_32d5eb76bbd4b41aeef3011cfc70e1d0ff96694874d7c278d8db2e18fdb3aef1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3ed5d3fa784291cd4ca2be7f44e0778972a50879a94aad3bfe26d8502786e87e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ed5d3fa784291cd4ca2be7f44e0778972a50879a94aad3bfe26d8502786e87e->enter($__internal_3ed5d3fa784291cd4ca2be7f44e0778972a50879a94aad3bfe26d8502786e87e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c37eb4184469a6db0f097376f2472001af5c1f2b8f432e82058a28a4e3d752c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c37eb4184469a6db0f097376f2472001af5c1f2b8f432e82058a28a4e3d752c9->enter($__internal_c37eb4184469a6db0f097376f2472001af5c1f2b8f432e82058a28a4e3d752c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_c37eb4184469a6db0f097376f2472001af5c1f2b8f432e82058a28a4e3d752c9->leave($__internal_c37eb4184469a6db0f097376f2472001af5c1f2b8f432e82058a28a4e3d752c9_prof);

        
        $__internal_3ed5d3fa784291cd4ca2be7f44e0778972a50879a94aad3bfe26d8502786e87e->leave($__internal_3ed5d3fa784291cd4ca2be7f44e0778972a50879a94aad3bfe26d8502786e87e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7ffdcc15e62e7cf1b5b895f4d99844567e7ba52d40ae0f6677c5352e037e1e6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ffdcc15e62e7cf1b5b895f4d99844567e7ba52d40ae0f6677c5352e037e1e6f->enter($__internal_7ffdcc15e62e7cf1b5b895f4d99844567e7ba52d40ae0f6677c5352e037e1e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0c702a2cb14f70377176555e3cd7dd0c7fc3e7d1e335b9d679e40c39f4cd8f14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c702a2cb14f70377176555e3cd7dd0c7fc3e7d1e335b9d679e40c39f4cd8f14->enter($__internal_0c702a2cb14f70377176555e3cd7dd0c7fc3e7d1e335b9d679e40c39f4cd8f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_0c702a2cb14f70377176555e3cd7dd0c7fc3e7d1e335b9d679e40c39f4cd8f14->leave($__internal_0c702a2cb14f70377176555e3cd7dd0c7fc3e7d1e335b9d679e40c39f4cd8f14_prof);

        
        $__internal_7ffdcc15e62e7cf1b5b895f4d99844567e7ba52d40ae0f6677c5352e037e1e6f->leave($__internal_7ffdcc15e62e7cf1b5b895f4d99844567e7ba52d40ae0f6677c5352e037e1e6f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/geek/Bureau/coulibalyblogtdsi/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
