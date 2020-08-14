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

/* table/structure/action_row_in_structure_table.twig */
class __TwigTemplate_40743e0d260306ddf746f14a89e39e481f5adf5e4d881f4c3e841d3c33b9df6a extends \Twig\Template
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
        echo "<li class=\"";
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo "\">
";
        // line 2
        if (((((($context["type"] ?? null) == "text") || (        // line 3
($context["type"] ?? null) == "blob")) || (        // line 4
($context["tbl_storage_engine"] ?? null) == "ARCHIVE")) ||         // line 5
($context["has_field"] ?? null))) {
            // line 6
            echo "    ";
            echo $this->getAttribute(($context["titles"] ?? null), ("No" . ($context["action"] ?? null)), [], "array");
            echo "
";
        } else {
            // line 8
            echo "    <a rel=\"samepage\" class=\"ajax add_key print_ignore";
            // line 9
            if (($context["has_link_class"] ?? null)) {
                // line 10
                echo "            add_primary_key_anchor";
            } elseif ((            // line 11
($context["action"] ?? null) == "Index")) {
                // line 12
                echo "            add_index_anchor";
            } elseif ((            // line 13
($context["action"] ?? null) == "Unique")) {
                // line 14
                echo "            add_unique_anchor";
            } elseif ((            // line 15
($context["action"] ?? null) == "Spatial")) {
                // line 16
                echo "            add_spatial_anchor";
            }
            // line 17
            echo "\" href=\"tbl_structure.php\" data-post=\"";
            echo ($context["url_query"] ?? null);
            // line 18
            echo "&amp;add_key=1&amp;sql_query=";
            // line 19
            echo twig_escape_filter($this->env, twig_urlencode_filter(((((((("ALTER TABLE " . PhpMyAdmin\Util::backquote(            // line 20
($context["table"] ?? null))) . ((            // line 21
($context["is_primary"] ?? null)) ? (((($context["primary"] ?? null)) ? (" DROP PRIMARY KEY,") : (""))) : (""))) . " ") .             // line 23
($context["syntax"] ?? null)) . "(") . PhpMyAdmin\Util::backquote($this->getAttribute(            // line 25
($context["row"] ?? null), "Field", [], "array"))) . ");")), "html", null, true);
            // line 27
            echo "&amp;message_to_show=";
            echo twig_escape_filter($this->env, twig_urlencode_filter(sprintf(($context["message"] ?? null), twig_escape_filter($this->env, $this->getAttribute(($context["row"] ?? null), "Field", [], "array")))), "html", null, true);
            echo "\">
        ";
            // line 28
            echo $this->getAttribute(($context["titles"] ?? null), ($context["action"] ?? null), [], "array");
            echo "
    </a>
";
        }
        // line 31
        echo "</li>
";
    }

    public function getTemplateName()
    {
        return "table/structure/action_row_in_structure_table.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 31,  81 => 28,  76 => 27,  74 => 25,  73 => 23,  72 => 21,  71 => 20,  70 => 19,  68 => 18,  65 => 17,  62 => 16,  60 => 15,  58 => 14,  56 => 13,  54 => 12,  52 => 11,  50 => 10,  48 => 9,  46 => 8,  40 => 6,  38 => 5,  37 => 4,  36 => 3,  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "table/structure/action_row_in_structure_table.twig", "/data/data/com.termux/files/usr/opt/phpmyadmin/templates/table/structure/action_row_in_structure_table.twig");
    }
}
