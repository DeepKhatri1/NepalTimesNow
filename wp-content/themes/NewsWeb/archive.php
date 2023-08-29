<?php get_header();

?>

        <!-- news collection section  -->

      <section class="sc-news-collection px-3">
        <div class="container">
          <div class="sc-title mb-3"> 
            <h1 class="title-base fw-7">
                <?php echo single_cat_title(); ?>
                <!-- राजनितिक बिचारहरु -->
            </h1>
          </div>
          <div class="row pb-3">

          <?php
          // add_action('pre_get_posts', 'custom_modify_archive_query');

          // function custom_modify_archive_query($query) {
          //     // Check if it's the main query and if we are on the archive page
          //     if ($query->is_main_query() && $query->is_archive()) {
          //         // Set the number of posts per page as per your requirement
          //         $posts_per_page = 1; // Change this number to the desired limit
          
          //         // Set the number of posts per page for the archive query
          //         $query->set('posts_per_page', $posts_per_page);
          //     }
          // }
          ?>

         

          <?php if(have_posts()):
          while(have_posts()): 
            the_post();
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
                    <p class="category mb-0 p-text-x-sm op-04 fw-4">
                        <?php echo single_cat_title(); ?>
                    </p>
                    <h1 class="fw-7 text-dark-purple fs-17 lh-26">
                      <?php the_title(); ?>
                    </h1>
                    <div
                      class="auther-detail d-flex align-items-center justify-content-between mt-2"
                    >
                      <p
                        class="m-0 me-5 d-flex flex-column flex-md-row align-items-center op-05 text-black p-text-x-sm"
                      >
                        <span><i class="fa-solid fa-clock"></i></span
                        ><span class="ms-md-2 text-md-start text-center"
                          >
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
                          </span
                        >
                      </p>
                      <!-- <p
                        class="m-0 d-flex flex-column flex-md-row align-items-center op-05 text-black p-text-x-sm"
                      >
                        <span><i class="fa-solid fa-user-pen"></i></span
                        ><span class="ms-md-2 text-md-start text-center"
                          >२१ मिनेट अगाडि</span
                        >
                      </p> -->
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <?php
            endwhile;
        endif; 
            ?>

            <?php wp_pagenavi(); ?>
            
        </div>
        </div>
      </section>
      <!-- end of news collection section  -->


      <!-- banner-section  -->
      <!-- <section
        class="sc-join bg-property bg-overlay-dark px-3"
        style="
          background: url('./assets/images/index-page/sc-main-news/news-img-sm.png');
        "
      >
        <div class="container h-100">
          <div
            class="sc-wrapper d-flex flex-column align-items-center justify-content-center text-center h-100"
          >
            <h1 class="p-text-xx-lg fw-7 text-white mb-2">
              बिचारसंग छलफल, सहमत, असहमत जनाउन हामी संग जोडिनुहोस् ।
            </h1>
            <a
              href=""
              class="btn btn-rounded btn-transparent btn-transparent-white font-plus"
              ><span>Join Now</span></a
            >
          </div>
        </div>
      </section> -->
      <!-- end of banner section  -->

      

      <!-- video section  -->
      <!-- <section class="sc-video px-3">
        <div class="container">
          <div class="sc-title mb-3">
            <h1 class="title-base">बिचारमा बहस भिडियो</h1>
          </div>
          <div class="row d-flex align-items-center">
            <div class="col-lg-2 col-md-4 col-l mb-4">
              <div class="col-container p-2">
                <div class="items-title mb-3">
                  <h2 class="p-text-lg fw-7">UP NEXT</h2>
                </div>
                <div class="shedule">
                  <div class="item border-bottom py-2">
                    <p class="m-0 mb-1 p-text-md fw-5 text-dark-purple">
                      6:00 AM
                    </p>
                    <p class="m-0 p-text-x-md fw-7 text-dark-purple">
                      दर्शन बिज्ञान
                    </p>
                  </div>
                  <div class="item border-bottom py-2">
                    <p class="m-0 mb-1 p-text-md fw-5 text-dark-purple">
                      6:00 AM
                    </p>
                    <p class="m-0 p-text-md fw-7 text-dark-purple">
                      दर्शन बिज्ञान
                    </p>
                  </div>
                  <div class="item border-bottom py-2">
                    <p class="m-0 mb-1 p-text-md fw-5 text-dark-purple">
                      6:00 AM
                    </p>
                    <p class="m-0 p-text-md fw-7 text-dark-purple">
                      दर्शन बिज्ञान
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-8 col-m mb-4">
              <div class="col-wrapper">
                <div class="news-container-x-lg">
                  <a href="./single-news.html">
                    <div class="img-container position-relative">
                      <div class="img-cover">
                        <img
                          src="./assets/images/index-page/sc-main-news/news-img-sm.png"
                          alt=""
                        />
                      </div>
                      <div
                        class="play-icon position-absolute top-50 w-100"
                        style="transform: translateY(-50%)"
                      >
                        <p class="m-0 text-center text-white title-md op-05">
                          <span><i class="fa-regular fa-circle-play"></i></span>
                        </p>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-r mb-4">
              <div class="text-content text-center text-lg-start">
                <p
                  class="m-0 text-dark-purple p-text-md fw-5 live-symbol d-flex align-items-center justify-content-center justify-content-lg-start mb-3"
                >
                  <span class="me-3"></span><span>Live Now</span>
                </p>
                <h1 class="fs-25 text-dark-purple">दर्शन बिज्ञान</h1>
                <div class="content mb-2">
                  <p class="m-0 op-07 p-text-base fw-4 text-black">
                    तत्काल लागू हुनेगरी च्याट जिपिटीमाथि प्रतिबन्ध लगाएर
                    अनुसन्धान सुरु गरिएको उक्त नियामक निकायले जनाएको छ ।
                  </p>
                </div>
                <a href="" class="btn btn-rounded btn-dark-purple font-plus">
                  <span><i class="fa-solid fa-plus"></i></span
                  ><span class="ms-2">Start Watching</span></a
                >
              </div>
            </div>
            <div class="col-lg-4 mb-4">
              <a href="./single-news.html">
                <div class="news-container border-0">
                  <div class="img-container position-relative">
                    <div class="img-cover">
                      <img
                        src="./assets/images/index-page/sc-main-news/news-img-sm.png"
                        alt=""
                      />
                    </div>
                    <div
                      class="play-icon position-absolute top-50 w-100"
                      style="transform: translateY(-50%)"
                    >
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
                        src="./assets/images/index-page/sc-main-news/news-img-sm.png"
                        alt=""
                      />
                    </div>
                    <div
                      class="play-icon position-absolute top-50 w-100"
                      style="transform: translateY(-50%)"
                    >
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
                        src="./assets/images/index-page/sc-main-news/news-img-sm.png"
                        alt=""
                      />
                    </div>
                    <div
                      class="play-icon position-absolute top-50 w-100"
                      style="transform: translateY(-50%)"
                    >
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
            
          </div>
        </div>
      </section> -->


        <?php get_footer();  ?>