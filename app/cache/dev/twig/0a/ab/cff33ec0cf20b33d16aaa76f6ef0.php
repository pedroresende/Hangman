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
                            <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hangman_game"), "html", null, true);
        echo "\">Homepage</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("registration"), "html", null, true);
        echo "\">Register</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("signin"), "html", null, true);
        echo "\">Login</a>
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
                    ";
        // line 57
        echo $this->env->getExtension('actions')->renderAction("SensioHangmanBundle:Player:players", array("max" => 10), array("standalone" => true));
        // line 60
        echo "                    </p>
                </div>
                <br class=\"clearfix\" />
            </div>
        </div>

        ";
        // line 66
        $this->displayBlock('javascripts', $context, $blocks);
        // line 67
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

    // line 66
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
        return array (  137 => 66,  132 => 40,  127 => 6,  121 => 5,  116 => 67,  114 => 66,  106 => 60,  104 => 57,  87 => 41,  85 => 40,  70 => 28,  64 => 25,  58 => 22,  42 => 9,  38 => 8,  35 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }
}
