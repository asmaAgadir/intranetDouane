<?php

/* douaneintraBundle:Common/Layout:crumbs.html.twig */
class __TwigTemplate_9261a95dc17838fced1a1689063468440e46ea6ff2cd507094df9198f7823623 extends Twig_Template
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
        ob_start();
        // line 2
        echo "<ol class=\"breadcrumb\">";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["crumbs"]) ? $context["crumbs"] : $this->getContext($context, "crumbs")), "getTrail"));
        foreach ($context['_seq'] as $context["key"] => $context["crumb"]) {
            // line 4
            echo "<li>
\t\t\t\t<a href=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["crumb"]) ? $context["crumb"] : $this->getContext($context, "crumb")), "url"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["crumb"]) ? $context["crumb"] : $this->getContext($context, "crumb")), "label"), "html", null, true);
            echo "\">";
            echo $this->getAttribute((isset($context["crumb"]) ? $context["crumb"] : $this->getContext($context, "crumb")), "label");
            echo "</a>
\t\t\t</li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['crumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "</ol>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "douaneintraBundle:Common/Layout:crumbs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 37,  65 => 31,  34 => 6,  23 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 36,  67 => 15,  63 => 30,  59 => 14,  87 => 43,  38 => 15,  93 => 28,  88 => 6,  78 => 21,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  94 => 45,  89 => 44,  85 => 42,  75 => 17,  68 => 14,  56 => 9,  27 => 4,  21 => 2,  44 => 12,  31 => 10,  25 => 3,  46 => 7,  26 => 6,  28 => 3,  24 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 35,  47 => 9,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 52,  101 => 48,  98 => 31,  96 => 46,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 27,  50 => 26,  43 => 8,  41 => 17,  35 => 5,  32 => 4,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 56,  109 => 34,  106 => 51,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 39,  80 => 38,  73 => 19,  64 => 14,  60 => 29,  57 => 11,  54 => 28,  51 => 14,  48 => 8,  45 => 21,  42 => 8,  39 => 9,  36 => 7,  33 => 4,  30 => 5,);
    }
}