<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_82206d5f1a5c67dfecf2e39e8298b77330eab631129cb34decab556cade93dac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fc65cd30473b1fff1cb5f222d214354c713e7342bb4bd84fe1d2ce70573c29a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc65cd30473b1fff1cb5f222d214354c713e7342bb4bd84fe1d2ce70573c29a6->enter($__internal_fc65cd30473b1fff1cb5f222d214354c713e7342bb4bd84fe1d2ce70573c29a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "<div class=\"container-fluid\">
    <div class=\"col-md-offset-1 col-md-10\">
        <h4>Registration</h4>
        <div class=\"row\">
            <div class=\"well\">
                <form action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">


                    ";
        // line 10
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'form_start');
        echo "
                    ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), 'errors');
        echo "

                    <div class=\"row formInput\">
                        <span class=\"col-md-3\">";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), "username", array()), 'label');
        echo "</span>
                        ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), "username", array()), 'errors');
        echo "
                        <span class=\"col-md-9\">";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->getSourceContext()); })()), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</span>
                    </div>

                    <div class=\"row formInput\">
                        <span class=\"col-md-3\">";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->getSourceContext()); })()), "email", array()), 'label');
        echo "</span>
                        ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), "email", array()), 'errors');
        echo "
                        <span class=\"col-md-9\">";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), "email", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</span>
                    </div>

                    <div class=\"row formInput\">
                        <span class=\"col-md-3\">";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 26, $this->getSourceContext()); })()), "plainPassword", array()), "first", array()), 'label');
        echo "</span>
                        ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), "plainPassword", array()), "first", array()), 'errors');
        echo "
                        <span class=\"col-md-9\">";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->getSourceContext()); })()), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</span>
                    </div>

                    <div class=\"row formInput\">
                        <span class=\"col-md-3\">";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->getSourceContext()); })()), "plainPassword", array()), "second", array()), 'label');
        echo "</span>
                        ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 33, $this->getSourceContext()); })()), "plainPassword", array()), "second", array()), 'errors');
        echo "
                        <span class=\"col-md-9\">";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "</span>
                    </div>

                    <div>
                        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                    </div>
                    ";
        // line 40
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->getSourceContext()); })()), 'form_end');
        echo "
                </form>
            </div>
            <h4><a href=";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo ">Go back to homepage</h4
        </div>
    </div>
</div>";
        
        $__internal_fc65cd30473b1fff1cb5f222d214354c713e7342bb4bd84fe1d2ce70573c29a6->leave($__internal_fc65cd30473b1fff1cb5f222d214354c713e7342bb4bd84fe1d2ce70573c29a6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 43,  112 => 40,  107 => 38,  100 => 34,  96 => 33,  92 => 32,  85 => 28,  81 => 27,  77 => 26,  70 => 22,  66 => 21,  62 => 20,  55 => 16,  51 => 15,  47 => 14,  41 => 11,  37 => 10,  29 => 7,  22 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
<div class=\"container-fluid\">
    <div class=\"col-md-offset-1 col-md-10\">
        <h4>Registration</h4>
        <div class=\"row\">
            <div class=\"well\">
                <form action=\"{{ path('fos_user_registration_register') }}\" {{ form_enctype(form) }} method=\"POST\" class=\"fos_user_registration_register\">


                    {{ form_start(form) }}
                    {{ form_errors(form) }}

                    <div class=\"row formInput\">
                        <span class=\"col-md-3\">{{ form_label(form.username) }}</span>
                        {{ form_errors(form.username) }}
                        <span class=\"col-md-9\">{{ form_widget(form.username, {'attr': {'class': 'form-control'}}) }}</span>
                    </div>

                    <div class=\"row formInput\">
                        <span class=\"col-md-3\">{{ form_label(form.email) }}</span>
                        {{ form_errors(form.email) }}
                        <span class=\"col-md-9\">{{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}</span>
                    </div>

                    <div class=\"row formInput\">
                        <span class=\"col-md-3\">{{ form_label(form.plainPassword.first) }}</span>
                        {{ form_errors(form.plainPassword.first) }}
                        <span class=\"col-md-9\">{{ form_widget(form.plainPassword.first, {'attr': {'class': 'form-control'}}) }}</span>
                    </div>

                    <div class=\"row formInput\">
                        <span class=\"col-md-3\">{{ form_label(form.plainPassword.second) }}</span>
                        {{ form_errors(form.plainPassword.second) }}
                        <span class=\"col-md-9\">{{ form_widget(form.plainPassword.second, {'attr': {'class': 'form-control'}}) }}</span>
                    </div>

                    <div>
                        <input class=\"btn btn-primary\" type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
                    </div>
                    {{ form_end(form) }}
                </form>
            </div>
            <h4><a href={{ path(\"index\") }}>Go back to homepage</h4
        </div>
    </div>
</div>", "FOSUserBundle:Registration:register_content.html.twig", "D:\\Git\\os-server\\app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}
