<?php

/* attachments.twig */
class __TwigTemplate_399d5c59bbef6a57268f05ed40e4d064e067d6dd1f61acb5096e551863440e31 extends yii\twig\Template
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
            // line 4
            echo call_user_func_array($this->env->getFunction('GalleryWidget')->getCallable(), array($this->getAttribute(($context["model"] ?? null), "imageGalleryFiles", array())));
            echo "
    ";
            // line 5
            echo call_user_func_array($this->env->getFunction('TextFilesTableWidget')->getCallable(), array(($context["model"] ?? null)));
            echo "
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
        return array (  30 => 5,  26 => 4,  21 => 3,  19 => 2,);
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
