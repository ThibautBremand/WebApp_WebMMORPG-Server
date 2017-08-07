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
        $__internal_fce6e0fc7d5f25e1becac185f207513122061bb2ed34b34f9726c2180e187e97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fce6e0fc7d5f25e1becac185f207513122061bb2ed34b34f9726c2180e187e97->enter($__internal_fce6e0fc7d5f25e1becac185f207513122061bb2ed34b34f9726c2180e187e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fce6e0fc7d5f25e1becac185f207513122061bb2ed34b34f9726c2180e187e97->leave($__internal_fce6e0fc7d5f25e1becac185f207513122061bb2ed34b34f9726c2180e187e97_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f7838dac212b26e42c3e958677b988076320693b8f48986abf5ec99d3b397b28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7838dac212b26e42c3e958677b988076320693b8f48986abf5ec99d3b397b28->enter($__internal_f7838dac212b26e42c3e958677b988076320693b8f48986abf5ec99d3b397b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f7838dac212b26e42c3e958677b988076320693b8f48986abf5ec99d3b397b28->leave($__internal_f7838dac212b26e42c3e958677b988076320693b8f48986abf5ec99d3b397b28_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0cc84f73f0f95edda155f65199925c490bd4f5b3cb7836653054438b9f6b19c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cc84f73f0f95edda155f65199925c490bd4f5b3cb7836653054438b9f6b19c6->enter($__internal_0cc84f73f0f95edda155f65199925c490bd4f5b3cb7836653054438b9f6b19c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0cc84f73f0f95edda155f65199925c490bd4f5b3cb7836653054438b9f6b19c6->leave($__internal_0cc84f73f0f95edda155f65199925c490bd4f5b3cb7836653054438b9f6b19c6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2c7ee09df1660dc5e19f639a6270dcca49974df6c816ef48e69ba04735f8cd8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c7ee09df1660dc5e19f639a6270dcca49974df6c816ef48e69ba04735f8cd8a->enter($__internal_2c7ee09df1660dc5e19f639a6270dcca49974df6c816ef48e69ba04735f8cd8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_2c7ee09df1660dc5e19f639a6270dcca49974df6c816ef48e69ba04735f8cd8a->leave($__internal_2c7ee09df1660dc5e19f639a6270dcca49974df6c816ef48e69ba04735f8cd8a_prof);

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
