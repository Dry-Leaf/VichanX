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

/* post_thread.html */
class __TwigTemplate_72c22f45122f1331d3b2df9a29c43a5f09e7369dbd82d69f4da66562086540e2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            '__internal_7e86e0d30e977175d60a734966c6d6e33fdfec9ce323fab2e823215fd9ff1f81' => [$this, 'block___internal_7e86e0d30e977175d60a734966c6d6e33fdfec9ce323fab2e823215fd9ff1f81'],
            '__internal_f476005a4efeb85cb85e9bf837569a8ac77cafb4998da8281aa13e8521b57ad2' => [$this, 'block___internal_f476005a4efeb85cb85e9bf837569a8ac77cafb4998da8281aa13e8521b57ad2'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo twig_remove_whitespace_filter(        $this->renderBlock("__internal_7e86e0d30e977175d60a734966c6d6e33fdfec9ce323fab2e823215fd9ff1f81", $context, $blocks));
        // line 61
        if (($context["index"] ?? null)) {
            echo truncate($this->getAttribute(($context["post"] ?? null), "body", []), $this->getAttribute(($context["post"] ?? null), "link", []));
        } else {
            echo $this->getAttribute(($context["post"] ?? null), "body", []);
        }
        echo twig_remove_whitespace_filter(        $this->renderBlock("__internal_f476005a4efeb85cb85e9bf837569a8ac77cafb4998da8281aa13e8521b57ad2", $context, $blocks));
        // line 93
        $context["hr"] = $this->getAttribute(($context["post"] ?? null), "hr", []);
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["post"], "posts", []));
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
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 95
            echo "\t";
            $this->loadTemplate("post_reply.html", "post_thread.html", 95)->display($context);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "<br class=\"clear\"/>";
        if (($context["hr"] ?? null)) {
            echo "<hr/>";
        }
        // line 98
        echo "</div>
