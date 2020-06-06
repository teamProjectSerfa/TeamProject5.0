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

/* core/themes/stable/templates/admin/image-style-preview.html.twig */
class __TwigTemplate_b89cf44184ac7fa9ffa50835498a0fe84a4950651711e150938e6580b8737400 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["t" => 34, "escape" => 34];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
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
        // line 31
        echo "<div class=\"image-style-preview preview clearfix\">
  ";
        // line 33
        echo "  <div class=\"preview-image-wrapper\">
      ";
        // line 34
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("original"));
        echo " (<a href=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["original"] ?? null), "url", [])), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("view actual size"));
        echo "</a>)
      <div class=\"preview-image original-image\" style=\"width: ";
        // line 35
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["preview"] ?? null), "original", []), "width", [])), "html", null, true);
        echo "px; height: ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["preview"] ?? null), "original", []), "height", [])), "html", null, true);
        echo "px;\">
        <a href=\"";
        // line 36
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["original"] ?? null), "url", [])), "html", null, true);
        echo "\">
          ";
        // line 37
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["original"] ?? null), "rendered", [])), "html", null, true);
        echo "
        </a>
      <div class=\"height\" style=\"height: ";
        // line 39
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["preview"] ?? null), "original", []), "height", [])), "html", null, true);
        echo "px\"><span>";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["original"] ?? null), "height", [])), "html", null, true);
        echo "px</span></div>
      <div class=\"width\" style=\"width: ";
        // line 40
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["preview"] ?? null), "original", []), "width", [])), "html", null, true);
        echo "px\"><span>";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["original"] ?? null), "width", [])), "html", null, true);
        echo "px</span></div>
    </div>
  </div>

  ";
        // line 45
        echo "  <div class=\"preview-image-wrapper\">
    ";
        // line 46
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["style_name"] ?? null)), "html", null, true);
        echo " (<a href=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["derivative"] ?? null), "url", [])), "html", null, true);
        echo "?";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["cache_bypass"] ?? null)), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("view actual size"));
        echo "</a>)
    <div class=\"preview-image modified-image\" style=\"width: ";
        // line 47
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["preview"] ?? null), "derivative", []), "width", [])), "html", null, true);
        echo "px; height: ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["preview"] ?? null), "derivative", []), "height", [])), "html", null, true);
        echo "px;\">
      <a href=\"";
        // line 48
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["derivative"] ?? null), "url", [])), "html", null, true);
        echo "?";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["cache_bypass"] ?? null)), "html", null, true);
        echo "\">
        ";
        // line 49
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["derivative"] ?? null), "rendered", [])), "html", null, true);
        echo "
      </a>
      <div class=\"height\" style=\"height: ";
        // line 51
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["preview"] ?? null), "derivative", []), "height", [])), "html", null, true);
        echo "px\"><span>";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["derivative"] ?? null), "height", [])), "html", null, true);
        echo "px</span></div>
      <div class=\"width\" style=\"width: ";
        // line 52
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["preview"] ?? null), "derivative", []), "width", [])), "html", null, true);
        echo "px\"><span>";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["derivative"] ?? null), "width", [])), "html", null, true);
        echo "px</span></div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/image-style-preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 52,  129 => 51,  124 => 49,  118 => 48,  112 => 47,  102 => 46,  99 => 45,  90 => 40,  84 => 39,  79 => 37,  75 => 36,  69 => 35,  61 => 34,  58 => 33,  55 => 31,);
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
 * Theme override to display a preview of an image style.
 *
 * Available variables:
 * - style_id: The ID of the image style.
 * - style_name: The name of the image style.
 * - cache_bypass: A timestamp token used to avoid browser caching of images.
 * - original: An associative array containing:
 *   - url: The URL of the original image.
 *   - width: The width in pixels of the original image.
 *   - height: The height in pixels of the original image.
 *   - rendered: The render array for the original image.
 * - derivative: An associative array containing:
 *   - url: The URL of the derivative image.
 *   - width: The width in pixels of the derivative image.
 *   - height: The height in pixels of the derivative image.
 *   - rendered:  The rendered derivative image.
 * - preview: An associative array containing:
 *   - original: An associative array containing:
 *     - width: The width in pixels of the original image in the preview.
 *     - height: The height in pixels of the original image in the preview.
 *   - derivative: An associative array containing:
 *     - width: The width in pixels of the derivative image in the preview.
 *     - height: The height in pixels of the derivative image in the preview.
 *
 * @see template_preprocess_image_style_preview()
 */
#}
<div class=\"image-style-preview preview clearfix\">
  {# Preview of the original image. #}
  <div class=\"preview-image-wrapper\">
      {{ 'original'|t }} (<a href=\"{{ original.url }}\">{{ 'view actual size'|t }}</a>)
      <div class=\"preview-image original-image\" style=\"width: {{ preview.original.width }}px; height: {{ preview.original.height }}px;\">
        <a href=\"{{ original.url }}\">
          {{ original.rendered }}
        </a>
      <div class=\"height\" style=\"height: {{ preview.original.height }}px\"><span>{{ original.height }}px</span></div>
      <div class=\"width\" style=\"width: {{ preview.original.width }}px\"><span>{{ original.width }}px</span></div>
    </div>
  </div>

  {# Derivative of the image style. #}
  <div class=\"preview-image-wrapper\">
    {{ style_name }} (<a href=\"{{ derivative.url }}?{{ cache_bypass }}\">{{ 'view actual size'|t }}</a>)
    <div class=\"preview-image modified-image\" style=\"width: {{ preview.derivative.width }}px; height: {{ preview.derivative.height }}px;\">
      <a href=\"{{ derivative.url }}?{{ cache_bypass }}\">
        {{ derivative.rendered }}
      </a>
      <div class=\"height\" style=\"height: {{ preview.derivative.height }}px\"><span>{{ derivative.height }}px</span></div>
      <div class=\"width\" style=\"width: {{ preview.derivative.width }}px\"><span>{{ derivative.width }}px</span></div>
    </div>
  </div>
</div>
", "core/themes/stable/templates/admin/image-style-preview.html.twig", "C:\\xampp\\htdocs\\teamProject\\core\\themes\\stable\\templates\\admin\\image-style-preview.html.twig");
    }
}
