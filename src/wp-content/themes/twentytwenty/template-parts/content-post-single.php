<?php
$id = get_the_ID();
$video = get_post_meta($id, 'my_video', true);
$youtube = get_post_meta($id,'youtube_url',true);

global $wpdb;

$likes = $wpdb->get_results('SELECT * FROM ' . $wpdb->prefix . 'like where post_id = ' . $id . '  AND value="1" ');
$dislikes = $wpdb->get_results('SELECT * FROM ' . $wpdb->prefix . 'like where post_id = ' . $id . '  AND value="0" ');

$dislikes = count($dislikes);
$likes = count($likes);
//$like_value = $wpdb->get_results('SELECT * FROM '.$wpdb->prefix.'like where post_id = '.$id.'  AND customer_ip="'.$_SERVER['REMOTE_ADDR'].'" ');
$like_value = $wpdb->get_row('SELECT * FROM ' . $wpdb->prefix . 'like where post_id = ' . $id . '  AND customer_ip="109.12.192.9" ');
?>

<div class="video-container col-md-9">
    <?php
    if($youtube){?>

        <iframe  height="315" src="<?php echo $youtube ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    <?php }else{
    ?>

    <video controls>
        <source src="<?php echo $video ?>" type="video/mp4">
    </video>
    <?php
        }
    ?>
    <div class="title-container">
        <p><?php
            the_title(); ?>
        </p>
    </div>
    <div class="meta-container">
        <span class="like-count">
            <?php echo $likes; ?>
        </span>
        <span class="like-label">Like<?php echo ($likes > 1) ? 's' : ''; ?></span>


        <span class="dislike-count">
            <?php echo $dislikes; ?>
        </span>
        <span class="dislike-label">Dislike<?php echo ($dislikes > 1) ? 's' : ''; ?></span>

        <div class="like-btn like <?php echo ($like_value->value == 1) ? 'active' : '' ?>" data-like="like"
             data-id="<?php echo $id; ?>"></div>
        <p class="like-label">Aime</p>
        <div class="like-btn dislike <?php echo ($like_value->value == "0") ? 'active' : '' ?>" data-like="dislike"
             data-id="<?php echo $id; ?>"></div>
    </div>
    <div class="post-container videos">
        <?php
        $args = array(
            'posts_per_page' => '6',
            'post_type' => 'post',
            'orderby' => 'rand'

        );

        $custom_query = new WP_Query($args);


        while ($custom_query->have_posts()) {
            $custom_query->the_post();
            $id = get_the_ID();
            $img_src = get_the_post_thumbnail_url($id);
            ?>

            <div class="col-md-4 col-xs-10 col-xs-push-1 col-md-push-0">
                <a href="<?php echo get_permalink(); ?>" class="preview-link">
                    <img src="<?php echo $img_src ?>" alt="" class="preview-video">
                    <p class="preview-title"><?php echo get_the_title(); ?></p>
                </a>
            </div>
            <?php
        }

        ?>
    </div>


</div>
<div class="col-md-3 fakesms-container">
    <img src="<?php echo get_template_directory_uri() ?>/assets/images/pubzer.jpg" alt="" class=" pub-desktop">
    <img src="<?php echo get_template_directory_uri() ?>/assets/images/is.jpg" alt="" class=" pub-desktop">
</div>