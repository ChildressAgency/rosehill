<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="">

  <meta http-equiv="cache-control" content="public">
  <meta http-equiv="cache-control" content="private">

  <title>Rose Hill Game Preserve</title>

  <?php wp_head(); ?>

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
  <nav id="header-nav"<?php if(is_front_page()){ echo ' class="hp-nav"'; } ?>>
    <div class="container-fluid">
      <div class="navbar-header">
        <a href="<?php echo home_url(); ?>" class="navbar-brand text-hide">
          Rose Hill Game Preserve
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" class="img-responsive" alt="Rose Hill Game Preserve Logo" />
        </a> 
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <div class="upper-nav">
          <div class="social">
            <?php if(get_field('twitter', 'option')): ?>
              <a href="<?php the_field('twitter', 'option'); ?>" class="twitter text-hide" target="_blank">Twitter<i class="fab fa-twitter-square"></i></a>
            <?php endif; if(get_field('facebook', 'option')): ?>
              <a href="<?php the_field('facebook', 'option'); ?>" class="facebook text-hide" target="_blank">Facebook<i class="fab fa-facebook"></i></a>
            <?php endif; if(get_field('google_plus', 'option')): ?>
              <a href="<?php the_field('google_plus', 'option'); ?>" class="google-plus text-hide" target="_blank">Google+<i class="fab fa-google-plus-square"></i></a>
            <?php endif; if(get_field('instagram', 'option')): ?>
              <a href="<?php the_field('instagram', 'option'); ?>" class="instagram text-hide" target="_blank">Instagram<i class="fab fa-instagram"></i></a>
            <?php endif; ?>
          </div>
          <div class="header-phone">
            <p>Call Today: <a href="tel:<?php the_field('phone_number', 'option'); ?>"><?php the_field('phone_number', 'option'); ?></a></p>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="lower-nav">
          <?php
            $header_nav_args = array(
              'theme_location' => 'header-nav',
              'menu' => '',
              'container' => '',
              'container_id' => '',
              'container_class' => '',
              'menu_class' => 'nav navbar-nav navbar-right',
              'echo' => true,
              'fallback_cb' => 'rosehill_header_fallback_menu',
              'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
              'depth' => 2,
              'walker' => new wp_bootstrap_navwalker()
            );
            wp_nav_menu($header_nav_args);
          ?>
        </div>
      </div>
    </div>
  </nav>

  <div<?php if(is_front_page()){ echo ' id="hp-hero"'; } ?> class="hero" style="background-image:url(<?php the_field('hero_image'); ?>); <?php the_field('hero_image_css'); ?>">
    <div class="container">
      <div class="hero-caption">
        <?php if(is_front_page()):
          if(get_field('hero_caption_image')): 
            $hero_caption_image = get_field('hero_caption_image'); ?>
            <img src="<?php echo $hero_caption_image['url']; ?>" class="img-responsive center-block" alt="<?php echo $hero_caption_image['alt']; ?>" />
        <?php endif; endif; ?>
        <h1><?php echo get_field('hero_caption') ? get_field('hero_caption') : get_the_title(); ?></h1>
      </div>
    </div>
  </div>
