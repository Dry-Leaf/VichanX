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

/* post_form.html */
class __TwigTemplate_d040bb3a1f30a574b6c78c2e2dc7404d791acc50279971d832dd2f7ff3e0f44d extends \Twig\Template
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
        echo "<form name=\"post\" onsubmit=\"return dopost(this);\" enctype=\"multipart/form-data\" action=\"";
        echo $this->getAttribute(($context["config"] ?? null), "post_url", []);
        echo "\" method=\"post\">
";
        // line 2
        echo $this->getAttribute(($context["antibot"] ?? null), "html", [], "method");
        echo "
";
        // line 3
        if (($context["id"] ?? null)) {
            echo "<input type=\"hidden\" name=\"thread\" value=\"";
            echo ($context["id"] ?? null);
            echo "\">";
        }
        // line 4
        echo $this->getAttribute(($context["antibot"] ?? null), "html", [], "method");
        echo "
<input type=\"hidden\" name=\"board\" value=\"";
        // line 5
        echo $this->getAttribute(($context["board"] ?? null), "uri", []);
        echo "\">
";
        // line 6
        echo $this->getAttribute(($context["antibot"] ?? null), "html", [], "method");
        echo "
";
        // line 7
        if (($context["current_page"] ?? null)) {
            // line 8
            echo "\t<input type=\"hidden\" name=\"page\" value=\"";
            echo ($context["current_page"] ?? null);
            echo "\">
";
        }
        // line 10
        if (($context["mod"] ?? null)) {
            echo "<input type=\"hidden\" name=\"mod\" value=\"1\">";
        }
        // line 11
        echo "\t
\t<hr>
\t<table>
\t\t";
        // line 14
        if (( !$this->getAttribute(($context["config"] ?? null), "field_disable_name", []) || (($context["mod"] ?? null) && twig_hasPermission_filter($this->getAttribute(($context["post"] ?? null), "mod", []), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "bypass_field_disable", []), $this->getAttribute(($context["board"] ?? null), "uri", []))))) {
            echo "<tr>
\t\t\t<th class=\"postblock\">
\t\t\t\t";
            // line 16
            echo gettext("Name");
            // line 17
            echo "\t\t\t\t";
            echo $this->getAttribute(($context["antibot"] ?? null), "html", [], "method");
            echo "
\t\t\t</th>
\t\t\t<td>
\t\t\t\t<input type=\"text\" name=\"name\" size=\"25\" maxlength=\"35\" autocomplete=\"off\"> ";
            // line 20
            if (($this->getAttribute(($context["config"] ?? null), "allow_no_country", []) && $this->getAttribute(($context["config"] ?? null), "country_flags", []))) {
                echo "<input id=\"no_country\" name=\"no_country\" type=\"checkbox\"> <label for=\"no_country\">";
                echo gettext("Don't show my flag");
                echo "</label>";
            }
            // line 21
            echo "\t\t\t\t";
            echo $this->getAttribute(($context["antibot"] ?? null), "html", [], "method");
            echo "
\t\t\t</td>
\t\t</tr>";
        }
        // line 24
        echo "\t\t";
        if (( !$this->getAttribute(($context["config"] ?? null), "field_disable_email", []) || (($context["mod"] ?? null) && twig_hasPermission_filter($this->getAttribute(($context["post"] ?? null), "mod", []), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "bypass_field_disable", []), $this->getAttribute(($context["board"] ?? null), "uri", []))))) {
            echo "<tr>
\t\t\t<th class=\"postblock\">
\t\t\t\t";
            // line 26
            echo gettext("Email");
            // line 27
            echo "\t\t\t\t";
            echo $this->getAttribute(($context["antibot"] ?? null), "html", [], "method");
            echo "
\t\t\t</th>
\t\t\t<td>
\t\t\t\t";
            // line 30
            if ($this->getAttribute(($context["config"] ?? null), "field_email_selectbox", [])) {
                // line 31
                echo "\t\t\t\t<select name=\"email\" id=\"email_selectbox\" autocomplete=\"off\">
\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t<option value=\"sage\">sage</option>
\t\t\t\t\t";
                // line 34
                if ( !$this->getAttribute(($context["config"] ?? null), "always_noko", [])) {
                    echo "<option value=\"noko\">noko</option>";
                }
                // line 35
                echo "\t\t\t\t</select>
\t\t\t\t";
            } else {
                // line 37
                echo "\t\t\t\t<input type=\"text\" name=\"email\" size=\"25\" maxlength=\"40\" autocomplete=\"off\">
\t\t\t\t";
            }
            // line 39
            echo "\t\t\t\t";
            echo $this->getAttribute(($context["antibot"] ?? null), "html", [], "method");
            echo "
\t\t\t\t";
            // line 40
            if ( !( !($this->getAttribute(($context["config"] ?? null), "field_disable_subject", []) || (($context["id"] ?? null) && $this->getAttribute(($context["config"] ?? null), "field_disable_reply_subject", []))) || (($context["mod"] ?? null) && twig_hasPermission_filter($this->getAttribute(($context["post"] ?? null), "mod", []), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "bypass_field_disable", []), $this->getAttribute(($context["board"] ?? null), "uri", []))))) {
                // line 41
                echo "\t\t\t\t<input accesskey=\"s\" style=\"margin-left:2px;\" type=\"submit\" name=\"post\" value=\"";
                if (($context["id"] ?? null)) {
                    echo $this->getAttribute(($context["config"] ?? null), "button_reply", []);
                } else {
                    echo $this->getAttribute(($context["config"] ?? null), "button_newtopic", []);
                }
                echo "\" />";
                if ($this->getAttribute(($context["config"] ?? null), "spoiler_images", [])) {
                    echo " <input id=\"spoiler\" name=\"spoiler\" type=\"checkbox\"> <label for=\"spoiler\">";
                    echo gettext("Spoiler Image");
                    echo "</label>\t\t\t\t";
                }
                // line 42
                echo "\t\t\t\t";
            }
            // line 43
            echo "\t\t\t\t";
            echo $this->getAttribute(($context["antibot"] ?? null), "html", [], "method");
            echo "
