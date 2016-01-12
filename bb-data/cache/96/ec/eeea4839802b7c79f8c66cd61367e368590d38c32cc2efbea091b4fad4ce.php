<?php

/* mod_index_dashboard.phtml */
class __TwigTemplate_96eceeea4839802b7c79f8c66cd61367e368590d38c32cc2efbea091b4fad4ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'page_header' => array($this, 'block_page_header'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((($this->getAttribute($this->getContext($context, "request"), "ajax")) ? ("layout_blank.phtml") : ("layout_default.phtml")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 15
        $context["mf"] = $this->env->loadTemplate("macro_functions.phtml");
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Client Area");
    }

    // line 4
    public function block_page_header($context, array $blocks = array())
    {
        echo gettext("Dashboard");
    }

    // line 6
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ((!$this->getAttribute($_settings_, "hide_dashboard_breadcrumb"))) {
            // line 8
            echo "        <ul class=\"breadcrumb\">
            <li><a href=\"";
            // line 9
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/");
            echo "\">";
            echo gettext("Home");
            echo "</a> <span class=\"divider\">/</span></li>
            <li class=\"active\">";
            // line 10
            echo gettext("Dashboard");
            echo "</li>
        </ul>
    ";
        }
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        // line 18
        echo "
";
        // line 19
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ($this->getAttribute($_settings_, "showcase_enabled")) {
            // line 20
            echo "<div class=\"hero-unit\">
    <h1>";
            // line 21
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_settings_, "showcase_heading"), "html", null, true);
            echo "</h1>
    <p>";
            // line 22
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_settings_, "showcase_text"), "html", null, true);
            echo "</p>
    <p><a class=\"btn btn-alt btn-primary btn-large\" href=\"";
            // line 23
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_settings_, "showcase_button_url"), "html", null, true);
            echo "\">";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_settings_, "showcase_button_title"), "html", null, true);
            echo "</a></p>
</div>
";
        }
        // line 26
        echo "
";
        // line 27
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        if ($_client_) {
            // line 28
            echo "
";
            // line 29
            if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
            $context["tickets"] = $this->getAttribute($_client_, "support_ticket_get_list", array(0 => array("status" => "on_hold")), "method");
            // line 30
            if (isset($context["tickets"])) { $_tickets_ = $context["tickets"]; } else { $_tickets_ = null; }
            if (($this->getAttribute($_tickets_, "total") > 0)) {
                // line 31
                echo "<div class=\"row\">
<article class=\"span12 data-block\">
<div class=\"data-container\">
<header>
    <h2>";
                // line 35
                echo gettext("Tickets waiting your reply");
                echo "</h2>
</header>
<section id=\"slimScroll1\">
    <table class=\"table table-striped table-bordered table-condensed table-hover\">
        <thead>
        <tr>
            <th>";
                // line 41
                echo gettext("Id");
                echo "</th>
            <th>";
                // line 42
                echo gettext("Subject");
                echo "</th>
            <th>";
                // line 43
                echo gettext("Help desk");
                echo "</th>
            <th>";
                // line 44
                echo gettext("Status");
                echo "</th>
            <th>";
                // line 45
                echo gettext("Submitted");
                echo "</th>
            <th>";
                // line 46
                echo gettext("Actions");
                echo "</th>
        </tr>
        </thead>
        <tbody>
        ";
                // line 50
                if (isset($context["tickets"])) { $_tickets_ = $context["tickets"]; } else { $_tickets_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_tickets_, "list"));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["i"] => $context["ticket"]) {
                    // line 51
                    echo "
        <tr class=\"";
                    // line 52
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $_i_), "html", null, true);
                    echo "\">
            <td>";
                    // line 53
                    if (isset($context["ticket"])) { $_ticket_ = $context["ticket"]; } else { $_ticket_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_ticket_, "id"), "html", null, true);
                    echo "</td>
            <td><a href=\"";
                    // line 54
                    echo $this->env->getExtension('bb')->twig_bb_client_link_filter("support/ticket");
                    echo "/";
                    if (isset($context["ticket"])) { $_ticket_ = $context["ticket"]; } else { $_ticket_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_ticket_, "id"), "html", null, true);
                    echo "\">";
                    if (isset($context["ticket"])) { $_ticket_ = $context["ticket"]; } else { $_ticket_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_ticket_, "subject"), "html", null, true);
                    echo "</a></td>
            <td>";
                    // line 55
                    if (isset($context["ticket"])) { $_ticket_ = $context["ticket"]; } else { $_ticket_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_ticket_, "helpdesk"), "name"), "html", null, true);
                    echo "</td>
            <td><span class=\"label\">";
                    // line 56
                    if (isset($context["mf"])) { $_mf_ = $context["mf"]; } else { $_mf_ = null; }
                    if (isset($context["ticket"])) { $_ticket_ = $context["ticket"]; } else { $_ticket_ = null; }
                    echo $_mf_->getstatus_name($this->getAttribute($_ticket_, "status"));
                    echo "</span></td>
            <td>";
                    // line 57
                    if (isset($context["ticket"])) { $_ticket_ = $context["ticket"]; } else { $_ticket_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_date($this->getAttribute($_ticket_, "created_at")), "html", null, true);
                    echo "</td>
            <td><a href=\"";
                    // line 58
                    echo $this->env->getExtension('bb')->twig_bb_client_link_filter("support/ticket");
                    echo "/";
                    if (isset($context["ticket"])) { $_ticket_ = $context["ticket"]; } else { $_ticket_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_ticket_, "id"), "html", null, true);
                    echo "\" class=\"btn btn-small btn-inverse\">";
                    echo gettext("Reply");
                    echo "</a></td>
        </tr>

        ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 62
                    echo "
        <tr>
            <td colspan=\"5\">";
                    // line 64
                    echo gettext("The list is empty");
                    echo "</td>
        </tr>

        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['i'], $context['ticket'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 68
                echo "
        </tbody>
    </table>
</section>
</div>
</article>
</div>
";
            }
            // line 76
            echo "
