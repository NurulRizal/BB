<?php

/* mod_index_dashboard.phtml */
class __TwigTemplate_04d8ee052ba71210bcd17d359d99707cb46d435244cb9792aa6907f8d5122103 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout_default.phtml");

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Dashboard");
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
";
        // line 7
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_admin_, "system_messages", array(0 => array("type" => "info")), "method"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 8
            echo "<div class=\"nNote nInformation hideit ";
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if ($this->getAttribute($_loop_, "first")) {
                echo "first";
            }
            echo "\">
    <p><strong>";
            // line 9
            echo gettext("INFORMATION");
            echo ": </strong>";
            if (isset($context["msg"])) { $_msg_ = $context["msg"]; } else { $_msg_ = null; }
            echo twig_escape_filter($this->env, $_msg_, "html", null, true);
            echo "</p>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
";
        // line 13
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if ($this->getAttribute($_admin_, "system_is_allowed", array(0 => array("mod" => "stats")), "method")) {
            // line 14
            echo "<div class=\"widget\">
    <div class=\"head\"><h5><i class=\"dark-sprite-icon sprite-chart8\" style=\"margin: 0 15px 0 -15px\"></i>";
            // line 15
            if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_guest_, "system_company"), "name"), "html", null, true);
            echo " ";
            echo gettext("Statistics");
            echo "</h5></div>
    ";
            // line 16
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            $context["stats"] = $this->getAttribute($_admin_, "stats_get_summary");
            // line 17
            echo "    ";
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            $context["income"] = $this->getAttribute($_admin_, "stats_get_summary_income");
            // line 18
            echo "    <table cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" class=\"tableStatic\">
        <thead>
            <tr>
                <td width=\"10%\">";
            // line 21
            echo gettext("Metric");
            echo "</td>
                <td>";
            // line 22
            echo gettext("Today");
            echo "</td>
                <td>";
            // line 23
            echo gettext("Yesterday");
            echo "</td>
                <td>";
            // line 24
            echo gettext("This month so far");
            echo "</td>
                <td>";
            // line 25
            echo gettext("Last month");
            echo "</td>
                <td>";
            // line 26
            echo gettext("Total");
            echo "</td>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>";
            // line 32
            echo gettext("Income");
            echo "</td>
                <td align=\"center\"><a href=\"";
            // line 33
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoice", array("paid_at" => twig_date_format_filter($this->env, "now", "Y-m-d")));
            echo "\" title=\"\" class=\"webStatsLink\">";
            if (isset($context["mf"])) { $_mf_ = $context["mf"]; } else { $_mf_ = null; }
            if (isset($context["income"])) { $_income_ = $context["income"]; } else { $_income_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_mf_, "currency_format", array(0 => $this->getAttribute($_income_, "today")), "method"), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 34
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoice", array("paid_at" => twig_date_format_filter($this->env, "yesterday", "Y-m-d")));
            echo "\" title=\"\" class=\"webStatsLink\">";
            if (isset($context["mf"])) { $_mf_ = $context["mf"]; } else { $_mf_ = null; }
            if (isset($context["income"])) { $_income_ = $context["income"]; } else { $_income_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_mf_, "currency_format", array(0 => $this->getAttribute($_income_, "yesterday")), "method"), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 35
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoice");
            echo "\" title=\"\" class=\"webStatsLink\">";
            if (isset($context["mf"])) { $_mf_ = $context["mf"]; } else { $_mf_ = null; }
            if (isset($context["income"])) { $_income_ = $context["income"]; } else { $_income_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_mf_, "currency_format", array(0 => $this->getAttribute($_income_, "this_month")), "method"), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 36
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoice");
            echo "\" title=\"\" class=\"webStatsLink\">";
            if (isset($context["mf"])) { $_mf_ = $context["mf"]; } else { $_mf_ = null; }
            if (isset($context["income"])) { $_income_ = $context["income"]; } else { $_income_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_mf_, "currency_format", array(0 => $this->getAttribute($_income_, "last_month")), "method"), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 37
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoice");
            echo "\" title=\"\" class=\"webStatsLink\">";
            if (isset($context["mf"])) { $_mf_ = $context["mf"]; } else { $_mf_ = null; }
            if (isset($context["income"])) { $_income_ = $context["income"]; } else { $_income_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_mf_, "currency_format", array(0 => $this->getAttribute($_income_, "total")), "method"), "html", null, true);
            echo "</a></td>
            </tr>
            <tr>
                <td>";
            // line 40
            echo gettext("Clients");
            echo "</td>
                <td align=\"center\"><a href=\"";
            // line 41
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client", array("created_at" => twig_date_format_filter($this->env, "now", "Y-m-d")));
            echo "\" title=\"\" class=\"webStatsLink\">";
            if (isset($context["stats"])) { $_stats_ = $context["stats"]; } else { $_stats_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_stats_, "clients_today"), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 42
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client", array("created_at" => twig_date_format_filter($this->env, "yesterday", "Y-m-d")));
            echo "\" title=\"\" class=\"webStatsLink\">";
            if (isset($context["stats"])) { $_stats_ = $context["stats"]; } else { $_stats_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_stats_, "clients_yesterday"), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 43
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client");
            echo "\" title=\"\" class=\"webStatsLink\">";
            if (isset($context["stats"])) { $_stats_ = $context["stats"]; } else { $_stats_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_stats_, "clients_this_month"), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 44
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client");
            echo "\" title=\"\" class=\"webStatsLink\">";
            if (isset($context["stats"])) { $_stats_ = $context["stats"]; } else { $_stats_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_stats_, "clients_last_month"), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 45
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client");
            echo "\" title=\"\" class=\"webStatsLink\">";
            if (isset($context["stats"])) { $_stats_ = $context["stats"]; } else { $_stats_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_stats_, "clients_total"), "html", null, true);
            echo "</a></td>
            </tr>
            <tr>
                <td>";
            // line 48
            echo gettext("Orders");
            echo "</td>
                <td align=\"center\"><a href=\"";
            // line 49
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("order", array("created_at" => twig_date_format_filter($this->env, "now", "Y-m-d")));
            echo "\" title=\"\" class=\"webStatsLink\">";
            if (isset($context["stats"])) { $_stats_ = $context["stats"]; } else { $_stats_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_stats_, "orders_today"), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 50
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("order", array("created_at" => twig_date_format_filter($this->env, "yesterday", "Y-m-d")));
            echo "\" title=\"\" class=\"webStatsLink\">";
            if (isset($context["stats"])) { $_stats_ = $context["stats"]; } else { $_stats_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_stats_, "orders_yesterday"), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 51
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("order");
            echo "\" title=\"\" class=\"webStatsLink\">";
            if (isset($context["stats"])) { $_stats_ = $context["stats"]; } else { $_stats_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_stats_, "orders_this_month"), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 52
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("order");
            echo "\" title=\"\" class=\"webStatsLink\">";
            if (isset($context["stats"])) { $_stats_ = $context["stats"]; } else { $_stats_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_stats_, "orders_last_month"), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 53
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("order");
            echo "\" title=\"\" class=\"webStatsLink\">";
            if (isset($context["stats"])) { $_stats_ = $context["stats"]; } else { $_stats_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_stats_, "orders_total"), "html", null, true);
            echo "</a></td>
            </tr>
            <tr>
                <td>";
            // line 56
            echo gettext("Invoices");
            echo "</td>
                <td align=\"center\"><a href=\"";
            // line 57
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoice", array("created_at" => twig_date_format_filter($this->env, "now", "Y-m-d")));
            echo "\" title=\"\" class=\"webStatsLink\">";
            if (isset($context["stats"])) { $_stats_ = $context["stats"]; } else { $_stats_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_stats_, "invoices_today"), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 58
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoice", array("created_at" => twig_date_format_filter($this->env, "yesterday", "Y-m-d")));
            echo "\" title=\"\" class=\"webStatsLink\">";
            if (isset($context["stats"])) { $_stats_ = $context["stats"]; } else { $_stats_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_stats_, "invoices_yesterday"), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 59
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoice");
            echo "\" title=\"\" class=\"webStatsLink\">";
            if (isset($context["stats"])) { $_stats_ = $context["stats"]; } else { $_stats_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_stats_, "invoices_this_month"), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 60
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoice");
            echo "\" title=\"\" class=\"webStatsLink\">";
            if (isset($context["stats"])) { $_stats_ = $context["stats"]; } else { $_stats_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_stats_, "invoices_last_month"), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 61
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoice");
            echo "\" title=\"\" class=\"webStatsLink\">";
            if (isset($context["stats"])) { $_stats_ = $context["stats"]; } else { $_stats_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_stats_, "invoices_total"), "html", null, true);
            echo "</a></td>
            </tr>
            <tr>
                <td>";
            // line 64
            echo gettext("Tickets");
            echo "</td>
                <td align=\"center\"><a href=\"";
            // line 65
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("support", array("created_at" => twig_date_format_filter($this->env, "now", "Y-m-d")));
            echo "\" title=\"\" class=\"webStatsLink\">";
            if (isset($context["stats"])) { $_stats_ = $context["stats"]; } else { $_stats_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_stats_, "tickets_today"), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 66
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("support", array("created_at" => twig_date_format_filter($this->env, "yesterday", "Y-m-d")));
            echo "\" title=\"\" class=\"webStatsLink\">";
            if (isset($context["stats"])) { $_stats_ = $context["stats"]; } else { $_stats_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_stats_, "tickets_yesterday"), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 67
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("support");
            echo "\" title=\"\" class=\"webStatsLink\">";
            if (isset($context["stats"])) { $_stats_ = $context["stats"]; } else { $_stats_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_stats_, "tickets_this_month"), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 68
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("support");
            echo "\" title=\"\" class=\"webStatsLink\">";
            if (isset($context["stats"])) { $_stats_ = $context["stats"]; } else { $_stats_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_stats_, "tickets_last_month"), "html", null, true);
            echo "</a></td>
                <td align=\"center\"><a href=\"";
            // line 69
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("support");
            echo "\" title=\"\" class=\"webStatsLink\">";
            if (isset($context["stats"])) { $_stats_ = $context["stats"]; } else { $_stats_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_stats_, "tickets_total"), "html", null, true);
            echo "</a></td>
            </tr>
        </tbody>
    </table>
