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

/* admin/plugin_settings.html.twig */
class __TwigTemplate_fc2bb5fb4bf4dc044a735f4816bf1a50eda0005585b5dae91152b588b422d7cc extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'selected_page' => [$this, 'block_selected_page'],
            'selected_sub_page' => [$this, 'block_selected_sub_page'],
            'body' => [$this, 'block_body'],
            'head_js' => [$this, 'block_head_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@corePath/admin/partial/layout_logged_in.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@corePath/admin/partial/layout_logged_in.html.twig", "admin/plugin_settings.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["pluginName"] ?? null), "html", null, true);
        echo " Settings";
    }

    // line 4
    public function block_selected_page($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "plugins";
    }

    // line 5
    public function block_selected_sub_page($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "plugin_manage";
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    <div class=\"row clearfix right_col\" role=\"main\">
        <div class=\"col_12\">
            <div class=\"widget clearfix\">
                <h2>";
        // line 11
        echo twig_escape_filter($this->env, ($context["pluginName"] ?? null), "html", null, true);
        echo " Settings</h2>
                <div class=\"widget_inside\">
                    ";
        // line 13
        echo ($context["msg_page_notifications"] ?? null);
        echo "
                    <form method=\"POST\" action=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/plugin/filepreviewer/settings\" name=\"pluginForm\" id=\"pluginForm\" autocomplete=\"off\" enctype=\"multipart/form-data\">
                        <div class=\"clearfix col_12\">
                            <div class=\"col_4\">
                                <h3>General Settings</h3>
                                <p>Whether the plugin is enable and other general settings.</p>
                            </div>
                            <div class=\"col_8 last\">
                                <div class=\"form\">
                                    <div class=\"clearfix\">
                                        <label>Plugin Enabled:</label>
                                        <div class=\"input\">
                                            <select name=\"plugin_enabled\" id=\"plugin_enabled\" class=\"medium validate[required]\">
                                                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["yesNoOptions"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["yesNoOption"]) {
            // line 27
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "\"";
            if ((($context["plugin_enabled"] ?? null) == $context["k"])) {
                echo " SELECTED";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["yesNoOption"], "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['yesNoOption'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                                            </select>
                                        </div>
                                    </div>

                                    <div class=\"clearfix\">
                                        <label>Show File Details Outside of Account:</label>
                                        <div class=\"input\">
                                            <select name=\"show_file_details_outside_account\" id=\"show_file_details_outside_account\" class=\"medium validate[required]\">
                                                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["yesNoOptions"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["yesNoOption"]) {
            // line 38
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "\"";
            if ((($context["show_file_details_outside_account"] ?? null) == $context["k"])) {
                echo " SELECTED";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["yesNoOption"], "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['yesNoOption'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                                            </select>
                                            <p class=\"text-muted\">
                                                If set to 'no', users will not see the file details page when visiting a download url. This would trigger a download of the file instead of previewing it. Useful if you don't want the details page but want to retain image thumbnails.
                                            </p>
                                        </div>
                                    </div>
                                    
                                    <div class=\"clearfix\">
                                        <label>Show Similar Files Thumbnails:</label>
                                        <div class=\"input\">
                                            <select name=\"show_similar_items\" id=\"show_similar_items\" class=\"medium validate[required]\">
                                                ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["yesNoOptions"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["yesNoOption"]) {
            // line 52
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "\"";
            if ((($context["show_similar_items"] ?? null) == $context["k"])) {
                echo " SELECTED";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["yesNoOption"], "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['yesNoOption'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                                            </select>
                                            <p class=\"text-muted\">
                                                If set to 'yes', a list of files within the same folder will be shown below the file preview. Shown for both logged in users and shared file urls.
                                            </p>
                                        </div>
                                    </div>
                                    
                                    <div class=\"clearfix\">
                                        <label>Allow Direct File Links:</label>
                                        <div class=\"input\">
                                            <select name=\"allow_direct_links\" id=\"allow_direct_links\" class=\"medium validate[required]\">
                                                ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["yesNoOptions"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["yesNoOption"]) {
            // line 66
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "\"";
            if ((($context["allow_direct_links"] ?? null) == $context["k"])) {
                echo " SELECTED";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["yesNoOption"], "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['yesNoOption'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                                            </select>
                                            <p class=\"text-muted\">
                                                If set to 'yes', a new direct file url will be available to users. This can be used by any user type to directly download a file. Useful for embedding videos in third party players.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <ul class=\"nav nav-tabs bordered\">
                            <li class=\"active\">
                                <a href=\"#images\" data-toggle=\"tab\" aria-expanded=\"true\">
                                    <span><i class=\"fa fa-photo\"></i></span>
                                    <span class=\"hidden-xs\">Images</span>
                                </a>
                            </li>
                            <li class=\"\">
                                <a href=\"#documents\" data-toggle=\"tab\" aria-expanded=\"false\">
                                    <span><i class=\"fa fa-file-word-o\"></i></span>
                                    <span class=\"hidden-xs\">Documents</span>
                                </a>
                            </li>
                            <li class=\"\">
                                <a href=\"#videos\" data-toggle=\"tab\" aria-expanded=\"false\">
                                    <span><i class=\"fa fa-video-camera\"></i></span>
                                    <span class=\"hidden-xs\">Videos</span>
                                </a>
                            </li>
                            <li class=\"\">
                                <a href=\"#audio\" data-toggle=\"tab\" aria-expanded=\"false\">
                                    <span><i class=\"fa fa-music\"></i></span>
                                    <span class=\"hidden-xs\">Audio</span>
                                </a>
                            </li>
                            <li class=\"\">
                                <a href=\"#text\" data-toggle=\"tab\" aria-expanded=\"false\">
                                    <span><i class=\"fa fa-file-text-o\"></i></span>
                                    <span class=\"hidden-xs\">Text/Code</span>
                                </a>
                            </li>
                        </ul>

                        <div class=\"tab-content\">
                            <div class=\"tab-pane active\" id=\"images\">
                                <div class=\"clearfix col_12\">
                                    <div class=\"col_4\">
                                        <h3>Image Preview Settings</h3>
                                        <p>Whether to enable image previews and thumbnails. If enabled, thumbnails will be shown while browsing files aswell as when you click to view a file.</p>
                                    </div>
                                    <div class=\"col_8 last\">
                                        <div class=\"form\">
                                            <div class=\"clearfix\">
                                                <label>Show Images:</label>
                                                <div class=\"input\">
                                                    <select name=\"enable_preview_image\" class=\"medium\">
                                                        ";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["yesNoOptions"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["yesNoOption"]) {
            // line 125
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "\"";
            if ((($context["enable_preview_image"] ?? null) == $context["k"])) {
                echo " SELECTED";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["yesNoOption"], "html", null, true);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['yesNoOption'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "                                                    </select>
                                                </div>
                                            </div>

                                            <div class=\"clearfix\">
                                                <label>Show Thumbnails:</label>
                                                <div class=\"input\">
                                                    <select name=\"preview_image_show_thumb\" class=\"medium\">
                                                        ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["yesNoOptions"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["yesNoOption"]) {
            // line 136
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "\"";
            if ((($context["preview_image_show_thumb"] ?? null) == $context["k"])) {
                echo " SELECTED";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["yesNoOption"], "html", null, true);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['yesNoOption'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "                                                    </select>
                                                </div>
                                            </div>

                                            <div class=\"clearfix\">
                                                <label>Auto Rotate Images:</label>
                                                <div class=\"input\">
                                                    <select name=\"auto_rotate\" id=\"auto_rotate\" class=\"medium\">
                                                        ";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["yesNoOptions"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["yesNoOption"]) {
            // line 147
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "\"";
            if ((($context["auto_rotate"] ?? null) == $context["k"])) {
                echo " SELECTED";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["yesNoOption"], "html", null, true);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['yesNoOption'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "                                                    </select>
                                                    <p class=\"text-muted\">
                                                        If set to 'yes', image previews will be automatically rotated the correct way up (based on EXIF data).
                                                    </p>
                                                </div>
                                            </div>

                                            <div class=\"clearfix\">
                                                <label>Show Resizing Opt:</label>
                                                <div class=\"input\">
                                                    <select name=\"show_download_sizes\" id=\"show_download_sizes\" class=\"medium validate[required]\">
                                                        ";
        // line 160
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["yesNoOptions"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["yesNoOption"]) {
            // line 161
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "\"";
            if ((($context["show_download_sizes"] ?? null) == $context["k"])) {
                echo " SELECTED";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["yesNoOption"], "html", null, true);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['yesNoOption'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"col_4\">
                                        <h3>Image Library</h3>
                                        <p>Which image library to use? GD is installed by default on most PHP installs and supports 4 images types (jpg, png, gif, bmp). Imagemagick can be installed as an additional PHP module, but can support <strong>over 200 image types</strong> (inc psd, ai, raw, mng and much more).</p>
                                    </div>
                                    <div class=\"col_8 last\">
                                        <div class=\"form\">
                                            <div class=\"clearfix\">
                                                <label>Choose Library:</label>
                                                <div class=\"input\">
                                                    <select name=\"image_library\" id=\"image_library\" class=\"xxlarge validate[required]\" onChange=\"showHideSupportedImages(false);
                                                            return false;\">
                                                        ";
        // line 180
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["libraryOptions"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["libraryOption"]) {
            // line 181
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "\"";
            if ((($context["image_library"] ?? null) == $context["k"])) {
                echo " SELECTED";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["libraryOption"], "html", null, true);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['libraryOption'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 183
        echo "                                                    </select>
                                                </div>
                                            </div>

                                            <div class=\"clearfix\">
                                                <label for=\"supported_image_types\">Supported Formats:</label>
                                                <div class=\"input\">
                                                    <textarea name=\"supported_image_types\" id=\"supported_image_types\" class=\"xxlarge\" style=\"height: 80px;\">";
        // line 190
        echo twig_escape_filter($this->env, ($context["supported_image_types"] ?? null), "html", null, true);
        echo "</textarea>
                                                    <p class=\"text-muted\">
                                                        Set the extensions above you want to auto-generate previews on. The extension must be listed in the 'available formats' below. It is not recommended to include video file types such as mp4.
                                                    </p>
                                                </div>
                                            </div>

                                            <div class=\"clearfix supportedTypesGd\">
                                                <label>Available Formats:</label>
                                                <div class=\"input\" style=\"padding-top: 5px;\">
                                                    <strong>Total 5:</strong><p class=\"text-muted\">jpg,jpeg,png,gif,wbmp (gif is static gif only)
                                                </div>
                                            </div>

                                            <div class=\"clearfix supportedTypesIm\">
                                                <label>Available Formats:</label>
                                                <div class=\"input\" style=\"padding-top: 5px; max-height: 160px; overflow: auto;\">
                                                    <strong>Total ";
        // line 207
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["formatsArr"] ?? null)), "html", null, true);
        echo ":</strong><p class=\"text-muted\">";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_join_filter(($context["formatsArr"] ?? null), ",")), "html", null, true);
        echo "
                                                </div>
                                            </div>

                                            <div class=\"clearfix supportedTypesIm\">
                                                <label>Animate Thumbnails:</label>
                                                <div class=\"input\">
                                                    <select name=\"animate_gif_thumbnails\" id=\"animate_gif_thumbnails\" class=\"medium validate[required]\">
                                                        ";
        // line 215
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["yesNoOptions"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["yesNoOption"]) {
            // line 216
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "\"";
            if ((($context["animate_gif_thumbnails"] ?? null) == $context["k"])) {
                echo " SELECTED";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["yesNoOption"], "html", null, true);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['yesNoOption'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 218
        echo "                                                    </select>
                                                    <p class=\"text-muted\">
                                                        If set to 'yes', GIF image thumbnails with be resized as animated. Otherwise a static image will be used.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"col_4\">
                                        <h3>Watermark</h3>
                                        <p>Whether to overlay a watermark on the images. Watermark image should be a png file. If using transparency ensure it's at least 24bit for the best results.</p>
                                    </div>
                                    <div class=\"col_8 last\">
                                        <div class=\"form\">
                                            <div class=\"clearfix\">
                                                <label>Watermark Enabled:</label>
                                                <div class=\"input\">
                                                    <select name=\"watermark_enabled\" id=\"watermark_enabled\" class=\"medium validate[required]\" onChange=\"showHideWatermark();
                                                            return false;\">
                                                        ";
        // line 238
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["yesNoOptions"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["yesNoOption"]) {
            // line 239
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "\"";
            if ((($context["watermark_enabled"] ?? null) == $context["k"])) {
                echo " SELECTED";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["yesNoOption"], "html", null, true);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['yesNoOption'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 241
        echo "                                                    </select>
                                                </div>
                                            </div>

                                            <div class=\"clearfix watermarkHiddenRow\">
                                                <label for=\"watermark_image\">Watermark PNG Image:</label>
                                                <div class=\"input\" style=\"padding-top: 2px;\">
                                                    <input type=\"file\" name=\"watermark_image\" id=\"watermark_image\"/>
                                                    ";
        // line 249
        if ((twig_length_filter($this->env, ($context["watermark_contents"] ?? null)) > 0)) {
            // line 250
            echo "                                                        <br/><img src=\"data:image/png;base64,";
            echo twig_escape_filter($this->env, ($context["watermark_contents_base64"] ?? null), "html", null, true);
            echo "\" style=\"padding-top: 8px;\"/>
                                                    ";
        }
        // line 252
        echo "                                                </div>
                                            </div>

                                            <div class=\"clearfix watermarkHiddenRow\">
                                                <label for=\"watermark_position\">Watermark Position:</label>
                                                <div class=\"input\" style=\"padding-top: 2px;\">
                                                    <select name=\"watermark_position\" id=\"watermark_position\" class=\"medium\">
                                                        ";
        // line 259
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["watermark_position_options"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["watermark_position_option"]) {
            // line 260
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "\"";
            if ((($context["watermark_position"] ?? null) == $context["k"])) {
                echo " SELECTED";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["watermark_position_option"], "html", null, true);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['watermark_position_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 262
        echo "                                                    </select>
                                                </div>
                                            </div>

                                            <div class=\"clearfix watermarkHiddenRow\">
                                                <label for=\"watermark_padding\">Watermark Padding:</label>
                                                <div class=\"input\">
                                                    <div class=\"input-group\" style=\"margin-bottom: 10px;\">
                                                        <input type=\"text\" name=\"watermark_padding\" id=\"watermark_padding\" class=\"small\" value=\"";
        // line 270
        echo twig_escape_filter($this->env, ($context["watermark_padding"] ?? null), "html", null, true);
        echo "\" placeholder=\"watermark padding px\"/>
                                                        <span class=\"input-group-addon\">px</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"clear\"></div>

                                    <div class=\"col_4\">
                                        <h3>Image Options</h3>
                                        <p>The preview image quality.</p>
                                    </div>
                                    <div class=\"col_8 last\">
                                        <div class=\"form\">
                                            <div class=\"clearfix\">
                                                <label>Preview Image Quality:</label>
                                                <div class=\"input\">
                                                    <input type=\"text\" name=\"image_quality\" id=\"image_quality\" class=\"small\" value=\"";
        // line 288
        echo twig_escape_filter($this->env, ($context["image_quality"] ?? null), "html", null, true);
        echo "\"/>
                                                    <p class=\"text-muted\">Between 1 (low quality) and 100 (best quality). Default is 90. The higher the quality the larger the filesize. This does not effect the downloaded file, only the preview/thumbnails.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"col_4\">
                                        <h3>Embedded Thumbnail Options</h3>
                                        <p>Size of externally embedded thumbnails and method of resizing. Thumbnails are used when link to the image from an external site.</p>
                                    </div>
                                    <div class=\"col_8 last\">
                                        <div class=\"form\">
                                            <div class=\"clearfix\">
                                                <label>Show Embedding Opt:</label>
                                                <div class=\"input\">
                                                    <select name=\"images_show_embedding\" id=\"images_show_embedding\" class=\"medium validate[required]\">
                                                        ";
        // line 305
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["yesNoOptions"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["yesNoOption"]) {
            // line 306
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "\"";
            if ((($context["images_show_embedding"] ?? null) == $context["k"])) {
                echo " SELECTED";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["yesNoOption"], "html", null, true);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['yesNoOption'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 308
        echo "                                                    </select>
                                                </div>
                                            </div>
                                            <div class=\"clearfix\">
                                                <label>Max Thumbnail Size:</label>
                                                <div class=\"input\">
                                                    <div class=\"input-group\" style=\"margin-bottom: 10px;\">
                                                        <span class=\"input-group-addon\">Width</span>
                                                        <input type=\"text\" name=\"thumb_size_w\" id=\"thumb_size_w\" class=\"small\" value=\"";
        // line 316
        echo twig_escape_filter($this->env, ($context["thumb_size_w"] ?? null), "html", null, true);
        echo "\" placeholder=\"width\"/>
                                                        <span class=\"input-group-addon\">px</span>
                                                    </div>
                                                    <div class=\"input-group\">
                                                        <span class=\"input-group-addon\">Height</span>
                                                        <input type=\"text\" name=\"thumb_size_h\" id=\"thumb_size_h\" class=\"small\" value=\"";
        // line 321
        echo twig_escape_filter($this->env, ($context["thumb_size_h"] ?? null), "html", null, true);
        echo "\" placeholder=\"height\"/>
                                                        <span class=\"input-group-addon\">px</span>
                                                    </div>
                                                    <p class=\"text-muted\">The maximum size to create the thumbnail. Default is 180x150.</p>
                                                </div>
                                            </div>
                                            <div class=\"clearfix\">
                                                <label>Resize Method:</label>
                                                <div class=\"input\">
                                                    <select name=\"thumb_resize_method\" id=\"thumb_resize_method\" class=\"xxlarge validate[required]\">
                                                        ";
        // line 331
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["thumbResizeMethodOptions"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["thumbResizeMethodOption"]) {
            // line 332
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "\"";
            if ((($context["thumb_resize_method"] ?? null) == $context["k"])) {
                echo " SELECTED";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["thumbResizeMethodOption"], "html", null, true);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['thumbResizeMethodOption'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 334
        echo "                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"col_4\">
                                        <h3>Optional Background Thumbnail Creation</h3>
                                        <p>Thumbnails are created and cached as the images are requested via the user interface. You can however generate the cached thumbnails via an automated background task to improve the overall user experience. To enable this setup the following cron task.</p>
                                    </div>
                                    <div class=\"col_8 last\">
                                        <div class=\"form\">
                                            <div class=\"clearfix\">
                                                <div>
                                                    The cron script is located here:<br/><br/>
                                                    <code>
                                                        ";
        // line 350
        echo twig_escape_filter($this->env, ($context["DOC_ROOT"] ?? null), "html", null, true);
        echo "/plugins/filepreviewer/tasks/background_thumbs.cron.php
                                                    </code>
                                                    <br/><br/>
                                                    To execute it, set it up on only main server as a cron task. It is not required on any file servers. This is the line for the crontab file:<br/><br/>
                                                    <code>
                                                        * * * * * php ";
        // line 355
        echo twig_escape_filter($this->env, ($context["DOC_ROOT"] ?? null), "html", null, true);
        echo "/plugins/filepreviewer/tasks/background_thumbs.cron.php >> /dev/null 2>&1
                                                    </code>
                                                    <br/><br/>
                                                    See <a href=\"http://www.cyberciti.biz/faq/how-do-i-add-jobs-to-cron-under-linux-or-unix-oses/\" target=\"_blank\">here for more information</a> on executing scripts via a cron task.<br/><br/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class=\"tab-pane\" id=\"documents\">
                                <div class=\"clearfix col_12\">
                                    <div class=\"col_4\">
                                        <h3>Document Preview Settings</h3>
                                        <p>Whether to enable document previews. If enabled, the document will be shown using Google Docs after you click on the file. It's recommended you do not use the document previewer for sensitive or private files. By previewing documents via Google Docs are you agreeing to their <a href=\"https://tools.google.com/dlpage/res/webmmf/en/eula.html\" target=\"_blank\">terms and conditions</a>.</p>
                                    </div>
                                    <div class=\"col_8 last\">
                                        <div class=\"form\">
                                            <div class=\"clearfix\">
                                                <label>Show Documents:</label>
                                                <div class=\"input\">
                                                    <select name=\"enable_preview_document\" class=\"medium\">
                                                        ";
        // line 378
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["yesNoOptions"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["yesNoOption"]) {
            // line 379
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "\"";
            if ((($context["enable_preview_document"] ?? null) == $context["k"])) {
                echo " SELECTED";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["yesNoOption"], "html", null, true);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['yesNoOption'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 381
        echo "                                                    </select>
                                                </div>
                                            </div>

                                            <div class=\"clearfix\">
                                                <label>Show PDF Thumbnails:</label>
                                                <div class=\"input\">
                                                    <select name=\"preview_document_pdf_thumbs\" class=\"medium\">
                                                        ";
        // line 389
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["yesNoOptions"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["yesNoOption"]) {
            // line 390
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "\"";
            if ((($context["preview_document_pdf_thumbs"] ?? null) == $context["k"])) {
                echo " SELECTED";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["yesNoOption"], "html", null, true);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['yesNoOption'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 392
        echo "                                                    </select>
                                                    <p class=\"text-muted\">
                                                        Requires ImageMagick within PHP. Please contact your host to enable this.
                                                    </p>
                                                </div>
                                            </div>

                                            <div class=\"clearfix\">
                                                <label>File Extensions:</label>
                                                <div class=\"input\">
                                                    <input type=\"text\" name=\"preview_document_ext\" class=\"xxlarge\" value=\"";
        // line 402
        echo twig_escape_filter($this->env, ($context["preview_document_ext"] ?? null), "html", null, true);
        echo "\"/>
                                                    <p class=\"text-muted\">
                                                        Default: doc,docx,xls,xlsx,ppt,pptx,pdf,pages,ai,psd,tiff,dxf,svg,eps,ps,ttf,otf,xps
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"col_4\">
                                        <h3>Other Options</h3>
                                        <p>Whether to show embed code and related options.</p>
                                    </div>
                                    <div class=\"col_8 last\">
                                        <div class=\"form\">
                                            <div class=\"clearfix\">
                                                <label>Show Embed Code:</label>
                                                <div class=\"input\">
                                                    <select name=\"documents_show_embedding\" id=\"documents_show_embedding\" class=\"medium\">
                                                        ";
        // line 421
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["yesNoOptions"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["yesNoOption"]) {
            // line 422
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "\"";
            if ((($context["documents_show_embedding"] ?? null) == $context["k"])) {
                echo " SELECTED";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["yesNoOption"], "html", null, true);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['yesNoOption'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 424
        echo "                                                    </select>
                                                </div>
                                            </div>
                                            <div class=\"clearfix\">
                                                <label>Embedded Size:</label>
                                                <div class=\"input\">
                                                    <div class=\"input-group\" style=\"margin-bottom: 10px;\">
                                                        <span class=\"input-group-addon\">Width</span>
                                                        <input type=\"text\" name=\"documents_embed_document_size_w\" id=\"documents_embed_document_size_w\" class=\"small\" value=\"";
        // line 432
        echo twig_escape_filter($this->env, ($context["documents_embed_document_size_w"] ?? null), "html", null, true);
        echo "\" placeholder=\"width\"/>
                                                        <span class=\"input-group-addon\">px</span>
                                                    </div>
                                                    <div class=\"input-group\">
                                                        <span class=\"input-group-addon\">Height</span>
                                                        <input type=\"text\" name=\"documents_embed_document_size_h\" id=\"documents_embed_document_size_h\" class=\"small\" value=\"";
        // line 437
        echo twig_escape_filter($this->env, ($context["documents_embed_document_size_h"] ?? null), "html", null, true);
        echo "\" placeholder=\"height\"/>
                                                        <span class=\"input-group-addon\">px</span>
                                                    </div>
                                                    <p class=\"text-muted\">This is the size of the iframe and hence document when embedded on an external site.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"tab-pane\" id=\"videos\">
                                <div class=\"clearfix col_12\">
                                    <div class=\"col_4\">
                                        <h3>Video Preview Settings</h3>
                                        <p>Whether to enable video previews. If enabled, the video will be shown after you click on the file.</p>
                                    </div>
                                    <div class=\"col_8 last\">
                                        <div class=\"form\">
                                            <div class=\"clearfix\">
                                                <label>Play Videos:</label>
                                                <div class=\"input\">
                                                    <select name=\"enable_preview_video\" class=\"medium\">
                                                        ";
        // line 459
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["yesNoOptions"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["yesNoOption"]) {
            // line 460
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "\"";
            if ((($context["enable_preview_video"] ?? null) == $context["k"])) {
                echo " SELECTED";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["yesNoOption"], "html", null, true);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['yesNoOption'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 462
        echo "                                                    </select>
                                                </div>
                                            </div>
                                                    
                                            <div class=\"clearfix filepreviewer_video_player\">
                                                <label>Video Player:</label>
                                                <div class=\"input\">
                                                    <select name=\"preview_video_player\" class=\"medium\">
                                                        ";
        // line 470
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["videoPlayers"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["videoPlayer"]) {
            // line 471
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "\"";
            if ((($context["preview_video_player"] ?? null) == $context["k"])) {
                echo " SELECTED";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["videoPlayer"], "html", null, true);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['videoPlayer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 473
        echo "                                                    </select>
                                                </div>
                                            </div>

                                            <div class=\"clearfix\">
                                                <label>File Extensions:</label>
                                                <div class=\"input\">
                                                    <input type=\"text\" name=\"preview_video_ext\" class=\"xxlarge\" value=\"";
        // line 480
        echo twig_escape_filter($this->env, ($context["preview_video_ext"] ?? null), "html", null, true);
        echo "\"/>
                                                    <p class=\"text-muted\">
                                                        Default: mp4,flv,ogg
                                                    </p>
                                                </div>
                                            </div>
                                            
                                            <div class=\"clearfix\">
                                                <label>Autoplay Videos:</label>
                                                <div class=\"input\">
                                                    <select name=\"videos_autoplay\" id=\"videos_autoplay\" class=\"medium\">
                                                        ";
        // line 491
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["yesNoOptions"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["yesNoOption"]) {
            // line 492
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "\"";
            if ((($context["videos_autoplay"] ?? null) == $context["k"])) {
                echo " SELECTED";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["yesNoOption"], "html", null, true);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['yesNoOption'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 494
        echo "                                                    </select>
                                                    <p class=\"text-muted\">This is browser dependant and may not always be supported. In addition, autoplayed videos are initially muted to adhere to browser autoplay policies.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col_4\">
                                        <h3>Other Options</h3>
                                        <p>Whether to show embed code and related options.</p>
                                    </div>
                                    <div class=\"col_8 last\">
                                        <div class=\"form\">
                                            <div class=\"clearfix\">
                                                <label>Show Embed Code:</label>
                                                <div class=\"input\">
                                                    <select name=\"videos_show_embedding\" id=\"videos_show_embedding\" class=\"medium\">
                                                        ";
        // line 510
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["yesNoOptions"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["yesNoOption"]) {
            // line 511
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "\"";
            if ((($context["videos_show_embedding"] ?? null) == $context["k"])) {
                echo " SELECTED";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["yesNoOption"], "html", null, true);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['yesNoOption'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 513
        echo "                                                    </select>
                                                </div>
                                            </div>
                                            <div class=\"clearfix\">
                                                <label>Embedded Size:</label>
                                                <div class=\"input\">
                                                    <div class=\"input-group\" style=\"margin-bottom: 10px;\">
                                                        <span class=\"input-group-addon\">Width</span>
                                                        <input type=\"text\" name=\"videos_embed_size_w\" id=\"videos_embed_size_w\" class=\"small\" value=\"";
        // line 521
        echo twig_escape_filter($this->env, ($context["videos_embed_size_w"] ?? null), "html", null, true);
        echo "\" placeholder=\"width\"/>
                                                        <span class=\"input-group-addon\">px</span>
                                                    </div>
                                                    <div class=\"input-group\">
                                                        <span class=\"input-group-addon\">Height</span>
                                                        <input type=\"text\" name=\"videos_embed_size_h\" id=\"videos_embed_size_h\" class=\"small\" value=\"";
        // line 526
        echo twig_escape_filter($this->env, ($context["videos_embed_size_h"] ?? null), "html", null, true);
        echo "\" placeholder=\"height\"/>
                                                        <span class=\"input-group-addon\">px</span>
                                                    </div>
                                                    <p class=\"text-muted\">This is the size of the video iframe when embedded on an external site.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"tab-pane\" id=\"audio\">
                                <div class=\"clearfix col_12\">
                                    <div class=\"col_4\">
                                        <h3>Audio Preview Settings</h3>
                                        <p>Whether to enable audio previews. If enabled, the audio will be played after you click on the file.</p>
                                    </div>
                                    <div class=\"col_8 last\">
                                        <div class=\"form\">
                                            <div class=\"clearfix\">
                                                <label>Play Audio:</label>
                                                <div class=\"input\">
                                                    <select name=\"enable_preview_audio\" class=\"medium\">
                                                        ";
        // line 548
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["yesNoOptions"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["yesNoOption"]) {
            // line 549
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "\"";
            if ((($context["enable_preview_audio"] ?? null) == $context["k"])) {
                echo " SELECTED";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["yesNoOption"], "html", null, true);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['yesNoOption'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 551
        echo "                                                    </select>
                                                </div>
                                            </div>

                                            <div class=\"clearfix filepreviewer_audio_player\">
                                                <label>Audio Player:</label>
                                                <div class=\"input\">
                                                    <select name=\"preview_audio_player\" class=\"medium\">
                                                        ";
        // line 559
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["audioPlayers"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["audioPlayer"]) {
            // line 560
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "\"";
            if ((($context["preview_audio_player"] ?? null) == $context["k"])) {
                echo " SELECTED";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["audioPlayer"], "html", null, true);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['audioPlayer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 562
        echo "                                                    </select>
                                                </div>
                                            </div>

                                            <div class=\"clearfix\">
                                                <label>File Extensions:</label>
                                                <div class=\"input\">
                                                    <input type=\"text\" name=\"preview_audio_ext\" class=\"xxlarge\" value=\"";
        // line 569
        echo twig_escape_filter($this->env, ($context["preview_audio_ext"] ?? null), "html", null, true);
        echo "\"/>
                                                    <p class=\"text-muted\">
                                                        Default: mp3
                                                    </p>
                                                </div>
                                            </div>
                                            
                                            <div class=\"clearfix\">
                                                <label>Autoplay Audio:</label>
                                                <div class=\"input\">
                                                    <select name=\"audio_autoplay\" id=\"audio_autoplay\" class=\"medium\">
                                                        ";
        // line 580
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["yesNoOptions"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["yesNoOption"]) {
            // line 581
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "\"";
            if ((($context["audio_autoplay"] ?? null) == $context["k"])) {
                echo " SELECTED";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["yesNoOption"], "html", null, true);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['yesNoOption'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 583
        echo "                                                    </select>
                                                    <p class=\"text-muted\">This is browser dependant and may not always be supported.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col_4\">
                                        <h3>Other Options</h3>
                                        <p>Whether to show embed code and related options.</p>
                                    </div>
                                    <div class=\"col_8 last\">
                                        <div class=\"form\">
                                            <div class=\"clearfix\">
                                                <label>Show Embed Code:</label>
                                                <div class=\"input\">
                                                    <select name=\"audio_show_embedding\" id=\"audio_show_embedding\" class=\"medium\">
                                                        ";
        // line 599
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["yesNoOptions"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["yesNoOption"]) {
            // line 600
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "\"";
            if ((($context["audio_show_embedding"] ?? null) == $context["k"])) {
                echo " SELECTED";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["yesNoOption"], "html", null, true);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['yesNoOption'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 602
        echo "                                                    </select>
                                                </div>
                                            </div>
                                            <div class=\"clearfix\">
                                                <label>Embedded Size:</label>
                                                <div class=\"input\">
                                                    <div class=\"input-group\" style=\"margin-bottom: 10px;\">
                                                        <span class=\"input-group-addon\">Width</span>
                                                        <input type=\"text\" name=\"audio_embed_size_w\" id=\"audio_embed_size_w\" class=\"small\" value=\"";
        // line 610
        echo twig_escape_filter($this->env, ($context["audio_embed_size_w"] ?? null), "html", null, true);
        echo "\" placeholder=\"width\"/>
                                                        <span class=\"input-group-addon\">px</span>
                                                    </div>
                                                    <div class=\"input-group\">
                                                        <span class=\"input-group-addon\">Height</span>
                                                        <input type=\"text\" name=\"audio_embed_size_h\" id=\"audio_embed_size_h\" class=\"small\" value=\"";
        // line 615
        echo twig_escape_filter($this->env, ($context["audio_embed_size_h"] ?? null), "html", null, true);
        echo "\" placeholder=\"height\"/>
                                                        <span class=\"input-group-addon\">px</span>
                                                    </div>
                                                    <p class=\"text-muted\">This is the size of the audio iframe when embedded on an external site.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"tab-pane\" id=\"text\">
                                <div class=\"clearfix col_12\">
                                    <div class=\"col_4\">
                                        <h3>Text File/Code Preview Settings</h3>
                                        <p>Whether to enable text file &amp; code previews. If enabled, the file will be shown directly on the page. Only files up to 2MB will be previewed for performance reasons.</p>
                                    </div>
                                    <div class=\"col_8 last\">
                                        <div class=\"form\">
                                            <div class=\"clearfix\">
                                                <label>Show File/Code Previews:</label>
                                                <div class=\"input\">
                                                    <select name=\"enable_preview_text\" class=\"medium\">
                                                        ";
        // line 637
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["yesNoOptions"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["yesNoOption"]) {
            // line 638
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "\"";
            if ((($context["enable_preview_text"] ?? null) == $context["k"])) {
                echo " SELECTED";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["yesNoOption"], "html", null, true);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['yesNoOption'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 640
        echo "                                                    </select>
                                                </div>
                                            </div>

                                            <div class=\"clearfix\">
                                                <label>Use Code Syntax Highlighter:</label>
                                                <div class=\"input\">
                                                    <select name=\"syntax_highlight_text\" class=\"medium\">
                                                        ";
        // line 648
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["yesNoOptions"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["yesNoOption"]) {
            // line 649
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "\"";
            if ((($context["syntax_highlight_text"] ?? null) == $context["k"])) {
                echo " SELECTED";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["yesNoOption"], "html", null, true);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['yesNoOption'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 651
        echo "                                                    </select>
                                                </div>
                                            </div>

                                            <div class=\"clearfix\">
                                                <label>File Extensions:</label>
                                                <div class=\"input\">
                                                    <input type=\"text\" name=\"preview_text_ext\" class=\"xxlarge\" value=\"";
        // line 658
        echo twig_escape_filter($this->env, ($context["preview_text_ext"] ?? null), "html", null, true);
        echo "\"/>
                                                    <p class=\"text-muted\">
                                                        Default: txt,php,html,htm,xhtml,js,css,srt,vtt,log,sql,xml,asp,aspx,cer,cfm,cgi,pl,jsp,py,rss,c,class,cpp,h,java,sh,vb,swift,cfg,ini,text
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- COMING SOON
                                    <div class=\"col_4\">
                                        <h3>Other Options</h3>
                                        <p>Whether to show embed code and related options.</p>
                                    </div>
                                    <div class=\"col_8 last\">
                                        <div class=\"form\">
                                            <div class=\"clearfix\">
                                                <label>Show Embed Code:</label>
                                                <div class=\"input\">
                                                    <select name=\"text_show_embedding\" id=\"text_show_embedding\" class=\"medium\">
                                                        ";
        // line 678
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["yesNoOptions"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["yesNoOption"]) {
            // line 679
            echo "                                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "\"";
            if ((($context["text_show_embedding"] ?? null) == $context["k"])) {
                echo " SELECTED";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["yesNoOption"], "html", null, true);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['yesNoOption'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 681
        echo "                                                    </select>
                                                </div>
                                            </div>
                                            <div class=\"clearfix\">
                                                <label>Embedded Size:</label>
                                                <div class=\"input\">
                                                    <div class=\"input-group\" style=\"margin-bottom: 10px;\">
                                                        <span class=\"input-group-addon\">Width</span>
                                                        <input type=\"text\" name=\"text_embed_document_size_w\" id=\"text_embed_document_size_w\" class=\"small\" value=\"";
        // line 689
        echo twig_escape_filter($this->env, ($context["text_embed_document_size_w"] ?? null), "html", null, true);
        echo "\" placeholder=\"width\"/>
                                                        <span class=\"input-group-addon\">px</span>
                                                    </div>
                                                    <div class=\"input-group\">
                                                        <span class=\"input-group-addon\">Height</span>
                                                        <input type=\"text\" name=\"text_embed_document_size_h\" id=\"text_embed_document_size_h\" class=\"small\" value=\"";
        // line 694
        echo twig_escape_filter($this->env, ($context["text_embed_document_size_h"] ?? null), "html", null, true);
        echo "\" placeholder=\"height\"/>
                                                        <span class=\"input-group-addon\">px</span>
                                                    </div>
                                                    <p class=\"text-muted\">This is the size of the iframe and hence text/code area when embedded on an external site.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    -->
                                </div>
                            </div>
                        </div>

                        <div class=\"clearfix col_12\">
                            <div class=\"col_4 adminResponsiveHide\">&nbsp;</div>
                            <div class=\"col_8 last\">
                                <div class=\"clearfix\">
                                    <div class=\"input no-label\">
                                        <input name=\"caching\" type=\"hidden\" value=\"1\"/>

                                        <input type=\"submit\" value=\"Submit\" class=\"button blue\">
                                        <input type=\"reset\" value=\"Cancel\" class=\"button grey\" onClick=\"window.location = '";
        // line 715
        echo twig_escape_filter($this->env, ($context["ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/plugin_manage';\">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <input name=\"submitted\" type=\"hidden\" value=\"1\"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 729
    public function block_head_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 730
        echo "    <script>
        \$(function () {
            showHideWatermark();
            showHideSupportedImages(true);
        });

        function showHideWatermark()
        {
            if (\$('#watermark_enabled').val() == '1')
            {
                \$('.watermarkHiddenRow').show();
            } else
            {
                \$('.watermarkHiddenRow').hide();
            }
        }

        function showHideSupportedImages(isFirst)
        {
            if (\$('#image_library').val() == 'gd')
            {
                \$('.supportedTypesIm').hide();
                \$('.supportedTypesGd').show();
                if (isFirst == false)
                {
                    \$('#supported_image_types').val(\"jpg,jpeg,png,gif,wbmp\");
                }
            } else
            {
                \$('.supportedTypesGd').hide();
                \$('.supportedTypesIm').show();
                if (isFirst == false)
                {
                    \$('#supported_image_types').val(\"";
        // line 763
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_join_filter(($context["formatsArr"] ?? null), ",")), "html", null, true);
        echo "\");
                }
            }
        }
    </script>
";
    }

    public function getTemplateName()
    {
        return "admin/plugin_settings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1423 => 763,  1388 => 730,  1384 => 729,  1367 => 715,  1343 => 694,  1335 => 689,  1325 => 681,  1310 => 679,  1306 => 678,  1283 => 658,  1274 => 651,  1259 => 649,  1255 => 648,  1245 => 640,  1230 => 638,  1226 => 637,  1201 => 615,  1193 => 610,  1183 => 602,  1168 => 600,  1164 => 599,  1146 => 583,  1131 => 581,  1127 => 580,  1113 => 569,  1104 => 562,  1089 => 560,  1085 => 559,  1075 => 551,  1060 => 549,  1056 => 548,  1031 => 526,  1023 => 521,  1013 => 513,  998 => 511,  994 => 510,  976 => 494,  961 => 492,  957 => 491,  943 => 480,  934 => 473,  919 => 471,  915 => 470,  905 => 462,  890 => 460,  886 => 459,  861 => 437,  853 => 432,  843 => 424,  828 => 422,  824 => 421,  802 => 402,  790 => 392,  775 => 390,  771 => 389,  761 => 381,  746 => 379,  742 => 378,  716 => 355,  708 => 350,  690 => 334,  675 => 332,  671 => 331,  658 => 321,  650 => 316,  640 => 308,  625 => 306,  621 => 305,  601 => 288,  580 => 270,  570 => 262,  555 => 260,  551 => 259,  542 => 252,  536 => 250,  534 => 249,  524 => 241,  509 => 239,  505 => 238,  483 => 218,  468 => 216,  464 => 215,  451 => 207,  431 => 190,  422 => 183,  407 => 181,  403 => 180,  384 => 163,  369 => 161,  365 => 160,  352 => 149,  337 => 147,  333 => 146,  323 => 138,  308 => 136,  304 => 135,  294 => 127,  279 => 125,  275 => 124,  217 => 68,  202 => 66,  198 => 65,  185 => 54,  170 => 52,  166 => 51,  153 => 40,  138 => 38,  134 => 37,  124 => 29,  109 => 27,  105 => 26,  90 => 14,  86 => 13,  81 => 11,  76 => 8,  72 => 7,  65 => 5,  58 => 4,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@corePath/admin/partial/layout_logged_in.html.twig\" %}

{% block title %}{{ pluginName }} Settings{% endblock %}
{% block selected_page %}plugins{% endblock %}
{% block selected_sub_page %}plugin_manage{% endblock %}

{% block body %}
    <div class=\"row clearfix right_col\" role=\"main\">
        <div class=\"col_12\">
            <div class=\"widget clearfix\">
                <h2>{{ pluginName }} Settings</h2>
                <div class=\"widget_inside\">
                    {{ msg_page_notifications|raw }}
                    <form method=\"POST\" action=\"{{ ADMIN_WEB_ROOT }}/plugin/filepreviewer/settings\" name=\"pluginForm\" id=\"pluginForm\" autocomplete=\"off\" enctype=\"multipart/form-data\">
                        <div class=\"clearfix col_12\">
                            <div class=\"col_4\">
                                <h3>General Settings</h3>
                                <p>Whether the plugin is enable and other general settings.</p>
                            </div>
                            <div class=\"col_8 last\">
                                <div class=\"form\">
                                    <div class=\"clearfix\">
                                        <label>Plugin Enabled:</label>
                                        <div class=\"input\">
                                            <select name=\"plugin_enabled\" id=\"plugin_enabled\" class=\"medium validate[required]\">
                                                {% for k,yesNoOption in yesNoOptions %}
                                                    <option value=\"{{ k }}\"{% if plugin_enabled == k %} SELECTED{% endif %}>{{ yesNoOption }}</option>
                                                {% endfor %}
                                            </select>
                                        </div>
                                    </div>

                                    <div class=\"clearfix\">
                                        <label>Show File Details Outside of Account:</label>
                                        <div class=\"input\">
                                            <select name=\"show_file_details_outside_account\" id=\"show_file_details_outside_account\" class=\"medium validate[required]\">
                                                {% for k,yesNoOption in yesNoOptions %}
                                                    <option value=\"{{ k }}\"{% if show_file_details_outside_account == k %} SELECTED{% endif %}>{{ yesNoOption }}</option>
                                                {% endfor %}
                                            </select>
                                            <p class=\"text-muted\">
                                                If set to 'no', users will not see the file details page when visiting a download url. This would trigger a download of the file instead of previewing it. Useful if you don't want the details page but want to retain image thumbnails.
                                            </p>
                                        </div>
                                    </div>
                                    
                                    <div class=\"clearfix\">
                                        <label>Show Similar Files Thumbnails:</label>
                                        <div class=\"input\">
                                            <select name=\"show_similar_items\" id=\"show_similar_items\" class=\"medium validate[required]\">
                                                {% for k,yesNoOption in yesNoOptions %}
                                                    <option value=\"{{ k }}\"{% if show_similar_items == k %} SELECTED{% endif %}>{{ yesNoOption }}</option>
                                                {% endfor %}
                                            </select>
                                            <p class=\"text-muted\">
                                                If set to 'yes', a list of files within the same folder will be shown below the file preview. Shown for both logged in users and shared file urls.
                                            </p>
                                        </div>
                                    </div>
                                    
                                    <div class=\"clearfix\">
                                        <label>Allow Direct File Links:</label>
                                        <div class=\"input\">
                                            <select name=\"allow_direct_links\" id=\"allow_direct_links\" class=\"medium validate[required]\">
                                                {% for k,yesNoOption in yesNoOptions %}
                                                    <option value=\"{{ k }}\"{% if allow_direct_links == k %} SELECTED{% endif %}>{{ yesNoOption }}</option>
                                                {% endfor %}
                                            </select>
                                            <p class=\"text-muted\">
                                                If set to 'yes', a new direct file url will be available to users. This can be used by any user type to directly download a file. Useful for embedding videos in third party players.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <ul class=\"nav nav-tabs bordered\">
                            <li class=\"active\">
                                <a href=\"#images\" data-toggle=\"tab\" aria-expanded=\"true\">
                                    <span><i class=\"fa fa-photo\"></i></span>
                                    <span class=\"hidden-xs\">Images</span>
                                </a>
                            </li>
                            <li class=\"\">
                                <a href=\"#documents\" data-toggle=\"tab\" aria-expanded=\"false\">
                                    <span><i class=\"fa fa-file-word-o\"></i></span>
                                    <span class=\"hidden-xs\">Documents</span>
                                </a>
                            </li>
                            <li class=\"\">
                                <a href=\"#videos\" data-toggle=\"tab\" aria-expanded=\"false\">
                                    <span><i class=\"fa fa-video-camera\"></i></span>
                                    <span class=\"hidden-xs\">Videos</span>
                                </a>
                            </li>
                            <li class=\"\">
                                <a href=\"#audio\" data-toggle=\"tab\" aria-expanded=\"false\">
                                    <span><i class=\"fa fa-music\"></i></span>
                                    <span class=\"hidden-xs\">Audio</span>
                                </a>
                            </li>
                            <li class=\"\">
                                <a href=\"#text\" data-toggle=\"tab\" aria-expanded=\"false\">
                                    <span><i class=\"fa fa-file-text-o\"></i></span>
                                    <span class=\"hidden-xs\">Text/Code</span>
                                </a>
                            </li>
                        </ul>

                        <div class=\"tab-content\">
                            <div class=\"tab-pane active\" id=\"images\">
                                <div class=\"clearfix col_12\">
                                    <div class=\"col_4\">
                                        <h3>Image Preview Settings</h3>
                                        <p>Whether to enable image previews and thumbnails. If enabled, thumbnails will be shown while browsing files aswell as when you click to view a file.</p>
                                    </div>
                                    <div class=\"col_8 last\">
                                        <div class=\"form\">
                                            <div class=\"clearfix\">
                                                <label>Show Images:</label>
                                                <div class=\"input\">
                                                    <select name=\"enable_preview_image\" class=\"medium\">
                                                        {% for k,yesNoOption in yesNoOptions %}
                                                            <option value=\"{{ k }}\"{% if enable_preview_image == k %} SELECTED{% endif %}>{{ yesNoOption }}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                            </div>

                                            <div class=\"clearfix\">
                                                <label>Show Thumbnails:</label>
                                                <div class=\"input\">
                                                    <select name=\"preview_image_show_thumb\" class=\"medium\">
                                                        {% for k,yesNoOption in yesNoOptions %}
                                                            <option value=\"{{ k }}\"{% if preview_image_show_thumb == k %} SELECTED{% endif %}>{{ yesNoOption }}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                            </div>

                                            <div class=\"clearfix\">
                                                <label>Auto Rotate Images:</label>
                                                <div class=\"input\">
                                                    <select name=\"auto_rotate\" id=\"auto_rotate\" class=\"medium\">
                                                        {% for k,yesNoOption in yesNoOptions %}
                                                            <option value=\"{{ k }}\"{% if auto_rotate == k %} SELECTED{% endif %}>{{ yesNoOption }}</option>
                                                        {% endfor %}
                                                    </select>
                                                    <p class=\"text-muted\">
                                                        If set to 'yes', image previews will be automatically rotated the correct way up (based on EXIF data).
                                                    </p>
                                                </div>
                                            </div>

                                            <div class=\"clearfix\">
                                                <label>Show Resizing Opt:</label>
                                                <div class=\"input\">
                                                    <select name=\"show_download_sizes\" id=\"show_download_sizes\" class=\"medium validate[required]\">
                                                        {% for k,yesNoOption in yesNoOptions %}
                                                            <option value=\"{{ k }}\"{% if show_download_sizes == k %} SELECTED{% endif %}>{{ yesNoOption }}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"col_4\">
                                        <h3>Image Library</h3>
                                        <p>Which image library to use? GD is installed by default on most PHP installs and supports 4 images types (jpg, png, gif, bmp). Imagemagick can be installed as an additional PHP module, but can support <strong>over 200 image types</strong> (inc psd, ai, raw, mng and much more).</p>
                                    </div>
                                    <div class=\"col_8 last\">
                                        <div class=\"form\">
                                            <div class=\"clearfix\">
                                                <label>Choose Library:</label>
                                                <div class=\"input\">
                                                    <select name=\"image_library\" id=\"image_library\" class=\"xxlarge validate[required]\" onChange=\"showHideSupportedImages(false);
                                                            return false;\">
                                                        {% for k,libraryOption in libraryOptions %}
                                                            <option value=\"{{ k }}\"{% if image_library == k %} SELECTED{% endif %}>{{ libraryOption }}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                            </div>

                                            <div class=\"clearfix\">
                                                <label for=\"supported_image_types\">Supported Formats:</label>
                                                <div class=\"input\">
                                                    <textarea name=\"supported_image_types\" id=\"supported_image_types\" class=\"xxlarge\" style=\"height: 80px;\">{{ supported_image_types }}</textarea>
                                                    <p class=\"text-muted\">
                                                        Set the extensions above you want to auto-generate previews on. The extension must be listed in the 'available formats' below. It is not recommended to include video file types such as mp4.
                                                    </p>
                                                </div>
                                            </div>

                                            <div class=\"clearfix supportedTypesGd\">
                                                <label>Available Formats:</label>
                                                <div class=\"input\" style=\"padding-top: 5px;\">
                                                    <strong>Total 5:</strong><p class=\"text-muted\">jpg,jpeg,png,gif,wbmp (gif is static gif only)
                                                </div>
                                            </div>

                                            <div class=\"clearfix supportedTypesIm\">
                                                <label>Available Formats:</label>
                                                <div class=\"input\" style=\"padding-top: 5px; max-height: 160px; overflow: auto;\">
                                                    <strong>Total {{ formatsArr|length }}:</strong><p class=\"text-muted\">{{ formatsArr|join(',')|lower }}
                                                </div>
                                            </div>

                                            <div class=\"clearfix supportedTypesIm\">
                                                <label>Animate Thumbnails:</label>
                                                <div class=\"input\">
                                                    <select name=\"animate_gif_thumbnails\" id=\"animate_gif_thumbnails\" class=\"medium validate[required]\">
                                                        {% for k,yesNoOption in yesNoOptions %}
                                                            <option value=\"{{ k }}\"{% if animate_gif_thumbnails == k %} SELECTED{% endif %}>{{ yesNoOption }}</option>
                                                        {% endfor %}
                                                    </select>
                                                    <p class=\"text-muted\">
                                                        If set to 'yes', GIF image thumbnails with be resized as animated. Otherwise a static image will be used.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"col_4\">
                                        <h3>Watermark</h3>
                                        <p>Whether to overlay a watermark on the images. Watermark image should be a png file. If using transparency ensure it's at least 24bit for the best results.</p>
                                    </div>
                                    <div class=\"col_8 last\">
                                        <div class=\"form\">
                                            <div class=\"clearfix\">
                                                <label>Watermark Enabled:</label>
                                                <div class=\"input\">
                                                    <select name=\"watermark_enabled\" id=\"watermark_enabled\" class=\"medium validate[required]\" onChange=\"showHideWatermark();
                                                            return false;\">
                                                        {% for k,yesNoOption in yesNoOptions %}
                                                            <option value=\"{{ k }}\"{% if watermark_enabled == k %} SELECTED{% endif %}>{{ yesNoOption }}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                            </div>

                                            <div class=\"clearfix watermarkHiddenRow\">
                                                <label for=\"watermark_image\">Watermark PNG Image:</label>
                                                <div class=\"input\" style=\"padding-top: 2px;\">
                                                    <input type=\"file\" name=\"watermark_image\" id=\"watermark_image\"/>
                                                    {% if watermark_contents|length > 0 %}
                                                        <br/><img src=\"data:image/png;base64,{{ watermark_contents_base64 }}\" style=\"padding-top: 8px;\"/>
                                                    {% endif %}
                                                </div>
                                            </div>

                                            <div class=\"clearfix watermarkHiddenRow\">
                                                <label for=\"watermark_position\">Watermark Position:</label>
                                                <div class=\"input\" style=\"padding-top: 2px;\">
                                                    <select name=\"watermark_position\" id=\"watermark_position\" class=\"medium\">
                                                        {% for k,watermark_position_option in watermark_position_options %}
                                                            <option value=\"{{ k }}\"{% if watermark_position == k %} SELECTED{% endif %}>{{ watermark_position_option }}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                            </div>

                                            <div class=\"clearfix watermarkHiddenRow\">
                                                <label for=\"watermark_padding\">Watermark Padding:</label>
                                                <div class=\"input\">
                                                    <div class=\"input-group\" style=\"margin-bottom: 10px;\">
                                                        <input type=\"text\" name=\"watermark_padding\" id=\"watermark_padding\" class=\"small\" value=\"{{ watermark_padding }}\" placeholder=\"watermark padding px\"/>
                                                        <span class=\"input-group-addon\">px</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"clear\"></div>

                                    <div class=\"col_4\">
                                        <h3>Image Options</h3>
                                        <p>The preview image quality.</p>
                                    </div>
                                    <div class=\"col_8 last\">
                                        <div class=\"form\">
                                            <div class=\"clearfix\">
                                                <label>Preview Image Quality:</label>
                                                <div class=\"input\">
                                                    <input type=\"text\" name=\"image_quality\" id=\"image_quality\" class=\"small\" value=\"{{ image_quality }}\"/>
                                                    <p class=\"text-muted\">Between 1 (low quality) and 100 (best quality). Default is 90. The higher the quality the larger the filesize. This does not effect the downloaded file, only the preview/thumbnails.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"col_4\">
                                        <h3>Embedded Thumbnail Options</h3>
                                        <p>Size of externally embedded thumbnails and method of resizing. Thumbnails are used when link to the image from an external site.</p>
                                    </div>
                                    <div class=\"col_8 last\">
                                        <div class=\"form\">
                                            <div class=\"clearfix\">
                                                <label>Show Embedding Opt:</label>
                                                <div class=\"input\">
                                                    <select name=\"images_show_embedding\" id=\"images_show_embedding\" class=\"medium validate[required]\">
                                                        {% for k,yesNoOption in yesNoOptions %}
                                                            <option value=\"{{ k }}\"{% if images_show_embedding == k %} SELECTED{% endif %}>{{ yesNoOption }}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                            </div>
                                            <div class=\"clearfix\">
                                                <label>Max Thumbnail Size:</label>
                                                <div class=\"input\">
                                                    <div class=\"input-group\" style=\"margin-bottom: 10px;\">
                                                        <span class=\"input-group-addon\">Width</span>
                                                        <input type=\"text\" name=\"thumb_size_w\" id=\"thumb_size_w\" class=\"small\" value=\"{{ thumb_size_w }}\" placeholder=\"width\"/>
                                                        <span class=\"input-group-addon\">px</span>
                                                    </div>
                                                    <div class=\"input-group\">
                                                        <span class=\"input-group-addon\">Height</span>
                                                        <input type=\"text\" name=\"thumb_size_h\" id=\"thumb_size_h\" class=\"small\" value=\"{{ thumb_size_h }}\" placeholder=\"height\"/>
                                                        <span class=\"input-group-addon\">px</span>
                                                    </div>
                                                    <p class=\"text-muted\">The maximum size to create the thumbnail. Default is 180x150.</p>
                                                </div>
                                            </div>
                                            <div class=\"clearfix\">
                                                <label>Resize Method:</label>
                                                <div class=\"input\">
                                                    <select name=\"thumb_resize_method\" id=\"thumb_resize_method\" class=\"xxlarge validate[required]\">
                                                        {% for k,thumbResizeMethodOption in thumbResizeMethodOptions %}
                                                            <option value=\"{{ k }}\"{% if thumb_resize_method == k %} SELECTED{% endif %}>{{ thumbResizeMethodOption }}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"col_4\">
                                        <h3>Optional Background Thumbnail Creation</h3>
                                        <p>Thumbnails are created and cached as the images are requested via the user interface. You can however generate the cached thumbnails via an automated background task to improve the overall user experience. To enable this setup the following cron task.</p>
                                    </div>
                                    <div class=\"col_8 last\">
                                        <div class=\"form\">
                                            <div class=\"clearfix\">
                                                <div>
                                                    The cron script is located here:<br/><br/>
                                                    <code>
                                                        {{ DOC_ROOT }}/plugins/filepreviewer/tasks/background_thumbs.cron.php
                                                    </code>
                                                    <br/><br/>
                                                    To execute it, set it up on only main server as a cron task. It is not required on any file servers. This is the line for the crontab file:<br/><br/>
                                                    <code>
                                                        * * * * * php {{ DOC_ROOT }}/plugins/filepreviewer/tasks/background_thumbs.cron.php >> /dev/null 2>&1
                                                    </code>
                                                    <br/><br/>
                                                    See <a href=\"http://www.cyberciti.biz/faq/how-do-i-add-jobs-to-cron-under-linux-or-unix-oses/\" target=\"_blank\">here for more information</a> on executing scripts via a cron task.<br/><br/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class=\"tab-pane\" id=\"documents\">
                                <div class=\"clearfix col_12\">
                                    <div class=\"col_4\">
                                        <h3>Document Preview Settings</h3>
                                        <p>Whether to enable document previews. If enabled, the document will be shown using Google Docs after you click on the file. It's recommended you do not use the document previewer for sensitive or private files. By previewing documents via Google Docs are you agreeing to their <a href=\"https://tools.google.com/dlpage/res/webmmf/en/eula.html\" target=\"_blank\">terms and conditions</a>.</p>
                                    </div>
                                    <div class=\"col_8 last\">
                                        <div class=\"form\">
                                            <div class=\"clearfix\">
                                                <label>Show Documents:</label>
                                                <div class=\"input\">
                                                    <select name=\"enable_preview_document\" class=\"medium\">
                                                        {% for k,yesNoOption in yesNoOptions %}
                                                            <option value=\"{{ k }}\"{% if enable_preview_document == k %} SELECTED{% endif %}>{{ yesNoOption }}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                            </div>

                                            <div class=\"clearfix\">
                                                <label>Show PDF Thumbnails:</label>
                                                <div class=\"input\">
                                                    <select name=\"preview_document_pdf_thumbs\" class=\"medium\">
                                                        {% for k,yesNoOption in yesNoOptions %}
                                                            <option value=\"{{ k }}\"{% if preview_document_pdf_thumbs == k %} SELECTED{% endif %}>{{ yesNoOption }}</option>
                                                        {% endfor %}
                                                    </select>
                                                    <p class=\"text-muted\">
                                                        Requires ImageMagick within PHP. Please contact your host to enable this.
                                                    </p>
                                                </div>
                                            </div>

                                            <div class=\"clearfix\">
                                                <label>File Extensions:</label>
                                                <div class=\"input\">
                                                    <input type=\"text\" name=\"preview_document_ext\" class=\"xxlarge\" value=\"{{ preview_document_ext }}\"/>
                                                    <p class=\"text-muted\">
                                                        Default: doc,docx,xls,xlsx,ppt,pptx,pdf,pages,ai,psd,tiff,dxf,svg,eps,ps,ttf,otf,xps
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"col_4\">
                                        <h3>Other Options</h3>
                                        <p>Whether to show embed code and related options.</p>
                                    </div>
                                    <div class=\"col_8 last\">
                                        <div class=\"form\">
                                            <div class=\"clearfix\">
                                                <label>Show Embed Code:</label>
                                                <div class=\"input\">
                                                    <select name=\"documents_show_embedding\" id=\"documents_show_embedding\" class=\"medium\">
                                                        {% for k,yesNoOption in yesNoOptions %}
                                                            <option value=\"{{ k }}\"{% if documents_show_embedding == k %} SELECTED{% endif %}>{{ yesNoOption }}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                            </div>
                                            <div class=\"clearfix\">
                                                <label>Embedded Size:</label>
                                                <div class=\"input\">
                                                    <div class=\"input-group\" style=\"margin-bottom: 10px;\">
                                                        <span class=\"input-group-addon\">Width</span>
                                                        <input type=\"text\" name=\"documents_embed_document_size_w\" id=\"documents_embed_document_size_w\" class=\"small\" value=\"{{ documents_embed_document_size_w }}\" placeholder=\"width\"/>
                                                        <span class=\"input-group-addon\">px</span>
                                                    </div>
                                                    <div class=\"input-group\">
                                                        <span class=\"input-group-addon\">Height</span>
                                                        <input type=\"text\" name=\"documents_embed_document_size_h\" id=\"documents_embed_document_size_h\" class=\"small\" value=\"{{ documents_embed_document_size_h }}\" placeholder=\"height\"/>
                                                        <span class=\"input-group-addon\">px</span>
                                                    </div>
                                                    <p class=\"text-muted\">This is the size of the iframe and hence document when embedded on an external site.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"tab-pane\" id=\"videos\">
                                <div class=\"clearfix col_12\">
                                    <div class=\"col_4\">
                                        <h3>Video Preview Settings</h3>
                                        <p>Whether to enable video previews. If enabled, the video will be shown after you click on the file.</p>
                                    </div>
                                    <div class=\"col_8 last\">
                                        <div class=\"form\">
                                            <div class=\"clearfix\">
                                                <label>Play Videos:</label>
                                                <div class=\"input\">
                                                    <select name=\"enable_preview_video\" class=\"medium\">
                                                        {% for k,yesNoOption in yesNoOptions %}
                                                            <option value=\"{{ k }}\"{% if enable_preview_video == k %} SELECTED{% endif %}>{{ yesNoOption }}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                            </div>
                                                    
                                            <div class=\"clearfix filepreviewer_video_player\">
                                                <label>Video Player:</label>
                                                <div class=\"input\">
                                                    <select name=\"preview_video_player\" class=\"medium\">
                                                        {% for k,videoPlayer in videoPlayers %}
                                                            <option value=\"{{ k }}\"{% if preview_video_player == k %} SELECTED{% endif %}>{{ videoPlayer }}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                            </div>

                                            <div class=\"clearfix\">
                                                <label>File Extensions:</label>
                                                <div class=\"input\">
                                                    <input type=\"text\" name=\"preview_video_ext\" class=\"xxlarge\" value=\"{{ preview_video_ext }}\"/>
                                                    <p class=\"text-muted\">
                                                        Default: mp4,flv,ogg
                                                    </p>
                                                </div>
                                            </div>
                                            
                                            <div class=\"clearfix\">
                                                <label>Autoplay Videos:</label>
                                                <div class=\"input\">
                                                    <select name=\"videos_autoplay\" id=\"videos_autoplay\" class=\"medium\">
                                                        {% for k,yesNoOption in yesNoOptions %}
                                                            <option value=\"{{ k }}\"{% if videos_autoplay == k %} SELECTED{% endif %}>{{ yesNoOption }}</option>
                                                        {% endfor %}
                                                    </select>
                                                    <p class=\"text-muted\">This is browser dependant and may not always be supported. In addition, autoplayed videos are initially muted to adhere to browser autoplay policies.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col_4\">
                                        <h3>Other Options</h3>
                                        <p>Whether to show embed code and related options.</p>
                                    </div>
                                    <div class=\"col_8 last\">
                                        <div class=\"form\">
                                            <div class=\"clearfix\">
                                                <label>Show Embed Code:</label>
                                                <div class=\"input\">
                                                    <select name=\"videos_show_embedding\" id=\"videos_show_embedding\" class=\"medium\">
                                                        {% for k,yesNoOption in yesNoOptions %}
                                                            <option value=\"{{ k }}\"{% if videos_show_embedding == k %} SELECTED{% endif %}>{{ yesNoOption }}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                            </div>
                                            <div class=\"clearfix\">
                                                <label>Embedded Size:</label>
                                                <div class=\"input\">
                                                    <div class=\"input-group\" style=\"margin-bottom: 10px;\">
                                                        <span class=\"input-group-addon\">Width</span>
                                                        <input type=\"text\" name=\"videos_embed_size_w\" id=\"videos_embed_size_w\" class=\"small\" value=\"{{ videos_embed_size_w }}\" placeholder=\"width\"/>
                                                        <span class=\"input-group-addon\">px</span>
                                                    </div>
                                                    <div class=\"input-group\">
                                                        <span class=\"input-group-addon\">Height</span>
                                                        <input type=\"text\" name=\"videos_embed_size_h\" id=\"videos_embed_size_h\" class=\"small\" value=\"{{ videos_embed_size_h }}\" placeholder=\"height\"/>
                                                        <span class=\"input-group-addon\">px</span>
                                                    </div>
                                                    <p class=\"text-muted\">This is the size of the video iframe when embedded on an external site.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"tab-pane\" id=\"audio\">
                                <div class=\"clearfix col_12\">
                                    <div class=\"col_4\">
                                        <h3>Audio Preview Settings</h3>
                                        <p>Whether to enable audio previews. If enabled, the audio will be played after you click on the file.</p>
                                    </div>
                                    <div class=\"col_8 last\">
                                        <div class=\"form\">
                                            <div class=\"clearfix\">
                                                <label>Play Audio:</label>
                                                <div class=\"input\">
                                                    <select name=\"enable_preview_audio\" class=\"medium\">
                                                        {% for k,yesNoOption in yesNoOptions %}
                                                            <option value=\"{{ k }}\"{% if enable_preview_audio == k %} SELECTED{% endif %}>{{ yesNoOption }}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                            </div>

                                            <div class=\"clearfix filepreviewer_audio_player\">
                                                <label>Audio Player:</label>
                                                <div class=\"input\">
                                                    <select name=\"preview_audio_player\" class=\"medium\">
                                                        {% for k,audioPlayer in audioPlayers %}
                                                            <option value=\"{{ k }}\"{% if preview_audio_player == k %} SELECTED{% endif %}>{{ audioPlayer }}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                            </div>

                                            <div class=\"clearfix\">
                                                <label>File Extensions:</label>
                                                <div class=\"input\">
                                                    <input type=\"text\" name=\"preview_audio_ext\" class=\"xxlarge\" value=\"{{ preview_audio_ext }}\"/>
                                                    <p class=\"text-muted\">
                                                        Default: mp3
                                                    </p>
                                                </div>
                                            </div>
                                            
                                            <div class=\"clearfix\">
                                                <label>Autoplay Audio:</label>
                                                <div class=\"input\">
                                                    <select name=\"audio_autoplay\" id=\"audio_autoplay\" class=\"medium\">
                                                        {% for k,yesNoOption in yesNoOptions %}
                                                            <option value=\"{{ k }}\"{% if audio_autoplay == k %} SELECTED{% endif %}>{{ yesNoOption }}</option>
                                                        {% endfor %}
                                                    </select>
                                                    <p class=\"text-muted\">This is browser dependant and may not always be supported.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col_4\">
                                        <h3>Other Options</h3>
                                        <p>Whether to show embed code and related options.</p>
                                    </div>
                                    <div class=\"col_8 last\">
                                        <div class=\"form\">
                                            <div class=\"clearfix\">
                                                <label>Show Embed Code:</label>
                                                <div class=\"input\">
                                                    <select name=\"audio_show_embedding\" id=\"audio_show_embedding\" class=\"medium\">
                                                        {% for k,yesNoOption in yesNoOptions %}
                                                            <option value=\"{{ k }}\"{% if audio_show_embedding == k %} SELECTED{% endif %}>{{ yesNoOption }}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                            </div>
                                            <div class=\"clearfix\">
                                                <label>Embedded Size:</label>
                                                <div class=\"input\">
                                                    <div class=\"input-group\" style=\"margin-bottom: 10px;\">
                                                        <span class=\"input-group-addon\">Width</span>
                                                        <input type=\"text\" name=\"audio_embed_size_w\" id=\"audio_embed_size_w\" class=\"small\" value=\"{{ audio_embed_size_w }}\" placeholder=\"width\"/>
                                                        <span class=\"input-group-addon\">px</span>
                                                    </div>
                                                    <div class=\"input-group\">
                                                        <span class=\"input-group-addon\">Height</span>
                                                        <input type=\"text\" name=\"audio_embed_size_h\" id=\"audio_embed_size_h\" class=\"small\" value=\"{{ audio_embed_size_h }}\" placeholder=\"height\"/>
                                                        <span class=\"input-group-addon\">px</span>
                                                    </div>
                                                    <p class=\"text-muted\">This is the size of the audio iframe when embedded on an external site.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"tab-pane\" id=\"text\">
                                <div class=\"clearfix col_12\">
                                    <div class=\"col_4\">
                                        <h3>Text File/Code Preview Settings</h3>
                                        <p>Whether to enable text file &amp; code previews. If enabled, the file will be shown directly on the page. Only files up to 2MB will be previewed for performance reasons.</p>
                                    </div>
                                    <div class=\"col_8 last\">
                                        <div class=\"form\">
                                            <div class=\"clearfix\">
                                                <label>Show File/Code Previews:</label>
                                                <div class=\"input\">
                                                    <select name=\"enable_preview_text\" class=\"medium\">
                                                        {% for k,yesNoOption in yesNoOptions %}
                                                            <option value=\"{{ k }}\"{% if enable_preview_text == k %} SELECTED{% endif %}>{{ yesNoOption }}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                            </div>

                                            <div class=\"clearfix\">
                                                <label>Use Code Syntax Highlighter:</label>
                                                <div class=\"input\">
                                                    <select name=\"syntax_highlight_text\" class=\"medium\">
                                                        {% for k,yesNoOption in yesNoOptions %}
                                                            <option value=\"{{ k }}\"{% if syntax_highlight_text == k %} SELECTED{% endif %}>{{ yesNoOption }}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                            </div>

                                            <div class=\"clearfix\">
                                                <label>File Extensions:</label>
                                                <div class=\"input\">
                                                    <input type=\"text\" name=\"preview_text_ext\" class=\"xxlarge\" value=\"{{ preview_text_ext }}\"/>
                                                    <p class=\"text-muted\">
                                                        Default: txt,php,html,htm,xhtml,js,css,srt,vtt,log,sql,xml,asp,aspx,cer,cfm,cgi,pl,jsp,py,rss,c,class,cpp,h,java,sh,vb,swift,cfg,ini,text
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- COMING SOON
                                    <div class=\"col_4\">
                                        <h3>Other Options</h3>
                                        <p>Whether to show embed code and related options.</p>
                                    </div>
                                    <div class=\"col_8 last\">
                                        <div class=\"form\">
                                            <div class=\"clearfix\">
                                                <label>Show Embed Code:</label>
                                                <div class=\"input\">
                                                    <select name=\"text_show_embedding\" id=\"text_show_embedding\" class=\"medium\">
                                                        {% for k,yesNoOption in yesNoOptions %}
                                                            <option value=\"{{ k }}\"{% if text_show_embedding == k %} SELECTED{% endif %}>{{ yesNoOption }}</option>
                                                        {% endfor %}
                                                    </select>
                                                </div>
                                            </div>
                                            <div class=\"clearfix\">
                                                <label>Embedded Size:</label>
                                                <div class=\"input\">
                                                    <div class=\"input-group\" style=\"margin-bottom: 10px;\">
                                                        <span class=\"input-group-addon\">Width</span>
                                                        <input type=\"text\" name=\"text_embed_document_size_w\" id=\"text_embed_document_size_w\" class=\"small\" value=\"{{ text_embed_document_size_w }}\" placeholder=\"width\"/>
                                                        <span class=\"input-group-addon\">px</span>
                                                    </div>
                                                    <div class=\"input-group\">
                                                        <span class=\"input-group-addon\">Height</span>
                                                        <input type=\"text\" name=\"text_embed_document_size_h\" id=\"text_embed_document_size_h\" class=\"small\" value=\"{{ text_embed_document_size_h }}\" placeholder=\"height\"/>
                                                        <span class=\"input-group-addon\">px</span>
                                                    </div>
                                                    <p class=\"text-muted\">This is the size of the iframe and hence text/code area when embedded on an external site.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    -->
                                </div>
                            </div>
                        </div>

                        <div class=\"clearfix col_12\">
                            <div class=\"col_4 adminResponsiveHide\">&nbsp;</div>
                            <div class=\"col_8 last\">
                                <div class=\"clearfix\">
                                    <div class=\"input no-label\">
                                        <input name=\"caching\" type=\"hidden\" value=\"1\"/>

                                        <input type=\"submit\" value=\"Submit\" class=\"button blue\">
                                        <input type=\"reset\" value=\"Cancel\" class=\"button grey\" onClick=\"window.location = '{{ ADMIN_WEB_ROOT }}/plugin_manage';\">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <input name=\"submitted\" type=\"hidden\" value=\"1\"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block head_js %}
    <script>
        \$(function () {
            showHideWatermark();
            showHideSupportedImages(true);
        });

        function showHideWatermark()
        {
            if (\$('#watermark_enabled').val() == '1')
            {
                \$('.watermarkHiddenRow').show();
            } else
            {
                \$('.watermarkHiddenRow').hide();
            }
        }

        function showHideSupportedImages(isFirst)
        {
            if (\$('#image_library').val() == 'gd')
            {
                \$('.supportedTypesIm').hide();
                \$('.supportedTypesGd').show();
                if (isFirst == false)
                {
                    \$('#supported_image_types').val(\"jpg,jpeg,png,gif,wbmp\");
                }
            } else
            {
                \$('.supportedTypesGd').hide();
                \$('.supportedTypesIm').show();
                if (isFirst == false)
                {
                    \$('#supported_image_types').val(\"{{ formatsArr|join(',')|lower }}\");
                }
            }
        }
    </script>
{% endblock %}", "admin/plugin_settings.html.twig", "C:\\laragon\\www\\ucloud\\plugins\\filepreviewer\\views\\admin\\plugin_settings.html.twig");
    }
}
