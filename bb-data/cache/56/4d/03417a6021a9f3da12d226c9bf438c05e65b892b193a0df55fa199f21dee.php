<?php

/* mod_invoice_index.phtml */
class __TwigTemplate_564d03417a6021a9f3da12d226c9bf438c05e65b892b193a0df55fa199f21dee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'top_content' => array($this, 'block_top_content'),
            'content' => array($this, 'block_content'),
            'head' => array($this, 'block_head'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((($this->getAttribute($this->getContext($context, "request"), "ajax")) ? ("layout_blank.phtml") : ("layout_default.phtml")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["mf"] = $this->env->loadTemplate("macro_functions.phtml");
        // line 4
        $context["active_menu"] = "invoice";
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Invoices");
    }

    // line 6
    public function block_top_content($context, array $blocks = array())
    {
        // line 7
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        if ($this->getAttribute($_request_, "show_filter")) {
            // line 8
            echo "<div class=\"widget filterWidget\">
    <div class=\"head\"><h5 class=\"iMagnify\">";
            // line 9
            echo gettext("Filter invoices");
            echo "</h5></div>
    <div class=\"body nopadding\">

        <form method=\"get\" action=\"\" class=\"mainForm\">
            <input type=\"hidden\" name=\"_url\" value=\"";
            // line 13
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_request_, "_url"), "html", null, true);
            echo "\" />
            <fieldset>
                <div class=\"rowElem noborder\">
                    <label>";
            // line 16
            echo gettext("ID");
            echo "</label>
                    <div class=\"formRight\">
                        <input type=\"text\" name=\"id\" value=\"";
            // line 18
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_request_, "id"), "html", null, true);
            echo "\">
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>";
            // line 24
            echo gettext("Nr");
            echo "</label>
                    <div class=\"formRight\">
                        <input type=\"text\" name=\"nr\" value=\"";
            // line 26
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_request_, "nr"), "html", null, true);
            echo "\">
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>";
            // line 32
            echo gettext("Client");
            echo "</label>

                    <div class=\"formRight\">

                        <input type=\"text\" class=\"client_selector\"
                               placeholder=\"";
            // line 37
            echo gettext("Start typing clients name, email or ID");
            echo "\"
                        ";
            // line 38
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            if ($this->getAttribute($_request_, "client_id")) {
                // line 39
                echo "                            ";
                if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
                $context["client"] = $this->getAttribute($_admin_, "client_get", array(0 => array("id" => $this->getAttribute($_request_, "client_id"))), "method");
                // line 40
                echo "                            value=\"";
                if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_client_, "first_name"), "html", null, true);
                echo " ";
                if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_client_, "last_name"), "html", null, true);
                echo "\"
                        ";
            }
            // line 42
            echo "                            />
                        <input type=\"hidden\" name=\"client_id\" value=\"";
            // line 43
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_request_, "client_id"), "html", null, true);
            echo "\" class=\"client_id\"/>
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>";
            // line 49
            echo gettext("Currency");
            echo "</label>
                    <div class=\"formRight\">
                        ";
            // line 51
            if (isset($context["mf"])) { $_mf_ = $context["mf"]; } else { $_mf_ = null; }
            if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            echo $_mf_->getselectbox("currency", $this->getAttribute($_guest_, "currency_get_pairs"), $this->getAttribute($_request_, "currency"), 0, "All currencies");
            echo "
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>";
            // line 57
            echo gettext("Status");
            echo "</label>
                        <div class=\"formRight\">
                            <input type=\"radio\" name=\"status\" value=\"0\"";
            // line 59
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            if ((!$this->getAttribute($_request_, "status"))) {
                echo " checked=\"checked\"";
            }
            echo "/><label>";
            echo gettext("All statuses");
            echo "</label>
                            <input type=\"radio\" name=\"status\" value=\"paid\"";
            // line 60
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            if (($this->getAttribute($_request_, "status") == "paid")) {
                echo " checked=\"checked\"";
            }
            echo "/><label>";
            echo gettext("Paid");
            echo "</label>
                            <input type=\"radio\" name=\"status\" value=\"unpaid\"";
            // line 61
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            if (($this->getAttribute($_request_, "status") == "unpaid")) {
                echo " checked=\"checked\"";
            }
            echo " /><label>";
            echo gettext("Unpaid");
            echo "</label>
                            <input type=\"radio\" name=\"status\" value=\"refunded\"";
            // line 62
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            if (($this->getAttribute($_request_, "status") == "refunded")) {
                echo " checked=\"checked\"";
            }
            echo " /><label>";
            echo gettext("Refunded");
            echo "</label>
                        </div>
                    <div class=\"fix\"></div>
                </div>

                ";
            // line 78
            echo "                <div class=\"rowElem\">
                    <label>";
            // line 79
            echo gettext("Issue date");
            echo "</label>
                    <div class=\"formRight moreFields\">
                        <ul>
                            <li style=\"width: 100px\"><input type=\"text\" name=\"date_from\" value=\"";
            // line 82
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            if ($this->getAttribute($_request_, "date_from")) {
                if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_request_, "date_from"), "Y-m-d"), "html", null, true);
            }
            echo "\" placeholder=\"";
            if (isset($context["now"])) { $_now_ = $context["now"]; } else { $_now_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $_now_, "Y-m-d"), "html", null, true);
            echo "\" class=\"datepicker\"/></li>
                            <li class=\"sep\">-</li>
                            <li style=\"width: 100px\"><input type=\"text\" name=\"date_to\" value=\"";
            // line 84
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            if ($this->getAttribute($_request_, "date_to")) {
                if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_request_, "date_to"), "Y-m-d"), "html", null, true);
            }
            echo "\" placeholder=\"";
            if (isset($context["now"])) { $_now_ = $context["now"]; } else { $_now_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $_now_, "Y-m-d"), "html", null, true);
            echo "\" class=\"datepicker\"/></li>
                        </ul>
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <input type=\"hidden\" name=\"show_filter\" value=\"1\" />
                <input type=\"submit\" value=\"";
            // line 91
            echo gettext("Filter");
            echo "\" class=\"greyishBtn submitForm\" />
            </fieldset>
        </form>
        <div class=\"fix\"></div>
    </div>
