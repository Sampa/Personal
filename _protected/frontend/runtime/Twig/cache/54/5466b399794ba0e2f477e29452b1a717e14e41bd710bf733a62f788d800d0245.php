<?php

/* _index.twig */
class __TwigTemplate_3b7c88369602c92893fa718aaa91d5c0df45a54845f4cb2b2840cf24985e3f5f extends yii\twig\Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('yii\twig\Extension')->setProperty(($context["this"] ?? null), "title", ((\common\helpers\My::t($this->getAttribute(($context["app"] ?? null), "name", array())) . " ") . $this->getAttribute(($context["model"] ?? null), "title", array()))), "html", null, true);
        echo "
<div class=\"col-lg-4 col-md-6\">
    <div class=\"box text-center\" >
        #";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["model"] ?? null), "id", array()), "html", null, true);
        echo "
        <h2 class=\"intro-text text-center\"><a href=\"/article/";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["model"] ?? null), "id", array()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute(($context["model"] ?? null), "title", array()), array(" " => "_")), "html", null, true);
        echo "\" class=\"oldRedText\"> ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["model"] ?? null), "title", array()), "html", null, true);
        echo " </a></h2>
        <hr>
            <span class=\"glyphicon glyphicon-time\"></span>
            <small>";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["model"] ?? null), "created_at", array()), "F j, Y "), "html", null, true);
        echo " </small>
             |
            <span class=\"glyphicon glyphicon-user\"></span>
            <small> ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["model"] ?? null), "getAuthorName", array(), "method"), "html", null, true);
        echo "</small>
             |
            <span class=\"glyphicon glyphicon-tags\"></span>
            <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('yii\twig\Extension')->path(array(0 => ((\common\helpers\My::t("articles") . "/") . $this->getAttribute(($context["model"] ?? null), "getCategoryName", array(), "method")))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["model"] ?? null), "getCategoryName", array(), "method"), "html", null, true);
        echo "</a>

            ";
        // line 17
        echo "
            <p>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["model"] ?? null), "summary", array()), "html", null, true);
        echo "</p>
            ";
        // line 19
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "can", array(0 => "updateArticle", 1 => array("model" => ($context["model"] ?? null))), "method")) {
            // line 20
            echo "                ";
            // line 21
            echo "            ";
        } else {
            // line 22
            echo "                ";
            // line 23
            echo "            ";
        }
        // line 24
        echo "            <a href=\"view?id=";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["model"] ?? null), "id", array()), "html", null, true);
        echo "\" class=\"oldRedText btn btn-default btn-lg\">";
        echo twig_escape_filter($this->env, \common\helpers\My::t("Read more"), "html", null, true);
        echo "</a>

    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "_index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 24,  74 => 23,  72 => 22,  69 => 21,  67 => 20,  65 => 19,  61 => 18,  58 => 17,  51 => 14,  45 => 11,  39 => 8,  29 => 5,  25 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "_index.twig", "D:\\Programmering\\Webb\\UniServerZ\\vhosts\\personal\\themes\\casual\\views\\article\\_index.twig");
    }
}
