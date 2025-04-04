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

/* post/file_controls.html */
class __TwigTemplate_6204be0161e34eb5f2a51189117508e1fb8dfb8a3f84d61c5022391001920179 extends \Twig\Template
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
        if (($this->getAttribute(($context["post"] ?? null), "files", []) && ($context["mod"] ?? null))) {
            // line 2
            echo "<span class=\"controls\">
";
            // line 3
            if ((($this->getAttribute(($context["file"] ?? null), "file", []) != "deleted") && twig_hasPermission_filter(($context["mod"] ?? null), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "deletefile", []), $this->getAttribute(($context["board"] ?? null), "uri", [])))) {
                // line 4
                echo twig_secure_link_confirm($this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "link_deletefile", []), gettext("Delete file"), gettext("Are you sure you want to delete this file?"), (((($this->getAttribute(($context["board"] ?? null), "dir", []) . "deletefile/") . $this->getAttribute(($context["post"] ?? null), "id", [])) . "/") . $this->getAttribute(($context["loop"] ?? null), "index0", [])));
                echo "&nbsp;
";
            }
            // line 6
            if (((($this->getAttribute(($context["file"] ?? null), "file", []) && ($this->getAttribute(($context["file"] ?? null), "file", []) != "deleted")) && ($this->getAttribute(($context["file"] ?? null), "thumb", []) != "spoiler")) && twig_hasPermission_filter(($context["mod"] ?? null), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "spoilerimage", []), $this->getAttribute(($context["board"] ?? null), "uri", [])))) {
                // line 7
                echo twig_secure_link_confirm($this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "link_spoilerimage", []), gettext("Spoiler file"), gettext("Are you sure you want to spoiler this file?"), (((($this->getAttribute(($context["board"] ?? null), "dir", []) . "spoiler/") . $this->getAttribute(($context["post"] ?? null), "id", [])) . "/") . $this->getAttribute(($context["loop"] ?? null), "index0", [])));
                echo "
";
            }
            // line 9
            echo "</span>
";
        }
    }

    public function getTemplateName()
    {
        return "post/file_controls.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 9,  44 => 7,  42 => 6,  37 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "post/file_controls.html", "/home/tcv3dev/bluearchive.tohno-chan.org/templates/post/file_controls.html");
    }
}
