<?php

/* layout_default.phtml */
class __TwigTemplate_7818b3fba791faa63142bd9092ae710318be159c10c33f0f04e4bebff65bacca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'head' => array($this, 'block_head'),
            'content_wide' => array($this, 'block_content_wide'),
            'left_top' => array($this, 'block_left_top'),
            'nav' => array($this, 'block_nav'),
            'left_bottom' => array($this, 'block_left_bottom'),
            'before_content' => array($this, 'block_before_content'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'top_content' => array($this, 'block_top_content'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["mf"] = $this->env->loadTemplate("macro_functions.phtml");
        // line 2
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        $context["profile"] = $this->getAttribute($_admin_, "profile_get");
        // line 3
        if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
        $context["company"] = $this->getAttribute($_guest_, "system_company");
        // line 4
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <title>";
        // line 7
        $this->displayBlock('meta_title', $context, $blocks);
        echo " - ";
        if (isset($context["company"])) { $_company_ = $context["company"]; } else { $_company_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_company_, "name"), "html", null, true);
        echo "</title>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\" />

    <link rel=\"shortcut icon\" href=\"favicon.ico\" />

    ";
        // line 13
        $this->env->loadTemplate("partial_bb_meta.phtml")->display($context);
        // line 14
        echo "    
    ";
        // line 15
        $this->env->loadTemplate("partial_styles.phtml")->display($context);
        // line 16
        echo "
    <script type=\"text/javascript\" src=\"js/boxbilling.min.js?v=";
        // line 17
        if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_guest_, "system_version"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"js/bb-admin.js?v=";
        // line 18
        if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_guest_, "system_version"), "html", null, true);
        echo "\"></script>

    ";
        // line 20
        $this->displayBlock('head', $context, $blocks);
        // line 21
        echo "</head>

<body>
";
        // line 24
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if ((!$_admin_)) {
            // line 25
            echo "<script type=\"text/javascript\">\$(function(){bb.redirect(\"";
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("staff/login");
            echo "\");});</script>
";
        } else {
            // line 27
            echo "<div id=\"topNav\">
    <div class=\"fixed\">
        <div class=\"wrapper\">
            <div class=\"welcome\">
                <a href=\"";
            // line 31
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("staff/profile");
            echo "\" title=\"\"><img src=\"";
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            echo twig_escape_filter($this->env, twig_gravatar_filter($this->getAttribute($_profile_, "email")), "html", null, true);
            echo "?size=20\" alt=\"";
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "name"), "html", null, true);
            echo "\" /></a><span>";
            echo gettext("Hi,");
            echo " ";
            if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "name"), "html", null, true);
            echo "!</span>
                ";
            // line 32
            if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
            $context["languages"] = $this->getAttribute($_guest_, "extension_languages");
            // line 33
            echo "                ";
            if (isset($context["languages"])) { $_languages_ = $context["languages"]; } else { $_languages_ = null; }
            if ((twig_length_filter($this->env, $_languages_) > 1)) {
                // line 34
                echo "                <span>
                    <select name=\"lang\" class=\"language_selector\" style=\"background-color: #262b2f; color:white;\">
                        ";
                // line 36
                if (isset($context["languages"])) { $_languages_ = $context["languages"]; } else { $_languages_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($_languages_);
                foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                    // line 37
                    echo "                        <option value=\"";
                    if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                    echo twig_escape_filter($this->env, $_lang_, "html", null, true);
                    echo "\" class=\"lang_";
                    if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                    echo twig_escape_filter($this->env, $_lang_, "html", null, true);
                    echo "\">";
                    if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                    echo twig_escape_filter($this->env, gettext($_lang_), "html", null, true);
                    echo "</option>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "                    </select>
                </span>
                ";
            }
            // line 42
            echo "            </div>
            <div class=\"userNav\">
                <ul>
                    <li class=\"loading\" style=\"display:none;\"><img src=\"images/loader.gif\" alt=\"\" /><span>";
            // line 45
            echo gettext("Loading ...");
            echo "</span></li>
                    <li class=\"dd\"><span><i class=\"sprite-topnav sprite-topnav-register\" style=\"margin-right: 5px;\"></i>";
            // line 46
            echo gettext("New");
            echo "</span>
                        ";
            // line 47
            $this->env->loadTemplate("partial_menu_top.phtml")->display($context);
            // line 48
            echo "                    </li>
                    ";
            // line 49
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            if ($this->getAttribute($_admin_, "system_is_allowed", array(0 => array("mod" => "system")), "method")) {
                // line 50
                echo "                    <li class=\"dd\"><span><i class=\"sprite-topnav sprite-topnav-settings\" style=\"margin-right: 5px;\"></i>";
                echo gettext("Settings");
                echo "</span>
                        <ul class=\"menu_body\">
                            <li><a href=\"";
                // line 52
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("system");
                echo "\" title=\"\">";
                echo gettext("All settings");
                echo "</a></li>
                            <li><a href=\"";
                // line 53
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("theme");
                echo "/";
                if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_guest_, "extension_theme"), "code"), "html", null, true);
                echo "\" title=\"\">";
                echo gettext("Theme settings");
                echo "</a></li>
                        </ul>
                    </li>
                    ";
            }
            // line 57
            echo "                    <li><a href=\"";
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/");
            echo "\" title=\"\" target=\"_blank\"><span><i class=\"sprite-topnav sprite-topnav-mainWebsite\" style=\"margin-right: 5px;\"></i>";
            echo gettext("Visit site");
            echo "</span></a></li>
                    <li><a href=\"";
            // line 58
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/profile/logout");
            echo "\" title=\"\" class=\"api-link\" data-api-redirect=\"";
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("staff/login");
            echo "\"><span><i class=\"sprite-topnav sprite-topnav-logout\" style=\"margin-right: 5px;\"></i>";
            echo gettext("Logout");
            echo "</span></a></li>
                </ul>
            </div>
            <div class=\"fix\"></div>
        </div>
    </div>
