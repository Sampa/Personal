<?php

/* view.twig */
class __TwigTemplate_75e5488b6cb8449b856f02e5e5760a73cb55011e61eff937e0f4431510957513 extends yii\twig\Template
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
        // line 2
        $this->env->getExtension('yii\twig\Extension')->addUses("yiiwidgetsDetailview");
        echo "

";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('yii\twig\Extension')->setProperty(($context["this"] ?? null), "title", $this->getAttribute(($context["model"] ?? null), "title", array())), "html", null, true);
        echo "
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('yii\twig\Extension')->setProperty(($context["this"] ?? null), "params", array("breadcrumbs" => array(0 => array("label" => \common\helpers\My::t("Articles"), "url" => array(0 => "index")), 1 => array("label" => \common\helpers\My::t($this->getAttribute(        // line 10
($context["model"] ?? null), "getCategoryName", array(), "method")), "url" => array(0 => ("articles/" . $this->getAttribute(($context["model"] ?? null), "getCategoryName", array(), "method")))), 2 => array("label" => $this->getAttribute(        // line 11
($context["this"] ?? null), "title", array()))))), "html", null, true);
        // line 13
        echo "


<div class=\"container\">
    <div class=\"row\">

        <div class=\"sidebox col-sm-12\">
            <!-- ARTICLE TITLE -->
            <h1 class=\"text-center\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["model"] ?? null), "title", array()), "html", null, true);
        echo "</h1>
            <div class=\"col-sm-5\" style=\"border-right: 1px dashed #333;\">

                <div class=\"row \">
                    <!-- ARTICLE CREATED -->
                    <div class=\"col-sm-push-1 col-sm-5\">
                        <span class=\"time\">
                        <span class=\"glyphicon glyphicon-calendar\"></span>
                        <small>
                            ";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["model"] ?? null), "created_at", array()), "F j/Y"), "html", null, true);
        echo "
                            <span class=\"glyphicon glyphicon-time\"></span>
                            ";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["model"] ?? null), "created_at", array()), "G:i"), "html", null, true);
        echo "
                        </small>
                        </span>
                    </div>
                    <div class=\"col-sm-6\">
                        <!-- ARTICLE CATEGORY -->
                        <span class=\"glyphicon glyphicon-tags\"></span>
                        ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute(($context["model"] ?? null), "getCategoryName", array(), "method"), "html", null, true);
        echo "
                        <!-- ARTICLE AUTHOR -->
                        <span class=\"glyphicon glyphicon-user\"></span>
                        ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["model"] ?? null), "getAuthorName", array(), "method"), "html", null, true);
        echo "
                    </div>

                </div>

                <hr>

                <div id=\"w0\" class=\"\" style=\"font-size: smaller;\">
                    <p> ";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute(($context["model"] ?? null), "summary", array()), "html", null, true);
        echo "</p>

                    <!-- the models attachment THINK ABOUT THIS-->
                    ";
        // line 53
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "can", array(0 => "updateArticle", 1 => array("model" => ($context["model"] ?? null))), "method")) {
            // line 54
            echo "                         ";
            $this->loadTemplate("attachments.twig", "view.twig", 54)->display($context);
            // line 55
            echo "                    ";
        } else {
            // line 56
            echo "                         ";
            $this->loadTemplate("attachments.twig", "view.twig", 56)->display($context);
            // line 57
            echo "                    ";
        }
        // line 58
        echo "                </div>

            </div>

            <!-- right column -->
            <div class=\"col-lg-7\" style=\"margin-top:0px;border-left: 1px dashed #333\">
                ";
        // line 64
        echo $this->getAttribute(($context["model"] ?? null), "content", array());
        echo "
            </div>

            <div class=\"pull-right\">

            ";
        // line 69
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "can", array(0 => "adminArticle"), "method")) {
            // line 70
            echo "
                ";
            // line 71
            echo call_user_func_array($this->env->getFunction('html')->getCallable(), array("a", array(0 => \common\helpers\My::t("Back"), 1 => array(0 => "admin"), 2 => array("class" => "btn btn-warning"))));
            echo "

            ";
        }
        // line 74
        echo "                
                ";
        // line 75
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "can", array(0 => "updateArticle", 1 => array("model" => ($context["model"] ?? null))), "method")) {
            // line 76
            echo "
                <a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('yii\twig\Extension')->path("article/update", array("id" => $this->getAttribute(($context["model"] ?? null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">";
            echo twig_escape_filter($this->env, \common\helpers\My::t("Update"), "html", null, true);
            echo "</a>
                ";
        }
        // line 79
        echo "
                ";
        // line 80
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "can", array(0 => "deleteArticle"), "method")) {
            // line 81
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('yii\twig\Extension')->path("article/delete", array("id" => $this->getAttribute(($context["model"] ?? null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\"
                   data-method=\"post\"
                   data-confirm=\"";
            // line 83
            echo twig_escape_filter($this->env, \common\helpers\My::t("Are you sure you want to delete this article?"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, \common\helpers\My::t("delete"), "html", null, true);
            echo "</a>
                ";
        }
        // line 85
        echo "
            </div>

        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 85,  163 => 83,  157 => 81,  155 => 80,  152 => 79,  145 => 77,  142 => 76,  140 => 75,  137 => 74,  131 => 71,  128 => 70,  126 => 69,  118 => 64,  110 => 58,  107 => 57,  104 => 56,  101 => 55,  98 => 54,  96 => 53,  90 => 50,  79 => 42,  73 => 39,  63 => 32,  58 => 30,  46 => 21,  36 => 13,  34 => 11,  33 => 10,  32 => 7,  28 => 6,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "view.twig", "D:\\Programmering\\Webb\\UniServerZ\\vhosts\\personal\\_protected\\frontend\\views\\article\\view.twig");
    }
}
