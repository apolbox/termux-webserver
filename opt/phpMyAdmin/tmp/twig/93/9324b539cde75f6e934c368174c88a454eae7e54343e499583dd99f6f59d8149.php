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

/* table/structure/check_all_table_column.twig */
class __TwigTemplate_a39ed32b666083b7fceefab7f0b5182d28cfba98a9965ab8739e94cf44774a6c extends \Twig\Template
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
        echo "<div class=\"print_ignore\">
    ";
        // line 2
        $this->loadTemplate("select_all.twig", "table/structure/check_all_table_column.twig", 2)->display(twig_to_array(["pma_theme_image" =>         // line 3
($context["pma_theme_image"] ?? null), "text_dir" =>         // line 4
($context["text_dir"] ?? null), "form_name" => "fieldsForm"]));
        // line 7
        echo "
    ";
        // line 8
        echo PhpMyAdmin\Util::getButtonOrImage("submit_mult", "mult_submit", _gettext("Browse"), "b_browse", "browse");
        // line 14
        echo "

    ";
        // line 16
        if (( !($context["tbl_is_view"] ?? null) &&  !($context["db_is_system_schema"] ?? null))) {
            // line 17
            echo "        ";
            echo PhpMyAdmin\Util::getButtonOrImage("submit_mult", "mult_submit change_columns_anchor ajax", _gettext("Change"), "b_edit", "change");
            // line 23
            echo "
        ";
            // line 24
            echo PhpMyAdmin\Util::getButtonOrImage("submit_mult", "mult_submit", _gettext("Drop"), "b_drop", "drop");
            // line 30
            echo "

        ";
            // line 32
            if ((($context["tbl_storage_engine"] ?? null) != "ARCHIVE")) {
                // line 33
                echo "            ";
                echo PhpMyAdmin\Util::getButtonOrImage("submit_mult", "mult_submit", _gettext("Primary"), "b_primary", "primary");
                // line 39
                echo "
            ";
                // line 40
                echo PhpMyAdmin\Util::getButtonOrImage("submit_mult", "mult_submit", _gettext("Unique"), "b_unique", "unique");
                // line 46
                echo "
            ";
                // line 47
                echo PhpMyAdmin\Util::getButtonOrImage("submit_mult", "mult_submit", _gettext("Index"), "b_index", "index");
                // line 53
                echo "
            ";
                // line 54
                echo PhpMyAdmin\Util::getButtonOrImage("submit_mult", "mult_submit", _gettext("Fulltext"), "b_ftext", "ftext");
                // line 60
                echo "

            ";
                // line 62
                if (( !twig_test_empty(($context["tbl_storage_engine"] ?? null)) && (((                // line 63
($context["tbl_storage_engine"] ?? null) == "MYISAM") || (                // line 64
($context["tbl_storage_engine"] ?? null) == "ARIA")) || (                // line 65
($context["tbl_storage_engine"] ?? null) == "MARIA")))) {
                    // line 66
                    echo "                ";
                    echo PhpMyAdmin\Util::getButtonOrImage("submit_mult", "mult_submit", _gettext("Fulltext"), "b_ftext", "ftext");
                    // line 72
                    echo "
            ";
                }
                // line 74
                echo "
            ";
                // line 75
                if (($context["central_columns_work"] ?? null)) {
                    // line 76
                    echo "                ";
                    echo PhpMyAdmin\Util::getButtonOrImage("submit_mult", "mult_submit", _gettext("Add to central columns"), "centralColumns_add", "add_to_central_columns");
                    // line 82
                    echo "
                ";
                    // line 83
                    echo PhpMyAdmin\Util::getButtonOrImage("submit_mult", "mult_submit", _gettext("Remove from central columns"), "centralColumns_delete", "remove_from_central_columns");
                    // line 89
                    echo "
            ";
                }
                // line 91
                echo "        ";
            }
            // line 92
            echo "    ";
        }
        // line 93
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "table/structure/check_all_table_column.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 93,  116 => 92,  113 => 91,  109 => 89,  107 => 83,  104 => 82,  101 => 76,  99 => 75,  96 => 74,  92 => 72,  89 => 66,  87 => 65,  86 => 64,  85 => 63,  84 => 62,  80 => 60,  78 => 54,  75 => 53,  73 => 47,  70 => 46,  68 => 40,  65 => 39,  62 => 33,  60 => 32,  56 => 30,  54 => 24,  51 => 23,  48 => 17,  46 => 16,  42 => 14,  40 => 8,  37 => 7,  35 => 4,  34 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "table/structure/check_all_table_column.twig", "/data/data/com.termux/files/usr/opt/phpmyadmin/templates/table/structure/check_all_table_column.twig");
    }
}
