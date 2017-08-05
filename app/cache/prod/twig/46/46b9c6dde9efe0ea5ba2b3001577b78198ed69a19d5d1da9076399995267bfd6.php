<?php

/* CoreCoreBundle:Default:index.html.twig */
class __TwigTemplate_f9605e3d5a60110e075c576ff6d424d16ebba2e7eab407450ee9603eb8239e12 extends Twig_Template
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
        return "CoreCoreBundle:Default:index.html.twig";
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
        return new Twig_Source("", "CoreCoreBundle:Default:index.html.twig", "D:\\Git\\os-server\\src\\Core\\CoreBundle/Resources/views/Default/index.html.twig");
    }
}
