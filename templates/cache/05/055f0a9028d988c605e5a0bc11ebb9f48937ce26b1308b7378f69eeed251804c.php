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
        $this->loadTemplate("footer.html", "thread.html", 14)->display($context);
        // line 15
        echo "
\t";
        // line 16
        ob_start(function () { return ''; });
        if (($this->getAttribute(($context["config"] ?? null), "thread_subject_in_title", []) && $this->getAttribute(($context["thread"] ?? null), "subject", []))) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["thread"] ?? null), "subject", []));
        } else {
            echo twig_escape_filter($this->env, twig_slice($this->env, remove_modifiers($this->getAttribute(($context["thread"] ?? null), "body_nomarkup", [])), 0, 256));
        }
        $context["meta_subject"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 17
        echo "
\t<meta name=\"description\" content=\"";
        // line 18
        echo $this->getAttribute(($context["board"] ?? null), "url", []);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["board"] ?? null), "title", []));
        echo " - ";
        echo ($context["meta_subject"] ?? null);
        echo "\" />
\t<meta name=\"twitter:card\" value=\"summary\">
\t<meta property=\"og:title\" content=\"";
        // line 20
        echo ($context["meta_subject"] ?? null);
        echo "\" />
\t<meta property=\"og:type\" content=\"article\" />
\t<meta property=\"og:url\" content=\"";
        // line 22
        echo $this->getAttribute(($context["config"] ?? null), "domain", []);
        echo "/";
        echo $this->getAttribute(($context["board"] ?? null), "uri", []);
        echo "/";
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "dir", []), "res", []);
        echo $this->getAttribute(($context["thread"] ?? null), "id", []);
        echo ".html\" />
\t";
        // line 23
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
        // line 24
        echo "\t<meta property=\"og:description\" content=\"";
        echo twig_escape_filter($this->env, remove_modifiers($this->getAttribute(($context["thread"] ?? null), "body_nomarkup", [])));
        echo "\" />

\t<title>";
        // line 26
        echo $this->getAttribute(($context["board"] ?? null), "url", []);
        echo " - ";
        echo ($context["meta_subject"] ?? null);
        echo "</title>
</head>
<body class=\"8chan vichan ";
        // line 28
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
        // line 29
        echo $this->getAttribute(($context["boardlist"] ?? null), "top", []);
        echo "
\t<a name=\"top\"></a>
\t";
        // line 31
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
        // line 32
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
        // line 33
        echo "\t<header>
\t\t<h1>";
        // line 34
        echo $this->getAttribute(($context["board"] ?? null), "url", []);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["board"] ?? null), "title", []));
        echo "</h1>
\t\t<div class=\"subtitle\">
\t\t\t";
        // line 36
        if ($this->getAttribute(($context["board"] ?? null), "subtitle", [])) {
            // line 37
            echo "\t\t\t\t";
            if ($this->getAttribute(($context["config"] ?? null), "allow_subtitle_html", [])) {
                // line 38
                echo "\t\t\t\t\t";
                echo $this->getAttribute(($context["board"] ?? null), "subtitle", []);
                echo "
\t\t\t\t";
            } else {
                // line 40
                echo "\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["board"] ?? null), "subtitle", []));
                echo "
\t\t\t\t";
            }
            // line 42
            echo "\t\t\t";
        }
        // line 43
        echo "\t\t\t";
        if (($context["mod"] ?? null)) {
            echo "<p><a href=\"?/\">";
            echo gettext("Return to dashboard");
            echo "</a></p>";
        }
        // line 44
        echo "\t\t</div>
\t</header>

\t";
        // line 47
        $this->loadTemplate("attention_bar.html", "thread.html", 47)->display($context);
        // line 48
        echo "
\t<div class=\"banner\">";
        // line 49
        echo gettext("Posting mode: Reply");
        echo " <a class=\"unimportant\" href=\"";
        echo ($context["return"] ?? null);
        echo "\">[";
        echo gettext("Return");
        echo "]</a> <a class=\"unimportant\" href=\"#bottom\">[";
        echo gettext("Go to bottom");
        echo "]</a></div>

