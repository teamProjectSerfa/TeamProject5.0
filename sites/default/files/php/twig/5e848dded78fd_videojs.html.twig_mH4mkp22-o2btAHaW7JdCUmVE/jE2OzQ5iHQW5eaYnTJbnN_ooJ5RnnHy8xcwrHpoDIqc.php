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

/* modules/contrib/videojs/templates/videojs.html.twig */
class __TwigTemplate_a342ef560a943e49ae884147856d1e62746054b7f70b2797c2018d10432044ad extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 17];
        $filters = ["escape" => 16];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape'],
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
        // line 16
        echo "<video data-setup=\"{}\" class=\"video-js vjs-default-skin\" preload=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["player_attributes"] ?? null), "preload", [])), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->getAttribute(($context["player_attributes"] ?? null), "controls", [])) ? ("controls") : ("")));
        echo " style=\"width:";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["player_attributes"] ?? null), "width", [])), "html", null, true);
        echo "px;height:";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["player_attributes"] ?? null), "height", [])), "html", null, true);
        echo "px;\" ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->getAttribute(($context["player_attributes"] ?? null), "autoplay", [])) ? ("autoplay") : ("")));
        echo " ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->getAttribute(($context["player_attributes"] ?? null), "loop", [])) ? ("loop") : ("")));
        echo " ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->getAttribute(($context["player_attributes"] ?? null), "muted", [])) ? ("muted") : ("")));
        echo ">
  ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 18
            echo "    <source src=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["user"]), "html", null, true);
            echo "\"/>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</video>";
    }

    public function getTemplateName()
    {
        return "modules/contrib/videojs/templates/videojs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 20,  76 => 18,  72 => 17,  55 => 16,);
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
 * Default theme implementation to display a formatted video field.
 *
 * Available variables:
 * - items: A collection of videos.
 * - player_attributes: Player options including the following:
 *   - width: The width of the video (if known).
 *   - height: The height of the video (if known).
 *   - autoplay: Autoplay on or off
 *
 * @ingroup themeable
 */
#}
<video data-setup=\"{}\" class=\"video-js vjs-default-skin\" preload=\"{{ player_attributes.preload }}\" {{ player_attributes.controls ? 'controls' : '' }} style=\"width:{{ player_attributes.width }}px;height:{{ player_attributes.height }}px;\" {{ player_attributes.autoplay ? 'autoplay' : '' }} {{ player_attributes.loop ? 'loop' : '' }} {{ player_attributes.muted ? 'muted' : '' }}>
  {% for user in items %}
    <source src=\"{{ user }}\"/>
  {% endfor %}
</video>", "modules/contrib/videojs/templates/videojs.html.twig", "C:\\xampp\\htdocs\\teamProject\\modules\\contrib\\videojs\\templates\\videojs.html.twig");
    }
}
