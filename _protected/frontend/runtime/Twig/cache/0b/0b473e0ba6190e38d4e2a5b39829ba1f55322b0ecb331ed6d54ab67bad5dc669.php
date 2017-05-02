<?php

/* admin.twig */
class __TwigTemplate_9e48c03698e389ef171a258cb3f377713d02279d3fe002b3a19cea7ef5c36646 extends yii\twig\Template
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
        echo "
";
        // line 2
        $this->env->getExtension('yii\twig\Extension')->addUses($this->getAttribute($this->getAttribute(($context["common"] ?? null), "helpers", array()), "CssHelper", array()));
        echo "
";
        // line 3
        $this->env->getExtension('yii\twig\Extension')->addUses($this->getAttribute($this->getAttribute(($context["yii"] ?? null), "helpers", array()), "Html", array()));
        echo "
";
        // line 4
        $this->env->getExtension('yii\twig\Extension')->addUses($this->getAttribute($this->getAttribute(($context["yii"] ?? null), "grid", array()), "GridView", array()));
        echo "
";
        // line 5
        $this->env->getExtension('yii\twig\Extension')->addUses($this->getAttribute($this->getAttribute(($context["yii"] ?? null), "grid", array()), "ActionColumn", array()));
        echo "
";
        // line 9
        echo "
";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('yii\twig\Extension')->setProperty(($context["this"] ?? null), "title", \common\helpers\My::t("Articles")), "html", null, true);
        echo "

<div class=\"articles-admin\">

    <div class=\"container box\">
        <hr>
        <h1 class=\"intro-text text-center\">
        ";
        // line 17
        echo call_user_func_array($this->env->getFunction('html')->getCallable(), array("encode", array(0 => $this->getAttribute(($context["this"] ?? null), "title", array()))));
        echo "
        </h1>
        <hr>
        <span class=\"pull-right\">
            ";
        // line 21
        echo call_user_func_array($this->env->getFunction('html')->getCallable(), array("a", array(0 => \common\helpers\My::t("Create Article"), 1 => array(0 => "create"), 2 => array("class" => "btn btn-success"))));
        echo "
        </span>


        ";
        // line 25
        echo yii\grid\GridView::Widget(array("dataProvider" =>         // line 26
($context["dataProvider"] ?? null), "filterModel" =>         // line 27
($context["searchModel"] ?? null), "summary" => false, "columns" => array(0 => "id", 1 => array("attribute" => "user_id", "value" => "author", "headerOptions" => array("style" => "width:10%")), 2 => array("attribute" => "title", "headerOptions" => array("style" => "width:50%")), 3 => array("attribute" => "status", "filter" => $this->getAttribute(        // line 38
($context["searchModel"] ?? null), "getStatusList", array(), "method"), "value" => "_status", "headerOptions" => array("style" => "width:10%")), 4 => array("attribute" => "category", "filter" => $this->getAttribute(        // line 43
($context["searchModel"] ?? null), "getCategoryList", array(), "method"), "value" => "_category", "headerOptions" => array("style" => "width:10%")), 5 => array("class" => "yii\\grid\\ActionColumn", "header" => \common\helpers\My::t("Menu")))));
        // line 49
        echo "
    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "admin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 49,  69 => 43,  68 => 38,  67 => 27,  66 => 26,  65 => 25,  58 => 21,  51 => 17,  41 => 10,  38 => 9,  34 => 5,  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin.twig", "D:\\Programmering\\Webb\\UniServerZ\\vhosts\\personal\\_protected\\frontend\\views\\article\\admin.twig");
    }
}
