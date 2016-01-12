<?php

/* layout_default.phtml */
class __TwigTemplate_e56ed8dd210ea3f97525b5a439055d9adda58828ec666888e4d5f541423f142e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'meta_description' => array($this, 'block_meta_description'),
            'opengraph' => array($this, 'block_opengraph'),
            'head' => array($this, 'block_head'),
            'js' => array($this, 'block_js'),
            'body_class' => array($this, 'block_body_class'),
            'body' => array($this, 'block_body'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content_before' => array($this, 'block_content_before'),
            'content' => array($this, 'block_content'),
            'content_after' => array($this, 'block_content_after'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if IE 8]>    <html class=\"no-js ie8 ie\" lang=\"en\"> <![endif]-->
<!--[if IE 9]>    <html class=\"no-js ie9 ie\" lang=\"en\"> <![endif]-->
<!--[if gt IE 9]><!--> <html class=\"no-js\" lang=\"en\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 7
        $this->displayBlock('meta_title', $context, $blocks);
        echo "</title>

    <meta property=\"bb:url\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_constant("BB_URL"), "html", null, true);
        echo "\">
    <meta property=\"bb:client_area\" content=\"";
        // line 10
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/");
        echo "\">

    <meta name=\"description\" content=\"";
        // line 12
        $this->displayBlock('meta_description', $context, $blocks);
        echo "\">
    <meta name=\"robots\" content=\"";
        // line 13
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_settings_, "meta_robots"), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"";
        // line 14
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_settings_, "meta_author"), "html", null, true);
        echo "\">
    <meta name=\"generator\" content=\"BoxBilling ";
        // line 15
        if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_guest_, "system_version"), "html", null, true);
        echo "\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    ";
        // line 18
        $this->displayBlock('opengraph', $context, $blocks);
        // line 19
        echo "
    <link rel='stylesheet' type='text/css' href=\"";
        // line 20
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_asset_url($this->env, (("css/huraga-" . $this->getAttribute($_settings_, "color_scheme")) . ".css"));
        echo "\">
    <link rel='stylesheet' type='text/css' href=\"";
        // line 21
        echo twig_asset_url($this->env, "css/plugins/jquery.jgrowl.css");
        echo "\">
    <link rel='stylesheet' type='text/css' href=\"";
        // line 22
        echo twig_asset_url($this->env, "css/logos.css");
        echo "\">
    <link rel='stylesheet' type='text/css' href=\"";
        // line 23
        echo twig_asset_url($this->env, "css/flags16.css");
        echo "\">

    <link rel=\"shortcut icon\" href=\"";
        // line 25
        echo twig_asset_url($this->env, "favicon.ico");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 26
        echo twig_asset_url($this->env, "img/icons/apple-touch-icon-114-precomposed.png");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 27
        echo twig_asset_url($this->env, "img/icons/apple-touch-icon-72-precomposed.png");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 28
        echo twig_asset_url($this->env, "img/icons/apple-touch-icon-57-precomposed.png");
        echo "\">

    <script src=\"";
        // line 30
        echo twig_asset_url($this->env, "js/libs/jquery.js");
        echo "\"></script>
    <script src=\"";
        // line 31
        echo twig_asset_url($this->env, "js/bb-jquery.js");
        echo "\" defer=\"defer\"></script>
    <script src=\"";
        // line 32
        echo twig_asset_url($this->env, "js/libs/modernizr.js");
        echo "\" defer=\"defer\"></script>
    <script src=\"";
        // line 33
        echo twig_asset_url($this->env, "js/bootstrap/bootstrap.min.js");
        echo "\" defer=\"defer\"></script>
    <script src=\"";
        // line 34
        echo twig_asset_url($this->env, "js/libs/selectivizr.js");
        echo "\" defer=\"defer\"></script>
    <script src=\"";
        // line 35
        echo twig_asset_url($this->env, "js/plugins/jGrowl/jquery.jgrowl.js");
        echo "\" defer=\"defer\"></script>

    ";
        // line 37
        $this->displayBlock('head', $context, $blocks);
        // line 38
        echo "    ";
        $this->displayBlock('js', $context, $blocks);
        // line 39
        echo "</head>

<body class=\"";
        // line 41
        $this->displayBlock('body_class', $context, $blocks);
        echo "\">
