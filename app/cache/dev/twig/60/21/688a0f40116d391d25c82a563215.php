<?php

/* form_table_layout.html.twig */
class __TwigTemplate_6021688a0f40116d391d25c82a563215 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->env->loadTemplate("form_div_layout.html.twig");
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('form_widget_compound', $context, $blocks);
    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        // line 4
        ob_start();
        // line 5
        echo "    <tr>
        <td>
            ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
        </td>
        <td>
            ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </td>
    </tr>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 17
    public function block_hidden_row($context, array $blocks = array())
    {
        // line 18
        ob_start();
        // line 19
        echo "    <tr style=\"display: none\">
        <td colspan=\"2\">
            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </td>
    </tr>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 27
    public function block_form_widget_compound($context, array $blocks = array())
    {
        // line 28
        ob_start();
        // line 29
        echo "    <table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 30
        if ((twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent")) && (twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0))) {
            // line 31
            echo "        <tr>
            <td colspan=\"2\">
                ";
            // line 33
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
            </td>
        </tr>
        ";
        }
        // line 37
        echo "        ";
        $this->displayBlock("form_rows", $context, $blocks);
        echo "
        ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    </table>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  113 => 33,  107 => 30,  100 => 28,  97 => 27,  88 => 21,  84 => 19,  82 => 18,  79 => 17,  70 => 11,  66 => 10,  60 => 7,  56 => 5,  54 => 4,  47 => 27,  44 => 26,  39 => 16,  34 => 2,  14 => 1,  125 => 38,  120 => 37,  115 => 6,  109 => 31,  104 => 64,  102 => 29,  78 => 41,  76 => 40,  42 => 17,  38 => 8,  35 => 7,  33 => 6,  29 => 5,  23 => 1,  51 => 3,  45 => 11,  40 => 8,  37 => 3,  31 => 5,  26 => 3,);
    }
}
