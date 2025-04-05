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

/* index.html */
class __TwigTemplate_f2c1bbc814f3c92ef15ebe1edc01fce9f234e2126f8af3aeed8b96cc1803e841 extends \Twig\Template
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
        echo "<!doctype html>
<html>
<head>
\t<meta charset=\"utf-8\">

        <script type=\"text/javascript\">
\t  var
          ";
        // line 8
        if ( !($context["no_post_form"] ?? null)) {
            // line 9
            echo "              active_page = \"index\"
            , board_name = \"";
            // line 10
            echo $this->getAttribute(($context["board"] ?? null), "uri", []);
            echo "\";
\t  ";
        } else {
            // line 12
            echo "              active_page = \"ukko\";
          ";
        }
        // line 14
        echo "        </script>

\t";
        // line 16
        $this->loadTemplate("header.html", "index.html", 16)->display($context);
        // line 17
        echo "
\t<title>";
        // line 18
        echo $this->getAttribute(($context["board"] ?? null), "url", []);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["board"] ?? null), "title", []));
        echo "</title>
</head>
<body class=\"8chan vichan ";
        // line 20
        if (($context["mod"] ?? null)) {
            echo "is-moderator";
        } else {
            echo "is-not-moderator";
        }
        echo " active-";
        if ( !($context["no_post_form"] ?? null)) {
            echo "index";
        } else {
            echo "ukko";
        }
        echo "\" data-stylesheet=\"";
        if (($this->getAttribute($this->getAttribute(($context["config"] ?? null), "default_stylesheet", []), 1, []) != "")) {
            echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "default_stylesheet", []), 1, []);
        } else {
            echo "default";
        }
        echo "\">
\t";
        // line 21
        echo $this->getAttribute(($context["boardlist"] ?? null), "top", []);
        echo "
\t
\t";
        // line 23
        if (($context["pm"] ?? null)) {
            echo "<div class=\"top_notice\">You have <a href=\"?/PM/";
            echo $this->getAttribute(($context["pm"] ?? null), "id", []);
            echo "\">an unread PM</a>";
            if (($this->getAttribute(($context["pm"] ?? null), "waiting", []) > 0)) {
                echo ", plus ";
                echo $this->getAttribute(($context["pm"] ?? null), "waiting", []);
                echo " more waiting";
            }
            echo ".</div><hr />";
        }
        echo "<div class=\"boardbanner\">
\t";
        // line 24
        if ($this->getAttribute(($context["config"] ?? null), "url_banner", [])) {
            echo "<img class=\"board_image\" src=\"";
            echo $this->getAttribute(($context["config"] ?? null), "url_banner", []);
            echo "\" ";
            if (($this->getAttribute(($context["config"] ?? null), "banner_width", []) || $this->getAttribute(($context["config"] ?? null), "banner_height", []))) {
                echo "style=\"";
                if ($this->getAttribute(($context["config"] ?? null), "banner_width", [])) {
                    echo "width:";
                    echo $this->getAttribute(($context["config"] ?? null), "banner_width", []);
                    echo "px";
                }
                echo ";";
                if ($this->getAttribute(($context["config"] ?? null), "banner_width", [])) {
                    echo "height:";
                    echo $this->getAttribute(($context["config"] ?? null), "banner_height", []);
                    echo "px";
                }
                echo "\" ";
            }
            echo "alt=\"\" />";
        }
        // line 25
        echo "\t</div>
\t<header>
\t\t<h1>";
        // line 27
        echo $this->getAttribute(($context["board"] ?? null), "url", []);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["board"] ?? null), "title", []));
        echo "</h1>
\t\t<div class=\"subtitle\">
\t\t\t";
        // line 29
        if ($this->getAttribute(($context["board"] ?? null), "subtitle", [])) {
            // line 30
            echo "\t\t\t\t";
            if ($this->getAttribute(($context["config"] ?? null), "allow_subtitle_html", [])) {
                // line 31
                echo "\t\t\t\t\t";
                echo $this->getAttribute(($context["board"] ?? null), "subtitle", []);
                echo "
\t\t\t\t";
            } else {
                // line 33
                echo "\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["board"] ?? null), "subtitle", []));
                echo "
\t\t\t\t";
            }
            // line 35
            echo "\t\t\t";
        }
        // line 36
        echo "\t\t\t";
        if (($context["mod"] ?? null)) {
            echo "<p><a href=\"?/\">";
            echo gettext("Return to dashboard");
            echo "</a></p>";
        }
        // line 37
        echo "\t\t</div>
\t</header>

\t";
        // line 40
        $this->loadTemplate("attention_bar.html", "index.html", 40)->display($context);
        // line 41
        echo "
\t";
        // line 42
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "ad", []), "top", []);
        echo "

\t";
        // line 44
        if ( !($context["no_post_form"] ?? null)) {
            // line 45
            echo "\t\t";
            $this->loadTemplate("post_form.html", "index.html", 45)->display($context);
            // line 46
            echo "\t";
        } else {
            // line 47
            echo "\t\t";
            $this->loadTemplate("boardlist.html", "index.html", 47)->display($context);
            // line 48
            echo "\t";
        }
        // line 49
        echo "
