<?php

/* mod_client_manage.phtml */
class __TwigTemplate_53a798d652e983a90d3f4b45c26c0e945b32857c50fad113bfdd4baf31d6db32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout_default.phtml");

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout_default.phtml";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["active_menu"] = "client";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_client_, "first_name"), "html", null, true);
        echo " ";
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_client_, "last_name"), "html", null, true);
    }

    // line 5
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 6
        echo "<ul>
    <li class=\"firstB\"><a href=\"";
        // line 7
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("/");
        echo "\">";
        echo gettext("Home");
        echo "</a></li>
    <li><a href=\"";
        // line 8
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client");
        echo "\">";
        echo gettext("Clients");
        echo "</a></li>
    <li class=\"lastB\">";
        // line 9
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_client_, "first_name"), "html", null, true);
        echo " ";
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_client_, "last_name"), "html", null, true);
        echo "</li>
</ul>
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "
<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-info\">";
        // line 18
        echo gettext("Profile");
        echo "</a></li>
        <li><a href=\"#tab-profile\">";
        // line 19
        echo gettext("Edit");
        echo "</a></li>
        <li><a href=\"#tab-orders\">";
        // line 20
        echo gettext("Orders");
        echo "</a></li>
        <li><a href=\"#tab-invoice\">";
        // line 21
        echo gettext("Invoices");
        echo "</a></li>
        <li><a href=\"#tab-support\">";
        // line 22
        echo gettext("Tickets");
        echo "</a></li>
        <li><a href=\"#tab-balance\">";
        // line 23
        echo gettext("Payments");
        echo "</a></li>
        <li><a href=\"#tab-history\">";
        // line 24
        echo gettext("Logins");
        echo "</a></li>
        <li><a href=\"#tab-emails\">";
        // line 25
        echo gettext("Emails");
        echo "</a></li>
        <li><a href=\"#tab-transactions\">";
        // line 26
        echo gettext("Transactions");
        echo "</a></li>
    </ul>

    <div class=\"tabs_container\">
        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-info\">

            <div style=\"position: relative;\">
            <img src=\"";
        // line 34
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        echo twig_escape_filter($this->env, twig_gravatar_filter($this->getAttribute($_client_, "email")), "html", null, true);
        echo "?size=100\" alt=\"";
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_client_, "first_name"), "html", null, true);
        echo " ";
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_client_, "last_name"), "html", null, true);
        echo "\" style=\"right: 0; margin: 15px 15px 0 15px; position: absolute; border: 2px solid white; box-shadow: 0px 0px 10px 0px;\"/>
            </div>
            
            <table class=\"tableStatic wide\">
                <tbody>
                    <tr class=\"noborder\">
                        <td style=\"width: 15%\">ID:</td>
                        <td>";
        // line 41
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_client_, "id"), "html", null, true);
        echo "</td>
                    </tr>

                    <tr>
                        <td>Name:</td>
                        <td><strong class=\"red\">";
        // line 46
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_client_, "first_name"), "html", null, true);
        echo " ";
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_client_, "last_name"), "html", null, true);
        echo "</strong></td>
                    </tr>

                    <tr>
                        <td>Company:</td>
                        <td><strong class=\"green\">";
        // line 51
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_client_, "company", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_client_, "company"), "-")) : ("-")), "html", null, true);
        echo "</strong></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td>";
        // line 55
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_client_, "email"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Status:</td>
                        <td>";
        // line 59
        if (isset($context["mf"])) { $_mf_ = $context["mf"]; } else { $_mf_ = null; }
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_mf_, "status_name", array(0 => $this->getAttribute($_client_, "status")), "method"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Group:</td>
                        <td>";
        // line 63
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_client_, "group", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_client_, "group"), "-")) : ("-")), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Currency:</td>
                        <td>";
        // line 67
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_client_, "currency", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_client_, "currency"), "-")) : ("-")), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>IP:</td>
                        <td>";
        // line 71
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_client_, "ip", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_client_, "ip"), "-")) : ("-")), "html", null, true);
        echo " ";
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_ipcountryname_filter($this->getAttribute($_client_, "ip")), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>API Key:</td>
                        <td>";
        // line 75
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        echo twig_escape_filter($this->env, (($this->getAttribute($_client_, "api_token", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_client_, "api_token"), "-")) : ("-")), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <td>Address:</td>
                        <td>
                            <span class=\"flag flag-";
        // line 80
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_client_, "country"), "html", null, true);
        echo "\" title=\"";
        if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_guest_, "system_countries"), $this->getAttribute($_client_, "country"), array(), "array"), "html", null, true);
        echo "\"></span>
                            ";
        // line 81
        if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_guest_, "system_countries"), $this->getAttribute($_client_, "country"), array(), "array"), "html", null, true);
        echo " ";
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_client_, "state"), "html", null, true);
        echo " ";
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_client_, "address_1"), "html", null, true);
        echo " ";
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_client_, "address_2"), "html", null, true);
        echo " ";
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_client_, "city"), "html", null, true);
        echo " ";
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_client_, "postcode"), "html", null, true);
        echo "
                        </td>
                    </tr>
                    <tr>
                        <td>Registered at:</td>
                        <td>";
        // line 86
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_client_, "created_at"), "M d, Y"), "html", null, true);
        echo "</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan=\"2\">
                            <a href=\"";
        // line 92
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client/login");
        echo "/";
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_client_, "id"), "html", null, true);
        echo "\" class=\"btnIconLeft mr10 mt5\" target=\"_blank\"><img src=\"images/icons/dark/adminUser.png\" alt=\"\" class=\"icon\"><span>Login to client area</span></a>
                            <a href=\"";
        // line 93
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/client/delete", array("id" => $this->getAttribute($_client_, "id")));
        echo "\" data-api-confirm=\"Are you sure?\" data-api-redirect=\"";
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client");
        echo "\" class=\"btnIconLeft mr10 mt5 api-link\" ><img src=\"images/icons/dark/trash.png\" alt=\"\" class=\"icon\"><span>Delete</span></a>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-profile\">

            <div class=\"help\">
                <h3>";
        // line 103
        echo gettext("Client profile details");
        echo "</h3>
            </div>

            <form method=\"post\" action=\"";
        // line 106
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/client/update");
        echo "\" class=\"mainForm api-form save\" data-api-msg=\"";
        echo gettext("Client Profile updated");
        echo "\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 109
        echo gettext("Status");
        echo ":</label>
                        <div class=\"formRight noborder\">
                            <input type=\"radio\" name=\"status\" value=\"active\"";
        // line 111
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        if (($this->getAttribute($_client_, "status") == "active")) {
            echo " checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("Active");
        echo "</label>
                            <input type=\"radio\" name=\"status\" value=\"suspended\"";
        // line 112
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        if (($this->getAttribute($_client_, "status") == "suspended")) {
            echo " checked=\"checked\"";
        }
        echo " /><label>";
        echo gettext("Suspended");
        echo "</label>
                            <input type=\"radio\" name=\"status\" value=\"canceled\"";
        // line 113
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        if (($this->getAttribute($_client_, "status") == "canceled")) {
            echo " checked=\"checked\"";
        }
        echo " /><label>";
        echo gettext("Canceled");
        echo "</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 118
        echo gettext("Type");
        echo ":</label>
                        <div class=\"formRight noborder\">
                            <input type=\"radio\" name=\"type\" value=\"individual\"";
        // line 120
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        if (($this->getAttribute($_client_, "type") == "individual")) {
            echo " checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("Individual");
        echo "</label>
                            <input type=\"radio\" name=\"type\" value=\"company\"";
        // line 121
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        if (($this->getAttribute($_client_, "type") == "company")) {
            echo " checked=\"checked\"";
        }
        echo " /><label>";
        echo gettext("Company");
        echo "</label>
                            <input type=\"radio\" name=\"type\" value=\"\"";
        // line 122
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        if ((!$this->getAttribute($_client_, "type"))) {
            echo " checked=\"checked\"";
        }
        echo " /><label>";
        echo gettext("Other/Unknown");
        echo "</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 128
        echo gettext("Mail approved");
        echo ":</label>
                        <div class=\"formRight noborder\">
                            <input type=\"radio\" name=\"email_approved\" value=\"1\"";
        // line 130
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        if (($this->getAttribute($_client_, "email_approved") == 1)) {
            echo " checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("Yes");
        echo "</label>
                            <input type=\"radio\" name=\"email_approved\" value=\"0\"";
        // line 131
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        if (($this->getAttribute($_client_, "email_approved") != 1)) {
            echo " checked=\"checked\"";
        }
        echo " /><label>";
        echo gettext("No");
        echo "</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>



                    <div class=\"rowElem\">
                        <label>";
        // line 139
        echo gettext("Group");
        echo ":</label>
                        <div class=\"formRight\">
                            ";
        // line 141
        if (isset($context["mf"])) { $_mf_ = $context["mf"]; } else { $_mf_ = null; }
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_mf_, "selectbox", array(0 => "group_id", 1 => $this->getAttribute($_admin_, "client_group_get_pairs"), 2 => $this->getAttribute($_client_, "group_id"), 3 => 0, 4 => "Select group"), "method"), "html", null, true);
        echo "
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 146
        echo gettext("Email");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"email\" value=\"";
        // line 148
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_client_, "email"), "html", null, true);
        echo "\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 153
        echo gettext("Name");
        echo ":</label>
                        <div class=\"formRight moreFields\">
                            <ul>
                                <li style=\"width: 250px\"><input type=\"text\" name=\"first_name\" value=\"";
        // line 156
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_client_, "first_name"), "html", null, true);
        echo "\" required=\"required\"/></li>
                                <li class=\"sep\"></li>
                                <li style=\"width: 245px\"><input type=\"text\" name=\"last_name\" value=\"";
        // line 158
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_client_, "last_name"), "html", null, true);
        echo "\" /></li>
                            </ul>
                        </div> 
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 164
        echo gettext("Date of birth");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"birthday\" value=\"";
        // line 166
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_client_, "birthday"), "html", null, true);
        echo "\" />
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\" id=\"company-details\">
                        <label>";
        // line 171
        echo gettext("Company details");
        echo ":</label>
                        <div class=\"formRight moreFields\">
                            <ul>
                                <li style=\"width: 170px\"><input type=\"text\" name=\"company\" value=\"";
        // line 174
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_client_, "company"), "html", null, true);
        echo "\" title=\"Company name\" placeholder=\"Company name\"/></li>
                                <li class=\"sep\"></li>
                                <li style=\"width: 150px\"><input type=\"text\" name=\"company_vat\" value=\"";
        // line 176
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_client_, "company_vat"), "html", null, true);
        echo "\" title=\"Company VAT number\" placeholder=\"Company VAT number\"/></li>
                                <li class=\"sep\"></li>
                                <li style=\"width: 150px\"><input type=\"text\" name=\"company_number\" value=\"";
        // line 178
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_client_, "company_number"), "html", null, true);
        echo "\"  title=\"Company number\" placeholder=\"Company number\"/></li>
                                <li class=\"sep\"></li>
                            </ul>
                        </div> 
                        <div class=\"fix\"></div>
                    </div>
                    <input type=\"submit\" value=\"";
        // line 184
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
                
                <fieldset>
                    <legend>";
        // line 188
        echo gettext("Address and contact details");
        echo "</legend>
                    <div class=\"rowElem\">
                        <label>";
        // line 190
        echo gettext("Address Line 1");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"address_1\" value=\"";
        // line 192
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_client_, "address_1"), "html", null, true);
        echo "\" />
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 197
        echo gettext("Address Line 2");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"address_2\" value=\"";
        // line 199
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_client_, "address_2"), "html", null, true);
        echo "\" />
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 205
        echo gettext("Country");
        echo ":</label>
                        <div class=\"formRight\">
                            ";
        // line 207
        if (isset($context["mf"])) { $_mf_ = $context["mf"]; } else { $_mf_ = null; }
        if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_mf_, "selectbox", array(0 => "country", 1 => $this->getAttribute($_guest_, "system_countries"), 2 => $this->getAttribute($_client_, "country"), 3 => 0, 4 => "Select country"), "method"), "html", null, true);
        echo "
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 212
        echo gettext("State");
        echo ":</label>
                        <div class=\"formRight\">
                            ";
        // line 215
        echo "                            <input type=\"text\" name=\"state\" value=\"";
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_client_, "state"), "html", null, true);
        echo "\" />
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 220
        echo gettext("City");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"city\" value=\"";
        // line 222
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_client_, "city"), "html", null, true);
        echo "\" />
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 227
        echo gettext("Postcode");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"postcode\" value=\"";
        // line 229
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_client_, "postcode"), "html", null, true);
        echo "\" />
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 234
        echo gettext("Phone");
        echo ":</label>
                        <div class=\"formRight moreFields\">
                            <ul>
                                <li><input type=\"text\" name=\"phone_cc\" value=\"";
        // line 237
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_client_, "phone_cc"), "html", null, true);
        echo "\" /></li>
                                <li class=\"sep\"></li>
                                <li style=\"width: 200px;\"><input type=\"text\" name=\"phone\" value=\"";
        // line 239
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_client_, "phone"), "html", null, true);
        echo "\" /></li>
                            </ul>  
                        </div> 
                        <div class=\"fix\"></div>   
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 245
        echo gettext("Passport number");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"document_nr\" value=\"";
        // line 247
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_client_, "document_nr"), "html", null, true);
        echo "\" />
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <input type=\"submit\" value=\"";
        // line 251
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
                
                <fieldset>
                    <legend>";
        // line 255
        echo gettext("Additional settings");
        echo "</legend>
                    <div class=\"rowElem\">
                        <label>";
        // line 257
        echo gettext("Alternative ID");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"aid\" value=\"";
        // line 259
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_client_, "aid"), "html", null, true);
        echo "\" placeholder=\"";
        echo gettext("Used to identify client on foreign system. Usually used by importers");
        echo "\"/>
                        </div> 
                        <div class=\"fix\"></div>   
                    </div>
                    
                    <div class=\"rowElem\">
                        <label>";
        // line 265
        echo gettext("Currency");
        echo ":</label>
                        <div class=\"formRight\">
                            ";
        // line 267
        if (isset($context["mf"])) { $_mf_ = $context["mf"]; } else { $_mf_ = null; }
        if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_mf_, "selectbox", array(0 => "currency", 1 => $this->getAttribute($_guest_, "currency_get_pairs"), 2 => $this->getAttribute($_client_, "currency"), 3 => 0, 4 => "Select currency"), "method"), "html", null, true);
        echo "
                        </div> 
                        <div class=\"fix\"></div>
                    </div>
                    
                    <div class=\"rowElem\">
                        <label>";
        // line 273
        echo gettext("Exempt from tax");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"radio\" name=\"tax_exempt\" value=\"1\"";
        // line 275
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        if ($this->getAttribute($_client_, "tax_exempt")) {
            echo " checked=\"checked\"";
        }
        echo "/><label>Yes</label>
                            <input type=\"radio\" name=\"tax_exempt\" value=\"0\"";
        // line 276
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        if ((!$this->getAttribute($_client_, "tax_exempt"))) {
            echo " checked=\"checked\"";
        }
        echo " /><label>No</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 281
        echo gettext("Signed up time");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"created_at\" value=\"";
        // line 283
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_client_, "created_at"), "Y-m-d"), "html", null, true);
        echo "\" />
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 288
        echo gettext("Notes");
        echo ":</label>
                        <div class=\"formRight\">
                            <textarea name=\"notes\" cols=\"5\" rows=\"5\">";
        // line 290
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_client_, "notes"), "html", null, true);
        echo "</textarea>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <input type=\"submit\" value=\"";
        // line 294
        echo gettext("Update profile");
        echo "\" class=\"greyishBtn submitForm\" />
                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 295
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_client_, "id"), "html", null, true);
        echo "\"/>
                </fieldset>
            </form>
            
            <div class=\"help\">
                <h3>";
        // line 300
        echo gettext("Change password");
        echo "</h3>
            </div>
            <form method=\"post\" action=\"";
        // line 302
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/client/change_password");
        echo "\" class=\"mainForm api-form\" data-api-msg=\"";
        echo gettext("Password changed");
        echo "\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 305
        echo gettext("Password");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"password\" name=\"password\" value=\"\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 313
        echo gettext("Password confirm");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"password\" name=\"password_confirm\" value=\"\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <input type=\"submit\" value=\"";
        // line 320
        echo gettext("Change password");
        echo "\" class=\"greyishBtn submitForm\" />
                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 321
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_client_, "id"), "html", null, true);
        echo "\"/>
                </fieldset>
            </form>

            <div class=\"help\">
                <h3>";
        // line 326
        echo gettext("Custom fields");
        echo "</h3>
                <p>";
        // line 327
        echo gettext("Use these fields to define custom client details");
        echo "</p>
            </div>
            
            <form method=\"post\" action=\"";
        // line 330
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/client/update");
        echo "\" class=\"mainForm api-form save\" data-api-msg=\"";
        echo gettext("Client Profile custom fields updated");
        echo "\">
                <fieldset>
                    ";
        // line 332
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 10));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 333
            echo "                    ";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            $context["fn"] = ("custom_" . $_i_);
            // line 334
            echo "                    <div class=\"rowElem";
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if ($this->getAttribute($_loop_, "first")) {
                echo " noborder";
            }
            echo "\">
                        <label>";
            // line 335
            echo gettext("Custom field");
            echo " ";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "</label>
                        <div class=\"formRight\">
                            <textarea name=\"custom_";
            // line 337
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, $_i_, "html", null, true);
            echo "\" cols=\"5\" rows=\"5\">";
            if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
            if (isset($context["fn"])) { $_fn_ = $context["fn"]; } else { $_fn_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_client_, $_fn_, array(), "array"), "html", null, true);
            echo "</textarea>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 342
        echo "
                    <input type=\"submit\" value=\"";
        // line 343
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 344
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_client_, "id"), "html", null, true);
        echo "\"/>
                </fieldset>
            </form>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-balance\">
            <div class=\"help\">
                <h3>";
        // line 351
        echo gettext("Client payments history");
        echo "</h3>
            </div>

            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <th style=\"width: 15%\">";
        // line 357
        echo gettext("Amount");
        echo "</th>
                        <th>";
        // line 358
        echo gettext("Description");
        echo "</th>
                        <th style=\"width: 20%\">";
        // line 359
        echo gettext("Date");
        echo "</th>
                        <th style=\"width: 5%\">&nbsp;</th>
                    </tr>
                </thead>

                <tbody>
                    ";
        // line 365
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        $context["transactions"] = $this->getAttribute($_admin_, "client_balance_get_list", array(0 => array("per_page" => 20, "client_id" => $this->getAttribute($_client_, "id"))), "method");
        // line 366
        echo "                    ";
        if (isset($context["transactions"])) { $_transactions_ = $context["transactions"]; } else { $_transactions_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_transactions_, "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["tx"]) {
            // line 367
            echo "                    <tr>
                        <td>";
            // line 368
            if (isset($context["mf"])) { $_mf_ = $context["mf"]; } else { $_mf_ = null; }
            if (isset($context["tx"])) { $_tx_ = $context["tx"]; } else { $_tx_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_mf_, "currency_format", array(0 => $this->getAttribute($_tx_, "amount"), 1 => $this->getAttribute($_tx_, "currency")), "method"), "html", null, true);
            echo "</td>
                        <td>";
            // line 369
            if (isset($context["tx"])) { $_tx_ = $context["tx"]; } else { $_tx_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_tx_, "description"), "html", null, true);
            echo "</td>
                        <td>";
            // line 370
            if (isset($context["tx"])) { $_tx_ = $context["tx"]; } else { $_tx_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_tx_, "created_at"), "Y-m-d H:i"), "html", null, true);
            echo "</td>
                        <td>
                            <a class=\"bb-button btn14 bb-rm-tr api-link\" data-api-confirm=\"Are you sure?\" href=\"";
            // line 372
            if (isset($context["tx"])) { $_tx_ = $context["tx"]; } else { $_tx_ = null; }
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/client/balance_delete", array("id" => $this->getAttribute($_tx_, "id")));
            echo "\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                        </td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 376
            echo "                    <tr>
                        <td colspan=\"4\">";
            // line 377
            echo gettext("The list is empty");
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['tx'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 380
        echo "                </tbody>

                <tfoot>
                    <tr>
                        <th class=\"currency\" colspan=\"4\">";
        // line 384
        echo gettext("Balance");
        echo ": ";
        if (isset($context["mf"])) { $_mf_ = $context["mf"]; } else { $_mf_ = null; }
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_mf_, "currency_format", array(0 => $this->getAttribute($_client_, "balance"), 1 => $this->getAttribute($_client_, "currency")), "method"), "html", null, true);
        echo "</th>
                    </tr>
                </tfoot>
            </table>
            
            <div class=\"help\">
                <h3>";
        // line 390
        echo gettext("Add funds for client");
        echo "</h3>
            </div>

            <form method=\"post\" action=\"";
        // line 393
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/client/balance_add_funds");
        echo "\" class=\"mainForm api-form save\" data-api-msg=\"";
        echo gettext("Funds added");
        echo "\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 396
        echo gettext("Amount");
        echo ":</label>
                        <div class=\"formRight noborder\">
                            <input type=\"text\" name=\"amount\" value=\"\" style=\"width: 100px;\" required=\"required\"/> ";
        // line 398
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_client_, "currency"), "html", null, true);
        echo "
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <div class=\"rowElem\">
                        <label>";
        // line 404
        echo gettext("Description");
        echo ":</label>
                        <div class=\"formRight noborder\">
                            <input type=\"text\" name=\"description\" value=\"\"  required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <input type=\"submit\" value=\"";
        // line 411
        echo gettext("Add funds");
        echo "\" class=\"greyishBtn submitForm\" />
                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 412
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_client_, "id"), "html", null, true);
        echo "\"/>
                </fieldset>
            </form>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-orders\">
            <div class=\"help\">
                <h3>";
        // line 419
        echo gettext("Client orders");
        echo "</h3>
            </div>

            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td width=\"40%\">Title</td>
                        <td width=\"20%\">Amount</td>
                        <td width=\"20%\">Period</td>
                        <td width=\"20%\">Status</td>
                        <td>&nbsp;</td>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 434
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        $context["orders"] = $this->getAttribute($_admin_, "order_get_list", array(0 => array("per_page" => "20", "client_id" => $this->getAttribute($_client_, "id"))), "method");
        // line 435
        echo "                    ";
        if (isset($context["orders"])) { $_orders_ = $context["orders"]; } else { $_orders_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_orders_, "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 436
            echo "                    <tr>
                        <td>";
            // line 437
            if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_order_, "id"), "html", null, true);
            echo "</td>
                        <td>";
            // line 438
            if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($_order_, "title"), 30), "html", null, true);
            echo "</td>
                        <td>";
            // line 439
            if (isset($context["mf"])) { $_mf_ = $context["mf"]; } else { $_mf_ = null; }
            if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_mf_, "currency_format", array(0 => $this->getAttribute($_order_, "total"), 1 => $this->getAttribute($_order_, "currency")), "method"), "html", null, true);
            echo "</td>
                        <td>";
            // line 440
            if (isset($context["mf"])) { $_mf_ = $context["mf"]; } else { $_mf_ = null; }
            if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_mf_, "period_name", array(0 => $this->getAttribute($_order_, "period")), "method"), "html", null, true);
            echo "</td>
                        <td>";
            // line 441
            if (isset($context["mf"])) { $_mf_ = $context["mf"]; } else { $_mf_ = null; }
            if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_mf_, "status_name", array(0 => $this->getAttribute($_order_, "status")), "method"), "html", null, true);
            echo "</td>
                        <td class=\"actions\"><a class=\"bb-button btn14\" href=\"";
            // line 442
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("/order/manage");
            echo "/";
            if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_order_, "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a></td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 445
            echo "                    <tr>
                        <td colspan=\"6\">";
            // line 446
            echo gettext("The list is empty");
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 449
        echo "                </tbody>
                
                <tfoot>
                    <tr>
                        <td colspan=\"6\">
                            <a href=\"";
        // line 454
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("order", array("client_id" => $this->getAttribute($_client_, "id")));
        echo "#tab-new\" class=\"btnIconLeft mr10 mt5\"><img src=\"images/icons/dark/money.png\" alt=\"\" class=\"icon\"><span>New order</span></a>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-invoice\">
            <div class=\"help\">
                <h3>";
        // line 463
        echo gettext("Client invoices");
        echo "</h3>
            </div>

            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td>#</td>
                        <td width=\"15%\">Amount</td>
                        <td width=\"30%\">Issued at</td>
                        <td width=\"30%\">Paid at</td>
                        <td width=\"15%\">Status</td>
                        <td>&nbsp;</td>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 478
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        $context["invoices"] = $this->getAttribute($_admin_, "invoice_get_list", array(0 => array("per_page" => "100", "client_id" => $this->getAttribute($_client_, "id"))), "method");
        // line 479
        echo "                    ";
        if (isset($context["invoices"])) { $_invoices_ = $context["invoices"]; } else { $_invoices_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_invoices_, "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["invoice"]) {
            // line 480
            echo "                    <tr>
                        <td>";
            // line 481
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_invoice_, "serie_nr"), "html", null, true);
            echo "</td>
                        <td>";
            // line 482
            if (isset($context["mf"])) { $_mf_ = $context["mf"]; } else { $_mf_ = null; }
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_mf_, "currency_format", array(0 => $this->getAttribute($_invoice_, "total"), 1 => $this->getAttribute($_invoice_, "currency")), "method"), "html", null, true);
            echo "</td>
                        <td>";
            // line 483
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_invoice_, "created_at"), "Y-m-d"), "html", null, true);
            echo "</td>
                        <td>";
            // line 484
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            if ($this->getAttribute($_invoice_, "paid_at")) {
                if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_invoice_, "paid_at"), "Y-m-d"), "html", null, true);
            } else {
                echo "-";
            }
            echo "</td>
                        <td>";
            // line 485
            if (isset($context["mf"])) { $_mf_ = $context["mf"]; } else { $_mf_ = null; }
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_mf_, "status_name", array(0 => $this->getAttribute($_invoice_, "status")), "method"), "html", null, true);
            echo "</td>
                        <td class=\"actions\"><a class=\"bb-button btn14\" href=\"";
            // line 486
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("/invoice/manage");
            echo "/";
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_invoice_, "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a></td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 489
            echo "                    <tr>
                        <td colspan=\"6\">";
            // line 490
            echo gettext("The list is empty");
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['invoice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 493
        echo "                </tbody>
                
                <tfoot>
                    <tr>
                        <td colspan=\"6\">
                            <a href=\"";
        // line 498
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/invoice/prepare", array("client_id" => $this->getAttribute($_client_, "id")));
        echo "\" class=\"btnIconLeft mr10 mt5 api-link\" data-api-jsonp=\"onAfterInvoicePrepared\" ><img src=\"images/icons/dark/money.png\" alt=\"\" class=\"icon\"><span>New invoice</span></a>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-support\">
            <div class=\"help\">
                <h3>";
        // line 507
        echo gettext("Client support tickets");
        echo "</h3>
            </div>
            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td width=\"60%\">Subject</td>
                        <td width=\"15%\">Help desk</td>
                        <td width=\"15%\">Status</td>
                        <td>&nbsp;</td>
                    </tr>
                </thead>
                
                <tbody>
                    ";
        // line 521
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        $context["tickets"] = $this->getAttribute($_admin_, "support_ticket_get_list", array(0 => array("per_page" => "20", "client_id" => $this->getAttribute($_client_, "id"))), "method");
        // line 522
        echo "                    ";
        if (isset($context["tickets"])) { $_tickets_ = $context["tickets"]; } else { $_tickets_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_tickets_, "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 523
            echo "                    <tr>
                        <td>";
            // line 524
            if (isset($context["ticket"])) { $_ticket_ = $context["ticket"]; } else { $_ticket_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_ticket_, "id"), "html", null, true);
            echo "</td>
                        <td>";
            // line 525
            if (isset($context["ticket"])) { $_ticket_ = $context["ticket"]; } else { $_ticket_ = null; }
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($_ticket_, "subject"), 30), "html", null, true);
            echo "</td>
                        <td>";
            // line 526
            if (isset($context["ticket"])) { $_ticket_ = $context["ticket"]; } else { $_ticket_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_ticket_, "helpdesk"), "name"), "html", null, true);
            echo "</td>
                        <td>";
            // line 527
            if (isset($context["mf"])) { $_mf_ = $context["mf"]; } else { $_mf_ = null; }
            if (isset($context["ticket"])) { $_ticket_ = $context["ticket"]; } else { $_ticket_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_mf_, "status_name", array(0 => $this->getAttribute($_ticket_, "status")), "method"), "html", null, true);
            echo "</td>
                        <td class=\"actions\"><a class=\"bb-button btn14\" href=\"";
            // line 528
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("/support/ticket");
            echo "/";
            if (isset($context["ticket"])) { $_ticket_ = $context["ticket"]; } else { $_ticket_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_ticket_, "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a></td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 531
            echo "                    <tr>
                        <td colspan=\"5\">";
            // line 532
            echo gettext("The list is empty");
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 535
        echo "                </tbody>
                
                <tfoot>
                    <tr>
                        <td colspan=\"5\">
                            <a href=\"";
        // line 540
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("support", array("client_id" => $this->getAttribute($_client_, "id")));
        echo "#tab-new\" class=\"btnIconLeft mr10 mt5\" ><img src=\"images/icons/dark/help.png\" alt=\"\" class=\"icon\"><span>New support ticket</span></a>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
        
        <div class=\"tab_content nopadding\" id=\"tab-history\">
            <div class=\"help\">
                <h3>";
        // line 549
        echo gettext("Logins history");
        echo "</h3>
            </div>
            
            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <th>";
        // line 555
        echo gettext("IP");
        echo "</th>
                        <th>";
        // line 556
        echo gettext("Country");
        echo "</th>
                        <th>";
        // line 557
        echo gettext("Date");
        echo "</th>
                    </tr>
                </thead>

                <tbody>
                    ";
        // line 562
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        $context["logins"] = $this->getAttribute($_admin_, "client_login_history_get_list", array(0 => array("per_page" => 10, "page" => $this->getAttribute($_request_, "page"), "client_id" => $this->getAttribute($_client_, "id"))), "method");
        // line 563
        echo "                    ";
        if (isset($context["logins"])) { $_logins_ = $context["logins"]; } else { $_logins_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_logins_, "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["login"]) {
            // line 564
            echo "                    <tr>
                        <td>";
            // line 565
            if (isset($context["login"])) { $_login_ = $context["login"]; } else { $_login_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_login_, "ip"), "html", null, true);
            echo "</td>
                        <td>";
            // line 566
            if (isset($context["login"])) { $_login_ = $context["login"]; } else { $_login_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_ipcountryname_filter($this->getAttribute($_login_, "ip")), "html", null, true);
            echo "</td>
                        <td>";
            // line 567
            if (isset($context["login"])) { $_login_ = $context["login"]; } else { $_login_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_login_, "created_at"), "l, d F Y"), "html", null, true);
            echo "</td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 570
            echo "                    <tr>
                        <td colspan=\"3\">";
            // line 571
            echo gettext("The list is empty");
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['login'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 574
        echo "                </tbody>
            </table>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-emails\">
            <div class=\"help\">
                <h3>";
        // line 580
        echo gettext("Emails sent to client");
        echo "</h3>
            </div>

            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <th>";
        // line 586
        echo gettext("Email subject");
        echo "</th>
                        <th>";
        // line 587
        echo gettext("To");
        echo "</th>
                        <th>";
        // line 588
        echo gettext("Date sent");
        echo "</th>
                        <th style=\"width: 5%\">&nbsp;</th>
                    </tr>
                </thead>

                <tbody>
                    ";
        // line 594
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        $context["emails"] = $this->getAttribute($_admin_, "email_email_get_list", array(0 => array("per_page" => "20", "client_id" => $this->getAttribute($_client_, "id"))), "method");
        // line 595
        echo "                    ";
        if (isset($context["emails"])) { $_emails_ = $context["emails"]; } else { $_emails_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_emails_, "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["email"]) {
            // line 596
            echo "                    <tr>
                        <td>";
            // line 597
            if (isset($context["email"])) { $_email_ = $context["email"]; } else { $_email_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_email_, "subject"), "html", null, true);
            echo "</td>
                        <td>";
            // line 598
            if (isset($context["email"])) { $_email_ = $context["email"]; } else { $_email_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_email_, "recipients"), "html", null, true);
            echo "</td>
                        <td>";
            // line 599
            if (isset($context["email"])) { $_email_ = $context["email"]; } else { $_email_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_email_, "created_at"), "l, d F Y"), "html", null, true);
            echo "</td>
                        <td class=\"actions\"><a class=\"bb-button btn14\" href=\"";
            // line 600
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("email");
            echo "/";
            if (isset($context["email"])) { $_email_ = $context["email"]; } else { $_email_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_email_, "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a></td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 603
            echo "                    <tr>
                        <td colspan=\"4\">";
            // line 604
            echo gettext("The list is empty");
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['email'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 607
        echo "                </tbody>
            </table>
            ";
        // line 609
        if (isset($context["emails"])) { $_emails_ = $context["emails"]; } else { $_emails_ = null; }
        $this->env->loadTemplate("partial_pagination.phtml")->display(array_merge($context, array("list" => $_emails_)));
        // line 610
        echo "        </div>

        <div class=\"tab_content nopadding\" id=\"tab-transactions\">
            <div class=\"help\">
                <h3>";
        // line 614
        echo gettext("Transactions received");
        echo "</h3>
            </div>

            ";
        // line 617
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        $context["transactions"] = $this->getAttribute($this->getAttribute($_admin_, "invoice_transaction_get_list", array(0 => array("client_id" => $this->getAttribute($_client_, "id"), "per_page" => 100)), "method"), "list");
        // line 618
        echo "            <table class=\"tableStatic wide\">
                <thead>
                <tr>
                    <th>";
        // line 621
        echo gettext("ID");
        echo "</th>
                    <th>";
        // line 622
        echo gettext("Type");
        echo "</th>
                    <th>";
        // line 623
        echo gettext("Gateway");
        echo "</th>
                    <th>";
        // line 624
        echo gettext("Amount");
        echo "</th>
                    <th>";
        // line 625
        echo gettext("Status");
        echo "</th>
                    <th>";
        // line 626
        echo gettext("Date");
        echo "</th>
                    <th>&nbsp;</th>
                </tr>
                </thead>

                <tbody>
                ";
        // line 632
        if (isset($context["transactions"])) { $_transactions_ = $context["transactions"]; } else { $_transactions_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_transactions_);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["tx"]) {
            // line 633
            echo "                    <tr>
                        <td>";
            // line 634
            if (isset($context["tx"])) { $_tx_ = $context["tx"]; } else { $_tx_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_tx_, "txn_id"), "html", null, true);
            echo "</td>
                        <td>";
            // line 635
            if (isset($context["tx"])) { $_tx_ = $context["tx"]; } else { $_tx_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_tx_, "type"), "html", null, true);
            echo "</td>
                        <td>";
            // line 636
            if (isset($context["tx"])) { $_tx_ = $context["tx"]; } else { $_tx_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_tx_, "gateway"), "html", null, true);
            echo "</td>
                        <td>";
            // line 637
            if (isset($context["mf"])) { $_mf_ = $context["mf"]; } else { $_mf_ = null; }
            if (isset($context["tx"])) { $_tx_ = $context["tx"]; } else { $_tx_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_mf_, "currency_format", array(0 => $this->getAttribute($_tx_, "amount"), 1 => $this->getAttribute($_tx_, "currency")), "method"), "html", null, true);
            echo "</td>
                        <td>";
            // line 638
            if (isset($context["mf"])) { $_mf_ = $context["mf"]; } else { $_mf_ = null; }
            if (isset($context["tx"])) { $_tx_ = $context["tx"]; } else { $_tx_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_mf_, "status_name", array(0 => $this->getAttribute($_tx_, "status")), "method"), "html", null, true);
            echo "</td>
                        <td>";
            // line 639
            if (isset($context["tx"])) { $_tx_ = $context["tx"]; } else { $_tx_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_datetime($this->getAttribute($_tx_, "created_at")), "html", null, true);
            echo "</td>
                        <td style=\"width: 5%\">
                            <a class=\"bb-button btn14\" href=\"";
            // line 641
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("/invoice/transaction");
            echo "/";
            if (isset($context["tx"])) { $_tx_ = $context["tx"]; } else { $_tx_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_tx_, "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 645
            echo "                    <tr>
                        <td colspan=\"7\">";
            // line 646
            echo gettext("The list is empty");
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['tx'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 649
        echo "                </tbody>
            </table>
        </div>
    </div>
</div>


";
        // line 733
        echo "
";
    }

    // line 737
    public function block_js($context, array $blocks = array())
    {
        // line 738
        echo "<script type=\"text/javascript\">
\$(function() {

});

function onAfterInvoicePrepared(id) {
    bb.redirect(\"";
        // line 744
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoice/manage/");
        echo "/\"+id);
}
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_client_manage.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1650 => 744,  1642 => 738,  1639 => 737,  1634 => 733,  1625 => 649,  1616 => 646,  1613 => 645,  1601 => 641,  1595 => 639,  1589 => 638,  1583 => 637,  1578 => 636,  1573 => 635,  1568 => 634,  1565 => 633,  1559 => 632,  1550 => 626,  1546 => 625,  1542 => 624,  1538 => 623,  1534 => 622,  1530 => 621,  1525 => 618,  1521 => 617,  1515 => 614,  1509 => 610,  1506 => 609,  1502 => 607,  1493 => 604,  1490 => 603,  1479 => 600,  1474 => 599,  1469 => 598,  1464 => 597,  1461 => 596,  1454 => 595,  1450 => 594,  1441 => 588,  1437 => 587,  1433 => 586,  1424 => 580,  1416 => 574,  1407 => 571,  1404 => 570,  1395 => 567,  1390 => 566,  1385 => 565,  1382 => 564,  1375 => 563,  1370 => 562,  1362 => 557,  1358 => 556,  1354 => 555,  1345 => 549,  1332 => 540,  1325 => 535,  1316 => 532,  1313 => 531,  1302 => 528,  1296 => 527,  1291 => 526,  1286 => 525,  1281 => 524,  1278 => 523,  1271 => 522,  1267 => 521,  1250 => 507,  1237 => 498,  1230 => 493,  1221 => 490,  1218 => 489,  1207 => 486,  1201 => 485,  1191 => 484,  1186 => 483,  1180 => 482,  1175 => 481,  1172 => 480,  1165 => 479,  1161 => 478,  1143 => 463,  1130 => 454,  1123 => 449,  1114 => 446,  1111 => 445,  1100 => 442,  1094 => 441,  1088 => 440,  1082 => 439,  1077 => 438,  1072 => 437,  1069 => 436,  1062 => 435,  1058 => 434,  1040 => 419,  1029 => 412,  1025 => 411,  1015 => 404,  1005 => 398,  1000 => 396,  992 => 393,  986 => 390,  973 => 384,  967 => 380,  958 => 377,  955 => 376,  945 => 372,  939 => 370,  934 => 369,  928 => 368,  925 => 367,  918 => 366,  914 => 365,  905 => 359,  901 => 358,  897 => 357,  888 => 351,  877 => 344,  873 => 343,  870 => 342,  846 => 337,  838 => 335,  830 => 334,  826 => 333,  809 => 332,  802 => 330,  796 => 327,  792 => 326,  783 => 321,  779 => 320,  769 => 313,  758 => 305,  750 => 302,  745 => 300,  736 => 295,  732 => 294,  724 => 290,  719 => 288,  710 => 283,  705 => 281,  694 => 276,  687 => 275,  682 => 273,  670 => 267,  665 => 265,  653 => 259,  648 => 257,  643 => 255,  636 => 251,  628 => 247,  623 => 245,  613 => 239,  607 => 237,  601 => 234,  592 => 229,  587 => 227,  578 => 222,  573 => 220,  563 => 215,  558 => 212,  547 => 207,  542 => 205,  532 => 199,  527 => 197,  518 => 192,  513 => 190,  508 => 188,  501 => 184,  491 => 178,  485 => 176,  479 => 174,  473 => 171,  464 => 166,  459 => 164,  449 => 158,  443 => 156,  437 => 153,  428 => 148,  423 => 146,  412 => 141,  407 => 139,  391 => 131,  382 => 130,  377 => 128,  363 => 122,  354 => 121,  345 => 120,  340 => 118,  327 => 113,  318 => 112,  309 => 111,  304 => 109,  296 => 106,  290 => 103,  274 => 93,  267 => 92,  257 => 86,  232 => 81,  223 => 80,  214 => 75,  203 => 71,  195 => 67,  187 => 63,  178 => 59,  170 => 55,  162 => 51,  150 => 46,  141 => 41,  124 => 34,  113 => 26,  109 => 25,  105 => 24,  101 => 23,  97 => 22,  93 => 21,  89 => 20,  85 => 19,  81 => 18,  75 => 14,  72 => 13,  61 => 9,  55 => 8,  49 => 7,  46 => 6,  43 => 5,  33 => 3,  28 => 2,);
    }
}