\t\t<input name=\"noko\" style=\"margin-left:2px;\" value=\"Noko\" class=\"btn\" onclick=\"this.form.email.value='noko';\" type=\"button\">
\t\t<input name=\"sage\" style=\"margin-left:2px;\" value=\"Sage\" class=\"btn\" onclick=\"this.form.email.value='sage';\" type=\"button\">
\t\t\t</td>
\t\t</tr>";
        }
        // line 48
        echo "\t\t";
        if (( !($this->getAttribute(($context["config"] ?? null), "field_disable_subject", []) || (($context["id"] ?? null) && $this->getAttribute(($context["config"] ?? null), "field_disable_reply_subject", []))) || (($context["mod"] ?? null) && twig_hasPermission_filter($this->getAttribute(($context["post"] ?? null), "mod", []), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "bypass_field_disable", []), $this->getAttribute(($context["board"] ?? null), "uri", []))))) {
            echo "<tr>
\t\t\t<th class=\"postblock\">
\t\t\t\t";
            // line 50
            echo gettext("Subject");
            // line 51
            echo "\t\t\t\t";
            echo $this->getAttribute(($context["antibot"] ?? null), "html", [], "method");
            echo "
\t\t\t</th>
\t\t\t<td>
\t\t\t\t<input style=\"float:left;\" type=\"text\" name=\"subject\" size=\"25\" maxlength=\"100\" autocomplete=\"off\">
\t\t\t\t<input accesskey=\"s\" style=\"margin-left:2px;\" type=\"submit\" name=\"post\" value=\"";
            // line 55
            if (($context["id"] ?? null)) {
                echo $this->getAttribute(($context["config"] ?? null), "button_reply", []);
            } else {
                echo $this->getAttribute(($context["config"] ?? null), "button_newtopic", []);
            }
            echo "\" />
\t\t\t</td>
\t\t</tr>
\t\t";
        }
        // line 59
        echo "\t\t<tr>
