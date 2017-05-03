<?php

/* navbar.twig */
class __TwigTemplate_785ee30aa561257a1ec50331968c26219a0bc5c4fab94e232126ca24db0f3752 extends yii\twig\Template
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
        $context["menuItems"] = array(0 => array("label" => \common\helpers\My::t("Home"), "url" => array(0 => $this->getAttribute(($context["app"] ?? null), "homeUrl", array()))));
        // line 15
        echo "
<!-- we do not need to display Article/index, About and Contact pages to editor+ roles -->
";
        // line 17
        if ( !$this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "can", array(0 => "editor"), "method")) {
            // line 18
            echo "    ";
            $context["menuItems"] = twig_array_merge(($context["menuItems"] ?? null), array(0 => array("label" => \common\helpers\My::t("Articles"), "url" => "/articles")));
            // line 24
            echo "    ";
            $context["menuItems"] = twig_array_merge(($context["menuItems"] ?? null), array(0 => array("label" => \common\helpers\My::t("About"), "url" => array(0 => "/about"))));
            // line 25
            echo "    ";
            $context["menuItems"] = twig_array_merge(($context["menuItems"] ?? null), array(0 => array("label" => \common\helpers\My::t("Contact"), "url" => array(0 => "/contact"))));
            // line 26
            echo "
";
        } elseif ($this->getAttribute($this->getAttribute(        // line 27
($context["app"] ?? null), "user", array()), "can", array(0 => "editor"), "method")) {
            // line 28
            echo "    ";
            $context["menuItems"] = twig_array_merge(($context["menuItems"] ?? null), array(0 => array("label" => \common\helpers\My::t("Articles"), "url" => array(0 => "/articles"), "items" => array(0 => array("label" => \common\helpers\My::t("All"), "url" => array(0 => "/articles")), 1 => array("label" => \common\helpers\My::t("Admin"), "url" => array(0 => "/article/admin")), 2 => array("label" => \common\helpers\My::t("Create"), "url" => array(0 => "/article/create")), 3 => array("label" => \common\helpers\My::t("Sport"), "url" => array(0 => ("/articles/" . \common\helpers\My::t("Sport")))), 4 => array("label" => \common\helpers\My::t("Economy"), "url" => array(0 => ("/articles/" . \common\helpers\My::t("Economy")))), 5 => array("label" => \common\helpers\My::t("Society"), "url" => array(0 => ("/articles/" . \common\helpers\My::t("Society"))))))));
        }
        // line 42
        echo "
    ";
        // line 43
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "isGuest", array()) == false)) {
            // line 44
            echo "        ";
            $context["menuItems"] = twig_array_merge(($context["menuItems"] ?? null), array(0 => array("label" => "About", "url" => array(0 => "/about")), 1 => array("label" => (((\common\helpers\My::t("logout") . "(") . $this->getAttribute($this->getAttribute($this->getAttribute(            // line 47
($context["app"] ?? null), "user", array()), "identity", array()), "username", array())) . ")"), "url" => array(0 => "/logout"), "linkOptions" => array("data-method" => "post"))));
            // line 53
            echo "    ";
        } else {
            // line 54
            echo "        ";
            // line 61
            echo "
    ";
        }
        // line 63
        echo "    ";
        echo $this->env->getExtension('yii\twig\Extension')->widget("nav", array("options" => array("class" => "navbar-nav navbar"), "items" =>         // line 65
($context["menuItems"] ?? null)));
        // line 66
        echo "

    ";
        // line 68
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
        return array (  87 => 68,  83 => 66,  81 => 65,  79 => 63,  75 => 61,  73 => 54,  70 => 53,  68 => 47,  66 => 44,  64 => 43,  61 => 42,  57 => 28,  55 => 27,  52 => 26,  49 => 25,  46 => 24,  43 => 18,  41 => 17,  37 => 15,  35 => 14,  30 => 11,  28 => 7,  26 => 5,  24 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "navbar.twig", "D:\\Programmering\\Webb\\UniServerZ\\vhosts\\personal\\themes\\casual\\views\\layouts\\navbar.twig");
    }
}