<div class=\"row\">
";
            // line 78
            if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
            $context["profile"] = $this->getAttribute($_client_, "client_get");
            // line 79
            echo "<article class=\"span6 data-block decent\">
    <div class=\"data-container\">
        <header>
            <h2>";
            // line 82
            echo gettext("Profile");
            echo "</h2>
            <ul class=\"data-header-actions\">
                <li>
                    <a class=\"btn btn-alt btn-inverse\" href=\"";
            // line 85
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("client/me");
            echo "\">";
            echo gettext("Update");
            echo "</a>
                </li>
            </ul>
        </header>
        <section>
            <dl class=\"dl-horizontal\">
                <dt>";
            // line 91
            echo gettext("ID");
            echo "</dt>
                <dd>#";
            // line 92
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "id"), "html", null, true);
            echo "</dd>
                <dt>";
            // line 93
            echo gettext("Email");
            echo "</dt>
                <dd>";
            // line 94
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "email"), "html", null, true);
            echo "</dd>
                <dt>";
            // line 95
            echo gettext("Balance");
            echo "</dt>
                <dd>";
            // line 96
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            echo twig_money($this->env, $this->getAttribute($_profile_, "balance"), $this->getAttribute($_profile_, "currency"));
            echo "</dd>
            </dl>
        </section>
    </div>
</article>

<article class=\"span6 data-block decent\">
    <div class=\"data-container\">
        <header>
            <h2>";
            // line 105
            echo gettext("Invoices");
            echo "</h2>
            <ul class=\"data-header-actions\">
                <li>
                    <a class=\"btn btn-alt btn-inverse\" href=\"";
            // line 108
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("invoice");
            echo "\">";
            echo gettext("All Invoices");
            echo "</a>
                </li>
            </ul>
        </header>
        <section>
            <dl class=\"dl-horizontal\">
                <dt>";
            // line 114
            echo gettext("Total");
            echo "</dt>
                    <dd>";
            // line 115
            if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_client_, "invoice_get_list", array(), "method"), "total"), "html", null, true);
            echo "</dd>
                <dt>";
            // line 116
            echo gettext("Paid");
            echo "</dt>
                    <dd>";
            // line 117
            if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_client_, "invoice_get_list", array(0 => array("status" => "paid")), "method"), "total"), "html", null, true);
            echo "</dd>
                <dt>";
            // line 118
            echo gettext("Unpaid");
            echo "</dt>
                    <dd>";
            // line 119
            if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_client_, "invoice_get_list", array(0 => array("status" => "unpaid")), "method"), "total"), "html", null, true);
            echo "</dd>
            </dl>
        </section>
    </div>
