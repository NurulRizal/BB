<?php

/* mod_invoice_invoice.phtml */
class __TwigTemplate_d5f71f1c526d145d65da3ef5049734985ee93dda2adddc93831bef4825bd2aff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
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
        // line 3
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        $context["nr"] = ($this->getAttribute($_invoice_, "serie") . sprintf("%05s", $this->getAttribute($_invoice_, "nr")));
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Proforma invoice");
    }

    // line 8
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 9
        echo "    <li><a href=\"";
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/invoice");
        echo "\">";
        echo gettext("Invoices");
        echo "</a> <span class=\"divider\">/</span></li>
    <li class=\"active\">";
        // line 10
        echo gettext("Invoice");
        echo " ";
        if (isset($context["nr"])) { $_nr_ = $context["nr"]; } else { $_nr_ = null; }
        echo twig_escape_filter($this->env, $_nr_, "html", null, true);
        echo "</li>
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "
";
        // line 15
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        $context["seller"] = $this->getAttribute($_invoice_, "seller");
        // line 16
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        $context["buyer"] = $this->getAttribute($_invoice_, "buyer");
        // line 17
        if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
        $context["company"] = $this->getAttribute($_guest_, "system_company");
        // line 18
        echo "
";
        // line 19
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        if (($this->getAttribute($_invoice_, "status") == "unpaid")) {
            // line 20
            echo "<div class=\"row\">
<article class=\"span12 data-block decent\">
<div class=\"data-container\">


<header>
    <h2>";
            // line 26
            echo gettext("Payment methods");
            echo "</h2>
    <p>";
            // line 27
            echo gettext("Please choose payment type and pay for your chosen products.");
            echo "</p>
</header>
<form method=\"post\" action=\"";
            // line 29
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/guest/invoice/payment");
            echo "\" class=\"api-form\" data-api-redirect=\"";
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter(("invoice/" . $this->getAttribute($_invoice_, "hash")), array("auto_redirect" => 1));
            echo "\">
    <input type=\"hidden\" name=\"hash\" value=\"";
            // line 30
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_invoice_, "hash"), "html", null, true);
            echo "\"/>
    ";
            // line 31
            if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_guest_, "invoice_gateways"));
            foreach ($context['_seq'] as $context["_key"] => $context["gtw"]) {
                // line 32
                echo "    ";
                if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
                if (isset($context["gtw"])) { $_gtw_ = $context["gtw"]; } else { $_gtw_ = null; }
                if (twig_in_filter($this->getAttribute($_invoice_, "currency"), $this->getAttribute($_gtw_, "accepted_currencies"))) {
                    // line 33
                    echo "    ";
                    $context["banklink"] = $this->env->getExtension('bb')->twig_bb_client_link_filter("invoice/banklink");
                    // line 34
                    echo "    <button type=\"button\"  class=\"logo-";
                    if (isset($context["gtw"])) { $_gtw_ = $context["gtw"]; } else { $_gtw_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_gtw_, "code"), "html", null, true);
                    echo " hover-popover\" type=\"radio\" name=\"gateway_id\" gateway_id=\"";
                    if (isset($context["gtw"])) { $_gtw_ = $context["gtw"]; } else { $_gtw_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_gtw_, "id"), "html", null, true);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo gettext("Pay with");
                    echo " ";
                    if (isset($context["gtw"])) { $_gtw_ = $context["gtw"]; } else { $_gtw_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_gtw_, "title"), "html", null, true);
                    echo "\" onclick=\"window.location.replace('";
                    if (isset($context["banklink"])) { $_banklink_ = $context["banklink"]; } else { $_banklink_ = null; }
                    echo twig_escape_filter($this->env, $_banklink_, "html", null, true);
                    echo "/";
                    if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_invoice_, "hash"), "html", null, true);
                    echo "/";
                    if (isset($context["gtw"])) { $_gtw_ = $context["gtw"]; } else { $_gtw_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_gtw_, "id"), "html", null, true);
                    echo "')\")></button>
    ";
                }
                // line 36
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gtw'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "    <input type=\"hidden\" name=\"gateway_id\" id=\"gateway_id\">
</form>
</div>
</article>
</div>

";
        }
        // line 44
        echo "
