<?php

/* mod_client_index.phtml */
class __TwigTemplate_3c0b23ada09aca5d0261f725e934aef0691208e62fd867b929072b0e668595e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout_default.phtml");

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'top_content' => array($this, 'block_top_content'),
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
        echo gettext("Clients");
    }

    // line 5
    public function block_top_content($context, array $blocks = array())
    {
        // line 6
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        if ($this->getAttribute($_request_, "show_filter")) {
            // line 7
            echo "<div class=\"widget filterWidget\">
    <div class=\"head\"><h5 class=\"iMagnify\">";
            // line 8
            echo gettext("Filter clients");
            echo "</h5></div>
    <div class=\"body nopadding\">

        <form method=\"get\" action=\"\" class=\"mainForm\">
            <input type=\"hidden\" name=\"_url\" value=\"";
            // line 12
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_request_, "_url"), "html", null, true);
            echo "\" />
            <fieldset>
                <div class=\"rowElem noborder\">
                    <label>";
            // line 15
            echo gettext("ID");
            echo "</label>
                    <div class=\"formRight\">
                        <input type=\"text\" name=\"id\" value=\"";
            // line 17
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_request_, "id"), "html", null, true);
            echo "\">
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>";
            // line 23
            echo gettext("Name");
            echo "</label>
                    <div class=\"formRight\">
                        <input type=\"text\" name=\"name\" value=\"";
            // line 25
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_request_, "name"), "html", null, true);
            echo "\">
                    </div>
                    <div class=\"fix\"></div>
                </div>
                
                <div class=\"rowElem\">
                    <label>";
            // line 31
            echo gettext("Company name");
            echo "</label>
                    <div class=\"formRight\">
                        <input type=\"text\" name=\"company\" value=\"";
            // line 33
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_request_, "company"), "html", null, true);
            echo "\">
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>";
            // line 39
            echo gettext("Email");
            echo "</label>
                    <div class=\"formRight\">
                        <input type=\"text\" name=\"email\" value=\"";
            // line 41
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_request_, "email"), "html", null, true);
            echo "\" />
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>";
            // line 47
            echo gettext("Group");
            echo ":</label>
                    <div class=\"formRight\">
                        ";
            // line 49
            if (isset($context["mf"])) { $_mf_ = $context["mf"]; } else { $_mf_ = null; }
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_mf_, "selectbox", array(0 => "group_id", 1 => $this->getAttribute($_admin_, "client_group_get_pairs"), 2 => $this->getAttribute($_request_, "group_id"), 3 => 0, 4 => "All groups"), "method"), "html", null, true);
            echo "
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label>";
            // line 55
            echo gettext("Status");
            echo ":</label>
                    <div class=\"formRight\">
                        <input type=\"radio\" name=\"status\" value=\"\"";
            // line 57
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            if ((!$this->getAttribute($_request_, "status"))) {
                echo " checked=\"checked\"";
            }
            echo "/><label>";
            echo gettext("All");
            echo "</label>
                        <input type=\"radio\" name=\"status\" value=\"active\"";
            // line 58
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            if (($this->getAttribute($_request_, "status") == "active")) {
                echo " checked=\"checked\"";
            }
            echo "/><label>";
            echo gettext("Active");
            echo "</label>
                        <input type=\"radio\" name=\"status\" value=\"suspended\"";
            // line 59
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            if (($this->getAttribute($_request_, "status") == "suspended")) {
                echo " checked=\"checked\"";
            }
            echo " /><label>";
            echo gettext("Suspended");
            echo "</label>
                        <input type=\"radio\" name=\"status\" value=\"canceled\"";
            // line 60
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            if (($this->getAttribute($_request_, "status") == "canceled")) {
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
            // line 66
            echo gettext("Registration date");
            echo "</label>
                    <div class=\"formRight moreFields\">
                        <ul>
                            <li style=\"width: 100px\"><input type=\"text\" name=\"date_from\" value=\"";
            // line 69
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
            // line 71
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
            // line 78
            echo gettext("Filter");
            echo "\" class=\"greyishBtn submitForm\" />
            </fieldset>
        </form>
        <div class=\"fix\"></div>
    </div>
</div>
";
        } else {
            // line 85
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            $context["count_clients"] = $this->getAttribute($_admin_, "client_get_statuses");
            // line 86
            echo "<div class=\"stats\">
    <ul>
        <li><a href=\"";
            // line 88
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client", array("status" => "active"));
            echo "\" class=\"count green\" title=\"\">";
            if (isset($context["count_clients"])) { $_count_clients_ = $context["count_clients"]; } else { $_count_clients_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_count_clients_, "active"), "html", null, true);
            echo "</a><span>";
            echo gettext("Active");
            echo "</span></li>
        <li><a href=\"";
            // line 89
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client", array("status" => "suspended"));
            echo "\" class=\"count blue\" title=\"\">";
            if (isset($context["count_clients"])) { $_count_clients_ = $context["count_clients"]; } else { $_count_clients_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_count_clients_, "suspended"), "html", null, true);
            echo "</a><span>";
            echo gettext("Suspended");
            echo "</span></li>
        <li><a href=\"";
            // line 90
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client", array("status" => "canceled"));
            echo "\" class=\"count red\" title=\"\">";
            if (isset($context["count_clients"])) { $_count_clients_ = $context["count_clients"]; } else { $_count_clients_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_count_clients_, "canceled"), "html", null, true);
            echo "</a><span>";
            echo gettext("Canceled");
            echo "</span></li>
        <li class=\"last\"><a href=\"";
            // line 91
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client");
            echo "\" class=\"count grey\" title=\"\">";
            if (isset($context["count_clients"])) { $_count_clients_ = $context["count_clients"]; } else { $_count_clients_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($_count_clients_, "active") + $this->getAttribute($_count_clients_, "canceled")) + $this->getAttribute($_count_clients_, "suspended")), "html", null, true);
            echo "</a><span>";
            echo gettext("Total");
            echo "</span></li>
    </ul>
    <div class=\"fix\"></div>