\t\t\t<th class=\"postblock\">
\t\t\t\t";
        // line 61
        echo gettext("Comment");
        // line 62
        echo "\t\t\t\t";
        echo $this->getAttribute(($context["antibot"] ?? null), "html", [], "method");
        echo "
\t\t\t</th>
\t\t\t<td>
\t\t\t\t<textarea name=\"body\" id=\"body\" rows=\"5\" cols=\"35\"></textarea>
\t\t\t\t";
        // line 66
        echo $this->getAttribute(($context["antibot"] ?? null), "html", [], "method");
        echo "
\t\t\t\t";
        // line 67
        if ( !( !($this->getAttribute(($context["config"] ?? null), "field_disable_subject", []) || (($context["id"] ?? null) && $this->getAttribute(($context["config"] ?? null), "field_disable_reply_subject", []))) || (($context["mod"] ?? null) && twig_hasPermission_filter($this->getAttribute(($context["post"] ?? null), "mod", []), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "bypass_field_disable", []), $this->getAttribute(($context["board"] ?? null), "uri", []))))) {
            // line 68
            echo "\t\t\t\t";
            if ( !( !$this->getAttribute(($context["config"] ?? null), "field_disable_email", []) || (($context["mod"] ?? null) && twig_hasPermission_filter($this->getAttribute(($context["post"] ?? null), "mod", []), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "bypass_field_disable", []), $this->getAttribute(($context["board"] ?? null), "uri", []))))) {
                // line 69
                echo "\t\t\t\t<input accesskey=\"s\" style=\"margin-left:2px;\" type=\"submit\" name=\"post\" value=\"";
                if (($context["id"] ?? null)) {
                    echo $this->getAttribute(($context["config"] ?? null), "button_reply", []);
                } else {
                    echo $this->getAttribute(($context["config"] ?? null), "button_newtopic", []);
                }
                echo "\" />";
                if ($this->getAttribute(($context["config"] ?? null), "spoiler_images", [])) {
                    echo " <input id=\"spoiler\" name=\"spoiler\" type=\"checkbox\"> <label for=\"spoiler\">";
                    echo gettext("Spoiler Image");
                    echo "</label>";
                }
                // line 70
                echo "\t\t\t\t";
            }
            // line 71
            echo "\t\t\t\t";
        }
        // line 72
        echo "\t\t\t<tr><th class=\"postblock\">
\t\t\t\tBB Code
\t\t\t</th>

