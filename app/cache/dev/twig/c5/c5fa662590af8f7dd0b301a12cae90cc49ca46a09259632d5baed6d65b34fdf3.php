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
        $__internal_3553e986221f6211752ef751bb7daa1fe996b6ea8f40f9b2481ff200148fc6c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3553e986221f6211752ef751bb7daa1fe996b6ea8f40f9b2481ff200148fc6c9->enter($__internal_3553e986221f6211752ef751bb7daa1fe996b6ea8f40f9b2481ff200148fc6c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreCoreBundle::base.html.twig"));

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
        
        $__internal_3553e986221f6211752ef751bb7daa1fe996b6ea8f40f9b2481ff200148fc6c9->leave($__internal_3553e986221f6211752ef751bb7daa1fe996b6ea8f40f9b2481ff200148fc6c9_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_408f5514889dfa683ca2bdb458b264397e5a97bef6c2782db57abf90d2ffa8d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_408f5514889dfa683ca2bdb458b264397e5a97bef6c2782db57abf90d2ffa8d3->enter($__internal_408f5514889dfa683ca2bdb458b264397e5a97bef6c2782db57abf90d2ffa8d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_408f5514889dfa683ca2bdb458b264397e5a97bef6c2782db57abf90d2ffa8d3->leave($__internal_408f5514889dfa683ca2bdb458b264397e5a97bef6c2782db57abf90d2ffa8d3_prof);

    }

    // line 7
    public function block_head_script($context, array $blocks = array())
    {
        $__internal_c41bb17841ee610797f949880f897f8332e7c02ea8e6a4e7b5979f12c54e4ac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c41bb17841ee610797f949880f897f8332e7c02ea8e6a4e7b5979f12c54e4ac1->enter($__internal_c41bb17841ee610797f949880f897f8332e7c02ea8e6a4e7b5979f12c54e4ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_script"));

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
        
        $__internal_c41bb17841ee610797f949880f897f8332e7c02ea8e6a4e7b5979f12c54e4ac1->leave($__internal_c41bb17841ee610797f949880f897f8332e7c02ea8e6a4e7b5979f12c54e4ac1_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7554021579f6d19a55f5a21e044b12715278d4a427da5fd945a18dae1acf6a03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7554021579f6d19a55f5a21e044b12715278d4a427da5fd945a18dae1acf6a03->enter($__internal_7554021579f6d19a55f5a21e044b12715278d4a427da5fd945a18dae1acf6a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_7554021579f6d19a55f5a21e044b12715278d4a427da5fd945a18dae1acf6a03->leave($__internal_7554021579f6d19a55f5a21e044b12715278d4a427da5fd945a18dae1acf6a03_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_97cfa0864243acc07296f58f31e994b9c635cd2a6b1191406c125598ee854917 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97cfa0864243acc07296f58f31e994b9c635cd2a6b1191406c125598ee854917->enter($__internal_97cfa0864243acc07296f58f31e994b9c635cd2a6b1191406c125598ee854917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_97cfa0864243acc07296f58f31e994b9c635cd2a6b1191406c125598ee854917->leave($__internal_97cfa0864243acc07296f58f31e994b9c635cd2a6b1191406c125598ee854917_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d72a599fa0fbaabe20a85c3005a203e263d9f773b2a78e3c0a6bd0a6ee2b8814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d72a599fa0fbaabe20a85c3005a203e263d9f773b2a78e3c0a6bd0a6ee2b8814->enter($__internal_d72a599fa0fbaabe20a85c3005a203e263d9f773b2a78e3c0a6bd0a6ee2b8814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d72a599fa0fbaabe20a85c3005a203e263d9f773b2a78e3c0a6bd0a6ee2b8814->leave($__internal_d72a599fa0fbaabe20a85c3005a203e263d9f773b2a78e3c0a6bd0a6ee2b8814_prof);

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
