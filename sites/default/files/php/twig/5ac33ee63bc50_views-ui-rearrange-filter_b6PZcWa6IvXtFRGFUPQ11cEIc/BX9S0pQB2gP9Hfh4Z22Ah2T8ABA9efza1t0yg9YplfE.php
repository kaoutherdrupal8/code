<?php

/* core/themes/stable/templates/admin/views-ui-rearrange-filter-form.html.twig */
class __TwigTemplate_b79542efce5691eb659591aa7ec947f9d8b53694c0873a164c9988a13ad266e4 extends Twig_Template
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
        $filters = array("without" => 25);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('without'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["form"] ?? null), "override", array()), "html", null, true));
        echo "
<div class=\"scroll\" data-drupal-views-scroll>
  ";
        // line 17
        if (($context["grouping"] ?? null)) {
            // line 18
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "filter_groups", array()), "operator", array()), "html", null, true));
            echo "
  ";
        } else {
            // line 20
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "filter_groups", array()), "groups", array()), 0, array()), "html", null, true));
            echo "
  ";
        }
        // line 22
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["ungroupable_table"] ?? null), "html", null, true));
        echo "
  ";
        // line 23
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["table"] ?? null), "html", null, true));
        echo "
</div>
";
        // line 25
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without(($context["form"] ?? null), "override", "filter_groups", "remove_groups", "filters"), "html", null, true));
        echo "
";
    }

    public function getTemplateName()
    {
        return "core/themes/stable/templates/admin/views-ui-rearrange-filter-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 25,  67 => 23,  62 => 22,  56 => 20,  50 => 18,  48 => 17,  43 => 15,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Theme override for Views UI rearrange filter form.
 *
 * Available variables:
 * - form: A render element representing the form.
 * - grouping: A flag whether or not there is more than one group.
 * - ungroupable_table: The ungroupable filter table.
 * - table: The groupable filter table.
 *
 * @see template_preprocess_views_ui_rearrange_filter_form()
 */
#}
{{ form.override }}
<div class=\"scroll\" data-drupal-views-scroll>
  {% if grouping %}
    {{ form.filter_groups.operator }}
  {% else %}
    {{ form.filter_groups.groups.0 }}
  {% endif %}
  {{ ungroupable_table }}
  {{ table }}
</div>
{{ form|without('override', 'filter_groups', 'remove_groups', 'filters') }}
", "core/themes/stable/templates/admin/views-ui-rearrange-filter-form.html.twig", "C:\\wamp64\\www\\game\\core\\themes\\stable\\templates\\admin\\views-ui-rearrange-filter-form.html.twig");
    }
}
