<?php

/* mod_orderbutton_addons.phtml */
class __TwigTemplate_ac233624dc91843d0f9966b9113e4ddae51417dfb13e11437108261f0eea2e69 extends Twig_Template
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
        if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
        if ((twig_length_filter($this->env, $this->getAttribute($_product_, "addons")) > 0)) {
            // line 2
            echo "<hr/>
<section>
    <header>
        <h2>";
            // line 5
            echo gettext("Addons & extras");
            echo "</h2>
    </header>
</section>
<div class=\"row-fluid\">
        <table class=\"table table-condensed\">
            <tbody>
            ";
            // line 11
            if (isset($context["product"])) { $_product_ = $context["product"]; } else { $_product_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_product_, "addons"));
            foreach ($context['_seq'] as $context["_key"] => $context["addon"]) {
                // line 12
                echo "            <label for=\"addon_";
                if (isset($context["addon"])) { $_addon_ = $context["addon"]; } else { $_addon_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_addon_, "id"), "html", null, true);
                echo "\">
            <tr>
                <td>
                    <input type=\"hidden\" name=\"addons[";
                // line 15
                if (isset($context["addon"])) { $_addon_ = $context["addon"]; } else { $_addon_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_addon_, "id"), "html", null, true);
                echo "][selected]\" value=\"0\">
                    <input type=\"checkbox\" name=\"addons[";
                // line 16
                if (isset($context["addon"])) { $_addon_ = $context["addon"]; } else { $_addon_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_addon_, "id"), "html", null, true);
                echo "][selected]\" value=\"1\" id=\"addon_";
                if (isset($context["addon"])) { $_addon_ = $context["addon"]; } else { $_addon_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_addon_, "id"), "html", null, true);
                echo "\">
                </td>

                <td ";
                // line 19
                if (isset($context["addon"])) { $_addon_ = $context["addon"]; } else { $_addon_ = null; }
                if ((!$this->getAttribute($_addon_, "icon_url"))) {
                    echo "style=\"display: none\"";
                }
                echo ">
                    <label for=\"addon_";
                // line 20
                if (isset($context["addon"])) { $_addon_ = $context["addon"]; } else { $_addon_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_addon_, "id"), "html", null, true);
                echo "\"><img src=\"";
                if (isset($context["addon"])) { $_addon_ = $context["addon"]; } else { $_addon_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_addon_, "icon_url"), "html", null, true);
                echo "\" alt=\"\" width=\"36\"/></label>
                </td>

                <td>
                    <label for=\"addon_";
                // line 24
                if (isset($context["addon"])) { $_addon_ = $context["addon"]; } else { $_addon_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_addon_, "id"), "html", null, true);
                echo "\"><h3>";
                if (isset($context["addon"])) { $_addon_ = $context["addon"]; } else { $_addon_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_addon_, "title"), "html", null, true);
                echo "</h3></label>
                    ";
                // line 25
                if (isset($context["addon"])) { $_addon_ = $context["addon"]; } else { $_addon_ = null; }
                echo twig_bbmd_filter($this->env, $this->getAttribute($_addon_, "description"));
                echo "
                </td>

                <td class=\"currency\">
                    <label for=\"addon_";
                // line 29
                if (isset($context["addon"])) { $_addon_ = $context["addon"]; } else { $_addon_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_addon_, "id"), "html", null, true);
                echo "\">
                    ";
                // line 30
                if (isset($context["addon"])) { $_addon_ = $context["addon"]; } else { $_addon_ = null; }
                if (($this->getAttribute($this->getAttribute($_addon_, "pricing"), "type") === "recurrent")) {
                    // line 31
                    echo "                        ";
                    if (isset($context["guest"])) { $_guest_ = $context["guest"]; } else { $_guest_ = null; }
                    $context["periods"] = $this->getAttribute($_guest_, "system_periods");
                    // line 32
                    echo "                        <select name=\"addons[";
                    if (isset($context["addon"])) { $_addon_ = $context["addon"]; } else { $_addon_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_addon_, "id"), "html", null, true);
                    echo "][period]\" rel=\"addon-periods-";
                    if (isset($context["addon"])) { $_addon_ = $context["addon"]; } else { $_addon_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_addon_, "id"), "html", null, true);
                    echo "\">
                        ";
                    // line 33
                    if (isset($context["addon"])) { $_addon_ = $context["addon"]; } else { $_addon_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_addon_, "pricing"), "recurrent"));
                    foreach ($context['_seq'] as $context["code"] => $context["prices"]) {
                        // line 34
                        echo "                        ";
                        if (isset($context["prices"])) { $_prices_ = $context["prices"]; } else { $_prices_ = null; }
                        if ($this->getAttribute($_prices_, "enabled")) {
                            // line 35
                            echo "                        <option value=\"";
                            if (isset($context["code"])) { $_code_ = $context["code"]; } else { $_code_ = null; }
                            echo twig_escape_filter($this->env, $_code_, "html", null, true);
                            echo "\">";
                            if (isset($context["periods"])) { $_periods_ = $context["periods"]; } else { $_periods_ = null; }
                            if (isset($context["code"])) { $_code_ = $context["code"]; } else { $_code_ = null; }
                            echo twig_escape_filter($this->env, $this->getAttribute($_periods_, $_code_, array(), "array"), "html", null, true);
                            echo " ";
                            if (isset($context["prices"])) { $_prices_ = $context["prices"]; } else { $_prices_ = null; }
                            echo twig_money_convert($this->env, $this->getAttribute($_prices_, "price"));
                            echo " ";
                            if (isset($context["prices"])) { $_prices_ = $context["prices"]; } else { $_prices_ = null; }
                            if (($this->getAttribute($_prices_, "setup") != "0.00")) {
                                echo gettext("Setup:");
                                echo " ";
                                if (isset($context["prices"])) { $_prices_ = $context["prices"]; } else { $_prices_ = null; }
                                echo twig_money_convert($this->env, $this->getAttribute($_prices_, "setup"));
                            }
                            echo "</option>
                        ";
                        }
                        // line 37
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['code'], $context['prices'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 38
                    echo "                    </select>
                    ";
                }
                // line 40
                echo "
                    ";
                // line 41
                if (isset($context["addon"])) { $_addon_ = $context["addon"]; } else { $_addon_ = null; }
                if (($this->getAttribute($this->getAttribute($_addon_, "pricing"), "type") === "once")) {
                    // line 42
                    echo "                    ";
                    if (isset($context["addon"])) { $_addon_ = $context["addon"]; } else { $_addon_ = null; }
                    echo twig_money_convert($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute($_addon_, "pricing"), "once"), "price") + $this->getAttribute($this->getAttribute($this->getAttribute($_addon_, "pricing"), "once"), "setup")));
                    echo "
                    ";
                }
                // line 44
                echo "
                    ";
                // line 45
                if (isset($context["addon"])) { $_addon_ = $context["addon"]; } else { $_addon_ = null; }
                if (($this->getAttribute($this->getAttribute($_addon_, "pricing"), "type") === "free")) {
                    // line 46
                    echo "                    ";
                    echo twig_money_convert($this->env, 0);
                    echo "
                    ";
                }
                // line 48
                echo "                    </label>
                </td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['addon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "            </tbody>
        </table>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "mod_orderbutton_addons.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 52,  185 => 48,  179 => 46,  176 => 45,  173 => 44,  166 => 42,  163 => 41,  160 => 40,  156 => 38,  150 => 37,  124 => 34,  119 => 33,  106 => 31,  103 => 30,  98 => 29,  90 => 25,  82 => 24,  71 => 20,  64 => 19,  54 => 16,  49 => 15,  41 => 12,  36 => 11,  27 => 5,  322 => 174,  307 => 162,  299 => 161,  230 => 94,  227 => 93,  220 => 90,  213 => 85,  199 => 77,  195 => 76,  186 => 70,  183 => 69,  167 => 67,  162 => 66,  154 => 64,  149 => 62,  143 => 58,  140 => 57,  128 => 35,  122 => 45,  116 => 42,  110 => 32,  104 => 36,  92 => 27,  89 => 26,  73 => 24,  68 => 23,  65 => 22,  62 => 21,  55 => 20,  50 => 18,  42 => 12,  38 => 10,  35 => 9,  28 => 4,  25 => 3,  22 => 2,  19 => 1,);
    }
}
