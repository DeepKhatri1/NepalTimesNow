<!-- footer section  -->
<footer class="footer" id="footer">
      <div class="footer-content">
        <!-- footer top -->
        <div class="ftr-top px-3">
          <div class="container">
            <div class="d-flex align-items-center flex-column flex-xl-row justify-content-xl-between">
              <a href="#" class="btn btn-primary">Preeti to Unicode Converter</a>
              
              
              <!-- <div class="text-center py-4 d-sm-flex py-xl-0">
                <span class="text-primary fw-5 fs-24 lh-33 d-inline-block mb-3 mb-sm-0">सामाजिक संजाल</span>
                <ul class="ftr-social-links d-flex align-items-center">

                
                  <?php if (get_theme_mod('facebook_link')) : ?>
                    <li>
                      <a href="<?php echo esc_url(get_theme_mod('facebook_link')); ?>"><i class="fab fa-facebook-f"></i></a>
                    </li>
                  <?php endif; ?>

                  <?php if (get_theme_mod('instagram_link')) : ?>
                    <li>
                      <a href="<?php echo esc_url(get_theme_mod('instagram_link')); ?>"><i class="fab fa-instagram"></i></a>
                    </li>
                  <?php endif; ?>

                  <?php if (get_theme_mod('twitter_link')) : ?>
                    <li>
                      <a href="<?php echo esc_url(get_theme_mod('twitter_link')); ?>"><i class="fab fa-twitter"></i></a>
                    </li>
                  <?php endif; ?>

                  <?php if (get_theme_mod('youtube_link')) : ?>
                    <li>
                      <a href="<?php echo esc_url(get_theme_mod('youtube_link')); ?>"><i class="fab fa-youtube"></i></a>
                    </li>
                  <?php endif; ?>


                </ul>
              </div> -->
              <!-- <a href="#" class="btn btn-primary">लेख रचना पठाउन</a> -->
            
            
            
            </div>
          </div>
        </div>
        <!-- end of footer top -->



        <!-- footer bottom part -->
        <div class="ftr-bottom px-3 bg-grey-C1">
          <div class="container">
            <div class="item-wrap py-3">
              <div class="mb-3 item">
              <?php
            $custom_logo_id = get_theme_mod('custom_logo');
            $logo_url = wp_get_attachment_image_src($custom_logo_id, 'full');
            ?>
              <a href="<?php echo esc_url(home_url('/')); ?>">
              <?php
                if ($logo_url){
                    echo '<img src="' . esc_url($logo_url[0]) . '" alt="Logo">';
                }
              ?>
              </a>
                <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ashok serchik typographay.png" alt="site logo" /> -->
              </div>
              <div class="item mb-3">
                <p class="mb-0 fs-18 fw-5 text-black-a-07 text-center">सूचना विभाग दर्ता नं:</p>
                <p class="m-0 fs-16 text-center fw-3"><?php echo get_theme_mod('darta_number') ?></p>
              </div>
              <div class="item mb-3">
                <p class="mb-0 fs-18 fw-5 text-black-a-07 text-center">अध्यक्ष</p>
                <p class="m-0 fs-16 text-center fw-3"><?php echo get_theme_mod('owner_name') ?></p>
              </div>
              <div class="item mb-3">
                <p class="mb-0 fs-18 fw-5 text-black-a-07 text-center">प्रधान सम्पादकः</p>
                <p class="m-0 fs-16 text-center fw-3"><?php echo get_theme_mod('pradhan_sampaadak') ?></p>
              </div>
              <div class="item mb-3">
                <p class="mb-0 fs-18 fw-5 text-black-a-07 text-center"><?php echo get_theme_mod('email_address') ?></p>
                <p class="m-0 fs-16 text-center fw-3"><?php echo get_theme_mod('phone_number') ?></p>
              </div>
              <div class="item mb-3">
                <p class="mb-0 fs-16 fw-5 text-black-a-07 mx-auto"style="width:fit-content;">

                <?php if (get_theme_mod('facebook_link')) : ?>
                  <a href="<?php echo esc_url(get_theme_mod('facebook_link')); ?>">
                    <span class="mx-2"><i class="fa-brands fa-facebook"></i></span>
                  </a>
                <?php endif; ?>

                  <?php if (get_theme_mod('instagram_link')) : ?>
                  <a href="<?php echo esc_url(get_theme_mod('instagram_link')); ?>">
                    <span class="mx-2"><i class="fa-brands fa-instagram"></i></span>
                  </a>
                <?php endif; ?>

                <?php if (get_theme_mod('twitter_link')) : ?>
                  <a href="<?php echo esc_url(get_theme_mod('twitter_link')); ?>">
                    <span class="mx-2"><i class="fa-brands fa-twitter"></i></span>
                  </a>
                <?php endif; ?>
                  
                <?php if (get_theme_mod('youtube_link')) : ?>
                  <a href="<?php echo esc_url(get_theme_mod('youtube_link')); ?>">
                    <span class="mx-2"><i class="fa-brands fa-youtube"></i></span>
                  </a>
                <?php endif; ?>

                </p>
                <p class="m-0 fs-8 text-center fw-2 mt-3 copyright-message">Copyright © <?php echo get_theme_mod('copyright') ?> nepaltimesnow.com</p>
              </div>
            </div>
          </div>
        </div>
        <!-- end of footer bottom part -->
      </div>
    </footer>
    <!-- end of footer section  -->
  </div>
  <!-- jquery cdn  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
    integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- boostrap 5 cdn  -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <!-- slick slider cdn  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
    integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- owl carousel -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/script/script.js" async defer></script>

  <?php wp_footer(); ?>
</body>

</html>