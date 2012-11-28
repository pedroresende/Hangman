<?php

/* SensioHangmanBundle:Player:players.html.twig */
class __TwigTemplate_4790050e5efb9370e72c9233c2831a2f extends Twig_Template
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
        echo "<ul>
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["players"]) ? $context["players"] : $this->getContext($context, "players")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 3
            echo "        <li>
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), "username"), "html", null, true);
            echo "
        </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 7
            echo "        <li>
            No players yet!
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 11
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "SensioHangmanBundle:Player:players.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 11,  30 => 4,  27 => 3,  22 => 2,  19 => 1,  128 => 66,  123 => 40,  118 => 6,  112 => 5,  107 => 67,  105 => 66,  97 => 60,  95 => 57,  78 => 41,  76 => 40,  42 => 9,  33 => 6,  23 => 1,  67 => 26,  59 => 17,  54 => 15,  51 => 14,  45 => 12,  43 => 11,  38 => 7,  35 => 7,  29 => 5,);
    }
}