";
        // line 42
        if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
        if ($this->getAttribute($_guest_, "extension_is_on", array(0 => array("mod" => "cookieconsent")), "method")) {
            // line 43
            echo "    ";
            try {
                $this->env->loadTemplate("mod_cookieconsent_index.phtml")->display($context);
            } catch (Twig_Error_Loader $e) {
                // ignore missing template
            }

        }
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 272
        echo "
";
        // line 273
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($_settings_, "top_menu_order") || $this->getAttribute($_settings_, "side_menu_order"))) {
            // line 274
            echo "<script src=\"";
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("orderbutton/js", array("options" => "1", "width" => 600, "theme_color" => "green", "background_color" => "black", "background_opacity" => 50, "background_close" => 1, "bind_selector" => ".order-button", "border_radius" => 0, "loader" => 8));
            echo "\" ></script>
";
        }
        // line 276
        echo "
";
        // line 277
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ($this->getAttribute($_settings_, "inject_javascript")) {
            // line 278
            echo "    ";
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            echo $this->getAttribute($_settings_, "inject_javascript");
            echo "
";
        }
        // line 280
        try {
            $this->env->loadTemplate("partial_pending_messages.phtml")->display($context);
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        // line 281
        echo "</body>
</html>";
    }

    // line 7
    public function block_meta_title($context, array $blocks = array())
    {
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_settings_, "meta_title"), "html", null, true);
    }

    // line 12
    public function block_meta_description($context, array $blocks = array())
    {
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_settings_, "meta_description"), "html", null, true);
    }

    // line 18
    public function block_opengraph($context, array $blocks = array())
    {
    }

    // line 37
    public function block_head($context, array $blocks = array())
    {
    }

    // line 38
    public function block_js($context, array $blocks = array())
    {
    }

    // line 41
    public function block_body_class($context, array $blocks = array())
    {
    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        // line 47
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        if ((!$_client_)) {
            // line 48
            echo "<script type=\"text/javascript\">\$(function(){bb.redirect('";
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("login");
            echo "');});</script>
";
        } else {
            // line 50
            if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
            $context["profile"] = $this->getAttribute($_client_, "client_get");
            // line 51
            if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
            $context["company"] = $this->getAttribute($_guest_, "system_company");
            // line 52
            echo "
<div id=\"wrapper\">
    <header class=\"container\" id=\"header\">
            ";
            // line 55
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if ($this->getAttribute($_settings_, "show_page_header")) {
                // line 56
                echo "                <nav>
                <ul class=\"f16\">
                    ";
                // line 58
                if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
                $context["languages"] = $this->getAttribute($_guest_, "extension_languages");
                // line 59
                echo "                    ";
                if (isset($context["languages"])) { $_languages_ = $context["languages"]; } else { $_languages_ = null; }
                if ((twig_length_filter($this->env, $_languages_) > 1)) {
                    // line 60
                    echo "                    ";
                    if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
                    $context["currentLang"] = $this->getAttribute($_guest_, "system_locale");
                    // line 61
                    echo "                    ";
                    if (isset($context["currentLang"])) { $_currentLang_ = $context["currentLang"]; } else { $_currentLang_ = null; }
                    $context["countryCode"] = twig_slice($this->env, $_currentLang_, 3, 2);
                    // line 62
                    echo "                        <li>
                            <div class=\"btn-group\">
                                <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                    <span class=\"flag  ";
                    // line 65
                    if (isset($context["countryCode"])) { $_countryCode_ = $context["countryCode"]; } else { $_countryCode_ = null; }
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $_countryCode_), "html", null, true);
                    echo "\"></span>
                                    ";
                    // line 66
                    if (isset($context["countryCode"])) { $_countryCode_ = $context["countryCode"]; } else { $_countryCode_ = null; }
                    echo twig_escape_filter($this->env, $_countryCode_, "html", null, true);
                    echo "
                                    <span class=\"caret\"></span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    ";
                    // line 70
                    if (isset($context["languages"])) { $_languages_ = $context["languages"]; } else { $_languages_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($_languages_);
                    foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                        // line 71
                        echo "                                    ";
                        if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                        $context["countryCode"] = twig_slice($this->env, $_lang_, 3, 2);
                        // line 72
                        echo "                                    ";
                        if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                        if (isset($context["currentLang"])) { $_currentLang_ = $context["currentLang"]; } else { $_currentLang_ = null; }
                        if (($_lang_ != $_currentLang_)) {
                            // line 73
                            echo "                                            <li class=\"language_selector\" data-language-code=\"";
                            if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                            echo twig_escape_filter($this->env, $_lang_, "html", null, true);
                            echo "\"><a href=\"javascript:;\"> <span class=\"flag ";
                            if (isset($context["countryCode"])) { $_countryCode_ = $context["countryCode"]; } else { $_countryCode_ = null; }
                            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $_countryCode_), "html", null, true);
                            echo "\"></span> ";
                            if (isset($context["lang"])) { $_lang_ = $context["lang"]; } else { $_lang_ = null; }
                            echo twig_escape_filter($this->env, gettext($_lang_), "html", null, true);
                            echo "</a></li>
                                        ";
                        }
                        // line 75
                        echo "                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 76
                    echo "                                </ul>
                            </div>
                        </li>

                    ";
                }
                // line 81
                echo "
                    ";
                // line 82
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                if ($this->getAttribute($_settings_, "top_menu_dashboard")) {
                    // line 83
                    echo "                    <li>
                        <a href=\"";
                    // line 84
                    echo $this->env->getExtension('bb')->twig_bb_client_link_filter("");
                    echo "\" class=\"show-tip\" title=\"";
                    echo gettext("Dashboard");
                    echo "\">";
                    echo gettext("Dashboard");
                    echo "</a>
                    </li>
                    ";
                }
                // line 87
                echo "                    ";
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                if ($this->getAttribute($_settings_, "top_menu_order")) {
                    // line 88
                    echo "                    <li class=\"order-button\">
                        <a href=\"#\" class=\"show-tip\" title=\"";
                    // line 89
                    echo gettext("Order");
                    echo "\">";
                    echo gettext("Order services");
                    echo "</a>
                    </li>
                    ";
                }
                // line 92
                echo "                    ";
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                if ($this->getAttribute($_settings_, "top_menu_profile")) {
                    // line 93
                    echo "                    <li>
                        <a href=\"";
                    // line 94
                    echo $this->env->getExtension('bb')->twig_bb_client_link_filter("client/me");
                    echo "\" class=\"show-tip\" title=\"";
                    echo gettext("Profile");
                    echo "\">";
                    echo gettext("Profile");
                    echo "</a>
                    </li>
                    ";
                }
                // line 97
                echo "
                    ";
                // line 98
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                if ($this->getAttribute($_settings_, "top_menu_signout")) {
                    // line 99
                    echo "                    <li>
                        <a href=\"";
                    // line 100
                    echo $this->env->getExtension('bb')->twig_bb_client_link_filter("client/logout");
                    echo "\" class=\"show-tip\" title=\"";
                    echo gettext("Sign out");
                    echo "\">";
                    echo gettext("Sign out");
                    echo "</a>
                    </li>
                    ";
                }
                // line 103
                echo "                </ul>
            </nav>

            ";
                // line 106
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                if ($this->getAttribute($_settings_, "show_company_logo")) {
                    // line 107
                    echo "                ";
                    if (isset($context["company"])) { $_company_ = $context["company"]; } else { $_company_ = null; }
                    if ($this->getAttribute($_company_, "logo_url")) {
                        // line 108
                        echo "                    <h1>
                        <a href=\"";
                        // line 109
                        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/");
                        echo "\">
                            <img src=\"";
                        // line 110
                        if (isset($context["company"])) { $_company_ = $context["company"]; } else { $_company_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_company_, "logo_url"), "html", null, true);
                        echo "\" alt=\"";
                        if (isset($context["company"])) { $_company_ = $context["company"]; } else { $_company_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_company_, "name"), "html", null, true);
                        echo "\" title=\"";
                        if (isset($context["company"])) { $_company_ = $context["company"]; } else { $_company_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_company_, "name"), "html", null, true);
                        echo "\" style=\"max-height: 75px\"/>
                        </a>
                        <p></p>
                    </h1>
                ";
                    }
                    // line 115
                    echo "            ";
                }
                // line 116
                echo "
            ";
                // line 117
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                if ($this->getAttribute($_settings_, "show_company_name")) {
                    // line 118
                    echo "            <p>";
                    if (isset($context["company"])) { $_company_ = $context["company"]; } else { $_company_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_company_, "name"), "html", null, true);
                    echo "</p>
            ";
                }
                // line 120
                echo "        ";
            }
            // line 121
            echo "    </header>
    <section class=\"container\" role=\"main\">
        <div class=\"navigation-block\">

            <div class=\"navbar\">
                <a class=\"btn btn-navbar btn-block btn-large\" data-toggle=\"collapse\" data-target=\".nav-collapse\"><span class=\"awe-user\"></span> ";
            // line 126
            echo gettext("User profile");
            echo "</a>
            </div>

            <nav class=\"main-navigation nav-collapse collapse\" role=\"navigation\">
                ";
            // line 130
            $this->env->loadTemplate("partial_menu.phtml")->display($context);
            // line 131
            echo "            </nav>

            ";
            // line 133
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if ($this->getAttribute($_settings_, "show_client_details")) {
                // line 134
                echo "            <section class=\"user-profile\">
                <figure>
                    <img alt=\"";
                // line 136
                if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "first_name"), "html", null, true);
                echo " ";
                if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "last_name"), "html", null, true);
                echo " gravatar\" src=\"";
                if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
                echo twig_escape_filter($this->env, twig_gravatar_filter($this->getAttribute($_profile_, "email"), 60), "html", null, true);
                echo "\">
                    <figcaption>
                        <strong><a href=\"";
                // line 138
                echo $this->env->getExtension('bb')->twig_bb_client_link_filter("client/profile");
                echo "\" class=\"\">";
                if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "first_name"), "html", null, true);
                echo " ";
                if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "last_name"), "html", null, true);
                echo "</a></strong>
                        <em>";
                // line 139
                if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_profile_, "company"), "html", null, true);
                echo "</em>
                        <ul>
                            <li><a class=\"btn btn-primary btn-flat\" href=\"";
                // line 141
                echo $this->env->getExtension('bb')->twig_bb_client_link_filter("client/profile");
                echo "\">";
                echo gettext("profile");
                echo "</a></li>
                            <li><a class=\"btn btn-primary btn-flat\" href=\"";
                // line 142
                echo $this->env->getExtension('bb')->twig_bb_client_link_filter("client/logout");
                echo "\">";
                echo gettext("sign out");
                echo "</a></li>
                        </ul>
                    </figcaption>
                </figure>
            </section>
            ";
            }
            // line 148
            echo "
            ";
            // line 149
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if ($this->getAttribute($_settings_, "sidebar_balance_enabled")) {
                // line 150
                echo "            <section class=\"balance\">
                <h2>";
                // line 151
                echo gettext("Account balance");
                echo "</h2>
                <strong>";
                // line 152
                if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
                echo twig_money($this->env, $this->getAttribute($_profile_, "balance"), $this->getAttribute($_profile_, "currency"));
                echo "</strong>
            </section>
            ";
            }
            // line 155
            echo "
            ";
            // line 156
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if ($this->getAttribute($_settings_, "sidebar_note_enabled")) {
                // line 157
                echo "            <section class=\"side-note\">
                <div class=\"side-note-container\">
                    <h2>";
                // line 159
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_settings_, "sidebar_note_title"), "html", null, true);
                echo "</h2>
                    <p>";
                // line 160
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_settings_, "sidebar_note_content"), "html", null, true);
                echo "</p>
                </div>
                <div class=\"side-note-bottom\"></div>
            </section>
            ";
            }
            // line 165
            echo "        </div>

        <div class=\"content-block\" role=\"main\">

            ";
            // line 169
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if ($this->getAttribute($_settings_, "show_breadcrumb")) {
                // line 170
                echo "            ";
                $this->displayBlock('breadcrumbs', $context, $blocks);
                // line 178
                echo "            ";
            }
            // line 179
            echo "
            ";
            // line 180
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if ($this->getAttribute($_settings_, "show_page_header")) {
                // line 181
                echo "            ";
                // line 187
                echo "            ";
            }
            // line 188
            echo "
            ";
            // line 189
            $this->env->loadTemplate("partial_message.phtml")->display($context);
            // line 190
            echo "
            ";
            // line 191
            $this->displayBlock('content_before', $context, $blocks);
            // line 192
            echo "            ";
            $this->displayBlock('content', $context, $blocks);
            // line 193
            echo "            ";
            $this->displayBlock('content_after', $context, $blocks);
            // line 194
            echo "        </div>
    </section>
    <div id=\"push\"></div>
