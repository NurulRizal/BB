<?php

/* mod_servicedomain_order_form.phtml */
class __TwigTemplate_bee21f895a3082f788e4ffdd522674e7554fa424e659fe16aec57d1897d3cfc2 extends Twig_Template
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
        $context["periods"] = $this->getAttribute($_guest_, "system_periods");
        // line 2
        if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
        $context["pricing"] = $this->getAttribute($_product_, "pricing");
        // line 3
        if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
        $context["transfer_tlds"] = $this->getAttribute($_guest_, "serviceDomain_tlds", array(0 => array("allow_transfer" => 1)), "method");
        // line 4
        echo "
<div class=\"tab-pane active\">
    <div class=\"tabbable tabs-left\">
        <ul class=\"nav nav-tabs\">
            <li class=\"active domain-tab\"><a href=\"#register\" rel=\"register\" data-toggle=\"tab\">Register</a></li>
            ";
        // line 9
        if (isset($context["transfer_tlds"])) { $_transfer_tlds_ = $context["transfer_tlds"]; } else { $_transfer_tlds_ = null; }
        if ((!twig_test_empty($_transfer_tlds_))) {
            // line 10
            echo "            <li class=\"domain-tab\"><a href=\"#transfer\" rel=\"transfer\" data-toggle=\"tab\">Transfer</a></li>
            ";
        }
        // line 12
        echo "        </ul>
        <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"register\">
                <section>
                    <fieldset>
                        <div class=\"control-group\">
                            <label>";
        // line 18
        echo gettext("Register a new domain");
        echo "</label>
                            <div class=\"form-horizontal\">
                                <input type=\"text\" name=\"register_sld\" style=\"width: 55%\" value=\"";
        // line 20
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_request_, "register_sld"), "html", null, true);
        echo "\" placeholder=\"";
        echo gettext("Enter new domain name to register");
        echo "\">
                                ";
        // line 21
        if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
        $context["tlds"] = $this->getAttribute($_guest_, "serviceDomain_tlds", array(0 => array("allow_register" => 1)), "method");
        // line 22
        echo "                                <select name=\"register_tld\" style=\"width: 20%\">
                                    ";
        // line 23
        if (isset($context["tlds"])) { $_tlds_ = $context["tlds"]; } else { $_tlds_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_tlds_);
        foreach ($context['_seq'] as $context["_key"] => $context["tld"]) {
            // line 24
            echo "                                    <option value=\"";
            if (isset($context["tld"])) { $_tld_ = $context["tld"]; } else { $_tld_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_tld_, "tld"), "html", null, true);
            echo "\" label=\"";
            if (isset($context["tld"])) { $_tld_ = $context["tld"]; } else { $_tld_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_tld_, "tld"), "html", null, true);
            echo "\">";
            if (isset($context["tld"])) { $_tld_ = $context["tld"]; } else { $_tld_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_tld_, "tld"), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tld'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                                </select>
                                <button class=\"btn btn-inverse\" type=\"button\" id=\"domain-check\">";
        // line 27
        echo gettext("Check");
        echo "</button>
                            </div>
                        </div>
                        <div class=\"control-group\">
                            <div class=\"onAfterDomainCheck\" style=\"display:none;\">
                                <label>
                                    <select name=\"register_years\" id=\"registration-years\"></select>
                                </label>
                                <br/>
                                <label class=\"checkbox\"><input type=\"checkbox\" onclick=\"\$('#nameservers').slideToggle();\">";
        // line 36
        echo gettext("I want to use my nameservers");
        echo "</label>
                                <div id=\"nameservers\" style=\"display:none; margin: 10px 0;\">
                                    <div class=\"row-fluid\">
                                        <input type=\"text\" name=\"ns1\" value=\"\" placeholder=\"";
        // line 39
        echo gettext("Nameserver 1");
        echo "\"/>
                                    </div>
                                    <div class=\"row-fluid\">
                                        <input type=\"text\" name=\"ns2\" value=\"\" placeholder=\"";
        // line 42
        echo gettext("Nameserver 2");
        echo "\"/>
                                    </div>
                                    <div class=\"row-fluid\">
                                        <input type=\"text\" name=\"ns3\" value=\"\" placeholder=\"";
        // line 45
        echo gettext("Nameserver 3");
        echo "\"/>
                                    </div>
                                    <div class=\"row-fluid\">
                                        <input type=\"text\" name=\"ns4\" value=\"\" placeholder=\"";
        // line 48
        echo gettext("Nameserver 4");
        echo "\"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </section>
            </div>

            ";
        // line 57
        if (isset($context["transfer_tlds"])) { $_transfer_tlds_ = $context["transfer_tlds"]; } else { $_transfer_tlds_ = null; }
        if ((!twig_test_empty($_transfer_tlds_))) {
            // line 58
            echo "            <div class=\"tab-pane\" id=\"transfer\">
                <section>
                    <fieldset>
                        <div class=\"control-group\">
                            <label>";
            // line 62
            echo gettext("Transfer a new domain");
            echo "</label>
                            <div class=\"form-horizontal\">
                                <input type=\"text\" name=\"transfer_sld\" style=\"width: 55%\" value=\"";
            // line 64
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_request_, "transfer_sld"), "html", null, true);
            echo "\" placeholder=\"";
            echo gettext("Enter your domain name to transfer");
            echo "\">
                                <select name=\"transfer_tld\" style=\"width: 20%\">
                                    ";
            // line 66
            if (isset($context["transfer_tlds"])) { $_transfer_tlds_ = $context["transfer_tlds"]; } else { $_transfer_tlds_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_transfer_tlds_);
            foreach ($context['_seq'] as $context["_key"] => $context["tld"]) {
                // line 67
                echo "                                    <option value=\"";
                if (isset($context["tld"])) { $_tld_ = $context["tld"]; } else { $_tld_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_tld_, "tld"), "html", null, true);
                echo "\" label=\"";
                if (isset($context["tld"])) { $_tld_ = $context["tld"]; } else { $_tld_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_tld_, "tld"), "html", null, true);
                echo "\">";
                if (isset($context["tld"])) { $_tld_ = $context["tld"]; } else { $_tld_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_tld_, "tld"), "html", null, true);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tld'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "                                </select>
                                <button class=\"btn btn-inverse\" type=\"button\" id=\"transfer-check\">";
            // line 70
            echo gettext("Check");
            echo "</button>
                            </div>
                            </div>
                            <div class=\"control-group\">
                                <div class=\"form-horizontal\">
                                    <div id=\"domain-transfer-config\" style=\"display:none;\">
                                        <p>";
            // line 76
            echo gettext("Transfer price");
            echo ": <span id=\"transfer-price\"></span></p>
                                        <input type=\"text\" name=\"transfer_code\" value=\"";
            // line 77
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_request_, "transfer_code"), "html", null, true);
            echo "\" style=\"width: 200px\" placeholder=\"";
            echo gettext("Enter domain transfer code");
            echo "\">
                                    </div>
                                </div>
                            </div>
                    </fieldset>
                </section>
            </div>
            ";
        }
        // line 85
        echo "        </div>
    </div>
    <!-- Second level tabs -->
