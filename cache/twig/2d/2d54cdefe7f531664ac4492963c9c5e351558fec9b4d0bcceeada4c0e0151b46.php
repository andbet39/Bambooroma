<?php

/* @nucleus/content/spacer.html.twig */
class __TwigTemplate_0ac5cc02d8f03c4b8ab10af52f7d5716f41b38f672e4a6cf6dd7565c24c65f81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ( !($context["particle"] ?? null)) {
            // line 2
            echo "    ";
            $context["enabled"] = $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "get", array(0 => (("particles." . $this->getAttribute(($context["segment"] ?? null), "type", array())) . ".enabled"), 1 => 1), "method");
            // line 3
            echo "    ";
            $context["spacer"] = $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "getJoined", array(0 => ("particles." . $this->getAttribute(($context["segment"] ?? null), "type", array())), 1 => $this->getAttribute(($context["segment"] ?? null), "attributes", array())), "method");
        }
        // line 5
        echo "
";
        // line 6
        if ((($context["enabled"] ?? null) && ((null === $this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", array()), "enabled", array())) || $this->getAttribute($this->getAttribute(($context["segment"] ?? null), "attributes", array()), "enabled", array())))) {
            // line 7
            echo "    <div class=\"spacer";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["segment"] ?? null), "classes", array())) ? ((" " . twig_escape_filter($this->env, twig_join_filter($this->getAttribute(($context["segment"] ?? null), "classes", array()), " ")))) : ("")), "html", null, true);
            echo "\"></div>
";
        }
    }

    public function getTemplateName()
    {
        return "@nucleus/content/spacer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  31 => 6,  28 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if not particle %}
    {% set enabled = gantry.config.get('particles.' ~ segment.type ~ '.enabled', 1) %}
    {% set spacer = gantry.config.getJoined('particles.' ~ segment.type, segment.attributes) %}
{% endif %}

{% if enabled and (segment.attributes.enabled is null or segment.attributes.enabled) %}
    <div class=\"spacer{{ segment.classes ? ' ' ~ segment.classes|join(' ')|e }}\"></div>
{% endif %}
", "@nucleus/content/spacer.html.twig", "/var/www/html/user/plugins/gantry5/engines/nucleus/templates/content/spacer.html.twig");
    }
}
