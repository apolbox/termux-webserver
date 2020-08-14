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

/* table/structure/row_stats_table.twig */
class __TwigTemplate_d2cb60b1430578833e7952fa59a2385c38bb42792b74b109bf1d9a3cd571fdb7 extends \Twig\Template
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
        echo "<table id=\"tablerowstats\" class=\"width100 data\">
<caption class=\"tblHeaders\">";
        // line 2
        echo _gettext("Row statistics");
        echo "</caption>
<tbody>
    ";
        // line 4
        if ($this->getAttribute(($context["showtable"] ?? null), "Row_format", [], "array", true, true)) {
            // line 5
            echo "        <tr>
        <th class=\"name\">";
            // line 6
            echo _gettext("Format");
            echo "</th>
        ";
            // line 7
            if (($this->getAttribute(($context["showtable"] ?? null), "Row_format", [], "array") == "Fixed")) {
                // line 8
                echo "            <td class=\"value\">";
                echo _gettext("static");
                echo "</td>
        ";
            } elseif (($this->getAttribute(            // line 9
($context["showtable"] ?? null), "Row_format", [], "array") == "Dynamic")) {
                // line 10
                echo "            <td class=\"value\">";
                echo _gettext("dynamic");
                echo "</td>
        ";
            } else {
                // line 12
                echo "            <td class=\"value\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["showtable"] ?? null), "Row_format", [], "array"), "html", null, true);
                echo "</td>
        ";
            }
            // line 14
            echo "        </tr>
    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if ( !twig_test_empty($this->getAttribute(($context["showtable"] ?? null), "Create_options", [], "array"))) {
            // line 18
            echo "        <tr>
        <th class=\"name\">";
            // line 19
            echo _gettext("Options");
            echo "</th>
        ";
            // line 20
            if (($this->getAttribute(($context["showtable"] ?? null), "Create_options", [], "array") == "partitioned")) {
                // line 21
                echo "            <td class=\"value\">";
                echo _gettext("partitioned");
                echo "</td>
        ";
            } else {
                // line 23
                echo "            <td class=\"value\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["showtable"] ?? null), "Create_options", [], "array"), "html", null, true);
                echo "</td>
        ";
            }
            // line 25
            echo "        </tr>
    ";
        }
        // line 27
        echo "
    ";
        // line 28
        if ( !twig_test_empty(($context["tbl_collation"] ?? null))) {
            // line 29
            echo "        <tr>
        <th class=\"name\">";
            // line 30
            echo _gettext("Collation");
            echo "</th>
        <td class=\"value\">
            <dfn title=\"";
            // line 32
            echo twig_escape_filter($this->env, PhpMyAdmin\Charsets::getCollationDescr(($context["tbl_collation"] ?? null)), "html", null, true);
            echo "\">
                ";
            // line 33
            echo twig_escape_filter($this->env, ($context["tbl_collation"] ?? null), "html", null, true);
            echo "
            </dfn>
        </td>
        </tr>
    ";
        }
        // line 38
        echo "
    ";
        // line 39
        if (( !($context["is_innodb"] ?? null) && $this->getAttribute(($context["showtable"] ?? null), "Rows", [], "array", true, true))) {
            // line 40
            echo "        <tr>
        <th class=\"name\">";
            // line 41
            echo _gettext("Rows");
            echo "</th>
        <td class=\"value\">";
            // line 42
            echo twig_escape_filter($this->env, PhpMyAdmin\Util::formatNumber($this->getAttribute(($context["showtable"] ?? null), "Rows", [], "array"), 0), "html", null, true);
            echo "</td>
        </tr>
    ";
        }
        // line 45
        echo "
    ";
        // line 46
        if ((( !($context["is_innodb"] ?? null) && $this->getAttribute(        // line 47
($context["showtable"] ?? null), "Avg_row_length", [], "array", true, true)) && ($this->getAttribute(        // line 48
($context["showtable"] ?? null), "Avg_row_length", [], "array") > 0))) {
            // line 49
            echo "        <tr>
        <th class=\"name\">";
            // line 50
            echo _gettext("Row length");
            echo "</th>
        ";
            // line 51
            $context["avg_row_length"] = PhpMyAdmin\Util::formatByteDown($this->getAttribute(($context["showtable"] ?? null), "Avg_row_length", [], "array"), 6, 1);
            // line 52
            echo "        <td class=\"value\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["avg_row_length"] ?? null), 0, [], "array"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["avg_row_length"] ?? null), 1, [], "array"), "html", null, true);
            echo "</td>
        </tr>
    ";
        }
        // line 55
        echo "
    ";
        // line 56
        if ((((( !($context["is_innodb"] ?? null) && $this->getAttribute(        // line 57
($context["showtable"] ?? null), "Data_length", [], "array", true, true)) && $this->getAttribute(        // line 58
($context["showtable"] ?? null), "Rows", [], "array", true, true)) && ($this->getAttribute(        // line 59
($context["showtable"] ?? null), "Rows", [], "array") > 0)) && (        // line 60
($context["mergetable"] ?? null) == false))) {
            // line 61
            echo "        <tr>
        <th class=\"name\">";
            // line 62
            echo _gettext("Row size");
            echo "</th>
        <td class=\"value\">";
            // line 63
            echo twig_escape_filter($this->env, ($context["avg_size"] ?? null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ($context["avg_unit"] ?? null), "html", null, true);
            echo "</td>
        </tr>
    ";
        }
        // line 66
        echo "
    ";
        // line 67
        if ($this->getAttribute(($context["showtable"] ?? null), "Auto_increment", [], "array", true, true)) {
            // line 68
            echo "        <tr>
        <th class=\"name\">";
            // line 69
            echo _gettext("Next autoindex");
            echo "</th>
        <td class=\"value\">";
            // line 70
            echo twig_escape_filter($this->env, PhpMyAdmin\Util::formatNumber($this->getAttribute(($context["showtable"] ?? null), "Auto_increment", [], "array"), 0), "html", null, true);
            echo "</td>
        </tr>
    ";
        }
        // line 73
        echo "
    ";
        // line 74
        if ($this->getAttribute(($context["showtable"] ?? null), "Create_time", [], "array", true, true)) {
            // line 75
            echo "        <tr>
        <th class=\"name\">";
            // line 76
            echo _gettext("Creation");
            echo "</th>
        <td class=\"value\">";
            // line 77
            echo twig_escape_filter($this->env, PhpMyAdmin\Util::localisedDate(twig_date_format_filter($this->env, $this->getAttribute(($context["showtable"] ?? null), "Create_time", [], "array"), "U")), "html", null, true);
            echo "</td>
        </tr>
    ";
        }
        // line 80
        echo "
    ";
        // line 81
        if ($this->getAttribute(($context["showtable"] ?? null), "Update_time", [], "array", true, true)) {
            // line 82
            echo "        <tr>
        <th class=\"name\">";
            // line 83
            echo _gettext("Last update");
            echo "</th>
        <td class=\"value\">";
            // line 84
            echo twig_escape_filter($this->env, PhpMyAdmin\Util::localisedDate(twig_date_format_filter($this->env, $this->getAttribute(($context["showtable"] ?? null), "Update_time", [], "array"), "U")), "html", null, true);
            echo "</td>
        </tr>
    ";
        }
        // line 87
        echo "
    ";
        // line 88
        if ($this->getAttribute(($context["showtable"] ?? null), "Check_time", [], "array", true, true)) {
            // line 89
            echo "        <tr>
        <th class=\"name\">";
            // line 90
            echo _gettext("Last check");
            echo "</th>
        <td class=\"value\">";
            // line 91
            echo twig_escape_filter($this->env, PhpMyAdmin\Util::localisedDate(twig_date_format_filter($this->env, $this->getAttribute(($context["showtable"] ?? null), "Check_time", [], "array"), "U")), "html", null, true);
            echo "</td>
        </tr>
    ";
        }
        // line 94
        echo "</tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "table/structure/row_stats_table.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 94,  260 => 91,  256 => 90,  253 => 89,  251 => 88,  248 => 87,  242 => 84,  238 => 83,  235 => 82,  233 => 81,  230 => 80,  224 => 77,  220 => 76,  217 => 75,  215 => 74,  212 => 73,  206 => 70,  202 => 69,  199 => 68,  197 => 67,  194 => 66,  186 => 63,  182 => 62,  179 => 61,  177 => 60,  176 => 59,  175 => 58,  174 => 57,  173 => 56,  170 => 55,  161 => 52,  159 => 51,  155 => 50,  152 => 49,  150 => 48,  149 => 47,  148 => 46,  145 => 45,  139 => 42,  135 => 41,  132 => 40,  130 => 39,  127 => 38,  119 => 33,  115 => 32,  110 => 30,  107 => 29,  105 => 28,  102 => 27,  98 => 25,  92 => 23,  86 => 21,  84 => 20,  80 => 19,  77 => 18,  75 => 17,  72 => 16,  68 => 14,  62 => 12,  56 => 10,  54 => 9,  49 => 8,  47 => 7,  43 => 6,  40 => 5,  38 => 4,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "table/structure/row_stats_table.twig", "/data/data/com.termux/files/usr/opt/phpmyadmin/templates/table/structure/row_stats_table.twig");
    }
}
