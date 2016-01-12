<?php

/* partial_menu_top.phtml */
class __TwigTemplate_4b55d4ca45b416193cfd8aa8018dcbc8ec5e16793a30d8a0de86c3da1b0d2c94 extends Twig_Template
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
        echo "                        <ul class=\"menu_body\">
                            ";
        // line 2
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if ($this->getAttribute($_admin_, "system_is_allowed", array(0 => array("mod" => "order")), "method")) {
            // line 3
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("order#tab-new");
            echo "\" title=\"\">";
            echo gettext("Order");
            echo "</a></li>
                            ";
        }
        // line 5
        echo "                            
                            ";
        // line 6
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if ($this->getAttribute($_admin_, "system_is_allowed", array(0 => array("mod" => "invoice")), "method")) {
            // line 7
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("invoice#tab-new");
            echo "\" title=\"\">";
            echo gettext("Invoice");
            echo "</a></li>
                            ";
        }
        // line 9
        echo "                            
                            ";
        // line 10
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if ($this->getAttribute($_admin_, "system_is_allowed", array(0 => array("mod" => "client")), "method")) {
            // line 11
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("client#tab-new");
            echo "\" title=\"\">";
            echo gettext("Client");
            echo "</a></li>
                            ";
        }
        // line 13
        echo "                            
                            ";
        // line 14
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if ($this->getAttribute($_admin_, "system_is_allowed", array(0 => array("mod" => "product")), "method")) {
            // line 15
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("product#tab-new");
            echo "\" title=\"\">";
            echo gettext("Product");
            echo "</a></li>
                            ";
        }
        // line 17
        echo "                            
                            ";
        // line 18
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if ($this->getAttribute($_admin_, "system_is_allowed", array(0 => array("mod" => "support")), "method")) {
            // line 19
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("support#tab-new");
            echo "\" title=\"\">";
            echo gettext("Support ticket");
            echo "</a></li>
                            ";
        }
        // line 21
        echo "                            
                            ";
        // line 22
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if ($this->getAttribute($_admin_, "system_is_allowed", array(0 => array("mod" => "staff")), "method")) {
            // line 23
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("extension/settings/staff#tab-new");
            echo "\" title=\"\">";
            echo gettext("Staff member");
            echo "</a></li>
                            ";
        }
        // line 25
        echo "                            
                            ";
        // line 26
        if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if (($this->getAttribute($_guest_, "extension_is_on", array(0 => array("mod" => "news")), "method") && $this->getAttribute($_admin_, "system_is_allowed", array(0 => array("mod" => "news")), "method"))) {
            // line 27
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("news#tab-new");
            echo "\" title=\"\">";
            echo gettext("Announcement");
            echo "</a></li>
                            ";
        }
        // line 29
        echo "                            
                            ";
        // line 30
        if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if (($this->getAttribute($_guest_, "extension_is_on", array(0 => array("mod" => "forum")), "method") && $this->getAttribute($_admin_, "system_is_allowed", array(0 => array("mod" => "forum")), "method"))) {
            // line 31
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('bb')->twig_bb_admin_link_filter("forum#tab-new");
            echo "\" title=\"\">";
            echo gettext("Forum topic");
            echo "</a></li>
                            ";
        }
        // line 33
        echo "                        </ul>";
    }

    public function getTemplateName()
    {
        return "partial_menu_top.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 33,  125 => 31,  118 => 29,  110 => 27,  106 => 26,  103 => 25,  95 => 23,  89 => 21,  81 => 19,  75 => 17,  67 => 15,  64 => 14,  61 => 13,  53 => 11,  50 => 10,  47 => 9,  33 => 5,  761 => 137,  753 => 131,  749 => 129,  735 => 127,  716 => 123,  710 => 122,  705 => 119,  694 => 118,  678 => 115,  667 => 114,  640 => 112,  625 => 109,  622 => 108,  619 => 107,  615 => 106,  608 => 104,  605 => 103,  601 => 102,  598 => 101,  594 => 100,  591 => 99,  587 => 98,  584 => 97,  581 => 96,  577 => 95,  574 => 94,  571 => 93,  566 => 92,  559 => 90,  555 => 89,  543 => 88,  527 => 85,  520 => 83,  517 => 82,  513 => 81,  510 => 80,  499 => 77,  496 => 76,  492 => 75,  467 => 71,  428 => 63,  381 => 55,  376 => 52,  350 => 50,  345 => 49,  326 => 43,  306 => 41,  301 => 40,  296 => 39,  283 => 37,  280 => 36,  271 => 34,  259 => 33,  238 => 27,  233 => 26,  228 => 23,  219 => 22,  207 => 19,  185 => 17,  180 => 16,  169 => 15,  143 => 11,  121 => 30,  115 => 8,  93 => 6,  51 => 1,  46 => 126,  40 => 113,  37 => 111,  34 => 87,  31 => 70,  28 => 32,  25 => 3,  22 => 2,  19 => 1,  529 => 144,  524 => 84,  512 => 125,  506 => 79,  503 => 78,  500 => 122,  495 => 117,  490 => 114,  484 => 73,  479 => 72,  474 => 108,  469 => 20,  464 => 7,  459 => 151,  449 => 144,  444 => 141,  441 => 140,  434 => 135,  430 => 133,  427 => 132,  425 => 131,  420 => 128,  418 => 122,  410 => 117,  403 => 114,  401 => 113,  397 => 57,  394 => 111,  390 => 109,  388 => 108,  385 => 107,  382 => 106,  368 => 97,  365 => 96,  357 => 94,  354 => 93,  351 => 92,  336 => 90,  321 => 89,  317 => 88,  313 => 87,  310 => 86,  307 => 85,  287 => 82,  281 => 80,  265 => 78,  261 => 77,  258 => 76,  255 => 75,  239 => 73,  235 => 72,  231 => 71,  218 => 67,  183 => 53,  177 => 52,  171 => 50,  168 => 49,  163 => 47,  159 => 46,  155 => 14,  150 => 42,  129 => 37,  113 => 32,  98 => 31,  92 => 22,  86 => 25,  83 => 24,  78 => 18,  76 => 20,  70 => 18,  65 => 17,  62 => 2,  57 => 14,  55 => 13,  43 => 117,  38 => 4,  35 => 3,  32 => 2,  941 => 292,  935 => 291,  929 => 290,  923 => 289,  917 => 288,  910 => 283,  907 => 282,  904 => 281,  901 => 280,  896 => 277,  886 => 269,  877 => 265,  875 => 264,  870 => 261,  851 => 256,  841 => 255,  836 => 254,  820 => 253,  812 => 252,  792 => 251,  789 => 250,  781 => 244,  772 => 240,  770 => 239,  765 => 236,  746 => 128,  736 => 230,  731 => 229,  715 => 228,  707 => 227,  687 => 226,  684 => 225,  672 => 216,  668 => 215,  664 => 213,  661 => 212,  658 => 211,  648 => 204,  636 => 195,  624 => 186,  612 => 105,  600 => 168,  586 => 157,  575 => 156,  563 => 91,  554 => 149,  548 => 146,  544 => 144,  541 => 143,  538 => 142,  528 => 134,  519 => 131,  516 => 130,  504 => 127,  491 => 126,  488 => 74,  482 => 124,  475 => 120,  471 => 119,  462 => 113,  451 => 67,  442 => 101,  439 => 100,  422 => 97,  412 => 61,  406 => 115,  400 => 94,  393 => 90,  389 => 89,  377 => 83,  373 => 82,  367 => 78,  364 => 77,  361 => 76,  358 => 75,  346 => 69,  339 => 68,  332 => 47,  325 => 66,  318 => 65,  314 => 64,  305 => 61,  298 => 60,  291 => 83,  284 => 81,  277 => 35,  273 => 56,  264 => 53,  257 => 52,  250 => 51,  243 => 50,  236 => 49,  232 => 48,  223 => 45,  216 => 44,  209 => 43,  202 => 58,  195 => 57,  191 => 40,  181 => 37,  173 => 36,  165 => 48,  157 => 34,  149 => 33,  145 => 39,  136 => 26,  132 => 25,  128 => 24,  124 => 36,  120 => 34,  116 => 33,  111 => 18,  107 => 7,  104 => 16,  97 => 15,  94 => 14,  91 => 13,  88 => 12,  68 => 9,  60 => 15,  42 => 7,  39 => 7,  36 => 6,  30 => 1,);
    }
}
