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

/* @antiTheme/parts/portfolio.html.twig */
class __TwigTemplate_9de4ce5bc7a90846331e58d18e321bfaae7359f5cdb7b2e25afbd413b43bfbdf extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 5];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
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
        echo "<section id=\"portfolio\">
    <div class=\"container-fluid p-0\">
        <div class=\"row no-gutters\">
            <div class=\"col-lg-4 col-sm-6\">
                <a class=\"portfolio-box\" href=\"";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/img/portfolio/fullsize/pic-01.jpg\"
                    ><img class=\"img-fluid\" src=\"";
        // line 6
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/img/portfolio/thumbnails/pic-01.jpg\" alt=\"\" />
                    <div class=\"portfolio-box-caption\">
                        <div class=\"project-category text-white-50\"></div>
                        <div class=\"project-name\"></div>
                    </div></a
                >
            </div>
            <div class=\"col-lg-4 col-sm-6\">
                <a class=\"portfolio-box\" href=\"";
        // line 14
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/img/portfolio/fullsize/pic-02.jpg\"
                    ><img class=\"img-fluid\" src=\"";
        // line 15
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/img/portfolio/thumbnails/pic-02.jpg\" alt=\"\" />
                    <div class=\"portfolio-box-caption\">
                        <div class=\"project-category text-white-50\"></div>
                        <div class=\"project-name\"></div>
                    </div></a
                >
            </div>
            <div class=\"col-lg-4 col-sm-6\">
                <a class=\"portfolio-box\" href=\"";
        // line 23
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/img/portfolio/fullsize/pic-03.jpg\"
                    ><img class=\"img-fluid\" src=\"";
        // line 24
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/img/portfolio/thumbnails/pic-03.jpg\" alt=\"\" />
                    <div class=\"portfolio-box-caption\">
                        <div class=\"project-category text-white-50\"></div>
                        <div class=\"project-name\"></div>
                    </div></a
                >
            </div>
            <div class=\"col-lg-4 col-sm-6\">
                <a class=\"portfolio-box\" href=\"";
        // line 32
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/img/portfolio/fullsize/pic-04.jpg\"
                    ><img class=\"img-fluid\" src=\"";
        // line 33
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/img/portfolio/thumbnails/pic-04.jpg\" alt=\"\" />
                    <div class=\"portfolio-box-caption\">
                        <div class=\"project-category text-white-50\"></div>
                        <div class=\"project-name\"></div>
                    </div></a
                >
            </div>
            <div class=\"col-lg-4 col-sm-6\">
                <a class=\"portfolio-box\" href=\"";
        // line 41
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/img/portfolio/fullsize/pic-05.jpg\"
                    ><img class=\"img-fluid\" src=\"";
        // line 42
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/img/portfolio/thumbnails/pic-05.jpg\" alt=\"\" />
                    <div class=\"portfolio-box-caption\">
                        <div class=\"project-category text-white-50\"></div>
                        <div class=\"project-name\"></div>
                    </div></a
                >
            </div>
            <div class=\"col-lg-4 col-sm-6\">
                <a class=\"portfolio-box\" href=\"";
        // line 50
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/img/portfolio/fullsize/pic-06.jpg\"
                    ><img class=\"img-fluid\" src=\"";
        // line 51
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/img/portfolio/thumbnails/pic-06.jpg\" alt=\"\" />
                    <div class=\"portfolio-box-caption p-3\">
                        <div class=\"project-category text-white-50\"></div>
                        <div class=\"project-name\"></div>
                    </div></a
                >
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "@antiTheme/parts/portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 51,  136 => 50,  125 => 42,  121 => 41,  110 => 33,  106 => 32,  95 => 24,  91 => 23,  80 => 15,  76 => 14,  65 => 6,  61 => 5,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@antiTheme/parts/portfolio.html.twig", "/Applications/MAMP/htdocs/anti-website/drupal/themes/custom/antiTheme/templates/parts/portfolio.html.twig");
    }
}