</div>
";
        }
        // line 75
        echo "
";
        // line 76
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        $context["orders"] = $this->getAttribute($_admin_, "order_get_list", array(0 => array("per_page" => "5", "status" => "active")), "method");
        // line 77
        if (isset($context["orders"])) { $_orders_ = $context["orders"]; } else { $_orders_ = null; }
        if ((twig_length_filter($this->env, $this->getAttribute($_orders_, "list")) > 0)) {
            // line 78
            echo "<div class=\"widgets\">
    <div class=\"left\">
        <div class=\"widget\">
            <div class=\"head\">
                <h5 class=\"iMoney\">";
            // line 82
            echo gettext("Latest orders");
            echo "</h5>
                <div class=\"num\"><a href=\"";
            // line 83
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("order");
            echo "\" class=\"greenNum\">+";
            if (isset($context["orders"])) { $_orders_ = $context["orders"]; } else { $_orders_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_orders_, "total"), "html", null, true);
            echo "</a></div>
            </div>
            <div style=\"height: 221px; overflow: auto;\">
                <table class=\"tableStatic wide\">
                    <thead>
                        <tr>
                            <td>";
            // line 89
            echo gettext("Order");
            echo "</td>
                            <td>";
            // line 90
            echo gettext("Client");
            echo "</td>
                        </tr>
                    </thead>
                    <tbody>
                    ";
            // line 94
            if (isset($context["orders"])) { $_orders_ = $context["orders"]; } else { $_orders_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_orders_, "list"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 95
                echo "                        <tr title=\"";
                if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                echo twig_escape_filter($this->env, twig_timeago_filter($this->getAttribute($_order_, "created_at")), "html", null, true);
                echo " ago\">
                            <td><a href=\"";
                // line 96
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("order/manage");
                echo "/";
                if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_order_, "id"), "html", null, true);
                echo "\">";
                if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($_order_, "title"), 35), "html", null, true);
                echo "</a></td>
                            <td align=\"center\"><a href=\"";
                // line 97
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client/manage");
                echo "/";
                if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_order_, "client_id"), "html", null, true);
                echo "\" title=\"\">";
                if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getAttribute($_order_, "client"), "first_name"), 1, null, "."), "html", null, true);
                echo " ";
                if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_order_, "client"), "last_name"), "html", null, true);
                echo "</a></td>
                        </tr>
                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 100
                echo "                    <tr>
                        <td colspan=\"2\" align=\"center\">";
                // line 101
                echo gettext("The list is empty");
                echo "</td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class=\"right\">
        <div class=\"widget\">
            <div class=\"head\">
                <h5 class=\"iGraph\">";
            // line 113
            echo gettext("Product sales");
            echo "</h5>
            </div>
            <div style=\"height: 221px; overflow: auto;\">
                <table class=\"tableStatic wide\">
                    <thead>
                        <tr>
                            <td>";
            // line 119
            echo gettext("Product/Service");
            echo "</td>
                            <td>";
            // line 120
            echo gettext("Orders");
            echo "</td>
                        </tr>
                    </thead>
                    <tbody>
                    ";
            // line 124
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_admin_, "stats_get_product_summary"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 125
                echo "                        <tr>
                            <td><a href=\"";
                // line 126
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("product/manage");
                echo "/";
                if (isset($context["p"])) { $_p_ = $context["p"]; } else { $_p_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_p_, "id"), "html", null, true);
                echo "\" title=\"";
                if (isset($context["p"])) { $_p_ = $context["p"]; } else { $_p_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_p_, "title"), "html", null, true);
                echo "\">";
                if (isset($context["p"])) { $_p_ = $context["p"]; } else { $_p_ = null; }
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($_p_, "title"), 35), "html", null, true);
                echo "</a></td>
                            <td align=\"center\"><a href=\"";
                // line 127
                if (isset($context["p"])) { $_p_ = $context["p"]; } else { $_p_ = null; }
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("order", array("product_id" => $this->getAttribute($_p_, "id")));
                echo "\" title=\"\" class=\"webStatsLink\">";
                if (isset($context["p"])) { $_p_ = $context["p"]; } else { $_p_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_p_, "orders"), "html", null, true);
                echo "</a></td>
                        </tr>
                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 130
                echo "                    <tr>
                        <td colspan=\"2\" align=\"center\">";
                // line 131
                echo gettext("No active orders available");
                echo "</td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class=\"fix\"></div>
