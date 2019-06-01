<?php

/* server/databases/table_header.twig */
class __TwigTemplate_cb302ac6e245b35c3b10d764c323f206239639570fc2aa655783a01cd6571a6f extends Twig_Template
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
        echo "<thead>
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
            <a href=\"server_databases.php";
        // line 7
        echo PhpMyAdmin\Url::getCommon(($context["url_params"] ?? null));
        echo "\">
                ";
        // line 8
        echo _gettext("Database");
        // line 9
        echo "                ";
        echo (((($context["sort_by"] ?? null) == "SCHEMA_NAME")) ? (PhpMyAdmin\Util::getImage(("s_" .         // line 10
($context["sort_order"] ?? null)),         // line 11
($context["sort_order_text"] ?? null))) : (""));
        // line 12
        echo "
            </a>
        </th>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["column_order"] ?? null));
        foreach ($context['_seq'] as $context["stat_name"] => $context["stat"]) {
            if (twig_in_filter($context["stat_name"], twig_get_array_keys_filter(($context["first_database"] ?? null)))) {
                // line 16
                echo "            ";
                $context["url_params"] = twig_array_merge(($context["url_params"] ?? null), array("sort_by" =>                 // line 17
$context["stat_name"], "sort_order" => ((((                // line 18
($context["sort_by"] ?? null) == $context["stat_name"]) && (($context["sort_order"] ?? null) == "desc"))) ? ("asc") : ("desc"))));
                // line 20
                echo "
            <th";
                // line 21
                echo ((($this->getAttribute($context["stat"], "format", array(), "array") === "byte")) ? (" colspan=\"2\"") : (""));
                echo ">
                <a href=\"server_databases.php";
                // line 22
                echo PhpMyAdmin\Url::getCommon(($context["url_params"] ?? null));
                echo "\">
                    ";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["stat"], "disp_name", array(), "array"), "html", null, true);
                echo "
                    ";
                // line 24
                echo (((($context["sort_by"] ?? null) == $context["stat_name"])) ? (PhpMyAdmin\Util::getImage(("s_" .                 // line 25
($context["sort_order"] ?? null)),                 // line 26
($context["sort_order_text"] ?? null))) : (""));
                // line 27
                echo "
                </a>
            </th>
        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['stat_name'], $context['stat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        ";
        if (($context["master_replication"] ?? null)) {
            // line 32
            echo "            <th>";
            echo _gettext("Master replication");
            echo "</th>
        ";
        }
        // line 34
        echo "        ";
        if (($context["slave_replication"] ?? null)) {
            // line 35
            echo "            <th>";
            echo _gettext("Slave replication");
            echo "</th>
        ";
        }
        // line 37
        echo "        <th>";
        echo _gettext("Action");
        echo "</th>
    </tr>
</thead>
";
    }

    public function getTemplateName()
    {
        return "server/databases/table_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 37,  99 => 35,  96 => 34,  90 => 32,  87 => 31,  77 => 27,  75 => 26,  74 => 25,  73 => 24,  69 => 23,  65 => 22,  61 => 21,  58 => 20,  56 => 18,  55 => 17,  53 => 16,  48 => 15,  43 => 12,  41 => 11,  40 => 10,  38 => 9,  36 => 8,  32 => 7,  29 => 6,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "server/databases/table_header.twig", "/storage/emulated/0/www/phpmyadmin/templates/server/databases/table_header.twig");
    }
}
