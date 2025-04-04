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

/* post/post_controls.html */
class __TwigTemplate_39a93be4c454e041c3653a2495c5b03c4c7464cc0f3559a0d15bd08ee2947543 extends \Twig\Template
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
        if (($context["mod"] ?? null)) {
            // line 2
            echo "
<span class=\"controls ";
            // line 3
            if ( !$this->getAttribute(($context["post"] ?? null), "thread", [])) {
                echo "op";
            }
            echo "\">
";
            // line 4
            if (twig_hasPermission_filter(($context["mod"] ?? null), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "delete", []), $this->getAttribute(($context["board"] ?? null), "uri", []))) {
                // line 5
                echo "\t";
                echo twig_secure_link_confirm($this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "link_delete", []), gettext("Delete"), gettext("Are you sure you want to delete this?"), (($this->getAttribute(($context["board"] ?? null), "dir", []) . "delete/") . $this->getAttribute(($context["post"] ?? null), "id", [])));
                echo "&nbsp;
";
            }
            // line 7
            if (twig_hasPermission_filter(($context["mod"] ?? null), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "deletebyip", []), $this->getAttribute(($context["board"] ?? null), "uri", []))) {
                // line 8
                echo "\t";
                echo twig_secure_link_confirm($this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "link_deletebyip", []), gettext("Delete all posts by IP"), gettext("Are you sure you want to delete all posts by this IP address?"), (($this->getAttribute(($context["board"] ?? null), "dir", []) . "deletebyip/") . $this->getAttribute(($context["post"] ?? null), "id", [])));
                echo "&nbsp;
";
            }
            // line 10
            if (twig_hasPermission_filter(($context["mod"] ?? null), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "deletebyip_global", []), $this->getAttribute(($context["board"] ?? null), "uri", []))) {
                // line 11
                echo "\t";
                echo twig_secure_link_confirm($this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "link_deletebyip_global", []), gettext("Delete all posts by IP across all boards"), gettext("Are you sure you want to delete all posts by this IP address, across all boards?"), ((($this->getAttribute(($context["board"] ?? null), "dir", []) . "deletebyip/") . $this->getAttribute(($context["post"] ?? null), "id", [])) . "/global"));
                echo "&nbsp;
";
            }
            // line 13
            if (twig_hasPermission_filter(($context["mod"] ?? null), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "ban", []), $this->getAttribute(($context["board"] ?? null), "uri", []))) {
                // line 14
                echo "\t<a title=\"";
                echo gettext("Ban");
                echo "\" href=\"?/";
                echo $this->getAttribute(($context["board"] ?? null), "dir", []);
                echo "ban/";
                echo $this->getAttribute(($context["post"] ?? null), "id", []);
                echo "\">";
                echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "link_ban", []);
                echo "</a>&nbsp;
";
            }
            // line 16
            if (twig_hasPermission_filter(($context["mod"] ?? null), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "bandelete", []), $this->getAttribute(($context["board"] ?? null), "uri", []))) {
                // line 17
                echo "\t<a title=\"";
                echo gettext("Ban & Delete");
                echo "\" href=\"?/";
                echo $this->getAttribute(($context["board"] ?? null), "dir", []);
                echo "ban&amp;delete/";
                echo $this->getAttribute(($context["post"] ?? null), "id", []);
                echo "\">";
                echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "link_bandelete", []);
                echo "</a>&nbsp;
";
            }
            // line 19
            echo "
";
            // line 20
            if ( !$this->getAttribute(($context["post"] ?? null), "thread", [])) {
                // line 21
                if (twig_hasPermission_filter(($context["mod"] ?? null), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "sticky", []), $this->getAttribute(($context["board"] ?? null), "uri", []))) {
                    // line 22
                    echo "\t";
                    if ($this->getAttribute(($context["post"] ?? null), "sticky", [])) {
                        // line 23
                        echo "\t<a title=\"";
                        echo gettext("Make thread not sticky");
                        echo "\" href=\"?/";
                        echo twig_secure_link((($this->getAttribute(($context["board"] ?? null), "dir", []) . "unsticky/") . $this->getAttribute(($context["post"] ?? null), "id", [])));
                        echo "\">";
                        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "link_desticky", []);
                        echo "</a>&nbsp;
\t";
                    } else {
                        // line 25
                        echo "\t<a title=\"";
                        echo gettext("Make thread sticky");
                        echo "\" href=\"?/";
                        echo twig_secure_link((($this->getAttribute(($context["board"] ?? null), "dir", []) . "sticky/") . $this->getAttribute(($context["post"] ?? null), "id", [])));
                        echo "\">";
                        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "link_sticky", []);
                        echo "</a>&nbsp;
\t";
                    }
                }
                // line 28
                if (twig_hasPermission_filter(($context["mod"] ?? null), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "bumplock", []), $this->getAttribute(($context["board"] ?? null), "uri", []))) {
                    // line 29
                    echo "\t";
                    if ($this->getAttribute(($context["post"] ?? null), "sage", [])) {
                        // line 30
                        echo "\t<a title=\"";
                        echo gettext("Allow thread to be bumped");
                        echo "\" href=\"?/";
                        echo twig_secure_link((($this->getAttribute(($context["board"] ?? null), "dir", []) . "bumpunlock/") . $this->getAttribute(($context["post"] ?? null), "id", [])));
                        echo "\">";
                        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "link_bumpunlock", []);
                        echo "</a>&nbsp;
\t";
                    } else {
                        // line 32
                        echo "\t<a title=\"";
                        echo gettext("Prevent thread from being bumped");
                        echo "\" href=\"?/";
                        echo twig_secure_link((($this->getAttribute(($context["board"] ?? null), "dir", []) . "bumplock/") . $this->getAttribute(($context["post"] ?? null), "id", [])));
                        echo "\">";
                        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "link_bumplock", []);
                        echo "</a>&nbsp;
