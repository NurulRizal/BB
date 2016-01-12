<?php

/* partial_bb_meta.phtml */
class __TwigTemplate_a2522da34c5800c8dda697ff61e0eadec944cda9dc071f00e61a268ac62b3c24 extends Twig_Template
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
        echo "    <base href=\"";
        if (isset($context["theme"])) { $_theme_ = $context["theme"]; } else { $_theme_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_theme_, "url"), "html", null, true);
        echo "\"/>
    <meta property=\"bb:url\" content=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_constant("BB_URL"), "html", null, true);
        echo "\"/>
    <meta property=\"bb:client_area\" content=\"";
        // line 3
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/");
        echo "\"/>
    ";
    }

    public function getTemplateName()
    {
        return "partial_bb_meta.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  19 => 1,  119 => 42,  114 => 34,  103 => 43,  101 => 42,  97 => 40,  94 => 39,  88 => 35,  86 => 34,  67 => 26,  63 => 25,  55 => 22,  36 => 9,  34 => 8,  27 => 4,  22 => 1,  160 => 57,  151 => 51,  147 => 50,  136 => 45,  132 => 44,  121 => 39,  117 => 38,  109 => 4,  104 => 34,  95 => 28,  84 => 23,  80 => 22,  69 => 17,  65 => 16,  57 => 13,  52 => 12,  49 => 11,  43 => 14,  38 => 6,  35 => 5,  29 => 3,);
    }
}
