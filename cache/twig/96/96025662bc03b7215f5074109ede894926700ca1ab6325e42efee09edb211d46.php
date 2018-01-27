<?php

/* @particles/simplecontent.html.twig */
class __TwigTemplate_0677bf384e4591926c03dfce03eec7f560202b3d35b18919581f4e507e808037 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/simplecontent.html.twig", 1);
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
        <div class=\"g-simplecontent\">

            ";
        // line 8
        if ($this->getAttribute(($context["particle"] ?? null), "title", array())) {
            echo "<h2 class=\"g-title\">";
            echo $this->getAttribute(($context["particle"] ?? null), "title", array());
            echo "</h2>";
        }
        // line 9
        echo "
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "items", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 11
            echo "                <div class=\"g-simplecontent-item g-simplecontent-layout-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "layout", array()), "html", null, true);
            echo "\">
                    ";
            // line 12
            ob_start();
            // line 13
            echo "                        <div class=\"g-simplecontent-item-content-title\">";
            echo $this->getAttribute($context["item"], "content_title", array());
            echo "</div>
                    ";
            $context["particle_item_title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 15
            echo "
                    ";
            // line 16
            ob_start();
            // line 17
            echo "                        <div class=\"g-simplecontent-item-author\">";
            echo $this->getAttribute($context["item"], "author", array());
            echo "</div>
                    ";
            $context["particle_item_author"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 19
            echo "
                    ";
            // line 20
            ob_start();
            // line 21
            echo "                        <div class=\"g-simplecontent-item-created-date\">";
            echo $this->getAttribute($context["item"], "created_date", array());
            echo "</div>
                    ";
            $context["particle_item_created_date"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 23
            echo "
                    ";
            // line 24
            if (($this->getAttribute($context["item"], "layout", array()) == "header")) {
                // line 25
                echo "                        ";
                if ($this->getAttribute($context["item"], "content_title", array())) {
                    echo twig_escape_filter($this->env, ($context["particle_item_title"] ?? null), "html", null, true);
                }
                // line 26
                echo "                        ";
                if ($this->getAttribute($context["item"], "author", array())) {
                    echo twig_escape_filter($this->env, ($context["particle_item_author"] ?? null), "html", null, true);
                }
                // line 27
                echo "                        ";
                if ($this->getAttribute($context["item"], "created_date", array())) {
                    echo twig_escape_filter($this->env, ($context["particle_item_created_date"] ?? null), "html", null, true);
                }
                // line 28
                echo "                    ";
            }
            // line 29
            echo "
                    ";
            // line 30
            if (($this->getAttribute($context["item"], "layout", array()) != "header")) {
                // line 31
                echo "                        ";
                if ($this->getAttribute($context["item"], "created_date", array())) {
                    echo twig_escape_filter($this->env, ($context["particle_item_created_date"] ?? null), "html", null, true);
                }
                // line 32
                echo "                        ";
                if ($this->getAttribute($context["item"], "content_title", array())) {
                    echo twig_escape_filter($this->env, ($context["particle_item_title"] ?? null), "html", null, true);
                }
                // line 33
                echo "                        ";
                if ($this->getAttribute($context["item"], "author", array())) {
                    echo twig_escape_filter($this->env, ($context["particle_item_author"] ?? null), "html", null, true);
                }
                // line 34
                echo "                    ";
            }
            // line 35
            echo "
                    ";
            // line 36
            if ($this->getAttribute($context["item"], "leading_content", array())) {
                echo "<div class=\"g-simplecontent-item-leading-content\">";
                echo $this->getAttribute($context["item"], "leading_content", array());
                echo "</div>";
            }
            // line 37
            echo "                    ";
            if ($this->getAttribute($context["item"], "main_content", array())) {
                echo "<div class=\"g-simplecontent-item-main-content\">";
                echo $this->getAttribute($context["item"], "main_content", array());
                echo "</div>";
            }
            // line 38
            echo "
                    ";
            // line 39
            if ($this->getAttribute($context["item"], "readmore_label", array())) {
                // line 40
                echo "                        <div class=\"g-simplecontent-item-readmore-container\">
                            <a target=\"";
                // line 41
                echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "readmore_target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "readmore_target", array()), "_self")) : ("_self")));
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "readmore_link", array()));
                echo "\" class=\"g-simplecontent-item-readmore ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "readmore_class", array()));
                echo "\">
                                ";
                // line 42
                echo $this->getAttribute($context["item"], "readmore_label", array());
                echo "
                            </a>
                        </div>
                    ";
            }
            // line 46
            echo "                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "@particles/simplecontent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 48,  173 => 46,  166 => 42,  158 => 41,  155 => 40,  153 => 39,  150 => 38,  143 => 37,  137 => 36,  134 => 35,  131 => 34,  126 => 33,  121 => 32,  116 => 31,  114 => 30,  111 => 29,  108 => 28,  103 => 27,  98 => 26,  93 => 25,  91 => 24,  88 => 23,  82 => 21,  80 => 20,  77 => 19,  71 => 17,  69 => 16,  66 => 15,  60 => 13,  58 => 12,  53 => 11,  49 => 10,  46 => 9,  40 => 8,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
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
        <div class=\"g-simplecontent\">

            {% if particle.title %}<h2 class=\"g-title\">{{ particle.title|raw }}</h2>{% endif %}

            {% for item in particle.items %}
                <div class=\"g-simplecontent-item g-simplecontent-layout-{{ item.layout }}\">
                    {% set particle_item_title %}
                        <div class=\"g-simplecontent-item-content-title\">{{ item.content_title|raw }}</div>
                    {% endset %}

                    {% set particle_item_author %}
                        <div class=\"g-simplecontent-item-author\">{{ item.author|raw }}</div>
                    {% endset %}

                    {% set particle_item_created_date %}
                        <div class=\"g-simplecontent-item-created-date\">{{ item.created_date|raw }}</div>
                    {% endset %}

                    {% if item.layout == 'header' %}
                        {% if item.content_title %}{{ particle_item_title }}{% endif %}
                        {% if item.author %}{{ particle_item_author }}{% endif %}
                        {% if item.created_date %}{{ particle_item_created_date }}{% endif %}
                    {% endif %}

                    {% if item.layout != 'header' %}
                        {% if item.created_date %}{{ particle_item_created_date }}{% endif %}
                        {% if item.content_title %}{{ particle_item_title }}{% endif %}
                        {% if item.author %}{{ particle_item_author }}{% endif %}
                    {% endif %}

                    {% if item.leading_content %}<div class=\"g-simplecontent-item-leading-content\">{{ item.leading_content|raw }}</div>{% endif %}
                    {% if item.main_content %}<div class=\"g-simplecontent-item-main-content\">{{ item.main_content|raw }}</div>{% endif %}

                    {% if item.readmore_label %}
                        <div class=\"g-simplecontent-item-readmore-container\">
                            <a target=\"{{ item.readmore_target|default('_self')|e }}\" href=\"{{ item.readmore_link|e }}\" class=\"g-simplecontent-item-readmore {{ item.readmore_class|e }}\">
                                {{ item.readmore_label|raw }}
                            </a>
                        </div>
                    {% endif %}
                </div>
            {% endfor %}

        </div>
    </div>

{% endblock %}
", "@particles/simplecontent.html.twig", "/var/www/html/user/themes/rt_sienna/particles/simplecontent.html.twig");
    }
}