</div>
";
        }
        // line 142
        echo "
";
        // line 143
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if ($this->getAttribute($_admin_, "system_is_allowed", array(0 => array("mod" => "stats")), "method")) {
            // line 144
            echo "<div class=\"widget\">
    <div class=\"head\">
        <h5><i class=\"dark-sprite-icon sprite-dropper\" style=\"margin: 0 15px 0 -15px\"></i>";
            // line 146
            echo gettext("Define date interval for graphs");
            echo "</h5>
    </div>
    <form method=\"get\" action=\"\" class=\"mainForm\">
        <input type=\"hidden\" name=\"_url\" value=\"";
            // line 149
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_request_, "_url"), "html", null, true);
            echo "\" />
        <fieldset>
            <div class=\"rowElem noborder\">
                <div class=\"moreFields\">
                    <ul>
                        <li style=\"width: 100px\"><input type=\"text\" name=\"date_from\" value=\"";
            // line 154
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
            // line 156
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            if ($this->getAttribute($_request_, "date_to")) {
                if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($_request_, "date_to"), "Y-m-d"), "html", null, true);
            }
            echo "\" placeholder=\"";
            if (isset($context["now"])) { $_now_ = $context["now"]; } else { $_now_ = null; }
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $_now_, "Y-m-d"), "html", null, true);
            echo "\" class=\"datepicker\"/></li>
                        <li class=\"sep\" style=\"padding-top: 0px\"><input type=\"submit\" value=\"";
            // line 157
            echo gettext("Update graphs");
            echo "\" class=\"greyishBtn\" /></li>
                    </ul>
                </div>
                <div class=\"fix\"></div>
            </div>
        </fieldset>
    </form>
