<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @DevicesDetection/_profileSummary.twig */
class __TwigTemplate_9e9663a2cd53e45ab255d941acabb136bda3f605125d2523c10a53202dc3e611 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if ($this->getAttribute(($context["visitorData"] ?? null), "devices", [], "any", true, true)) {
            // line 2
            echo "    <div class=\"visitor-profile-summary visitor-profile-devices\">
        <h1>";
            // line 3
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["DevicesDetection_Devices"]), "html", null, true);
            echo "</h1>
        <div>";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "devices", []));
            foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
                // line 6
                echo "<p>
                    <img height=\"16\" src=\"";
                // line 7
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["entry"], "icon", []), "html", null, true);
                echo "\" />
                    ";
                // line 8
                if (((twig_length_filter($this->env, $this->getAttribute($context["entry"], "devices", [])) == 1) && twig_in_filter(call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Unknown"]), $this->getAttribute($this->getAttribute($this->getAttribute($context["entry"], "devices", []), 0, [], "array"), "name", [])))) {
                    // line 9
                    echo "                        <span>";
                    echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["DevicesDetection_XVisitsFromDevices", (("<strong>" . $this->getAttribute($context["entry"], "count", [])) . "</strong>"), (("<strong>" . $this->getAttribute($context["entry"], "type", [])) . "</strong>")]);
                    echo "
                    ";
                } else {
                    // line 11
                    echo "                    <span>";
                    echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["DevicesDetection_XVisitsFromDevices", (("<strong>" . $this->getAttribute($context["entry"], "count", [])) . "</strong>"), (("<strong>" . $this->getAttribute($context["entry"], "type", [])) . "</strong>")]);
                    echo ":
                        ";
                    // line 12
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["entry"], "devices", []));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["device"]) {
                        // line 13
                        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["device"], "name", []), "html", null, true);
                        echo " (";
                        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["device"], "count", []), "html", null, true);
                        echo "x)";
                        if ( !$this->getAttribute($context["loop"], "last", [])) {
                            echo ", ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['device'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 15
                    echo "</span>
                    ";
                }
                // line 17
                echo "                </p>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "</div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@DevicesDetection/_profileSummary.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 19,  104 => 17,  100 => 15,  80 => 13,  63 => 12,  58 => 11,  52 => 9,  50 => 8,  46 => 7,  43 => 6,  39 => 5,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if visitorData.devices is defined %}
    <div class=\"visitor-profile-summary visitor-profile-devices\">
        <h1>{{ 'DevicesDetection_Devices'|translate }}</h1>
        <div>
            {%- for entry in visitorData.devices -%}
                <p>
                    <img height=\"16\" src=\"{{ entry.icon }}\" />
                    {% if entry.devices|length == 1 and 'General_Unknown'|translate in entry.devices[0].name %}
                        <span>{{ 'DevicesDetection_XVisitsFromDevices'|translate('<strong>' ~ entry.count ~ '</strong>', '<strong>' ~ entry.type ~ '</strong>')|raw }}
                    {% else %}
                    <span>{{ 'DevicesDetection_XVisitsFromDevices'|translate('<strong>' ~ entry.count ~ '</strong>', '<strong>' ~ entry.type ~ '</strong>')|raw }}:
                        {% for device in entry.devices -%}
                            {{ device.name }} ({{ device.count }}x){% if not loop.last %}, {% endif %}
                        {%- endfor -%}
                    </span>
                    {% endif %}
                </p>
            {%- endfor -%}
        </div>
    </div>
{% endif %}", "@DevicesDetection/_profileSummary.twig", "/home/cda35/site2/www/matomo/plugins/DevicesDetection/templates/_profileSummary.twig");
    }
}
