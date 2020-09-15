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

/* @UserCountry/_profileSummary.twig */
class __TwigTemplate_22bca3e0036d205141e80267dc975996fac4e9f279950adbceed9c2e0f3eccf6 extends \Twig\Template
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
        echo "<div class=\"visitor-profile-summary visitor-profile-location\">
    <h1>";
        // line 2
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UserCountry_Location"]), "html", null, true);
        echo "</h1>
    <p>";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "countries", []));
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
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 6
            ob_start();
            // line 7
            if ((($this->getAttribute($context["entry"], "cities", [], "any", true, true) && (1 == twig_length_filter($this->env, $this->getAttribute($context["entry"], "cities", [])))) && twig_join_filter($this->getAttribute($context["entry"], "cities", [])))) {
                // line 8
                echo \Piwik\piwik_escape_filter($this->env, twig_join_filter($this->getAttribute($context["entry"], "cities", [])), "html", null, true);
            } elseif (($this->getAttribute(            // line 9
$context["entry"], "cities", [], "any", true, true) && (1 < twig_length_filter($this->env, $this->getAttribute($context["entry"], "cities", []))))) {
                // line 10
                echo "<span title=\"";
                echo \Piwik\piwik_escape_filter($this->env, twig_join_filter($this->getAttribute($context["entry"], "cities", []), ", "), "html", null, true);
                echo "\">";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UserCountry_FromDifferentCities"]), "html", null, true);
                echo "</span>";
            }
            $context["entryCity"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 13
            echo "
            ";
            // line 14
            ob_start();
            // line 15
            echo "<strong>
                    ";
            // line 16
            if (($this->getAttribute($context["entry"], "nb_visits", []) == 1)) {
                // line 17
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_OneVisit"]), "html", null, true);
            } else {
                // line 19
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_NVisits", $this->getAttribute($context["entry"], "nb_visits", [])]), "html", null, true);
            }
            // line 21
            echo "</strong>";
            $context["entryVisits"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 23
            echo "
            ";
            // line 24
            ob_start();
            // line 25
            if (($context["entryCity"] ?? $this->getContext($context, "entryCity"))) {
                // line 26
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UserCountry_CityAndCountry", ($context["entryCity"] ?? $this->getContext($context, "entryCity")), $this->getAttribute($context["entry"], "prettyName", [])]);
            } else {
                // line 28
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["entry"], "prettyName", []), "html", null, true);
            }
            // line 31
            echo "&nbsp;<img height=\"16px\" src=\"";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["entry"], "flag", []), "html", null, true);
            echo "\" title=\"";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["entry"], "prettyName", []), "html", null, true);
            echo "\"/>";
            $context["entryCountry"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 34
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_XFromY", ($context["entryVisits"] ?? $this->getContext($context, "entryVisits")), ($context["entryCountry"] ?? $this->getContext($context, "entryCountry"))]);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        <a class=\"visitor-profile-show-map\" href=\"#\" ";
        if (twig_test_empty((((isset($context["userCountryMapUrl"]) || array_key_exists("userCountryMapUrl", $context))) ? (_twig_default_filter(($context["userCountryMapUrl"] ?? $this->getContext($context, "userCountryMapUrl")), "")) : ("")))) {
            echo "style=\"display:none\"";
        }
        echo ">(";
        echo twig_replace_filter(call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Live_ShowMap"]), [" " => "&nbsp;"]);
        echo ")</a> <img class=\"loadingPiwik\" style=\"display:none;\" src=\"plugins/Morpheus/images/loading-blue.gif\"/>
    </p>
    <div class=\"visitor-profile-map\" style=\"display:none\" data-href=\"";
        // line 38
        echo \Piwik\piwik_escape_filter($this->env, (((isset($context["userCountryMapUrl"]) || array_key_exists("userCountryMapUrl", $context))) ? (_twig_default_filter(($context["userCountryMapUrl"] ?? $this->getContext($context, "userCountryMapUrl")), "")) : ("")), "html", null, true);
        echo "\">
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "@UserCountry/_profileSummary.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 38,  126 => 36,  109 => 34,  102 => 31,  99 => 28,  96 => 26,  94 => 25,  92 => 24,  89 => 23,  86 => 21,  83 => 19,  80 => 17,  78 => 16,  75 => 15,  73 => 14,  70 => 13,  62 => 10,  60 => 9,  58 => 8,  56 => 7,  54 => 6,  37 => 4,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"visitor-profile-summary visitor-profile-location\">
    <h1>{{ 'UserCountry_Location'|translate }}</h1>
    <p>
        {%- for entry in visitorData.countries -%}

            {% set entryCity -%}
                {% if entry.cities is defined and 1 == entry.cities|length and entry.cities|join -%}
                    {{ entry.cities|join }}
                {%- elseif entry.cities is defined and 1 < entry.cities|length -%}
                    <span title=\"{{ entry.cities|join(', ') }}\">{{ 'UserCountry_FromDifferentCities'|translate }}</span>
                {%- endif %}
            {%- endset %}

            {% set entryVisits -%}
                <strong>
                    {% if entry.nb_visits == 1 -%}
                        {{ 'General_OneVisit'|translate }}
                    {%- else -%}
                        {{ 'General_NVisits'|translate(entry.nb_visits) }}
                    {%- endif -%}
                </strong>
            {%- endset %}

            {% set entryCountry -%}
                {%- if entryCity -%}
                    {{ 'UserCountry_CityAndCountry'|translate(entryCity, entry.prettyName)|raw }}
                {%- else -%}
                    {{ entry.prettyName }}
                {%- endif -%}

                &nbsp;<img height=\"16px\" src=\"{{ entry.flag }}\" title=\"{{ entry.prettyName }}\"/>
            {%- endset %}

            {{- 'General_XFromY'|translate(entryVisits, entryCountry)|raw -}}{% if not loop.last %}, {% endif %}
        {%- endfor %}
        <a class=\"visitor-profile-show-map\" href=\"#\" {% if userCountryMapUrl|default('') is empty %}style=\"display:none\"{% endif %}>({{ 'Live_ShowMap'|translate|replace({' ': '&nbsp;'})|raw }})</a> <img class=\"loadingPiwik\" style=\"display:none;\" src=\"plugins/Morpheus/images/loading-blue.gif\"/>
    </p>
    <div class=\"visitor-profile-map\" style=\"display:none\" data-href=\"{{ userCountryMapUrl|default('') }}\">
    </div>
</div>", "@UserCountry/_profileSummary.twig", "/home/cda35/site2/www/matomo/plugins/UserCountry/templates/_profileSummary.twig");
    }
}
