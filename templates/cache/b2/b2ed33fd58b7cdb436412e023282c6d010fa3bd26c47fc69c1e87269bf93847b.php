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

/* post/image.html */
class __TwigTemplate_d84fd6edaa85358046efa4dfae3d51ba52a4132e7845926a66e1034b7d981df2 extends \Twig\Template
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
        echo "<a href=\"
\t";
        // line 2
        if (((twig_extension_filter($this->getAttribute(($context["post"] ?? null), "file", [])) == "webm") || (twig_extension_filter($this->getAttribute(($context["post"] ?? null), "file", [])) == "mp4"))) {
            // line 3
            echo "\t\t";
            echo $this->getAttribute(($context["config"] ?? null), "root", []);
            echo "player.php?v=";
            echo $this->getAttribute(($context["config"] ?? null), "uri_img", []);
            echo $this->getAttribute(($context["post"] ?? null), "file", []);
            echo "&amp;t=";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? null), "filename", []), "url");
            echo "&amp;loop=1
\t";
        } else {
            // line 5
            echo "\t\t";
            echo $this->getAttribute(($context["config"] ?? null), "uri_img", []);
            echo $this->getAttribute(($context["post"] ?? null), "file", []);
            echo "
\t";
        }
        // line 7
        echo "\t\"
\t target=\"_blank\"
\t";
        // line 9
        if ((((($this->getAttribute(($context["post"] ?? null), "thumb", []) == "file") || ($this->getAttribute($this->getAttribute(($context["post"] ?? null), "modifiers", []), "is_file", [], "array") == "1")) || (twig_extension_filter($this->getAttribute(($context["post"] ?? null), "filename", [])) == "webm")) || (twig_extension_filter($this->getAttribute(($context["post"] ?? null), "file", [])) == "mp4"))) {
            // line 10
            echo "\t\t class=\"file\"
\t";
        }
        // line 12
        echo ">
\t";
        // line 13
        if (((twig_extension_filter($this->getAttribute(($context["post"] ?? null), "thumb", [])) == "webm") || (twig_extension_filter($this->getAttribute(($context["post"] ?? null), "thumb", [])) == "mp4"))) {
            // line 14
            echo "\t\t<video autoplay class=\"post-image\" src=\"";
            echo $this->getAttribute(($context["config"] ?? null), "uri_thumb", []);
            echo $this->getAttribute(($context["post"] ?? null), "thumb", []);
            echo "\"
\t\t\t poster=\"
\t\t\t\t";
            // line 16
            echo $this->getAttribute(($context["config"] ?? null), "root", []);
            echo "
\t\t\t\t";
            // line 17
            if ($this->getAttribute($this->getAttribute(($context["config"] ?? null), "file_icons", []), twig_extension_filter($this->getAttribute(($context["post"] ?? null), "filename", [])), [], "array")) {
                // line 18
                echo "\t\t\t\t\t";
                echo sprintf($this->getAttribute(($context["config"] ?? null), "file_thumb", []), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "file_icons", []), twig_extension_filter($this->getAttribute(($context["post"] ?? null), "filename", [])), [], "array"));
                echo "
\t\t\t\t";
            } else {
                // line 20
                echo "\t\t\t\t\t";
                echo sprintf($this->getAttribute(($context["config"] ?? null), "file_thumb", []), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "file_icons", []), "default", []));
                echo "
\t\t\t\t";
            }
            // line 22
            echo "\t\t\t\"
\t\t\t style=\"width:";
            // line 23
            echo $this->getAttribute(($context["post"] ?? null), "thumbwidth", []);
            echo "px;height:";
            echo $this->getAttribute(($context["post"] ?? null), "thumbheight", []);
            echo "px\"
\t\t>
\t\t</video>
\t";
        } else {
            // line 27
            echo "\t\t<img class=\"post-image\" 
\t\t\tsrc=\"
\t\t\t\t";
            // line 29
            if (($this->getAttribute(($context["post"] ?? null), "thumb", []) == "file")) {
                // line 30
                echo "\t\t\t\t\t";
                echo $this->getAttribute(($context["config"] ?? null), "root", []);
                echo "
\t\t\t\t\t";
                // line 31
                if ($this->getAttribute($this->getAttribute(($context["config"] ?? null), "file_icons", []), twig_extension_filter($this->getAttribute(($context["post"] ?? null), "filename", [])), [], "array")) {
                    // line 32
                    echo "\t\t\t\t\t\t";
                    echo sprintf($this->getAttribute(($context["config"] ?? null), "file_thumb", []), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "file_icons", []), twig_extension_filter($this->getAttribute(($context["post"] ?? null), "filename", [])), [], "array"));
                    echo "
\t\t\t\t\t";
                } else {
                    // line 34
                    echo "\t\t\t\t\t\t";
                    echo sprintf($this->getAttribute(($context["config"] ?? null), "file_thumb", []), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "file_icons", []), "default", []));
                    echo "
\t\t\t\t\t";
                }
                // line 36
                echo "\t\t\t\t";
            } elseif (($this->getAttribute(($context["post"] ?? null), "thumb", []) == "spoiler")) {
                // line 37
                echo "\t\t\t\t\t";
                echo $this->getAttribute(($context["config"] ?? null), "root", []);
                echo $this->getAttribute(($context["config"] ?? null), "spoiler_image", []);
                echo "
\t\t\t\t";
            } else {
                // line 39
                echo "\t\t\t\t\t";
                echo $this->getAttribute(($context["config"] ?? null), "uri_thumb", []);
                echo $this->getAttribute(($context["post"] ?? null), "thumb", []);
                echo "
\t\t\t\t";
            }
            // line 41
            echo "\t\t\t\"
\t\t\t style=\"width:";
            // line 42
            echo $this->getAttribute(($context["post"] ?? null), "thumbwidth", []);
            echo "px;height:";
            echo $this->getAttribute(($context["post"] ?? null), "thumbheight", []);
            echo "px\" alt=\"\" 
\t\t/>
\t";
        }
        // line 45
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "post/image.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 45,  150 => 42,  147 => 41,  140 => 39,  133 => 37,  130 => 36,  124 => 34,  118 => 32,  116 => 31,  111 => 30,  109 => 29,  105 => 27,  96 => 23,  93 => 22,  87 => 20,  81 => 18,  79 => 17,  75 => 16,  68 => 14,  66 => 13,  63 => 12,  59 => 10,  57 => 9,  53 => 7,  46 => 5,  35 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "post/image.html", "/home/tcv3dev/bluearchive.tohno-chan.org/templates/post/image.html");
    }
}
