<?php get_header(); 
/* 
*
* Template Name: Home
*
*/
?>



    <section class="sc-news-items">
      <div class="container">

      <?php

			$args = array(
			'cat' => 2, 
			'posts_per_page' => 2,
			'post_status' => 'publish',
			'orderby' => 'date',
			'order' => 'DESC',
			);
			$my_query = new WP_Query($args);
			if ($my_query->have_posts()) :
			while ($my_query->have_posts()) :
				$my_query->the_post();
		 		 $post_id = get_the_ID();
         
          $author_id = get_the_author_meta('ID');
			?>	

        <div class="item border-bottom pb-2 pt-4">
          <a href="<?php the_permalink(); ?>">
          <h1 class="news-item-title text-center fw-8 text-black">
            <?php the_title(); ?>
          </h1>
          </a>
          <div class="press-details mx-auto">
            <div class="press-detail-header d-flex align-items-center justify-content-center mb-2">
              <div class="press-logo">
                <div class="img-cover" style="border-radius: 50%; overflow: hidden;">
                  <img src="<?php the_field('author_image', 'user_' . $author_id); ?>" alt="">
                </div>
              </div>
              <div class="press-name ms-2">
                <p class="m-0 text-dim-gary fw-4 op-04"><?php echo get_the_author(); ?></p>
              </div>
            </div>
            <div class="press-detail-body">
              <div class="img-cover">
                <a href="<?php the_permalink(); ?>">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                </a>
              </div>
              <div class="desc-txt text-center mt-2">
                <?php echo wp_trim_words(strip_tags(get_post_field('post_content', $post_id)), 16, '...'); ?>
              </div>
            </div>
          </div>
        </div>  
        
        <?php
          endwhile;
        endif;
        wp_reset_postdata();
        ?>
        
        <!-- <div class="item border-bottom pb-2 pt-4">
          <h1 class="news-item-title text-center fw-8 text-black">टीआरसी विधेयकलाई न्यायपूर्ण र
            सर्वस्वीकार्य बनाउने शीर्ष तहमा सहमति</h1>
          <div class="press-details mx-auto">
            <div class="press-detail-header d-flex align-items-center justify-content-center mb-2">
              <div class="press-logo">
                <div class="img-cover">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/logo.png" alt="">
                </div>
              </div>
              <div class="press-name ms-2">
                <p class="m-0 text-dim-gary fw-4 op-04">राजधानी प्रेस</p>
              </div>
            </div>
            <div class="press-detail-body">
              <div class="img-cover">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/index-page/sc-main-news/sc-main-news-img-1.png" alt="">
              </div>
              <div class="desc-txt text-center mt-2">
                <p>सभामुख निवास बालुवाटारमा प्रधानमन्त्रीसहित शीर्ष तीन दलका नेताहरूबीच छलफल सरकारात्मक
                  भएको छ ।</p>
              </div>
            </div>
          </div>
        </div>
       -->
      
      </div>
    </section>

