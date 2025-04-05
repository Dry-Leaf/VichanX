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

/* thread.html */
class __TwigTemplate_fcc5002b51a723b7a866eb08055e51db96b29a418f3b17d66a8708a79b8ed922 extends \Twig\Template
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
          var active_page = \"thread\"
\t    , board_name = \"";
        // line 8
        echo $this->getAttribute(($context["board"] ?? null), "uri", []);
        echo "\"
\t    , thread_id = \"";
        // line 9
        echo $this->getAttribute(($context["thread"] ?? null), "id", []);
        echo "\";
\t</script>

\t";
        // line 12
        $this->loadTemplate("header.html", "thread.html", 12)->display($context);
        // line 13
        echo "
\t";
        // line 14
        ob_start(function () { return ''; });
        if (($this->getAttribute(($context["config"] ?? null), "thread_subject_in_title", []) && $this->getAttribute(($context["thread"] ?? null), "subject", []))) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thread"] ?? null), "subject", []));
        } else {
            echo twig_escape_filter($this->env, twig_slice($this->env, remove_modifiers($this->getAttribute(($context["thread"] ?? null), "body_nomarkup", [])), 0, 256));
        }
        $context["meta_subject"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 15
        echo "
\t<meta name=\"description\" content=\"";
        // line 16
        echo $this->getAttribute(($context["board"] ?? null), "url", []);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["board"] ?? null), "title", []));
        echo " - ";
        echo ($context["meta_subject"] ?? null);
        echo "\" />
\t<meta name=\"twitter:card\" value=\"summary\">
\t<meta property=\"og:title\" content=\"";
        // line 18
        echo ($context["meta_subject"] ?? null);
        echo "\" />
\t<meta property=\"og:type\" content=\"article\" />
\t<meta property=\"og:url\" content=\"";
        // line 20
        echo $this->getAttribute(($context["config"] ?? null), "domain", []);
        echo "/";
        echo $this->getAttribute(($context["board"] ?? null), "uri", []);
        echo "/";
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "dir", []), "res", []);
        echo $this->getAttribute(($context["thread"] ?? null), "id", []);
        echo ".html\" />
\t";
        // line 21
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["thread"] ?? null), "files", []), 0, []), "thumb", [])) {
            echo "<meta property=\"og:image\" content=\"";
            echo $this->getAttribute(($context["config"] ?? null), "domain", []);
            echo "/";
            echo $this->getAttribute(($context["board"] ?? null), "uri", []);
            echo "/";
            echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "dir", []), "thumb", []);
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["thread"] ?? null), "files", []), 0, []), "thumb", []);
            echo "\" />";
        }
        // line 22
        echo "\t<meta property=\"og:description\" content=\"";
        echo twig_escape_filter($this->env, remove_modifiers($this->getAttribute(($context["thread"] ?? null), "body_nomarkup", [])));
        echo "\" />

\t<title>";
        // line 24
        echo $this->getAttribute(($context["board"] ?? null), "url", []);
        echo " - ";
        echo ($context["meta_subject"] ?? null);
        echo "</title>
</head>
<body class=\"8chan vichan ";
        // line 26
        if (($context["mod"] ?? null)) {
            echo "is-moderator";
        } else {
            echo "is-not-moderator";
        }
        echo " active-thread\" data-stylesheet=\"";
        if (($this->getAttribute($this->getAttribute(($context["config"] ?? null), "default_stylesheet", []), 1, []) != "")) {
            echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "default_stylesheet", []), 1, []);
        } else {
            echo "default";
        }
        echo "\">
\t";
        // line 27
        echo $this->getAttribute(($context["boardlist"] ?? null), "top", []);
        echo "
\t<a name=\"top\"></a>
\t";
        // line 29
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
        // line 30
        echo "\t";
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
        // line 31
        echo "\t<header>
\t\t<h1>";
        // line 32
        echo $this->getAttribute(($context["board"] ?? null), "url", []);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["board"] ?? null), "title", []));
        echo "</h1>
\t\t<div class=\"subtitle\">
\t\t\t";
        // line 34
        if ($this->getAttribute(($context["board"] ?? null), "subtitle", [])) {
            // line 35
            echo "\t\t\t\t";
            if ($this->getAttribute(($context["config"] ?? null), "allow_subtitle_html", [])) {
                // line 36
                echo "\t\t\t\t\t";
                echo $this->getAttribute(($context["board"] ?? null), "subtitle", []);
                echo "
\t\t\t\t";
            } else {
                // line 38
                echo "\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["board"] ?? null), "subtitle", []));
                echo "
\t\t\t\t";
            }
            // line 40
            echo "\t\t\t";
        }
        // line 41
        echo "\t\t\t";
        if (($context["mod"] ?? null)) {
            echo "<p><a href=\"?/\">";
            echo gettext("Return to dashboard");
            echo "</a></p>";
        }
        // line 42
        echo "\t\t</div>
