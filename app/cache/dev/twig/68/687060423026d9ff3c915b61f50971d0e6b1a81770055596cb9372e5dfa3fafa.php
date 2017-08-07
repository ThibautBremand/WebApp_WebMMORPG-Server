<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_8416309f4eaba635270c0388325aa1e5c99bf73a5e551b8272582082ac5bafc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de3636adf63a03d63d3495bca875a670a644bd6850cd23617d9bc0ec84b0b742 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de3636adf63a03d63d3495bca875a670a644bd6850cd23617d9bc0ec84b0b742->enter($__internal_de3636adf63a03d63d3495bca875a670a644bd6850cd23617d9bc0ec84b0b742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de3636adf63a03d63d3495bca875a670a644bd6850cd23617d9bc0ec84b0b742->leave($__internal_de3636adf63a03d63d3495bca875a670a644bd6850cd23617d9bc0ec84b0b742_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4584d76c749fe3a3c65a5bd371640b4a8f62321171f359e5818ff774f42eef81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4584d76c749fe3a3c65a5bd371640b4a8f62321171f359e5818ff774f42eef81->enter($__internal_4584d76c749fe3a3c65a5bd371640b4a8f62321171f359e5818ff774f42eef81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_4584d76c749fe3a3c65a5bd371640b4a8f62321171f359e5818ff774f42eef81->leave($__internal_4584d76c749fe3a3c65a5bd371640b4a8f62321171f359e5818ff774f42eef81_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "D:\\Git\\os-server\\app\\Resources\\FOSUserBundle\\views\\Registration\\register.html.twig");
    }
}
