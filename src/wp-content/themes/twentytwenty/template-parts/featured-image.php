<?php
/**
 * Displays the featured image
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

$id = get_the_ID();
$youtube = get_post_meta($id, 'youtube_url', true);

if (has_post_thumbnail() && !post_password_required() || $youtube ){

    $featured_media_inner_classes = '';

    // Make the featured media thinner on archive pages.
    if (!is_singular()) {
        $featured_media_inner_classes .= ' medium';
    }

    if ($youtube) {
        $youtube = str_replace('https://www.youtube.com/embed/', '', $youtube);
        $youtube_thumbnail = 'https://i1.ytimg.com/vi/' . $youtube . '/sddefault.jpg';

    }
    ?>


    <figure class="featured-media">

        <div class="featured-media-inner section-inner<?php echo $featured_media_inner_classes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static output ?>">

            <?php
            if ($youtube) {
                ?>
                <img src="<?php echo $youtube_thumbnail ?>" alt="" style="width:100%">
                <?php
            } else {
                the_post_thumbnail('large');
            }

            $caption = get_the_post_thumbnail_caption();

            if ($caption) {
                ?>

                <figcaption class="wp-caption-text"><?php echo esc_html($youtube_thumbnail); ?></figcaption>

                <?php
            }
            ?>

        </div><!-- .featured-media-inner -->

    </figure><!-- .featured-media -->

    <?php
}
