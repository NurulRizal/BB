<?php

/* mod_invoice_gateway.phtml */
class __TwigTemplate_3442116cde524b463e61aa797d2c163a8a97dd53d393310fd5af0b9f20f7137e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
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
        // line 2
        $context["mf"] = $this->env->loadTemplate("macro_functions.phtml");
        // line 4
        $context["active_menu"] = "system";
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Gateway");
        echo " ";
        if (isset($context["gateway"])) { $_gateway_ = $context["gateway"]; } else { $_gateway_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_gateway_, "title"), "html", null, true);
    }

    // line 6
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 7
        echo "<ul>
    <li class=\"firstB\"><a href=\"";
        // line 8
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("/");
        echo "\">";
        echo gettext("Home");
        echo "</a></li>
    <li><a href=\"";
        // line 9
        echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoice/gateways");
        echo "\">";
        echo gettext("Payment gateways");
        echo "</a></li>
    <li class=\"lastB\">";
        // line 10
        if (isset($context["gateway"])) { $_gateway_ = $context["gateway"]; } else { $_gateway_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_gateway_, "title"), "html", null, true);
        echo "</li>
</ul>
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "
<div class=\"widget\">
    <div class=\"head\">
        <h5>";
        // line 18
        echo gettext("Payment gateway configuration");
        echo " ";
        if (isset($context["gateway"])) { $_gateway_ = $context["gateway"]; } else { $_gateway_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_gateway_, "title"), "html", null, true);
        echo "</h5>
    </div>

    <div class=\"help\">
        <h5>";
        // line 22
        if (isset($context["gateway"])) { $_gateway_ = $context["gateway"]; } else { $_gateway_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_gateway_, "title"), "html", null, true);
        echo "</h5>
        ";
        // line 23
        if (isset($context["gateway"])) { $_gateway_ = $context["gateway"]; } else { $_gateway_ = null; }
        echo $this->getAttribute($_gateway_, "description");
        echo "
    </div>

    <form method=\"post\" action=\"";
        // line 26
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/invoice/gateway_update");
        echo "\" class=\"mainForm save api-form\" data-api-msg=\"Gateway updated\">
    <fieldset>
        <div class=\"rowElem noborder\">
            <label class=\"topLabel\">";
        // line 29
        echo gettext("Payment gateway title");
        echo ":</label>
            <div class=\"formBottom\">
                <input type=\"text\" name=\"title\" value=\"";
        // line 31
        if (isset($context["gateway"])) { $_gateway_ = $context["gateway"]; } else { $_gateway_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_gateway_, "title"), "html", null, true);
        echo "\" />
            </div>
            <div class=\"fix\"></div>
        </div>

        ";
        // line 37
        echo "        ";
        if (isset($context["mf"])) { $_mf_ = $context["mf"]; } else { $_mf_ = null; }
        if (isset($context["gateway"])) { $_gateway_ = $context["gateway"]; } else { $_gateway_ = null; }
        echo $_mf_->getbuild_form($this->getAttribute($_gateway_, "form"), $this->getAttribute($_gateway_, "config"));
        echo "

        <div class=\"rowElem\">
            <label class=\"topLabel\">";
        // line 40
        echo gettext("Select which currencies can accept this payment gateway (Select none to allow all currencies)");
        echo "</label>
            <div class=\"formBottom\">
                ";
        // line 42
        if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
        $context["currencies"] = $this->getAttribute($_guest_, "currency_get_pairs");
        // line 43
        echo "                <select name=\"accepted_currencies[]\" multiple=\"multiple\" class=\"multiple\" size=\"";
        if (isset($context["currencies"])) { $_currencies_ = $context["currencies"]; } else { $_currencies_ = null; }
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $_currencies_), "html", null, true);
        echo "\">
                    ";
        // line 44
        if (isset($context["currencies"])) { $_currencies_ = $context["currencies"]; } else { $_currencies_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_currencies_);
        foreach ($context['_seq'] as $context["id"] => $context["currency"]) {
            // line 45
            echo "                    <option value=\"";
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            echo twig_escape_filter($this->env, $_id_, "html", null, true);
            echo "\" ";
            if (isset($context["id"])) { $_id_ = $context["id"]; } else { $_id_ = null; }
            if (isset($context["gateway"])) { $_gateway_ = $context["gateway"]; } else { $_gateway_ = null; }
            if (twig_in_filter($_id_, $this->getAttribute($_gateway_, "accepted_currencies"))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            if (isset($context["currency"])) { $_currency_ = $context["currency"]; } else { $_currency_ = null; }
            echo twig_escape_filter($this->env, $_currency_, "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                </select>
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>";
        // line 53
        echo gettext("Enabled");
        echo ":</label>
            <div class=\"formRight\">
                <input type=\"radio\" name=\"enabled\" value=\"1\"";
        // line 55
        if (isset($context["gateway"])) { $_gateway_ = $context["gateway"]; } else { $_gateway_ = null; }
        if ($this->getAttribute($_gateway_, "enabled")) {
            echo " checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("Yes");
        echo "</label>
                <input type=\"radio\" name=\"enabled\" value=\"0\"";
        // line 56
        if (isset($context["gateway"])) { $_gateway_ = $context["gateway"]; } else { $_gateway_ = null; }
        if ((!$this->getAttribute($_gateway_, "enabled"))) {
            echo " checked=\"checked\"";
        }
        echo " /><label>";
        echo gettext("No");
        echo "</label>
            </div>
            <div class=\"fix\"></div>
        </div>

        ";
        // line 61
        if (isset($context["gateway"])) { $_gateway_ = $context["gateway"]; } else { $_gateway_ = null; }
        if ($this->getAttribute($_gateway_, "supports_one_time_payments")) {
            // line 62
            echo "        <div class=\"rowElem\">
            <label>";
            // line 63
            echo gettext("Allow one time payments");
            echo ":</label>
            <div class=\"formRight\">
                <input type=\"radio\" name=\"allow_single\" value=\"1\"";
            // line 65
            if (isset($context["gateway"])) { $_gateway_ = $context["gateway"]; } else { $_gateway_ = null; }
            if ($this->getAttribute($_gateway_, "allow_single")) {
                echo " checked=\"checked\"";
            }
            echo "/><label>";
            echo gettext("Yes");
            echo "</label>
                <input type=\"radio\" name=\"allow_single\" value=\"0\"";
            // line 66
            if (isset($context["gateway"])) { $_gateway_ = $context["gateway"]; } else { $_gateway_ = null; }
            if ((!$this->getAttribute($_gateway_, "allow_single"))) {
                echo " checked=\"checked\"";
            }
            echo " /><label>";
            echo gettext("No");
            echo "</label>
            </div>
            <div class=\"fix\"></div>
        </div>
        ";
        } else {
            // line 71
            echo "        <input type=\"hidden\" name=\"allow_single\" value=\"0\" />
        ";
        }
        // line 73
        echo "        
        ";
        // line 74
        if (isset($context["gateway"])) { $_gateway_ = $context["gateway"]; } else { $_gateway_ = null; }
        if ($this->getAttribute($_gateway_, "supports_subscriptions")) {
            // line 75
            echo "        <div class=\"rowElem\">
            <label>";
            // line 76
            echo gettext("Allow subscription payments");
            echo ":</label>
            <div class=\"formRight\">
                <input type=\"radio\" name=\"allow_recurrent\" value=\"1\"";
            // line 78
            if (isset($context["gateway"])) { $_gateway_ = $context["gateway"]; } else { $_gateway_ = null; }
            if ($this->getAttribute($_gateway_, "allow_recurrent")) {
                echo " checked=\"checked\"";
            }
            echo "/><label>";
            echo gettext("Yes");
            echo "</label>
                <input type=\"radio\" name=\"allow_recurrent\" value=\"0\"";
            // line 79
            if (isset($context["gateway"])) { $_gateway_ = $context["gateway"]; } else { $_gateway_ = null; }
            if ((!$this->getAttribute($_gateway_, "allow_recurrent"))) {
                echo " checked=\"checked\"";
            }
            echo " /><label>";
            echo gettext("No");
            echo "</label>
            </div>
            <div class=\"fix\"></div>
        </div>
        ";
        } else {
            // line 84
            echo "        <input type=\"hidden\" name=\"allow_recurrent\" value=\"0\" />
        ";
        }
        // line 86
        echo "
        <div class=\"rowElem\">
            <label>";
        // line 88
        echo gettext("Enable test mode");
        echo ":</label>
            <div class=\"formRight\">
                <input type=\"radio\" name=\"test_mode\" value=\"1\"";
        // line 90
        if (isset($context["gateway"])) { $_gateway_ = $context["gateway"]; } else { $_gateway_ = null; }
        if ($this->getAttribute($_gateway_, "test_mode")) {
            echo " checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("Yes");
        echo "</label>
                <input type=\"radio\" name=\"test_mode\" value=\"0\"";
        // line 91
        if (isset($context["gateway"])) { $_gateway_ = $context["gateway"]; } else { $_gateway_ = null; }
        if ((!$this->getAttribute($_gateway_, "test_mode"))) {
            echo " checked=\"checked\"";
        }
        echo " /><label>";
        echo gettext("No");
        echo "</label>
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>";
        // line 97
        echo gettext("IPN Callback URL");
        echo ":</label>
            <div class=\"formRight\">
                <input type=\"text\" value=\"";
        // line 99
        if (isset($context["gateway"])) { $_gateway_ = $context["gateway"]; } else { $_gateway_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_gateway_, "callback"), "html", null, true);
        echo "\" readonly=\"readonly\"/>
            </div>
            <div class=\"fix\"></div>
        </div>

        <input type=\"submit\" value=\"";
        // line 104
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
        <input type=\"hidden\" name=\"id\" value=\"";
        // line 105
        if (isset($context["gateway"])) { $_gateway_ = $context["gateway"]; } else { $_gateway_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_gateway_, "id"), "html", null, true);
        echo "\" />
    </fieldset>
    </form>
</div>

";
    }

    public function getTemplateName()
    {
        return "mod_invoice_gateway.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 105,  322 => 104,  313 => 99,  308 => 97,  294 => 91,  285 => 90,  280 => 88,  276 => 86,  272 => 84,  259 => 79,  250 => 78,  245 => 76,  242 => 75,  239 => 74,  236 => 73,  232 => 71,  219 => 66,  210 => 65,  205 => 63,  202 => 62,  199 => 61,  186 => 56,  177 => 55,  172 => 53,  164 => 47,  145 => 45,  140 => 44,  134 => 43,  131 => 42,  126 => 40,  117 => 37,  108 => 31,  103 => 29,  97 => 26,  90 => 23,  85 => 22,  75 => 18,  70 => 15,  67 => 14,  59 => 10,  53 => 9,  47 => 8,  44 => 7,  41 => 6,  32 => 3,  27 => 4,  25 => 2,);
    }
}
