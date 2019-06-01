<?php

/* display/import/import.twig */
class __TwigTemplate_f8e3255575f50a7b1cfaa2d6eeec5239aa8471571a0cc3b44451e0437f68b67d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<iframe id=\"import_upload_iframe\" name=\"import_upload_iframe\" width=\"1\" height=\"1\" class=\"hide\"></iframe>
<div id=\"import_form_status\" class=\"hide\"></div>
<div id=\"importmain\">
    <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["pma_theme_image"] ?? null), "html", null, true);
        echo "ajax_clock_small.gif\" width=\"16\" height=\"16\" alt=\"ajax clock\" class=\"hide\" />

    <script type=\"text/javascript\">
        //<![CDATA[
        ";
        // line 8
        $this->loadTemplate("display/import/javascript.twig", "display/import/import.twig", 8)->display(array("upload_id" =>         // line 9
($context["upload_id"] ?? null), "handler" =>         // line 10
($context["handler"] ?? null), "pma_theme_image" =>         // line 11
($context["pma_theme_image"] ?? null)));
        // line 13
        echo "        //]]>
    </script>

    <form id=\"import_file_form\"
        action=\"import.php\"
        method=\"post\"
        enctype=\"multipart/form-data\"
        name=\"import\"
        class=\"ajax\"";
        // line 22
        if ((($context["handler"] ?? null) != "PhpMyAdmin\\Plugins\\Import\\Upload\\UploadNoplugin")) {
            // line 23
            echo "            target=\"import_upload_iframe\"";
        }
        // line 24
        echo ">

        <input type=\"hidden\" name=\"";
        // line 26
        echo twig_escape_filter($this->env, ($context["id_key"] ?? null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ($context["upload_id"] ?? null), "html", null, true);
        echo "\" />
        ";
        // line 27
        if ((($context["import_type"] ?? null) == "server")) {
            // line 28
            echo "            ";
            echo PhpMyAdmin\Url::getHiddenInputs("", "", 1);
            echo "
        ";
        } elseif ((        // line 29
($context["import_type"] ?? null) == "database")) {
            // line 30
            echo "            ";
            echo PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), "", 1);
            echo "
        ";
        } else {
            // line 32
            echo "            ";
            echo PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null), 1);
            echo "
        ";
        }
        // line 34
        echo "        <input type=\"hidden\" name=\"import_type\" value=\"";
        echo twig_escape_filter($this->env, ($context["import_type"] ?? null), "html", null, true);
        echo "\" />

        <div class=\"exportoptions\" id=\"header\">
            <h2>
                ";
        // line 38
        echo PhpMyAdmin\Util::getImage("b_import", _gettext("Import"));
        echo "
                ";
        // line 39
        if ((($context["import_type"] ?? null) == "server")) {
            // line 40
            echo "                    ";
            echo _gettext("Importing into the current server");
            // line 41
            echo "                ";
        } elseif ((($context["import_type"] ?? null) == "database")) {
            // line 42
            echo "                    ";
            echo twig_escape_filter($this->env, sprintf(_gettext("Importing into the database \"%s\""), ($context["db"] ?? null)), "html", null, true);
            echo "
                ";
        } else {
            // line 44
            echo "                    ";
            echo twig_escape_filter($this->env, sprintf(_gettext("Importing into the table \"%s\""), ($context["table"] ?? null)), "html", null, true);
            echo "
                ";
        }
        // line 46
        echo "            </h2>
        </div>

        <div class=\"importoptions\">
            <h3>";
        // line 50
        echo _gettext("File to import:");
        echo "</h3>

            ";
        // line 53
        echo "            ";
        if ( !twig_test_empty(($context["compressions"] ?? null))) {
            // line 54
            echo "                <div class=\"formelementrow\" id=\"compression_info\">
                    <p>
                        ";
            // line 56
            echo twig_escape_filter($this->env, sprintf(_gettext("File may be compressed (%s) or uncompressed."), twig_join_filter(($context["compressions"] ?? null), ", ")), "html", null, true);
            echo "
                        <br>
                        ";
            // line 58
            echo _gettext("A compressed file's name must end in <strong>.[format].[compression]</strong>. Example: <strong>.sql.zip</strong>");
            // line 59
            echo "                    </p>
                </div>
            ";
        }
        // line 62
        echo "
            <div class=\"formelementrow\" id=\"upload_form\">
                ";
        // line 64
        if ((($context["is_upload"] ?? null) &&  !twig_test_empty(($context["upload_dir"] ?? null)))) {
            // line 65
            echo "                    <ul>
                        <li>
                            <input type=\"radio\" name=\"file_location\" id=\"radio_import_file\" required=\"required\" />
                            ";
            // line 68
            echo PhpMyAdmin\Util::getBrowseUploadFileBlock(($context["max_upload_size"] ?? null));
            echo "
                            ";
            // line 69
            echo _gettext("You may also drag and drop a file on any page.");
            // line 70
            echo "                        </li>
                        <li>
                            <input type=\"radio\" name=\"file_location\" id=\"radio_local_import_file\"";
            // line 73
            if (( !twig_test_empty(($context["timeout_passed_global"] ?? null)) &&  !twig_test_empty(($context["local_import_file"] ?? null)))) {
                // line 74
                echo "                                    checked=\"checked\"";
            }
            // line 75
            echo " />
                            ";
            // line 76
            echo PhpMyAdmin\Util::getSelectUploadFileBlock(            // line 77
($context["import_list"] ?? null),             // line 78
($context["upload_dir"] ?? null));
            // line 79
            echo "
                        </li>
                    </ul>
                ";
        } elseif (        // line 82
($context["is_upload"] ?? null)) {
            // line 83
            echo "                    ";
            echo PhpMyAdmin\Util::getBrowseUploadFileBlock(($context["max_upload_size"] ?? null));
            echo "
                    <p>";
            // line 84
            echo _gettext("You may also drag and drop a file on any page.");
            echo "</p>
                ";
        } elseif ( !        // line 85
($context["is_upload"] ?? null)) {
            // line 86
            echo "                    ";
            echo call_user_func_array($this->env->getFunction('Message_notice')->getCallable(), array(_gettext("File uploads are not allowed on this server.")));
            echo "
                ";
        } elseif ( !twig_test_empty(        // line 87
($context["upload_dir"] ?? null))) {
            // line 88
            echo "                    ";
            echo PhpMyAdmin\Util::getSelectUploadFileBlock(            // line 89
($context["import_list"] ?? null),             // line 90
($context["upload_dir"] ?? null));
            // line 91
            echo "
                ";
        }
        // line 93
        echo "            </div>

            <div class=\"formelementrow\" id=\"charaset_of_file\">
                ";
        // line 97
        echo "                <label for=\"charset_of_file\">";
        echo _gettext("Character set of the file:");
        echo "</label>
                ";
        // line 98
        if (($context["is_encoding_supported"] ?? null)) {
            // line 99
            echo "                    <select id=\"charset_of_file\" name=\"charset_of_file\" size=\"1\">
                        ";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["encodings"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["charset"]) {
                // line 101
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, $context["charset"], "html", null, true);
                echo "\"
                                ";
                // line 102
                if (((twig_test_empty(($context["import_charset"] ?? null)) && ($context["charset"] == "utf-8")) || (                // line 103
$context["charset"] == ($context["import_charset"] ?? null)))) {
                    // line 104
                    echo "                                    selected=\"selected\"
                                ";
                }
                // line 105
                echo ">
                                ";
                // line 106
                echo twig_escape_filter($this->env, $context["charset"], "html", null, true);
                echo "
                            </option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['charset'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "                    </select>
                ";
        } else {
            // line 111
            echo "                    ";
            echo PhpMyAdmin\Charsets::getCharsetDropdownBox(            // line 112
($context["dbi"] ?? null),             // line 113
($context["disable_is"] ?? null), "charset_of_file", "charset_of_file", "utf8", false);
            // line 118
            echo "
                ";
        }
        // line 120
        echo "            </div>
        </div>

        <div class=\"importoptions\">
            <h3>";
        // line 124
        echo _gettext("Partial import:");
        echo "</h3>

            ";
        // line 126
        if (((isset($context["timeout_passed"]) || array_key_exists("timeout_passed", $context)) && ($context["timeout_passed"] ?? null))) {
            // line 127
            echo "                <div class=\"formelementrow\">
                    <input type=\"hidden\" name=\"skip\" value=\"";
            // line 128
            echo twig_escape_filter($this->env, ($context["offset"] ?? null), "html", null, true);
            echo "\" />
                    ";
            // line 129
            echo twig_escape_filter($this->env, sprintf(_gettext("Previous import timed out, after resubmitting will continue from position %d."), ($context["offset"] ?? null)), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 132
        echo "
            <div class=\"formelementrow\">
                <input type=\"checkbox\" name=\"allow_interrupt\" value=\"yes\" id=\"checkbox_allow_interrupt\"
                    ";
        // line 135
        echo PhpMyAdmin\Plugins::checkboxCheck("Import", "allow_interrupt");
        echo " />
                <label for=\"checkbox_allow_interrupt\">
                    ";
        // line 137
        echo _gettext("Allow the interruption of an import in case the script detects it is close to the PHP timeout limit. <em>(This might be a good way to import large files, however it can break transactions.)</em>");
        // line 138
        echo "                </label>
            </div>

            ";
        // line 141
        if ( !((isset($context["timeout_passed"]) || array_key_exists("timeout_passed", $context)) && ($context["timeout_passed"] ?? null))) {
            // line 142
            echo "                <div class=\"formelementrow\">
                    <label for=\"text_skip_queries\">
                        ";
            // line 144
            echo _gettext("Skip this number of queries (for SQL) starting from the first one:");
            // line 145
            echo "                    </label>
                    <input type=\"number\" name=\"skip_queries\" value=\"";
            // line 147
            echo PhpMyAdmin\Plugins::getDefault("Import", "skip_queries");
            // line 148
            echo "\" id=\"text_skip_queries\" min=\"0\" />
                </div>
            ";
        } else {
            // line 151
            echo "                ";
            // line 154
            echo "                <input type=\"hidden\" name=\"skip_queries\" value=\"";
            // line 155
            echo PhpMyAdmin\Plugins::getDefault("Import", "skip_queries");
            // line 156
            echo "\" id=\"text_skip_queries\" />
            ";
        }
        // line 158
        echo "        </div>

        <div class=\"importoptions\">
            <h3>";
        // line 161
        echo _gettext("Other options:");
        echo "</h3>
            <div class=\"formelementrow\">
                ";
        // line 163
        echo PhpMyAdmin\Util::getFKCheckbox();
        echo "
            </div>
        </div>

        <div class=\"importoptions\">
            <h3>";
        // line 168
        echo _gettext("Format:");
        echo "</h3>
            ";
        // line 169
        echo PhpMyAdmin\Plugins::getChoice("Import", "format", ($context["import_list"] ?? null));
        echo "
            <div id=\"import_notification\"></div>
        </div>

        <div class=\"importoptions\" id=\"format_specific_opts\">
            <h3>";
        // line 174
        echo _gettext("Format-specific options:");
        echo "</h3>
            <p class=\"no_js_msg\" id=\"scroll_to_options_msg\">
                ";
        // line 176
        echo _gettext("Scroll down to fill in the options for the selected format and ignore the options for other formats.");
        // line 177
        echo "            </p>
            ";
        // line 178
        echo PhpMyAdmin\Plugins::getOptions("Import", ($context["import_list"] ?? null));
        echo "
        </div>
        <div class=\"clearfloat\"></div>

        ";
        // line 183
        echo "        ";
        if (($context["can_convert_kanji"] ?? null)) {
            // line 184
            echo "            <div class=\"importoptions\" id=\"kanji_encoding\">
                <h3>";
            // line 185
            echo _gettext("Encoding Conversion:");
            echo "</h3>
                ";
            // line 186
            $this->loadTemplate("encoding/kanji_encoding_form.twig", "display/import/import.twig", 186)->display($context);
            // line 187
            echo "            </div>
        ";
        }
        // line 189
        echo "
        <div class=\"importoptions\" id=\"submit\">
            <input type=\"submit\" value=\"";
        // line 191
        echo _gettext("Go");
        echo "\" id=\"buttonGo\" />
        </div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "display/import/import.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  405 => 191,  401 => 189,  397 => 187,  395 => 186,  391 => 185,  388 => 184,  385 => 183,  378 => 178,  375 => 177,  373 => 176,  368 => 174,  360 => 169,  356 => 168,  348 => 163,  343 => 161,  338 => 158,  334 => 156,  332 => 155,  330 => 154,  328 => 151,  323 => 148,  321 => 147,  318 => 145,  316 => 144,  312 => 142,  310 => 141,  305 => 138,  303 => 137,  298 => 135,  293 => 132,  287 => 129,  283 => 128,  280 => 127,  278 => 126,  273 => 124,  267 => 120,  263 => 118,  261 => 113,  260 => 112,  258 => 111,  254 => 109,  245 => 106,  242 => 105,  238 => 104,  236 => 103,  235 => 102,  230 => 101,  226 => 100,  223 => 99,  221 => 98,  216 => 97,  211 => 93,  207 => 91,  205 => 90,  204 => 89,  202 => 88,  200 => 87,  195 => 86,  193 => 85,  189 => 84,  184 => 83,  182 => 82,  177 => 79,  175 => 78,  174 => 77,  173 => 76,  170 => 75,  167 => 74,  165 => 73,  161 => 70,  159 => 69,  155 => 68,  150 => 65,  148 => 64,  144 => 62,  139 => 59,  137 => 58,  132 => 56,  128 => 54,  125 => 53,  120 => 50,  114 => 46,  108 => 44,  102 => 42,  99 => 41,  96 => 40,  94 => 39,  90 => 38,  82 => 34,  76 => 32,  70 => 30,  68 => 29,  63 => 28,  61 => 27,  55 => 26,  51 => 24,  48 => 23,  46 => 22,  36 => 13,  34 => 11,  33 => 10,  32 => 9,  31 => 8,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "display/import/import.twig", "/storage/emulated/0/www/phpmyadmin/templates/display/import/import.twig");
    }
}
