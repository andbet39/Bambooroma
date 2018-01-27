<?php

/* @gantry-admin/partials/php_unsupported.html.twig */
class __TwigTemplate_30461e8cb5419a94678abd6e4281ea238ea581101b4efae70a6c2bef1539b53f extends Twig_Template
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
        $context["php_version"] = twig_constant("PHP_VERSION");
        // line 2
        echo "
";
        // line 3
        if ((is_string($__internal_4f185e7a9c182721a422413f5024d4405259e6404361303c682b84248bcc1343 = ($context["php_version"] ?? null)) && is_string($__internal_587f737e2bb57d7bcab9b270dbf39f08059d8363b9f7dfece58aa26988a872ae = "5.4") && ('' === $__internal_587f737e2bb57d7bcab9b270dbf39f08059d8363b9f7dfece58aa26988a872ae || 0 === strpos($__internal_4f185e7a9c182721a422413f5024d4405259e6404361303c682b84248bcc1343, $__internal_587f737e2bb57d7bcab9b270dbf39f08059d8363b9f7dfece58aa26988a872ae)))) {
            // line 4
            echo "<div class=\"g-grid\">
    <div class=\"g-block alert alert-warning g-php-outdated\">
        ";
            // line 6
            echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_PHP54_WARNING", ($context["php_version"] ?? null));
            echo "
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@gantry-admin/partials/php_unsupported.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gantry-admin/partials/php_unsupported.html.twig", "/var/www/html/user/plugins/gantry5/admin/templates/partials/php_unsupported.html.twig");
    }
}
