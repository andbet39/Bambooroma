<?php

/* @particles/owlcarousel/standard.html.twig */
class __TwigTemplate_0d4a6ab8be1aef5fe592b63614ff8edecf3b59d777d9005d27f4d70b2d7d7bc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@particles/owlcarousel.html.twig", "@particles/owlcarousel/standard.html.twig", 1);
        $this->blocks = array(
            'layout' => array($this, 'block_layout'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@particles/owlcarousel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_layout($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", array()));
        echo " g-owlcarousel-layout-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "layout", array()));
        echo " g-owlcarousel-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "displayitems", array()), "html", null, true);
        echo "-items\">
        ";
        // line 6
        if (($this->getAttribute(($context["particle"] ?? null), "title", array()) || $this->getAttribute(($context["particle"] ?? null), "description", array()))) {
            // line 7
            echo "        <div class=\"g-grid\">
            <div class=\"g-block\">
                <div class=\"g-content g-owlcarousel-header\">
                    ";
            // line 10
            if ($this->getAttribute(($context["particle"] ?? null), "title", array())) {
                echo "<h2 class=\"g-title\">";
                echo $this->getAttribute(($context["particle"] ?? null), "title", array());
                echo "</h2>";
            }
            // line 11
            echo "                    ";
            if ($this->getAttribute(($context["particle"] ?? null), "description", array())) {
                echo "<div class=\"g-owlcarousel-description\">";
                echo $this->getAttribute(($context["particle"] ?? null), "description", array());
                echo "</div>";
            }
            // line 12
            echo "                </div>
            </div>
        </div>
        ";
        }
        // line 16
        echo "        <div id=\"g-owlcarousel-";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" class=\"g-owlcarousel owl-carousel ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "width", array()));
        echo "\">

            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "items", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 19
            echo "                <div>
                    ";
            // line 20
            if ($this->getAttribute($context["item"], "image", array())) {
                // line 21
                echo "                        <div class=\"image\">
                            <img src=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "image", array())));
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()));
                echo "\" />
                        </div>
                    ";
            }
            // line 25
            echo "
                    ";
            // line 26
            if ((((($this->getAttribute($context["item"], "subtitle", array()) || $this->getAttribute($context["item"], "title", array())) || $this->getAttribute($context["item"], "desc", array())) || $this->getAttribute($context["item"], "link", array())) || $this->getAttribute($context["item"], "author", array()))) {
                // line 27
                echo "                        <div class=\"g-owlcarousel-content\">
                            ";
                // line 28
                if ($this->getAttribute($context["item"], "subtitle", array())) {
                    echo "<span class=\"g-owlcarousel-item-subtitle\">";
                    echo $this->getAttribute($context["item"], "subtitle", array());
                    echo "</span>";
                }
                // line 29
                echo "                            ";
                if ($this->getAttribute($context["item"], "title", array())) {
                    echo "<div class=\"g-owlcarousel-item-title\">";
                    echo $this->getAttribute($context["item"], "title", array());
                    echo "</div>";
                }
                // line 30
                echo "                            ";
                if ($this->getAttribute($context["item"], "desc", array())) {
                    echo "<div class=\"g-owlcarousel-item-desc\">";
                    echo $this->getAttribute($context["item"], "desc", array());
                    echo "</div>";
                }
                // line 31
                echo "
                            ";
                // line 32
                if ($this->getAttribute($context["item"], "link", array())) {
                    // line 33
                    echo "                                <div class=\"g-owlcarousel-item-link\">
                                    <a target=\"";
                    // line 34
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "buttontarget", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "buttontarget", array()), "_self")) : ("_self")));
                    echo "\" class=\"g-owlcarousel-item-button button ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "buttonclass", array()));
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()));
                    echo "\">
                                        ";
                    // line 35
                    echo $this->getAttribute($context["item"], "linktext", array());
                    echo "
                                    </a>
                                </div>
                            ";
                }
                // line 39
                echo "
                            ";
                // line 40
                if ($this->getAttribute($context["item"], "author", array())) {
                    // line 41
                    echo "                                <div class=\"g-owlcarousel-author\">
                                    ";
                    // line 42
                    if ($this->getAttribute($context["item"], "authorimage", array())) {
                        // line 43
                        echo "                                        <span class=\"author-image\">
                                    <img src=\"";
                        // line 44
                        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "authorimage", array())));
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "author", array()));
                        echo "\" />
                                </span>
                                    ";
                    }
                    // line 47
                    echo "                                    ";
                    if ($this->getAttribute($context["item"], "author", array())) {
                        echo "<span class=\"author-name\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "author", array()));
                        echo "</span>";
                    }
                    // line 48
                    echo "                                </div>
                            ";
                }
                // line 50
                echo "                        </div>
                    ";
            }
            // line 52
            echo "                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@particles/owlcarousel/standard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 54,  181 => 52,  177 => 50,  173 => 48,  166 => 47,  158 => 44,  155 => 43,  153 => 42,  150 => 41,  148 => 40,  145 => 39,  138 => 35,  130 => 34,  127 => 33,  125 => 32,  122 => 31,  115 => 30,  108 => 29,  102 => 28,  99 => 27,  97 => 26,  94 => 25,  86 => 22,  83 => 21,  81 => 20,  78 => 19,  74 => 18,  66 => 16,  60 => 12,  53 => 11,  47 => 10,  42 => 7,  40 => 6,  31 => 5,  28 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@particles/owlcarousel.html.twig' %}

