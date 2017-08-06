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
        $__internal_b951f58565cec3fd30b6c485f1e69645156a9e780335fda4125e5b42263db1c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b951f58565cec3fd30b6c485f1e69645156a9e780335fda4125e5b42263db1c1->enter($__internal_b951f58565cec3fd30b6c485f1e69645156a9e780335fda4125e5b42263db1c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b951f58565cec3fd30b6c485f1e69645156a9e780335fda4125e5b42263db1c1->leave($__internal_b951f58565cec3fd30b6c485f1e69645156a9e780335fda4125e5b42263db1c1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b6399389cb9cb60b5a0015d7a6c40fd218a2d62994a6b3068819519fc385e9a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6399389cb9cb60b5a0015d7a6c40fd218a2d62994a6b3068819519fc385e9a4->enter($__internal_b6399389cb9cb60b5a0015d7a6c40fd218a2d62994a6b3068819519fc385e9a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b6399389cb9cb60b5a0015d7a6c40fd218a2d62994a6b3068819519fc385e9a4->leave($__internal_b6399389cb9cb60b5a0015d7a6c40fd218a2d62994a6b3068819519fc385e9a4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_be6dffbfeb5a7e1a33c7de9c8ba2471c7541374cb55ef2b3590877882f2c1ea3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be6dffbfeb5a7e1a33c7de9c8ba2471c7541374cb55ef2b3590877882f2c1ea3->enter($__internal_be6dffbfeb5a7e1a33c7de9c8ba2471c7541374cb55ef2b3590877882f2c1ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_be6dffbfeb5a7e1a33c7de9c8ba2471c7541374cb55ef2b3590877882f2c1ea3->leave($__internal_be6dffbfeb5a7e1a33c7de9c8ba2471c7541374cb55ef2b3590877882f2c1ea3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f06d4d0e66730eaabd9202aa80a164f90a67bd884dd7eed3227d2a75ef93f06e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f06d4d0e66730eaabd9202aa80a164f90a67bd884dd7eed3227d2a75ef93f06e->enter($__internal_f06d4d0e66730eaabd9202aa80a164f90a67bd884dd7eed3227d2a75ef93f06e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f06d4d0e66730eaabd9202aa80a164f90a67bd884dd7eed3227d2a75ef93f06e->leave($__internal_f06d4d0e66730eaabd9202aa80a164f90a67bd884dd7eed3227d2a75ef93f06e_prof);

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