\t";
                    }
                }
                // line 35
                if (twig_hasPermission_filter(($context["mod"] ?? null), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "lock", []), $this->getAttribute(($context["board"] ?? null), "uri", []))) {
                    // line 36
                    echo "\t";
                    if ($this->getAttribute(($context["post"] ?? null), "locked", [])) {
                        // line 37
                        echo "\t<a title=\"";
                        echo gettext("Unlock thread");
                        echo "\" href=\"?/";
                        echo twig_secure_link((($this->getAttribute(($context["board"] ?? null), "dir", []) . "unlock/") . $this->getAttribute(($context["post"] ?? null), "id", [])));
                        echo "\">";
                        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "link_unlock", []);
                        echo "</a>&nbsp;
\t";
                    } else {
                        // line 39
                        echo "\t<a title=\"";
                        echo gettext("Lock thread");
                        echo "\" href=\"?/";
                        echo twig_secure_link((($this->getAttribute(($context["board"] ?? null), "dir", []) . "lock/") . $this->getAttribute(($context["post"] ?? null), "id", [])));
                        echo "\">";
                        echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "link_lock", []);
                        echo "</a>&nbsp;
\t";
                    }
                }
                // line 42
                echo "
";
            }
            // line 44
            if (twig_hasPermission_filter(($context["mod"] ?? null), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "move", []), $this->getAttribute(($context["board"] ?? null), "uri", []))) {
                // line 45
                echo "\t";
                if ( !$this->getAttribute(($context["post"] ?? null), "thread", [])) {
                    // line 46
                    echo "\t\t<a title=\"";
                    echo gettext("Move thread to another board");
                    echo "\" href=\"?/";
                    echo $this->getAttribute(($context["board"] ?? null), "dir", []);
                    echo "move/";
                    echo $this->getAttribute(($context["post"] ?? null), "id", []);
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "link_move", []);
                    echo "</a>&nbsp;
\t";
                } else {
                    // line 48
                    echo "\t\t<a title=\"";
                    echo gettext("Move reply to another board");
                    echo "\" href=\"?/";
                    echo $this->getAttribute(($context["board"] ?? null), "dir", []);
                    echo "move_reply/";
                    echo $this->getAttribute(($context["post"] ?? null), "id", []);
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "link_move", []);
                    echo "</a>&nbsp;
\t";
                }
            }
            // line 51
            if (twig_hasPermission_filter(($context["mod"] ?? null), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "cycle", []), $this->getAttribute(($context["board"] ?? null), "uri", []))) {
                // line 52
                echo "\t";
                if ($this->getAttribute(($context["post"] ?? null), "cycle", [])) {
                    // line 53
                    echo "\t<a title=\"";
                    echo gettext("Make thread not cycle");
                    echo "\" href=\"?/";
                    echo twig_secure_link((($this->getAttribute(($context["board"] ?? null), "dir", []) . "uncycle/") . $this->getAttribute(($context["post"] ?? null), "id", [])));
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "link_uncycle", []);
                    echo "</a>&nbsp;
\t";
                } else {
                    // line 55
                    echo "\t<a title=\"";
                    echo gettext("Make thread cycle");
                    echo "\" href=\"?/";
                    echo twig_secure_link((($this->getAttribute(($context["board"] ?? null), "dir", []) . "cycle/") . $this->getAttribute(($context["post"] ?? null), "id", [])));
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "link_cycle", []);
                    echo "</a>&nbsp;
\t";
                }
            }
            // line 58
            if (twig_hasPermission_filter(($context["mod"] ?? null), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "editpost", []), $this->getAttribute(($context["board"] ?? null), "uri", []))) {
                // line 59
                echo "\t<a title=\"";
                echo gettext("Edit post");
                echo "\" href=\"?/";
                echo $this->getAttribute(($context["board"] ?? null), "dir", []);
                echo "edit";
                if ($this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "raw_html_default", [])) {
                    echo "_raw";
                }
                echo "/";
                echo $this->getAttribute(($context["post"] ?? null), "id", []);
                echo "\">";
                echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "link_editpost", []);
                echo "</a>&nbsp;
";
            }
            // line 61
            echo "</span>

";
        }
    }

    public function getTemplateName()
    {
        return "post/post_controls.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 61,  238 => 59,  236 => 58,  225 => 55,  215 => 53,  212 => 52,  210 => 51,  197 => 48,  185 => 46,  182 => 45,  180 => 44,  176 => 42,  165 => 39,  155 => 37,  152 => 36,  150 => 35,  139 => 32,  129 => 30,  126 => 29,  124 => 28,  113 => 25,  103 => 23,  100 => 22,  98 => 21,  96 => 20,  93 => 19,  81 => 17,  79 => 16,  67 => 14,  65 => 13,  59 => 11,  57 => 10,  51 => 8,  49 => 7,  43 => 5,  41 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "post/post_controls.html", "/home/tcv3dev/bluearchive.tohno-chan.org/templates/post/post_controls.html");
    }
}
