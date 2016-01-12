<?php

/* mod_orderbutton_checkout.phtml */
class __TwigTemplate_3e9418fcc0b0b6b584cbc6d240972599ffbcc66b6cd4e17ed93f96b742ea3500 extends Twig_Template
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
        if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
        $context["cart"] = $this->getAttribute($_guest_, "cart_get");
        // line 2
        echo "<div class=\"accordion-group\">
    <div class=\"accordion-heading\">
        <a class=\"accordion-toggle\" href=\"#checkout\" data-parent=\"#accordion1\" data-toggle=\"collapse\"><span class=\"awe-shopping-cart\"></span> ";
        // line 4
        echo gettext("Cart");
        echo " <span class=\"label label-warning pull-right\">";
        if (isset($context["cart"])) { $_cart_ = $context["cart"]; } else { $_cart_ = null; }
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($_cart_, "items")), "html", null, true);
        echo "</span></a>
    </div>
    ";
        // line 6
        if (isset($context["cart"])) { $_cart_ = $context["cart"]; } else { $_cart_ = null; }
        if ($this->getAttribute($_cart_, "items")) {
            // line 7
            echo "    <div id=\"checkout\" class=\"accordion-body collapse ";
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
            if (($this->getAttribute($_request_, "checkout") && $_client_)) {
                echo "in";
            }
            echo "\">
        <div class=\"accordion-inner\" id=\"checkout-inner\">

            <table class=\"table table-striped table-bordered table-condensed\">
                <thead>
                <tr>
                    <th>";
            // line 13
            echo gettext("Product");
            echo "</th>
                    <th>";
            // line 14
            echo gettext("Price");
            echo "</th>
                    <th style=\"width: 3%; text-align: center\"></th>
                </tr>
                </thead>
                <tbody>
                ";
            // line 19
            if (isset($context["cart"])) { $_cart_ = $context["cart"]; } else { $_cart_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_cart_, "items"));
            foreach ($context['_seq'] as $context["i"] => $context["item"]) {
                // line 20
                echo "                <tr>
                    <td>
                        ";
                // line 22
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title"), "html", null, true);
                echo "
                        ";
                // line 23
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                if (($this->getAttribute($_item_, "quantity") > 1)) {
                    // line 24
                    echo "                        x ";
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_item_, "quantity"), "html", null, true);
                    echo "
                        ";
                }
                // line 26
                echo "
                        ";
                // line 27
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                if ($this->getAttribute($_item_, "period")) {
                    // line 28
                    echo "                            (";
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_period_title($this->env, $this->getAttribute($_item_, "period"));
                    echo ")
                        ";
                }
                // line 30
                echo "                    </td>
                    <td>
                        ";
                // line 32
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                if ($this->getAttribute($_item_, "discount_price")) {
                    // line 33
                    echo "                            <del>";
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_money_convert($this->env, ($this->getAttribute($_item_, "price") * $this->getAttribute($_item_, "quantity")));
                    echo "</del>
                            <strong class=\"text-success\">";
                    // line 34
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_money_convert($this->env, (($this->getAttribute($_item_, "price") * $this->getAttribute($_item_, "quantity")) - $this->getAttribute($_item_, "discount_price")));
                    echo "</strong>
                        ";
                } else {
                    // line 36
                    echo "                            ";
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_money_convert($this->env, ($this->getAttribute($_item_, "price") * $this->getAttribute($_item_, "quantity")));
                    echo "
                        ";
                }
                // line 38
                echo "                    </td>
                    <td><button data-cart-item-id=\"";
                // line 39
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_item_, "id"), "html", null, true);
                echo "\" class=\"btn btn-inverse btn-mini remove-cart-item\" title=\"";
                echo gettext("Remove item");
                echo "\"><strong><i class=\"awe-remove\"></i></strong></button></td>
                </tr>

                ";
                // line 42
                if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
                if ($this->getAttribute($_request_, "show_custom_form_values")) {
                    // line 43
                    echo "                <tr>
                    <td>
                        ";
                    // line 45
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
                    if (($this->getAttribute($_item_, "form_id") && $this->getAttribute($_guest_, "extension_is_on", array(0 => array("mod" => "formbuilder")), "method"))) {
                        // line 46
                        echo "                        ";
                        if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
                        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                        $context["form"] = $this->getAttribute($_guest_, "formbuilder_get", array(0 => array("id" => $this->getAttribute($_item_, "form_id"))), "method");
                        // line 47
                        echo "                        ";
                        // line 48
                        echo "                        <div class=\"well\">
                            <dl class=\"dl-horizontal\">
                                ";
                        // line 50
                        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($_item_);
                        foreach ($context['_seq'] as $context["field"] => $context["value"]) {
                            // line 51
                            echo "                                    ";
                            if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_form_, "fields"));
                            foreach ($context['_seq'] as $context["_key"] => $context["form_field"]) {
                                // line 52
                                echo "                                        ";
                                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                                if ((!twig_test_empty($_value_))) {
                                    // line 53
                                    echo "                                            ";
                                    if (isset($context["form_field"])) { $_form_field_ = $context["form_field"]; } else { $_form_field_ = null; }
                                    if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
                                    if (($this->getAttribute($_form_field_, "name") == $_field_)) {
                                        // line 54
                                        echo "                                            <dt>
                                                ";
                                        // line 55
                                        if (isset($context["form_field"])) { $_form_field_ = $context["form_field"]; } else { $_form_field_ = null; }
                                        echo twig_escape_filter($this->env, $this->getAttribute($_form_field_, "label"), "html", null, true);
                                        echo "
                                            </dt>
                                            <dd>
                                                ";
                                        // line 58
                                        if (isset($context["form_field"])) { $_form_field_ = $context["form_field"]; } else { $_form_field_ = null; }
                                        if (($this->getAttribute($_form_field_, "type") == "checkbox")) {
                                            // line 59
                                            echo "                                                    ";
                                            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                                            $context['_parent'] = (array) $context;
                                            $context['_seq'] = twig_ensure_traversable($_value_);
                                            foreach ($context['_seq'] as $context["_key"] => $context["selection"]) {
                                                // line 60
                                                echo "                                                        ";
                                                if (isset($context["form_field"])) { $_form_field_ = $context["form_field"]; } else { $_form_field_ = null; }
                                                $context['_parent'] = (array) $context;
                                                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_form_field_, "options"));
                                                foreach ($context['_seq'] as $context["field_key"] => $context["field_value"]) {
                                                    // line 61
                                                    echo "                                                            ";
                                                    if (isset($context["field_value"])) { $_field_value_ = $context["field_value"]; } else { $_field_value_ = null; }
                                                    if (isset($context["selection"])) { $_selection_ = $context["selection"]; } else { $_selection_ = null; }
                                                    if (($_field_value_ == $_selection_)) {
                                                        // line 62
                                                        echo "                                                                ";
                                                        if (isset($context["field_key"])) { $_field_key_ = $context["field_key"]; } else { $_field_key_ = null; }
                                                        echo twig_escape_filter($this->env, $_field_key_, "html", null, true);
                                                        echo "
                                                            ";
                                                    }
                                                    // line 64
                                                    echo "                                                        ";
                                                }
                                                $_parent = $context['_parent'];
                                                unset($context['_seq'], $context['_iterated'], $context['field_key'], $context['field_value'], $context['_parent'], $context['loop']);
                                                $context = array_intersect_key($context, $_parent) + $_parent;
                                                // line 65
                                                echo "                                                    ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['selection'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 66
                                            echo "                                                ";
                                        } elseif ((($this->getAttribute($_form_field_, "type") == "select") || ($this->getAttribute($_form_field_, "type") == "radio"))) {
                                            // line 67
                                            echo "                                                    ";
                                            if (isset($context["form_field"])) { $_form_field_ = $context["form_field"]; } else { $_form_field_ = null; }
                                            $context['_parent'] = (array) $context;
                                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_form_field_, "options"));
                                            foreach ($context['_seq'] as $context["field_key"] => $context["field_value"]) {
                                                // line 68
                                                echo "                                                        ";
                                                if (isset($context["field_value"])) { $_field_value_ = $context["field_value"]; } else { $_field_value_ = null; }
                                                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                                                if (($_field_value_ == $_value_)) {
                                                    // line 69
                                                    echo "                                                            ";
                                                    if (isset($context["field_key"])) { $_field_key_ = $context["field_key"]; } else { $_field_key_ = null; }
                                                    echo twig_escape_filter($this->env, $_field_key_, "html", null, true);
                                                    echo "
                                                        ";
                                                }
                                                // line 71
                                                echo "                                                    ";
                                            }
                                            $_parent = $context['_parent'];
                                            unset($context['_seq'], $context['_iterated'], $context['field_key'], $context['field_value'], $context['_parent'], $context['loop']);
                                            $context = array_intersect_key($context, $_parent) + $_parent;
                                            // line 72
                                            echo "                                                ";
                                        } else {
                                            // line 73
                                            echo "                                                    ";
                                            if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                                            echo twig_escape_filter($this->env, $_value_, "html", null, true);
                                            echo "
                                                ";
                                        }
                                        // line 75
                                        echo "                                            </dd>
                                            ";
                                    }
                                    // line 77
                                    echo "                                        ";
                                }
                                // line 78
                                echo "                                    ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['form_field'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 79
                            echo "                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['field'], $context['value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 80
                        echo "                            </dl>
                        </div>
                        ";
                    }
                    // line 83
                    echo "                    </td>
                    <td></td>
                </tr>
                ";
                }
                // line 87
                echo "
                ";
                // line 88
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                if (($this->getAttribute($_item_, "setup_price") != 0)) {
                    // line 89
                    echo "                <tr>
                    <td>";
                    // line 90
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_item_, "title"), "html", null, true);
                    echo " ";
                    echo gettext("setup");
                    echo "</td>
                    <td>
                        ";
                    // line 92
                    if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                    if ($this->getAttribute($_item_, "discount_setup")) {
                        // line 93
                        echo "                        <del>";
                        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                        echo twig_money_convert($this->env, $this->getAttribute($_item_, "setup_price"));
                        echo "</del>
                        ";
                        // line 94
                        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                        echo twig_money_convert($this->env, ($this->getAttribute($_item_, "setup_price") - $this->getAttribute($_item_, "discount_setup")));
                        echo "
                        ";
                    } else {
                        // line 96
                        echo "                        ";
                        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                        echo twig_money_convert($this->env, $this->getAttribute($_item_, "setup_price"));
                        echo "</td>
                    ";
                    }
                    // line 98
                    echo "                </tr>
                ";
                }
                // line 100
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "                </tbody>
            </table>

            <div class=\"row-fluid\">
                <div class=\"span6\">
                    ";
            // line 106
            if (isset($context["cart"])) { $_cart_ = $context["cart"]; } else { $_cart_ = null; }
            if ((!$this->getAttribute($_cart_, "promocode"))) {
                // line 107
                echo "                    <a href=\"#\" id=\"show-promo-field\">";
                echo gettext("Have coupon code?");
                echo "</a>
                    ";
            }
            // line 109
            echo "
                    <form action=\"guest/cart/apply_promo\" method=\"post\" class=\"well\" id=\"apply-promo\" data-api-reload=\"1\" ";
            // line 110
            if (isset($context["cart"])) { $_cart_ = $context["cart"]; } else { $_cart_ = null; }
            if ((!$this->getAttribute($_cart_, "promocode"))) {
                echo "style=\"display:none\"";
            }
            echo ">
                        <div class=\"control-group\">
                            <div class=\"form-controls\">
                                <div class=\"input-append\">
                                    <input class=\"span8\" type=\"text\" name=\"promocode\" id=\"promocode\" value=\"";
            // line 114
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            if (isset($context["cart"])) { $_cart_ = $context["cart"]; } else { $_cart_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($_request_, "promocode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_request_, "promocode"), $this->getAttribute($_cart_, "promocode"))) : ($this->getAttribute($_cart_, "promocode"))), "html", null, true);
            echo "\" ";
            if (isset($context["promo"])) { $_promo_ = $context["promo"]; } else { $_promo_ = null; }
            if ($this->getAttribute($_promo_, "required")) {
                echo "required=\"required\"";
            }
            echo " placeholder=\"";
            echo gettext("Enter code");
            echo "\">
                                    ";
            // line 115
            if (isset($context["cart"])) { $_cart_ = $context["cart"]; } else { $_cart_ = null; }
            if ($this->getAttribute($_cart_, "promocode")) {
                // line 116
                echo "                                    <button class=\"btn\" id=\"remove-promo\" href=\"";
                echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/guest/cart/remove_promo");
                echo "\" type=\"button\" data-api-reload=\"1\">";
                echo gettext("Remove");
                echo "</button>
                                    ";
            } else {
                // line 118
                echo "                                    <button class=\"btn\" type=\"submit\">";
                echo gettext("Apply");
                echo "</button>
                                    ";
            }
            // line 120
            echo "                                </div>
                            </div>
                        </div>
                        ";
            // line 131
            echo "                    </form>
                </div>

                <div class=\"span6\">
                    <table class=\"table table-bordered table-striped\">

                        ";
            // line 137
            if (isset($context["cart"])) { $_cart_ = $context["cart"]; } else { $_cart_ = null; }
            if (($this->getAttribute($_cart_, "discount") > 0)) {
                // line 138
                echo "                        <tr>
                            <td><strong>";
                // line 139
                echo gettext("Subtotal:");
                echo "</strong></td>
                            <td><strong>";
                // line 140
                if (isset($context["cart"])) { $_cart_ = $context["cart"]; } else { $_cart_ = null; }
                echo twig_money_convert($this->env, ($this->getAttribute($_cart_, "total") + $this->getAttribute($_cart_, "discount")));
                echo "</strong></td>
                        </tr>
                        <tr>
                            <td><strong>";
                // line 143
                echo gettext("Discount:");
                echo "</strong></td>
                            <td><strong>- ";
                // line 144
                if (isset($context["cart"])) { $_cart_ = $context["cart"]; } else { $_cart_ = null; }
                echo twig_money_convert($this->env, $this->getAttribute($_cart_, "discount"));
                echo "</strong></td>
                        </tr>
                        ";
            }
            // line 147
            echo "
                        ";
            // line 148
            $context["tax_amount"] = 0;
            // line 149
            echo "                        ";
            if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
            if ($this->getAttribute($_client_, "client_is_taxable")) {
                // line 150
                echo "                        ";
                if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
                $context["tax_rate"] = $this->getAttribute($_client_, "invoice_get_tax_rate");
                // line 151
                echo "                        ";
                if (isset($context["cart"])) { $_cart_ = $context["cart"]; } else { $_cart_ = null; }
                if (isset($context["tax_rate"])) { $_tax_rate_ = $context["tax_rate"]; } else { $_tax_rate_ = null; }
                $context["tax_amount"] = (($this->getAttribute($_cart_, "total") * $_tax_rate_) / 100);
                // line 152
                echo "                        <tr>
                            <td><strong>";
                // line 153
                echo gettext("VAT");
                echo " (";
                if (isset($context["tax_rate"])) { $_tax_rate_ = $context["tax_rate"]; } else { $_tax_rate_ = null; }
                echo twig_escape_filter($this->env, $_tax_rate_, "html", null, true);
                echo "%) :</strong></td>
                            <td><strong>";
                // line 154
                if (isset($context["tax_amount"])) { $_tax_amount_ = $context["tax_amount"]; } else { $_tax_amount_ = null; }
                echo twig_money_convert($this->env, $_tax_amount_);
                echo "</strong></td>
                        </tr>
                        ";
            }
            // line 157
            echo "                        <tr>
                            <td><strong>";
            // line 158
            echo gettext("Total:");
            echo "</strong></td>
                            <td><strong>";
            // line 159
            if (isset($context["cart"])) { $_cart_ = $context["cart"]; } else { $_cart_ = null; }
            if (isset($context["tax_amount"])) { $_tax_amount_ = $context["tax_amount"]; } else { $_tax_amount_ = null; }
            echo twig_money_convert($this->env, ($this->getAttribute($_cart_, "total") + $_tax_amount_));
            echo "</strong></td>
                        </tr>

                    </table>

                    <form method=\"post\" action=\"client/cart/checkout\" class=\"form-horizontal\" id=\"checkout-form\" onsubmit=\"return false;\">
                        <fieldset>
                            ";
            // line 166
            if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
            if (isset($context["cart"])) { $_cart_ = $context["cart"]; } else { $_cart_ = null; }
            $context["enough_in_balance"] = ($this->getAttribute($_client_, "client_balance_get_total") >= $this->getAttribute($_cart_, "total"));
            // line 167
            echo "                            ";
            if (isset($context["cart"])) { $_cart_ = $context["cart"]; } else { $_cart_ = null; }
            if (isset($context["enough_in_balance"])) { $_enough_in_balance_ = $context["enough_in_balance"]; } else { $_enough_in_balance_ = null; }
            if (($this->getAttribute($_cart_, "total") && (!$_enough_in_balance_))) {
                // line 168
                echo "                            <div class=\"control-group\">
                                ";
                // line 169
                if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_guest_, "invoice_gateways"));
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
                foreach ($context['_seq'] as $context["_key"] => $context["gtw"]) {
                    // line 170
                    echo "                                ";
                    if (isset($context["cart"])) { $_cart_ = $context["cart"]; } else { $_cart_ = null; }
                    if (isset($context["gtw"])) { $_gtw_ = $context["gtw"]; } else { $_gtw_ = null; }
                    if (twig_in_filter($this->getAttribute($this->getAttribute($_cart_, "currency"), "code"), $this->getAttribute($_gtw_, "accepted_currencies"))) {
                        // line 171
                        echo "                                <label class=\"radio\" for=\"";
                        if (isset($context["gtw"])) { $_gtw_ = $context["gtw"]; } else { $_gtw_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_gtw_, "id"), "html", null, true);
                        echo "\">
                                    <input type=\"radio\" name=\"gateway_id\" id=";
                        // line 172
                        if (isset($context["gtw"])) { $_gtw_ = $context["gtw"]; } else { $_gtw_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_gtw_, "id"), "html", null, true);
                        echo " value=\"";
                        if (isset($context["gtw"])) { $_gtw_ = $context["gtw"]; } else { $_gtw_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_gtw_, "id"), "html", null, true);
                        echo "\" ";
                        if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                        echo (($this->getAttribute($_loop_, "first")) ? ("checked") : (""));
                        echo "/>
                                    ";
                        // line 173
                        echo gettext("Pay by");
                        echo " ";
                        if (isset($context["gtw"])) { $_gtw_ = $context["gtw"]; } else { $_gtw_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_gtw_, "title"), "html", null, true);
                        echo "
                                </label>
                                ";
                    }
                    // line 176
                    echo "                                ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gtw'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 177
                echo "                            </div>
                            ";
            }
            // line 179
            echo "                            <div class=\"control-group\">
                                <div class=\"controls\">
                                    ";
            // line 181
            if (isset($context["enough_in_balance"])) { $_enough_in_balance_ = $context["enough_in_balance"]; } else { $_enough_in_balance_ = null; }
            if ($_enough_in_balance_) {
                // line 182
                echo "                                        <p>";
                echo gettext("Total amount will be deducted from account balance");
                echo "</p>
                                    ";
            }
            // line 184
            echo "                                    <button class=\"btn btn-primary btn-large\" type=\"submit\">";
            echo gettext("Checkout");
            echo "</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>

                </div>
            </div>
        </div>
    </div>
    ";
        }
        // line 195
        echo "</div>
