<?php

/* navbar.twig */
class __TwigTemplate_1836ef661d5e4f4a2aa87d9c139a31412302d014068f01d2983950f12e719dd5 extends yii\twig\Template
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
            $context["menuItems"] = twig_array_merge(($context["menuItems"] ?? null), array(0 => array("label" => \common\helpers\My::t("Articles"), "url" => array(0 => "/articles"), "items" => array(0 => array("label" => \common\helpers\My::t("All"), "url" => array(0 => "/articles")), 1 => array("label" => \common\helpers\My::t("Admin"), "url" => array(0 => "/article/admin")), 2 => array("label" => \common\helpers\My::t("Sport"), "url" => array(0 => ("/articles/" . \common\helpers\My::t("Sport")))), 3 => array("label" => \common\helpers\My::t("Economy"), "url" => array(0 => ("/articles/" . \common\helpers\My::t("Economy")))), 4 => array("label" => \common\helpers\My::t("Society"), "url" => array(0 => ("/articles/" . \common\helpers\My::t("Society"))))))));
        }
        // line 41
        echo "
    ";
        // line 42
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "isGuest", array()) == false)) {
            // line 43
            echo "        ";
            $context["menuItems"] = twig_array_merge(($context["menuItems"] ?? null), array(0 => array("label" => "About", "url" => array(0 => "/about")), 1 => array("label" => (((\common\helpers\My::t("logout") . "(") . $this->getAttribute($this->getAttribute($this->getAttribute(            // line 46
($context["app"] ?? null), "user", array()), "identity", array()), "username", array())) . ")"), "url" => array(0 => "/logout"), "linkOptions" => array("data-method" => "post"))));
            // line 52
            echo "    ";
        } else {
            // line 53
            echo "        ";
            // line 60
            echo "
    ";
        }
        // line 62
        echo "    ";
        echo $this->env->getExtension('yii\twig\Extension')->widget("nav", array("options" => array("class" => "navbar-nav navbar"), "items" =>         // line 64
($context["menuItems"] ?? null)));
        // line 65
        echo "

    ";
        // line 67
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
        return array (  87 => 67,  83 => 65,  81 => 64,  79 => 62,  75 => 60,  73 => 53,  70 => 52,  68 => 46,  66 => 43,  64 => 42,  61 => 41,  57 => 28,  55 => 27,  52 => 26,  49 => 25,  46 => 24,  43 => 18,  41 => 17,  37 => 15,  35 => 14,  30 => 11,  28 => 7,  26 => 5,  24 => 3,  19 => 1,);
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