</div>

<div class=\"widget\">
    <div class=\"head\">
        <h5><i class=\"dark-sprite-icon sprite-graph\" style=\"margin: 0 15px 0 -15px\"></i>";
            // line 168
            echo gettext("Income");
            echo "</h5>
    </div>
    <div class=\"body\">
        <div id=\"graph-income\" style=\"width: 100%; height: 200px;\"></div>
    </div>
</div>

<div class=\"widget\">
    <div class=\"head\">
        <h5><i class=\"dark-sprite-icon sprite-graph\" style=\"margin: 0 15px 0 -15px\"></i>";
            // line 177
            echo gettext("Orders");
            echo "</h5>
    </div>
    <div class=\"body\">
        <div id=\"graph-orders\" style=\"width: 100%; height: 200px;\"></div>
    </div>
</div>

<div class=\"widget\">
    <div class=\"head\">
        <h5><i class=\"dark-sprite-icon sprite-graph\" style=\"margin: 0 15px 0 -15px\"></i>";
            // line 186
            echo gettext("Invoices");
            echo "</h5>
    </div>
    <div class=\"body\">
        <div id=\"graph-invoice\" style=\"width: 100%; height: 200px;\"></div>
    </div>
</div>

<div class=\"widget\">
    <div class=\"head\">
        <h5><i class=\"dark-sprite-icon sprite-graph\" style=\"margin: 0 15px 0 -15px\"></i>";
            // line 195
            echo gettext("Clients");
            echo "</h5>
    </div>
    <div class=\"body\">
        <div id=\"graph-clients\" style=\"width: 100%; height: 200px;\"></div>
    </div>
