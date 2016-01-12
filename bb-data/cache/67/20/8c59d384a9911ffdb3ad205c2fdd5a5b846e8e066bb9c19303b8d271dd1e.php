<?php

/* partial_batch_delete.phtml */
class __TwigTemplate_67208c59d384a9911ffdb3ad205c2fdd5a5b846e8e066bb9c19303b8d271dd1e extends Twig_Template
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
        echo "<a class=\"bb-button btn14\" id=\"batch-delete-selected-btn\" style=\"margin: 10px\"><img src=\"images/icons/dark/trash.png\" alt=\"\" > ";
        echo gettext("Delete selected");
        echo "</a>
<script type=\"text/javascript\">
    \$(function () {
        \$('#batch-delete-selected-btn').click(function () {
            if (\$('input.batch-delete-checkbox:checked').length) {
                jConfirm('Are you sure?', 'Confirm Batch Delete', function (r) {
                    if (r) {
                        var ids = \$('input.batch-delete-checkbox:checked').map(function () {
                            return \$(this).attr(\"data-item-id\");
                        }).get();
                        bb.post(
                            '";
        // line 12
        if (isset($context["action"])) { $_action_ = $context["action"]; } else { $_action_ = null; }
        echo twig_escape_filter($this->env, $_action_, "html", null, true);
        echo "',
                            {ids: ids},
                            function (result) {
                                bb.reload();
                            })
                    }
                });
            } else {
                jAlert('You need to select at least one item to delete');
            }

        });

        \$('input.batch-delete-master-checkbox').click(function () {
            \$('input.batch-delete-checkbox').prop('checked', this.checked);
        });
    });
</script>";
    }

    public function getTemplateName()
    {
        return "partial_batch_delete.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 12,  19 => 1,  835 => 331,  832 => 330,  819 => 320,  810 => 315,  805 => 313,  797 => 310,  788 => 303,  779 => 300,  776 => 299,  766 => 295,  759 => 294,  753 => 292,  750 => 291,  744 => 290,  736 => 285,  732 => 284,  720 => 275,  710 => 268,  698 => 262,  693 => 260,  682 => 253,  676 => 251,  670 => 248,  661 => 243,  656 => 241,  645 => 236,  640 => 234,  630 => 229,  625 => 226,  616 => 221,  611 => 219,  602 => 214,  597 => 212,  588 => 207,  583 => 205,  574 => 200,  569 => 198,  559 => 192,  553 => 190,  547 => 187,  538 => 182,  533 => 180,  522 => 175,  517 => 173,  509 => 168,  505 => 167,  500 => 165,  492 => 162,  484 => 156,  480 => 155,  478 => 154,  473 => 151,  464 => 148,  461 => 147,  449 => 143,  444 => 142,  438 => 140,  432 => 139,  419 => 138,  406 => 137,  387 => 136,  378 => 135,  363 => 132,  357 => 130,  354 => 129,  347 => 128,  343 => 127,  334 => 121,  330 => 120,  326 => 119,  322 => 118,  318 => 117,  309 => 112,  299 => 105,  295 => 104,  291 => 103,  287 => 102,  282 => 99,  279 => 98,  264 => 91,  255 => 90,  246 => 89,  237 => 88,  233 => 86,  230 => 85,  220 => 78,  203 => 71,  191 => 69,  185 => 66,  171 => 60,  162 => 59,  153 => 58,  144 => 57,  139 => 55,  127 => 49,  122 => 47,  112 => 41,  107 => 39,  97 => 33,  92 => 31,  82 => 25,  77 => 23,  67 => 17,  62 => 15,  55 => 12,  48 => 8,  45 => 7,  42 => 6,  39 => 5,  33 => 3,  28 => 2,);
    }
}
