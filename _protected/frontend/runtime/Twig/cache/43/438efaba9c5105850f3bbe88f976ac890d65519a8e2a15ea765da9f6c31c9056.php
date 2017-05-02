<?php

/* update.twig */
class __TwigTemplate_c6b506473b9804c1b3a49054dca2b4d8e316c0e6851f655dfd5046672b32e685 extends yii\twig\Template
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
        $this->env->getExtension('yii\twig\Extension')->addUses("yii.helpers.Html");
        echo "

";
        // line 5
        echo "
";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('yii\twig\Extension')->setProperty(($context["this"] ?? null), "title", ((\common\helpers\My::t("Update Article") . ": ") . $this->getAttribute(($context["model"] ?? null), "title", array()))), "html", null, true);
        echo "

<div class=\"container\">
    <div class=\"row\">

        <div class=\"col-lg-8 col-lg-push-2 box bs-component\">
        <h1 class=\"intro-text text-center\">";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "title", array()), "html", null, true);
        echo "</h1>

            ";
        // line 14
        echo $this->getAttribute(($context["this"] ?? null), "render", array(0 => "_form", 1 => array("model" => ($context["model"] ?? null))), "method");
        echo "

        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "update.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 14,  36 => 12,  27 => 6,  24 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "update.twig", "D:\\Programmering\\Webb\\UniServerZ\\vhosts\\personal\\_protected\\frontend\\views\\article\\update.twig");
    }
}
