<?php

/* side.twig */
class __TwigTemplate_e8641c30626a7b456ea686a4bfd4ce7d1d33673500844d3f073f5db777f2710d extends yii\twig\Template
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
        echo "<div id=\"slide-out-wrapper\">
<!-- SLIDE OUT LOGIN/SIGNUP -->
        <div id=\"slide-out-login\" >
        <a id=\"slide-out-login-handler\" class=\"btn btn-default\" href=\"#\" role=\"button\" >
            <span class=\"glyphicon glyphicon-user\"></span>
        </a>
            ";
        // line 7
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "isGuest", array())) {
            echo " ";
            // line 8
            echo "            <div class=\"sidebox shadow6\" style=\"width:400px;padding: 0px 5px;\">
            ";
            // line 9
            echo $this->getAttribute(($context["this"] ?? null), "render", array(0 => "/site/login.twig", 1 => array("model" => ($context["loginForm"] ?? null), "inMainLayout" => true)), "method");
            echo "
            </div>
            ";
        } else {
            // line 11
            echo " <!-- USER TOOLS FOR LOGGED IN USERS-->
                <!-- this link makes POST , js in theme.js -->
                ";
            // line 13
            echo call_user_func_array($this->env->getFunction('html')->getCallable(), array("a", array(0 => (((\common\helpers\My::t("Logout") . "(") . $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "identity", array()), "username", array())) . ")"), 1 => array(0 => "/logout"), 2 => array("id" => "sideLogout"))));
            echo "
            ";
        }
        // line 15
        echo "        </div>

<!-- SLIDE OUT SEARCH BOX -->
    <div id=\"slide-out-search\" >
        <a id=\"slide-out-search-handler\" class=\"btn btn-default\" href=\"#\" role=\"button\" >
           <span class=\"glyphicon glyphicon-search\"></span>
        </a>
        <div class=\"sidebox shadow6\" style=\"padding: 15px 5px;\">
            ";
        // line 23
        $this->env->getExtension('yii\twig\Extension')->addUses("yii/widgets/ActiveForm");
        echo "
            ";
        // line 24
        $context["form"] = $this->env->getExtension('yii\twig\Extension')->beginWidget("active_form", array("id" => "ArticleSearch", "method" => "get", "action" => "/search", "options" => array("class" => "form-horizontal", "role" => "search")));
        // line 30
        echo "            <div class=\"col-xs-9\">
                <input type=\"text\" id=\"articlesearch-title\" class=\"form-control\" name=\"ArticleSearch[title]\" value=\"aeia\" placeholder=\"Search term\">
            </div>
            ";
        // line 33
        echo call_user_func_array($this->env->getFunction('html')->getCallable(), array("submitButton", array(0 => "<span class=\"glyphicon glyphicon-search\"></span>", 1 => array("class" => "btn btn-default"))));
        // line 36
        echo "
            ";
        // line 37
        $this->env->getExtension('yii\twig\Extension')->endWidget("active_form");
        echo "
        </div>
    </div>

<!-- SLIDE OUT LANGUAGE SELECTOR -->
    <div id=\"slide-out-language\"  style=\"\">
        ";
        // line 43
        $context["language"] = "se";
        // line 44
        echo "        ";
        if (($this->getAttribute(($context["app"] ?? null), "language", array()) == "en")) {
            // line 45
            echo "            ";
            $context["language"] = "us";
            // line 46
            echo "        ";
        }
        // line 47
        echo "        <a id=\"slide-out-language-handler\" class=\"btn btn-default\" href=\"#\" role=\"button\">
             <span class=\"flag-icon flag-icon-";
        // line 48
        echo twig_escape_filter($this->env, ($context["language"] ?? null), "html", null, true);
        echo "\"></span>
        </a>
        <div class=\"sidebox shadow6\" style=\"padding: 15px 5px;\">
            <div class=\"btn-group-vertical\" role=\"group\" aria-label=\"...\">
                <a href=\"/en/site/index\" class=\"btn btn-default \"><span class=\"flag-icon flag-icon-us flag\"></span></a>
                <a href=\"/se/site/index\" class=\"btn btn-default \"><span class=\"flag-icon flag-icon-se flag\"></span></a>
            </div>
        </div>

        ";
        // line 58
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "side.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 58,  97 => 48,  94 => 47,  91 => 46,  88 => 45,  85 => 44,  83 => 43,  74 => 37,  71 => 36,  69 => 33,  64 => 30,  62 => 24,  58 => 23,  48 => 15,  43 => 13,  39 => 11,  33 => 9,  30 => 8,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "side.twig", "D:\\Programmering\\Webb\\UniServerZ\\vhosts\\personal\\themes\\casual\\views\\layouts\\side.twig");
    }
}