\t";
        // line 51
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "ad", []), "top", []);
        echo "

\t";
        // line 53
        $this->loadTemplate("post_form.html", "thread.html", 53)->display($context);
        // line 54
        echo "
\t";
        // line 55
        if ($this->getAttribute(($context["config"] ?? null), "global_message", [])) {
            echo "<hr /><div class=\"blotter\">";
            echo $this->getAttribute(($context["config"] ?? null), "global_message", []);
            echo "</div>";
        }
        // line 56
        echo "\t<hr />
\t<form name=\"postcontrols\" action=\"";
        // line 57
        echo $this->getAttribute(($context["config"] ?? null), "post_url", []);
        echo "\" method=\"post\">
\t\t<input type=\"hidden\" name=\"board\" value=\"";
        // line 58
        echo $this->getAttribute(($context["board"] ?? null), "uri", []);
        echo "\" />
\t\t";
        // line 59
        if (($context["mod"] ?? null)) {
            echo "<input type=\"hidden\" name=\"mod\" value=\"1\" />";
        }
        // line 60
        echo "\t\t
\t\t";
        // line 61
        echo ($context["body"] ?? null);
        echo "
\t\t
\t\t<div id=\"thread-interactions\">
\t\t\t<span id=\"thread-links\">
\t\t\t\t<a id=\"thread-return\" href=\"";
        // line 65
        echo ($context["return"] ?? null);
        echo "\">[";
        echo gettext("Return");
        echo "]</a>
\t\t\t\t<a id=\"thread-top\" href=\"#top\">[";
        // line 66
        echo gettext("Go to top");
        echo "]</a>
                \t\t";
        // line 67
        if ($this->getAttribute(($context["config"] ?? null), "catalog_link", [])) {
            // line 68
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
        // line 70
        echo "\t\t\t</span>
\t\t\t
\t\t\t<span id=\"thread-quick-reply\">
\t\t\t\t<a id=\"link-quick-reply\" href=\"#\">[";
        // line 73
        echo gettext("Post a Reply");
        echo "]</a>
\t\t\t</span>
\t\t\t
\t\t\t";
        // line 76
        $this->loadTemplate("report_delete.html", "thread.html", 76)->display($context);
        // line 77
        echo "\t\t</div>
\t\t
\t\t<div class=\"clearfix\"></div>
\t</form>
\t
\t<a name=\"bottom\"></a>
\t";
        // line 83
        echo $this->getAttribute(($context["boardlist"] ?? null), "bottom", []);
        echo "

\t";
        // line 85
        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "ad", []), "bottom", []);
        echo "

\t";
        // line 87
        $this->loadTemplate("footer.html", "thread.html", 87)->display($context);
        // line 88
        echo "\t
\t<script type=\"text/javascript\">";
        // line 91
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
        return array (  332 => 91,  329 => 88,  327 => 87,  322 => 85,  317 => 83,  309 => 77,  307 => 76,  301 => 73,  296 => 70,  282 => 68,  280 => 67,  276 => 66,  270 => 65,  263 => 61,  260 => 60,  256 => 59,  252 => 58,  248 => 57,  245 => 56,  239 => 55,  236 => 54,  234 => 53,  229 => 51,  218 => 49,  215 => 48,  213 => 47,  208 => 44,  201 => 43,  198 => 42,  192 => 40,  186 => 38,  183 => 37,  181 => 36,  174 => 34,  171 => 33,  148 => 32,  136 => 31,  131 => 29,  117 => 28,  110 => 26,  104 => 24,  93 => 23,  84 => 22,  79 => 20,  70 => 18,  67 => 17,  59 => 16,  56 => 15,  54 => 14,  51 => 13,  49 => 12,  43 => 9,  39 => 8,  30 => 1,);
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
