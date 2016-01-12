<?php

/* mod_orderbutton_choose_product.phtml */
class __TwigTemplate_b27a80cffc3c523b180f14845dcf99d9608957081d747a5048bcfe4a34d6b6c5 extends Twig_Template
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
        echo "<div class=\"accordion-group\" id=\"choose-product\">
    ";
        // line 2
        if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
        $context["products"] = $this->getAttribute($_guest_, "product_get_list");
        // line 3
        echo "    <div class=\"accordion-heading\">
        <a class=\"accordion-toggle\" href=\"#products\" data-parent=\"#accordion1\" data-toggle=\"collapse\"><span class=\"awe-list\"></span> ";
        // line 4
        echo gettext("Select Product");
        echo "  <span class=\"label label-info pull-right\">";
        if (isset($context["products"])) { $_products_ = $context["products"]; } else { $_products_ = null; }
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($_products_, "list")), "html", null, true);
        echo " ";
        echo gettext("Items");
        echo "</span></a>
    </div>
    <div id=\"products\" class=\"accordion-body collapse ";
        // line 6
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        if ((((!$this->getAttribute($_request_, "order")) && (!$this->getAttribute($_request_, "cart"))) && (!$this->getAttribute($_request_, "checkout")))) {
            echo "in";
        }
        echo "\" >
        <div class=\"accordion-inner\">
            <ul class=\"nav nav-list\">
                ";
        // line 9
        if (isset($context["products"])) { $_products_ = $context["products"]; } else { $_products_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_products_, "list"));
        foreach ($context['_seq'] as $context["i"] => $context["product"]) {
            // line 10
            echo "                <li>
                    <a href=\"";
            // line 11
            if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("orderbutton", array("order" => $this->getAttribute($_product_, "id"), "show_custom_form_values" => $this->getAttribute($_request_, "show_custom_form_values")));
            echo "\">";
            if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_product_, "title"), "html", null, true);
            echo " <span class=\"awe-arrow-right pull-right\"><span></a>
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "            </ul>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "mod_orderbutton_choose_product.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 14,  55 => 11,  52 => 10,  47 => 9,  28 => 4,  25 => 3,  22 => 2,  299 => 179,  287 => 170,  262 => 148,  244 => 138,  240 => 137,  221 => 121,  194 => 97,  177 => 84,  171 => 80,  165 => 77,  162 => 76,  158 => 75,  156 => 74,  144 => 65,  138 => 61,  136 => 60,  133 => 59,  130 => 58,  127 => 57,  124 => 56,  121 => 55,  119 => 54,  116 => 53,  114 => 52,  109 => 49,  82 => 20,  78 => 19,  74 => 18,  70 => 17,  66 => 16,  62 => 15,  58 => 14,  53 => 13,  49 => 12,  42 => 8,  38 => 6,  33 => 4,  30 => 3,  27 => 2,  19 => 1,);
    }
}
