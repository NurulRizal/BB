<?php

/* mod_orderbutton_product_configuration.phtml */
class __TwigTemplate_594cf7f0f147f376542d0aeab5260019fa938deb8ecae547140be65c86e41363 extends Twig_Template
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
        if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
        $context["product"] = (($this->getAttribute($_request_, "order")) ? ($this->getAttribute($_guest_, "product_get", array(0 => array("id" => $this->getAttribute($_request_, "order"))), "method")) : (null));
        // line 2
        echo "<div class=\"accordion-group\" id=\"product-configuration\">
    <div class=\"accordion-heading\">
        <a class=\"accordion-toggle\" href=\"#order\" data-parent=\"#accordion1\" data-toggle=\"collapse\"><span class=\"awe-cog\"></span> ";
        // line 4
        echo gettext("Product Configuration");
        echo "</a>
    </div>
    ";
        // line 6
        if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
        if ($_product_) {
            // line 7
            echo "    <div id=\"order\" class=\"accordion-body collapse ";
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            if ($this->getAttribute($_request_, "order")) {
                echo "in";
            }
            echo "\">
        <div class=\"accordion-inner\">
            <form method=\"post\" style=\"background:none;\" class=\"form-";
            // line 9
            if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
            if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
            echo twig_escape_filter($this->env, (($this->getAttribute($_product_, "form_id")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($_guest_, "formbuilder_get", array(0 => array("id" => $this->getAttribute($_product_, "form_id"))), "method"), "style"), "type")) : (0)), "html", null, true);
            echo "\" action=\"";
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/order");
            echo "/";
            if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_product_, "slug"), "html", null, true);
            echo "\" id=\"add-to-cart\" onsubmit=\"return false;\">

            ";
            // line 11
            ob_start();
            // line 12
            echo "            <div class=\"well\">
                <strong>";
            // line 13
            if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_product_, "title"), "html", null, true);
            echo "</strong>
                ";
            // line 14
            if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
            echo twig_bbmd_filter($this->env, $this->getAttribute($_product_, "description"));
            echo "

                ";
            // line 16
            if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
            if (($this->getAttribute($this->getAttribute($_product_, "pricing"), "type") == "recurrent")) {
                // line 17
                echo "                ";
                if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
                $context["periods"] = $this->getAttribute($_guest_, "system_periods");
                // line 18
                echo "                <select name=\"period\" id=\"period-selector\">
                    ";
                // line 19
                if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_product_, "pricing"), "recurrent"));
                foreach ($context['_seq'] as $context["code"] => $context["prices"]) {
                    // line 20
                    echo "                    ";
                    if (isset($context["prices"])) { $_prices_ = $context["prices"]; } else { $_prices_ = null; }
                    if ($this->getAttribute($_prices_, "enabled")) {
                        // line 21
                        echo "                    <option value=\"";
                        if (isset($context["code"])) { $_code_ = $context["code"]; } else { $_code_ = null; }
                        echo twig_escape_filter($this->env, $_code_, "html", null, true);
                        echo "\" data-bb-price=\"";
                        if (isset($context["prices"])) { $_prices_ = $context["prices"]; } else { $_prices_ = null; }
                        echo twig_money_convert($this->env, $this->getAttribute($_prices_, "price"));
                        echo "\" name=\"period\">";
                        if (isset($context["periods"])) { $_periods_ = $context["periods"]; } else { $_periods_ = null; }
                        if (isset($context["code"])) { $_code_ = $context["code"]; } else { $_code_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_periods_, $_code_, array(), "array"), "html", null, true);
                        echo " - ";
                        if (isset($context["prices"])) { $_prices_ = $context["prices"]; } else { $_prices_ = null; }
                        echo twig_money_convert($this->env, $this->getAttribute($_prices_, "price"));
                        echo "</option>
                    ";
                    }
                    // line 23
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['code'], $context['prices'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "                </select>
                ";
            } elseif (($this->getAttribute($this->getAttribute($_product_, "pricing"), "type") == "free")) {
                // line 26
                echo "                <span class=\"label label-info\">";
                echo gettext("FREE");
                echo "</span>
                ";
            } else {
                // line 28
                echo "                <span class=\"label label-info\">";
                if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                echo twig_money_convert($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($_product_, "pricing"), "once"), "price"));
                echo "</span>
                ";
            }
            // line 30
            echo "            </div>
            ";
            $context["product_details"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 32
            echo "
            ";
            // line 33
            if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
            $context["tpl"] = (("mod_service" . $this->getAttribute($_product_, "type")) . "_order_form.phtml");
            // line 34
            echo "            ";
            if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
            if (isset($context["tpl"])) { $_tpl_ = $context["tpl"]; } else { $_tpl_ = null; }
            if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
            if ($this->getAttribute($_guest_, "system_template_exists", array(0 => array("file" => $_tpl_)), "method")) {
                // line 35
                echo "                ";
                if (isset($context["tpl"])) { $_tpl_ = $context["tpl"]; } else { $_tpl_ = null; }
                if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                $template = $this->env->resolveTemplate($_tpl_);
                $template->display(array_merge($context, $_product_));
                // line 36
                echo "            ";
            } elseif (($this->getAttribute($_product_, "form_id") && $this->getAttribute($_guest_, "extension_is_on", array(0 => array("mod" => "formbuilder")), "method"))) {
                // line 37
                echo "                ";
                if (isset($context["product_details"])) { $_product_details_ = $context["product_details"]; } else { $_product_details_ = null; }
                echo twig_escape_filter($this->env, $_product_details_, "html", null, true);
                echo "
                ";
                // line 38
                if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
                if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                $context["form"] = $this->getAttribute($_guest_, "formbuilder_get", array(0 => array("id" => $this->getAttribute($_product_, "form_id"))), "method");
                // line 39
                echo "                ";
                if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
                $this->env->loadTemplate("mod_formbuilder_build.phtml")->display(array_merge($context, $_product_));
                // line 40
                echo "            ";
            } else {
                // line 41
                echo "                ";
                if (isset($context["product_details"])) { $_product_details_ = $context["product_details"]; } else { $_product_details_ = null; }
                echo twig_escape_filter($this->env, $_product_details_, "html", null, true);
                echo "
            ";
            }
            // line 43
            echo "
            ";
            // line 44
            if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
            $this->env->loadTemplate("mod_orderbutton_addons.phtml")->display(array_merge($context, $_product_));
            // line 45
            echo "
            <input type=\"hidden\" name=\"multiple\" value=\"1\" />
            <input type=\"hidden\" name=\"id\" value=\"";
            // line 47
            if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_product_, "id"), "html", null, true);
            echo "\" />
               <button type=\"submit\" class=\"btn btn-primary\">";
            // line 48
            echo gettext("Order");
            echo "</button>
        </div>
        </form>
    </div>
    ";
        }
        // line 53
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "mod_orderbutton_product_configuration.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 53,  195 => 48,  190 => 47,  186 => 45,  183 => 44,  180 => 43,  173 => 41,  170 => 40,  166 => 39,  153 => 36,  147 => 35,  141 => 34,  135 => 32,  131 => 30,  118 => 26,  108 => 23,  91 => 21,  87 => 20,  79 => 18,  75 => 17,  72 => 16,  61 => 13,  56 => 11,  44 => 9,  35 => 7,  32 => 6,  23 => 2,  69 => 14,  55 => 11,  52 => 10,  47 => 9,  28 => 4,  25 => 3,  22 => 2,  299 => 179,  287 => 170,  262 => 148,  244 => 138,  240 => 137,  221 => 121,  194 => 97,  177 => 84,  171 => 80,  165 => 77,  162 => 38,  158 => 75,  156 => 37,  144 => 65,  138 => 33,  136 => 60,  133 => 59,  130 => 58,  127 => 57,  124 => 28,  121 => 55,  119 => 54,  116 => 53,  114 => 24,  109 => 49,  82 => 19,  78 => 19,  74 => 18,  70 => 17,  66 => 14,  62 => 15,  58 => 12,  53 => 13,  49 => 12,  42 => 8,  38 => 6,  33 => 4,  30 => 3,  27 => 4,  19 => 1,);
    }
}
