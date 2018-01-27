<?php

/* @particles/simplebooking.html.twig */
class __TwigTemplate_01b033ee01928ac9df12fad80116ff485424744c84c795af3c22ce969f5ab614 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/simplebooking.html.twig", 1);
        $this->blocks = array(
            'particle' => array($this, 'block_particle'),
            'javascript_footer' => array($this, 'block_javascript_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $this->getAttribute(($context["gantry"] ?? null), "load", array(0 => "lightcase.init"), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_particle($context, array $blocks = array())
    {
        // line 6
        echo "<div id=\"g-";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" data-simplebooking-id=\"g-";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\"  class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", array()));
        echo "\">
    <form id=\"g-";
        // line 7
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "-form\" data-simplebooking-id=\"g-";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "-form\" data-simplebooking-requiredmessage=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "required", array()), "html", null, true);
        echo "\" class=\"g-simplebooking-form g-simplebooking-mainform\" action=\"#\" method=\"post\">
        <div class=\"g-simplebooking-visible\">
            <div class=\"g-simplebooking-item  g-simplebooking-calendar\">
                <label>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "checkin", array()), "html", null, true);
        echo "<sup>*</sup></label>
                <input type=\"text\" class=\"g-simplebooking-datepicker g-simplebooking-item-required g-simplebooking-item-id-1\" name=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_replace_filter(twig_title_string_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "checkin", array())), array(" " => "")), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "checkin_placeholder", array()), "html", null, true);
        echo "\">
                <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
            </div>
            <div class=\"g-simplebooking-item  g-simplebooking-calendar\">
                <label>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "checkout", array()), "html", null, true);
        echo "<sup>*</sup></label>
                <input type=\"text\" class=\"g-simplebooking-datepicker g-simplebooking-item-required g-simplebooking-item-id-2\" name=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_replace_filter(twig_title_string_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "checkout", array())), array(" " => "")), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "checkout_placeholder", array()), "html", null, true);
        echo "\">
                <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
            </div>
            <div class=\"g-simplebooking-item g-simplebooking-spinner \" data-trigger=\"spinner\">
                <label>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "adults", array()), "html", null, true);
        echo "<sup>*</sup></label>
                <input type=\"text\" class=\"g-simplebooking-item-required g-simplebooking-item-id-3\" data-min=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "adults_min", array()), "html", null, true);
        echo "\" data-max=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "adults_max", array()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, twig_replace_filter(twig_title_string_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "adults", array())), array(" " => "")), "html", null, true);
        echo "\" placeholder=\"\">
                <div class=\"g-simplebooking-spinners\">
                    <a href=\"javascript:;\" data-spin=\"up\"><i class=\"fa fa-angle-up\" aria-hidden=\"true\"></i></a>
                    <a href=\"javascript:;\" data-spin=\"down\"><i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i></a>
                </div>
            </div>
            <div class=\"g-simplebooking-item g-simplebooking-spinner \" data-trigger=\"spinner\">
                <label>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "children", array()), "html", null, true);
        echo "</label>
                <input type=\"text\" class=\"g-simplebooking-item-id-4\" data-min=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "children_min", array()), "html", null, true);
        echo "\" data-max=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "children_max", array()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, twig_replace_filter(twig_title_string_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "children", array())), array(" " => "")), "html", null, true);
        echo "\" placeholder=\"\">
                <div class=\"g-simplebooking-spinners\">
                    <a href=\"javascript:;\" data-spin=\"up\"><i class=\"fa fa-angle-up\" aria-hidden=\"true\"></i></a>
                    <a href=\"javascript:;\" data-spin=\"down\"><i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i></a>
                </div>
            </div>
            <div class=\"g-simplebooking-button\">
                <label for=\"g-simplebooking-button\">&nbsp;</label>
                <i class=\"fa fa-refresh\" id=\"g-simplebooking-button-";
        // line 37
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" aria-hidden=\"true\"></i>
            </div>
        </div>
    </form>

    <div class=\"g-simplebooking-items\">
        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "items", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 44
            echo "        <div id=\"g-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" data-id=\"g-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" data-adults=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "adults", array()), "html", null, true);
            echo "\" data-children=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "children", array()), "html", null, true);
            echo "\" data-start=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "start", array()), "html", null, true);
            echo "\" data-end=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "end", array()), "html", null, true);
            echo "\" class=\"g-simplebooking-item\">
            <div class=\"g-simplebooking-item-container g-simplebooking-list\">
                ";
            // line 46
            if ($this->getAttribute($context["item"], "image", array())) {
                // line 47
                echo "                <div class=\"g-simplebooking-item-image\">
                    <a class=\"g-simplebooking-item-link\" href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "image", array())));
                echo "\" data-rel=\"lightcase\">
                        <img src=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "image", array())));
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()));
                echo "\" />
                        <div class=\"indicator\">
                            <div>
                                <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                            </div>
                        </div>
                    </a>
                </div>
                ";
            }
            // line 58
            echo "                <div class=\"g-simplebooking-item-content\">
                    <div class=\"g-simplebooking-item-title\">
                        <span class=\"g-simplebooking-item-maintitle\">";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo "</span>
                        <span class=\"g-simplebooking-item-subtitle\">";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "subtitle", array()), "html", null, true);
            echo "</span>
                    </div>
                    <p class=\"g-simplebooking-item-description\">";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "description", array()), "html", null, true);
            echo "</p>
                </div>
                <div class=\"g-simplebooking-item-pricing\">
                    <div class=\"g-simplebooking-item-price\">
                        ";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "price", array()), "html", null, true);
            echo "<sup>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "subprice", array()), "html", null, true);
            echo "</sup>
                    </div>
                    <div class=\"g-simplebooking-item-price-description\">
                        ";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "pricedesc", array()), "html", null, true);
            echo "
                    </div>
                </div>
                <div class=\"g-simplebooking-item-button\">
                    <a href=\"javascript:;\" class=\"button\">";
            // line 74
            echo $this->getAttribute($context["item"], "button", array());
            echo "</a>
                </div>
            </div>

            <div class=\"g-simplebooking-item-container g-simplebooking-form\">
                <form id=\"g-simplebooking-submit-";
            // line 79
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" data-simplebooking-token=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "token", array()), "html", null, true);
            echo "\" action=\"#\" method=\"post\">
                    <div class=\"g-simplebooking-hidden\">
                        <div class=\"g-simplebooking-buttonback\">
                            <label for=\"g-simplebooking-back-";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\">&nbsp;</label>
                            <a href=\"javascript:;\" class=\"button\" id=\"g-simplebooking-back-";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\"><i class=\"fa fa-angle-double-left\" aria-hidden=\"true\"></i></a>
                        </div>
                        <div class=\"g-simplebooking-item\">
                            <label for=\"g-simplebooking-item-name-";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "name", array()), "html", null, true);
            echo "</label>
                            <input type=\"text\" name=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "name", array()), "html", null, true);
            echo "\" id=\"g-simplebooking-item-name-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"g-simplebooking-item-required\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "name_placeholder", array()), "html", null, true);
            echo "\">
                        </div>
                        <div class=\"g-simplebooking-item\">
                            <label for=\"g-simplebooking-item-email-";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "email", array()), "html", null, true);
            echo "</label>
                            <input type=\"text\" name=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "email", array()), "html", null, true);
            echo "\" id=\"g-simplebooking-item-email-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"g-simplebooking-item-required\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "email_placeholder", array()), "html", null, true);
            echo "\">
                        </div>
                        <div class=\"g-simplebooking-button2\">
                            <label for=\"g-simplebooking-button-";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\">&nbsp;</label>
                            <a href=\"javascript:;\" class=\"button\" id=\"g-simplebooking-button-";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "button", array()), "html", null, true);
            echo "</a>
                        </div>
                    </div>
                    <div class=\"g-simplebooking-thankyou\">
                        <p class=\"alert alert-success\"><i class=\"fa fa-check-circle\" aria-hidden=\"true\"></i>  ";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "thankyou", array()), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"g-simplebooking-error\">
                        <p class=\"alert alert-error\"><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i>  ";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "error", array()), "html", null, true);
            echo "</p>
                    </div>
                    <input type=\"hidden\" name=\"Title\" value=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo "\">
                    <input type=\"hidden\" name=\"SubTitle\" value=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "subtitle", array()), "html", null, true);
            echo "\">
                    <input type=\"hidden\" name=\"Description\" value=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "description", array()), "html", null, true);
            echo "\">
                    <input type=\"hidden\" name=\"Price\" value=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "price", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "subprice", array()), "html", null, true);
            echo "\">
                    <input class=\"g-simplebooking-hiddenfields-checkin\" type=\"hidden\" name=\"CheckInDate\" value=\"\">
                    <input class=\"g-simplebooking-hiddenfields-checkout\" type=\"hidden\" name=\"CheckOutDate\" value=\"\">
                    <input class=\"g-simplebooking-hiddenfields-adults\" type=\"hidden\" name=\"Adults\" value=\"\">
                    <input class=\"g-simplebooking-hiddenfields-children\" type=\"hidden\" name=\"Children\" value=\"\">
                </form>
            </div>
        </div>
        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "    </div>
