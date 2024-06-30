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

/* core/modules/navigation/templates/navigation-menu.html.twig */
class __TwigTemplate_44fa6344d022c5021bd4aee77f810307 extends Template
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
        // line 1
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 2
        $context["menu_heading_id"] = ("menu--" . \Drupal\Component\Utility\Html::getUniqueId($this->sandbox->ensureToStringAllowed(($context["menu_name"] ?? null), 2, $this->source)));
        // line 3
        yield "<div class=\"admin-toolbar__item\">
  <h4 id=\"";
        // line 4
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menu_heading_id"] ?? null), 4, $this->source), "html", null, true);
        yield "\" class=\"toolbar-block__title visually-hidden focusable\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 4, $this->source), "html", null, true);
        yield "</h4>
  <ul class=\"toolbar-block__list\" aria-labelledby=\"";
        // line 5
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menu_heading_id"] ?? null), 5, $this->source), "html", null, true);
        yield "\">
    ";
        // line 6
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_items", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 6, $context, $this->getSourceContext()));
        yield "
  </ul>
</div>

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "menu_name", "title", "items", "attributes", "menu_level"]);        return; yield '';
    }

    // line 10
    public function macro_menu_items($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 11
            yield "  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 12
                yield "    ";
                $context["item_id"] = \Drupal\Component\Utility\Html::getUniqueId(("navigation-link--" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "original_link", [], "any", false, false, true, 12), "pluginId", [], "any", false, false, true, 12), 12, $this->source)));
                // line 13
                yield "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 14
                    yield "      ";
                    if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 14))) {
                        // line 15
                        yield "        <li id=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["item_id"] ?? null), 15, $this->source), "html", null, true);
                        yield "\" class=\"toolbar-block__list-item\">
          ";
                        // line 16
                        yield from                         $this->loadTemplate("@navigation/toolbar-button.html.twig", "core/modules/navigation/templates/navigation-menu.html.twig", 16)->unwrap()->yield(CoreExtension::toArray(["attributes" => $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["href" => $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source,                         // line 17
$context["item"], "url", [], "any", false, false, true, 17)), "data-drupal-tooltip" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 17), "data-drupal-tooltip-class" => "admin-toolbar__tooltip"]), "icon" => \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source,                         // line 18
$context["item"], "class", [], "any", false, false, true, 18)), "html_tag" => "a", "text" => CoreExtension::getAttribute($this->env, $this->source,                         // line 20
$context["item"], "title", [], "any", false, false, true, 20), "extra_classes" => "toolbar-button--collapsible"]));
                        // line 23
                        yield "        </li>
      ";
                    } else {
                        // line 25
                        yield "        <li id=\"";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["item_id"] ?? null), 25, $this->source), "html", null, true);
                        yield "\" class=\"toolbar-block__list-item toolbar-popover\" data-toolbar-popover>
          ";
                        // line 26
                        yield from                         $this->loadTemplate("@navigation/toolbar-button.html.twig", "core/modules/navigation/templates/navigation-menu.html.twig", 26)->unwrap()->yield(CoreExtension::toArray(["action" => true, "attributes" => $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["aria-expanded" => "false", "aria-controls" =>                         // line 28
($context["item_id"] ?? null), "data-toolbar-popover-control" => true]), "icon" => \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source,                         // line 29
$context["item"], "class", [], "any", false, false, true, 29)), "text" => CoreExtension::getAttribute($this->env, $this->source,                         // line 30
$context["item"], "title", [], "any", false, false, true, 30), "extra_classes" => "toolbar-button--expand--side toolbar-button--collapsible toolbar-popover__control", "has_safe_triangle" => true]));
                        // line 34
                        yield "          <div class=\"toolbar-popover__wrapper\" data-toolbar-popover-wrapper inert>
            ";
                        // line 35
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 35)) {
                            // line 36
                            yield "              ";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 36), 36, $this->source), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 36), 36, $this->source), $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["class" => ["toolbar-popover__header", "toolbar-button", "toolbar-button--large", "toolbar-button--dark"]])), "html", null, true);
                            yield "
            ";
                        } else {
                            // line 38
                            yield "              <span class=\"toolbar-popover__header toolbar-button toolbar-button--large toolbar-button--dark toolbar-button--non-interactive\">";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
                            yield "</span>
            ";
                        }
                        // line 40
                        yield "            <ul class=\"toolbar-menu toolbar-popover__menu\">
              ";
                        // line 41
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_items", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 41), ($context["attributes"] ?? null), 1], 41, $context, $this->getSourceContext()));
                        yield "
            </ul>
          </div>
        </li>
      ";
                    }
                    // line 46
                    yield "
    ";
                } elseif ((                // line 47
($context["menu_level"] ?? null) == 1)) {
                    // line 48
                    yield "      <li class=\"toolbar-menu__item toolbar-menu__item--level-";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menu_level"] ?? null), 48, $this->source), "html", null, true);
                    yield "\">
        ";
                    // line 49
                    if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 49))) {
                        // line 50
                        yield "          <a
            href=\"";
                        // line 51
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
                        yield "\"
            class=\"toolbar-button\"
            data-index-text=\"";
                        // line 53
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 53), 53, $this->source))), "html", null, true);
                        yield "\"
          >";
                        // line 54
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
                        yield "</a>
        ";
                    } else {
                        // line 56
                        yield "          <button
            class=\"toolbar-button toolbar-button--expand--down\"
            data-toolbar-menu-trigger=\"";
                        // line 58
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menu_level"] ?? null), 58, $this->source), "html", null, true);
                        yield "\"
            aria-expanded=\"false\"
            data-index-text=\"";
                        // line 60
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 60), 60, $this->source))), "html", null, true);
                        yield "\"
          >
            <span class=\"toolbar-menu__link-action visually-hidden\">";
                        // line 62
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Extend"));
                        yield "</span>
            <span class=\"toolbar-menu__link-title\">";
                        // line 63
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
                        yield "</span>
          </button>
          <ul class=\"toolbar-menu toolbar-menu--level-";
                        // line 65
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["menu_level"] ?? null) + 1), "html", null, true);
                        yield "\" inert>
            ";
                        // line 66
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_items", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 66), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 66, $context, $this->getSourceContext()));
                        yield "
          </ul>
        ";
                    }
                    // line 69
                    yield "      </li>
    ";
                } else {
                    // line 71
                    yield "      <li class=\"toolbar-menu__item toolbar-menu__item--level-";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menu_level"] ?? null), 71, $this->source), "html", null, true);
                    yield "\">
        ";
                    // line 72
                    if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 72))) {
                        // line 73
                        yield "          <a
            href=\"";
                        // line 74
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
                        yield "\"
            class=\"toolbar-menu__link toolbar-menu__link--";
                        // line 75
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menu_level"] ?? null), 75, $this->source), "html", null, true);
                        yield "\"
            data-index-text=\"";
                        // line 76
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 76), 76, $this->source))), "html", null, true);
                        yield "\"
          >";
                        // line 77
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
                        yield "</a>
        ";
                    } else {
                        // line 79
                        yield "          <button
            class=\"toolbar-menu__link toolbar-menu__link--";
                        // line 80
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menu_level"] ?? null), 80, $this->source), "html", null, true);
                        yield "\"
            data-toolbar-menu-trigger=\"";
                        // line 81
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["menu_level"] ?? null), 81, $this->source), "html", null, true);
                        yield "\"
            aria-expanded=\"false\"
            data-index-text=\"";
                        // line 83
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 83), 83, $this->source))), "html", null, true);
                        yield "\"
          >
            <span class=\"toolbar-menu__link-action visually-hidden\">";
                        // line 85
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Extend"));
                        yield "</span>
            <span class=\"toolbar-menu__link-title\">";
                        // line 86
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
                        yield "</span>
          </button>
          <ul class=\"toolbar-menu toolbar-menu--level-";
                        // line 88
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["menu_level"] ?? null) + 1), "html", null, true);
                        yield "\" inert>
            ";
                        // line 89
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_menu_items", [CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 89), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 89, $context, $this->getSourceContext()));
                        yield "
          </ul>
        ";
                    }
                    // line 92
                    yield "      </li>
    ";
                }
                // line 94
                yield "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/modules/navigation/templates/navigation-menu.html.twig";
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
        return array (  281 => 94,  277 => 92,  271 => 89,  267 => 88,  262 => 86,  258 => 85,  253 => 83,  248 => 81,  244 => 80,  241 => 79,  236 => 77,  232 => 76,  228 => 75,  224 => 74,  221 => 73,  219 => 72,  214 => 71,  210 => 69,  204 => 66,  200 => 65,  195 => 63,  191 => 62,  186 => 60,  181 => 58,  177 => 56,  172 => 54,  168 => 53,  163 => 51,  160 => 50,  158 => 49,  153 => 48,  151 => 47,  148 => 46,  140 => 41,  137 => 40,  131 => 38,  125 => 36,  123 => 35,  120 => 34,  118 => 30,  117 => 29,  116 => 28,  115 => 26,  110 => 25,  106 => 23,  104 => 20,  103 => 18,  102 => 17,  101 => 16,  96 => 15,  93 => 14,  90 => 13,  87 => 12,  82 => 11,  68 => 10,  57 => 6,  53 => 5,  47 => 4,  44 => 3,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/modules/navigation/templates/navigation-menu.html.twig", "/Applications/MAMP/htdocs/vntest-sg/web/core/modules/navigation/templates/navigation-menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 1, "set" => 2, "macro" => 10, "for" => 11, "if" => 13, "include" => 16);
        static $filters = array("clean_unique_id" => 2, "escape" => 4, "render" => 17, "clean_class" => 18, "lower" => 53, "first" => 53, "t" => 62);
        static $functions = array("create_attribute" => 17, "link" => 36);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'set', 'macro', 'for', 'if', 'include'],
                ['clean_unique_id', 'escape', 'render', 'clean_class', 'lower', 'first', 't'],
                ['create_attribute', 'link'],
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
