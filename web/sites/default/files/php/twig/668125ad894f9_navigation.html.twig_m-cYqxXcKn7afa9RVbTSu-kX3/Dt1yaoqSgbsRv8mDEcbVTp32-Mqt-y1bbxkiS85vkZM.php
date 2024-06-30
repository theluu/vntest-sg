<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* core/modules/navigation/layouts/navigation.html.twig */
class __TwigTemplate_d706f7d8bac3b1a7795cde4873830783 extends Template
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
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        $context["control_bar_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute();
        // line 21
        yield "
<div ";
        // line 22
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["control_bar_attributes"] ?? null), "addClass", ["admin-toolbar-control-bar"], "method", false, false, true, 22), "setAttribute", ["data-drupal-admin-styles", ""], "method", false, false, true, 22), "setAttribute", ["data-offset-top", ""], "method", false, false, true, 22), 22, $this->source), "html", null, true);
        yield ">
  <div class=\"admin-toolbar-control-bar__content\">
    ";
        // line 24
        yield from         $this->loadTemplate("@navigation/toolbar-button.html.twig", "core/modules/navigation/layouts/navigation.html.twig", 24)->unwrap()->yield(CoreExtension::toArray(["attributes" => $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["aria-expanded" => "false", "aria-controls" => "admin-toolbar", "type" => "button"]), "icon" => "burger", "text" => t("Expand sidebar"), "extra_classes" => "admin-toolbar-control-bar__burger"]));
        // line 30
        yield "  </div>
</div>

<aside
  ";
        // line 34
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["admin-toolbar"], "method", false, false, true, 34), "setAttribute", ["id", "admin-toolbar"], "method", false, false, true, 34), "setAttribute", ["data-drupal-admin-styles", true], "method", false, false, true, 34), 34, $this->source), "html", null, true);
        yield "
