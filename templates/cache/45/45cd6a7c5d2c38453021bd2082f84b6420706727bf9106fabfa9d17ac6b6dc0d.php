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

/* post/name.html */
class __TwigTemplate_db9e1898f772a032e329a3bfdddb0daaa08197f52b342ba835445fd493ec346f extends \Twig\Template
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
        $context["capcode"] = capcode($this->getAttribute(($context["post"] ?? null), "capcode", []));
        // line 2
        if ((((twig_length_filter($this->env, $this->getAttribute(($context["post"] ?? null), "email", [])) > 0) && (($this->getAttribute(($context["config"] ?? null), "hide_sage", []) != true) || ($this->getAttribute(($context["post"] ?? null), "email", []) != "sage"))) && ($this->getAttribute(($context["config"] ?? null), "hide_email", []) != true))) {
            // line 3
            echo "\t";
            // line 4
            echo "\t<a class=\"email\" href=\"mailto:";
            echo $this->getAttribute(($context["post"] ?? null), "email", []);
            echo "\">
";
        }
        // line 6
        echo "\t<span ";
        if ($this->getAttribute(($context["capcode"] ?? null), "name", [])) {
            echo "style=\"";
            echo $this->getAttribute(($context["capcode"] ?? null), "name", []);
            echo "\" ";
        }
        echo " class=\"name\">";
        echo bidi_cleanup($this->getAttribute(($context["post"] ?? null), "name", []));
        echo "</span>
\t";
        // line 7
        if ((twig_length_filter($this->env, $this->getAttribute(($context["post"] ?? null), "trip", [])) > 0)) {
            // line 8
            echo "\t\t<span ";
            if ($this->getAttribute(($context["capcode"] ?? null), "trip", [])) {
                echo "style=\"";
                echo $this->getAttribute(($context["capcode"] ?? null), "trip", []);
                echo "\" ";
            }
            echo " class=\"trip\">";
            echo $this->getAttribute(($context["post"] ?? null), "trip", []);
            echo "</span>
\t";
        }
        // line 10
        if ((((twig_length_filter($this->env, $this->getAttribute(($context["post"] ?? null), "email", [])) > 0) && (($this->getAttribute(($context["config"] ?? null), "hide_sage", []) != true) || ($this->getAttribute(($context["post"] ?? null), "email", []) != "sage"))) && ($this->getAttribute(($context["config"] ?? null), "hide_email", []) != true))) {
            // line 11
            echo "\t";
            // line 12
            echo "\t</a>
";
        }
        // line 14
        if (($context["capcode"] ?? null)) {
            // line 15
            echo "        ";
            echo $this->getAttribute(($context["capcode"] ?? null), "cap", []);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "post/name.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 15,  75 => 14,  71 => 12,  69 => 11,  67 => 10,  55 => 8,  53 => 7,  42 => 6,  36 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "post/name.html", "/home/tcv3dev/bluearchive.tohno-chan.org/templates/post/name.html");
    }
}