</div>

";
            // line 199
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if ($this->getAttribute($_settings_, "footer_enabled")) {
                // line 200
                echo "<footer id=\"footer\" class=\"container\">
    <p>&copy; ";
                // line 201
                if (isset($context["now"])) { $_now_ = $context["now"]; } else { $_now_ = null; }
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $_now_, "Y"), "html", null, true);
                echo " ";
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                if (isset($context["company"])) { $_company_ = $context["company"]; } else { $_company_ = null; }
                echo (($this->getAttribute($_settings_, "footer_signature", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_settings_, "footer_signature"), $this->getAttribute($_company_, "signature"))) : ($this->getAttribute($_company_, "signature")));
                echo "</p>
    <ul>
        ";
                // line 203
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                if ($this->getAttribute($_settings_, "footer_link_1_enabled")) {
                    // line 204
                    echo "        <li>
            ";
                    // line 205
                    if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                    if ((twig_in_filter("http://", $this->getAttribute($_settings_, "footer_link_1_page")) || twig_in_filter("https://", $this->getAttribute($_settings_, "footer_link_1_page")))) {
                        // line 206
                        echo "            <a href=\"";
                        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_settings_, "footer_link_1_page"), "html", null, true);
                        echo "\">";
                        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_settings_, "footer_link_1_title"), "html", null, true);
                        echo "</a>
            ";
                    } else {
                        // line 208
                        echo "            <a href=\"";
                        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                        echo $this->env->getExtension('bb')->twig_bb_client_link_filter($this->getAttribute($_settings_, "footer_link_1_page"));
                        echo "\">";
                        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_settings_, "footer_link_1_title"), "html", null, true);
                        echo "</a>
            ";
                    }
                    // line 210
                    echo "        </li>
        ";
                }
                // line 212
                echo "        ";
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                if ($this->getAttribute($_settings_, "footer_link_2_enabled")) {
                    // line 213
                    echo "        <li>
            ";
                    // line 214
                    if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                    if ((twig_in_filter("http://", $this->getAttribute($_settings_, "footer_link_2_page")) || twig_in_filter("https://", $this->getAttribute($_settings_, "footer_link_2_page")))) {
                        // line 215
                        echo "            <a href=\"";
                        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_settings_, "footer_link_2_page"), "html", null, true);
                        echo "\">";
                        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_settings_, "footer_link_2_title"), "html", null, true);
                        echo "</a>
            ";
                    } else {
                        // line 217
                        echo "            <a href=\"";
                        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                        echo $this->env->getExtension('bb')->twig_bb_client_link_filter($this->getAttribute($_settings_, "footer_link_2_page"));
                        echo "\">";
                        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_settings_, "footer_link_2_title"), "html", null, true);
                        echo "</a>
            ";
                    }
                    // line 219
                    echo "        </li>
        ";
                }
                // line 221
                echo "        ";
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                if ($this->getAttribute($_settings_, "footer_link_3_enabled")) {
                    // line 222
                    echo "        <li>
            ";
                    // line 223
                    if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                    if ((twig_in_filter("http://", $this->getAttribute($_settings_, "footer_link_3_page")) || twig_in_filter("https://", $this->getAttribute($_settings_, "footer_link_3_page")))) {
                        // line 224
                        echo "            <a href=\"";
                        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_settings_, "footer_link_3_page"), "html", null, true);
                        echo "\">";
                        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_settings_, "footer_link_3_title"), "html", null, true);
                        echo "</a>
            ";
                    } else {
                        // line 226
                        echo "            <a href=\"";
                        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                        echo $this->env->getExtension('bb')->twig_bb_client_link_filter($this->getAttribute($_settings_, "footer_link_3_page"));
                        echo "\">";
                        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_settings_, "footer_link_3_title"), "html", null, true);
                        echo "</a>

            ";
                    }
                    // line 229
                    echo "        </li>
        ";
                }
                // line 231
                echo "        ";
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                if ($this->getAttribute($_settings_, "footer_link_4_enabled")) {
                    // line 232
                    echo "        <li>
            ";
                    // line 233
                    if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                    if ((twig_in_filter("http://", $this->getAttribute($_settings_, "footer_link_4_page")) || twig_in_filter("https://", $this->getAttribute($_settings_, "footer_link_4_page")))) {
                        // line 234
                        echo "            <a href=\"";
                        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_settings_, "footer_link_4_page"), "html", null, true);
                        echo "\">";
                        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_settings_, "footer_link_4_title"), "html", null, true);
                        echo "</a>
            ";
                    } else {
                        // line 236
                        echo "            <a href=\"";
                        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                        echo $this->env->getExtension('bb')->twig_bb_client_link_filter($this->getAttribute($_settings_, "footer_link_4_page"));
                        echo "\">";
                        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_settings_, "footer_link_4_title"), "html", null, true);
                        echo "</a>
            ";
                    }
                    // line 238
                    echo "        </li>
        ";
                }
                // line 240
                echo "        ";
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                if ($this->getAttribute($_settings_, "footer_link_5_enabled")) {
                    // line 241
                    echo "        <li>
            ";
                    // line 242
                    if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                    if ((twig_in_filter("http://", $this->getAttribute($_settings_, "footer_link_5_page")) || twig_in_filter("https://", $this->getAttribute($_settings_, "footer_link_5_page")))) {
                        // line 243
                        echo "            <a href=\"";
                        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_settings_, "footer_link_5_page"), "html", null, true);
                        echo "\">";
                        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_settings_, "footer_link_5_title"), "html", null, true);
                        echo "</a>
            ";
                    } else {
                        // line 245
                        echo "            <a href=\"";
                        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                        echo $this->env->getExtension('bb')->twig_bb_client_link_filter($this->getAttribute($_settings_, "footer_link_5_page"));
                        echo "\">";
                        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_settings_, "footer_link_5_title"), "html", null, true);
                        echo "</a>
            ";
                    }
                    // line 247
                    echo "        </li>
        ";
                }
                // line 249
                echo "
        ";
                // line 251
                echo "        ";
                if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
                if ($this->getAttribute($_guest_, "extension_is_on", array(0 => array("mod" => "branding")), "method")) {
                    // line 252
                    echo "        <li>
            <a href=\"http://www.boxbilling.com\" title=\"Billing Software\" target=\"_blank\">";
                    // line 253
                    echo gettext("Powered by BoxBilling");
                    echo "</a>
        </li>
        ";
                }
                // line 256
                echo "    </ul>
    ";
                // line 257
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                if ($this->getAttribute($_settings_, "footer_to_top_enabled")) {
                    // line 258
                    echo "    <a href=\"#top\" class=\"btn btn-primary btn-flat pull-right\"><span class=\"awe-arrow-up\"></span> ";
                    echo gettext("Top");
                    echo "</a>
    ";
                }
                // line 260
                echo "</footer>
