<?php

/* main.twig */
class __TwigTemplate_33761531c156745bb73cde1dcd16184b5a1d46cd4316ee11f7bb3ef644d8d523 extends yii\twig\Template
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
        $context["assetDir"] = $this->env->getExtension('yii\twig\Extension')->registerAssetBundle($context, "frontend/assets/AppAsset");
        echo "  ";
        // line 2
        $this->env->getExtension('yii\twig\Extension')->addUses("LoginForm");
        echo "
";
        // line 3
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('void')->getCallable(), array($this->getAttribute(($context["this"] ?? null), "beginPage", array(), "method"))), "html", null, true);
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? null), "language", array()), "html", null, true);
        echo "\">
<head>
    <meta charset=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? null), "charset", array()), "html", null, true);
        echo "\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=2\">
    ";
        // line 9
        echo call_user_func_array($this->env->getFunction('html')->getCallable(), array("CsrfMetaTags"));
        echo "
    <title>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "title", array()), "html", null, true);
        echo "</title>
    ";
        // line 11
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('void')->getCallable(), array($this->getAttribute(($context["this"] ?? null), "head", array()))), "html", null, true);
        echo "
</head>
<body>
";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('void')->getCallable(), array($this->getAttribute(($context["this"] ?? null), "beginBody", array(), "method"))), "html", null, true);
        echo "
    <!-- TOP INTRO TEXTS + LOGO -->
    <div class=\"brand\"> <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "view", array()), "theme", array()), "baseUrl", array()), "html", null, true);
        echo "/img/redhand.svg\"> <span>Dovie' andi se tovya sagain</span> </div>
    <div class=\"address-bar\"> ";
        // line 17
        echo twig_escape_filter($this->env, \common\helpers\My::t("Programming"), "html", null, true);
        echo " | ";
        echo twig_escape_filter($this->env, \common\helpers\My::t("World Today"), "html", null, true);
        echo " | ";
        echo twig_escape_filter($this->env, \common\helpers\My::t("Fun"), "html", null, true);
        echo " | ";
        echo twig_escape_filter($this->env, \common\helpers\My::t("Personal"), "html", null, true);
        echo " </div>
    ";
        // line 18
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('PjaxBegin')->getCallable(), array()), "html", null, true);
        echo "
    <!-- NAVBAR/MENU -->
    ";
        // line 20
        $this->loadTemplate("navbar.twig", "main.twig", 20)->display($context);
        // line 21
        echo "
    <!-- BREADCRUMBS -->
    <div id=\"breadcrumbs\" class=\"row\"> ";
        // line 23
        echo call_user_func_array($this->env->getFunction('Breadcrumbs')->getCallable(), array(array("links" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "params", array()), "breadcrumbs", array(), "array"))));
        echo " </div>

    <!-- MAIN CONTENT -->
    <div class=\"container-fluid\" >
    <!-- RENDERED VIEW FILE -->
        <div  class=\"indexWrap\"> ";
        // line 28
        echo ($context["content"] ?? null);
        echo " </div>
    <!-- SLIDE OUT PANELS (Language/Search/Login)-->
        ";
        // line 30
        $this->loadTemplate("side.twig", "main.twig", 30)->display($context);
        // line 31
        echo "    </div>
    ";
        // line 32
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('PjaxEnd')->getCallable(), array()), "html", null, true);
        echo "
    <!-- FOOTER -->
    ";
        // line 34
        $this->loadTemplate("layouts/footer.twig", "main.twig", 34)->display($context);
        // line 35
        echo "
";
        // line 36
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('void')->getCallable(), array($this->getAttribute(($context["this"] ?? null), "endBody", array(), "method"))), "html", null, true);
        echo "
</body>
</html>
";
        // line 39
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('void')->getCallable(), array($this->getAttribute(($context["this"] ?? null), "endPage", array(), "method"))), "html", null, true);
    }

    public function getTemplateName()
    {
        return "main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 39,  113 => 36,  110 => 35,  108 => 34,  103 => 32,  100 => 31,  98 => 30,  93 => 28,  85 => 23,  81 => 21,  79 => 20,  74 => 18,  64 => 17,  60 => 16,  55 => 14,  49 => 11,  45 => 10,  41 => 9,  36 => 7,  31 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "main.twig", "D:\\Programmering\\Webb\\UniServerZ\\vhosts\\personal\\themes\\casual\\views\\layouts\\main.twig");
    }
}
