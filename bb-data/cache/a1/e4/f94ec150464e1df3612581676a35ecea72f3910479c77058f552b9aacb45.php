<?php

/* mod_invoice_invoice.phtml */
class __TwigTemplate_a1e4f94ec150464e1df3612581676a35ecea72f3910479c77058f552b9aacb45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'content' => array($this, 'block_content'),
            'sidebar2' => array($this, 'block_sidebar2'),
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
        echo gettext("Invoice");
        echo " ";
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_invoice_, "serie"), "html", null, true);
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        echo twig_escape_filter($this->env, sprintf("%05s", $this->getAttribute($_invoice_, "nr")), "html", null, true);
    }

    // line 7
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 8
        echo "<ul>
    <li class=\"firstB\"><a href=\"";
        // line 9
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("/");
        echo "\">";
        echo gettext("Home");
        echo "</a></li>
    <li><a href=\"";
        // line 10
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoice");
        echo "\">";
        echo gettext("Invoices");
        echo "</a></li>
    <li class=\"lastB\">";
        // line 11
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_invoice_, "serie"), "html", null, true);
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        echo twig_escape_filter($this->env, sprintf("%05s", $this->getAttribute($_invoice_, "nr")), "html", null, true);
        echo "</li>
</ul>
";
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "
<div class=\"widget simpleTabs tabsRight\">
    <div class=\"head\">
        <h5>";
        // line 20
        echo gettext("Invoice");
        echo " #";
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_invoice_, "id"), "html", null, true);
        echo "</h5>
    </div>

    <ul class=\"tabs\">
        <li><a href=\"#tab-info\">Details</a></li>
        <li><a href=\"#tab-manage\">Manage</a></li>
        <li><a href=\"#tab-texts\">Texts</a></li>
        <li><a href=\"#tab-buyer-credentials\">Client credentials</a></li>
        <li><a href=\"#tab-seller-credentials\">Company credentials</a></li>
    </ul>

    <div class=\"tabs_container\">
        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-info\">
            <div class=\"block\">
                <table class=\"tableStatic wide\">
                    <tbody>
                    <tr class=\"noborder\">
                        <td style=\"width: 20%\"><label>";
        // line 38
        echo gettext("ID");
        echo "</label></td>
                        <td>";
        // line 39
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_invoice_, "id"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td><label>";
        // line 42
        echo gettext("Number");
        echo "</label></td>
                        <td>";
        // line 43
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_invoice_, "serie"), "html", null, true);
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        echo twig_escape_filter($this->env, sprintf("%05s", $this->getAttribute($_invoice_, "nr")), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td><label>";
        // line 46
        echo gettext("Currency");
        echo "</label></td>
                        <td>";
        // line 47
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_invoice_, "currency"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td><label>";
        // line 50
        echo gettext("Client");
        echo "</label></td>
                        <td><a href=\"";
        // line 51
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client/manage");
        echo "/";
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_invoice_, "client"), "id"), "html", null, true);
        echo "\">";
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_invoice_, "client"), "first_name"), "html", null, true);
        echo " ";
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_invoice_, "client"), "last_name"), "html", null, true);
        echo "</a></td>
                    </tr>

                    <tr>
                        <td><label>";
        // line 55
        echo gettext("Status");
        echo "</label></td>
                        <td>";
        // line 56
        if (isset($context["mf"])) { $_mf_ = $context["mf"]; } else { $_mf_ = null; }
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        echo $_mf_->getstatus_name($this->getAttribute($_invoice_, "status"));
        echo "</td>
                    </tr>

                    ";
        // line 59
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        if ($this->getAttribute($_invoice_, "tax")) {
            // line 60
            echo "                    <tr>
                        <td><label>";
            // line 61
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_invoice_, "taxname"), "html", null, true);
            echo " ";
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_invoice_, "taxrate"), "html", null, true);
            echo "%</label></td>
                        <td>";
            // line 62
            if (isset($context["mf"])) { $_mf_ = $context["mf"]; } else { $_mf_ = null; }
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo $_mf_->getcurrency_format($this->getAttribute($_invoice_, "tax"), $this->getAttribute($_invoice_, "currency"));
            echo "</td>
                    </tr>
                    ";
        }
        // line 65
        echo "                    
                    <tr>
                        <td><label>";
        // line 67
        echo gettext("Total");
        echo "</label></td>
                        <td>";
        // line 68
        if (isset($context["mf"])) { $_mf_ = $context["mf"]; } else { $_mf_ = null; }
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        echo $_mf_->getcurrency_format($this->getAttribute($_invoice_, "total"), $this->getAttribute($_invoice_, "currency"));
        echo "</td>
                    </tr>
                    
                    <tr>
                        <td><label>";
        // line 72
        echo gettext("Created at");
        echo "</label></td>
                        <td>";
        // line 73
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_date($this->getAttribute($_invoice_, "created_at")), "html", null, true);
        echo "</td>
                    </tr>

                    <tr>
                        <td><label>";
        // line 77
        echo gettext("Due at");
        echo "</label></td>
                        <td>";
        // line 78
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_date($this->getAttribute($_invoice_, "due_at")), "html", null, true);
        echo "</td>
                    </tr>

                    <tr>
                        <td><label>";
        // line 82
        echo gettext("Paid at");
        echo "</label></td>
                        <td>";
        // line 83
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        if ($this->getAttribute($_invoice_, "paid_at")) {
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_date($this->getAttribute($_invoice_, "paid_at")), "html", null, true);
        } else {
            echo "-";
        }
        echo "</td>
                    </tr>

                    <tr>
                        <td><label>";
        // line 87
        echo gettext("Reminded at");
        echo "</label></td>
                        <td>";
        // line 88
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        if ($this->getAttribute($_invoice_, "reminded_at")) {
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_date($this->getAttribute($_invoice_, "reminded_at")), "html", null, true);
            echo " (";
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo twig_escape_filter($this->env, twig_timeago_filter($this->getAttribute($_invoice_, "reminded_at")), "html", null, true);
            echo " ago) ";
        }
        echo "</td>
                    </tr>
                    
                    ";
        // line 91
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        if ($this->getAttribute($_invoice_, "notes")) {
            // line 92
            echo "                    <tr>
                        <td><label>";
            // line 93
            echo gettext("Notes");
            echo "</label></td>
                        <td>";
            // line 94
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo twig_bbmd_filter($this->env, $this->getAttribute($_invoice_, "notes"));
            echo "</td>
                    </tr>
                    ";
        }
        // line 97
        echo "                    </tbody>
                    
                    <tfoot>
                        <tr>
                            <td colspan=\"2\">
                                <div class=\"aligncenter\">
                                    <a href=\"";
        // line 103
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("invoice");
        echo "/";
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_invoice_, "hash"), "html", null, true);
        echo "\" title=\"\" class=\"btn55 mr10\" target=\"_blank\"><img src=\"images/icons/middlenav/preview.png\" alt=\"\"><span>View as client</span></a>
                                    <a href=\"";
        // line 104
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/invoice/delete", array("id" => $this->getAttribute($_invoice_, "id")));
        echo "\" data-api-confirm=\"Are you sure?\"  title=\"\" class=\"btn55 mr10 api-link\" data-api-redirect=\"";
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoice");
        echo "\"><img src=\"images/icons/middlenav/trash.png\" alt=\"\"><span>Delete</span></a>
                                    ";
        // line 105
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        if (($this->getAttribute($_invoice_, "status") == "unpaid")) {
            // line 106
            echo "                                    <a href=\"";
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/invoice/send_reminder", array("id" => $this->getAttribute($_invoice_, "id")));
            echo "\" title=\"\" class=\"btn55 mr10 api-link\" data-api-msg=\"Payment reminder was sent\"><img src=\"images/icons/middlenav/mail.png\" alt=\"\"><span>Send reminder</span></a>
                                    <a href=\"";
            // line 107
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/invoice/mark_as_paid", array("id" => $this->getAttribute($_invoice_, "id"), "execute" => 1));
            echo "\" title=\"\" class=\"btn55 mr10 api-link\" data-api-reload=\"Invoice marked as paid\"><img src=\"images/icons/middlenav/play2.png\" alt=\"\"><span>Mark as paid</span></a>
                                    ";
        }
        // line 109
        echo "                                    
                                    ";
        // line 110
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        if (($this->getAttribute($_invoice_, "status") == "paid")) {
            // line 111
            echo "                                    <a href=\"";
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/invoice/refund", array("id" => $this->getAttribute($_invoice_, "id")));
            echo "\" data-api-confirm=\"Are you sure?\"  title=\"\" class=\"btn55 mr10 api-link\" data-api-redirect=\"";
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoice");
            echo "\"><img src=\"images/icons/middlenav/refresh4.png\" alt=\"\"><span>Refund</span></a>
                                    ";
        }
        // line 113
        echo "                                    <a href=\"";
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("invoice/pdf");
        echo "/";
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_invoice_, "hash"), "html", null, true);
        echo "\" target=\"_blank\" class=\"btn55 mr10\"><img src=\"images/icons/middlenav/incoming.png\" alt=\"\"><span>PDF</span></a>
                                </div>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>

        <div class=\"tab_content nopadding\" id=\"tab-manage\">
            <form action=\"";
        // line 124
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/invoice/update");
        echo "\" method=\"post\" class=\"mainForm api-form\" data-api-reload=\"Invoice updated\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 127
        echo gettext("Status");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"radio\" name=\"status\" value=\"paid\"";
        // line 129
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        if (($this->getAttribute($_invoice_, "status") == "paid")) {
            echo " checked=\"checked\"";
        }
        echo "/><label>Paid</label>
                            <input type=\"radio\" name=\"status\" value=\"unpaid\"";
        // line 130
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        if (($this->getAttribute($_invoice_, "status") == "unpaid")) {
            echo " checked=\"checked\"";
        }
        echo " /><label>Unpaid</label>
                            <input type=\"radio\" name=\"status\" value=\"refunded\"";
        // line 131
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        if (($this->getAttribute($_invoice_, "status") == "refunded")) {
            echo " checked=\"checked\"";
        }
        echo " /><label>Refunded</label>
                            <input type=\"radio\" name=\"status\" value=\"canceled\"";
        // line 132
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        if (($this->getAttribute($_invoice_, "status") == "canceled")) {
            echo " checked=\"checked\"";
        }
        echo " /><label>Canceled</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 138
        echo gettext("Approved");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"radio\" name=\"approved\" value=\"1\"";
        // line 140
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        if ($this->getAttribute($_invoice_, "approved")) {
            echo " checked=\"checked\"";
        }
        echo "/><label>Yes</label>
                            <input type=\"radio\" name=\"approved\" value=\"0\"";
        // line 141
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        if ((!$this->getAttribute($_invoice_, "approved"))) {
            echo " checked=\"checked\"";
        }
        echo " /><label>No</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 147
        echo gettext("Serie and number");
        echo ":</label>
                        <div class=\"formRight moreFields\">
                            <ul>
                                <li style=\"width: 150px\">
                                    <input type=\"text\" name=\"serie\" value=\"";
        // line 151
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_invoice_, "serie"), "html", null, true);
        echo "\"/>
                                </li>
                                <li class=\"sep\">&nbsp;</li>
                                <li style=\"width: 150px\">
                                    <input type=\"text\" name=\"nr\" value=\"";
        // line 155
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_invoice_, "nr"), "html", null, true);
        echo "\"/>
                                </li>
                            </ul>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 163
        echo gettext("Tax");
        echo ":</label>
                        <div class=\"formRight moreFields\">
                            <ul>
                                <li style=\"width: 150px\">
                                    <input type=\"text\" name=\"taxname\" value=\"";
        // line 167
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_invoice_, "taxname"), "html", null, true);
        echo "\"/>
                                </li>
                                <li class=\"sep\">&nbsp;</li>
                                <li style=\"width: 40px\">
                                    <input type=\"text\" name=\"taxrate\" value=\"";
        // line 171
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_invoice_, "taxrate"), "html", null, true);
        echo "\"/>
                                </li>
                                <li class=\"sep\">%</li>
                            </ul>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 179
        echo gettext("Payment method");
        echo ":</label>
                        <div class=\"formRight\">
                            ";
        // line 181
        if (isset($context["mf"])) { $_mf_ = $context["mf"]; } else { $_mf_ = null; }
        if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        echo $_mf_->getselectbox("gateway_id", $this->getAttribute($_guest_, "invoice_gateways", array(0 => array("format" => "pairs")), "method"), $this->getAttribute($_invoice_, "gateway_id"), 0, "Select payment method");
        echo "
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 187
        echo gettext("Created at");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"created_at\" value=\"";
        // line 189
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_invoice_, "created_at"), "Y-m-d"), "html", null, true);
        echo "\" class=\"datepicker\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 195
        echo gettext("Due at");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"due_at\" value=\"";
        // line 197
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        if ($this->getAttribute($_invoice_, "due_at")) {
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_invoice_, "due_at"), "Y-m-d"), "html", null, true);
        }
        echo "\" class=\"datepicker\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 203
        echo gettext("Paid at");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"paid_at\" value=\"";
        // line 205
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        if ($this->getAttribute($_invoice_, "paid_at")) {
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_invoice_, "paid_at"), "Y-m-d"), "html", null, true);
        }
        echo "\" class=\"datepicker\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 211
        echo gettext("Notes");
        echo ":</label>
                        <div class=\"formRight\">
                            <textarea name=\"notes\" cols=\"5\" rows=\"6\">";
        // line 213
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_invoice_, "notes"), "html", null, true);
        echo "</textarea>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <input type=\"submit\" value=\"";
        // line 218
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 219
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_invoice_, "id"), "html", null, true);
        echo "\" />
                </fieldset>
            </form>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-texts\">
            <form action=\"";
        // line 225
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/invoice/update");
        echo "\" method=\"post\" class=\"mainForm api-form\" data-api-msg=\"Invoice updated\">
                <fieldset>
                    <label class=\"topLabel\">";
        // line 227
        echo gettext("Text before invoice items table");
        echo "</label>
                    <textarea name=\"text_1\"  cols=\"5\" rows=\"6\" class=\"bb-textarea\"/>";
        // line 228
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_invoice_, "text_1"), "html", null, true);
        echo "</textarea>
                </fieldset>
                
                <fieldset>    
                    <label class=\"topLabel\">";
        // line 232
        echo gettext("Text after invoice items table");
        echo "</label>
                    <textarea name=\"text_2\" cols=\"5\" rows=\"6\" class=\"bb-textarea\"/>";
        // line 233
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_invoice_, "text_2"), "html", null, true);
        echo "</textarea>
                    <input type=\"submit\" value=\"";
        // line 234
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 235
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_invoice_, "id"), "html", null, true);
        echo "\" />
                </fieldset>
            </form>

            <div class=\"fix\"></div>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-seller-credentials\">
            ";
        // line 243
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        $context["seller"] = $this->getAttribute($_invoice_, "seller");
        // line 244
        echo "            <form action=\"";
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/invoice/update");
        echo "\" method=\"post\" class=\"mainForm api-form\" data-api-msg=\"Invoice updated\">
                <fieldset>
                    <legend>Company details at the moment of purchase</legend>

                    <div class=\"rowElem noborder\">
                        <label>";
        // line 249
        echo gettext("Company");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"seller_company\" value=\"";
        // line 251
        if (isset($context["seller"])) { $_seller_ = $context["seller"]; } else { $_seller_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_seller_, "company"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <div class=\"rowElem\">
                        <label>";
        // line 257
        echo gettext("Company VAT");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"seller_company_vat\" value=\"";
        // line 259
        if (isset($context["seller"])) { $_seller_ = $context["seller"]; } else { $_seller_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_seller_, "company_vat"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <div class=\"rowElem\">
                        <label>";
        // line 265
        echo gettext("Company Number");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"seller_company_number\" value=\"";
        // line 267
        if (isset($context["seller"])) { $_seller_ = $context["seller"]; } else { $_seller_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_seller_, "company_number"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 273
        echo gettext("Address");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"seller_address\" value=\"";
        // line 275
        if (isset($context["seller"])) { $_seller_ = $context["seller"]; } else { $_seller_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_seller_, "address"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 281
        echo gettext("Phone");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"seller_phone\" value=\"";
        // line 283
        if (isset($context["seller"])) { $_seller_ = $context["seller"]; } else { $_seller_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_seller_, "phone"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 289
        echo gettext("Email");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"seller_email\" value=\"";
        // line 291
        if (isset($context["seller"])) { $_seller_ = $context["seller"]; } else { $_seller_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_seller_, "email"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <input type=\"submit\" value=\"";
        // line 296
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 297
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_invoice_, "id"), "html", null, true);
        echo "\" />
                </fieldset>
            </form>

            <div class=\"fix\"></div>
        </div>


        <div class=\"tab_content nopadding\" id=\"tab-buyer-credentials\">
            ";
        // line 306
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        $context["buyer"] = $this->getAttribute($_invoice_, "buyer");
        // line 307
        echo "            <form action=\"";
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/invoice/update");
        echo "\" method=\"post\" class=\"mainForm api-form\" data-api-msg=\"Invoice updated\">
                <fieldset>
                    <legend>Client details at the moment of purchase</legend>

                    <div class=\"rowElem noborder\">
                        <label>";
        // line 312
        echo gettext("First name");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"buyer_first_name\" value=\"";
        // line 314
        if (isset($context["buyer"])) { $_buyer_ = $context["buyer"]; } else { $_buyer_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_buyer_, "first_name"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 320
        echo gettext("Last name");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"buyer_last_name\" value=\"";
        // line 322
        if (isset($context["buyer"])) { $_buyer_ = $context["buyer"]; } else { $_buyer_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_buyer_, "last_name"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 328
        echo gettext("Company");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"buyer_company\" value=\"";
        // line 330
        if (isset($context["buyer"])) { $_buyer_ = $context["buyer"]; } else { $_buyer_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_buyer_, "company"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <div class=\"rowElem\">
                        <label>";
        // line 336
        echo gettext("Company VAT");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"buyer_company_vat\" value=\"";
        // line 338
        if (isset($context["buyer"])) { $_buyer_ = $context["buyer"]; } else { $_buyer_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_buyer_, "company_vat"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <div class=\"rowElem\">
                        <label>";
        // line 344
        echo gettext("Company Number");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"buyer_company_number\" value=\"";
        // line 346
        if (isset($context["buyer"])) { $_buyer_ = $context["buyer"]; } else { $_buyer_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_buyer_, "company_number"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 352
        echo gettext("Address");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"buyer_address\" value=\"";
        // line 354
        if (isset($context["buyer"])) { $_buyer_ = $context["buyer"]; } else { $_buyer_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_buyer_, "address"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 360
        echo gettext("City");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"buyer_city\" value=\"";
        // line 362
        if (isset($context["buyer"])) { $_buyer_ = $context["buyer"]; } else { $_buyer_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_buyer_, "city"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 368
        echo gettext("State");
        echo ":</label>
                        <div class=\"formRight\">
                            ";
        // line 371
        echo "                            <input type=\"text\" name=\"buyer_state\" value=\"";
        if (isset($context["buyer"])) { $_buyer_ = $context["buyer"]; } else { $_buyer_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_buyer_, "state"), "html", null, true);
        echo "\" />
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 377
        echo gettext("Country");
        echo ":</label>
                        <div class=\"formRight\">
                            ";
        // line 379
        if (isset($context["mf"])) { $_mf_ = $context["mf"]; } else { $_mf_ = null; }
        if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
        if (isset($context["buyer"])) { $_buyer_ = $context["buyer"]; } else { $_buyer_ = null; }
        echo $_mf_->getselectbox("buyer_country", $this->getAttribute($_guest_, "system_countries"), $this->getAttribute($_buyer_, "country"), 0, "Select country");
        echo "
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 385
        echo gettext("Phone");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"buyer_phone\" value=\"";
        // line 387
        if (isset($context["buyer"])) { $_buyer_ = $context["buyer"]; } else { $_buyer_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_buyer_, "phone"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 393
        echo gettext("Zip");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"buyer_zip\" value=\"";
        // line 395
        if (isset($context["buyer"])) { $_buyer_ = $context["buyer"]; } else { $_buyer_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_buyer_, "zip"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 401
        echo gettext("Email");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"buyer_email\" value=\"";
        // line 403
        if (isset($context["buyer"])) { $_buyer_ = $context["buyer"]; } else { $_buyer_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_buyer_, "email"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <input type=\"submit\" value=\"";
        // line 408
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 409
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_invoice_, "id"), "html", null, true);
        echo "\" />
                </fieldset>
            </form>

            <div class=\"fix\"></div>
        </div>

    </div>
</div>


<div class=\"widget\">
    <div class=\"head\">
        <h5>";
        // line 422
        echo gettext("Invoice items");
        echo "</h5>
    </div>

";
        // line 425
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        if ((!$this->getAttribute($_invoice_, "approved"))) {
            // line 426
            echo "
    <form action=\"";
            // line 427
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/invoice/update");
            echo "\" method=\"post\" class=\"mainForm api-form\" data-api-reload=\"1\">
        <fieldset>
        <table class=\"tableStatic wide\">
            <thead>
                <tr>
                    <th>";
            // line 432
            echo gettext("Title");
            echo "</th>
                    <th class=\"currency\">";
            // line 433
            echo gettext("Price");
            echo "</th>
                    <th>";
            // line 434
            echo gettext("Tax");
            echo "</th>
                    <th class=\"actions\">&nbsp;</th>
                </tr>
            </thead>

            <tbody>
                ";
            // line 440
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_invoice_, "lines"));
            foreach ($context['_seq'] as $context["i"] => $context["item"]) {
                // line 441
                echo "                <tr>
                    <td style=\"width: 60%;\"><input type=\"text\" name=\"items[";
                // line 442
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "id"), "html", null, true);
                echo "][title]\" value=\"";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title"), "html", null, true);
                echo "\" style=\"width:98%\"></td>
                    <td style=\"width: 20%;\"><input type=\"text\" name=\"items[";
                // line 443
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "id"), "html", null, true);
                echo "][price]\" value=\"";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "price"), "html", null, true);
                echo "\" style=\"width:80px\"> ";
                if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_invoice_, "currency"), "html", null, true);
                echo "</td>
                    <td style=\"width: 5%;\">
                        <input type=\"checkbox\" name=\"items[";
                // line 445
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "id"), "html", null, true);
                echo "][taxed]\" value=\"1\" ";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                if ($this->getAttribute($_item_, "taxed")) {
                    echo "checked=\"checked\"";
                }
                echo "/>
                    </td>
                    <td style=\"width: 5%;\">
                        <a class=\"bb-button btn14 api-link\" data-api-confirm=\"Are you sure?\" href=\"";
                // line 448
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/invoice/item_delete", array("id" => $this->getAttribute($_item_, "id")));
                echo "\" data-api-reload=\"1\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                    </td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 452
            echo "
                <tr>
                    <td style=\"width: 70%;\"><input type=\"text\" name=\"new_item[title]\" value=\"\" style=\"width:98%\" placeholder=\"New line description\"></td>
                    <td style=\"width: 20%;\"><input type=\"text\" name=\"new_item[price]\" value=\"\" style=\"width:80px\" placeholder=\"Price\"> ";
            // line 455
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_invoice_, "currency"), "html", null, true);
            echo "</td>
                    <td><input type=\"checkbox\" name=\"new_item[taxed]\" value=\"1\"/></td>
                    <td>&nbsp;</td>
                </tr>
            </tbody>

            <tfoot>
                <tr>
                    <td colspan=\"4\" class=\"currency\">
                        Subtotal: ";
            // line 464
            if (isset($context["mf"])) { $_mf_ = $context["mf"]; } else { $_mf_ = null; }
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo $_mf_->getcurrency_format($this->getAttribute($_invoice_, "subtotal"), $this->getAttribute($_invoice_, "currency"));
            echo "
                    </td>
                </tr>
                <tr>
                    <td colspan=\"4\" class=\"currency\">
                        ";
            // line 469
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_invoice_, "taxname"), "html", null, true);
            echo " ";
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_invoice_, "taxrate"), "html", null, true);
            echo "%: ";
            if (isset($context["mf"])) { $_mf_ = $context["mf"]; } else { $_mf_ = null; }
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo $_mf_->getcurrency_format($this->getAttribute($_invoice_, "tax"), $this->getAttribute($_invoice_, "currency"));
            echo "
                    </td>
                </tr>
                <tr>
                    <td colspan=\"4\" class=\"currency\">
                        Total: ";
            // line 474
            if (isset($context["mf"])) { $_mf_ = $context["mf"]; } else { $_mf_ = null; }
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo $_mf_->getcurrency_format($this->getAttribute($_invoice_, "total"), $this->getAttribute($_invoice_, "currency"));
            echo "
                    </td>
                </tr>
                <tr>
                    <td colspan=\"4\">
                        ";
            // line 479
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            if ((!$this->getAttribute($_invoice_, "approved"))) {
                // line 480
                echo "                        <a href=\"";
                if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
                echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/invoice/approve", array("id" => $this->getAttribute($_invoice_, "id")));
                echo "\"  title=\"\" class=\"btnIconLeft mr10 api-link\" data-api-reload=\"";
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoices");
                echo "\"><img src=\"images/icons/dark/check.png\" alt=\"\" class=\"icon\"><span>Approve</span></a>
                        ";
            }
            // line 482
            echo "                        <input type=\"submit\" value=\"";
            echo gettext("Update");
            echo "\" class=\"greyishBtn submitForm\" style=\"width:100px\"/>
                    </td>
                </tr>
            </tfoot>
        </table>
        </fieldset>

        <input type=\"hidden\" name=\"id\" value=\"";
            // line 489
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_invoice_, "id"), "html", null, true);
            echo "\" />
    </form>

