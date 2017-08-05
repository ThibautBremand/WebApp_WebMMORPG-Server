<?php

/* OSGameBundle:Map:show.html.twig */
class __TwigTemplate_693f437b563e4674af19683d65c7f806acae756514e16239b5aac9305ba39999 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "OSGameBundle:Map:show.html.twig", 1);
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
        $__internal_b47f7ce3b3c9a90e7d16e815e2a36f64d832bf5db7748b9af2777a8110a1caa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b47f7ce3b3c9a90e7d16e815e2a36f64d832bf5db7748b9af2777a8110a1caa4->enter($__internal_b47f7ce3b3c9a90e7d16e815e2a36f64d832bf5db7748b9af2777a8110a1caa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OSGameBundle:Map:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b47f7ce3b3c9a90e7d16e815e2a36f64d832bf5db7748b9af2777a8110a1caa4->leave($__internal_b47f7ce3b3c9a90e7d16e815e2a36f64d832bf5db7748b9af2777a8110a1caa4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fec32025ef450cc20156f82d0cc9907f736c050c3d5811aa68ff17f934645399 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fec32025ef450cc20156f82d0cc9907f736c050c3d5811aa68ff17f934645399->enter($__internal_fec32025ef450cc20156f82d0cc9907f736c050c3d5811aa68ff17f934645399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Map</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 10, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Code</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 14, $this->getSourceContext()); })()), "code", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Json</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 18, $this->getSourceContext()); })()), "json", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Bgmusic</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 22, $this->getSourceContext()); })()), "bgMusic", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("map");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("map_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 34, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 38
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 38, $this->getSourceContext()); })()), 'form');
        echo "</li>
</ul>
";
        
        $__internal_fec32025ef450cc20156f82d0cc9907f736c050c3d5811aa68ff17f934645399->leave($__internal_fec32025ef450cc20156f82d0cc9907f736c050c3d5811aa68ff17f934645399_prof);

    }

    public function getTemplateName()
    {
        return "OSGameBundle:Map:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 38,  87 => 34,  79 => 29,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block body -%}
    <h1>Map</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ entity.id }}</td>
            </tr>
            <tr>
                <th>Code</th>
                <td>{{ entity.code }}</td>
            </tr>
            <tr>
                <th>Json</th>
                <td>{{ entity.json }}</td>
            </tr>
            <tr>
                <th>Bgmusic</th>
                <td>{{ entity.bgMusic }}</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"{{ path('map') }}\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"{{ path('map_edit', { 'id': entity.id }) }}\">
            Edit
        </a>
    </li>
    <li>{{ form(delete_form) }}</li>
</ul>
{% endblock %}
", "OSGameBundle:Map:show.html.twig", "D:\\Git\\os-server\\src\\OS\\GameBundle/Resources/views/Map/show.html.twig");
    }
}