</div>

<div id=\"header\" class=\"wrapper\">
    <div class=\"logo\"><a href=\"";
            // line 67
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("system");
            echo "\" title=\"\"><img src=\"";
            if (isset($context["company"])) { $_company_ = $context["company"]; } else { $_company_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_company_, "logo_url"), "html", null, true);
            echo "\" alt=\"";
            if (isset($context["company"])) { $_company_ = $context["company"]; } else { $_company_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_company_, "name"), "html", null, true);
            echo "\" style=\"max-height: 50px;\"/></a></div>
    <div class=\"middleNav\">
        
    \t<ul>
            ";
            // line 71
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
            if (($this->getAttribute($_admin_, "system_is_allowed", array(0 => array("mod" => "notification")), "method") && $this->getAttribute($_guest_, "extension_is_on", array(0 => array("mod" => "notification")), "method"))) {
                // line 72
                echo "            ";
                if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                $context["count_notifications"] = $this->getAttribute($this->getAttribute($_admin_, "notification_get_list", array(0 => array("per_page" => 1)), "method"), "total");
                // line 73
                echo "        \t<li class=\"iMegaphone\"><a href=\"";
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("notification");
                echo "\" title=\"\"><span>";
                echo gettext("Notifications");
                echo "</span></a>";
                if (isset($context["count_notifications"])) { $_count_notifications_ = $context["count_notifications"]; } else { $_count_notifications_ = null; }
                if ($_count_notifications_) {
                    echo "<span class=\"numberMiddle\">";
                    if (isset($context["count_notifications"])) { $_count_notifications_ = $context["count_notifications"]; } else { $_count_notifications_ = null; }
                    echo twig_escape_filter($this->env, $_count_notifications_, "html", null, true);
                    echo "</span>";
                }
                echo "</li>
            ";
            }
            // line 75
            echo "            
            ";
            // line 76
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            if ($this->getAttribute($_admin_, "system_is_allowed", array(0 => array("mod" => "order")), "method")) {
                // line 77
                echo "            ";
                if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                $context["count_orders"] = $this->getAttribute($this->getAttribute($_admin_, "order_get_statuses"), "failed_setup");
                // line 78
                echo "        \t<li class=\"iOrders\"><a href=\"";
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("order", array("status" => "failed_setup"));
                echo "\" title=\"\"><span><i class=\"sprite-23 sprite-23-basket2\"></i>";
                echo gettext("Orders");
                echo "</span></a>";
                if (isset($context["count_orders"])) { $_count_orders_ = $context["count_orders"]; } else { $_count_orders_ = null; }
                if ($_count_orders_) {
                    echo "<span class=\"numberMiddle\">";
                    if (isset($context["count_orders"])) { $_count_orders_ = $context["count_orders"]; } else { $_count_orders_ = null; }
                    echo twig_escape_filter($this->env, $_count_orders_, "html", null, true);
                    echo "</span>";
                }
                echo "</li>
            ";
            }
            // line 80
            echo "            
            ";
            // line 81
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            if ($this->getAttribute($_admin_, "system_is_allowed", array(0 => array("mod" => "invoice")), "method")) {
                // line 82
                echo "            ";
                if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                $context["count_invoices"] = $this->getAttribute($this->getAttribute($_admin_, "invoice_get_statuses"), "unpaid");
                // line 83
                echo "        \t<li class=\"iInvoices\"><a href=\"";
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoice", array("status" => "unpaid"));
                echo "\" title=\"\"><span><i class=\"sprite-23 sprite-23-money\"></i>";
                echo gettext("Invoices");
                echo "</span></a>";
                if (isset($context["count_invoices"])) { $_count_invoices_ = $context["count_invoices"]; } else { $_count_invoices_ = null; }
                if ($_count_invoices_) {
                    echo "<span class=\"numberMiddle\">";
                    if (isset($context["count_invoices"])) { $_count_invoices_ = $context["count_invoices"]; } else { $_count_invoices_ = null; }
                    echo twig_escape_filter($this->env, $_count_invoices_, "html", null, true);
                    echo "</span>";
                }
                echo "</li>
            ";
            }
            // line 85
            echo "            
            ";
            // line 86
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            if ($this->getAttribute($_admin_, "system_is_allowed", array(0 => array("mod" => "support")), "method")) {
                // line 87
                echo "            ";
                if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                $context["count_tickets"] = $this->getAttribute($this->getAttribute($_admin_, "support_ticket_get_statuses"), "open");
                // line 88
                echo "            ";
                if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
                $context["count_ptickets"] = $this->getAttribute($this->getAttribute($_admin_, "support_public_ticket_get_statuses"), "open");
                // line 89
                echo "        \t<li class=\"iSpeech\"><a href=\"";
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("support/public-tickets", array("status" => "open"));
                echo "\" title=\"\"><span><i class=\"sprite-23 sprite-23-speech\"></i>";
                echo gettext("Inquiries");
                echo "</span></a>";
                if (isset($context["count_ptickets"])) { $_count_ptickets_ = $context["count_ptickets"]; } else { $_count_ptickets_ = null; }
                if ($_count_ptickets_) {
                    echo "<span class=\"numberMiddle\">";
                    if (isset($context["count_ptickets"])) { $_count_ptickets_ = $context["count_ptickets"]; } else { $_count_ptickets_ = null; }
                    echo twig_escape_filter($this->env, $_count_ptickets_, "html", null, true);
                    echo "</span>";
                }
                echo "</li>
        \t<li class=\"iMes\"><a href=\"";
                // line 90
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("support", array("status" => "open"));
                echo "\" title=\"\"><span><i class=\"sprite-23 sprite-23-dialog\"></i>";
                echo gettext("Tickets");
                echo "</span></a>";
                if (isset($context["count_tickets"])) { $_count_tickets_ = $context["count_tickets"]; } else { $_count_tickets_ = null; }
                if ($_count_tickets_) {
                    echo "<span class=\"numberMiddle\">";
                    if (isset($context["count_tickets"])) { $_count_tickets_ = $context["count_tickets"]; } else { $_count_tickets_ = null; }
                    echo twig_escape_filter($this->env, $_count_tickets_, "html", null, true);
                    echo "</span>";
                }
                echo "</li>
            ";
            }
            // line 92
            echo "            
            ";
            // line 93
            if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
            if ($this->getAttribute($_admin_, "system_is_allowed", array(0 => array("mod" => "client")), "method")) {
                // line 94
                echo "            <li><a href=\"";
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client");
                echo "\" title=\"\"><span><i class=\"sprite-23 sprite-23-user\"></i>";
                echo gettext("Clients");
                echo "</span></a></li>
            ";
            }
            // line 96
            echo "            
        \t<li><a href=\"";
            // line 97
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("index");
            echo "\" title=\"\"><span><i class=\"sprite-23 sprite-23-home\"></i>";
            echo gettext("Dashboard");
            echo "</span></a></li>
        </ul>
    </div>
    <div class=\"fix\"></div>
