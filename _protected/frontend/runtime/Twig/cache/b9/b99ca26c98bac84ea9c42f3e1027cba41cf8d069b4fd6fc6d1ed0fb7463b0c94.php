<?php

/* attachmentsAdmin.twig */
class __TwigTemplate_5b0bf4223801591ffb1cd535608a84f1d9f709ffd102fd9f746e87f4cffcab69 extends yii\twig\Template
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
            echo "<table class=\"table table-striped table-bordered table-hover table-condensed\">

    <thead>
    <tr>
        <th>Size</th>
        <th>Type</th>
        <th style=\"width:50%\">Name</th>
        ";
            // line 11
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "can", array(0 => "updateArticle", 1 => array("model" => ($context["model"] ?? null))), "method")) {
                // line 12
                echo "            <th class=\"action-column\">Menu</th>
        ";
            }
            // line 14
            echo "    </tr>
    </thead>

    <tbody>
    ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["model"] ?? null), "attachments", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                echo " ";
                // line 19
                echo "        <tr data-key=\"0\">
            <!-- file size -->
            <td>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "size", array()), "html", null, true);
                echo "</td>

            <!-- file size -->
            <td>";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "type", array()), "html", null, true);
                echo "</td>

            <!-- file link -->
            <td>
                ";
                // line 28
                if (($this->getAttribute($context["file"], "group", array()) == "image")) {
                    // line 29
                    echo "                    ";
                    $context["class"] = "gallery-item";
                    // line 30
                    echo "                    <a title =\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "name", array()), "html", null, true);
                    echo "\" href=\"/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "path", array()), "html", null, true);
                    echo "\" class=\"";
                    echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
                    echo "\">
                        <img src=\"/";
                    // line 31
                    echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "path", array()), "html", null, true);
                    echo "\" width=\"50\" height=\"50\">
                    </a>
                ";
                } else {
                    // line 34
                    echo "                    <a title =\"";
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
                // line 36
                echo "            </td>

            <!-- file menu -->
            ";
                // line 40
                echo "            ";
                if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "can", array(0 => "updateArticle", 1 => array("model" => ($context["model"] ?? null))), "method")) {
                    // line 41
                    echo "                <td>
                    <a class=\"delete-button\" href=\"#\" title=\"Delete\" data-url=\"/attachments/file/delete?id=";
                    // line 42
                    echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "id", array()), "html", null, true);
                    echo "\">
                        <span class=\"glyphicon glyphicon-trash\"></span>
                    </a>
                </td>
            ";
                }
                // line 47
                echo "
        </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "
    </tbody>
</table>
";
        }
    }

    public function getTemplateName()
    {
        return "attachmentsAdmin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 50,  116 => 47,  108 => 42,  105 => 41,  102 => 40,  97 => 36,  85 => 34,  79 => 31,  70 => 30,  67 => 29,  65 => 28,  58 => 24,  52 => 21,  48 => 19,  43 => 18,  37 => 14,  33 => 12,  30 => 11,  21 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "attachmentsAdmin.twig", "D:\\Programmering\\Webb\\UniServerZ\\vhosts\\personal\\themes\\casual\\views\\article\\attachmentsAdmin.twig");
    }
}
