<?php

/* OSGameBundle:Position:edit.html.twig */
class __TwigTemplate_694d7762aca7abc6db73c208057ae4c3519edb4f809ab044a8a258a8c384ac10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "OSGameBundle:Position:edit.html.twig", 1);
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
        $__internal_9c2b5e564ca7dc45976343a4a0d0b3f47a21d5ba541c9209e76d545d30d113e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c2b5e564ca7dc45976343a4a0d0b3f47a21d5ba541c9209e76d545d30d113e4->enter($__internal_9c2b5e564ca7dc45976343a4a0d0b3f47a21d5ba541c9209e76d545d30d113e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OSGameBundle:Position:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c2b5e564ca7dc45976343a4a0d0b3f47a21d5ba541c9209e76d545d30d113e4->leave($__internal_9c2b5e564ca7dc45976343a4a0d0b3f47a21d5ba541c9209e76d545d30d113e4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_43fcf84cec4524beac9054401bf90ccf2afcec53f1712f31cebb6df052c3a48b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43fcf84cec4524beac9054401bf90ccf2afcec53f1712f31cebb6df052c3a48b->enter($__internal_43fcf84cec4524beac9054401bf90ccf2afcec53f1712f31cebb6df052c3a48b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Position edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 6, $this->getSourceContext()); })()), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("position");
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
        
        $__internal_43fcf84cec4524beac9054401bf90ccf2afcec53f1712f31cebb6df052c3a48b->leave($__internal_43fcf84cec4524beac9054401bf90ccf2afcec53f1712f31cebb6df052c3a48b_prof);

    }

    public function getTemplateName()
    {
        return "OSGameBundle:Position:edit.html.twig";
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
    <h1>Position edit</h1>

    {{ form(edit_form) }}

        <ul class=\"record_actions\">
    <li>
        <a href=\"{{ path('position') }}\">
            Back to the list
        </a>
    </li>
    <li>{{ form(delete_form) }}</li>
</ul>
{% endblock %}
", "OSGameBundle:Position:edit.html.twig", "D:\\Git\\os-server\\src\\OS\\GameBundle/Resources/views/Position/edit.html.twig");
    }
}
