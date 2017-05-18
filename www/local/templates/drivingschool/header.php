<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
$curl = $APPLICATION->GetCurPage(); //$_SERVER["REQUEST_URI"];
$side_bar_page = array(
//    "/new_groups/",
//    "/schedule/"
);

?>
<!DOCTYPE html>
<html lang="ru-RU" prefix="og: http://ogp.me/ns#">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?$APPLICATION->ShowTitle()?></title>
    <?$APPLICATION->ShowHead();?>
    <link rel="stylesheet" id="jquery-swiper-css" href="<?=SITE_TEMPLATE_PATH?>/css/swiper.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="contact-form-7-css" href="<?=SITE_TEMPLATE_PATH?>/css/styles.css" type="text/css" media="all">
    <link rel="stylesheet" id="font-awesome-four-css" href="<?=SITE_TEMPLATE_PATH?>/css/font-awesome.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="PageBuilderSandwich-css" href="<?=SITE_TEMPLATE_PATH?>/css/style.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="responsive-lightbox-swipebox-css" href="<?=SITE_TEMPLATE_PATH?>/css/swipebox.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="rs-plugin-settings-css" href="<?=SITE_TEMPLATE_PATH?>/css/settings.css" type="text/css" media="all">

    <link rel="stylesheet" id="wds_frontend-css" href="<?=SITE_TEMPLATE_PATH?>/css/wds_frontend.css" type="text/css" media="all">
    <link rel="stylesheet" id="wds_effects-css" href="<?=SITE_TEMPLATE_PATH?>/css/wds_effects.css" type="text/css" media="all">
    <link rel="stylesheet" id="wds_font-awesome-css" href="<?=SITE_TEMPLATE_PATH?>/css/font-awesome.css" type="text/css" media="all">
    <link rel="stylesheet" id="wp-polls-css" href="<?=SITE_TEMPLATE_PATH?>/css/polls-css.css" type="text/css" media="all">
    <!--<link rel="stylesheet" id="font-awesome-css" href="css/font-awesome.min(1).css" type="text/css" media="all">-->
    <link rel="stylesheet" id="material-icons-css" href="<?=SITE_TEMPLATE_PATH?>/css/material-icons.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="magnific-popup-css" href="<?=SITE_TEMPLATE_PATH?>/css/magnific-popup.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="waylard-theme-style-css" href="<?=SITE_TEMPLATE_PATH?>/css/style.css" type="text/css" media="all">
    <link rel="stylesheet" id="waylard-fonts-css" href="<?=SITE_TEMPLATE_PATH?>/css/css" type="text/css" media="all">
    <link rel="stylesheet" id="fw-ext-breadcrumbs-add-css-css" href="<?=SITE_TEMPLATE_PATH?>/css/style(1).css" type="text/css" media="all">
    <link rel="stylesheet" id="fw-ext-builder-frontend-grid-css" href="<?=SITE_TEMPLATE_PATH?>/css/frontend-grid.css" type="text/css" media="all">
    <link rel="stylesheet" id="fw-ext-forms-default-styles-css" href="<?=SITE_TEMPLATE_PATH?>/css/frontend.css" type="text/css" media="all">
    <link rel="stylesheet" id="jquery-swiper-css" href="<?=SITE_TEMPLATE_PATH?>/css/page.css" type="text/css" media="all">

    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery-migrate.min.js"></script>
<!--    <script type="text/javascript" src="--><?//=SITE_TEMPLATE_PATH?><!--/js/frontend-min.js"></script>-->
    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.swipebox.min.js"></script>
    <script type="text/javascript">
        /* <![CDATA[ */
        var rlArgs = {"script":"swipebox","selector":"lightbox","customEvents":"","activeGalleries":"1","animation":"1","hideCloseButtonOnMobile":"0","removeBarsOnMobile":"0","hideBars":"1","hideBarsDelay":"5000","videoMaxWidth":"1080","useSVG":"1","loopAtEnd":"0"};
        /* ]]> */
    </script>
    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/front.js"></script>
    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.mobile.js"></script>
    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/wds_frontend.js"></script>
    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/wds_frontend.js"></script>

