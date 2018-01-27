<?php

/* @particles/simpleweather.html.twig */
class __TwigTemplate_a10f29d2dd85a3e01ab1b3600b0fba27a9a7963f4732b345f33a8a90fb9fe40c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/simpleweather.html.twig", 1);
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
        echo "    <div id=\"g-";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" data-simpleweather-id=\"g-";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" data-simpleweather-showlocation=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "show_location", array()), "html", null, true);
        echo "\" class=\"g-simpleweather ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "class", array()), "html", null, true);
        echo "\" data-simpleweather-location=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "location", array()), "html", null, true);
        echo "\" data-simpleweather-title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "title", array()), "html", null, true);
        echo "\" data-simpleweather-units=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "units", array()), "html", null, true);
        echo "\" data-simpleweather-params=\"";
        if ($this->getAttribute(($context["particle"] ?? null), "custom_data", array())) {
            $context["weather_params"] = twig_split_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "custom_data", array()), " ");
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["weather_params"] ?? null));
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
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ",";
                }
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
        }
        echo "\"></div>
";
    }

    // line 7
    public function block_javascript_footer($context, array $blocks = array())
    {
        // line 8
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/jquery.simpleWeather.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/jquery.simpleWeather.init.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@particles/simpleweather.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 9,  90 => 8,  87 => 7,  32 => 4,  29 => 3,  11 => 1,);
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
    <div id=\"g-{{ id }}\" data-simpleweather-id=\"g-{{ id }}\" data-simpleweather-showlocation=\"{{ particle.show_location }}\" class=\"g-simpleweather {{ particle.class }}\" data-simpleweather-location=\"{{ particle.location }}\" data-simpleweather-title=\"{{ particle.title }}\" data-simpleweather-units=\"{{ particle.units }}\" data-simpleweather-params=\"{% if particle.custom_data %}{% set weather_params = particle.custom_data|split(' ') %}{% for item in weather_params %}{{ item }}{% if not loop.last %},{% endif %}{% endfor %}{% endif %}\"></div>
{% endblock %}

{% block javascript_footer %}
<script src=\"{{ url('gantry-theme://js/jquery.simpleWeather.js') }}\"></script>
<script src=\"{{ url('gantry-theme://js/jquery.simpleWeather.init.js') }}\"></script>
{% endblock %}
", "@particles/simpleweather.html.twig", "/var/www/html/user/themes/rt_sienna/particles/simpleweather.html.twig");
    }
}
