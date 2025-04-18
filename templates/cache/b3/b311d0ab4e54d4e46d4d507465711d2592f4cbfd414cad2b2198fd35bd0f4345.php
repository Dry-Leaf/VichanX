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

/* post/fileinfo.html */
class __TwigTemplate_38173af27a2e552db94432abe342ba2ea1d9a10c1ba30f853a751817536c292c extends \Twig\Template
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
        echo "\t";
        if ($this->getAttribute(($context["post"] ?? null), "embed", [])) {
            // line 2
            echo "\t\t";
            echo $this->getAttribute(($context["post"] ?? null), "embed", []);
            echo "
    ";
        } else {
            // line 4
            echo "    <div class=\"files\">
    ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["post"] ?? null), "files", []));
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
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 6
                echo "        <div class=\"file";
                if (($this->getAttribute(($context["post"] ?? null), "num_files", []) > 1)) {
                    echo " multifile\" style=\"width:";
                    echo ($this->getAttribute($context["file"], "thumbwidth", []) + 40);
                    echo "px\"";
                } else {
                    echo "\"";
                }
                echo ">
\t";
                // line 7
                if (($this->getAttribute($context["file"], "file", []) == "deleted")) {
                    // line 8
                    echo "\t\t<img class=\"post-image deleted\" src=\"";
                    echo $this->getAttribute(($context["config"] ?? null), "root", []);
                    echo $this->getAttribute(($context["config"] ?? null), "image_deleted", []);
                    echo "\" alt=\"\" />
\t";
                } else {
                    // line 10
                    echo "\t\t<p class=\"fileinfo\">File: <a href=\"";
                    echo $this->getAttribute(($context["config"] ?? null), "uri_img", []);
                    echo $this->getAttribute($context["file"], "file", []);
                    echo "\"
\t\t";
                    // line 11
                    if (($this->getAttribute(($context["config"] ?? null), "show_filename", []) && $this->getAttribute($context["file"], "filename", []))) {
                        // line 12
                        echo "\t\t\tdownload=\"";
                        echo $this->getAttribute($context["file"], "filename", []);
                        echo "\"
\t\t";
                    }
                    // line 13
                    echo ">
\t\t";
                    // line 14
                    echo $this->getAttribute($context["file"], "file", []);
                    echo "</a> <span class=\"unimportant\">
\t\t(
\t\t\t";
                    // line 16
                    if (($this->getAttribute($context["file"], "thumb", []) == "spoiler")) {
                        // line 17
                        echo "\t\t\t\t";
                        echo gettext("Spoiler Image");
                        echo ", 
\t\t\t";
                    }
                    // line 19
                    echo "\t\t\t";
                    echo format_bytes($this->getAttribute($context["file"], "size", []));
                    echo "
\t\t\t";
                    // line 20
                    if (($this->getAttribute($context["file"], "width", []) && $this->getAttribute($context["file"], "height", []))) {
                        // line 21
                        echo "\t\t\t\t, ";
                        echo $this->getAttribute($context["file"], "width", []);
                        echo "x";
                        echo $this->getAttribute($context["file"], "height", []);
                        echo "
\t\t\t\t";
                        // line 22
                        if ($this->getAttribute(($context["config"] ?? null), "show_ratio", [])) {
                            // line 23
                            echo "\t\t\t\t\t, ";
                            echo twig_ratio_function($this->getAttribute($context["file"], "width", []), $this->getAttribute($context["file"], "height", []));
                            echo "
\t\t\t\t";
                        }
                        // line 25
                        echo "\t\t\t";
                    }
                    // line 26
                    echo "\t\t\t";
                    if (($this->getAttribute(($context["config"] ?? null), "show_filename", []) && $this->getAttribute($context["file"], "filename", []))) {
                        // line 27
                        echo "\t\t\t\t, 
\t\t\t\t";
                        // line 28
                        if ((twig_length_filter($this->env, $this->getAttribute($context["file"], "filename", [])) > $this->getAttribute(($context["config"] ?? null), "max_filename_display", []))) {
                            // line 29
                            echo "\t\t\t\t\t<span class=\"postfilename\" title=\"";
                            echo bidi_cleanup(twig_escape_filter($this->env, $this->getAttribute($context["file"], "filename", [])));
                            echo "\">";
                            echo bidi_cleanup(twig_escape_filter($this->env, twig_filename_truncate_filter($this->getAttribute($context["file"], "filename", []), $this->getAttribute(($context["config"] ?? null), "max_filename_display", []))));
                            echo "</span>
\t\t\t\t";
                        } else {
                            // line 31
                            echo "\t\t\t\t\t<span class=\"postfilename\">";
                            echo bidi_cleanup(twig_escape_filter($this->env, $this->getAttribute($context["file"], "filename", [])));
                            echo "</span>
\t\t\t\t";
                        }
                        // line 33
                        echo "\t\t\t";
                    }
                    // line 34
                    echo "\t\t)
\t\t";
                    // line 35
                    $this->loadTemplate("post/image_identification.html", "post/fileinfo.html", 35)->display($context);
                    // line 36
                    echo "\t\t";
                    $this->loadTemplate("post/file_controls.html", "post/fileinfo.html", 36)->display($context);
                    echo "</span></p>
\t";
                    // line 37
                    $this->loadTemplate("post/image.html", "post/fileinfo.html", 37)->display(twig_array_merge($context, ["post" => $context["file"]]));
                    // line 38
                    echo "\t";
                }
                // line 39
                echo "</div>
    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "</div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "post/fileinfo.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 41,  174 => 39,  171 => 38,  169 => 37,  164 => 36,  162 => 35,  159 => 34,  156 => 33,  150 => 31,  142 => 29,  140 => 28,  137 => 27,  134 => 26,  131 => 25,  125 => 23,  123 => 22,  116 => 21,  114 => 20,  109 => 19,  103 => 17,  101 => 16,  96 => 14,  93 => 13,  87 => 12,  85 => 11,  79 => 10,  72 => 8,  70 => 7,  59 => 6,  42 => 5,  39 => 4,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "post/fileinfo.html", "/home/tcv3dev/bluearchive.tohno-chan.org/templates/post/fileinfo.html");
    }
}
