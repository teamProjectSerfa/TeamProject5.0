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

/* themes/contrib/subteam/templates/frontPage/videojs.html.twig */
class __TwigTemplate_94eddd4790b1092dd20c20effa2c5176e39d29f8323497aa285cc4af9d97602b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 19, "for" => 21];
        $filters = ["escape" => 20];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
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
        echo "
";
        // line 18
        echo "
";
        // line 19
        if (($context["is_front"] ?? null)) {
            // line 20
            echo "<video data-setup=\"{}\" class=\"video-js vjs-default-skin videoPreview\" preload=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["player_attributes"] ?? null), "preload", [])), "html", null, true);
            echo "\" ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->getAttribute(($context["player_attributes"] ?? null), "controls", [])) ? ("controls") : ("")));
            echo " style=\"width:100%;height:100vh;\" ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->getAttribute(($context["player_attributes"] ?? null), "autoplay", [])) ? ("autoplay") : ("")));
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->getAttribute(($context["player_attributes"] ?? null), "loop", [])) ? ("loop") : ("")));
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->getAttribute(($context["player_attributes"] ?? null), "muted", [])) ? ("muted") : ("")));
            echo " onended=\"previewEnded()\">
  ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 22
                echo "    <source src=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["user"]), "html", null, true);
                echo "\"/>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "</video>
";
        } else {
            // line 27
            echo "<video data-setup=\"{}\" class=\"video-js vjs-default-skin\" preload=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["player_attributes"] ?? null), "preload", [])), "html", null, true);
            echo "\" ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->getAttribute(($context["player_attributes"] ?? null), "controls", [])) ? ("controls") : ("")));
            echo "  ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->getAttribute(($context["player_attributes"] ?? null), "autoplay", [])) ? ("autoplay") : ("")));
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->getAttribute(($context["player_attributes"] ?? null), "loop", [])) ? ("loop") : ("")));
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->getAttribute(($context["player_attributes"] ?? null), "muted", [])) ? ("muted") : ("")));
            echo ">
  ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 29
                echo "    <source src=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["user"]), "html", null, true);
                echo "\"/>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "</video>
";
        }
        // line 33
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/subteam/templates/frontPage/videojs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 33,  119 => 31,  110 => 29,  106 => 28,  93 => 27,  89 => 24,  80 => 22,  76 => 21,  63 => 20,  61 => 19,  58 => 18,  55 => 16,);
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

{# affiche que ce lecteur sur la front Page #}

{% if is_front %}
<video data-setup=\"{}\" class=\"video-js vjs-default-skin videoPreview\" preload=\"{{ player_attributes.preload }}\" {{ player_attributes.controls ? 'controls' : '' }} style=\"width:100%;height:100vh;\" {{ player_attributes.autoplay ? 'autoplay' : '' }} {{ player_attributes.loop ? 'loop' : '' }} {{ player_attributes.muted ? 'muted' : '' }} onended=\"previewEnded()\">
  {% for user in items %}
    <source src=\"{{ user }}\"/>
  {% endfor %}
</video>
{# le lecteur sur toutes les autres pages #}
{% else %}
<video data-setup=\"{}\" class=\"video-js vjs-default-skin\" preload=\"{{ player_attributes.preload }}\" {{ player_attributes.controls ? 'controls' : '' }}  {{ player_attributes.autoplay ? 'autoplay' : '' }} {{ player_attributes.loop ? 'loop' : '' }} {{ player_attributes.muted ? 'muted' : '' }}>
  {% for user in items %}
    <source src=\"{{ user }}\"/>
  {% endfor %}
</video>
{% endif %}

", "themes/contrib/subteam/templates/frontPage/videojs.html.twig", "C:\\xampp\\htdocs\\teamProject\\themes\\contrib\\subteam\\templates\\frontPage\\videojs.html.twig");
    }
}
