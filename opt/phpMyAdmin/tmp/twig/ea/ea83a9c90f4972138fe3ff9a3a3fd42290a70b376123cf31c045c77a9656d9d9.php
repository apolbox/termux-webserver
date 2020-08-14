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

/* columns_definitions/table_fields_definitions.twig */
class __TwigTemplate_77e74d241ea6a74aa04406b40de60cc4c244e122960a0a6c5582eb97577b9163 extends \Twig\Template
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
        echo "<div class=\"responsivetable\">
<table id=\"table_columns\" class=\"noclick\">
    <caption class=\"tblHeaders\">
        ";
        // line 4
        echo _gettext("Structure");
        // line 5
        echo "        ";
        echo PhpMyAdmin\Util::showMySQLDocu("CREATE_TABLE");
        echo "
    </caption>
    <tr>
        <th>
            ";
        // line 9
        echo _gettext("Name");
        // line 10
        echo "        </th>
        <th>
            ";
        // line 12
        echo _gettext("Type");
        // line 13
        echo "            ";
        echo PhpMyAdmin\Util::showMySQLDocu("data-types");
        echo "
        </th>
        <th>
            ";
        // line 16
        echo _gettext("Length/Values");
        // line 17
        echo "            ";
        echo PhpMyAdmin\Util::showHint(_gettext("If column type is \"enum\" or \"set\", please enter the values using this format: 'a','b','c'…<br />If you ever need to put a backslash (\"\") or a single quote (\"'\") amongst those values, precede it with a backslash (for example '\\\\xyz' or 'a\\'b')."));
        echo "
        </th>
        <th>
            ";
        // line 20
        echo _gettext("Default");
        // line 21
        echo "            ";
        echo PhpMyAdmin\Util::showHint(_gettext("For default values, please enter just a single value, without backslash escaping or quotes, using this format: a"));
        echo "
        </th>
        <th>
            ";
        // line 24
        echo _gettext("Collation");
        // line 25
        echo "        </th>
        <th>
            ";
        // line 27
        echo _gettext("Attributes");
        // line 28
        echo "        </th>
        <th>
            ";
        // line 30
        echo _gettext("Null");
        // line 31
        echo "        </th>

        ";
        // line 34
        echo "        ";
        if (((isset($context["change_column"]) || array_key_exists("change_column", $context)) &&  !twig_test_empty(($context["change_column"] ?? null)))) {
            // line 35
            echo "            <th>
                ";
            // line 36
            echo _gettext("Adjust privileges");
            // line 37
            echo "                ";
            echo PhpMyAdmin\Util::showDocu("faq", "faq6-39");
            echo "
            </th>
        ";
        }
        // line 40
        echo "
        ";
        // line 44
        echo "        ";
        if ( !($context["is_backup"] ?? null)) {
            // line 45
            echo "            <th>
                ";
            // line 46
            echo _gettext("Index");
            // line 47
            echo "            </th>
        ";
        }
        // line 49
        echo "
        <th>
            <abbr title=\"AUTO_INCREMENT\">A_I</abbr>
        </th>
        <th>
            ";
        // line 54
        echo _gettext("Comments");
        // line 55
        echo "        </th>

        ";
        // line 57
        if (($context["is_virtual_columns_supported"] ?? null)) {
            // line 58
            echo "            <th>
                ";
            // line 59
            echo _gettext("Virtuality");
            // line 60
            echo "            </th>
        ";
        }
        // line 62
        echo "
        ";
        // line 63
        if ((isset($context["fields_meta"]) || array_key_exists("fields_meta", $context))) {
            // line 64
            echo "            <th>
                ";
            // line 65
            echo _gettext("Move column");
            // line 66
            echo "            </th>
        ";
        }
        // line 68
        echo "
        ";
        // line 69
        if ((($context["mimework"] ?? null) && ($context["browse_mime"] ?? null))) {
            // line 70
            echo "            <th>
                ";
            // line 71
            echo _gettext("MIME type");
            // line 72
            echo "            </th>
            <th>
                <a href=\"transformation_overview.php";
            // line 75
            echo PhpMyAdmin\Url::getCommon();
            echo "#transformation\" title=\"";
            // line 76
            echo _gettext("List of available transformations and their options");
            // line 77
            echo "\" target=\"_blank\">
                    ";
            // line 78
            echo _gettext("Browser display transformation");
            // line 79
            echo "                </a>
            </th>
            <th>
                ";
            // line 82
            echo _gettext("Browser display transformation options");
            // line 83
            echo "                ";
            echo PhpMyAdmin\Util::showHint(_gettext("Please enter the values for transformation options using this format: 'a', 100, b,'c'…<br />If you ever need to put a backslash (\"\\\") or a single quote (\"'\") amongst those values, precede it with a backslash (for example '\\\\xyz' or 'a\\'b')."));
            echo "
            </th>
            <th>
                <a href=\"transformation_overview.php";
            // line 86
            echo PhpMyAdmin\Url::getCommon();
            echo "#input_transformation\"
                   title=\"";
            // line 87
            echo _gettext("List of available transformations and their options");
            echo "\"
                   target=\"_blank\">
                    ";
            // line 89
            echo _gettext("Input transformation");
            // line 90
            echo "                </a>
            </th>
            <th>
                ";
            // line 93
            echo _gettext("Input transformation options");
            // line 94
            echo "                ";
            echo PhpMyAdmin\Util::showHint(_gettext("Please enter the values for transformation options using this format: 'a', 100, b,'c'…<br />If you ever need to put a backslash (\"\\\") or a single quote (\"'\") amongst those values, precede it with a backslash (for example '\\\\xyz' or 'a\\'b')."));
            echo "
            </th>
        ";
        }
        // line 97
        echo "    </tr>
    ";
        // line 98
        $context["options"] = ["" => "", "VIRTUAL" => "VIRTUAL"];
        // line 99
        echo "    ";
        if ((($context["server_type"] ?? null) == "MariaDB")) {
            // line 100
            echo "        ";
            $context["options"] = twig_array_merge(($context["options"] ?? null), ["PERSISTENT" => "PERSISTENT"]);
            // line 101
            echo "        ";
            $context["options"] = twig_array_merge(($context["options"] ?? null), ["STORED" => "STORED"]);
            // line 102
            echo "    ";
        } else {
            // line 103
            echo "        ";
            $context["options"] = twig_array_merge(($context["options"] ?? null), ["STORED" => "STORED"]);
            // line 104
            echo "    ";
        }
        // line 105
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["content_cells"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["content_row"]) {
            // line 106
            echo "        <tr>
            ";
            // line 107
            $this->loadTemplate("columns_definitions/column_attributes.twig", "columns_definitions/table_fields_definitions.twig", 107)->display(twig_to_array(twig_array_merge($context["content_row"], ["options" =>             // line 108
($context["options"] ?? null), "change_column" =>             // line 109
($context["change_column"] ?? null), "is_virtual_columns_supported" =>             // line 110
($context["is_virtual_columns_supported"] ?? null), "browse_mime" =>             // line 111
($context["browse_mime"] ?? null), "max_rows" =>             // line 112
($context["max_rows"] ?? null), "char_editing" =>             // line 113
($context["char_editing"] ?? null), "attribute_types" =>             // line 114
($context["attribute_types"] ?? null), "privs_available" =>             // line 115
($context["privs_available"] ?? null), "max_length" =>             // line 116
($context["max_length"] ?? null), "dbi" =>             // line 117
($context["dbi"] ?? null), "disable_is" =>             // line 118
($context["disable_is"] ?? null)])));
            // line 120
            echo "        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content_row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "</table>
</div>
";
    }

    public function getTemplateName()
    {
        return "columns_definitions/table_fields_definitions.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 122,  271 => 120,  269 => 118,  268 => 117,  267 => 116,  266 => 115,  265 => 114,  264 => 113,  263 => 112,  262 => 111,  261 => 110,  260 => 109,  259 => 108,  258 => 107,  255 => 106,  250 => 105,  247 => 104,  244 => 103,  241 => 102,  238 => 101,  235 => 100,  232 => 99,  230 => 98,  227 => 97,  220 => 94,  218 => 93,  213 => 90,  211 => 89,  206 => 87,  202 => 86,  195 => 83,  193 => 82,  188 => 79,  186 => 78,  183 => 77,  181 => 76,  178 => 75,  174 => 72,  172 => 71,  169 => 70,  167 => 69,  164 => 68,  160 => 66,  158 => 65,  155 => 64,  153 => 63,  150 => 62,  146 => 60,  144 => 59,  141 => 58,  139 => 57,  135 => 55,  133 => 54,  126 => 49,  122 => 47,  120 => 46,  117 => 45,  114 => 44,  111 => 40,  104 => 37,  102 => 36,  99 => 35,  96 => 34,  92 => 31,  90 => 30,  86 => 28,  84 => 27,  80 => 25,  78 => 24,  71 => 21,  69 => 20,  62 => 17,  60 => 16,  53 => 13,  51 => 12,  47 => 10,  45 => 9,  37 => 5,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "columns_definitions/table_fields_definitions.twig", "/data/data/com.termux/files/usr/opt/phpmyadmin/templates/columns_definitions/table_fields_definitions.twig");
    }
}
