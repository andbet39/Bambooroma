<?php

/* @particles/pricingtable.html.twig */
class __TwigTemplate_e7aab88b1e0086e743743babfbf5c11f707faafb94b64e3fc4a66709b8e84098 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/pricingtable.html.twig", 1);
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
    ";
        // line 5
        $assetFunction = $this->env->getFunction('parse_assets')->getCallable();
        $assetVariables = array("priority" =>  -10);
        if ($assetVariables && !is_array($assetVariables)) {
            throw new UnexpectedValueException('{% scripts with x %}: x is not an array');
        }
        $location = "head";
        if ($location && !is_string($location)) {
            throw new UnexpectedValueException('{% scripts in x %}: x is not a string');
        }
        $priority = isset($assetVariables['priority']) ? $assetVariables['priority'] : 0;
        ob_start();
        // line 6
        echo "    <style>
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "tables", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["table"]) {
            // line 8
            echo "            ";
            if ($this->getAttribute($context["table"], "customcolor", array())) {
                // line 9
                echo "            #g-pricingtable-col-item-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo " .g-pricingtable-plan a, #g-pricingtable-col-item-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo " .g-pricingtable .g-pricingtable-price, #g-pricingtable-col-item-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo " .g-pricingtable .g-pricingtable-item .fa {
                color: ";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($context["table"], "customcolor", array()), "html", null, true);
                echo ";
            }

            #g-pricingtable-col-item-";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo " .button {
                background-color: ";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["table"], "customcolor", array()), "html", null, true);
                echo ";
            }
            ";
            }
            // line 17
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['table'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </style>
    ";
        $content = ob_get_clean();
        echo $assetFunction($content, $location, $priority);
        // line 21
        echo "<div class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", array()));
        echo "\">

        ";
        // line 23
        if ($this->getAttribute(($context["particle"] ?? null), "title", array())) {
            echo "<h2 class=\"g-title\">";
            echo $this->getAttribute(($context["particle"] ?? null), "title", array());
            echo "</h2>";
        }
        // line 24
        echo "
        ";
        // line 25
        if ($this->getAttribute(($context["particle"] ?? null), "headertext", array())) {
            // line 26
            echo "            <div class=\"g-pricingtable-headertext\">";
            echo $this->getAttribute(($context["particle"] ?? null), "headertext", array());
            echo "</div>
        ";
        }
        // line 28
        echo "
        <div id=\"g-pricingtable-";
        // line 29
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"g-pricingtable-container ";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["particle"] ?? null), "columns", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["particle"] ?? null), "columns", array()), "g-pricingtable-3-col")) : ("g-pricingtable-3-col")));
        echo "\">

            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "tables", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["table"]) {
            // line 32
            echo "                <div class=\"g-pricingtable-col-item ";
            if ($this->getAttribute($context["table"], "accent", array())) {
                echo "g-pricingtable-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["table"], "accent", array()), "html", null, true);
            }
            echo "\" id=\"g-pricingtable-col-item-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\">
                    <ul class=\"g-pricingtable ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["table"], "class", array()));
            echo "\">
                        ";
            // line 34
            if ($this->getAttribute($context["table"], "ribbon", array())) {
                echo "<li class=\"g-pricingtable-ribbon\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["table"], "ribbon", array()));
                echo "</li> ";
            }
            // line 35
            echo "                        ";
            if ($this->getAttribute($context["table"], "icon", array())) {
                echo "<li class=\"g-pricingtable-icon\"><i class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["table"], "icon", array()));
                echo "\"></i></li>";
            }
            // line 36
            echo "
                        ";
            // line 37
            if ($this->getAttribute($context["table"], "plan", array())) {
                // line 38
                echo "                            <li class=\"g-pricingtable-plan\">
                                ";
                // line 39
                if ($this->getAttribute($context["table"], "buttontext", array())) {
                    // line 40
                    echo "                                <a target=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["table"], "buttontarget", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["table"], "buttontarget", array()), "_self")) : ("_self")));
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["table"], "buttonlink", array()));
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["table"], "buttontext", array()));
                    echo "\">
                                ";
                }
                // line 42
                echo "
                                    ";
                // line 43
                echo $this->getAttribute($context["table"], "plan", array());
                echo "

                                ";
                // line 45
                if ($this->getAttribute($context["table"], "buttontext", array())) {
                    // line 46
                    echo "                                </a>
                                ";
                }
                // line 48
                echo "                            </li>
                        ";
            }
            // line 50
            echo "
                        ";
            // line 51
            if ($this->getAttribute($context["table"], "price", array())) {
                echo "<li class=\"g-pricingtable-price\">";
                echo $this->getAttribute($context["table"], "price", array());
                echo "</li>";
            }
            // line 52
            echo "                        ";
            if ($this->getAttribute($context["table"], "period", array())) {
                echo "<li class=\"g-pricingtable-period\">";
                echo $this->getAttribute($context["table"], "period", array());
                echo "</li>";
            }
            // line 53
            echo "                        ";
            if ($this->getAttribute($context["table"], "desc", array())) {
                echo "<li class=\"g-pricingtable-desc\">";
                echo $this->getAttribute($context["table"], "desc", array());
                echo "</li> ";
            }
            // line 54
            echo "
                        ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["table"], "items", array()));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 56
                echo "                            <li class=\"g-pricingtable-item g-pricingtable-item-";
                echo twig_escape_filter($this->env, $context["key"]);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "class", array()));
                echo "\">
                                <i class=\"fa fa-check\"></i>
                                ";
                // line 58
                echo $this->getAttribute($context["item"], "text", array());
                echo "
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "
                        ";
            // line 62
            if ($this->getAttribute($context["table"], "buttontext", array())) {
                // line 63
                echo "                            <li class=\"g-pricingtable-cta\">
                                <a target=\"";
                // line 64
                echo twig_escape_filter($this->env, (($this->getAttribute($context["table"], "buttontarget", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["table"], "buttontarget", array()), "_self")) : ("_self")));
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["table"], "buttonlink", array()));
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["table"], "buttontext", array()));
                echo "\" class=\"button ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["table"], "buttonclass", array()));
                echo "\">
                                    ";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["table"], "buttontext", array()));
                echo "
                                </a>
                            </li>
                        ";
            }
            // line 69
            echo "
                    </ul>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['table'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "
        </div>

        ";
        // line 76
        if ($this->getAttribute(($context["particle"] ?? null), "footertext", array())) {
            // line 77
            echo "            <div class=\"g-pricingtable-footertext\">";
            echo $this->getAttribute(($context["particle"] ?? null), "footertext", array());
            echo "</div>
        ";
        }
        // line 79
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "@particles/pricingtable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 79,  324 => 77,  322 => 76,  317 => 73,  300 => 69,  293 => 65,  283 => 64,  280 => 63,  278 => 62,  275 => 61,  266 => 58,  258 => 56,  254 => 55,  251 => 54,  244 => 53,  237 => 52,  231 => 51,  228 => 50,  224 => 48,  220 => 46,  218 => 45,  213 => 43,  210 => 42,  200 => 40,  198 => 39,  195 => 38,  193 => 37,  190 => 36,  183 => 35,  177 => 34,  173 => 33,  163 => 32,  146 => 31,  139 => 29,  136 => 28,  130 => 26,  128 => 25,  125 => 24,  119 => 23,  113 => 21,  108 => 18,  94 => 17,  88 => 14,  84 => 13,  78 => 10,  69 => 9,  66 => 8,  49 => 7,  46 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
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

    {% styles with { priority: -10 } %}
    <style>
        {% for table in particle.tables %}
            {% if table.customcolor %}
            #g-pricingtable-col-item-{{ loop.index  }} .g-pricingtable-plan a, #g-pricingtable-col-item-{{ loop.index  }} .g-pricingtable .g-pricingtable-price, #g-pricingtable-col-item-{{ loop.index  }} .g-pricingtable .g-pricingtable-item .fa {
                color: {{ table.customcolor }};
            }

            #g-pricingtable-col-item-{{ loop.index  }} .button {
                background-color: {{ table.customcolor }};
            }
            {% endif %}
        {% endfor %}
    </style>
    {% endstyles -%}

    <div class=\"{{ particle.class|e }}\">

        {% if particle.title %}<h2 class=\"g-title\">{{ particle.title|raw }}</h2>{% endif %}

        {% if particle.headertext %}
            <div class=\"g-pricingtable-headertext\">{{ particle.headertext|raw }}</div>
        {% endif %}

        <div id=\"g-pricingtable-{{ id }}\" class=\"g-pricingtable-container {{ particle.columns|default('g-pricingtable-3-col')|e }}\">

            {% for table in particle.tables %}
                <div class=\"g-pricingtable-col-item {% if table.accent %}g-pricingtable-{{ table.accent }}{% endif %}\" id=\"g-pricingtable-col-item-{{ loop.index }}\">
                    <ul class=\"g-pricingtable {{ table.class|e }}\">
                        {% if table.ribbon %}<li class=\"g-pricingtable-ribbon\">{{ table.ribbon|e }}</li> {% endif %}
                        {% if table.icon %}<li class=\"g-pricingtable-icon\"><i class=\"{{ table.icon|e }}\"></i></li>{% endif %}

                        {% if table.plan %}
                            <li class=\"g-pricingtable-plan\">
                                {% if table.buttontext %}
                                <a target=\"{{ table.buttontarget|default('_self')|e }}\" href=\"{{ table.buttonlink|e }}\" title=\"{{ table.buttontext|e }}\">
                                {% endif %}

                                    {{ table.plan|raw }}

                                {% if table.buttontext %}
                                </a>
                                {% endif %}
                            </li>
                        {% endif %}

                        {% if table.price %}<li class=\"g-pricingtable-price\">{{ table.price|raw }}</li>{% endif %}
                        {% if table.period %}<li class=\"g-pricingtable-period\">{{ table.period|raw }}</li>{% endif %}
                        {% if table.desc %}<li class=\"g-pricingtable-desc\">{{ table.desc|raw }}</li> {% endif %}

                        {% for key, item in table.items %}
                            <li class=\"g-pricingtable-item g-pricingtable-item-{{ key|e }} {{ item.class|e }}\">
                                <i class=\"fa fa-check\"></i>
                                {{ item.text|raw }}
                            </li>
                        {% endfor %}

                        {% if table.buttontext %}
                            <li class=\"g-pricingtable-cta\">
                                <a target=\"{{ table.buttontarget|default('_self')|e }}\" href=\"{{ table.buttonlink|e }}\" title=\"{{ table.buttontext|e }}\" class=\"button {{ table.buttonclass|e }}\">
                                    {{ table.buttontext|e }}
                                </a>
                            </li>
                        {% endif %}

                    </ul>
                </div>
            {% endfor %}

        </div>

        {% if particle.footertext %}
            <div class=\"g-pricingtable-footertext\">{{ particle.footertext|raw }}</div>
        {% endif %}

    </div>
{% endblock %}
", "@particles/pricingtable.html.twig", "/var/www/html/user/themes/rt_sienna/particles/pricingtable.html.twig");
    }
}
