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
        $__internal_e22105fd423ca78daa3dd316496e734fd330fb00de7a1a52accfe2ae9db51cce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e22105fd423ca78daa3dd316496e734fd330fb00de7a1a52accfe2ae9db51cce->enter($__internal_e22105fd423ca78daa3dd316496e734fd330fb00de7a1a52accfe2ae9db51cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OSGameBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e22105fd423ca78daa3dd316496e734fd330fb00de7a1a52accfe2ae9db51cce->leave($__internal_e22105fd423ca78daa3dd316496e734fd330fb00de7a1a52accfe2ae9db51cce_prof);

    }

    // line 3
    public function block_head_script($context, array $blocks = array())
    {
        $__internal_e7136c268871663d172c65c900b6baa7c9f46d1f9d24b13731a23517cae19c85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7136c268871663d172c65c900b6baa7c9f46d1f9d24b13731a23517cae19c85->enter($__internal_e7136c268871663d172c65c900b6baa7c9f46d1f9d24b13731a23517cae19c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_script"));

        // line 4
        echo "    ";
        $this->displayParentBlock("head_script", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/osgame/js/launchDemo.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_e7136c268871663d172c65c900b6baa7c9f46d1f9d24b13731a23517cae19c85->leave($__internal_e7136c268871663d172c65c900b6baa7c9f46d1f9d24b13731a23517cae19c85_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_09421d5dda0d721a7ca71299f3b4efa6300b48b6b51e5771d5c1d5350af21a99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09421d5dda0d721a7ca71299f3b4efa6300b48b6b51e5771d5c1d5350af21a99->enter($__internal_09421d5dda0d721a7ca71299f3b4efa6300b48b6b51e5771d5c1d5350af21a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_09421d5dda0d721a7ca71299f3b4efa6300b48b6b51e5771d5c1d5350af21a99->leave($__internal_09421d5dda0d721a7ca71299f3b4efa6300b48b6b51e5771d5c1d5350af21a99_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_ddfddb81ed464fd1997f0f7cf14b2c1a56631a832cb23690b2dde34f4a3547c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddfddb81ed464fd1997f0f7cf14b2c1a56631a832cb23690b2dde34f4a3547c7->enter($__internal_ddfddb81ed464fd1997f0f7cf14b2c1a56631a832cb23690b2dde34f4a3547c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
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
                        <h4>Login or register :</h4>
                        <p><a href=\"/login\">Now login and keep on playing !</a></p>

                        <p><b>OR</b></p>

                        <p><a href=\"/register\">Register to create a new account !</a></p>

                        <br/>

                        <h4>To try it without registering :</h4>
                        <h5>You can launch both at the same time so you'll see both characters on the map ! These Demo characters can't be customized.</h5>
                        <p><a href=\"javascript:void(0);\" onclick=\"selectChar(this)\" class=\"linkChar\" cId=\"5\" cName=\"demo1\" cUser=\"demo1\">Click to play Demo character 1</a></p>

                        <p><a href=\"javascript:void(0);\" onclick=\"selectChar(this)\" class=\"linkChar\" cId=\"6\" cName=\"demo2\" cUser=\"demo2\">Click to play Demo character 2</a></p>
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
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/corecore/images/logo_javascript.png"), "html", null, true);
        echo "\" class=\"logosTechnos\">
                            <img src=\"http://creersonsiteweb.net/images/bootstrap-twitter.png\" class=\"logosTechnos\">
                            <img src=\"http://iabsis.com/themes/iabsis/assets/img/tutos/symfony2/symfony2.png\" class=\"logosTechnos\">
                            <img src=\"https://avatars0.githubusercontent.com/u/6565102?v=4&s=400\" class=\"logosTechnos\">
                            <img src=\"https://blog.pandorafms.org/wp-content/uploads/2016/05/nginx_logo.png\" class=\"logosTechnos\">
                        </p><br/>
                        <p><h4>Thibaut BREMAND</h4></p>
                        <p><a href=\"http://github.com/ThibautBremand/os\" target=\"_blank\">Github (Client side)</a></p>
                        <p><a href=\"http://github.com/ThibautBremand/os-server\" target=\"_blank\">Github (Server side)</a></p>
                    </div>
                </div>
                <p><h4>Screenshots (click to enlarge)</h4></p>
                <a href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/corecore/images/MMOscreen.png"), "html", null, true);
        echo "\" data-fancybox data-caption=\"Several people connected simultaneously\" class=\"screenshot\">
                    <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/corecore/images/MMOscreen.png"), "html", null, true);
        echo "\" style=\"max-height:200px\" alt=\"\" />
                </a>
                <a href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/corecore/images/MMOscreen2.png"), "html", null, true);
        echo "\" data-fancybox data-caption=\"Map editing with Tiled\" class=\"screenshot\">
                    <img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/corecore/images/MMOscreen2.png"), "html", null, true);
        echo "\" style=\"max-height:200px\" alt=\"\" />
                </a>
                <a href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/corecore/images/MMOscreen3.png"), "html", null, true);
        echo "\" data-fancybox data-caption=\"Character creation with customization\" class=\"screenshot\">
                    <img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/corecore/images/MMOscreen3.png"), "html", null, true);
        echo "\" style=\"max-height:200px\" alt=\"\" />
                </a>
            </div>
        </div>
    </p>

    <form style=\"visibility:hidden\" id=\"formChar\" action=\" http://127.0.0.1:80/os/index.php\" method=\"POST\" target=\"_blank\">
        <input id=\"cId\" name=\"id\"/>
        <input id=\"cName\" name=\"name\"/>
        <input id=\"cUser\" name=\"user\"/>
    </form>

";
        
        $__internal_ddfddb81ed464fd1997f0f7cf14b2c1a56631a832cb23690b2dde34f4a3547c7->leave($__internal_ddfddb81ed464fd1997f0f7cf14b2c1a56631a832cb23690b2dde34f4a3547c7_prof);

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
        return array (  165 => 78,  161 => 77,  156 => 75,  152 => 74,  147 => 72,  143 => 71,  128 => 59,  78 => 13,  72 => 12,  62 => 9,  56 => 8,  47 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'CoreCoreBundle::base.html.twig' %}

{% block head_script %}
    {{ parent() }}
    <script type=\"text/javascript\" src=\"{{ asset('bundles/osgame/js/launchDemo.js') }}\"></script>
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
                        <h4>Login or register :</h4>
                        <p><a href=\"/login\">Now login and keep on playing !</a></p>

                        <p><b>OR</b></p>

                        <p><a href=\"/register\">Register to create a new account !</a></p>

                        <br/>

                        <h4>To try it without registering :</h4>
                        <h5>You can launch both at the same time so you'll see both characters on the map ! These Demo characters can't be customized.</h5>
                        <p><a href=\"javascript:void(0);\" onclick=\"selectChar(this)\" class=\"linkChar\" cId=\"5\" cName=\"demo1\" cUser=\"demo1\">Click to play Demo character 1</a></p>

                        <p><a href=\"javascript:void(0);\" onclick=\"selectChar(this)\" class=\"linkChar\" cId=\"6\" cName=\"demo2\" cUser=\"demo2\">Click to play Demo character 2</a></p>
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
                        <p><a href=\"http://github.com/ThibautBremand/os\" target=\"_blank\">Github (Client side)</a></p>
                        <p><a href=\"http://github.com/ThibautBremand/os-server\" target=\"_blank\">Github (Server side)</a></p>
                    </div>
                </div>
                <p><h4>Screenshots (click to enlarge)</h4></p>
                <a href=\"{{ asset('bundles/corecore/images/MMOscreen.png') }}\" data-fancybox data-caption=\"Several people connected simultaneously\" class=\"screenshot\">
                    <img src=\"{{ asset('bundles/corecore/images/MMOscreen.png') }}\" style=\"max-height:200px\" alt=\"\" />
                </a>
                <a href=\"{{ asset('bundles/corecore/images/MMOscreen2.png') }}\" data-fancybox data-caption=\"Map editing with Tiled\" class=\"screenshot\">
                    <img src=\"{{ asset('bundles/corecore/images/MMOscreen2.png') }}\" style=\"max-height:200px\" alt=\"\" />
                </a>
                <a href=\"{{ asset('bundles/corecore/images/MMOscreen3.png') }}\" data-fancybox data-caption=\"Character creation with customization\" class=\"screenshot\">
                    <img src=\"{{ asset('bundles/corecore/images/MMOscreen3.png') }}\" style=\"max-height:200px\" alt=\"\" />
                </a>
            </div>
        </div>
    </p>

    <form style=\"visibility:hidden\" id=\"formChar\" action=\" http://127.0.0.1:80/os/index.php\" method=\"POST\" target=\"_blank\">
        <input id=\"cId\" name=\"id\"/>
        <input id=\"cName\" name=\"name\"/>
        <input id=\"cUser\" name=\"user\"/>
    </form>

{% endblock %}", "OSGameBundle:Default:index.html.twig", "D:\\Git\\os-server\\src\\OS\\GameBundle/Resources/views/Default/index.html.twig");
    }
}