</div>
";
        }
    }

    // line 98
    public function block_content($context, array $blocks = array())
    {
        // line 99
        echo "<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-index\">";
        // line 102
        echo gettext("Clients");
        echo "</a></li>
        <li><a href=\"#tab-new\">";
        // line 103
        echo gettext("New client");
        echo "</a></li>
        <li><a href=\"#tab-groups\">";
        // line 104
        echo gettext("Groups");
        echo "</a></li>
        <li><a href=\"#tab-new-group\">";
        // line 105
        echo gettext("New group");
        echo "</a></li>
    </ul>

    <div class=\"tabs_container\">

        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-index\">
            ";
        // line 112
        if (isset($context["mf"])) { $_mf_ = $context["mf"]; } else { $_mf_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_mf_, "table_search"), "html", null, true);
        echo "
            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td style=\"width: 2%\"><input type=\"checkbox\" class=\"batch-delete-master-checkbox\"/></td>
                        <td colspan=\"2\">";
        // line 117
        echo gettext("Name");
        echo "</td>
                        <td>";
        // line 118
        echo gettext("Company");
        echo "</td>
                        <td width=\"30%\">";
        // line 119
        echo gettext("Email");
        echo "</td>
                        <td>";
        // line 120
        echo gettext("Status");
        echo "</td>
                        <td>";
        // line 121
        echo gettext("Date");
        echo "</td>
                        <td width=\"13%\">&nbsp;</td>
                    </tr>
                </thead>

                <tbody>
                    ";
        // line 127
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        $context["clients"] = $this->getAttribute($_admin_, "client_get_list", array(0 => twig_array_merge(array("per_page" => 30, "page" => $this->getAttribute($_request_, "page")), $_request_)), "method");
        // line 128
        echo "                    ";
        if (isset($context["clients"])) { $_clients_ = $context["clients"]; } else { $_clients_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_clients_, "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 129
            echo "                    <tr>
                        <td><input type=\"checkbox\" class=\"batch-delete-checkbox\" data-item-id=\"";
            // line 130
            if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_client_, "id"), "html", null, true);
            echo "\"/></td>
                        <td>
                            <a href=\"";
            // line 132
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client/manage");
            echo "/";
            if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_client_, "id"), "html", null, true);
            echo "\"><img src=\"";
            if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
            echo twig_escape_filter($this->env, twig_gravatar_filter($this->getAttribute($_client_, "email")), "html", null, true);
            echo "?size=20\" alt=\"";
            if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_client_, "id"), "html", null, true);
            echo "\" /></a>
                        </td>
                        <td>
                            <span class=\"flag flag-";
            // line 135
            if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_client_, "country"), "html", null, true);
            echo "\" title=\"";
            if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
            if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_guest_, "system_countries"), $this->getAttribute($_client_, "country"), array(), "array"), "html", null, true);
            echo "\"></span>
                            <a href=\"";
            // line 136
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client/manage");
            echo "/";
            if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_client_, "id"), "html", null, true);
            echo "\" title=\"";
            if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_client_, "first_name"), "html", null, true);
            echo " ";
            if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_client_, "last_name"), "html", null, true);
            echo "\">";
            if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($_client_, "first_name"), "1", null, "."), "html", null, true);
            echo " ";
            if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($_client_, "last_name"), 15), "html", null, true);
            echo "</a></td>
                        <td><a href=\"";
            // line 137
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client/manage");
            echo "/";
            if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_client_, "id"), "html", null, true);
            echo "\" title=\"";
            if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_client_, "company"), "html", null, true);
            echo "\">";
            if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, (($this->getAttribute($_client_, "company", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_client_, "company"), "-")) : ("-")), 30), "html", null, true);
            echo "</a></td>
                        <td><a href=\"";
            // line 138
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client/manage");
            echo "/";
            if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_client_, "id"), "html", null, true);
            echo "\" title=\"";
            if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_client_, "email"), "html", null, true);
            echo "\">";
            if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($_client_, "email"), 30), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 139
            if (isset($context["mf"])) { $_mf_ = $context["mf"]; } else { $_mf_ = null; }
            if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_mf_, "status_name", array(0 => $this->getAttribute($_client_, "status")), "method"), "html", null, true);
            echo "</td>
                        <td>";
            // line 140
            if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_client_, "created_at"), "Y-m-d"), "html", null, true);
            echo "</td>
                        <td>
                            <a class=\"btn14 bb-rm-tr api-link\" href=\"";
            // line 142
            if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/client/delete", array("id" => $this->getAttribute($_client_, "id")));
            echo "\" data-api-confirm=\"Are you sure?\" data-api-reload=\"1\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                            <a class=\"btn14\" href=\"";
            // line 143
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client/manage");
            echo "/";
            if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_client_, "id"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                        </td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 147
            echo "                    <tr>
                        <td colspan=\"7\">";
            // line 148
            echo gettext("The list is empty");
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "                </tbody>
            </table>

            ";
        // line 154
        $this->env->loadTemplate("partial_batch_delete.phtml")->display(array_merge($context, array("action" => "admin/client/batch_delete")));
        // line 155
        echo "            ";
        if (isset($context["clients"])) { $_clients_ = $context["clients"]; } else { $_clients_ = null; }
        $this->env->loadTemplate("partial_pagination.phtml")->display(array_merge($context, array("list" => $_clients_, "url" => "client")));
        // line 156
        echo "        </div>

        <div class=\"fix\"></div>

        <div class=\"tab_content nopadding\" id=\"tab-new\">

            <form method=\"post\" action=\"";
        // line 162
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/client/create");
        echo "\" class=\"mainForm api-form save\" data-api-redirect=\"";
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client");
        echo "\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 165
        echo gettext("Status");
        echo ":</label>
                        <div class=\"formRight noborder\">
                            <input type=\"radio\" name=\"status\" value=\"active\" checked=\"checked\"/><label>";
        // line 167
        echo gettext("Active");
        echo "</label>
                            <input type=\"radio\" name=\"status\" value=\"canceled\"/><label>";
        // line 168
        echo gettext("Canceled");
        echo "</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 173
        echo gettext("Group");
        echo ":</label>
                        <div class=\"formRight\">
                            ";
        // line 175
        if (isset($context["mf"])) { $_mf_ = $context["mf"]; } else { $_mf_ = null; }
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_mf_, "selectbox", array(0 => "group_id", 1 => $this->getAttribute($_admin_, "client_group_get_pairs"), 2 => $this->getAttribute($_request_, "group_id"), 3 => 0, 4 => "Select group"), "method"), "html", null, true);
        echo "
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 180
        echo gettext("Email");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"email\" value=\"";
        // line 182
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_request_, "email"), "html", null, true);
        echo "\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 187
        echo gettext("Name");
        echo ":</label>
                        <div class=\"formRight moreFields\">
                            <ul>
                                <li style=\"width: 200px\"><input type=\"text\" name=\"first_name\" value=\"";
        // line 190
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_request_, "first_name"), "html", null, true);
        echo "\" required=\"required\"/></li>
                                <li class=\"sep\"></li>
                                <li style=\"width: 200px\"><input type=\"text\" name=\"last_name\" value=\"";
        // line 192
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_request_, "last_name"), "html", null, true);
        echo "\"/></li>
                            </ul>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 198
        echo gettext("Company");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"company\" value=\"";
        // line 200
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_request_, "company"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 205
        echo gettext("Address Line 1");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"address_1\" value=\"";
        // line 207
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_request_, "address_1"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 212
        echo gettext("Address Line 2");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"address_2\" value=\"";
        // line 214
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_request_, "address_2"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 219
        echo gettext("City");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"city\" value=\"";
        // line 221
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_request_, "city"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 226
        echo gettext("State");
        echo ":</label>
                        <div class=\"formRight\">
                            ";
        // line 229
        echo "                            <input type=\"text\" name=\"state\" value=\"";
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_request_, "state"), "html", null, true);
        echo "\" />
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 234
        echo gettext("Country");
        echo ":</label>
                        <div class=\"formRight\">
                            ";
        // line 236
        if (isset($context["mf"])) { $_mf_ = $context["mf"]; } else { $_mf_ = null; }
        if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_mf_, "selectbox", array(0 => "country", 1 => $this->getAttribute($_guest_, "system_countries"), 2 => $this->getAttribute($_request_, "country"), 3 => 0, 4 => "Select country"), "method"), "html", null, true);
        echo "
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 241
        echo gettext("Postcode");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"postcode\" value=\"";
        // line 243
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_request_, "postcode"), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 248
        echo gettext("Phone");
        echo ":</label>
                        <div class=\"formRight moreFields\">
                            <ul>
                                <li><input type=\"text\" name=\"phone_cc\" value=\"";
        // line 251
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_request_, "phone_cc"), "html", null, true);
        echo "\"/></li>
                                <li class=\"sep\"></li>
                                <li style=\"width: 200px;\"><input type=\"text\" name=\"phone\" value=\"";
        // line 253
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_request_, "phone"), "html", null, true);
        echo "\"/></li>
                            </ul>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 260
        echo gettext("Currency");
        echo ":</label>
                        <div class=\"formRight\">
                            ";
        // line 262
        if (isset($context["mf"])) { $_mf_ = $context["mf"]; } else { $_mf_ = null; }
        if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_mf_, "selectbox", array(0 => "currency", 1 => $this->getAttribute($_guest_, "currency_get_pairs"), 2 => $this->getAttribute($_request_, "currency"), 3 => 0, 4 => "Select currency"), "method"), "html", null, true);
        echo "
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <div class=\"rowElem\">
                        <label>";
        // line 268
        echo gettext("Password");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"password\" name=\"password\" value=\"\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <input type=\"submit\" value=\"";
        // line 275
        echo gettext("Create");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-groups\">
            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td>";
        // line 284
        echo gettext("Title");
        echo "</td>
                        <td width=\"13%\">";
        // line 285
        echo gettext("Actions");
        echo "</td>
                    </tr>
                </thead>

                <tbody>
                    ";
        // line 290
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_admin_, "client_group_get_pairs"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["id"] => $context["group"]) {
            // line 291
            echo "                    <tr>
                        <td>";
            // line 292
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            echo twig_escape_filter($this->env, $_group_, "html", null, true);
            echo "</td>
                        <td>
                            <a class=\"btn14\" href=\"";
            // line 294
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client/group");
            echo "/";
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                            <a class=\"btn14 api-link bb-rm-tr\" data-api-reload=\"1\" data-api-confirm=\"Are you sure?\" href=\"";
            // line 295
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/client/group_delete", array("id" => $_id_));
            echo "\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                        </td>
                    </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 299
            echo "                    <tr>
                        <td colspan=\"2\">";
            // line 300
            echo gettext("The list is empty");
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 303
        echo "                </tbody>
            </table>
        </div>


        <div class=\"tab_content nopadding\" id=\"tab-new-group\">

            <form method=\"post\" action=\"";
        // line 310
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/client/group_create");
        echo "\" class=\"mainForm api-form save\" data-api-redirect=\"";
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client");
        echo "\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 313
        echo gettext("Title");
        echo ":</label>
                        <div class=\"formRight noborder\">
                            <input type=\"text\" name=\"title\" value=\"";
        // line 315
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_request_, "title"), "html", null, true);
        echo "\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <input type=\"submit\" value=\"";
        // line 320
        echo gettext("Create");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
        </div>

    </div>
