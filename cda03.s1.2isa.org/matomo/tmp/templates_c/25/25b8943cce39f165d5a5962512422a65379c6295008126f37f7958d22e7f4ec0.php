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

/* @Live/getVisitList.twig */
class __TwigTemplate_2bf8a500d1553caa9a11a85bee66c456aca741083a8faa7ad901ba94857274d9 extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["visits"] ?? $this->getContext($context, "visits")), "getRows", [], "method"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["visitInfo"]) {
            // line 2
            echo "<li data-number=\"";
            echo \Piwik\piwik_escape_filter($this->env, ($context["startCounter"] ?? $this->getContext($context, "startCounter")), "html", null, true);
            echo "\">
    <div>
        <div class=\"visitor-profile-visit-title\" data-idvisit=\"";
            // line 4
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["visitInfo"], "getColumn", [0 => "idVisit"], "method"), "html", null, true);
            echo "\" title=\"";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Live_ClickToViewMoreAboutVisit"]), "html", null, true);
            echo "\">
            ";
            // line 5
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Visit"]), "html", null, true);
            echo " #";
            echo \Piwik\piwik_escape_filter($this->env, ($context["startCounter"] ?? $this->getContext($context, "startCounter")), "html", null, true);
            echo "

            <span class=\"visitor-profile-date\" title=\"";
            // line 7
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["visitInfo"], "getColumn", [0 => "serverDatePrettyFirstAction"], "method"), "html", null, true);
            echo " ";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["visitInfo"], "getColumn", [0 => "serverTimePrettyFirstAction"], "method"), "html", null, true);
            echo "\">
                ";
            // line 8
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["visitInfo"], "getColumn", [0 => "serverDatePrettyFirstAction"], "method"), "html", null, true);
            echo " ";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($context["visitInfo"], "getColumn", [0 => "serverTimePrettyFirstAction"], "method"), "html", null, true);
            echo "
            </span>
        </div>
        <div class=\"visitor-profile-visit-details-extended\">
            ";
            // line 12
            echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), ["Live.renderVisitorDetails", $context["visitInfo"]]);
            echo "
        </div>
        <div class=\"visitor-profile-visit-details\">
            ";
            // line 15
            echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), ["Live.renderVisitorIcons", $context["visitInfo"]]);
            echo "
            <a href=\"#\" class=\"visitor-profile-show-actions\">
                ";
            // line 17
            $context["actionCount"] = twig_length_filter($this->env, $this->getAttribute($context["visitInfo"], "getColumn", [0 => "actionDetails"], "method"));
            // line 18
            echo "                ";
            if ($this->getAttribute($context["visitInfo"], "truncatedActionsCount", [], "any", true, true)) {
                // line 19
                echo "                    ";
                $context["actionCount"] = (($context["actionCount"] ?? $this->getContext($context, "actionCount")) + $this->getAttribute($context["visitInfo"], "truncatedActionsCount", []));
                // line 20
                echo "                ";
            }
            // line 21
            echo "                ";
            if (($this->getAttribute($context["visitInfo"], "getColumn", [0 => "visitDuration"], "method") != 0)) {
                // line 22
                echo "                    ";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Live_ActionsAndDuration", ($context["actionCount"] ?? $this->getContext($context, "actionCount")), $this->getAttribute($context["visitInfo"], "getColumn", [0 => "visitDurationPretty"], "method")]), "html", null, true);
                echo "
                ";
            } else {
                // line 24
                echo "                    ";
                echo \Piwik\piwik_escape_filter($this->env, ($context["actionCount"] ?? $this->getContext($context, "actionCount")), "html", null, true);
                echo " ";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Actions"]), "html", null, true);
                echo "
                ";
            }
            // line 26
            echo "            </a>
        </div>
        <ol class=\"visitorLog visitor-profile-actions actionList\">
            ";
            // line 29
            $this->loadTemplate("@Live/_actionsList.twig", "@Live/getVisitList.twig", 29)->display(twig_array_merge($context, ["actionDetails" => $this->getAttribute($context["visitInfo"], "getColumn", [0 => "actionDetails"], "method"), "actionGroups" => $this->getAttribute(            // line 30
$context["visitInfo"], "getColumn", [0 => "actionGroups"], "method"), "visitInfo" =>             // line 31
$context["visitInfo"]]));
            // line 32
            echo "        </ol>
    </div>
</li>
";
            // line 35
            $context["startCounter"] = (($context["startCounter"] ?? $this->getContext($context, "startCounter")) - 1);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['visitInfo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@Live/getVisitList.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 35,  129 => 32,  127 => 31,  126 => 30,  125 => 29,  120 => 26,  112 => 24,  106 => 22,  103 => 21,  100 => 20,  97 => 19,  94 => 18,  92 => 17,  87 => 15,  81 => 12,  72 => 8,  66 => 7,  59 => 5,  53 => 4,  47 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% for visitInfo in visits.getRows() %}
<li data-number=\"{{ startCounter }}\">
    <div>
        <div class=\"visitor-profile-visit-title\" data-idvisit=\"{{ visitInfo.getColumn('idVisit') }}\" title=\"{{ 'Live_ClickToViewMoreAboutVisit'|translate }}\">
            {{ 'General_Visit'|translate }} #{{ startCounter }}

            <span class=\"visitor-profile-date\" title=\"{{ visitInfo.getColumn('serverDatePrettyFirstAction') }} {{ visitInfo.getColumn('serverTimePrettyFirstAction') }}\">
                {{ visitInfo.getColumn('serverDatePrettyFirstAction') }} {{ visitInfo.getColumn('serverTimePrettyFirstAction') }}
            </span>
        </div>
        <div class=\"visitor-profile-visit-details-extended\">
            {{ postEvent('Live.renderVisitorDetails', visitInfo) }}
        </div>
        <div class=\"visitor-profile-visit-details\">
            {{ postEvent('Live.renderVisitorIcons', visitInfo) }}
            <a href=\"#\" class=\"visitor-profile-show-actions\">
                {% set actionCount = visitInfo.getColumn('actionDetails')|length %}
                {% if visitInfo.truncatedActionsCount is defined %}
                    {% set actionCount = actionCount + visitInfo.truncatedActionsCount %}
                {% endif %}
                {% if visitInfo.getColumn('visitDuration') != 0 %}
                    {{ 'Live_ActionsAndDuration'|translate(actionCount, visitInfo.getColumn('visitDurationPretty')) }}
                {% else %}
                    {{ actionCount }} {{ 'General_Actions'|translate }}
                {% endif %}
            </a>
        </div>
        <ol class=\"visitorLog visitor-profile-actions actionList\">
            {% include \"@Live/_actionsList.twig\" with {'actionDetails': visitInfo.getColumn('actionDetails'),
                                                       'actionGroups': visitInfo.getColumn('actionGroups'),
                                                       'visitInfo': visitInfo} %}
        </ol>
    </div>
</li>
{% set startCounter = startCounter - 1 %}
{% endfor %}", "@Live/getVisitList.twig", "/home/cda35/site2/www/matomo/plugins/Live/templates/getVisitList.twig");
    }
}
