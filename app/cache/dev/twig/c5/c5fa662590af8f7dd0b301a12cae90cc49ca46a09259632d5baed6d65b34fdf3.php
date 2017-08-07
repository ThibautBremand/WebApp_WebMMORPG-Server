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
        $__internal_1f15bcedfaf956014287387d8755190d0b86a765a9c228e4676ab193e384fdc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f15bcedfaf956014287387d8755190d0b86a765a9c228e4676ab193e384fdc3->enter($__internal_1f15bcedfaf956014287387d8755190d0b86a765a9c228e4676ab193e384fdc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreCoreBundle::base.html.twig"));

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
        // line 12
        echo "
    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
    ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 22
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo "</body>
</html>";
        
        $__internal_1f15bcedfaf956014287387d8755190d0b86a765a9c228e4676ab193e384fdc3->leave($__internal_1f15bcedfaf956014287387d8755190d0b86a765a9c228e4676ab193e384fdc3_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_06a542f61cd8cbaa6dcd30ea3eaf6d0b1ed72e2f677bb3f55cad0f34f48f3a18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06a542f61cd8cbaa6dcd30ea3eaf6d0b1ed72e2f677bb3f55cad0f34f48f3a18->enter($__internal_06a542f61cd8cbaa6dcd30ea3eaf6d0b1ed72e2f677bb3f55cad0f34f48f3a18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_06a542f61cd8cbaa6dcd30ea3eaf6d0b1ed72e2f677bb3f55cad0f34f48f3a18->leave($__internal_06a542f61cd8cbaa6dcd30ea3eaf6d0b1ed72e2f677bb3f55cad0f34f48f3a18_prof);

    }

    // line 7
    public function block_head_script($context, array $blocks = array())
    {
        $__internal_3f9de96f8c614cb12d05d9764c8221c5a9ff1020a7d431d70efbefa6067c6513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f9de96f8c614cb12d05d9764c8221c5a9ff1020a7d431d70efbefa6067c6513->enter($__internal_3f9de96f8c614cb12d05d9764c8221c5a9ff1020a7d431d70efbefa6067c6513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_script"));

        // line 8
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/corecore/jquery-1.11.3/jquery-1.11.3.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/corecore/bootstrap-3.3.5-dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/corecore/fancybox-master/dist/jquery.fancybox.min.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_3f9de96f8c614cb12d05d9764c8221c5a9ff1020a7d431d70efbefa6067c6513->leave($__internal_3f9de96f8c614cb12d05d9764c8221c5a9ff1020a7d431d70efbefa6067c6513_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_eab35f2611f075661e1dd6eec48cb12f55caae033b2092a64fc436093ad04320 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eab35f2611f075661e1dd6eec48cb12f55caae033b2092a64fc436093ad04320->enter($__internal_eab35f2611f075661e1dd6eec48cb12f55caae033b2092a64fc436093ad04320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/corecore/bootstrap-3.3.5-dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/corecore/css/core.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/corecore/fancybox-master/dist/jquery.fancybox.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    ";
        
        $__internal_eab35f2611f075661e1dd6eec48cb12f55caae033b2092a64fc436093ad04320->leave($__internal_eab35f2611f075661e1dd6eec48cb12f55caae033b2092a64fc436093ad04320_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_21daaa5f9a2da65eae57af40b19a36f4cf025a9d23170bd69e243e149447e8ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21daaa5f9a2da65eae57af40b19a36f4cf025a9d23170bd69e243e149447e8ac->enter($__internal_21daaa5f9a2da65eae57af40b19a36f4cf025a9d23170bd69e243e149447e8ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_21daaa5f9a2da65eae57af40b19a36f4cf025a9d23170bd69e243e149447e8ac->leave($__internal_21daaa5f9a2da65eae57af40b19a36f4cf025a9d23170bd69e243e149447e8ac_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c96acd85d22a7002c9aa35dd48f849b5dbe5ae8e18c830de99c5a2a1914a0d6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c96acd85d22a7002c9aa35dd48f849b5dbe5ae8e18c830de99c5a2a1914a0d6d->enter($__internal_c96acd85d22a7002c9aa35dd48f849b5dbe5ae8e18c830de99c5a2a1914a0d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c96acd85d22a7002c9aa35dd48f849b5dbe5ae8e18c830de99c5a2a1914a0d6d->leave($__internal_c96acd85d22a7002c9aa35dd48f849b5dbe5ae8e18c830de99c5a2a1914a0d6d_prof);

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
        return array (  136 => 22,  125 => 21,  116 => 16,  112 => 15,  107 => 14,  101 => 13,  92 => 10,  88 => 9,  83 => 8,  77 => 7,  65 => 6,  57 => 23,  54 => 22,  52 => 21,  45 => 18,  43 => 13,  40 => 12,  38 => 7,  34 => 6,  27 => 1,);
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
        <script type=\"text/javascript\" src=\"{{ asset('bundles/corecore/fancybox-master/dist/jquery.fancybox.min.js') }}\"></script>
    {% endblock head_script %}

    {% block stylesheets %}
        <link href=\"{{ asset('bundles/corecore/bootstrap-3.3.5-dist/css/bootstrap.min.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"{{ asset('bundles/corecore/css/core.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"{{ asset('bundles/corecore/fancybox-master/dist/jquery.fancybox.min.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
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