<div class=\"row\">
    <article class=\"span12 data-block\">
        <div class=\"data-container\">

        <header>
            <h1>";
        // line 50
        echo gettext("Invoice");
        echo " ";
        if (isset($context["nr"])) { $_nr_ = $context["nr"]; } else { $_nr_ = null; }
        echo twig_escape_filter($this->env, $_nr_, "html", null, true);
        echo "</h1><br/>
            ";
        // line 51
        echo gettext("You can print this invoice or export it to PDF file by clicking on corresponding button.");
        // line 52
        echo "            <ul class=\"data-header-actions\">
                <li><a href=\"";
        // line 53
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("invoice/pdf");
        echo "/";
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_invoice_, "hash"), "html", null, true);
        echo "\" class=\"btn btn-alt btn-inverse\">";
        echo gettext("PDF");
        echo "</a></li>
                <li><a href=\"";
        // line 54
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("invoice/print");
        echo "/";
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_invoice_, "hash"), "html", null, true);
        echo "\" target=\"_blank\" class=\"btn btn-alt btn-inverse\">";
        echo gettext("Print");
        echo "</a></li>
            </ul>
        </header>

            <section>
                <div class=\"row-fluid\">
                    <div class=\"span4\">
                        ";
        // line 61
        if (isset($context["company"])) { $_company_ = $context["company"]; } else { $_company_ = null; }
        if ($this->getAttribute($_company_, "logo_url")) {
            // line 62
            echo "                        <img src=\"";
            if (isset($context["company"])) { $_company_ = $context["company"]; } else { $_company_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_company_, "logo_url"), "html", null, true);
            echo "\" alt=\"Logo\">
                        ";
        }
        // line 64
        echo "                        <dl class=\"dl-horizontal\">
                            <dt>";
        // line 65
        echo gettext("Invoice number");
        echo ":</dt>
                            <dd>";
        // line 66
        if (isset($context["nr"])) { $_nr_ = $context["nr"]; } else { $_nr_ = null; }
        echo twig_escape_filter($this->env, $_nr_, "html", null, true);
        echo "</dd>
                            <dt>";
        // line 67
        echo gettext("Invoice date");
        echo ":</dt>
                            <dd>";
        // line 68
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        if ($this->getAttribute($_invoice_, "paid_at")) {
            // line 69
            echo "                                ";
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_date($this->getAttribute($_invoice_, "paid_at")), "html", null, true);
            echo "
                                ";
        } else {
            // line 71
            echo "                                ";
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_date($this->getAttribute($_invoice_, "created_at")), "html", null, true);
            echo "
                                ";
        }
        // line 73
        echo "                            </dd>
                            <dt>";
        // line 74
        echo gettext("Due date");
        echo ":</dt>
                            <dd>";
        // line 75
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        if ($this->getAttribute($_invoice_, "due_at")) {
            // line 76
            echo "                                ";
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_date($this->getAttribute($_invoice_, "due_at")), "html", null, true);
            echo "
                                ";
        } else {
            // line 78
            echo "                                -----
                                ";
        }
        // line 80
        echo "                            </dd>
                            <dt>";
        // line 81
        echo gettext("Invoice status");
        echo ":</dt>
                            <dd>
                                <span class=\"label ";
        // line 83
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        if (($this->getAttribute($_invoice_, "status") == "paid")) {
            echo " label-success";
        } elseif (($this->getAttribute($_invoice_, "status") == "unpaid")) {
            echo "label-warning";
        }
        echo "\">
                                      ";
        // line 84
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($_invoice_, "status")), "html", null, true);
        echo "
                                </span>
                            </dd>
                        </dl>
                    </div>
                    <div class=\"span4\">
                        <div class=\"well small\">
                            <h4>";
        // line 91
        echo gettext("Company");
        echo "</h4>
                            <dl class=\"dl-horizontal\">
                                ";
        // line 93
        if (isset($context["seller"])) { $_seller_ = $context["seller"]; } else { $_seller_ = null; }
        if ($this->getAttribute($_seller_, "company")) {
            // line 94
            echo "                                <dt>";
            echo gettext("Name");
            echo ":</dt>
                                <dd>";
            // line 95
            if (isset($context["seller"])) { $_seller_ = $context["seller"]; } else { $_seller_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_seller_, "company"), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 97
        echo "
                                ";
        // line 98
        if (isset($context["seller"])) { $_seller_ = $context["seller"]; } else { $_seller_ = null; }
        if ($this->getAttribute($_seller_, "company_vat")) {
            // line 99
            echo "                                <dt>";
            echo gettext("VAT");
            echo ":</dt>
                                <dd>";
            // line 100
            if (isset($context["seller"])) { $_seller_ = $context["seller"]; } else { $_seller_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_seller_, "company_vat"), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 102
        echo "
                                ";
        // line 103
        if (isset($context["seller"])) { $_seller_ = $context["seller"]; } else { $_seller_ = null; }
        if ($this->getAttribute($_seller_, "address")) {
            // line 104
            echo "                                <dt>";
            echo gettext("Address");
            echo ":</dt>
                                <dd>";
            // line 105
            if (isset($context["seller"])) { $_seller_ = $context["seller"]; } else { $_seller_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_seller_, "address"), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 107
        echo "
                                ";
        // line 108
        if (isset($context["seller"])) { $_seller_ = $context["seller"]; } else { $_seller_ = null; }
        if ($this->getAttribute($_seller_, "phone")) {
            // line 109
            echo "                                <dt>";
            echo gettext("Phone");
            echo ":</dt>
                                <dd>";
            // line 110
            if (isset($context["seller"])) { $_seller_ = $context["seller"]; } else { $_seller_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_seller_, "phone"), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 112
        echo "
                                ";
        // line 113
        if (isset($context["seller"])) { $_seller_ = $context["seller"]; } else { $_seller_ = null; }
        if ($this->getAttribute($_seller_, "email")) {
            // line 114
            echo "                                <dt>";
            echo gettext("Email");
            echo ":</dt>
                                <dd>";
            // line 115
            if (isset($context["seller"])) { $_seller_ = $context["seller"]; } else { $_seller_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_seller_, "email"), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 117
        echo "
                                ";
        // line 118
        if (isset($context["seller"])) { $_seller_ = $context["seller"]; } else { $_seller_ = null; }
        if ($this->getAttribute($_seller_, "account_number")) {
            // line 119
            echo "                                <dt>";
            echo gettext("Account");
            echo ":</dt>
                                <dd>";
            // line 120
            if (isset($context["seller"])) { $_seller_ = $context["seller"]; } else { $_seller_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_seller_, "account_number"), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 122
        echo "
                                ";
        // line 123
        if (isset($context["seller"])) { $_seller_ = $context["seller"]; } else { $_seller_ = null; }
        if ($this->getAttribute($_seller_, "note")) {
            // line 124
            echo "                                <dt>";
            echo gettext("Note");
            echo ":</dt>
                                <dd>";
            // line 125
            if (isset($context["seller"])) { $_seller_ = $context["seller"]; } else { $_seller_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_seller_, "note"), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 127
        echo "                            </dl>

                        </div>
                    </div>


                    <div class=\"span4\">
                        <div class=\"well small\">
                            <h4>";
        // line 135
        echo gettext("Billing & Delivery address");
        echo "</h4>
                            <dl class=\"dl-horizontal\">
                                ";
        // line 137
        if (isset($context["buyer"])) { $_buyer_ = $context["buyer"]; } else { $_buyer_ = null; }
        if (($this->getAttribute($_buyer_, "first_name") || $this->getAttribute($_buyer_, "last_name"))) {
            // line 138
            echo "                                <dt>";
            echo gettext("Name");
            echo ":</dt>
                                <dd>";
            // line 139
            if (isset($context["buyer"])) { $_buyer_ = $context["buyer"]; } else { $_buyer_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_buyer_, "first_name"), "html", null, true);
            echo " ";
            if (isset($context["buyer"])) { $_buyer_ = $context["buyer"]; } else { $_buyer_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_buyer_, "last_name"), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 141
        echo "
                                ";
        // line 142
        if (isset($context["buyer"])) { $_buyer_ = $context["buyer"]; } else { $_buyer_ = null; }
        if ($this->getAttribute($_buyer_, "company")) {
            // line 143
            echo "                                <dt>";
            echo gettext("Company");
            echo ":</dt>
                                <dd>";
            // line 144
            if (isset($context["buyer"])) { $_buyer_ = $context["buyer"]; } else { $_buyer_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_buyer_, "company"), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 146
        echo "
                                ";
        // line 147
        if (isset($context["buyer"])) { $_buyer_ = $context["buyer"]; } else { $_buyer_ = null; }
        if ($this->getAttribute($_buyer_, "company_number")) {
            // line 148
            echo "                                <dt>";
            echo gettext("Company number");
            echo ":</dt>
                                <dd>";
            // line 149
            if (isset($context["buyer"])) { $_buyer_ = $context["buyer"]; } else { $_buyer_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_buyer_, "company_number"), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 151
        echo "
                                ";
        // line 152
        if (isset($context["buyer"])) { $_buyer_ = $context["buyer"]; } else { $_buyer_ = null; }
        if ($this->getAttribute($_buyer_, "company_vat")) {
            // line 153
            echo "                                <dt>";
            echo gettext("Company VAT");
            echo ":</dt>
                                <dd>";
            // line 154
            if (isset($context["buyer"])) { $_buyer_ = $context["buyer"]; } else { $_buyer_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_buyer_, "company_vat"), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 156
        echo "
                                ";
        // line 157
        if (isset($context["buyer"])) { $_buyer_ = $context["buyer"]; } else { $_buyer_ = null; }
        if ($this->getAttribute($_buyer_, "address")) {
            // line 158
            echo "                                <dt>";
            echo gettext("Address");
            echo ":</dt>
                                <dd>";
            // line 159
            if (isset($context["buyer"])) { $_buyer_ = $context["buyer"]; } else { $_buyer_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_buyer_, "address"), "html", null, true);
            echo "</dd>
                                <dd>";
            // line 160
            if (isset($context["buyer"])) { $_buyer_ = $context["buyer"]; } else { $_buyer_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_buyer_, "city"), "html", null, true);
            echo ", ";
            if (isset($context["buyer"])) { $_buyer_ = $context["buyer"]; } else { $_buyer_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_buyer_, "state"), "html", null, true);
            echo "</dd>
                                <dd>";
            // line 161
            if (isset($context["buyer"])) { $_buyer_ = $context["buyer"]; } else { $_buyer_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_buyer_, "zip"), "html", null, true);
            echo ", ";
            if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
            if (isset($context["buyer"])) { $_buyer_ = $context["buyer"]; } else { $_buyer_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_guest_, "system_countries"), $this->getAttribute($_buyer_, "country"), array(), "array"), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 163
        echo "
                                ";
        // line 164
        if (isset($context["buyer"])) { $_buyer_ = $context["buyer"]; } else { $_buyer_ = null; }
        if ($this->getAttribute($_buyer_, "phone")) {
            // line 165
            echo "                                <dt>";
            echo gettext("Phone");
            echo ":</dt>
                                <dd>";
            // line 166
            if (isset($context["buyer"])) { $_buyer_ = $context["buyer"]; } else { $_buyer_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_buyer_, "phone"), "html", null, true);
            echo "</dd>
                                ";
        }
        // line 168
        echo "                            </dl>
                        </div>
                    </div>
                </div>

                ";
        // line 173
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        if ($this->getAttribute($_invoice_, "text_1")) {
            // line 174
            echo "                    <div class=\"well\">
                        ";
            // line 175
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo twig_markdown_filter($this->env, $this->getAttribute($_invoice_, "text_1"));
            echo "
                    </div>
                ";
        }
        // line 178
        echo "
                <table class=\"table table-striped table-bordered table-condensed table-hover\">
                    <thead>
                        <tr>
                            <th>";
        // line 182
        echo gettext("#");
        echo "</th>
                            <th>";
        // line 183
        echo gettext("Title");
        echo "</th>
                            <th>";
        // line 184
        echo gettext("Price");
        echo "</th>
                            <th>";
        // line 185
        echo gettext("Total");
        echo "</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 189
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_invoice_, "lines"));
        foreach ($context['_seq'] as $context["i"] => $context["item"]) {
            // line 190
            echo "                        <tr>
                            <td>";
            // line 191
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, ($_i_ + 1), "html", null, true);
            echo ".</td>
                            <td>
                                ";
            // line 193
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if ($this->getAttribute($_item_, "order_id")) {
                // line 194
                echo "                                <a href=\"";
                echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/order/service");
                echo "/manage/";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "order_id"), "html", null, true);
                echo "\">";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title"), "html", null, true);
                echo "</a>
                                ";
            } else {
                // line 196
                echo "                                ";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title"), "html", null, true);
                echo "
                                ";
            }
            // line 198
            echo "                            </td>
                            <td>
                                ";
            // line 200
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo twig_money($this->env, $this->getAttribute($_item_, "price"), $this->getAttribute($_invoice_, "currency"));
            echo "
                                ";
            // line 201
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (($this->getAttribute($_item_, "quantity") > 1)) {
                // line 202
                echo "                                x ";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "quantity"), "html", null, true);
                echo " ";
                // line 203
                echo "                                ";
            }
            // line 204
            echo "                            </td>
                            <td >";
            // line 205
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo twig_money($this->env, $this->getAttribute($_item_, "total"), $this->getAttribute($_invoice_, "currency"));
            echo "</td>
                        </tr>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 209
        echo "                    </tbody>

                </table>

                <div class=\"row-fluid\">
                    <div class=\"span4 offset8\">
                        <table class=\"table table-bordered table-striped\">
                            ";
        // line 216
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        if (($this->getAttribute($_invoice_, "tax") > 0)) {
            // line 217
            echo "                            <tr>
                                <td>";
            // line 218
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_invoice_, "taxname"), "html", null, true);
            echo " ";
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_invoice_, "taxrate"), "html", null, true);
            echo "%</td>
                                <td>";
            // line 219
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo twig_money($this->env, $this->getAttribute($_invoice_, "tax"), $this->getAttribute($_invoice_, "currency"));
            echo "</td>
                            </tr>
                            ";
        }
        // line 222
        echo "                            ";
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        if (($this->getAttribute($_invoice_, "discount") > 0)) {
            // line 223
            echo "                            <tr>
                                <td>";
            // line 224
            echo gettext("Discount");
            echo "</td>
                                <td>";
            // line 225
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo twig_money($this->env, $this->getAttribute($_invoice_, "discount"), $this->getAttribute($_invoice_, "currency"));
            echo "</td>
                            </tr>
                            ";
        }
        // line 228
        echo "
                            <tr>
                                <td><strong>";
        // line 230
        echo gettext("Total");
        echo "</strong></td>
                                <td><strong>";
        // line 231
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        echo twig_money($this->env, $this->getAttribute($_invoice_, "total"), $this->getAttribute($_invoice_, "currency"));
        echo "</strong></td>
                            </tr>
                        </table>
                    </div>
                </div>

                ";
        // line 237
        if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
        if ($this->getAttribute($_invoice_, "text_2")) {
            // line 238
            echo "                    <div class=\"well\">
                        ";
            // line 239
            if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
            echo twig_markdown_filter($this->env, $this->getAttribute($_invoice_, "text_2"));
            echo "
                    </div>
                ";
        }
        // line 242
        echo "            </section>
        </div>
    </article>
