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

/* attention_bar.html */
class __TwigTemplate_9d0dbadc2ce9b3db86a859c7bed140ebf76ae3002a4b86509723402892fb907d extends \Twig\Template
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
        if ($this->getAttribute(($context["config"] ?? null), "attention_bar", [])) {
            // line 2
            echo "<div id=\"attention_bar\"></div>
<form method=\"post\" action=\"";
            // line 3
            echo $this->getAttribute(($context["config"] ?? null), "root", []);
            echo "attentionbar.php\" id=\"attention_bar_form\">
  <input id=\"attention_bar_input\" name=\"text\" value=\"\" type=\"text\">
</form>
";
        }
    }

    public function getTemplateName()
    {
        return "attention_bar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "attention_bar.html", "/home/tcv3dev/bluearchive.tohno-chan.org/templates/attention_bar.html");
    }
}
