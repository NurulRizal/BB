<?php

/* partial_pagination.phtml */
class __TwigTemplate_008b34663d686d03fa362777ff5a65ad9f1e6b8a7d459a7e8a9c1a2591e31089 extends Twig_Template
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
        if (isset($context["list"])) { $_list_ = $context["list"]; } else { $_list_ = null; }
        if (($this->getAttribute($_list_, "pages") > 1)) {
            // line 2
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            $context["currentPage"] = (($this->getAttribute($_request_, "page", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($_request_, "page"), 1)) : (1));
            // line 3
            if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
            if (isset($context["list"])) { $_list_ = $context["list"]; } else { $_list_ = null; }
            if (isset($context["currentPage"])) { $_currentPage_ = $context["currentPage"]; } else { $_currentPage_ = null; }
            $context["paginator"] = $this->getAttribute($_guest_, "system_paginator", array(0 => array("total" => $this->getAttribute($_list_, "total"), "page" => $_currentPage_, "per_page" => $this->getAttribute($_list_, "per_page"))), "method");
            // line 4
            echo "
<div class=\"pagination\">
    <ul class=\"pages\">
        ";
            // line 7
            if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
            if (($this->getAttribute($_paginator_, "currentpage") != 1)) {
                // line 8
                echo "        <li class=\"prev\"><a href=\"";
                if (isset($context["url"])) { $_url_ = $context["url"]; } else { $_url_ = null; }
                if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
                if (isset($context["currentPage"])) { $_currentPage_ = $context["currentPage"]; } else { $_currentPage_ = null; }
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter($_url_, twig_array_merge(twig_slice($this->env, twig_array_merge(array(), $_request_), 1, twig_length_filter($this->env, $_request_)), array("page" => ($_currentPage_ - 1))));
                echo "\"><</a></li>
        ";
            }
            // line 10
            echo "        ";
            if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
            if (($this->getAttribute($this->getAttribute($_paginator_, "range"), 0) != 1)) {
                // line 11
                echo "            <li><a href=\"";
                if (isset($context["url"])) { $_url_ = $context["url"]; } else { $_url_ = null; }
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter($_url_, array("page" => 1));
                echo "\" >1</a></li>
        ";
            }
            // line 13
            echo "        ";
            if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range($this->getAttribute($_paginator_, "start"), $this->getAttribute($_paginator_, "end")));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 14
                echo "
            ";
                // line 15
                if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                if ((($this->getAttribute($this->getAttribute($_paginator_, "range"), 0) > 2) && ($_i_ == $this->getAttribute($this->getAttribute($_paginator_, "range"), 0)))) {
                    // line 16
                    echo "                ...
            ";
                }
                // line 18
                echo "
            ";
                // line 19
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
                if (($_i_ == $this->getAttribute($_paginator_, "currentpage"))) {
                    // line 20
                    echo "                <li><a class=\"active\" href=\"#\" onclick=\"return false;\">";
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo twig_escape_filter($this->env, $_i_, "html", null, true);
                    echo "</a></li>
            ";
                } else {
                    // line 22
                    echo "                <li><a href=\"";
                    if (isset($context["url"])) { $_url_ = $context["url"]; } else { $_url_ = null; }
                    if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo $this->env->getExtension('bb')->twig_bb_admin_link_filter($_url_, twig_array_merge(twig_slice($this->env, twig_array_merge(array(), $_request_), 1, twig_length_filter($this->env, $_request_)), array("page" => $_i_)));
                    echo "\"> ";
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo twig_escape_filter($this->env, $_i_, "html", null, true);
                    echo "</a></li>
            ";
                }
                // line 24
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "
        ";
            // line 26
            if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
            if ((($this->getAttribute($this->getAttribute($_paginator_, "range"), ($this->getAttribute($_paginator_, "midrange") - 1), array(), "array") < ($this->getAttribute($_paginator_, "numpages") - 1)) && ($this->getAttribute($_paginator_, "end") == $this->getAttribute($this->getAttribute($_paginator_, "range"), ($this->getAttribute($_paginator_, "midrange") - 1), array(), "array")))) {
                // line 27
                echo "            ...
            <li><a href=\"";
                // line 28
                if (isset($context["url"])) { $_url_ = $context["url"]; } else { $_url_ = null; }
                if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
                if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter($_url_, twig_array_merge(twig_slice($this->env, twig_array_merge(array(), $_request_), 1, twig_length_filter($this->env, $_request_)), array("page" => $this->getAttribute($_paginator_, "numpages"))));
                echo "\"> ";
                if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_paginator_, "numpages"), "html", null, true);
                echo "</a></li>
        ";
            }
            // line 30
            echo "
        ";
            // line 31
            if (isset($context["paginator"])) { $_paginator_ = $context["paginator"]; } else { $_paginator_ = null; }
            if (($this->getAttribute($_paginator_, "currentpage") != $this->getAttribute($_paginator_, "numpages"))) {
                // line 32
                echo "        <li class=\"next\"><a href=\"";
                if (isset($context["url"])) { $_url_ = $context["url"]; } else { $_url_ = null; }
                if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
                if (isset($context["currentPage"])) { $_currentPage_ = $context["currentPage"]; } else { $_currentPage_ = null; }
                echo $this->env->getExtension('bb')->twig_bb_admin_link_filter($_url_, twig_array_merge(twig_slice($this->env, twig_array_merge(array(), $_request_), 1, twig_length_filter($this->env, $_request_)), array("page" => ($_currentPage_ + 1))));
                echo "\">></a></li>
        ";
            }
            // line 34
            echo "    </ul>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partial_pagination.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 34,  133 => 32,  130 => 31,  116 => 28,  113 => 27,  110 => 26,  101 => 24,  89 => 22,  78 => 19,  75 => 18,  71 => 16,  64 => 14,  58 => 13,  51 => 11,  47 => 10,  38 => 8,  35 => 7,  30 => 4,  25 => 3,  22 => 2,  34 => 12,  19 => 1,  835 => 331,  832 => 330,  819 => 320,  810 => 315,  805 => 313,  797 => 310,  788 => 303,  779 => 300,  776 => 299,  766 => 295,  759 => 294,  753 => 292,  750 => 291,  744 => 290,  736 => 285,  732 => 284,  720 => 275,  710 => 268,  698 => 262,  693 => 260,  682 => 253,  676 => 251,  670 => 248,  661 => 243,  656 => 241,  645 => 236,  640 => 234,  630 => 229,  625 => 226,  616 => 221,  611 => 219,  602 => 214,  597 => 212,  588 => 207,  583 => 205,  574 => 200,  569 => 198,  559 => 192,  553 => 190,  547 => 187,  538 => 182,  533 => 180,  522 => 175,  517 => 173,  509 => 168,  505 => 167,  500 => 165,  492 => 162,  484 => 156,  480 => 155,  478 => 154,  473 => 151,  464 => 148,  461 => 147,  449 => 143,  444 => 142,  438 => 140,  432 => 139,  419 => 138,  406 => 137,  387 => 136,  378 => 135,  363 => 132,  357 => 130,  354 => 129,  347 => 128,  343 => 127,  334 => 121,  330 => 120,  326 => 119,  322 => 118,  318 => 117,  309 => 112,  299 => 105,  295 => 104,  291 => 103,  287 => 102,  282 => 99,  279 => 98,  264 => 91,  255 => 90,  246 => 89,  237 => 88,  233 => 86,  230 => 85,  220 => 78,  203 => 71,  191 => 69,  185 => 66,  171 => 60,  162 => 59,  153 => 58,  144 => 57,  139 => 55,  127 => 30,  122 => 47,  112 => 41,  107 => 25,  97 => 33,  92 => 31,  82 => 20,  77 => 23,  67 => 15,  62 => 15,  55 => 12,  48 => 8,  45 => 7,  42 => 6,  39 => 5,  33 => 3,  28 => 2,);
    }
}
