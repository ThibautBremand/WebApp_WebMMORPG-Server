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
        $__internal_a50c25d7a52cace49346f894774b57d733cc76f7a83c441b7ebfc3bab1741c45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a50c25d7a52cace49346f894774b57d733cc76f7a83c441b7ebfc3bab1741c45->enter($__internal_a50c25d7a52cace49346f894774b57d733cc76f7a83c441b7ebfc3bab1741c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a50c25d7a52cace49346f894774b57d733cc76f7a83c441b7ebfc3bab1741c45->leave($__internal_a50c25d7a52cace49346f894774b57d733cc76f7a83c441b7ebfc3bab1741c45_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3f82afa2acadca9276a375ab21f7492e21edb649bd85b9a2dfc561f41c2925ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f82afa2acadca9276a375ab21f7492e21edb649bd85b9a2dfc561f41c2925ab->enter($__internal_3f82afa2acadca9276a375ab21f7492e21edb649bd85b9a2dfc561f41c2925ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3f82afa2acadca9276a375ab21f7492e21edb649bd85b9a2dfc561f41c2925ab->leave($__internal_3f82afa2acadca9276a375ab21f7492e21edb649bd85b9a2dfc561f41c2925ab_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bf6f2bcf46a16caaff4b3fc5df7a954013f5d32d34e33ff3a6cfb5a026e1ec1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf6f2bcf46a16caaff4b3fc5df7a954013f5d32d34e33ff3a6cfb5a026e1ec1e->enter($__internal_bf6f2bcf46a16caaff4b3fc5df7a954013f5d32d34e33ff3a6cfb5a026e1ec1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_bf6f2bcf46a16caaff4b3fc5df7a954013f5d32d34e33ff3a6cfb5a026e1ec1e->leave($__internal_bf6f2bcf46a16caaff4b3fc5df7a954013f5d32d34e33ff3a6cfb5a026e1ec1e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c9de24d7b8ad5aa4e9af18fedddbd97140ac4232d5dde99c3f5d6ec412d4f7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c9de24d7b8ad5aa4e9af18fedddbd97140ac4232d5dde99c3f5d6ec412d4f7d->enter($__internal_7c9de24d7b8ad5aa4e9af18fedddbd97140ac4232d5dde99c3f5d6ec412d4f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7c9de24d7b8ad5aa4e9af18fedddbd97140ac4232d5dde99c3f5d6ec412d4f7d->leave($__internal_7c9de24d7b8ad5aa4e9af18fedddbd97140ac4232d5dde99c3f5d6ec412d4f7d_prof);

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