<td>\t
<input name=\"b\" style=\"margin-left:2px;\" value=\"Bold\" class=\"btn\" onclick=\"this.form.body.value=this.form.body.value.concat('[b][/b]');\" type=\"button\">
<input name=\"i\" style=\"margin-left:2px;\" value=\"Italic\" class=\"btn\" onclick=\"this.form.body.value=this.form.body.value.concat('[i][/i]');\" type=\"button\">
<input name=\"u\" style=\"margin-left:2px;\" value=\"Underline\" class=\"btn\" onclick=\"this.form.body.value=this.form.body.value.concat('[u][/u]');\" type=\"button\">
<input name=\"s\" style=\"margin-left:2px;\" value=\"Strikeout\" class=\"btn\" onclick=\"this.form.body.value=this.form.body.value.concat('[s][/s]');\" type=\"button\">
<input name=\"sp\" style=\"margin-left:2px;\" value=\"Spoiler\" class=\"btn\" onclick=\"this.form.body.value=this.form.body.value.concat('[spoiler][/spoiler]');\" type=\"button\">
<input name=\"co\" style=\"margin-left:2px;\" value=\"Code\" class=\"btn\" onclick=\"this.form.body.value=this.form.body.value.concat('[code][/code]');\" type=\"button\">
</td></tr></td>
\t\t</tr>
\t\t";
        // line 85
        if ($this->getAttribute(($context["config"] ?? null), "recaptcha", [])) {
            // line 86
            echo "
\t\t<tr>
\t\t\t<th>
\t\t\t\t";
            // line 89
            echo gettext("Verification");
            // line 90
            echo "\t\t\t\t";
            echo $this->getAttribute(($context["antibot"] ?? null), "html", [], "method");
            echo "
\t\t\t</th>
\t\t\t<td>
\t\t\t\t<div class=\"g-recaptcha\" data-sitekey=\"";
            // line 93
            echo $this->getAttribute(($context["config"] ?? null), "recaptcha_public", []);
            echo "\"></div>
\t\t\t\t";
            // line 94
            echo $this->getAttribute(($context["antibot"] ?? null), "html", [], "method");
            echo "
\t\t\t</td>
\t\t</tr>
\t\t";
        }
        // line 98
        echo "\t\t";
        if ($this->getAttribute($this->getAttribute(($context["config"] ?? null), "captcha", []), "enabled", [])) {
            // line 99
            echo "\t\t<tr class='captcha'>
\t\t\t<th class=\"postblock\">
\t\t\t\t";
            // line 101
            echo gettext("Verification");
            // line 102
            echo "\t\t\t</th>
\t\t\t<td>
\t\t\t\t<script>load_captcha(\"";
            // line 104
            echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "captcha", []), "provider_get", []);
            echo "\", \"";
            echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "captcha", []), "extra", []);
            echo "\");</script>
\t\t\t\t<noscript>
\t\t\t\t\t<input class='captcha_text' type='text' name='captcha_text' size='32' maxlength='6' autocomplete='off'>
\t\t\t\t\t<div class=\"captcha_html\">
\t\t\t\t\t\t<img src=\"/";
            // line 108
            echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "captcha", []), "provider_get", []);
            echo "?mode=get&raw=1\">
\t\t\t\t\t</div>
\t\t\t\t</noscript>
\t\t\t</td>
\t\t</tr>
\t\t\t";
        } elseif ($this->getAttribute(        // line 113
($context["config"] ?? null), "new_thread_capt", [])) {
            // line 114
            echo " \t\t\t";
            if ( !($context["id"] ?? null)) {
                echo " 
 \t\t\t<tr class='captcha'>
                        <th>
                                ";
                // line 117
                echo gettext("Verification");
                // line 118
                echo "                        </th>
                        <td>
                                <script>load_captcha(\"";
                // line 120
                echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "captcha", []), "provider_get", []);
                echo "\", \"";
                echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "captcha", []), "extra", []);
                echo "\");</script>
\t\t\t\t<noscript>
\t\t\t\t\t<input class='captcha_text' type='text' name='captcha_text' size='32' maxlength='6' autocomplete='off'>
\t\t\t\t\t<div class=\"captcha_html\">
\t\t\t\t\t\t<img src=\"/";
                // line 124
                echo $this->getAttribute($this->getAttribute(($context["config"] ?? null), "captcha", []), "provider_get", []);
                echo "?mode=get&raw=1\">
\t\t\t\t\t</div>
\t\t\t\t</noscript>
                        </td>
                \t</tr>
