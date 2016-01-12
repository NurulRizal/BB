<?php

/* macro_functions.phtml */
class __TwigTemplate_b9321ecedd957194efbd532051167799a79f452715723fd6c94c9791cf3e1281 extends Twig_Template
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
        // line 4
        echo "
";
        // line 13
        echo "
";
        // line 21
        echo "
";
        // line 32
        echo "
";
        // line 70
        echo "
";
        // line 87
        echo "
";
        // line 111
        echo "
";
        // line 113
        echo "
";
        // line 117
        echo "
";
        // line 126
        echo "
";
    }

    // line 1
    public function getq($_bool = null)
    {
        $context = $this->env->mergeGlobals(array(
            "bool" => $_bool,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            if (isset($context["bool"])) { $_bool_ = $context["bool"]; } else { $_bool_ = null; }
            if ($_bool_) {
                echo gettext("Yes");
            } else {
                echo gettext("No");
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 5
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
            // line 6
            echo "    <select name=\"";
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, $_name_, "html", null, true);
            echo "\" id=\"";
            if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
            echo twig_escape_filter($this->env, $_name_, "html", null, true);
            echo "\" ";
            if (isset($context["required"])) { $_required_ = $context["required"]; } else { $_required_ = null; }
            if ($_required_) {
                echo "required=\"required\"";
            }
            echo ">
        ";
            // line 7
            if (isset($context["nullOption"])) { $_nullOption_ = $context["nullOption"]; } else { $_nullOption_ = null; }
            if ($_nullOption_) {
                echo "<option value=\"\">-- ";
                if (isset($context["nullOption"])) { $_nullOption_ = $context["nullOption"]; } else { $_nullOption_ = null; }
                echo twig_escape_filter($this->env, $_nullOption_, "html", null, true);
                echo " --</option>";
            }
            // line 8
            echo "        ";
            if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_options_);
            foreach ($context['_seq'] as $context["val"] => $context["label"]) {
                // line 9
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
            // line 11
            echo "    </select>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 14
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
            // line 15
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
            // line 16
            if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_options_);
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 17
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
            // line 19
            echo "    </select>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 22
    public function gettable_search()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 23
            echo "<div style=\"position: relative;\">
    <div class=\"dataTables_filter\">
        <form method=\"get\" action=\"\">
            <input type=\"hidden\" name=\"_url\" value=\"";
            // line 26
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_request_, "_url"), "html", null, true);
            echo "\"/>
            <label>";
            // line 27
            echo gettext("Search:");
            echo " <input type=\"text\" name=\"search\" placeholder=\"";
            echo gettext("Enter search text..");
            echo "\" value=\"";
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_request_, "search"), "html", null, true);
            echo "\"><div class=\"srch\"></div></label>
        </form>
    </div>