\t";
        // line 50
        if ($this->getAttribute(($context["config"] ?? null), "page_nav_top", [])) {
            // line 51
            echo "\t\t<div class=\"pages top\">
\t\t\t";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pages"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 53
                echo "\t\t\t [<a ";
                if ($this->getAttribute($context["page"], "selected", [])) {
                    echo "class=\"selected\"";
                }
                if ( !$this->getAttribute($context["page"], "selected", [])) {
                    echo "href=\"";
                    echo $this->getAttribute($context["page"], "link", []);
                    echo "\"";
                }
                echo ">";
                echo $this->getAttribute($context["page"], "num", []);
                echo "</a>]";
                if ($this->getAttribute($context["loop"], "last", [])) {
                    echo " ";
                }
                // line 54
                echo "\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "\t\t\t";
            echo $this->getAttribute(($context["btn"] ?? null), "next", []);
            echo "
\t\t</div>
\t";
        }
        // line 58
        echo "\t
\t";
        // line 59
        if ($this->getAttribute(($context["config"] ?? null), "global_message", [])) {
            echo "<hr /><div class=\"blotter\">";
            echo $this->getAttribute(($context["config"] ?? null), "global_message", []);
            echo "</div>";
        }
        // line 60
        echo "\t<hr />
\t";
        // line 61
        if ($this->getAttribute(($context["config"] ?? null), "board_search", [])) {
            // line 62
            echo "\t<!-- Start Search Form -->
        \t<form style=\"display:inline\" action=\"/search.php\">
                \t<p style=\"margin: 10px;\">
                    \t\t<input type=\"text\" name=\"search\" placeholder=\"";
            // line 65
            echo $this->getAttribute(($context["board"] ?? null), "uri", []);
            echo " search\">
                    \t\t<input type=\"hidden\" name=\"board\" value=\"";
            // line 66
            echo $this->getAttribute(($context["board"] ?? null), "uri", []);
            echo "\">
                    \t\t<input type=\"submit\" value=\"Search\">
                \t</p>
        \t</form>
    \t<!-- End Search Form -->
    \t";
        }
        // line 72
        echo "\t<form name=\"postcontrols\" action=\"";
        echo $this->getAttribute(($context["config"] ?? null), "post_url", []);
        echo "\" method=\"post\">
\t<input type=\"hidden\" name=\"board\" value=\"";
        // line 73
        echo $this->getAttribute(($context["board"] ?? null), "uri", []);
        echo "\" />
\t";
        // line 74
        if (($context["mod"] ?? null)) {
            echo "<input type=\"hidden\" name=\"mod\" value=\"1\" />";
        }
        // line 75
        echo "\t";
        echo ($context["body"] ?? null);
        echo "
\t";
        // line 76
        $this->loadTemplate("report_delete.html", "index.html", 76)->display($context);
        // line 77
        echo "\t</form>
\t
\t<div class=\"pages\">
\t\t";
        // line 80
        echo $this->getAttribute(($context["btn"] ?? null), "prev", []);
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pages"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 81
            echo "\t\t [<a ";
            if ($this->getAttribute($context["page"], "selected", [])) {
                echo "class=\"selected\"";
            }
            if ( !$this->getAttribute($context["page"], "selected", [])) {
                echo "href=\"";
                echo $this->getAttribute($context["page"], "link", []);
                echo "\"";
            }
            echo ">";
            echo $this->getAttribute($context["page"], "num", []);
            echo "</a>]";
            if ($this->getAttribute($context["loop"], "last", [])) {
                echo " ";
            }
            // line 82
            echo "\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " ";
        echo $this->getAttribute(($context["btn"] ?? null), "next", []);
        echo "
\t\t";
        // line 83
        if ($this->getAttribute(($context["config"] ?? null), "catalog_link", [])) {
            // line 84
            echo "\t\t\t | <a href=\"";
            echo $this->getAttribute(($context["config"] ?? null), "root", []);
            if (($context["mod"] ?? null)) {
                echo $this->getAttribute(($context["config"] ?? null), "file_mod", []);
                echo "?/";
            }
            echo $this->getAttribute(($context["board"] ?? null), "dir", []);
            echo $this->getAttribute(($context["config"] ?? null), "catalog_link", []);
            echo "\">";
            echo gettext("Catalog");
            echo "</a>
\t\t";
        }
        // line 86
        echo "\t</div>
\t
\t";
        // line 88
        echo $this->getAttribute(($context["boardlist"] ?? null), "bottom", []);
        echo "

\t";
        // line 90
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "ad", []), "bottom", []);
        echo "

\t";
        // line 92
        $this->loadTemplate("footer.html", "index.html", 92)->display($context);
        // line 93
        echo "\t<script type=\"text/javascript\">";
        // line 95
        echo "
\t\tready();
\t";
        echo "</script>
\t
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  403 => 95,  401 => 93,  399 => 92,  394 => 90,  389 => 88,  385 => 86,  371 => 84,  369 => 83,  351 => 82,  335 => 81,  316 => 80,  311 => 77,  309 => 76,  304 => 75,  300 => 74,  296 => 73,  291 => 72,  282 => 66,  278 => 65,  273 => 62,  271 => 61,  268 => 60,  262 => 59,  259 => 58,  252 => 55,  238 => 54,  222 => 53,  205 => 52,  202 => 51,  200 => 50,  197 => 49,  194 => 48,  191 => 47,  188 => 46,  185 => 45,  183 => 44,  178 => 42,  175 => 41,  173 => 40,  168 => 37,  161 => 36,  158 => 35,  152 => 33,  146 => 31,  143 => 30,  141 => 29,  134 => 27,  130 => 25,  108 => 24,  94 => 23,  89 => 21,  69 => 20,  62 => 18,  59 => 17,  57 => 16,  53 => 14,  49 => 12,  44 => 10,  41 => 9,  39 => 8,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "index.html", "/home/tcv3dev/bluearchive.tohno-chan.org/templates/index.html");
    }
}
