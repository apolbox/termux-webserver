<?php

/* columns_definitions/column_name.twig */
class __TwigTemplate_d43002ae572f33658bbad46c52cc482db1e91282a9c27a575f5773b88d628874 extends Twig_Template
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
        $context["title"] = "";
        // line 2
        if ($this->getAttribute(($context["column_meta"] ?? null), "column_status", array(), "array", true, true)) {
            // line 3
            echo "    ";
            if ($this->getAttribute($this->getAttribute(($context["column_meta"] ?? null), "column_status", array(), "array"), "isReferenced", array(), "array")) {
                // line 4
                echo "        ";
                $context["title"] = (($context["title"] ?? null) . sprintf(_gettext("Referenced by %s."), twig_join_filter($this->getAttribute($this->getAttribute(                // line 5
($context["column_meta"] ?? null), "column_status", array(), "array"), "references", array(), "array"), ",")));
                // line 7
                echo "    ";
            }
            // line 8
            echo "    ";
            if ($this->getAttribute($this->getAttribute(($context["column_meta"] ?? null), "column_status", array(), "array"), "isForeignKey", array(), "array")) {
                // line 9
                echo "        ";
                if ( !twig_test_empty(($context["title"] ?? null))) {
                    // line 10
                    echo "            ";
                    $context["title"] = (($context["title"] ?? null) . "
");
                    // line 11
                    echo "        ";
                }
                // line 12
                echo "        ";
                $context["title"] = (($context["title"] ?? null) . _gettext("Is a foreign key."));
                // line 13
                echo "    ";
            }
        }
        // line 15
        if (twig_test_empty(($context["title"] ?? null))) {
            // line 16
            echo "    ";
            $context["title"] = _gettext("Column");
        }
        // line 18
        echo "
<input id=\"field_";
        // line 19
        echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
        echo "_";
        echo twig_escape_filter($this->env, (($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
        echo "\"
    ";
        // line 20
        if (($this->getAttribute(($context["column_meta"] ?? null), "column_status", array(), "array", true, true) &&  !$this->getAttribute($this->getAttribute(        // line 21
($context["column_meta"] ?? null), "column_status", array(), "array"), "isEditable", array(), "array"))) {
            // line 22
            echo "        disabled=\"disabled\"
    ";
        }
        // line 24
        echo "    type=\"text\"
    name=\"field_name[";
        // line 25
        echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
        echo "]\"
    maxlength=\"64\"
    class=\"textfield\"
    title=\"";
        // line 28
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "\"
    size=\"10\"
    value=\"";
        // line 30
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["column_meta"] ?? null), "Field", array(), "array", true, true)) ? ($this->getAttribute(($context["column_meta"] ?? null), "Field", array(), "array")) : ("")), "html", null, true);
        echo "\" />

";
        // line 32
        if (($this->getAttribute(($context["cfg_relation"] ?? null), "centralcolumnswork", array(), "array") &&  !($this->getAttribute(        // line 33
($context["column_meta"] ?? null), "column_status", array(), "array", true, true) &&  !$this->getAttribute($this->getAttribute(        // line 34
($context["column_meta"] ?? null), "column_status", array(), "array"), "isEditable", array(), "array")))) {
            // line 35
            echo "    <p style=\"font-size:80%;margin:5px 2px\"
       id=\"central_columns_";
            // line 36
            echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, (($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
            echo "\">
        <a data-maxrows=\"";
            // line 37
            echo twig_escape_filter($this->env, ($context["max_rows"] ?? null), "html", null, true);
            echo "\"
            href=\"#\"
            class=\"central_columns_dialog\">
            ";
            // line 40
            echo _gettext("Pick from Central Columns");
            // line 41
            echo "        </a>
    </p>
";
        }
    }

    public function getTemplateName()
    {
        return "columns_definitions/column_name.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 41,  113 => 40,  107 => 37,  101 => 36,  98 => 35,  96 => 34,  95 => 33,  94 => 32,  89 => 30,  84 => 28,  78 => 25,  75 => 24,  71 => 22,  69 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 16,  53 => 15,  49 => 13,  46 => 12,  43 => 11,  39 => 10,  36 => 9,  33 => 8,  30 => 7,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "columns_definitions/column_name.twig", "/storage/emulated/0/www/phpmyadmin/templates/columns_definitions/column_name.twig");
    }
}
