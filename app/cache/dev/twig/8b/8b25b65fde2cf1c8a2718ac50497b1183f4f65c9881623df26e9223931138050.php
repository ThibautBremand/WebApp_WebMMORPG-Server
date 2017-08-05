<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_702989816653a1a85d143a928a6be2de59fc0e4b3619f696702b365afc9550ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_cf1b0bafdd780f99fbf8c3d41ec86f9fd63dcf1afe18aefdec7cf84b74759033 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf1b0bafdd780f99fbf8c3d41ec86f9fd63dcf1afe18aefdec7cf84b74759033->enter($__internal_cf1b0bafdd780f99fbf8c3d41ec86f9fd63dcf1afe18aefdec7cf84b74759033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf1b0bafdd780f99fbf8c3d41ec86f9fd63dcf1afe18aefdec7cf84b74759033->leave($__internal_cf1b0bafdd780f99fbf8c3d41ec86f9fd63dcf1afe18aefdec7cf84b74759033_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9cb301140675528facdda1fe5dc62618646edb331e8d1754cff99b3f7c9fed68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cb301140675528facdda1fe5dc62618646edb331e8d1754cff99b3f7c9fed68->enter($__internal_9cb301140675528facdda1fe5dc62618646edb331e8d1754cff99b3f7c9fed68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9cb301140675528facdda1fe5dc62618646edb331e8d1754cff99b3f7c9fed68->leave($__internal_9cb301140675528facdda1fe5dc62618646edb331e8d1754cff99b3f7c9fed68_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ec14ab6c021e81597587eb538a4a0acb12fea32c7c06755da1ccddbd97e9618d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec14ab6c021e81597587eb538a4a0acb12fea32c7c06755da1ccddbd97e9618d->enter($__internal_ec14ab6c021e81597587eb538a4a0acb12fea32c7c06755da1ccddbd97e9618d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ec14ab6c021e81597587eb538a4a0acb12fea32c7c06755da1ccddbd97e9618d->leave($__internal_ec14ab6c021e81597587eb538a4a0acb12fea32c7c06755da1ccddbd97e9618d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d3c752e5b63e36434455653673807bb756d2e5588111efad1c054800961484e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3c752e5b63e36434455653673807bb756d2e5588111efad1c054800961484e6->enter($__internal_d3c752e5b63e36434455653673807bb756d2e5588111efad1c054800961484e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_d3c752e5b63e36434455653673807bb756d2e5588111efad1c054800961484e6->leave($__internal_d3c752e5b63e36434455653673807bb756d2e5588111efad1c054800961484e6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "D:\\Git\\os-server\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
