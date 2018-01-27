<?php

/* @particles/bookingform.html.twig */
class __TwigTemplate_70ecb0bbdad8c8faf7014898a9aa27c1bfc5d873624b15fcd65863c0104ca48e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/bookingform.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", array()));
        echo "\">
    ";
        // line 5
        if ($this->getAttribute(($context["particle"] ?? null), "token", array())) {
            // line 6
            echo "    <form id=\"g-bookingform-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" data-bookingform-id=\"g-bookingform-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" data-bookingform-token=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "token", array()), "html", null, true);
            echo "\" data-bookingform-requiredmessage=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "required", array()), "html", null, true);
            echo "\" class=\"g-bookingform\" action=\"#\" method=\"post\">
        <fieldset>

            <div class=\"g-bookingform-visible\">
                ";
            // line 10
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
                // line 11
                echo "                <div class=\"g-bookingform-item ";
                if (($this->getAttribute($context["item"], "type", array()) == "spinner")) {
                    echo "g-bookingform-spinner";
                }
                echo " ";
                if (($this->getAttribute($context["item"], "type", array()) == "datepicker")) {
                    echo "g-bookingform-calendar";
                }
                echo "\" ";
                if (($this->getAttribute($context["item"], "type", array()) == "spinner")) {
                    echo "data-trigger=\"spinner\"";
                }
                echo ">
                    ";
                // line 12
                if ($this->getAttribute($context["item"], "label", array())) {
                    // line 13
                    echo "                    <label for=\"g-bookingform-item-id-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", array()), "html", null, true);
                    if (($this->getAttribute($context["item"], "required", array()) == "enabled")) {
                        echo "<sup>*</sup>";
                    }
                    echo "</label>
                    ";
                }
                // line 15
                echo "                    <input type=\"text\" class=\"";
                if (($this->getAttribute($context["item"], "type", array()) == "datepicker")) {
                    echo "g-bookingform-datepicker";
                }
                if (($this->getAttribute($context["item"], "required", array()) == "enabled")) {
                    echo " g-bookingform-item-required";
                }
                echo "\" name=\"";
                echo twig_escape_filter($this->env, twig_replace_filter(twig_title_string_filter($this->env, $this->getAttribute($context["item"], "label", array())), array(" " => "")), "html", null, true);
                echo "\" ";
                if (($this->getAttribute($context["item"], "required", array()) == "enabled")) {
                    echo "required=\"required\"";
                }
                echo " id=\"g-bookingform-item-id-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" placeholder=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "placeholder", array()), "html", null, true);
                echo "\" ";
                if (($this->getAttribute($context["item"], "type", array()) == "spinner")) {
                    echo "data-min=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "min", array()), "html", null, true);
                    echo "\" data-max=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "max", array()), "html", null, true);
                    echo "\"";
                }
                echo ">
                    ";
                // line 16
                if (($this->getAttribute($context["item"], "type", array()) == "datepicker")) {
                    // line 17
                    echo "                    <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
                    ";
                }
                // line 19
                echo "                    ";
                if (($this->getAttribute($context["item"], "type", array()) == "spinner")) {
                    // line 20
                    echo "                    <div class=\"g-bookingform-spinners\">
                        <a href=\"javascript:;\" data-spin=\"up\"><i class=\"fa fa-angle-up\" aria-hidden=\"true\"></i></a>
                        <a href=\"javascript:;\" data-spin=\"down\"><i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i></a>
                    </div>
                    ";
                }
                // line 25
                echo "                </div>
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
            // line 27
            echo "
                <div class=\"g-bookingform-button1\">
                    <label for=\"g-bookingform-submit-top\">&nbsp;</label>
                    <a href=\"javascript:;\" class=\"button\" id=\"g-bookingform-submit-top\">";
            // line 30
            echo (($this->getAttribute(($context["particle"] ?? null), "button1", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "button1", array()), "Submit")) : ("Submit"));
            echo "</a>
                </div>
            </div>

            <div class=\"g-bookingform-hidden\">
                <div class=\"g-bookingform-buttonback\">
                    <label for=\"g-bookingform-back\">&nbsp;</label>
                    <a href=\"javascript:;\" class=\"button\" id=\"g-bookingform-back\"><i class=\"fa fa-angle-double-left\" aria-hidden=\"true\"></i></a>
                </div>
                ";
            // line 39
            if ($this->getAttribute(($context["particle"] ?? null), "name", array())) {
                // line 40
                echo "                <div class=\"g-bookingform-item\">
                    <label for=\"g-bookingform-item-name\">";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "name", array()), "html", null, true);
                echo "<sup>*</sup></label>
                    <input type=\"text\" name=\"Name\" id=\"g-bookingform-item-name\" class=\"g-bookingform-item-required\" placeholder=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "name_placeholder", array()), "html", null, true);
                echo "\">
                </div>
                ";
            }
            // line 45
            echo "                ";
            if ($this->getAttribute(($context["particle"] ?? null), "email", array())) {
                // line 46
                echo "                <div class=\"g-bookingform-item\">
                    <label for=\"g-bookingform-item-email\">";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "email", array()), "html", null, true);
                echo "<sup>*</sup></label>
                    <input type=\"text\" name=\"Email\" id=\"g-bookingform-item-email\" class=\"g-bookingform-item-required\" placeholder=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "email_placeholder", array()), "html", null, true);
                echo "\">
                </div>
                ";
            }
            // line 51
            echo "                <div class=\"g-bookingform-button2\">
                    <label for=\"g-bookingform-submit-bottom\">&nbsp;</label>
                    <a href=\"javascript:;\" class=\"button\" id=\"g-bookingform-submit-bottom\">";
            // line 53
            echo (($this->getAttribute(($context["particle"] ?? null), "button2", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "button2", array()), "Submit")) : ("Submit"));
            echo "</a>
                </div>
            </div>
            <div class=\"g-bookingform-thankyou\">
                <p class=\"alert alert-success\"><i class=\"fa fa-check-circle\" aria-hidden=\"true\"></i>  ";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "thankyou", array()), "html", null, true);
            echo "</p>
            </div>
            <div class=\"g-bookingform-error\">
                <p class=\"alert alert-error\"><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i>  ";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "error", array()), "html", null, true);
            echo "</p>
            </div>

        </fieldset>
    </form>
    ";
        }
        // line 66
        echo "</div>
