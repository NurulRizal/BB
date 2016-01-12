<?php

/* mod_orderbutton_index.phtml */
class __TwigTemplate_872653a80881aa70b8c99a67f7f59178859d3036817d55211141a2365a886534 extends Twig_Template
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
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        if ($this->getAttribute($_request_, "theme_color")) {
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            $context["theme_color"] = (("css/huraga-" . $this->getAttribute($_request_, "theme_color")) . ".css");
        } else {
            $context["theme_color"] = "css/huraga-green.css";
        }
        // line 2
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        $context["loader_nr"] = (($this->getAttribute($_request_, "loader", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_request_, "loader"), "8")) : ("8"));
        // line 3
        if (isset($context["loader_nr"])) { $_loader_nr_ = $context["loader_nr"]; } else { $_loader_nr_ = null; }
        $context["loader_url"] = (("img/assets/loaders/loader" . $_loader_nr_) . ".gif");
        // line 4
        echo "<!DOCTYPE html>
<html>
<head>
    <meta property=\"bb:url\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_constant("BB_URL"), "html", null, true);
        echo "\"/>
    <meta property=\"bb:client_area\" content=\"";
        // line 8
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/");
        echo "\"/>

    <meta charset=\"utf-8\">
    <title>Order</title>
    ";
        // line 12
        echo twig_stylesheet_tag(twig_mod_asset_url("css/bootstrap.css", "orderbutton"));
        echo "
    ";
        // line 13
        if (isset($context["theme_color"])) { $_theme_color_ = $context["theme_color"]; } else { $_theme_color_ = null; }
        echo twig_stylesheet_tag(twig_mod_asset_url($_theme_color_, "orderbutton"));
        echo "
    ";
        // line 14
        echo twig_stylesheet_tag(twig_mod_asset_url("css/plugins/jquery.jgrowl.css", "orderbutton"));
        echo "
    <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_mod_asset_url("js/libs/jquery.js", "orderbutton"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_mod_asset_url("js/bb-jquery.js", "orderbutton"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_mod_asset_url("js/bootstrap/bootstrap.min.js", "orderbutton"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_mod_asset_url("js/bootstrap/plugins/bootstrap-collapse.js", "orderbutton"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_mod_asset_url("js/bootstrap/plugins/bootstrap-tab.js", "orderbutton"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_mod_asset_url("js/jGrowl/jquery.jgrowl.js", "orderbutton"), "html", null, true);
        echo "\"></script>
    <style type=\"text/css\">
        body{
            background:none transparent;
            background-color:transparent;
            padding-left: 0px;
            padding-right: 0px;
            height: auto;
        }
        .accordion-body form {
            border: 0px;
            margin-bottom: 0;
            border-radius: 0;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
        }
    </style>

</head>

<body>
<article class=\"data-block decent\" id=\"orderbutton\" style=\"margin-bottom: 0\">
    <div class=\"data-container\">
        ";
        // line 49
        echo "        <section>
            <div id=\"accordion1\" class=\"accordion\">

                ";
        // line 52
        $this->env->loadTemplate("mod_orderbutton_choose_product.phtml")->display($context);
        // line 53
        echo "
                ";
        // line 54
        $this->env->loadTemplate("mod_orderbutton_product_configuration.phtml")->display($context);
        // line 55
        echo "
                ";
        // line 56
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        if ((!$_client_)) {
            // line 57
            echo "                    ";
            $this->env->loadTemplate("mod_orderbutton_client.phtml")->display($context);
            // line 58
            echo "                ";
        }
        // line 59
        echo "
                ";
        // line 60
        $this->env->loadTemplate("mod_orderbutton_checkout.phtml")->display($context);
        // line 61
        echo "

                <div class=\"accordion-group\" id=\"payment-html-outer\">
                    <div class=\"accordion-heading\">
                        <a class=\"accordion-toggle\" href=\"#payment-html\" data-parent=\"#accordion1\"><span class=\"awe-list\"></span> ";
        // line 65
        echo gettext("Payment");
        echo "</a>
                    </div>
                    <div id=\"payment-html\" class=\"accordion-body collapse\" >
                        <div class=\"accordion-inner\" id=\"payment-html-inner\"></div>
                    </div>
                </div>

            </div>
        </section>
        ";
        // line 74
        $this->env->loadTemplate("mod_orderbutton_currency.phtml")->display($context);
        // line 75
        echo "        ";
        if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
        if ($this->getAttribute($_guest_, "extension_is_on", array(0 => array("mod" => "branding")), "method")) {
            // line 76
            echo "        <div style=\"text-align: center\">
            <a href=\"http://www.boxbilling.com\" title=\"Billing Software\" target=\"_blank\">";
            // line 77
            echo gettext("Powered by BoxBilling");
            echo "</a>
        </div>
        ";
        }
        // line 80
        echo "
    </div>
</article>
<div class=\"loading\" style=\"display: none; background: rgba(0,0,0,.5) no-repeat; width:100%; height:100%; position:fixed; top:0; left:0; z-index:999;\">
    <img src=\"";
        // line 84
        if (isset($context["loader_url"])) { $_loader_url_ = $context["loader_url"]; } else { $_loader_url_ = null; }
        echo twig_escape_filter($this->env, twig_mod_asset_url($_loader_url_, "orderbutton"), "html", null, true);
        echo "\" style=\"display: block; margin-left: auto; margin-right: auto;position: relative; top : 50%\">
</div>
<script type=\"text/javascript\">
    \$(function(){
        \$('.accordion-body').on('shown', function(){
            \$('#popup-iframe').height(\$('body').height());
        });

        \$('#client-login').bind('submit',function(event){
            bb.post(
                'guest/client/login',
                \$(this).serialize(),
                function(result) {
                    bb.msg(\"";
        // line 97
        echo gettext("You logged in successfully");
        echo "\");
                    \$('#register-or-login').hide(1000, function(){
                        \$('#register-or-login').remove();
                        bb.reload();
                    });

                }
            );
            return false;
        });
        \$('#create-profile').bind('submit',function(event){
            bb.post(
                'guest/client/create',
                \$(this).serialize(),
                function(result) {
                    //login after registration
                    var login_details = {
                        email: \$('#reg-email').val(),
                        password: \$('#reg-password').val()
                    };
                    bb.post(
                        'guest/client/login',
                        login_details,
                        function(result) {
                            bb.msg(\"";
        // line 121
        echo gettext("You logged in successfully");
        echo "\");
                            \$('#register-or-login').hide(1000, function(){
                                \$('#register-or-login').remove();
                                bb.reload();
                            });
                        }
                    );
                }
            );
            return false;
        });
        \$('#add-to-cart').bind('submit',function(event){
            bb.post(
                'guest/cart/add_item',
                \$(this).serialize(),
                function(result) {
                    bb.msg(\"";
        // line 137
        echo gettext("Product was added to shopping cart");
        echo "\");
                    bb.redirect(\"";
        // line 138
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("orderbutton", array("checkout" => 1));
        echo "\"+\"";
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        if ($this->getAttribute($_request_, "show_custom_form_values")) {
            echo "&show_custom_form_values=1";
        }
        echo "\");
                }
            );
            return false;
        });
        \$('#apply-promo').bind('submit',function(event){
            bb.post(
                'guest/cart/apply_promo',
                \$(this).serialize(),
                function(result) {
                    bb.msg(\"";
        // line 148
        echo gettext("Promo code was applied for your order");
        echo "\");
                    location.reload(false);
                }
            );
            return false;
        });

        \$('#checkout-form').bind('submit',function(event){
            bb.post(
                'client/cart/checkout',
                \$(this).serialize(),
                function(result) {
                    if(result.invoice_hash) {
                        bb.post('guest/invoice/payment', {hash:result.invoice_hash, gateway_id:result.gateway_id,auto_redirect:true }, function(r){
                            if(r.iframe) {
                            \$('#payment-html-inner').html(r.result);
                                \$('#checkout').collapse('hide');
                                \$('#checkout').on('hidden', function(){
                                    \$('#checkout').remove();
                                    \$('#payment-html').collapse('show');
                                });
                            } else {
                                var link = '";
        // line 170
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("invoice/banklink");
        echo "' + '/' + result.invoice_hash + '/' + result.gateway_id;
                                \$('#payment-html-inner').html('<a href=\"'+link+'\" target=\"_parent\" id=\"redirect-to-gateway\">Redirect to payment gateway</a>');
                                \$('#checkout').collapse('hide');
                                \$('#checkout-inner').remove();
                                \$('#payment-html').collapse('show');
                                \$('#redirect-to-gateway')[0].click();
                            }
                        });
                    } else {
                        window.top.location.href = ('";
        // line 179
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("order/service/manage");
        echo "' + '/' + result.order_id );
                    }
                }
            );
            return false;
        });

        \$('#show-promo-field').bind('click', function(event){
            \$('#apply-promo').show();
            \$(this).hide();
            \$('#promocode').focus();
        });

        \$('.register-login a').click(function (e) {
            e.preventDefault();
            \$(this).tab('show');
        });

    });
</script>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "mod_orderbutton_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 179,  287 => 170,  262 => 148,  244 => 138,  240 => 137,  221 => 121,  194 => 97,  177 => 84,  171 => 80,  165 => 77,  162 => 76,  158 => 75,  156 => 74,  144 => 65,  138 => 61,  136 => 60,  133 => 59,  130 => 58,  127 => 57,  124 => 56,  121 => 55,  119 => 54,  116 => 53,  114 => 52,  109 => 49,  82 => 20,  78 => 19,  74 => 18,  70 => 17,  66 => 16,  62 => 15,  58 => 14,  53 => 13,  49 => 12,  42 => 8,  38 => 7,  33 => 4,  30 => 3,  27 => 2,  19 => 1,);
    }
}
