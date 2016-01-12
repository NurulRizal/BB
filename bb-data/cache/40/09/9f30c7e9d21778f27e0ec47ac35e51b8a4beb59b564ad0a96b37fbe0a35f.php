<?php

/* partial_menu.phtml */
class __TwigTemplate_40099f30c7e9d21778f27e0ec47ac35e51b8a4beb59b564ad0a96b37fbe0a35f extends Twig_Template
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
        echo "<ul class=\"main-navigation nav-collapse collapse\">

    ";
        // line 3
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ($this->getAttribute($_settings_, "side_menu_dashboard")) {
            // line 4
            echo "    <li class=\"main-menu\">
        <a class=\"no-submenu\" href=\"";
            // line 5
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/");
            echo "\"><span class=\"awe-home\"></span>";
            echo gettext("Dashboard");
            echo "</a>
    </li>
    ";
        }
        // line 8
        echo "    
    ";
        // line 9
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ($this->getAttribute($_settings_, "side_menu_order")) {
            // line 10
            echo "    <li class=\"main-menu\">
        <a href=\"#\" class=\"order-button\"><span class=\"awe-shopping-cart\"></span>";
            // line 11
            echo gettext("Order");
            echo "</a>
    </li>
    ";
        }
        // line 14
        echo "
    ";
        // line 15
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ($this->getAttribute($_settings_, "side_menu_support")) {
            // line 16
            echo "    <li class=\"main-menu\">
        <a href=\"";
            // line 17
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/support");
            echo "\"><span class=\"awe-wrench\"></span>";
            echo gettext("Support");
            echo "</a>
    </li>
    ";
        }
        // line 20
        echo "
    ";
        // line 21
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ($this->getAttribute($_settings_, "side_menu_services")) {
            // line 22
            echo "    <li class=\"main-menu\">
        <a href=\"";
            // line 23
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/order/service");
            echo "\"><span class=\"awe-cogs\"></span>";
            echo gettext("Services");
            echo "</a>
    </li>
    ";
        }
        // line 26
        echo "
    ";
        // line 27
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ($this->getAttribute($_settings_, "side_menu_invoices")) {
            // line 28
            echo "    <li class=\"main-menu\">
        <a href=\"";
            // line 29
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/invoice");
            echo "\"><span class=\"awe-file-alt\"></span>";
            echo gettext("Invoices");
            echo "</a>
    </li>
    ";
        }
        // line 32
        echo "
    ";
        // line 33
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ($this->getAttribute($_settings_, "side_menu_emails")) {
            // line 34
            echo "    <li class=\"main-menu\">
        <a  href=\"";
            // line 35
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/email");
            echo "\"><span class=\"awe-envelope-alt\"></span>";
            echo gettext("Emails");
            echo "</a>
    </li>
    ";
        }
        // line 38
        echo "
    ";
        // line 39
        if (isset($context["settings"])) { $_settings_ = $context["settings"]; } else { $_settings_ = null; }
        if ($this->getAttribute($_settings_, "side_menu_payments")) {
            // line 40
            echo "    <li class=\"main-menu\">
        <a href=\"";
            // line 41
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/client/balance");
            echo "\"><span class=\"awe-credit-card\"></span>";
            echo gettext("Payments history");
            echo "</a>
    </li>
    ";
        }
        // line 44
        echo "
    ";
        // line 45
        if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
        if ($this->getAttribute($_guest_, "extension_is_on", array(0 => array("mod" => "news")), "method")) {
            // line 46
            echo "    <li class=\"main-menu\">
        <a href=\"";
            // line 47
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/news");
            echo "\"><span class=\"awe-edit\"></span>";
            echo gettext("Blog");
            echo "</a>
    </li>
    ";
        }
        // line 50
        echo "
    ";
        // line 51
        if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
        if ($this->getAttribute($_guest_, "extension_is_on", array(0 => array("mod" => "kb")), "method")) {
            // line 52
            echo "    <li class=\"main-menu\">
        <a href=\"";
            // line 53
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/kb");
            echo "\"><span class=\"awe-book\"></span>";
            echo gettext("Knowledge Base");
            echo "</a>
    </li>
    ";
        }
        // line 56
        echo "
    ";
        // line 57
        if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
        if ($this->getAttribute($_guest_, "extension_is_on", array(0 => array("mod" => "forum")), "method")) {
            // line 58
            echo "    <li class=\"main-menu\">
        <a href=\"";
            // line 59
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/forum");
            echo "\"><span class=\"awe-comments\"></span>";
            echo gettext("Forum");
            echo "</a>
    </li>
    ";
        }
        // line 62
        echo "</ul>

<script type=\"text/javascript\">
    \$('.main-menu').each(function(index){
        var menu_link = \$(this).children('a').attr('href');
        if (\"";
        // line 67
        if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_guest_, "system_current_url"), "html", null, true);
        echo "\" ==\"";
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/");
        echo "\"){
            \$('.main-menu:first').addClass(\"current\");
        }
        else if ('";
        // line 70
        if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_guest_, "system_current_url"), "html", null, true);
        echo "'.indexOf(menu_link) >= 0 && menu_link != \"";
        echo $this->env->getExtension('bb')->twig_bb_client_link_filter("/");
        echo "\"){
            \$(this).addClass(\"current\");
      }
    });

</script>";
    }

    public function getTemplateName()
    {
        return "partial_menu.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 70,  195 => 67,  188 => 62,  180 => 59,  177 => 58,  174 => 57,  171 => 56,  163 => 53,  160 => 52,  157 => 51,  154 => 50,  146 => 47,  143 => 46,  140 => 45,  137 => 44,  129 => 41,  126 => 40,  123 => 39,  120 => 38,  112 => 35,  109 => 34,  106 => 33,  103 => 32,  95 => 29,  92 => 28,  89 => 27,  86 => 26,  78 => 23,  75 => 22,  72 => 21,  69 => 20,  61 => 17,  58 => 16,  55 => 15,  52 => 14,  46 => 11,  43 => 10,  40 => 9,  37 => 8,  29 => 5,  26 => 4,  23 => 3,  19 => 1,);
    }
}
