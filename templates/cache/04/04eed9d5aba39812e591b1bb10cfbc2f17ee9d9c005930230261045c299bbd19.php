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

/* edit_post_form.html */
class __TwigTemplate_0e4a91a76771b6848fdd153ee2dec8a7c211f97431ca839691470e186715d0a6 extends \Twig\Template
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
        echo "<script>window.donotajax = true;</script>
<form action=\"\" method=\"post\" name=\"post\">
\t
\t<table>
\t\t<tr>
\t\t\t<th>
\t\t\t\tName
\t\t\t</th>
\t\t\t<td>
\t\t\t\t<input type=\"text\" name=\"name\" size=\"25\" maxlength=\"35\" autocomplete=\"off\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "name", []));
        echo "\" disabled>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th>
\t\t\t\tEmail
\t\t\t</th>
\t\t\t<td>
\t\t\t\t<input type=\"text\" name=\"email\" size=\"25\" maxlength=\"40\" autocomplete=\"off\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "email", []));
        echo "\" disabled>
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th>
\t\t\t\tSubject
\t\t\t</th>
\t\t\t<td>
\t\t\t\t<input style=\"float:left;\" type=\"text\" name=\"subject\" size=\"25\" maxlength=\"100\" autocomplete=\"off\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "subject", []));
        echo "\" disabled>
\t\t\t\t<input accesskey=\"s\" style=\"margin-left:2px;\" type=\"submit\" name=\"post\" value=\"Redaguoti\">
\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th>
\t\t\t\tComment
\t\t\t</th>
\t\t\t<td>
\t\t\t\t<textarea name=\"body\" id=\"body\" rows=\"8\" cols=\"35\">";
        // line 35
        echo $this->getAttribute(($context["post"] ?? null), "body_nomarkup", []);
        echo "</textarea>
\t\t\t\t<br/>
\t\t\t\t<span ID=\"countchar\" class=\"countdown\"></span>&nbsp;
\t\t\t</td>
\t\t</tr>
\t</table>
\t<input type=\"hidden\" name=\"password\" size=\"25\" maxlength=\"40\" autocomplete=\"off\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "password", []));
        echo "\">
\t<input type=\"hidden\" name=\"board\" size=\"25\" maxlength=\"40\" autocomplete=\"off\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "board", []));
        echo "\">
\t<input type=\"hidden\" name=\"id\" size=\"25\" maxlength=\"40\" autocomplete=\"off\" value=\"";
        // line 43
        echo $this->getAttribute(($context["post"] ?? null), "id", []);
        echo "\">
\t<input type=\"hidden\" name=\"edit\" value=\"on\">
</form>";
    }

    public function getTemplateName()
    {
        return "edit_post_form.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 43,  88 => 42,  84 => 41,  75 => 35,  63 => 26,  52 => 18,  41 => 10,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "edit_post_form.html", "/home/tcv3dev/bluearchive.tohno-chan.org/templates/edit_post_form.html");
    }
}
