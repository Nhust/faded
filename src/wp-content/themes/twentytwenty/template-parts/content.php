<?php
/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<?php $perma = get_the_permalink(); ?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

    <?php


    ?>

    <div class="post-inner <?php echo is_page_template('templates/template-full-width.php') ? '' : 'thin'; ?> ">

        <div class="entry-content">
            <a href="<?php echo $perma ?>">
                <?php
                get_template_part('template-parts/featured-image');
                ?>
                <p class="title">

                    <?php the_title(); ?>
                </p>
            </a>
            <p class="author">Nhust</p>
            <p class="view">1.6M Views</p>
        </div>
    </div>


</article><!-- .post -->