";
    }

    // line 69
    public function block_javascript_footer($context, array $blocks = array())
    {
        // line 70
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/datepicker.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/spinner.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/bookingform.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@particles/bookingform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 72,  244 => 71,  239 => 70,  236 => 69,  231 => 66,  222 => 60,  216 => 57,  209 => 53,  205 => 51,  199 => 48,  195 => 47,  192 => 46,  189 => 45,  183 => 42,  179 => 41,  176 => 40,  174 => 39,  162 => 30,  157 => 27,  142 => 25,  135 => 20,  132 => 19,  128 => 17,  126 => 16,  98 => 15,  87 => 13,  85 => 12,  70 => 11,  53 => 10,  39 => 6,  37 => 5,  32 => 4,  29 => 3,  11 => 1,);
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

{% block particle %}
<div class=\"{{ particle.class|e }}\">
    {% if particle.token %}
    <form id=\"g-bookingform-{{ id }}\" data-bookingform-id=\"g-bookingform-{{ id }}\" data-bookingform-token=\"{{ particle.token }}\" data-bookingform-requiredmessage=\"{{ particle.required }}\" class=\"g-bookingform\" action=\"#\" method=\"post\">
        <fieldset>

            <div class=\"g-bookingform-visible\">
                {% for item in particle.items %}
                <div class=\"g-bookingform-item {% if item.type == 'spinner' %}g-bookingform-spinner{% endif %} {% if item.type == 'datepicker' %}g-bookingform-calendar{% endif %}\" {% if item.type == 'spinner' %}data-trigger=\"spinner\"{% endif %}>
                    {% if item.label %}
                    <label for=\"g-bookingform-item-id-{{ loop.index }}\">{{ item.label }}{% if item.required == 'enabled' %}<sup>*</sup>{% endif %}</label>
                    {% endif %}
                    <input type=\"text\" class=\"{% if item.type == 'datepicker' %}g-bookingform-datepicker{% endif %}{% if item.required == 'enabled' %} g-bookingform-item-required{% endif %}\" name=\"{{ item.label|title|replace({' ':''}) }}\" {% if item.required == 'enabled' %}required=\"required\"{% endif %} id=\"g-bookingform-item-id-{{ loop.index }}\" placeholder=\"{{ item.placeholder }}\" {% if item.type == 'spinner' %}data-min=\"{{ item.min }}\" data-max=\"{{ item.max }}\"{% endif %}>
                    {% if item.type == 'datepicker' %}
                    <i class=\"fa fa-calendar\" aria-hidden=\"true\"></i>
                    {% endif %}
                    {% if item.type == 'spinner' %}
                    <div class=\"g-bookingform-spinners\">
                        <a href=\"javascript:;\" data-spin=\"up\"><i class=\"fa fa-angle-up\" aria-hidden=\"true\"></i></a>
                        <a href=\"javascript:;\" data-spin=\"down\"><i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i></a>
                    </div>
                    {% endif %}
                </div>
                {% endfor %}

                <div class=\"g-bookingform-button1\">
                    <label for=\"g-bookingform-submit-top\">&nbsp;</label>
                    <a href=\"javascript:;\" class=\"button\" id=\"g-bookingform-submit-top\">{{ particle.button1|default('Submit')|raw }}</a>
                </div>
            </div>

            <div class=\"g-bookingform-hidden\">
                <div class=\"g-bookingform-buttonback\">
                    <label for=\"g-bookingform-back\">&nbsp;</label>
                    <a href=\"javascript:;\" class=\"button\" id=\"g-bookingform-back\"><i class=\"fa fa-angle-double-left\" aria-hidden=\"true\"></i></a>
                </div>
                {% if particle.name %}
                <div class=\"g-bookingform-item\">
                    <label for=\"g-bookingform-item-name\">{{ particle.name }}<sup>*</sup></label>
                    <input type=\"text\" name=\"Name\" id=\"g-bookingform-item-name\" class=\"g-bookingform-item-required\" placeholder=\"{{ particle.name_placeholder }}\">
                </div>
                {% endif %}
                {% if particle.email %}
                <div class=\"g-bookingform-item\">
                    <label for=\"g-bookingform-item-email\">{{ particle.email }}<sup>*</sup></label>
                    <input type=\"text\" name=\"Email\" id=\"g-bookingform-item-email\" class=\"g-bookingform-item-required\" placeholder=\"{{ particle.email_placeholder }}\">
                </div>
                {% endif %}
                <div class=\"g-bookingform-button2\">
                    <label for=\"g-bookingform-submit-bottom\">&nbsp;</label>
                    <a href=\"javascript:;\" class=\"button\" id=\"g-bookingform-submit-bottom\">{{ particle.button2|default('Submit')|raw }}</a>
                </div>
            </div>
            <div class=\"g-bookingform-thankyou\">
                <p class=\"alert alert-success\"><i class=\"fa fa-check-circle\" aria-hidden=\"true\"></i>  {{ particle.thankyou }}</p>
            </div>
            <div class=\"g-bookingform-error\">
                <p class=\"alert alert-error\"><i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i>  {{ particle.error }}</p>
            </div>

        </fieldset>
    </form>
    {% endif %}
</div>
{% endblock %}

{% block javascript_footer %}
<script src=\"{{ url('gantry-theme://js/datepicker.js') }}\"></script>
<script src=\"{{ url('gantry-theme://js/spinner.js') }}\"></script>
<script src=\"{{ url('gantry-theme://js/bookingform.js') }}\"></script>
{% endblock %}
", "@particles/bookingform.html.twig", "/var/www/html/user/themes/rt_sienna/particles/bookingform.html.twig");
    }
}
