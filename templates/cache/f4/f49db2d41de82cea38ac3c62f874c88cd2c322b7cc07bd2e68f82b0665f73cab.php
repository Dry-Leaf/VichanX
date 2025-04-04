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

/* report_delete.html */
class __TwigTemplate_10cb76fb7b624303aaa04e265cbd877ef734fd5b15528a3eaee28a9c1b742b55 extends \Twig\Template
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
        echo "<div id=\"post-moderation-fields\">
\t";
        // line 2
        if ($this->getAttribute(($context["config"] ?? null), "allow_delete", [])) {
            // line 3
            echo "\t<div id=\"delete-fields\">
\t\t";
            // line 4
            echo gettext("Delete Post");
            echo " [<input title=\"Delete file only\" type=\"checkbox\" name=\"file\" id=\"delete_file\" />
\t\t <label for=\"delete_file\">";
            // line 5
            echo gettext("File");
            echo "</label>] <label for=\"password\">";
            echo gettext("Password");
            echo "</label> 
\t\t<input id=\"password\" type=\"password\" name=\"password\" size=\"12\" maxlength=\"18\" />
\t\t<input type=\"submit\" name=\"delete\" value=\"";
            // line 7
            echo gettext("Delete");
            echo "\" />
\t";
            // line 8
            if ($this->getAttribute(($context["config"] ?? null), "allow_edit", [])) {
                // line 9
                echo "\t\t&nbsp;<input type=\"submit\" name=\"edit\" value=\"Edit\" />
\t";
            }
            // line 11
            echo "\t</div>
\t
\t";
        } elseif ($this->getAttribute(        // line 13
($context["config"] ?? null), "allow_edit", [])) {
            // line 14
            echo "\t<div id=\"edit-fields\">
\t\t<input id=\"password\" type=\"text\" name=\"password\" size=\"12\" maxlength=\"18\" placeholder=\"Slaptažodis\" />
\t\t&nbsp;<input type=\"submit\" name=\"edit\" value=\"Edit\" />
\t</div>
\t";
        }
        // line 18
        echo "\t
\t
\t<div id=\"report-fields\">
\t\t<label for=\"reason\">";
        // line 21
        echo gettext("Reason");
        echo "</label> 
\t\t<input id=\"reason\" type=\"text\" name=\"reason\" size=\"20\" maxlength=\"30\" />
\t\t<input type=\"submit\" name=\"report\" value=\"";
        // line 23
        echo gettext("Report");
        echo "\" />
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "report_delete.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 23,  77 => 21,  72 => 18,  65 => 14,  63 => 13,  59 => 11,  55 => 9,  53 => 8,  49 => 7,  42 => 5,  38 => 4,  35 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "report_delete.html", "/home/tcv3dev/bluearchive.tohno-chan.org/templates/report_delete.html");
    }
}
