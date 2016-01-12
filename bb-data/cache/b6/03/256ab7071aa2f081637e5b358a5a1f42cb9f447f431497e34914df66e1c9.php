<?php

/* layout_public.phtml */
class __TwigTemplate_b603256ab7071aa2f081637e5b358a5a1f42cb9f447f431497e34914df66e1c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'head' => array($this, 'block_head'),
            'js' => array($this, 'block_js'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if IE 8]>    <html class=\"no-js ie8 ie\" lang=\"en\"> <![endif]-->
<!--[if IE 9]>    <html class=\"no-js ie9 ie\" lang=\"en\"> <![endif]-->
<!--[if gt IE 9]><!--> <html class=\"no-js\" lang=\"en\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 7
        $this->displayBlock('meta_title', $context, $blocks);
        echo " ";
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_settings_, "meta_title"), "html", null, true);
        echo "</title>

    <meta property=\"bb:url\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_constant("BB_URL"), "html", null, true);
        echo "\">
    <meta property=\"bb:client_area\" content=\"";
        // line 10
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/");
        echo "\">

    <meta name=\"description\" content=\"";
        // line 12
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_settings_, "meta_description"), "html", null, true);
        echo "\">
    <meta name=\"robots\" content=\"";
        // line 13
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_settings_, "meta_robots"), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"";
        // line 14
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_settings_, "meta_author"), "html", null, true);
        echo "\">
    <meta name=\"generator\" content=\"BoxBilling ";
        // line 15
        if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_guest_, "system_version"), "html", null, true);
        echo "\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <link rel='stylesheet' type='text/css' href=\"";
        // line 18
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        echo twig_asset_url($this->env, (("css/huraga-" . $this->getAttribute($_settings_, "color_scheme")) . ".css"));
        echo "\">
    <link rel='stylesheet' type='text/css' href=\"";
        // line 19
        echo twig_asset_url($this->env, "css/plugins/jquery.jgrowl.css");
        echo "\">

    <link rel=\"shortcut icon\" href=\"";
        // line 21
        echo twig_asset_url($this->env, "favicon.ico");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 22
        echo twig_asset_url($this->env, "img/icons/apple-touch-icon-114-precomposed.png");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 23
        echo twig_asset_url($this->env, "img/icons/apple-touch-icon-72-precomposed.png");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 24
        echo twig_asset_url($this->env, "img/icons/apple-touch-icon-57-precomposed.png");
        echo "\">

    <script src=\"";
        // line 26
        echo twig_asset_url($this->env, "js/libs/jquery.js");
        echo "\"></script>
    <script src=\"";
        // line 27
        echo twig_asset_url($this->env, "js/bb-jquery.js");
        echo "\"></script>
    <script src=\"";
        // line 28
        echo twig_asset_url($this->env, "js/libs/modernizr.js");
        echo "\"></script>
    <script src=\"";
        // line 29
        echo twig_asset_url($this->env, "js/bootstrap/bootstrap.min.js");
        echo "\"></script>
    <script src=\"";
        // line 30
        echo twig_asset_url($this->env, "js/libs/selectivizr.js");
        echo "\"></script>
    <script src=\"";
        // line 31
        echo twig_asset_url($this->env, "js/plugins/jGrowl/jquery.jgrowl.js");
        echo "\"></script>

    ";
        // line 33
        $this->displayBlock('head', $context, $blocks);
        // line 34
        echo "    ";
        $this->displayBlock('js', $context, $blocks);
        // line 35
        echo "</head>
<body>
    ";
        // line 37
        $this->displayBlock('body', $context, $blocks);
        // line 38
        echo "    ";
        try {
            $this->env->loadTemplate("partial_pending_messages.phtml")->display($context);
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        // line 39
        echo "</body>
</html>";
    }

    // line 7
    public function block_meta_title($context, array $blocks = array())
    {
    }

    // line 33
    public function block_head($context, array $blocks = array())
    {
    }

    // line 34
    public function block_js($context, array $blocks = array())
    {
    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout_public.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 34,  151 => 33,  146 => 7,  141 => 39,  131 => 37,  124 => 34,  122 => 33,  117 => 31,  113 => 30,  109 => 29,  105 => 28,  97 => 26,  92 => 24,  84 => 22,  80 => 21,  75 => 19,  63 => 15,  58 => 14,  53 => 13,  48 => 12,  43 => 10,  31 => 7,  23 => 1,  213 => 84,  209 => 82,  205 => 80,  202 => 79,  189 => 68,  186 => 67,  179 => 62,  175 => 60,  167 => 58,  164 => 57,  161 => 37,  153 => 54,  150 => 53,  147 => 52,  144 => 51,  133 => 38,  127 => 35,  123 => 37,  121 => 36,  118 => 35,  115 => 34,  106 => 33,  101 => 27,  88 => 23,  83 => 24,  74 => 17,  70 => 18,  57 => 13,  54 => 12,  51 => 11,  47 => 10,  44 => 9,  39 => 9,  36 => 5,  30 => 3,);
    }
}
