<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_6ee313f25bed3596e2c4ff5de0378bed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
        echo "\" />
    ";
        // line 5
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_menu($context, array $blocks = array())
    {
        // line 9
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/exception.png"), "html", null, true);
        echo "\" alt=\"Exception\" /></span>
    <strong>Exception</strong>
    <span class=\"count\">
        ";
        // line 13
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception")) {
            // line 14
            echo "            <span>1</span>
        ";
        }
        // line 16
        echo "    </span>
</span>
";
    }

    // line 20
    public function block_panel($context, array $blocks = array())
    {
        // line 21
        echo "    <h2>Exception</h2>

    ";
        // line 23
        if ((!$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception"))) {
            // line 24
            echo "        <p>
            <em>No exception was thrown and uncaught during the request.</em>
        </p>
    ";
        } else {
            // line 28
            echo "        ";
            echo $this->env->getExtension('actions')->renderAction("WebProfilerBundle:Exception:show", array("exception" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "exception"), "format" => "html"), array());
            // line 29
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 29,  209 => 73,  188 => 67,  182 => 64,  160 => 59,  148 => 58,  90 => 28,  113 => 40,  87 => 33,  65 => 22,  276 => 248,  262 => 236,  260 => 235,  238 => 218,  62 => 16,  49 => 17,  53 => 17,  20 => 1,  99 => 39,  77 => 24,  56 => 13,  23 => 3,  40 => 11,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 234,  251 => 80,  246 => 78,  240 => 219,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 69,  181 => 66,  176 => 61,  170 => 60,  168 => 60,  146 => 58,  142 => 56,  128 => 50,  125 => 63,  107 => 36,  38 => 5,  144 => 53,  141 => 51,  135 => 47,  126 => 45,  109 => 43,  103 => 37,  67 => 22,  61 => 18,  47 => 9,  94 => 39,  88 => 36,  59 => 21,  91 => 34,  84 => 25,  44 => 8,  105 => 24,  93 => 28,  79 => 23,  76 => 40,  72 => 14,  68 => 20,  27 => 4,  31 => 4,  28 => 6,  25 => 4,  21 => 2,  24 => 2,  225 => 96,  216 => 90,  212 => 88,  205 => 71,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 47,  127 => 46,  121 => 45,  118 => 44,  114 => 42,  104 => 35,  100 => 36,  78 => 26,  75 => 23,  71 => 21,  58 => 14,  34 => 8,  26 => 3,  19 => 1,  70 => 13,  63 => 16,  46 => 14,  22 => 2,  163 => 59,  155 => 58,  152 => 49,  149 => 48,  145 => 57,  139 => 55,  131 => 51,  123 => 41,  120 => 40,  115 => 44,  106 => 36,  101 => 33,  96 => 35,  83 => 28,  80 => 24,  74 => 21,  66 => 15,  55 => 15,  52 => 18,  50 => 10,  43 => 11,  41 => 12,  37 => 7,  35 => 9,  32 => 6,  29 => 3,  184 => 70,  178 => 62,  171 => 62,  165 => 58,  162 => 57,  157 => 60,  153 => 54,  151 => 53,  143 => 56,  138 => 51,  136 => 50,  133 => 43,  130 => 47,  122 => 43,  119 => 45,  116 => 35,  111 => 37,  108 => 37,  102 => 34,  98 => 32,  95 => 31,  92 => 37,  89 => 30,  85 => 25,  81 => 24,  73 => 23,  64 => 11,  60 => 15,  57 => 19,  54 => 12,  51 => 16,  48 => 8,  45 => 14,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
