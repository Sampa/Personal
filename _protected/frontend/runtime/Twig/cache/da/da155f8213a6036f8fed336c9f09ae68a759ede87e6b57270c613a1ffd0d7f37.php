<?php

/* contact.twig */
class __TwigTemplate_8fcd8e03391503ffd243a9f7b490915eedd0cb51dd88d5290c5bbf1124721a37 extends yii\twig\Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('yii\twig\Extension')->setProperty(($context["this"] ?? null), "title", ((\common\helpers\My::t($this->getAttribute(($context["app"] ?? null), "name", array())) . " ") . \common\helpers\My::t("Contact"))), "html", null, true);
        echo "
<div class=\"container\">

    <div class=\"row\">
        <div class=\"box\">
            <div class=\"col-lg-12\">
                <hr>
                <h2 class=\"intro-text text-center\">Contact
                    <strong>business casual</strong>
                </h2>
                <hr>
            </div>

            <div class=\"col-md-8\">
                <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                <iframe width=\"100%\" height=\"400\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"
                        src=\"http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed\"></iframe>
            </div>

            <div class=\"col-md-4\">
                <p>";
        // line 21
        echo \common\helpers\My::t("Phone");
        echo ":
                    <strong>+46736995406</strong>
                </p>
                <p>";
        // line 24
        echo \common\helpers\My::t("Email");
        echo ":
                    <strong><a href=\"mailto:";
        // line 25
        echo twig_escape_filter($this->env, \common\helpers\My::param("adminEmail"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, \common\helpers\My::param("adminEmail"), "html", null, true);
        echo "</a></strong>
                </p>
                <p>Address:
                    <strong>";
        // line 28
        echo twig_escape_filter($this->env, \common\helpers\My::param("adminStreet"), "html", null, true);
        echo "
                        <br>";
        // line 29
        echo twig_escape_filter($this->env, \common\helpers\My::param("adminCity"), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, \common\helpers\My::param("adminCountry"), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, \common\helpers\My::param("adminZip"), "html", null, true);
        echo "</strong>
                </p>
            </div>

            <div class=\"clearfix\"></div>
        </div> <!-- //box -->
    </div> <!-- //row -->

    <div class=\"row\">
        <div class=\"box\">
                <hr>
                <h2 class=\"intro-text text-center\">Contact
                    <strong>form</strong>
                </h2>
                <hr>

                <p class=\"col-lg-12\">";
        // line 45
        echo \common\helpers\My::t("If you have business inquiries or other questions,
                    please fill out the following form to contact us. Thank you.");
        // line 46
        echo "</p>

                ";
        // line 48
        $this->env->getExtension('yii\twig\Extension')->addUses("yii/widgets/ActiveForm");
        echo "
                ";
        // line 49
        $context["form"] = $this->env->getExtension('yii\twig\Extension')->beginWidget("active_form", array("id" => "contact-form", "options" => array("class" => "")));
        // line 53
        echo "                ";
        echo $this->getAttribute(($context["form"] ?? null), "field", array(0 => ($context["model"] ?? null), 1 => "name", 2 => array("options" => array("class" => "col-lg-4"))), "method");
        echo "
                ";
        // line 54
        echo $this->getAttribute(($context["form"] ?? null), "field", array(0 => ($context["model"] ?? null), 1 => "email", 2 => array("options" => array("class" => "col-lg-4"))), "method");
        echo "
                ";
        // line 55
        echo $this->getAttribute(($context["form"] ?? null), "field", array(0 => ($context["model"] ?? null), 1 => "subject", 2 => array("options" => array("class" => "col-lg-4"))), "method");
        echo "
                ";
        // line 56
        echo $this->getAttribute($this->getAttribute(($context["form"] ?? null), "field", array(0 => ($context["model"] ?? null), 1 => "body", 2 => array("options" => array("class" => "col-lg-12"))), "method"), "textArea", array(0 => array("rows" => 6)), "method");
        echo "
                ";
        // line 57
        echo $this->getAttribute($this->getAttribute(($context["form"] ?? null), "field", array(0 => ($context["model"] ?? null), 1 => "verifyCode", 2 => array("options" => array("class" => "col-lg-12"))), "method"), "widget", array(0 => \yii\captcha\Captcha::className(), 1 => array("template" => "<div class=\"row\"><div class=\"col-lg-2\">{image}</div><div class=\"col-lg-3\">{input}</div></div>")), "method");
        // line 59
        echo "

                <div class=\"form-group col-lg-6\">
                    ";
        // line 62
        echo call_user_func_array($this->env->getFunction('html')->getCallable(), array("SubmitButton", array(0 => \common\helpers\My::t("Submit"), 1 => array("class" => "btn btn-primary", "name" => "contact-button"))));
        echo "
                </div>

                ";
        // line 65
        $this->env->getExtension('yii\twig\Extension')->endWidget("active_form");
        echo "
        </div> <!--//box-->
    </div> <!-- //row -->
</div> <!-- //container -->
";
    }

    public function getTemplateName()
    {
        return "contact.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 65,  124 => 62,  119 => 59,  117 => 57,  113 => 56,  109 => 55,  105 => 54,  100 => 53,  98 => 49,  94 => 48,  90 => 46,  87 => 45,  64 => 29,  60 => 28,  52 => 25,  48 => 24,  42 => 21,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "contact.twig", "D:\\Programmering\\Webb\\UniServerZ\\vhosts\\personal\\themes\\casual\\views\\site\\contact.twig");
    }
}