<!-- BLAST SECTION END -->


    <!-- Samachar Section  -->
    <section class="sc-main-news px-3 pt-6">
      <div class="container">
        <div class="sc-title">
          <div class="sc-title-text"><?php echo get_cat_name(3); ?></div>
          <a href="<?php echo esc_url(get_category_link(3)); ?>" class="sc-title-link">
            <span class="link-text">सबै हेर्नुहोस्</span>
            <span class="link-icon">
              <i class="fas fa-chevron-right"></i>
            </span>
          </a>
        </div>
        <div class="row d-flex">

        <?php

        $args = array(
        'cat' => 3, 
        'posts_per_page' => 1,
        'post_status' => 'publish',
        'orderby' => 'date',
        'order' => 'DESC',
        );
        $my_query = new WP_Query($args);
        if ($my_query->have_posts()) :
        while ($my_query->have_posts()) :
          $my_query->the_post();
          $post_id = get_the_ID();
        ?>	
          
          <div class="col-lg-8 col-md-8 mb-4 mb-lg-4">
            <div class="news-container">
              <a href="<?php the_permalink(); ?>">
                <div class="img-container">
                  <div class="img-cover">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" />
                  </div>
                </div>

                <div class="content-container p-4">
                  <p class="category mb-0 p-text-x-sm op-04 fw-4"><?php echo get_cat_name(3); ?></p>
                  <h1 class="fs-25">
                    <?php the_title(); ?>
                  </h1>
                  <div class="auther-detail d-flex align-items-center justify-content-start mb-3">
                    <p class="m-0 me-5 d-flex flex-column flex-sm-row align-items-center  p-text-x-sm">
                      <span><i class="fa-solid fa-clock"></i></span><span class="ms-2">
                      <?php
                        $post_date = get_the_time('U');
                        $current_date = current_time('timestamp');
                        $time_difference = $current_date - $post_date;
                        if ($time_difference < 86400) { 
                            $human_time_diff = human_time_diff($post_date, $current_date);
                            echo $human_time_diff . ' ago';
                        } else {
                            echo postNepaliDate(date('Y'), date('m'), date('d')); 
                        }
                        ?>
                      </span>
                    </p>
                    <!-- <p class="m-0 d-flex flex-column flex-sm-row align-items-c  enter p-text-x-sm">
                      <span><i class="fa-solid fa-user-pen"></i></span><span class="ms-2">२१ मिनेट अगाडि</span>
                    </p> -->
                  </div>
                  <div class="news-desc">
                    <?php echo wp_trim_words(strip_tags(get_post_field('post_content', $post_id)), 54, '...'); ?>
                  </div>
                </div>
              </a>
            </div>
          </div>
          
          <?php
          endwhile;
        endif;
        wp_reset_postdata();
        ?>

          <div class="col-lg-4 col-md-4 pe-md-0 mb-4 mb-lg-4">

          <?php

          $args = array(
          'cat' => 3, 
          'posts_per_page' => 4,
          'offset' => 1,
          'post_status' => 'publish',
          'orderby' => 'date',
          'order' => 'DESC',
          );
          $my_query = new WP_Query($args);
          if ($my_query->have_posts()) :
          while ($my_query->have_posts()) :
            $my_query->the_post();
            $post_id = get_the_ID();
          ?>	

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

            <?php
              endwhile;
            endif;
            wp_reset_postdata();
            ?>

            <!-- <a href="#" class="itm-card itm-card-row d-flex align-items-center p-0">
              <div class="itm-card-img img-cover">
                <img src="https://img.setoparty.com/uploads/posts/540X340/Dhoni%20last%20overn1685437159.jpg" alt="" />
              </div>
              <div class="itm-card-body">
                <h6 class="fw-7 fs-17 lh-30 title-clr">
                  हनुमानढोका दरबार सङ्ग्रहालय विकास समितिले
                </h6>
              </div>
            </a>
            <a href="#" class="itm-card itm-card-row d-flex align-items-center p-0">
              <div class="itm-card-img img-cover">
                <img src="https://img.setoparty.com/uploads/posts/bijaya%20(2)1685387868.jpg" alt="" />
              </div>
              <div class="itm-card-body">
                <h6 class="fw-7 fs-17 lh-30 title-clr">
                  हनुमानढोका दरबार सङ्ग्रहालय
                </h6>
              </div>
            </a>
            <a href="#" class="itm-card itm-card-row d-flex align-items-center p-0">
              <div class="itm-card-img img-cover">
                <img src="assets/images/pg_idx_1/sc_idx_5_2.png" alt="" />
              </div>
              <div class="itm-card-body">
                <h6 class="fw-7 fs-17 lh-30 title-clr">
                  हनुमानढोका दरबार सङ्ग्रहालय विकास
                </h6>
              </div>
            </a>

             -->
          </div>
          
        <?php

        $args = array(
        'cat' => 3, 
        'posts_per_page' => 6,
        'offset' => 5,
        'post_status' => 'publish',
        'orderby' => 'date',
        'order' => 'DESC',
        );
        $my_query = new WP_Query($args);
        if ($my_query->have_posts()) :
        while ($my_query->have_posts()) :
          $my_query->the_post();
          $post_id = get_the_ID();
        ?>	
          
          <div class="col-lg-4 col-sm-6 mb-4">
            <a href="<?php the_permalink(); ?>">
              <div class="news-container-base border">
                <div class="img-container">
                  <div class="img-cover">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" />
                  </div>
                </div>
                <div class="content-container p-sm-3 p-4">
                  <p class="category mb-0 p-text-x-sm op-04 fw-4"><?php echo get_cat_name(3); ?></p>
                  <h1 class="fw-7 text-dark-purple fs-17 lh-26">
                    <?php the_title(); ?>
                  </h1>
                  <div class="auther-detail d-flex align-items-center justify-content-between mt-2">
                    <p class="m-0 me-5 d-flex flex-column flex-md-row align-items-center op-05 text-black p-text-x-sm">
                      <span><i class="fa-solid fa-clock"></i></span><span class="ms-md-2 text-md-start text-center">
                      <?php
                        // Get the post's publish date and convert it to a timestamp
                        $post_date = get_the_time('U');

                        // Get the current date and time and convert it to a timestamp
                        $current_date = current_time('timestamp');

                        // Calculate the time difference between the current date and the post date
                        $time_difference = $current_date - $post_date;

                        // Check if the time difference is less than 24 hours
                        if ($time_difference < 86400) { // 86400 seconds = 24 hours
                            // Get the human-readable time difference using the human_time_diff() function
                            $human_time_diff = human_time_diff($post_date, $current_date);

                            // Output the time ago
                            echo $human_time_diff . ' ago';
                        } else {
                            // If more than 24 hours, display the post's publish date
                            echo get_the_time('F j, Y');
                        }
                        ?>
                      </span>
                    </p>
                    <!-- <p class="m-0 d-flex flex-column flex-md-row align-items-center op-05 text-black p-text-x-sm">
                      <span><i class="fa-solid fa-user-pen"></i></span><span
                        class="ms-md-2 text-md-start text-center">२१ मिनेट अगाडि</span>
                    </p> -->
                  </div>
                </div>
              </div>
            </a>
          </div>
          
          <?php
            endwhile;
          endif;
          wp_reset_postdata();
          ?>
          
          <!-- <div class="col-lg-4 col-sm-6 mb-4">
            <a href="">
              <div class="news-container-base border">
                <div class="img-container">
                  <div class="img-cover">
                    <img
                      src="https://www.setopati.com/uploads/editor/sujita%20file/photo%20for%20slide/day%20pic/cabinet.jpg"
                      alt="" />
                  </div>
                </div>
                <div class="content-container p-sm-3 p-4">
                  <p class="category mb-0 p-text-x-sm op-04 fw-4">टेक्नोलोजि</p>
                  <h1 class="fw-7 text-dark-purple fs-17 lh-26">
                    च्याट जिपिटीमाथि इटालीले किन लगायो प्रतिबन्ध ?
                  </h1>
                  <div class="auther-detail d-flex align-items-center justify-content-between mt-2">
                    <p class="m-0 me-5 d-flex flex-column flex-md-row align-items-center op-05 text-black p-text-x-sm">
                      <span><i class="fa-solid fa-clock"></i></span><span class="ms-md-2 text-md-start text-center">२१
                        मिनेट अगाडि</span>
                    </p>
                    <p class="m-0 d-flex flex-column flex-md-row align-items-center op-05 text-black p-text-x-sm">
                      <span><i class="fa-solid fa-user-pen"></i></span><span
                        class="ms-md-2 text-md-start text-center">२१ मिनेट अगाडि</span>
                    </p>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6 mb-4">
            <a href="">
              <div class="news-container-base border">
                <div class="img-container">
                  <div class="img-cover">
                    <img src="https://img.setoparty.com/uploads/posts/540X340/budget%20(25)1685359018.jpg" alt="" />
                  </div>
                </div>
                <div class="content-container p-sm-3 p-4">
                  <p class="category mb-0 p-text-x-sm op-04 fw-4">टेक्नोलोजि</p>
                  <h1 class="fw-7 text-dark-purple fs-17 lh-26">
                    च्याट जिपिटीमाथि इटालीले किन लगायो प्रतिबन्ध ?
                  </h1>
                  <div class="auther-detail d-flex align-items-center justify-content-between mt-2">
                    <p class="m-0 me-5 d-flex flex-column flex-md-row align-items-center op-05 text-black p-text-x-sm">
                      <span><i class="fa-solid fa-clock"></i></span><span class="ms-md-2 text-md-start text-center">२१
                        मिनेट अगाडि</span>
                    </p>
                    <p class="m-0 d-flex flex-column flex-md-row align-items-center op-05 text-black p-text-x-sm">
                      <span><i class="fa-solid fa-user-pen"></i></span><span
                        class="ms-md-2 text-md-start text-center">२१ मिनेट अगाडि</span>
                    </p>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6 mb-4">
            <a href="">
              <div class="news-title-container border p-3">
                <p class="category mb-0 p-text-x-sm op-04 fw-4">टेक्नोलोजि</p>
                <h1 class="fw-7 text-dark-purple fs-17 lh-26">
                  च्याट जिपिटीमाथि इटालीले किन लगायो प्रतिबन्ध ?
                </h1>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6 mb-4">
            <a href="">
              <div class="news-title-container border p-3">
                <p class="category mb-0 p-text-x-sm op-04 fw-4">टेक्नोलोजि</p>
                <h1 class="fw-7 text-dark-purple fs-17 lh-26">
                  च्याट जिपिटीमाथि इटालीले किन लगायो प्रतिबन्ध ?
                </h1>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6 mb-4">
            <a href="">
              <div class="news-title-container border p-3">
                <p class="category mb-0 p-text-x-sm op-04 fw-4">टेक्नोलोजि</p>
                <h1 class="fw-7 text-dark-purple fs-17 lh-26">
                  च्याट जिपिटीमाथि इटालीले किन लगायो प्रतिबन्ध ?
                </h1>
              </div>
            </a>
          </div>
 -->


        </div>
      </div>
    </section>
    <!-- end of main section  -->



    <!-- BUSINESS NEWS -->


    <!-- opening section  -->
    <section class="sc-openion px-3 pt-6">
      <div class="container">
        <div class="sc-title">
          <div class="sc-title-text"><?php echo get_cat_name(4); ?></div>
          <a href="<?php echo esc_url(get_category_link(4)); ?>" class="sc-title-link">
            <span class="link-text">सबै हेर्नुहोस्</span>
            <span class="link-icon">
              <i class="fas fa-chevron-right"></i>
            </span>
          </a>
        </div>
        <div class="sc-btm-border">
          <div class="row">
            <div class="col-lg-8 mb-4 mb-lg-4">

            <?php

            $args = array(
            'cat' => 4, 
            'posts_per_page' => 1,
            'offset' => 0,
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC',
            );
            $my_query = new WP_Query($args);
            if ($my_query->have_posts()) :
            while ($my_query->have_posts()) :
              $my_query->the_post();
              $post_id = get_the_ID();
            ?>	

              <a href="<?php the_permalink(); ?>">
                <div class="news-container-overlay">
                  <div class="img-container">
                    <div class="img-cover">
                      <img src="<?php echo get_the_post_thumbnail_url(); ?>"
                        alt="" />
                    </div>
                  </div>
                  <div class="content-container p-4">
                    <p class="category mb-0 p-text-x-sm op-08 fw-4 text-white">
                      <?php echo get_cat_name(4); ?>
                    </p>
                    <h1 class="fs-25 text-white">
                      <?php the_title(); ?>
                    </h1>
                    <div class="auther-detail d-flex align-items-center justify-content-start">
                      <p
                        class="m-0 me-5 d-flex flex-column flex-sm-row align-items-center text-white op-08 p-text-x-sm">
                        <span><i class="fa-solid fa-clock"></i></span><span class="ms-2">
                        <?php
                        // Get the post's publish date and convert it to a timestamp
                        $post_date = get_the_time('U');

                        // Get the current date and time and convert it to a timestamp
                        $current_date = current_time('timestamp');

                        // Calculate the time difference between the current date and the post date
                        $time_difference = $current_date - $post_date;

                        // Check if the time difference is less than 24 hours
                        if ($time_difference < 86400) { // 86400 seconds = 24 hours
                            // Get the human-readable time difference using the human_time_diff() function
                            $human_time_diff = human_time_diff($post_date, $current_date);

                            // Output the time ago
                            echo $human_time_diff . ' ago';
                        } else {
                            // If more than 24 hours, display the post's publish date
                            echo get_the_time('F j, Y');
                        }
                        ?>
                        </span>
                      </p>
                      <!-- <p class="m-0 d-flex flex-column flex-sm-row align-items-center text-white op-08 p-text-x-sm">
                        <span><i class="fa-solid fa-user-pen"></i></span><span class="ms-2">२१ मिनेट अगाडि</span>
                      </p> -->
                    </div>
                  </div>
                </div>
              </a>

              <?php
                endwhile;
              endif;
              wp_reset_postdata();
              ?>


            </div>
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-4">

            <?php

            $args = array(
            'cat' => 4, 
            'posts_per_page' => 1,
            'offset' => 1,
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC',
            );
            $my_query = new WP_Query($args);
            if ($my_query->have_posts()) :
            while ($my_query->have_posts()) :
              $my_query->the_post();
              $post_id = get_the_ID();
            ?>	

              <a href="<?php the_permalink(); ?>">
                <div class="news-container-overlay">
                  <div class="img-container">
                    <div class="img-cover">
                      <img
                        src="https://img.setoparty.com/uploads/posts/540X340/diwash-shrestha-nepali-karate-player-wins-gold-medal-in-australia-20231683417053.jpg"
                        alt="" />
                    </div>
                  </div>
                  <div class="content-container p-4">
                    <p class="category mb-0 p-text-x-sm op-08 fw-4 text-white">
                      <?php echo get_cat_name(4); ?>
                    </p>
                    <h1 class="fs-25 text-white">
                      <?php the_title(); ?>
                    </h1>
                    <div class="auther-detail d-flex align-items-center justify-content-start">
                      <p
                        class="m-0 me-5 d-flex flex-column flex-sm-row align-items-center text-white op-08 p-text-x-sm">
                        <span><i class="fa-solid fa-clock"></i></span><span class="ms-2">
                        <?php
                        // Get the post's publish date and convert it to a timestamp
                        $post_date = get_the_time('U');

                        // Get the current date and time and convert it to a timestamp
                        $current_date = current_time('timestamp');

                        // Calculate the time difference between the current date and the post date
                        $time_difference = $current_date - $post_date;

                        // Check if the time difference is less than 24 hours
                        if ($time_difference < 86400) { // 86400 seconds = 24 hours
                            // Get the human-readable time difference using the human_time_diff() function
                            $human_time_diff = human_time_diff($post_date, $current_date);

                            // Output the time ago
                            echo $human_time_diff . ' ago';
                        } else {
                            // If more than 24 hours, display the post's publish date
                            echo get_the_time('F j, Y');
                        }
                        ?>
                        </span>
                      </p>
                      <!-- <p class="m-0 d-flex flex-column flex-sm-row align-items-center text-white op-08 p-text-x-sm">
                        <span><i class="fa-solid fa-user-pen"></i></span><span class="ms-2">२१ मिनेट अगाडि</span>
                      </p> -->
                    </div>
                  </div>
                </div>
              </a>

              <?php
                endwhile;
              endif;
              wp_reset_postdata();
              ?>

            </div>

            <?php

            $args = array(
            'cat' => 4, 
            'posts_per_page' => 6,
            'offset' => 2,
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC',
            );
            $my_query = new WP_Query($args);
            if ($my_query->have_posts()) :
            while ($my_query->have_posts()) :
              $my_query->the_post();
              $post_id = get_the_ID();
            ?>	


            <div class="col-lg-4 col-sm-6 mb-4">
              <a href="<?php the_permalink(); ?>">
                <div class="news-container-base border">
                  <div class="img-container">
                    <div class="img-cover">
                      <img
                        src="<?php echo get_the_post_thumbnail_url(); ?>"
                        alt="" />
                    </div>
                  </div>
                  <div class="content-container p-sm-3 p-4">
                    <p class="category mb-0 p-text-x-sm op-04 fw-4"><?php echo get_cat_name(4); ?></p>
                    <h1 class="fs-17 fw-7 text-dark-purple">
                      <?php the_title(); ?>
                    </h1>
                    <div class="auther-detail d-flex align-items-center justify-content-between mt-3">
                      <p
                        class="m-0 me-5 d-flex flex-column flex-md-row align-items-center op-05 text-black p-text-x-sm">
                        <span><i class="fa-solid fa-clock"></i></span><span class="ms-md-2 text-md-start text-center">
                        <?php
                        // Get the post's publish date and convert it to a timestamp
                        $post_date = get_the_time('U');

                        // Get the current date and time and convert it to a timestamp
                        $current_date = current_time('timestamp');

                        // Calculate the time difference between the current date and the post date
                        $time_difference = $current_date - $post_date;

                        // Check if the time difference is less than 24 hours
                        if ($time_difference < 86400) { // 86400 seconds = 24 hours
                            // Get the human-readable time difference using the human_time_diff() function
                            $human_time_diff = human_time_diff($post_date, $current_date);

                            // Output the time ago
                            echo $human_time_diff . ' ago';
                        } else {
                            // If more than 24 hours, display the post's publish date
                            echo get_the_time('F j, Y');
                        }
                        ?>
                        </span>
                      </p>
                      <!-- <p class="m-0 d-flex flex-column flex-md-row align-items-center op-05 text-black p-text-x-sm">
                        <span><i class="fa-solid fa-user-pen"></i></span><span
                          class="ms-md-2 text-md-start text-center">२१ मिनेट अगाडि</span>
                      </p> -->
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <?php
                endwhile;
              endif;
              wp_reset_postdata();
              ?>

            
            <!-- <div class="col-lg-4 col-sm-6 mb-4">
              <a href="">
                <div class="news-container-base border">
                  <div class="img-container">
                    <div class="img-cover">
                      <img src="https://img.setoparty.com/uploads/posts/540X340/1600620400aamir.jpg" alt="" />
                    </div>
                  </div>
                  <div class="content-container p-sm-3 p-4">
                    <p class="category mb-0 p-text-x-sm op-04 fw-4">समाज</p>
                    <h1 class="fs-17 fw-7 text-dark-purple">
                      च्याट जिपिटीमाथि इटालीले किन लगायो प्रतिबन्ध ?
                    </h1>
                    <div class="auther-detail d-flex align-items-center justify-content-between mt-3">
                      <p
                        class="m-0 me-5 d-flex flex-column flex-md-row align-items-center op-05 text-black p-text-x-sm">
                        <span><i class="fa-solid fa-clock"></i></span><span class="ms-md-2 text-md-start text-center">२१
                          मिनेट अगाडि</span>
                      </p>
                      <p class="m-0 d-flex flex-column flex-md-row align-items-center op-05 text-black p-text-x-sm">
                        <span><i class="fa-solid fa-user-pen"></i></span><span
                          class="ms-md-2 text-md-start text-center">२१ मिनेट अगाडि</span>
                      </p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
              <a href="">
                <div class="news-container-base border">
                  <div class="img-container">
                    <div class="img-cover">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/index-page/sc-main-news/news-img-sm.png" alt="" />
                    </div>
                  </div>
                  <div class="content-container p-sm-3 p-4">
                    <p class="category mb-0 p-text-x-sm op-04 fw-4">समाज</p>
                    <h1 class="fs-17 fw-7 text-dark-purple">
                      च्याट जिपिटीमाथि इटालीले किन लगायो प्रतिबन्ध ?
                    </h1>
                    <div class="auther-detail d-flex align-items-center justify-content-between mt-3">
                      <p
                        class="m-0 me-5 d-flex flex-column flex-md-row align-items-center op-05 text-black p-text-x-sm">
                        <span><i class="fa-solid fa-clock"></i></span><span class="ms-md-2 text-md-start text-center">२१
                          मिनेट अगाडि</span>
                      </p>
                      <p class="m-0 d-flex flex-column flex-md-row align-items-center op-05 text-black p-text-x-sm">
                        <span><i class="fa-solid fa-user-pen"></i></span><span
                          class="ms-md-2 text-md-start text-center">२१ मिनेट अगाडि</span>
                      </p>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="col-lg-4 col-sm-6 mb-4">
              <a href="">
                <div class="news-title-container border p-3">
                  <p class="category mb-0 p-text-x-sm op-04 fw-4">समाज</p>
                  <h1 class="fs-17 fw-7 text-dark-purple">
                    च्याट जिपिटीमाथि इटालीले किन लगायो प्रतिबन्ध ?
                  </h1>

                </div>
              </a>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
              <a href="">
                <div class="news-title-container border p-3">
                  <p class="category mb-0 p-text-x-sm op-04 fw-4">समाज</p>
                  <h1 class="fs-17 fw-7 text-dark-purple">
                    च्याट जिपिटीमाथि इटालीले किन लगायो प्रतिबन्ध ?
                  </h1>

                </div>
              </a>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
              <a href="">
                <div class="news-title-container border p-3">
                  <p class="category mb-0 p-text-x-sm op-04 fw-4">समाज</p>
                  <h1 class="fs-17 fw-7 text-dark-purple">
                    च्याट जिपिटीमाथि इटालीले किन लगायो प्रतिबन्ध ?
                  </h1>

                </div>
              </a>
            </div>
 -->

          </div>
        </div>
      </div>
    </section>
    <!-- end of opening section  -->




