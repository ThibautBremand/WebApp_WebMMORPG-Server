<?php

/* OSGameBundle:Chars:chooseChar.html.twig */
class __TwigTemplate_119f1b3072728f1ed237eafd5e5aca4585b33c0ca4bb73b65e9e9dcf9d492097 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreCoreBundle::base.html.twig", "OSGameBundle:Chars:chooseChar.html.twig", 1);
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
        $__internal_8611a036502e8270eeb842ad3a498674768c35c50d6f0e44d4915f4305516d2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8611a036502e8270eeb842ad3a498674768c35c50d6f0e44d4915f4305516d2f->enter($__internal_8611a036502e8270eeb842ad3a498674768c35c50d6f0e44d4915f4305516d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OSGameBundle:Chars:chooseChar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8611a036502e8270eeb842ad3a498674768c35c50d6f0e44d4915f4305516d2f->leave($__internal_8611a036502e8270eeb842ad3a498674768c35c50d6f0e44d4915f4305516d2f_prof);

    }

    // line 3
    public function block_head_script($context, array $blocks = array())
    {
        $__internal_884c62e158f87c30fa9d7374671f482c7e5db098df3a25261e660ea7578babd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_884c62e158f87c30fa9d7374671f482c7e5db098df3a25261e660ea7578babd0->enter($__internal_884c62e158f87c30fa9d7374671f482c7e5db098df3a25261e660ea7578babd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_script"));

        // line 4
        echo "    ";
        $this->displayParentBlock("head_script", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/osgame/js/charSelection.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_884c62e158f87c30fa9d7374671f482c7e5db098df3a25261e660ea7578babd0->leave($__internal_884c62e158f87c30fa9d7374671f482c7e5db098df3a25261e660ea7578babd0_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3ff50a7af05433b6d6c9d505cf12b197bf13aa6a0d53271082c52ec0c2afec53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ff50a7af05433b6d6c9d505cf12b197bf13aa6a0d53271082c52ec0c2afec53->enter($__internal_3ff50a7af05433b6d6c9d505cf12b197bf13aa6a0d53271082c52ec0c2afec53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_3ff50a7af05433b6d6c9d505cf12b197bf13aa6a0d53271082c52ec0c2afec53->leave($__internal_3ff50a7af05433b6d6c9d505cf12b197bf13aa6a0d53271082c52ec0c2afec53_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc4af1e44fa61fd920d6491689ad00dd203dc72137a4a0c7a6a21889c649872f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc4af1e44fa61fd920d6491689ad00dd203dc72137a4a0c7a6a21889c649872f->enter($__internal_fc4af1e44fa61fd920d6491689ad00dd203dc72137a4a0c7a6a21889c649872f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    <div class=\"container-fluid\">
        <h3>";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 16, $this->getSourceContext()); })()), "html", null, true);
        echo ", here are your characters !</h3>
        <div class=\"well\">
                ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["chars"]) || array_key_exists("chars", $context) ? $context["chars"] : (function () { throw new Twig_Error_Runtime('Variable "chars" does not exist.', 18, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["char"]) {
            // line 19
            echo "                    <div class=\"row\">
                        ";
            // line 21
            echo "                        <div class=\"col-md-3\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["char"], "name", array()), "html", null, true);
            echo "</div><div class=\"col-md-6\"><a href=\"javascript:void(0);\" onclick=\"selectChar(this)\" class=\"linkChar\" cId=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["char"], "id", array()), "html", null, true);
            echo "\" cName=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["char"], "name", array()), "html", null, true);
            echo "\">Click to play with this character</a></div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['char'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "            <h4><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chars_new");
        echo "\">Create a new character !</a></h4>
        </div>
        <h4><a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\">Go back to homepage</a></h4>

        <form style=\"visibility:hidden\" id=\"formChar\" action=\" http://127.0.0.1:80/os/index.php\" method=\"POST\" target=\"_blank\">
            <input id=\"cId\" name=\"id\"/>
            <input id=\"cName\" name=\"name\"/>
            <input name=\"user\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 31, $this->getSourceContext()); })()), "user", array()), "username", array()), "html", null, true);
        echo "\"/>
        </form>

";
        
        $__internal_fc4af1e44fa61fd920d6491689ad00dd203dc72137a4a0c7a6a21889c649872f->leave($__internal_fc4af1e44fa61fd920d6491689ad00dd203dc72137a4a0c7a6a21889c649872f_prof);

    }

    public function getTemplateName()
    {
        return "OSGameBundle:Chars:chooseChar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 31,  117 => 26,  111 => 24,  97 => 21,  94 => 19,  90 => 18,  85 => 16,  78 => 13,  72 => 12,  62 => 9,  56 => 8,  47 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'CoreCoreBundle::base.html.twig' %}

{% block head_script %}
    {{ parent() }}
    <script type=\"text/javascript\" src=\"{{ asset('bundles/osgame/js/charSelection.js') }}\"></script>
{% endblock head_script %}

{% block stylesheets %}
    {{ parent() }}
{% endblock %}

{% block body %}
    {{ parent() }}

    <div class=\"container-fluid\">
        <h3>{{ user }}, here are your characters !</h3>
        <div class=\"well\">
                {% for char in chars %}
                    <div class=\"row\">
                        {#<td><a href=\"{{ path('chars_show', { 'id': char.id }) }}\">{{ char.name }} [Click to edit]</a></td>#}
                        <div class=\"col-md-3\">{{ char.name }}</div><div class=\"col-md-6\"><a href=\"javascript:void(0);\" onclick=\"selectChar(this)\" class=\"linkChar\" cId=\"{{ char.id }}\" cName=\"{{ char.name }}\">Click to play with this character</a></div>
                    </div>
                {% endfor %}
            <h4><a href=\"{{ path('chars_new') }}\">Create a new character !</a></h4>
        </div>
        <h4><a href=\"{{ path('index') }}\">Go back to homepage</a></h4>

        <form style=\"visibility:hidden\" id=\"formChar\" action=\" http://127.0.0.1:80/os/index.php\" method=\"POST\" target=\"_blank\">
            <input id=\"cId\" name=\"id\"/>
            <input id=\"cName\" name=\"name\"/>
            <input name=\"user\" value=\"{{ app.user.username }}\"/>
        </form>

{% endblock %}
", "OSGameBundle:Chars:chooseChar.html.twig", "D:\\Git\\os-server\\src\\OS\\GameBundle/Resources/views/Chars/chooseChar.html.twig");
    }
}