";
        } else {
            // line 493
            echo "    <table class=\"tableStatic wide\">
        <thead>
            <tr>
                <th  style=\"width: 11%;\" colspan=\"2\"></th>
                <th style=\"width: 70%;\">";
            // line 497
            echo gettext("Title");
            echo "</th>
                <th style=\"width: 7%;\">";
            // line 498
            echo gettext("Tax");
            echo "</th>
                <th class=\"currency\" style=\"width: 15%;\">";
            // line 499
            echo gettext("Total");
            echo "</th>
            </tr>
        </thead>

        <tbody>
            ";
            // line 504
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_invoice_, "lines"));
            foreach ($context['_seq'] as $context["i"] => $context["item"]) {
                // line 505
                echo "
            <tr>
                <td>";
                // line 507
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, ($_i_ + 1), "html", null, true);
                echo ".</td>
                <td>
                    <div class=\"bull task ";
                // line 509
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "status"), "html", null, true);
                echo "\" title=\"Task status: ";
                if (isset($context["mf"])) { $_mf_ = $context["mf"]; } else { $_mf_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo $_mf_->getstatus_name($this->getAttribute($_item_, "status"));
                echo "\"></div>
                    <div class=\"bull charge ";
                // line 510
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo (($this->getAttribute($_item_, "charged")) ? ("yes") : ("no"));
                echo "\" title=\"";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo (($this->getAttribute($_item_, "charged")) ? ("Charged from client balance") : ("Not charged from client balance"));
                echo "\"></div>
                </td>
                <td>
                ";
                // line 513
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                if ($this->getAttribute($_item_, "order_id")) {
                    // line 514
                    echo "                <a href=\"";
                    echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("order/manage");
                    echo "/";
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_item_, "order_id"), "html", null, true);
                    echo "\">";
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title"), "html", null, true);
                    echo " ";
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    if (($this->getAttribute($_item_, "quantity") > 1)) {
                        echo " x ";
                        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_item_, "quantity"), "html", null, true);
                        echo " ";
                    }
                    echo "</a>
                ";
                } else {
                    // line 516
                    echo "                ";
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title"), "html", null, true);
                    echo " ";
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    if (($this->getAttribute($_item_, "quantity") > 1)) {
                        echo " x ";
                        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_item_, "quantity"), "html", null, true);
                        echo " ";
                    }
                    // line 517
                    echo "                ";
                }
                // line 518
                echo "                </td>
                <td>";
                // line 519
                if (isset($context["mf"])) { $_mf_ = $context["mf"]; } else { $_mf_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
                echo $_mf_->getcurrency_format($this->getAttribute($_item_, "tax"), $this->getAttribute($_invoice_, "currency"));
                echo "</td>
                <td class=\"currency\">";
                // line 520
                if (isset($context["mf"])) { $_mf_ = $context["mf"]; } else { $_mf_ = null; }
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
                echo $_mf_->getcurrency_format($this->getAttribute($_item_, "total"), $this->getAttribute($_invoice_, "currency"));
                echo "</td>
            </tr>

            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 524
            echo "        </tbody>
        
        <tfoot>
            <tr>
                <td colspan=\"5\" class=\"currency\">
                    Subtotal: ";
            // line 529
            if (isset($context["mf"])) { $_mf_ = $context["mf"]; } else { $_mf_ = null; }
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo $_mf_->getcurrency_format($this->getAttribute($_invoice_, "subtotal"), $this->getAttribute($_invoice_, "currency"));
            echo "
                </td>
            </tr>
            <tr>
                <td colspan=\"5\" class=\"currency\">
                    ";
            // line 534
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_invoice_, "taxname"), "html", null, true);
            echo " ";
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_invoice_, "taxrate"), "html", null, true);
            echo "%: ";
            if (isset($context["mf"])) { $_mf_ = $context["mf"]; } else { $_mf_ = null; }
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo $_mf_->getcurrency_format($this->getAttribute($_invoice_, "tax"), $this->getAttribute($_invoice_, "currency"));
            echo "
                </td>
            </tr>
            <tr>
                <td colspan=\"5\" class=\"currency\">
                    Total: ";
            // line 539
            if (isset($context["mf"])) { $_mf_ = $context["mf"]; } else { $_mf_ = null; }
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo $_mf_->getcurrency_format($this->getAttribute($_invoice_, "total"), $this->getAttribute($_invoice_, "currency"));
            echo "
                </td>
            </tr>
        </tfoot>
    </table>