</head>
<body class="home page-template-default page page-id-2 layout-fullwidth blog-default position-fullwidth sidebar-1-4">
<?$APPLICATION->ShowPanel();?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
    <header id="masthead" class="site-header centered" role="banner">
        <div class="top-panel">
            <div class="top-panel_inner container">
                <?$APPLICATION->IncludeFile(
                    SITE_DIR."local/include/header_top.php",
                    Array(),
                    Array("MODE"=>"php")
                ); ?>
            </div>
        </div><!-- .top-panel -->
        <div class="header-container">
            <div class="container">
                <div class="header-container_wrap">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 header_social-wrap"></div>

                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 header_branding-wrap">
                            <div class="site-branding">
                                <div class="site-logo">
                                    <?$APPLICATION->IncludeFile(
                                        SITE_DIR."local/include/logo.php",
                                        Array(),
                                        Array("MODE"=>"php")
                                    ); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4 col-xl-4 header_search-wrap">
                            <div class="top-panel__search">
                                <div class="search-form_wrap">
                                    <form role="search" method="get" class="search-form" action="/search/">
                                        <label>
                                            <span class="screen-reader-text">Search for:</span>
                                            <input type="search" class="search-form__field" placeholder="Найти …" value="" name="q" title="Search for:">
                                        </label>
                                        <button type="submit" class="search-form__submit btn btn-primary"><i class="fa fa-search"></i></button>
                                    </form>

                                    <span class="close-btn"><a href="#" class="close-btn-link"><i class="fa fa-close"></i></a></span>
                                    <span class="open-btn"><a href="#" class="open-btn-link btn btn-primary"><i class="fa fa-search"></i></a></span>
                                </div>
                            </div>
                        </div>

                        <nav id="site-navigation" class="main-navigation invert" role="navigation">
                            <button class="menu-toggle" aria-controls="main-menu" aria-expanded="false">
                                <span class="menu-toggle__menu"> menu </span>
                            </button>
                            <?$APPLICATION->IncludeComponent("bitrix:menu", "top", array(
                                    "ROOT_MENU_TYPE" => "top",
                                    "MAX_LEVEL" => "2",
                                    "CHILD_MENU_TYPE" => "left",
                                    "USE_EXT" => "Y",
                                    "MENU_CACHE_TYPE" => "A",
                                    "MENU_CACHE_TIME" => "36000000",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "MENU_CACHE_GET_VARS" => ""
                                ),
                                false,
                                array(
                                    "ACTIVE_COMPONENT" => "Y"
                                )
                            );?>
                        </nav><!-- #site-navigation -->
                    </div>
                </div>
            </div>
        </div><!-- .header-container -->
    </header><!-- #masthead -->
    <div id="content" class="site-content">
        <div class="container">
            <div class="row">
                <? if(in_array($curl, $side_bar_page)){?>
                    <div id="primary" class="col-xs-12 col-md-12 col-lg-12 col-xl-9">
                <?}else{?>
                    <div id="primary" class="col-xs-12 col-md-12">
                <?}?>

                        <main id="main" class="site-main" role="main">
                            <article id="post-42" class="post-42 post type-post status-publish format-standard hentry category-1 no-thumb">
                                <? if(!IsMainPage()){?>
                                    <header class="entry-header">
                                        <div class="post__cats"></div>
                                        <h1 class="entry-title"><?$APPLICATION->ShowTitle(false)?></h1>
                                        <div class="entry-meta">
                                            <span class="post__date"></span>
                                            <span class="post__tags"></span>
                                        </div><!-- .entry-meta -->
                                    </header><!-- .entry-header -->
                                <?}?>
                                <figure class="post-thumbnail"></figure><!-- .post-thumbnail -->
                                <div class="entry-content">
