<?php
/**
 * The template for displaying the header
 *
 * @package cone
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <title><?php wp_title( ' - ', true, 'right' ); ?></title>

    <?php cone_og_meta_tags(); ?>

    <?php wp_head(); ?>
</head>
<body>
    <div class="cd-load-overlay"></div>
    <header>
        <div class="cd-max-width cd-header">
            <a href="<?php echo esc_url(home_url()); ?>">
                <img src="<?php the_field('site-logo', 'option') ; ?>">
            </a>
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => '' ) ); ?>
            <i class="material-icons cd-open-menu">menu</i>
        </div>
    </header>
    <div class="cd-mobile-menu">
        <img src="<?php the_field('site-logo', 'option') ; ?>">
        <i class="material-icons cd-close-menu">close</i>
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => '' ) ); ?>
    </div>