</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 33
    public function getbuild_form($_elements = null, $_values = null)
    {
        $context = $this->env->mergeGlobals(array(
            "elements" => $_elements,
            "values" => $_values,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 34
            echo "    ";
            if (isset($context["elements"])) { $_elements_ = $context["elements"]; } else { $_elements_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_elements_);
            foreach ($context['_seq'] as $context["name"] => $context["element"]) {
                // line 35
                echo "    <div class=\"rowElem\">
            ";
                // line 36
                if (isset($context["element"])) { $_element_ = $context["element"]; } else { $_element_ = null; }
                if (($this->getAttribute($_element_, 0, array(), "array") == "select")) {
                    // line 37
                    echo "            <label class=\"topLabel\">";
                    if (isset($context["element"])) { $_element_ = $context["element"]; } else { $_element_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_element_, 1, array(), "array"), "label"), "html", null, true);
                    if (isset($context["element"])) { $_element_ = $context["element"]; } else { $_element_ = null; }
                    if ($this->getAttribute($this->getAttribute($_element_, 1, array(), "array"), "description")) {
                        echo " - ";
                        if (isset($context["element"])) { $_element_ = $context["element"]; } else { $_element_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_element_, 1, array(), "array"), "description"), "html", null, true);
                    }
                    echo "</label>
            <div class=\"formBottom\">
                <select name=\"config[";
                    // line 39
                    if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                    echo twig_escape_filter($this->env, $_name_, "html", null, true);
                    echo "]\">
                ";
                    // line 40
                    if (isset($context["element"])) { $_element_ = $context["element"]; } else { $_element_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_element_, 1, array(), "array"), "multiOptions"));
                    foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                        // line 41
                        echo "                    <option value=\"";
                        if (isset($context["k"])) { $_k_ = $context["k"]; } else { $_k_ = null; }
                        echo twig_escape_filter($this->env, $_k_, "html", null, true);
                        echo "\" ";
                        if (isset($context["k"])) { $_k_ = $context["k"]; } else { $_k_ = null; }
                        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                        if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                        if (($_k_ == $this->getAttribute($_values_, $_name_, array(), "array"))) {
                            echo "selected=\"selected\"";
                        }
                        echo "/><label>";
                        if (isset($context["v"])) { $_v_ = $context["v"]; } else { $_v_ = null; }
                        echo twig_escape_filter($this->env, $_v_, "html", null, true);
                        echo "</label>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 43
                    echo "                </select>
            </div>
            <div class=\"fix\"></div>
            ";
                } elseif (($this->getAttribute($_element_, 0, array(), "array") == "radio")) {
                    // line 47
                    echo "            <label>";
                    if (isset($context["element"])) { $_element_ = $context["element"]; } else { $_element_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_element_, 1, array(), "array"), "label"), "html", null, true);
                    if (isset($context["element"])) { $_element_ = $context["element"]; } else { $_element_ = null; }
                    if ($this->getAttribute($this->getAttribute($_element_, 1, array(), "array"), "description")) {
                        echo " - ";
                        if (isset($context["element"])) { $_element_ = $context["element"]; } else { $_element_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_element_, 1, array(), "array"), "description"), "html", null, true);
                    }
                    echo "</label>
            <div class=\"formRight\">
                ";
                    // line 49
                    if (isset($context["element"])) { $_element_ = $context["element"]; } else { $_element_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_element_, 1, array(), "array"), "multiOptions"));
                    foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                        // line 50
                        echo "                    <input id=\"el-";
                        if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                        echo twig_escape_filter($this->env, $_name_, "html", null, true);
                        echo "\" type=\"radio\" name=\"config[";
                        if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                        echo twig_escape_filter($this->env, $_name_, "html", null, true);
                        echo "]\" value=\"";
                        if (isset($context["k"])) { $_k_ = $context["k"]; } else { $_k_ = null; }
                        echo twig_escape_filter($this->env, $_k_, "html", null, true);
                        echo "\" ";
                        if (isset($context["k"])) { $_k_ = $context["k"]; } else { $_k_ = null; }
                        if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                        if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                        if (($_k_ == $this->getAttribute($_values_, $_name_, array(), "array"))) {
                            echo "checked=\"checked\"";
                        }
                        echo "/><label>";
                        if (isset($context["v"])) { $_v_ = $context["v"]; } else { $_v_ = null; }
                        echo twig_escape_filter($this->env, $_v_, "html", null, true);
                        echo "</label>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 52
                    echo "            </div>
            <div class=\"fix\"></div>
            ";
                } elseif (($this->getAttribute($_element_, 0, array(), "array") == "textarea")) {
                    // line 55
                    echo "            <label class=\"topLabel\" for=\"el-";
                    if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                    echo twig_escape_filter($this->env, $_name_, "html", null, true);
                    echo "\">";
                    if (isset($context["element"])) { $_element_ = $context["element"]; } else { $_element_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_element_, 1, array(), "array"), "label"), "html", null, true);
                    if (isset($context["element"])) { $_element_ = $context["element"]; } else { $_element_ = null; }
                    if ($this->getAttribute($this->getAttribute($_element_, 1, array(), "array"), "description")) {
                        echo " - ";
                        if (isset($context["element"])) { $_element_ = $context["element"]; } else { $_element_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_element_, 1, array(), "array"), "description"), "html", null, true);
                    }
                    echo "</label>
            <div class=\"formBottom\">
                <textarea id=\"el-";
                    // line 57
                    if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                    echo twig_escape_filter($this->env, $_name_, "html", null, true);
                    echo "\" name=\"config[";
                    if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                    echo twig_escape_filter($this->env, $_name_, "html", null, true);
                    echo "]\" cols=\"5\" rows=\"20\" required=\"required\">";
                    if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                    if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_values_, $_name_, array(), "array"), "html", null, true);
                    echo "</textarea>
            </div>
            <div class=\"fix\"></div>
            ";
                } else {
                    // line 61
                    echo "            <label class=\"topLabel\" for=\"el-";
                    if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                    echo twig_escape_filter($this->env, $_name_, "html", null, true);
                    echo "\">";
                    if (isset($context["element"])) { $_element_ = $context["element"]; } else { $_element_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_element_, 1, array(), "array"), "label"), "html", null, true);
                    if (isset($context["element"])) { $_element_ = $context["element"]; } else { $_element_ = null; }
                    if ($this->getAttribute($this->getAttribute($_element_, 1, array(), "array"), "description")) {
                        echo " - ";
                        if (isset($context["element"])) { $_element_ = $context["element"]; } else { $_element_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_element_, 1, array(), "array"), "description"), "html", null, true);
                    }
                    echo "</label>
            <div class=\"formBottom\">
                <input id=\"el-";
                    // line 63
                    if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                    echo twig_escape_filter($this->env, $_name_, "html", null, true);
                    echo "\" type=\"";
                    if (isset($context["element"])) { $_element_ = $context["element"]; } else { $_element_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_element_, 0, array(), "array"), "html", null, true);
                    echo "\" name=\"config[";
                    if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                    echo twig_escape_filter($this->env, $_name_, "html", null, true);
                    echo "]\" value=\"";
                    if (isset($context["values"])) { $_values_ = $context["values"]; } else { $_values_ = null; }
                    if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_values_, $_name_, array(), "array"), "html", null, true);
                    echo "\" ";
                    if (isset($context["element"])) { $_element_ = $context["element"]; } else { $_element_ = null; }
                    if (((!$this->getAttribute($this->getAttribute($_element_, 1, array(), "array", false, true), "required", array(), "any", true, true)) && ((!$this->getAttribute($this->getAttribute($_element_, 1, array(), "array"), "required")) == "false"))) {
                        echo "required=\"required\"";
                    }
                    echo "/>
            </div>
            <div class=\"fix\"></div>
            ";
                }
                // line 67
                echo "    </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 71
    public function getcurrency_format($_price = null, $_currency = null)
    {
        $context = $this->env->mergeGlobals(array(
            "price" => $_price,
            "currency" => $_currency,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 72
            echo "    ";
            if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
            if (isset($context["currency"])) { $_currency_ = $context["currency"]; } else { $_currency_ = null; }
            $context["c"] = $this->getAttribute($_guest_, "currency_get", array(0 => array("code" => $_currency_)), "method");
            // line 73
            echo "    ";
            if (isset($context["price"])) { $_price_ = $context["price"]; } else { $_price_ = null; }
            $context["p"] = twig_number_filter($_price_);
            // line 74
            echo "    ";
            if (isset($context["c"])) { $_c_ = $context["c"]; } else { $_c_ = null; }
            if (($this->getAttribute($_c_, "price_format") == 1)) {
                // line 75
                echo "        ";
                if (isset($context["p"])) { $_p_ = $context["p"]; } else { $_p_ = null; }
                $context["p"] = twig_number_filter($_p_, "2", ".", "");
                // line 76
                echo "    ";
            } elseif (($this->getAttribute($_c_, "price_format") == 2)) {
                // line 77
                echo "        ";
                if (isset($context["p"])) { $_p_ = $context["p"]; } else { $_p_ = null; }
                $context["p"] = twig_number_filter($_p_, "2", ".", ",");
                // line 78
                echo "    ";
            } elseif (($this->getAttribute($_c_, "price_format") == 3)) {
                // line 79
                echo "        ";
                if (isset($context["p"])) { $_p_ = $context["p"]; } else { $_p_ = null; }
                $context["p"] = twig_number_filter($_p_, "2", ",", ".");
                // line 80
                echo "    ";
            } elseif (($this->getAttribute($_c_, "price_format") == 4)) {
                // line 81
                echo "        ";
                if (isset($context["p"])) { $_p_ = $context["p"]; } else { $_p_ = null; }
                $context["p"] = twig_number_filter($_p_, "0", "", ",");
                // line 82
                echo "    ";
            } elseif (($this->getAttribute($_c_, "price_format") == 5)) {
                // line 83
                echo "        ";
                if (isset($context["p"])) { $_p_ = $context["p"]; } else { $_p_ = null; }
                $context["p"] = twig_number_filter($_p_, 0, "", "");
                // line 84
                echo "    ";
            }
            // line 85
            echo "    ";
            if (isset($context["c"])) { $_c_ = $context["c"]; } else { $_c_ = null; }
            if (isset($context["p"])) { $_p_ = $context["p"]; } else { $_p_ = null; }
            echo twig_escape_filter($this->env, strtr($this->getAttribute($_c_, "format"), array("{{price}}" => $_p_)), "html", null, true);
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 88
    public function getcurrency($_price = null, $_currency = null)
    {
        $context = $this->env->mergeGlobals(array(
            "price" => $_price,
            "currency" => $_currency,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 89
            echo "    ";
            if (isset($context["currency"])) { $_currency_ = $context["currency"]; } else { $_currency_ = null; }
            if (($_currency_ == null)) {
                // line 90
                echo "        ";
                if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
                $context["c"] = $this->getAttribute($_guest_, "cart_get_currency");
                // line 91
                echo "    ";
            } else {
                // line 92
                echo "        ";
                if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
                if (isset($context["currency"])) { $_currency_ = $context["currency"]; } else { $_currency_ = null; }
                $context["c"] = $this->getAttribute($_guest_, "currency_get", array(0 => array("code" => $_currency_)), "method");
                // line 93
                echo "    ";
            }
            // line 94
            echo "
    ";
            // line 95
            if (isset($context["price"])) { $_price_ = $context["price"]; } else { $_price_ = null; }
            if (isset($context["c"])) { $_c_ = $context["c"]; } else { $_c_ = null; }
            $context["p"] = ($_price_ * $this->getAttribute($_c_, "conversion_rate"));
            // line 96
            echo "    
    ";
            // line 97
            if (isset($context["c"])) { $_c_ = $context["c"]; } else { $_c_ = null; }
            if (($this->getAttribute($_c_, "price_format") == 1)) {
                // line 98
                echo "        ";
                if (isset($context["p"])) { $_p_ = $context["p"]; } else { $_p_ = null; }
                $context["p"] = twig_number_filter($_p_, "2", ".", "");
                // line 99
                echo "    ";
            } elseif (($this->getAttribute($_c_, "price_format") == 2)) {
                // line 100
                echo "        ";
                if (isset($context["p"])) { $_p_ = $context["p"]; } else { $_p_ = null; }
                $context["p"] = twig_number_filter($_p_, "2", ".", ",");
                // line 101
                echo "    ";
            } elseif (($this->getAttribute($_c_, "price_format") == 3)) {
                // line 102
                echo "        ";
                if (isset($context["p"])) { $_p_ = $context["p"]; } else { $_p_ = null; }
                $context["p"] = twig_number_filter($_p_, "2", ",", ".");
                // line 103
                echo "    ";
            } elseif (($this->getAttribute($_c_, "price_format") == 4)) {
                // line 104
                echo "        ";
                if (isset($context["p"])) { $_p_ = $context["p"]; } else { $_p_ = null; }
                $context["p"] = twig_number_filter($_p_, "0", "", ",");
                // line 105
                echo "    ";
            } elseif (($this->getAttribute($_c_, "price_format") == 5)) {
                // line 106
                echo "        ";
                if (isset($context["p"])) { $_p_ = $context["p"]; } else { $_p_ = null; }
                $context["p"] = twig_number_filter($_p_, 0, "", "");
                // line 107
                echo "    ";
            }
            // line 108
            echo "    
    ";
            // line 109
            if (isset($context["c"])) { $_c_ = $context["c"]; } else { $_c_ = null; }
            if (isset($context["p"])) { $_p_ = $context["p"]; } else { $_p_ = null; }
            echo twig_escape_filter($this->env, strtr($this->getAttribute($_c_, "format"), array("{{price}}" => $_p_)), "html", null, true);
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 112
    public function getstatus_name($_status = null)
    {
        $context = $this->env->mergeGlobals(array(
            "status" => $_status,
        ));

        $blocks = array();

        ob_start();
        try {
            if (isset($context["status"])) { $_status_ = $context["status"]; } else { $_status_ = null; }
            if ($_status_) {
                if (isset($context["status"])) { $_status_ = $context["status"]; } else { $_status_ = null; }
                echo twig_escape_filter($this->env, gettext(twig_title_string_filter($this->env, strtr($_status_, array("_" => " ")))), "html", null, true);
            } else {
                echo "-";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 114
    public function getperiod_name($_period = null)
    {
        $context = $this->env->mergeGlobals(array(
            "period" => $_period,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 115
            echo "    ";
            if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
            if (isset($context["period"])) { $_period_ = $context["period"]; } else { $_period_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_guest_, "system_period_title", array(0 => array("code" => $_period_)), "method"), "html", null, true);
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 118
    public function getmarkdown_quote($_text = null)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $_text,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 119
            echo "


";
            // line 122
            if (isset($context["text"])) { $_text_ = $context["text"]; } else { $_text_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_split_filter($_text_, "
"));
            foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                // line 123
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

    // line 127
    public function getbb_editor($_selector = null)
    {
        $context = $this->env->mergeGlobals(array(
            "selector" => $_selector,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 128
            if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
            if ($this->getAttribute($_guest_, "extension_is_on", array(0 => array("mod" => "wysiwyg")), "method")) {
                // line 129
                if (isset($context["selector"])) { $_selector_ = $context["selector"]; } else { $_selector_ = null; }
                $this->env->loadTemplate("mod_wysiwyg_js.phtml")->display(array_merge($context, array("class" => trim($_selector_, ".#"))));
            } else {
                // line 131
                echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"js/markitup/skins/boxbilling/style.css\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"js/markitup/sets/markdown/style.css\" />
<script src=\"js/markitup/jquery.markitup.js\" type=\"text/javascript\"></script>
<script src=\"js/markitup/sets/markdown/set.js\" type=\"text/javascript\"></script>
<script type=\"text/javascript\" >
    \$(document).ready(function() {
        \$(\"";
                // line 137
                if (isset($context["selector"])) { $_selector_ = $context["selector"]; } else { $_selector_ = null; }
                echo twig_escape_filter($this->env, $_selector_, "html", null, true);
                echo "\").markItUp(mySettings);
    });
</script>
";
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
        return array (  761 => 137,  753 => 131,  749 => 129,  735 => 127,  716 => 123,  710 => 122,  705 => 119,  694 => 118,  678 => 115,  667 => 114,  640 => 112,  625 => 109,  622 => 108,  619 => 107,  615 => 106,  608 => 104,  605 => 103,  601 => 102,  598 => 101,  594 => 100,  591 => 99,  587 => 98,  584 => 97,  581 => 96,  577 => 95,  574 => 94,  571 => 93,  566 => 92,  559 => 90,  555 => 89,  543 => 88,  527 => 85,  520 => 83,  517 => 82,  513 => 81,  510 => 80,  499 => 77,  496 => 76,  492 => 75,  467 => 71,  428 => 63,  381 => 55,  376 => 52,  350 => 50,  345 => 49,  326 => 43,  306 => 41,  301 => 40,  296 => 39,  283 => 37,  280 => 36,  271 => 34,  259 => 33,  238 => 27,  233 => 26,  228 => 23,  219 => 22,  207 => 19,  185 => 17,  180 => 16,  169 => 15,  143 => 11,  121 => 9,  115 => 8,  93 => 6,  51 => 1,  46 => 126,  40 => 113,  37 => 111,  34 => 87,  31 => 70,  28 => 32,  25 => 21,  22 => 13,  19 => 4,  529 => 144,  524 => 84,  512 => 125,  506 => 79,  503 => 78,  500 => 122,  495 => 117,  490 => 114,  484 => 73,  479 => 72,  474 => 108,  469 => 20,  464 => 7,  459 => 151,  449 => 144,  444 => 141,  441 => 140,  434 => 135,  430 => 133,  427 => 132,  425 => 131,  420 => 128,  418 => 122,  410 => 117,  403 => 114,  401 => 113,  397 => 57,  394 => 111,  390 => 109,  388 => 108,  385 => 107,  382 => 106,  368 => 97,  365 => 96,  357 => 94,  354 => 93,  351 => 92,  336 => 90,  321 => 89,  317 => 88,  313 => 87,  310 => 86,  307 => 85,  287 => 82,  281 => 80,  265 => 78,  261 => 77,  258 => 76,  255 => 75,  239 => 73,  235 => 72,  231 => 71,  218 => 67,  183 => 53,  177 => 52,  171 => 50,  168 => 49,  163 => 47,  159 => 46,  155 => 14,  150 => 42,  129 => 37,  113 => 32,  98 => 31,  92 => 27,  86 => 25,  83 => 24,  78 => 5,  76 => 20,  70 => 18,  65 => 17,  62 => 2,  57 => 14,  55 => 13,  43 => 117,  38 => 4,  35 => 3,  32 => 2,  941 => 292,  935 => 291,  929 => 290,  923 => 289,  917 => 288,  910 => 283,  907 => 282,  904 => 281,  901 => 280,  896 => 277,  886 => 269,  877 => 265,  875 => 264,  870 => 261,  851 => 256,  841 => 255,  836 => 254,  820 => 253,  812 => 252,  792 => 251,  789 => 250,  781 => 244,  772 => 240,  770 => 239,  765 => 236,  746 => 128,  736 => 230,  731 => 229,  715 => 228,  707 => 227,  687 => 226,  684 => 225,  672 => 216,  668 => 215,  664 => 213,  661 => 212,  658 => 211,  648 => 204,  636 => 195,  624 => 186,  612 => 105,  600 => 168,  586 => 157,  575 => 156,  563 => 91,  554 => 149,  548 => 146,  544 => 144,  541 => 143,  538 => 142,  528 => 134,  519 => 131,  516 => 130,  504 => 127,  491 => 126,  488 => 74,  482 => 124,  475 => 120,  471 => 119,  462 => 113,  451 => 67,  442 => 101,  439 => 100,  422 => 97,  412 => 61,  406 => 115,  400 => 94,  393 => 90,  389 => 89,  377 => 83,  373 => 82,  367 => 78,  364 => 77,  361 => 76,  358 => 75,  346 => 69,  339 => 68,  332 => 47,  325 => 66,  318 => 65,  314 => 64,  305 => 61,  298 => 60,  291 => 83,  284 => 81,  277 => 35,  273 => 56,  264 => 53,  257 => 52,  250 => 51,  243 => 50,  236 => 49,  232 => 48,  223 => 45,  216 => 44,  209 => 43,  202 => 58,  195 => 57,  191 => 40,  181 => 37,  173 => 36,  165 => 48,  157 => 34,  149 => 33,  145 => 39,  136 => 26,  132 => 25,  128 => 24,  124 => 36,  120 => 34,  116 => 33,  111 => 18,  107 => 7,  104 => 16,  97 => 15,  94 => 14,  91 => 13,  88 => 12,  68 => 9,  60 => 15,  42 => 7,  39 => 6,  36 => 5,  30 => 1,);
    }
}