{# Standard Layout #}
{% block layout %}
    <div class=\"{{ particle.class|e }} g-owlcarousel-layout-{{ particle.layout|e }} g-owlcarousel-{{ particle.displayitems }}-items\">
        {% if particle.title or particle.description %}
        <div class=\"g-grid\">
            <div class=\"g-block\">
                <div class=\"g-content g-owlcarousel-header\">
                    {% if particle.title %}<h2 class=\"g-title\">{{ particle.title|raw }}</h2>{% endif %}
                    {% if particle.description %}<div class=\"g-owlcarousel-description\">{{ particle.description|raw }}</div>{% endif %}
                </div>
            </div>
        </div>
        {% endif %}
        <div id=\"g-owlcarousel-{{ id }}\" class=\"g-owlcarousel owl-carousel {{ particle.width|e }}\">

            {% for item in particle.items %}
                <div>
                    {% if item.image %}
                        <div class=\"image\">
                            <img src=\"{{ url(item.image)|e }}\" alt=\"{{ item.title|e }}\" />
                        </div>
                    {% endif %}

                    {% if item.subtitle or item.title or item.desc or item.link or item.author %}
                        <div class=\"g-owlcarousel-content\">
                            {% if item.subtitle %}<span class=\"g-owlcarousel-item-subtitle\">{{ item.subtitle|raw }}</span>{% endif %}
                            {% if item.title %}<div class=\"g-owlcarousel-item-title\">{{ item.title|raw }}</div>{% endif %}
                            {% if item.desc %}<div class=\"g-owlcarousel-item-desc\">{{ item.desc|raw }}</div>{% endif %}

                            {% if item.link %}
                                <div class=\"g-owlcarousel-item-link\">
                                    <a target=\"{{ item.buttontarget|default('_self')|e }}\" class=\"g-owlcarousel-item-button button {{ item.buttonclass|e }}\" href=\"{{ item.link|e }}\">
                                        {{ item.linktext|raw }}
                                    </a>
                                </div>
                            {% endif %}

                            {% if item.author %}
                                <div class=\"g-owlcarousel-author\">
                                    {% if item.authorimage %}
                                        <span class=\"author-image\">
                                    <img src=\"{{ url(item.authorimage)|e }}\" alt=\"{{ item.author|e }}\" />
                                </span>
                                    {% endif %}
                                    {% if item.author %}<span class=\"author-name\">{{ item.author|e }}</span>{% endif %}
                                </div>
                            {% endif %}
                        </div>
                    {% endif %}
                </div>
            {% endfor %}

        </div>
    </div>
{% endblock %}
", "@particles/owlcarousel/standard.html.twig", "/var/www/html/user/themes/rt_sienna/particles/owlcarousel/standard.html.twig");
    }
}
