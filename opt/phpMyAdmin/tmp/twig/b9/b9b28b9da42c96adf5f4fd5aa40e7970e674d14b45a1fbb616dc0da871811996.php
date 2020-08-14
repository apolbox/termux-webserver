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

/* columns_definitions/column_definitions_form.twig */
class __TwigTemplate_c50d3bb07df5365923cdf1313ea1fc70f356d4a9ab13ee6c651034ba73fef796 extends \Twig\Template
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
        echo "<form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, ($context["action"] ?? null), "html", null, true);
        echo "\" class=\"";
        // line 2
        echo (((($context["action"] ?? null) == "tbl_create.php")) ? ("create_table") : ("append_fields"));
        // line 3
        echo "_form ajax lock-page\">
    ";
        // line 4
        echo PhpMyAdmin\Url::getHiddenInputs(($context["form_params"] ?? null));
        echo "
    ";
        // line 6
        echo "    ";
        // line 7
        echo "    ";
        // line 8
        echo "    <input type=\"hidden\" name=\"primary_indexes\" value=\"";
        // line 9
        (( !twig_test_empty(($context["primary_indexes"] ?? null))) ? (print (twig_escape_filter($this->env, ($context["primary_indexes"] ?? null), "html", null, true))) : (print ("[]")));
        echo "\">
    <input type=\"hidden\" name=\"unique_indexes\" value=\"";
        // line 11
        (( !twig_test_empty(($context["unique_indexes"] ?? null))) ? (print (twig_escape_filter($this->env, ($context["unique_indexes"] ?? null), "html", null, true))) : (print ("[]")));
        echo "\">
    <input type=\"hidden\" name=\"indexes\" value=\"";
        // line 13
        (( !twig_test_empty(($context["indexes"] ?? null))) ? (print (twig_escape_filter($this->env, ($context["indexes"] ?? null), "html", null, true))) : (print ("[]")));
        echo "\">
    <input type=\"hidden\" name=\"fulltext_indexes\" value=\"";
        // line 15
        (( !twig_test_empty(($context["fulltext_indexes"] ?? null))) ? (print (twig_escape_filter($this->env, ($context["fulltext_indexes"] ?? null), "html", null, true))) : (print ("[]")));
        echo "\">
    <input type=\"hidden\" name=\"spatial_indexes\" value=\"";
        // line 17
        (( !twig_test_empty(($context["spatial_indexes"] ?? null))) ? (print (twig_escape_filter($this->env, ($context["spatial_indexes"] ?? null), "html", null, true))) : (print ("[]")));
        echo "\">

    ";
        // line 19
        if ((($context["action"] ?? null) == "tbl_create.php")) {
            // line 20
            echo "        <div id=\"table_name_col_no_outer\">
            <table id=\"table_name_col_no\" class=\"tdblock\">
                <tr class=\"vmiddle floatleft\">
                    <td>";
            // line 23
            echo _gettext("Table name");
            echo ":
                    <input type=\"text\"
                        name=\"table\"
                        size=\"40\"
                        maxlength=\"64\"
                        value=\"";
            // line 28
            (((isset($context["table"]) || array_key_exists("table", $context))) ? (print (twig_escape_filter($this->env, ($context["table"] ?? null), "html", null, true))) : (print ("")));
            echo "\"
                        class=\"textfield\" autofocus required />
                    </td>
                    <td>
                        ";
            // line 32
            echo _gettext("Add");
            // line 33
            echo "                        <input type=\"number\"
                            id=\"added_fields\"
                            name=\"added_fields\"
                            size=\"2\"
                            value=\"1\"
                            min=\"1\"
                            onfocus=\"this.select()\" />
                        ";
            // line 40
            echo _gettext("column(s)");
            // line 41
            echo "                        <input type=\"button\"
                            name=\"submit_num_fields\"
                            value=\"";
            // line 43
            echo _gettext("Go");
            echo "\" />
                    </td>
                </tr>
            </table>
        </div>
    ";
        }
        // line 49
        echo "    ";
        if (twig_test_iterable(($context["content_cells"] ?? null))) {
            // line 50
            echo "        ";
            $this->loadTemplate("columns_definitions/table_fields_definitions.twig", "columns_definitions/column_definitions_form.twig", 50)->display(twig_to_array(["is_backup" =>             // line 51
($context["is_backup"] ?? null), "fields_meta" =>             // line 52
($context["fields_meta"] ?? null), "mimework" =>             // line 53
($context["mimework"] ?? null), "content_cells" =>             // line 54
($context["content_cells"] ?? null), "change_column" =>             // line 55
($context["change_column"] ?? null), "is_virtual_columns_supported" =>             // line 56
($context["is_virtual_columns_supported"] ?? null), "browse_mime" =>             // line 57
($context["browse_mime"] ?? null), "server_type" =>             // line 58
($context["server_type"] ?? null), "max_rows" =>             // line 59
($context["max_rows"] ?? null), "char_editing" =>             // line 60
($context["char_editing"] ?? null), "attribute_types" =>             // line 61
($context["attribute_types"] ?? null), "privs_available" =>             // line 62
($context["privs_available"] ?? null), "max_length" =>             // line 63
($context["max_length"] ?? null), "dbi" =>             // line 64
($context["dbi"] ?? null), "disable_is" =>             // line 65
($context["disable_is"] ?? null)]));
            // line 67
            echo "    ";
        }
        // line 68
        echo "    ";
        if ((($context["action"] ?? null) == "tbl_create.php")) {
            // line 69
            echo "        <div class=\"responsivetable\">
        <table>
            <tr class=\"vtop\">
                <th>";
            // line 72
            echo _gettext("Table comments:");
            echo "</th>
                <td width=\"25\">&nbsp;</td>
                <th>";
            // line 74
            echo _gettext("Collation:");
            echo "</th>
                <td width=\"25\">&nbsp;</td>
                <th>
                    ";
            // line 77
            echo _gettext("Storage Engine:");
            // line 78
            echo "                    ";
            echo PhpMyAdmin\Util::showMySQLDocu("Storage_engines");
            echo "
                </th>
                <td width=\"25\">&nbsp;</td>
                <th>
                    ";
            // line 82
            echo _gettext("Connection:");
            // line 83
            echo "                    ";
            echo PhpMyAdmin\Util::showMySQLDocu("federated-create-connection");
            echo "
                </th>
            </tr>
            <tr>
                <td>
                    <input type=\"text\"
                        name=\"comment\"
                        size=\"40\"
                        maxlength=\"60\"
                        value=\"";
            // line 92
            (((isset($context["comment"]) || array_key_exists("comment", $context))) ? (print (twig_escape_filter($this->env, ($context["comment"] ?? null), "html", null, true))) : (print ("")));
            echo "\"
                        class=\"textfield\" />
                </td>
                <td width=\"25\">&nbsp;</td>
                <td>
                    ";
            // line 97
            echo PhpMyAdmin\Charsets::getCollationDropdownBox(            // line 98
($context["dbi"] ?? null),             // line 99
($context["disable_is"] ?? null), "tbl_collation", null,             // line 102
($context["tbl_collation"] ?? null), false);
            // line 104
            echo "
                </td>
                <td width=\"25\">&nbsp;</td>
                <td>
                    ";
            // line 108
            echo PhpMyAdmin\StorageEngine::getHtmlSelect("tbl_storage_engine", null,             // line 111
($context["tbl_storage_engine"] ?? null));
            // line 112
            echo "
                </td>
                <td width=\"25\">&nbsp;</td>
                <td>
                    <input type=\"text\"
                        name=\"connection\"
                        size=\"40\"
                        value=\"";
            // line 119
            (((isset($context["connection"]) || array_key_exists("connection", $context))) ? (print (twig_escape_filter($this->env, ($context["connection"] ?? null), "html", null, true))) : (print ("")));
            echo "\"
                        placeholder=\"scheme://user_name[:password]@host_name[:port_num]/db_name/tbl_name\"
                        class=\"textfield\"
                        required=\"required\" />
                </td>
            </tr>
            ";
            // line 125
            if (($context["have_partitioning"] ?? null)) {
                // line 126
                echo "                <tr class=\"vtop\">
                    <th colspan=\"5\">
                        ";
                // line 128
                echo _gettext("PARTITION definition:");
                // line 129
                echo "                        ";
                echo PhpMyAdmin\Util::showMySQLDocu("Partitioning");
                echo "
                    </th>
                </tr>
                <tr>
                    <td colspan=\"5\">
                        ";
                // line 134
                $this->loadTemplate("columns_definitions/partitions.twig", "columns_definitions/column_definitions_form.twig", 134)->display(twig_to_array(["partition_details" =>                 // line 135
($context["partition_details"] ?? null)]));
                // line 137
                echo "                    </td>
                </tr>
            ";
            }
            // line 140
            echo "        </table>
        </div>
    ";
        }
        // line 143
        echo "    <fieldset class=\"tblFooters\">
        <input type=\"button\"
            class=\"preview_sql\"
            value=\"";
        // line 146
        echo _gettext("Preview SQL");
        echo "\" />
        <input type=\"submit\"
            name=\"do_save_data\"
            value=\"";
        // line 149
        echo _gettext("Save");
        echo "\" />
    </fieldset>
    <div id=\"properties_message\"></div>
