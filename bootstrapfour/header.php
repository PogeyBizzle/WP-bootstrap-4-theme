<!DOCTYPE HTML>
<html <?php language_attributes(); ?> >
<head>

    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device=width, initial-scale=1" />
    <title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>" >
    <link rel="profile" href="http://gmpg.org/xfn/11" />


    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="container">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary rounded">
    <!-- Brand and toggle button -->
    <a class="navbar-brand" href="/">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- End -->
    <!-- Your website Links -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php
        wp_nav_menu( array(
                'theme_location'    => 'header-menu',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => '',
                'container_id'      => '',
                'menu_class'        => 'navbar-nav mr-auto',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
        );
        ?>
    </div>
    <!-- End -->
</nav>

 </div>