";
    }

    // line 1
    public function block___internal_7e86e0d30e977175d60a734966c6d6e33fdfec9ce323fab2e823215fd9ff1f81($context, array $blocks = [])
    {
        // line 3
        echo "
<div class=\"thread\" id=\"thread_";
        // line 4
        echo $this->getAttribute(($context["post"] ?? null), "id", []);
        echo "\" data-board=\"";
        echo $this->getAttribute(($context["board"] ?? null), "uri", []);
        echo "\">
";
        // line 5
        if ( !($context["index"] ?? null)) {
            echo "<a id=\"";
            echo $this->getAttribute(($context["post"] ?? null), "id", []);
            echo "\" class=\"post_anchor\"></a>";
        }
        // line 6
        echo "
";
        // line 7
        $this->loadTemplate("post/fileinfo.html", "post_thread.html", 7)->display($context);
        // line 8
        echo "<div class=\"post op\" id=\"op_";
        echo $this->getAttribute(($context["post"] ?? null), "id", []);
        echo "\" ";
        if (($this->getAttribute(($context["post"] ?? null), "num_files", []) > 1)) {
            echo "style='clear:both'";
        }
        echo "><p class=\"intro\">
\t<input type=\"checkbox\" class=\"delete\" name=\"delete_";
        // line 9
        echo $this->getAttribute(($context["post"] ?? null), "id", []);
        echo "\" id=\"delete_";
        echo $this->getAttribute(($context["post"] ?? null), "id", []);
        echo "\" />
\t<label for=\"delete_";
        // line 10
        echo $this->getAttribute(($context["post"] ?? null), "id", []);
        echo "\">
\t\t";
        // line 11
        $this->loadTemplate("post/subject.html", "post_thread.html", 11)->display($context);
        // line 12
        echo "\t\t";
        $this->loadTemplate("post/name.html", "post_thread.html", 12)->display($context);
        // line 13
        echo "\t\t";
        $this->loadTemplate("post/ip.html", "post_thread.html", 13)->display($context);
        // line 14
        echo "\t\t";
        $this->loadTemplate("post/flag.html", "post_thread.html", 14)->display($context);
        // line 15
        echo "\t\t";
        $this->loadTemplate("post/time.html", "post_thread.html", 15)->display($context);
        // line 16
        echo "\t</label>
\t";
        // line 17
        $this->loadTemplate("post/poster_id.html", "post_thread.html", 17)->display($context);
        echo "&nbsp;
\t<a class=\"post_no\" id=\"post_no_";
        // line 18
        echo $this->getAttribute(($context["post"] ?? null), "id", []);
        echo "\" onclick=\"highlightReply(";
        echo $this->getAttribute(($context["post"] ?? null), "id", []);
        echo ")\" href=\"";
        if (($context["isnoko50"] ?? null)) {
            echo $this->getAttribute(($context["post"] ?? null), "link", [0 => "", 1 => "50"], "method");
        } else {
            echo $this->getAttribute(($context["post"] ?? null), "link", []);
        }
        echo "\">No.</a>
\t<a class=\"post_no\" onclick=\"citeReply(";
        // line 19
        echo $this->getAttribute(($context["post"] ?? null), "id", []);
        echo ")\" href=\"";
        if (($context["isnoko50"] ?? null)) {
            echo $this->getAttribute(($context["post"] ?? null), "link", [0 => "q", 1 => "50"], "method");
        } else {
            echo $this->getAttribute(($context["post"] ?? null), "link", [0 => "q"], "method");
        }
        echo "\">";
        echo $this->getAttribute(($context["post"] ?? null), "id", []);
        echo "</a>
\t";
        // line 20
        if ($this->getAttribute(($context["post"] ?? null), "sticky", [])) {
            // line 21
            echo "\t\t";
            if ($this->getAttribute(($context["config"] ?? null), "font_awesome", [])) {
                // line 22
                echo "\t\t\t<i class=\"fa fa-thumb-tack\" title=\"Sticky\"></i>
\t\t";
            } else {
                // line 24
                echo "\t\t\t<img class=\"icon\" title=\"Sticky\" src=\"";
                echo $this->getAttribute(($context["config"] ?? null), "image_sticky", []);
                echo "\" alt=\"Sticky\" />
\t\t";
            }
            // line 26
            echo "\t";
        }
        // line 27
        echo "\t";
        if ($this->getAttribute(($context["post"] ?? null), "locked", [])) {
            // line 28
            echo "\t\t";
            if ($this->getAttribute(($context["config"] ?? null), "font_awesome", [])) {
                // line 29
                echo "\t\t\t<i class=\"fa fa-lock\" title=\"Locked\"></i>
\t\t";
            } else {
                // line 31
                echo "\t\t\t<img class=\"icon\" title=\"Locked\" src=\"";
                echo $this->getAttribute(($context["config"] ?? null), "image_locked", []);
                echo "\" alt=\"Locked\" />
\t\t";
            }
            // line 33
            echo "\t";
        }
        // line 34
        echo "\t";
        if (($this->getAttribute(($context["post"] ?? null), "sage", []) && (($this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "view_bumplock", []) < 0) || ($this->getAttribute(($context["post"] ?? null), "mod", []) && twig_hasPermission_filter($this->getAttribute(($context["post"] ?? null), "mod", []), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "view_bumplock", []), $this->getAttribute(($context["board"] ?? null), "uri", [])))))) {
            // line 35
            echo "\t\t";
            if ($this->getAttribute(($context["config"] ?? null), "font_awesome", [])) {
                // line 36
                echo "\t\t\t<i class=\"fa fa-anchor\" title=\"Bumplocked\"></i>
\t\t";
            } else {
                // line 38
                echo "\t\t\t<img class=\"icon\" title=\"Bumplocked\" src=\"";
                echo $this->getAttribute(($context["config"] ?? null), "image_bumplocked", []);
                echo "\" alt=\"Bumplocked\" />
\t\t";
            }
            // line 40
            echo "\t";
        }
        // line 41
        echo "\t";
        if ($this->getAttribute(($context["post"] ?? null), "cycle", [])) {
            // line 42
            echo "\t\t";
            if ($this->getAttribute(($context["config"] ?? null), "font_awesome", [])) {
                // line 43
                echo "\t\t\t<i class=\"fa fa-refresh\" title=\"Cyclical\"></i>
\t\t";
            } else {
                // line 45
                echo "\t\t\t<img class=\"icon\" title=\"Cyclical\" src=\"";
                echo $this->getAttribute(($context["config"] ?? null), "image_sticky", []);
                echo "\" alt=\"Cyclical\" />
\t\t";
            }
            // line 47
            echo "\t";
        }
        // line 48
        echo "\t";
        if (($context["index"] ?? null)) {
            // line 49
            echo "\t\t<a href=\"";
            echo $this->getAttribute(($context["post"] ?? null), "root", []);
            echo $this->getAttribute(($context["board"] ?? null), "dir", []);
            echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "dir", []), "res", []);
            echo link_for(($context["post"] ?? null));
            echo "\">[";
            echo gettext("Reply");
            echo "]</a>
\t";
        }
        // line 51
        echo "\t";
        if (($context["isnoko50"] ?? null)) {
            // line 52
            echo "\t\t<a href=\"";
            echo $this->getAttribute(($context["post"] ?? null), "root", []);
            echo $this->getAttribute(($context["board"] ?? null), "dir", []);
            echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "dir", []), "res", []);
            echo link_for(($context["post"] ?? null));
            echo "\">[";
            echo gettext("View All");
            echo "]</a>
