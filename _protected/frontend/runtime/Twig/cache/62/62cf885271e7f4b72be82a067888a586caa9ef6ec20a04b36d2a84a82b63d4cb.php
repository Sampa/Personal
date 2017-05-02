<?php

/* view.twig */
class __TwigTemplate_218cc407c116d51515c9500ae51863f3a74bb3ecdbcdd9a24365e7a5908b61b2 extends yii\twig\Template
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
            <h1 class=\"text-center\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "title", array()), "html", null, true);
        echo "</h1>
            <div class=\"col-sm-5\">

                <div class=\"row \">
                    <!-- ARTICLE CREATED -->
                    <div class=\"col-sm-push-1 col-sm-5\">
                        <span class=\"time\">
                        <span class=\"glyphicon glyphicon-calendar\"></span>
                        <small>
                            ";
        // line 29
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["model"] ?? null), "created_at", array()), "F j/Y"), "html", null, true);
        echo "
                            <span class=\"glyphicon glyphicon-time\"></span>
                            ";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["model"] ?? null), "created_at", array()), "G:i"), "html", null, true);
        echo "
                        </small>
                        </span>
                    </div>
                    <!-- ARTICLE CATEGORY -->
                    <div class=\"col-sm-3\">
                       <span class=\"glyphicon glyphicon-tags\"></span>
                       ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["model"] ?? null), "getCategoryName", array(), "method"), "html", null, true);
        echo "
                    </div>
                    <!-- ARTICLE AUTHOR -->
                    <div class=\"col-sm-3\">
                        <span class=\"glyphicon glyphicon-user\"></span>
                        ";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute(($context["model"] ?? null), "getAuthorName", array(), "method"), "html", null, true);
        echo "
                    </div>
                </div>
                <hr>
                <div class=\"\" style=\"font-size: smaller\">
                    <p> ";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute(($context["model"] ?? null), "summary", array()), "html", null, true);
        echo "</p>
                </div>
            </div>

            <div class=\"col-lg-7\" style=\"margin-top:0px;border-left: 1px dashed #333\">
                ";
        // line 53
        echo $this->getAttribute(($context["model"] ?? null), "content", array());
        echo "
            </div>

            <div class=\"pull-right\">

            ";
        // line 58
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "can", array(0 => "adminArticle"), "method")) {
            // line 59
            echo "
                ";
            // line 60
            echo call_user_func_array($this->env->getFunction('html')->getCallable(), array("a", array(0 => \common\helpers\My::t("Back"), 1 => array(0 => "admin"), 2 => array("class" => "btn btn-warning"))));
            echo "

            ";
        }
        // line 63
        echo "                
                ";
        // line 64
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "can", array(0 => "updateArticle", 1 => array("model" => ($context["model"] ?? null))), "method")) {
            // line 65
            echo "
                <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('yii\twig\Extension')->path("article/update", array("id" => $this->getAttribute(($context["model"] ?? null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\">";
            echo twig_escape_filter($this->env, \common\helpers\My::t("Update"), "html", null, true);
            echo "</a>
                ";
        }
        // line 68
        echo "
                ";
        // line 69
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "can", array(0 => "deleteArticle"), "method")) {
            // line 70
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('yii\twig\Extension')->path("article/delete", array("id" => $this->getAttribute(($context["model"] ?? null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary\"
                   data-method=\"post\"
                   data-confirm=\"";
            // line 72
            echo twig_escape_filter($this->env, \common\helpers\My::t("Are you sure you want to delete this article?"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, \common\helpers\My::t("delete"), "html", null, true);
            echo "</a>
                ";
        }
        // line 74
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
        return array (  148 => 74,  141 => 72,  135 => 70,  133 => 69,  130 => 68,  123 => 66,  120 => 65,  118 => 64,  115 => 63,  109 => 60,  106 => 59,  104 => 58,  96 => 53,  88 => 48,  80 => 43,  72 => 38,  62 => 31,  57 => 29,  45 => 20,  36 => 13,  34 => 11,  33 => 10,  32 => 7,  28 => 6,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "view.twig", "D:\\Programmering\\Webb\\UniServerZ\\vhosts\\personal\\themes\\casual\\views\\article\\view.twig");
    }
}
