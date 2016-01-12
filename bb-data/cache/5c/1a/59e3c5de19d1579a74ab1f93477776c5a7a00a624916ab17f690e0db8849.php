<?php

/* layout_login.phtml */
class __TwigTemplate_5c1a59e3c5de19d1579a74ab1f93477776c5a7a00a624916ab17f690e0db8849 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta_title' => array($this, 'block_meta_title'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <title>";
        // line 4
        $this->displayBlock('meta_title', $context, $blocks);
        echo "</title>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\" />
    
    ";
        // line 8
        $this->env->loadTemplate("partial_bb_meta.phtml")->display($context);
        // line 9
        echo "
    <link rel=\"stylesheet\" href=\"css/min.css\" type=\"text/css\" media=\"screen\" />
    <link href=\"https://fonts.googleapis.com/css?family=Cuprum\" rel=\"stylesheet\" type=\"text/css\" />

    <script type=\"text/javascript\" src=\"js/boxbilling.min.js\"></script>
    <script type=\"text/javascript\" src=\"js/bb-admin.js?v=";
        // line 14
        if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_guest_, "system_version"), "html", null, true);
        echo "\"></script>
</head>

<body>
<!-- Top navigation bar -->
<div id=\"topNav\">
    <div class=\"fixed\">
        <div class=\"wrapper\">
            <div class=\"backTo\"><a href=\"";
        // line 22
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/");
        echo "\" title=\"\"><img src=\"images/icons/topnav/mainWebsite.png\" alt=\"\" /><span>";
        echo gettext("Main website");
        echo "</span></a></div>
            <div class=\"userNav\">
                <ul>
                    <li class=\"loading\" style=\"display:none;\"><img src=\"images/loader.gif\" alt=\"\" /><span>";
        // line 25
        echo gettext("Loading ...");
        echo "</span></li>
                    <li><a href=\"http://docs.boxbilling.com/";
        // line 26
        if (isset($context["help_query"])) { $_help_query_ = $context["help_query"]; } else { $_help_query_ = null; }
        if ($_help_query_) {
            echo "en/latest/search.html?q=";
            if (isset($context["help_query"])) { $_help_query_ = $context["help_query"]; } else { $_help_query_ = null; }
            echo twig_escape_filter($this->env, $_help_query_, "html", null, true);
            echo "&check_keywords=yes&area=default";
        }
        echo "\" title=\"\" target=\"_blank\"><img src=\"images/icons/topnav/help.png\" alt=\"\" /><span>";
        echo gettext("Help");
        echo "</span></a></li>
                </ul>
            </div>
            <div class=\"fix\"></div>
        </div>
    </div>
</div>

";
        // line 34
        $this->displayBlock('content', $context, $blocks);
        // line 35
        echo "
<!-- Footer -->
<div id=\"footer\">
\t<div class=\"wrapper\">
    \t";
        // line 39
        if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
        $this->env->loadTemplate("partial_footer.phtml")->display(array_merge($context, array("product" => $_product_)));
        // line 40
        echo "    </div>
</div>
";
        // line 42
        $this->displayBlock('js', $context, $blocks);
        // line 43
        echo "</body>
</html>
";
    }

    // line 4
    public function block_meta_title($context, array $blocks = array())
    {
    }

    // line 34
    public function block_content($context, array $blocks = array())
    {
    }

    // line 42
    public function block_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout_login.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 42,  114 => 34,  103 => 43,  101 => 42,  97 => 40,  94 => 39,  88 => 35,  86 => 34,  67 => 26,  63 => 25,  55 => 22,  36 => 9,  34 => 8,  27 => 4,  22 => 1,  160 => 57,  151 => 51,  147 => 50,  136 => 45,  132 => 44,  121 => 39,  117 => 38,  109 => 4,  104 => 34,  95 => 28,  84 => 23,  80 => 22,  69 => 17,  65 => 16,  57 => 13,  52 => 12,  49 => 11,  43 => 14,  38 => 6,  35 => 5,  29 => 3,);
    }
}