\t";
        }
        // line 54
        echo "\t";
        if ((($context["hasnoko50"] ?? null) &&  !($context["isnoko50"] ?? null))) {
            // line 55
            echo "\t\t";
            $context["lastcount"] = $this->getAttribute(($context["config"] ?? null), "noko50_count", []);
            // line 56
            echo "\t\t<a href=\"";
            echo $this->getAttribute(($context["post"] ?? null), "root", []);
            echo $this->getAttribute(($context["board"] ?? null), "dir", []);
            echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "dir", []), "res", []);
            echo link_for(($context["post"] ?? null), true);
            echo "\">[";
            echo strtr(ngettext("Last 1 Post", "Last %count% Posts", abs(($context["lastcount"] ?? null))), array("%count%" => abs(($context["lastcount"] ?? null)), ));
            echo "]</a>
\t";
        }
        // line 58
        echo "\t";
        $this->loadTemplate("post/post_controls.html", "post_thread.html", 58)->display($context);
        // line 59
        echo "\t</p>
\t<div class=\"body\">
\t\t";
    }

    // line 61
    public function block___internal_f476005a4efeb85cb85e9bf837569a8ac77cafb4998da8281aa13e8521b57ad2($context, array $blocks = [])
    {
        // line 62
        echo "\t\t";
        if ($this->getAttribute($this->getAttribute(($context["post"] ?? null), "modifiers", []), "history", [], "array")) {
            // line 63
            echo "\t\t\t";
            $this->loadTemplate("post/history.html", "post_thread.html", 63)->display($context);
            // line 64
            echo "\t\t";
        }
        // line 65
        echo "\t\t";
        if ($this->getAttribute($this->getAttribute(($context["post"] ?? null), "modifiers", []), "ban message", [], "array")) {
            // line 66
            echo "\t\t\t";
            echo sprintf($this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "ban_message", []), $this->getAttribute($this->getAttribute(($context["post"] ?? null), "modifiers", []), "ban message", [], "array"));
            echo "
\t\t";
        }
        // line 68
        echo "\t</div>
\t";
        // line 69
        if (($this->getAttribute(($context["post"] ?? null), "omitted", []) || $this->getAttribute(($context["post"] ?? null), "omitted_images", []))) {
            // line 70
            echo "\t\t<span class=\"omitted\">
\t\t\t";
            // line 71
            if ($this->getAttribute(($context["post"] ?? null), "omitted", [])) {
                // line 72
                echo "\t\t\t\t";
                echo strtr(ngettext("1 post", "%count% posts", abs($this->getAttribute(                // line 74
($context["post"] ?? null), "omitted", []))), array("%count%" => abs($this->getAttribute(($context["post"] ?? null), "omitted", [])), ));
                // line 77
                echo "\t\t\t\t";
                if ($this->getAttribute(($context["post"] ?? null), "omitted_images", [])) {
                    // line 78
                    echo "\t\t\t\t\t ";
                    echo gettext("and");
                    echo " 
\t\t\t\t";
                }
                // line 80
                echo "\t\t\t";
            }
            // line 81
            echo "\t\t\t";
            if ($this->getAttribute(($context["post"] ?? null), "omitted_images", [])) {
                // line 82
                echo "\t\t\t\t";
                echo strtr(ngettext("1 image reply", "%count% image replies", abs($this->getAttribute(                // line 84
($context["post"] ?? null), "omitted_images", []))), array("%count%" => abs($this->getAttribute(($context["post"] ?? null), "omitted_images", [])), ));
                // line 87
                echo "\t\t\t";
            }
            echo " ";
            echo gettext("omitted. Click reply to view.");
            // line 88
            echo "\t\t</span>
\t";
        }
        // line 90
        if ( !($context["index"] ?? null)) {
        }
        // line 92
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "post_thread.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  367 => 92,  364 => 90,  360 => 88,  355 => 87,  353 => 84,  351 => 82,  348 => 81,  345 => 80,  339 => 78,  336 => 77,  334 => 74,  332 => 72,  330 => 71,  327 => 70,  325 => 69,  322 => 68,  316 => 66,  313 => 65,  310 => 64,  307 => 63,  304 => 62,  301 => 61,  295 => 59,  292 => 58,  281 => 56,  278 => 55,  275 => 54,  264 => 52,  261 => 51,  250 => 49,  247 => 48,  244 => 47,  238 => 45,  234 => 43,  231 => 42,  228 => 41,  225 => 40,  219 => 38,  215 => 36,  212 => 35,  209 => 34,  206 => 33,  200 => 31,  196 => 29,  193 => 28,  190 => 27,  187 => 26,  181 => 24,  177 => 22,  174 => 21,  172 => 20,  160 => 19,  148 => 18,  144 => 17,  141 => 16,  138 => 15,  135 => 14,  132 => 13,  129 => 12,  127 => 11,  123 => 10,  117 => 9,  108 => 8,  106 => 7,  103 => 6,  97 => 5,  91 => 4,  88 => 3,  85 => 1,  80 => 98,  75 => 97,  60 => 95,  43 => 94,  41 => 93,  34 => 61,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "post_thread.html", "/home/tcv3dev/bluearchive.tohno-chan.org/templates/post_thread.html");
    }
}
