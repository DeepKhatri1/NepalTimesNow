<!DOCTYPE html <?php language_attributes(); ?>>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <meta property="og:title" content="<?php echo esc_attr(get_the_title()); ?>" />
	<meta property="og:image" content="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID())); ?>" />

  <title>
      <?php
        $site_name=get_bloginfo('name');
        $site_tagline=get_bloginfo('description');
        $site_title=$site_name . " | " . $site_tagline;
        echo $site_title;
      ?>
  </title>

    <!-- Favicon -->
    <?php
      echo '<link rel="icon" type="image/png" href="' . esc_url(get_site_icon_url()) . '">';
    ?>

  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- boostrap 5 cdn  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <!-- font awesome cdn  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- slick slider cdn  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
    integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
    integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- owl carousel -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- custome css -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />

  <!-- Share Twitter All & FB -->
  <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5f6732fff875b3001244a704&product=sop' async='async'></script>
    
  <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v8.0&appId=361197191075825&autoLogAppEvents=1" nonce="8s3VoHdp"></script>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
     <div class="page-wrapper position-relative">
    <header class="sc-navbar mb-3">
      <div class="top-header py-3">
        <div class="container">
          <div class="logo-bar pb-3">
            <div class="logo-wrapper mx-auto">
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
            </div>
          </div>
          <div
            class="other-detail-bar d-flex flex-column flex-lg-row align-items-center justify-content-evenly position-relative">
            <div
              class="date-wrapper d-flex flex-column mb-3 mb-lg-0 flex-sm-row align-items-center justify-content-start">
              
              <p class="m-0 me-sm-4 fs-14 text-black fw-5">
                <span class="me-2"><i class="fa-solid fa-calendar-days"></i></span><span>
                  <?php echo postNepaliDate(date('Y'), date('m'), date('d')); ?>
                  <!-- वि.सं २०८० जेठ १५ सोमबार -->
                </span>
              </p>
            </div>
            <ul class="social-media-icon ms-3 d-flex align-items-center justify-content-end">

            <?php if (get_theme_mod('facebook_link')) : ?>
              <li class="social-media-item mx-2">
                <a href="<?php echo esc_url(get_theme_mod('facebook_link')); ?>" class="social-media-link"><span class="d-flex align-items-center justify-content-center"><i
                      class="fa-brands fa-facebook"></i></span></a>
              </li>
            <?php endif; ?>

            <?php if (get_theme_mod('twitter_link')) : ?>
              <li class="social-media-item mx-2">
                <a href="<?php echo esc_url(get_theme_mod('twitter_link')); ?>" class="social-media-link"><span class="d-flex align-items-center justify-content-center"><i
                      class="fa-brands fa-twitter"></i></span></a>
              </li>
            <?php endif; ?>

            <?php if (get_theme_mod('youtube_link')) : ?>
              <li class="social-media-item mx-2">
                <a href="<?php echo esc_url(get_theme_mod('youtube_link')); ?>" class="social-media-link"><span class="d-flex align-items-center justify-content-center"><i
                      class="fa-brands fa-youtube"></i></span></a>
              </li>
            <?php endif; ?>

            <?php if (get_theme_mod('instagram_link')) : ?>
              <li class="social-media-item mx-2">
                <a href="<?php echo esc_url(get_theme_mod('instagram_link')); ?>" class="social-media-link"><span class="d-flex align-items-center justify-content-center"><i
                      class="fa-brands fa-instagram"></i></span></a>
              </li>
            <?php endif; ?>  
              
            </ul>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-expand-lg shadow-lg" id="navbar">
        <div class="container">

            <?php
            $custom_logo_id = get_theme_mod('custom_logo');
            $logo_url = wp_get_attachment_image_src($custom_logo_id, 'full');
            ?>
          <a href="<?php echo esc_url(home_url('/')); ?>" class="navbar-brand" style="flex-basis: 120px">
              <?php
                if ($logo_url){
                    echo '<img src="' . esc_url($logo_url[0]) . '" alt="Logo">';
                }
              ?>
          </a>
          <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fa-solid fa-bars"></i></span>
          </button>




          <div class="collapse navbar-collapse" id="navbarSupportedContent">

                  <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary-menu',
                        'container' => false,
                        'menu_class' => 'srdsdasdas',
                        'fallback_cb' => '__return_false',
                        'items_wrap' => '<ul id="%1$s" class="navbar-nav mx-auto mb-2 mb-lg-0">%3$s</ul>',
                        'depth' => 2,
                        'walker' => new bootstrap_5_wp_nav_menu_walker()
                    ));
                    ?>

            </ul>
          </div>
        </div>
      </nav>
    </header>