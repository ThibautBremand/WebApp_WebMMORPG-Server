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
        $__internal_da5b2a59b9558fe5fde975317ad76d9ad08275081bf26b82189948ebc483db34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da5b2a59b9558fe5fde975317ad76d9ad08275081bf26b82189948ebc483db34->enter($__internal_da5b2a59b9558fe5fde975317ad76d9ad08275081bf26b82189948ebc483db34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OSGameBundle:Chars:chooseChar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da5b2a59b9558fe5fde975317ad76d9ad08275081bf26b82189948ebc483db34->leave($__internal_da5b2a59b9558fe5fde975317ad76d9ad08275081bf26b82189948ebc483db34_prof);

    }

    // line 3
    public function block_head_script($context, array $blocks = array())
    {
        $__internal_8620e51f34bf0ec198e505abae553f0721d795e6902671733f5edb37199cbdc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8620e51f34bf0ec198e505abae553f0721d795e6902671733f5edb37199cbdc5->enter($__internal_8620e51f34bf0ec198e505abae553f0721d795e6902671733f5edb37199cbdc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_script"));

        // line 4
        echo "    ";
        $this->displayParentBlock("head_script", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/osgame/js/charSelection.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_8620e51f34bf0ec198e505abae553f0721d795e6902671733f5edb37199cbdc5->leave($__internal_8620e51f34bf0ec198e505abae553f0721d795e6902671733f5edb37199cbdc5_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a1351ff8ad38d5b42a5778fe88ca990ff6e2d59db7480e8c269a6cd41dfde00a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1351ff8ad38d5b42a5778fe88ca990ff6e2d59db7480e8c269a6cd41dfde00a->enter($__internal_a1351ff8ad38d5b42a5778fe88ca990ff6e2d59db7480e8c269a6cd41dfde00a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_a1351ff8ad38d5b42a5778fe88ca990ff6e2d59db7480e8c269a6cd41dfde00a->leave($__internal_a1351ff8ad38d5b42a5778fe88ca990ff6e2d59db7480e8c269a6cd41dfde00a_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5a512aebdcc3cb367f6675f7369736c9692d1fa8c0b43872394845f61a3f575 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5a512aebdcc3cb367f6675f7369736c9692d1fa8c0b43872394845f61a3f575->enter($__internal_b5a512aebdcc3cb367f6675f7369736c9692d1fa8c0b43872394845f61a3f575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b5a512aebdcc3cb367f6675f7369736c9692d1fa8c0b43872394845f61a3f575->leave($__internal_b5a512aebdcc3cb367f6675f7369736c9692d1fa8c0b43872394845f61a3f575_prof);

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
