<?php

/* table/index_form.twig */
class __TwigTemplate_496e0cefac670941eac93694c5ed5c5b8a0ce035907cab65123f5427022b7c82 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["index"] ?? null), "getName", array(), "method"), "html", null, true);
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
        echo $this->getAttribute(($context["index"] ?? null), "generateIndexChoiceSelector", array(0 => ($context["create_edit_table"] ?? null)), "method");
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["index"] ?? null), "getKeyBlockSize", array(), "method"), "html", null, true);
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
        echo $this->getAttribute(($context["index"] ?? null), "generateIndexTypeSelector", array(), "method");
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["index"] ?? null), "getParser", array(), "method"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["index"] ?? null), "getComment", array(), "method"), "html", null, true);
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
        $context["spatial_types"] = array(0 => "geometry", 1 => "point", 2 => "linestring", 3 => "polygon", 4 => "multipoint", 5 => "multilinestring", 6 => "multipolygon", 7 => "geomtrycollection");
        // line 132
        echo "            <tbody>
                ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["index"] ?? null), "getColumns", array(), "method"));
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
                if (((($this->getAttribute(($context["index"] ?? null), "getChoice", array(), "method") != "FULLTEXT") || preg_match("/(char|text)/i",                 // line 145
$context["field_type"])) && (($this->getAttribute(                // line 146
($context["index"] ?? null), "getChoice", array(), "method") != "SPATIAL") || twig_in_filter(                // line 147
$context["field_type"], ($context["spatial_types"] ?? null))))) {
                    // line 148
                    echo "
                                        <option value=\"";
                    // line 149
                    echo twig_escape_filter($this->env, $context["field_name"], "html", null, true);
                    echo "\"";
                    // line 150
                    if (($context["field_name"] == $this->getAttribute($context["column"], "getName", array(), "method"))) {
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
            // line 164
            echo twig_escape_filter($this->env, ((($this->getAttribute(($context["index"] ?? null), "getChoice", array(), "method") != "SPATIAL")) ? ($this->getAttribute(            // line 165
$context["column"], "getSubPart", array(), "method")) : ("")), "html", null, true);
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
                        $context["col_index"] = $this->getAttribute($context["field_type"], 1, array(), "array");
                        // line 182
                        echo "                                            ";
                        $context["field_type"] = $this->getAttribute($context["field_type"], 0, array(), "array");
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
        return array (  386 => 217,  382 => 216,  374 => 211,  364 => 203,  361 => 202,  345 => 191,  334 => 188,  330 => 187,  327 => 186,  325 => 185,  322 => 184,  319 => 183,  316 => 182,  313 => 181,  310 => 180,  305 => 179,  303 => 178,  299 => 177,  292 => 173,  288 => 171,  283 => 170,  280 => 169,  270 => 165,  269 => 164,  260 => 157,  254 => 156,  246 => 153,  243 => 152,  240 => 151,  238 => 150,  235 => 149,  232 => 148,  230 => 147,  229 => 146,  228 => 145,  226 => 144,  222 => 143,  217 => 141,  209 => 136,  205 => 134,  201 => 133,  198 => 132,  196 => 122,  191 => 119,  189 => 118,  185 => 116,  183 => 115,  168 => 103,  157 => 94,  155 => 93,  145 => 86,  135 => 78,  133 => 77,  123 => 70,  115 => 66,  113 => 65,  102 => 57,  92 => 49,  90 => 48,  81 => 42,  75 => 39,  67 => 35,  65 => 34,  54 => 26,  40 => 16,  38 => 15,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "table/index_form.twig", "/storage/emulated/0/www/phpmyadmin/templates/table/index_form.twig");
    }
}
