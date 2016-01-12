<?php

/* mod_page_login.phtml */
class __TwigTemplate_e9d7ee525a66ed39a56652da13b71f76ef63277a984ca0124d1c210b918592a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout_public.phtml");

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'body' => array($this, 'block_body'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout_public.phtml";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Log in");
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<section class=\"container login\" role=\"main\">

";
        // line 9
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ($this->getAttribute($_settings_, "login_page_show_logo")) {
            // line 10
            echo "    ";
            if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
            $context["company"] = $this->getAttribute($_guest_, "system_company");
            // line 11
            echo "    <h1 style=\"text-align: center\">
        ";
            // line 12
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if ($this->getAttribute($_settings_, "login_page_show_logo")) {
                // line 13
                echo "        <a href=\"";
                if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
                echo twig_escape_filter($this->env, (($this->getAttribute($_settings_, "login_page_logo_url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_settings_, "login_page_logo_url"), "/")) : ("/")), "html", null, true);
                echo "\" target=\"_blank\"><img src=\"";
                if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_guest_, "system_company"), "logo_url"), "html", null, true);
                echo "\" alt=\"";
                if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_guest_, "system_company"), "name"), "html", null, true);
                echo "\"/></a>
        ";
            }
            // line 15
            echo "    </h1>
";
        }
        // line 17
        echo "
    <div class=\"data-block\">
        <div class=\"data-container\">

            <form method=\"post\" action=\"\" id=\"client-login\">
                <fieldset>
                    <div class=\"control-group\">
                        <label class=\"control-label\" for=\"email\">";
        // line 24
        echo gettext("Email Address");
        echo "</label>
                        <div class=\"controls\">
                            <input id=\"icon\" type=\"text\" placeholder=\"";
        // line 26
        echo gettext("Your email address");
        echo "\" name=\"email\" value=\"";
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_request_, "email"), "html", null, true);
        echo "\" required=\"required\" data-validation-required-message=\"";
        echo gettext("You must fill in your email.");
        echo "\" autofocus>
                            <div class=\"help-block\"></div>
                        </div>
                    </div>
                    <div class=\"control-group\">
                        <label class=\"control-label\" for=\"password\">";
        // line 31
        echo gettext("Password");
        echo "</label>
                        <div class=\"controls\">
                            <input id=\"password\" type=\"password\" placeholder=\"";
        // line 33
        echo gettext("Password");
        echo "\" name=\"password\" required=\"required\" value=\"";
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_request_, "password"), "html", null, true);
        echo "\" data-validation-required-message=\"";
        echo gettext("You must fill in your password.");
        echo "\">
                            ";
        // line 34
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ($this->getAttribute($_settings_, "login_page_show_remember_me")) {
            // line 35
            echo "                            <label class=\"checkbox\">
                                <input type=\"checkbox\" name=\"remember\" checked=\"checked\"> ";
            // line 36
            echo gettext("Remember me");
            // line 37
            echo "                            </label>
                            ";
        }
        // line 39
        echo "                            <div class=\"help-block\"></div>
                        </div>
                    </div>
                    <div class=\"form-actions\">
                        <button class=\"btn btn-block btn-large btn-inverse btn-alt\" type=\"submit\">";
        // line 43
        echo gettext("Log in");
        echo "</button>
                    </div>
                </fieldset>
            </form>

        </div>
    </div>

    ";
        // line 51
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if (($this->getAttribute($_settings_, "show_password_reset_link") || $this->getAttribute($_settings_, "show_signup_link"))) {
            // line 52
            echo "    <ul class=\"login-footer\">
        ";
            // line 53
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if ($this->getAttribute($_settings_, "show_signup_link")) {
                // line 54
                echo "        <li><a href=\"";
                echo $this->env->getExtension('bb')->twig_bb_client_link_filter("signup");
                echo "\"><small>";
                echo gettext("Signup");
                echo "</small></a></li>
        ";
            }
            // line 56
            echo "
        ";
            // line 57
            if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
            if ($this->getAttribute($_settings_, "show_password_reset_link")) {
                // line 58
                echo "        <li><a href=\"";
                echo $this->env->getExtension('bb')->twig_bb_client_link_filter("password-reset");
                echo "\"><small>";
                echo gettext("Forgot password?");
                echo "</small></a></li>
        ";
            }
            // line 60
            echo "    </ul>
    ";
        }
        // line 62
        echo "
</section>

";
    }

    // line 67
    public function block_js($context, array $blocks = array())
    {
        // line 68
        echo "<script type=\"text/javascript\">
\$(function() {
    \$('#client-login').bind('submit',function(event){
        bb.post('guest/client/login',
            \$(this).serialize(),
            function(result) {
                bb.redirect();
            }
        );
        return false;
    });
    ";
        // line 79
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        if ($this->getAttribute($_request_, "al")) {
            // line 80
            echo "        \$('#client-login').submit();
    ";
        }
        // line 82
        echo "});
</script>
<script src=\"";
        // line 84
        echo twig_asset_url($this->env, "js/plugins/bootstrapValidation/jqBootstrapValidation.min.js");
        echo "\"></script>
<script>
    \$(document).ready(function() {

        \$(\"input\").jqBootstrapValidation({
            submitSuccess: function(\$form, event) {
                event.preventDefault();
            }
        });

    });
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_page_login.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 84,  209 => 82,  205 => 80,  202 => 79,  189 => 68,  186 => 67,  179 => 62,  175 => 60,  167 => 58,  164 => 57,  161 => 56,  153 => 54,  150 => 53,  147 => 52,  144 => 51,  133 => 43,  127 => 39,  123 => 37,  121 => 36,  118 => 35,  115 => 34,  106 => 33,  101 => 31,  88 => 26,  83 => 24,  74 => 17,  70 => 15,  57 => 13,  54 => 12,  51 => 11,  47 => 10,  44 => 9,  39 => 6,  36 => 5,  30 => 3,);
    }
}
