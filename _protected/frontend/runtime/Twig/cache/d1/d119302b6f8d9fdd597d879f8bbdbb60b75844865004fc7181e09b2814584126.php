<?php

/* categories.twig */
class __TwigTemplate_758f3354395dbe77a6ceef2341ed026532977273f0b786b70ae8c73234ad34ee extends yii\twig\Template
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
        echo "<div class=\"col-xs-4 col-xs-push-5 categories-nav\">
    <ul class=\"nav nav-tabs \">
        <li role=\"presentation\"><a href=\"/article/category?name=economy\" style=\"color: rgb(165,0,0)\" class=\"active\">Economy</a></li>
        <li role=\"presentation\"><a href=\"/article/category?name=society\" style=\"color: rgb(165,0,0)\">Society</a></li>
        <li role=\"presentation\"><a href=\"/article/category?name=sport\" style=\"color: rgb(165,0,0)\">Sport</a></li>
    </ul>
    ";
        // line 7
        echo twig_escape_filter($this->env, ($context["categories"] ?? null), "html", null, true);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "categories.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "categories.twig", "D:\\Programmering\\Webb\\UniServerZ\\vhosts\\personal\\themes\\casual\\views\\article\\categories.twig");
    }
}
