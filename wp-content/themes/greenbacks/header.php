<?php
/**
 * User: confluence
/**
 * The Header for the Berich Masonry Theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 **/
?>
<!DOCTYPE html>
<html class="no-js">
<head>
    <title>Berich Masonry - Masonry Experts serving all of Colorado's Front Range</title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head();
    $site_logo = berich_get_option( 'logo' );?>
</head>
<body class="side-menu-left">
    <a href="#" class="back-to-top" title="Back to top">
        <i class="icon-arrow-up"></i>
    </a>

<div class="site-wrapper animsition-off">
    <div class="main-side-menu left hidden-sm hidden-xs">
        <div class="sidebar-menu-inner">

            <div class="vertical-logo">
                <a href="#">
                    <img src="<?= $site_logo; ?>" alt="logo">
                </a>
            </div> <!-- /.vertical-logo -->
            <nav class="vertical-menu">
                <div class="collapse navbar-collapse" id="navbar">
                    <?php echo berich_nav(); ?>
                </div>
            </nav> <!-- /.verical-menu -->
        </div> <!-- /.sidebar-menu-inner -->
    </div> <!-- /.main-header-left -->
<!-- /Header Content -->
    <div class="main-wrapper"> <!-- closing div is in the footer.php -->