<?php

/* MainBundle:Post:index.html.twig */
class __TwigTemplate_397271b0ca8ebe10a3de7df7449f2efc4bda8f0af0fc9e90fff6649a49bf8808 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle::layout.html.twig", "MainBundle:Post:index.html.twig", 1);
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
        $__internal_c8d5bcf4dc8246a4278691a5de56cab620ac89f027b60fc8390b23d88e7108b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8d5bcf4dc8246a4278691a5de56cab620ac89f027b60fc8390b23d88e7108b6->enter($__internal_c8d5bcf4dc8246a4278691a5de56cab620ac89f027b60fc8390b23d88e7108b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Post:index.html.twig"));

        $__internal_fa4e7ef24e7d3f57d393be95e2dbccb36b7f3e25b155acbde21c1942d021a161 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa4e7ef24e7d3f57d393be95e2dbccb36b7f3e25b155acbde21c1942d021a161->enter($__internal_fa4e7ef24e7d3f57d393be95e2dbccb36b7f3e25b155acbde21c1942d021a161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Post:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8d5bcf4dc8246a4278691a5de56cab620ac89f027b60fc8390b23d88e7108b6->leave($__internal_c8d5bcf4dc8246a4278691a5de56cab620ac89f027b60fc8390b23d88e7108b6_prof);

        
        $__internal_fa4e7ef24e7d3f57d393be95e2dbccb36b7f3e25b155acbde21c1942d021a161->leave($__internal_fa4e7ef24e7d3f57d393be95e2dbccb36b7f3e25b155acbde21c1942d021a161_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b695eefe16badec6972187f2c4483bde78755684b55ac5387a02fcb77c8ee97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b695eefe16badec6972187f2c4483bde78755684b55ac5387a02fcb77c8ee97->enter($__internal_5b695eefe16badec6972187f2c4483bde78755684b55ac5387a02fcb77c8ee97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_55e6b7dc0d019e54abe43a62a3aba5c62a4ac0dac767394850cb8ab63e993f0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55e6b7dc0d019e54abe43a62a3aba5c62a4ac0dac767394850cb8ab63e993f0c->enter($__internal_55e6b7dc0d019e54abe43a62a3aba5c62a4ac0dac767394850cb8ab63e993f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Posts list</h1>

    <div class=\"table-responsive\">
        <table class=\"table table-hover\">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Subtitle</th>
                    <th>Author</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new Twig_Error_Runtime('Variable "posts" does not exist.', 19, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 20
            echo "                <tr>
                    <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("secure_post_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "id", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "subtitle", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "author", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 25
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "createdAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                    <td>
                        <ul>
                            <li>
                                <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("secure_post_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "id", array()))), "html", null, true);
            echo "\">show</a>
                            </li>
                            <li>
                                <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("secure_post_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "            </tbody>
        </table>
    </div>

    <div>
        <a class=\"btn btn-primary\" href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("secure_post_new");
        echo "\">Create a new post</a>
    </div>
";
        
        $__internal_55e6b7dc0d019e54abe43a62a3aba5c62a4ac0dac767394850cb8ab63e993f0c->leave($__internal_55e6b7dc0d019e54abe43a62a3aba5c62a4ac0dac767394850cb8ab63e993f0c_prof);

        
        $__internal_5b695eefe16badec6972187f2c4483bde78755684b55ac5387a02fcb77c8ee97->leave($__internal_5b695eefe16badec6972187f2c4483bde78755684b55ac5387a02fcb77c8ee97_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Post:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 43,  118 => 38,  106 => 32,  100 => 29,  91 => 25,  87 => 24,  83 => 23,  79 => 22,  73 => 21,  70 => 20,  66 => 19,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'MainBundle::layout.html.twig' %}

{% block body %}
    <h1>Posts list</h1>

    <div class=\"table-responsive\">
        <table class=\"table table-hover\">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Subtitle</th>
                    <th>Author</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {% for post in posts %}
                <tr>
                    <td><a href=\"{{ path('secure_post_show', { 'id': post.id }) }}\">{{ post.id }}</a></td>
                    <td>{{ post.title }}</td>
                    <td>{{ post.subtitle }}</td>
                    <td>{{ post.author }}</td>
                    <td>{% if post.createdAt %}{{ post.createdAt|date('Y-m-d H:i:s') }}{% endif %}</td>
                    <td>
                        <ul>
                            <li>
                                <a href=\"{{ path('secure_post_show', { 'id': post.id }) }}\">show</a>
                            </li>
                            <li>
                                <a href=\"{{ path('secure_post_edit', { 'id': post.id }) }}\">edit</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>

    <div>
        <a class=\"btn btn-primary\" href=\"{{ path('secure_post_new') }}\">Create a new post</a>
    </div>
{% endblock %}
", "MainBundle:Post:index.html.twig", "/home/geek/Bureau/coulibalyblogtdsi/src/MainBundle/Resources/views/Post/index.html.twig");
    }
}
