<?php

/* mod_invoice_index.phtml */
class __TwigTemplate_7e8efd0389e4af8ed9b7983248694ed01129c3719ccbaf25b5b0cd6c068bd4b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'page_header' => array($this, 'block_page_header'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((($this->getAttribute($this->getContext($context, "request"), "ajax")) ? ("layout_blank.phtml") : ("layout_default.phtml")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Invoice management");
    }

    // line 3
    public function block_page_header($context, array $blocks = array())
    {
        echo gettext("Invoice management");
    }

    // line 5
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 6
        echo "    <li class=\"active\">";
        echo gettext("Invoices");
        echo "</li>
";
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "
";
        // line 11
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        $context["unpaid_invoices"] = $this->getAttribute($_client_, "invoice_get_list", array(0 => array("status" => "unpaid", "per_page" => 100)), "method");
        // line 12
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        $context["paid_invoices"] = $this->getAttribute($_client_, "invoice_get_list", array(0 => array("per_page" => 10, "page" => $this->getAttribute($_request_, "page"), "status" => "paid")), "method");
        // line 13
        echo "
<div class=\"row\">
        <article class=\"span12 data-block\">
            <div class=\"data-container\">
                <header>
                    <h1>";
        // line 18
        echo gettext("List of invoices");
        echo "</h1><br/>
                    ";
        // line 19
        echo gettext("All of your invoices can be found here. You can choose to see either paid or unpaid invoices by clicking corresponding button.");
        // line 20
        echo "                    <ul class=\"data-header-actions\">
                        <li class=\"demoTabs active\"><a href=\"#unpaid\" class=\"btn btn-alt btn-inverse\" data-toggle=\"tab\">";
        // line 21
        echo gettext("Unpaid");
        echo "</a></li>
                        <li class=\"demoTabs\" ><a href=\"#paid\" class=\"btn btn-alt btn-inverse\" data-toggle=\"tab\">";
        // line 22
        echo gettext("Paid");
        echo "</a></li>
                    </ul>
                </header>
                <section class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"unpaid\">
                    <h3>";
        // line 27
        echo gettext("Unpaid");
        echo "</h3>

                        <table class=\"table table-hover table-striped\">
                            <thead>
                            <tr>
                                <th>";
        // line 32
        echo gettext("Title");
        echo "</th>
                                <th>";
        // line 33
        echo gettext("Issue Date");
        echo "</th>
                                <th>";
        // line 34
        echo gettext("Due Date");
        echo "</th>
                                <th>";
        // line 35
        echo gettext("Total");
        echo "</th>
                                <th>&nbsp</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 40
        if (isset($context["unpaid_invoices"])) { $_unpaid_invoices_ = $context["unpaid_invoices"]; } else { $_unpaid_invoices_ = null; }
        if (($this->getAttribute($_unpaid_invoices_, "total") > 0)) {
            // line 41
            echo "                            ";
            if (isset($context["unpaid_invoices"])) { $_unpaid_invoices_ = $context["unpaid_invoices"]; } else { $_unpaid_invoices_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_unpaid_invoices_, "list"));
            foreach ($context['_seq'] as $context["i"] => $context["invoice"]) {
                // line 42
                echo "                            <tr class=\"";
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $_i_), "html", null, true);
                echo "\">
                                <td>";
                // line 43
                if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
                echo twig_escape_filter($this->env, sprintf("Proforma invoice #%05s", $this->getAttribute($_invoice_, "id")), "html", null, true);
                echo "</td>
                                <td>";
                // line 44
                if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_date($this->getAttribute($_invoice_, "created_at")), "html", null, true);
                echo "</td>
                                <td>";
                // line 45
                if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_date($this->getAttribute($_invoice_, "due_at")), "html", null, true);
                echo "</td>
                                <td>";
                // line 46
                if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
                echo twig_money($this->env, $this->getAttribute($_invoice_, "total"), $this->getAttribute($_invoice_, "currency"));
                echo "</td>
                                <td><a class=\"btn btn-small btn-primary\" href=\"";
                // line 47
                echo $this->env->getExtension('bb')->twig_bb_client_link_filter("invoice");
                echo "/";
                if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_invoice_, "hash"), "html", null, true);
                echo "\">";
                echo gettext("Pay");
                echo "</a></td>
                            </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['invoice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                            ";
        } else {
            // line 51
            echo "                            <tr>
                                <td colspan=\"5\" >";
            // line 52
            echo gettext("The list is empty");
            echo "</td>
                            </tr>
                            ";
        }
        // line 55
        echo "
                            </tbody>
                        </table>

                    </div>

                    <div class=\"tab-pane\" id=\"paid\">
                    <h3>";
        // line 62
        echo gettext("Paid");
        echo "</h3>

                        <table class=\"table table-hover table-striped\">
                            <thead>
                            <tr>
                                <th>";
        // line 67
        echo gettext("Title");
        echo "</th>
                                <th>";
        // line 68
        echo gettext("Issue Date");
        echo "</th>
                                <th>";
        // line 69
        echo gettext("Paid at");
        echo "</th>
                                <th>";
        // line 70
        echo gettext("Total");
        echo "</th>
                                <th>&nbsp</th>
                            </tr>
                            </thead>

                            <tbody>
                            ";
        // line 76
        if (isset($context["paid_invoices"])) { $_paid_invoices_ = $context["paid_invoices"]; } else { $_paid_invoices_ = null; }
        if (($this->getAttribute($_paid_invoices_, "total") > 0)) {
            // line 77
            echo "                            ";
            if (isset($context["paid_invoices"])) { $_paid_invoices_ = $context["paid_invoices"]; } else { $_paid_invoices_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_paid_invoices_, "list"));
            foreach ($context['_seq'] as $context["i"] => $context["invoice"]) {
                // line 78
                echo "
                            <tr class=\"";
                // line 79
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $_i_), "html", null, true);
                echo "\">
                                <td>";
                // line 80
                if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
                echo twig_escape_filter($this->env, sprintf("Proforma invoice #%05s", $this->getAttribute($_invoice_, "id")), "html", null, true);
                echo "</td>
                                <td>";
                // line 81
                if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_date($this->getAttribute($_invoice_, "created_at")), "html", null, true);
                echo "</td>
                                <td>";
                // line 82
                if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_date($this->getAttribute($_invoice_, "paid_at")), "html", null, true);
                echo "</td>
                                <td>";
                // line 83
                if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
                echo twig_money($this->env, $this->getAttribute($_invoice_, "total"), $this->getAttribute($_invoice_, "currency"));
                echo "</td>
                                <td><a href=\"";
                // line 84
                echo $this->env->getExtension('bb')->twig_bb_client_link_filter("invoice");
                echo "/";
                if (isset($context["invoice"])) { $_invoice_ = $context["invoice"]; } else { $_invoice_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_invoice_, "hash"), "html", null, true);
                echo "\" class=\"btn btn-primary btn-small\">";
                echo gettext("View");
                echo "</a></td>
                            </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['invoice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "                            ";
        } else {
            // line 88
            echo "                            <tr>
                                <td colspan=\"7\">";
            // line 89
            echo gettext("The list is empty");
            echo "</td>
                            </tr>
                            ";
        }
        // line 92
        echo "                            </tbody>
                        </table>

                    </div>
                </section>
                <footer>
                    <p>";
        // line 98
        if (isset($context["unpaid_invoices"])) { $_unpaid_invoices_ = $context["unpaid_invoices"]; } else { $_unpaid_invoices_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_unpaid_invoices_, "total"), "html", null, true);
        echo " unpaid invoices and ";
        if (isset($context["paid_invoices"])) { $_paid_invoices_ = $context["paid_invoices"]; } else { $_paid_invoices_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_paid_invoices_, "total"), "html", null, true);
        echo " paid invoices</p>
                </footer>
            </div>
        </article>
        </div>
";
    }

    public function getTemplateName()
    {
        return "mod_invoice_index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 98,  282 => 92,  276 => 89,  273 => 88,  270 => 87,  256 => 84,  251 => 83,  246 => 82,  241 => 81,  236 => 80,  231 => 79,  228 => 78,  222 => 77,  219 => 76,  210 => 70,  206 => 69,  202 => 68,  198 => 67,  190 => 62,  181 => 55,  175 => 52,  172 => 51,  169 => 50,  155 => 47,  150 => 46,  145 => 45,  140 => 44,  135 => 43,  129 => 42,  123 => 41,  120 => 40,  112 => 35,  108 => 34,  104 => 33,  100 => 32,  92 => 27,  84 => 22,  80 => 21,  77 => 20,  75 => 19,  71 => 18,  64 => 13,  60 => 12,  57 => 11,  54 => 10,  51 => 9,  44 => 6,  41 => 5,  35 => 3,  29 => 2,);
    }
}
