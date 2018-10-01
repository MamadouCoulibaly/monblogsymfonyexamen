<?php

/* ::base.html.twig */
class __TwigTemplate_0513215cbf60f231ef19014a56543a8601d6c5708de7d4b309f8c620cb464194 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d665906344d34fbbf4f9ebf0b6cd46c3053d16f609c881324e362be80a7a6b84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d665906344d34fbbf4f9ebf0b6cd46c3053d16f609c881324e362be80a7a6b84->enter($__internal_d665906344d34fbbf4f9ebf0b6cd46c3053d16f609c881324e362be80a7a6b84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_62ebe7d07f1db26b53d562c10699dd6385e28060799c887a1109d56319126982 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62ebe7d07f1db26b53d562c10699dd6385e28060799c887a1109d56319126982->enter($__internal_62ebe7d07f1db26b53d562c10699dd6385e28060799c887a1109d56319126982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "        <style type=\"text/css\">
            body {
                background-color: #f9f9f9;
            }
        </style>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 23
        $this->displayBlock('header', $context, $blocks);
        // line 59
        echo "        <div class=\"container\">
            ";
        // line 60
        $this->displayBlock('body', $context, $blocks);
        // line 61
        echo "        </div>
        ";
        // line 62
        $this->displayBlock('javascripts', $context, $blocks);
        // line 68
        echo "    </body>
</html>
";
        
        $__internal_d665906344d34fbbf4f9ebf0b6cd46c3053d16f609c881324e362be80a7a6b84->leave($__internal_d665906344d34fbbf4f9ebf0b6cd46c3053d16f609c881324e362be80a7a6b84_prof);

        
        $__internal_62ebe7d07f1db26b53d562c10699dd6385e28060799c887a1109d56319126982->leave($__internal_62ebe7d07f1db26b53d562c10699dd6385e28060799c887a1109d56319126982_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e4e735bd5ab040ceee9da401460797f28039b5a9b255e7b850c5656ff0d3d720 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4e735bd5ab040ceee9da401460797f28039b5a9b255e7b850c5656ff0d3d720->enter($__internal_e4e735bd5ab040ceee9da401460797f28039b5a9b255e7b850c5656ff0d3d720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b987ffc2523695f696c008eeffc8ed3021bebec46f937acaf49f9a4484be64f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b987ffc2523695f696c008eeffc8ed3021bebec46f937acaf49f9a4484be64f5->enter($__internal_b987ffc2523695f696c008eeffc8ed3021bebec46f937acaf49f9a4484be64f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony Blog";
        
        $__internal_b987ffc2523695f696c008eeffc8ed3021bebec46f937acaf49f9a4484be64f5->leave($__internal_b987ffc2523695f696c008eeffc8ed3021bebec46f937acaf49f9a4484be64f5_prof);

        
        $__internal_e4e735bd5ab040ceee9da401460797f28039b5a9b255e7b850c5656ff0d3d720->leave($__internal_e4e735bd5ab040ceee9da401460797f28039b5a9b255e7b850c5656ff0d3d720_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ae9cad3cb8ee6d396b667fa79f6ca0688a7f8b871c2a1c1d7c3b2d6839d9d4de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae9cad3cb8ee6d396b667fa79f6ca0688a7f8b871c2a1c1d7c3b2d6839d9d4de->enter($__internal_ae9cad3cb8ee6d396b667fa79f6ca0688a7f8b871c2a1c1d7c3b2d6839d9d4de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_efee509375a3f7a777ac2f642e3497dc9ae7d2da34660b4bb33aac9ae8745910 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efee509375a3f7a777ac2f642e3497dc9ae7d2da34660b4bb33aac9ae8745910->enter($__internal_efee509375a3f7a777ac2f642e3497dc9ae7d2da34660b4bb33aac9ae8745910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "0e91381_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_0e91381_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/0e91381_bootstrap.min_1.css");
            // line 12
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 12, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />
            ";
            // asset "0e91381_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_0e91381_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/0e91381_blog-post_2.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 12, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />
            ";
        } else {
            // asset "0e91381"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_0e91381") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/0e91381.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 12, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />
            ";
        }
        unset($context["asset_url"]);
        // line 14
        echo "        ";
        
        $__internal_efee509375a3f7a777ac2f642e3497dc9ae7d2da34660b4bb33aac9ae8745910->leave($__internal_efee509375a3f7a777ac2f642e3497dc9ae7d2da34660b4bb33aac9ae8745910_prof);

        
        $__internal_ae9cad3cb8ee6d396b667fa79f6ca0688a7f8b871c2a1c1d7c3b2d6839d9d4de->leave($__internal_ae9cad3cb8ee6d396b667fa79f6ca0688a7f8b871c2a1c1d7c3b2d6839d9d4de_prof);

    }

    // line 23
    public function block_header($context, array $blocks = array())
    {
        $__internal_58bdeb30688f1316e1190bcbe761dde0b1b5eea82552b0094ed9f61d0c588321 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58bdeb30688f1316e1190bcbe761dde0b1b5eea82552b0094ed9f61d0c588321->enter($__internal_58bdeb30688f1316e1190bcbe761dde0b1b5eea82552b0094ed9f61d0c588321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_201da28d3d9650ed5963feedd3d1a1120aad70bd024ab32740e7bc0c49059cd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_201da28d3d9650ed5963feedd3d1a1120aad70bd024ab32740e7bc0c49059cd1->enter($__internal_201da28d3d9650ed5963feedd3d1a1120aad70bd024ab32740e7bc0c49059cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 24
        echo "            <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
                <div class=\"container\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("main_default_index");
        echo "\">Symfony Blog</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav\">
                            <li>
                                <a href=\"#\">About</a>
                            </li>
                            <li>
                                <a href=\"#\">Services</a>
                            </li>
                            <li>
                                <a href=\"#\">Contact</a>
                            </li>
                        </ul>

                        <ul class=\"nav navbar-nav navbar-right\">
                            <li><a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("main_secure_index");
        echo "\">Login <span class=\"glyphicon glyphicon-log-in\" aria-hidden=\"true\"></span></a></li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container -->
            </nav>
        ";
        
        $__internal_201da28d3d9650ed5963feedd3d1a1120aad70bd024ab32740e7bc0c49059cd1->leave($__internal_201da28d3d9650ed5963feedd3d1a1120aad70bd024ab32740e7bc0c49059cd1_prof);

        
        $__internal_58bdeb30688f1316e1190bcbe761dde0b1b5eea82552b0094ed9f61d0c588321->leave($__internal_58bdeb30688f1316e1190bcbe761dde0b1b5eea82552b0094ed9f61d0c588321_prof);

    }

    // line 60
    public function block_body($context, array $blocks = array())
    {
        $__internal_569e2dc68fb4b778d34198b0e4c42b050eabebb68d78d4d6846e66d8d9273bf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_569e2dc68fb4b778d34198b0e4c42b050eabebb68d78d4d6846e66d8d9273bf1->enter($__internal_569e2dc68fb4b778d34198b0e4c42b050eabebb68d78d4d6846e66d8d9273bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_655487206fd2a738af4de7ed8e6dcf2d4f2df5296f7be691e15b57db67343777 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_655487206fd2a738af4de7ed8e6dcf2d4f2df5296f7be691e15b57db67343777->enter($__internal_655487206fd2a738af4de7ed8e6dcf2d4f2df5296f7be691e15b57db67343777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_655487206fd2a738af4de7ed8e6dcf2d4f2df5296f7be691e15b57db67343777->leave($__internal_655487206fd2a738af4de7ed8e6dcf2d4f2df5296f7be691e15b57db67343777_prof);

        
        $__internal_569e2dc68fb4b778d34198b0e4c42b050eabebb68d78d4d6846e66d8d9273bf1->leave($__internal_569e2dc68fb4b778d34198b0e4c42b050eabebb68d78d4d6846e66d8d9273bf1_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_818c30f7bc7aeb3050496fee3a8aced46afdca190157bde181a46131b5c9bf9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_818c30f7bc7aeb3050496fee3a8aced46afdca190157bde181a46131b5c9bf9b->enter($__internal_818c30f7bc7aeb3050496fee3a8aced46afdca190157bde181a46131b5c9bf9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0bc728becd6b07f8a378b01707be325214565dd679dffcadef29eaa70e7677f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bc728becd6b07f8a378b01707be325214565dd679dffcadef29eaa70e7677f6->enter($__internal_0bc728becd6b07f8a378b01707be325214565dd679dffcadef29eaa70e7677f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 63
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "0a9d38c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_0a9d38c_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/0a9d38c_jquery_1.js");
            // line 65
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 65, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
            ";
            // asset "0a9d38c_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_0a9d38c_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/0a9d38c_bootstrap.min_2.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 65, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "0a9d38c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_0a9d38c") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/0a9d38c.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) || array_key_exists("asset_url", $context) ? $context["asset_url"] : (function () { throw new Twig_Error_Runtime('Variable "asset_url" does not exist.', 65, $this->getSourceContext()); })()), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 67
        echo "        ";
        
        $__internal_0bc728becd6b07f8a378b01707be325214565dd679dffcadef29eaa70e7677f6->leave($__internal_0bc728becd6b07f8a378b01707be325214565dd679dffcadef29eaa70e7677f6_prof);

        
        $__internal_818c30f7bc7aeb3050496fee3a8aced46afdca190157bde181a46131b5c9bf9b->leave($__internal_818c30f7bc7aeb3050496fee3a8aced46afdca190157bde181a46131b5c9bf9b_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 67,  233 => 65,  228 => 63,  219 => 62,  202 => 60,  184 => 51,  164 => 34,  152 => 24,  143 => 23,  133 => 14,  113 => 12,  108 => 9,  99 => 8,  81 => 5,  69 => 68,  67 => 62,  64 => 61,  62 => 60,  59 => 59,  57 => 23,  51 => 20,  44 => 15,  42 => 8,  36 => 5,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Symfony Blog{% endblock %}</title>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        {% block stylesheets %}
            {% stylesheets  'bundles/main/css/bootstrap.min.css' 
                            'bundles/main/css/blog-post.css'
            filter='cssrewrite' %}
                <link rel=\"stylesheet\" href=\"{{ asset_url }}\" />
            {% endstylesheets %}
        {% endblock %}
        <style type=\"text/css\">
            body {
                background-color: #f9f9f9;
            }
        </style>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block header %}
            <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
                <div class=\"container\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"{{path('main_default_index')}}\">Symfony Blog</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav\">
                            <li>
                                <a href=\"#\">About</a>
                            </li>
                            <li>
                                <a href=\"#\">Services</a>
                            </li>
                            <li>
                                <a href=\"#\">Contact</a>
                            </li>
                        </ul>

                        <ul class=\"nav navbar-nav navbar-right\">
                            <li><a href=\"{{path('main_secure_index')}}\">Login <span class=\"glyphicon glyphicon-log-in\" aria-hidden=\"true\"></span></a></li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container -->
            </nav>
        {% endblock %}
        <div class=\"container\">
            {% block body %}{% endblock %}
        </div>
        {% block javascripts %}
            {% javascripts  '@MainBundle/Resources/public/js/jquery.js'
                            '@MainBundle/Resources/public/js/bootstrap.min.js' %}
                <script src=\"{{ asset_url }}\"></script>
            {% endjavascripts %}
        {% endblock %}
    </body>
</html>
", "::base.html.twig", "/home/geek/Bureau/coulibalyblogtdsi/app/Resources/views/base.html.twig");
    }
}
