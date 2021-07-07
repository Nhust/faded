<?php
/*
Template Name: SoundList
 */

get_header();
?>
    <div class="container soundboard-container">
        <?php
        $args = array('post_type' => 'sound', 'posts_per_page' => '-1');
        query_posts($args);


        if (have_posts()) {

            while (have_posts()) : the_post(); ?>
                <div class="col-md-3">
                    <?php
                    get_template_part('template-parts/content', get_post_type());
                    ?>
                </div>
            <?php
            endwhile;
        }
        ?>
    </div>
<?php
//get_footer();