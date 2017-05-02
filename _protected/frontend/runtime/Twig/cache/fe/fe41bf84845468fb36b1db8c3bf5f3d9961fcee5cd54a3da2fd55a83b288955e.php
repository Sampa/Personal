<?php

/* attachmentsAdmin.twig */
class __TwigTemplate_b15fab0ab47a8f81adb9bec4ceff07688ac23b4620771da9935a8fecdc512bdc extends yii\twig\Template
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

            <td>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "size", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "type", array()), "html", null, true);
                echo "</td>
            <td>
                ";
                // line 24
                if (($this->getAttribute($context["file"], "group", array()) == "image")) {
                    // line 25
                    echo "                    ";
                    $context["class"] = "gallery-item";
                    // line 26
                    echo "                    <a title =\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "name", array()), "html", null, true);
                    echo "\" href=\"/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "path", array()), "html", null, true);
                    echo "\" class=\"";
                    echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
                    echo "\">
                        <img src=\"/";
                    // line 27
                    echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "path", array()), "html", null, true);
                    echo "\" width=\"50\" height=\"50\">
                    </a>
                ";
                } else {
                    // line 30
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
                // line 32
                echo "            </td>

            ";
                // line 35
                echo "            ";
                if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "can", array(0 => "updateArticle", 1 => array("model" => ($context["model"] ?? null))), "method")) {
                    // line 36
                    echo "                <td>
                    <a class=\"delete-button\" href=\"#\" title=\"Delete\" data-url=\"/attachments/file/delete?id=";
                    // line 37
                    echo twig_escape_filter($this->env, $this->getAttribute($context["file"], "id", array()), "html", null, true);
                    echo "\">
                        <span class=\"glyphicon glyphicon-trash\"></span>
                    </a>
                </td>
            ";
                }
                // line 42
                echo "        </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
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
        return array (  118 => 44,  111 => 42,  103 => 37,  100 => 36,  97 => 35,  93 => 32,  81 => 30,  75 => 27,  66 => 26,  63 => 25,  61 => 24,  56 => 22,  52 => 21,  48 => 19,  43 => 18,  37 => 14,  33 => 12,  30 => 11,  21 => 3,  19 => 2,);
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