<!-- BICHAR SECTION -->
    <section class="sc-idx-8 pt-6 pg-sc px-3">
      <div class="container">
        <div class="sc-content">
          <div class="sc-title">
            <div class="sc-title-text"><?php echo get_cat_name(7); ?></div>
            <a href="<?php echo esc_url(get_category_link(7)); ?>" class="sc-title-link">
              <span class="link-text">सबै हेर्नुहोस्</span>
              <span class="link-icon">
                <i class="fas fa-chevron-right"></i>
              </span>
            </a>
          </div>

          <!-- row -->
          <div class="row m-0">
            <div class="col-l col-xl-5 px-0 pe-xl-4">

            <?php

            $args = array(
            'cat' => 7, 
            'posts_per_page' => 1,
            'offset' => 0,
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC',
            );
            $my_query = new WP_Query($args);
            if ($my_query->have_posts()) :
            while ($my_query->have_posts()) :
              $my_query->the_post();
              $post_id = get_the_ID();
            ?>	

              <a href="<?php the_permalink(); ?>" class="itm-card itm-card-content-overlay img-cover">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" />
                <div class="itm-card-body">
                  <h6 class="itm-card-h fw-8 fs-25 lh-33 mb-4 title-clr-g">
                    <?php the_title(); ?>
                  </h6>
                </div>
              </a>

              <?php
                endwhile;
              endif;
              wp_reset_postdata();
              ?>

            </div>

            <div class="col-r col-xl-7 px-0">
              <div class="row">

              <?php

              $args = array(
              'cat' => 7, 
              'posts_per_page' => 2,
              'offset' => 1,
              'post_status' => 'publish',
              'orderby' => 'date',
              'order' => 'DESC',
              );
              $my_query = new WP_Query($args);
              if ($my_query->have_posts()) :
              while ($my_query->have_posts()) :
                $my_query->the_post();
                $post_id = get_the_ID();
              ?>	
                <div class="col-sm-6">
                  <a href="<?php the_permalink(); ?>" class="itm-card itm-card-block">
                    <div class="itm-card-img img-cover">
                      <img src="<?php echo get_the_post_thumbnail_url(); ?>" />
                    </div>
                    <div class="itm-card-body mt-3">
                      <h6 class="fw-7 fs-17 lh-26 title-clr">
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
                <!-- <div class="col-sm-6">
                  <a href="#" class="itm-card itm-card-block">
                    <div class="itm-card-img img-cover">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pg_idx_1/sc_idx_8_3.png" />
                    </div>
                    <div class="itm-card-body mt-3">
                      <h6 class="fw-7 fs-17 lh-26 title-clr">
                        कालेबुङले भनिसकेको छ सातबाटे । गुन्द्रुके लवज । खै हौ
                        उहिलेको गुन्द्रीबजारमा हराएकै हो त ?
                      </h6>
                    </div>
                  </a>
                </div>
               -->
              
              </div>

              <div class="row">

              <?php

              $args = array(
              'cat' => 7, 
              'posts_per_page' => 4,
              'offset' => 3,
              'post_status' => 'publish',
              'orderby' => 'date',
              'order' => 'DESC',
              );
              $my_query = new WP_Query($args);
              if ($my_query->have_posts()) :
              while ($my_query->have_posts()) :
                $my_query->the_post();
                $post_id = get_the_ID();
              ?>

                <div class="col-md-6">
                  <a href="<?php the_permalink(); ?>" class="itm-card itm-card-row d-flex align-items-center itm-card-border-btm">
                    <div class="itm-card-img img-cover">
                      <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" />
                    </div>
                    <div class="itm-card-body">
                      <h6 class="itm-card-h fw-7 fs-17 lh-26 title-clr">
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
                <!-- <div class="col-md-6">
                  <a href="#" class="itm-card itm-card-row d-flex align-items-center itm-card-border-btm">
                    <div class="itm-card-img img-cover">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pg_idx_1/sc_idx_8_5.png" alt="" />
                    </div>
                    <div class="itm-card-body">
                      <h6 class="itm-card-h fw-7 fs-17 lh-26 title-clr">
                        कालेबुङले भनिसकेको छ सातबाटे । गुन्द्रुके लवज । खै हौ
                        उहिलेको गुन्द्रीबजारमा हराएकै हो त ?
                      </h6>
                    </div>
                  </a>
                </div>

                <div class="col-md-6">
                  <a href="#" class="itm-card itm-card-row d-flex align-items-center itm-card-border-btm">
                    <div class="itm-card-img img-cover">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pg_idx_1/sc_idx_8_6.png" alt="" />
                    </div>
                    <div class="itm-card-body">
                      <h6 class="itm-card-h fw-7 fs-17 lh-26 title-clr">
                        कालेबुङले भनिसकेको छ सातबाटे । गुन्द्रुके लवज । खै हौ
                        उहिलेको गुन्द्रीबजारमा हराएकै हो त ?
                      </h6>
                    </div>
                  </a>
                </div>

                <div class="col-md-6">
                  <a href="#" class="itm-card itm-card-row d-flex align-items-center itm-card-border-btm">
                    <div class="itm-card-img img-cover">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pg_idx_1/sc_idx_8_7.png" alt="" />
                    </div>
                    <div class="itm-card-body">
                      <h6 class="itm-card-h fw-7 fs-17 lh-26 title-clr">
                        कालेबुङले भनिसकेको छ सातबाटे । गुन्द्रुके लवज । खै हौ
                        उहिलेको गुन्द्रीबजारमा हराएकै हो त ?
                      </h6>
                    </div>
                  </a>
                </div>
               -->
              
              </div>
            
            </div>
          </div>
          <!-- end of row -->
        </div>
      </div>
    </section>

    <!-- JIbanSaili -->

    <section class="sc-idx-4 pt-6 pg-sc px-3">
      <div class="container">
        <div class="sc-content">
          <div class="sc-title row align-items-xl-center">
            <div class="sc-title-text col-6 col-xl-4 order-xl-0">
              <?php echo get_cat_name(5); ?>
            </div>

            <a href="<?php echo esc_url(get_category_link(5)); ?>" class="sc-title-link col-6 col-xl-2 justify-content-end order-xl-2">
              <span class="link-text">सबै हेर्नुहोस्</span>
              <span class="link-icon">
                <i class="fas fa-chevron-right"></i>
              </span>
            </a>

            <!-- <ul
                class="col-xl-6 sc-tab-list d-flex flex-wrap mt-3 mt-xl-0 order-xl-1"
              >
                <li class="sc-tab-item fw-4 fs-20 lh-20 text-black-a-07">
                  <a href="#">उपन्यास</a>
                </li>
                <li class="sc-tab-item fw-4 fs-20 lh-20 text-black-a-07">
                  <a href="#">कथा</a>
                </li>
                <li class="sc-tab-item fw-4 fs-20 lh-20 text-black-a-07">
                  <a href="#">नाटक</a>
                </li>
                <li class="sc-tab-item fw-4 fs-20 lh-20 text-black-a-07">
                  <a href="#">लघुकथा</a>
                </li>
              </ul> -->
          </div>

          <!-- row -->
          <div class="row">
            <div class="col-xl-5 col-l">
              <div class="row">

              <?php

              $args = array(
              'cat' => 5, 
              'posts_per_page' => 1,
              'offset' => 0,
              'post_status' => 'publish',
              'orderby' => 'date',
              'order' => 'DESC',
              );
              $my_query = new WP_Query($args);
              if ($my_query->have_posts()) :
              while ($my_query->have_posts()) :
                $my_query->the_post();
                $post_id = get_the_ID();
              ?>
                <div class="col-lg-6 col-xl-12">
                  <a href="<?php echo esc_url(get_category_link(5)); ?>" class="itm-card itm-card-content-overlay img-cover">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" />
                    <div class="itm-card-body">
                      <h6 class="itm-card-h fw-8 fs-32 lh-45 mb-4 title-clr-g">
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


              <?php

              $args = array(
              'cat' => 5, 
              'posts_per_page' => 1,
              'offset' => 1,
              'post_status' => 'publish',
              'orderby' => 'date',
              'order' => 'DESC',
              );
              $my_query = new WP_Query($args);
              if ($my_query->have_posts()) :
              while ($my_query->have_posts()) :
                $my_query->the_post();
                $post_id = get_the_ID();
              ?>
                <div class="col-lg-6 col-xl-12">
                  <a href="<?php the_permalink(); ?>" class="itm-card itm-card-content-overlay img-cover">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pg_idx_1/sc_idx_4_1.png" alt="" />
                    <div class="itm-card-body">
                      <h6 class="itm-card-h fw-8 fs-32 lh-45 mb-4 title-clr-g">
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

            <div class="col-xl-7 col-r">
              <div class="row">

              <?php

              $args = array(
              'cat' => 5, 
              'posts_per_page' => 8,
              'offset' => 2,
              'post_status' => 'publish',
              'orderby' => 'date',
              'order' => 'DESC',
              );
              $my_query = new WP_Query($args);
              if ($my_query->have_posts()) :
              while ($my_query->have_posts()) :
                $my_query->the_post();
                $post_id = get_the_ID();
              ?>

                <div class="col-sm-6">
                  <a href="<?php the_permalink(); ?>" class="itm-card itm-card-block">
                    <div class="itm-card-img img-cover">
                      <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" />
                    </div>
                    <div class="itm-card-body">
                      <h6 class="itm-card-h fw-7 fs-17 lh-30 title-clr">
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

                <!-- <div class="col-sm-6">
                  <a href="#" class="itm-card itm-card-block">
                    <div class="itm-card-img img-cover">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pg_idx_1/sc_idx_4_3.png" alt="" />
                    </div>
                    <div class="itm-card-body">
                      <h6 class="itm-card-h fw-7 fs-17 lh-30 title-clr">
                        लयमा फर्किंदै पर्यटन क्षेत्र, आन्तरिक पर्यटनले बढायो
                        आशा
                      </h6>
                    </div>
                  </a>
                </div>

                <div class="col-sm-6">
                  <a href="#" class="itm-card itm-card-block">
                    <div class="itm-card-img img-cover">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pg_idx_1/sc_idx_4_4.png" alt="" />
                    </div>
                    <div class="itm-card-body">
                      <h6 class="itm-card-h fw-7 fs-17 lh-30 title-clr">
                        लयमा फर्किंदै पर्यटन क्षेत्र, आन्तरिक पर्यटनले बढायो
                        आशा
                      </h6>
                    </div>
                  </a>
                </div>

                <div class="col-sm-6">
                  <a href="#" class="itm-card itm-card-block">
                    <div class="itm-card-img img-cover">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pg_idx_1/sc_idx_4_2.png" alt="" />
                    </div>
                    <div class="itm-card-body">
                      <h6 class="itm-card-h fw-7 fs-17 lh-30 title-clr">
                        लयमा फर्किंदै पर्यटन क्षेत्र, आन्तरिक पर्यटनले बढायो
                        आशा
                      </h6>
                    </div>
                  </a>
                </div>

                <div class="col-sm-6">
                  <a href="#" class="itm-card itm-card-block">
                    <div class="itm-card-img img-cover">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pg_idx_1/sc_idx_4_3.png" alt="" />
                    </div>
                    <div class="itm-card-body">
                      <h6 class="itm-card-h fw-7 fs-17 lh-30 title-clr">
                        लयमा फर्किंदै पर्यटन क्षेत्र, आन्तरिक पर्यटनले बढायो
                        आशा
                      </h6>
                    </div>
                  </a>
                </div>

                <div class="col-sm-6">
                  <a href="#" class="itm-card itm-card-block">
                    <div class="itm-card-img img-cover">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pg_idx_1/sc_idx_4_4.png" alt="" />
                    </div>
                    <div class="itm-card-body">
                      <h6 class="itm-card-h fw-7 fs-17 lh-30 title-clr">
                        लयमा फर्किंदै पर्यटन क्षेत्र, आन्तरिक पर्यटनले बढायो
                        आशा
                      </h6>
                    </div>
                  </a>
                </div>
              
                 -->
              </div>
            </div>
          </div>
          <!-- end of row -->
        </div>
      </div>
    </section>

    <!--  -->

    <section class="sc-idx-5 py-6 pg-sc px-3">
      <div class="container">
        <div class="row m-0">
          <div class="col-xxl-9 col-l px-0 pe-xxl-2 mb-4 mb-xxl-0">
            <div class="sc-content">
              <div class="sc-title row align-items-xl-center">
                <div class="sc-title-text col-6 col-xl-4 order-xl-0 ps-0">
                  <?php echo get_cat_name(6); ?>
                </div>

                <a href="<?php echo esc_url(get_category_link(6)); ?>" class="sc-title-link col-6 col-xl-2 justify-content-end order-xl-2">
                  <span class="link-text">सबै हेर्नुहोस्</span>
                  <span class="link-icon">
                    <i class="fas fa-chevron-right"></i>
                  </span>
                </a>

                <!-- <ul
                    class="col-xl-6 sc-tab-list d-flex flex-wrap mt-3 mt-xl-0 order-xl-1"
                  >
                    <li class="sc-tab-item fw-4 fs-20 lh-20 text-black-a-07">
                      <a href="#">अध्यात्म</a>
                    </li>
                    <li class="sc-tab-item fw-4 fs-20 lh-20 text-black-a-07">
                      <a href="#">चिन्तन</a>
                    </li>
                    <li class="sc-tab-item fw-4 fs-20 lh-20 text-black-a-07">
                      <a href="#">जीवनी</a>
                    </li>
                    <li class="sc-tab-item fw-4 fs-20 lh-20 text-black-a-07">
                      <a href="#">धारावाहिक</a>
                    </li>
                    <li class="sc-tab-item fw-4 fs-20 lh-20 text-black-a-07">
                      <a href="#">निबन्ध</a>
                    </li>
                  </ul> -->
              </div>
              <!-- row -->
              <div class="row">
                <div class="col-md-6 col-l pe-xxl-4">

                <?php

                $args = array(
                'cat' => 6, 
                'posts_per_page' => 1,
                'offset' => 0,
                'post_status' => 'publish',
                'orderby' => 'date',
                'order' => 'DESC',
                );
                $my_query = new WP_Query($args);
                if ($my_query->have_posts()) :
                while ($my_query->have_posts()) :
                  $my_query->the_post();
                  $post_id = get_the_ID();
                ?>

                  <a href="<?php the_permalink(); ?>" class="itm-card itm-card-block">
                    <div class="itm-card-img img-cover">
                      <img src="<?php echo the_post_thumbnail_url(); ?>" alt="" />
                    </div>
                    <div class="itm-card-body">
                      <h6 class="itm-card-h fw-7 fs-25 lh-45 title-clr">
                        <?php the_title(); ?>
                      </h6>
                      <div class="itm-card-info d-flex align-items-center mb-3">
                        <div class="d-flex align-items-center me-4">
                          <span class="author-default me-2">
                            <img src="assets/images/icons/site_avatar.png" alt="" />
                          </span>
                          <span class="fw-5 fs-13 lh-20">विष्णु पगेनी सिग्देल</span>
                        </div>
                        <div class="d-flex align-items-center">
                          <span class="me-2">
                            <i class="fa-regular fa-clock"></i>
                          </span>
                          <span class="fw-5 fs-13 lh-20">२०७८ चैत ७ गते १६:३६</span>
                        </div>
                      </div>
                      <p class="fw-6 fs-17 lh-30">
                        <?php echo wp_trim_words(strip_tags(get_post_field('post_content', $post_id)), 16, '...'); ?>
                      </p>
                    </div>
                  </a>

                  <?php
                    endwhile;
                  endif;
                  wp_reset_postdata();
                  ?>

                </div>

                <div class="col-md-6 col-r">

                <?php
                $args = array(
                'cat' => 6, 
                'posts_per_page' => 3,
                'offset' => 1,
                'post_status' => 'publish',
                'orderby' => 'date',
                'order' => 'DESC',
                );
                $my_query = new WP_Query($args);
                if ($my_query->have_posts()) :
                while ($my_query->have_posts()) :
                  $my_query->the_post();
                  $post_id = get_the_ID();
                ?>

                  <a href="<?php the_permalink(); ?>" class="itm-card itm-card-row d-flex align-items-center">
                    <div class="itm-card-body">
                      <h6 class="fw-7 fs-17 lh-30 title-clr">
                        <?php the_title(); ?>
                      </h6>
                    </div>
                    <div class="itm-card-img img-cover">
                      <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" />
                    </div>
                  </a>

                  <?php
                    endwhile;
                  endif;
                  wp_reset_postdata();
                  ?>

                  <!-- <a href="#" class="itm-card itm-card-row d-flex align-items-center">
                    <div class="itm-card-body">
                      <h6 class="fw-7 fs-17 lh-30 title-clr">
                        हनुमानढोका दरबार सङ्ग्रहालय विकास समितिले गद्दी बैठकको
                        तल्लो तलामा एकीकरणदेखि
                      </h6>
                    </div>
                    <div class="itm-card-img img-cover">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pg_idx_1/sc_idx_5_2.png" alt="" />
                    </div>
                  </a>

                  <a href="#" class="itm-card itm-card-row d-flex align-items-center">
                    <div class="itm-card-body">
                      <h6 class="fw-7 fs-17 lh-30 title-clr">
                        हनुमानढोका दरबार सङ्ग्रहालय विकास समितिले गद्दी बैठकको
                        तल्लो तलामा एकीकरणदेखि
                      </h6>
                    </div>
                    <div class="itm-card-img img-cover">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pg_idx_1/sc_idx_5_2.png" alt="" />
                    </div>
                  </a>
                 -->
                
                </div>
              </div>
              <!-- end of row -->
            </div>
          </div>


          <div class="col-xxl-3 col-r px-0 ps-xxl-2">
            <div class="sc-content">
              <div class="sc-title">
                <div class="sc-title-text"><?php echo get_cat_name(9); ?></div>
                <a href="<?php echo esc_url(get_category_link(9)); ?>" class="sc-title-link">
                  <span class="link-icon">
                    <i class="fas fa-chevron-right"></i>
                  </span>
                </a>
              </div>
              <!-- row -->
              <div class="row">

                <?php
                $args = array(
                'cat' => 9, 
                'posts_per_page' => 4,
                'offset' => 0,
                'post_status' => 'publish',
                'orderby' => 'date',
                'order' => 'DESC',
                );
                $my_query = new WP_Query($args);
                if ($my_query->have_posts()) :
                while ($my_query->have_posts()) :
                  $my_query->the_post();
                  $post_id = get_the_ID();
                ?>

                <div class="col-md-6 col-xxl-12">
                  <a href="<?php the_permalink(); ?>" class="itm-card itm-card-row d-flex align-items-center itm-card-border-btm">
                    <div class="itm-card-body">
                      <h6 class="itm-card-h fw-7 fs-17 lh-26 title-clr">
                        <?php the_title(); ?>
                      </h6>
                    </div>
                    <div class="itm-card-img img-cover">
                      <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" />
                    </div>
                  </a>
                </div>

                <?php
                    endwhile;
                  endif;
                  wp_reset_postdata();
                  ?>

                <!-- <div class="col-md-6 col-xxl-12">
                  <a href="#" class="itm-card itm-card-row d-flex align-items-center itm-card-border-btm">
                    <div class="itm-card-body">
                      <h6 class="itm-card-h fw-7 fs-17 lh-26 title-clr">
                        लयमा फर्किंदै पर्यटन क्षेत्र, आन्तरिक पर्यटनले बढायो
                        आशा
                      </h6>
                    </div>
                    <div class="itm-card-img img-cover">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pg_idx_1/sc_idx_5_4.png" alt="" />
                    </div>
                  </a>
                </div>

                <div class="col-md-6 col-xxl-12">
                  <a href="#" class="itm-card itm-card-row d-flex align-items-center itm-card-border-btm">
                    <div class="itm-card-body">
                      <h6 class="itm-card-h fw-7 fs-17 lh-26 title-clr">
                        लयमा फर्किंदै पर्यटन क्षेत्र, आन्तरिक पर्यटनले बढायो
                        आशा
                      </h6>
                    </div>
                    <div class="itm-card-img img-cover">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pg_idx_1/sc_idx_5_5.png" alt="" />
                    </div>
                  </a>
                </div>

                <div class="col-md-6 col-xxl-12">
                  <a href="#" class="itm-card itm-card-row d-flex align-items-center itm-card-border-btm">
                    <div class="itm-card-body">
                      <h6 class="itm-card-h fw-7 fs-17 lh-26 title-clr">
                        लयमा फर्किंदै पर्यटन क्षेत्र, आन्तरिक पर्यटनले बढायो
                        आशा
                      </h6>
                    </div>
                    <div class="itm-card-img img-cover">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pg_idx_1/sc_idx_5_6.png" alt="" />
                    </div>
                  </a>
                </div>
               -->
              
              </div>
              <!-- end of row -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- banner-section  -->
    <!-- <section class="sc-join bg-property bg-overlay-dark px-3" style="
          background: url('<?php echo get_template_directory_uri(); ?>/assets/images/index-page/sc-main-news/news-img-sm.png');
        ">
      <div class="container h-100">
        <div class="sc-wrapper d-flex flex-column align-items-center justify-content-center text-center h-100">
          <h1 class="p-text-xx-lg fw-7 text-white mb-2">
            बिचारसंग छलफल, सहमत, असहमत जनाउन हामी संग जोडिनुहोस् ।
          </h1>
          <a href="" class="btn btn-rounded btn-transparent btn-transparent-white font-plus"><span>Join Now</span></a>
        </div>
      </div>
    </section> -->
    <!-- end of banner section  -->

    <!-- video section  -->
    <section class="sc-video px-3">
      <div class="container">
        <div class="sc-title mb-3">
          <h1 class="title-base"><?php echo get_cat_name(11); ?></h1>
        </div>
        <div class="row d-flex align-items-center">

                <?php
                $args = array(
                'cat' => 11, 
                'posts_per_page' => 1,
                'offset' => 0,
                'post_status' => 'publish',
                'orderby' => 'date',
                'order' => 'DESC',
                );
                $my_query = new WP_Query($args);
                if ($my_query->have_posts()) :
                while ($my_query->have_posts()) :
                  $my_query->the_post();
                  $post_id = get_the_ID();
                ?>

          <div class="col-lg-6 col-md-6 col-m mb-4">
            <div class="col-wrapper">
              <div class="news-container-x-lg">
                <a href="./single-news.html">
                  <div class="img-container position-relative">
                    <div class="img-cover">
                      <img
                        src="<?php the_post_thumbnail_url(); ?>"
                        alt="" />
                    </div>
                    <div class="play-icon position-absolute top-50 w-100" style="transform: translateY(-50%)">
                      <p class="m-0 text-center text-white title-md op-05">
                        <span><i class="fa-regular fa-circle-play"></i></span>
                      </p>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-r mb-4">
            <div class="text-content text-center text-md-start">
              <!-- <h1 class="fs-25 text-dark-purple">दर्शन बिज्ञान</h1> -->
              <div class="content mb-2">
                <p class="m-0 op-07 p-text-base fw-7 text-dark-purple fs-25">
                  <?php the_title(); ?>
                </p>
              </div>
              <a href="<?php the_permalink(); ?>" class="btn btn-rounded btn-dark-purple font-plus">
                <span><i class="fa-solid fa-plus"></i></span><span class="ms-2">Watching Now</span></a>
            </div>
          </div>

          <?php
                    endwhile;
                  endif;
                  wp_reset_postdata();
                  ?>
          
          <?php
                $args = array(
                'cat' => 11, 
                'posts_per_page' => 3,
                'offset' => 1,
                'post_status' => 'publish',
                'orderby' => 'date',
                'order' => 'DESC',
                );
                $my_query = new WP_Query($args);
                if ($my_query->have_posts()) :
                while ($my_query->have_posts()) :
                  $my_query->the_post();
                  $post_id = get_the_ID();
                ?>
          
          <div class="col-lg-4 mb-4">
            <a href="<?php the_permalink(); ?>">
              <div class="news-container border-0">
                <div class="img-container position-relative">
                  <div class="img-cover">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="" />
                  </div>
                  <div class="play-icon position-absolute top-50 w-100" style="transform: translateY(-50%)">
                    <p class="m-0 text-center text-white title-md op-05">
                      <span><i class="fa-regular fa-circle-play"></i></span>
                    </p>
                  </div>
                </div>
                <div class="news-content mt-3">
                  <!-- <h1 class="fs-25 text-dark-purple">दर्शन बिज्ञान</h1> -->
                  <div class="content mb-2">
                    <p class="m-0 op-07 p-text-sm fw-7 fs-25 text-black ">
                      <?php the_title(); ?>
                    </p>
                  </div>
                </div>
              </div>
            </a>
          </div>
          
          <?php
                    endwhile;
                  endif;
                  wp_reset_postdata();
                  ?>
          
          <!-- <div class="col-lg-4 mb-4">
            <a href="./single-news.html">
              <div class="news-container border-0">
                <div class="img-container position-relative">
                  <div class="img-cover">
                    <img
                      src="https://www.setopati.com/uploads/editor/navadurga/mandira/sagarmatha%20base%20camp%20pic/sangarmatha%20base%20camp%20(11).jpeg"
                      alt="" />
                  </div>
                  <div class="play-icon position-absolute top-50 w-100" style="transform: translateY(-50%)">
                    <p class="m-0 text-center text-white title-md op-05">
                      <span><i class="fa-regular fa-circle-play"></i></span>
                    </p>
                  </div>
                </div>
                <div class="news-content mt-3">
                  <h1 class="fs-25 text-dark-purple">दर्शन बिज्ञान</h1>
                  <div class="content mb-2">
                    <p class="m-0 op-07 p-text-sm fw-6 text-black">
                      तत्काल लागू हुनेगरी च्याट जिपिटीमाथि प्रतिबन्ध लगाएर
                      अनुसन्धान सुरु गरिएको उक्त नियामक निकायले जनाएको छ ।
                    </p>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 mb-4">
            <a href="./single-news.html">
              <div class="news-container border-0">
                <div class="img-container position-relative">
                  <div class="img-cover">
                    <img
                      src="https://www.setopati.com/uploads/editor/navadurga/mandira/sagarmatha%20base%20camp%20pic/sangarmatha%20base%20camp%20(11).jpeg"
                      alt="" />
                  </div>
                  <div class="play-icon position-absolute top-50 w-100" style="transform: translateY(-50%)">
                    <p class="m-0 text-center text-white title-md op-05">
                      <span><i class="fa-regular fa-circle-play"></i></span>
                    </p>
                  </div>
                </div>
                <div class="news-content mt-3">
                  <h1 class="fs-25 text-dark-purple">दर्शन बिज्ञान</h1>
                  <div class="content mb-2">
                    <p class="m-0 op-07 p-text-sm fw-6 text-black">
                      तत्काल लागू हुनेगरी च्याट जिपिटीमाथि प्रतिबन्ध लगाएर
                      अनुसन्धान सुरु गरिएको उक्त नियामक निकायले जनाएको छ ।
                    </p>
                  </div>
                </div>
              </div>
            </a>
          </div>

         -->
        
        </div>
      </div>
    </section>
    <!-- end of video section  -->

    <section class="sc-idx-10 px-3">
      <div class="container">
        <div class="sc-content">
          <div class="sc-title">
            <div class="sc-title-text"><?php echo get_cat_name(8); ?></div>
            <a href="<?php echo esc_url(get_category_link(8)); ?>" class="sc-title-link">
              <span class="link-text">सबै हेर्नुहोस्</span>
              <span class="link-icon">
                <i class="fas fa-chevron-right"></i>
              </span>
            </a>
          </div>

          <div class="slider-idx-10 owl-carousel owl-theme">

                <?php
                $args = array(
                'cat' => 8, 
                'posts_per_page' => 12,
                'offset' => 0,
                'post_status' => 'publish',
                'orderby' => 'date',
                'order' => 'DESC',
                );
                $my_query = new WP_Query($args);
                if ($my_query->have_posts()) :
                while ($my_query->have_posts()) :
                  $my_query->the_post();
                  $post_id = get_the_ID();
                ?>

            <a href="<?php the_permalink(); ?>" class="itm-card itm-card-block">
              <div class="itm-card-img img-cover">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" />
              </div>
              <div class="itm-card-body mt-3">
                <h6 class="fw-8 fs-18 lh-30 title-clr">
                  <?php the_title(); ?>
                </h6>
              </div>
            </a>

            <!-- <a href="#" class="itm-card itm-card-block">
              <div class="itm-card-img img-cover">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pg_idx_1/sc_idx_10_2.png" />
              </div>
              <div class="itm-card-body mt-3">
                <h6 class="fw-8 fs-18 lh-30 title-clr">
                  पल शाहले भने- नियोजित ढंगले फसाउन खोजियो
                </h6>
              </div>
            </a>

            <a href="#" class="itm-card itm-card-block">
              <div class="itm-card-img img-cover">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pg_idx_1/sc_idx_10_3.png" />
              </div>
              <div class="itm-card-body mt-3">
                <h6 class="fw-8 fs-18 lh-30 title-clr">
                  पल शाहले भने- नियोजित ढंगले फसाउन खोजियो
                </h6>
              </div>
            </a>

            <a href="#" class="itm-card itm-card-block">
              <div class="itm-card-img img-cover">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pg_idx_1/sc_idx_10_4.png" />
              </div>
              <div class="itm-card-body mt-3">
                <h6 class="fw-8 fs-18 lh-30 title-clr">
                  पल शाहले भने- नियोजित ढंगले फसाउन खोजियो
                </h6>
              </div>
            </a>

            <a href="#" class="itm-card itm-card-block">
              <div class="itm-card-img img-cover">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pg_idx_1/sc_idx_10_5.png" />
              </div>
              <div class="itm-card-body mt-3">
                <h6 class="fw-8 fs-18 lh-30 title-clr">
                  पल शाहले भने- नियोजित ढंगले फसाउन खोजियो
                </h6>
              </div>
            </a>

            <a href="#" class="itm-card itm-card-block">
              <div class="itm-card-img img-cover">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pg_idx_1/sc_idx_10_1.png" />
              </div>
              <div class="itm-card-body mt-3">
                <h6 class="fw-8 fs-18 lh-30 title-clr">
                  पल शाहले भने- नियोजित ढंगले फसाउन खोजियो
                </h6>
              </div>
            </a>
           -->

                  <?php
                    endwhile;
                  endif;
                  wp_reset_postdata();
                  ?>
          
          </div>
        </div>
      </div>
    </section>

   
   
    <?php get_footer(); ?>