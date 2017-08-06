<?php

/* OSGameBundle:Map:edit.html.twig */
class __TwigTemplate_6384d9f62c3213542dd8a076c64c7e90c00d49437133a1af954f86f1cbf209a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "OSGameBundle:Map:edit.html.twig", 1);
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
        $__internal_c156bf1c09f743aa48c16c991e26811fa7c78da81618b8ea367b0cf632d6681a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c156bf1c09f743aa48c16c991e26811fa7c78da81618b8ea367b0cf632d6681a->enter($__internal_c156bf1c09f743aa48c16c991e26811fa7c78da81618b8ea367b0cf632d6681a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OSGameBundle:Map:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c156bf1c09f743aa48c16c991e26811fa7c78da81618b8ea367b0cf632d6681a->leave($__internal_c156bf1c09f743aa48c16c991e26811fa7c78da81618b8ea367b0cf632d6681a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_280ad750808023bb75ac0bc2f8c24a251d26fe885e0030ee5e5dc0616889bf0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_280ad750808023bb75ac0bc2f8c24a251d26fe885e0030ee5e5dc0616889bf0f->enter($__internal_280ad750808023bb75ac0bc2f8c24a251d26fe885e0030ee5e5dc0616889bf0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Map edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 6, $this->getSourceContext()); })()), 'form');
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
    <li>";
        // line 14
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 14, $this->getSourceContext()); })()), 'form');
        echo "</li>
</ul>
";
        
        $__internal_280ad750808023bb75ac0bc2f8c24a251d26fe885e0030ee5e5dc0616889bf0f->leave($__internal_280ad750808023bb75ac0bc2f8c24a251d26fe885e0030ee5e5dc0616889bf0f_prof);

    }

    public function getTemplateName()
    {
        return "OSGameBundle:Map:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block body -%}
    <h1>Map edit</h1>

    {{ form(edit_form) }}

        <ul class=\"record_actions\">
    <li>
        <a href=\"{{ path('map') }}\">
            Back to the list
        </a>
    </li>
    <li>{{ form(delete_form) }}</li>
</ul>
{% endblock %}
", "OSGameBundle:Map:edit.html.twig", "D:\\Git\\os-server\\src\\OS\\GameBundle/Resources/views/Map/edit.html.twig");
    }
}
