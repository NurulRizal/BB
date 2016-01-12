<?php

/* mod_orderbutton_currency.phtml */
class __TwigTemplate_aca22f52137ca7e86bc545dde61ab86438ddf6ab401fd3195263a60d779a765e extends Twig_Template
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
        $context["currencies"] = $this->getAttribute($_guest_, "currency_get_pairs");
        // line 2
        if (isset($context["currencies"])) { $_currencies_ = $context["currencies"]; } else { $_currencies_ = null; }
        if ((twig_length_filter($this->env, $_currencies_) > 1)) {
            // line 3
            echo "        <select name=\"currency\" class=\"currency_selector input-mini pull-right\">
            ";
            // line 4
            if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
            $context["selected"] = $this->getAttribute($this->getAttribute($_guest_, "cart_get_currency"), "code");
            // line 5
            echo "            ";
            if (isset($context["currencies"])) { $_currencies_ = $context["currencies"]; } else { $_currencies_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_currencies_);
            foreach ($context['_seq'] as $context["code"] => $context["title"]) {
                // line 6
                echo "            <option value=\"";
                if (isset($context["code"])) { $_code_ = $context["code"]; } else { $_code_ = null; }
                echo twig_escape_filter($this->env, $_code_, "html", null, true);
                echo "\" class=\"currency_";
                if (isset($context["code"])) { $_code_ = $context["code"]; } else { $_code_ = null; }
                echo twig_escape_filter($this->env, $_code_, "html", null, true);
                echo "\"";
                if (isset($context["code"])) { $_code_ = $context["code"]; } else { $_code_ = null; }
                if (isset($context["selected"])) { $_selected_ = $context["selected"]; } else { $_selected_ = null; }
                if (($_code_ == $_selected_)) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                if (isset($context["code"])) { $_code_ = $context["code"]; } else { $_code_ = null; }
                echo twig_escape_filter($this->env, $_code_, "html", null, true);
                echo " - ";
                if (isset($context["title"])) { $_title_ = $context["title"]; } else { $_title_ = null; }
                echo twig_escape_filter($this->env, $_title_, "html", null, true);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['title'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "        </select>
";
        }
    }

    public function getTemplateName()
    {
        return "mod_orderbutton_currency.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  631 => 212,  625 => 209,  613 => 200,  606 => 195,  591 => 184,  585 => 182,  582 => 181,  578 => 179,  574 => 177,  560 => 176,  551 => 173,  540 => 172,  534 => 171,  529 => 170,  511 => 169,  508 => 168,  503 => 167,  499 => 166,  487 => 159,  483 => 158,  480 => 157,  473 => 154,  466 => 153,  463 => 152,  458 => 151,  454 => 150,  450 => 149,  448 => 148,  445 => 147,  438 => 144,  434 => 143,  427 => 140,  423 => 139,  420 => 138,  417 => 137,  409 => 131,  404 => 120,  398 => 118,  390 => 116,  387 => 115,  374 => 114,  364 => 110,  361 => 109,  355 => 107,  352 => 106,  345 => 101,  339 => 100,  335 => 98,  328 => 96,  322 => 94,  316 => 93,  313 => 92,  305 => 90,  302 => 89,  296 => 87,  290 => 83,  285 => 80,  279 => 79,  273 => 78,  270 => 77,  266 => 75,  259 => 73,  256 => 72,  250 => 71,  243 => 69,  238 => 68,  232 => 67,  229 => 66,  223 => 65,  217 => 64,  210 => 62,  205 => 61,  199 => 60,  193 => 59,  175 => 53,  160 => 50,  154 => 47,  149 => 46,  145 => 45,  129 => 39,  126 => 38,  113 => 34,  107 => 33,  104 => 32,  100 => 30,  93 => 28,  90 => 27,  80 => 24,  77 => 23,  68 => 20,  63 => 19,  51 => 13,  37 => 6,  34 => 6,  26 => 4,  203 => 53,  195 => 48,  190 => 58,  186 => 45,  183 => 55,  180 => 54,  173 => 41,  170 => 40,  166 => 39,  153 => 36,  147 => 35,  141 => 43,  135 => 32,  131 => 30,  118 => 26,  108 => 23,  91 => 21,  87 => 26,  79 => 18,  75 => 17,  72 => 22,  61 => 13,  56 => 11,  44 => 9,  35 => 7,  32 => 6,  23 => 2,  69 => 14,  55 => 14,  52 => 10,  47 => 9,  28 => 4,  25 => 3,  22 => 2,  299 => 88,  287 => 170,  262 => 148,  244 => 138,  240 => 137,  221 => 121,  194 => 97,  177 => 84,  171 => 52,  165 => 51,  162 => 38,  158 => 75,  156 => 48,  144 => 65,  138 => 42,  136 => 60,  133 => 59,  130 => 58,  127 => 57,  124 => 28,  121 => 55,  119 => 36,  116 => 53,  114 => 24,  109 => 49,  82 => 19,  78 => 19,  74 => 18,  70 => 17,  66 => 14,  62 => 8,  58 => 12,  53 => 13,  49 => 12,  42 => 8,  38 => 6,  33 => 4,  30 => 3,  27 => 4,  19 => 1,);
    }
}