\t\t\t";
            }
            // line 130
            echo "\t\t";
        }
        // line 131
        echo "\t\t";
        if ($this->getAttribute(($context["config"] ?? null), "user_flag", [])) {
            // line 132
            echo "\t\t\t<tr>
\t\t\t\t<th>";
            // line 133
            echo gettext("Flag");
            echo "</th>
\t\t\t\t<td>
\t\t\t\t\t<select name=\"user_flag\" id=\"user_flag\">
\t\t\t\t\t\t<option value=\"\">";
            // line 136
            echo gettext("None");
            echo "</option>
\t\t\t\t\t\t";
            // line 137
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["config"] ?? null), "user_flags", []));
            foreach ($context['_seq'] as $context["flag"] => $context["text"]) {
                // line 138
                echo "\t\t\t\t\t\t\t<option value=\"";
                echo $context["flag"];
                echo "\">";
                echo $context["text"];
                echo "</option>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['flag'], $context['text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 140
            echo "\t\t\t\t\t</select>
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
        }
        // line 144
        echo "\t\t";
        if (($this->getAttribute(($context["config"] ?? null), "allowed_tags", []) &&  !($context["id"] ?? null))) {
            // line 145
            echo "\t\t\t<tr>
\t\t\t\t<th>";
            // line 146
            echo gettext("Tag");
            echo "</th>
\t\t\t\t<td>
\t\t\t\t\t<select name=\"tag\">
\t\t\t\t\t\t";
            // line 149
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["config"] ?? null), "allowed_tags", []));
            foreach ($context['_seq'] as $context["id"] => $context["tag"]) {
                // line 150
                echo "\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $context["id"]);
                echo "\">";
                echo twig_escape_filter($this->env, $context["tag"]);
                echo "</option>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 152
            echo "\t\t\t\t\t</select>
\t\t\t\t</td>
\t\t\t</tr>
\t\t";
        }
        // line 156
        echo "\t\t<tr id=\"upload\">
\t\t\t<th class=\"postblock\">
\t\t\t\t";
        // line 158
        echo gettext("File");
        // line 159
        echo "\t\t\t</th>
\t\t\t<td>
\t\t\t\t<input type=\"file\" name=\"file\" id=\"upload_file\">

\t\t\t\t<script type=\"text/javascript\">if (typeof init_file_selector !== 'undefined') init_file_selector(";
        // line 163
        echo $this->getAttribute(($context["config"] ?? null), "max_images", []);
        echo ");</script>

