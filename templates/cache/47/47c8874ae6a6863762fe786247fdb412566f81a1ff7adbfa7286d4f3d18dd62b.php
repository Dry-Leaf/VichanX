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

/* post/history.html */
class __TwigTemplate_9641c21631f06d63c59d04e9d9d6b182fb2f0c00143ffdf0ac9bb343ee6275c8 extends \Twig\Template
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
        if ($this->getAttribute($this->getAttribute(($context["post"] ?? null), "modifiers", []), "history", [])) {
            // line 2
            echo "<div class=\"edit_history\">
\t\t<details style=\"display: inline;\">
\t\t\t<summary style=\"list-style-position: outside;\">This post was edited. Previous iterations of this post:</summary>
\t\t\t";
            // line 5
            echo $this->getAttribute($this->getAttribute(($context["post"] ?? null), "modifiers", []), "history", []);
            echo "
\t\t</details>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "post/history.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 5,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "post/history.html", "/home/tcv3dev/bluearchive.tohno-chan.org/templates/post/history.html");
    }
}
