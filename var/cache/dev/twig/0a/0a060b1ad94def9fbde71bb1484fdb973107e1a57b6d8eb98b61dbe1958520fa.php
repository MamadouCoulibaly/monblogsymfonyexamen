<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_5ae2f99dbbc7214db65e144b2c2a397ca174775e3d16b793c5b406c854d6617d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4190ca5184cea07d3a23d90ad94fb3b68e3b880b57414f35874e7d7c29afbd01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4190ca5184cea07d3a23d90ad94fb3b68e3b880b57414f35874e7d7c29afbd01->enter($__internal_4190ca5184cea07d3a23d90ad94fb3b68e3b880b57414f35874e7d7c29afbd01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_d5b7eb1be717790d6bf33aad46e2afda83512c6dc54548937cd3c9d0cf652e44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5b7eb1be717790d6bf33aad46e2afda83512c6dc54548937cd3c9d0cf652e44->enter($__internal_d5b7eb1be717790d6bf33aad46e2afda83512c6dc54548937cd3c9d0cf652e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4190ca5184cea07d3a23d90ad94fb3b68e3b880b57414f35874e7d7c29afbd01->leave($__internal_4190ca5184cea07d3a23d90ad94fb3b68e3b880b57414f35874e7d7c29afbd01_prof);

        
        $__internal_d5b7eb1be717790d6bf33aad46e2afda83512c6dc54548937cd3c9d0cf652e44->leave($__internal_d5b7eb1be717790d6bf33aad46e2afda83512c6dc54548937cd3c9d0cf652e44_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_804273de81b3bdccdc901678b9428f9d41b143cab73bb5e642d2324f14850e78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_804273de81b3bdccdc901678b9428f9d41b143cab73bb5e642d2324f14850e78->enter($__internal_804273de81b3bdccdc901678b9428f9d41b143cab73bb5e642d2324f14850e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_cd95b53091ed8994dfabb093b7e1d42f8e062d46f42801cf539a993e19e6e8b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd95b53091ed8994dfabb093b7e1d42f8e062d46f42801cf539a993e19e6e8b5->enter($__internal_cd95b53091ed8994dfabb093b7e1d42f8e062d46f42801cf539a993e19e6e8b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_cd95b53091ed8994dfabb093b7e1d42f8e062d46f42801cf539a993e19e6e8b5->leave($__internal_cd95b53091ed8994dfabb093b7e1d42f8e062d46f42801cf539a993e19e6e8b5_prof);

        
        $__internal_804273de81b3bdccdc901678b9428f9d41b143cab73bb5e642d2324f14850e78->leave($__internal_804273de81b3bdccdc901678b9428f9d41b143cab73bb5e642d2324f14850e78_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/geek/Bureau/coulibalyblogtdsi/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
