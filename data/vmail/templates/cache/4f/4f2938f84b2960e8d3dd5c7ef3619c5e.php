<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* index.twig */
class __TwigTemplate_32bcb7d5421d8794fd73c66975897255 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.twig", "index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"row mb-4\" style=\"margin-top: 60px\">
  <div class=\"col-12 col-md-7 col-lg-6 col-xl-5 ms-auto me-auto\">
    <div class=\"card\">
      <div class=\"card-header d-flex align-items-center\">
        <i class=\"bi bi-person-fill me-2\"></i> ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 10), "login", [], "any", false, false, false, 10), "html", null, true);
        echo "
        <div class=\"ms-auto form-check form-switch my-auto d-flex align-items-center\">
          <label class=\"form-check-label\"><i class=\"bi bi-moon-fill\"></i></label>
          <input class=\"form-check-input ms-2\" type=\"checkbox\" id=\"dark-mode-toggle\">
        </div>
      </div>
      <div class=\"card-body\">
        <div class=\"text-center mailcow-logo mb-4\"><img src=\"";
        // line 17
        echo twig_escape_filter($this->env, ((array_key_exists("logo", $context)) ? (_twig_default_filter(($context["logo"] ?? null), "/img/cow_mailcow.svg")) : ("/img/cow_mailcow.svg")), "html", null, true);
        echo "\" alt=\"mailcow\"></div>
        ";
        // line 18
        if ((twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_announcement_text", [], "any", false, false, false, 18) && twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_announcement_active", [], "any", false, false, false, 18))) {
            // line 19
            echo "        <div class=\"my-4 alert alert-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_announcement_type", [], "any", false, false, false, 19), "html", null, true);
            echo " rot-enc ui-announcement-alert\">";
            echo twig_escape_filter($this->env, str_rot13(twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "ui_announcement_text", [], "any", false, false, false, 19)), "html", null, true);
            echo "</div>
        ";
        }
        // line 21
        echo "        <legend>";
        if (($context["oauth2_request"] ?? null)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "oauth2", [], "any", false, false, false, 21), "authorize_app", [], "any", false, false, false, 21), "html", null, true);
        } else {
            echo twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "main_name", [], "any", false, false, false, 21);
        }
        echo "</legend><hr />
        ";
        // line 22
        if (($context["is_mobileconfig"] ?? null)) {
            // line 23
            echo "        <div class=\"my-4 alert alert-info \">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 23), "mobileconfig_info", [], "any", false, false, false, 23), "html", null, true);
            echo "</div>
        ";
        }
        // line 25
        echo "        <form method=\"post\" autofill=\"off\">
          <div class=\"d-flex mt-3\">
            <label class=\"visually-hidden\" for=\"login_user\">";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 27), "username", [], "any", false, false, false, 27), "html", null, true);
        echo "</label>
            <div class=\"input-group\">
              <div class=\"input-group-text\"><i class=\"bi bi-person-fill\"></i></div>
              <input name=\"login_user\" autocorrect=\"off\" autocapitalize=\"none\" type=\"";
        // line 30
        if (($context["is_mobileconfig"] ?? null)) {
            echo "email";
        } else {
            echo "text";
        }
        echo "\" id=\"login_user\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 30), "username", [], "any", false, false, false, 30), "html", null, true);
        echo "\" required=\"\" autofocus=\"\" autocomplete=\"username\">
            </div>
          </div>
          <div class=\"d-flex mt-3\">
            <label class=\"visually-hidden\" for=\"pass_user\">";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 34), "password", [], "any", false, false, false, 34), "html", null, true);
        echo "</label>
            <div class=\"input-group\">
              <div class=\"input-group-text\"><i class=\"bi bi-lock-fill\"></i></div>
              <input name=\"pass_user\" type=\"password\" id=\"pass_user\" class=\"form-control\" placeholder=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 37), "password", [], "any", false, false, false, 37), "html", null, true);
        echo "\" required=\"\" autocomplete=\"current-password\">
            </div>
          </div>
          <div class=\"d-flex mt-4\" style=\"position: relative\">
            <button type=\"submit\" class=\"btn btn-xs-lg btn-success\" value=\"Login\">";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 41), "login", [], "any", false, false, false, 41), "html", null, true);
        echo "</button>
            <button type=\"button\" class=\"btn btn-xs-lg btn-success ms-2\" id=\"fido2-login\"><i class=\"bi bi-shield-fill-check\"></i> ";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 42), "fido2_webauthn", [], "any", false, false, false, 42), "html", null, true);
        echo "</button>
            ";
        // line 43
        if ( !($context["oauth2_request"] ?? null)) {
            // line 44
            echo "            <button type=\"button\" ";
            if ((twig_length_filter($this->env, ($context["available_languages"] ?? null)) == 1)) {
                echo "disabled=\"true\"";
            }
            echo " class=\"btn btn-xs-lg btn-secondary ms-auto dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
              <span class=\"flag-icon flag-icon-";
            // line 45
            echo twig_escape_filter($this->env, twig_slice($this->env, ($context["mailcow_locale"] ?? null),  -2, null), "html", null, true);
            echo "\"></span>
            </button>
            <ul class=\"dropdown-menu ms-auto login\">
              ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["available_languages"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 49
                echo "                <li>
                  <a class=\"dropdown-item ";
                // line 50
                if ((($context["mailcow_locale"] ?? null) == $context["key"])) {
                    echo "active";
                }
                echo "\" href=\"?";
                echo twig_escape_filter($this->env, $this->env->getFunction('query_string')->getCallable()(["lang" => $context["key"]]), "html", null, true);
                echo "\">
                    <span class=\"flag-icon flag-icon-";
                // line 51
                echo twig_escape_filter($this->env, twig_slice($this->env, $context["key"],  -2, null), "html", null, true);
                echo "\"></span>";
                echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                echo "
                  </a>
                </li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "            </ul>
            ";
        }
        // line 57
        echo "          </div>
        </form>
        ";
        // line 59
        if (($context["login_delay"] ?? null)) {
            // line 60
            echo "        <p><div class=\"my-4 alert alert-info\">";
            echo twig_escape_filter($this->env, twig_sprintf(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "login", [], "any", false, false, false, 60), "delayed", [], "any", false, false, false, 60), ($context["login_delay"] ?? null)), "html", null, true);
            echo "</b></div></p>
        ";
        }
        // line 62
        echo "        <div class=\"my-4\" id=\"fido2-alerts\"></div>
        ";
        // line 63
        if (( !($context["oauth2_request"] ?? null) && (($context["mailcow_apps"] ?? null) || ($context["app_links"] ?? null)))) {
            // line 64
            echo "        <legend><i class=\"bi bi-link-45deg\"></i> ";
            echo twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "apps_name", [], "any", false, false, false, 64);
            echo "</legend><hr />
        <div class=\"my-2 d-flex flex-wrap apps\">
          ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["mailcow_apps"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
                // line 67
                echo "            ";
                if (( !($context["skip_sogo"] ?? null) ||  !$this->env->getFunction('is_uri')->getCallable()("SOGo", twig_get_attribute($this->env, $this->source, $context["app"], "link", [], "any", false, false, false, 67)))) {
                    // line 68
                    echo "            <div class=\"m-2\">
              <a href=\"";
                    // line 69
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["app"], "link", [], "any", false, false, false, 69), "html", null, true);
                    echo "\" role=\"button\" ";
                    if (twig_get_attribute($this->env, $this->source, $context["app"], "description", [], "any", false, false, false, 69)) {
                        echo "title=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["app"], "description", [], "any", false, false, false, 69), "html", null, true);
                        echo "\"";
                    }
                    echo " class=\"btn btn-primary btn-block\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["app"], "name", [], "any", false, false, false, 69), "html", null, true);
                    echo "</a>
            </div>
          ";
                }
                // line 72
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['app'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["app_links"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 74
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["row"]);
                foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                    // line 75
                    echo "              <div class=\"m-2\">
                <a href=\"";
                    // line 76
                    echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                    echo "\" role=\"button\" class=\"btn btn-primary btn-block\">";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "</a>
              </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 79
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "        </div>
        ";
        }
        // line 82
        echo "      </div>
    </div>
  </div>
