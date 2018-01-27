<?php

/* @particles/simplemenu.html.twig */
class __TwigTemplate_e6d2c80b13100d54c132c60df4314399f35e9bf84c36e976d472e9e1f736ed23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/simplemenu.html.twig", 1);
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
        echo "    <div class=\"g-simplemenu-particle\">
        <h6>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "title", array()), "html", null, true);
        echo "</h6>
        ";
        // line 6
        if (($this->getAttribute(($context["particle"] ?? null), "cols", array()) > 0)) {
            // line 7
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute(($context["particle"] ?? null), "items", array()), $this->getAttribute(($context["particle"] ?? null), "cols", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 8
                echo "                <ul class=\"g-simplemenu ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", array()));
                echo " g-simplemenu-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "cols", array()), "html", null, true);
                echo "cols\">

                    ";
                // line 10
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["row"]);
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 11
                    echo "                    <li>
                        ";
                    // line 12
                    if ($this->getAttribute($context["item"], "icon", array())) {
                        // line 13
                        echo "                            <i class=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", array()), "html", null, true);
                        echo "\"></i>
                        ";
                    }
                    // line 15
                    echo "                        <a target=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "target", array()), "_blank")) : ("_blank")), "html", null, true);
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()));
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "text", array()), "html", null, true);
                    echo "\">";
                    echo $this->getAttribute($context["item"], "text", array());
                    echo "</a>
                    </li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                echo "
                </ul>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "        ";
        } else {
            // line 22
            echo "            <ul class=\"g-simplemenu ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", array()));
            echo " g-simplemenu-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "cols", array()), "html", null, true);
            echo "cols\">

                ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "items", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 25
                echo "                <li>
                    ";
                // line 26
                if ($this->getAttribute($context["item"], "icon", array())) {
                    // line 27
                    echo "                        <i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", array()), "html", null, true);
                    echo "\"></i>
                    ";
                }
                // line 29
                echo "                    <a target=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "target", array()), "_blank")) : ("_blank")), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()));
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "text", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "text", array()), "html", null, true);
                echo "</a>
                </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "
            </ul>
        ";
        }
        // line 35
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "@particles/simplemenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 35,  134 => 32,  118 => 29,  112 => 27,  110 => 26,  107 => 25,  103 => 24,  95 => 22,  92 => 21,  84 => 18,  68 => 15,  62 => 13,  60 => 12,  57 => 11,  53 => 10,  45 => 8,  40 => 7,  38 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
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
    <div class=\"g-simplemenu-particle\">
        <h6>{{ particle.title }}</h6>
        {% if particle.cols > 0 %}
            {% for row in particle.items|batch(particle.cols) %}
                <ul class=\"g-simplemenu {{ particle.class|e }} g-simplemenu-{{ particle.cols }}cols\">

                    {% for item in row %}
                    <li>
                        {% if item.icon %}
                            <i class=\"{{ item.icon }}\"></i>
                        {% endif %}
                        <a target=\"{{ item.target|default('_blank') }}\" href=\"{{ item.link|e }}\" title=\"{{ item.text }}\">{{ item.text|raw }}</a>
                    </li>
                    {% endfor %}

                </ul>
            {% endfor %}
        {% else %}
            <ul class=\"g-simplemenu {{ particle.class|e }} g-simplemenu-{{ particle.cols }}cols\">

                {% for item in particle.items %}
                <li>
                    {% if item.icon %}
                        <i class=\"{{ item.icon }}\"></i>
                    {% endif %}
                    <a target=\"{{ item.target|default('_blank') }}\" href=\"{{ item.link|e }}\" title=\"{{ item.text }}\">{{ item.text }}</a>
                </li>
                {% endfor %}

            </ul>
        {% endif %}
    </div>
{% endblock %}
", "@particles/simplemenu.html.twig", "/var/www/html/user/themes/rt_sienna/particles/simplemenu.html.twig");
    }
}
