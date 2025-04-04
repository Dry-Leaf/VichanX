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

/* post/image_identification.html */
class __TwigTemplate_fd66bca5fb268d7335f3a4a9c3b7a6518066a42073ca46d891c8c57141fc2143 extends \Twig\Template
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
        if ((($this->getAttribute(($context["file"] ?? null), "thumb", []) != "file") && $this->getAttribute(($context["config"] ?? null), "image_identification", []))) {
            // line 2
            echo "\t<span class='image_id'>
\t\t";
            // line 3
            if ($this->getAttribute(($context["config"] ?? null), "image_identification_imgops", [])) {
                // line 4
                echo "\t\t\t<a href=\"http://imgops.com/";
                echo $this->getAttribute(($context["config"] ?? null), "domain", []);
                echo $this->getAttribute(($context["config"] ?? null), "uri_img", []);
                echo $this->getAttribute(($context["file"] ?? null), "file", []);
                echo "\" target=\"_blank\">ImgOps</a> 
\t\t";
            }
            // line 6
            echo "\t\t";
            if (($this->getAttribute(($context["config"] ?? null), "image_identification_exif", []) && (twig_extension_filter($this->getAttribute(($context["file"] ?? null), "file", [])) == "jpg"))) {
                // line 7
                echo "\t\t\t<a href=\"http://exif.int21h.win/?url=";
                echo $this->getAttribute(($context["config"] ?? null), "domain", []);
                echo $this->getAttribute(($context["config"] ?? null), "uri_img", []);
                echo $this->getAttribute(($context["file"] ?? null), "file", []);
                echo "\" target=\"_blank\">Exif</a> 
\t\t";
            }
            // line 9
            echo "\t\t";
            if ($this->getAttribute(($context["config"] ?? null), "image_identification_google", [])) {
                // line 10
                echo "\t\t\t<a href=\"https://www.google.com/searchbyimage?image_url=";
                echo twig_urlencode_filter($this->getAttribute(($context["config"] ?? null), "domain", []));
                echo twig_urlencode_filter($this->getAttribute(($context["config"] ?? null), "uri_img", []));
                echo twig_urlencode_filter($this->getAttribute(($context["file"] ?? null), "file", []));
                echo "\" target=\"_blank\">Google</a> 
\t\t";
            }
            // line 12
            echo "\t\t";
            if ($this->getAttribute(($context["config"] ?? null), "image_identification_iqdb", [])) {
                // line 13
                echo "\t\t\t<a href=\"http://iqdb.org/?url=";
                echo $this->getAttribute(($context["config"] ?? null), "domain", []);
                echo $this->getAttribute(($context["config"] ?? null), "uri_img", []);
                echo $this->getAttribute(($context["file"] ?? null), "file", []);
                echo "\" target=\"_blank\">iqdb</a>
\t\t";
            }
            // line 15
            echo "\t\t";
            if ($this->getAttribute(($context["config"] ?? null), "image_identification_yandex", [])) {
                // line 16
                echo "\t\t\t<a rel=\"noreferrer\" href=\"https://yandex.com/images/search?url=";
                echo $this->getAttribute(($context["config"] ?? null), "domain", []);
                echo $this->getAttribute(($context["config"] ?? null), "uri_img", []);
                echo $this->getAttribute(($context["file"] ?? null), "file", []);
                echo "&rpt=imagelike\" target=\"_blank\">Yandex</a>
\t\t";
            }
            // line 18
            echo "\t</span>
";
        }
    }

    public function getTemplateName()
    {
        return "post/image_identification.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 18,  81 => 16,  78 => 15,  70 => 13,  67 => 12,  59 => 10,  56 => 9,  48 => 7,  45 => 6,  37 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "post/image_identification.html", "/home/tcv3dev/bluearchive.tohno-chan.org/templates/post/image_identification.html");
    }
}
