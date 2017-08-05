<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_55e4e1ab8e2181b0973a51a4f0aafe5e8e2e85977e4c93339cbd2309fbf54f13 extends Twig_Template
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
        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["group"] ?? null), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 4,  19 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@FOSUser/Group/show_content.html.twig", "D:\\Git\\os-server\\app\\Resources\\FOSUserBundle\\views\\Group\\show_content.html.twig");
    }
}
