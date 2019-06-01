<?php

/* server/databases/table_row.twig */
class __TwigTemplate_82aa72739c3ab303a56853ff43dfd41e5eb9ceb3607f2d2ab3d6f5cce3ae7217 extends Twig_Template
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
        echo "<tr";
        if (($context["tr_class"] ?? null)) {
            echo " class=\"";
            echo twig_escape_filter($this->env, ($context["tr_class"] ?? null), "html", null, true);
            echo "\"";
        }
        echo " data-filter-row=\"";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute(($context["current"] ?? null), "SCHEMA_NAME", array(), "array")), "html", null, true);
        echo "\">
    ";
        // line 2
        if ((($context["is_superuser"] ?? null) || ($context["allow_user_drop_database"] ?? null))) {
            // line 3
            echo "        <td class=\"tool\">
            <input type=\"checkbox\" name=\"selected_dbs[]\" class=\"checkall\" title=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute(($context["current"] ?? null), "SCHEMA_NAME", array(), "array"), "html", null, true);
            echo "\" value=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute(($context["current"] ?? null), "SCHEMA_NAME", array(), "array"), "html", null, true);
            echo "\"";
            // line 7
            if (($context["is_system_schema"] ?? null)) {
                echo " disabled=\"disabled\"";
            }
            echo " />
        </td>
    ";
        }
        // line 10
        echo "    <td class=\"name\">
        <a href=\"";
        // line 11
        echo PhpMyAdmin\Util::getScriptNameForOption(($context["default_tab_database"] ?? null), "database");
        // line 12
        echo PhpMyAdmin\Url::getCommon(array("db" => $this->getAttribute(($context["current"] ?? null), "SCHEMA_NAME", array(), "array")));
        echo "\" title=\"";
        // line 13
        echo twig_escape_filter($this->env, sprintf(_gettext("Jump to database '%s'"), twig_escape_filter($this->env, $this->getAttribute(($context["current"] ?? null), "SCHEMA_NAME", array(), "array"))), "html", null, true);
        echo "\">
            ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["current"] ?? null), "SCHEMA_NAME", array(), "array"), "html", null, true);
        echo "
        </a>
    </td>
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["column_order"] ?? null));
        foreach ($context['_seq'] as $context["stat_name"] => $context["stat"]) {
            if (twig_in_filter($context["stat_name"], twig_get_array_keys_filter(($context["current"] ?? null)))) {
                // line 18
                echo "        ";
                if (($this->getAttribute($context["stat"], "format", array(), "array") === "byte")) {
                    // line 19
                    echo "            ";
                    $context["byte_format"] = PhpMyAdmin\Util::formatByteDown($this->getAttribute(($context["current"] ?? null), $context["stat_name"], array(), "array"), 3, 1);
                    // line 20
                    echo "            ";
                    $context["value"] = $this->getAttribute(($context["byte_format"] ?? null), 0, array(), "array");
                    // line 21
                    echo "            ";
                    $context["unit"] = $this->getAttribute(($context["byte_format"] ?? null), 1, array(), "array");
                    // line 22
                    echo "        ";
                } elseif (($this->getAttribute($context["stat"], "format", array(), "array") === "number")) {
                    // line 23
                    echo "            ";
                    $context["value"] = PhpMyAdmin\Util::formatNumber($this->getAttribute(($context["current"] ?? null), $context["stat_name"], array(), "array"), 0);
                    // line 24
                    echo "        ";
                } else {
                    // line 25
                    echo "            ";
                    $context["value"] = htmlentities($this->getAttribute(($context["current"] ?? null), $context["stat_name"], array(), "array"), 0);
                    // line 26
                    echo "        ";
                }
                // line 27
                echo "
        <td class=\"value\">
            ";
                // line 29
                if ($this->getAttribute($context["stat"], "description_function", array(), "array", true, true)) {
                    // line 30
                    echo "                <dfn title=\"";
                    echo twig_escape_filter($this->env, PhpMyAdmin\Charsets::getCollationDescr($this->getAttribute(($context["current"] ?? null), $context["stat_name"], array(), "array")), "html", null, true);
                    echo "\">
                    ";
                    // line 31
                    echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
                    echo "
                </dfn>
            ";
                } else {
                    // line 34
                    echo "                ";
                    echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
                    echo "
            ";
                }
                // line 36
                echo "        </td>
        ";
                // line 37
                if (($this->getAttribute($context["stat"], "format", array(), "array") === "byte")) {
                    // line 38
                    echo "            <td class=\"unit\">";
                    echo twig_escape_filter($this->env, ($context["unit"] ?? null), "html", null, true);
                    echo "</td>
        ";
                }
                // line 40
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['stat_name'], $context['stat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
    ";
        // line 42
        if (($context["master_replication_status"] ?? null)) {
            // line 43
            echo "        <td class=\"tool center\">
            ";
            // line 44
            echo ($context["master_replication"] ?? null);
            echo "
        </td>
    ";
        }
        // line 47
        echo "
    ";
        // line 48
        if (($context["slave_replication_status"] ?? null)) {
            // line 49
            echo "        <td class=\"tool center\">
            ";
            // line 50
            echo ($context["slave_replication"] ?? null);
            echo "
        </td>
    ";
        }
        // line 53
        echo "
    <td class=\"tool\">
        <a class=\"server_databases\" data=\"";
        // line 56
        echo PhpMyAdmin\Sanitize::jsFormat($this->getAttribute(($context["current"] ?? null), "SCHEMA_NAME", array(), "array"));
        echo "\" href=\"server_privileges.php";
        // line 57
        echo PhpMyAdmin\Url::getCommon(array("db" => $this->getAttribute(        // line 58
($context["current"] ?? null), "SCHEMA_NAME", array(), "array"), "checkprivsdb" => $this->getAttribute(        // line 59
($context["current"] ?? null), "SCHEMA_NAME", array(), "array")));
        // line 60
        echo "\" title=\"";
        // line 61
        echo twig_escape_filter($this->env, sprintf(_gettext("Check privileges for database \"%s\"."), twig_escape_filter($this->env, $this->getAttribute(($context["current"] ?? null), "SCHEMA_NAME", array(), "array"))), "html", null, true);
        echo "\">
            ";
        // line 62
        echo PhpMyAdmin\Util::getIcon("s_rights", _gettext("Check privileges"));
        echo "
        </a>
    </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "server/databases/table_row.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 62,  181 => 61,  179 => 60,  177 => 59,  176 => 58,  175 => 57,  172 => 56,  168 => 53,  162 => 50,  159 => 49,  157 => 48,  154 => 47,  148 => 44,  145 => 43,  143 => 42,  140 => 41,  133 => 40,  127 => 38,  125 => 37,  122 => 36,  116 => 34,  110 => 31,  105 => 30,  103 => 29,  99 => 27,  96 => 26,  93 => 25,  90 => 24,  87 => 23,  84 => 22,  81 => 21,  78 => 20,  75 => 19,  72 => 18,  67 => 17,  61 => 14,  57 => 13,  54 => 12,  52 => 11,  49 => 10,  41 => 7,  38 => 6,  35 => 5,  32 => 3,  30 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "server/databases/table_row.twig", "/storage/emulated/0/www/phpmyadmin/templates/server/databases/table_row.twig");
    }
}
