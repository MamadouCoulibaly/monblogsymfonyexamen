<?php

/* MainBundle:Comment:index.html.twig */
class __TwigTemplate_395ffa3ee349a1d045f98a6e4d91576ca634d9680ccfb1efd064d6433e9c332e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle::layout.html.twig", "MainBundle:Comment:index.html.twig", 1);
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
        $__internal_5931d66324eb93e53b3b48666bc64bded204ac2af8b1d0d17af507456a76446c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5931d66324eb93e53b3b48666bc64bded204ac2af8b1d0d17af507456a76446c->enter($__internal_5931d66324eb93e53b3b48666bc64bded204ac2af8b1d0d17af507456a76446c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Comment:index.html.twig"));

        $__internal_e6cf688fa6e3c0d44039daddd8d4dc2f07909e23a514275beef56107b7a62816 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6cf688fa6e3c0d44039daddd8d4dc2f07909e23a514275beef56107b7a62816->enter($__internal_e6cf688fa6e3c0d44039daddd8d4dc2f07909e23a514275beef56107b7a62816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Comment:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5931d66324eb93e53b3b48666bc64bded204ac2af8b1d0d17af507456a76446c->leave($__internal_5931d66324eb93e53b3b48666bc64bded204ac2af8b1d0d17af507456a76446c_prof);

        
        $__internal_e6cf688fa6e3c0d44039daddd8d4dc2f07909e23a514275beef56107b7a62816->leave($__internal_e6cf688fa6e3c0d44039daddd8d4dc2f07909e23a514275beef56107b7a62816_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8305d92be9801df2539647b90115d18782ba961a9a60ce0f68aceafba840ed70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8305d92be9801df2539647b90115d18782ba961a9a60ce0f68aceafba840ed70->enter($__internal_8305d92be9801df2539647b90115d18782ba961a9a60ce0f68aceafba840ed70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aa8bc1238e8efe62d0d2f39ac8dc0b28d78c9518e8cdced3d94f0c01fd52b6d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa8bc1238e8efe62d0d2f39ac8dc0b28d78c9518e8cdced3d94f0c01fd52b6d8->enter($__internal_aa8bc1238e8efe62d0d2f39ac8dc0b28d78c9518e8cdced3d94f0c01fd52b6d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Comments list</h1>

    <div class=\"table-responsive\">
        <table class=\"table table-hover\">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Comment</th>
                    <th>Approved</th>
                    <th>User</th>
                    <th>Created at</th>
                    <th>Response</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new Twig_Error_Runtime('Variable "comments" does not exist.', 20, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 21
            echo "                <tr>
                    <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("secure_comment_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "id", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "comment", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 24
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "approved", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "user", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 26
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "createdAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "response", array()), "html", null, true);
            echo "</td>
                    <td>
                        <ul>
                            <li>
                                <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("secure_comment_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "id", array()))), "html", null, true);
            echo "\">show</a>
                            </li>
                            <li>
                                <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("secure_comment_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["comment"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "            </tbody>
        </table>
    </div>
    <div>
        <a class=\"btn btn-primary\" href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("secure_comment_new");
        echo "\">Create a new comment</a>
    </div>
";
        
        $__internal_aa8bc1238e8efe62d0d2f39ac8dc0b28d78c9518e8cdced3d94f0c01fd52b6d8->leave($__internal_aa8bc1238e8efe62d0d2f39ac8dc0b28d78c9518e8cdced3d94f0c01fd52b6d8_prof);

        
        $__internal_8305d92be9801df2539647b90115d18782ba961a9a60ce0f68aceafba840ed70->leave($__internal_8305d92be9801df2539647b90115d18782ba961a9a60ce0f68aceafba840ed70_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Comment:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 44,  127 => 40,  115 => 34,  109 => 31,  102 => 27,  96 => 26,  92 => 25,  84 => 24,  80 => 23,  74 => 22,  71 => 21,  67 => 20,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'MainBundle::layout.html.twig' %}

{% block body %}
    <h1>Comments list</h1>

    <div class=\"table-responsive\">
        <table class=\"table table-hover\">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Comment</th>
                    <th>Approved</th>
                    <th>User</th>
                    <th>Created at</th>
                    <th>Response</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {% for comment in comments %}
                <tr>
                    <td><a href=\"{{ path('secure_comment_show', { 'id': comment.id }) }}\">{{ comment.id }}</a></td>
                    <td>{{ comment.comment }}</td>
                    <td>{% if comment.approved %}Yes{% else %}No{% endif %}</td>
                    <td>{{ comment.user }}</td>
                    <td>{% if comment.createdAt %}{{ comment.createdAt|date('Y-m-d H:i:s') }}{% endif %}</td>
                    <td>{{ comment.response }}</td>
                    <td>
                        <ul>
                            <li>
                                <a href=\"{{ path('secure_comment_show', { 'id': comment.id }) }}\">show</a>
                            </li>
                            <li>
                                <a href=\"{{ path('secure_comment_edit', { 'id': comment.id }) }}\">edit</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
    <div>
        <a class=\"btn btn-primary\" href=\"{{ path('secure_comment_new') }}\">Create a new comment</a>
    </div>
{% endblock %}
", "MainBundle:Comment:index.html.twig", "/home/geek/Bureau/coulibalyblogtdsi/src/MainBundle/Resources/views/Comment/index.html.twig");
    }
}