\t\t\t\t";
        // line 165
        if ($this->getAttribute(($context["config"] ?? null), "allow_upload_by_url", [])) {
            // line 166
            echo "\t\t\t\t\t<div style=\"float:none;text-align:left\" id=\"upload_url\">
\t\t\t\t\t\t<label for=\"file_url\">";
            // line 167
            echo gettext("Or URL");
            echo "</label>: 
\t\t\t\t\t\t<input style=\"display:inline\" type=\"text\" id=\"file_url\" name=\"file_url\" size=\"35\">
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 171
        echo "\t\t\t\t";
        if ($this->getAttribute(($context["config"] ?? null), "spoiler_images", [])) {
            echo " <input id=\"spoiler\" name=\"spoiler\" type=\"checkbox\"> <label for=\"spoiler\">";
            echo gettext("Spoiler");
            echo "</label>";
        }
        // line 172
        echo "\t\t\t\t";
        echo $this->getAttribute(($context["antibot"] ?? null), "html", [], "method");
        echo "
\t\t\t</td>
\t\t</tr>
\t\t";
        // line 175
        if ($this->getAttribute(($context["config"] ?? null), "enable_embedding", [])) {
            // line 176
            echo "\t\t<tr id=\"upload_embed\">
\t\t\t<th class=\"postblock\">
\t\t\t\t";
            // line 178
            echo gettext("Embed");
            // line 179
            echo "\t\t\t\t";
            echo $this->getAttribute(($context["antibot"] ?? null), "html", [], "method");
            echo "
\t\t\t</th>
\t\t\t<td>
\t\t\t\t<input type=\"text\" name=\"embed\" value=\"\" size=\"30\" maxlength=\"120\" autocomplete=\"off\">
\t\t\t</td>
\t\t</tr>
\t\t";
        }
        // line 186
        echo "\t\t";
        if ((($context["mod"] ?? null) && ((( !($context["id"] ?? null) && twig_hasPermission_filter($this->getAttribute(($context["post"] ?? null), "mod", []), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "sticky", []), $this->getAttribute(($context["board"] ?? null), "uri", []))) || ( !($context["id"] ?? null) && twig_hasPermission_filter($this->getAttribute(($context["post"] ?? null), "mod", []), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "lock", []), $this->getAttribute(($context["board"] ?? null), "uri", [])))) || twig_hasPermission_filter($this->getAttribute(($context["post"] ?? null), "mod", []), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "rawhtml", []), $this->getAttribute(($context["board"] ?? null), "uri", []))))) {
            // line 187
            echo "\t\t<tr>
\t\t\t<th>
\t\t\t\t";
            // line 189
            echo gettext("Flags");
            // line 190
            echo "\t\t\t</th>
\t\t\t<td>
\t\t\t\t";
            // line 192
            if (( !($context["id"] ?? null) && twig_hasPermission_filter($this->getAttribute(($context["post"] ?? null), "mod", []), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "sticky", []), $this->getAttribute(($context["board"] ?? null), "uri", [])))) {
                echo "<div class=\"center\">
\t\t\t\t\t<label for=\"sticky\">";
                // line 193
                echo gettext("Sticky");
                echo "</label>
\t\t\t\t\t<input title=\"";
                // line 194
                echo gettext("Sticky");
                echo "\" type=\"checkbox\" name=\"sticky\" id=\"sticky\"><br>
\t\t\t\t</div>";
            }
            // line 196
            echo "\t\t\t\t";
            if (( !($context["id"] ?? null) && twig_hasPermission_filter($this->getAttribute(($context["post"] ?? null), "mod", []), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "lock", []), $this->getAttribute(($context["board"] ?? null), "uri", [])))) {
                echo "<div class=\"center\">
\t\t\t\t\t<label for=\"lock\">";
                // line 197
                echo gettext("Lock");
                echo "</label><br>
\t\t\t\t\t<input title=\"";
                // line 198
                echo gettext("Lock");
                echo "\" type=\"checkbox\" name=\"lock\" id=\"lock\">
\t\t\t\t</div>";
            }
            // line 200
            echo "\t\t\t\t";
            if (twig_hasPermission_filter($this->getAttribute(($context["post"] ?? null), "mod", []), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "rawhtml", []), $this->getAttribute(($context["board"] ?? null), "uri", []))) {
                echo "<div class=\"center\">
\t\t\t\t\t<label for=\"raw\">";
                // line 201
                echo gettext("Raw HTML");
                echo "</label><br>
\t\t\t\t\t<input title=\"";
                // line 202
                echo gettext("Raw HTML");
                echo "\" type=\"checkbox\" name=\"raw\" id=\"raw\">
\t\t\t\t</div>";
            }
            // line 204
            echo "\t\t\t</td>
\t\t</tr>
\t\t";
        }
        // line 207
        echo "\t\t";
        if (( !$this->getAttribute(($context["config"] ?? null), "field_disable_password", []) || (($context["mod"] ?? null) && twig_hasPermission_filter($this->getAttribute(($context["post"] ?? null), "mod", []), $this->getAttribute($this->getAttribute(($context["config"] ?? null), "mod", []), "bypass_field_disable", []), $this->getAttribute(($context["board"] ?? null), "uri", []))))) {
            echo "<tr>
\t\t\t<th class=\"postblock\">
\t\t\t\t";
            // line 209
            echo gettext("Password");
            // line 210
            echo "\t\t\t\t";
            echo $this->getAttribute(($context["antibot"] ?? null), "html", [], "method");
            echo "
\t\t\t</th>
\t\t\t<td>
\t\t\t\t<input type=\"text\" name=\"password\" value=\"\" size=\"12\" maxlength=\"18\" autocomplete=\"off\"> 
\t\t\t\t<span class=\"unimportant\">";
            // line 214
            echo gettext("(For post and file deletion.)");
            echo "</span>
\t\t\t\t";
            // line 215
            echo $this->getAttribute(($context["antibot"] ?? null), "html", [], "method");
            echo "
\t\t\t\t
\t\t\t<br></td>    
\t\t\t
\t\t\t
\t\t</tr>";
        }
        // line 221
        echo "\t
