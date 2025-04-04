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

/* header.html */
class __TwigTemplate_2aec83ac74897e580dd8e3fb62533552ed7295c077a8d0150119b64a948bbf28 extends \Twig\Template
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
        echo "\t\t<link rel=\"stylesheet\" media=\"screen\" href=\"";
        echo $this->getAttribute(($context["config"] ?? null), "url_stylesheet", []);
        echo "\">
\t\t";
        // line 2
        if ($this->getAttribute(($context["config"] ?? null), "url_favicon", [])) {
            echo "<link rel=\"shortcut icon\" href=\"";
            echo $this->getAttribute(($context["config"] ?? null), "url_favicon", []);
            echo "\">";
        }
        // line 3
        echo "\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=yes\">
\t\t";
        // line 5
        if ($this->getAttribute(($context["config"] ?? null), "meta_keywords", [])) {
            echo "<meta name=\"keywords\" content=\"";
            echo $this->getAttribute(($context["config"] ?? null), "meta_keywords", []);
            echo "\">";
        }
        // line 6
        echo "\t\t";
        if (($this->getAttribute($this->getAttribute(($context["config"] ?? null), "default_stylesheet", []), 1, []) != "")) {
            echo "<link rel=\"stylesheet\" type=\"text/css\" id=\"stylesheet\" href=\"";
            echo $this->getAttribute(($context["config"] ?? null), "uri_stylesheets", []);
            echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "default_stylesheet", []), 1, []);
            echo "\">";
        }
        // line 7
        echo "\t\t";
        if ($this->getAttribute(($context["config"] ?? null), "font_awesome", [])) {
            echo "<link rel=\"stylesheet\" href=\"";
            echo $this->getAttribute(($context["config"] ?? null), "root", []);
            echo $this->getAttribute(($context["config"] ?? null), "font_awesome_css", []);
            echo "\">";
        }
        // line 8
        echo "\t\t";
        if ($this->getAttribute(($context["config"] ?? null), "country_flags_condensed", [])) {
            echo "<link rel=\"stylesheet\" href=\"";
            echo $this->getAttribute(($context["config"] ?? null), "root", []);
            echo $this->getAttribute(($context["config"] ?? null), "country_flags_condensed_css", []);
            echo "\">";
        }
        // line 9
        echo "\t\t<script type=\"text/javascript\">
\t\t\tvar configRoot=\"";
        // line 10
        echo $this->getAttribute(($context["config"] ?? null), "root", []);
        echo "\";
\t\t\tvar inMod = ";
        // line 11
        if (($context["mod"] ?? null)) {
            echo "true";
        } else {
            echo "false";
        }
        echo ";
\t\t\tvar modRoot=\"";
        // line 12
        echo $this->getAttribute(($context["config"] ?? null), "root", []);
        echo "\"+(inMod ? \"mod.php?/\" : \"\");
\t\t</script>
\t\t";
        // line 14
        if ( !($context["nojavascript"] ?? null)) {
            // line 15
            echo "\t\t\t<script type=\"text/javascript\" src=\"";
            echo $this->getAttribute(($context["config"] ?? null), "url_javascript", []);
            echo "\"></script>
\t\t\t";
            // line 16
            if ( !$this->getAttribute(($context["config"] ?? null), "additional_javascript_compile", [])) {
                // line 17
                echo "\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["config"] ?? null), "additional_javascript", []));
                foreach ($context['_seq'] as $context["_key"] => $context["javascript"]) {
                    echo "<script type=\"text/javascript\" src=\"";
                    echo $this->getAttribute(($context["config"] ?? null), "additional_javascript_url", []);
                    echo $context["javascript"];
                    echo "\"></script>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['javascript'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                echo "\t\t\t";
            }
            // line 19
            echo "\t\t";
        }
        // line 20
        echo "\t\t";
        if ($this->getAttribute(($context["config"] ?? null), "recaptcha", [])) {
            echo "<script src=\"//www.recaptcha.net/recaptcha/api.js\"></script>
\t\t<style type=\"text/css\">";
            // line 49
            echo "
\t\t\t#recaptcha_area {
\t\t\t\tfloat: none !important;
\t\t\t\tpadding: 0 !important;
\t\t\t}
\t\t\t#recaptcha_logo, #recaptcha_privacy {
\t\t\t\tdisplay: none;
\t\t\t}
\t\t\t#recaptcha_table {
\t\t\t\tborder: none !important;
\t\t\t}
\t\t\t#recaptcha_table tr:first-child {
\t\t\t\theight: auto;
\t\t\t}
\t\t\t.recaptchatable img {
\t\t\t\tfloat: none !important;
\t\t\t}
\t\t\t#recaptcha_response_field {
\t\t\t\tfont-size: 10pt !important;
\t\t\t\tborder: 1px solid #a9a9a9 !important;
\t\t\t\tpadding: 1px !important;
\t\t\t}
\t\t\ttd.recaptcha_image_cell {
\t\t\t\tbackground: transparent !important;
\t\t\t}
\t\t\t.recaptchatable, #recaptcha_area tr, #recaptcha_area td, #recaptcha_area th {
\t\t\t\tpadding: 0 !important;
\t\t\t}
\t\t";
            echo "</style>";
        }
    }

    public function getTemplateName()
    {
        return "header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 49,  123 => 20,  120 => 19,  117 => 18,  104 => 17,  102 => 16,  97 => 15,  95 => 14,  90 => 12,  82 => 11,  78 => 10,  75 => 9,  67 => 8,  59 => 7,  51 => 6,  45 => 5,  41 => 3,  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "header.html", "/home/tcv3dev/bluearchive.tohno-chan.org/templates/header.html");
    }
}
