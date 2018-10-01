<?php

/* MainBundle:Comment:show.html.twig */
class __TwigTemplate_e4f0fb19a5a93cea2f691942226b879301dead4bd595034c0e4278ba494e18d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle::layout.html.twig", "MainBundle:Comment:show.html.twig", 1);
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
        $__internal_93f8c7ed3a173182289411c75ef13ab4a6700a19508aa4271a01672891ec297c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93f8c7ed3a173182289411c75ef13ab4a6700a19508aa4271a01672891ec297c->enter($__internal_93f8c7ed3a173182289411c75ef13ab4a6700a19508aa4271a01672891ec297c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Comment:show.html.twig"));

        $__internal_5f2a61298a2b7b360f4f6ca179740cf8142bb352abe3d36c5c21dcefa99c4d21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f2a61298a2b7b360f4f6ca179740cf8142bb352abe3d36c5c21dcefa99c4d21->enter($__internal_5f2a61298a2b7b360f4f6ca179740cf8142bb352abe3d36c5c21dcefa99c4d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Comment:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93f8c7ed3a173182289411c75ef13ab4a6700a19508aa4271a01672891ec297c->leave($__internal_93f8c7ed3a173182289411c75ef13ab4a6700a19508aa4271a01672891ec297c_prof);

        
        $__internal_5f2a61298a2b7b360f4f6ca179740cf8142bb352abe3d36c5c21dcefa99c4d21->leave($__internal_5f2a61298a2b7b360f4f6ca179740cf8142bb352abe3d36c5c21dcefa99c4d21_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7cc97f2f39170392f2ee36645f8c73842e4a45316ef26d96d848c70a7487a47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7cc97f2f39170392f2ee36645f8c73842e4a45316ef26d96d848c70a7487a47->enter($__internal_c7cc97f2f39170392f2ee36645f8c73842e4a45316ef26d96d848c70a7487a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1abd6b04b5c782f06f645305454ebf6d8a0c8328f337987fb024044836c40604 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1abd6b04b5c782f06f645305454ebf6d8a0c8328f337987fb024044836c40604->enter($__internal_1abd6b04b5c782f06f645305454ebf6d8a0c8328f337987fb024044836c40604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Comment</h1>

    <div class=\"table-responsive\">
        <table class=\"table table-hover\">
            <tbody>
                <tr>
                    <th>Id</th>
                    <td>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 11, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Comment</th>
                    <td>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 15, $this->getSourceContext()); })()), "comment", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Approved</th>
                    <td>";
        // line 19
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 19, $this->getSourceContext()); })()), "approved", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
                </tr>
                <tr>
                    <th>User</th>
                    <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 23, $this->getSourceContext()); })()), "user", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Createdat</th>
                    <td>";
        // line 27
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 27, $this->getSourceContext()); })()), "createdAt", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 27, $this->getSourceContext()); })()), "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
                </tr>
                <tr>
                    <th>Response</th>
                    <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 31, $this->getSourceContext()); })()), "response", array()), "html", null, true);
        echo "</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div>
        <a class=\"btn btn-default\" href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("secure_comment_index");
        echo "\">Back to the list</a>
        <a class=\"btn btn-primary\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("secure_comment_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new Twig_Error_Runtime('Variable "comment" does not exist.', 39, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 40, $this->getSourceContext()); })()), 'form_start', array("attr" => array("style" => "display:inline")));
        echo "
            <input class=\"btn btn-danger\" type=\"submit\" value=\"Delete comment\">
        ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 42, $this->getSourceContext()); })()), 'form_end');
        echo "
    </div>

";
        
        $__internal_1abd6b04b5c782f06f645305454ebf6d8a0c8328f337987fb024044836c40604->leave($__internal_1abd6b04b5c782f06f645305454ebf6d8a0c8328f337987fb024044836c40604_prof);

        
        $__internal_c7cc97f2f39170392f2ee36645f8c73842e4a45316ef26d96d848c70a7487a47->leave($__internal_c7cc97f2f39170392f2ee36645f8c73842e4a45316ef26d96d848c70a7487a47_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Comment:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 42,  117 => 40,  113 => 39,  109 => 38,  99 => 31,  90 => 27,  83 => 23,  72 => 19,  65 => 15,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'MainBundle::layout.html.twig' %}

{% block body %}
    <h1>Comment</h1>

    <div class=\"table-responsive\">
        <table class=\"table table-hover\">
            <tbody>
                <tr>
                    <th>Id</th>
                    <td>{{ comment.id }}</td>
                </tr>
                <tr>
                    <th>Comment</th>
                    <td>{{ comment.comment }}</td>
                </tr>
                <tr>
                    <th>Approved</th>
                    <td>{% if comment.approved %}Yes{% else %}No{% endif %}</td>
                </tr>
                <tr>
                    <th>User</th>
                    <td>{{ comment.user }}</td>
                </tr>
                <tr>
                    <th>Createdat</th>
                    <td>{% if comment.createdAt %}{{ comment.createdAt|date('Y-m-d H:i:s') }}{% endif %}</td>
                </tr>
                <tr>
                    <th>Response</th>
                    <td>{{ comment.response }}</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div>
        <a class=\"btn btn-default\" href=\"{{ path('secure_comment_index') }}\">Back to the list</a>
        <a class=\"btn btn-primary\" href=\"{{ path('secure_comment_edit', { 'id': comment.id }) }}\">Edit</a>
        {{ form_start(delete_form, {'attr': {'style': 'display:inline'}}) }}
            <input class=\"btn btn-danger\" type=\"submit\" value=\"Delete comment\">
        {{ form_end(delete_form) }}
    </div>

{% endblock %}
", "MainBundle:Comment:show.html.twig", "/home/geek/Bureau/coulibalyblogtdsi/src/MainBundle/Resources/views/Comment/show.html.twig");
    }
}