</div>

<div class=\"widget\">
    <div class=\"head\">
        <h5><i class=\"dark-sprite-icon sprite-graph\" style=\"margin: 0 15px 0 -15px\"></i>";
            // line 204
            echo gettext("Support tickets");
            echo "</h5>
    </div>
    <div class=\"body\">
        <div id=\"graph-tickets\" style=\"width: 100%; height: 200px;\"></div>
    </div>
</div>
";
        }
        // line 211
        echo "
";
        // line 212
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if ($this->getAttribute($_admin_, "system_is_allowed", array(0 => array("mod" => "activity")), "method")) {
            // line 213
            echo "<div class=\"widget simpleTabs\">
    <ul class=\"tabs\">
        <li><a href=\"#tab-index\">";
            // line 215
            echo gettext("Recent clients activity");
            echo "</a></li>
        <li><a href=\"#tab-staff\">";
            // line 216
            echo gettext("Recent staff activity");
            echo "</a></li>
    </ul>

    <div class=\"tabs_container\">
        <div class=\"fix\"></div>

        <div class=\"tab_content nopadding\" id=\"tab-index\">
            <table class=\"tableStatic wide\">
                <tbody>
                ";
            // line 225
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            $context["events"] = $this->getAttribute($_admin_, "activity_log_get_list", array(0 => array("per_page" => 10, "only_clients" => 1)), "method");
            // line 226
            echo "                ";
            if (isset($context["events"])) { $_events_ = $context["events"]; } else { $_events_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_events_, "list"));
            $context['_iterated'] = false;
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
            foreach ($context['_seq'] as $context["i"] => $context["event"]) {
                // line 227
                echo "                <tr ";
                if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                if ($this->getAttribute($_loop_, "first")) {
                    echo "class=\"noborder\"";
                }
                echo ">
                    <td style=\"width: 5%\"><a href=\"";
                // line 228
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client/manage");
                echo "/";
                if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_event_, "client"), "id"), "html", null, true);
                echo "\" title=\"";
                if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_event_, "client"), "name"), "html", null, true);
                echo "\"><img src=\"";
                if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                echo twig_escape_filter($this->env, twig_gravatar_filter($this->getAttribute($this->getAttribute($_event_, "client"), "email")), "html", null, true);
                echo "?size=20\" alt=\"";
                if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_event_, "client"), "name"), "html", null, true);
                echo "\" /></a></td>
                    <td>";
                // line 229
                if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($this->getAttribute($_event_, "client"), "name"), 40), "html", null, true);
                echo "</td>
                    <td><a href=\"";
                // line 230
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client/manage");
                echo "/";
                if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_event_, "client"), "id"), "html", null, true);
                echo "\">";
                if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($_event_, "message"), 50), "html", null, true);
                echo "</a></td>
                    <td>";
                // line 231
                if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                echo twig_escape_filter($this->env, twig_timeago_filter($this->getAttribute($_event_, "created_at")), "html", null, true);
                echo " ago</td>
                </tr>
                </tbody>

                ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 236
                echo "                <tbody>
                    <tr class=\"noborder\">
                        <td colspan=\"4\">
                            ";
                // line 239
                echo gettext("The list is empty");
                // line 240
                echo "                        </td>
                    </tr>
                </tbody>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 244
            echo "            </table>
        </div>
        
        <div class=\"tab_content nopadding\" id=\"tab-staff\">
            <table class=\"tableStatic wide\">
                <tbody>
                ";
            // line 250
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            $context["events"] = $this->getAttribute($_admin_, "activity_log_get_list", array(0 => array("per_page" => 10, "only_staff" => 1)), "method");
            // line 251
            echo "                ";
            if (isset($context["events"])) { $_events_ = $context["events"]; } else { $_events_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_events_, "list"));
            $context['_iterated'] = false;
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
            foreach ($context['_seq'] as $context["i"] => $context["event"]) {
                // line 252
                echo "                <tr ";
                if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                if ($this->getAttribute($_loop_, "first")) {
                    echo "class=\"noborder\"";
                }
                echo ">
                    <td style=\"width: 5%\"><a href=\"";
                // line 253
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("staff/manage");
                echo "/";
                if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_event_, "staff"), "id"), "html", null, true);
                echo "\" title=\"";
                if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_event_, "staff"), "name"), "html", null, true);
                echo "\"><img src=\"";
                if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                echo twig_escape_filter($this->env, twig_gravatar_filter($this->getAttribute($this->getAttribute($_event_, "staff"), "email")), "html", null, true);
                echo "?size=20\" alt=\"";
                if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_event_, "staff"), "name"), "html", null, true);
                echo "\" /></a></td>
                    <td>";
                // line 254
                if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_event_, "staff"), "name"), "html", null, true);
                echo "</td>
                    <td><a href=\"";
                // line 255
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("staff/manage");
                echo "/";
                if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_event_, "staff"), "id"), "html", null, true);
                echo "\">";
                if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($_event_, "message"), 50), "html", null, true);
                echo "</a></td>
                    <td>";
                // line 256
                if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                echo twig_escape_filter($this->env, twig_timeago_filter($this->getAttribute($_event_, "created_at")), "html", null, true);
                echo " ago</td>
                </tr>
                </tbody>

                ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 261
                echo "                <tbody>
                    <tr class=\"noborder\">
                        <td colspan=\"4\">
                            ";
                // line 264
                echo gettext("The list is empty");
                // line 265
                echo "                        </td>
                    </tr>
                </tbody>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 269
            echo "            </table>
        </div>

    </div>
    
    <div class=\"fix\"></div>
