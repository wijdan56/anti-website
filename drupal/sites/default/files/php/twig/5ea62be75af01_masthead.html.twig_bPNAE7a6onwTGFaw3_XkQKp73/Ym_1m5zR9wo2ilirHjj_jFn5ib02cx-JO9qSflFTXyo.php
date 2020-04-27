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

/* @antiTheme/parts/masthead.html.twig */
class __TwigTemplate_15d3176192fc70f5002b268a4574c65d591d2e7b0101ba930cd3b256cd63eb6f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
        // line 1
        echo "<header class=\"masthead\">
    <div class=\"container h-100\">
        <div class=\"row h-100 align-items-center justify-content-center text-center\">
            <div class=\"col-lg-10 align-self-end\">
                <h1 class=\"text-uppercase text-white font-weight-bold\"> يقين لديك في هذا العالم ماتتعلمه <br>لتوسع مدارك تفكيرك </h1>
                <hr class=\"divider my-4\" />
            </div>
            <div class=\"col-lg-8 align-self-baseline\">
                <p class=\"text-white-75 font-weight-light mb-5\">يقين منصة تعليمية ثقافية</p>
                <a class=\"btn btn-primary btn-xl js-scroll-trigger\" href=\"#about\">اعثر على المزيد</a>
            </div>
        </div>
    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "@antiTheme/parts/masthead.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@antiTheme/parts/masthead.html.twig", "/Applications/MAMP/htdocs/anti-website/drupal/themes/custom/antiTheme/templates/parts/masthead.html.twig");
    }
}
