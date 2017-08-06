<?php

/* OSUserBundle:Default:index.html.twig */
class __TwigTemplate_e064e2803e7f74855a204e92293b8031b3649043dfae27cd3338cd2c81d57057 extends Twig_Template
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
        return "OSUserBundle:Default:index.html.twig";
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
        return new Twig_Source("", "OSUserBundle:Default:index.html.twig", "D:\\Git\\os-server\\src\\OS\\UserBundle/Resources/views/Default/index.html.twig");
    }
}
