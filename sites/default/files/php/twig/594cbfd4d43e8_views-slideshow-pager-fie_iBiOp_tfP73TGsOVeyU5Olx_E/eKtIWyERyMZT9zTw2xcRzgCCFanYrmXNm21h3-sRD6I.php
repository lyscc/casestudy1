<?php

/* modules/views_slideshow/templates/views-slideshow-pager-field-field.html.twig */
class __TwigTemplate_9d598e75c92e3f80798b64c612eae36c6d9fe81686024232e117041db04f58ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 17);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 16
        echo "<div class=\"views-field-";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["css_identifier"]) ? $context["css_identifier"] : null), "html", null, true));
        echo "\">
  ";
        // line 17
        if ((isset($context["label"]) ? $context["label"] : null)) {
            // line 18
            echo "    <label class=\"view-label-";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["css_identifier"]) ? $context["css_identifier"] : null), "html", null, true));
            echo "\">
      ";
            // line 19
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo ":
    </label>
  ";
        }
        // line 22
        echo "  <div class=\"views-content-";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["css_identifier"]) ? $context["css_identifier"] : null), "html", null, true));
        echo "\">
    ";
        // line 23
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["output"]) ? $context["output"] : null), "html", null, true));
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/views_slideshow/templates/views-slideshow-pager-field-field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 23,  61 => 22,  55 => 19,  50 => 18,  48 => 17,  43 => 16,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation for a views slideshow pager field field data.
 *
 * Available variables:
 * - css_identifier: css identified for the field..
 * - label: Label for the field.
 * - output: The field data.
 *
 * @see template_preprocess_views_slideshow_pager_field_field()
 *
 * @ingroup vss_templates
 */
#}
<div class=\"views-field-{{ css_identifier }}\">
  {% if label %}
    <label class=\"view-label-{{ css_identifier }}\">
      {{ label }}:
    </label>
  {% endif %}
  <div class=\"views-content-{{ css_identifier }}\">
    {{ output }}
  </div>
</div>
";
    }
}
