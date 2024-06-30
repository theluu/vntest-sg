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

/* core/modules/navigation/templates/big-pipe-interface-preview--navigation-shortcut-lazy-builder-lazyLinks--Shortcuts.html.twig */
class __TwigTemplate_8ce62109af692a7fca9353b03a3ad8cd extends Template
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
        // line 8
        yield "
";
        // line 9
        yield from         $this->loadTemplate("@navigation/toolbar-button.html.twig", "core/modules/navigation/templates/big-pipe-interface-preview--navigation-shortcut-lazy-builder-lazyLinks--Shortcuts.html.twig", 9)->unwrap()->yield(CoreExtension::toArray(["attributes" => $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(), "extra_classes" => "invisible toolbar-button--icon--shortcuts toolbar-button--expand--side toolbar-button--collapsible toolbar-popover__control", "icon" => "shortcuts", "text" => t("Shortcuts")]));
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "core/modules/navigation/templates/big-pipe-interface-preview--navigation-shortcut-lazy-builder-lazyLinks--Shortcuts.html.twig";
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
        return array (  43 => 9,  40 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/modules/navigation/templates/big-pipe-interface-preview--navigation-shortcut-lazy-builder-lazyLinks--Shortcuts.html.twig", "/Applications/MAMP/htdocs/vntest-sg/web/core/modules/navigation/templates/big-pipe-interface-preview--navigation-shortcut-lazy-builder-lazyLinks--Shortcuts.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 9);
        static $filters = array("t" => 13);
        static $functions = array("create_attribute" => 10);

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                ['t'],
                ['create_attribute'],
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
