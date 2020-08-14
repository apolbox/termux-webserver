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

/* table/index_form.twig */
class __TwigTemplate_c0674495148ca62cc6c256ff4241eeaac3e9a03f165790e228dbb31c60e8e439 extends \Twig\Template
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
        echo "<form action=\"tbl_indexes.php\"
    method=\"post\"
    name=\"index_frm\"
    id=\"index_frm\"
    class=\"ajax\">

    ";
        // line 7
        echo PhpMyAdmin\Url::getHiddenInputs(($context["form_params"] ?? null));
        echo "

    <fieldset id=\"index_edit_fields\">
        <div class=\"index_info\">
            <div>
                <div class=\"label\">
                    <strong>
                        <label for=\"input_index_name\">
                            ";
        // line 15
        echo _gettext("Index name:");
        // line 16
        echo "                            ";
        echo PhpMyAdmin\Util::showHint(_gettext("\"PRIMARY\" <b>must</b> be the name of and <b>only of</b> a primary key!"));
        echo "
                        </label>
                    </strong>
                </div>

                <input type=\"text\"
                    name=\"index[Key_name]\"
                    id=\"input_index_name\"
                    size=\"25\"
                    maxlength=\"64\"
                    value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["index"] ?? null), "getName", [], "method"), "html", null, true);
        echo "\"
                    onfocus=\"this.select()\" />
            </div>

            <div>
                <div class=\"label\">
                    <strong>
                        <label for=\"select_index_choice\">
                            ";
        // line 34
        echo _gettext("Index choice:");
        // line 35
        echo "                            ";
        echo PhpMyAdmin\Util::showMySQLDocu("ALTER_TABLE");
        echo "
                        </label>
                    </strong>
                </div>
                ";
        // line 39
        echo $this->getAttribute(($context["index"] ?? null), "generateIndexChoiceSelector", [0 => ($context["create_edit_table"] ?? null)], "method");
        echo "
            </div>

            ";
        // line 42
        echo PhpMyAdmin\Util::getDivForSliderEffect("indexoptions", _gettext("Advanced Options"));
        echo "

            <div>
                <div class=\"label\">
                    <strong>
                        <label for=\"input_key_block_size\">
                            ";
        // line 48
        echo _gettext("Key block size:");
        // line 49
        echo "                        </label>
                    </strong>
                </div>

                <input type=\"text\"
                    name=\"index[Key_block_size]\"
                    id=\"input_key_block_size\"
                    size=\"30\"
                    value=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute(($context["index"] ?? null), "getKeyBlockSize", [], "method"), "html", null, true);
        echo "\" />
            </div>

            <div>

                <div class=\"label\">
                    <strong>
                        <label for=\"select_index_type\">
                            ";
        // line 65
        echo _gettext("Index type:");
        // line 66
        echo "                            ";
        echo PhpMyAdmin\Util::showMySQLDocu("ALTER_TABLE");
        echo "
                        </label>
                    </strong>
                </div>
                ";
        // line 70
        echo $this->getAttribute(($context["index"] ?? null), "generateIndexTypeSelector", [], "method");
        echo "
            </div>

            <div>
                <div class=\"label\">
                    <strong>
                        <label for=\"input_parser\">
                            ";
        // line 77
        echo _gettext("Parser:");
        // line 78
        echo "                        </label>
                    </strong>
                </div>

                <input type=\"text\"
                    name=\"index[Parser]\"
                    id=\"input_parse\"
                    size=\"30\"
                    value=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute(($context["index"] ?? null), "getParser", [], "method"), "html", null, true);
        echo "\" />
            </div>

            <div>
                <div class=\"label\">
                    <strong>
                        <label for=\"input_index_comment\">
                            ";
        // line 93
        echo _gettext("Comment:");
        // line 94
        echo "                        </label>
                    </strong>
                </div>

                <input type=\"text\"
                    name=\"index[Index_comment]\"
                    id=\"input_index_comment\"
                    size=\"30\"
                    maxlength=\"1024\"
                    value=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute(($context["index"] ?? null), "getComment", [], "method"), "html", null, true);
        echo "\" />
            </div>
        </div>
        <!-- end of indexoptions div -->

        <div class=\"clearfloat\"></div>

        <table id=\"index_columns\">
            <thead>
                <tr>
                    <th></th>
                    <th>
                        ";
        // line 115
        echo _gettext("Column");
        // line 116
        echo "                    </th>
                    <th>
                        ";
        // line 118
        echo _gettext("Size");
        // line 119
        echo "                    </th>
                </tr>
            </thead>
            ";
        // line 122
        $context["spatial_types"] = [0 => "geometry", 1 => "point", 2 => "linestring", 3 => "polygon", 4 => "multipoint", 5 => "multilinestring", 6 => "multipolygon", 7 => "geomtrycollection"];
        // line 132
        echo "            <tbody>
                ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["index"] ?? null), "getColumns", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 134
            echo "                    <tr class=\"noclick\">
                        <td>
                            <span class=\"drag_icon\" title=\"";
            // line 136
            echo _gettext("Drag to reorder");
            echo "\"></span>
                        </td>
                        <td>
                            <select name=\"index[columns][names][]\">
                                <option value=\"\">
                                    -- ";
            // line 141
            echo _gettext("Ignore");
            echo " --
                                </option>
                                ";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
            foreach ($context['_seq'] as $context["field_name"] => $context["field_type"]) {
                // line 144
                echo "                                    ";
                if (((($this->getAttribute(($context["index"] ?? null), "getChoice", [], "method") != "FULLTEXT") || preg_match("/(char|text)/i",                 // line 145
$context["field_type"])) && (($this->getAttribute(                // line 146
($context["index"] ?? null), "getChoice", [], "method") != "SPATIAL") || twig_in_filter(                // line 147
$context["field_type"], ($context["spatial_types"] ?? null))))) {
                    // line 148
                    echo "
                                        <option value=\"";
                    // line 149
                    echo twig_escape_filter($this->env, $context["field_name"], "html", null, true);
                    echo "\"";
                    // line 150
                    if (($context["field_name"] == $this->getAttribute($context["column"], "getName", [], "method"))) {
                        // line 151
                        echo "                                                selected=\"selected\"";
                    }
                    // line 152
                    echo ">
                                            ";
                    // line 153
                    echo twig_escape_filter($this->env, $context["field_name"], "html", null, true);
                    echo " [";
                    echo twig_escape_filter($this->env, $context["field_type"], "html", null, true);
                    echo "]
                                        </option>
                                    ";
                }
                // line 156
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['field_type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            echo "                            </select>
                        </td>
                        <td>
                            <input type=\"text\"
                                size=\"5\"
                                onfocus=\"this.select()\"
                                name=\"index[columns][sub_parts][]\"
                                value=\"";
            // line 165
            ((($this->getAttribute(            // line 164
($context["index"] ?? null), "getChoice", [], "method") != "SPATIAL")) ? (print (twig_escape_filter($this->env, $this->getAttribute(            // line 165
$context["column"], "getSubPart", [], "method"), "html", null, true))) : (print ("")));
            echo "\" />
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        echo "                ";
        if ((($context["add_fields"] ?? null) > 0)) {
            // line 170
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["add_fields"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 171
                echo "                        <tr class=\"noclick\">
                            <td>
                                <span class=\"drag_icon\" title=\"";
                // line 173
                echo _gettext("Drag to reorder");
                echo "\"></span>
                            </td>
                            <td>
                                <select name=\"index[columns][names][]\">
                                    <option value=\"\">-- ";
                // line 177
                echo _gettext("Ignore");
                echo " --</option>
                                    ";
                // line 178
                $context["j"] = 0;
                // line 179
                echo "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
                foreach ($context['_seq'] as $context["field_name"] => $context["field_type"]) {
                    // line 180
                    echo "                                        ";
                    if (($context["create_edit_table"] ?? null)) {
                        // line 181
                        echo "                                            ";
                        $context["col_index"] = $this->getAttribute($context["field_type"], 1, [], "array");
                        // line 182
                        echo "                                            ";
                        $context["field_type"] = $this->getAttribute($context["field_type"], 0, [], "array");
                        // line 183
                        echo "                                        ";
                    }
                    // line 184
                    echo "                                        ";
                    $context["j"] = (($context["j"] ?? null) + 1);
                    // line 185
                    echo "                                        <option value=\"";
                    echo twig_escape_filter($this->env, (((isset($context["col_index"]) || array_key_exists("col_index", $context))) ? (                    // line 186
($context["col_index"] ?? null)) : ($context["field_name"])), "html", null, true);
                    echo "\"";
                    // line 187
                    echo (((($context["j"] ?? null) == $context["i"])) ? (" selected=\"selected\"") : (""));
                    echo ">
                                            ";
                    // line 188
                    echo twig_escape_filter($this->env, $context["field_name"], "html", null, true);
                    echo " [";
                    echo twig_escape_filter($this->env, $context["field_type"], "html", null, true);
                    echo "]
                                        </option>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['field_type'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 191
                echo "                                </select>
                            </td>
                            <td>
                                <input type=\"text\"
                                    size=\"5\"
                                    onfocus=\"this.select()\"
                                    name=\"index[columns][sub_parts][]\"
                                    value=\"\" />
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 202
            echo "                ";
        }
        // line 203
        echo "            </tbody>
        </table>
        <div class=\"add_more\">

            <div class=\"slider\"></div>
            <div class=\"add_fields hide\">
                <input type=\"submit\"
                    id=\"add_fields\"
                    value=\"";
        // line 211
        echo twig_escape_filter($this->env, sprintf(_gettext("Add %s column(s) to index"), 1), "html", null, true);
        echo "\" />
            </div>
        </div>
    </fieldset>
    <fieldset class=\"tblFooters\">
        <button type=\"submit\" id=\"preview_index_frm\">";
        // line 216
        echo _gettext("Preview SQL");
        echo "</button>
        <input type=\"submit\" id=\"save_index_frm\" value=\"";
        // line 217
        echo _gettext("Go");
        echo "\" />
    </fieldset>
</form>
";
    }

    public function getTemplateName()
    {
        return "table/index_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  398 => 217,  394 => 216,  386 => 211,  376 => 203,  373 => 202,  357 => 191,  346 => 188,  342 => 187,  339 => 186,  337 => 185,  334 => 184,  331 => 183,  328 => 182,  325 => 181,  322 => 180,  317 => 179,  315 => 178,  311 => 177,  304 => 173,  300 => 171,  295 => 170,  292 => 169,  282 => 165,  281 => 164,  280 => 165,  271 => 157,  265 => 156,  257 => 153,  254 => 152,  251 => 151,  249 => 150,  246 => 149,  243 => 148,  241 => 147,  240 => 146,  239 => 145,  237 => 144,  233 => 143,  228 => 141,  220 => 136,  216 => 134,  212 => 133,  209 => 132,  207 => 122,  202 => 119,  200 => 118,  196 => 116,  194 => 115,  179 => 103,  168 => 94,  166 => 93,  156 => 86,  146 => 78,  144 => 77,  134 => 70,  126 => 66,  124 => 65,  113 => 57,  103 => 49,  101 => 48,  92 => 42,  86 => 39,  78 => 35,  76 => 34,  65 => 26,  51 => 16,  49 => 15,  38 => 7,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "table/index_form.twig", "/data/data/com.termux/files/usr/opt/phpmyadmin/templates/table/index_form.twig");
    }
}
