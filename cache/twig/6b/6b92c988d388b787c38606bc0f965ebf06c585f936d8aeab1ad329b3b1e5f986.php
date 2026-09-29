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

/* account/partial/_preview_download.html.twig */
class __TwigTemplate_87c4a169ba7b49737e280469ae245c6e12a1c2b33d4e14af3c54ef5797d7af1d extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"preview-download-wrapper\" onClick=\"";
        if ((($context["showDownloadLink"] ?? null) == true)) {
            echo "triggerFileDownload(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "id", [], "any", false, false, false, 1), "html", null, true);
            echo ", '";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "getFileHash", [], "method", false, false, false, 1), "html", null, true);
            echo "');";
        } else {
            echo "alert('";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("download_file_blocked", "Downloading restricted. Please contact the file owner to request they enable downloading."), "js"), "html", null, true);
            echo "');";
        }
        echo " return false;\">
    <div class=\"tile-stats download tile-white tile-white-primary\"> <img src=\"";
        // line 2
        echo twig_escape_filter($this->env, ($context["imageIcon"] ?? null), "html", null, true);
        echo "\" style=\"width: 140px; height: 140px;\"/><div class=\"icon\"><i class=\"entypo-download\"></i></div> <h3>";
        if ((($context["showDownloadLink"] ?? null) == true)) {
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("account_file_details_download", "Download")), "html", null, true);
            echo "&nbsp;";
        }
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "originalFilename", [], "any", false, false, false, 2), "html", null, true);
        echo "</h3> <p>";
        echo twig_escape_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("file_details_filesize", "Filesize"), "html", null, true);
        echo ":&nbsp;";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["file"] ?? null), "getFormattedFilesize", [], "method", false, false, false, 2), "html", null, true);
        echo "</p> </div>
</div>

<script type=\"text/javascript\">
//<![CDATA[
\$(document).ready(function() {
    \$('.content-preview-wrapper').removeClass('loader');
});
//]]>
</script>";
    }

    public function getTemplateName()
    {
        return "account/partial/_preview_download.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"preview-download-wrapper\" onClick=\"{% if showDownloadLink == true %}triggerFileDownload({{ file.id }}, '{{ file.getFileHash() }}');{% else %}alert('{{ t('download_file_blocked', 'Downloading restricted. Please contact the file owner to request they enable downloading.')|escape(\"js\") }}');{% endif %} return false;\">
    <div class=\"tile-stats download tile-white tile-white-primary\"> <img src=\"{{ imageIcon }}\" style=\"width: 140px; height: 140px;\"/><div class=\"icon\"><i class=\"entypo-download\"></i></div> <h3>{% if showDownloadLink == true %}{{ t('account_file_details_download', 'Download')|title }}&nbsp;{% endif %}{{ file.originalFilename }}</h3> <p>{{ t('file_details_filesize', 'Filesize') }}:&nbsp;{{ file.getFormattedFilesize() }}</p> </div>
</div>

<script type=\"text/javascript\">
//<![CDATA[
\$(document).ready(function() {
    \$('.content-preview-wrapper').removeClass('loader');
});
//]]>
</script>", "account/partial/_preview_download.html.twig", "C:\\laragon\\www\\ucloud\\themes\\evolution\\views\\account\\partial\\_preview_download.html.twig");
    }
}