</div>


<div class=\"wrapper\">
    
    ";
            // line 106
            if (isset($context["hide_menu"])) { $_hide_menu_ = $context["hide_menu"]; } else { $_hide_menu_ = null; }
            if ($_hide_menu_) {
                // line 107
                echo "    
    ";
                // line 108
                $this->displayBlock('content_wide', $context, $blocks);
                // line 109
                echo "    
    ";
            } else {
                // line 111
                echo "    <div class=\"leftNav\">
    ";
                // line 112
                $this->displayBlock('left_top', $context, $blocks);
                echo "    
    ";
                // line 113
                $this->displayBlock('nav', $context, $blocks);
                // line 114
                echo "    ";
                $this->displayBlock('left_bottom', $context, $blocks);
                // line 115
                echo "    </div>
    
    ";
                // line 117
                $this->displayBlock('before_content', $context, $blocks);
                // line 118
                echo "    <div class=\"content\">

        <div class=\"breadCrumbHolder module\">
            <div class=\"breadCrumb module\">
                ";
                // line 122
                $this->displayBlock('breadcrumbs', $context, $blocks);
                // line 128
                echo "            </div>
        </div>

        ";
                // line 131
                $this->displayBlock('top_content', $context, $blocks);
                // line 132
                echo "        ";
                $this->displayBlock('content', $context, $blocks);
                // line 133
                echo "    </div>
    ";
            }
            // line 135
            echo "    <div class=\"fix\"></div>
