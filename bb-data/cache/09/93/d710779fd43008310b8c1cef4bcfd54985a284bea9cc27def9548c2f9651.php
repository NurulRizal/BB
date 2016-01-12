<?php

/* macro_functions.phtml */
class __TwigTemplate_0993d710779fd43008310b8c1cef4bcfd54985a284bea9cc27def9548c2f9651 extends Twig_Template
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
        // line 9
        echo "
";
        // line 17
        echo "
";
        // line 22
        echo "
";
        // line 27
        echo "
";
        // line 31
        echo "
";
        // line 36
        echo "
";
        // line 45
        echo "

";
    }

    // line 1
    public function getselectbox($_name = null, $_options = null, $_selected = null, $_required = null, $_nullOption = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "options" => $_options,
            "selected" => $_selected,
            "required" => $_required,
            "nullOption" => $_nullOption,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    <select name=\"";
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, $_name_, "html", null, true);
            echo "\" ";
            if (isset($context["required"])) { $_required_ = $context["required"]; } else { $_required_ = null; }
            if ($_required_) {
                echo "required=\"required\"";
            }
            echo ">
        ";
            // line 3
            if (isset($context["nullOption"])) { $_nullOption_ = $context["nullOption"]; } else { $_nullOption_ = null; }
            if ($_nullOption_) {
                echo "<option value=\"\">-- ";
                if (isset($context["nullOption"])) { $_nullOption_ = $context["nullOption"]; } else { $_nullOption_ = null; }
                echo twig_escape_filter($this->env, $_nullOption_, "html", null, true);
                echo " --</option>";
            }
            // line 4
            echo "        ";
            if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_options_);
            foreach ($context['_seq'] as $context["val"] => $context["label"]) {
                // line 5
                echo "        <option value=\"";
                if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
                echo twig_escape_filter($this->env, $_val_, "html", null, true);
                echo "\" label=\"";
                if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
                echo twig_escape_filter($this->env, $_label_);
                echo "\" ";
                if (isset($context["selected"])) { $_selected_ = $context["selected"]; } else { $_selected_ = null; }
                if (isset($context["val"])) { $_val_ = $context["val"]; } else { $_val_ = null; }
                if (($_selected_ == $_val_)) {
                    echo "selected=\"selected\"";
                }
                echo ">";
                if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
                echo twig_escape_filter($this->env, $_label_);
                echo "</option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['val'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "    </select>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 10
    public function getselectboxtld($_name = null, $_options = null, $_selected = null, $_required = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "options" => $_options,
            "selected" => $_selected,
            "required" => $_required,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 11
            echo "    <select name=\"";
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, $_name_, "html", null, true);
            echo "\" ";
            if (isset($context["required"])) { $_required_ = $context["required"]; } else { $_required_ = null; }
            if ($_required_) {
                echo "required=\"required\"";
            }
            echo " style=\"width:80px;\">
        ";
            // line 12
            if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_options_);
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 13
                echo "        <option value=\"";
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_data_, "tld"), "html", null, true);
                echo "\" label=\"";
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_data_, "tld"), "html", null, true);
                echo "\" ";
                if (isset($context["selected"])) { $_selected_ = $context["selected"]; } else { $_selected_ = null; }
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                if (($_selected_ == $this->getAttribute($_data_, "tld"))) {
                    echo "selected=\"selected\"";
                }
                echo ">";
                if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_data_, "tld"), "html", null, true);
                echo "</option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "    </select>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 19
    public function getcurrency_format($_price = null, $_currency = null)
    {
        $context = $this->env->mergeGlobals(array(
            "price" => $_price,
            "currency" => $_currency,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 20
            echo "    ";
            if (isset($context["price"])) { $_price_ = $context["price"]; } else { $_price_ = null; }
            if (isset($context["currency"])) { $_currency_ = $context["currency"]; } else { $_currency_ = null; }
            echo twig_money($this->env, $_price_, $_currency_);
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 24
    public function getcurrency($_price = null, $_currency = null)
    {
        $context = $this->env->mergeGlobals(array(
            "price" => $_price,
            "currency" => $_currency,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 25
            echo "    ";
            if (isset($context["price"])) { $_price_ = $context["price"]; } else { $_price_ = null; }
            if (isset($context["currency"])) { $_currency_ = $context["currency"]; } else { $_currency_ = null; }
            echo twig_money_convert($this->env, $_price_, $_currency_);
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 28
    public function getstatus_name($_status = null)
    {
        $context = $this->env->mergeGlobals(array(
            "status" => $_status,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 29
            echo "    ";
            if (isset($context["status"])) { $_status_ = $context["status"]; } else { $_status_ = null; }
            echo twig_escape_filter($this->env, gettext(twig_title_string_filter($this->env, strtr($_status_, array("_" => " ")))), "html", null, true);
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 33
    public function getperiod_name($_period = null)
    {
        $context = $this->env->mergeGlobals(array(
            "period" => $_period,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 34
            echo "    ";
            if (isset($context["period"])) { $_period_ = $context["period"]; } else { $_period_ = null; }
            echo twig_period_title($this->env, $_period_);
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 37
    public function getmarkdown_quote($_text = null)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $_text,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 38
            echo "


";
            // line 41
            if (isset($context["text"])) { $_text_ = $context["text"]; } else { $_text_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_split_filter($_text_, "
"));
            foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                // line 42
                echo "> ";
                if (isset($context["line"])) { $_line_ = $context["line"]; } else { $_line_ = null; }
                echo twig_escape_filter($this->env, $_line_, "html", null, true);
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 47
    public function getrecaptcha()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 48
            echo "
";
            // line 49
            if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
            if ($this->getAttribute($_guest_, "extension_is_on", array(0 => array("mod" => "spamchecker")), "method")) {
                // line 50
                if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
                $context["rc"] = $this->getAttribute($_guest_, "spamchecker_recaptcha");
                // line 51
                echo "    ";
                if (isset($context["rc"])) { $_rc_ = $context["rc"]; } else { $_rc_ = null; }
                if ($this->getAttribute($_rc_, "enabled")) {
                    // line 52
                    echo "        ";
                    if (isset($context["rc"])) { $_rc_ = $context["rc"]; } else { $_rc_ = null; }
                    if (($this->getAttribute($_rc_, "version") == 2)) {
                        // line 53
                        echo "            <script src='https://www.google.com/recaptcha/api.js' async defer></script>
            <div class=\"g-recaptcha\" data-sitekey=\"";
                        // line 54
                        if (isset($context["rc"])) { $_rc_ = $context["rc"]; } else { $_rc_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_rc_, "publickey"), "html", null, true);
                        echo "\"></div>
        ";
                    } else {
                        // line 56
                        echo "
        ";
                        // line 57
                        $context["server"] = "https://www.google.com/recaptcha/api";
                        // line 58
                        echo "           <script type=\"text/javascript\">
                var RecaptchaOptions = {
                theme : 'custom',
                custom_theme_widget: 'recaptcha_widget'
            };
            </script>

            <div id=\"recaptcha_widget\" style=\"display:none\">

            <div id=\"recaptcha_image\"></div>
            <div class=\"recaptcha_only_if_incorrect_sol\" style=\"color:red\">";
                        // line 68
                        echo gettext("Incorrect please try again");
                        echo "</div>

            <p>
                <label>";
                        // line 71
                        echo gettext("Enter the words above");
                        echo "</label>
                <br/>
                <input type=\"text\" id=\"recaptcha_response_field\" name=\"recaptcha_response_field\" style=\"width: 245px\"/>
                    <a class=\"bb-button\" href=\"javascript:Recaptcha.reload()\" style=\"float: right\"><span class=\"dark-icon i-reload\"></span></a>
            </p>
            </div>

            <script type=\"text/javascript\" src=\"";
                        // line 78
                        if (isset($context["server"])) { $_server_ = $context["server"]; } else { $_server_ = null; }
                        echo twig_escape_filter($this->env, $_server_, "html", null, true);
                        echo "/challenge?k=";
                        if (isset($context["rc"])) { $_rc_ = $context["rc"]; } else { $_rc_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_rc_, "publickey"), "html", null, true);
                        echo "\"></script>
            <noscript>
                <iframe src=\"";
                        // line 80
                        if (isset($context["server"])) { $_server_ = $context["server"]; } else { $_server_ = null; }
                        echo twig_escape_filter($this->env, $_server_, "html", null, true);
                        echo "/noscript?k=";
                        if (isset($context["rc"])) { $_rc_ = $context["rc"]; } else { $_rc_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_rc_, "publickey"), "html", null, true);
                        echo "\" height=\"300\" width=\"500\" frameborder=\"0\"></iframe><br/>
                <textarea name=\"recaptcha_challenge_field\" rows=\"3\" cols=\"40\"></textarea>
                <input type=\"hidden\" name=\"recaptcha_response_field\" value=\"manual_challenge\"/>
            </noscript>
        ";
                    }
                    // line 85
                    echo "    ";
                }
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "macro_functions.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  419 => 85,  407 => 80,  398 => 78,  388 => 71,  382 => 68,  368 => 57,  365 => 56,  359 => 54,  356 => 53,  352 => 52,  348 => 51,  345 => 50,  339 => 48,  330 => 47,  311 => 42,  305 => 41,  300 => 38,  289 => 37,  274 => 34,  263 => 33,  248 => 29,  237 => 28,  221 => 25,  209 => 24,  193 => 20,  181 => 19,  169 => 15,  147 => 13,  142 => 12,  131 => 11,  117 => 10,  83 => 5,  77 => 4,  69 => 3,  58 => 2,  34 => 36,  28 => 27,  25 => 22,  22 => 17,  19 => 9,  604 => 221,  595 => 218,  592 => 217,  578 => 214,  568 => 213,  562 => 212,  556 => 211,  548 => 206,  537 => 197,  528 => 194,  525 => 193,  508 => 190,  498 => 189,  492 => 188,  485 => 187,  477 => 182,  461 => 170,  457 => 169,  452 => 168,  448 => 167,  443 => 166,  439 => 165,  428 => 159,  422 => 158,  416 => 155,  403 => 146,  399 => 145,  394 => 144,  390 => 143,  385 => 142,  381 => 141,  370 => 58,  364 => 134,  358 => 131,  342 => 49,  338 => 118,  333 => 117,  329 => 116,  324 => 115,  320 => 114,  309 => 108,  303 => 105,  290 => 96,  286 => 95,  281 => 94,  277 => 93,  272 => 92,  268 => 91,  257 => 85,  251 => 82,  246 => 79,  243 => 78,  239 => 76,  229 => 68,  219 => 64,  215 => 62,  201 => 58,  196 => 57,  190 => 56,  185 => 55,  175 => 54,  170 => 53,  165 => 52,  162 => 51,  156 => 50,  149 => 46,  145 => 45,  141 => 44,  137 => 43,  133 => 42,  129 => 41,  120 => 35,  114 => 31,  111 => 30,  108 => 29,  105 => 7,  102 => 27,  99 => 26,  89 => 23,  84 => 22,  79 => 21,  76 => 20,  73 => 19,  70 => 18,  67 => 17,  59 => 10,  53 => 9,  50 => 8,  46 => 7,  43 => 1,  37 => 45,  31 => 31,  26 => 15,);
    }
}
