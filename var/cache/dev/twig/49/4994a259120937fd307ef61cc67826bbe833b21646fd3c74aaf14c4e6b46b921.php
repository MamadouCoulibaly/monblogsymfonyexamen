<?php

/* MainBundle:Default:index.html.twig */
class __TwigTemplate_d1f97c62c096ebb2426e49c69aa0e48414d115d578a89468fc75cf395a4a5896 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MainBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d42602d41d9cf174f13fb4e5d73b84f6eb38e6b7d5a5df2ccb9b080801494b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d42602d41d9cf174f13fb4e5d73b84f6eb38e6b7d5a5df2ccb9b080801494b5->enter($__internal_5d42602d41d9cf174f13fb4e5d73b84f6eb38e6b7d5a5df2ccb9b080801494b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Default:index.html.twig"));

        $__internal_d1bd7e802d4376c0f018a50c25e796985c809982a604b23fb21071cf41f38e19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1bd7e802d4376c0f018a50c25e796985c809982a604b23fb21071cf41f38e19->enter($__internal_d1bd7e802d4376c0f018a50c25e796985c809982a604b23fb21071cf41f38e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d42602d41d9cf174f13fb4e5d73b84f6eb38e6b7d5a5df2ccb9b080801494b5->leave($__internal_5d42602d41d9cf174f13fb4e5d73b84f6eb38e6b7d5a5df2ccb9b080801494b5_prof);

        
        $__internal_d1bd7e802d4376c0f018a50c25e796985c809982a604b23fb21071cf41f38e19->leave($__internal_d1bd7e802d4376c0f018a50c25e796985c809982a604b23fb21071cf41f38e19_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_081101c84ec1fe161e2362a636ec601cd17d34cc68c7bf3e538cbb5026b8be5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_081101c84ec1fe161e2362a636ec601cd17d34cc68c7bf3e538cbb5026b8be5c->enter($__internal_081101c84ec1fe161e2362a636ec601cd17d34cc68c7bf3e538cbb5026b8be5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_195c549d021500fb034023cbcbeed96729102ab07854fbda8c2c03d8400ff649 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_195c549d021500fb034023cbcbeed96729102ab07854fbda8c2c03d8400ff649->enter($__internal_195c549d021500fb034023cbcbeed96729102ab07854fbda8c2c03d8400ff649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style type=\"text/css\">
    div.post {
        background-color: white;
        box-shadow: 1px 1px 5px #b5b5b5;
        padding-left: 0px;
        padding-right: 0px;        
    }

    div.post-description {
        padding-left: 15px;
        padding-right: 15px;
    }

    div.post-container{
        margin-bottom:15px;
    }
    </style>
";
        
        $__internal_195c549d021500fb034023cbcbeed96729102ab07854fbda8c2c03d8400ff649->leave($__internal_195c549d021500fb034023cbcbeed96729102ab07854fbda8c2c03d8400ff649_prof);

        
        $__internal_081101c84ec1fe161e2362a636ec601cd17d34cc68c7bf3e538cbb5026b8be5c->leave($__internal_081101c84ec1fe161e2362a636ec601cd17d34cc68c7bf3e538cbb5026b8be5c_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_0cc23f53f3d1bf7b2ae2606483c93c1b17670e11645ee1ff54bacae535886464 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cc23f53f3d1bf7b2ae2606483c93c1b17670e11645ee1ff54bacae535886464->enter($__internal_0cc23f53f3d1bf7b2ae2606483c93c1b17670e11645ee1ff54bacae535886464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_453e8f211bb261a24fff48606a6705bbae0cf667cd413455c318ef8a474f12c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_453e8f211bb261a24fff48606a6705bbae0cf667cd413455c318ef8a474f12c4->enter($__internal_453e8f211bb261a24fff48606a6705bbae0cf667cd413455c318ef8a474f12c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 25
        echo "    <div class=\"row\">

        <!-- Blog Post Feed -->
        <div class=\"col-md-8\">
            ";
        // line 29
        if ((twig_length_filter($this->env, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new Twig_Error_Runtime('Variable "posts" does not exist.', 29, $this->getSourceContext()); })())) > 0)) {
            // line 30
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new Twig_Error_Runtime('Variable "posts" does not exist.', 30, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 31
                echo "                <div class=\"row post-container\">
                    <div class=\"col-md-12 post\">
                        <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("main_default_post", array("postCode" => twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "code", array()))), "html", null, true);
                echo "\">
                            <img src=\"";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "image", array()), "html", null, true);
                echo "\" style=\"width:100%\">
                        </a> 

                        <div class=\"post-description\">
                            <a href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("main_default_post", array("postCode" => twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "code", array()))), "html", null, true);
                echo "\">
                                <h3>";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "title", array()), "html", null, true);
                echo "</h3>
                            </a>
                            <span>
                                by 
                                <span>
                                    ";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "author", array()), "html", null, true);
                echo "
                                </span>
                            </span>
                            <span>
                                on 
                                <span>";
                // line 49
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "createdAt", array()), "F jS \\a\\t g:ia"), "html", null, true);
                echo "</span>
                            </span>
                            <span>with 
                                <a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("main_default_post", array("postCode" => twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "code", array()))), "html", null, true);
                echo "\">0 comments</a>
                            </span>
                            <p>";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "subtitle", array()), "html", null, true);
                echo "</p>
                        </div>
                    </div><!-- Text size -->
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "            ";
        } else {
            // line 60
            echo "                <h3>No results found</h3>
            ";
        }
        // line 62
        echo "        </div>

        <!-- Blog Sidebar Widgets Column -->
        <div class=\"col-md-4\">

            <!-- Blog Search Well -->
            <div class=\"well\">
                <h4>Blog Search</h4>
                ";
        // line 70
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("MainBundle:Default:search"));
        echo "
            </div>

            <!-- Blog Categories Well -->
            <div class=\"well\">
                <h4>Blog Categories</h4>
                <div class=\"row\">
                    ";
        // line 77
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("MainBundle:Default:categories"));
        echo "
                </div>
                <!-- /.row -->
            </div>

            <!-- Side Widget Well -->
            <div class=\"well\">
                <h4>Symfony3 Blog</h4>
                <p>Minimal blog application with basic features. This page is the blog news feed.</p>
            </div>

        </div>

    </div>
    <!-- /.row -->

    <hr>

    <!-- Footer -->
    <footer>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <p>Copyright &copy; Your Website 2017</p>
            </div>
        </div>
        <!-- /.row -->
    </footer>

