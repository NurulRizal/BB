<?php

/* partial_message.phtml */
class __TwigTemplate_8585758f2ad2efae30903cb1de9bad357caed425ac272caabe054bf4f1bd961e extends Twig_Template
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
        if (isset($context["flashes"])) { $_flashes_ = $context["flashes"]; } else { $_flashes_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_flashes_);
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 2
            echo "    ";
            if (isset($context["messages"])) { $_messages_ = $context["messages"]; } else { $_messages_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_messages_);
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 3
                echo "        <div class=\"h-block ";
                if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
                echo twig_escape_filter($this->env, $_label_, "html", null, true);
                echo "\">
            <h2>";
                // line 4
                if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
                echo twig_escape_filter($this->env, $_label_, "html", null, true);
                echo "</h2>
            <p>";
                // line 5
                if (isset($context["msg"])) { $_msg_ = $context["msg"]; } else { $_msg_ = null; }
                echo twig_escape_filter($this->env, $_msg_, "html", null, true);
                echo "</p>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "partial_message.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 5,  36 => 4,  30 => 3,  24 => 2,  204 => 70,  195 => 67,  188 => 62,  180 => 59,  177 => 58,  174 => 57,  171 => 56,  163 => 53,  160 => 52,  157 => 51,  154 => 50,  146 => 47,  143 => 46,  140 => 45,  137 => 44,  129 => 41,  126 => 40,  123 => 39,  120 => 38,  112 => 35,  109 => 34,  106 => 33,  103 => 32,  95 => 29,  92 => 28,  89 => 27,  86 => 26,  78 => 23,  75 => 22,  72 => 21,  69 => 20,  61 => 17,  58 => 16,  55 => 15,  52 => 14,  46 => 11,  43 => 10,  40 => 9,  37 => 8,  29 => 5,  26 => 4,  23 => 3,  19 => 1,);
    }
}
