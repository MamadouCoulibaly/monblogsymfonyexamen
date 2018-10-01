<?php

/* MainBundle:Post:show.html.twig */
class __TwigTemplate_f49a2c3e322b2586cb51845bf18d07038d20514f682dc63b0995471cb9f69f63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle::layout.html.twig", "MainBundle:Post:show.html.twig", 1);
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
        $__internal_237205642774575c9a94b5abdd8eefd21d6247d219bb78f6b99cd5c194b6144e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_237205642774575c9a94b5abdd8eefd21d6247d219bb78f6b99cd5c194b6144e->enter($__internal_237205642774575c9a94b5abdd8eefd21d6247d219bb78f6b99cd5c194b6144e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Post:show.html.twig"));

        $__internal_cd21ce37a8184383e678f0e9b3c1d950eb925310af5fb03e9975cde1d8c5c650 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd21ce37a8184383e678f0e9b3c1d950eb925310af5fb03e9975cde1d8c5c650->enter($__internal_cd21ce37a8184383e678f0e9b3c1d950eb925310af5fb03e9975cde1d8c5c650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Post:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_237205642774575c9a94b5abdd8eefd21d6247d219bb78f6b99cd5c194b6144e->leave($__internal_237205642774575c9a94b5abdd8eefd21d6247d219bb78f6b99cd5c194b6144e_prof);

        
        $__internal_cd21ce37a8184383e678f0e9b3c1d950eb925310af5fb03e9975cde1d8c5c650->leave($__internal_cd21ce37a8184383e678f0e9b3c1d950eb925310af5fb03e9975cde1d8c5c650_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b31c7d52e8430a2eba5b88fe908d2e442e41be4883c2ad1b8ad6fb63000ea6df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b31c7d52e8430a2eba5b88fe908d2e442e41be4883c2ad1b8ad6fb63000ea6df->enter($__internal_b31c7d52e8430a2eba5b88fe908d2e442e41be4883c2ad1b8ad6fb63000ea6df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9188ef2cf0b8329a3f716b25d583d81d95645b66ccf4b54b3cc584c59e6d2420 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9188ef2cf0b8329a3f716b25d583d81d95645b66ccf4b54b3cc584c59e6d2420->enter($__internal_9188ef2cf0b8329a3f716b25d583d81d95645b66ccf4b54b3cc584c59e6d2420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Post</h1>

    <div class=\"table-responsive\">
        <table class=\"table table-hover\">
            <tbody>
                <tr>
                    <th>Id</th>
                    <td>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 11, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Title</th>
                    <td>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 15, $this->getSourceContext()); })()), "title", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Subtitle</th>
                    <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 19, $this->getSourceContext()); })()), "subtitle", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Code</th>
                    <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 23, $this->getSourceContext()); })()), "code", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Author</th>
                    <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 27, $this->getSourceContext()); })()), "author", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Post</th>
                    <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 31, $this->getSourceContext()); })()), "post", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Image</th>
                    <td>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 35, $this->getSourceContext()); })()), "image", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Createdat</th>
                    <td>";
        // line 39
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 39, $this->getSourceContext()); })()), "createdAt", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 39, $this->getSourceContext()); })()), "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div>
        <a class=\"btn btn-default\" href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("secure_post_index");
        echo "\">Back to the list</a>
        <a class=\"btn btn-primary\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("secure_post_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 47, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 48, $this->getSourceContext()); })()), 'form_start', array("attr" => array("style" => "display:inline")));
        echo "
            <input class=\"btn btn-danger\" type=\"submit\" value=\"Delete\">
        ";
        // line 50
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 50, $this->getSourceContext()); })()), 'form_end');
        echo "
    </div>
";
        
        $__internal_9188ef2cf0b8329a3f716b25d583d81d95645b66ccf4b54b3cc584c59e6d2420->leave($__internal_9188ef2cf0b8329a3f716b25d583d81d95645b66ccf4b54b3cc584c59e6d2420_prof);

        
        $__internal_b31c7d52e8430a2eba5b88fe908d2e442e41be4883c2ad1b8ad6fb63000ea6df->leave($__internal_b31c7d52e8430a2eba5b88fe908d2e442e41be4883c2ad1b8ad6fb63000ea6df_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Post:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 50,  127 => 48,  123 => 47,  119 => 46,  107 => 39,  100 => 35,  93 => 31,  86 => 27,  79 => 23,  72 => 19,  65 => 15,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'MainBundle::layout.html.twig' %}

{% block body %}
    <h1>Post</h1>

    <div class=\"table-responsive\">
        <table class=\"table table-hover\">
            <tbody>
                <tr>
                    <th>Id</th>
                    <td>{{ post.id }}</td>
                </tr>
                <tr>
                    <th>Title</th>
                    <td>{{ post.title }}</td>
                </tr>
                <tr>
                    <th>Subtitle</th>
                    <td>{{ post.subtitle }}</td>
                </tr>
                <tr>
                    <th>Code</th>
                    <td>{{ post.code }}</td>
                </tr>
                <tr>
                    <th>Author</th>
                    <td>{{ post.author }}</td>
                </tr>
                <tr>
                    <th>Post</th>
                    <td>{{ post.post }}</td>
                </tr>
                <tr>
                    <th>Image</th>
                    <td>{{ post.image }}</td>
                </tr>
                <tr>
                    <th>Createdat</th>
                    <td>{% if post.createdAt %}{{ post.createdAt|date('Y-m-d H:i:s') }}{% endif %}</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div>
        <a class=\"btn btn-default\" href=\"{{ path('secure_post_index') }}\">Back to the list</a>
        <a class=\"btn btn-primary\" href=\"{{ path('secure_post_edit', { 'id': post.id }) }}\">Edit</a>
        {{ form_start(delete_form, {'attr': {'style': 'display:inline'}}) }}
            <input class=\"btn btn-danger\" type=\"submit\" value=\"Delete\">
        {{ form_end(delete_form) }}
    </div>
{% endblock %}
", "MainBundle:Post:show.html.twig", "/home/geek/Bureau/symfony-blog/src/MainBundle/Resources/views/Post/show.html.twig");
    }
}
