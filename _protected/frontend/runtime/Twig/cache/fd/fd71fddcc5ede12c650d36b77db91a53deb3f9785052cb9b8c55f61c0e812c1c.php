<?php

/* side.twig */
class __TwigTemplate_dd494bc6ee7212fb0a402df877ab5848d56cbed63252ccfb72f457dbaefaf3ce extends yii\twig\Template
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
";
        // line 2
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "isGuest", array())) {
            // line 3
            echo "<!-- SLIDE OUT LOGIN/SIGNUP -->
    <div id=\"slide-out-login\" >
        <a id=\"slide-out-login-handler\" class=\"btn btn-default\" href=\"#\" role=\"button\" >
            <span class=\"glyphicon glyphicon-user\"></span>
        </a>
        <div class=\"sidebox shadow6\" style=\"width:400px;padding: 0px 5px;\">
            ";
            // line 9
            echo $this->getAttribute(($context["this"] ?? null), "render", array(0 => "/site/login.twig", 1 => array("model" => ($context["loginForm"] ?? null), "inMainLayout" => true)), "method");
            echo "
        </div>
    </div>
";
        }
        // line 13
        echo "
<!-- SLIDE OUT SEARCH BOX -->
    <div id=\"slide-out-search\" >
        <a id=\"slide-out-search-handler\" class=\"btn btn-default\" href=\"#\" role=\"button\" >
           <span class=\"glyphicon glyphicon-search\"></span>
        </a>
        <div class=\"sidebox shadow6\" style=\"padding: 15px 5px;\">
            ";
        // line 20
        $this->env->getExtension('yii\twig\Extension')->addUses("yii/widgets/ActiveForm");
        echo "
            ";
        // line 21
        $context["form"] = $this->env->getExtension('yii\twig\Extension')->beginWidget("active_form", array("id" => "ArticleSearch", "method" => "get", "action" => "/search", "options" => array("class" => "form-horizontal", "role" => "search")));
        // line 27
        echo "            <div class=\"col-xs-9\">
                <input type=\"text\" id=\"articlesearch-title\" class=\"form-control\" name=\"ArticleSearch[title]\" value=\"aeia\" placeholder=\"Search term\">
            </div>
            ";
        // line 30
        echo call_user_func_array($this->env->getFunction('html')->getCallable(), array("submitButton", array(0 => "<span class=\"glyphicon glyphicon-search\"></span>", 1 => array("class" => "btn btn-default"))));
        // line 33
        echo "
            ";
        // line 34
        $this->env->getExtension('yii\twig\Extension')->endWidget("active_form");
        echo "
        </div>
    </div>

<!-- SLIDE OUT LANGUAGE SELECTOR -->
    <div id=\"slide-out-language\"  style=\"\">
        ";
        // line 40
        $context["language"] = "se";
        // line 41
        echo "        ";
        if (($this->getAttribute(($context["app"] ?? null), "language", array()) == "en")) {
            // line 42
            echo "            ";
            $context["language"] = "us";
            // line 43
            echo "        ";
        }
        // line 44
        echo "        <a id=\"slide-out-language-handler\" class=\"btn btn-default\" href=\"#\" role=\"button\">
             <span class=\"flag-icon flag-icon-";
        // line 45
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
        // line 55
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
        return array (  99 => 55,  87 => 45,  84 => 44,  81 => 43,  78 => 42,  75 => 41,  73 => 40,  64 => 34,  61 => 33,  59 => 30,  54 => 27,  52 => 21,  48 => 20,  39 => 13,  32 => 9,  24 => 3,  22 => 2,  19 => 1,);
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
