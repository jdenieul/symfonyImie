<?php

/* EnsJobeetBundle:Job:new.html.twig */
class __TwigTemplate_8dba7769b8a5078780ef1c6a399236aff2db42ec2e302ca44882e4fa1f9e0ad2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EnsJobeetBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EnsJobeetBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h1>Job creation</h1>

    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("ens_job");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:Job:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 7,  97 => 23,  180 => 60,  155 => 5,  137 => 70,  124 => 62,  118 => 58,  90 => 49,  23 => 1,  161 => 54,  150 => 49,  129 => 40,  126 => 39,  76 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 56,  140 => 55,  132 => 68,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 53,  143 => 45,  135 => 53,  119 => 42,  102 => 53,  71 => 21,  67 => 15,  63 => 17,  59 => 10,  38 => 6,  94 => 28,  89 => 28,  85 => 18,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 50,  88 => 19,  78 => 21,  46 => 7,  27 => 4,  44 => 4,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 61,  171 => 61,  166 => 11,  163 => 10,  158 => 6,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 6,  24 => 4,  25 => 3,  19 => 1,  79 => 24,  72 => 16,  69 => 20,  47 => 9,  40 => 15,  37 => 4,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 44,  131 => 52,  123 => 47,  120 => 38,  115 => 43,  111 => 24,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 22,  66 => 9,  55 => 15,  52 => 12,  50 => 15,  43 => 6,  41 => 6,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 14,  173 => 13,  168 => 72,  164 => 59,  162 => 57,  154 => 51,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 41,  130 => 41,  125 => 44,  122 => 60,  116 => 41,  112 => 36,  109 => 55,  106 => 54,  103 => 33,  99 => 32,  95 => 28,  92 => 21,  86 => 48,  82 => 17,  80 => 16,  73 => 14,  64 => 29,  60 => 6,  57 => 13,  54 => 22,  51 => 14,  48 => 9,  45 => 8,  42 => 7,  39 => 3,  36 => 7,  33 => 4,  30 => 3,);
    }
}
