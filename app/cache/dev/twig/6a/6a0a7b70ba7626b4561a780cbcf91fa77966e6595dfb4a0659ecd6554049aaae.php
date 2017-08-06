<?php

/* OSGameBundle:Map:index.html.twig */
class __TwigTemplate_b5e1cb0e16d532371634bd7192409e9976cc2984f1edc3005c913cbe70cf9424 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "OSGameBundle:Map:index.html.twig", 1);
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
        $__internal_cf09536a35e4a682616bd5a51536354ececeb966cfeedb99dfd18e3343ae9621 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf09536a35e4a682616bd5a51536354ececeb966cfeedb99dfd18e3343ae9621->enter($__internal_cf09536a35e4a682616bd5a51536354ececeb966cfeedb99dfd18e3343ae9621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OSGameBundle:Map:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf09536a35e4a682616bd5a51536354ececeb966cfeedb99dfd18e3343ae9621->leave($__internal_cf09536a35e4a682616bd5a51536354ececeb966cfeedb99dfd18e3343ae9621_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4841f46219fccd3556ff14e8d4eb55d6868c3cbad65013977fd189f1377e0477 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4841f46219fccd3556ff14e8d4eb55d6868c3cbad65013977fd189f1377e0477->enter($__internal_4841f46219fccd3556ff14e8d4eb55d6868c3cbad65013977fd189f1377e0477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Map list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Code</th>
                <th>Json</th>
                <th>Bgmusic</th>
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("map_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entity"], "code", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entity"], "json", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entity"], "bgMusic", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("map_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("map_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["entity"], "id", array()))), "html", null, true);
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("map_new");
        echo "\">
                Create a new entry
            </a>
        </li>
    </ul>
    ";
        
        $__internal_4841f46219fccd3556ff14e8d4eb55d6868c3cbad65013977fd189f1377e0477->leave($__internal_4841f46219fccd3556ff14e8d4eb55d6868c3cbad65013977fd189f1377e0477_prof);

    }

    public function getTemplateName()
    {
        return "OSGameBundle:Map:index.html.twig";
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
    <h1>Map list</h1>

    <table class=\"records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Code</th>
                <th>Json</th>
                <th>Bgmusic</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for entity in entities %}
            <tr>
                <td><a href=\"{{ path('map_show', { 'id': entity.id }) }}\">{{ entity.id }}</a></td>
                <td>{{ entity.code }}</td>
                <td>{{ entity.json }}</td>
                <td>{{ entity.bgMusic }}</td>
                <td>
                <ul>
                    <li>
                        <a href=\"{{ path('map_show', { 'id': entity.id }) }}\">show</a>
                    </li>
                    <li>
                        <a href=\"{{ path('map_edit', { 'id': entity.id }) }}\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"{{ path('map_new') }}\">
                Create a new entry
            </a>
        </li>
    </ul>
    {% endblock %}
", "OSGameBundle:Map:index.html.twig", "D:\\Git\\os-server\\src\\OS\\GameBundle/Resources/views/Map/index.html.twig");
    }
}
