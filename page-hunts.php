<?php get_header(); ?>
  <main>
    <div class="container">
      <?php if(have_posts()): ?>
        <article>
          <?php
            while(have_posts()){
              the_post();
              the_content(); 
            } ?>
        </article>
      <?php endif; ?>

      <div id="hunts">
        <?php 
          $hunts = get_field('hunts');
          if($hunts): ?>
            <ul class="nav nav-tabs" role="tablist">
              <?php $h=0; foreach($hunts as $hunt): ?>
                <li role="presentation"<?php if($h==0){ echo ' class="active"'; } ?>><a href="#<?php echo sanitize_title($hunt['hunt_title']); ?>" aria-controls="<?php echo sanitize_title($hunt['hunt_title']); ?>" role="tab" data-toggle="tab"><?php echo $hunt['hunt_title']; ?></a></li>
              <?php $h++; endforeach; reset($hunts); ?>
            </ul>
        <?php endif; ?>

        <div class="tab-content">
          <?php $hc=0; foreach($hunts as $hunt): ?>
            <div class="tab-pane fade<?php if($hc==0){ echo ' in active'; } ?>" id="<?php echo sanitize_title($hunt['title']); ?>">
              <?php echo $hunt['hunt_description']; ?>
            </div>
          <?php $hc++; endforeach; ?>
        </div>
      </div>
      <p class="btn-centered"><a href="<?php echo esc_url(home_url('our-rates')); ?>" class="btn-main">Our Prices</a></p>
    </div>
    <section id="safety-notice">
      <div class="container">
        <?php the_field('safety_notice_content'); ?>
      </div>
    </section>
  </main>
<?php get_footer(); ?>