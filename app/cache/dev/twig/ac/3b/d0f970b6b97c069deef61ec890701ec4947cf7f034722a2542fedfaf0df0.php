<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_ac3bd0f970b6b97c069deef61ec890701ec4947cf7f034722a2542fedfaf0df0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"content\">
        ";
        // line 5
        $this->env->loadTemplate("@WebProfiler/Profiler/header.html.twig")->display(array());
        // line 6
        echo "
        <div id=\"main\">
            <div class=\"clear-fix\">
                <div id=\"collector-wrapper\">
                    <div id=\"collector-content\">
                        ";
        // line 11
        $this->displayBlock('panel', $context, $blocks);
        // line 34
        echo "                    </div>
                </div>
                <div id=\"navigation\">
                    ";
        // line 37
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_search_bar"));
        echo "
                    ";
        // line 38
        $this->env->loadTemplate("@WebProfiler/Profiler/admin.html.twig")->display(array("token" => ""));
        // line 39
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    // line 11
    public function block_panel($context, array $blocks = array())
    {
        // line 12
        echo "                            ";
        if (((isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "purge")) {
            // line 13
            echo "                                <h2>The profiler database was purged successfully</h2>
                                <p>
                                    <em>Now you need to browse some pages with the Symfony Profiler enabled to collect data.</em>
                                </p>
                            ";
        } elseif (((isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "upload_error")) {
            // line 18
            echo "                                <h2>A problem occurred when uploading the data</h2>
                                <p>
                                    <em>No file given or the file was not uploaded successfully.</em>
                                </p>
                            ";
        } elseif (((isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "already_exists")) {
            // line 23
            echo "                                <h2>A problem occurred when uploading the data</h2>
                                <p>
                                    <em>The token already exists in the database.</em>
                                </p>
                            ";
        } elseif (((isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "no_token")) {
            // line 28
            echo "                                <h2>Token not found</h2>
                                <p>
                                    <em>Token \"";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "\" was not found in the database.</em>
                                </p>
                            ";
        }
        // line 33
        echo "                        ";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  389 => 160,  386 => 159,  378 => 157,  371 => 156,  363 => 153,  358 => 151,  343 => 146,  340 => 145,  328 => 139,  326 => 138,  307 => 128,  302 => 125,  293 => 120,  290 => 119,  276 => 111,  259 => 103,  253 => 100,  672 => 345,  668 => 344,  664 => 342,  651 => 337,  647 => 336,  644 => 335,  640 => 334,  631 => 327,  626 => 325,  613 => 320,  609 => 319,  602 => 317,  593 => 310,  591 => 309,  588 => 308,  585 => 307,  581 => 305,  577 => 303,  569 => 300,  563 => 298,  559 => 296,  557 => 295,  552 => 293,  548 => 292,  545 => 291,  541 => 290,  533 => 284,  531 => 283,  525 => 280,  519 => 278,  515 => 276,  509 => 272,  505 => 270,  499 => 268,  497 => 267,  489 => 262,  483 => 258,  479 => 256,  473 => 254,  471 => 253,  465 => 249,  463 => 248,  459 => 246,  454 => 244,  448 => 240,  438 => 236,  436 => 235,  428 => 230,  418 => 224,  412 => 222,  410 => 221,  400 => 214,  397 => 213,  383 => 207,  376 => 205,  353 => 149,  347 => 191,  317 => 185,  313 => 183,  304 => 181,  295 => 178,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 226,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 158,  373 => 156,  351 => 192,  342 => 137,  335 => 134,  329 => 188,  325 => 129,  323 => 128,  320 => 127,  275 => 105,  270 => 102,  262 => 98,  248 => 97,  233 => 87,  226 => 84,  216 => 79,  194 => 68,  134 => 39,  810 => 492,  807 => 491,  796 => 489,  792 => 488,  788 => 486,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  702 => 472,  698 => 471,  694 => 470,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  677 => 465,  660 => 340,  649 => 462,  634 => 456,  629 => 326,  625 => 453,  622 => 323,  620 => 451,  606 => 318,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 409,  527 => 281,  522 => 279,  517 => 404,  367 => 155,  361 => 152,  357 => 123,  348 => 140,  345 => 147,  338 => 135,  334 => 141,  332 => 116,  327 => 114,  324 => 113,  321 => 135,  318 => 111,  315 => 131,  306 => 107,  297 => 179,  291 => 102,  288 => 118,  265 => 105,  263 => 95,  255 => 101,  231 => 83,  237 => 92,  211 => 83,  150 => 55,  215 => 37,  212 => 78,  191 => 67,  185 => 66,  161 => 63,  180 => 103,  175 => 58,  331 => 140,  316 => 132,  311 => 128,  308 => 126,  303 => 122,  300 => 180,  296 => 121,  292 => 119,  289 => 113,  286 => 112,  284 => 114,  281 => 114,  277 => 112,  274 => 110,  271 => 110,  266 => 106,  261 => 104,  256 => 96,  250 => 99,  234 => 94,  195 => 112,  184 => 63,  172 => 57,  160 => 91,  153 => 56,  267 => 101,  244 => 96,  239 => 93,  236 => 92,  232 => 88,  228 => 88,  225 => 86,  222 => 83,  213 => 78,  210 => 77,  207 => 75,  205 => 108,  202 => 94,  200 => 72,  197 => 69,  192 => 73,  190 => 76,  186 => 69,  174 => 65,  146 => 81,  70 => 15,  76 => 25,  77 => 20,  100 => 39,  188 => 102,  155 => 47,  152 => 46,  129 => 63,  114 => 30,  84 => 27,  81 => 23,  181 => 65,  178 => 59,  170 => 56,  167 => 70,  165 => 60,  148 => 68,  137 => 77,  90 => 20,  65 => 11,  58 => 25,  34 => 5,  126 => 63,  118 => 49,  113 => 48,  23 => 4,  127 => 35,  124 => 55,  110 => 22,  104 => 32,  97 => 41,  53 => 12,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 245,  453 => 199,  444 => 238,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 215,  398 => 129,  393 => 211,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 197,  362 => 110,  360 => 109,  355 => 150,  341 => 189,  337 => 103,  322 => 101,  314 => 99,  312 => 130,  309 => 129,  305 => 124,  298 => 120,  294 => 90,  285 => 175,  283 => 115,  278 => 106,  268 => 85,  264 => 105,  258 => 94,  252 => 100,  247 => 98,  241 => 93,  229 => 87,  220 => 81,  214 => 69,  177 => 102,  169 => 95,  140 => 58,  132 => 57,  128 => 56,  107 => 59,  61 => 17,  273 => 174,  269 => 107,  254 => 102,  243 => 92,  240 => 86,  238 => 95,  235 => 89,  230 => 89,  227 => 86,  224 => 81,  221 => 41,  219 => 76,  217 => 38,  208 => 76,  204 => 72,  179 => 98,  159 => 90,  143 => 51,  135 => 62,  119 => 40,  102 => 33,  71 => 13,  67 => 22,  63 => 21,  59 => 16,  87 => 34,  38 => 7,  93 => 27,  88 => 32,  78 => 18,  201 => 106,  196 => 92,  183 => 17,  171 => 81,  166 => 54,  163 => 53,  158 => 62,  156 => 58,  151 => 59,  142 => 59,  138 => 61,  136 => 71,  121 => 50,  117 => 39,  105 => 25,  91 => 33,  62 => 12,  49 => 14,  94 => 21,  89 => 30,  85 => 23,  75 => 24,  68 => 12,  56 => 16,  27 => 3,  21 => 2,  44 => 11,  31 => 4,  25 => 35,  46 => 34,  26 => 9,  28 => 3,  24 => 3,  19 => 1,  79 => 18,  72 => 17,  69 => 16,  47 => 8,  40 => 8,  37 => 6,  22 => 3,  246 => 96,  157 => 89,  145 => 74,  139 => 49,  131 => 45,  123 => 42,  120 => 31,  115 => 59,  111 => 47,  108 => 19,  101 => 31,  98 => 45,  96 => 30,  83 => 33,  74 => 27,  66 => 47,  55 => 38,  52 => 12,  50 => 18,  43 => 12,  41 => 8,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 73,  199 => 93,  193 => 73,  189 => 66,  187 => 75,  182 => 87,  176 => 63,  173 => 85,  168 => 61,  164 => 59,  162 => 59,  154 => 60,  149 => 91,  147 => 43,  144 => 42,  141 => 51,  133 => 74,  130 => 46,  125 => 51,  122 => 41,  116 => 39,  112 => 36,  109 => 27,  106 => 51,  103 => 55,  99 => 23,  95 => 34,  92 => 28,  86 => 42,  82 => 28,  80 => 27,  73 => 24,  64 => 13,  60 => 20,  57 => 39,  54 => 19,  51 => 37,  48 => 9,  45 => 9,  42 => 11,  39 => 10,  36 => 7,  33 => 6,  30 => 3,);
    }
}