";
        
        $__internal_453e8f211bb261a24fff48606a6705bbae0cf667cd413455c318ef8a474f12c4->leave($__internal_453e8f211bb261a24fff48606a6705bbae0cf667cd413455c318ef8a474f12c4_prof);

        
        $__internal_0cc23f53f3d1bf7b2ae2606483c93c1b17670e11645ee1ff54bacae535886464->leave($__internal_0cc23f53f3d1bf7b2ae2606483c93c1b17670e11645ee1ff54bacae535886464_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 77,  176 => 70,  166 => 62,  162 => 60,  159 => 59,  148 => 54,  143 => 52,  137 => 49,  129 => 44,  121 => 39,  117 => 38,  110 => 34,  106 => 33,  102 => 31,  97 => 30,  95 => 29,  89 => 25,  80 => 24,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <style type=\"text/css\">
    div.post {
        background-color: white;
        box-shadow: 1px 1px 5px #b5b5b5;
        padding-left: 0px;
        padding-right: 0px;        
    }

    div.post-description {
        padding-left: 15px;
        padding-right: 15px;
    }

    div.post-container{
        margin-bottom:15px;
    }
    </style>
{% endblock %}

{% block body %}
    <div class=\"row\">

        <!-- Blog Post Feed -->
        <div class=\"col-md-8\">
            {% if posts|length > 0 %}
                {% for post in posts %}
                <div class=\"row post-container\">
                    <div class=\"col-md-12 post\">
                        <a href=\"{{path('main_default_post', {'postCode' : post.code})}}\">
                            <img src=\"{{post.image}}\" style=\"width:100%\">
                        </a> 

                        <div class=\"post-description\">
                            <a href=\"{{path('main_default_post', {'postCode' : post.code})}}\">
                                <h3>{{post.title}}</h3>
                            </a>
                            <span>
                                by 
                                <span>
                                    {{post.author}}
                                </span>
                            </span>
                            <span>
                                on 
                                <span>{{ post.createdAt|date(\"F jS \\\\a\\\\t g:ia\") }}</span>
                            </span>
                            <span>with 
                                <a href=\"{{path('main_default_post', {'postCode' : post.code})}}\">0 comments</a>
                            </span>
                            <p>{{post.subtitle}}</p>
                        </div>
                    </div><!-- Text size -->
                </div>
                {% endfor %}
            {% else %}
                <h3>No results found</h3>
            {% endif %}
        </div>

        <!-- Blog Sidebar Widgets Column -->
        <div class=\"col-md-4\">

            <!-- Blog Search Well -->
            <div class=\"well\">
                <h4>Blog Search</h4>
                {{ render(  controller('MainBundle:Default:search')) }}
            </div>

            <!-- Blog Categories Well -->
            <div class=\"well\">
                <h4>Blog Categories</h4>
                <div class=\"row\">
                    {{ render(controller('MainBundle:Default:categories')) }}
                </div>
                <!-- /.row -->
            </div>

            <!-- Side Widget Well -->
            <div class=\"well\">
                <h4>Symfony3 Blog</h4>
                <p>Minimal blog application with basic features. This page is the blog news feed.</p>
            </div>

        </div>

    </div>
    <!-- /.row -->

    <hr>

    <!-- Footer -->
    <footer>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <p>Copyright &copy; Your Website 2017</p>
            </div>
        </div>
        <!-- /.row -->
    </footer>

{% endblock %}", "MainBundle:Default:index.html.twig", "/home/geek/Bureau/coulibalyblogtdsi/src/MainBundle/Resources/views/Default/index.html.twig");
    }
}