";
        }
        // line 545
        echo "
</div>

";
        // line 548
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        $context["transactions"] = $this->getAttribute($this->getAttribute($_admin_, "invoice_transaction_get_list", array(0 => array("invoice_id" => $this->getAttribute($_invoice_, "id"), "per_page" => 100)), "method"), "list");
        // line 549
        echo "
";
        // line 550
        if (isset($context["transactions"])) { $_transactions_ = $context["transactions"]; } else { $_transactions_ = null; }
        if ((twig_length_filter($this->env, $_transactions_) > 0)) {
            // line 551
            echo "
<div class=\"widget\">
    <div class=\"head\">
        <h5>";
            // line 554
            echo gettext("Transactions");
            echo "</h5>
    </div>
    <table class=\"tableStatic wide\">
        <thead>
            <tr>
                <th>";
            // line 559
            echo gettext("ID");
            echo "</th>
                <th>";
            // line 560
            echo gettext("Type");
            echo "</th>
                <th>";
            // line 561
            echo gettext("Gateway");
            echo "</th>
                <th>";
            // line 562
            echo gettext("Amount");
            echo "</th>
                <th>";
            // line 563
            echo gettext("Status");
            echo "</th>
                 <th>";
            // line 564
            echo gettext("Date");
            echo "</th>
                <th>&nbsp;</th>
            </tr>
        </thead>

        <tbody>
            ";
            // line 570
            if (isset($context["transactions"])) { $_transactions_ = $context["transactions"]; } else { $_transactions_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_transactions_);
            foreach ($context['_seq'] as $context["i"] => $context["tx"]) {
                // line 571
                echo "            <tr>
                <td>";
                // line 572
                if (isset($context["tx"])) { $_tx_ = $context["tx"]; } else { $_tx_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_tx_, "txn_id"), "html", null, true);
                echo "</td>
                <td>";
                // line 573
                if (isset($context["tx"])) { $_tx_ = $context["tx"]; } else { $_tx_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_tx_, "type"), "html", null, true);
                echo "</td>
                <td>";
                // line 574
                if (isset($context["tx"])) { $_tx_ = $context["tx"]; } else { $_tx_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_tx_, "gateway"), "html", null, true);
                echo "</td>
                <td>";
                // line 575
                if (isset($context["mf"])) { $_mf_ = $context["mf"]; } else { $_mf_ = null; }
                if (isset($context["tx"])) { $_tx_ = $context["tx"]; } else { $_tx_ = null; }
                echo $_mf_->getcurrency_format($this->getAttribute($_tx_, "amount"), $this->getAttribute($_tx_, "currency"));
                echo "</td>
                <td>";
                // line 576
                if (isset($context["mf"])) { $_mf_ = $context["mf"]; } else { $_mf_ = null; }
                if (isset($context["tx"])) { $_tx_ = $context["tx"]; } else { $_tx_ = null; }
                echo $_mf_->getstatus_name($this->getAttribute($_tx_, "status"));
                echo "</td>
                <td>";
                // line 577
                if (isset($context["tx"])) { $_tx_ = $context["tx"]; } else { $_tx_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_datetime($this->getAttribute($_tx_, "created_at")), "html", null, true);
                echo "</td>
                <td style=\"width: 5%\">
                    <a class=\"bb-button btn14\" href=\"";
                // line 579
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("/invoice/transaction");
                echo "/";
                if (isset($context["tx"])) { $_tx_ = $context["tx"]; } else { $_tx_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_tx_, "id"), "html", null, true);
                echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                </td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['tx'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 583
            echo "        </tbody>
    </table>
</div>

";
        }
        // line 588
        echo "
