<?php

/* partial_footer.phtml */
class __TwigTemplate_eb7685c647b214cf5198b1c66a3ccae84cdde6b7d46f8ce6ec73a4309148e6f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "    \t<span>&copy; Copyright ";
        if (isset($context["now"])) { $_now_ = $context["now"]; } else { $_now_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $_now_, "Y"), "html", null, true);
        echo ". All rights reserved. Powered by <a href=\"http://www.boxbilling.com\" title=\"Billing system\" target=\"_blank\">BoxBilling ";
        if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_guest_, "system_version"), "html", null, true);
        echo "</a>
                    <a href=\"#\" title=\"\" id=\"help_popup_button\" style=\"float:right;\">Help</a>
        </span>

        <div id=\"help_popup\" style=\"color: #424242; position: fixed; z-index: 99999; padding: 5px; margin: 0px; min-width: 310px; max-width: 310px; top: 30%; left: 45%; display: none;\">
            <h5 id=\"help_popup_title\">";
        // line 6
        echo gettext("Help?");
        echo "</h5>
            <div id=\"help_popup_content\" class=\"confirm\">
                <div id=\"help_popup_message\">
                    <table class=\"tableStatic wide\">
                        <tbody>
                        <tr class=\"noborder\">
                            <td><i class=\"dark-sprite-icon sprite-help\" /></td>
                            <td class=\"noborder\"><a href=\"http://docs.boxbilling.com/\" title=\"\" target=\"_blank\">";
        // line 13
        echo gettext("Help");
        echo "</a></td>
                        </tr>
                        <tr>
                            <td><i class=\"dark-sprite-icon sprite-speech2\" /></td>
                            <td class=\"noborder\"><a href=\"http://www.boxbilling.com/forum\" title=\"\" target=\"_blank\">";
        // line 17
        echo gettext("Forum");
        echo "</a></td>
                        </tr>
                        <tr>
                            <td><i class=\"dark-sprite-icon sprite-pacman\" /></td>
                            <td class=\"noborder\"><a href=\"https://github.com/boxbilling/boxbilling/issues\" title=\"\" target=\"_blank\">";
        // line 21
        echo gettext("Report bug");
        echo "</a></td>
                        </tr>
                        </tbody>

                    </table>
                </div>
                <div id=\"help_popup_panel\">
                    <input type=\"button\" class=\"blueBtn\" value=\"&nbsp;Close&nbsp;\" id=\"help_popup_close\" onclick=\"return susp.suspenderHide();\"/>
                </div>
            </div>
        </div>

        ";
        // line 33
        $this->displayBlock('js', $context, $blocks);
    }

    public function block_js($context, array $blocks = array())
    {
        // line 34
        echo "        <script type=\"text/javascript\">
            document.getElementById('help_popup_button').addEventListener('click',function(e){
                e.preventDefault();
                document.getElementById('help_popup').style.display = 'block';
            });
            document.getElementById('help_popup_close').addEventListener('click',function(e){
                e.preventDefault();
                document.getElementById('help_popup').style.display = 'none';
            });
        </script>
        ";
    }

    public function getTemplateName()
    {
        return "partial_footer.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 34,  72 => 33,  50 => 17,  33 => 6,  20 => 1,  25 => 2,  19 => 1,  119 => 42,  114 => 34,  103 => 43,  101 => 42,  97 => 40,  94 => 39,  88 => 35,  86 => 34,  67 => 26,  63 => 25,  55 => 22,  36 => 9,  34 => 8,  27 => 4,  22 => 1,  160 => 57,  151 => 51,  147 => 50,  136 => 45,  132 => 44,  121 => 39,  117 => 38,  109 => 4,  104 => 34,  95 => 28,  84 => 23,  80 => 22,  69 => 17,  65 => 16,  57 => 21,  52 => 12,  49 => 11,  43 => 13,  38 => 6,  35 => 5,  29 => 3,);
    }
}
