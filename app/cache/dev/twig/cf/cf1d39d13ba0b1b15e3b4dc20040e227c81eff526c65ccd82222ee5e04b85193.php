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
        $__internal_9f40bb79bf30b69eaea5a998b7399786636ac76154ad35f362f725184714e27b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f40bb79bf30b69eaea5a998b7399786636ac76154ad35f362f725184714e27b->enter($__internal_9f40bb79bf30b69eaea5a998b7399786636ac76154ad35f362f725184714e27b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_9f40bb79bf30b69eaea5a998b7399786636ac76154ad35f362f725184714e27b->leave($__internal_9f40bb79bf30b69eaea5a998b7399786636ac76154ad35f362f725184714e27b_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_28799265311287256af13298b30f119f937de17d6713404d452cc7492060616e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28799265311287256af13298b30f119f937de17d6713404d452cc7492060616e->enter($__internal_28799265311287256af13298b30f119f937de17d6713404d452cc7492060616e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_28799265311287256af13298b30f119f937de17d6713404d452cc7492060616e->leave($__internal_28799265311287256af13298b30f119f937de17d6713404d452cc7492060616e_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6ec7eadd02b0b92cd06639c284d35287de04fc1b1b5385f29d5c743bd9ebb2ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ec7eadd02b0b92cd06639c284d35287de04fc1b1b5385f29d5c743bd9ebb2ca->enter($__internal_6ec7eadd02b0b92cd06639c284d35287de04fc1b1b5385f29d5c743bd9ebb2ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6ec7eadd02b0b92cd06639c284d35287de04fc1b1b5385f29d5c743bd9ebb2ca->leave($__internal_6ec7eadd02b0b92cd06639c284d35287de04fc1b1b5385f29d5c743bd9ebb2ca_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_775040118ebd79b0b304087250f9a8b33bad1c0612b2f8616a265c0155973863 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_775040118ebd79b0b304087250f9a8b33bad1c0612b2f8616a265c0155973863->enter($__internal_775040118ebd79b0b304087250f9a8b33bad1c0612b2f8616a265c0155973863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_775040118ebd79b0b304087250f9a8b33bad1c0612b2f8616a265c0155973863->leave($__internal_775040118ebd79b0b304087250f9a8b33bad1c0612b2f8616a265c0155973863_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_236f0cb6224ff92e425ac322dd4a0736caa417cef42a3f285b5b0b855c4b0538 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_236f0cb6224ff92e425ac322dd4a0736caa417cef42a3f285b5b0b855c4b0538->enter($__internal_236f0cb6224ff92e425ac322dd4a0736caa417cef42a3f285b5b0b855c4b0538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_236f0cb6224ff92e425ac322dd4a0736caa417cef42a3f285b5b0b855c4b0538->leave($__internal_236f0cb6224ff92e425ac322dd4a0736caa417cef42a3f285b5b0b855c4b0538_prof);

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
