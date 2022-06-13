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

/* @Live/_profileSummary.twig */
class __TwigTemplate_ddd2d815e16ef72b241e7f1e546ad8b85567b72287a72bb6974481fd2f951926 extends \Twig\Template
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
        ob_start();
        // line 2
        echo "    ";
        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "totalUniquePageViews", []), "html", null, true);
        echo " ";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_ColumnUniquePageviews"]), "html", null, true);
        echo ", ";
        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "totalRevisitedPages", []), "html", null, true);
        echo " ";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Actions_RevisitedPages"]), "html", null, true);
        echo "
";
        $context["pageviewDetails"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 4
        echo "
<div class=\"visitor-profile-summary visitor-profile-resume\">
    <h1>";
        // line 6
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Summary"]), "html", null, true);
        echo "</h1>
    <div>
        ";
        // line 8
        if ($this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "hasMoreVisits", [])) {
            // line 9
            echo "            <p>";
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Live_LimitedSummary", (("<strong>" . $this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "totalVisits", [])) . "</strong>")]);
            echo "</p>
        ";
        }
        // line 11
        echo "        ";
        if (($this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "totalPageViews", []) != $this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "totalActions", []))) {
            // line 12
            echo "            ";
            $context["actionDetails"] = [];
            // line 13
            echo "            ";
            if (($this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "totalPageViews", []) > 0)) {
                $context["actionDetails"] = twig_array_merge(($context["actionDetails"] ?? $this->getContext($context, "actionDetails")), [0 => (((((("<span title=\"" . ($context["pageviewDetails"] ?? $this->getContext($context, "pageviewDetails"))) . "\">") . $this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "totalPageViews", [])) . " ") . call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_ColumnPageviews"])) . "</span>")]);
            }
            // line 14
            echo "            ";
            if (($this->getAttribute(($context["visitorData"] ?? null), "totalEvents", [], "any", true, true) && ($this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "totalEvents", []) > 0))) {
                $context["actionDetails"] = twig_array_merge(($context["actionDetails"] ?? $this->getContext($context, "actionDetails")), [0 => (($this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "totalEvents", []) . " ") . call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Events_Events"]))]);
            }
            // line 15
            echo "            ";
            if (($this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "totalDownloads", []) > 0)) {
                $context["actionDetails"] = twig_array_merge(($context["actionDetails"] ?? $this->getContext($context, "actionDetails")), [0 => (($this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "totalDownloads", []) . " ") . call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Downloads"]))]);
            }
            // line 16
            echo "            ";
            if (($this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "totalOutlinks", []) > 0)) {
                $context["actionDetails"] = twig_array_merge(($context["actionDetails"] ?? $this->getContext($context, "actionDetails")), [0 => (($this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "totalOutlinks", []) . " ") . call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Outlinks"]))]);
            }
            // line 17
            echo "            ";
            if (($this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "totalSearches", []) > 0)) {
                $context["actionDetails"] = twig_array_merge(($context["actionDetails"] ?? $this->getContext($context, "actionDetails")), [0 => (($this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "totalSearches", []) . " ") . call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Actions_ColumnSearches"]))]);
            }
            // line 18
            echo "            <p>";
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Live_VisitSummaryWithActionDetails", (("<strong>" . $this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "totalVisitDurationPretty", [])) . "</strong>"), "", "", ("<strong>" . $this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "totalActions", [])), "</strong>", twig_join_filter(($context["actionDetails"] ?? $this->getContext($context, "actionDetails")), ", "), ("<strong>" . $this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "totalVisits", [])), "</strong>"]);
            echo "</p>
        ";
        } else {
            // line 20
            echo "            <p>";
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Live_VisitSummary", (("<strong>" . $this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "totalVisitDurationPretty", [])) . "</strong>"), "", "", ((("<strong title=\"" . ($context["pageviewDetails"] ?? $this->getContext($context, "pageviewDetails"))) . "\">") . $this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "totalActions", [])), "</strong>", ("<strong>" . $this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "totalVisits", [])), "</strong>"]);
            echo "</p>
        ";
        }
        // line 22
        echo "        ";
        if ($this->getAttribute(($context["visitorData"] ?? null), "totalGoalConversions", [], "any", true, true)) {
            // line 23
            echo "        <p>";
            if ($this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "totalGoalConversions", [])) {
                echo "<strong>";
            }
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Live_ConvertedNGoals", $this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "totalGoalConversions", [])]), "html", null, true);
            if ($this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "totalGoalConversions", [])) {
                echo "</strong>";
            }
            // line 24
            if ($this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "totalGoalConversions", [])) {
                // line 25
                echo "            ";
                ob_start();
                // line 26
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "totalConversionsByGoal", []));
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
                foreach ($context['_seq'] as $context["idGoal"] => $context["totalConversions"]) {
                    // line 27
                    $context["idGoal"] = twig_slice($this->env, $context["idGoal"], 7, null);
                    // line 28
                    if ($this->getAttribute(($context["goals"] ?? null), $context["idGoal"], [], "array", true, true)) {
                        // line 29
                        if ( !$this->getAttribute($context["loop"], "first", [])) {
                            echo ", ";
                        }
                        echo \Piwik\piwik_escape_filter($this->env, $context["totalConversions"], "html", null, true);
                        echo " ";
                        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["goals"] ?? $this->getContext($context, "goals")), $context["idGoal"], [], "array"), "name", [], "array"), "html", null, true);
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
                unset($context['_seq'], $context['_iterated'], $context['idGoal'], $context['totalConversions'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                $context["goalList"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 33
                echo "            ";
                if (($context["goalList"] ?? $this->getContext($context, "goalList"))) {
                    echo "(";
                    echo \Piwik\piwik_escape_filter($this->env, ($context["goalList"] ?? $this->getContext($context, "goalList")), "html", null, true);
                    echo ")";
                }
            }
            // line 34
            echo ".</p>
        ";
        }
        // line 36
        echo "        ";
        if ((($this->getAttribute(($context["visitorData"] ?? null), "totalSearches", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["visitorData"] ?? null), "totalSearches", []), 0)) : (0))) {
            // line 37
            echo "        <p>
            ";
            // line 38
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Actions_WidgetSearchKeywords"]), "html", null, true);
            echo ":";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "searches", []));
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
                echo " <strong title=\"";
                if (($this->getAttribute($context["entry"], "searches", []) == 1)) {
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Actions_OneSearch"]), "html", null, true);
                } else {
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UserCountryMap_Searches", $this->getAttribute($context["entry"], "searches", [])]), "html", null, true);
                }
                echo "\">";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["entry"], "keyword", []), "html", null, true);
                echo "</strong>";
                if ( !$this->getAttribute($context["loop"], "last", [])) {
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "        </p>
        ";
        }
        // line 42
        echo "        ";
        if ($this->getAttribute(($context["visitorData"] ?? null), "averagePageGenerationTime", [], "any", true, true)) {
            // line 43
            echo "        <p title=\"";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Live_CalculatedOverNPageViews", $this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "totalPageViewsWithTiming", [])]), "html", null, true);
            echo "\">
            ";
            // line 44
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Live_AveragePageGenerationTime", (("<strong>" . $this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "averagePageGenerationTime", [])) . "s</strong>")]);
            echo "
        </p>
        ";
        }
        // line 47
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "@Live/_profileSummary.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 47,  237 => 44,  232 => 43,  229 => 42,  225 => 40,  184 => 39,  181 => 38,  178 => 37,  175 => 36,  171 => 34,  163 => 33,  142 => 29,  140 => 28,  138 => 27,  121 => 26,  118 => 25,  116 => 24,  107 => 23,  104 => 22,  98 => 20,  92 => 18,  87 => 17,  82 => 16,  77 => 15,  72 => 14,  67 => 13,  64 => 12,  61 => 11,  55 => 9,  53 => 8,  48 => 6,  44 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set pageviewDetails %}
    {{ visitorData.totalUniquePageViews }} {{ 'General_ColumnUniquePageviews'|translate }}, {{ visitorData.totalRevisitedPages }} {{ 'Actions_RevisitedPages'|translate }}
{% endset %}

