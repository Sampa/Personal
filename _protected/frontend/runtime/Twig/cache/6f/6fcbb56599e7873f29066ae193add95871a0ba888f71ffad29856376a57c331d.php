<?php

/* _form.twig */
class __TwigTemplate_cad94a0e80389326787c4129962473c5b56b3de7583cd153964abfda77939e8e extends yii\twig\Template
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
        $this->env->getExtension('yii\twig\Extension')->addUses("mihaildevckeditorCKEditor");
        echo "
";
        // line 2
        $this->env->getExtension('yii\twig\Extension')->addUses("yiihelpersHtml");
        echo "
";
        // line 3
        $this->env->getExtension('yii\twig\Extension')->addUses("yiiwidgetsActiveForm");
        echo "
";
        // line 4
        $this->env->getExtension('yii\twig\Extension')->addUses("dosamigosileuploadFileUpload");
        echo "
";
        // line 5
        $this->env->getExtension('yii\twig\Extension')->addUses("dosamigosileuploadFileUploadUi");
        echo "



";
        // line 12
        echo "

<div class=\"article-form\">

    ";
        // line 16
        $context["form"] = $this->env->getExtension('yii\twig\Extension')->beginWidget("active_form");
        // line 17
        echo "
        ";
        // line 18
        echo $this->getAttribute($this->getAttribute(($context["form"] ?? null), "field", array(0 => ($context["model"] ?? null), 1 => "title"), "method"), "textInput", array(0 => array("maxlength" => 255)), "method");
        echo "

        ";
        // line 20
        echo $this->getAttribute($this->getAttribute(($context["form"] ?? null), "field", array(0 => ($context["model"] ?? null), 1 => "summary"), "method"), "textarea", array(0 => array("rows" => 6)), "method");
        echo "

        ";
        // line 22
        echo $this->getAttribute($this->getAttribute(($context["form"] ?? null), "field", array(0 => ($context["model"] ?? null), 1 => "content"), "method"), "widget", array(0 => call_user_func_array($this->env->getFunction('CKEditorClassName')->getCallable(), array()), 1 => array("editorOptions" => array("preset" => "full", "inline" => false))), "method");
        // line 23
        echo "

    <div class=\"row\">
        <div class=\"col-lg-6\">

            ";
        // line 28
        echo $this->getAttribute($this->getAttribute(($context["form"] ?? null), "field", array(0 => ($context["model"] ?? null), 1 => "status"), "method"), "dropDownList", array(0 => $this->getAttribute(($context["model"] ?? null), "statusList", array())), "method");
        echo "

            ";
        // line 30
        echo $this->getAttribute($this->getAttribute(($context["form"] ?? null), "field", array(0 => ($context["model"] ?? null), 1 => "category"), "method"), "dropDownList", array(0 => $this->getAttribute(($context["model"] ?? null), "categoryList", array())), "method");
        echo "

        </div>
    </div>
    ";
        // line 35
        echo "    ";
        // line 36
        echo "    ";
        // line 37
        echo "    ";
        echo call_user_func_array($this->env->getFunction('AttachmentsInputWidget')->getCallable(), array(($context["model"] ?? null)));
        echo "

    ";
        // line 40
        echo "    <div class=\"form-group\">
        ";
        // line 41
        if ($this->getAttribute(($context["model"] ?? null), "isNewRecord", array())) {
            // line 42
            echo "            ";
            $context["label"] = \common\helpers\My::t("Create");
            // line 43
            echo "            ";
            $context["class"] = "btn btn-success";
            // line 44
            echo "        ";
        } else {
            // line 45
            echo "            ";
            $context["label"] = \common\helpers\My::t("Update");
            // line 46
            echo "            ";
            $context["class"] = "btn btn-primary";
            // line 47
            echo "        ";
        }
        // line 48
        echo "
        ";
        // line 49
        echo call_user_func_array($this->env->getFunction('html')->getCallable(), array("SubmitButton", array(0 => ($context["label"] ?? null), 1 => array("class" => ($context["class"] ?? null)))));
        echo "

         ";
        // line 51
        echo call_user_func_array($this->env->getFunction('html')->getCallable(), array("a", array(0 => \common\helpers\My::t("Cancel"), 1 => array(0 => "article/index"), 2 => array("class" => "btn btn-default"))));
        echo "
    </div>

   ";
        // line 54
        $this->env->getExtension('yii\twig\Extension')->endWidget("active_form");
        echo "

    <!-- The table listing the files available for upload/download -->
    <table role=\"presentation\" class=\"table table-striped\"><tbody class=\"files\"></tbody></table>
</div>

";
    }

    public function getTemplateName()
    {
        return "_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 54,  125 => 51,  120 => 49,  117 => 48,  114 => 47,  111 => 46,  108 => 45,  105 => 44,  102 => 43,  99 => 42,  97 => 41,  94 => 40,  88 => 37,  86 => 36,  84 => 35,  77 => 30,  72 => 28,  65 => 23,  63 => 22,  58 => 20,  53 => 18,  50 => 17,  48 => 16,  42 => 12,  35 => 5,  31 => 4,  27 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "_form.twig", "D:\\Programmering\\Webb\\UniServerZ\\vhosts\\personal\\_protected\\frontend\\views\\article\\_form.twig");
    }
}