</div>
";
        }
        // line 277
        echo "
";
    }

    // line 280
    public function block_js($context, array $blocks = array())
    {
        // line 281
        echo "
";
        // line 282
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if ($this->getAttribute($_admin_, "system_is_allowed", array(0 => array("mod" => "stats")), "method")) {
            // line 283
            echo "<script type=\"text/javascript\" src=\"js/flot/jquery.flot.js\"></script>
<script type=\"text/javascript\" src=\"js/flot/excanvas.min.js\"></script>
<script type=\"text/javascript\">

\$(function() {
    setPlotDataData('graph-income', ";
            // line 288
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($_admin_, "stats_get_income", array(0 => array("date_from" => $this->getAttribute($_request_, "date_from"), "date_to" => $this->getAttribute($_request_, "date_to"))), "method")), "html", null, true);
            echo " );
    setPlotDataData('graph-orders', ";
            // line 289
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($_admin_, "stats_get_orders", array(0 => array("date_from" => $this->getAttribute($_request_, "date_from"), "date_to" => $this->getAttribute($_request_, "date_to"))), "method")), "html", null, true);
            echo " );
    setPlotDataData('graph-invoice', ";
            // line 290
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($_admin_, "stats_get_invoices", array(0 => array("date_from" => $this->getAttribute($_request_, "date_from"), "date_to" => $this->getAttribute($_request_, "date_to"))), "method")), "html", null, true);
            echo " );
    setPlotDataData('graph-clients', ";
            // line 291
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($_admin_, "stats_get_clients", array(0 => array("date_from" => $this->getAttribute($_request_, "date_from"), "date_to" => $this->getAttribute($_request_, "date_to"))), "method")), "html", null, true);
            echo " );
    setPlotDataData('graph-tickets', ";
            // line 292
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($_admin_, "stats_get_tickets", array(0 => array("date_from" => $this->getAttribute($_request_, "date_from"), "date_to" => $this->getAttribute($_request_, "date_to"))), "method")), "html", null, true);
            echo " );
});

