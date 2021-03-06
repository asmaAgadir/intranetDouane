<?php

/* douaneintraBundle:Common/Layout/Sidebar:user_forum.html.twig */
class __TwigTemplate_2c1e4bb12e757c854e7bdc28862ee13638a74627177d77f166b53b2df37b9717 extends Twig_Template
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
        echo "<ul class=\"nav nav-pills nav-stacked\">";
        // line 5
        $context["route"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "attributes"), "get", array(0 => "_route"), "method");
        // line 7
        if ((!array_key_exists("topic", $context))) {
            // line 8
            if (array_key_exists("post", $context)) {
                // line 9
                $context["topic"] = $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getTopic");
            }
        }
        // line 13
        if ((!array_key_exists("board", $context))) {
            // line 14
            if (array_key_exists("topic", $context)) {
                // line 15
                $context["board"] = $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getBoard");
            } else {
                // line 17
                if (array_key_exists("post", $context)) {
                    // line 18
                    if ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "getTopic", array(), "any", true, true)) {
                        // line 19
                        $context["board"] = $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "getTopic"), "getBoard");
                    }
                }
            }
        }
        // line 25
        if ((!array_key_exists("category", $context))) {
            // line 26
            if (array_key_exists("board", $context)) {
                // line 27
                $context["category"] = $this->getAttribute((isset($context["board"]) ? $context["board"] : $this->getContext($context, "board")), "getCategory");
            } else {
                // line 29
                if (array_key_exists("topic", $context)) {
                    // line 30
                    $context["category"] = $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "getBoard");
                }
            }
        }
        // line 37
        if ((array_key_exists("forum", $context) && (!null))) {
            // line 38
            if ((((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "ccdn_homepage") || ((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "ccdn_forum_user_category_index"))) {
                // line 40
                echo "<li class=\"active\">
\t\t\t\t\t<a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_category_index", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")))), "html", null, true);
                echo "\">
\t\t\t\t\t\t<i class=\"glyphicon glyphicon-home\"></i>";
            } else {
                // line 44
                echo "<li>
\t\t\t\t\t<a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ccdn_forum_user_category_index", array("forumName" => (isset($context["forumName"]) ? $context["forumName"] : $this->getContext($context, "forumName")))), "html", null, true);
                echo "\">
\t\t\t\t\t\t<i class=\"glyphicon glyphicon-home\"></i>";
            }
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.category.index", array(), "CCDNForumForumBundle"), "html", null, true);
            // line 49
            echo "</a>
\t\t\t\t</li>";
            // line 52
            if ((twig_slice($this->env, (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), 0, 28) != "ccdn_forum_user_subscription")) {
                // line 53
                $this->env->loadTemplate("CCDNForumForumBundle:Common:Layout/Sidebar/Partial/user_boards.html.twig")->display($context);
            }
        }
        // line 57
        echo "</ul>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "douaneintraBundle:Common/Layout/Sidebar:user_forum.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 48,  76 => 44,  77 => 37,  65 => 31,  34 => 6,  23 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 41,  67 => 15,  63 => 30,  59 => 30,  87 => 43,  38 => 15,  93 => 28,  88 => 6,  78 => 21,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 53,  62 => 23,  49 => 19,  94 => 45,  89 => 52,  85 => 42,  75 => 17,  68 => 40,  56 => 9,  27 => 8,  21 => 3,  44 => 19,  31 => 10,  25 => 7,  46 => 7,  26 => 6,  28 => 3,  24 => 3,  19 => 1,  79 => 45,  72 => 16,  69 => 35,  47 => 9,  40 => 17,  37 => 15,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 52,  101 => 48,  98 => 31,  96 => 46,  83 => 25,  74 => 14,  66 => 38,  55 => 15,  52 => 26,  50 => 25,  43 => 8,  41 => 17,  35 => 14,  32 => 4,  29 => 9,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 56,  109 => 34,  106 => 51,  103 => 32,  99 => 31,  95 => 57,  92 => 21,  86 => 49,  82 => 39,  80 => 38,  73 => 19,  64 => 37,  60 => 29,  57 => 29,  54 => 27,  51 => 14,  48 => 8,  45 => 21,  42 => 18,  39 => 9,  36 => 7,  33 => 13,  30 => 5,);
    }
}
