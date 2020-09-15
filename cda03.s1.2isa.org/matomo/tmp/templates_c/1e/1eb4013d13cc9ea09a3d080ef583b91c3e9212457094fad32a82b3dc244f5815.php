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

/* @Live/getVisitorProfilePopup.twig */
class __TwigTemplate_4980d62a59aeb543cd49ffd4cc99a0459067930845797e7327412b9a0f96edc0 extends \Twig\Template
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
        if ( !($context["visitorData"] ?? $this->getContext($context, "visitorData"))) {
            // line 2
            echo "    <div class=\"pk-emptyDataTable\">";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreHome_ThereIsNoDataForThisReport"]), "html", null, true);
            echo "</div>
";
        } else {
            // line 4
            echo "    <div class=\"visitor-profile\"
         data-visitor-id=\"";
            // line 5
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "lastVisits", []), "getFirstRow", [], "method"), "getColumn", [0 => "visitorId"], "method"), "html", null, true);
            echo "\"
         data-next-visitor=\"";
            // line 6
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "nextVisitorId", []), "html", null, true);
            echo "\"
         data-prev-visitor=\"";
            // line 7
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "previousVisitorId", []), "html", null, true);
            echo "\"
         tabindex=\"0\">
        <div class=\"visitor-profile-options\">
            <a href class=\"visitor-profile-close\" title=\"";
            // line 10
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Close"]), "html", null, true);
            echo " \"></a>
            <a href=\"https://matomo.org/docs/user-profile/\" class=\"visitor-profile-help\" rel=\"noreferrer\"
               target=\"_blank\"
               title=\"";
            // line 13
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_ViewDocumentationFor", ucwords(call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Live_VisitorProfile"]))]), "html", null, true);
            echo "\">
            </a>
            <a href class=\"visitor-profile-toggle-actions\" title=\"";
            // line 15
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Live_ToggleActions"]), "html", null, true);
            echo " \"></a>
        </div>
        <div class=\"visitor-profile-info\">
            <div class=\"visitor-profile-overview\">
                <div class=\"visitor-profile-header\">
                    <div class=\"visitor-profile-avatar\">
                        <img src=\"";
            // line 21
            echo \Piwik\piwik_escape_filter($this->env, (($this->getAttribute(($context["visitorData"] ?? null), "visitorAvatar", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["visitorData"] ?? null), "visitorAvatar", []), "plugins/Live/images/unknown_avatar.png")) : ("plugins/Live/images/unknown_avatar.png")), "html", null, true);
            echo "\"
                             alt=\"";
            // line 22
            echo \Piwik\piwik_escape_filter($this->env, (($this->getAttribute(($context["visitorData"] ?? null), "visitorDescription", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["visitorData"] ?? null), "visitorDescription", []), "")) : ("")), "html", null, true);
            echo "\"
                             title=\"";
            // line 23
            echo \Piwik\piwik_escape_filter($this->env, (($this->getAttribute(($context["visitorData"] ?? null), "visitorDescription", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["visitorData"] ?? null), "visitorDescription", []), "")) : ("")), "html", null, true);
            echo "\"/>
                    </div>
                    <div class=\"visitor-profile-header-details\">
                        <div class=\"visitor-profile-headline\">
                            ";
            // line 27
            if ( !twig_test_empty($this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "previousVisitorId", []))) {
                echo "<a class=\"visitor-profile-prev-visitor\"
                                                                                  href=\"#\"
                                                                                  title=\"";
                // line 29
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Live_PreviousVisitor"]), "html", null, true);
                echo "\">
                                    &larr;</a>";
            }
            // line 31
            echo "                            <h1>";
            // line 32
            if (twig_test_empty($this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "userId", []))) {
                // line 33
                echo "                                    ";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Live_VisitorProfile"]), "html", null, true);
            } else {
                // line 35
                echo "                                    <span title=\"";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_UserId"]), "html", null, true);
                echo ": ";
                echo call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), [$this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "userId", [])]);
                echo "\">";
                echo call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), [$this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "userId", [])]);
                echo "</span>
                                ";
            }
            // line 37
            echo "</h1>
                            ";
            // line 38
            if ( !twig_test_empty($this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "nextVisitorId", []))) {
                echo "<a class=\"visitor-profile-next-visitor\"
                                                                              href=\"#\"
                                                                              title=\"";
                // line 40
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Live_NextVisitor"]), "html", null, true);
                echo "\">
                                    &rarr;</a>";
            }
            // line 42
            echo "                        </div>
                        <div class=\"visitor-profile-latest-visit\">
                            <div class=\"visitor-profile-id\">
                                <span>";
            // line 45
            echo \Piwik\piwik_escape_filter($this->env, twig_upper_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Id"])), "html", null, true);
            echo "</span>
                                ";
            // line 46
            if ((isset($context["widgetizedLink"]) || array_key_exists("widgetizedLink", $context))) {
                echo "<a class=\"visitor-profile-widget-link\"
                                                                     href=\"";
                // line 47
                echo \Piwik\piwik_escape_filter($this->env, ($context["widgetizedLink"] ?? $this->getContext($context, "widgetizedLink")), "html", null, true);
                echo "\" target=\"_blank\"
                                                                     title=\"";
                // line 48
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Widgetize_OpenInNewWindow"]), "html", null, true);
                echo " - ";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Live_VisitorProfile"]), "html", null, true);
                echo " ";
                echo \Piwik\piwik_escape_filter($this->env, twig_upper_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Id"])), "html", null, true);
                echo " ";
                echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "visitorId", []), "html", null, true);
                echo "\">";
            }
            // line 49
            echo "                                    <span>";
            echo \Piwik\piwik_escape_filter($this->env, $this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "visitorId", []), "html", null, true);
            echo "</span>";
            // line 50
            if ((isset($context["widgetizedLink"]) || array_key_exists("widgetizedLink", $context))) {
                echo "</a>";
            }
            // line 51
            echo "                                <a class=\"visitor-profile-export\" href=\"";
            echo \Piwik\piwik_escape_filter($this->env, ($context["exportLink"] ?? $this->getContext($context, "exportLink")), "html", null, true);
            echo "\" target=\"_blank\"
                                   title=\"";
            // line 52
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_ExportThisReport"]), "html", null, true);
            echo "\">
                                    <span class=\"icon-export\"></span>
                                </a>
                            </div>
                            ";
            // line 56
            echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), ["Live.renderVisitorIcons", twig_first($this->env, $this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "lastVisits", []))]);
            echo "
                        </div>
                    </div>
                </div>

                ";
            // line 61
            echo ($context["profileSummary"] ?? $this->getContext($context, "profileSummary"));
            echo "

                ";
            // line 63
            echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), ["Template.afterVisitorProfileOverview"]);
            echo "
            </div>
            <div class=\"visitor-profile-visits-info\">
                <div class=\"visitor-profile-visits-container\">
                    <ol class=\"visitor-profile-visits\">
                        ";
            // line 68
            $this->loadTemplate("@Live/getVisitList.twig", "@Live/getVisitorProfilePopup.twig", 68)->display(twig_array_merge($context, ["visits" => $this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "lastVisits", []), "startCounter" => $this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "totalVisits", [])]));
            // line 69
            echo "                    </ol>
                </div>
                <div class=\"visitor-profile-more-info\">
                    ";
            // line 72
            if (($this->getAttribute($this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "lastVisits", []), "getRowsCount", [], "method") >= twig_constant("Piwik\\Plugins\\Live\\VisitorProfile::VISITOR_PROFILE_MAX_VISITS_TO_SHOW"))) {
                // line 73
                echo "                        <a href=\"#\">";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Live_LoadMoreVisits"]), "html", null, true);
                echo "</a> <img class=\"loadingPiwik\"
                                                                                   style=\"display:none;\"
                                                                                   src=\"plugins/Morpheus/images/loading-blue.gif\"/>
                    ";
            } else {
                // line 77
                echo "                        <span class=\"visitor-profile-no-visits\">
                            ";
                // line 78
                if ($this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "hasMoreVisits", [])) {
                    // line 79
                    echo "                                ";
                    echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Live_LimitedVisitsShown", (("<strong>" . $this->getAttribute(($context["visitorData"] ?? $this->getContext($context, "visitorData")), "totalVisits", [])) . "</strong>")]);
                    echo "
                            ";
                } else {
                    // line 81
                    echo "                                ";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Live_NoMoreVisits"]), "html", null, true);
                    echo "
                            ";
                }
                // line 83
                echo "                        </span>
                    ";
            }
            // line 85
            echo "                </div>
            </div>
        </div>
    </div>
    <script type=\"text/javascript\">
        \$(function () {
            require('piwik/UI').VisitorProfileControl.initElements();
        });
    </script>
