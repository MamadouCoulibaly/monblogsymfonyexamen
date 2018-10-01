<?php

/* MainBundle:Default:categories.html.twig */
class __TwigTemplate_4989398dbebe9a8fb6fcce81058fad509a90d7e5215218927ac7a1556e49ad36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b84b6add7b262c70c9f69acbdb1ff427899f409a7f31d1fccfcc7a8bb3eecff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b84b6add7b262c70c9f69acbdb1ff427899f409a7f31d1fccfcc7a8bb3eecff->enter($__internal_8b84b6add7b262c70c9f69acbdb1ff427899f409a7f31d1fccfcc7a8bb3eecff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Default:categories.html.twig"));

        $__internal_2fd53962a0c51bc219bd9423f525ebbacdd01443dfa19e2ae085bdbff26fc151 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fd53962a0c51bc219bd9423f525ebbacdd01443dfa19e2ae085bdbff26fc151->enter($__internal_2fd53962a0c51bc219bd9423f525ebbacdd01443dfa19e2ae085bdbff26fc151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:Default:categories.html.twig"));

        // line 1
        echo "<div class=\"col-lg-6\">
    <ul class=\"list-unstyled\">
    \t<li><a href=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("main_default_index");
        echo "\">All</a></li>
\t\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new Twig_Error_Runtime('Variable "categories" does not exist.', 4, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 5
            echo "\t\t    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("main_default_index_1", array("categoryCode" => twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "code", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["category"], "name", array()), "html", null, true);
            echo "</a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "    </ul>
</div>";
        
        $__internal_8b84b6add7b262c70c9f69acbdb1ff427899f409a7f31d1fccfcc7a8bb3eecff->leave($__internal_8b84b6add7b262c70c9f69acbdb1ff427899f409a7f31d1fccfcc7a8bb3eecff_prof);

        
        $__internal_2fd53962a0c51bc219bd9423f525ebbacdd01443dfa19e2ae085bdbff26fc151->leave($__internal_2fd53962a0c51bc219bd9423f525ebbacdd01443dfa19e2ae085bdbff26fc151_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:Default:categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 7,  37 => 5,  33 => 4,  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-lg-6\">
    <ul class=\"list-unstyled\">
    \t<li><a href=\"{{path('main_default_index')}}\">All</a></li>
\t\t{% for category in categories %}
\t\t    <li><a href=\"{{path('main_default_index_1', {'categoryCode': category.code})}}\">{{category.name}}</a></li>
\t\t{% endfor %}
    </ul>
</div>", "MainBundle:Default:categories.html.twig", "/home/geek/Bureau/coulibalyblogtdsi/src/MainBundle/Resources/views/Default/categories.html.twig");
    }
}
