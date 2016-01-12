<?php

/* partial_pagination.phtml */
class __TwigTemplate_50dca978e41717d47e40667d792bafd9692610536ac20b41811ee9a9daea8724 extends Twig_Template
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
        if (isset($context["list"])) { $_list_ = $context["list"]; } else { $_list_ = null; }
        if (($this->getAttribute($_list_, "pages") > 1)) {
            // line 2
            if (isset($context["list"])) { $_list_ = $context["list"]; } else { $_list_ = null; }
            $context["page"] = $this->getAttribute($_list_, "page");
            // line 3
            echo "
<div class=\"pagination pagination-centered\">
    <ul>
        <li ";
            // line 6
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            if (((!$this->getAttribute($_request_, "page")) || ($this->getAttribute($_request_, "page") == 1))) {
                echo "class=\"disabled\"";
            }
            echo ">
            <a href=\"";
            // line 7
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            if (($this->getAttribute($_request_, "page") && ($this->getAttribute($_request_, "page") != 1))) {
                echo "?";
                if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_merge(twig_array_merge(array(), $_request_), array("page" => 1)));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    if (isset($context["k"])) { $_k_ = $context["k"]; } else { $_k_ = null; }
                    echo twig_escape_filter($this->env, $_k_, "html", null, true);
                    echo "=";
                    if (isset($context["v"])) { $_v_ = $context["v"]; } else { $_v_ = null; }
                    echo twig_escape_filter($this->env, $_v_, "html", null, true);
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    if (($this->getAttribute($_loop_, "last") == false)) {
                        echo "&";
                    }
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            } else {
                echo "#";
            }
            echo "\">«</a>
        </li>

        <li ";
            // line 10
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            if (((!$this->getAttribute($_request_, "page")) || ($this->getAttribute($_request_, "page") == 1))) {
                echo "class=\"disabled\"";
            }
            echo ">
        <a href=\"";
            // line 11
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            if (($this->getAttribute($_request_, "page") && ($this->getAttribute($_request_, "page") != "1"))) {
                echo "?";
                if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_merge(twig_array_merge(array(), $_request_), array("page" => ($this->getAttribute($_request_, "page") - 1))));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    if (isset($context["k"])) { $_k_ = $context["k"]; } else { $_k_ = null; }
                    echo twig_escape_filter($this->env, $_k_, "html", null, true);
                    echo "=";
                    if (isset($context["v"])) { $_v_ = $context["v"]; } else { $_v_ = null; }
                    echo twig_escape_filter($this->env, $_v_, "html", null, true);
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    if (($this->getAttribute($_loop_, "last") == false)) {
                        echo "&";
                    }
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            } else {
                echo "#";
            }
            echo "\"> <span class=\"awe-arrow-left\"></span> </a>
        </li>

        ";
            // line 14
            if (isset($context["list"])) { $_list_ = $context["list"]; } else { $_list_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($_list_, "pages")));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 15
                echo "            <li  ";
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                if (isset($context["page"])) { $_page_ = $context["page"]; } else { $_page_ = null; }
                if (($_i_ == $_page_)) {
                    echo "class=\"active\" ";
                }
                echo ">
            ";
                // line 16
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
                if ((($_i_ == $this->getAttribute($_request_, "page")) || ((!$this->getAttribute($_request_, "page")) && ($_i_ == 1)))) {
                    // line 17
                    echo "                <a href=\"#\" onclick=\"return false;\">";
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo twig_escape_filter($this->env, $_i_, "html", null, true);
                    echo "</a>
            ";
                } else {
                    // line 19
                    echo "                <a href=\"?";
                    if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_merge(twig_array_merge(array(), $_request_), array("page" => $_i_)));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                        if (isset($context["k"])) { $_k_ = $context["k"]; } else { $_k_ = null; }
                        echo twig_escape_filter($this->env, $_k_, "html", null, true);
                        echo "=";
                        if (isset($context["v"])) { $_v_ = $context["v"]; } else { $_v_ = null; }
                        echo twig_escape_filter($this->env, $_v_, "html", null, true);
                        if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                        if (($this->getAttribute($_loop_, "last") == false)) {
                            echo "&";
                        }
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "\">";
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo twig_escape_filter($this->env, $_i_, "html", null, true);
                    echo "</a>
            ";
                }
                // line 21
                echo "            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "
        <li ";
            // line 24
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            if (isset($context["list"])) { $_list_ = $context["list"]; } else { $_list_ = null; }
            if (($this->getAttribute($_request_, "page") == $this->getAttribute($_list_, "pages"))) {
                echo "class=\"disabled\"";
            }
            echo ">
            <a href=\"";
            // line 25
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            if (isset($context["list"])) { $_list_ = $context["list"]; } else { $_list_ = null; }
            if (($this->getAttribute($_request_, "page") && ($this->getAttribute($_request_, "page") != $this->getAttribute($_list_, "pages")))) {
                echo "?";
                if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_merge(twig_array_merge(array(), $_request_), array("page" => ($this->getAttribute($_request_, "page") + 1))));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    if (isset($context["k"])) { $_k_ = $context["k"]; } else { $_k_ = null; }
                    echo twig_escape_filter($this->env, $_k_, "html", null, true);
                    echo "=";
                    if (isset($context["v"])) { $_v_ = $context["v"]; } else { $_v_ = null; }
                    echo twig_escape_filter($this->env, $_v_, "html", null, true);
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    if (($this->getAttribute($_loop_, "last") == false)) {
                        echo "&";
                    }
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            } elseif ((!$this->getAttribute($_request_, "page"))) {
                echo "?";
                if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_merge(twig_array_merge(array(), $_request_), array("page" => 2)));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    if (isset($context["k"])) { $_k_ = $context["k"]; } else { $_k_ = null; }
                    echo twig_escape_filter($this->env, $_k_, "html", null, true);
                    echo "=";
                    if (isset($context["v"])) { $_v_ = $context["v"]; } else { $_v_ = null; }
                    echo twig_escape_filter($this->env, $_v_, "html", null, true);
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    if (($this->getAttribute($_loop_, "last") == false)) {
                        echo "&";
                    }
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            } else {
                echo "#";
            }
            echo "\"><span class=\"awe-arrow-right\"></span> </a>
        </li>

        <li ";
            // line 28
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            if (isset($context["list"])) { $_list_ = $context["list"]; } else { $_list_ = null; }
            if (($this->getAttribute($_request_, "page") == $this->getAttribute($_list_, "pages"))) {
                echo "class=\"disabled\"";
            }
            echo ">
            <a href=\"";
            // line 29
            if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
            if (isset($context["list"])) { $_list_ = $context["list"]; } else { $_list_ = null; }
            if (((!$this->getAttribute($_request_, "page")) || ($this->getAttribute($_request_, "page") != $this->getAttribute($_list_, "pages")))) {
                echo "?";
                if (isset($context["request"])) { $_request_ = $context["request"]; } else { $_request_ = null; }
                if (isset($context["list"])) { $_list_ = $context["list"]; } else { $_list_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_merge(twig_array_merge(array(), $_request_), array("page" => $this->getAttribute($_list_, "pages"))));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    if (isset($context["k"])) { $_k_ = $context["k"]; } else { $_k_ = null; }
                    echo twig_escape_filter($this->env, $_k_, "html", null, true);
                    echo "=";
                    if (isset($context["v"])) { $_v_ = $context["v"]; } else { $_v_ = null; }
                    echo twig_escape_filter($this->env, $_v_, "html", null, true);
                    if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
                    if (($this->getAttribute($_loop_, "last") == false)) {
                        echo "&";
                    }
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            } else {
                echo "#";
            }
            echo "\">»</a>
        </li>
    </ul>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partial_pagination.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 29,  322 => 28,  232 => 25,  224 => 24,  221 => 23,  214 => 21,  167 => 19,  160 => 17,  156 => 16,  147 => 15,  142 => 14,  93 => 11,  86 => 10,  37 => 7,  30 => 6,  25 => 3,  22 => 2,  19 => 1,  196 => 77,  192 => 75,  189 => 74,  169 => 57,  161 => 52,  155 => 48,  152 => 47,  144 => 43,  140 => 42,  135 => 39,  126 => 36,  123 => 35,  114 => 32,  109 => 31,  104 => 30,  98 => 29,  91 => 28,  87 => 27,  80 => 23,  76 => 22,  72 => 21,  62 => 14,  58 => 13,  51 => 8,  48 => 7,  40 => 4,  34 => 3,  28 => 5,  26 => 2,);
    }
}
