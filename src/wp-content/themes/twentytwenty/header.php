<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>


<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>

</head>
<div class="custom-modal">
    <div class="container modal-container">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/modal-logo.png" alt="">
        <p class="my-modal-title">Avez-vous 2 IQ ?</p>
        <p class="modal-desc ">Fadedhub est une communauté qui offre du contenu réservé aux singes.</p>
            <p class="modal-desc ">
                Vous devez avoir 2IQ ou moins pour entrer.

        </p>
        <div class="row"></div>
        <div class="modal-cta">J'ai 2 IQ ou moins - Entrer</div>
    </div>
</div>
<body <?php body_class(); ?>>

<?php
wp_body_open();
?>
<div class="link-container container">
    <?php wp_nav_menu(array('menu' => 'topmenu')); ?>
</div>
<header id="site-header" class="header-footer-group" role="banner">

    <div class="header-inner section-inner">

        <div class="header-titles-wrapper container">

            <?php

            // Check whether the header search is activated in the customizer.
            $enable_header_search = get_theme_mod('enable_header_search', true);

            ?>
            <div class="header-titles">


                <?php
                // Site title or logo.
                twentytwenty_site_logo();

                // Site description.


                ?>

                <div id="my-nav-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div><!-- .header-titles -->
            <?php get_search_form(); ?>
            <div class="faded-btn import-btn"><a href=""> <span class="
glyphicon glyphicon-arrow-up"> </span>Importer </a></div>
            <div class="faded-btn premium-btn"><a href=""> <span class="glyphicon glyphicon-star"></span><p>Premium</p> </a>
            </div>
        </div><!-- .header-titles-wrapper -->

        <div class="header-navigation-wrapper">


        </div>

    </div>
    <div class="nav-container main-nav">
        <!--                    <li><a href="">Accueil</a><div class="bottom-line"></div></li>-->
        <?php
        wp_nav_menu(array('menu' => 'nav', 'menu_class' => 'container'))
        ?>
    </div>

</header><!-- #site-header -->

<?php
// Output the menu modal.
