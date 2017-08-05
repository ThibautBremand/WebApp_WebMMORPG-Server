<?php

/* OSGameBundle:Default:index.html.twig */
class __TwigTemplate_5197e32b9b95d62b9f6b6a9af324e7e79a495ac98ca3130c4d05a87343182c97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreCoreBundle::base.html.twig", "OSGameBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'head_script' => array($this, 'block_head_script'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CoreCoreBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d487cba702bb9e131439e46a719d34028c82ae421d167fd346969266bb586e3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d487cba702bb9e131439e46a719d34028c82ae421d167fd346969266bb586e3b->enter($__internal_d487cba702bb9e131439e46a719d34028c82ae421d167fd346969266bb586e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OSGameBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d487cba702bb9e131439e46a719d34028c82ae421d167fd346969266bb586e3b->leave($__internal_d487cba702bb9e131439e46a719d34028c82ae421d167fd346969266bb586e3b_prof);

    }

    // line 3
    public function block_head_script($context, array $blocks = array())
    {
        $__internal_3dbdcd44a366ade7d9bf6f300d8d7958bd6e1fa7382a8b1991571387cdc1222b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dbdcd44a366ade7d9bf6f300d8d7958bd6e1fa7382a8b1991571387cdc1222b->enter($__internal_3dbdcd44a366ade7d9bf6f300d8d7958bd6e1fa7382a8b1991571387cdc1222b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_script"));

        // line 4
        echo "    ";
        $this->displayParentBlock("head_script", $context, $blocks);
        echo "
";
        
        $__internal_3dbdcd44a366ade7d9bf6f300d8d7958bd6e1fa7382a8b1991571387cdc1222b->leave($__internal_3dbdcd44a366ade7d9bf6f300d8d7958bd6e1fa7382a8b1991571387cdc1222b_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a1c4654fd75276d337e984996030fc41c632da825473f04ac9fa72a70c774a24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1c4654fd75276d337e984996030fc41c632da825473f04ac9fa72a70c774a24->enter($__internal_a1c4654fd75276d337e984996030fc41c632da825473f04ac9fa72a70c774a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_a1c4654fd75276d337e984996030fc41c632da825473f04ac9fa72a70c774a24->leave($__internal_a1c4654fd75276d337e984996030fc41c632da825473f04ac9fa72a70c774a24_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_da82cd1b6159ec410cc964390fa8ed9fb0fd55fadd1a3f5e5a7cec29e496e8b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da82cd1b6159ec410cc964390fa8ed9fb0fd55fadd1a3f5e5a7cec29e496e8b6->enter($__internal_da82cd1b6159ec410cc964390fa8ed9fb0fd55fadd1a3f5e5a7cec29e496e8b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    <p>
        <div class=\"container-fluid\">

                <div class=\"row\">
                    <h3><p align=\"center\">Welcome to my <b>HTML5</b> / <b>JavaScript</b> / <b>PHP Symfony</b> MMORPG !</p></h3>
                </div>


                <div class=\"well\">
                    <div class=\"row\">
                        <p><a href=\"/login\">Now login and keep on playing !</a></p>

                        <p><b>OR</b></p>

                        <p><a href=\"/register\">Register to create a new account !</a></p>
                    </div>
                </div>

                <div class=\"well\">
                    <div class=\"row\">
                        <h4><p align=\"center\">Feel free to have a try !</p></h4>

                        <p><h4>List of technologies used :</h4></p>
                        <p><b>Front-end : </b> HTML5 (Canvas, Websockets) + JavaScript (jQuery) + Twitter Boostrap</p>
                        <p><b>Back-end : </b> PHP (Symfony2, Ratchet - socketo.me)</p>
                        <p><b>Server : </b> nginx</p>

                        <p>
                            <a href=\"http://www.w3.org/html/logo/\">
                                <img src=\"https://www.w3.org/html/logo/badge/html5-badge-h-connectivity-css3-graphics.png\" width=\"197\" height=\"64\" alt=\"HTML5 Powered with Connectivity / Realtime, CSS3 / Styling, and Graphics, 3D &amp; Effects\" title=\"HTML5 Powered with Connectivity / Realtime, CSS3 / Styling, and Graphics, 3D &amp; Effects\">
                            </a>
                        </p>

                        <p>
                            <img src=\"https://www.w3.org/html/logo/downloads/HTML5_Logo_512.png\" class=\"logosTechnos\">
                            <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/corecore/images/logo_javascript.png"), "html", null, true);
        echo "\" class=\"logosTechnos\">
                            <img src=\"http://creersonsiteweb.net/images/bootstrap-twitter.png\" class=\"logosTechnos\">
                            <img src=\"http://iabsis.com/themes/iabsis/assets/img/tutos/symfony2/symfony2.png\" class=\"logosTechnos\">
                            <img src=\"https://avatars0.githubusercontent.com/u/6565102?v=4&s=400\" class=\"logosTechnos\">
                            <img src=\"https://blog.pandorafms.org/wp-content/uploads/2016/05/nginx_logo.png\" class=\"logosTechnos\">
                        </p><br/>
                        <p><h4>Thibaut BREMAND</h4></p>
                    </div>
                </div>
                <p><h4>Screenshot</h4></p>
                <img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/corecore/images/MMOscreen.png"), "html", null, true);
        echo "\" class=\"screenshot\">
            </div>
        </div>
    </p>

";
        
        $__internal_da82cd1b6159ec410cc964390fa8ed9fb0fd55fadd1a3f5e5a7cec29e496e8b6->leave($__internal_da82cd1b6159ec410cc964390fa8ed9fb0fd55fadd1a3f5e5a7cec29e496e8b6_prof);

    }

    public function getTemplateName()
    {
        return "OSGameBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 59,  115 => 49,  74 => 12,  68 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'CoreCoreBundle::base.html.twig' %}

{% block head_script %}
    {{ parent() }}
{% endblock head_script %}

{% block stylesheets %}
    {{ parent() }}
{% endblock %}

{% block body %}
    {{ parent() }}

    <p>
        <div class=\"container-fluid\">

                <div class=\"row\">
                    <h3><p align=\"center\">Welcome to my <b>HTML5</b> / <b>JavaScript</b> / <b>PHP Symfony</b> MMORPG !</p></h3>
                </div>


                <div class=\"well\">
                    <div class=\"row\">
                        <p><a href=\"/login\">Now login and keep on playing !</a></p>

                        <p><b>OR</b></p>

                        <p><a href=\"/register\">Register to create a new account !</a></p>
                    </div>
                </div>

                <div class=\"well\">
                    <div class=\"row\">
                        <h4><p align=\"center\">Feel free to have a try !</p></h4>

                        <p><h4>List of technologies used :</h4></p>
                        <p><b>Front-end : </b> HTML5 (Canvas, Websockets) + JavaScript (jQuery) + Twitter Boostrap</p>
                        <p><b>Back-end : </b> PHP (Symfony2, Ratchet - socketo.me)</p>
                        <p><b>Server : </b> nginx</p>

                        <p>
                            <a href=\"http://www.w3.org/html/logo/\">
                                <img src=\"https://www.w3.org/html/logo/badge/html5-badge-h-connectivity-css3-graphics.png\" width=\"197\" height=\"64\" alt=\"HTML5 Powered with Connectivity / Realtime, CSS3 / Styling, and Graphics, 3D &amp; Effects\" title=\"HTML5 Powered with Connectivity / Realtime, CSS3 / Styling, and Graphics, 3D &amp; Effects\">
                            </a>
                        </p>

                        <p>
                            <img src=\"https://www.w3.org/html/logo/downloads/HTML5_Logo_512.png\" class=\"logosTechnos\">
                            <img src=\"{{ asset('bundles/corecore/images/logo_javascript.png') }}\" class=\"logosTechnos\">
                            <img src=\"http://creersonsiteweb.net/images/bootstrap-twitter.png\" class=\"logosTechnos\">
                            <img src=\"http://iabsis.com/themes/iabsis/assets/img/tutos/symfony2/symfony2.png\" class=\"logosTechnos\">
                            <img src=\"https://avatars0.githubusercontent.com/u/6565102?v=4&s=400\" class=\"logosTechnos\">
                            <img src=\"https://blog.pandorafms.org/wp-content/uploads/2016/05/nginx_logo.png\" class=\"logosTechnos\">
                        </p><br/>
                        <p><h4>Thibaut BREMAND</h4></p>
                    </div>
                </div>
                <p><h4>Screenshot</h4></p>
                <img src=\"{{ asset('bundles/corecore/images/MMOscreen.png') }}\" class=\"screenshot\">
            </div>
        </div>
    </p>

{% endblock %}", "OSGameBundle:Default:index.html.twig", "D:\\Git\\os-server\\src\\OS\\GameBundle/Resources/views/Default/index.html.twig");
    }
}
