<?php

/* themes/custom/bootstrap_child/templates/user.html.twig */
class __TwigTemplate_376d760045225b73d1b26d166eb80e50bf93918f0e82cdc2bc3b9e6130d1d302 extends Twig_Template
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
        $tags = array("if" => 30);
        $filters = array();
        $functions = array("attach_library" => 23);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
                array('attach_library')
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

        // line 22
        echo "
";
        // line 23
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("bootstrap_child/user-profile-print"), "html", null, true));
        echo "

<div id=\"print_logo\"></div>
<div id=\"";
        // line 26
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["profile_print"] ?? null), "id", array()), "html", null, true));
        echo "-container\">
\t<a id=\"";
        // line 27
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["profile_print"] ?? null), "id", array()), "html", null, true));
        echo "-btn\" href=\"#\" class=\"btn btn-primary\" onclick=\"window.print()\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["profile_print"] ?? null), "btn_text", array()), "html", null, true));
        echo "</a>
</div>
<article id=\"";
        // line 29
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["profile_print"] ?? null), "id", array()), "html", null, true));
        echo "-info\" ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
        echo ">
  ";
        // line 30
        if (($context["content"] ?? null)) {
            // line 31
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        }
        // line 33
        echo "</article>


";
    }

    public function getTemplateName()
    {
        return "themes/custom/bootstrap_child/templates/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 33,  71 => 31,  69 => 30,  63 => 29,  56 => 27,  52 => 26,  46 => 23,  43 => 22,);
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
 * Default theme implementation to present all user data.
 *
 * This template is used when viewing a registered user's page,
 * e.g., example.com/user/123. 123 being the user's ID.
 *
 * Available variables:
 * - content: A list of content items. Use 'content' to print all content, or
 *   print a subset such as 'content.field_example'. Fields attached to a user
 *   such as 'user_picture' are available as 'content.user_picture'.
 * - attributes: HTML attributes for the container element.
 * - user: A Drupal User entity.
 * - profile_print : A Button to print the page and call css media print
 *
 * @see template_preprocess_user()
 *
 * @ingroup themeable
 */
#}

{{ attach_library('bootstrap_child/user-profile-print') }}

<div id=\"print_logo\"></div>
<div id=\"{{ profile_print.id }}-container\">
\t<a id=\"{{ profile_print.id }}-btn\" href=\"#\" class=\"btn btn-primary\" onclick=\"window.print()\">{{ profile_print.btn_text }}</a>
</div>
<article id=\"{{ profile_print.id }}-info\" {{ attributes }}>
  {% if content %}
    {{- content -}}
  {% endif %}
</article>


", "themes/custom/bootstrap_child/templates/user.html.twig", "C:\\wamp64\\www\\game\\themes\\custom\\bootstrap_child\\templates\\user.html.twig");
    }
}
