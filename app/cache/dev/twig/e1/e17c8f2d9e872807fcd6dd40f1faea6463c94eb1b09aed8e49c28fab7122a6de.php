<?php

/* OSGameBundle:Chars:edit.html.twig */
class __TwigTemplate_b20164230271e59fb59398960f7f0550bed2765549ed9a42c7f6018c1a47e3f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "OSGameBundle:Chars:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2be0aa4261a17dc19202dbd546b9d9ec28698b005abb2b5d11a264d60b2b14cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2be0aa4261a17dc19202dbd546b9d9ec28698b005abb2b5d11a264d60b2b14cf->enter($__internal_2be0aa4261a17dc19202dbd546b9d9ec28698b005abb2b5d11a264d60b2b14cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OSGameBundle:Chars:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2be0aa4261a17dc19202dbd546b9d9ec28698b005abb2b5d11a264d60b2b14cf->leave($__internal_2be0aa4261a17dc19202dbd546b9d9ec28698b005abb2b5d11a264d60b2b14cf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f91e264ac1957da542b2fb5c51c4064ab6ff9a953d9a620080872edf06318c87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f91e264ac1957da542b2fb5c51c4064ab6ff9a953d9a620080872edf06318c87->enter($__internal_f91e264ac1957da542b2fb5c51c4064ab6ff9a953d9a620080872edf06318c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Chars edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 6, $this->getSourceContext()); })()), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chars_choose_char");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 14
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 14, $this->getSourceContext()); })()), 'form');
        echo "</li>
</ul>
";
        
        $__internal_f91e264ac1957da542b2fb5c51c4064ab6ff9a953d9a620080872edf06318c87->leave($__internal_f91e264ac1957da542b2fb5c51c4064ab6ff9a953d9a620080872edf06318c87_prof);

    }

    public function getTemplateName()
    {
        return "OSGameBundle:Chars:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block body -%}
    <h1>Chars edit</h1>

    {{ form(edit_form) }}

        <ul class=\"record_actions\">
    <li>
        <a href=\"{{ path('chars_choose_char') }}\">
            Back to the list
        </a>
    </li>
    <li>{{ form(delete_form) }}</li>
</ul>
{% endblock %}
", "OSGameBundle:Chars:edit.html.twig", "D:\\Git\\os-server\\src\\OS\\GameBundle/Resources/views/Chars/edit.html.twig");
    }
}
