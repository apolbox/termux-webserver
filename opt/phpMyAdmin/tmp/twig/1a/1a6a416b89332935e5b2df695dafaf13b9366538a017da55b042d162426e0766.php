<?php

/* server/databases/databases_footer.twig */
class __TwigTemplate_bdb844edcaa960649c3a2ec86741f8c2ad89eb82f48af92f9d56b1241aa9fb2d extends Twig_Template
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
        echo "<tfoot>
    <tr>
        ";
        // line 3
        if ((($context["is_superuser"] ?? null) || ($context["allow_user_drop_database"] ?? null))) {
            // line 4
            echo "            <th></th>
        ";
        }
        // line 6
        echo "        <th>
            ";
        // line 7
        echo _gettext("Total");
        echo ": <span id=\"filter-rows-count\">";
        // line 8
        echo twig_escape_filter($this->env, ($context["database_count"] ?? null), "html", null, true);
        // line 9
        echo "</span>
        </th>
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["column_order"] ?? null));
        foreach ($context['_seq'] as $context["stat_name"] => $context["stat"]) {
            if (twig_in_filter($context["stat_name"], twig_get_array_keys_filter(($context["first_database"] ?? null)))) {
                // line 12
                echo "            ";
                if (($this->getAttribute($context["stat"], "format", array(), "array") === "byte")) {
                    // line 13
                    echo "                ";
                    $context["byte_format"] = PhpMyAdmin\Util::formatByteDown($this->getAttribute($context["stat"], "footer", array(), "array"), 3, 1);
                    // line 14
                    echo "                ";
                    $context["value"] = $this->getAttribute(($context["byte_format"] ?? null), 0, array(), "array");
                    // line 15
                    echo "                ";
                    $context["unit"] = $this->getAttribute(($context["byte_format"] ?? null), 1, array(), "array");
                    // line 16
                    echo "            ";
                } elseif (($this->getAttribute($context["stat"], "format", array(), "array") === "number")) {
                    // line 17
                    echo "                ";
                    $context["value"] = PhpMyAdmin\Util::formatNumber($this->getAttribute($context["stat"], "footer", array(), "array"), 0);
                    // line 18
                    echo "            ";
                } else {
                    // line 19
                    echo "                ";
                    $context["value"] = htmlentities($this->getAttribute($context["stat"], "footer", array(), "array"), 0);
                    // line 20
                    echo "            ";
                }
                // line 21
                echo "
            <th class=\"value\">
                ";
                // line 23
                if ($this->getAttribute($context["stat"], "description_function", array(), "array", true, true)) {
                    // line 24
                    echo "                    <dfn title=\"";
                    echo twig_escape_filter($this->env, PhpMyAdmin\Charsets::getCollationDescr($this->getAttribute($context["stat"], "footer", array(), "array")), "html", null, true);
                    echo "\">
                        ";
                    // line 25
                    echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
                    echo "
                    </dfn>
                ";
                } else {
                    // line 28
                    echo "                    ";
                    echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
                    echo "
                ";
                }
                // line 30
                echo "            </th>
            ";
                // line 31
                if (($this->getAttribute($context["stat"], "format", array(), "array") === "byte")) {
                    // line 32
                    echo "                <th class=\"unit\">";
                    echo twig_escape_filter($this->env, ($context["unit"] ?? null), "html", null, true);
                    echo "</th>
            ";
                }
                // line 34
                echo "        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['stat_name'], $context['stat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        ";
        if (($context["master_replication"] ?? null)) {
            // line 36
            echo "            <th></th>
        ";
        }
        // line 38
        echo "        ";
        if (($context["slave_replication"] ?? null)) {
            // line 39
            echo "            <th></th>
        ";
        }
        // line 41
        echo "        <th></th>
    </tr>
</tfoot>
</table>
</div>

";
        // line 48
        if ((($context["is_superuser"] ?? null) || ($context["allow_user_drop_database"] ?? null))) {
            // line 49
            echo "    ";
            $this->loadTemplate("select_all.twig", "server/databases/databases_footer.twig", 49)->display(array("pma_theme_image" =>             // line 50
($context["pma_theme_image"] ?? null), "text_dir" =>             // line 51
($context["text_dir"] ?? null), "form_name" => "dbStatsForm"));
            // line 54
            echo "
    ";
            // line 55
            echo PhpMyAdmin\Util::getButtonOrImage("", "mult_submit ajax", _gettext("Drop"), "b_deltbl");
            // line 60
            echo "
";
        }
        // line 62
        echo "
";
        // line 64
        if (twig_test_empty(($context["dbstats"] ?? null))) {
            // line 65
            echo "    ";
            echo call_user_func_array($this->env->getFunction('Message_notice')->getCallable(), array(_gettext("Note: Enabling the database statistics here might cause heavy traffic between the web server and the MySQL server.")));
            echo "

    ";
            // line 67
            ob_start();
            // line 68
            echo "        <strong>";
            echo _gettext("Enable statistics");
            echo "</strong>
    ";
            $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 70
            echo "    ";
            $context["items"] = array(0 => array("content" =>             // line 71
($context["content"] ?? null), "class" => "li_switch_dbstats", "url" => array("href" => ("server_databases.php" . PhpMyAdmin\Url::getCommon(array("dbstats" => "1"))), "title" => _gettext("Enable statistics"))));
            // line 78
            echo "    ";
            $this->loadTemplate("list/unordered.twig", "server/databases/databases_footer.twig", 78)->display(array("items" => ($context["items"] ?? null)));
        }
        // line 80
        echo "</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "server/databases/databases_footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 80,  175 => 78,  173 => 71,  171 => 70,  165 => 68,  163 => 67,  157 => 65,  155 => 64,  152 => 62,  148 => 60,  146 => 55,  143 => 54,  141 => 51,  140 => 50,  138 => 49,  136 => 48,  128 => 41,  124 => 39,  121 => 38,  117 => 36,  114 => 35,  107 => 34,  101 => 32,  99 => 31,  96 => 30,  90 => 28,  84 => 25,  79 => 24,  77 => 23,  73 => 21,  70 => 20,  67 => 19,  64 => 18,  61 => 17,  58 => 16,  55 => 15,  52 => 14,  49 => 13,  46 => 12,  41 => 11,  37 => 9,  35 => 8,  32 => 7,  29 => 6,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "server/databases/databases_footer.twig", "/storage/emulated/0/www/phpmyadmin/templates/server/databases/databases_footer.twig");
    }
}
