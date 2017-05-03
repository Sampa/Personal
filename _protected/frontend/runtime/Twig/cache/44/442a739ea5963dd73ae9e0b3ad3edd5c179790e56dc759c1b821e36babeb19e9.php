<?php

/* attachments.twig */
class __TwigTemplate_43ae61ffce86c2cb3b00243609bdc9290b163632f4d086bff7c12e23ed87e4c3 extends yii\twig\Template
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
    ";
            // line 5
            echo "    ";
            // line 6
            echo "    ";
            // line 7
            echo "    ";
            echo call_user_func_array($this->env->getFunction('AttachmentsWidget')->getCallable(), array("TablePreview", ($context["model"] ?? null)));
            echo "
    ";
            // line 9
            echo "    ";
            // line 10
            echo "    ";
            // line 11
            echo "    ";
            // line 12
            echo "    ";
            // line 13
            echo "</table>
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
        return array (  43 => 13,  41 => 12,  39 => 11,  37 => 10,  35 => 9,  30 => 7,  28 => 6,  26 => 5,  21 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "attachments.twig", "D:\\Programmering\\Webb\\UniServerZ\\vhosts\\personal\\_protected\\frontend\\views\\article\\attachments.twig");
    }
}