</div>
";
        // line 86
        if ( !($context["oauth2_request"] ?? null)) {
            // line 87
            echo "<div class=\"row\">
  <div class=\"col-12 col-md-7 col-lg-6 col-xl-5 ms-auto me-auto\">
    <div class=\"card\">
      <div class=\"card-header\">
        <a class=\"btn btn-link\" data-bs-toggle=\"collapse\" href=\"#collapse1\"><i class=\"bi bi-patch-question-fill\"></i> ";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "start", [], "any", false, false, false, 91), "help", [], "any", false, false, false, 91), "html", null, true);
            echo "</a>
      </div>
      <div id=\"collapse1\" class=\"card-collapse collapse\">
        <div class=\"card-body\">
          ";
            // line 95
            if (twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "help_text", [], "any", false, false, false, 95)) {
                // line 96
                echo "          <p>";
                echo twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "help_text", [], "any", false, false, false, 96);
                echo "</p>
          ";
            } else {
                // line 98
                echo "          <p><span style=\"border-bottom: 1px dotted #999;\">";
                echo twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "main_name", [], "any", false, false, false, 98);
                echo "</span></p>
          <p>";
                // line 99
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "start", [], "any", false, false, false, 99), "mailcow_panel_detail", [], "any", false, false, false, 99);
                echo "</p>
          <p><span style=\"border-bottom: 1px dotted #999;\">";
                // line 100
                echo twig_get_attribute($this->env, $this->source, ($context["ui_texts"] ?? null), "apps_name", [], "any", false, false, false, 100);
                echo "</span></p>
          <p>";
                // line 101
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "start", [], "any", false, false, false, 101), "mailcow_apps_detail", [], "any", false, false, false, 101);
                echo "</p>
          ";
            }
            // line 103
            echo "        </div>
      </div>
    </div>
  </div>
  ";
        }
        // line 108
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 108,  328 => 103,  323 => 101,  319 => 100,  315 => 99,  310 => 98,  304 => 96,  302 => 95,  295 => 91,  289 => 87,  287 => 86,  281 => 82,  277 => 80,  271 => 79,  260 => 76,  257 => 75,  252 => 74,  247 => 73,  241 => 72,  227 => 69,  224 => 68,  221 => 67,  217 => 66,  211 => 64,  209 => 63,  206 => 62,  200 => 60,  198 => 59,  194 => 57,  190 => 55,  178 => 51,  170 => 50,  167 => 49,  163 => 48,  157 => 45,  150 => 44,  148 => 43,  144 => 42,  140 => 41,  133 => 37,  127 => 34,  114 => 30,  108 => 27,  104 => 25,  98 => 23,  96 => 22,  87 => 21,  79 => 19,  77 => 18,  73 => 17,  63 => 10,  57 => 6,  53 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.twig' %}

