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

/* @Live/_profileSummaryVisits.twig */
class __TwigTemplate_c9fa5ab8cc3898fa56b5fa55165df7ca893e7408d52479472ebc1791a8f2130d extends \Twig\Template
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
        echo "<div class=\"visitor-profile-summary visitor-profile-important-visits\">";
        // line 2
        $context["keywordNotDefined"] = call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_NotDefined", call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_ColumnKeyword"])]);
        // line 3
        echo "<div>
        <h1>";
        // line 4
        if (($this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "visitsAggregated", []) == 100)) {
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Visit"]), "html", null, true);
            echo "# 100";
        } else {
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Live_FirstVisit"]), "html", null, true);
        }
        echo "</h1>
        <div>
            <p><strong>";
        // line 6
        echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "firstVisit", []), "prettyDate", []), "html", null, true);
        echo "</strong>&nbsp;- ";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UserCountryMap_DaysAgo", $this->getAttribute($this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "firstVisit", []), "daysAgo", [])]), "html", null, true);
        echo "</p>
            <p>
                ";
        // line 8
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_FromReferrer"]), "html", null, true);
        echo " <strong ";
        if ((($this->getAttribute($this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "firstVisit", []), "referrerType", []) == "search") && !twig_in_filter("(", $this->getAttribute($this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "firstVisit", []), "referralSummary", [])))) {
            echo "title=\"";
            echo \Piwik\piwik_escape_filter($this->env, ($context["keywordNotDefined"] ?? $this->getContext($context, "keywordNotDefined")), "html", null, true);
            echo "\"";
        }
        echo ">";
        // line 9
        if (($this->getAttribute($this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "firstVisit", []), "referrerType", []) == "website")) {
            // line 10
            echo "                        <a href=\"";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('safelink')->getCallable(), [$this->getAttribute($this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "firstVisit", []), "referrerUrl", [])]), "html_attr");
            echo "\" target=\"_blank\">
                            ";
            // line 11
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "firstVisit", []), "referralSummary", []), "html", null, true);
            echo "
                        </a>
                    ";
        } else {
            // line 14
            echo "                        ";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "firstVisit", []), "referralSummary", []), "html", null, true);
            echo "
                    ";
        }
        // line 16
        echo "                </strong>
            </p>
        </div>
    </div>
    ";
        // line 20
        if (($this->getAttribute($this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "lastVisits", []), "getRowsCount", [], "method") != 1)) {
            // line 21
            echo "        <div>
            <h1>";
            // line 22
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Live_LastVisit"]), "html", null, true);
            echo "</h1>
            <div>
                <p><strong>";
            // line 24
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "lastVisit", []), "prettyDate", []), "html", null, true);
            echo "</strong>&nbsp;- ";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UserCountryMap_DaysAgo", $this->getAttribute($this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "lastVisit", []), "daysAgo", [])]), "html", null, true);
            echo "</p>
                <p>
                    ";
            // line 26
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_FromReferrer"]), "html", null, true);
            echo " <strong ";
            if ((($this->getAttribute($this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "lastVisit", []), "referrerType", []) == "search") && !twig_in_filter("(", $this->getAttribute($this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "lastVisit", []), "referralSummary", [])))) {
                echo "title=\"";
                echo \Piwik\piwik_escape_filter($this->env, ($context["keywordNotDefined"] ?? $this->getContext($context, "keywordNotDefined")), "html", null, true);
                echo "\"";
            }
            echo ">";
            // line 27
            if (($this->getAttribute($this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "lastVisit", []), "referrerType", []) == "website")) {
                // line 28
                echo "                            <a href=\"";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('safelink')->getCallable(), [$this->getAttribute($this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "lastVisit", []), "referrerUrl", [])]), "html_attr");
                echo "\" target=\"_blank\">
                                ";
                // line 29
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "lastVisit", []), "referralSummary", []), "html", null, true);
                echo "
                            </a>
                        ";
            } else {
                // line 32
                echo "                            ";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "lastVisit", []), "referralSummary", []), "html", null, true);
                echo "
                        ";
            }
            // line 34
            echo "                    </strong>
                </p>
            </div>
        </div>
    ";
        }
        // line 39
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "@Live/_profileSummaryVisits.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 39,  133 => 34,  127 => 32,  121 => 29,  116 => 28,  114 => 27,  105 => 26,  98 => 24,  93 => 22,  90 => 21,  88 => 20,  82 => 16,  76 => 14,  70 => 11,  65 => 10,  63 => 9,  54 => 8,  47 => 6,  37 => 4,  34 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"visitor-profile-summary visitor-profile-important-visits\">
    {%- set keywordNotDefined = 'General_NotDefined'|translate('General_ColumnKeyword'|translate) -%}
    <div>
        <h1>{% if visitorData.visitsAggregated == 100 %}{{ 'General_Visit'|translate }}# 100{% else %}{{ 'Live_FirstVisit'|translate }}{% endif %}</h1>
        <div>
            <p><strong>{{ visitorData.firstVisit.prettyDate }}</strong>&nbsp;- {{ 'UserCountryMap_DaysAgo'|translate(visitorData.firstVisit.daysAgo) }}</p>
            <p>
                {{ 'General_FromReferrer'|translate }} <strong {% if visitorData.firstVisit.referrerType == 'search' and '(' not in visitorData.firstVisit.referralSummary %}title=\"{{ keywordNotDefined }}\"{% endif %}>
                    {%- if visitorData.firstVisit.referrerType == 'website' %}
                        <a href=\"{{ visitorData.firstVisit.referrerUrl|safelink|e('html_attr') }}\" target=\"_blank\">
                            {{ visitorData.firstVisit.referralSummary }}
                        </a>
                    {% else %}
                        {{ visitorData.firstVisit.referralSummary }}
                    {% endif %}
                </strong>
            </p>
        </div>
    </div>
    {% if visitorData.lastVisits.getRowsCount() != 1 %}
        <div>
            <h1>{{ 'Live_LastVisit'|translate }}</h1>
            <div>
                <p><strong>{{ visitorData.lastVisit.prettyDate }}</strong>&nbsp;- {{ 'UserCountryMap_DaysAgo'|translate(visitorData.lastVisit.daysAgo) }}</p>
                <p>
                    {{ 'General_FromReferrer'|translate }} <strong {% if visitorData.lastVisit.referrerType == 'search' and '(' not in visitorData.lastVisit.referralSummary %}title=\"{{ keywordNotDefined }}\"{% endif %}>
                        {%- if visitorData.lastVisit.referrerType == 'website' %}
                            <a href=\"{{ visitorData.lastVisit.referrerUrl|safelink|e('html_attr') }}\" target=\"_blank\">
                                {{ visitorData.lastVisit.referralSummary }}
                            </a>
                        {% else %}
                            {{ visitorData.lastVisit.referralSummary }}
                        {% endif %}
                    </strong>
                </p>
            </div>
        </div>
    {% endif %}
</div>", "@Live/_profileSummaryVisits.twig", "/home/cda35/site2/www/matomo/plugins/Live/templates/_profileSummaryVisits.twig");
    }
}
