<?php

/* OSGameBundle:Chars:index.html.twig */
class __TwigTemplate_09e5ef520f49f5124de388118696b4b73279a8b41d31765299ed296182f58cb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "OSGameBundle:Chars:index.html.twig", 1);
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
        $__internal_2cbb25b511c0720217310eacd7226598565ad50d16a38c35809283e9b039b308 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cbb25b511c0720217310eacd7226598565ad50d16a38c35809283e9b039b308->enter($__internal_2cbb25b511c0720217310eacd7226598565ad50d16a38c35809283e9b039b308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OSGameBundle:Chars:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cbb25b511c0720217310eacd7226598565ad50d16a38c35809283e9b039b308->leave($__internal_2cbb25b511c0720217310eacd7226598565ad50d16a38c35809283e9b039b308_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e7ef66f29e863c05946fdf3eb44428be4483a3ee2d543a72e1ea54d64e4a1bdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7ef66f29e863c05946fdf3eb44428be4483a3ee2d543a72e1ea54d64e4a1bdd->enter($__internal_e7ef66f29e863c05946fdf3eb44428be4483a3ee2d543a72e1ea54d64e4a1bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Chars list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Position</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new Twig_Error_Runtime('Variable "entities" does not exist.', 16, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chars_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entity"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entity"], "position", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chars_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chars_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["entity"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chars_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_e7ef66f29e863c05946fdf3eb44428be4483a3ee2d543a72e1ea54d64e4a1bdd->leave($__internal_e7ef66f29e863c05946fdf3eb44428be4483a3ee2d543a72e1ea54d64e4a1bdd_prof);

    }

    public function getTemplateName()
    {
        return "OSGameBundle:Chars:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 38,  96 => 33,  84 => 27,  78 => 24,  71 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block body -%}
    <h1>Chars list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Position</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for entity in entities %}
            <tr>
                <td><a href=\"{{ path('chars_show', { 'id': entity.id }) }}\">{{ entity.id }}</a></td>
                <td>{{ entity.name }}</td>
                <td>{{ entity.position }}</td>
                <td>
                <ul>
                    <li>
                        <a href=\"{{ path('chars_show', { 'id': entity.id }) }}\">show</a>
                    </li>
                    <li>
                        <a href=\"{{ path('chars_edit', { 'id': entity.id }) }}\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"{{ path('chars_new') }}\">
                Create a new entry
            </a>
        </li>
    </ul>
    {% endblock %}
", "OSGameBundle:Chars:index.html.twig", "D:\\Git\\os-server\\src\\OS\\GameBundle/Resources/views/Chars/index.html.twig");
    }
}
