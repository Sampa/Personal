<?php

/* attachments.twig */
class __TwigTemplate_60e4a56f61d127578ae9b6ad9860b0e119bb33566c5043a457330a10c69b2aef extends yii\twig\Template
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
        // line 2
        if ($this->getAttribute(($context["model"] ?? null), "attachments", array())) {
            // line 3
            echo "    <h4 class=\"oldRedText\">";
            echo twig_escape_filter($this->env, \common\helpers\My::t("Attachments"), "html", null, true);
            echo "</h4>
<table class=\"table table-striped table-bordered table-hover table-condensed\">

    <thead>
    <tr>
    </tr>
    </thead>

    <tbody>
    <tr data-key=\"0\">

    ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["model"] ?? null), "attachments", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                echo " ";
                // line 15
                echo "        <td>
        ";
                // line 16
                if (($this->getAttribute($context["file"], "group", array()) == "image")) {
                    // line 17
                    echo "            ";
                    $context["class"] = "gallery-item";
                    // line 18
                    echo "            <a title =\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "name", array()), "html", null, true);
                    echo "\" href=\"/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "path", array()), "html", null, true);
                    echo "\" class=\"";
                    echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
                    echo "\">
                <img src=\"/";
                    // line 19
                    echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "path", array()), "html", null, true);
                    echo "\" width=\"50\" height=\"50\">
            </a>
        ";
                } else {
                    // line 22
                    echo "            <a title =\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "name", array()), "html", null, true);
                    echo "\" href=\"/attachments/file/download?id=";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "id", array()), "html", null, true);
                    echo "\" class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "group", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "name", array()), "html", null, true);
                    echo "</a>
        ";
                }
                // line 24
                echo "        </td>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "    </tr>

    </tbody>
</table>
";
        }
    }

    public function getTemplateName()
    {
        return "attachments.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 26,  76 => 24,  64 => 22,  58 => 19,  49 => 18,  46 => 17,  44 => 16,  41 => 15,  36 => 14,  21 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "attachments.twig", "D:\\Programmering\\Webb\\UniServerZ\\vhosts\\personal\\themes\\casual\\views\\article\\attachments.twig");
    }
}
