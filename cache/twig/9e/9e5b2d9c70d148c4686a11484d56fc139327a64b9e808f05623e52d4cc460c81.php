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

/* @corePath/admin/partial/layout_logged_in.html.twig */
class __TwigTemplate_d713b32aa2b6ebc9d1fe373330db842030be3c84e2efd04b4ef362b6627fc7c2 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head_css' => [$this, 'block_head_css'],
            'head_js' => [$this, 'block_head_js'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <title>";
        // line 10
        $this->displayBlock("title", $context, $blocks);
        echo " - Admin</title>

        <!-- Bootstrap -->
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["CORE_ASSETS_ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/vendors/bootstrap/dist/css/bootstrap.min.css\" rel=\"stylesheet\"/>
        <!-- Font Awesome -->
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["CORE_ASSETS_ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/vendors/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\"/>
        <!-- NProgress -->
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["CORE_ASSETS_ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/vendors/nprogress/nprogress.css\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["CORE_ASSETS_ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css\" rel=\"stylesheet\" />
        <!-- iCheck -->
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["CORE_ASSETS_ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/vendors/iCheck/skins/flat/green.css\" rel=\"stylesheet\"/>
        <!-- bootstrap-wysiwyg -->
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["CORE_ASSETS_ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/vendors/google-code-prettify/bin/prettify.min.css\" rel=\"stylesheet\"/>
        <!-- Select2 -->
        <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["CORE_ASSETS_ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/vendors/select2/dist/css/select2.min.css\" rel=\"stylesheet\"/>
        <!-- Switchery -->
        <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, ($context["CORE_ASSETS_ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/vendors/switchery/dist/switchery.min.css\" rel=\"stylesheet\"/>
        <!-- starrr -->
        <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, ($context["CORE_ASSETS_ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/vendors/starrr/dist/starrr.css\" rel=\"stylesheet\"/>
        <!-- bootstrap-daterangepicker -->
        <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["CORE_ASSETS_ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/vendors/bootstrap-daterangepicker/daterangepicker.css\" rel=\"stylesheet\"/>
        <!-- Datatables -->
        <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, ($context["CORE_ASSETS_ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, ($context["CORE_ASSETS_ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, ($context["CORE_ASSETS_ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 35
        echo twig_escape_filter($this->env, ($context["CORE_ASSETS_ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, ($context["CORE_ASSETS_ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css\" rel=\"stylesheet\"/>
        <!-- PNotify -->
        <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, ($context["CORE_ASSETS_ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/vendors/pnotify/dist/pnotify.css\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 39
        echo twig_escape_filter($this->env, ($context["CORE_ASSETS_ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/vendors/pnotify/dist/pnotify.buttons.css\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 40
        echo twig_escape_filter($this->env, ($context["CORE_ASSETS_ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/vendors/pnotify/dist/pnotify.nonblock.css\" rel=\"stylesheet\"/>

        <!-- Custom Theme Styles -->
        <link href=\"";
        // line 43
        echo twig_escape_filter($this->env, ($context["CORE_ASSETS_ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/css/responsive.css\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 44
        echo twig_escape_filter($this->env, ($context["CORE_ASSETS_ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/css/custom.css\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 45
        echo twig_escape_filter($this->env, ($context["CORE_ASSETS_ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/css/pre_v44_compat.css\" rel=\"stylesheet\"/>

        <!-- Colour Skin -->
        <!--<link href=\"";
        // line 48
        echo twig_escape_filter($this->env, ($context["CORE_ASSETS_ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/css/skins/brown.css\" rel=\"stylesheet\"/>-->

        <!-- append any theme admin css -->
        ";
        // line 51
        if ((twig_length_filter($this->env, ($context["adminThemeCss"] ?? null)) > 0)) {
            // line 52
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["adminThemeCss"] ?? null), "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        ";
        }
        // line 54
        echo "        
        ";
        // line 55
        $this->displayBlock('head_css', $context, $blocks);
        // line 56
        echo "
        <script type=\"text/javascript\">
            var ADMIN_WEB_ROOT = \"";
        // line 58
        echo twig_escape_filter($this->env, ($context["ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "\";
            var CORE_ASSETS_ADMIN_WEB_ROOT = \"";
        // line 59
        echo twig_escape_filter($this->env, ($context["CORE_ASSETS_ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "\";
        </script>

        <!-- jQuery -->
        <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, ($context["CORE_ASSETS_ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/vendors/jquery/dist/jquery.min.js\"></script>
        <!-- Bootstrap -->
        <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, ($context["CORE_ASSETS_ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/vendors/bootstrap/dist/js/bootstrap.min.js\"></script>
        <!-- Pre v4.4 compatibility, i.e. third party plugins -->
        <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, ($context["CORE_ASSETS_ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/js/pre_v44_compat.js\"></script>
        
        ";
        // line 69
        $this->displayBlock('head_js', $context, $blocks);
        // line 70
        echo "    </head>

    <body class=\"nav-md\">
        <div class=\"container body\">
            <div class=\"main_container\">
                <div class=\"col-md-3 left_col menu_fixed\">
                    <div class=\"left_col scroll-view\" style=\"width: 100%;\">
                        <div class=\"navbar nav_title\" style=\"border: 0;\">
                            <a href=\"";
        // line 78
        echo twig_escape_filter($this->env, ($context["ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "\" class=\"site_title\"><i class=\"fa fa-cogs\"></i> <span>";
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("site_admin", "site admin")), "html", null, true);
        echo "</span></a>
                        </div>
                        <div class=\"clearfix\"></div>
                        
                        <!-- menu profile quick info -->
                        <div class=\"profile\">
                            <div class=\"profile_pic\">
                                <img src=\"";
        // line 85
        echo twig_escape_filter($this->env, ($context["ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/ajax/account_view_avatar?userId=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Auth"] ?? null), "id", [], "any", false, false, false, 85), "html", null, true);
        echo "&width=44&height=44\" alt=\"...\" class=\"img-circle profile_img\" style=\"width: 56px; height: 56px;\">
                            </div>
                            <div class=\"profile_info\">
                                <span>Welcome,</span>
                                <h2>";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Auth"] ?? null), "getAccountScreenName", [], "method", false, false, false, 89), "html", null, true);
        echo "</h2>
                            </div>
                        </div>
                        <!-- /menu profile quick info -->

                        <br />

                        <!-- sidebar menu -->
                        <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">
                            <div class=\"menu_section\">
                                <h3>&nbsp;</h3>
                                <ul class=\"nav side-menu\">
                                    <li class=\"";
        // line 101
        echo (((        $this->renderBlock("selected_page", $context, $blocks) == "dashboard")) ? ("active") : (""));
        echo "\">
                                        <a href=\"";
        // line 102
        echo twig_escape_filter($this->env, ($context["ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/\"><i class=\"fa fa-home\"></i> ";
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_lower_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("dashboard", "dashboard"))), "html", null, true);
        echo "</a>
                                    </li>
                                    <li class=\"";
        // line 104
        echo ((((        $this->renderBlock("selected_page", $context, $blocks) == "files") || (        $this->renderBlock("selected_page", $context, $blocks) == "downloads"))) ? ("active") : (""));
        echo "\">
                                        <a><i class=\"fa fa-cloud-upload\"></i> ";
        // line 105
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_lower_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("files", "files"))), "html", null, true);
        echo " <span class=\"fa fa-chevron-down\"></span></a>
                                        <ul class=\"nav child_menu\">
                                            <li><a href=\"";
        // line 107
        echo twig_escape_filter($this->env, ($context["ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/file_manage\">";
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_lower_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("manage_files", "manage files"))), "html", null, true);
        echo "</a></li>
                                                ";
        // line 108
        if ((twig_get_attribute($this->env, $this->source, ($context["Auth"] ?? null), "hasAccessLevel", [0 => 20], "method", false, false, false, 108) == true)) {
            echo " 
                                                <li class=\"nav_active_downloads\"><a href=\"";
            // line 109
            echo twig_escape_filter($this->env, ($context["ADMIN_WEB_ROOT"] ?? null), "html", null, true);
            echo "/download_current\">";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_lower_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("active_downloads", "active downloads"))), "html", null, true);
            echo "</a></li>
                                                <li><a href=\"";
            // line 110
            echo twig_escape_filter($this->env, ($context["ADMIN_WEB_ROOT"] ?? null), "html", null, true);
            echo "/file_manage_action_queue\">";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_lower_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("action_queue", "action queue"))), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, ($context["totalPendingFileActions"] ?? null), "html", null, true);
            echo ")</a></li>
                                                ";
        }
        // line 112
        echo "                                            <li class=\"nav_abuse_reports\">
                                                <a>";
        // line 113
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_lower_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("abuse_reports", "abuse reports"))), "html", null, true);
        if ((($context["totalReports"] ?? null) > 0)) {
            echo " (";
            echo twig_escape_filter($this->env, ($context["totalReports"] ?? null), "html", null, true);
            echo ")";
        }
        echo "<span class=\"fa fa-chevron-down\"></span></a>
                                                <ul class=\"nav child_menu\">
                                                    <li><a href=\"";
        // line 115
        echo twig_escape_filter($this->env, ($context["ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/file_report_manage\">";
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_lower_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("manage_reports", "manage reports"))), "html", null, true);
        if ((($context["totalReports"] ?? null) > 0)) {
            echo " (";
            echo twig_escape_filter($this->env, ($context["totalReports"] ?? null), "html", null, true);
            echo ")";
        }
        echo "</a></li>
                                                    <li><a href=\"";
        // line 116
        echo twig_escape_filter($this->env, ($context["ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/file_report_manage_bulk_remove\">";
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_lower_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("bulk_remove_abuse_reports", "bulk remove"))), "html", null, true);
        echo "</a></li>
                                                </ul>
                                            </li>

                                            ";
        // line 120
        if ((twig_get_attribute($this->env, $this->source, ($context["Auth"] ?? null), "hasAccessLevel", [0 => 20], "method", false, false, false, 120) == true)) {
            echo " 
                                                <li><a href=\"";
            // line 121
            echo twig_escape_filter($this->env, ($context["ADMIN_WEB_ROOT"] ?? null), "html", null, true);
            echo "/plugin/fileimport/settings\">";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_lower_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("bulk_import", "bulk import"))), "html", null, true);
            echo "</a></li>
                                                ";
        }
        // line 123
        echo "                                        </ul>
                                    </li>
                                    ";
        // line 125
        if ((twig_get_attribute($this->env, $this->source, ($context["Auth"] ?? null), "hasAccessLevel", [0 => 20], "method", false, false, false, 125) == true)) {
            // line 126
            echo "                                        <li class=\"";
            echo (((            $this->renderBlock("selected_page", $context, $blocks) == "users")) ? ("active") : (""));
            echo "\">
                                            <a><i class=\"fa fa-users\"></i> ";
            // line 127
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_lower_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("users", "users"))), "html", null, true);
            echo " <span class=\"fa fa-chevron-down\"></span></a>
                                            <ul class=\"nav child_menu\">
                                                <li><a href=\"";
            // line 129
            echo twig_escape_filter($this->env, ($context["ADMIN_WEB_ROOT"] ?? null), "html", null, true);
            echo "/user_manage\">";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_lower_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("manage_users", "manage users"))), "html", null, true);
            echo "</a></li>
                                                <li><a href=\"";
            // line 130
            echo twig_escape_filter($this->env, ($context["ADMIN_WEB_ROOT"] ?? null), "html", null, true);
            echo "/user_add\">";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_lower_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("add_user", "add user"))), "html", null, true);
            echo "</a></li>
                                                <li class=\"nav_received_payments\">
                                                    <a>";
            // line 132
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_lower_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("received_payments", "received payments"))), "html", null, true);
            echo "<span class=\"fa fa-chevron-down\"></span></a>
                                                    <ul class=\"nav child_menu\">
                                                        <li><a href=\"";
            // line 134
            echo twig_escape_filter($this->env, ($context["ADMIN_WEB_ROOT"] ?? null), "html", null, true);
            echo "/payment_manage\">";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_lower_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("list_payments", "list payments"))), "html", null, true);
            echo "</a></li>
                                                        <li><a href=\"";
            // line 135
            echo twig_escape_filter($this->env, ($context["ADMIN_WEB_ROOT"] ?? null), "html", null, true);
            echo "/payment_manage?log=1\">";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_lower_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("log_payment", "log payment"))), "html", null, true);
            echo "</a></li>
                                                    </ul>
                                                </li>
                                                <li class=\"nav_subscriptions\"><a href=\"";
            // line 138
            echo twig_escape_filter($this->env, ($context["ADMIN_WEB_ROOT"] ?? null), "html", null, true);
            echo "/payment_subscription_manage\">";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_lower_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("manage_subscriptions", "manage subscriptions"))), "html", null, true);
            echo "</a></li>
                                            </ul>
                                        </li>
                                    ";
        }
        // line 142
        echo "                                    
                                    <li class=\"";
        // line 143
        echo (((        $this->renderBlock("selected_page", $context, $blocks) == "sharing")) ? ("active") : (""));
        echo "\">
                                        <a><i class=\"fa fa-share-alt\"></i> ";
        // line 144
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_lower_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("sharing", "sharing"))), "html", null, true);
        echo " <span class=\"fa fa-chevron-down\"></span></a>
                                        <ul class=\"nav child_menu\">
                                            <li><a href=\"";
        // line 146
        echo twig_escape_filter($this->env, ($context["ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/sharing_manage\">";
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_lower_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("manage_sharing", "manage sharing"))), "html", null, true);
        echo "</a></li>
                                            <li><a href=\"";
        // line 147
        echo twig_escape_filter($this->env, ($context["ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/sharing_manage?add=1\">";
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_lower_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("create_share", "create share"))), "html", null, true);
        echo "</a></li>
                                        </ul>
                                    </li>
                                    
                                    ";
        // line 151
        if ((twig_get_attribute($this->env, $this->source, ($context["Auth"] ?? null), "hasAccessLevel", [0 => 20], "method", false, false, false, 151) == true)) {
            // line 152
            echo "                                        <li class=\"";
            echo (((            $this->renderBlock("selected_page", $context, $blocks) == "file_servers")) ? ("active") : (""));
            echo "\">
                                            <a><i class=\"fa fa-hdd-o\"></i> ";
            // line 153
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_lower_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("file_servers", "file servers"))), "html", null, true);
            echo " <span class=\"fa fa-chevron-down\"></span></a>
                                            <ul class=\"nav child_menu\">
                                                <li><a href=\"";
            // line 155
            echo twig_escape_filter($this->env, ($context["ADMIN_WEB_ROOT"] ?? null), "html", null, true);
            echo "/server_manage\">";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_lower_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("manage_file_servers", "manage file servers"))), "html", null, true);
            echo "</a></li>
                                                <li><a href=\"";
            // line 156
            echo twig_escape_filter($this->env, ($context["ADMIN_WEB_ROOT"] ?? null), "html", null, true);
            echo "/server_manage?add=1\">";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_lower_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("add_file_server", "add file server"))), "html", null, true);
            echo "</a></li>
                                            </ul>
                                        </li>
                                    ";
        }
        // line 160
        echo "
                                    ";
        // line 161
        if ((twig_get_attribute($this->env, $this->source, ($context["Auth"] ?? null), "hasAccessLevel", [0 => 20], "method", false, false, false, 161) == true)) {
            // line 162
            echo "                                        <li class=\"nav_advertising ";
            echo (((            $this->renderBlock("selected_page", $context, $blocks) == "advertising")) ? ("active") : (""));
            echo "\">
                                            <a><i class=\"fa fa-bullhorn\"></i> ";
            // line 163
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_lower_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("advertising", "advertising"))), "html", null, true);
            echo " <span class=\"fa fa-chevron-down\"></span></a>
                                            <ul class=\"nav child_menu\">
                                                <li><a href=\"";
            // line 165
            echo twig_escape_filter($this->env, ($context["ADMIN_WEB_ROOT"] ?? null), "html", null, true);
            echo "/advertising/settings\">";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_lower_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("advertising_settings", "advertising settings"))), "html", null, true);
            echo "</a></li>
                                            </ul>
                                        </li>
                                        
                                        <li class=\"";
            // line 169
            echo (((            $this->renderBlock("selected_page", $context, $blocks) == "plugins")) ? ("active") : (""));
            echo " nav_plugins\">
                                            <a><i class=\"fa fa-plug\"></i> ";
            // line 170
            echo twig_escape_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("plugins", "Plugins"), "html", null, true);
            echo " <span class=\"fa fa-chevron-down\"></span></a>
                                            <ul class=\"nav child_menu\">
                                                <li>
                                                    <a href=\"";
            // line 173
            echo twig_escape_filter($this->env, ($context["ADMIN_WEB_ROOT"] ?? null), "html", null, true);
            echo "/plugin_manage\">";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_lower_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("manage_plugins", "manage plugins"))), "html", null, true);
            echo "</a>
                                                </li>
                                                <li>
                                                    <a>";
            // line 176
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_lower_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("plugin_settings", "plugin settings"))), "html", null, true);
            echo " <span class=\"fa fa-chevron-down\"></span></a>
                                                        ";
            // line 177
            if ((twig_length_filter($this->env, ($context["navPluginList"] ?? null)) > 0)) {
                // line 178
                echo "                                                        <ul class=\"nav child_menu\">
                                                            ";
                // line 179
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["navPluginList"] ?? null));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["pluginItem"]) {
                    // line 180
                    echo "                                                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 180) < 10)) {
                        // line 181
                        echo "                                                                    <li><a href=\"";
                        echo twig_escape_filter($this->env, ($context["ADMIN_WEB_ROOT"] ?? null), "html", null, true);
                        echo "/plugin/";
                        echo twig_escape_filter($this->env, (($__internal_compile_0 = $context["pluginItem"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["folder_name"] ?? null) : null), "html", null, true);
                        echo "/settings\">";
                        echo twig_escape_filter($this->env, (($__internal_compile_1 = $context["pluginItem"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["plugin_name"] ?? null) : null), "html", null, true);
                        echo "</a></li>
                                                                    ";
                    }
                    // line 183
                    echo "                                                                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pluginItem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 184
                echo "                                                            <li><a href=\"";
                echo twig_escape_filter($this->env, ($context["ADMIN_WEB_ROOT"] ?? null), "html", null, true);
                echo "/plugin_manage\">";
                echo twig_escape_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("more", "more...."), "html", null, true);
                echo "</a></li>
                                                        </ul>
                                                    ";
            }
            // line 187
            echo "                                                </li>
                                                <li><a href=\"";
            // line 188
            echo twig_escape_filter($this->env, ($context["ADMIN_WEB_ROOT"] ?? null), "html", null, true);
            echo "/plugin_manage_add\">";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_lower_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("add_plugin", "add plugin"))), "html", null, true);
            echo "</a></li>
                                                <li><a href=\"";
            // line 189
            echo twig_escape_filter($this->env, ($context["currentProductUrl"] ?? null), "html", null, true);
            echo "/plugins.html\" target=\"_blank\">";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_lower_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("get_plugin", "get plugins"))), "html", null, true);
            echo "</a></li>
                                            </ul>
                                        </li>

                                        <li class=\"";
            // line 193
            echo (((            $this->renderBlock("selected_page", $context, $blocks) == "themes")) ? ("active") : (""));
            echo "\">
                                            <a><i class=\"fa fa-photo\"></i> ";
            // line 194
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_lower_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("themes", "themes"))), "html", null, true);
            echo " <span class=\"fa fa-chevron-down\"></span></a>
                                            <ul class=\"nav child_menu\">
                                                <li><a href=\"";
            // line 196
            echo twig_escape_filter($this->env, ($context["ADMIN_WEB_ROOT"] ?? null), "html", null, true);
            echo "/theme_settings/";
            echo twig_escape_filter($this->env, ($context["SITE_CONFIG_SITE_THEME"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["currentThemeName"] ?? null), "html", null, true);
            echo "</a></li>
                                                <li><a href=\"";
            // line 197
            echo twig_escape_filter($this->env, ($context["ADMIN_WEB_ROOT"] ?? null), "html", null, true);
            echo "/theme_manage\">";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_lower_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("manage_themes", "manage themes"))), "html", null, true);
            echo "</a></li>
                                                <li><a href=\"";
            // line 198
            echo twig_escape_filter($this->env, ($context["ADMIN_WEB_ROOT"] ?? null), "html", null, true);
            echo "/theme_manage_add\">";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_lower_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("add_theme", "add theme"))), "html", null, true);
            echo "</a></li>
                                                <li><a href=\"";
            // line 199
            echo twig_escape_filter($this->env, ($context["currentProductUrl"] ?? null), "html", null, true);
            echo "/themes.html\" target=\"_blank\">";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_lower_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("get_themes", "get themes"))), "html", null, true);
            echo "</a></li>
                                            </ul>
                                        </li>

                                        <li class=\"";
            // line 203
            echo (((            $this->renderBlock("selected_page", $context, $blocks) == "api")) ? ("active") : (""));
            echo "\">
                                            <a><i class=\"fa fa-database\"></i> ";
            // line 204
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("api", "api")), "html", null, true);
            echo " <span class=\"fa fa-chevron-down\"></span></a>
                                            <ul class=\"nav child_menu\">
                                                <li><a href=\"";
            // line 206
            echo twig_escape_filter($this->env, ($context["ADMIN_WEB_ROOT"] ?? null), "html", null, true);
            echo "/setting_manage?filterByGroup=API\">";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_lower_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("api_settings", "settings"))), "html", null, true);
            echo "</a></li>
                                                <li><a href=\"";
            // line 207
            echo twig_escape_filter($this->env, ($context["ADMIN_WEB_ROOT"] ?? null), "html", null, true);
            echo "/api_documentation\">";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_lower_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("api_documentation", "documentation"))), "html", null, true);
            echo "</a></li>
                                                <li><a href=\"";
            // line 208
            echo twig_escape_filter($this->env, ($context["ADMIN_WEB_ROOT"] ?? null), "html", null, true);
            echo "/api_test_framework\">";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_lower_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("api_test_framework", "testing tool"))), "html", null, true);
            echo "</a></li>
                                            </ul>
                                        </li>

                                        <li class=\"";
            // line 212
            echo (((            $this->renderBlock("selected_page", $context, $blocks) == "configuration")) ? ("active") : (""));
            echo "\">
                                            <a><i class=\"fa fa-cog\"></i> ";
            // line 213
            echo twig_escape_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("site_configuration", "Site Configuration"), "html", null, true);
            echo " <span class=\"fa fa-chevron-down\"></span></a>
                                            <ul class=\"nav child_menu\">
                                                <li>
                                                    <a>";
            // line 216
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_lower_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("site_settings", "site settings"))), "html", null, true);
            echo " <span class=\"fa fa-chevron-down\"></span></a>
                                                    <ul class=\"nav child_menu\">
                                                        ";
            // line 218
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["navGroupDetails"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["navGroupDetail"]) {
                // line 219
                echo "                                                            <li><a href=\"";
                echo twig_escape_filter($this->env, ($context["ADMIN_WEB_ROOT"] ?? null), "html", null, true);
                echo "/setting_manage?filterByGroup=";
                echo twig_escape_filter($this->env, twig_urlencode_filter((($__internal_compile_2 = $context["navGroupDetail"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["config_group"] ?? null) : null)), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (($__internal_compile_3 = $context["navGroupDetail"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["config_group"] ?? null) : null), "html", null, true);
                echo "</a></li>
                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navGroupDetail'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 221
            echo "                                                    </ul>
                                                </li>
                                                <li>
                                                    <a>";
            // line 224
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_lower_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("user_settings", "user settings"))), "html", null, true);
            echo " <span class=\"fa fa-chevron-down\"></span></a>
                                                    <ul class=\"nav child_menu\">
                                                        <li class=\"nav_manage_download_pages\"><a href=\"";
            // line 226
            echo twig_escape_filter($this->env, ($context["ADMIN_WEB_ROOT"] ?? null), "html", null, true);
            echo "/download_page_manage\">";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_lower_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("download_pages", "download pages"))), "html", null, true);
            echo "</a></li>
                                                        <li><a href=\"";
            // line 227
            echo twig_escape_filter($this->env, ($context["ADMIN_WEB_ROOT"] ?? null), "html", null, true);
            echo "/account_package_manage\">";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_lower_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("account_packages", "account packages"))), "html", null, true);
            echo "</a></li>
                                                        <li><a href=\"";
            // line 228
            echo twig_escape_filter($this->env, ($context["ADMIN_WEB_ROOT"] ?? null), "html", null, true);
            echo "/banned_ip_manage\">";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_lower_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("banned_ips", "banned ips"))), "html", null, true);
            echo "</a></li>
                                                    </ul>
                                                </li>

                                                <li><a href=\"";
            // line 232
            echo twig_escape_filter($this->env, ($context["ADMIN_WEB_ROOT"] ?? null), "html", null, true);
            echo "/translation_manage\">";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_lower_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("translations", "translations"))), "html", null, true);
            echo "</a></li>

                                                <li>
                                                    <a>";
            // line 235
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_lower_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("system_tools", "system tools"))), "html", null, true);
            echo " <span class=\"fa fa-chevron-down\"></span></a>
                                                    <ul class=\"nav child_menu\">
                                                        <li><a href=\"";
            // line 237
            echo twig_escape_filter($this->env, ($context["ADMIN_WEB_ROOT"] ?? null), "html", null, true);
            echo "/log_file_viewer\">";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_lower_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("system_logs", "system logs"))), "html", null, true);
            echo "</a></li>
                                                        <li><a href=\"";
            // line 238
            echo twig_escape_filter($this->env, ($context["ADMIN_WEB_ROOT"] ?? null), "html", null, true);
            echo "/background_task_manage\">";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_lower_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("background_task_logs", "background task logs"))), "html", null, true);
            echo "</a></li>
                                                        <li><a href=\"";
            // line 239
            echo twig_escape_filter($this->env, ($context["ADMIN_WEB_ROOT"] ?? null), "html", null, true);
            echo "/database_browser?username=&db=";
            echo twig_escape_filter($this->env, ($context["_CONFIG_DB_NAME"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_lower_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("database_browser", "database browser"))), "html", null, true);
            echo "</a></li>
                                                        <li><a href=\"";
            // line 240
            echo twig_escape_filter($this->env, ($context["ADMIN_WEB_ROOT"] ?? null), "html", null, true);
            echo "/test_tools\">";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_lower_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("test_tools", "test tools"))), "html", null, true);
            echo "</a></li>
                                                        <li><a href=\"";
            // line 241
            echo twig_escape_filter($this->env, ($context["ADMIN_WEB_ROOT"] ?? null), "html", null, true);
            echo "/backup_manage\">";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_lower_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("backups", "backups"))), "html", null, true);
            echo "</a></li>
                                                        <li><a href=\"";
            // line 242
            echo twig_escape_filter($this->env, ($context["ADMIN_WEB_ROOT"] ?? null), "html", null, true);
            echo "/server_info\">";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_lower_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("php_info", "php info"))), "html", null, true);
            echo "</a></li>
                                                        <li><a href=\"";
            // line 243
            echo twig_escape_filter($this->env, ($context["ADMIN_WEB_ROOT"] ?? null), "html", null, true);
            echo "/support_info\">";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_lower_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("support_info", "support info"))), "html", null, true);
            echo "</a></li>
                                                        <li><a href=\"";
            // line 244
            echo twig_escape_filter($this->env, ($context["ADMIN_WEB_ROOT"] ?? null), "html", null, true);
            echo "/purge_application_cache\">";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_lower_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("purge_cache", "purge cache"))), "html", null, true);
            echo "</a></li>
                                                        <li><a href=\"";
            // line 245
            echo twig_escape_filter($this->env, ($context["ADMIN_WEB_ROOT"] ?? null), "html", null, true);
            echo "/system_update\">";
            echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_lower_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("system_update", "system update"))), "html", null, true);
            echo "</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    ";
        }
        // line 251
        echo "                                </ul>
                            </div>

                            ";
        // line 254
        if ((twig_get_attribute($this->env, $this->source, ($context["Auth"] ?? null), "hasAccessLevel", [0 => 20], "method", false, false, false, 254) == true)) {
            // line 255
            echo "                                ";
            $context["pluginNavigation"] = twig_get_attribute($this->env, $this->source, ($context["PluginHelper"] ?? null), "callHookRecursive", [0 => "adminPluginNav"], "method", false, false, false, 255);
            // line 256
            echo "                                ";
            if ((twig_length_filter($this->env, ($context["pluginNavigation"] ?? null)) > 0)) {
                // line 257
                echo "                                    <div class=\"menu_section\">
                                        <h3>";
                // line 258
                echo twig_escape_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("admin_plugin_pages", "Plugin Pages"), "html", null, true);
                echo "</h3>
                                        <ul class=\"nav side-menu\">
                                            ";
                // line 260
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, ($context["pluginNavigation"] ?? null)));
                foreach ($context['_seq'] as $context["pluginKey"] => $context["pluginNavigationItems"]) {
                    // line 261
                    echo "                                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["pluginNavigationItems"]);
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["pluginNavigationItem"]) {
                        // line 262
                        echo "                                                <li class=\"";
                        echo (((                        $this->renderBlock("selected_page", $context, $blocks) == (($__internal_compile_4 = $context["pluginNavigationItem"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["link_key"] ?? null) : null))) ? ("active") : (""));
                        echo "\">
                                                    <a href=\"";
                        // line 263
                        echo twig_escape_filter($this->env, (($__internal_compile_5 = $context["pluginNavigationItem"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["link_url"] ?? null) : null), "html", null, true);
                        echo "\"><i class=\"";
                        echo twig_escape_filter($this->env, (($__internal_compile_6 = $context["pluginNavigationItem"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["icon_class"] ?? null) : null), "html", null, true);
                        echo "\"></i> ";
                        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler((($__internal_compile_7 = $context["pluginNavigationItem"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["link_text"] ?? null) : null), (($__internal_compile_8 = $context["pluginNavigationItem"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["link_text"] ?? null) : null))), "html", null, true);
                        if ((twig_length_filter($this->env, (($__internal_compile_9 = $context["pluginNavigationItem"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["children"] ?? null) : null)) > 0)) {
                            echo " <span class=\"fa fa-chevron-down\"></span>";
                        }
                        echo "</a>
                                                    ";
                        // line 264
                        if ((twig_length_filter($this->env, (($__internal_compile_10 = $context["pluginNavigationItem"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["children"] ?? null) : null)) > 0)) {
                            // line 265
                            echo "                                                        <ul class=\"nav child_menu\">
                                                            ";
                            // line 266
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable((($__internal_compile_11 = $context["pluginNavigationItem"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["children"] ?? null) : null));
                            foreach ($context['_seq'] as $context["_key"] => $context["pluginNavigationChildItem"]) {
                                // line 267
                                echo "                                                                <li><a href=\"";
                                echo twig_escape_filter($this->env, ($context["WEB_ROOT"] ?? null), "html", null, true);
                                echo "/";
                                echo twig_escape_filter($this->env, (($__internal_compile_12 = $context["pluginNavigationChildItem"]) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["link_url"] ?? null) : null), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_lower_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler((($__internal_compile_13 = $context["pluginNavigationChildItem"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["link_text"] ?? null) : null), (($__internal_compile_14 = $context["pluginNavigationChildItem"]) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["link_text"] ?? null) : null)))), "html", null, true);
                                echo "</a></li>
                                                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pluginNavigationChildItem'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 269
                            echo "                                                        </ul>
                                                    ";
                        }
                        // line 271
                        echo "                                                </li>
                                                ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pluginNavigationItem'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 273
                    echo "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['pluginKey'], $context['pluginNavigationItems'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 274
                echo "                                        </ul>
                                    </div>
                                ";
            }
            // line 277
            echo "                            ";
        }
        // line 278
        echo "                        </div>
                        <!-- /sidebar menu -->

                        <!-- /menu footer buttons -->
                        <div class=\"sidebar-footer hidden-small\">
                            <a href=\"";
        // line 283
        echo twig_escape_filter($this->env, ($context["ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/setting_manage\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Site Settings\">
                                <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span>
                            </a>
                            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Toggle FullScreen\" onClick=\"toggleFullScreen();
                return false;\">
                                <span class=\"glyphicon glyphicon-fullscreen\" aria-hidden=\"true\"></span>
                            </a>
                            <a href=\"";
        // line 290
        echo twig_escape_filter($this->env, ($context["ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/user_edit/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Auth"] ?? null), "id", [], "any", false, false, false, 290), "html", null, true);
        echo "\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Manage Your Account\">
                                <span class=\"glyphicon glyphicon-lock\" aria-hidden=\"true\"></span>
                            </a>
                            <a href=\"";
        // line 293
        echo twig_escape_filter($this->env, ($context["ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/logout\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_lower_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("logout", "logout"))), "html", null, true);
        echo "\">
                                <span class=\"glyphicon glyphicon-off\" aria-hidden=\"true\"></span>
                            </a>
                        </div>
                        <!-- /menu footer buttons -->
                    </div>
                </div>

                <!-- top navigation -->
                <div class=\"top_nav\">
                    <div class=\"nav_menu\">
                        <nav>
                            <div class=\"nav toggle\">
                                <a id=\"menu_toggle\"><i class=\"fa fa-bars\"></i></a>
                            </div>

                            <ul class=\"nav navbar-nav navbar-right\">
                                <li class=\"\">
                                    <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                        <img src=\"";
        // line 312
        echo twig_escape_filter($this->env, ($context["ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/ajax/account_view_avatar?userId=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Auth"] ?? null), "id", [], "any", false, false, false, 312), "html", null, true);
        echo "&width=44&height=44\" alt=\"\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Auth"] ?? null), "getAccountScreenName", [], "method", false, false, false, 312), "html", null, true);
        echo "
                                        <span class=\" fa fa-angle-down\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu dropdown-usermenu pull-right\">
                                        <li><a href=\"";
        // line 316
        echo twig_escape_filter($this->env, ($context["ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/user_edit/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Auth"] ?? null), "id", [], "any", false, false, false, 316), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_lower_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("your_account_settings", "your account settings"))), "html", null, true);
        echo "</a></li>
                                        <li><a href=\"https://forum.mfscripts.com\" target=\"_blank\">";
        // line 317
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_lower_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("support", "support"))), "html", null, true);
        echo "</a></li>
                                        <li><a href=\"";
        // line 318
        echo twig_escape_filter($this->env, ($context["ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/logout\"><i class=\"fa fa-sign-out pull-right\"></i> ";
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_lower_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("logout", "logout"))), "html", null, true);
        echo "</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- /top navigation -->

            ";
        // line 327
        $this->displayBlock('body', $context, $blocks);
        // line 328
        echo "
            <footer>
                <div class=\"pull-right\">
                    Created by <a href=\"";
        // line 331
        echo twig_escape_filter($this->env, ($context["currentProductUrl"] ?? null), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, ($context["currentProductName"] ?? null), "html", null, true);
        echo "</a>, a <a href=\"https://mfscripts.com\" target=\"_blank\">MFScripts</a> company&nbsp;&nbsp;|&nbsp;&nbsp;v";
        echo twig_escape_filter($this->env, ($context["scriptVersion"] ?? null), "html", null, true);
        echo "&nbsp;&nbsp;|&nbsp;&nbsp;<a href=\"https://forum.mfscripts.com\" target=\"_blank\">";
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("support")), "html", null, true);
        echo "</a>
                </div>
                <div class=\"pull-left\">
                    ";
        // line 334
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->extensions['App\Services\TTwigExtension']->tHandler("copyright")), "html", null, true);
        echo " &copy; ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["SITE_CONFIG_SITE_NAME"] ?? null), "html", null, true);
        echo "
                </div>
                <div class=\"clearfix\"></div>
            </footer>

            <div id=\"genericModalContainer\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-lg\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\"><button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">×</span></button></div>
                        <div class=\"modal-body\"></div>
                        <div class=\"modal-footer\"></div>
                    </div>
                </div>
            </div>

            <!-- FastClick -->
            <script src=\"";
        // line 350
        echo twig_escape_filter($this->env, ($context["CORE_ASSETS_ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/vendors/fastclick/lib/fastclick.js\"></script>

            <!-- NProgress -->
            <script src=\"";
        // line 353
        echo twig_escape_filter($this->env, ($context["CORE_ASSETS_ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/vendors/nprogress/nprogress.js\"></script>
            <script src=\"";
        // line 354
        echo twig_escape_filter($this->env, ($context["CORE_ASSETS_ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js\"></script>

            <!-- iCheck -->
            <script src=\"";
        // line 357
        echo twig_escape_filter($this->env, ($context["CORE_ASSETS_ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/vendors/iCheck/icheck.min.js\"></script>

            <!-- PNotify -->
            <script src=\"";
        // line 360
        echo twig_escape_filter($this->env, ($context["CORE_ASSETS_ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/vendors/pnotify/dist/pnotify.js\"></script>
            <script src=\"";
        // line 361
        echo twig_escape_filter($this->env, ($context["CORE_ASSETS_ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/vendors/pnotify/dist/pnotify.buttons.js\"></script>
            <script src=\"";
        // line 362
        echo twig_escape_filter($this->env, ($context["CORE_ASSETS_ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/vendors/pnotify/dist/pnotify.nonblock.js\"></script>

            <!-- Datatables -->
            <script src=\"";
        // line 365
        echo twig_escape_filter($this->env, ($context["CORE_ASSETS_ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/vendors/datatables.net/js/jquery.dataTables.min.js\"></script>
            <script src=\"";
        // line 366
        echo twig_escape_filter($this->env, ($context["CORE_ASSETS_ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js\"></script>
            <script src=\"";
        // line 367
        echo twig_escape_filter($this->env, ($context["CORE_ASSETS_ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/vendors/datatables.net-buttons/js/dataTables.buttons.min.js\"></script>
            <script src=\"";
        // line 368
        echo twig_escape_filter($this->env, ($context["CORE_ASSETS_ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js\"></script>
            <script src=\"";
        // line 369
        echo twig_escape_filter($this->env, ($context["CORE_ASSETS_ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/vendors/datatables.net-buttons/js/buttons.flash.min.js\"></script>
            <script src=\"";
        // line 370
        echo twig_escape_filter($this->env, ($context["CORE_ASSETS_ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/vendors/datatables.net-buttons/js/buttons.html5.min.js\"></script>
            <script src=\"";
        // line 371
        echo twig_escape_filter($this->env, ($context["CORE_ASSETS_ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/vendors/datatables.net-buttons/js/buttons.print.min.js\"></script>
            <script src=\"";
        // line 372
        echo twig_escape_filter($this->env, ($context["CORE_ASSETS_ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js\"></script>
            <script src=\"";
        // line 373
        echo twig_escape_filter($this->env, ($context["CORE_ASSETS_ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js\"></script>
            <script src=\"";
        // line 374
        echo twig_escape_filter($this->env, ($context["CORE_ASSETS_ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/vendors/datatables.net-responsive/js/dataTables.responsive.min.js\"></script>
            <script src=\"";
        // line 375
        echo twig_escape_filter($this->env, ($context["CORE_ASSETS_ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js\"></script>
            <script src=\"";
        // line 376
        echo twig_escape_filter($this->env, ($context["CORE_ASSETS_ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/vendors/datatables.net-scroller/js/dataTables.scroller.min.js\"></script>
            <script src=\"";
        // line 377
        echo twig_escape_filter($this->env, ($context["CORE_ASSETS_ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/vendors/jszip/dist/jszip.min.js\"></script>
            <script src=\"";
        // line 378
        echo twig_escape_filter($this->env, ($context["CORE_ASSETS_ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/vendors/pdfmake/build/pdfmake.min.js\"></script>
            <script src=\"";
        // line 379
        echo twig_escape_filter($this->env, ($context["CORE_ASSETS_ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/vendors/pdfmake/build/vfs_fonts.js\"></script>

            <!-- jQuery Tags Input -->
            <script src=\"";
        // line 382
        echo twig_escape_filter($this->env, ($context["CORE_ASSETS_ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/vendors/jquery.tagsinput/src/jquery.tagsinput.js\"></script>

            <!-- Typeahead/autocomplete -->
            <script src=\"";
        // line 385
        echo twig_escape_filter($this->env, ($context["CORE_ASSETS_ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/vendors/typeahead/bootstrap3-typeahead.min.js\"></script>

            <!-- bootstrap-daterangepicker -->
            <script src=\"";
        // line 388
        echo twig_escape_filter($this->env, ($context["CORE_ASSETS_ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/vendors/moment/moment.js\"></script>
            <script src=\"";
        // line 389
        echo twig_escape_filter($this->env, ($context["CORE_ASSETS_ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/vendors/bootstrap-daterangepicker/daterangepicker.js\"></script>

            <!-- Custom Theme Scripts -->
            <script src=\"";
        // line 392
        echo twig_escape_filter($this->env, ($context["CORE_ASSETS_ADMIN_WEB_ROOT"] ?? null), "html", null, true);
        echo "/js/custom.js\"></script>

        </div>
    </div>
</body>
</html>
";
    }

    // line 55
    public function block_head_css($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 69
    public function block_head_js($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 327
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "@corePath/admin/partial/layout_logged_in.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1164 => 327,  1158 => 69,  1152 => 55,  1141 => 392,  1135 => 389,  1131 => 388,  1125 => 385,  1119 => 382,  1113 => 379,  1109 => 378,  1105 => 377,  1101 => 376,  1097 => 375,  1093 => 374,  1089 => 373,  1085 => 372,  1081 => 371,  1077 => 370,  1073 => 369,  1069 => 368,  1065 => 367,  1061 => 366,  1057 => 365,  1051 => 362,  1047 => 361,  1043 => 360,  1037 => 357,  1031 => 354,  1027 => 353,  1021 => 350,  998 => 334,  986 => 331,  981 => 328,  979 => 327,  965 => 318,  961 => 317,  953 => 316,  942 => 312,  918 => 293,  910 => 290,  900 => 283,  893 => 278,  890 => 277,  885 => 274,  879 => 273,  864 => 271,  860 => 269,  847 => 267,  843 => 266,  840 => 265,  838 => 264,  827 => 263,  822 => 262,  804 => 261,  800 => 260,  795 => 258,  792 => 257,  789 => 256,  786 => 255,  784 => 254,  779 => 251,  768 => 245,  762 => 244,  756 => 243,  750 => 242,  744 => 241,  738 => 240,  730 => 239,  724 => 238,  718 => 237,  713 => 235,  705 => 232,  696 => 228,  690 => 227,  684 => 226,  679 => 224,  674 => 221,  661 => 219,  657 => 218,  652 => 216,  646 => 213,  642 => 212,  633 => 208,  627 => 207,  621 => 206,  616 => 204,  612 => 203,  603 => 199,  597 => 198,  591 => 197,  583 => 196,  578 => 194,  574 => 193,  565 => 189,  559 => 188,  556 => 187,  547 => 184,  533 => 183,  523 => 181,  520 => 180,  503 => 179,  500 => 178,  498 => 177,  494 => 176,  486 => 173,  480 => 170,  476 => 169,  467 => 165,  462 => 163,  457 => 162,  455 => 161,  452 => 160,  443 => 156,  437 => 155,  432 => 153,  427 => 152,  425 => 151,  416 => 147,  410 => 146,  405 => 144,  401 => 143,  398 => 142,  389 => 138,  381 => 135,  375 => 134,  370 => 132,  363 => 130,  357 => 129,  352 => 127,  347 => 126,  345 => 125,  341 => 123,  334 => 121,  330 => 120,  321 => 116,  310 => 115,  300 => 113,  297 => 112,  288 => 110,  282 => 109,  278 => 108,  272 => 107,  267 => 105,  263 => 104,  256 => 102,  252 => 101,  237 => 89,  228 => 85,  216 => 78,  206 => 70,  204 => 69,  199 => 67,  194 => 65,  189 => 63,  182 => 59,  178 => 58,  174 => 56,  172 => 55,  169 => 54,  163 => 52,  161 => 51,  155 => 48,  149 => 45,  145 => 44,  141 => 43,  135 => 40,  131 => 39,  127 => 38,  122 => 36,  118 => 35,  114 => 34,  110 => 33,  106 => 32,  101 => 30,  96 => 28,  91 => 26,  86 => 24,  81 => 22,  76 => 20,  71 => 18,  67 => 17,  62 => 15,  57 => 13,  51 => 10,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <title>{{ block('title') }} - Admin</title>

        <!-- Bootstrap -->
        <link href=\"{{ CORE_ASSETS_ADMIN_WEB_ROOT }}/vendors/bootstrap/dist/css/bootstrap.min.css\" rel=\"stylesheet\"/>
        <!-- Font Awesome -->
        <link href=\"{{ CORE_ASSETS_ADMIN_WEB_ROOT }}/vendors/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\"/>
        <!-- NProgress -->
        <link href=\"{{ CORE_ASSETS_ADMIN_WEB_ROOT }}/vendors/nprogress/nprogress.css\" rel=\"stylesheet\"/>
        <link href=\"{{ CORE_ASSETS_ADMIN_WEB_ROOT }}/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css\" rel=\"stylesheet\" />
        <!-- iCheck -->
        <link href=\"{{ CORE_ASSETS_ADMIN_WEB_ROOT }}/vendors/iCheck/skins/flat/green.css\" rel=\"stylesheet\"/>
        <!-- bootstrap-wysiwyg -->
        <link href=\"{{ CORE_ASSETS_ADMIN_WEB_ROOT }}/vendors/google-code-prettify/bin/prettify.min.css\" rel=\"stylesheet\"/>
        <!-- Select2 -->
        <link href=\"{{ CORE_ASSETS_ADMIN_WEB_ROOT }}/vendors/select2/dist/css/select2.min.css\" rel=\"stylesheet\"/>
        <!-- Switchery -->
        <link href=\"{{ CORE_ASSETS_ADMIN_WEB_ROOT }}/vendors/switchery/dist/switchery.min.css\" rel=\"stylesheet\"/>
        <!-- starrr -->
        <link href=\"{{ CORE_ASSETS_ADMIN_WEB_ROOT }}/vendors/starrr/dist/starrr.css\" rel=\"stylesheet\"/>
        <!-- bootstrap-daterangepicker -->
        <link href=\"{{ CORE_ASSETS_ADMIN_WEB_ROOT }}/vendors/bootstrap-daterangepicker/daterangepicker.css\" rel=\"stylesheet\"/>
        <!-- Datatables -->
        <link href=\"{{ CORE_ASSETS_ADMIN_WEB_ROOT }}/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css\" rel=\"stylesheet\"/>
        <link href=\"{{ CORE_ASSETS_ADMIN_WEB_ROOT }}/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css\" rel=\"stylesheet\"/>
        <link href=\"{{ CORE_ASSETS_ADMIN_WEB_ROOT }}/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css\" rel=\"stylesheet\"/>
        <link href=\"{{ CORE_ASSETS_ADMIN_WEB_ROOT }}/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css\" rel=\"stylesheet\"/>
        <link href=\"{{ CORE_ASSETS_ADMIN_WEB_ROOT }}/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css\" rel=\"stylesheet\"/>
        <!-- PNotify -->
        <link href=\"{{ CORE_ASSETS_ADMIN_WEB_ROOT }}/vendors/pnotify/dist/pnotify.css\" rel=\"stylesheet\"/>
        <link href=\"{{ CORE_ASSETS_ADMIN_WEB_ROOT }}/vendors/pnotify/dist/pnotify.buttons.css\" rel=\"stylesheet\"/>
        <link href=\"{{ CORE_ASSETS_ADMIN_WEB_ROOT }}/vendors/pnotify/dist/pnotify.nonblock.css\" rel=\"stylesheet\"/>

        <!-- Custom Theme Styles -->
        <link href=\"{{ CORE_ASSETS_ADMIN_WEB_ROOT }}/css/responsive.css\" rel=\"stylesheet\"/>
        <link href=\"{{ CORE_ASSETS_ADMIN_WEB_ROOT }}/css/custom.css\" rel=\"stylesheet\"/>
        <link href=\"{{ CORE_ASSETS_ADMIN_WEB_ROOT }}/css/pre_v44_compat.css\" rel=\"stylesheet\"/>

        <!-- Colour Skin -->
        <!--<link href=\"{{ CORE_ASSETS_ADMIN_WEB_ROOT }}/css/skins/brown.css\" rel=\"stylesheet\"/>-->

        <!-- append any theme admin css -->
        {% if adminThemeCss|length > 0 %}
            <link rel=\"stylesheet\" href=\"{{ adminThemeCss }}\" type=\"text/css\" media=\"screen\" />
        {% endif %}
        
        {% block head_css %}{% endblock %}

        <script type=\"text/javascript\">
            var ADMIN_WEB_ROOT = \"{{ ADMIN_WEB_ROOT }}\";
            var CORE_ASSETS_ADMIN_WEB_ROOT = \"{{ CORE_ASSETS_ADMIN_WEB_ROOT }}\";
        </script>

        <!-- jQuery -->
        <script src=\"{{ CORE_ASSETS_ADMIN_WEB_ROOT }}/vendors/jquery/dist/jquery.min.js\"></script>
        <!-- Bootstrap -->
        <script src=\"{{ CORE_ASSETS_ADMIN_WEB_ROOT }}/vendors/bootstrap/dist/js/bootstrap.min.js\"></script>
        <!-- Pre v4.4 compatibility, i.e. third party plugins -->
        <script src=\"{{ CORE_ASSETS_ADMIN_WEB_ROOT }}/js/pre_v44_compat.js\"></script>
        
        {% block head_js %}{% endblock %}
    </head>

    <body class=\"nav-md\">
        <div class=\"container body\">
            <div class=\"main_container\">
                <div class=\"col-md-3 left_col menu_fixed\">
                    <div class=\"left_col scroll-view\" style=\"width: 100%;\">
                        <div class=\"navbar nav_title\" style=\"border: 0;\">
                            <a href=\"{{ ADMIN_WEB_ROOT }}\" class=\"site_title\"><i class=\"fa fa-cogs\"></i> <span>{{ t(\"site_admin\", \"site admin\")|title }}</span></a>
                        </div>
                        <div class=\"clearfix\"></div>
                        
                        <!-- menu profile quick info -->
                        <div class=\"profile\">
                            <div class=\"profile_pic\">
                                <img src=\"{{ ADMIN_WEB_ROOT }}/ajax/account_view_avatar?userId={{ Auth.id }}&width=44&height=44\" alt=\"...\" class=\"img-circle profile_img\" style=\"width: 56px; height: 56px;\">
                            </div>
                            <div class=\"profile_info\">
                                <span>Welcome,</span>
                                <h2>{{ Auth.getAccountScreenName() }}</h2>
                            </div>
                        </div>
                        <!-- /menu profile quick info -->

                        <br />

                        <!-- sidebar menu -->
                        <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">
                            <div class=\"menu_section\">
                                <h3>&nbsp;</h3>
                                <ul class=\"nav side-menu\">
                                    <li class=\"{{ block('selected_page') == 'dashboard'?'active':'' }}\">
                                        <a href=\"{{ ADMIN_WEB_ROOT }}/\"><i class=\"fa fa-home\"></i> {{ t('dashboard', 'dashboard')|lower|title }}</a>
                                    </li>
                                    <li class=\"{{ (block('selected_page') == 'files') or (block('selected_page') == 'downloads')?'active':'' }}\">
                                        <a><i class=\"fa fa-cloud-upload\"></i> {{ t('files', 'files')|lower|title }} <span class=\"fa fa-chevron-down\"></span></a>
                                        <ul class=\"nav child_menu\">
                                            <li><a href=\"{{ ADMIN_WEB_ROOT }}/file_manage\">{{ t('manage_files', 'manage files')|lower|title }}</a></li>
                                                {% if Auth.hasAccessLevel(20) == true %} 
                                                <li class=\"nav_active_downloads\"><a href=\"{{ ADMIN_WEB_ROOT }}/download_current\">{{ t('active_downloads', 'active downloads')|lower|title }}</a></li>
                                                <li><a href=\"{{ ADMIN_WEB_ROOT }}/file_manage_action_queue\">{{ t('action_queue', 'action queue')|lower|title }} ({{ totalPendingFileActions }})</a></li>
                                                {% endif %}
                                            <li class=\"nav_abuse_reports\">
                                                <a>{{ t('abuse_reports', 'abuse reports')|lower|title }}{% if totalReports > 0 %} ({{ totalReports }}){% endif %}<span class=\"fa fa-chevron-down\"></span></a>
                                                <ul class=\"nav child_menu\">
                                                    <li><a href=\"{{ ADMIN_WEB_ROOT }}/file_report_manage\">{{ t('manage_reports', 'manage reports')|lower|title }}{% if totalReports > 0 %} ({{ totalReports }}){% endif %}</a></li>
                                                    <li><a href=\"{{ ADMIN_WEB_ROOT }}/file_report_manage_bulk_remove\">{{ t('bulk_remove_abuse_reports', 'bulk remove')|lower|title }}</a></li>
                                                </ul>
                                            </li>

                                            {% if Auth.hasAccessLevel(20) == true %} 
                                                <li><a href=\"{{ ADMIN_WEB_ROOT }}/plugin/fileimport/settings\">{{ t('bulk_import', 'bulk import')|lower|title }}</a></li>
                                                {% endif %}
                                        </ul>
                                    </li>
                                    {% if Auth.hasAccessLevel(20) == true %}
                                        <li class=\"{{ (block('selected_page') == 'users')?'active':'' }}\">
                                            <a><i class=\"fa fa-users\"></i> {{ t('users', 'users')|lower|title }} <span class=\"fa fa-chevron-down\"></span></a>
                                            <ul class=\"nav child_menu\">
                                                <li><a href=\"{{ ADMIN_WEB_ROOT }}/user_manage\">{{ t('manage_users', 'manage users')|lower|title }}</a></li>
                                                <li><a href=\"{{ ADMIN_WEB_ROOT }}/user_add\">{{ t('add_user', 'add user')|lower|title }}</a></li>
                                                <li class=\"nav_received_payments\">
                                                    <a>{{ t('received_payments', 'received payments')|lower|title }}<span class=\"fa fa-chevron-down\"></span></a>
                                                    <ul class=\"nav child_menu\">
                                                        <li><a href=\"{{ ADMIN_WEB_ROOT }}/payment_manage\">{{ t('list_payments', 'list payments')|lower|title }}</a></li>
                                                        <li><a href=\"{{ ADMIN_WEB_ROOT }}/payment_manage?log=1\">{{ t('log_payment', 'log payment')|lower|title }}</a></li>
                                                    </ul>
                                                </li>
                                                <li class=\"nav_subscriptions\"><a href=\"{{ ADMIN_WEB_ROOT }}/payment_subscription_manage\">{{ t('manage_subscriptions', 'manage subscriptions')|lower|title }}</a></li>
                                            </ul>
                                        </li>
                                    {% endif %}
                                    
                                    <li class=\"{{ (block('selected_page') == 'sharing')?'active':'' }}\">
                                        <a><i class=\"fa fa-share-alt\"></i> {{ t('sharing', 'sharing')|lower|title }} <span class=\"fa fa-chevron-down\"></span></a>
                                        <ul class=\"nav child_menu\">
                                            <li><a href=\"{{ ADMIN_WEB_ROOT }}/sharing_manage\">{{ t('manage_sharing', 'manage sharing')|lower|title }}</a></li>
                                            <li><a href=\"{{ ADMIN_WEB_ROOT }}/sharing_manage?add=1\">{{ t('create_share', 'create share')|lower|title }}</a></li>
                                        </ul>
                                    </li>
                                    
                                    {% if Auth.hasAccessLevel(20) == true %}
                                        <li class=\"{{ (block('selected_page') == 'file_servers')?'active':'' }}\">
                                            <a><i class=\"fa fa-hdd-o\"></i> {{ t('file_servers', 'file servers')|lower|title }} <span class=\"fa fa-chevron-down\"></span></a>
                                            <ul class=\"nav child_menu\">
                                                <li><a href=\"{{ ADMIN_WEB_ROOT }}/server_manage\">{{ t('manage_file_servers', 'manage file servers')|lower|title }}</a></li>
                                                <li><a href=\"{{ ADMIN_WEB_ROOT }}/server_manage?add=1\">{{ t('add_file_server', 'add file server')|lower|title }}</a></li>
                                            </ul>
                                        </li>
                                    {% endif %}

                                    {% if Auth.hasAccessLevel(20) == true %}
                                        <li class=\"nav_advertising {{ (block('selected_page') == 'advertising')?'active':'' }}\">
                                            <a><i class=\"fa fa-bullhorn\"></i> {{ t('advertising', 'advertising')|lower|title }} <span class=\"fa fa-chevron-down\"></span></a>
                                            <ul class=\"nav child_menu\">
                                                <li><a href=\"{{ ADMIN_WEB_ROOT }}/advertising/settings\">{{ t('advertising_settings', 'advertising settings')|lower|title }}</a></li>
                                            </ul>
                                        </li>
                                        
                                        <li class=\"{{ (block('selected_page') == 'plugins')?'active':'' }} nav_plugins\">
                                            <a><i class=\"fa fa-plug\"></i> {{ t(\"plugins\", \"Plugins\") }} <span class=\"fa fa-chevron-down\"></span></a>
                                            <ul class=\"nav child_menu\">
                                                <li>
                                                    <a href=\"{{ ADMIN_WEB_ROOT }}/plugin_manage\">{{ t('manage_plugins', 'manage plugins')|lower|title }}</a>
                                                </li>
                                                <li>
                                                    <a>{{ t('plugin_settings', 'plugin settings')|lower|title }} <span class=\"fa fa-chevron-down\"></span></a>
                                                        {% if navPluginList|length > 0 %}
                                                        <ul class=\"nav child_menu\">
                                                            {% for pluginItem in navPluginList %}
                                                                {% if loop.index < 10 %}
                                                                    <li><a href=\"{{ ADMIN_WEB_ROOT }}/plugin/{{ pluginItem['folder_name'] }}/settings\">{{ pluginItem['plugin_name'] }}</a></li>
                                                                    {% endif %}
                                                                {% endfor %}
                                                            <li><a href=\"{{ ADMIN_WEB_ROOT }}/plugin_manage\">{{ t(\"more\", \"more....\") }}</a></li>
                                                        </ul>
                                                    {% endif %}
                                                </li>
                                                <li><a href=\"{{ ADMIN_WEB_ROOT }}/plugin_manage_add\">{{ t('add_plugin', 'add plugin')|lower|title }}</a></li>
                                                <li><a href=\"{{ currentProductUrl }}/plugins.html\" target=\"_blank\">{{ t('get_plugin', 'get plugins')|lower|title }}</a></li>
                                            </ul>
                                        </li>

                                        <li class=\"{{ (block('selected_page') == 'themes')?'active':'' }}\">
                                            <a><i class=\"fa fa-photo\"></i> {{ t('themes', 'themes')|lower|title }} <span class=\"fa fa-chevron-down\"></span></a>
                                            <ul class=\"nav child_menu\">
                                                <li><a href=\"{{ ADMIN_WEB_ROOT }}/theme_settings/{{ SITE_CONFIG_SITE_THEME }}\">{{ currentThemeName }}</a></li>
                                                <li><a href=\"{{ ADMIN_WEB_ROOT }}/theme_manage\">{{ t('manage_themes', 'manage themes')|lower|title }}</a></li>
                                                <li><a href=\"{{ ADMIN_WEB_ROOT }}/theme_manage_add\">{{ t('add_theme', 'add theme')|lower|title }}</a></li>
                                                <li><a href=\"{{ currentProductUrl }}/themes.html\" target=\"_blank\">{{ t('get_themes', 'get themes')|lower|title }}</a></li>
                                            </ul>
                                        </li>

                                        <li class=\"{{ (block('selected_page') == 'api')?'active':'' }}\">
                                            <a><i class=\"fa fa-database\"></i> {{ t('api', 'api')|upper }} <span class=\"fa fa-chevron-down\"></span></a>
                                            <ul class=\"nav child_menu\">
                                                <li><a href=\"{{ ADMIN_WEB_ROOT }}/setting_manage?filterByGroup=API\">{{ t('api_settings', 'settings')|lower|title }}</a></li>
                                                <li><a href=\"{{ ADMIN_WEB_ROOT }}/api_documentation\">{{ t('api_documentation', 'documentation')|lower|title }}</a></li>
                                                <li><a href=\"{{ ADMIN_WEB_ROOT }}/api_test_framework\">{{ t('api_test_framework', 'testing tool')|lower|title }}</a></li>
                                            </ul>
                                        </li>

                                        <li class=\"{{ (block('selected_page') == 'configuration')?'active':'' }}\">
                                            <a><i class=\"fa fa-cog\"></i> {{ t(\"site_configuration\", \"Site Configuration\") }} <span class=\"fa fa-chevron-down\"></span></a>
                                            <ul class=\"nav child_menu\">
                                                <li>
                                                    <a>{{ t('site_settings', 'site settings')|lower|title }} <span class=\"fa fa-chevron-down\"></span></a>
                                                    <ul class=\"nav child_menu\">
                                                        {% for navGroupDetail in navGroupDetails %}
                                                            <li><a href=\"{{ ADMIN_WEB_ROOT }}/setting_manage?filterByGroup={{ navGroupDetail['config_group']|url_encode }}\">{{ navGroupDetail['config_group'] }}</a></li>
                                                            {% endfor %}
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a>{{ t('user_settings', 'user settings')|lower|title }} <span class=\"fa fa-chevron-down\"></span></a>
                                                    <ul class=\"nav child_menu\">
                                                        <li class=\"nav_manage_download_pages\"><a href=\"{{ ADMIN_WEB_ROOT }}/download_page_manage\">{{ t('download_pages', 'download pages')|lower|title }}</a></li>
                                                        <li><a href=\"{{ ADMIN_WEB_ROOT }}/account_package_manage\">{{ t('account_packages', 'account packages')|lower|title }}</a></li>
                                                        <li><a href=\"{{ ADMIN_WEB_ROOT }}/banned_ip_manage\">{{ t('banned_ips', 'banned ips')|lower|title }}</a></li>
                                                    </ul>
                                                </li>

                                                <li><a href=\"{{ ADMIN_WEB_ROOT }}/translation_manage\">{{ t('translations', 'translations')|lower|title }}</a></li>

                                                <li>
                                                    <a>{{ t('system_tools', 'system tools')|lower|title }} <span class=\"fa fa-chevron-down\"></span></a>
                                                    <ul class=\"nav child_menu\">
                                                        <li><a href=\"{{ ADMIN_WEB_ROOT }}/log_file_viewer\">{{ t('system_logs', 'system logs')|lower|title }}</a></li>
                                                        <li><a href=\"{{ ADMIN_WEB_ROOT }}/background_task_manage\">{{ t('background_task_logs', 'background task logs')|lower|title }}</a></li>
                                                        <li><a href=\"{{ ADMIN_WEB_ROOT }}/database_browser?username=&db={{ _CONFIG_DB_NAME }}\">{{ t('database_browser', 'database browser')|lower|title }}</a></li>
                                                        <li><a href=\"{{ ADMIN_WEB_ROOT }}/test_tools\">{{ t('test_tools', 'test tools')|lower|title }}</a></li>
                                                        <li><a href=\"{{ ADMIN_WEB_ROOT }}/backup_manage\">{{ t('backups', 'backups')|lower|title }}</a></li>
                                                        <li><a href=\"{{ ADMIN_WEB_ROOT }}/server_info\">{{ t('php_info', 'php info')|lower|title }}</a></li>
                                                        <li><a href=\"{{ ADMIN_WEB_ROOT }}/support_info\">{{ t('support_info', 'support info')|lower|title }}</a></li>
                                                        <li><a href=\"{{ ADMIN_WEB_ROOT }}/purge_application_cache\">{{ t('purge_cache', 'purge cache')|lower|title }}</a></li>
                                                        <li><a href=\"{{ ADMIN_WEB_ROOT }}/system_update\">{{ t('system_update', 'system update')|lower|title }}</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    {% endif %}
                                </ul>
                            </div>

                            {% if Auth.hasAccessLevel(20) == true %}
                                {% set pluginNavigation = PluginHelper.callHookRecursive('adminPluginNav') %}
                                {% if pluginNavigation|length > 0 %}
                                    <div class=\"menu_section\">
                                        <h3>{{ t('admin_plugin_pages', 'Plugin Pages') }}</h3>
                                        <ul class=\"nav side-menu\">
                                            {% for pluginKey,pluginNavigationItems in pluginNavigation|sort %}
                                                {% for pluginNavigationItem in pluginNavigationItems %}
                                                <li class=\"{{ (block('selected_page') == pluginNavigationItem['link_key'])?'active':'' }}\">
                                                    <a href=\"{{ pluginNavigationItem['link_url'] }}\"><i class=\"{{ pluginNavigationItem['icon_class'] }}\"></i> {{ t(pluginNavigationItem['link_text'], pluginNavigationItem['link_text'])|title }}{% if pluginNavigationItem['children']|length > 0 %} <span class=\"fa fa-chevron-down\"></span>{% endif %}</a>
                                                    {% if pluginNavigationItem['children']|length > 0 %}
                                                        <ul class=\"nav child_menu\">
                                                            {% for pluginNavigationChildItem in pluginNavigationItem['children'] %}
                                                                <li><a href=\"{{ WEB_ROOT }}/{{ pluginNavigationChildItem['link_url'] }}\">{{ t(pluginNavigationChildItem['link_text'], pluginNavigationChildItem['link_text'])|lower|title }}</a></li>
                                                            {% endfor %}
                                                        </ul>
                                                    {% endif %}
                                                </li>
                                                {% endfor %}
                                            {% endfor %}
                                        </ul>
                                    </div>
                                {% endif %}
                            {% endif %}
                        </div>
                        <!-- /sidebar menu -->

                        <!-- /menu footer buttons -->
                        <div class=\"sidebar-footer hidden-small\">
                            <a href=\"{{ ADMIN_WEB_ROOT }}/setting_manage\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Site Settings\">
                                <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span>
                            </a>
                            <a href=\"#\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Toggle FullScreen\" onClick=\"toggleFullScreen();
                return false;\">
                                <span class=\"glyphicon glyphicon-fullscreen\" aria-hidden=\"true\"></span>
                            </a>
                            <a href=\"{{ ADMIN_WEB_ROOT }}/user_edit/{{ Auth.id }}\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Manage Your Account\">
                                <span class=\"glyphicon glyphicon-lock\" aria-hidden=\"true\"></span>
                            </a>
                            <a href=\"{{ ADMIN_WEB_ROOT }}/logout\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"{{ t('logout', 'logout')|lower|title }}\">
                                <span class=\"glyphicon glyphicon-off\" aria-hidden=\"true\"></span>
                            </a>
                        </div>
                        <!-- /menu footer buttons -->
                    </div>
                </div>

                <!-- top navigation -->
                <div class=\"top_nav\">
                    <div class=\"nav_menu\">
                        <nav>
                            <div class=\"nav toggle\">
                                <a id=\"menu_toggle\"><i class=\"fa fa-bars\"></i></a>
                            </div>

                            <ul class=\"nav navbar-nav navbar-right\">
                                <li class=\"\">
                                    <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                        <img src=\"{{ ADMIN_WEB_ROOT }}/ajax/account_view_avatar?userId={{ Auth.id }}&width=44&height=44\" alt=\"\">{{ Auth.getAccountScreenName() }}
                                        <span class=\" fa fa-angle-down\"></span>
                                    </a>
                                    <ul class=\"dropdown-menu dropdown-usermenu pull-right\">
                                        <li><a href=\"{{ ADMIN_WEB_ROOT }}/user_edit/{{ Auth.id }}\">{{ t('your_account_settings', 'your account settings')|lower|title }}</a></li>
                                        <li><a href=\"https://forum.mfscripts.com\" target=\"_blank\">{{ t('support', 'support')|lower|title }}</a></li>
                                        <li><a href=\"{{ ADMIN_WEB_ROOT }}/logout\"><i class=\"fa fa-sign-out pull-right\"></i> {{ t('logout', 'logout')|lower|title }}</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- /top navigation -->

            {% block body %}{% endblock %}

            <footer>
                <div class=\"pull-right\">
                    Created by <a href=\"{{ currentProductUrl }}\" target=\"_blank\">{{ currentProductName }}</a>, a <a href=\"https://mfscripts.com\" target=\"_blank\">MFScripts</a> company&nbsp;&nbsp;|&nbsp;&nbsp;v{{ scriptVersion }}&nbsp;&nbsp;|&nbsp;&nbsp;<a href=\"https://forum.mfscripts.com\" target=\"_blank\">{{ t(\"support\")|title }}</a>
                </div>
                <div class=\"pull-left\">
                    {{ t(\"copyright\")|title }} &copy; {{ \"now\"|date(\"Y\") }} {{ SITE_CONFIG_SITE_NAME }}
                </div>
                <div class=\"clearfix\"></div>
            </footer>

            <div id=\"genericModalContainer\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-lg\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\"><button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">×</span></button></div>
                        <div class=\"modal-body\"></div>
                        <div class=\"modal-footer\"></div>
                    </div>
                </div>
            </div>

            <!-- FastClick -->
            <script src=\"{{ CORE_ASSETS_ADMIN_WEB_ROOT }}/vendors/fastclick/lib/fastclick.js\"></script>

            <!-- NProgress -->
            <script src=\"{{ CORE_ASSETS_ADMIN_WEB_ROOT }}/vendors/nprogress/nprogress.js\"></script>
            <script src=\"{{ CORE_ASSETS_ADMIN_WEB_ROOT }}/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js\"></script>

            <!-- iCheck -->
            <script src=\"{{ CORE_ASSETS_ADMIN_WEB_ROOT }}/vendors/iCheck/icheck.min.js\"></script>

            <!-- PNotify -->
            <script src=\"{{ CORE_ASSETS_ADMIN_WEB_ROOT }}/vendors/pnotify/dist/pnotify.js\"></script>
            <script src=\"{{ CORE_ASSETS_ADMIN_WEB_ROOT }}/vendors/pnotify/dist/pnotify.buttons.js\"></script>
            <script src=\"{{ CORE_ASSETS_ADMIN_WEB_ROOT }}/vendors/pnotify/dist/pnotify.nonblock.js\"></script>

            <!-- Datatables -->
            <script src=\"{{ CORE_ASSETS_ADMIN_WEB_ROOT }}/vendors/datatables.net/js/jquery.dataTables.min.js\"></script>
            <script src=\"{{ CORE_ASSETS_ADMIN_WEB_ROOT }}/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js\"></script>
            <script src=\"{{ CORE_ASSETS_ADMIN_WEB_ROOT }}/vendors/datatables.net-buttons/js/dataTables.buttons.min.js\"></script>
            <script src=\"{{ CORE_ASSETS_ADMIN_WEB_ROOT }}/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js\"></script>
            <script src=\"{{ CORE_ASSETS_ADMIN_WEB_ROOT }}/vendors/datatables.net-buttons/js/buttons.flash.min.js\"></script>
            <script src=\"{{ CORE_ASSETS_ADMIN_WEB_ROOT }}/vendors/datatables.net-buttons/js/buttons.html5.min.js\"></script>
            <script src=\"{{ CORE_ASSETS_ADMIN_WEB_ROOT }}/vendors/datatables.net-buttons/js/buttons.print.min.js\"></script>
            <script src=\"{{ CORE_ASSETS_ADMIN_WEB_ROOT }}/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js\"></script>
            <script src=\"{{ CORE_ASSETS_ADMIN_WEB_ROOT }}/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js\"></script>
            <script src=\"{{ CORE_ASSETS_ADMIN_WEB_ROOT }}/vendors/datatables.net-responsive/js/dataTables.responsive.min.js\"></script>
            <script src=\"{{ CORE_ASSETS_ADMIN_WEB_ROOT }}/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js\"></script>
            <script src=\"{{ CORE_ASSETS_ADMIN_WEB_ROOT }}/vendors/datatables.net-scroller/js/dataTables.scroller.min.js\"></script>
            <script src=\"{{ CORE_ASSETS_ADMIN_WEB_ROOT }}/vendors/jszip/dist/jszip.min.js\"></script>
            <script src=\"{{ CORE_ASSETS_ADMIN_WEB_ROOT }}/vendors/pdfmake/build/pdfmake.min.js\"></script>
            <script src=\"{{ CORE_ASSETS_ADMIN_WEB_ROOT }}/vendors/pdfmake/build/vfs_fonts.js\"></script>

            <!-- jQuery Tags Input -->
            <script src=\"{{ CORE_ASSETS_ADMIN_WEB_ROOT }}/vendors/jquery.tagsinput/src/jquery.tagsinput.js\"></script>

            <!-- Typeahead/autocomplete -->
            <script src=\"{{ CORE_ASSETS_ADMIN_WEB_ROOT }}/vendors/typeahead/bootstrap3-typeahead.min.js\"></script>

            <!-- bootstrap-daterangepicker -->
            <script src=\"{{ CORE_ASSETS_ADMIN_WEB_ROOT }}/vendors/moment/moment.js\"></script>
            <script src=\"{{ CORE_ASSETS_ADMIN_WEB_ROOT }}/vendors/bootstrap-daterangepicker/daterangepicker.js\"></script>

            <!-- Custom Theme Scripts -->
            <script src=\"{{ CORE_ASSETS_ADMIN_WEB_ROOT }}/js/custom.js\"></script>

        </div>
    </div>
</body>
</html>
", "@corePath/admin/partial/layout_logged_in.html.twig", "C:\\laragon\\www\\ucloud\\app\\views\\admin\\partial\\layout_logged_in.html.twig");
    }
}
