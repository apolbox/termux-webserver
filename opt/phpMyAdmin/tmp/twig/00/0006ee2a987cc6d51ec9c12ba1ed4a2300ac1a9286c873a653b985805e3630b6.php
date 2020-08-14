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

/* table/structure/display_partitions.twig */
class __TwigTemplate_a34a4f4cc1303b06277da1d36fc554df0f0c96dfb72891f6c704e34a8e9b4da0 extends \Twig\Template
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
        echo "<div id=\"partitions\">
    <fieldset>
        <legend>
            ";
        // line 4
        echo _gettext("Partitions");
        // line 5
        echo "            ";
        echo PhpMyAdmin\Util::showMySQLDocu("partitioning");
        echo "
        </legend>
        ";
        // line 7
        if (twig_test_empty(($context["partitions"] ?? null))) {
            // line 8
            echo "            ";
            echo call_user_func_array($this->env->getFunction('Message_notice')->getCallable(), [_gettext("No partitioning defined!")]);
            echo "
        ";
        } else {
            // line 10
            echo "            <p>
                ";
            // line 11
            echo _gettext("Partitioned by:");
            // line 12
            echo "                <code>";
            echo twig_escape_filter($this->env, ($context["partition_method"] ?? null), "html", null, true);
            echo "(";
            echo twig_escape_filter($this->env, ($context["partition_expression"] ?? null), "html", null, true);
            echo ")</code>
            </p>
            ";
            // line 14
            if (($context["has_sub_partitions"] ?? null)) {
                // line 15
                echo "                <p>
                    ";
                // line 16
                echo _gettext("Sub partitioned by:");
                // line 17
                echo "                    <code>";
                echo twig_escape_filter($this->env, ($context["sub_partition_method"] ?? null), "html", null, true);
                echo "(";
                echo twig_escape_filter($this->env, ($context["sub_partition_expression"] ?? null), "html", null, true);
                echo ")</code>
                <p>
            ";
            }
            // line 20
            echo "            <table>
                <thead>
                    <tr>
                        <th colspan=\"2\">#</th>
                        <th>";
            // line 24
            echo _gettext("Partition");
            echo "</th>
                        ";
            // line 25
            if (($context["has_description"] ?? null)) {
                // line 26
                echo "                            <th>";
                echo _gettext("Expression");
                echo "</th>
                        ";
            }
            // line 28
            echo "                        <th>";
            echo _gettext("Rows");
            echo "</th>
                        <th>";
            // line 29
            echo _gettext("Data length");
            echo "</th>
                        <th>";
            // line 30
            echo _gettext("Index length");
            echo "</th>
                        <th>";
            // line 31
            echo _gettext("Comment");
            echo "</th>
                        <th colspan=\"";
            // line 32
            echo ((($context["range_or_list"] ?? null)) ? ("7") : ("6"));
            echo "\">
                            ";
            // line 33
            echo _gettext("Action");
            // line 34
            echo "                        </th>
                    </tr>
                </thead>
                <tbody>
                ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["partitions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["partition"]) {
                // line 39
                echo "                    <tr class=\"noclick";
                echo ((($context["has_sub_partitions"] ?? null)) ? (" marked") : (""));
                echo "\">
                        ";
                // line 40
                if (($context["has_sub_partitions"] ?? null)) {
                    // line 41
                    echo "                            <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["partition"], "getOrdinal", [], "method"), "html", null, true);
                    echo "</td>
                            <td></td>
                        ";
                } else {
                    // line 44
                    echo "                            <td colspan=\"2\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["partition"], "getOrdinal", [], "method"), "html", null, true);
                    echo "</td>
                        ";
                }
                // line 46
                echo "                        <th>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["partition"], "getName", [], "method"), "html", null, true);
                echo "</th>
                        ";
                // line 47
                if (($context["has_description"] ?? null)) {
                    // line 48
                    echo "                            <td>
                                <code>";
                    // line 50
                    echo twig_escape_filter($this->env, $this->getAttribute($context["partition"], "getExpression", [], "method"), "html", null, true);
                    // line 51
                    echo ((($this->getAttribute($context["partition"], "getMethod", [], "method") == "LIST")) ? (" IN (") : (" < "));
                    // line 52
                    echo twig_escape_filter($this->env, $this->getAttribute($context["partition"], "getDescription", [], "method"), "html", null, true);
                    // line 53
                    echo ((($this->getAttribute($context["partition"], "getMethod", [], "method") == "LIST")) ? (")") : (""));
                    // line 54
                    echo "</code>
                            </td>
                        ";
                }
                // line 57
                echo "                        <td class=\"value\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["partition"], "getRows", [], "method"), "html", null, true);
                echo "</td>
                        <td class=\"value\">
                            ";
                // line 59
                $context["data_length"] = PhpMyAdmin\Util::formatByteDown($this->getAttribute(                // line 60
$context["partition"], "getDataLength", [], "method"), 3, 1);
                // line 64
                echo "                            <span>";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data_length"] ?? null), 0, [], "array"), "html", null, true);
                echo "</span>
                            <span class=\"unit\">";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data_length"] ?? null), 1, [], "array"), "html", null, true);
                echo "</span>
                        </td>
                        <td class=\"value\">
                            ";
                // line 68
                $context["index_length"] = PhpMyAdmin\Util::formatByteDown($this->getAttribute(                // line 69
$context["partition"], "getIndexLength", [], "method"), 3, 1);
                // line 73
                echo "                            <span>";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["index_length"] ?? null), 0, [], "array"), "html", null, true);
                echo "</span>
                            <span class=\"unit\">";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute(($context["index_length"] ?? null), 1, [], "array"), "html", null, true);
                echo "</span>
                        </td>
                        <td>";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute($context["partition"], "getComment", [], "method"), "html", null, true);
                echo "</td>
                        ";
                // line 77
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["action_icons"] ?? null));
                foreach ($context['_seq'] as $context["action"] => $context["icon"]) {
                    // line 78
                    echo "                            <td>
                                <a href=\"tbl_structure.php\" data-post=\"";
                    // line 79
                    echo twig_escape_filter($this->env, ($context["url_query"] ?? null), "html", null, true);
                    // line 80
                    echo "&amp;partition_maintenance=1&amp;sql_query=";
                    // line 81
                    echo twig_escape_filter($this->env, twig_urlencode_filter(((((("ALTER TABLE " . PhpMyAdmin\Util::backquote(($context["table"] ?? null))) . " ") . $context["action"]) . " PARTITION ") . $this->getAttribute(                    // line 82
$context["partition"], "getName", [], "method"))), "html", null, true);
                    echo "\"
                                    id=\"partition_action_";
                    // line 83
                    echo twig_escape_filter($this->env, $context["action"], "html", null, true);
                    echo "\"
                                    name=\"partition_action_";
                    // line 84
                    echo twig_escape_filter($this->env, $context["action"], "html", null, true);
                    echo "\"
                                    class=\"ajax\">
                                    ";
                    // line 86
                    echo $context["icon"];
                    echo "
                                </a>
                            </td>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['action'], $context['icon'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 90
                echo "
                        ";
                // line 91
                if (($context["has_sub_partitions"] ?? null)) {
                    // line 92
                    echo "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["partition"], "getSubPartitions", [], "method"));
                    foreach ($context['_seq'] as $context["_key"] => $context["sub_partition"]) {
                        // line 93
                        echo "                                <tr class=\"noclick\">
                                    <td></td>
                                    <td>";
                        // line 95
                        echo twig_escape_filter($this->env, $this->getAttribute($context["sub_partition"], "getOrdinal", [], "method"), "html", null, true);
                        echo "</td>
                                    <td>";
                        // line 96
                        echo twig_escape_filter($this->env, $this->getAttribute($context["sub_partition"], "getName", [], "method"), "html", null, true);
                        echo "</td>
                                    ";
                        // line 97
                        if (($context["has_description"] ?? null)) {
                            // line 98
                            echo "                                        <td></td>
                                    ";
                        }
                        // line 100
                        echo "                                    <td class=\"value\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["sub_partition"], "getRows", [], "method"), "html", null, true);
                        echo "</td>
                                    <td class=\"value\">
                                        ";
                        // line 102
                        $context["data_length"] = PhpMyAdmin\Util::formatByteDown($this->getAttribute(                        // line 103
$context["sub_partition"], "getDataLength", [], "method"), 3, 1);
                        // line 107
                        echo "                                        <span>";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["data_length"] ?? null), 0, [], "array"), "html", null, true);
                        echo "</span>
                                        <span class=\"unit\">";
                        // line 108
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["data_length"] ?? null), 1, [], "array"), "html", null, true);
                        echo "</span>
                                    </td>
                                    <td class=\"value\">
                                        ";
                        // line 111
                        $context["index_length"] = PhpMyAdmin\Util::formatByteDown($this->getAttribute(                        // line 112
$context["sub_partition"], "getIndexLength", [], "method"), 3, 1);
                        // line 116
                        echo "                                        <span>";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["index_length"] ?? null), 0, [], "array"), "html", null, true);
                        echo "</span>
                                        <span class=\"unit\">";
                        // line 117
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["index_length"] ?? null), 1, [], "array"), "html", null, true);
                        echo "</span>
                                    </td>
                                    <td>";
                        // line 119
                        echo twig_escape_filter($this->env, $this->getAttribute($context["sub_partition"], "getComment", [], "method"), "html", null, true);
                        echo "</td>
                                    <td colspan=\"";
                        // line 120
                        echo ((($context["range_or_list"] ?? null)) ? ("7") : ("6"));
                        echo "\"></td>
                                </tr>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_partition'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 123
                    echo "                        ";
                }
                // line 124
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partition'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 126
            echo "                </tbody>
            </table>
        ";
        }
        // line 129
        echo "    </fieldset>
    <fieldset class=\"tblFooters print_ignore\">
        <form action=\"tbl_structure.php\" method=\"post\">
            ";
        // line 132
        echo PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null));
        echo "
            <input type=\"hidden\" name=\"edit_partitioning\" value=\"true\" />
            ";
        // line 134
        if (twig_test_empty(($context["partitions"] ?? null))) {
            // line 135
            echo "                <input type=\"submit\" name=\"edit_partitioning\" value=\"";
            echo _gettext("Partition table");
            echo "\" />
            ";
        } else {
            // line 137
            echo "                ";
            echo PhpMyAdmin\Util::linkOrButton(($context["remove_url"] ?? null), _gettext("Remove partitioning"), ["class" => "button ajax", "id" => "remove_partitioning"]);
            // line 140
            echo "
                <input type=\"submit\" name=\"edit_partitioning\" value=\"";
            // line 141
            echo _gettext("Edit partitioning");
            echo "\" />
            ";
        }
        // line 143
        echo "        </form>
    </fieldset>
