<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_8e5c31ece9fcc583847582967831d295f199db1f8e79e2f719b06a93accd5bf0 extends Twig_Template
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
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? null), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? null), "js", null, true);
        echo "

*/
";
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Twig/Exception/error.js.twig", "D:\\Git\\os-server\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
