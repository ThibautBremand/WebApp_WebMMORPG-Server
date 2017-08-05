<?php

/* OSGameBundle:Map:new.html.twig */
class __TwigTemplate_3411a493aa614eed290fd950f68e730e0880e70169e71dc465ac09fbaf15fd78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "OSGameBundle:Map:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b5e94985847a43df39703390f8f752edd41ef8a1ba9fa49ba4a8d4add6fbf77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b5e94985847a43df39703390f8f752edd41ef8a1ba9fa49ba4a8d4add6fbf77->enter($__internal_5b5e94985847a43df39703390f8f752edd41ef8a1ba9fa49ba4a8d4add6fbf77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OSGameBundle:Map:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b5e94985847a43df39703390f8f752edd41ef8a1ba9fa49ba4a8d4add6fbf77->leave($__internal_5b5e94985847a43df39703390f8f752edd41ef8a1ba9fa49ba4a8d4add6fbf77_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_95208be68d8f61fc75bb346bb4c3bcae8ca8e333e8a751c5a970f7b7c820a20e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95208be68d8f61fc75bb346bb4c3bcae8ca8e333e8a751c5a970f7b7c820a20e->enter($__internal_95208be68d8f61fc75bb346bb4c3bcae8ca8e333e8a751c5a970f7b7c820a20e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Map creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("map");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
        
        $__internal_95208be68d8f61fc75bb346bb4c3bcae8ca8e333e8a751c5a970f7b7c820a20e->leave($__internal_95208be68d8f61fc75bb346bb4c3bcae8ca8e333e8a751c5a970f7b7c820a20e_prof);

    }

    public function getTemplateName()
    {
        return "OSGameBundle:Map:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block body -%}
    <h1>Map creation</h1>

    {{ form(form) }}

        <ul class=\"record_actions\">
    <li>
        <a href=\"{{ path('map') }}\">
            Back to the list
        </a>
    </li>
</ul>
{% endblock %}
", "OSGameBundle:Map:new.html.twig", "D:\\Git\\os-server\\src\\OS\\GameBundle/Resources/views/Map/new.html.twig");
    }
}