{% block navbar %}{% endblock %}

{% block content %}
<div class=\"row mb-4\" style=\"margin-top: 60px\">
  <div class=\"col-12 col-md-7 col-lg-6 col-xl-5 ms-auto me-auto\">
    <div class=\"card\">
      <div class=\"card-header d-flex align-items-center\">
        <i class=\"bi bi-person-fill me-2\"></i> {{ lang.login.login }}
        <div class=\"ms-auto form-check form-switch my-auto d-flex align-items-center\">
          <label class=\"form-check-label\"><i class=\"bi bi-moon-fill\"></i></label>
          <input class=\"form-check-input ms-2\" type=\"checkbox\" id=\"dark-mode-toggle\">
        </div>
      </div>
      <div class=\"card-body\">
        <div class=\"text-center mailcow-logo mb-4\"><img src=\"{{ logo|default('/img/cow_mailcow.svg') }}\" alt=\"mailcow\"></div>
        {% if ui_texts.ui_announcement_text and ui_texts.ui_announcement_active %}
        <div class=\"my-4 alert alert-{{ ui_texts.ui_announcement_type }} rot-enc ui-announcement-alert\">{{ ui_texts.ui_announcement_text|rot13 }}</div>
        {% endif %}
        <legend>{% if oauth2_request %}{{ lang.oauth2.authorize_app }}{% else %}{{ ui_texts.main_name|raw }}{% endif %}</legend><hr />
        {% if is_mobileconfig %}
        <div class=\"my-4 alert alert-info \">{{ lang.login.mobileconfig_info }}</div>
        {% endif %}
        <form method=\"post\" autofill=\"off\">
          <div class=\"d-flex mt-3\">
            <label class=\"visually-hidden\" for=\"login_user\">{{ lang.login.username }}</label>
            <div class=\"input-group\">
              <div class=\"input-group-text\"><i class=\"bi bi-person-fill\"></i></div>
              <input name=\"login_user\" autocorrect=\"off\" autocapitalize=\"none\" type=\"{% if is_mobileconfig %}email{% else %}text{% endif %}\" id=\"login_user\" class=\"form-control\" placeholder=\"{{ lang.login.username }}\" required=\"\" autofocus=\"\" autocomplete=\"username\">
            </div>
          </div>
          <div class=\"d-flex mt-3\">
            <label class=\"visually-hidden\" for=\"pass_user\">{{ lang.login.password }}</label>
            <div class=\"input-group\">
              <div class=\"input-group-text\"><i class=\"bi bi-lock-fill\"></i></div>
              <input name=\"pass_user\" type=\"password\" id=\"pass_user\" class=\"form-control\" placeholder=\"{{ lang.login.password }}\" required=\"\" autocomplete=\"current-password\">
            </div>
          </div>
          <div class=\"d-flex mt-4\" style=\"position: relative\">
            <button type=\"submit\" class=\"btn btn-xs-lg btn-success\" value=\"Login\">{{ lang.login.login }}</button>
            <button type=\"button\" class=\"btn btn-xs-lg btn-success ms-2\" id=\"fido2-login\"><i class=\"bi bi-shield-fill-check\"></i> {{ lang.login.fido2_webauthn }}</button>
            {% if not oauth2_request %}
            <button type=\"button\" {% if available_languages|length == 1 %}disabled=\"true\"{% endif %} class=\"btn btn-xs-lg btn-secondary ms-auto dropdown-toggle\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
              <span class=\"flag-icon flag-icon-{{ mailcow_locale[-2:] }}\"></span>
            </button>
            <ul class=\"dropdown-menu ms-auto login\">
              {% for key, val in available_languages %}
                <li>
                  <a class=\"dropdown-item {% if mailcow_locale == key %}active{% endif %}\" href=\"?{{ query_string({'lang': key}) }}\">
                    <span class=\"flag-icon flag-icon-{{ key[-2:] }}\"></span>{{ val }}
                  </a>
                </li>
              {% endfor %}
            </ul>
            {% endif %}
          </div>
        </form>
        {% if login_delay %}
        <p><div class=\"my-4 alert alert-info\">{{ lang.login.delayed|format(login_delay) }}</b></div></p>
        {% endif %}
        <div class=\"my-4\" id=\"fido2-alerts\"></div>
        {% if not oauth2_request and (mailcow_apps or app_links) %}
        <legend><i class=\"bi bi-link-45deg\"></i> {{ ui_texts.apps_name|raw }}</legend><hr />
        <div class=\"my-2 d-flex flex-wrap apps\">
          {% for app in mailcow_apps %}
            {% if not skip_sogo or not is_uri('SOGo', app.link) %}
            <div class=\"m-2\">
              <a href=\"{{ app.link }}\" role=\"button\" {% if app.description %}title=\"{{ app.description }}\"{% endif %} class=\"btn btn-primary btn-block\">{{ app.name }}</a>
            </div>
          {% endif %}
          {% endfor %}
          {% for row in app_links %}
            {% for key, val in row %}
              <div class=\"m-2\">
                <a href=\"{{ val }}\" role=\"button\" class=\"btn btn-primary btn-block\">{{ key }}</a>
              </div>
            {% endfor %}
          {% endfor %}
        </div>
        {% endif %}
      </div>
    </div>
  </div>
</div>
{% if not oauth2_request %}
<div class=\"row\">
  <div class=\"col-12 col-md-7 col-lg-6 col-xl-5 ms-auto me-auto\">
    <div class=\"card\">
      <div class=\"card-header\">
        <a class=\"btn btn-link\" data-bs-toggle=\"collapse\" href=\"#collapse1\"><i class=\"bi bi-patch-question-fill\"></i> {{ lang.start.help }}</a>
      </div>
      <div id=\"collapse1\" class=\"card-collapse collapse\">
        <div class=\"card-body\">
          {% if ui_texts.help_text %}
          <p>{{ ui_texts.help_text|raw }}</p>
          {% else %}
          <p><span style=\"border-bottom: 1px dotted #999;\">{{ ui_texts.main_name|raw }}</span></p>
          <p>{{ lang.start.mailcow_panel_detail|raw }}</p>
          <p><span style=\"border-bottom: 1px dotted #999;\">{{ ui_texts.apps_name|raw }}</span></p>
          <p>{{ lang.start.mailcow_apps_detail|raw }}</p>
          {% endif %}
        </div>
      </div>
    </div>
  </div>
  {% endif %}
</div>
{% endblock %}
", "index.twig", "/data/websites/vmail/templates/index.twig");
    }
}