\t</header>

\t";
        // line 45
        $this->loadTemplate("attention_bar.html", "thread.html", 45)->display($context);
        // line 46
        echo "
\t<div class=\"banner\">";
        // line 47
        echo gettext("Posting mode: Reply");
        echo " <a class=\"unimportant\" href=\"";
        echo ($context["return"] ?? null);
        echo "\">[";
        echo gettext("Return");
        echo "]</a> <a class=\"unimportant\" href=\"#bottom\">[";
        echo gettext("Go to bottom");
        echo "]</a></div>

\t";
        // line 49
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "ad", []), "top", []);
        echo "

\t";
        // line 51
        $this->loadTemplate("post_form.html", "thread.html", 51)->display($context);
        // line 52
        echo "
\t";
        // line 53
        if ($this->getAttribute(($context["config"] ?? null), "global_message", [])) {
            echo "<hr /><div class=\"blotter\">";
            echo $this->getAttribute(($context["config"] ?? null), "global_message", []);
            echo "</div>";
        }
        // line 54
        echo "\t<hr />
\t<form name=\"postcontrols\" action=\"";
        // line 55
        echo $this->getAttribute(($context["config"] ?? null), "post_url", []);
        echo "\" method=\"post\">
\t\t<input type=\"hidden\" name=\"board\" value=\"";
        // line 56
        echo $this->getAttribute(($context["board"] ?? null), "uri", []);
        echo "\" />
\t\t";
        // line 57
        if (($context["mod"] ?? null)) {
            echo "<input type=\"hidden\" name=\"mod\" value=\"1\" />";
        }
        // line 58
        echo "\t\t
\t\t";
        // line 59
        echo ($context["body"] ?? null);
        echo "
\t\t
\t\t<div id=\"thread-interactions\">
\t\t\t<span id=\"thread-links\">
\t\t\t\t<a id=\"thread-return\" href=\"";
        // line 63
        echo ($context["return"] ?? null);
        echo "\">[";
        echo gettext("Return");
        echo "]</a>
\t\t\t\t<a id=\"thread-top\" href=\"#top\">[";
        // line 64
        echo gettext("Go to top");
        echo "]</a>
                \t\t";
        // line 65
        if ($this->getAttribute(($context["config"] ?? null), "catalog_link", [])) {
            // line 66
            echo "\t\t\t\t\t<a id=\"thread-catalog\" href=\"";
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
\t\t                ";
        }
        // line 68
        echo "\t\t\t</span>
\t\t\t
\t\t\t<span id=\"thread-quick-reply\">
\t\t\t\t<a id=\"link-quick-reply\" href=\"#\">[";
        // line 71
        echo gettext("Post a Reply");
        echo "]</a>
\t\t\t</span>
\t\t\t
\t\t\t";
        // line 74
        $this->loadTemplate("report_delete.html", "thread.html", 74)->display($context);
        // line 75
        echo "\t\t</div>
\t\t
\t\t<div class=\"clearfix\"></div>
\t</form>
\t
\t<a name=\"bottom\"></a>
\t";
        // line 81
        echo $this->getAttribute(($context["boardlist"] ?? null), "bottom", []);
        echo "

\t";
        // line 83
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "ad", []), "bottom", []);
        echo "

\t";
        // line 85
        $this->loadTemplate("footer.html", "thread.html", 85)->display($context);
        // line 86
        echo "\t
\t<script type=\"text/javascript\">";
        // line 89
        echo "
\t\tready();
\t";
        echo "</script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "thread.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 89,  324 => 86,  322 => 85,  317 => 83,  312 => 81,  304 => 75,  302 => 74,  296 => 71,  291 => 68,  277 => 66,  275 => 65,  271 => 64,  265 => 63,  258 => 59,  255 => 58,  251 => 57,  247 => 56,  243 => 55,  240 => 54,  234 => 53,  231 => 52,  229 => 51,  224 => 49,  213 => 47,  210 => 46,  208 => 45,  203 => 42,  196 => 41,  193 => 40,  187 => 38,  181 => 36,  178 => 35,  176 => 34,  169 => 32,  166 => 31,  143 => 30,  131 => 29,  126 => 27,  112 => 26,  105 => 24,  99 => 22,  88 => 21,  79 => 20,  74 => 18,  65 => 16,  62 => 15,  54 => 14,  51 => 13,  49 => 12,  43 => 9,  39 => 8,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "thread.html", "/home/tcv3dev/bluearchive.tohno-chan.org/templates/thread.html");
    }
}
