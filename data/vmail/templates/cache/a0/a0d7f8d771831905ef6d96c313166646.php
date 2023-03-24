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

/* mailbox/rl-frame.twig */
class __TwigTemplate_90d60c77a4a09464760f0364b1d2e218 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<option value=\"s\"";
        if ((twig_get_attribute($this->env, $this->source, ($context["rl"] ?? null), "frame", [], "any", false, false, false, 1) == "s")) {
            echo " selected";
        }
        echo ">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "ratelimit", [], "any", false, false, false, 1), "second", [], "any", false, false, false, 1), "html", null, true);
        echo "</option>
<option value=\"m\"";
        // line 2
        if ((twig_get_attribute($this->env, $this->source, ($context["rl"] ?? null), "frame", [], "any", false, false, false, 2) == "m")) {
            echo " selected";
        }
        echo ">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "ratelimit", [], "any", false, false, false, 2), "minute", [], "any", false, false, false, 2), "html", null, true);
        echo "</option>
<option value=\"h\"";
        // line 3
        if ((twig_get_attribute($this->env, $this->source, ($context["rl"] ?? null), "frame", [], "any", false, false, false, 3) == "h")) {
            echo " selected";
        }
        echo ">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "ratelimit", [], "any", false, false, false, 3), "hour", [], "any", false, false, false, 3), "html", null, true);
        echo "</option>
<option value=\"d\"";
        // line 4
        if ((twig_get_attribute($this->env, $this->source, ($context["rl"] ?? null), "frame", [], "any", false, false, false, 4) == "d")) {
            echo " selected";
        }
        echo ">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lang"] ?? null), "ratelimit", [], "any", false, false, false, 4), "day", [], "any", false, false, false, 4), "html", null, true);
        echo "</option>
";
    }

    public function getTemplateName()
    {
        return "mailbox/rl-frame.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 4,  54 => 3,  46 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<option value=\"s\"{% if rl.frame == 's' %} selected{% endif %}>{{ lang.ratelimit.second }}</option>
<option value=\"m\"{% if rl.frame == 'm' %} selected{% endif %}>{{ lang.ratelimit.minute }}</option>
<option value=\"h\"{% if rl.frame == 'h' %} selected{% endif %}>{{ lang.ratelimit.hour }}</option>
<option value=\"d\"{% if rl.frame == 'd' %} selected{% endif %}>{{ lang.ratelimit.day }}</option>
", "mailbox/rl-frame.twig", "/data/websites/vmail/templates/mailbox/rl-frame.twig");
    }
}
