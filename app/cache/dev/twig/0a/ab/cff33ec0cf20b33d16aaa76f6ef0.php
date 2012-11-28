<?php

/* SensioHangmanBundle::layout.html.twig */
class __TwigTemplate_0aabcff33ec0cf20b33d16aaa76f6ef0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link href=\"http://fonts.googleapis.com/css?family=Arvo\" rel=\"stylesheet\" type=\"text/css\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sensiohangman/css/style.css"), "html", null, true);
        echo "\" />
        <link rel=\"shortcut icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div id=\"wrapper\">
            <div id=\"header\">
                <div id=\"logo\">
                    <h1>
                        <a href=\"#\">Hangman</a>
                    </h1>
                </div>
                <div id=\"menu\">
                    <ul>
                        <li class=\"first current_page_item\">
                            <a href=\"#\">Homepage</a>
                        </li>
                        <li>
                            <a href=\"#\">Register</a>
                        </li>
                        <li>
                            <a href=\"#\">Login</a>
                        </li>
                        <li>
                            <a href=\"#\">Top10</a>
                        </li>
                    </ul>
                    <br class=\"clearfix\" />
                </div>
            </div>

            <div id=\"page\">
                <div id=\"content\">
                    ";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "                </div>
                <div id=\"sidebar\">
                    <h3>Last Games</h3>
                    <div class=\"date-list\">
                        <ul class=\"list date-list\">

                            <li class=\"first\"><span class=\"date\">Jan 13</span> <a href=\"#\">Ultrices quisque molestie</a></li>
                            <li><span class=\"date\">Jan 7</span> <a href=\"#\">Neque dolor eget</a></li>
                            <li><span class=\"date\">Jan 1</span> <a href=\"#\">Sollicitudin interdum</a></li>
                            <li class=\"last\"><span class=\"date\">Dec 26</span> <a href=\"#\">Varius dignissim</a></li>

                        </ul>
                    </div>
                    <h3>Last players</h3>
                    <p>
                        Urna dis suscipit lorem sed luctus. Elementum suspendisse tempus fermentum ornare libero phasellus nibh conseuqat dolore.
                    </p>
                </div>
                <br class=\"clearfix\" />
            </div>
        </div>

        ";
        // line 63
        $this->displayBlock('javascripts', $context, $blocks);
        // line 64
        echo "    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "The Hangman Workshop";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SensioHangmanBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,  40 => 8,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 67,  181 => 66,  176 => 65,  170 => 61,  168 => 60,  146 => 58,  142 => 56,  128 => 50,  125 => 63,  107 => 36,  38 => 8,  144 => 53,  141 => 51,  135 => 47,  126 => 45,  109 => 5,  103 => 37,  67 => 15,  61 => 13,  47 => 9,  94 => 39,  88 => 6,  59 => 22,  91 => 20,  84 => 28,  44 => 12,  105 => 24,  93 => 28,  79 => 39,  76 => 40,  72 => 14,  68 => 12,  27 => 4,  31 => 5,  28 => 3,  25 => 4,  21 => 1,  24 => 4,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 46,  121 => 45,  118 => 44,  114 => 42,  104 => 64,  100 => 34,  78 => 41,  75 => 23,  71 => 17,  58 => 9,  34 => 11,  26 => 3,  19 => 1,  70 => 20,  63 => 24,  46 => 7,  22 => 2,  163 => 59,  155 => 58,  152 => 49,  149 => 48,  145 => 46,  139 => 55,  131 => 51,  123 => 41,  120 => 40,  115 => 6,  106 => 36,  101 => 32,  96 => 21,  83 => 18,  80 => 24,  74 => 16,  66 => 15,  55 => 15,  52 => 15,  50 => 10,  43 => 7,  41 => 9,  37 => 7,  35 => 7,  32 => 4,  29 => 5,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 60,  153 => 54,  151 => 53,  143 => 54,  138 => 51,  136 => 50,  133 => 43,  130 => 47,  122 => 43,  119 => 42,  116 => 35,  111 => 37,  108 => 37,  102 => 63,  98 => 31,  95 => 34,  92 => 33,  89 => 19,  85 => 25,  81 => 40,  73 => 19,  64 => 14,  60 => 23,  57 => 11,  54 => 10,  51 => 12,  48 => 8,  45 => 11,  42 => 9,  39 => 9,  36 => 5,  33 => 6,  30 => 7,);
    }
}
