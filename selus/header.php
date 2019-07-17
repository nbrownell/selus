<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" />
    <?php wp_head(); ?>
</head>


<body <?php body_class('sls-body'); ?>>


<header class="sls-header">
    <a class="sls-logo" href="#">
        <img class="sls-logo-mark" alt="Selus" src="<?php echo get_template_directory_uri(); ?>/images/logo.png">
        <h1 class="sls-logo-word">
            Selus
        </h1>
    </a>
    <div class="sls-topnav-toggle">
        <div class="sls-topnav-toggle-bar">
    </div>
</header>