<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_91c94984e91d9ef3e8771cc111fff203bbdb16684c600bc2298440d5c4e7ad4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_1acdc5b23d24db424ed2b7987866f27bd608c02d55909ec3b0485ce98a35cc5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1acdc5b23d24db424ed2b7987866f27bd608c02d55909ec3b0485ce98a35cc5c->enter($__internal_1acdc5b23d24db424ed2b7987866f27bd608c02d55909ec3b0485ce98a35cc5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1acdc5b23d24db424ed2b7987866f27bd608c02d55909ec3b0485ce98a35cc5c->leave($__internal_1acdc5b23d24db424ed2b7987866f27bd608c02d55909ec3b0485ce98a35cc5c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_62a368d5ffed7ddc5ca79ba6f4b1f4de0c6f07013803274eeb65ad6679b90aa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62a368d5ffed7ddc5ca79ba6f4b1f4de0c6f07013803274eeb65ad6679b90aa3->enter($__internal_62a368d5ffed7ddc5ca79ba6f4b1f4de0c6f07013803274eeb65ad6679b90aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 6, $this->getSourceContext()); })())) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 7, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 7, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "
<div class=\"container-fluid\">
    <div class=\"col-md-offset-1 col-md-10\">
        <h4>Login</h4>
        <div class=\"row\">
            <div class=\"well\">
                <form action=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 16, $this->getSourceContext()); })()), "html", null, true);
        echo "\" class=\"form-control\" />

                    <div class=\"row formInput\">
                        <span class=\"col-md-3\"><label for=\"username\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label></span>
                        <span class=\"col-md-9\"><input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 20, $this->getSourceContext()); })()), "html", null, true);
        echo "\" required=\"required\" class=\"form-control\" /></span>
                    </div>

                    <div class=\"row formInput\">
                        <span class=\"col-md-3\"><label for=\"password\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label></span>
                        <span class=\"col-md-9\"><input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" /></span>
                    </div>

                    <div class=\"row formInput\">
                        <span class=\"\"><label for=\"remember_me\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label></span>
                        <span class=\"\"><input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" class=\"\" /></span>
                    </div>

                    <input type=\"submit\" class=\"btn btn-primary\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                </form>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_62a368d5ffed7ddc5ca79ba6f4b1f4de0c6f07013803274eeb65ad6679b90aa3->leave($__internal_62a368d5ffed7ddc5ca79ba6f4b1f4de0c6f07013803274eeb65ad6679b90aa3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 33,  85 => 29,  77 => 24,  70 => 20,  66 => 19,  60 => 16,  56 => 15,  48 => 9,  42 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<div class=\"container-fluid\">
    <div class=\"col-md-offset-1 col-md-10\">
        <h4>Login</h4>
        <div class=\"row\">
            <div class=\"well\">
                <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" class=\"form-control\" />

                    <div class=\"row formInput\">
                        <span class=\"col-md-3\"><label for=\"username\">{{ 'security.login.username'|trans }}</label></span>
                        <span class=\"col-md-9\"><input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" class=\"form-control\" /></span>
                    </div>

                    <div class=\"row formInput\">
                        <span class=\"col-md-3\"><label for=\"password\">{{ 'security.login.password'|trans }}</label></span>
                        <span class=\"col-md-9\"><input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" /></span>
                    </div>

                    <div class=\"row formInput\">
                        <span class=\"\"><label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label></span>
                        <span class=\"\"><input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" class=\"\" /></span>
                    </div>

                    <input type=\"submit\" class=\"btn btn-primary\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />
                </form>
            </div>
        </div>
    </div>
</div>
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "D:\\Git\\os-server\\app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
