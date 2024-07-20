<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <link rel="profile" href="http://gmgp.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_head(); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
            href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
            rel="stylesheet">

    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/iconfont.css" type="text/css" />
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/stui_block.css" type="text/css" />
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/stui_block_color.css" type="text/css" />
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/stui_default.css" type="text/css" />

    <script type="text/javascript" src="<?= get_template_directory_uri() ?>/assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?= get_template_directory_uri() ?>/assets/js/stui_default.js"></script>
    <script type="text/javascript" src="<?= get_template_directory_uri() ?>/assets/js/stui_block.js"></script>
</head>
<body>
<?php include_once THEME_URL.'/templates/header.php' ?>
<?php if(get_option('ophim_is_ads') == 'on') { ?>
<div class="container">
    <div id="top-banner">
        <div id=top_addd style="text-align: center"></div>
    </div>
</div>
<?php } ?>
<div class="container">
    <div class="row">