<div class=\"visitor-profile-summary visitor-profile-resume\">
    <h1>{{ 'General_Summary'|translate }}</h1>
    <div>
        {% if visitorData.hasMoreVisits %}
            <p>{{ 'Live_LimitedSummary'|translate('<strong>' ~ visitorData.totalVisits ~ '</strong>')|raw }}</p>
        {% endif %}
        {% if visitorData.totalPageViews != visitorData.totalActions %}
            {% set actionDetails = [] %}
            {% if visitorData.totalPageViews > 0 %}{% set actionDetails = actionDetails|merge(['<span title=\"' ~ pageviewDetails ~ '\">' ~ visitorData.totalPageViews ~ ' ' ~ 'General_ColumnPageviews'|translate ~ '</span>']) %}{% endif %}
            {% if visitorData.totalEvents is defined and visitorData.totalEvents > 0 %}{% set actionDetails = actionDetails|merge([visitorData.totalEvents ~ ' ' ~ 'Events_Events'|translate]) %}{% endif %}
            {% if visitorData.totalDownloads > 0 %}{% set actionDetails = actionDetails|merge([visitorData.totalDownloads ~ ' ' ~ 'General_Downloads'|translate]) %}{% endif %}
            {% if visitorData.totalOutlinks > 0 %}{% set actionDetails = actionDetails|merge([visitorData.totalOutlinks ~ ' ' ~ 'General_Outlinks'|translate]) %}{% endif %}
            {% if visitorData.totalSearches > 0 %}{% set actionDetails = actionDetails|merge([visitorData.totalSearches ~ ' ' ~ 'Actions_ColumnSearches'|translate]) %}{% endif %}
            <p>{{ 'Live_VisitSummaryWithActionDetails'|translate('<strong>' ~ visitorData.totalVisitDurationPretty ~ '</strong>', '', '', '<strong>' ~ visitorData.totalActions, '</strong>', actionDetails|join(', ') , '<strong>' ~ visitorData.totalVisits, '</strong>')|raw }}</p>
        {% else %}
            <p>{{ 'Live_VisitSummary'|translate('<strong>' ~ visitorData.totalVisitDurationPretty ~ '</strong>', '', '', '<strong title=\"' ~ pageviewDetails ~ '\">' ~ visitorData.totalActions,  '</strong>', '<strong>' ~ visitorData.totalVisits, '</strong>')|raw }}</p>
        {% endif %}
        {% if visitorData.totalGoalConversions is defined %}
        <p>{% if visitorData.totalGoalConversions %}<strong>{% endif %}{{ 'Live_ConvertedNGoals'|translate(visitorData.totalGoalConversions) }}{% if visitorData.totalGoalConversions %}</strong>{% endif %}
        {%- if visitorData.totalGoalConversions %}
            {% set goalList %}
            {%- for idGoal, totalConversions in visitorData.totalConversionsByGoal -%}
                {%- set idGoal = idGoal[7:] -%}
                {% if goals[idGoal] is defined %}
                    {%- if not loop.first %}, {% endif -%}{{- totalConversions }} {{ goals[idGoal]['name'] -}}
                {% endif %}
            {%- endfor -%}
            {% endset %}
            {% if goalList %}({{ goalList }}){% endif %}
        {%- endif %}.</p>
        {% endif %}
        {% if visitorData.totalSearches|default(0) %}
        <p>
            {{ 'Actions_WidgetSearchKeywords'|translate }}:
            {%- for entry in visitorData.searches %} <strong title=\"{% if entry.searches == 1 %}{{ 'Actions_OneSearch'|translate }}{% else %}{{ 'UserCountryMap_Searches'|translate(entry.searches) }}{% endif %}\">{{ entry.keyword }}</strong>{% if not loop.last %},{% endif %}{% endfor %}
        </p>
        {% endif %}
        {% if visitorData.averagePageGenerationTime is defined %}
        <p title=\"{{ 'Live_CalculatedOverNPageViews'|translate(visitorData.totalPageViewsWithTiming) }}\">
            {{ 'Live_AveragePageGenerationTime'|translate('<strong>' ~ visitorData.averagePageGenerationTime ~ 's</strong>')|raw }}
        </p>
        {% endif %}
    </div>
</div>", "@Live/_profileSummary.twig", "/home/cda35/site2/www/matomo/plugins/Live/templates/_profileSummary.twig");
    }
}