<tr>
<td class=\"boardinfo\" colspan=\"2\">  
<!p class=\"boardinfo\">
<ul style=\"margin-left: 0; margin-top: 0; margin-bottom: 0; padding-left: 0;\">
<li>Maximum file size allowed is 2500 KB.</li>
<li>Images greater than 260x260 pixels will be thumbnailed.</li>
";
        // line 228
        if ($this->getAttribute(($context["config"] ?? null), "catalog_link", [])) {
            // line 229
            echo "<li><a href=\"";
            echo $this->getAttribute(($context["config"] ?? null), "root", []);
            if (($context["mod"] ?? null)) {
                echo $this->getAttribute(($context["config"] ?? null), "file_mod", []);
                echo "?/";
            }
            echo $this->getAttribute(($context["board"] ?? null), "dir", []);
            echo $this->getAttribute(($context["config"] ?? null), "catalog_link", []);
            echo "\">";
            echo gettext("board catalog");
            echo "</a></li>
";
        }
        // line 231
        echo "</ul>
<!/p>
</td>
</tr>
\t

\t
\t
\t</table> 
";
        // line 240
        echo $this->getAttribute(($context["antibot"] ?? null), "html", [0 => true], "method");
        echo "
<input type=\"hidden\" name=\"hash\" value=\"";
        // line 241
        echo $this->getAttribute(($context["antibot"] ?? null), "hash", [], "method");
        echo "\">


\t


</form>

<script type=\"text/javascript\">";
        // line 251
        echo "
\trememberStuff();
";
        echo "</script>
";
    }

    public function getTemplateName()
    {
        return "post_form.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  615 => 251,  604 => 241,  600 => 240,  589 => 231,  575 => 229,  573 => 228,  564 => 221,  555 => 215,  551 => 214,  543 => 210,  541 => 209,  535 => 207,  530 => 204,  525 => 202,  521 => 201,  516 => 200,  511 => 198,  507 => 197,  502 => 196,  497 => 194,  493 => 193,  489 => 192,  485 => 190,  483 => 189,  479 => 187,  476 => 186,  465 => 179,  463 => 178,  459 => 176,  457 => 175,  450 => 172,  443 => 171,  436 => 167,  433 => 166,  431 => 165,  426 => 163,  420 => 159,  418 => 158,  414 => 156,  408 => 152,  397 => 150,  393 => 149,  387 => 146,  384 => 145,  381 => 144,  375 => 140,  364 => 138,  360 => 137,  356 => 136,  350 => 133,  347 => 132,  344 => 131,  341 => 130,  332 => 124,  323 => 120,  319 => 118,  317 => 117,  310 => 114,  308 => 113,  300 => 108,  291 => 104,  287 => 102,  285 => 101,  281 => 99,  278 => 98,  271 => 94,  267 => 93,  260 => 90,  258 => 89,  253 => 86,  251 => 85,  236 => 72,  233 => 71,  230 => 70,  217 => 69,  214 => 68,  212 => 67,  208 => 66,  200 => 62,  198 => 61,  194 => 59,  183 => 55,  175 => 51,  173 => 50,  167 => 48,  158 => 43,  155 => 42,  142 => 41,  140 => 40,  135 => 39,  131 => 37,  127 => 35,  123 => 34,  118 => 31,  116 => 30,  109 => 27,  107 => 26,  101 => 24,  94 => 21,  88 => 20,  81 => 17,  79 => 16,  74 => 14,  69 => 11,  65 => 10,  59 => 8,  57 => 7,  53 => 6,  49 => 5,  45 => 4,  39 => 3,  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "post_form.html", "/home/tcv3dev/bluearchive.tohno-chan.org/templates/post_form.html");
    }
}
