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

/* post_reply.html */
class __TwigTemplate_15c223bb1e32be4ada64eea9751236d9bf31ecf8df229ea4c0c3eda9ccc3cd18 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            '__internal_6b4c2f1b0565e64fbba938eed42344cc225813d5d9b76860d56ebc8bea7ec5a3' => [$this, 'block___internal_6b4c2f1b0565e64fbba938eed42344cc225813d5d9b76860d56ebc8bea7ec5a3'],
            '__internal_b01f767c4e33adef249db142651af9a07bc6b70b6277214b67abf7dd832ea2ff' => [$this, 'block___internal_b01f767c4e33adef249db142651af9a07bc6b70b6277214b67abf7dd832ea2ff'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo twig_remove_whitespace_filter(        $this->renderBlock("__internal_6b4c2f1b0565e64fbba938eed42344cc225813d5d9b76860d56ebc8bea7ec5a3", $context, $blocks));
        // line 21
        if (($context["index"] ?? null)) {
            echo truncate($this->getAttribute(($context["post"] ?? null), "body", []), $this->getAttribute(($context["post"] ?? null), "link", []));
        } else {
            echo $this->getAttribute(($context["post"] ?? null), "body", []);
        }
        echo twig_remove_whitespace_filter(        $this->renderBlock("__internal_b01f767c4e33adef249db142651af9a07bc6b70b6277214b67abf7dd832ea2ff", $context, $blocks));
    }

    // line 1
    public function block___internal_6b4c2f1b0565e64fbba938eed42344cc225813d5d9b76860d56ebc8bea7ec5a3($context, array $blocks = [])
    {
        // line 3
        echo "<div class=\"post reply\" id=\"reply_";
        echo $this->getAttribute(($context["post"] ?? null), "id", []);
        echo "\">
<p class=\"intro\">
\t";
        // line 5
        if ( !($context["index"] ?? null)) {
            echo "<a id=\"";
            echo $this->getAttribute(($context["post"] ?? null), "id", []);
            echo "\" class=\"post_anchor\"></a>";
        }
        // line 6
        echo "\t<input type=\"checkbox\" class=\"delete\" name=\"delete_";
        echo $this->getAttribute(($context["post"] ?? null), "id", []);
        echo "\" id=\"delete_";
        echo $this->getAttribute(($context["post"] ?? null), "id", []);
        echo "\" />
\t<label for=\"delete_";
        // line 7
        echo $this->getAttribute(($context["post"] ?? null), "id", []);
        echo "\">
\t\t";
        // line 8
        $this->loadTemplate("post/subject.html", "post_reply.html", 8)->display($context);
        // line 9
        echo "\t\t";
        $this->loadTemplate("post/name.html", "post_reply.html", 9)->display($context);
        // line 10
        echo "\t\t";
        $this->loadTemplate("post/ip.html", "post_reply.html", 10)->display($context);
        // line 11
        echo "\t\t";
        $this->loadTemplate("post/flag.html", "post_reply.html", 11)->display($context);
        // line 12
        echo "\t\t";
        $this->loadTemplate("post/time.html", "post_reply.html", 12)->display($context);
        // line 13
        echo "\t</label>
\t";
        // line 14
        $this->loadTemplate("post/poster_id.html", "post_reply.html", 14)->display($context);
        echo "&nbsp;
\t<a class=\"post_no\" id=\"post_no_";
        // line 15
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
        // line 16
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
\t</p>
    ";
        // line 18
        $this->loadTemplate("post/fileinfo.html", "post_reply.html", 18)->display($context);
        echo " 
    ";
        // line 19
        $this->loadTemplate("post/post_controls.html", "post_reply.html", 19)->display($context);
        // line 20
        echo "\t<div class=\"body\" ";
        if ((twig_length_filter($this->env, $this->getAttribute(($context["post"] ?? null), "files", [])) > 1)) {
            echo "style=\"clear:both\"";
        }
        echo ">
\t\t";
    }

    // line 21
    public function block___internal_b01f767c4e33adef249db142651af9a07bc6b70b6277214b67abf7dd832ea2ff($context, array $blocks = [])
    {
        // line 22
        echo "\t\t";
        if ($this->getAttribute($this->getAttribute(($context["post"] ?? null), "modifiers", []), "history", [], "array")) {
            // line 23
            echo "\t\t\t";
            $this->loadTemplate("post/history.html", "post_reply.html", 23)->display($context);
            // line 24
            echo "\t\t";
        }
        // line 25
        echo "\t\t";
        if ($this->getAttribute($this->getAttribute(($context["post"] ?? null), "modifiers", []), "ban message", [], "array")) {
            // line 26
            echo "\t\t\t";
            echo sprintf($this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "ban_message", []), $this->getAttribute($this->getAttribute(($context["post"] ?? null), "modifiers", []), "ban message", [], "array"));
            echo "
\t\t";
        }
        // line 28
        echo "\t</div>
</div>
<br/>
";
    }

    public function getTemplateName()
    {
        return "post_reply.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 28,  145 => 26,  142 => 25,  139 => 24,  136 => 23,  133 => 22,  130 => 21,  121 => 20,  119 => 19,  115 => 18,  102 => 16,  90 => 15,  86 => 14,  83 => 13,  80 => 12,  77 => 11,  74 => 10,  71 => 9,  69 => 8,  65 => 7,  58 => 6,  52 => 5,  46 => 3,  43 => 1,  34 => 21,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "post_reply.html", "/home/tcv3dev/bluearchive.tohno-chan.org/templates/post_reply.html");
    }
}
