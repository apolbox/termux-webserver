<?php

/* columns_definitions/column_indexes.twig */
class __TwigTemplate_d1ebb419b8e5de195a33e23eb2b743340d43eed07535660398df460e03c1cf57 extends Twig_Template
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
        echo ((($this->getAttribute(($context["column_meta"] ?? null), "Key", array(), "array", true, true) && ($this->getAttribute(($context["column_meta"] ?? null), "Key", array(), "array") == "PRI"))) ? (" selected=\"selected\"") : (""));
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
        echo ((($this->getAttribute(($context["column_meta"] ?? null), "Key", array(), "array", true, true) && ($this->getAttribute(($context["column_meta"] ?? null), "Key", array(), "array") == "UNI"))) ? (" selected=\"selected\"") : (""));
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
        echo ((($this->getAttribute(($context["column_meta"] ?? null), "Key", array(), "array", true, true) && ($this->getAttribute(($context["column_meta"] ?? null), "Key", array(), "array") == "MUL"))) ? (" selected=\"selected\"") : (""));
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
        echo ((($this->getAttribute(($context["column_meta"] ?? null), "Key", array(), "array", true, true) && ($this->getAttribute(($context["column_meta"] ?? null), "Key", array(), "array") == "FULLTEXT"))) ? (" selected=\"selected\"") : (""));
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
        echo ((($this->getAttribute(($context["column_meta"] ?? null), "Key", array(), "array", true, true) && ($this->getAttribute(($context["column_meta"] ?? null), "Key", array(), "array") == "SPATIAL"))) ? (" selected=\"selected\"") : (""));
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
        return array (  83 => 21,  78 => 20,  72 => 17,  67 => 16,  61 => 13,  56 => 12,  50 => 9,  45 => 8,  39 => 5,  34 => 4,  30 => 3,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "columns_definitions/column_indexes.twig", "/storage/emulated/0/www/phpmyadmin/templates/columns_definitions/column_indexes.twig");
    }
}
