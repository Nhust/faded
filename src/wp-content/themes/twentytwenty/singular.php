<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content" class="singular container" role="main">
    <?php


    get_template_part('template-parts/content', get_post_type() . '-single');

    ?>

</main><!-- #site-content -->


<?php //get_footer(); ?>
