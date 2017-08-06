<?php

/* @OSUser/Default/index.html.twig */
class __TwigTemplate_0edd62f508ac1b0a23ed58af00abb366263b88800ec24eebbcb3e9bd72f3ef8e extends Twig_Template
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
        return "@OSUser/Default/index.html.twig";
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
        return new Twig_Source("", "@OSUser/Default/index.html.twig", "D:\\Git\\os-server\\src\\OS\\UserBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