</div>
";
        } else {
            // line 98
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            $context["statuses"] = $this->getAttribute($_admin_, "invoice_get_statuses");
            // line 99
            echo "<div class=\"stats\">
    <ul>
        <li><a href=\"";
            // line 101
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoice", array("status" => "unpaid"));
            echo "\" class=\"count blue\" title=\"\">";
            if (isset($context["statuses"])) { $_statuses_ = $context["statuses"]; } else { $_statuses_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_statuses_, "unpaid"), "html", null, true);
            echo "</a><span>";
            echo gettext("Unpaid invoices");
            echo "</span></li>
        <li><a href=\"";
            // line 102
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoice", array("status" => "refunded"));
            echo "\" class=\"count red\" title=\"\">";
            if (isset($context["statuses"])) { $_statuses_ = $context["statuses"]; } else { $_statuses_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_statuses_, "refunded"), "html", null, true);
            echo "</a><span>";
            echo gettext("Refunded invoices");
            echo "</span></li>
        <li><a href=\"";
            // line 103
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoice", array("status" => "paid"));
            echo "\" class=\"count green\" title=\"\">";
            if (isset($context["statuses"])) { $_statuses_ = $context["statuses"]; } else { $_statuses_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_statuses_, "paid"), "html", null, true);
            echo "</a><span>";
            echo gettext("Paid invoices");
            echo "</span></li>
        <li class=\"last\"><a href=\"";
            // line 104
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoice");
            echo "\" class=\"count grey\" title=\"\">";
            if (isset($context["statuses"])) { $_statuses_ = $context["statuses"]; } else { $_statuses_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($_statuses_, "paid") + $this->getAttribute($_statuses_, "unpaid")) + $this->getAttribute($_statuses_, "refunded")), "html", null, true);
            echo "</a><span>";
            echo gettext("Total");
            echo "</span></li>
    </ul>
    <div class=\"fix\"></div>
</div>
";
        }
        // line 109
        echo "
