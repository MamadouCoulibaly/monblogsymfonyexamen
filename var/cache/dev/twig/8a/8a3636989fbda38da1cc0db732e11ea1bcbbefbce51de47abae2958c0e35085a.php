<?php

/* MainBundle:Security:login.html.twig */
class __TwigTemplate_eff0ead682eaf3cb276a8973e5b75728da59501b3097a81c9d883d09691f8f19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle::layout.html.twig", "MainBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MainBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d51e07adc9679b37047974fb96c5d163d71667f2387d02f678cb60cebe051c86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d51e07adc9679b37047974fb96c5d163d71667f2387d02f678cb60cebe051c86->enter($__internal_d51e07adc9679b37047974fb96c5d163d71667f2387d02f678cb60cebe051c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Security:login.html.twig"));

        $__internal_5786e0bdce8f314ebb7d75274b02fccfda6173d76a07360c135e5804766b30e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5786e0bdce8f314ebb7d75274b02fccfda6173d76a07360c135e5804766b30e4->enter($__internal_5786e0bdce8f314ebb7d75274b02fccfda6173d76a07360c135e5804766b30e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d51e07adc9679b37047974fb96c5d163d71667f2387d02f678cb60cebe051c86->leave($__internal_d51e07adc9679b37047974fb96c5d163d71667f2387d02f678cb60cebe051c86_prof);

        
        $__internal_5786e0bdce8f314ebb7d75274b02fccfda6173d76a07360c135e5804766b30e4->leave($__internal_5786e0bdce8f314ebb7d75274b02fccfda6173d76a07360c135e5804766b30e4_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_7b2d4bebb86622be0965113351c61dc9b87aaaa7c8e061fc20428b4ba968010c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b2d4bebb86622be0965113351c61dc9b87aaaa7c8e061fc20428b4ba968010c->enter($__internal_7b2d4bebb86622be0965113351c61dc9b87aaaa7c8e061fc20428b4ba968010c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_e0e914b22b744fd926650fc163701a743f6d769c96ada0aaa7d784f76536685b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0e914b22b744fd926650fc163701a743f6d769c96ada0aaa7d784f76536685b->enter($__internal_e0e914b22b744fd926650fc163701a743f6d769c96ada0aaa7d784f76536685b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("main_secure_index");
        echo "\">Symfony Blog Admin</a>
            </div>
        </div>
    </nav>
";
        
        $__internal_e0e914b22b744fd926650fc163701a743f6d769c96ada0aaa7d784f76536685b->leave($__internal_e0e914b22b744fd926650fc163701a743f6d769c96ada0aaa7d784f76536685b_prof);

        
        $__internal_7b2d4bebb86622be0965113351c61dc9b87aaaa7c8e061fc20428b4ba968010c->leave($__internal_7b2d4bebb86622be0965113351c61dc9b87aaaa7c8e061fc20428b4ba968010c_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_137c1199269fac9524aa1b1124b64eb74463ab85b302fe2007239de0fc31b21e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_137c1199269fac9524aa1b1124b64eb74463ab85b302fe2007239de0fc31b21e->enter($__internal_137c1199269fac9524aa1b1124b64eb74463ab85b302fe2007239de0fc31b21e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d7282c1151fde7c9d105a9ea2e75ef066b0c72db5f8874915324a9ab8e825e28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7282c1151fde7c9d105a9ea2e75ef066b0c72db5f8874915324a9ab8e825e28->enter($__internal_d7282c1151fde7c9d105a9ea2e75ef066b0c72db5f8874915324a9ab8e825e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "    ";
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 21, $this->getSourceContext()); })())) {
            // line 22
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 22, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 22, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 24
        echo "    <div class=\"jumbotron col-md-4\">
        <form class=\"form-signin\" action=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" method=\"post\">
            <h2 class=\"text-center\">Dashboard Area</h2>
            <label for=\"username\" class=\"sr-only\">Username</label>
            <input type=\"text\" id=\"username\" name=\"_username\" class=\"form-control\" placeholder=\"Username\" required=\"\" autofocus=\"\">
            
            <label for=\"password\" class=\"sr-only\">Password</label>
            <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Password\" required=\"\">
            <hr>
            <button class=\"btn btn-primary btn-block\" type=\"submit\">Sign in</button>
        </form>
    </div>
    <div class=\"jumbotron col-md-offset-1 col-md-7\">
        <h3>Try it out!</h4>
        <h4>You can connect to the admin section by using the credentials below:</p>
        <ul>
            <li>Admin user:
                <ul>
                    <li>Login - <strong>admin</strong></li>
                    <li>Password - <strong>admin</strong></li>
                </ul>
            </li>
        </ul>
    </div>
    <div class=\"col-md-12\">
        <a class=\"btn btn-default\" href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("main_default_index");
        echo "\">Go back</a>
    </div>
";
        
        $__internal_d7282c1151fde7c9d105a9ea2e75ef066b0c72db5f8874915324a9ab8e825e28->leave($__internal_d7282c1151fde7c9d105a9ea2e75ef066b0c72db5f8874915324a9ab8e825e28_prof);

        
        $__internal_137c1199269fac9524aa1b1124b64eb74463ab85b302fe2007239de0fc31b21e->leave($__internal_137c1199269fac9524aa1b1124b64eb74463ab85b302fe2007239de0fc31b21e_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 49,  97 => 25,  94 => 24,  88 => 22,  85 => 21,  76 => 20,  61 => 13,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'MainBundle::layout.html.twig' %}

{% block header %}
    <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"{{path('main_secure_index')}}\">Symfony Blog Admin</a>
            </div>
        </div>
    </nav>
{% endblock %}


{% block body %}
    {% if error %}
        <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}
    <div class=\"jumbotron col-md-4\">
        <form class=\"form-signin\" action=\"{{ path('login') }}\" method=\"post\">
            <h2 class=\"text-center\">Dashboard Area</h2>
            <label for=\"username\" class=\"sr-only\">Username</label>
            <input type=\"text\" id=\"username\" name=\"_username\" class=\"form-control\" placeholder=\"Username\" required=\"\" autofocus=\"\">
            
            <label for=\"password\" class=\"sr-only\">Password</label>
            <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Password\" required=\"\">
            <hr>
            <button class=\"btn btn-primary btn-block\" type=\"submit\">Sign in</button>
        </form>
    </div>
    <div class=\"jumbotron col-md-offset-1 col-md-7\">
        <h3>Try it out!</h4>
        <h4>You can connect to the admin section by using the credentials below:</p>
        <ul>
            <li>Admin user:
                <ul>
                    <li>Login - <strong>admin</strong></li>
                    <li>Password - <strong>admin</strong></li>
                </ul>
            </li>
        </ul>
    </div>
    <div class=\"col-md-12\">
        <a class=\"btn btn-default\" href=\"{{path('main_default_index')}}\">Go back</a>
    </div>
{% endblock %}


", "MainBundle:Security:login.html.twig", "/home/geek/Bureau/coulibalyblogtdsi/src/MainBundle/Resources/views/Security/login.html.twig");
    }
}
