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

/* table/structure/optional_action_links.twig */
class __TwigTemplate_78334127b7caedf7c61b717a829190031a6d40e580e139094a1adad3a92098d0 extends \Twig\Template
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
        echo "<a href=\"#\" id=\"printView\">";
        echo PhpMyAdmin\Util::getIcon("b_print", _gettext("Print"), true);
        echo "</a>
";
        // line 2
        if (( !($context["tbl_is_view"] ?? null) &&  !($context["db_is_system_schema"] ?? null))) {
            // line 3
            echo "    ";
            // line 4
            echo "    ";
            if (((($context["mysql_int_version"] ?? null) < 80000) || ($context["is_mariadb"] ?? null))) {
                // line 5
                echo "        <a href=\"sql.php\" data-post=\"";
                echo ($context["url_query"] ?? null);
                echo "&amp;session_max_rows=all&amp;sql_query=";
                // line 6
                echo twig_escape_filter($this->env, twig_urlencode_filter((("SELECT * FROM " . PhpMyAdmin\Util::backquote(($context["table"] ?? null))) . " PROCEDURE ANALYSE()")), "html", null, true);
                // line 7
                echo "\" style=\"margin-right: 0;\">
            ";
                // line 8
                echo PhpMyAdmin\Util::getIcon("b_tblanalyse", _gettext("Propose table structure"), true);
                // line 12
                echo "
        </a>
        ";
                // line 14
                echo PhpMyAdmin\Util::showMySQLDocu("procedure_analyse");
                echo "
    ";
            }
            // line 16
            echo "    ";
            if (($context["is_active"] ?? null)) {
                // line 17
                echo "        <a href=\"tbl_tracking.php";
                echo ($context["url_query"] ?? null);
                echo "\">
            ";
                // line 18
                echo PhpMyAdmin\Util::getIcon("eye", _gettext("Track table"), true);
                echo "
        </a>
    ";
            }
            // line 21
            echo "    <a href=\"#\" id=\"move_columns_anchor\">
        ";
            // line 22
            echo PhpMyAdmin\Util::getIcon("b_move", _gettext("Move columns"), true);
            echo "
    </a>
    <a href=\"normalization.php";
            // line 24
            echo ($context["url_query"] ?? null);
            echo "\">
        ";
            // line 25
            echo PhpMyAdmin\Util::getIcon("normalize", _gettext("Normalize"), true);
            echo "
    </a>
";
        }
        // line 28
        if ((($context["tbl_is_view"] ?? null) &&  !($context["db_is_system_schema"] ?? null))) {
            // line 29
            echo "    ";
            if (($context["is_active"] ?? null)) {
                // line 30
                echo "        <a href=\"tbl_tracking.php";
                echo ($context["url_query"] ?? null);
                echo "\">
            ";
                // line 31
                echo PhpMyAdmin\Util::getIcon("eye", _gettext("Track view"), true);
                echo "
        </a>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "table/structure/optional_action_links.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 31,  99 => 30,  96 => 29,  94 => 28,  88 => 25,  84 => 24,  79 => 22,  76 => 21,  70 => 18,  65 => 17,  62 => 16,  57 => 14,  53 => 12,  51 => 8,  48 => 7,  46 => 6,  42 => 5,  39 => 4,  37 => 3,  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "table/structure/optional_action_links.twig", "/data/data/com.termux/files/usr/opt/phpmyadmin/templates/table/structure/optional_action_links.twig");
    }
}
