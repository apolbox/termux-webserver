<?php

/* columns_definitions/column_attribute.twig */
class __TwigTemplate_dbe4a9c244a929605c3f7a203e44b36b13844dadd659025f89d17bc18b62a0d9 extends Twig_Template
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
        if (((isset($context["submit_attribute"]) || array_key_exists("submit_attribute", $context)) && (($context["submit_attribute"] ?? null) != false))) {
            // line 2
            echo "    ";
            $context["attribute"] = ($context["submit_attribute"] ?? null);
        } elseif (($this->getAttribute(        // line 3
($context["column_meta"] ?? null), "Extra", array(), "array", true, true) && ($this->getAttribute(        // line 4
($context["column_meta"] ?? null), "Extra", array(), "array") == "on update CURRENT_TIMESTAMP"))) {
            // line 5
            echo "    ";
            $context["attribute"] = "on update CURRENT_TIMESTAMP";
        } elseif ($this->getAttribute(        // line 6
($context["extracted_columnspec"] ?? null), "attribute", array(), "array", true, true)) {
            // line 7
            echo "    ";
            $context["attribute"] = $this->getAttribute(($context["extracted_columnspec"] ?? null), "attribute", array(), "array");
        } else {
            // line 9
            echo "    ";
            $context["attribute"] = "";
        }
        // line 11
        $context["attribute"] = twig_upper_filter($this->env, ($context["attribute"] ?? null));
        // line 12
        echo "<select name=\"field_attribute[";
        echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
        echo "]\"
    id=\"field_";
        // line 13
        echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
        echo "_";
        echo twig_escape_filter($this->env, (($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
        echo "\">
    ";
        // line 14
        $context["cnt_attribute_types"] = (twig_length_filter($this->env, ($context["attribute_types"] ?? null)) - 1);
        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, ($context["cnt_attribute_types"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 16
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["attribute_types"] ?? null), $context["i"], array(), "array"), "html", null, true);
            echo "\"";
            // line 17
            echo (((($context["attribute"] ?? null) == twig_upper_filter($this->env, $this->getAttribute(($context["attribute_types"] ?? null), $context["i"], array(), "array")))) ? (" selected=\"selected\"") : (""));
            echo ">
            ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute(($context["attribute_types"] ?? null), $context["i"], array(), "array"), "html", null, true);
            echo "
        </option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "</select>
";
    }

    public function getTemplateName()
    {
        return "columns_definitions/column_attribute.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 21,  68 => 18,  64 => 17,  60 => 16,  55 => 15,  53 => 14,  47 => 13,  42 => 12,  40 => 11,  36 => 9,  32 => 7,  30 => 6,  27 => 5,  25 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "columns_definitions/column_attribute.twig", "/storage/emulated/0/www/phpmyadmin/templates/columns_definitions/column_attribute.twig");
    }
}
