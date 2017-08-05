<?php

/* OSGameBundle:Position:index.html.twig */
class __TwigTemplate_502697610664d12fc26c202f3ff913481d0c4147de0b3b58ba0249a7f435bea3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "OSGameBundle:Position:index.html.twig", 1);
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
        $__internal_2300b8d5964ea7cb68e281cd1ffdce05f7c3a67ca9413e0fe8229f4a9209fc58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2300b8d5964ea7cb68e281cd1ffdce05f7c3a67ca9413e0fe8229f4a9209fc58->enter($__internal_2300b8d5964ea7cb68e281cd1ffdce05f7c3a67ca9413e0fe8229f4a9209fc58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OSGameBundle:Position:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2300b8d5964ea7cb68e281cd1ffdce05f7c3a67ca9413e0fe8229f4a9209fc58->leave($__internal_2300b8d5964ea7cb68e281cd1ffdce05f7c3a67ca9413e0fe8229f4a9209fc58_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_03851f867f69c2a04f4f94e6c47d9efc19dc085647d73f3c92a385cd40a2a098 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03851f867f69c2a04f4f94e6c47d9efc19dc085647d73f3c92a385cd40a2a098->enter($__internal_03851f867f69c2a04f4f94e6c47d9efc19dc085647d73f3c92a385cd40a2a098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Position list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Map</th>
                <th>X</th>
                <th>Y</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new Twig_Error_Runtime('Variable "entities" does not exist.', 17, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("position_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entity"], "map", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entity"], "x", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entity"], "y", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("position_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("position_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["entity"], "id", array()))), "html", null, true);
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
        // line 35
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("position_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_03851f867f69c2a04f4f94e6c47d9efc19dc085647d73f3c92a385cd40a2a098->leave($__internal_03851f867f69c2a04f4f94e6c47d9efc19dc085647d73f3c92a385cd40a2a098_prof);

    }

    public function getTemplateName()
    {
        return "OSGameBundle:Position:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 40,  101 => 35,  89 => 29,  83 => 26,  76 => 22,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block body -%}
    <h1>Position list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Map</th>
                <th>X</th>
                <th>Y</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for entity in entities %}
            <tr>
                <td><a href=\"{{ path('position_show', { 'id': entity.id }) }}\">{{ entity.id }}</a></td>
                <td>{{ entity.map }}</td>
                <td>{{ entity.x }}</td>
                <td>{{ entity.y }}</td>
                <td>
                <ul>
                    <li>
                        <a href=\"{{ path('position_show', { 'id': entity.id }) }}\">show</a>
                    </li>
                    <li>
                        <a href=\"{{ path('position_edit', { 'id': entity.id }) }}\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"{{ path('position_new') }}\">
                Create a new entry
            </a>
        </li>
    </ul>
    {% endblock %}
", "OSGameBundle:Position:index.html.twig", "D:\\Git\\os-server\\src\\OS\\GameBundle/Resources/views/Position/index.html.twig");
    }
}
