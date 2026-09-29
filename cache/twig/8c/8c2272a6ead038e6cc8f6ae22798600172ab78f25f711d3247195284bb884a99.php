<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* account/index.html.twig */
class __TwigTemplate_e2365d8efce0832ea4dc94238f0ac5dcd4c84bb978d838bf4874f15d9cba7e45 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'description' => [$this, 'block_description'],
            'keywords' => [$this, 'block_keywords'],
            'selected_navigation_link' => [$this, 'block_selected_navigation_link'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "account/partial/layout_logged_in.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("account/partial/layout_logged_in.html.twig", "account/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["pageTitle"] ?? null), "html", null, true);
    }

    // line 4
    public function block_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("account_home_meta_description", "Your Account Home"), "html", null, true);
    }

    // line 5
    public function block_keywords($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("account_home_meta_keywords", "account, home, file, your, interface, upload, download, site"), "html", null, true);
    }

    // line 6
    public function block_selected_navigation_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "your_files";
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        if ((($context["initialFileId"] ?? null) == null)) {
            // line 10
            echo "    <script>
    \$(document).ready(function() {
        loadImages('";
            // line 12
            echo twig_escape_filter($this->env, ($context["pageType"] ?? null), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, ($context["initialLoadFolderId"] ?? null), "html", null, true);
            echo "', 1, 0, '', {'searchTerm': \"";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, ($context["searchTerm"] ?? null), "js"), "html", null, true);
            echo "\", 'filterUploadedDateRange': \"";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, ($context["filterUploadedDateRange"] ?? null), "js"), "html", null, true);
            echo "\"});

        \$('a[data-toggle=\"tab\"]').on('shown.bs.tab', function (e) {
            // sometimes hidden image thumbnails don't get rendered correct, so fix
            fixImageBrowseHeights('#browse-images');
        });
    });
    </script>
";
        }
    }

    public function getTemplateName()
    {
        return "account/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 12,  84 => 10,  82 => 9,  78 => 8,  71 => 6,  64 => 5,  57 => 4,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"account/partial/layout_logged_in.html.twig\" %}

{% block title %}{{ pageTitle }}{% endblock %}
{% block description %}{{ t(\"account_home_meta_description\", \"Your Account Home\") }}{% endblock %}
{% block keywords %}{{ t(\"account_home_meta_keywords\", \"account, home, file, your, interface, upload, download, site\") }}{% endblock %}
{% block selected_navigation_link %}your_files{% endblock %}

{% block body %}
{% if initialFileId == null %}
    <script>
    \$(document).ready(function() {
        loadImages('{{ pageType }}', '{{ initialLoadFolderId }}', 1, 0, '', {'searchTerm': \"{{ searchTerm|escape(\"js\") }}\", 'filterUploadedDateRange': \"{{ filterUploadedDateRange|escape(\"js\") }}\"});

        \$('a[data-toggle=\"tab\"]').on('shown.bs.tab', function (e) {
            // sometimes hidden image thumbnails don't get rendered correct, so fix
            fixImageBrowseHeights('#browse-images');
        });
    });
    </script>
{% endif %}
{% endblock %}", "account/index.html.twig", "C:\\laragon\\www\\ucloud\\themes\\evolution\\views\\account\\index.html.twig");
    }
}
