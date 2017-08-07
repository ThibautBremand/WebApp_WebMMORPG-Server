<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_18c2c8179e09f18506928ec4bc2ff9394ec6be783d3d89af416592726aebead2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3213102ec704de210197f95e429f3d4d306d24551149cf14f8f84988fcd352f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3213102ec704de210197f95e429f3d4d306d24551149cf14f8f84988fcd352f8->enter($__internal_3213102ec704de210197f95e429f3d4d306d24551149cf14f8f84988fcd352f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3213102ec704de210197f95e429f3d4d306d24551149cf14f8f84988fcd352f8->leave($__internal_3213102ec704de210197f95e429f3d4d306d24551149cf14f8f84988fcd352f8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_767d6867d1d2182470503459ebf3624b60a260c6b2927601efac5235a70fdb2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_767d6867d1d2182470503459ebf3624b60a260c6b2927601efac5235a70fdb2c->enter($__internal_767d6867d1d2182470503459ebf3624b60a260c6b2927601efac5235a70fdb2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_767d6867d1d2182470503459ebf3624b60a260c6b2927601efac5235a70fdb2c->leave($__internal_767d6867d1d2182470503459ebf3624b60a260c6b2927601efac5235a70fdb2c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3112320931ba6d2a0e7f46af389681883d963547baad8d4a46ebd1646d722e5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3112320931ba6d2a0e7f46af389681883d963547baad8d4a46ebd1646d722e5e->enter($__internal_3112320931ba6d2a0e7f46af389681883d963547baad8d4a46ebd1646d722e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_3112320931ba6d2a0e7f46af389681883d963547baad8d4a46ebd1646d722e5e->leave($__internal_3112320931ba6d2a0e7f46af389681883d963547baad8d4a46ebd1646d722e5e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8069ddcca032886ae13a8d579f93a5fdcc278cd1a36a82e3e63a3367a072bc84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8069ddcca032886ae13a8d579f93a5fdcc278cd1a36a82e3e63a3367a072bc84->enter($__internal_8069ddcca032886ae13a8d579f93a5fdcc278cd1a36a82e3e63a3367a072bc84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8069ddcca032886ae13a8d579f93a5fdcc278cd1a36a82e3e63a3367a072bc84->leave($__internal_8069ddcca032886ae13a8d579f93a5fdcc278cd1a36a82e3e63a3367a072bc84_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "D:\\Git\\os-server\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
