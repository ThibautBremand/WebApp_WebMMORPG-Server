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
        $__internal_4b6053392228364fd14da8c49ff930614bd2c3f40ab240ef211069dfb1d49885 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b6053392228364fd14da8c49ff930614bd2c3f40ab240ef211069dfb1d49885->enter($__internal_4b6053392228364fd14da8c49ff930614bd2c3f40ab240ef211069dfb1d49885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b6053392228364fd14da8c49ff930614bd2c3f40ab240ef211069dfb1d49885->leave($__internal_4b6053392228364fd14da8c49ff930614bd2c3f40ab240ef211069dfb1d49885_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c6b49d1af456692b7b14f5a9c4f60ea1d63388e8146e03f102a856127ee8e8c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6b49d1af456692b7b14f5a9c4f60ea1d63388e8146e03f102a856127ee8e8c1->enter($__internal_c6b49d1af456692b7b14f5a9c4f60ea1d63388e8146e03f102a856127ee8e8c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c6b49d1af456692b7b14f5a9c4f60ea1d63388e8146e03f102a856127ee8e8c1->leave($__internal_c6b49d1af456692b7b14f5a9c4f60ea1d63388e8146e03f102a856127ee8e8c1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6baa9bcb9e4ff0a7e26ece7f6461887254a80013a99ce896782e3f23d4099d76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6baa9bcb9e4ff0a7e26ece7f6461887254a80013a99ce896782e3f23d4099d76->enter($__internal_6baa9bcb9e4ff0a7e26ece7f6461887254a80013a99ce896782e3f23d4099d76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6baa9bcb9e4ff0a7e26ece7f6461887254a80013a99ce896782e3f23d4099d76->leave($__internal_6baa9bcb9e4ff0a7e26ece7f6461887254a80013a99ce896782e3f23d4099d76_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a3f4d54a7d03ef5b22d35b2ac0d47e66c03f06d6e534ea093a9902c213176321 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3f4d54a7d03ef5b22d35b2ac0d47e66c03f06d6e534ea093a9902c213176321->enter($__internal_a3f4d54a7d03ef5b22d35b2ac0d47e66c03f06d6e534ea093a9902c213176321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_a3f4d54a7d03ef5b22d35b2ac0d47e66c03f06d6e534ea093a9902c213176321->leave($__internal_a3f4d54a7d03ef5b22d35b2ac0d47e66c03f06d6e534ea093a9902c213176321_prof);

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