";
    }

    // line 112
    public function block_content($context, array $blocks = array())
    {
        // line 113
        echo "

<div class=\"widget simpleTabs\">
    <ul class=\"tabs\">
        <li><a href=\"#tab-index\">";
        // line 117
        echo gettext("Invoices");
        echo "</a></li>
        <li><a href=\"#tab-new\">";
        // line 118
        echo gettext("New Invoice");
        echo "</a></li>
    </ul>

    <div class=\"tabs_container\">
        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-index\">

            ";
        // line 125
        if (isset($context["mf"])) { $_mf_ = $context["mf"]; } else { $_mf_ = null; }
        echo $_mf_->gettable_search();
        echo "
            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td style=\"width: 2%\"><input type=\"checkbox\" class=\"batch-delete-master-checkbox\"/></td>
                        <td colspan=\"3\">";
        // line 130
        echo gettext("Invoice");
        echo "</td>
                        <td>";
        // line 131
        echo gettext("Amount");
        echo "</td>
                        <td>";
        // line 132
        echo gettext("Issued at");
        echo "</td>
                        <td>";
        // line 133
        echo gettext("Paid at");
        echo "</td>
                        <td>";
        // line 134
        echo gettext("Status");
        echo "</td>
                        <td width=\"13%\">&nbsp;</td>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 139
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        $context["invoices"] = $this->getAttribute($_admin_, "invoice_get_list", array(0 => twig_array_merge(array("per_page" => 30, "page" => $this->getAttribute($_request_, "page")), $_request_)), "method");
        // line 140
        echo "                    ";
        if (isset($context["invoices"])) { $_invoices_ = $context["invoices"]; } else { $_invoices_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_invoices_, "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["invoice"]) {
            // line 141
            echo "                    <tr>
                        <td><input type=\"checkbox\" class=\"batch-delete-checkbox\" data-item-id=\"";
            // line 142
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_invoice_, "id"), "html", null, true);
            echo "\"/></td>
                        <td style=\"width:5%;\"><img src=\"";
            // line 143
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo twig_escape_filter($this->env, twig_gravatar_filter($this->getAttribute($this->getAttribute($_invoice_, "buyer"), "email")), "html", null, true);
            echo "?size=20\" alt=\"";
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_invoice_, "buyer"), "email"), "html", null, true);
            echo "\" title=\"";
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_invoice_, "buyer"), "first_name"), "html", null, true);
            echo " ";
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_invoice_, "buyer"), "last_name"), "html", null, true);
            echo "\"/></td>
                        <td><a href=\"";
            // line 144
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client");
            echo "/manage/";
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_invoice_, "client"), "id"), "html", null, true);
            echo "\">";
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getAttribute($_invoice_, "client"), "first_name"), 1, null, "."), "html", null, true);
            echo " ";
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getAttribute($_invoice_, "client"), "last_name"), 20), "html", null, true);
            echo "</a></td>
                        <td style=\"width:15%;\" title=\"";
            // line 145
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_invoice_, "id"), "html", null, true);
            echo "\">";
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_invoice_, "serie_nr"), "html", null, true);
            echo "</td>
                        <td>";
            // line 146
            if (isset($context["mf"])) { $_mf_ = $context["mf"]; } else { $_mf_ = null; }
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo $_mf_->getcurrency_format($this->getAttribute($_invoice_, "total"), $this->getAttribute($_invoice_, "currency"));
            echo "</td>
                        <td>";
            // line 147
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_invoice_, "created_at"), "Y-m-d"), "html", null, true);
            echo "</td>
                        <td>";
            // line 148
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            if ($this->getAttribute($_invoice_, "paid_at")) {
                if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_invoice_, "paid_at"), "Y-m-d"), "html", null, true);
            } else {
                echo "-";
            }
            echo "</td>
                        <td>";
            // line 149
            if (isset($context["mf"])) { $_mf_ = $context["mf"]; } else { $_mf_ = null; }
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo $_mf_->getstatus_name($this->getAttribute($_invoice_, "status"));
            echo "</td>
                        <td class=\"actions\">
                            <a class=\"bb-button btn14\" href=\"";
            // line 151
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("/invoice/manage");
            echo "/";
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_invoice_, "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                            <a class=\"btn14 bb-rm-tr api-link\" href=\"";
            // line 152
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/invoice/delete", array("id" => $this->getAttribute($_invoice_, "id")));
            echo "\" data-api-confirm=\"Are you sure?\" data-api-reload=\"1\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                        </td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 156
            echo "                    <tr>
                        <td colspan=\"8\">";
            // line 157
            echo gettext("The list is empty");
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['invoice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "                </tbody>
            </table>

            ";
        // line 163
        $this->env->loadTemplate("partial_batch_delete.phtml")->display(array_merge($context, array("action" => "admin/invoice/batch_delete")));
        // line 164
        echo "            ";
        if (isset($context["invoices"])) { $_invoices_ = $context["invoices"]; } else { $_invoices_ = null; }
        $this->env->loadTemplate("partial_pagination.phtml")->display(array_merge($context, array("list" => $_invoices_, "url" => "invoice")));
        // line 165
        echo "        </div>

        <div class=\"tab_content nopadding\" id=\"tab-new\">
            <form method=\"post\" action=\"";
        // line 168
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/invoice/prepare");
        echo "\" class=\"mainForm api-form\" data-api-jsonp=\"onAfterInvoicePrepared\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 171
        echo gettext("Client");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"text\" class=\"client_selector\" placeholder=\"";
        // line 173
        echo gettext("Start typing clients name, email or ID");
        echo "\"/>
                            <input type=\"hidden\" name=\"client_id\" value=\"";
        // line 174
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_request_, "client_id"), "html", null, true);
        echo "\" class=\"client_id\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                     <input type=\"submit\" value=\"";
        // line 179
        echo gettext("Prepare");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
        </div>
    </div>