</div>

<div id=\"footer\">
\t<div class=\"wrapper\">
        ";
            // line 140
            if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
            $this->env->loadTemplate("partial_footer.phtml")->display(array_merge($context, array("product" => $_product_)));
            // line 141
            echo "    </div>
</div>
<div class=\"loading dim\"></div>    
    ";
            // line 144
            $this->displayBlock('js', $context, $blocks);
            // line 145
            echo "    <noscript id=\"noscript\">
        <div class=\"msg error\">
        NOTE: Many features on BoxBilling require Javascript and cookies. You can enable both via your browser's preference settings.
        </div>
    </noscript>
";
        }
        // line 151
        echo "</body>
</html>";
    }

    // line 7
    public function block_meta_title($context, array $blocks = array())
    {
    }

    // line 20
    public function block_head($context, array $blocks = array())
    {
    }

    // line 108
    public function block_content_wide($context, array $blocks = array())
    {
    }

    // line 112
    public function block_left_top($context, array $blocks = array())
    {
    }

    // line 113
    public function block_nav($context, array $blocks = array())
    {
        $this->env->loadTemplate("partial_menu.phtml")->display($context);
    }

    // line 114
    public function block_left_bottom($context, array $blocks = array())
    {
    }

    // line 117
    public function block_before_content($context, array $blocks = array())
    {
    }

    // line 122
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 123
        echo "                <ul>
                    <li class=\"firstB\"><a href=\"";
        // line 124
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("/");
        echo "\">";
        echo gettext("Home");
        echo "</a></li>
                    <li class=\"lastB\">";
        // line 125
        $this->displayBlock("meta_title", $context, $blocks);
        echo "</li>
                </ul>
                ";
    }

    // line 131
    public function block_top_content($context, array $blocks = array())
    {
    }

    // line 132
    public function block_content($context, array $blocks = array())
    {
    }

    // line 144
    public function block_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout_default.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  529 => 144,  524 => 132,  512 => 125,  506 => 124,  503 => 123,  500 => 122,  495 => 117,  490 => 114,  484 => 113,  479 => 112,  474 => 108,  469 => 20,  464 => 7,  459 => 151,  449 => 144,  444 => 141,  441 => 140,  434 => 135,  430 => 133,  427 => 132,  425 => 131,  420 => 128,  418 => 122,  410 => 117,  403 => 114,  401 => 113,  397 => 112,  394 => 111,  390 => 109,  388 => 108,  385 => 107,  382 => 106,  368 => 97,  365 => 96,  357 => 94,  354 => 93,  351 => 92,  336 => 90,  321 => 89,  317 => 88,  313 => 87,  310 => 86,  307 => 85,  287 => 82,  281 => 80,  265 => 78,  261 => 77,  258 => 76,  255 => 75,  239 => 73,  235 => 72,  231 => 71,  218 => 67,  183 => 53,  177 => 52,  171 => 50,  168 => 49,  163 => 47,  159 => 46,  155 => 45,  150 => 42,  129 => 37,  113 => 32,  98 => 31,  92 => 27,  86 => 25,  83 => 24,  78 => 21,  76 => 20,  70 => 18,  65 => 17,  62 => 16,  57 => 14,  55 => 13,  43 => 7,  38 => 4,  35 => 3,  32 => 2,  941 => 292,  935 => 291,  929 => 290,  923 => 289,  917 => 288,  910 => 283,  907 => 282,  904 => 281,  901 => 280,  896 => 277,  886 => 269,  877 => 265,  875 => 264,  870 => 261,  851 => 256,  841 => 255,  836 => 254,  820 => 253,  812 => 252,  792 => 251,  789 => 250,  781 => 244,  772 => 240,  770 => 239,  765 => 236,  746 => 231,  736 => 230,  731 => 229,  715 => 228,  707 => 227,  687 => 226,  684 => 225,  672 => 216,  668 => 215,  664 => 213,  661 => 212,  658 => 211,  648 => 204,  636 => 195,  624 => 186,  612 => 177,  600 => 168,  586 => 157,  575 => 156,  563 => 154,  554 => 149,  548 => 146,  544 => 144,  541 => 143,  538 => 142,  528 => 134,  519 => 131,  516 => 130,  504 => 127,  491 => 126,  488 => 125,  482 => 124,  475 => 120,  471 => 119,  462 => 113,  451 => 145,  442 => 101,  439 => 100,  422 => 97,  412 => 118,  406 => 115,  400 => 94,  393 => 90,  389 => 89,  377 => 83,  373 => 82,  367 => 78,  364 => 77,  361 => 76,  358 => 75,  346 => 69,  339 => 68,  332 => 67,  325 => 66,  318 => 65,  314 => 64,  305 => 61,  298 => 60,  291 => 83,  284 => 81,  277 => 57,  273 => 56,  264 => 53,  257 => 52,  250 => 51,  243 => 50,  236 => 49,  232 => 48,  223 => 45,  216 => 44,  209 => 43,  202 => 58,  195 => 57,  191 => 40,  181 => 37,  173 => 36,  165 => 48,  157 => 34,  149 => 33,  145 => 39,  136 => 26,  132 => 25,  128 => 24,  124 => 36,  120 => 34,  116 => 33,  111 => 18,  107 => 17,  104 => 16,  97 => 15,  94 => 14,  91 => 13,  88 => 12,  68 => 9,  60 => 15,  42 => 7,  39 => 6,  36 => 5,  30 => 1,);
    }
}
