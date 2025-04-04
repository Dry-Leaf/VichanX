<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* error.html */
class __TwigTemplate_eecb5b4b508fb74e5e1915d4d00ff8246ad7a5a46425a452737bcc760578631d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div style=\"text-align:center\">
\t<h2 style=\"margin:20px 0\">";
        // line 2
        echo ($context["message"] ?? null);
        echo "</h2>
\t";
        // line 3
        if (($context["board"] ?? null)) {
            // line 4
            echo "\t\t<p>
\t\t\t<a href=\"";
            // line 5
            echo $this->getAttribute(($context["config"] ?? null), "root", []);
            if (($context["mod"] ?? null)) {
                echo $this->getAttribute(($context["config"] ?? null), "file_mod", []);
                echo "?/";
            }
            echo $this->getAttribute(($context["board"] ?? null), "dir", []);
            echo $this->getAttribute(($context["config"] ?? null), "file_index", []);
            echo "\">
\t\t\t\t";
            // line 6
            echo gettext("Go back");
            // line 7
            echo "\t\t\t</a>
\t\t</p>
\t";
        }
        // line 10
        echo "</div>
";
        // line 11
        if ((($context["debug"] ?? null) && $this->getAttribute(($context["config"] ?? null), "debug", []))) {
            // line 12
            echo "\t<hr>
\t<h3>";
            // line 13
            echo gettext("Error information");
            echo "</h3>
\t<pre style=\"white-space:pre-wrap;font-size: 10px;\">
\t\t";
            // line 15
            echo ($context["debug"] ?? null);
            echo "
\t</pre>
\t<hr>
";
        }
    }

    public function getTemplateName()
    {
        return "error.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 15,  67 => 13,  64 => 12,  62 => 11,  59 => 10,  54 => 7,  52 => 6,  42 => 5,  39 => 4,  37 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "error.html", "/home/tcv3dev/bluearchive.tohno-chan.org/templates/error.html");
    }
}
