<?php

/* login.twig */
class __TwigTemplate_70d1643a6ce4ed943711ecd8f2d31976da826d07ac0ffd32b5adbcb03741e820 extends yii\twig\Template
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
        $this->env->getExtension('yii\twig\Extension')->addUses("yii.bootstrap.ActiveForm");
        echo "

";
        // line 8
        echo "
";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('yii\twig\Extension')->setProperty(($context["this"] ?? null), "title", \common\helpers\My::t("Login")), "html", null, true);
        echo "

<div class=\"site-login\">
    ";
        // line 13
        echo "    ";
        if ( !($context["inMainLayout"] ?? null)) {
            // line 14
            echo "    <div class=\"col-lg-4 col-lg-push-4 box bs-component\">
        <hr>
        <h3 class=\"text-center\"> ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "title", array()), "html", null, true);
            echo " </h3>
        <hr>
    ";
        } else {
            // line 19
            echo "    <div class=\"sidebox\" >
    ";
        }
        // line 21
        echo "        ";
        $context["form"] = $this->env->getExtension('yii\twig\Extension')->beginWidget("active_form", array("id" => "login-form", "action" => "/site/login", "options" => array("class" => "")));
        // line 26
        echo "         ";
        // line 27
        echo "         ";
        if (($this->getAttribute(($context["model"] ?? null), "scenario", array()) == "lwe")) {
            // line 28
            echo "            ";
            echo $this->getAttribute(($context["form"] ?? null), "field", array(0 => ($context["model"] ?? null), 1 => "email"), "method");
            echo "
         ";
        } else {
            // line 30
            echo "            ";
            echo $this->getAttribute(($context["form"] ?? null), "field", array(0 => ($context["model"] ?? null), 1 => "username"), "method");
            echo "
        ";
        }
        // line 32
        echo "        ";
        echo $this->getAttribute($this->getAttribute(($context["form"] ?? null), "field", array(0 => ($context["model"] ?? null), 1 => "password"), "method"), "passwordInput", array(), "method");
        echo "
        ";
        // line 33
        echo $this->getAttribute($this->getAttribute(($context["form"] ?? null), "field", array(0 => ($context["model"] ?? null), 1 => "rememberMe"), "method"), "checkbox", array(), "method");
        echo "

        <div style=\"color:#999;margin:1em 0\">
            ";
        // line 36
        echo twig_escape_filter($this->env, \common\helpers\My::t("If you forgot your password you can"), "html", null, true);
        echo "
            ";
        // line 37
        echo call_user_func_array($this->env->getFunction('html')->getCallable(), array("a", array(0 => \common\helpers\My::t("reset it"), 1 => array(0 => "site/request-password-reset"))));
        echo "
        </div>

        <div class=\"form-group\">
            ";
        // line 41
        echo call_user_func_array($this->env->getFunction('html')->getCallable(), array("SubmitButton", array(0 => \common\helpers\My::t("Login"), 1 => array("class" => "btn btn-primary", "name" => "login-button"))));
        echo "
        </div>

         ";
        // line 44
        $this->env->getExtension('yii\twig\Extension')->endWidget("active_form");
        echo "
        Not a member? <a href=\"/signup\">Sign up</a>
    </div> <!-- //wrapper div with col-4's -->

</div>
";
    }

    public function getTemplateName()
    {
        return "login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 44,  96 => 41,  89 => 37,  85 => 36,  79 => 33,  74 => 32,  68 => 30,  62 => 28,  59 => 27,  57 => 26,  54 => 21,  50 => 19,  44 => 16,  40 => 14,  37 => 13,  31 => 9,  28 => 8,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "login.twig", "D:\\Programmering\\Webb\\UniServerZ\\vhosts\\personal\\themes\\casual\\views\\site\\login.twig");
    }
}