</div>

";
    }

    // line 189
    public function block_head($context, array $blocks = array())
    {
        // line 190
        echo "<link href=\"css/jquery-ui.css\" rel=\"stylesheet\" type=\"text/css\" />
<script type=\"text/javascript\" src=\"js/jquery-ui.js\"></script>
";
    }

    // line 194
    public function block_js($context, array $blocks = array())
    {
        // line 195
        echo "<script type=\"text/javascript\">
\$(function() {

\t\$('.client_selector').autocomplete({
        source: function( request, response ) {
            \$.ajax({
                url: bb.restUrl('admin/client/get_pairs'),
                dataType: \"json\",
                data: {
                    per_page: 10,
                    search: request.term
                },
                success: function( data ) {
                    response( \$.map( data.result, function( name, id) {
                        return {
                            label: name,
                            value: id
                        }
                    }));
                }
            });
        },
        minLength: 1,
        select: function( event, ui ) {
            \$(\".client_selector\").val(ui.item.label);
            \$(\".client_id\").val(ui.item.value);
            return false;
        }
    });

});

    function onAfterInvoicePrepared(id) {
        bb.redirect(\"";
        // line 228
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoice/manage/");
        echo "/\"+id);
    }
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_invoice_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  564 => 228,  529 => 195,  526 => 194,  520 => 190,  517 => 189,  505 => 179,  496 => 174,  492 => 173,  487 => 171,  481 => 168,  476 => 165,  472 => 164,  470 => 163,  465 => 160,  456 => 157,  453 => 156,  443 => 152,  436 => 151,  429 => 149,  419 => 148,  414 => 147,  408 => 146,  400 => 145,  387 => 144,  373 => 143,  368 => 142,  365 => 141,  358 => 140,  354 => 139,  346 => 134,  342 => 133,  338 => 132,  334 => 131,  330 => 130,  321 => 125,  311 => 118,  307 => 117,  301 => 113,  298 => 112,  293 => 109,  280 => 104,  271 => 103,  262 => 102,  253 => 101,  249 => 99,  246 => 98,  236 => 91,  219 => 84,  207 => 82,  201 => 79,  198 => 78,  185 => 62,  176 => 61,  167 => 60,  158 => 59,  153 => 57,  141 => 51,  136 => 49,  126 => 43,  123 => 42,  113 => 40,  108 => 39,  105 => 38,  101 => 37,  93 => 32,  83 => 26,  78 => 24,  68 => 18,  63 => 16,  56 => 13,  49 => 9,  46 => 8,  43 => 7,  40 => 6,  34 => 3,  29 => 4,  27 => 2,);
    }
}
