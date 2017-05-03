<?php

/* about.twig */
class __TwigTemplate_3a6d6601adacb9526d410c39bc5e835b1a52a009b98e31ee0f1f05c3535c92da extends yii\twig\Template
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
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"box\">
                <div class=\"col-lg-12\">
                    <hr>
                    <h2 class=\"intro-text text-center\">About
                        <strong>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["app"] ?? null), "name", array()), "html", null, true);
        echo "</strong>
                    </h2>
                    <hr>
                </div>
                <div class=\"col-md-6\">
                    <img class=\"img-responsive img-border-left\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "theme", array()), "getUrl", array(0 => "img/slide-2.jpg"), "method"), "html", null, true);
        echo "\" alt=\"\">
                </div>
                <div class=\"col-md-6\">
                    <p>This is a great place to introduce your company or project and describe what you do.</p>
                    <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.</p>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"box\">
                <div class=\"col-lg-12\">
                    <hr>
                    <h2 class=\"intro-text text-center\">Our
                        <strong>Team</strong>
                    </h2>
                    <hr>
                </div>
                <div class=\"col-sm-4 text-center\">
                    <img class=\"img-responsive\" src=\"http://placehold.it/750x450\" alt=\"\">
                    <h3>John Smith
                        <small>Job Title</small>
                    </h3>
                </div>
                <div class=\"col-sm-4 text-center\">
                    <img class=\"img-responsive\" src=\"http://placehold.it/750x450\" alt=\"\">
                    <h3>John Smith
                        <small>Job Title</small>
                    </h3>
                </div>
                <div class=\"col-sm-4 text-center\">
                    <img class=\"img-responsive\" src=\"http://placehold.it/750x450\" alt=\"\">
                    <h3>John Smith
                        <small>Job Title</small>
                    </h3>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>

    </div>
    <!-- /.container -->";
    }

    public function getTemplateName()
    {
        return "about.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 12,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "about.twig", "D:\\Programmering\\Webb\\UniServerZ\\vhosts\\personal\\themes\\casual\\views\\site\\about.twig");
    }
}
