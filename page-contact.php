<?php get_header(); ?>
  <main>
    <div class="container contact-info">
      <div class="row">
        <div class="col-sm-4">
          <h2>General Information:</h2>
          <p><?php the_field('general_email', 'option'); ?></p>
        </div>
        <div class="col-sm-4">
          <h2>Reservations:</h2>
          <p><?php the_field('reservations_email', 'option'); ?></p>
        </div>
        <div class="col-sm-4">
          <h2>Phone:</h2>
          <p><?php the_field('phone_number', 'option'); ?></p>
        </div>
      </div>
    </div>
    <div class="container-fluid location">
      <div class="row">
        <div class="col-sm-6">
          <?php 
            if(have_posts()){
              while(have_posts()){
                the_post();
                the_content();
              }
            } ?>
        </div>
        <div class="col-sm-6">
          <div class="embed-responsive embed-responsive-4by3">
            <?php
              $map_iframe = get_field('google_map_iframe', 'option');
              $map_iframe = str_replace('allowfullscreen>', 'allowfullscreen class="embed-responsive-item">', $map_iframe);
              echo $map_iframe;
            ?>           
          </div>
        </div>
      </div>
    </div>
  </main>
<?php get_footer(); ?>