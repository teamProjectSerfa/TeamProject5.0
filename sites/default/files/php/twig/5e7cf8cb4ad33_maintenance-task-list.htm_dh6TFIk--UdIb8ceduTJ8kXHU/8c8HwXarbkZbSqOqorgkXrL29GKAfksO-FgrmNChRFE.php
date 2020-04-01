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

/* core/themes/stable/templates/admin/maintenance-task-list.html.twig */
class __TwigTemplate_8cffa6a994f8e4ed797a9f6c113bf2d4e6ba59fd37596b09c6fc97c665e8e93f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 17, "if" => 20];
        $filters = ["t" => 15, "escape" => 18];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['t', 'escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 15
        echo "<h2 class=\"visually-hidden\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Installation tasks"));
        echo "</h2>
<ol class=\"task-list\">
";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tasks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 18
            echo "  <li";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["task"], "attributes", [])), "html", null, true);
            echo ">
    ";
            // line 19
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["task"], "item", [])), "html", null, true);
            echo "
    ";
            // line 20
            if ($this->getAttribute($context["task"], "status", [])) {
                echo "<span class=\"visually-hidden\"> (";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["task"], "status", [])), "html", null, true);
                echo ")</span>";
            }
            // line 21
            echo "  </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "</ol>
";
    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/maintenance-task-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 23,  80 => 21,  74 => 20,  70 => 19,  65 => 18,  61 => 17,  55 => 15,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for a list of maintenance tasks to perform.
 *
 * Available variables:
 * - tasks: A list of maintenance tasks to perform. Each item in the list has
 *   the following variables:
 *   - item: The maintenance task.
 *   - attributes: HTML attributes for the maintenance task.
 *   - status: (optional) Text describing the status of the maintenance task,
 *     'active' or 'done'.
 */
#}
<h2 class=\"visually-hidden\">{{ 'Installation tasks'|t }}</h2>
<ol class=\"task-list\">
{% for task in tasks %}
  <li{{ task.attributes }}>
    {{ task.item }}
    {% if task.status %}<span class=\"visually-hidden\"> ({{ task.status }})</span>{% endif %}
  </li>
{% endfor %}
</ol>
", "core/themes/stable/templates/admin/maintenance-task-list.html.twig", "C:\\xampp\\htdocs\\teamProject\\core\\themes\\stable\\templates\\admin\\maintenance-task-list.html.twig");
    }
}
