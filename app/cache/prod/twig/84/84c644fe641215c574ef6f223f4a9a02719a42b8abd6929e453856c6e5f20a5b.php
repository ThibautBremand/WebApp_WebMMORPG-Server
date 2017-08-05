<?php

/* OSGameBundle:Chars:chooseChar.html.twig */
class __TwigTemplate_182498af78c30449760cfdddf7ec459900491fee0ac0bd1fbe372e8997ac9a5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreCoreBundle::base.html.twig", "OSGameBundle:Chars:chooseChar.html.twig", 1);
        $this->blocks = array(
            'head_script' => array($this, 'block_head_script'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CoreCoreBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head_script($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("head_script", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/osgame/js/charSelection.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "        <h1>";
        echo twig_escape_filter($this->env, ($context["user"] ?? null), "html", null, true);
        echo ", here are your characters !</h1>

        <table class=\"records_list\">
            <thead>

            </thead>
            <tbody>
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["chars"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["char"]) {
            // line 17
            echo "                <tr>
                    <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chars_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["char"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["char"], "id", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["char"], "name", array()), "html", null, true);
            echo "</td>
                    <td>
                        <ul>
                            <li>
                                <a href=\"javascript:void(0);\" onclick=\"selectChar(this)\" cId=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["char"], "id", array()), "html", null, true);
            echo "\" cName=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["char"], "name", array()), "html", null, true);
            echo "\">Select this character</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['char'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "            </tbody>
        </table>

        <ul>
            <li>
                <a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chars_new");
        echo "\">
                    Create a new character !
                </a>
            </li>
        </ul>

        <form style=\"visibility:hidden\" id=\"formChar\" action=\"/os/index.php\" method=\"POST\">
            <input id=\"cId\" name=\"id\"/>
            <input id=\"cName\" name=\"name\"/>
            <input name=\"user\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "user", array()), "username", array()), "html", null, true);
        echo "\"/>
        </form>

";
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
        return array (  110 => 43,  98 => 34,  91 => 29,  77 => 23,  70 => 19,  64 => 18,  61 => 17,  57 => 16,  46 => 9,  43 => 8,  37 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OSGameBundle:Chars:chooseChar.html.twig", "D:\\Git\\os-server\\src\\OS\\GameBundle/Resources/views/Chars/chooseChar.html.twig");
    }
}
