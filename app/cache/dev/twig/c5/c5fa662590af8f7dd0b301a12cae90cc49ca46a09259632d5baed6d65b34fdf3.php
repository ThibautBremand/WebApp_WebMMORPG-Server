<?php

/* CoreCoreBundle::base.html.twig */
class __TwigTemplate_50eb30c521e959042677b0fb9f43aaa4d9d8bd85cba085d57399ddfa7669abc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head_script' => array($this, 'block_head_script'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4db670283345d959398ae5b3a0ba448c6df16eab3ac31096888f096df10c6687 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4db670283345d959398ae5b3a0ba448c6df16eab3ac31096888f096df10c6687->enter($__internal_4db670283345d959398ae5b3a0ba448c6df16eab3ac31096888f096df10c6687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreCoreBundle::base.html.twig"));

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
        $this->displayBlock('head_script', $context, $blocks);
        // line 11
        echo "
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
    ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 20
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 21
        echo "</body>
</html>";
        
        $__internal_4db670283345d959398ae5b3a0ba448c6df16eab3ac31096888f096df10c6687->leave($__internal_4db670283345d959398ae5b3a0ba448c6df16eab3ac31096888f096df10c6687_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_85951b64c00e2ad6b07cba06628c2967113b5ff3f2f7287596b991c707b4b707 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85951b64c00e2ad6b07cba06628c2967113b5ff3f2f7287596b991c707b4b707->enter($__internal_85951b64c00e2ad6b07cba06628c2967113b5ff3f2f7287596b991c707b4b707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_85951b64c00e2ad6b07cba06628c2967113b5ff3f2f7287596b991c707b4b707->leave($__internal_85951b64c00e2ad6b07cba06628c2967113b5ff3f2f7287596b991c707b4b707_prof);

    }

    // line 7
    public function block_head_script($context, array $blocks = array())
    {
        $__internal_0bdc96a6d48bbba5bf75efc9cea35e01df6f99cf7ddbce6e1baad8f7c03d6d8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bdc96a6d48bbba5bf75efc9cea35e01df6f99cf7ddbce6e1baad8f7c03d6d8b->enter($__internal_0bdc96a6d48bbba5bf75efc9cea35e01df6f99cf7ddbce6e1baad8f7c03d6d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_script"));

        // line 8
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/corecore/jquery-1.11.3/jquery-1.11.3.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/corecore/bootstrap-3.3.5-dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_0bdc96a6d48bbba5bf75efc9cea35e01df6f99cf7ddbce6e1baad8f7c03d6d8b->leave($__internal_0bdc96a6d48bbba5bf75efc9cea35e01df6f99cf7ddbce6e1baad8f7c03d6d8b_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ddb576a3c0340e032ac9e8d90a52b64c95973c6a5cfffc899f0a8bd09cbe9f06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddb576a3c0340e032ac9e8d90a52b64c95973c6a5cfffc899f0a8bd09cbe9f06->enter($__internal_ddb576a3c0340e032ac9e8d90a52b64c95973c6a5cfffc899f0a8bd09cbe9f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/corecore/bootstrap-3.3.5-dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/corecore/css/core.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    ";
        
        $__internal_ddb576a3c0340e032ac9e8d90a52b64c95973c6a5cfffc899f0a8bd09cbe9f06->leave($__internal_ddb576a3c0340e032ac9e8d90a52b64c95973c6a5cfffc899f0a8bd09cbe9f06_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a6317a952c59fd79c663939414d6bafa7c1eab896a75c60c7cb979fd9d05694 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a6317a952c59fd79c663939414d6bafa7c1eab896a75c60c7cb979fd9d05694->enter($__internal_1a6317a952c59fd79c663939414d6bafa7c1eab896a75c60c7cb979fd9d05694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1a6317a952c59fd79c663939414d6bafa7c1eab896a75c60c7cb979fd9d05694->leave($__internal_1a6317a952c59fd79c663939414d6bafa7c1eab896a75c60c7cb979fd9d05694_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e02dfb5e3c9503f56d9c4cb14f696e2616c21b3d31995147ebcfcb2127c7ed54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e02dfb5e3c9503f56d9c4cb14f696e2616c21b3d31995147ebcfcb2127c7ed54->enter($__internal_e02dfb5e3c9503f56d9c4cb14f696e2616c21b3d31995147ebcfcb2127c7ed54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e02dfb5e3c9503f56d9c4cb14f696e2616c21b3d31995147ebcfcb2127c7ed54->leave($__internal_e02dfb5e3c9503f56d9c4cb14f696e2616c21b3d31995147ebcfcb2127c7ed54_prof);

    }

    public function getTemplateName()
    {
        return "CoreCoreBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 20,  117 => 19,  108 => 14,  103 => 13,  97 => 12,  88 => 9,  83 => 8,  77 => 7,  65 => 6,  57 => 21,  54 => 20,  52 => 19,  45 => 16,  43 => 12,  40 => 11,  38 => 7,  34 => 6,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>

<head>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block head_script %}
        <script type=\"text/javascript\" src=\"{{ asset('bundles/corecore/jquery-1.11.3/jquery-1.11.3.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('bundles/corecore/bootstrap-3.3.5-dist/js/bootstrap.min.js') }}\"></script>
    {% endblock head_script %}

    {% block stylesheets %}
        <link href=\"{{ asset('bundles/corecore/bootstrap-3.3.5-dist/css/bootstrap.min.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"{{ asset('bundles/corecore/css/core.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
</head>
<body>
    {% block body %}{% endblock %}
    {% block javascripts %}{% endblock %}
</body>
</html>", "CoreCoreBundle::base.html.twig", "D:\\Git\\os-server\\src\\Core\\CoreBundle/Resources/views/base.html.twig");
    }
}