</article>
</div>

<div class=\"row\">

<article class=\"span6 data-block decent\">
    <div class=\"data-container\">
        <header>
            <h2>";
            // line 131
            echo gettext("Orders");
            echo "</h2>
            <ul class=\"data-header-actions\">
                <li>
                    <a class=\"btn btn-alt btn-info order-button\" href=\"";
            // line 134
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("order");
            echo "\">";
            echo gettext("New order");
            echo "</a>
                    <a class=\"btn btn-alt btn-inverse\" href=\"";
            // line 135
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("order/service");
            echo "\">";
            echo gettext("All orders");
            echo "</a>
                </li>
            </ul>
        </header>
        <section>
            <dl class=\"dl-horizontal\">
                <dt>";
            // line 141
            echo gettext("Total");
            echo "</dt>
                <dd>";
            // line 142
            if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_client_, "order_get_list", array(0 => array("hide_addons" => 1)), "method"), "total"), "html", null, true);
            echo "</dd>
                <dt>";
            // line 143
            echo gettext("Active");
            echo "</dt>
                <dd>";
            // line 144
            if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_client_, "order_get_list", array(0 => array("hide_addons" => 1, "status" => "active")), "method"), "total"), "html", null, true);
            echo "</dd>
                <dt>";
            // line 145
            echo gettext("Expiring");
            echo "</dt>
                <dd>";
            // line 146
            if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_client_, "order_get_list", array(0 => array("expiring" => 1)), "method"), "total"), "html", null, true);
            echo "</dd>
            </dl>
        </section>
    </div>
</article>

<article class=\"span6 data-block decent\">
    <div class=\"data-container\">
        <header>
            <h2>";
            // line 155
            echo gettext("Tickets");
            echo "</h2>
            <ul class=\"data-header-actions\">
                <li>
                    <a class=\"btn btn-alt btn-info\" href=\"";
            // line 158
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("support", array("ticket" => 1));
            echo "\">";
            echo gettext("New ticket");
            echo "</a>
                    <a class=\"btn btn-alt btn-inverse\" href=\"";
            // line 159
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("support");
            echo "\">";
            echo gettext("All tickets");
            echo "</a>
                </li>
            </ul>
        </header>
        <section>
            <dl class=\"dl-horizontal\">
                <dt>";
            // line 165
            echo gettext("Total");
            echo "</dt>
                <dd>";
            // line 166
            if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_client_, "support_ticket_get_list", array(), "method"), "total"), "html", null, true);
            echo "</dd>
                <dt>";
            // line 167
            echo gettext("Open");
            echo "</dt>
                <dd>";
            // line 168
            if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_client_, "support_ticket_get_list", array(0 => array("status" => "open")), "method"), "total"), "html", null, true);
            echo "</dd>
                <dt>";
            // line 169
            echo gettext("On Hold");
            echo "</dt>
                <dd>";
            // line 170
            if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_client_, "support_ticket_get_list", array(0 => array("status" => "on_hold")), "method"), "total"), "html", null, true);
            echo "</dd>
            </dl>
        </section>
    </div>
</article>
</div>

<div class=\"row\">

<article class=\"span6 data-block decent\">
    <div class=\"data-container\">
        <header>
            <h2>";
            // line 182
            echo gettext("Recent orders");
            echo "</h2>
        </header>
        <section>
            <table class=\"table table-striped table-bordered table-condensed table-hover\">
                <tbody>
                ";
            // line 187
            if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_client_, "order_get_list", array(0 => array("per_page" => 5, "page" => $this->getAttribute($_request_, "page"), "hide_addons" => 1)), "method"), "list"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["i"] => $context["order"]) {
                // line 188
                echo "                <tr class=\"";
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $_i_), "html", null, true);
                echo "\">
                    <td><a href=\"";
                // line 189
                echo $this->env->getExtension('bb')->twig_bb_client_link_filter("order/service/manage");
                echo "/";
                if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_order_, "id"), "html", null, true);
                echo "\">";
                if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($_order_, "title"), 30), "html", null, true);
                echo "</a></td>
                    <td><span class=\"label ";
                // line 190
                if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                if (($this->getAttribute($_order_, "status") == "active")) {
                    echo "label-success";
                } elseif (($this->getAttribute($_order_, "status") == "pending_setup")) {
                    echo "label-warning";
                }
                echo "\">";
                if (isset($context["mf"])) { $_mf_ = $context["mf"]; } else { $_mf_ = null; }
                if (isset($context["order"])) { $_order_ = $context["order"]; } else { $_order_ = null; }
                echo $_mf_->getstatus_name($this->getAttribute($_order_, "status"));
                echo "</span></td>
                </tr>
                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 193
                echo "                <tr>
                    <td colspan=\"3\">";
                // line 194
                echo gettext("The list is empty");
                echo "</td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 197
            echo "                </tbody>
            </table>
        </section>
    </div>