";
        }
    }

    public function getTemplateName()
    {
        return "@Live/getVisitorProfilePopup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 85,  233 => 83,  227 => 81,  221 => 79,  219 => 78,  216 => 77,  208 => 73,  206 => 72,  201 => 69,  199 => 68,  191 => 63,  186 => 61,  178 => 56,  171 => 52,  166 => 51,  162 => 50,  158 => 49,  148 => 48,  144 => 47,  140 => 46,  136 => 45,  131 => 42,  126 => 40,  121 => 38,  118 => 37,  108 => 35,  104 => 33,  102 => 32,  100 => 31,  95 => 29,  90 => 27,  83 => 23,  79 => 22,  75 => 21,  66 => 15,  61 => 13,  55 => 10,  49 => 7,  45 => 6,  41 => 5,  38 => 4,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if not visitorData %}
    <div class=\"pk-emptyDataTable\">{{ 'CoreHome_ThereIsNoDataForThisReport'|translate }}</div>
{% else %}
    <div class=\"visitor-profile\"
         data-visitor-id=\"{{ visitorData.lastVisits.getFirstRow().getColumn('visitorId') }}\"
         data-next-visitor=\"{{ visitorData.nextVisitorId }}\"
         data-prev-visitor=\"{{ visitorData.previousVisitorId }}\"
         tabindex=\"0\">
        <div class=\"visitor-profile-options\">
            <a href class=\"visitor-profile-close\" title=\"{{ 'General_Close'|translate }} \"></a>
            <a href=\"https://matomo.org/docs/user-profile/\" class=\"visitor-profile-help\" rel=\"noreferrer\"
               target=\"_blank\"
               title=\"{{ 'General_ViewDocumentationFor'|translate(\"Live_VisitorProfile\"|translate|ucwords) }}\">
            </a>
            <a href class=\"visitor-profile-toggle-actions\" title=\"{{ 'Live_ToggleActions'|translate }} \"></a>
        </div>
        <div class=\"visitor-profile-info\">
            <div class=\"visitor-profile-overview\">
                <div class=\"visitor-profile-header\">
                    <div class=\"visitor-profile-avatar\">
                        <img src=\"{{ visitorData.visitorAvatar|default(\"plugins/Live/images/unknown_avatar.png\") }}\"
                             alt=\"{{ visitorData.visitorDescription|default('') }}\"
                             title=\"{{ visitorData.visitorDescription|default('') }}\"/>
                    </div>
                    <div class=\"visitor-profile-header-details\">
                        <div class=\"visitor-profile-headline\">
                            {% if visitorData.previousVisitorId is not empty %}<a class=\"visitor-profile-prev-visitor\"
                                                                                  href=\"#\"
                                                                                  title=\"{{ 'Live_PreviousVisitor'|translate }}\">
                                    &larr;</a>{% endif %}
                            <h1>
                                {%- if visitorData.userId is empty %}
                                    {{ 'Live_VisitorProfile'|translate }}
                                {%- else %}
                                    <span title=\"{{ 'General_UserId'|translate }}: {{ visitorData.userId|rawSafeDecoded }}\">{{ visitorData.userId|rawSafeDecoded }}</span>
                                {% endif -%}
                            </h1>
                            {% if visitorData.nextVisitorId is not empty %}<a class=\"visitor-profile-next-visitor\"
                                                                              href=\"#\"
                                                                              title=\"{{ 'Live_NextVisitor'|translate }}\">
                                    &rarr;</a>{% endif %}
                        </div>
                        <div class=\"visitor-profile-latest-visit\">
                            <div class=\"visitor-profile-id\">
                                <span>{{ 'General_Id'|translate|upper }}</span>
                                {% if widgetizedLink is defined %}<a class=\"visitor-profile-widget-link\"
                                                                     href=\"{{ widgetizedLink }}\" target=\"_blank\"
                                                                     title=\"{{ 'Widgetize_OpenInNewWindow'|translate }} - {{ 'Live_VisitorProfile'|translate }} {{ 'General_Id'|translate|upper }} {{ visitorData.visitorId }}\">{% endif %}
                                    <span>{{ visitorData.visitorId }}</span>
                                    {%- if widgetizedLink is defined %}</a>{% endif %}
                                <a class=\"visitor-profile-export\" href=\"{{ exportLink }}\" target=\"_blank\"
                                   title=\"{{ 'General_ExportThisReport'|translate }}\">
                                    <span class=\"icon-export\"></span>
                                </a>
                            </div>
                            {{ postEvent('Live.renderVisitorIcons', visitorData.lastVisits|first) }}
                        </div>
                    </div>
                </div>

                {{ profileSummary|raw }}

                {{ postEvent('Template.afterVisitorProfileOverview') }}
            </div>
            <div class=\"visitor-profile-visits-info\">
                <div class=\"visitor-profile-visits-container\">
                    <ol class=\"visitor-profile-visits\">
                        {% include \"@Live/getVisitList.twig\" with {'visits': visitorData.lastVisits, 'startCounter': visitorData.totalVisits} %}
                    </ol>
                </div>
                <div class=\"visitor-profile-more-info\">
                    {% if visitorData.lastVisits.getRowsCount() >= constant(\"Piwik\\\\Plugins\\\\Live\\\\VisitorProfile::VISITOR_PROFILE_MAX_VISITS_TO_SHOW\") %}
                        <a href=\"#\">{{ 'Live_LoadMoreVisits'|translate }}</a> <img class=\"loadingPiwik\"
                                                                                   style=\"display:none;\"
                                                                                   src=\"plugins/Morpheus/images/loading-blue.gif\"/>
                    {% else %}
                        <span class=\"visitor-profile-no-visits\">
                            {% if visitorData.hasMoreVisits %}
                                {{ 'Live_LimitedVisitsShown'|translate('<strong>' ~ visitorData.totalVisits ~ '</strong>')|raw }}
                            {% else %}
                                {{ 'Live_NoMoreVisits'|translate }}
                            {% endif %}
                        </span>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
    <script type=\"text/javascript\">
        \$(function () {
            require('piwik/UI').VisitorProfileControl.initElements();
        });
    </script>
{% endif %}", "@Live/getVisitorProfilePopup.twig", "/home/cda35/site2/www/matomo/plugins/Live/templates/getVisitorProfilePopup.twig");
    }
}
