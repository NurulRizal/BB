<?php

/* partial_pending_messages.phtml */
class __TwigTemplate_ea35940e0dfc312b417907a1a337e9e4595f9c39acf6bc88821dea2f439a247d extends Twig_Template
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
        $context["pending_messages"] = $this->getAttribute($_guest_, "system_get_pending_messages");
        // line 2
        if (isset($context["pending_messages"])) { $_pending_messages_ = $context["pending_messages"]; } else { $_pending_messages_ = null; }
        if ($_pending_messages_) {
            // line 3
            echo "<script>
    ";
            // line 4
            if (isset($context["pending_messages"])) { $_pending_messages_ = $context["pending_messages"]; } else { $_pending_messages_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_pending_messages_);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 5
                echo "        bb.msg('";
                if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
                echo twig_escape_filter($this->env, $_message_, "html", null, true);
                echo "');
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "</script>
";
        }
    }

    public function getTemplateName()
    {
        return "partial_pending_messages.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 5,  904 => 193,  899 => 192,  894 => 191,  887 => 174,  884 => 173,  879 => 176,  877 => 173,  871 => 172,  868 => 171,  865 => 170,  854 => 265,  849 => 262,  845 => 260,  839 => 258,  836 => 257,  833 => 256,  827 => 253,  824 => 252,  820 => 251,  817 => 249,  813 => 247,  803 => 245,  793 => 243,  790 => 242,  787 => 241,  783 => 240,  779 => 238,  769 => 236,  759 => 234,  756 => 233,  753 => 232,  749 => 231,  745 => 229,  734 => 226,  724 => 224,  721 => 223,  718 => 222,  714 => 221,  710 => 219,  700 => 217,  690 => 215,  687 => 214,  684 => 213,  680 => 212,  676 => 210,  666 => 208,  656 => 206,  653 => 205,  650 => 204,  647 => 203,  637 => 201,  634 => 200,  631 => 199,  624 => 194,  621 => 193,  618 => 192,  616 => 191,  613 => 190,  611 => 189,  608 => 188,  605 => 187,  603 => 181,  600 => 180,  597 => 179,  594 => 178,  591 => 170,  588 => 169,  582 => 165,  573 => 160,  564 => 157,  561 => 156,  558 => 155,  551 => 152,  547 => 151,  544 => 150,  541 => 149,  538 => 148,  527 => 142,  521 => 141,  515 => 139,  505 => 138,  493 => 136,  489 => 134,  486 => 133,  482 => 131,  480 => 130,  473 => 126,  466 => 121,  463 => 120,  456 => 118,  453 => 117,  450 => 116,  447 => 115,  432 => 110,  425 => 108,  421 => 107,  418 => 106,  413 => 103,  400 => 99,  397 => 98,  384 => 94,  377 => 92,  369 => 89,  366 => 88,  362 => 87,  349 => 83,  346 => 82,  343 => 81,  336 => 76,  317 => 73,  312 => 72,  308 => 71,  295 => 66,  285 => 62,  273 => 59,  270 => 58,  266 => 56,  258 => 52,  255 => 51,  252 => 50,  240 => 46,  235 => 41,  230 => 38,  225 => 37,  220 => 18,  213 => 12,  206 => 7,  194 => 280,  187 => 278,  184 => 277,  172 => 273,  167 => 46,  164 => 45,  155 => 43,  152 => 42,  148 => 41,  144 => 39,  139 => 37,  134 => 35,  130 => 34,  126 => 33,  122 => 32,  118 => 31,  109 => 28,  101 => 26,  97 => 25,  92 => 23,  88 => 22,  74 => 18,  62 => 14,  57 => 13,  48 => 10,  44 => 9,  39 => 7,  419 => 85,  407 => 80,  398 => 78,  388 => 71,  382 => 68,  368 => 57,  365 => 56,  359 => 54,  356 => 53,  352 => 84,  348 => 51,  345 => 50,  339 => 48,  330 => 75,  311 => 42,  305 => 41,  300 => 38,  289 => 37,  274 => 34,  263 => 55,  248 => 29,  237 => 28,  221 => 25,  209 => 24,  193 => 20,  181 => 276,  169 => 272,  147 => 13,  142 => 12,  131 => 11,  117 => 10,  83 => 5,  77 => 4,  69 => 3,  58 => 2,  34 => 36,  28 => 4,  25 => 3,  22 => 2,  19 => 1,  604 => 221,  595 => 218,  592 => 217,  578 => 214,  568 => 159,  562 => 212,  556 => 211,  548 => 206,  537 => 197,  528 => 194,  525 => 193,  508 => 190,  498 => 189,  492 => 188,  485 => 187,  477 => 182,  461 => 170,  457 => 169,  452 => 168,  448 => 167,  443 => 166,  439 => 165,  428 => 109,  422 => 158,  416 => 155,  403 => 100,  399 => 145,  394 => 97,  390 => 143,  385 => 142,  381 => 93,  370 => 58,  364 => 134,  358 => 131,  342 => 49,  338 => 118,  333 => 117,  329 => 116,  324 => 115,  320 => 114,  309 => 108,  303 => 70,  290 => 65,  286 => 95,  281 => 61,  277 => 60,  272 => 92,  268 => 91,  257 => 85,  251 => 82,  246 => 48,  243 => 47,  239 => 76,  229 => 68,  219 => 64,  215 => 62,  201 => 281,  196 => 57,  190 => 56,  185 => 55,  175 => 274,  170 => 53,  165 => 52,  162 => 51,  156 => 50,  149 => 46,  145 => 45,  141 => 38,  137 => 43,  133 => 42,  129 => 41,  120 => 35,  114 => 30,  111 => 30,  108 => 29,  105 => 27,  102 => 27,  99 => 26,  89 => 23,  84 => 21,  79 => 20,  76 => 19,  73 => 19,  70 => 18,  67 => 15,  59 => 10,  53 => 12,  50 => 8,  46 => 7,  43 => 7,  37 => 45,  31 => 1,  26 => 15,);
    }
}