</div>
";
    }

    // line 120
    public function block_javascript_footer($context, array $blocks = array())
    {
        // line 121
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/datepicker.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/spinner.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/simplebooking.js"), "html", null, true);
        echo "\"></script>

<script type=\"text/javascript\">
window.getSize = function() {
    return {
        x: window.innerWidth,
        y: window.innerHeight
    }
};
</script>
";
    }

    public function getTemplateName()
    {
        return "@particles/simplebooking.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 123,  361 => 122,  356 => 121,  353 => 120,  347 => 116,  323 => 107,  319 => 106,  315 => 105,  311 => 104,  306 => 102,  300 => 99,  289 => 95,  285 => 94,  273 => 91,  267 => 90,  255 => 87,  249 => 86,  241 => 83,  237 => 82,  229 => 79,  221 => 74,  214 => 70,  206 => 67,  199 => 63,  194 => 61,  190 => 60,  186 => 58,  172 => 49,  168 => 48,  165 => 47,  163 => 46,  143 => 44,  126 => 43,  117 => 37,  102 => 29,  98 => 28,  84 => 21,  80 => 20,  71 => 16,  67 => 15,  58 => 11,  54 => 10,  44 => 7,  35 => 6,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@nucleus/partials/particle.html.twig' %}

{% do gantry.load('lightcase.init') %}

{% block particle %}
<div id=\"g-{{ id }}\" data-simplebooking-id=\"g-{{ id }}\"  class=\"{{ particle.class|e }}\">
    <form id=\"g-{{ id }}-form\" data-simplebooking-id=\"g-{{ id }}-form\" data-simplebooking-requiredmessage=\"{{ particle.required }}\" class=\"g-simplebooking-form g-simplebooking-mainform\" action=\"#\" method=\"post\">
        <div class=\"g-simplebooking-visible\">
            <div class=\"g-simplebooking-item  g-simplebooking-calendar\">
                <label>{{ particle.checkin }}<sup>*</sup></label>
                <input type=\"text\" class=\"g-simplebooking-datepicker g-simplebooking-item-required g-simplebooking-item-id-1\" name=\"{{ particle.checkin|title|replace({' ': ''}) }}\" placeholder=\"{{ particle.checkin_placeholder }}\">
                <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
            </div>
            <div class=\"g-simplebooking-item  g-simplebooking-calendar\">
                <label>{{ particle.checkout }}<sup>*</sup></label>
                <input type=\"text\" class=\"g-simplebooking-datepicker g-simplebooking-item-required g-simplebooking-item-id-2\" name=\"{{ particle.checkout|title|replace({' ': ''}) }}\" placeholder=\"{{ particle.checkout_placeholder }}\">
                <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
            </div>
            <div class=\"g-simplebooking-item g-simplebooking-spinner \" data-trigger=\"spinner\">
                <label>{{ particle.adults }}<sup>*</sup></label>
                <input type=\"text\" class=\"g-simplebooking-item-required g-simplebooking-item-id-3\" data-min=\"{{ particle.adults_min }}\" data-max=\"{{ particle.adults_max }}\" name=\"{{ particle.adults|title|replace({' ': ''}) }}\" placeholder=\"\">
                <div class=\"g-simplebooking-spinners\">
                    <a href=\"javascript:;\" data-spin=\"up\"><i class=\"fa fa-angle-up\" aria-hidden=\"true\"></i></a>
                    <a href=\"javascript:;\" data-spin=\"down\"><i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i></a>
                </div>
            </div>
            <div class=\"g-simplebooking-item g-simplebooking-spinner \" data-trigger=\"spinner\">
                <label>{{ particle.children }}</label>
                <input type=\"text\" class=\"g-simplebooking-item-id-4\" data-min=\"{{ particle.children_min }}\" data-max=\"{{ particle.children_max }}\" name=\"{{ particle.children|title|replace({' ': ''}) }}\" placeholder=\"\">
                <div class=\"g-simplebooking-spinners\">
                    <a href=\"javascript:;\" data-spin=\"up\"><i class=\"fa fa-angle-up\" aria-hidden=\"true\"></i></a>
                    <a href=\"javascript:;\" data-spin=\"down\"><i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i></a>
                </div>
            </div>
            <div class=\"g-simplebooking-button\">
                <label for=\"g-simplebooking-button\">&nbsp;</label>
                <i class=\"fa fa-refresh\" id=\"g-simplebooking-button-{{ id }}\" aria-hidden=\"true\"></i>
            </div>
        </div>
    </form>

    <div class=\"g-simplebooking-items\">
        {% for item in particle.items %}
        <div id=\"g-{{ id }}-{{ loop.index }}\" data-id=\"g-{{ id }}-{{ loop.index }}\" data-adults=\"{{ item.adults }}\" data-children=\"{{ item.children }}\" data-start=\"{{ item.start }}\" data-end=\"{{ item.end }}\" class=\"g-simplebooking-item\">
            <div class=\"g-simplebooking-item-container g-simplebooking-list\">
                {% if item.image %}
                <div class=\"g-simplebooking-item-image\">
                    <a class=\"g-simplebooking-item-link\" href=\"{{ url(item.image)|e }}\" data-rel=\"lightcase\">
                        <img src=\"{{ url(item.image)|e }}\" alt=\"{{ item.title|e }}\" />
                        <div class=\"indicator\">
                            <div>
                                <i class=\"fa fa-search\" aria-hidden=\"true\"></i>
                            </div>
                        </div>
                    </a>
                </div>
                {% endif %}
                <div class=\"g-simplebooking-item-content\">
                    <div class=\"g-simplebooking-item-title\">
                        <span class=\"g-simplebooking-item-maintitle\">{{ item.title }}</span>
                        <span class=\"g-simplebooking-item-subtitle\">{{ item.subtitle }}</span>
                    </div>
                    <p class=\"g-simplebooking-item-description\">{{ item.description }}</p>
                </div>
                <div class=\"g-simplebooking-item-pricing\">
                    <div class=\"g-simplebooking-item-price\">
                        {{ item.price }}<sup>{{ item.subprice }}</sup>
                    </div>
                    <div class=\"g-simplebooking-item-price-description\">
                        {{ item.pricedesc }}
                    </div>
                </div>
                <div class=\"g-simplebooking-item-button\">
                    <a href=\"javascript:;\" class=\"button\">{{ item.button|raw }}</a>
                </div>
            </div>

            <div class=\"g-simplebooking-item-container g-simplebooking-form\">
                <form id=\"g-simplebooking-submit-{{ id }}\" data-simplebooking-token=\"{{ particle.token }}\" action=\"#\" method=\"post\">
                    <div class=\"g-simplebooking-hidden\">
                        <div class=\"g-simplebooking-buttonback\">
                            <label for=\"g-simplebooking-back-{{ loop.index }}\">&nbsp;</label>
                            <a href=\"javascript:;\" class=\"button\" id=\"g-simplebooking-back-{{ loop.index }}-{{ id }}\"><i class=\"fa fa-angle-double-left\" aria-hidden=\"true\"></i></a>
                        </div>
                        <div class=\"g-simplebooking-item\">
                            <label for=\"g-simplebooking-item-name-{{ loop.index }}\">{{ particle.name }}</label>
                            <input type=\"text\" name=\"{{ particle.name }}\" id=\"g-simplebooking-item-name-{{ loop.index }}-{{ id }}\" class=\"g-simplebooking-item-required\" placeholder=\"{{ particle.name_placeholder }}\">
                        </div>
                        <div class=\"g-simplebooking-item\">
                            <label for=\"g-simplebooking-item-email-{{ loop.index }}\">{{ particle.email }}</label>
                            <input type=\"text\" name=\"{{ particle.email }}\" id=\"g-simplebooking-item-email-{{ loop.index }}-{{ id }}\" class=\"g-simplebooking-item-required\" placeholder=\"{{ particle.email_placeholder }}\">
                        </div>
                        <div class=\"g-simplebooking-button2\">
                            <label for=\"g-simplebooking-button-{{ loop.index }}\">&nbsp;</label>
                            <a href=\"javascript:;\" class=\"button\" id=\"g-simplebooking-button-{{ loop.index }}-{{ id }}\">{{ particle.button }}</a>
                        </div>
                    </div>
                    <div class=\"g-simplebooking-thankyou\">
                        <p class=\"alert alert-success\"><i class=\"fa fa-check-circle\" aria-hidden=\"true\"></i>  {{ particle.thankyou }}</p>
                    </div>
                    <div class=\"g-simplebooking-error\">
                        <p class=\"alert alert-error\"><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i>  {{ particle.error }}</p>
                    </div>
                    <input type=\"hidden\" name=\"Title\" value=\"{{ item.title }}\">
                    <input type=\"hidden\" name=\"SubTitle\" value=\"{{ item.subtitle }}\">
                    <input type=\"hidden\" name=\"Description\" value=\"{{ item.description }}\">
                    <input type=\"hidden\" name=\"Price\" value=\"{{ item.price }}{{ item.subprice }}\">
                    <input class=\"g-simplebooking-hiddenfields-checkin\" type=\"hidden\" name=\"CheckInDate\" value=\"\">
                    <input class=\"g-simplebooking-hiddenfields-checkout\" type=\"hidden\" name=\"CheckOutDate\" value=\"\">
                    <input class=\"g-simplebooking-hiddenfields-adults\" type=\"hidden\" name=\"Adults\" value=\"\">
                    <input class=\"g-simplebooking-hiddenfields-children\" type=\"hidden\" name=\"Children\" value=\"\">
                </form>
            </div>
        </div>
        {% endfor %}
    </div>
</div>
{% endblock %}

{% block javascript_footer %}
<script src=\"{{ url('gantry-theme://js/datepicker.js') }}\"></script>
<script src=\"{{ url('gantry-theme://js/spinner.js') }}\"></script>
<script src=\"{{ url('gantry-theme://js/simplebooking.js') }}\"></script>

<script type=\"text/javascript\">
window.getSize = function() {
    return {
        x: window.innerWidth,
        y: window.innerHeight
    }
};
</script>
{% endblock %}
", "@particles/simplebooking.html.twig", "/var/www/html/user/themes/rt_sienna/particles/simplebooking.html.twig");
    }
}
