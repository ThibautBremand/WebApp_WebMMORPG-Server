<?php

/* @CoreCore/Default/index.html.twig */
class __TwigTemplate_ac97e22d106d579c8fcaec676b4e1f6d319be3576f2a089dc93a9ef776474963 extends Twig_Template
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
        echo "Hello ";
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "!
";
    }

    public function getTemplateName()
    {
        return "@CoreCore/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@CoreCore/Default/index.html.twig", "D:\\Git\\os-server\\src\\Core\\CoreBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
