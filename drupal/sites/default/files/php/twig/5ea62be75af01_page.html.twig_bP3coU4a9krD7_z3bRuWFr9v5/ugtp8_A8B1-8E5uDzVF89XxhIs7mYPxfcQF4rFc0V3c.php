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

/* themes/custom/antiTheme/templates/page.html.twig */
class __TwigTemplate_cb72e858fb1c44f0f917001ab3f7655e283989ec77e96840d98eb3df89d0bd06 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["include" => 9];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['include'],
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
    </head>
    <body id=\"page-top\">
        <!-- Navigation-->
        ";
        // line 9
        $this->loadTemplate("@antiTheme/parts/nav.html.twig", "themes/custom/antiTheme/templates/page.html.twig", 9)->display($context);
        echo " 
        <!-- Masthead-->
        ";
        // line 11
        $this->loadTemplate("@antiTheme/parts/masthead.html.twig", "themes/custom/antiTheme/templates/page.html.twig", 11)->display($context);
        echo " 
        <!-- Services-->
        ";
        // line 13
        $this->loadTemplate("@antiTheme/parts/services.html.twig", "themes/custom/antiTheme/templates/page.html.twig", 13)->display($context);
        // line 14
        echo "        <!-- Portfolio-->
        ";
        // line 15
        $this->loadTemplate("@antiTheme/parts/portfolio.html.twig", "themes/custom/antiTheme/templates/page.html.twig", 15)->display($context);
        // line 16
        echo "        <!-- Call to action-->
        ";
        // line 17
        $this->loadTemplate("@antiTheme/parts/call.html.twig", "themes/custom/antiTheme/templates/page.html.twig", 17)->display($context);
        // line 18
        echo "        <!-- Contact-->
        ";
        // line 19
        $this->loadTemplate("@antiTheme/parts/contact.html.twig", "themes/custom/antiTheme/templates/page.html.twig", 19)->display($context);
        // line 20
        echo "        <!-- Footer-->
        ";
        // line 21
        $this->loadTemplate("@antiTheme/parts/footer.html.twig", "themes/custom/antiTheme/templates/page.html.twig", 21)->display($context);
        // line 22
        echo "    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/antiTheme/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 22,  95 => 21,  92 => 20,  90 => 19,  87 => 18,  85 => 17,  82 => 16,  80 => 15,  77 => 14,  75 => 13,  70 => 11,  65 => 9,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/antiTheme/templates/page.html.twig", "/Applications/MAMP/htdocs/anti-website/drupal/themes/custom/antiTheme/templates/page.html.twig");
    }
}
