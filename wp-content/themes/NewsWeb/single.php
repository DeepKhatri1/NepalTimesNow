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
<main>
    <section class="single-section px-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ">
                    <div class="single-news">
                        <?php
                        while (have_posts()) :
                            the_post();
                            $id = get_the_ID();
                            $view_count = get_post_meta($id, 'view_count', 1);
                            $new_view_count = (int)get_post_meta($id, 'view_count', 1) + 1;
                            update_post_meta($id, 'view_count', $new_view_count);
                            $author_name = get_post_meta($id, 'author_name', 1);
                            $showimage = get_post_meta($id, 'show_feature_image_in_single_page', 1);
                            $featured_img_id1 = get_post_meta($id, '_thumbnail_id', 1);
                            $attachment1 = wp_get_attachment_image_src($featured_img_id1, 'large', true);
                            $author_id = get_the_author_meta('ID');
                            $secondary_category = get_field('secondary_category', $id);
                        ?>
                            <?php if ($secondary_category) : ?>
                                <div class="single-category">
                                    <?php echo get_cat_name($secondary_category); ?>
                                </div>
                            <?php endif; ?>
                            <div class="single-title">
                                <h1><?php the_title(); ?></h1>
                            </div>

                        <?php
                        endwhile;

                        wp_reset_query();
                        ?>


                        <?php
                        while (have_posts()) :
                            the_post();
                            global $singleLink;
                            global $singlepostcategories;
                            global $singlepostID;
                            $id = get_the_ID();
                            $singlepostID = $id;
                            $view_count = get_post_meta($id, 'view_count', 1);
                            $new_view_count = (int)get_post_meta($id, 'view_count', 1) + 1;
                            update_post_meta($id, 'view_count', $new_view_count);
                            $featured_img_id1 = get_post_meta($id, '_thumbnail_id', 1);
                            $attachment1 = wp_get_attachment_image_src($featured_img_id1, 'large', true);
                            $author_id = get_the_author_meta('ID');
                            $singleLink = get_the_permalink($id);

                        ?>
                            <div class="single-news-meta">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <ul>
                                            <li>

                                                <div class="authorimg">
                                                    <?php if ($author_name) : ?>
                                                        <img src="https://www.associazionecoach.com/wp-content/uploads/2019/03/coach.png">
                                                    <?php else : ?>
                                                        <?php if (get_field('author_image', 'user_' . $author_id)) : ?>
                                                            <a href="<?php echo get_author_posts_url($author_id); ?>" class="d-block">
                                                                <img src="<?php the_field('author_image', 'user_' . $author_id); ?>">
                                                            </a>
                                                        <?php else : ?>
                                                            <img
                                                            
                                                            src="https://www.associazionecoach.com/wp-content/uploads/2019/03/coach.png">
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                </div>

                                            </li>
                                            <li><span class="author">
                                                    <?php if ($author_name) {
                                                        echo $author_name;
                                                    } else {
                                                        echo "<a href='" . get_author_posts_url($author_id) . "'>" . get_the_author() . " </a>";
                                                    } ?></span><span class="date"> <?php echo postNepaliDate(date('Y'), date('m'), date('d')); ?> </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4 my-auto single-share d-flex align-items-center justify-content-end">
                                        <!-- <div class="view_count">
                                            <i class="fa-solid fa-eye"></i> <span><?php echo $view_count; ?></span>
                                        </div> -->
                                        <div class="sharethis-inline-share-buttons" style="z-index: 0;" ></div>

                                    </div>
                                </div>
                            </div>


                            <div class="single-featureimg">
                                <?php the_post_thumbnail('full'); ?>
                            </div>

                            <div class="wp-caption-text">
                                <?php
                                the_post_thumbnail_caption();
                                ?>
                            </div>

                            <div class="single-content">
                                <?php the_content(); ?>
                            </div>
                            <div class="clearfix"></div>


                            <div class="clearfix"></div>
                            <div class="single-contenttags">
                                <?php
                                $posttags = get_the_tags();
                                if ($posttags) {
                                    foreach ($posttags as $tag) {
                                ?>
                                        <a href="<?php echo get_tag_link($tag) ?>">#<?php echo $tag->name . ' '; ?></a>
                                <?php

                                    }
                                }
                                ?>
                            </div>


                        <?php
                        endwhile;

                        wp_reset_query();
                        ?>
                        <div class="clearfix"></div>

                        <div class="clearfix"></div>
                        <div class="single-comment">
                            <h1>तपाईको बिचार</h1>
                            <div class="fb-comments" data-href="<?php echo $singleLink;  ?>" data-width="100%" data-numposts="5"></div>
                        </div>

                        <div class="clearfix"></div>


                    </div>
                </div>
               
                <div class="col-lg-4 col-right mt-4">
      <div class="related-posts">
        <div class="related-posts-title mb-3 fs-22"><b>सम्बन्धित समाचार</b></div>

        <?php
        // Get the current post's category IDs
        $categories = get_the_category();
        $category_ids = array();
        foreach ($categories as $category) {
            $category_ids[] = $category->term_id;
        }

        $args = array(
          'posts_per_page' => 6, // You can adjust the number of related posts to display
          'post_status' => 'publish',
          'post__not_in' => array(get_the_ID()), // Exclude the current post
          'category__in' => $category_ids, // Show posts from the same categories
        );
        
        $related_query = new WP_Query($args);
        
        // Check if there are related posts
        if ($related_query->have_posts()) :
          while ($related_query->have_posts()) : $related_query->the_post();

        ?>
        <div class="related-post">
          <a href="<?php the_permalink(); ?>" class="itm-card itm-card-row d-flex align-items-center p-0">
            <div class="itm-card-img img-cover">
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" />
            </div>
            <div class="itm-card-body">
              <h6 class="fw-7 fs-17 lh-30 title-clr">
                <?php the_title(); ?>
              </h6>
            </div>
          </a>
        </div>
        <?php
              endwhile;
            endif;
            wp_reset_postdata();
            ?>
      </div>
    </div>

    
    

            </div>
        </div>
    </section>

    

</main>


<?php get_footer(); ?>