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

/* columns_definitions/column_default.twig */
class __TwigTemplate_e52823536282102b52930bd9cea64b158de238f93db784ea6b95f77e4eadbf42 extends \Twig\Template
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
        // line 3
        ob_start(function () { return ''; });
        echo _pgettext(        "for default", "None");
        $context["translation"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 4
        $context["default_options"] = ["NONE" =>         // line 5
($context["translation"] ?? null), "USER_DEFINED" => _gettext("As defined:"), "NULL" => "NULL", "CURRENT_TIMESTAMP" => "CURRENT_TIMESTAMP"];
        // line 10
        echo "
";
        // line 12
        $context["default_value"] = "";
        // line 13
        if ($this->getAttribute(($context["column_meta"] ?? null), "DefaultValue", [], "array", true, true)) {
            // line 14
            echo "    ";
            $context["default_value"] = $this->getAttribute(($context["column_meta"] ?? null), "DefaultValue", [], "array");
        }
        // line 16
        if ((($context["type_upper"] ?? null) == "BIT")) {
            // line 17
            echo "    ";
            $context["default_value"] = PhpMyAdmin\Util::convertBitDefaultValue($this->getAttribute(($context["column_meta"] ?? null), "DefaultValue", [], "array"));
        } elseif (((        // line 18
($context["type_upper"] ?? null) == "BINARY") || (($context["type_upper"] ?? null) == "VARBINARY"))) {
            // line 19
            echo "    ";
            $context["default_value"] = bin2hex($this->getAttribute(($context["column_meta"] ?? null), "DefaultValue", [], "array"));
        }
        // line 21
        echo "
<select name=\"field_default_type[";
        // line 22
        echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
        echo "]\"
    id=\"field_";
        // line 23
        echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
        echo "_";
        echo twig_escape_filter($this->env, (($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
        echo "\"
    class=\"default_type\">
    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["default_options"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 26
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\"";
            // line 27
            if (($this->getAttribute(($context["column_meta"] ?? null), "DefaultType", [], "array", true, true) && ($this->getAttribute(            // line 28
($context["column_meta"] ?? null), "DefaultType", [], "array") == $context["key"]))) {
                // line 29
                echo "                selected=\"selected\"";
            }
            // line 30
            echo ">
            ";
            // line 31
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "
        </option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</select>
";
        // line 35
        if ((($context["char_editing"] ?? null) == "textarea")) {
            // line 36
            echo "    <textarea name=\"field_default_value[";
            echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
            echo "]\"
        cols=\"15\"
        class=\"textfield
        default_value\">";
            // line 39
            echo twig_escape_filter($this->env, ($context["default_value"] ?? null), "html", null, true);
            echo "</textarea>
";
        } else {
            // line 41
            echo "    <input type=\"text\"
        name=\"field_default_value[";
            // line 42
            echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
            echo "]\"
        size=\"12\"
        value=\"";
            // line 44
            echo twig_escape_filter($this->env, ($context["default_value"] ?? null), "html", null, true);
            echo "\"
        class=\"textfield default_value\" />
";
        }
    }

    public function getTemplateName()
    {
        return "columns_definitions/column_default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 44,  119 => 42,  116 => 41,  111 => 39,  104 => 36,  102 => 35,  99 => 34,  90 => 31,  87 => 30,  84 => 29,  82 => 28,  81 => 27,  77 => 26,  73 => 25,  66 => 23,  62 => 22,  59 => 21,  55 => 19,  53 => 18,  50 => 17,  48 => 16,  44 => 14,  42 => 13,  40 => 12,  37 => 10,  35 => 5,  34 => 4,  30 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "columns_definitions/column_default.twig", "/data/data/com.termux/files/usr/opt/phpmyadmin/templates/columns_definitions/column_default.twig");
    }
}