</article>

<article class=\"span6 data-block decent\">
    <div class=\"data-container\">
        <header>
            <h2>";
            // line 206
            echo gettext("Recent emails");
            echo "</h2>
        </header>
        <section>
            <table class=\"table table-striped table-bordered table-condensed table-hover\">
                <tbody>
                ";
            // line 211
            if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_client_, "email_get_list", array(0 => array("per_page" => 5)), "method"), "list"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["i"] => $context["email"]) {
                // line 212
                echo "                <tr class=\"";
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $_i_), "html", null, true);
                echo "\">
                    <td><a href=\"";
                // line 213
                echo $this->env->getExtension('bb')->twig_bb_client_link_filter("email");
                echo "/";
                if (isset($context["email"])) { $_email_ = $context["email"]; } else { $_email_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_email_, "id"), "html", null, true);
                echo "\">";
                if (isset($context["email"])) { $_email_ = $context["email"]; } else { $_email_ = null; }
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($_email_, "subject"), 30), "html", null, true);
                echo "</a></td>
                    <td title=\"";
                // line 214
                if (isset($context["email"])) { $_email_ = $context["email"]; } else { $_email_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_date($this->getAttribute($_email_, "created_at")), "html", null, true);
                echo "\">";
                if (isset($context["email"])) { $_email_ = $context["email"]; } else { $_email_ = null; }
                echo twig_escape_filter($this->env, twig_timeago_filter($this->getAttribute($_email_, "created_at")), "html", null, true);
                echo " ";
                echo gettext("ago");
                echo "</td>
                </tr>
                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 217
                echo "                <tr>
                    <td colspan=\"2\">";
                // line 218
                echo gettext("The list is empty");
                echo "</td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['email'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 221
            echo "                </tbody>
            </table>
        </section>
    </div>
</article>

</div>

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
        return array (  604 => 221,  595 => 218,  592 => 217,  578 => 214,  568 => 213,  562 => 212,  556 => 211,  548 => 206,  537 => 197,  528 => 194,  525 => 193,  508 => 190,  498 => 189,  492 => 188,  485 => 187,  477 => 182,  461 => 170,  457 => 169,  452 => 168,  448 => 167,  443 => 166,  439 => 165,  428 => 159,  422 => 158,  416 => 155,  403 => 146,  399 => 145,  394 => 144,  390 => 143,  385 => 142,  381 => 141,  370 => 135,  364 => 134,  358 => 131,  342 => 119,  338 => 118,  333 => 117,  329 => 116,  324 => 115,  320 => 114,  309 => 108,  303 => 105,  290 => 96,  286 => 95,  281 => 94,  277 => 93,  272 => 92,  268 => 91,  257 => 85,  251 => 82,  246 => 79,  243 => 78,  239 => 76,  229 => 68,  219 => 64,  215 => 62,  201 => 58,  196 => 57,  190 => 56,  185 => 55,  175 => 54,  170 => 53,  165 => 52,  162 => 51,  156 => 50,  149 => 46,  145 => 45,  141 => 44,  137 => 43,  133 => 42,  129 => 41,  120 => 35,  114 => 31,  111 => 30,  108 => 29,  105 => 28,  102 => 27,  99 => 26,  89 => 23,  84 => 22,  79 => 21,  76 => 20,  73 => 19,  70 => 18,  67 => 17,  59 => 10,  53 => 9,  50 => 8,  46 => 7,  43 => 6,  37 => 4,  31 => 3,  26 => 15,);
    }
}