";
            }
            // line 262
            echo "
<div class=\"wait\" style=\"display:none\" onclick=\"\$(this).hide();\">
    <div class=\"popup_block\" style=\"position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: black; opacity: 0.5; -webkit-opacity: 0.5; -moz-opacity: 0.5; filter :  alpha(opacity=50); z-index: 2000\">
        <img src=\"";
            // line 265
            echo twig_asset_url($this->env, "img/loader.gif");
            echo "\" style=\"position: absolute; display: block; margin-left: auto; margin-right: auto; position: relative; top: 50%; opacity: 1; filter: alpha(opacity=100); z-index: 1003\">
    </div>
</div>
<noscript>NOTE: Many features on BoxBilling require Javascript and cookies. You can enable both via your browser's preference settings.</noscript>

";
        }
    }

    // line 170
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 171
        echo "            <ul class=\"breadcrumb\">
                <li><a href=\"";
        // line 172
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/");
        echo "\">";
        echo gettext("Home");
        echo "</a> <span class=\"divider\">/</span></li>
                ";
        // line 173
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 176
        echo "            </ul>
            ";
    }

    // line 173
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 174
        echo "                <li class=\"active\">";
        echo gettext("Dashboard");
        echo "</li>
                ";
    }

    // line 191
    public function block_content_before($context, array $blocks = array())
    {
    }

    // line 192
    public function block_content($context, array $blocks = array())
    {
    }

    // line 193
    public function block_content_after($context, array $blocks = array())
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
        return array (  904 => 193,  899 => 192,  894 => 191,  887 => 174,  884 => 173,  879 => 176,  877 => 173,  871 => 172,  868 => 171,  865 => 170,  854 => 265,  849 => 262,  845 => 260,  839 => 258,  836 => 257,  833 => 256,  827 => 253,  824 => 252,  820 => 251,  817 => 249,  813 => 247,  803 => 245,  793 => 243,  790 => 242,  787 => 241,  783 => 240,  779 => 238,  769 => 236,  759 => 234,  756 => 233,  753 => 232,  749 => 231,  745 => 229,  734 => 226,  724 => 224,  721 => 223,  718 => 222,  714 => 221,  710 => 219,  700 => 217,  690 => 215,  687 => 214,  684 => 213,  680 => 212,  676 => 210,  666 => 208,  656 => 206,  653 => 205,  650 => 204,  647 => 203,  637 => 201,  634 => 200,  631 => 199,  624 => 194,  621 => 193,  618 => 192,  616 => 191,  613 => 190,  611 => 189,  608 => 188,  605 => 187,  603 => 181,  600 => 180,  597 => 179,  594 => 178,  591 => 170,  588 => 169,  582 => 165,  573 => 160,  564 => 157,  561 => 156,  558 => 155,  551 => 152,  547 => 151,  544 => 150,  541 => 149,  538 => 148,  527 => 142,  521 => 141,  515 => 139,  505 => 138,  493 => 136,  489 => 134,  486 => 133,  482 => 131,  480 => 130,  473 => 126,  466 => 121,  463 => 120,  456 => 118,  453 => 117,  450 => 116,  447 => 115,  432 => 110,  425 => 108,  421 => 107,  418 => 106,  413 => 103,  400 => 99,  397 => 98,  384 => 94,  377 => 92,  369 => 89,  366 => 88,  362 => 87,  349 => 83,  346 => 82,  343 => 81,  336 => 76,  317 => 73,  312 => 72,  308 => 71,  295 => 66,  285 => 62,  273 => 59,  270 => 58,  266 => 56,  258 => 52,  255 => 51,  252 => 50,  240 => 46,  235 => 41,  230 => 38,  225 => 37,  220 => 18,  213 => 12,  206 => 7,  194 => 280,  187 => 278,  184 => 277,  172 => 273,  167 => 46,  164 => 45,  155 => 43,  152 => 42,  148 => 41,  144 => 39,  139 => 37,  134 => 35,  130 => 34,  126 => 33,  122 => 32,  118 => 31,  109 => 28,  101 => 26,  97 => 25,  92 => 23,  88 => 22,  74 => 18,  62 => 14,  57 => 13,  48 => 10,  44 => 9,  39 => 7,  419 => 85,  407 => 80,  398 => 78,  388 => 71,  382 => 68,  368 => 57,  365 => 56,  359 => 54,  356 => 53,  352 => 84,  348 => 51,  345 => 50,  339 => 48,  330 => 75,  311 => 42,  305 => 41,  300 => 38,  289 => 37,  274 => 34,  263 => 55,  248 => 29,  237 => 28,  221 => 25,  209 => 24,  193 => 20,  181 => 276,  169 => 272,  147 => 13,  142 => 12,  131 => 11,  117 => 10,  83 => 5,  77 => 4,  69 => 3,  58 => 2,  34 => 36,  28 => 27,  25 => 22,  22 => 17,  19 => 9,  604 => 221,  595 => 218,  592 => 217,  578 => 214,  568 => 159,  562 => 212,  556 => 211,  548 => 206,  537 => 197,  528 => 194,  525 => 193,  508 => 190,  498 => 189,  492 => 188,  485 => 187,  477 => 182,  461 => 170,  457 => 169,  452 => 168,  448 => 167,  443 => 166,  439 => 165,  428 => 109,  422 => 158,  416 => 155,  403 => 100,  399 => 145,  394 => 97,  390 => 143,  385 => 142,  381 => 93,  370 => 58,  364 => 134,  358 => 131,  342 => 49,  338 => 118,  333 => 117,  329 => 116,  324 => 115,  320 => 114,  309 => 108,  303 => 70,  290 => 65,  286 => 95,  281 => 61,  277 => 60,  272 => 92,  268 => 91,  257 => 85,  251 => 82,  246 => 48,  243 => 47,  239 => 76,  229 => 68,  219 => 64,  215 => 62,  201 => 281,  196 => 57,  190 => 56,  185 => 55,  175 => 274,  170 => 53,  165 => 52,  162 => 51,  156 => 50,  149 => 46,  145 => 45,  141 => 38,  137 => 43,  133 => 42,  129 => 41,  120 => 35,  114 => 30,  111 => 30,  108 => 29,  105 => 27,  102 => 27,  99 => 26,  89 => 23,  84 => 21,  79 => 20,  76 => 19,  73 => 19,  70 => 18,  67 => 15,  59 => 10,  53 => 12,  50 => 8,  46 => 7,  43 => 1,  37 => 45,  31 => 1,  26 => 15,);
    }
}
