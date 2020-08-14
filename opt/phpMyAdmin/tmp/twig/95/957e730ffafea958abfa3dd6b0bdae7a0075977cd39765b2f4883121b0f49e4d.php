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

/* columns_definitions/column_indexes.twig */
class __TwigTemplate_f45dbbc5eb889f8781652ce94ef2ac7b854eca8e6cce6fa0b5be5168de9f9d15 extends \Twig\Template
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
        echo "<select name=\"field_key[";
        echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
        echo "]\"
    id=\"field_";
        // line 2
        echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
        echo "_";
        echo twig_escape_filter($this->env, (($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
        echo "\" data-index=\"\">
    <option value=\"none_";
        // line 3
        echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
        echo "\">---</option>
    <option value=\"primary_";
        // line 4
        echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
        echo "\" title=\"";
        echo _gettext("Primary");
        echo "\"";
        // line 5
        echo ((($this->getAttribute(($context["column_meta"] ?? null), "Key", [], "array", true, true) && ($this->getAttribute(($context["column_meta"] ?? null), "Key", [], "array") == "PRI"))) ? (" selected=\"selected\"") : (""));
        echo ">
        PRIMARY
    </option>
    <option value=\"unique_";
        // line 8
        echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
        echo "\" title=\"";
        echo _gettext("Unique");
        echo "\"";
        // line 9
        echo ((($this->getAttribute(($context["column_meta"] ?? null), "Key", [], "array", true, true) && ($this->getAttribute(($context["column_meta"] ?? null), "Key", [], "array") == "UNI"))) ? (" selected=\"selected\"") : (""));
        echo ">
        UNIQUE
    </option>
    <option value=\"index_";
        // line 12
        echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
        echo "\" title=\"";
        echo _gettext("Index");
        echo "\"";
        // line 13
        echo ((($this->getAttribute(($context["column_meta"] ?? null), "Key", [], "array", true, true) && ($this->getAttribute(($context["column_meta"] ?? null), "Key", [], "array") == "MUL"))) ? (" selected=\"selected\"") : (""));
        echo ">
        INDEX
    </option>
    <option value=\"fulltext_";
        // line 16
        echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
        echo "\" title=\"";
        echo _gettext("Fulltext");
        echo "\"";
        // line 17
        echo ((($this->getAttribute(($context["column_meta"] ?? null), "Key", [], "array", true, true) && ($this->getAttribute(($context["column_meta"] ?? null), "Key", [], "array") == "FULLTEXT"))) ? (" selected=\"selected\"") : (""));
        echo ">
        FULLTEXT
    </option>
    <option value=\"spatial_";
        // line 20
        echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
        echo "\" title=\"";
        echo _gettext("Spatial");
        echo "\"";
        // line 21
        echo ((($this->getAttribute(($context["column_meta"] ?? null), "Key", [], "array", true, true) && ($this->getAttribute(($context["column_meta"] ?? null), "Key", [], "array") == "SPATIAL"))) ? (" selected=\"selected\"") : (""));
        echo ">
        SPATIAL
    </option>
</select>
";
    }

    public function getTemplateName()
    {
        return "columns_definitions/column_indexes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 21,  89 => 20,  83 => 17,  78 => 16,  72 => 13,  67 => 12,  61 => 9,  56 => 8,  50 => 5,  45 => 4,  41 => 3,  35 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "columns_definitions/column_indexes.twig", "/data/data/com.termux/files/usr/opt/phpmyadmin/templates/columns_definitions/column_indexes.twig");
    }
}