</div>

";
    }

    // line 330
    public function block_js($context, array $blocks = array())
    {
        // line 331
        echo "


";
    }

    public function getTemplateName()
    {
        return "mod_client_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  835 => 331,  832 => 330,  819 => 320,  810 => 315,  805 => 313,  797 => 310,  788 => 303,  779 => 300,  776 => 299,  766 => 295,  759 => 294,  753 => 292,  750 => 291,  744 => 290,  736 => 285,  732 => 284,  720 => 275,  710 => 268,  698 => 262,  693 => 260,  682 => 253,  676 => 251,  670 => 248,  661 => 243,  656 => 241,  645 => 236,  640 => 234,  630 => 229,  625 => 226,  616 => 221,  611 => 219,  602 => 214,  597 => 212,  588 => 207,  583 => 205,  574 => 200,  569 => 198,  559 => 192,  553 => 190,  547 => 187,  538 => 182,  533 => 180,  522 => 175,  517 => 173,  509 => 168,  505 => 167,  500 => 165,  492 => 162,  484 => 156,  480 => 155,  478 => 154,  473 => 151,  464 => 148,  461 => 147,  449 => 143,  444 => 142,  438 => 140,  432 => 139,  419 => 138,  406 => 137,  387 => 136,  378 => 135,  363 => 132,  357 => 130,  354 => 129,  347 => 128,  343 => 127,  334 => 121,  330 => 120,  326 => 119,  322 => 118,  318 => 117,  309 => 112,  299 => 105,  295 => 104,  291 => 103,  287 => 102,  282 => 99,  279 => 98,  264 => 91,  255 => 90,  246 => 89,  237 => 88,  233 => 86,  230 => 85,  220 => 78,  203 => 71,  191 => 69,  185 => 66,  171 => 60,  162 => 59,  153 => 58,  144 => 57,  139 => 55,  127 => 49,  122 => 47,  112 => 41,  107 => 39,  97 => 33,  92 => 31,  82 => 25,  77 => 23,  67 => 17,  62 => 15,  55 => 12,  48 => 8,  45 => 7,  42 => 6,  39 => 5,  33 => 3,  28 => 2,);
    }
}
