<?php

/* mod_client_balance.phtml */
class __TwigTemplate_f98b150b6a36fc7962471ae1869505fa13f97e0506f073feef07d71d5b5332e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
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
        // line 5
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        $context["profile"] = $this->getAttribute($_client_, "client_get");
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Payments history");
    }

    // line 4
    public function block_breadcrumb($context, array $blocks = array())
    {
        echo " <li class=\"active\">";
        echo gettext("Payments history");
        echo "</li>";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"row\">
<article class=\"span12 data-block\">
    <div class=\"data-container\">

        <header>
           <h1>";
        // line 13
        echo gettext("Payments history");
        echo "</h1>
           <p>";
        // line 14
        echo gettext("Here you can track what you have been charged for and add more funds to your account");
        echo "</p>
        </header>

        <section>
            <table class=\"table table-striped table-bordered table-condensed table-hover\">
                <thead>
                <tr>
                    <th>";
        // line 21
        echo gettext("Description");
        echo "</th>
                    <th>";
        // line 22
        echo gettext("Date");
        echo "</th>
                    <th>";
        // line 23
        echo gettext("Amount");
        echo "</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 27
        if (isset($context["client"])) { $_client_ = $context["client"]; } else { $_client_ = null; }
        if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
        $context["transactions"] = $this->getAttribute($_client_, "client_balance_get_list", array(0 => array("per_page" => 10, "page" => $this->getAttribute($_request_, "page"))), "method");
        // line 28
        echo "                ";
        if (isset($context["transactions"])) { $_transactions_ = $context["transactions"]; } else { $_transactions_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_transactions_, "list"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["tx"]) {
            // line 29
            echo "                <tr class=\"";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $_i_), "html", null, true);
            echo "\">
                    <td>";
            // line 30
            if (isset($context["tx"])) { $_tx_ = $context["tx"]; } else { $_tx_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_tx_, "description"), "html", null, true);
            echo "</td>
                    <td>";
            // line 31
            if (isset($context["tx"])) { $_tx_ = $context["tx"]; } else { $_tx_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('bb')->twig_bb_date($this->getAttribute($_tx_, "created_at")), "html", null, true);
            echo "</td>
                    <td>";
            // line 32
            if (isset($context["tx"])) { $_tx_ = $context["tx"]; } else { $_tx_ = null; }
            echo twig_money($this->env, $this->getAttribute($_tx_, "amount"), $this->getAttribute($_tx_, "currency"));
            echo "</td>
                </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            echo "                <tr>
                    <td colspan=\"3\">";
            // line 36
            echo gettext("The list is empty");
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['tx'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                </tbody>
                <tfoot>
                    <tr>
                        <td colspan=\"2\">";
        // line 42
        echo gettext("Total:");
        echo "</td>
                        <td><strong>";
        // line 43
        if (isset($context["profile"])) { $_profile_ = $context["profile"]; } else { $_profile_ = null; }
        echo twig_money($this->env, $this->getAttribute($_profile_, "balance"), $this->getAttribute($_profile_, "currency"));
        echo "</strong></td>
                    </tr>
                </tfoot>
            </table>
            ";
        // line 47
        if (isset($context["transactions"])) { $_transactions_ = $context["transactions"]; } else { $_transactions_ = null; }
        $this->env->loadTemplate("partial_pagination.phtml")->display(array_merge($context, array("list" => $_transactions_)));
        // line 48
        echo "
            <div class=\"row-fluid\">

                <div class=\"span3\">
                    <form action=\"\" method=\"post\" class=\"form-inline api-form\" data-api-url=\"";
        // line 52
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/client/invoice/funds_invoice");
        echo "\" data-api-jsonp=\"onAfterInvoiceCreated\">
                        <fieldset>
                            <div class=\"control-group\">
                                <div class=\"form-controls\">
                                    <div class=\"input-append\">
                                        <input id=\"appendedPrependedInput\" class=\"span4\" type=\"text\" name=\"amount\" placeholder=\"0\" required=\"required\"><button class=\"btn\" type=\"submit\">";
        // line 57
        echo gettext("Add funds!");
        echo "</button>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>

            </div>

        </section>

</article>
</div>

";
    }

    // line 74
    public function block_js($context, array $blocks = array())
    {
        // line 75
        echo "<script type=\"text/javascript\">
    function onAfterInvoiceCreated(hash) {
        var link = '";
        // line 77
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("invoice");
        echo "/' + hash;
        bb.redirect(link);
    }
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_client_balance.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 77,  192 => 75,  189 => 74,  169 => 57,  161 => 52,  155 => 48,  152 => 47,  144 => 43,  140 => 42,  135 => 39,  126 => 36,  123 => 35,  114 => 32,  109 => 31,  104 => 30,  98 => 29,  91 => 28,  87 => 27,  80 => 23,  76 => 22,  72 => 21,  62 => 14,  58 => 13,  51 => 8,  48 => 7,  40 => 4,  34 => 3,  28 => 5,  26 => 2,);
    }
}
