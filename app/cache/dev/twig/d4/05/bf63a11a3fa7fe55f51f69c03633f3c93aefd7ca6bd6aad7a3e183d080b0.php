<?php

/* AcmeDemoBundle:Secured:login.html.twig */
class __TwigTemplate_d405bf63a11a3fa7fe55f51f69c03633f3c93aefd7ca6bd6aad7a3e183d080b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 35
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h1 class=\"title\">Login</h1>

    <p>
        Choose between two default users: <em>user/userpass</em> <small>(ROLE_USER)</small> or <em>admin/adminpass</em> <small>(ROLE_ADMIN)</small>
    </p>

    ";
        // line 10
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 11
            echo "        <div class=\"error\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "</div>
    ";
        }
        // line 13
        echo "
    <form action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("_security_check");
        echo "\" method=\"post\" id=\"login\">
        <div>
            <label for=\"username\">Username</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
        </div>

        <div>
            <label for=\"password\">Password</label>
            <input type=\"password\" id=\"password\" name=\"_password\" />
        </div>

        <button type=\"submit\" class=\"sf-button\">
            <span class=\"border-l\">
                <span class=\"border-r\">
                    <span class=\"btn-bg\">Login</span>
                </span>
            </span>
        </button>
    </form>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 81,  237 => 92,  165 => 69,  167 => 91,  152 => 86,  148 => 68,  124 => 55,  118 => 64,  215 => 72,  212 => 34,  191 => 81,  185 => 76,  161 => 90,  100 => 52,  331 => 135,  316 => 132,  311 => 128,  308 => 126,  303 => 123,  300 => 122,  296 => 121,  292 => 119,  289 => 117,  286 => 115,  284 => 114,  281 => 113,  277 => 112,  274 => 111,  271 => 110,  266 => 106,  261 => 104,  256 => 103,  250 => 99,  234 => 94,  195 => 112,  184 => 75,  178 => 73,  172 => 70,  153 => 78,  114 => 62,  110 => 22,  97 => 27,  267 => 105,  244 => 96,  239 => 93,  236 => 92,  232 => 91,  228 => 88,  225 => 91,  222 => 85,  213 => 82,  210 => 62,  207 => 31,  205 => 10,  202 => 76,  200 => 7,  197 => 25,  192 => 73,  190 => 72,  186 => 69,  174 => 98,  170 => 85,  113 => 48,  81 => 13,  211 => 83,  194 => 119,  188 => 20,  180 => 103,  175 => 89,  160 => 89,  155 => 87,  150 => 85,  129 => 63,  126 => 63,  104 => 41,  90 => 32,  20 => 1,  146 => 81,  137 => 77,  127 => 28,  70 => 24,  58 => 17,  53 => 11,  84 => 29,  76 => 17,  77 => 35,  65 => 22,  34 => 11,  23 => 4,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 124,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 105,  258 => 81,  252 => 100,  247 => 98,  241 => 96,  229 => 73,  220 => 78,  214 => 69,  177 => 102,  169 => 94,  140 => 72,  132 => 57,  128 => 56,  107 => 59,  61 => 12,  273 => 96,  269 => 109,  254 => 102,  243 => 97,  240 => 86,  238 => 95,  235 => 74,  230 => 89,  227 => 92,  224 => 71,  221 => 41,  219 => 76,  217 => 38,  208 => 78,  204 => 72,  179 => 67,  159 => 89,  143 => 64,  135 => 68,  119 => 57,  102 => 17,  71 => 31,  67 => 36,  63 => 29,  59 => 13,  87 => 47,  38 => 6,  93 => 36,  88 => 31,  78 => 26,  201 => 28,  196 => 90,  183 => 17,  171 => 81,  166 => 16,  163 => 92,  158 => 90,  156 => 81,  151 => 77,  142 => 74,  138 => 61,  136 => 72,  121 => 58,  117 => 19,  105 => 18,  91 => 35,  62 => 23,  49 => 13,  94 => 34,  89 => 43,  85 => 16,  75 => 29,  68 => 26,  56 => 11,  27 => 3,  21 => 2,  44 => 10,  31 => 3,  25 => 35,  46 => 8,  26 => 9,  28 => 3,  24 => 4,  19 => 1,  79 => 43,  72 => 27,  69 => 29,  47 => 8,  40 => 6,  37 => 5,  22 => 3,  246 => 90,  157 => 81,  145 => 65,  139 => 77,  131 => 65,  123 => 58,  120 => 20,  115 => 59,  111 => 53,  108 => 19,  101 => 52,  98 => 40,  96 => 39,  83 => 45,  74 => 33,  66 => 26,  55 => 19,  52 => 14,  50 => 22,  43 => 11,  41 => 10,  35 => 5,  32 => 5,  29 => 3,  209 => 82,  203 => 29,  199 => 85,  193 => 73,  189 => 107,  187 => 77,  182 => 74,  176 => 99,  173 => 99,  168 => 84,  164 => 90,  162 => 85,  154 => 86,  149 => 80,  147 => 78,  144 => 80,  141 => 76,  133 => 62,  130 => 73,  125 => 61,  122 => 68,  116 => 56,  112 => 48,  109 => 52,  106 => 44,  103 => 55,  99 => 39,  95 => 37,  92 => 43,  86 => 42,  82 => 28,  80 => 31,  73 => 16,  64 => 13,  60 => 21,  57 => 12,  54 => 17,  51 => 17,  48 => 9,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}
