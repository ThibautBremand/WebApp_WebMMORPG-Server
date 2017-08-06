<?php

/* ::base.html.twig */
class __TwigTemplate_f664e908edd4522b5bb988106c0d6df67b502204666e49ff5ac535ea8e061f19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_922948db0b04e4471642c48f35126ba06192b9560111a6dbdf6df87d24df67a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_922948db0b04e4471642c48f35126ba06192b9560111a6dbdf6df87d24df67a7->enter($__internal_922948db0b04e4471642c48f35126ba06192b9560111a6dbdf6df87d24df67a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "    </body>
</html>
";
        
        $__internal_922948db0b04e4471642c48f35126ba06192b9560111a6dbdf6df87d24df67a7->leave($__internal_922948db0b04e4471642c48f35126ba06192b9560111a6dbdf6df87d24df67a7_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_9bc555cf82ede3e1ee03d7af58be5b28b5829f7e845aac1c1a36b3c100ad58d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bc555cf82ede3e1ee03d7af58be5b28b5829f7e845aac1c1a36b3c100ad58d1->enter($__internal_9bc555cf82ede3e1ee03d7af58be5b28b5829f7e845aac1c1a36b3c100ad58d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9bc555cf82ede3e1ee03d7af58be5b28b5829f7e845aac1c1a36b3c100ad58d1->leave($__internal_9bc555cf82ede3e1ee03d7af58be5b28b5829f7e845aac1c1a36b3c100ad58d1_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_983f4e5223524744830e7046dda245a0705716c0040daf234085ff21a5746e02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_983f4e5223524744830e7046dda245a0705716c0040daf234085ff21a5746e02->enter($__internal_983f4e5223524744830e7046dda245a0705716c0040daf234085ff21a5746e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_983f4e5223524744830e7046dda245a0705716c0040daf234085ff21a5746e02->leave($__internal_983f4e5223524744830e7046dda245a0705716c0040daf234085ff21a5746e02_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2c061a50ee2b854d95729c597899e503194c9ce5f11c958c87c20bd4ddc5e9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2c061a50ee2b854d95729c597899e503194c9ce5f11c958c87c20bd4ddc5e9d->enter($__internal_a2c061a50ee2b854d95729c597899e503194c9ce5f11c958c87c20bd4ddc5e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a2c061a50ee2b854d95729c597899e503194c9ce5f11c958c87c20bd4ddc5e9d->leave($__internal_a2c061a50ee2b854d95729c597899e503194c9ce5f11c958c87c20bd4ddc5e9d_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_10db53702ac3f35cfb4c089491740487fdb5f1ba88c99956097543b0a3b69978 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10db53702ac3f35cfb4c089491740487fdb5f1ba88c99956097543b0a3b69978->enter($__internal_10db53702ac3f35cfb4c089491740487fdb5f1ba88c99956097543b0a3b69978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_10db53702ac3f35cfb4c089491740487fdb5f1ba88c99956097543b0a3b69978->leave($__internal_10db53702ac3f35cfb4c089491740487fdb5f1ba88c99956097543b0a3b69978_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 12,  83 => 11,  72 => 7,  60 => 6,  51 => 13,  48 => 12,  46 => 11,  39 => 8,  37 => 7,  33 => 6,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>

    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "D:\\Git\\os-server\\app/Resources\\views/base.html.twig");
    }
}
