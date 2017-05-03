<?php

/* _index.twig */
class __TwigTemplate_5917dfe5f6dfa22fca3a64863305803bd37b4472b3da5b02316cfabfc021e382 extends yii\twig\Template
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
    <img class=\"img-responsive img-border img-full\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "getUrl", array(0 => "img/slide-1.jpg"), "method"), "html", null, true);
        echo "\" alt=\"\">

    <p>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["model"] ?? null), "summary", array()), "html", null, true);
        echo "</p>
    <a href=\"view?id=";
        // line 18
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
        return array (  63 => 18,  59 => 17,  54 => 15,  48 => 14,  42 => 11,  36 => 8,  26 => 5,  19 => 1,);
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
