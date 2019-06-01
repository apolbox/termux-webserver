<?php

/* display/import/javascript.twig */
class __TwigTemplate_a4c2019aaec1663760a5455fbca31638fcacd426e4054973c4e1b64149d10465 extends Twig_Template
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
        echo "\$( function() {
    ";
        // line 3
        echo "    \$(\"#buttonGo\").bind(\"click\", function() {
        ";
        // line 5
        echo "        \$(\"#upload_form_form\").css(\"display\", \"none\");

        ";
        // line 7
        if ((($context["handler"] ?? null) != "PhpMyAdmin\\Plugins\\Import\\Upload\\UploadNoplugin")) {
            // line 8
            echo "            ";
            // line 9
            echo "            ";
            $context["ajax_url"] = ((("import_status.php?id=" . ($context["upload_id"] ?? null)) . "&") . PhpMyAdmin\Url::getCommonRaw(array("import_status" => 1)));
            // line 12
            echo "            ";
            $context["promot_str"] = PhpMyAdmin\Sanitize::jsFormat(_gettext("The file being uploaded is probably larger than the maximum allowed size or this is a known bug in webkit based (Safari, Google Chrome, Arora etc.) browsers."), false);
            // line 16
            echo "            ";
            $context["statustext_str"] = PhpMyAdmin\Sanitize::escapeJsString(_gettext("%s of %s"));
            // line 17
            echo "            ";
            $context["second_str"] = PhpMyAdmin\Sanitize::jsFormat(_gettext("%s/sec."), false);
            // line 18
            echo "            ";
            $context["remaining_min"] = PhpMyAdmin\Sanitize::jsFormat(_gettext("About %MIN min. %SEC sec. remaining."), false);
            // line 19
            echo "            ";
            $context["remaining_second"] = PhpMyAdmin\Sanitize::jsFormat(_gettext("About %SEC sec. remaining."), false);
            // line 20
            echo "            ";
            $context["processed_str"] = PhpMyAdmin\Sanitize::jsFormat(_gettext("The file is being processed, please be patient."), false);
            // line 24
            echo "            ";
            $context["import_url"] = PhpMyAdmin\Url::getCommonRaw(array("import_status" => 1));
            // line 25
            echo "
            ";
            // line 26
            ob_start();
            // line 27
            echo "                ";
            ob_start();
            // line 28
            echo "                    <div class=\"upload_progress\">
                        <div class=\"upload_progress_bar_outer\">
                            <div class=\"percentage\"></div>
                            <div id=\"status\" class=\"upload_progress_bar_inner\">
                                <div class=\"percentage\"></div>
                            </div>
                        </div>
                        <div>
                            <img src=\"";
            // line 36
            echo twig_escape_filter($this->env, ($context["pma_theme_image"] ?? null), "html", null, true);
            echo "ajax_clock_small.gif\" width=\"16\" height=\"16\" alt=\"ajax clock\" /> ";
            echo PhpMyAdmin\Sanitize::jsFormat(_gettext("Uploading your import file…"), false);
            // line 37
            echo "</div>
                        <div id=\"statustext\"></div>
                    </div>
                ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 41
            echo "            ";
            $context["upload_html"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 42
            echo "
            ";
            // line 44
            echo "            var finished = false;
            var percent  = 0.0;
            var total    = 0;
            var complete = 0;
            var original_title = parent && parent.document ? parent.document.title : false;
            var import_start;

            var perform_upload = function () {
            new \$.getJSON(
                \"";
            // line 53
            echo ($context["ajax_url"] ?? null);
            echo "\",
                {},
                function(response) {
                    finished = response.finished;
                    percent = response.percent;
                    total = response.total;
                    complete = response.complete;

                    if (total==0 && complete==0 && percent==0) {
                        \$(\"#upload_form_status_info\").html('<img src=\"";
            // line 62
            echo twig_escape_filter($this->env, ($context["pma_theme_image"] ?? null), "html", null, true);
            echo "ajax_clock_small.gif\" width=\"16\" height=\"16\" alt=\"ajax clock\" /> ";
            echo ($context["promot_str"] ?? null);
            echo "');
                        \$(\"#upload_form_status\").css(\"display\", \"none\");
                    } else {
                        var now = new Date();
                        now = Date.UTC(
                            now.getFullYear(),
                            now.getMonth(),
                            now.getDate(),
                            now.getHours(),
                            now.getMinutes(),
                            now.getSeconds())
                            + now.getMilliseconds() - 1000;
                        var statustext = PMA_sprintf(
                            \"";
            // line 75
            echo ($context["statustext_str"] ?? null);
            echo "\",
                            formatBytes(
                                complete, 1, PMA_messages.strDecimalSeparator
                            ),
                            formatBytes(
                                total, 1, PMA_messages.strDecimalSeparator
                            )
                        );

                        if (\$(\"#importmain\").is(\":visible\")) {
                            ";
            // line 86
            echo "                            \$(\"#importmain\").hide();
                            \$(\"#import_form_status\")
                            .html('";
            // line 88
            echo ($context["upload_html"] ?? null);
            echo "')
                            .show();
                            import_start = now;
                        }
                        else if (percent > 9 || complete > 2000000) {
                            ";
            // line 94
            echo "                            var used_time = now - import_start;
                            var seconds = parseInt(((total - complete) / complete) * used_time / 1000);
                            var speed = PMA_sprintf(
                                \"";
            // line 97
            echo ($context["second_str"] ?? null);
            echo "\",
                                formatBytes(complete / used_time * 1000, 1, PMA_messages.strDecimalSeparator)
                            );

                            var minutes = parseInt(seconds / 60);
                            seconds %= 60;
                            var estimated_time;
                            if (minutes > 0) {
                                estimated_time = \"";
            // line 105
            echo ($context["remaining_min"] ?? null);
            echo "\"
                                    .replace(\"%MIN\", minutes)
                                    .replace(\"%SEC\", seconds);
                            }
                            else {
                                estimated_time = \"";
            // line 110
            echo ($context["remaining_second"] ?? null);
            echo "\"
                                .replace(\"%SEC\", seconds);
                            }

                            statustext += \"<br />\" + speed + \"<br /><br />\" + estimated_time;
                        }

                        var percent_str = Math.round(percent) + \"%\";
                        \$(\"#status\").animate({width: percent_str}, 150);
                        \$(\".percentage\").text(percent_str);

                        ";
            // line 122
            echo "                        if (original_title !== false) {
                            parent.document.title
                                = percent_str + \" - \" + original_title;
                        }
                        else {
                            document.title
                                = percent_str + \" - \" + original_title;
                        }
                        \$(\"#statustext\").html(statustext);
                    }

                    if (finished == true) {
                        if (original_title !== false) {
                            parent.document.title = original_title;
                        }
                        else {
                            document.title = original_title;
                        }
                        \$(\"#importmain\").hide();
                        ";
            // line 142
            echo "                        \$(\"#import_form_status\")
                        .html('<img src=\"";
            // line 143
            echo twig_escape_filter($this->env, ($context["pma_theme_image"] ?? null), "html", null, true);
            echo "ajax_clock_small.gif\" width=\"16\" height=\"16\" alt=\"ajax clock\" /> ";
            echo ($context["processed_str"] ?? null);
            echo "')
                        .show();
                        \$(\"#import_form_status\").load(\"import_status.php?message=true&";
            // line 145
            echo ($context["import_url"] ?? null);
            echo "\");
                        PMA_reloadNavigation();

                        ";
            // line 149
            echo "                    }
                    else {
                        setTimeout(perform_upload, 1000);
                    }
                });
            };
            setTimeout(perform_upload, 1000);
        ";
        } else {
            // line 157
            echo "            ";
            // line 158
            echo "            ";
            ob_start();
            // line 159
            echo "<img src=\"";
            echo twig_escape_filter($this->env, ($context["pma_theme_image"] ?? null), "html", null, true);
            // line 160
            echo "ajax_clock_small.gif\" width=\"16\" height=\"16\" alt=\"ajax clock\" />";
            // line 161
            echo PhpMyAdmin\Sanitize::jsFormat(_gettext("Please be patient, the file is being uploaded. Details about the upload are not available."), false);
            // line 165
            echo PhpMyAdmin\Util::showDocu("faq", "faq2-9");
            $context["image_tag"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 167
            echo "            \$('#upload_form_status_info').html('";
            echo ($context["image_tag"] ?? null);
            echo "');
            \$(\"#upload_form_status\").css(\"display\", \"none\");
        ";
        }
        // line 170
        echo "    });
});
";
    }

    public function getTemplateName()
    {
        return "display/import/javascript.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 170,  257 => 167,  254 => 165,  252 => 161,  250 => 160,  247 => 159,  244 => 158,  242 => 157,  232 => 149,  226 => 145,  219 => 143,  216 => 142,  195 => 122,  181 => 110,  173 => 105,  162 => 97,  157 => 94,  149 => 88,  145 => 86,  132 => 75,  114 => 62,  102 => 53,  91 => 44,  88 => 42,  85 => 41,  79 => 37,  75 => 36,  65 => 28,  62 => 27,  60 => 26,  57 => 25,  54 => 24,  51 => 20,  48 => 19,  45 => 18,  42 => 17,  39 => 16,  36 => 12,  33 => 9,  31 => 8,  29 => 7,  25 => 5,  22 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "display/import/javascript.twig", "/storage/emulated/0/www/phpmyadmin/templates/display/import/javascript.twig");
    }
}
