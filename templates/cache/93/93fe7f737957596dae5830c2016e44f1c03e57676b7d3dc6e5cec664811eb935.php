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

/* post/flag.html */
class __TwigTemplate_92e3f99739c4103ef5b91fccb7c91ff06d2f3388dece7bb064d2cc1e03edd16a extends \Twig\Template
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
        if (($this->getAttribute(($context["config"] ?? null), "display_flags", []) && $this->getAttribute($this->getAttribute(($context["post"] ?? null), "modifiers", []), "flag", []))) {
            // line 2
            echo "\t <img
\t\t";
            // line 3
            if ($this->getAttribute(($context["config"] ?? null), "country_flags_condensed", [])) {
                // line 4
                echo "\t\t\t class=\"flag flag-";
                echo $this->getAttribute($this->getAttribute(($context["post"] ?? null), "modifiers", []), "flag", []);
                echo "\" src=\"";
                echo $this->getAttribute(($context["config"] ?? null), "image_blank", []);
                echo "\"
\t\t";
            } else {
                // line 6
                echo "\t\t\t class=\"flag\" src=\"";
                echo sprintf($this->getAttribute(($context["config"] ?? null), "uri_flags", []), $this->getAttribute($this->getAttribute(($context["post"] ?? null), "modifiers", []), "flag", []));
                echo "\"
\t\t";
            }
            // line 8
            echo "\t\t style=\"";
            if ($this->getAttribute($this->getAttribute(($context["post"] ?? null), "modifiers", []), "flag style", [], "array")) {
                // line 9
                echo "\t\t\t\t";
                echo $this->getAttribute($this->getAttribute(($context["post"] ?? null), "modifiers", []), "flag style", [], "array");
                echo "
\t\t\t";
            } else {
                // line 11
                echo "\t\t\t\t";
                echo $this->getAttribute(($context["config"] ?? null), "flag_style", []);
                echo "
\t\t\t";
            }
            // line 12
            echo "\"

\t\t";
            // line 14
            if ($this->getAttribute($this->getAttribute(($context["post"] ?? null), "modifiers", []), "flag alt", [], "array")) {
                echo " alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? null), "modifiers", []), "flag alt", [], "array"), "html_attr");
                echo "\"
\t\t\t title=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["post"] ?? null), "modifiers", []), "flag alt", [], "array"), "html_attr");
                echo "\"
\t\t";
            }
            // line 17
            echo "\t>
";
        }
    }

    public function getTemplateName()
    {
        return "post/flag.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 17,  76 => 15,  70 => 14,  66 => 12,  60 => 11,  54 => 9,  51 => 8,  45 => 6,  37 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "post/flag.html", "/home/tcv3dev/bluearchive.tohno-chan.org/templates/post/flag.html");
    }
}
