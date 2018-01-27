<?php

/* @particles/newsletter.html.twig */
class __TwigTemplate_cad2ab260742796d6aa939c19cc2afd079538279895a8742e030a21adc90b3e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/newsletter.html.twig", 1);
        $this->blocks = array(
            'particle' => array($this, 'block_particle'),
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
        echo "
    <div class=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", array()));
        echo "\">

        ";
        // line 7
        if ($this->getAttribute(($context["particle"] ?? null), "title", array())) {
            echo "<h2 class=\"g-title\">";
            echo $this->getAttribute(($context["particle"] ?? null), "title", array());
            echo "</h2>";
        }
        // line 8
        echo "
        <div id=\"g-newsletter-";
        // line 9
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"g-newsletter ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "width", array()));
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "layout", array()));
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "style", array()));
        echo "\">
            ";
        // line 10
        if ($this->getAttribute(($context["particle"] ?? null), "headtext", array())) {
            // line 11
            echo "                <div class=\"g-newsletter-headtext\">";
            echo $this->getAttribute(($context["particle"] ?? null), "headtext", array());
            echo "</div>
            ";
        }
        // line 13
        echo "
            <form id=\"g-newsletter-form-";
        // line 14
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"g-newsletter-form\" action=\"//feedburner.google.com/fb/a/mailverify\" method=\"post\" target=\"popupwindow\" onsubmit=\"window.open('//feedburner.google.com/fb/a/mailverify?uri=";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "uri", array()));
        echo "', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true\">
                ";
        // line 15
        if ($this->getAttribute(($context["particle"] ?? null), "sidetext", array())) {
            // line 16
            echo "                    <div class=\"g-newsletter-sidetext\">";
            echo $this->getAttribute(($context["particle"] ?? null), "sidetext", array());
            echo "</div>
                ";
        }
        // line 18
        echo "
                <div class=\"g-newsletter-form-wrapper\">
                    <div class=\"g-newsletter-inputbox\">
                        <input type=\"text\" placeholder=\"";
        // line 21
        echo $this->getAttribute(($context["particle"] ?? null), "inputboxtext", array());
        echo "\" name=\"email\">
                        <input type=\"hidden\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "uri", array()));
        echo "\" name=\"uri\">
                        <input type=\"hidden\" name=\"loc\" value=\"en_US\">
                    </div>
                    <div class=\"g-newsletter-button\">
                        <a class=\"g-newsletter-button-submit ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "buttonclass", array()));
        echo "\" href=\"#\" onclick=\"document.getElementById('g-newsletter-form-";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "').submit()\">
                            ";
        // line 27
        if ($this->getAttribute(($context["particle"] ?? null), "buttonicon", array())) {
            // line 28
            echo "                                <span class=\"g-newsletter-button-icon\"><i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "buttonicon", array()));
            echo "\"></i></span>
                            ";
        }
        // line 30
        echo "                            <span class=\"g-newsletter-button-text\">";
        echo $this->getAttribute(($context["particle"] ?? null), "buttontext", array());
        echo "</span>
                        </a>
                    </div>
                </div>

            </form>
        </div>

    </div>

";
    }

    public function getTemplateName()
    {
        return "@particles/newsletter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 30,  107 => 28,  105 => 27,  99 => 26,  92 => 22,  88 => 21,  83 => 18,  77 => 16,  75 => 15,  69 => 14,  66 => 13,  60 => 11,  58 => 10,  48 => 9,  45 => 8,  39 => 7,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
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

        {% if particle.title %}<h2 class=\"g-title\">{{ particle.title|raw }}</h2>{% endif %}

        <div id=\"g-newsletter-{{ id }}\" class=\"g-newsletter {{ particle.width|e }} {{ particle.layout|e }} {{ particle.style|e }}\">
            {% if particle.headtext %}
                <div class=\"g-newsletter-headtext\">{{ particle.headtext|raw }}</div>
            {% endif %}

            <form id=\"g-newsletter-form-{{ id }}\" class=\"g-newsletter-form\" action=\"//feedburner.google.com/fb/a/mailverify\" method=\"post\" target=\"popupwindow\" onsubmit=\"window.open('//feedburner.google.com/fb/a/mailverify?uri={{ particle.uri|e }}', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true\">
                {% if particle.sidetext %}
                    <div class=\"g-newsletter-sidetext\">{{ particle.sidetext|raw }}</div>
                {% endif %}

                <div class=\"g-newsletter-form-wrapper\">
                    <div class=\"g-newsletter-inputbox\">
                        <input type=\"text\" placeholder=\"{{ particle.inputboxtext|raw }}\" name=\"email\">
                        <input type=\"hidden\" value=\"{{ particle.uri|e }}\" name=\"uri\">
                        <input type=\"hidden\" name=\"loc\" value=\"en_US\">
                    </div>
                    <div class=\"g-newsletter-button\">
                        <a class=\"g-newsletter-button-submit {{ particle.buttonclass|e }}\" href=\"#\" onclick=\"document.getElementById('g-newsletter-form-{{ id }}').submit()\">
                            {% if particle.buttonicon %}
                                <span class=\"g-newsletter-button-icon\"><i class=\"{{ particle.buttonicon|e }}\"></i></span>
                            {% endif %}
                            <span class=\"g-newsletter-button-text\">{{ particle.buttontext|raw }}</span>
                        </a>
                    </div>
                </div>

            </form>
        </div>

    </div>

{% endblock %}
", "@particles/newsletter.html.twig", "/var/www/html/user/themes/rt_sienna/particles/newsletter.html.twig");
    }
}
