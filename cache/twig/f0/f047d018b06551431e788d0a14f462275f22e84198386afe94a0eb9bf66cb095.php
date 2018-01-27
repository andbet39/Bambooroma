<?php

/* @particles/owlcarousel.html.twig */
class __TwigTemplate_0eba107d55c607782909deee6c928b47f89bcbed3d6300cb0d432e3cd0fbb5cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/owlcarousel.html.twig", 1);
        $this->blocks = array(
            'particle' => array($this, 'block_particle'),
            'layout' => array($this, 'block_layout'),
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
        echo "    ";
        $this->displayBlock('layout', $context, $blocks);
    }

    public function block_layout($context, array $blocks = array())
    {
        // line 5
        echo "
        ";
        // line 7
        echo "        ";
        if (($this->getAttribute(($context["particle"] ?? null), "source", array()) && ($this->getAttribute(($context["particle"] ?? null), "source", array()) != "particle"))) {
            // line 8
            echo "            ";
            $this->loadTemplate((((("@particles/owlcarousel/" . $this->getAttribute(($context["particle"] ?? null), "layout", array())) . "-") . $this->getAttribute(($context["particle"] ?? null), "source", array())) . ".html.twig"), "@particles/owlcarousel.html.twig", 8)->display($context);
            // line 9
            echo "        ";
        } else {
            // line 10
            echo "            ";
            $this->loadTemplate((("@particles/owlcarousel/" . $this->getAttribute(($context["particle"] ?? null), "layout", array())) . ".html.twig"), "@particles/owlcarousel.html.twig", 10)->display($context);
            // line 11
            echo "        ";
        }
        // line 12
        echo "
    ";
    }

    // line 16
    public function block_javascript_footer($context, array $blocks = array())
    {
        // line 17
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/owlcarousel.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
    jQuery(window).load(function() {
        var owl";
        // line 20
        echo twig_escape_filter($this->env, twig_replace_filter(($context["id"] ?? null), array("-" => "_")), "html", null, true);
        echo " = jQuery('#g-owlcarousel-";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "');
        owl";
        // line 21
        echo twig_escape_filter($this->env, twig_replace_filter(($context["id"] ?? null), array("-" => "_")), "html", null, true);
        echo ".owlCarousel({
            items: ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "displayitems", array()), "html", null, true);
        echo ",
            rtl: ";
        // line 23
        if (($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "page", array()), "direction", array()) == "rtl")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
            ";
        // line 24
        if (($this->getAttribute(($context["particle"] ?? null), "animateOut", array()) && ($this->getAttribute(($context["particle"] ?? null), "animateOut", array()) != "default"))) {
            // line 25
            echo "            animateOut: '";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "animateOut", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "animateOut", array()), "fadeOut")) : ("fadeOut")));
            echo "',
            ";
        }
        // line 27
        echo "            ";
        if (($this->getAttribute(($context["particle"] ?? null), "animateIn", array()) && ($this->getAttribute(($context["particle"] ?? null), "animateIn", array()) != "default"))) {
            // line 28
            echo "            animateIn: '";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "animateIn", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "animateIn", array()), "fadeIn")) : ("fadeIn")));
            echo "',
            ";
        }
        // line 30
        echo "            ";
        if (($this->getAttribute(($context["particle"] ?? null), "nav", array()) == "enabled")) {
            // line 31
            echo "            nav: true,
            navText: ['";
            // line 32
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "prevText", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "prevText", array()), "<i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i>")) : ("<i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i>")), "js"), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "nextText", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "nextText", array()), "<i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i>")) : ("<i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i>")), "js"), "html", null, true);
            echo "'],
            ";
        } else {
            // line 34
            echo "            nav: false,
            ";
        }
        // line 36
        echo "            ";
        if (($this->getAttribute(($context["particle"] ?? null), "dots", array()) == "enabled")) {
            // line 37
            echo "            dots: true,
            ";
        } else {
            // line 39
            echo "            dots: false,
            ";
        }
        // line 41
        echo "            ";
        if (((($this->getAttribute(($context["particle"] ?? null), "loop", array()) == "enabled") && ($this->getAttribute(($context["particle"] ?? null), "layout", array()) != "showcase")) && ($this->getAttribute(($context["particle"] ?? null), "layout", array()) != "newsslider"))) {
            // line 42
            echo "            loop: true,
            ";
        } else {
            // line 44
            echo "            loop: false,
            ";
        }
        // line 46
        echo "            ";
        if (($this->getAttribute(($context["particle"] ?? null), "autoplay", array()) == "enabled")) {
            // line 47
            echo "            autoplay: true,
            autoplayTimeout: ";
            // line 48
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "autoplaySpeed", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "autoplaySpeed", array()), "5000")) : ("5000")), "html", null, true);
            echo ",
            ";
            // line 49
            if (($this->getAttribute(($context["particle"] ?? null), "pauseOnHover", array()) == "enabled")) {
                // line 50
                echo "            autoplayHoverPause: true,
            ";
            } else {
                // line 52
                echo "            autoplayHoverPause: false,
            ";
            }
            // line 54
            echo "            ";
        } else {
            // line 55
            echo "            autoplay: false,
            ";
        }
        // line 57
        echo "            URLhashListener: true,
            ";
        // line 58
        if ((($this->getAttribute(($context["particle"] ?? null), "layout", array()) == "standard") && ($this->getAttribute(($context["particle"] ?? null), "displayitems", array()) > "1"))) {
            // line 59
            echo "            responsive:{
                0:{
                    items:1,
                },
                750:{
                    items:";
            // line 64
            echo twig_escape_filter($this->env, twig_round(($this->getAttribute(($context["particle"] ?? null), "displayitems", array()) / 2), ($context["ceil"] ?? null)), "html", null, true);
            echo ",
                },
                1300:{
                    items:";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "displayitems", array()), "html", null, true);
            echo "
                }
            }
            ";
        }
        // line 71
        echo "            ";
        if (($this->getAttribute(($context["particle"] ?? null), "presets", array()) == "enabled")) {
            // line 72
            echo "            startPosition: ";
            echo twig_escape_filter($this->env, (max(1, twig_replace_filter($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "theme", array()), "preset", array()), array("preset" => ""))) - 1), "html", null, true);
            echo "
            ";
        }
        // line 74
        echo "        })
    });
    </script>
