<?php

/* mod_invoice_banklink.phtml */
class __TwigTemplate_41773b8de0fc06ce22cc5f504aa9a236960bffc52feb9d6bfc26d6e108462b61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'content' => array($this, 'block_content'),
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
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = array())
    {
        echo gettext("Processing payment ...");
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
";
        // line 11
        echo "<div class=\"row\">
    <article class=\"span12 data-block\">
        <div class=\"data-container\">
            <header>
                <h1>";
        // line 15
        echo gettext("Processing payment ...");
        echo "</h1>
                <p>";
        // line 16
        echo gettext("Thank you for your patience.");
        echo "</p>
            </header>
            <section>
                ";
        // line 19
        if (isset($context["payment"])) { $_payment_ = $context["payment"]; } else { $_payment_ = null; }
        if (($this->getAttribute($_payment_, "type") == "html")) {
            // line 20
            echo "                    ";
            if (isset($context["payment"])) { $_payment_ = $context["payment"]; } else { $_payment_ = null; }
            echo $this->getAttribute($_payment_, "result");
            echo "
                ";
        }
        // line 22
        echo "                ";
        if (isset($context["payment"])) { $_payment_ = $context["payment"]; } else { $_payment_ = null; }
        if (($this->getAttribute($_payment_, "type") == "form")) {
            // line 23
            echo "                <h2>";
            echo gettext("Redirecting to payment gateway..");
            echo "</h2>
                <form name=\"payment_form\" action=\"";
            // line 24
            if (isset($context["payment"])) { $_payment_ = $context["payment"]; } else { $_payment_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_payment_, "service_url"), "html", null, true);
            echo "\" method=\"post\">
                    ";
            // line 25
            if (isset($context["payment"])) { $_payment_ = $context["payment"]; } else { $_payment_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_payment_, "result"));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 26
                echo "                    <input type=\"hidden\" name=\"";
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                echo twig_escape_filter($this->env, $_key_, "html", null, true);
                echo "\" value=\"";
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                echo twig_escape_filter($this->env, $_value_, "html", null, true);
                echo "\" />
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "                    <input class=\"btn btn-primary\" type=\"submit\" value=\"";
            echo gettext("Please click here to continue if this page does not redirect automatically in 5 seconds");
            echo "\" id=\"payment_button\"/>
                </form>

                <script type=\"text/javascript\">
                    \$(document).ready(function(){
                        document.getElementById('payment_button').style.display = 'none';
                        document.forms[\"payment_form\"].submit();
                    });
                </script>
                ";
        }
        // line 38
        echo "            </section>
        </div>
    </article>
</div>




";
    }

    public function getTemplateName()
    {
        return "mod_invoice_banklink.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 38,  99 => 28,  86 => 26,  81 => 25,  76 => 24,  71 => 23,  67 => 22,  60 => 20,  57 => 19,  51 => 16,  47 => 15,  41 => 11,  38 => 6,  35 => 5,  29 => 3,  24 => 2,);
    }
}
