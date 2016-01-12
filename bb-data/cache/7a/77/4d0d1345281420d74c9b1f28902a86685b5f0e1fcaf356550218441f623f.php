<?php

/* partial_extensions.phtml */
class __TwigTemplate_7a774d0d1345281420d74c9b1f28902a86685b5f0e1fcaf356550218441f623f extends Twig_Template
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
        if (isset($context["header"])) { $_header_ = $context["header"]; } else { $_header_ = null; }
        if ($_header_) {
            // line 2
            echo "<div class=\"help\">
    <h5>";
            // line 3
            if (isset($context["header"])) { $_header_ = $context["header"]; } else { $_header_ = null; }
            echo twig_escape_filter($this->env, $_header_, "html", null, true);
            echo "</h5>
</div>
";
        }
        // line 6
        echo "<table class=\"tableStatic wide\">
    <thead>
        <tr>
            <td>&nbsp;</td>
            <td style=\"width: 30%\">Extension</td>
            <td>Description</td>
            <td width=\"18%\">&nbsp;</td>
        </tr>
    </thead>

    <tbody>
        ";
        // line 17
        if (isset($context["admin"])) { $_admin_ = $context["admin"]; } else { $_admin_ = null; }
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        $context["extensions"] = $this->getAttribute($_admin_, "extension_get_latest", array(0 => array("type" => $_type_)), "method");
        // line 18
        echo "        ";
        if (isset($context["extensions"])) { $_extensions_ = $context["extensions"]; } else { $_extensions_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_extensions_);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
            // line 19
            echo "        <tr>
            <td><img src=\"";
            // line 20
            if (isset($context["extension"])) { $_extension_ = $context["extension"]; } else { $_extension_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_extension_, "icon_url"), "html", null, true);
            echo "\" alt=\"";
            if (isset($context["extension"])) { $_extension_ = $context["extension"]; } else { $_extension_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_extension_, "name"), "html", null, true);
            echo "\" style=\"width: 32px; height: 32px;\"/></td>
            <td>
                <a class=\"bb-button\" href=\"";
            // line 22
            if (isset($context["extension"])) { $_extension_ = $context["extension"]; } else { $_extension_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_extension_, "project_url"), "html", null, true);
            echo "\" target=\"_blank\" title=\"View extension details\">";
            if (isset($context["extension"])) { $_extension_ = $context["extension"]; } else { $_extension_ = null; }
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($_extension_, "name"), 40), "html", null, true);
            echo " ";
            if (isset($context["extension"])) { $_extension_ = $context["extension"]; } else { $_extension_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_extension_, "version"), "html", null, true);
            echo "</a>
                <br/>by <a href=\"";
            // line 23
            if (isset($context["extension"])) { $_extension_ = $context["extension"]; } else { $_extension_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_extension_, "author_url"), "html", null, true);
            echo "\" target=\"_blank\">";
            if (isset($context["extension"])) { $_extension_ = $context["extension"]; } else { $_extension_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_extension_, "author"), "html", null, true);
            echo "</a>
            </td>
            <td>";
            // line 25
            if (isset($context["extension"])) { $_extension_ = $context["extension"]; } else { $_extension_ = null; }
            echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($_extension_, "description"), 150), "html", null, true);
            echo "</td>
            <td class=\"actions\">
                <a class=\"bb-button btn14 api-link\" data-api-confirm=\"By installing '";
            // line 27
            if (isset($context["extension"])) { $_extension_ = $context["extension"]; } else { $_extension_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_extension_, "name"), "html", null, true);
            echo "' you agree with terms and conditions. Install only extensions you trust. Continue?\" data-api-reload=\"1\" href=\"";
            if (isset($context["extension"])) { $_extension_ = $context["extension"]; } else { $_extension_ = null; }
            echo $this->env->getExtension('bb')->twig_bb_client_link_filter("api/admin/extension/install", array("type" => $this->getAttribute($_extension_, "type"), "id" => $this->getAttribute($_extension_, "id")));
            echo "\" title=\"Install extension\"><img src=\"images/icons/dark/cog.png\" alt=\"\"></a>
                <a class=\"bb-button btn14\" href=\"";
            // line 28
            if (isset($context["extension"])) { $_extension_ = $context["extension"]; } else { $_extension_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_extension_, "project_url"), "html", null, true);
            echo "\" target=\"_blank\" title=\"Details\"><img src=\"images/icons/dark/globe.png\" alt=\"\"></a>
                <a class=\"bb-button btn14\" href=\"";
            // line 29
            if (isset($context["extension"])) { $_extension_ = $context["extension"]; } else { $_extension_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_extension_, "download_url"), "html", null, true);
            echo "\" title=\"Download ";
            if (isset($context["extension"])) { $_extension_ = $context["extension"]; } else { $_extension_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_extension_, "name"), "html", null, true);
            echo "\"><img src=\"images/icons/dark/download.png\" alt=\"\"></a>
            </td>
        </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 33
            echo "        <tr>
            <td colspan=\"4\" class=\"aligncenter\"><a href=\"http://extensions.boxbilling.com/\" target=\"_blank\">Explore BoxBilling extensions</a></td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    </tbody>
    <tfoot>
        <tr>
            <td colspan=\"4\"></td>
        </tr>
    </tfoot>

</table>";
    }

    public function getTemplateName()
    {
        return "partial_extensions.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 37,  120 => 33,  107 => 29,  102 => 28,  94 => 27,  88 => 25,  79 => 23,  68 => 22,  59 => 20,  56 => 19,  32 => 6,  25 => 3,  22 => 2,  19 => 1,  302 => 106,  298 => 104,  289 => 100,  287 => 99,  282 => 96,  268 => 90,  262 => 88,  259 => 87,  253 => 86,  245 => 81,  241 => 80,  236 => 77,  233 => 76,  223 => 71,  219 => 70,  215 => 69,  211 => 68,  205 => 67,  199 => 66,  193 => 63,  189 => 62,  185 => 61,  182 => 60,  180 => 59,  174 => 55,  165 => 51,  163 => 50,  158 => 47,  144 => 41,  137 => 40,  130 => 39,  123 => 37,  117 => 36,  111 => 35,  106 => 34,  101 => 33,  98 => 32,  91 => 31,  82 => 25,  78 => 24,  74 => 23,  70 => 22,  66 => 21,  58 => 17,  49 => 18,  45 => 17,  40 => 7,  37 => 6,  31 => 4,  26 => 3,  24 => 2,);
    }
}
