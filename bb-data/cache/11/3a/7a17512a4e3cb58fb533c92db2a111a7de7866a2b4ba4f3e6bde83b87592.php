<?php

/* partial_menu.phtml */
class __TwigTemplate_113a7a17512a4e3cb58fb533c92db2a111a7de7866a2b4ba4f3e6bde83b87592 extends Twig_Template
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
        echo "<ul id=\"menu\">
";
        // line 2
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
        $context["navigation"] = $this->getAttribute($_admin_, "extension_get_navigation", array(0 => array("url" => $this->getAttribute($_guest_, "system_current_url"))), "method");
        // line 3
        if (isset($context["navigation"])) { $_navigation_ = $context["navigation"]; } else { $_navigation_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_navigation_);
        foreach ($context['_seq'] as $context["location"] => $context["group"]) {
            // line 4
            echo "    ";
            if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
            if ($this->getAttribute($_group_, "subpages")) {
                // line 5
                echo "        <li class=\"";
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_group_, "class"), "html", null, true);
                echo "\" data-nav-index=\"";
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_group_, "index"), "html", null, true);
                echo "\" data-nav-location=\"";
                if (isset($context["location"])) { $_location_ = $context["location"]; } else { $_location_ = null; }
                echo twig_escape_filter($this->env, $_location_, "html", null, true);
                echo "\">
            <a class=\"exp corner\"";
                // line 6
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                if (isset($context["active_menu"])) { $_active_menu_ = $context["active_menu"]; } else { $_active_menu_ = null; }
                if (isset($context["location"])) { $_location_ = $context["location"]; } else { $_location_ = null; }
                if (($this->getAttribute($_group_, "active") || ($_active_menu_ == $_location_))) {
                    echo " id=\"current\"";
                }
                echo " href=\"#\">
                <span><i class=\"";
                // line 7
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_group_, "sprite_class"), "html", null, true);
                echo "\"></i>";
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                echo twig_escape_filter($this->env, gettext($this->getAttribute($_group_, "label")), "html", null, true);
                echo "</span>
            </a>
            <ul class=\"sub\" style=\"display: none;\">
            ";
                // line 10
                if (isset($context["group"])) { $_group_ = $context["group"]; } else { $_group_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_group_, "subpages"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["subpage"]) {
                    // line 11
                    echo "                <li class=\"";
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    if ($this->getAttribute($_loop_, "last")) {
                        echo "last";
                    }
                    if (isset($context["subpage"])) { $_subpage_ = $context["subpage"]; } else { $_subpage_ = null; }
                    if ($this->getAttribute($_subpage_, "active")) {
                        echo " active";
                    }
                    echo "\" data-nav-index=\"";
                    if (isset($context["subpage"])) { $_subpage_ = $context["subpage"]; } else { $_subpage_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_subpage_, "index"), "html", null, true);
                    echo "\">
                    <a class=\"";
                    // line 12
                    if (isset($context["subpage"])) { $_subpage_ = $context["subpage"]; } else { $_subpage_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_subpage_, "class"), "html", null, true);
                    echo "\" href=\"";
                    if (isset($context["subpage"])) { $_subpage_ = $context["subpage"]; } else { $_subpage_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_subpage_, "uri"), "html", null, true);
                    echo "\">";
                    if (isset($context["subpage"])) { $_subpage_ = $context["subpage"]; } else { $_subpage_ = null; }
                    echo twig_escape_filter($this->env, gettext($this->getAttribute($_subpage_, "label")), "html", null, true);
                    echo "</a>
                </li>
            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subpage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 15
                echo "            </ul>
        </li>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['location'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "partial_menu.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 15,  99 => 12,  84 => 11,  66 => 10,  56 => 7,  26 => 3,  133 => 33,  125 => 31,  118 => 29,  110 => 27,  106 => 26,  103 => 25,  95 => 23,  89 => 21,  81 => 19,  75 => 17,  67 => 15,  64 => 14,  61 => 13,  53 => 11,  50 => 10,  47 => 6,  33 => 5,  761 => 137,  753 => 131,  749 => 129,  735 => 127,  716 => 123,  710 => 122,  705 => 119,  694 => 118,  678 => 115,  667 => 114,  640 => 112,  625 => 109,  622 => 108,  619 => 107,  615 => 106,  608 => 104,  605 => 103,  601 => 102,  598 => 101,  594 => 100,  591 => 99,  587 => 98,  584 => 97,  581 => 96,  577 => 95,  574 => 94,  571 => 93,  566 => 92,  559 => 90,  555 => 89,  543 => 88,  527 => 85,  520 => 83,  517 => 82,  513 => 81,  510 => 80,  499 => 77,  496 => 76,  492 => 75,  467 => 71,  428 => 63,  381 => 55,  376 => 52,  350 => 50,  345 => 49,  326 => 43,  306 => 41,  301 => 40,  296 => 39,  283 => 37,  280 => 36,  271 => 34,  259 => 33,  238 => 27,  233 => 26,  228 => 23,  219 => 22,  207 => 19,  185 => 17,  180 => 16,  169 => 15,  143 => 11,  121 => 30,  115 => 8,  93 => 6,  51 => 1,  46 => 126,  40 => 113,  37 => 111,  34 => 87,  31 => 4,  28 => 32,  25 => 3,  22 => 2,  19 => 1,  529 => 144,  524 => 84,  512 => 125,  506 => 79,  503 => 78,  500 => 122,  495 => 117,  490 => 114,  484 => 73,  479 => 72,  474 => 108,  469 => 20,  464 => 7,  459 => 151,  449 => 144,  444 => 141,  441 => 140,  434 => 135,  430 => 133,  427 => 132,  425 => 131,  420 => 128,  418 => 122,  410 => 117,  403 => 114,  401 => 113,  397 => 57,  394 => 111,  390 => 109,  388 => 108,  385 => 107,  382 => 106,  368 => 97,  365 => 96,  357 => 94,  354 => 93,  351 => 92,  336 => 90,  321 => 89,  317 => 88,  313 => 87,  310 => 86,  307 => 85,  287 => 82,  281 => 80,  265 => 78,  261 => 77,  258 => 76,  255 => 75,  239 => 73,  235 => 72,  231 => 71,  218 => 67,  183 => 53,  177 => 52,  171 => 50,  168 => 49,  163 => 47,  159 => 46,  155 => 14,  150 => 42,  129 => 37,  113 => 32,  98 => 31,  92 => 22,  86 => 25,  83 => 24,  78 => 18,  76 => 20,  70 => 18,  65 => 17,  62 => 2,  57 => 14,  55 => 13,  43 => 117,  38 => 4,  35 => 5,  32 => 2,  941 => 292,  935 => 291,  929 => 290,  923 => 289,  917 => 288,  910 => 283,  907 => 282,  904 => 281,  901 => 280,  896 => 277,  886 => 269,  877 => 265,  875 => 264,  870 => 261,  851 => 256,  841 => 255,  836 => 254,  820 => 253,  812 => 252,  792 => 251,  789 => 250,  781 => 244,  772 => 240,  770 => 239,  765 => 236,  746 => 128,  736 => 230,  731 => 229,  715 => 228,  707 => 227,  687 => 226,  684 => 225,  672 => 216,  668 => 215,  664 => 213,  661 => 212,  658 => 211,  648 => 204,  636 => 195,  624 => 186,  612 => 105,  600 => 168,  586 => 157,  575 => 156,  563 => 91,  554 => 149,  548 => 146,  544 => 144,  541 => 143,  538 => 142,  528 => 134,  519 => 131,  516 => 130,  504 => 127,  491 => 126,  488 => 74,  482 => 124,  475 => 120,  471 => 119,  462 => 113,  451 => 67,  442 => 101,  439 => 100,  422 => 97,  412 => 61,  406 => 115,  400 => 94,  393 => 90,  389 => 89,  377 => 83,  373 => 82,  367 => 78,  364 => 77,  361 => 76,  358 => 75,  346 => 69,  339 => 68,  332 => 47,  325 => 66,  318 => 65,  314 => 64,  305 => 61,  298 => 60,  291 => 83,  284 => 81,  277 => 35,  273 => 56,  264 => 53,  257 => 52,  250 => 51,  243 => 50,  236 => 49,  232 => 48,  223 => 45,  216 => 44,  209 => 43,  202 => 58,  195 => 57,  191 => 40,  181 => 37,  173 => 36,  165 => 48,  157 => 34,  149 => 33,  145 => 39,  136 => 26,  132 => 19,  128 => 24,  124 => 36,  120 => 34,  116 => 33,  111 => 18,  107 => 7,  104 => 16,  97 => 15,  94 => 14,  91 => 13,  88 => 12,  68 => 9,  60 => 15,  42 => 7,  39 => 7,  36 => 6,  30 => 1,);
    }
}