</form>
";
    }

    public function getTemplateName()
    {
        return "columns_definitions/column_definitions_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 149,  261 => 146,  256 => 143,  251 => 140,  246 => 137,  244 => 135,  243 => 134,  234 => 129,  232 => 128,  228 => 126,  226 => 125,  217 => 119,  208 => 112,  206 => 111,  205 => 108,  199 => 104,  197 => 102,  196 => 99,  195 => 98,  194 => 97,  186 => 92,  173 => 83,  171 => 82,  163 => 78,  161 => 77,  155 => 74,  150 => 72,  145 => 69,  142 => 68,  139 => 67,  137 => 65,  136 => 64,  135 => 63,  134 => 62,  133 => 61,  132 => 60,  131 => 59,  130 => 58,  129 => 57,  128 => 56,  127 => 55,  126 => 54,  125 => 53,  124 => 52,  123 => 51,  121 => 50,  118 => 49,  109 => 43,  105 => 41,  103 => 40,  94 => 33,  92 => 32,  85 => 28,  77 => 23,  72 => 20,  70 => 19,  65 => 17,  61 => 15,  57 => 13,  53 => 11,  49 => 9,  47 => 8,  45 => 7,  43 => 6,  39 => 4,  36 => 3,  34 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "columns_definitions/column_definitions_form.twig", "/data/data/com.termux/files/usr/opt/phpmyadmin/templates/columns_definitions/column_definitions_form.twig");
    }
}
