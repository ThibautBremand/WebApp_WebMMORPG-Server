<?php

/* @OSCommunications/Default/index.html.twig */
class __TwigTemplate_cc631ed3506233c3639f2fcf7ccf25f872d99db757adaf580538c62965c4c70c extends Twig_Template
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
        return "@OSCommunications/Default/index.html.twig";
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
        return new Twig_Source("", "@OSCommunications/Default/index.html.twig", "D:\\Git\\os-server\\src\\OS\\CommunicationsBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
