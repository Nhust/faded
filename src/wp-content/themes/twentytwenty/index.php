<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();

?>


    <div id="site-content" class="container" role="main">
        <?php if (is_search()) {
            while (have_posts()) {
                the_post();
                if (get_post_type() == "post") {
                    $post = true;
                }
                if (get_post_type() == "sound") {
                    $sound = true;
                }

            }


            ?>

            <div class="col-md-9">
                <?php if ($post === true) { ?>
                    <div class="col-md-12">

                        <h1 class="head-title">Videos </h1>
                        <div class="post-container">

                            <?php


                            if (have_posts()) {


                                while (have_posts()) {
                                    the_post();
                                    if (get_post_type() == "post") { ?>

                                        <div class="col-md-4">
                                            <?php
                                            get_template_part('template-parts/content', get_post_type());
                                            ?>
                                        </div>
                                        <?php

                                    }

                                }
                            }

                            ?>
                        </div>
                    </div>
                <?php } ?>
                <?php if ($sound === true) { ?>
                    <div class="col-md-12">
                        <h1 class="head-title">Soundboard </h1>
                        <div class="post-container">

                            <?php

                            if (have_posts()) {


                                while (have_posts()) {
                                    the_post();
                                    if (get_post_type() == "sound") { ?>

                                        <div class="col-md-4">
                                            <?php
                                            get_template_part('template-parts/content', get_post_type());
                                            ?>
                                        </div>
                                        <?php

                                    }

                                }
                            }

                            ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="col-md-3 fakesms-container">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/pubzer.jpg" alt=""
                     class="pub-desktop ">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/is.jpg" alt="" class="pub-desktop ">
            </div>
            <?php


        } else { ?>
            <h1 class="head-title">Hot Videos - France</h1>
            <div class="col-md-9">
                <div class="post-container">
                    <?php


                    if (have_posts()) {


                        while (have_posts()) {
                            the_post();

                            ?>

                            <div class="col-md-4">
                                <?php
                                get_template_part('template-parts/content', get_post_type());
                                ?>
                            </div>


                            <?php


                        }

                    }
                    ?>
                </div>
            </div>
            <div class="col-md-3 fakesms-container">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/pubzer.jpg" alt=""
                     class="pub-desktop ">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/is.jpg" alt="" class="pub-desktop ">
            </div>
            <?php
        }

        ?>



<?php get_template_part('template-parts/pagination'); ?>

    </main>
<?php
get_footer();
