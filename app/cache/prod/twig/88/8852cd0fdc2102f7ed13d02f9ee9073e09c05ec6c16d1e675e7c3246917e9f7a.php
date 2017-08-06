<?php

/* @OSGame/Default/index.html.twig */
class __TwigTemplate_fa476c5a0ad2d0ebfa6aa5aea969a4ce4981920b7ae3ef907ade951285f73274 extends Twig_Template
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
        // line 1
        echo "Hello !

<a href=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("chars_choose_char");
        echo "\">Choose a character !</a>
";
    }

    public function getTemplateName()
    {
        return "@OSGame/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@OSGame/Default/index.html.twig", "D:\\Git\\os-server\\src\\OS\\GameBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
