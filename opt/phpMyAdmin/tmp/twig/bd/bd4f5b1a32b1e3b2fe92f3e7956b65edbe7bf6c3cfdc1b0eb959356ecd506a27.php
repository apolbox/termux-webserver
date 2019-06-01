<?php

/* columns_definitions/move_column.twig */
class __TwigTemplate_aeb9d6ddce701df626d4dfde068a6ceb5ad391e59f512e19aa867d8b85e7bb3b extends Twig_Template
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
        echo "<select id=\"field_";
        echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
        echo "_";
        echo twig_escape_filter($this->env, (($context["ci"] ?? null) - ($context["ci_offset"] ?? null)), "html", null, true);
        echo "\"
    name=\"field_move_to[";
        // line 2
        echo twig_escape_filter($this->env, ($context["column_number"] ?? null), "html", null, true);
        echo "]\"
    size=\"1\"
    width=\"5em\">
    <option value=\"\" selected=\"selected\">&nbsp;</option>
    <option value=\"-first\"";
        // line 6
        echo (((($context["current_index"] ?? null) == 0)) ? (" disabled=\"disabled\"") : (""));
        echo ">
        ";
        // line 7
        echo _gettext("first");
        // line 8
        echo "    </option>
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (twig_length_filter($this->env, ($context["move_columns"] ?? null)) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["mi"]) {
            // line 10
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["move_columns"] ?? null), $context["mi"], array(), "array"), "name", array()), "html", null, true);
            echo "\"";
            // line 11
            echo ((((($context["current_index"] ?? null) == $context["mi"]) || (($context["current_index"] ?? null) == ($context["mi"] + 1)))) ? (" disabled=\"disabled\"") : (""));
            echo ">
            ";
            // line 12
            echo twig_escape_filter($this->env, sprintf(_gettext("after %s"), PhpMyAdmin\Util::backquote(twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["move_columns"] ?? null), $context["mi"], array(), "array"), "name", array())))), "html", null, true);
            echo "
        </option>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</select>
";
    }

    public function getTemplateName()
    {
        return "columns_definitions/move_column.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 15,  54 => 12,  50 => 11,  46 => 10,  42 => 9,  39 => 8,  37 => 7,  33 => 6,  26 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "columns_definitions/move_column.twig", "/storage/emulated/0/www/phpmyadmin/templates/columns_definitions/move_column.twig");
    }
}