function setPlotDataData(id, result) {
    \$.plot(\$(\"#\"+id), [ result ] , {
        yaxis: {
            min: 0,
            tickDecimals: false
        },
        xaxis: {
            mode: \"time\",
            tickDecimals: false,
            timeformat: \"%y-%m-%d\"
        },
        clickable: true,
        colors: [\"#afd8f8\"],
        series: {
               lines: {
                    lineWidth: 2,
                    fill: true,
                    fillColor: { colors: [ { opacity: 0.6 }, { opacity: 0.2 } ] },
                    steps: false
               }
            }
    });
}

</script>
";
        }
    }

    public function getTemplateName()
    {
        return "mod_index_dashboard.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  941 => 292,  935 => 291,  929 => 290,  923 => 289,  917 => 288,  910 => 283,  907 => 282,  904 => 281,  901 => 280,  896 => 277,  886 => 269,  877 => 265,  875 => 264,  870 => 261,  851 => 256,  841 => 255,  836 => 254,  820 => 253,  812 => 252,  792 => 251,  789 => 250,  781 => 244,  772 => 240,  770 => 239,  765 => 236,  746 => 231,  736 => 230,  731 => 229,  715 => 228,  707 => 227,  687 => 226,  684 => 225,  672 => 216,  668 => 215,  664 => 213,  661 => 212,  658 => 211,  648 => 204,  636 => 195,  624 => 186,  612 => 177,  600 => 168,  586 => 157,  575 => 156,  563 => 154,  554 => 149,  548 => 146,  544 => 144,  541 => 143,  538 => 142,  528 => 134,  519 => 131,  516 => 130,  504 => 127,  491 => 126,  488 => 125,  482 => 124,  475 => 120,  471 => 119,  462 => 113,  451 => 104,  442 => 101,  439 => 100,  422 => 97,  412 => 96,  406 => 95,  400 => 94,  393 => 90,  389 => 89,  377 => 83,  373 => 82,  367 => 78,  364 => 77,  361 => 76,  358 => 75,  346 => 69,  339 => 68,  332 => 67,  325 => 66,  318 => 65,  314 => 64,  305 => 61,  298 => 60,  291 => 59,  284 => 58,  277 => 57,  273 => 56,  264 => 53,  257 => 52,  250 => 51,  243 => 50,  236 => 49,  232 => 48,  223 => 45,  216 => 44,  209 => 43,  202 => 42,  195 => 41,  191 => 40,  181 => 37,  173 => 36,  165 => 35,  157 => 34,  149 => 33,  145 => 32,  136 => 26,  132 => 25,  128 => 24,  124 => 23,  120 => 22,  116 => 21,  111 => 18,  107 => 17,  104 => 16,  97 => 15,  94 => 14,  91 => 13,  88 => 12,  68 => 9,  60 => 8,  42 => 7,  39 => 6,  36 => 5,  30 => 3,);
    }
}
