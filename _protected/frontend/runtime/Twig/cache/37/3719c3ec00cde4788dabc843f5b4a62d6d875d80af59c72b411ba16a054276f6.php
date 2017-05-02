<?php

/* search.twig */
class __TwigTemplate_b18c48e2539a77fc995de4453123e705e04ce3e1340705d9871f96eb58ad660e extends yii\twig\Template
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
        // line 2
        $this->env->getExtension('yii\twig\Extension')->addUses("yii.widgets.ActiveForm");
        echo "
";
        // line 3
        $this->env->getExtension('yii\twig\Extension')->addUses("frontend.models.Article");
        echo "

";
        // line 9
        echo "
";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('yii\twig\Extension')->setProperty(($context["this"] ?? null), "title", \common\helpers\My::t("Search")), "html", null, true);
        echo "

<section class=\"col-xs-12 box\" style=\"\">
    <h1 class=\"text-center\">";
        // line 13
        echo twig_escape_filter($this->env, \common\helpers\My::t("Searchresult"), "html", null, true);
        echo "</h1>
    <hr>
    <div class=\"row\">
        <div class=\"col-sm-1 col-sm-push-5\">
            <button id=\"toggleSearchForm\" class=\"oldRedText btn btn-default\"> ";
        // line 17
        echo twig_escape_filter($this->env, \common\helpers\My::t("Advanced search"), "html", null, true);
        echo " <span class=\"glyphicon glyphicon-menu-down\"></span> </button>
        </div>
    </div>

    <div id=\"searchPageForm\" class=\"row\">

        ";
        // line 23
        $context["form"] = $this->env->getExtension('yii\twig\Extension')->beginWidget("active_form", array("id" => "ArticleSearch", "method" => "get", "action" => "/search", "options" => array("class" => "form-horizontal", "role" => "search")));
        // line 29
        echo "
        ";
        // line 31
        echo "        <div class=\"col-sm-6\">
            ";
        // line 32
        echo $this->getAttribute($this->getAttribute(($context["form"] ?? null), "field", array(0 => ($context["searchModel"] ?? null), 1 => "title"), "method"), "textInput", array(0 => array("placeholder" => \common\helpers\My::t("Search term"))), "method");
        echo "
        </div>

        <div class=\"col-sm-2 \">
            ";
        // line 36
        echo $this->getAttribute($this->getAttribute(($context["form"] ?? null), "field", array(0 => ($context["searchModel"] ?? null), 1 => "user_id"), "method"), "textInput", array(0 => array("placeholder" => \common\helpers\My::t("Search term"))), "method");
        echo "
        </div>

        <div class=\"col-sm-2 \">
            ";
        // line 40
        echo $this->getAttribute($this->getAttribute(($context["form"] ?? null), "field", array(0 => ($context["searchModel"] ?? null), 1 => "category"), "method"), "dropDownList", array(0 => $this->getAttribute(($context["model"] ?? null), "categoryList", array())), "method");
        echo "
        </div>

        <div class=\"col-sm-2\">
            ";
        // line 45
        echo "            ";
        echo $this->getAttribute($this->getAttribute(($context["form"] ?? null), "field", array(0 => ($context["searchModel"] ?? null), 1 => "status"), "method"), "dropDownList", array(0 => $this->getAttribute(        // line 46
($context["model"] ?? null), "statusList", array()), 1 => array("options" => array(2 => array("selected" => true)))), "method");
        // line 52
        echo "
        </div>

        <div class=\"col-sm-6\">
            ";
        // line 56
        echo $this->getAttribute($this->getAttribute(($context["form"] ?? null), "field", array(0 => ($context["searchModel"] ?? null), 1 => "summary"), "method"), "textArea", array(0 => array("placeholder" => \common\helpers\My::t("Search term"))), "method");
        echo "
        </div>

        <div class=\"col-sm-6\">
            ";
        // line 60
        echo $this->getAttribute($this->getAttribute(($context["form"] ?? null), "field", array(0 => ($context["searchModel"] ?? null), 1 => "content"), "method"), "textArea", array(0 => array("placeholder" => \common\helpers\My::t("Search term"))), "method");
        echo "
        </div>

        ";
        // line 64
        echo "        ";
        echo call_user_func_array($this->env->getFunction('html')->getCallable(), array("submitButton", array(0 => (\common\helpers\My::t("Search articles") . " <span class=\"glyphicon glyphicon-search\"></span>"), 1 => array("class" => "btn btn-default"))));
        // line 67
        echo "
        ";
        // line 68
        $this->env->getExtension('yii\twig\Extension')->endWidget("active_form");
        echo "
    </div>
</section>
    <div class=\"row\">
        ";
        // line 72
        echo yii\widgets\ListView::Widget(array("summary" => false, "dataProvider" =>         // line 74
($context["dataProvider"] ?? null), "emptyText" => call_user_func_array($this->env->getFunction('html')->getCallable(), array("tag", array(0 => "div", 1 => \common\helpers\My::t("We haven't created any articles yet."), 2 => array("class" => "box")))), "itemOptions" => array("class" => "item"), "itemView" => "_index.twig"));
        // line 78
        echo "
    </div>


";
    }

    public function getTemplateName()
    {
        return "search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 78,  123 => 74,  122 => 72,  115 => 68,  112 => 67,  109 => 64,  103 => 60,  96 => 56,  90 => 52,  88 => 46,  86 => 45,  79 => 40,  72 => 36,  65 => 32,  62 => 31,  59 => 29,  57 => 23,  48 => 17,  41 => 13,  35 => 10,  32 => 9,  27 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "search.twig", "D:\\Programmering\\Webb\\UniServerZ\\vhosts\\personal\\themes\\casual\\views\\article\\search.twig");
    }
}
