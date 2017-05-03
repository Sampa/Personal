<?php

/* create.twig */
class __TwigTemplate_923040e5fa6c05849ae2871e6684fe2287e7b9fe0e5c2f797ff5cc1188e18615 extends yii\twig\Template
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
        $this->env->getExtension('yii\twig\Extension')->addUses("yiihelpersHtml");
        echo "
";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('yii\twig\Extension')->setProperty(($context["this"] ?? null), "title", \common\helpers\My::t("Create Articles")), "html", null, true);
        echo "
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('yii\twig\Extension')->setProperty(($context["this"] ?? null), "params", array("breadcrumbs" => array(0 => array("label" => \common\helpers\My::t("Articles"), "url" => array(0 => "index")), 1 => array("label" => $this->getAttribute(        // line 8
($context["this"] ?? null), "title", array()))))), "html", null, true);
        // line 10
        echo "
<div class=\"container \">
    <div class=\"col-sm-10  col-sm-push-1 box\">
        <hr>
        <h2 class=\"intro-text text-center\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "title", array()), "html", null, true);
        echo " </h2>
        <hr>
        ";
        // line 16
        echo $this->getAttribute(($context["this"] ?? null), "render", array(0 => "_form.twig", 1 => array("model" => ($context["model"] ?? null))), "method");
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "create.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 16,  36 => 14,  30 => 10,  28 => 8,  27 => 5,  23 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "create.twig", "D:\\Programmering\\Webb\\UniServerZ\\vhosts\\personal\\_protected\\frontend\\views\\article\\create.twig");
    }
}