";
    }

    public function getTemplateName()
    {
        return "@particles/owlcarousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 74,  206 => 72,  203 => 71,  196 => 67,  190 => 64,  183 => 59,  181 => 58,  178 => 57,  174 => 55,  171 => 54,  167 => 52,  163 => 50,  161 => 49,  157 => 48,  154 => 47,  151 => 46,  147 => 44,  143 => 42,  140 => 41,  136 => 39,  132 => 37,  129 => 36,  125 => 34,  118 => 32,  115 => 31,  112 => 30,  106 => 28,  103 => 27,  97 => 25,  95 => 24,  87 => 23,  83 => 22,  79 => 21,  73 => 20,  66 => 17,  63 => 16,  58 => 12,  55 => 11,  52 => 10,  49 => 9,  46 => 8,  43 => 7,  40 => 5,  33 => 4,  30 => 3,  11 => 1,);
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
    {% block layout %}

        {# Include Particle Layouts #}
        {% if particle.source and particle.source != 'particle' %}
            {% include '@particles/owlcarousel/' ~ particle.layout ~ '-' ~ particle.source ~ '.html.twig' %}
        {% else %}
            {% include '@particles/owlcarousel/' ~ particle.layout ~ '.html.twig' %}
        {% endif %}

    {% endblock %}
{% endblock %}

{% block javascript_footer %}
    <script src=\"{{ url('gantry-theme://js/owlcarousel.js') }}\"></script>
    <script type=\"text/javascript\">
    jQuery(window).load(function() {
        var owl{{ id|replace({'-':'_'}) }} = jQuery('#g-owlcarousel-{{ id }}');
        owl{{ id|replace({'-':'_'}) }}.owlCarousel({
            items: {{ particle.displayitems }},
            rtl: {% if gantry.page.direction == 'rtl' %}true{% else %}false{% endif %},
            {% if particle.animateOut and particle.animateOut != 'default' %}
            animateOut: '{{ particle.animateOut|default('fadeOut')|e }}',
            {% endif %}
            {% if particle.animateIn and particle.animateIn != 'default' %}
            animateIn: '{{ particle.animateIn|default('fadeIn')|e }}',
            {% endif %}
            {% if particle.nav == 'enabled' %}
            nav: true,
            navText: ['{{ particle.prevText|default('<i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i>')|e('js') }}', '{{ particle.nextText|default('<i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i>')|e('js') }}'],
            {% else %}
            nav: false,
            {% endif %}
            {% if particle.dots == 'enabled' %}
            dots: true,
            {% else %}
            dots: false,
            {% endif %}
            {% if particle.loop == 'enabled' and particle.layout != \"showcase\" and particle.layout != \"newsslider\" %}
            loop: true,
            {% else %}
            loop: false,
            {% endif %}
            {% if particle.autoplay == 'enabled' %}
            autoplay: true,
            autoplayTimeout: {{ particle.autoplaySpeed|default('5000') }},
            {% if particle.pauseOnHover == 'enabled' %}
            autoplayHoverPause: true,
            {% else %}
            autoplayHoverPause: false,
            {% endif %}
            {% else %}
            autoplay: false,
            {% endif %}
            URLhashListener: true,
            {% if particle.layout == \"standard\" and particle.displayitems > \"1\" %}
            responsive:{
                0:{
                    items:1,
                },
                750:{
                    items:{{ (particle.displayitems/2)|round(ceil) }},
                },
                1300:{
                    items:{{ particle.displayitems }}
                }
            }
            {% endif %}
            {% if particle.presets == 'enabled' %}
            startPosition: {{ max(1, gantry.theme.preset|replace({'preset':''})) - 1 }}
            {% endif %}
        })
    });
    </script>
{% endblock %}
", "@particles/owlcarousel.html.twig", "/var/www/html/user/themes/rt_sienna/particles/owlcarousel.html.twig");
    }
}
