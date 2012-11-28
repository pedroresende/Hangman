<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_e70b56fcb08a51a3bf0c4a79966d53d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
    public function block_toolbar($context, array $blocks = array())
    {
    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        // line 7
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/routing.png"), "html", null, true);
        echo "\" alt=\"Routing\" /></span>
    <strong>Routing</strong>
</span>
";
    }

    // line 13
    public function block_panel($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        echo $this->env->getExtension('actions')->renderAction("WebProfilerBundle:Router:panel", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token"))), array());
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 163,  347 => 160,  343 => 159,  335 => 157,  333 => 156,  325 => 150,  323 => 149,  316 => 145,  309 => 141,  302 => 137,  295 => 133,  288 => 129,  281 => 125,  274 => 121,  259 => 109,  252 => 105,  245 => 101,  217 => 83,  214 => 82,  211 => 81,  206 => 78,  203 => 77,  192 => 72,  158 => 56,  140 => 49,  110 => 39,  69 => 20,  86 => 28,  209 => 73,  188 => 67,  182 => 69,  160 => 59,  148 => 52,  90 => 28,  113 => 40,  87 => 33,  65 => 22,  276 => 248,  262 => 236,  260 => 235,  238 => 97,  62 => 16,  49 => 13,  53 => 17,  20 => 1,  99 => 39,  77 => 24,  56 => 13,  23 => 3,  40 => 11,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 158,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 234,  251 => 80,  246 => 78,  240 => 219,  234 => 74,  228 => 89,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 74,  181 => 66,  176 => 61,  170 => 60,  168 => 60,  146 => 58,  142 => 56,  128 => 45,  125 => 44,  107 => 36,  38 => 7,  144 => 53,  141 => 51,  135 => 47,  126 => 45,  109 => 43,  103 => 37,  67 => 22,  61 => 18,  47 => 9,  94 => 39,  88 => 36,  59 => 21,  91 => 34,  84 => 25,  44 => 8,  105 => 24,  93 => 31,  79 => 23,  76 => 40,  72 => 22,  68 => 20,  27 => 4,  31 => 4,  28 => 6,  25 => 4,  21 => 2,  24 => 2,  225 => 88,  216 => 90,  212 => 88,  205 => 71,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 64,  159 => 61,  154 => 54,  147 => 55,  132 => 47,  127 => 46,  121 => 45,  118 => 44,  114 => 42,  104 => 36,  100 => 35,  78 => 26,  75 => 23,  71 => 21,  58 => 14,  34 => 8,  26 => 3,  19 => 1,  70 => 13,  63 => 16,  46 => 14,  22 => 2,  163 => 59,  155 => 58,  152 => 49,  149 => 48,  145 => 57,  139 => 55,  131 => 46,  123 => 41,  120 => 40,  115 => 44,  106 => 36,  101 => 33,  96 => 35,  83 => 27,  80 => 24,  74 => 21,  66 => 19,  55 => 15,  52 => 14,  50 => 10,  43 => 11,  41 => 8,  37 => 7,  35 => 6,  32 => 6,  29 => 3,  184 => 70,  178 => 62,  171 => 62,  165 => 60,  162 => 57,  157 => 60,  153 => 54,  151 => 53,  143 => 56,  138 => 51,  136 => 50,  133 => 43,  130 => 47,  122 => 43,  119 => 43,  116 => 41,  111 => 37,  108 => 37,  102 => 34,  98 => 32,  95 => 31,  92 => 37,  89 => 29,  85 => 25,  81 => 24,  73 => 23,  64 => 11,  60 => 16,  57 => 19,  54 => 13,  51 => 12,  48 => 11,  45 => 14,  42 => 8,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
