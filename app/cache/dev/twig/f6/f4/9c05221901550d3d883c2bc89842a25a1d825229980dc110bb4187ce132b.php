<?php

/* EnsJobeetBundle:Job:index.html.twig */
class __TwigTemplate_f6f49c05221901550d3d883c2bc89842a25a1d825229980dc110bb4187ce132b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EnsJobeetBundle::layout.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
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

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/css/jobs.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<div id=\"jobs\">
    ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 9
            echo "    <div>
        <div class=\"category\">
            <div class=\"feed\">
                <a href=\"\">Feed</a>
            </div>
            <h1><a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EnsJobeetBundle_category", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "slug"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name"), "html", null, true);
            echo "</a></h1>
        </div>
";
            // line 16
            $this->env->loadTemplate("EnsJobeetBundle:Job:list.html.twig")->display(array_merge($context, array("jobs" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "activejobs"))));
            // line 17
            echo "              ";
            if ($this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "morejobs")) {
                // line 18
                echo "        <div class=\"more_jobs\">
          and <a href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EnsJobeetBundle_category", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "slug"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "morejobs"), "html", null, true);
                echo "</a> more ...
           
        </div>
          ";
            }
            // line 23
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:Job:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 23,  180 => 60,  155 => 5,  137 => 70,  124 => 62,  118 => 58,  90 => 49,  23 => 1,  161 => 54,  150 => 49,  129 => 40,  126 => 39,  76 => 23,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 56,  140 => 55,  132 => 68,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 53,  143 => 45,  135 => 53,  119 => 42,  102 => 53,  71 => 21,  67 => 15,  63 => 17,  59 => 14,  38 => 6,  94 => 28,  89 => 28,  85 => 18,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 50,  88 => 19,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 61,  171 => 61,  166 => 11,  163 => 10,  158 => 6,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 8,  24 => 4,  25 => 3,  19 => 1,  79 => 24,  72 => 16,  69 => 20,  47 => 9,  40 => 15,  37 => 4,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 44,  131 => 52,  123 => 47,  120 => 38,  115 => 43,  111 => 24,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 22,  66 => 9,  55 => 15,  52 => 21,  50 => 15,  43 => 6,  41 => 7,  35 => 10,  32 => 3,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 14,  173 => 13,  168 => 72,  164 => 59,  162 => 57,  154 => 51,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 41,  130 => 41,  125 => 44,  122 => 60,  116 => 41,  112 => 36,  109 => 55,  106 => 54,  103 => 33,  99 => 32,  95 => 28,  92 => 21,  86 => 48,  82 => 17,  80 => 16,  73 => 14,  64 => 29,  60 => 6,  57 => 13,  54 => 22,  51 => 14,  48 => 9,  45 => 17,  42 => 7,  39 => 9,  36 => 7,  33 => 4,  30 => 3,);
    }
}
