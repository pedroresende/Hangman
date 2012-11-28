<?php

/* SensioHangmanBundle:Game:won.html.twig */
class __TwigTemplate_fc17618186ac14f2218ba24871f05df8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioHangmanBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioHangmanBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo "Hangman Game - You won!";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "
    <h2>Congratulations!</h2>

        <p>
            You found the word <strong>";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["word"]) ? $context["word"] : $this->getContext($context, "word")), "html", null, true);
        echo "</strong> and won this party.
        </p>

";
    }

    public function getTemplateName()
    {
        return "SensioHangmanBundle:Game:won.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 14,  39 => 10,  36 => 9,  32 => 5,  29 => 3,);
    }
}
