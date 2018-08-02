<?php get_header(); ?>
  <div id="hp-about" class="hp-article">
    <div class="container">
      <?php the_field('about_section_content'); ?>
      <div class="row">
        <div class="col-sm-6">
          <?php $about_image_1 = get_field('about_section_image_1'); ?>
          <img src="<?php echo $about_image_1['url']; ?>" class="img-responsive center-block" alt="<?php echo $about_image_1['alt']; ?>" />
        </div>
        <div class="col-sm-6">
          <?php $about_image_2 = get_field('about_section_image_2'); ?>
          <img src="<?php echo $about_image_2['url']; ?>" class="img-responsive center-block" alt="<?php echo $about_image_2['alt']; ?>" />
        </div>
      </div>
      <a href="<?php echo esc_url(home_url('gallery')); ?>" class="gallery-link">Gallery >></a>
    </div>
    <span class="background-bar"></span>
  </div>

  <article id="hp-activities" class="hp-article">
    <div class="container">
      <?php the_field('activities_section_content'); ?>
      <?php if(have_rows('activities')): ?>
        <div class="row">
          <?php $a=0; while(have_rows('activities')): the_row(); ?>

            <?php if($a%3==0){ echo '<div class="clearfix"></div>'; } ?>
            <div class="col-sm-4">
              <div class="activity-card">
                <?php $activity_image = get_sub_field('activity_image'); ?>
                <img src="<?php echo $activity_image['url']; ?>" class="img-responsive center-block" alt="<?php echo $activity_image['alt']; ?>" />
                <h3><?php the_sub_field('activity_title'); ?></h3>
                <p><?php the_sub_field('activity_description'); ?></p>
                <a href="<?php the_sub_field('activity_link'); ?>" class="btn-main">Learn More</a>
              </div>
            </div>

          <?php endwhile; ?>
        </div>
      <?php endif; ?>
    </div>
  </article>

  <article id="hp-history" class="hp-article">
    <div class="container">
      <?php the_field('history_section_content'); ?>
      <a href="<?php echo esc_url(home_url('history')); ?>" class="btn-main">Learn More</a>
      <div class="social">
        <?php the_field('social_links_intro'); ?>
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
    </div>
  </article>

  <div id="hp-testimonials" class="hp-article">
    <div class="container">
      <h2><?php the_field('testimonials_section_title'); ?></h2>
      <hr />
      <?php 
        $testimonials = get_field('testimonials'); 
        if($testimonials): ?>
          <div id="testimonials-carousel" class="carousel slide" data-ride="">
            <ol class="carousel-indicators">
              <?php 
                $tc = count($testimonials);
                for($t=0; $t<$tc; $t++): ?>
                  <li data-target="#testimonials-carousel" data-slide-to="<?php echo $t; ?>"<?php if($t==0){ echo ' class="active"'; } ?>></li>
              <?php endfor; ?>
            </ol>

          <div class="carousel-inner" role="listbox">
            <?php $i=0; foreach($testimonials as $testimonial): ?>
              <div class="item<?php if($i==0){ echo ' active'; } ?>">
                <div class="carousel-caption">
                  <blockquote>
                    <p><?php echo $testimonial['testimonial']; ?></p>
                    <footer><cite><?php echo $testimonial['testimonial_author']; ?></cite></footer>
                  </blockquote>
                </div>
              </div>
            <?php $i++; endforeach; ?>
          </div>
          
        </div>
      <?php endif; ?>
    </div>
  </div>
<?php get_footer(); ?>