<?php

/* OSGameBundle:Chars:show.html.twig */
class __TwigTemplate_c21bfdedb313bd30907f42db1e8b69134da9269199d7e77d43b7ed5bd79bb44b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "OSGameBundle:Chars:show.html.twig", 1);
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
        $__internal_368c0ea112922ad5242d6da8bfecab3208df40d60ff94d1824c21d8fc5e5bad9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_368c0ea112922ad5242d6da8bfecab3208df40d60ff94d1824c21d8fc5e5bad9->enter($__internal_368c0ea112922ad5242d6da8bfecab3208df40d60ff94d1824c21d8fc5e5bad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OSGameBundle:Chars:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_368c0ea112922ad5242d6da8bfecab3208df40d60ff94d1824c21d8fc5e5bad9->leave($__internal_368c0ea112922ad5242d6da8bfecab3208df40d60ff94d1824c21d8fc5e5bad9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_49edf914d6225c6f5634628fa9813fa2023db13a8fa2f6509c297987f4ba1c34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49edf914d6225c6f5634628fa9813fa2023db13a8fa2f6509c297987f4ba1c34->enter($__internal_49edf914d6225c6f5634628fa9813fa2023db13a8fa2f6509c297987f4ba1c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Chars</h1>

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
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 14, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Position</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 18, $this->getSourceContext()); })()), "position", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chars_choose_char");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chars_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 30, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 34
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 34, $this->getSourceContext()); })()), 'form');
        echo "</li>
</ul>
";
        
        $__internal_49edf914d6225c6f5634628fa9813fa2023db13a8fa2f6509c297987f4ba1c34->leave($__internal_49edf914d6225c6f5634628fa9813fa2023db13a8fa2f6509c297987f4ba1c34_prof);

    }

    public function getTemplateName()
    {
        return "OSGameBundle:Chars:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 34,  80 => 30,  72 => 25,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block body -%}
    <h1>Chars</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ entity.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ entity.name }}</td>
            </tr>
            <tr>
                <th>Position</th>
                <td>{{ entity.position }}</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"{{ path('chars_choose_char') }}\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"{{ path('chars_edit', { 'id': entity.id }) }}\">
            Edit
        </a>
    </li>
    <li>{{ form(delete_form) }}</li>
</ul>
{% endblock %}
", "OSGameBundle:Chars:show.html.twig", "D:\\Git\\os-server\\src\\OS\\GameBundle/Resources/views/Chars/show.html.twig");
    }
}
