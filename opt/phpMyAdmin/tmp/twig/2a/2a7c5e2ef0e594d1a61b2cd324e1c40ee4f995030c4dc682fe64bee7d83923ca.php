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

/* privileges/add_user_fieldset.twig */
class __TwigTemplate_9bb9c5decfeaeee50dc7ff309bf6d4e5adbdcb6d2c70551a3cb6ea09cdd62de6 extends \Twig\Template
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
        echo "<fieldset id=\"fieldset_add_user\">
    <legend>";
        // line 2
        echo _pgettext(        "Create new user", "New");
        echo "</legend>
    <a id=\"add_user_anchor\" href=\"server_privileges.php";
        // line 3
        echo PhpMyAdmin\Url::getCommon(($context["url_params"] ?? null));
        echo "\"
        ";
        // line 4
        if ( !twig_test_empty(($context["rel_params"] ?? null))) {
            // line 5
            echo "            rel=\"";
            echo PhpMyAdmin\Url::getCommon(($context["rel_params"] ?? null));
            echo "\"
        ";
        }
        // line 6
        echo ">
        ";
        // line 7
        echo PhpMyAdmin\Util::getIcon("b_usradd");
        echo _gettext("Add user account");
        echo "</a>
</fieldset>
";
    }

    public function getTemplateName()
    {
        return "privileges/add_user_fieldset.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  43 => 5,  41 => 4,  37 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "privileges/add_user_fieldset.twig", "/data/data/com.termux/files/usr/opt/phpmyadmin/templates/privileges/add_user_fieldset.twig");
    }
}