>
  ";
        // line 37
        yield "  <div class=\"admin-toolbar__displace-placeholder\"></div>

  <div class=\"admin-toolbar__scroll-wrapper\">
    ";
        // line 40
        $context["title_menu"] = \Drupal\Component\Utility\Html::getUniqueId("admin-toolbar-title");
        // line 41
        yield "
    ";
        // line 43
        yield "    <nav ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["region_attributes"] ?? null), "content", [], "any", false, false, true, 43), "setAttribute", ["id", "menu-builder"], "method", false, false, true, 43), "addClass", ["admin-toolbar__content"], "method", false, false, true, 43), "setAttribute", ["aria-labelledby", ($context["title_menu"] ?? null)], "method", false, false, true, 43), 43, $this->source), "html", null, true);
        yield ">
      <h3 id=\"";
        // line 44
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_menu"] ?? null), 44, $this->source), "html", null, true);
        yield "\" class=\"visually-hidden\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Administrative toolbar content"));
        yield "</h3>
      ";
        // line 46
        yield "      <div class=\"admin-toolbar__header\">
        ";
        // line 47
        if ( !($context["hide_logo"] ?? null)) {
            // line 48
            yield "          <a class=\"admin-toolbar__logo\" href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            yield "\">
            ";
            // line 49
            if (($context["logo_path"] ?? null)) {
                // line 50
                yield "              <img alt=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Navigation logo"));
                yield "\" src=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(($context["logo_path"] ?? null), 50, $this->source)), "html", null, true);
                yield "\" loading=\"eager\" width=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("logo_width", $context)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(($context["logo_width"] ?? null), 50, $this->source), 40)) : (40)), "html", null, true);
                yield "\" height=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((array_key_exists("logo_height", $context)) ? (Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(($context["logo_height"] ?? null), 50, $this->source), 40)) : (40)), "html", null, true);
                yield "\">
            ";
            } else {
                // line 52
                yield "              ";
                yield from                 $this->loadTemplate("@navigation/logo.svg.twig", "core/modules/navigation/layouts/navigation.html.twig", 52)->unwrap()->yield(CoreExtension::toArray(["label" => t("Navigation logo")]));
                // line 55
                yield "            ";
            }
            // line 56
            yield "          </a>
        ";
        }
        // line 58
        yield "        ";
        yield from         $this->loadTemplate("@navigation/toolbar-button.html.twig", "core/modules/navigation/layouts/navigation.html.twig", 58)->unwrap()->yield(CoreExtension::toArray(["attributes" => $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["data-toolbar-back-control" => true, "tabindex" => "-1"]), "extra_classes" => "admin-toolbar__back-button", "icon" => "back", "text" => t("Back")]));
        // line 64
        yield "        ";
        yield from         $this->loadTemplate("@navigation/toolbar-button.html.twig", "core/modules/navigation/layouts/navigation.html.twig", 64)->unwrap()->yield(CoreExtension::toArray(["attributes" => $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["aria-controls" => "admin-toolbar", "tabindex" => "-1", "type" => "button"]), "extra_classes" => "admin-toolbar__close-button", "icon" => "cross", "label_classes" => "visually-hidden", "text" => t("Collapse sidebar")]));
        // line 71
        yield "      </div>

      ";
        // line 73
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "content", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
        yield "
    </nav>

    ";
        // line 76
        $context["title_menu_footer"] = \Drupal\Component\Utility\Html::getUniqueId("admin-toolbar-footer");
        // line 77
        yield "    <nav ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["region_attributes"] ?? null), "footer", [], "any", false, false, true, 77), "setAttribute", ["id", "menu-footer"], "method", false, false, true, 77), "addClass", ["admin-toolbar__footer"], "method", false, false, true, 77), "setAttribute", ["aria-labelledby", ($context["title_menu_footer"] ?? null)], "method", false, false, true, 77), 77, $this->source), "html", null, true);
        yield ">
      <h3 id=\"";
        // line 78
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_menu_footer"] ?? null), 78, $this->source), "html", null, true);
        yield "\" class=\"visually-hidden\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Administrative toolbar footer"));
        yield "</h3>
      ";
        // line 79
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "footer", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
        yield "
      <button aria-controls=\"admin-toolbar\" class=\"admin-toolbar__expand-button\" type=\"button\">
        <span class=\"visually-hidden\" data-text>";
        // line 81
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Collapse sidebar"));
        yield "</span>
      </button>
    </nav>
  </div>
</aside>
<div class=\"admin-toolbar-overlay\" aria-controls=\"admin-toolbar\" data-drupal-admin-styles></div>
<script>
  if (localStorage.getItem('Drupal.navigation.sidebarExpanded') !== 'false' && (window.matchMedia('(min-width: 1024px)').matches)) {
    document.documentElement.setAttribute('data-admin-toolbar', 'expanded');
  }
</script>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "region_attributes", "hide_logo", "logo_path", "logo_width", "logo_height", "content"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/modules/navigation/layouts/navigation.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  152 => 81,  147 => 79,  141 => 78,  136 => 77,  134 => 76,  128 => 73,  124 => 71,  121 => 64,  118 => 58,  114 => 56,  111 => 55,  108 => 52,  96 => 50,  94 => 49,  89 => 48,  87 => 47,  84 => 46,  78 => 44,  73 => 43,  70 => 41,  68 => 40,  63 => 37,  58 => 34,  52 => 30,  50 => 24,  45 => 22,  42 => 21,  40 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/modules/navigation/layouts/navigation.html.twig", "/Applications/MAMP/htdocs/vntest-sg/web/core/modules/navigation/layouts/navigation.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 20, "include" => 24, "if" => 47);
        static $filters = array("escape" => 22, "t" => 27, "clean_unique_id" => 40, "default" => 50);
        static $functions = array("create_attribute" => 20, "path" => 48, "file_url" => 50);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include', 'if'],
                ['escape', 't', 'clean_unique_id', 'default'],
                ['create_attribute', 'path', 'file_url'],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

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
}
