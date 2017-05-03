<?php

/* index.twig */
class __TwigTemplate_690561471f05e0a214a04e2b3cf807c16559d58a4e75fffb8ab8ed753032b021 extends yii\twig\Template
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
        // line 8
        echo "
";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('yii\twig\Extension')->setProperty(($context["this"] ?? null), "title", ((\common\helpers\My::t($this->getAttribute(($context["app"] ?? null), "name", array())) . " ") . \common\helpers\My::t("News"))), "html", null, true);
        echo "
";
        // line 11
        echo "<div id=\"secondNav\" class=\"row\" style=\"\">
    <ul class=\"secondNav\" style=\"\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(frontend\models\Article::getCategoryListItems(null, "li", array("role" => "presentation"), array()));
        foreach ($context['_seq'] as $context["_key"] => $context["li"]) {
            // line 14
            echo "            ";
            echo $context["li"];
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['li'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </ul>
</div>
<div class=\"col-xs-12 col-xs-push-2 col-sm-push-4 col-lg-push-0 categories-nav\">
    <ul class=\"nav nav-pills \">

    </ul>
</div>
<div class=\"col-xs-12\" style=\"\">

    ";
        // line 25
        echo yii\widgets\ListView::Widget(array("summary" => false, "dataProvider" =>         // line 27
($context["dataProvider"] ?? null), "emptyText" => call_user_func_array($this->env->getFunction('html')->getCallable(), array("tag", array(0 => "div", 1 => \common\helpers\My::t("We haven't created any articles yet."), 2 => array("class" => "box")))), "itemOptions" => array("class" => "item"), "itemView" => "_index.twig"));
        // line 31
        echo "

</div>";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 31,  59 => 27,  58 => 25,  47 => 16,  38 => 14,  34 => 13,  30 => 11,  26 => 9,  23 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.twig", "D:\\Programmering\\Webb\\UniServerZ\\vhosts\\personal\\themes\\casual\\views\\article\\index.twig");
    }
}
