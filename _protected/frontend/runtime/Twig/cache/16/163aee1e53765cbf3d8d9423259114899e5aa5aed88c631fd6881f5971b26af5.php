<?php

/* navbar.twig */
class __TwigTemplate_751f7f94d7254534cea85c74071b2718021fbffb27bd7f348963d0a8309606a0 extends yii\twig\Template
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
        $this->env->getExtension('yii\twig\Extension')->addUses("yii.widgets.Pjax");
        echo "

";
        // line 3
        $this->env->getExtension('yii\twig\Extension')->beginWidget("nav_bar", array("brandLabel" => (("<div class=\"dovieBrand\">
            <img  src=\"" . $this->getAttribute($this->getAttribute($this->getAttribute(        // line 5
($context["app"] ?? null), "view", array()), "theme", array()), "baseUrl", array())) . "/img/redhand.svg\"><span> Dovie' andi se tovya sagain</span>
            </div>"), "brandUrl" => $this->getAttribute(        // line 7
($context["app"] ?? null), "homeUrl", array()), "brandOptions" => array("style" => "display: block;"), "options" => array("class" => "navbar-default"), "renderInnerContainer" => true));
        // line 11
        echo "

<!-- everyone can see Home page -->
";
        // line 14
        $context["menuItems"] = array(0 => array("label" => \common\helpers\My::t("Home"), "url" => array(0 => $this->getAttribute(        // line 15
($context["app"] ?? null), "homeUrl", array()))), 1 => array("label" => "About", "url" => array(0 => "/about")), 2 => array("label" => \common\helpers\My::t("Contact"), "url" => array(0 => "/contact")));
        // line 19
        echo "
<!-- we do not need to display Article/index, About and Contact pages to editor+ roles -->
";
        // line 21
        if ( !$this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "can", array(0 => "editor"), "method")) {
            // line 22
            echo "    ";
            $context["menuItems"] = twig_array_merge(($context["menuItems"] ?? null), frontend\models\Article::getCategoryListItems(null, "menu"));
            // line 25
            echo "
";
        } elseif ($this->getAttribute($this->getAttribute(        // line 26
($context["app"] ?? null), "user", array()), "can", array(0 => "editor"), "method")) {
            // line 27
            echo "    ";
            $context["menuItems"] = twig_array_merge(($context["menuItems"] ?? null), array(0 => array("label" => \common\helpers\My::t("Articles"), "url" => array(0 => "/articles"), "items" => array(0 => array("label" => \common\helpers\My::t("All"), "url" => array(0 => "/articles")), 1 => array("label" => \common\helpers\My::t("Admin"), "url" => array(0 => "/article/admin")), 2 => array("label" => \common\helpers\My::t("Create"), "url" => array(0 => "/article/create")), 3 => array("label" => \common\helpers\My::t("Sport"), "url" => array(0 => ("/articles/" . \common\helpers\My::t("Sport")))), 4 => array("label" => \common\helpers\My::t("Economy"), "url" => array(0 => ("/articles/" . \common\helpers\My::t("Economy")))), 5 => array("label" => \common\helpers\My::t("Society"), "url" => array(0 => ("/articles/" . \common\helpers\My::t("Society"))))))));
        }
        // line 41
        echo "
    ";
        // line 42
        echo $this->env->getExtension('yii\twig\Extension')->widget("nav", array("options" => array("class" => "navbar-nav navbar"), "items" =>         // line 44
($context["menuItems"] ?? null)));
        // line 45
        echo "

    ";
        // line 47
        $this->env->getExtension('yii\twig\Extension')->endWidget("nav_bar");
        echo "


";
    }

    public function getTemplateName()
    {
        return "navbar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 47,  62 => 45,  60 => 44,  59 => 42,  56 => 41,  52 => 27,  50 => 26,  47 => 25,  44 => 22,  42 => 21,  38 => 19,  36 => 15,  35 => 14,  30 => 11,  28 => 7,  26 => 5,  24 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "navbar.twig", "D:\\Programmering\\Webb\\UniServerZ\\vhosts\\personal\\_protected\\frontend\\views\\layouts\\navbar.twig");
    }
}
