<?php

/* douaneintraBundle:User/Topic/Partial:transcript.html.twig */
class __TwigTemplate_80a3f34b6ee9079b5683a31c8f1e60b7d122a82ab28149d19e404951d6463548 extends Twig_Template
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
        // line 3
        echo "<div class=\"forum-topic-transcript\">
\t\t<h3>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("topic.transcript", array(), "CCDNForumForumBundle"), "html", null, true);
        echo "</h3>

\t\t<div class=\"well pre-scrollable\">";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getPosts"));
        foreach ($context['_seq'] as $context["key"] => $context["post"]) {
            // line 9
            if ((($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "isDeleted") == false) || $this->env->getExtension('security')->isGranted("ROLE_MODERATOR"))) {
                // line 11
                echo "<div class=\"col-md-12\">
\t\t\t\t\t\t<article class=\"row panel panel-";
                // line 12
                if ((($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "isDeleted") == false) || $this->env->getExtension('security')->isGranted("ROLE_MODERATOR"))) {
                    echo "default ";
                } else {
                    echo "danger ";
                }
                // line 13
                echo "clearfix\" data-snip=\"";
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getBody"), 0, 24), "html", null, true);
                echo "\"";
                if ($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id")) {
                    echo " id=\"post_";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getId"), "html", null, true);
                    echo "\"";
                }
                echo ">

\t\t\t\t\t\t    <header class=\"panel-heading\">";
                // line 16
                if ($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getCreatedBy")) {
                    // line 17
                    echo $this->env->getExtension('translator')->trans("post.posted-by", array(), "CCDNForumForumBundle");
                    // line 18
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getCreatedBy"), "username"), "html", null, true);
                    // line 20
                    echo "&nbsp;&#183;";
                }
                // line 24
                echo "<span class=\"timestamper\" title=\"";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getCreatedDate"), "Y-m-d H:i:s T Z", "Europe/London"), "html", null, true);
                echo "\">";
                // line 25
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getCreatedDate"), $this->getAttribute($this->getAttribute((isset($context["ccdn_forum_forum"]) ? $context["ccdn_forum_forum"] : $this->getContext($context, "ccdn_forum_forum")), "item_post"), "created_datetime_format")), "html", null, true);
                // line 26
                echo "</span>
\t\t\t\t\t\t\t</header>

\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getBody"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</article>
\t\t\t\t\t</div>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "</div>
\t</div>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "douaneintraBundle:User/Topic/Partial:transcript.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 94,  152 => 85,  148 => 83,  124 => 68,  118 => 65,  215 => 37,  212 => 34,  191 => 22,  185 => 18,  161 => 99,  100 => 52,  331 => 135,  316 => 132,  311 => 128,  308 => 126,  303 => 123,  300 => 122,  296 => 121,  292 => 119,  289 => 117,  286 => 115,  284 => 114,  281 => 113,  277 => 112,  274 => 111,  271 => 110,  266 => 106,  261 => 104,  256 => 103,  250 => 99,  234 => 94,  195 => 23,  184 => 75,  178 => 73,  172 => 70,  153 => 80,  114 => 63,  110 => 82,  97 => 27,  267 => 105,  244 => 96,  239 => 93,  236 => 92,  232 => 91,  228 => 89,  225 => 87,  222 => 85,  213 => 82,  210 => 33,  207 => 31,  205 => 30,  202 => 76,  200 => 75,  197 => 25,  192 => 73,  190 => 72,  186 => 69,  174 => 71,  170 => 87,  113 => 43,  81 => 13,  211 => 79,  194 => 88,  188 => 20,  180 => 93,  175 => 89,  160 => 91,  155 => 63,  150 => 69,  129 => 53,  126 => 55,  104 => 53,  90 => 47,  20 => 1,  146 => 61,  137 => 76,  127 => 62,  70 => 37,  58 => 17,  53 => 24,  84 => 39,  76 => 10,  77 => 35,  65 => 24,  34 => 14,  23 => 26,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 124,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 105,  258 => 81,  252 => 100,  247 => 98,  241 => 94,  229 => 73,  220 => 84,  214 => 69,  177 => 102,  169 => 95,  140 => 64,  132 => 66,  128 => 72,  107 => 57,  61 => 22,  273 => 96,  269 => 109,  254 => 102,  243 => 97,  240 => 86,  238 => 95,  235 => 74,  230 => 93,  227 => 92,  224 => 71,  221 => 41,  219 => 76,  217 => 38,  208 => 78,  204 => 72,  179 => 67,  159 => 61,  143 => 81,  135 => 67,  119 => 47,  102 => 55,  71 => 26,  67 => 5,  63 => 27,  59 => 21,  87 => 47,  38 => 12,  93 => 52,  88 => 46,  78 => 31,  201 => 28,  196 => 90,  183 => 17,  171 => 61,  166 => 16,  163 => 92,  158 => 90,  156 => 81,  151 => 73,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 57,  105 => 56,  91 => 40,  62 => 20,  49 => 22,  94 => 48,  89 => 19,  85 => 16,  75 => 34,  68 => 28,  56 => 16,  27 => 3,  21 => 3,  44 => 13,  31 => 10,  25 => 28,  46 => 12,  26 => 4,  28 => 29,  24 => 4,  19 => 1,  79 => 43,  72 => 8,  69 => 25,  47 => 37,  40 => 16,  37 => 14,  22 => 3,  246 => 90,  157 => 95,  145 => 82,  139 => 77,  131 => 65,  123 => 47,  120 => 61,  115 => 59,  111 => 42,  108 => 58,  101 => 53,  98 => 54,  96 => 49,  83 => 45,  74 => 9,  66 => 27,  55 => 3,  52 => 18,  50 => 23,  43 => 14,  41 => 33,  35 => 11,  32 => 5,  29 => 7,  209 => 82,  203 => 29,  199 => 85,  193 => 73,  189 => 71,  187 => 84,  182 => 81,  176 => 72,  173 => 99,  168 => 72,  164 => 59,  162 => 85,  154 => 86,  149 => 91,  147 => 90,  144 => 49,  141 => 76,  133 => 74,  130 => 73,  125 => 61,  122 => 67,  116 => 64,  112 => 62,  109 => 41,  106 => 57,  103 => 55,  99 => 49,  95 => 53,  92 => 44,  86 => 44,  82 => 41,  80 => 40,  73 => 28,  64 => 25,  60 => 18,  57 => 22,  54 => 17,  51 => 16,  48 => 22,  45 => 36,  42 => 10,  39 => 9,  36 => 7,  33 => 9,  30 => 7,);
    }
}