<script type=\"text/javascript\">
    \$('#remove-promo').click(function(e){
        e.preventDefault();
        bb.post(\"guest/cart/remove_promo\", {}, function(r){
                bb.msg(\"";
        // line 200
        echo gettext("Promo code was removed");
        echo "\");
                location.reload(false);
        });

    });

    \$('.remove-cart-item').click(function(e){
        e.preventDefault();
        var btn = \$(this);
        if (confirm('";
        // line 209
        echo gettext("Are you sure you want to remove this item from cart?");
        echo "')){
            var item_id = \$(btn).attr('data-cart-item-id');
            bb.post(\"guest/cart/remove_item\", {id: item_id}, function(r){
                bb.msg(\"";
        // line 212
        echo gettext("Item was removed from cart");
        echo "\");
                location.reload(false);
            });
        }


    });
</script>";
    }

    public function getTemplateName()
    {
        return "mod_orderbutton_checkout.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  631 => 212,  625 => 209,  613 => 200,  606 => 195,  591 => 184,  585 => 182,  582 => 181,  578 => 179,  574 => 177,  560 => 176,  551 => 173,  540 => 172,  534 => 171,  529 => 170,  511 => 169,  508 => 168,  503 => 167,  499 => 166,  487 => 159,  483 => 158,  480 => 157,  473 => 154,  466 => 153,  463 => 152,  458 => 151,  454 => 150,  450 => 149,  448 => 148,  445 => 147,  438 => 144,  434 => 143,  427 => 140,  423 => 139,  420 => 138,  417 => 137,  409 => 131,  404 => 120,  398 => 118,  390 => 116,  387 => 115,  374 => 114,  364 => 110,  361 => 109,  355 => 107,  352 => 106,  345 => 101,  339 => 100,  335 => 98,  328 => 96,  322 => 94,  316 => 93,  313 => 92,  305 => 90,  302 => 89,  296 => 87,  290 => 83,  285 => 80,  279 => 79,  273 => 78,  270 => 77,  266 => 75,  259 => 73,  256 => 72,  250 => 71,  243 => 69,  238 => 68,  232 => 67,  229 => 66,  223 => 65,  217 => 64,  210 => 62,  205 => 61,  199 => 60,  193 => 59,  175 => 53,  160 => 50,  154 => 47,  149 => 46,  145 => 45,  129 => 39,  126 => 38,  113 => 34,  107 => 33,  104 => 32,  100 => 30,  93 => 28,  90 => 27,  80 => 24,  77 => 23,  68 => 20,  63 => 19,  51 => 13,  37 => 7,  34 => 6,  26 => 4,  203 => 53,  195 => 48,  190 => 58,  186 => 45,  183 => 55,  180 => 54,  173 => 41,  170 => 40,  166 => 39,  153 => 36,  147 => 35,  141 => 43,  135 => 32,  131 => 30,  118 => 26,  108 => 23,  91 => 21,  87 => 26,  79 => 18,  75 => 17,  72 => 22,  61 => 13,  56 => 11,  44 => 9,  35 => 7,  32 => 6,  23 => 2,  69 => 14,  55 => 14,  52 => 10,  47 => 9,  28 => 4,  25 => 3,  22 => 2,  299 => 88,  287 => 170,  262 => 148,  244 => 138,  240 => 137,  221 => 121,  194 => 97,  177 => 84,  171 => 52,  165 => 51,  162 => 38,  158 => 75,  156 => 48,  144 => 65,  138 => 42,  136 => 60,  133 => 59,  130 => 58,  127 => 57,  124 => 28,  121 => 55,  119 => 36,  116 => 53,  114 => 24,  109 => 49,  82 => 19,  78 => 19,  74 => 18,  70 => 17,  66 => 14,  62 => 15,  58 => 12,  53 => 13,  49 => 12,  42 => 8,  38 => 6,  33 => 4,  30 => 3,  27 => 4,  19 => 1,);
    }
}
