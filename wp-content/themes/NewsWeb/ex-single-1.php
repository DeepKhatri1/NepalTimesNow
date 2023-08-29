<?php get_header(); ?>


<div class="main-section container mt-5 mb-5">

  <div class="row">
    <?php
    while (have_posts()) :
      the_post();
    ?>
    <div class="col-lg-8 col-12 col-left">
      <div class="editor-info d-flex mb-2">
        <div class="editor-img">
                  <?php
                  $current_user = wp_get_current_user();
                  $user_avatar = get_avatar($current_user->ID, 100); // Change the size (100) as per your requirement

                  echo $user_avatar;
                  ?>
        </div>
        <div class="editor-name">
          <?php echo get_the_author(); ?>
        </div>
      </div>
      <div class="single-title fs-28 mb-3"><b><?php the_title(); ?></b></div>
      <?php if (in_category('भिडियो')) { ?>
      <div class="single-main-img mb-3">
        <?php echo get_field('embed_here'); ?>
      </div>
      <?php } else { ?>
      <div class="single-main-img mb-3">
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
      </div>
      <?php } ?>

      <div class="single-main-content"><?php the_content(); ?></div>
    </div>
    <?php endwhile; ?>


    <div class="col-lg-4 col-right mt-4">
      <div class="related-posts">
        <div class="related-posts-title">सम्बन्धित समाचार</div>

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

    
    
    <div class="col-lg-8">
      <div class="opinion-container p-3 mt-3">
        <h1 class="p-text-x-lg fw-7 text-black text-start mb-2">
          आफ्नो प्रतिक्रिया दिनुहोस्
        </h1>
        <div class="text-start comment-section">
          <div class="fb-comments" data-href="<?php the_permalink(); ?>" data-width="100%" data-numposts="5"></div>
        </div>
      </div>
    </div>
  </div>

</div>


<?php get_footer(); ?>