";
    }

    // line 591
    public function block_sidebar2($context, array $blocks = array())
    {
        // line 592
        echo "
<div class=\"widget\">
    <div class=\"head\">
        <h2 class=\"dark-icon i-services\">";
        // line 595
        echo gettext("Actions");
        echo "</h2>
    </div>
    <div class=\"block\">
        <button class=\"bb-button\" type=\"button\" onclick=\"window.print()\"><span class=\"dark-icon i-print\"></span> ";
        // line 598
        echo gettext("Print");
        echo "</button>
        ";
        // line 599
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        if (($this->getAttribute($_invoice_, "status") == "unpaid")) {
            // line 600
            echo "        <a class=\"bb-button api-link\" href=\"";
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/client/invoice/delete", array("hash" => $this->getAttribute($_invoice_, "hash")));
            echo "\"  data-api-confirm=\"Are you sure?\" data-api-redirect=\"";
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoice");
            echo "\"><span class=\"dark-icon i-bin\"></span> ";
            echo gettext("Delete");
            echo "</a>
        ";
        }
        // line 602
        echo "    </div>
</div>


";
    }

    // line 608
    public function block_head($context, array $blocks = array())
    {
        if (isset($context["mf"])) { $_mf_ = $context["mf"]; } else { $_mf_ = null; }
        echo $_mf_->getbb_editor(".bb-textarea");
    }

    // line 609
    public function block_js($context, array $blocks = array())
    {
        // line 611
        echo "<script type=\"text/javascript\">
\$(function() {
    \$('input[name=gateway]:first').attr('checked', true);
    \$('#pay-now-button').click(function(){
        var link = \$('input[name=gateway]:checked').val();
        bb.redirect(link);
        return false;
    });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_invoice_invoice.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1458 => 611,  1455 => 609,  1448 => 608,  1440 => 602,  1429 => 600,  1426 => 599,  1422 => 598,  1416 => 595,  1411 => 592,  1408 => 591,  1403 => 588,  1396 => 583,  1383 => 579,  1377 => 577,  1371 => 576,  1365 => 575,  1360 => 574,  1355 => 573,  1350 => 572,  1347 => 571,  1342 => 570,  1333 => 564,  1329 => 563,  1325 => 562,  1321 => 561,  1317 => 560,  1313 => 559,  1305 => 554,  1300 => 551,  1297 => 550,  1294 => 549,  1290 => 548,  1285 => 545,  1274 => 539,  1258 => 534,  1248 => 529,  1241 => 524,  1228 => 520,  1221 => 519,  1218 => 518,  1215 => 517,  1203 => 516,  1183 => 514,  1180 => 513,  1170 => 510,  1161 => 509,  1155 => 507,  1151 => 505,  1146 => 504,  1138 => 499,  1134 => 498,  1130 => 497,  1124 => 493,  1116 => 489,  1105 => 482,  1096 => 480,  1093 => 479,  1083 => 474,  1067 => 469,  1057 => 464,  1044 => 455,  1039 => 452,  1028 => 448,  1016 => 445,  1004 => 443,  996 => 442,  993 => 441,  988 => 440,  979 => 434,  975 => 433,  971 => 432,  963 => 427,  960 => 426,  957 => 425,  951 => 422,  934 => 409,  930 => 408,  921 => 403,  916 => 401,  906 => 395,  901 => 393,  891 => 387,  886 => 385,  874 => 379,  869 => 377,  858 => 371,  853 => 368,  843 => 362,  838 => 360,  828 => 354,  823 => 352,  813 => 346,  808 => 344,  798 => 338,  793 => 336,  783 => 330,  778 => 328,  768 => 322,  763 => 320,  753 => 314,  748 => 312,  739 => 307,  736 => 306,  723 => 297,  719 => 296,  710 => 291,  705 => 289,  695 => 283,  690 => 281,  680 => 275,  675 => 273,  665 => 267,  660 => 265,  650 => 259,  645 => 257,  635 => 251,  630 => 249,  621 => 244,  618 => 243,  606 => 235,  602 => 234,  597 => 233,  593 => 232,  585 => 228,  581 => 227,  576 => 225,  566 => 219,  562 => 218,  553 => 213,  548 => 211,  535 => 205,  530 => 203,  517 => 197,  512 => 195,  502 => 189,  497 => 187,  485 => 181,  480 => 179,  468 => 171,  460 => 167,  453 => 163,  441 => 155,  433 => 151,  426 => 147,  414 => 141,  407 => 140,  402 => 138,  390 => 132,  383 => 131,  376 => 130,  369 => 129,  364 => 127,  358 => 124,  340 => 113,  331 => 111,  328 => 110,  325 => 109,  319 => 107,  313 => 106,  310 => 105,  303 => 104,  296 => 103,  288 => 97,  281 => 94,  277 => 93,  274 => 92,  271 => 91,  257 => 88,  253 => 87,  240 => 83,  236 => 82,  228 => 78,  224 => 77,  216 => 73,  212 => 72,  203 => 68,  199 => 67,  195 => 65,  187 => 62,  179 => 61,  176 => 60,  173 => 59,  165 => 56,  161 => 55,  145 => 51,  141 => 50,  134 => 47,  130 => 46,  121 => 43,  117 => 42,  110 => 39,  106 => 38,  82 => 20,  77 => 17,  74 => 16,  64 => 11,  58 => 10,  52 => 9,  49 => 8,  46 => 7,  35 => 3,  30 => 4,  28 => 2,);
    }
}