</div>

<input type=\"hidden\" name=\"id\" value=\"";
        // line 90
        if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_product_, "id"), "html", null, true);
        echo "\" />
<input type=\"hidden\" name=\"action\" value=\"register\" id=\"domain-action\"/>

";
        // line 93
        if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
        $context["currency"] = $this->getAttribute($_guest_, "cart_get_currency");
        // line 94
        echo "<script type=\"text/javascript\">
\$(function() {

    \$('ul.nav.nav-tabs > li.domain-tab a').bind('click', function (){
        \$('#domain-action').val(\$(this).attr('rel'));
    });

    if(\$(\".addons\").length) {
        \$('.order-button').one('click', function(){
            \$(this).hide();
            \$('.addons').slideDown('fast');
            return false;
        });
    }

    \$('.addon-period-selector').change(function(){
        var r = \$(this).attr('rel');
        \$('#' + r + ' span').hide();
        \$('#' + r + ' span.' + \$(this).val()).fadeIn();
    }).trigger('change');

    \$('#transfer-check').bind('click',function(event){
        var sld = \$('input[name=\"transfer_sld\"]').val();
        var tld = \$('select[name=\"transfer_tld\"]').val();
        var domain = sld + tld;
        bb.post(
            'guest/servicedomain/can_be_transferred',
            { sld: sld, tld: tld },
            function(result) {
                setTransferPricing(tld);
                \$('#domain-name').text(domain);
                \$('#domain-transfer-config').fadeIn('fast');
                \$('.onAfterDomainCheck').fadeIn('fast');
                \$('#transfer-check').hide();
                \$('#transfer .order-button').show();
            }
        );
        return false;
    });

    \$('#domain-check').bind('click',function(event){
        var sld = \$('input[name=\"register_sld\"]').val();
        var tld = \$('select[name=\"register_tld\"]').val();
        var domain = sld + tld;
        bb.post(
            'guest/servicedomain/check',
            { sld: sld, tld: tld },
            function(result) {
                setPricing(tld);
                \$('#domain-name').text(domain);
                \$('.onAfterDomainCheck').fadeIn('fast');
                \$('#domain-check').hide();
                \$('#register .order-button').show();
            }
        );
        return false;
    });

    function setPricing(tld)
    {
        bb.post(
            'guest/servicedomain/pricing',
            { tld: tld },
            function(result) {
                var s = \$(\"#registration-years\");
                s.find('option').remove();
                for (i=1;i<6;i++) {
                    var price = bb.currency(result.price_registration, ";
        // line 161
        if (isset($context["currency"])) { $_currency_ = $context["currency"]; } else { $_currency_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_currency_, "conversion_rate"), "html", null, true);
        echo ", \"";
        if (isset($context["currency"])) { $_currency_ = $context["currency"]; } else { $_currency_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_currency_, "code"), "html", null, true);
        echo "\", i);
                    s.append(new Option(i + \"";
        // line 162
        echo gettext(" Year/s @ ");
        echo "\" + price, i));
                }
            }
        );
    }

    function setTransferPricing(tld)
    {
        bb.post(
            'guest/servicedomain/pricing',
            { tld: tld },
            function(result) {
                var price = bb.currency(result.price_transfer, ";
        // line 174
        if (isset($context["currency"])) { $_currency_ = $context["currency"]; } else { $_currency_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_currency_, "conversion_rate"), "html", null, true);
        echo ", \"";
        if (isset($context["currency"])) { $_currency_ = $context["currency"]; } else { $_currency_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_currency_, "code"), "html", null, true);
        echo "\");
                \$('#transfer-price').text(price);
            }
        );
    }
});
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_servicedomain_order_form.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 174,  307 => 162,  299 => 161,  230 => 94,  227 => 93,  220 => 90,  213 => 85,  199 => 77,  195 => 76,  186 => 70,  183 => 69,  167 => 67,  162 => 66,  154 => 64,  149 => 62,  143 => 58,  140 => 57,  128 => 48,  122 => 45,  116 => 42,  110 => 39,  104 => 36,  92 => 27,  89 => 26,  73 => 24,  68 => 23,  65 => 22,  62 => 21,  55 => 20,  50 => 18,  42 => 12,  38 => 10,  35 => 9,  28 => 4,  25 => 3,  22 => 2,  19 => 1,);
    }
}
