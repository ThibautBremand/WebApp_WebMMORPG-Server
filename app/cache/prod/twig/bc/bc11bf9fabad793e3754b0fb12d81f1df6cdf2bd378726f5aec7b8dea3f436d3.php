<?php

/* OSCommunicationsBundle:Default:index.html.twig */
class __TwigTemplate_3ca64ba8449cbb5a955bee1a824de41537a3cc6d971160f57b87169029483e2a extends Twig_Template
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
        return "OSCommunicationsBundle:Default:index.html.twig";
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
        return new Twig_Source("", "OSCommunicationsBundle:Default:index.html.twig", "D:\\Git\\os-server\\src\\OS\\CommunicationsBundle/Resources/views/Default/index.html.twig");
    }
}