</div>
";
    }

    public function getTemplateName()
    {
        return "table/structure/display_partitions.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  364 => 143,  359 => 141,  356 => 140,  353 => 137,  347 => 135,  345 => 134,  340 => 132,  335 => 129,  330 => 126,  323 => 124,  320 => 123,  311 => 120,  307 => 119,  302 => 117,  297 => 116,  295 => 112,  294 => 111,  288 => 108,  283 => 107,  281 => 103,  280 => 102,  274 => 100,  270 => 98,  268 => 97,  264 => 96,  260 => 95,  256 => 93,  251 => 92,  249 => 91,  246 => 90,  236 => 86,  231 => 84,  227 => 83,  223 => 82,  222 => 81,  220 => 80,  218 => 79,  215 => 78,  211 => 77,  207 => 76,  202 => 74,  197 => 73,  195 => 69,  194 => 68,  188 => 65,  183 => 64,  181 => 60,  180 => 59,  174 => 57,  169 => 54,  167 => 53,  165 => 52,  163 => 51,  161 => 50,  158 => 48,  156 => 47,  151 => 46,  145 => 44,  138 => 41,  136 => 40,  131 => 39,  127 => 38,  121 => 34,  119 => 33,  115 => 32,  111 => 31,  107 => 30,  103 => 29,  98 => 28,  92 => 26,  90 => 25,  86 => 24,  80 => 20,  71 => 17,  69 => 16,  66 => 15,  64 => 14,  56 => 12,  54 => 11,  51 => 10,  45 => 8,  43 => 7,  37 => 5,  35 => 4,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "table/structure/display_partitions.twig", "/data/data/com.termux/files/usr/opt/phpmyadmin/templates/table/structure/display_partitions.twig");
    }
}
