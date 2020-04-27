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

/* @antiTheme/parts/contact.html.twig */
class __TwigTemplate_4714891d2a1bb6b5f6cfbde68583078973295b840195881a382457020177b19c extends \Twig\Template
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
        echo "<section class=\"page-section\" id=\"contact\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8 text-center\">
                <h2 class=\"mt-0\">التواصل</h2>
                <hr class=\"divider my-4\" />
                <p class=\"text-muted mb-5\">نسعد بإستقبال استفساراتكم او اقتراحاتكم </p>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4 ml-auto text-center mb-5 mb-lg-0\">
                <i class=\"fas fa-phone fa-3x mb-3 text-muted\"></i>
                <div>+966 123-4567</div>
            </div>
            <div class=\"col-lg-4 mr-auto text-center\">
                <i class=\"fas fa-envelope fa-3x mb-3 text-muted\"></i
                ><a class=\"d-block\" href=\"mailto:contact@yourwebsite.com\">تواصل معنا عن طريق الايميل</a>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "@antiTheme/parts/contact.html.twig";
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
        return new Source("", "@antiTheme/parts/contact.html.twig", "/Applications/MAMP/htdocs/anti-website/drupal/themes/custom/antiTheme/templates/parts/contact.html.twig");
    }
}
