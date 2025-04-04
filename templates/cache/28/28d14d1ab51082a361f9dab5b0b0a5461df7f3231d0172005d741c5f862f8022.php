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

/* post/history_item.html */
class __TwigTemplate_ecfef9f70cb7c9bbe592e054dd9ed9b94506ac81f99c7a88836e086034c272e9 extends \Twig\Template
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
        echo "<div class=\"history_item\">
<details>
<summary><span class=\"history_date\">Before <time datetime=\"";
        // line 3
        echo twig_date_filter(($context["edited_at"] ?? null), "%Y-%m-%dT%H:%M:%S");
        echo twig_timezone_function();
        echo "\">";
        echo twig_date_filter(($context["edited_at"] ?? null), $this->getAttribute(($context["config"] ?? null), "post_date", []));
        echo "<small>GMT</small></time></span></summary>
<div class=\"history_comment\">
";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "body", []));
        echo "
</div>
</details>
</div>";
    }

    public function getTemplateName()
    {
        return "post/history_item.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 5,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "post/history_item.html", "/home/tcv3dev/bluearchive.tohno-chan.org/templates/post/history_item.html");
    }
}