</div>
";
    }

    // line 248
    public function block_js($context, array $blocks = array())
    {
        // line 249
        echo "<script type=\"text/javascript\">
    \$(function() {
        \$(\".hover-popover\").tooltip({
            placement: 'top'
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
        return array (  759 => 249,  756 => 248,  748 => 242,  741 => 239,  738 => 238,  735 => 237,  725 => 231,  721 => 230,  717 => 228,  710 => 225,  706 => 224,  703 => 223,  699 => 222,  692 => 219,  684 => 218,  681 => 217,  678 => 216,  669 => 209,  657 => 205,  654 => 204,  651 => 203,  646 => 202,  643 => 201,  637 => 200,  633 => 198,  626 => 196,  614 => 194,  611 => 193,  605 => 191,  602 => 190,  597 => 189,  590 => 185,  586 => 184,  582 => 183,  578 => 182,  572 => 178,  565 => 175,  562 => 174,  559 => 173,  552 => 168,  546 => 166,  541 => 165,  538 => 164,  535 => 163,  525 => 161,  517 => 160,  512 => 159,  507 => 158,  504 => 157,  501 => 156,  495 => 154,  490 => 153,  487 => 152,  484 => 151,  478 => 149,  473 => 148,  470 => 147,  467 => 146,  461 => 144,  456 => 143,  453 => 142,  450 => 141,  441 => 139,  436 => 138,  433 => 137,  428 => 135,  418 => 127,  412 => 125,  407 => 124,  404 => 123,  401 => 122,  395 => 120,  390 => 119,  387 => 118,  384 => 117,  378 => 115,  373 => 114,  370 => 113,  367 => 112,  361 => 110,  356 => 109,  353 => 108,  350 => 107,  344 => 105,  339 => 104,  336 => 103,  333 => 102,  327 => 100,  322 => 99,  319 => 98,  316 => 97,  310 => 95,  305 => 94,  302 => 93,  297 => 91,  286 => 84,  277 => 83,  272 => 81,  269 => 80,  265 => 78,  258 => 76,  255 => 75,  251 => 74,  248 => 73,  241 => 71,  234 => 69,  231 => 68,  227 => 67,  222 => 66,  218 => 65,  215 => 64,  208 => 62,  205 => 61,  190 => 54,  181 => 53,  178 => 52,  176 => 51,  169 => 50,  161 => 44,  152 => 37,  146 => 36,  122 => 34,  119 => 33,  114 => 32,  109 => 31,  104 => 30,  97 => 29,  92 => 27,  88 => 26,  80 => 20,  77 => 19,  74 => 18,  71 => 17,  68 => 16,  65 => 15,  62 => 14,  59 => 13,  50 => 10,  43 => 9,  40 => 8,  34 => 5,  28 => 3,  26 => 2,);
    }
}
