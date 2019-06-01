<?php

/* table/insert/continue_insertion_form.twig */
class __TwigTemplate_eebb6a1ff5649d2d7b04417666f8530f26ec8cc7a493dce8cfd2b96f72ecf6b9 extends Twig_Template
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
        echo "<form id=\"continueForm\" method=\"post\" action=\"tbl_replace.php\" name=\"continueForm\">
    ";
        // line 2
        echo PhpMyAdmin\Url::getHiddenInputs(($context["db"] ?? null), ($context["table"] ?? null));
        echo "
    <input type=\"hidden\" name=\"goto\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["goto"] ?? null), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"err_url\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["err_url"] ?? null), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"sql_query\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["sql_query"] ?? null), "html", null, true);
        echo "\">

    ";
        // line 7
        if (($context["has_where_clause"] ?? null)) {
            // line 8
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["where_clause_array"] ?? null));
            foreach ($context['_seq'] as $context["key_id"] => $context["where_clause"]) {
                // line 9
                echo "            <input type=\"hidden\" name=\"where_clause[";
                echo twig_escape_filter($this->env, $context["key_id"], "html", null, true);
                echo "]\" value=\"";
                // line 10
                echo twig_escape_filter($this->env, twig_trim_filter($context["where_clause"]), "html", null, true);
                echo "\">
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key_id'], $context['where_clause'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "    ";
        }
        // line 13
        echo "
    ";
        // line 14
        ob_start();
        // line 15
        echo "        <input type=\"number\" name=\"insert_rows\" id=\"insert_rows\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["insert_rows_default"] ?? null), "html", null, true);
        echo "\" min=\"1\">
    ";
        $context["insert_rows"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 18
        echo "    ";
        echo sprintf(_gettext("Continue insertion with %s rows"), ($context["insert_rows"] ?? null));
        echo "
</form>
";
    }

    public function getTemplateName()
    {
        return "table/insert/continue_insertion_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 18,  68 => 16,  66 => 15,  64 => 14,  61 => 13,  58 => 12,  50 => 10,  46 => 9,  41 => 8,  39 => 7,  34 => 5,  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "table/insert/continue_insertion_form.twig", "/storage/emulated/0/www/phpmyadmin/templates/table/insert/continue_insertion_form.twig");
    }
}
