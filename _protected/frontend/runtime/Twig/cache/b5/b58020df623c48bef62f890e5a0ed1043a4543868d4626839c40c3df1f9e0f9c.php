<?php

/* layouts/footer.twig */
class __TwigTemplate_5baa9b475efb5464e40fbbe894f48b9cab557accc8140d3528ea44c5d423e4fc extends yii\twig\Template
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
        echo "<footer class=\"footer\">

    <div class=\"container\">

        <div class=\"row\">
            <div class=\"col-lg-22 text-center\">

                <p>Copyright &copy; ";
        // line 8
        echo twig_escape_filter($this->env, \common\helpers\My::t($this->getAttribute(($context["app"] ?? null), "name", array())), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " ";
        echo $this->getAttribute(($context["Yii"] ?? null), "powered", array(), "method");
        echo "</p>
            </div>
        </div>

    </div>

</footer>";
    }

    public function getTemplateName()
    {
        return "layouts/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layouts/footer.twig", "D:\\Programmering\\Webb\\UniServerZ\\vhosts\\personal\\_protected\\frontend\\views\\layouts\\footer.twig");
    }
}
