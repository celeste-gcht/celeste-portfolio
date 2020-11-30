<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" /> 
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
    <header id="cel-header" class="cel-header">
        <nav id="cel-nav" class="cel-header__nav">
            <div class="cel-header__nav__logo">
                <?php if(has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                    <?php else : ?>
                    <h2><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h2>
                 <?php endif; ?>
                <a href="<?php bloginfo('url'); ?>">
                    <p>Céleste Guichot <br>Web Designer</p>
                </a>
            </div>
                <?php
                    wp_nav_menu( array( 
                        'theme_location' => 'header', 
                        'container' => 'false') ); 
                ?>
        </nav>
    </header>
    <div class="main-content">