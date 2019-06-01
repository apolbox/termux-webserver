<?php

/* columns_definitions/column_default.twig */
class __TwigTemplate_47c51bf8eb289c456cec3841cd41777634969c4682f61662a4492d8e8bfa5257 extends Twig_Template
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
        // line 3
        ob_start();
        echo _pgettext(        "for default", "None");
        $context["translation"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 4
        $context["default_options"] = array("NONE" =>         // line 5
($context["translation"] ?? null), "USER_DEFINED" => _gettext("As defined:"), "NULL" => "NULL", "CURRENT_TIMESTAMP" => "CURRENT_TIMESTAMP");
        // line 10
        echo "
";
        // line 12
        $context["default_value"] = "";
        // line 13
        if ($this->getAttribute(($context["column_meta"] ?? null), "DefaultValue", array(), "array", true, true)) {
            // line 14
            echo "    ";
            $context["default_value"] = $this->getAttribute(($context["column_meta"] ?? null), "DefaultValue", array(), "array");
        }
        // line 16
        if ((($context["type_upper"] ?? null) == "BIT")) {
            // line 17
            echo "    ";
            $context["default_value"] = PhpMyAdmin\Util::convertBitDefaultValue($this->getAttribute(($context["column_meta"] ?? null), "DefaultValue", array(), "array"));
        } elseif (((        // line 18
($context["type_upper"] ?? null) == "BINARY") || (($context["type_upper"] ?? null) == "VARBINARY"))) {
            // line 19
            echo "    ";
            $context["default_value"] = bin2hex($this->getAttribute(($context["column_meta"] ?? null), "DefaultValue", array(), "array"));
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
            if (($this->getAttribute(($context["column_meta"] ?? null), "DefaultType", array(), "array", true, true) && ($this->getAttribute(            // line 28
($context["column_meta"] ?? null), "DefaultType", array(), "array") == $context["key"]))) {
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
        return array (  113 => 44,  108 => 42,  105 => 41,  100 => 39,  93 => 36,  91 => 35,  88 => 34,  79 => 31,  76 => 30,  73 => 29,  71 => 28,  70 => 27,  66 => 26,  62 => 25,  55 => 23,  51 => 22,  48 => 21,  44 => 19,  42 => 18,  39 => 17,  37 => 16,  33 => 14,  31 => 13,  29 => 12,  26 => 10,  24 => 5,  23 => 4,  19 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "columns_definitions/column_default.twig", "/storage/emulated/0/www/phpmyadmin/templates/columns_definitions/column_default.twig");
    }
}
