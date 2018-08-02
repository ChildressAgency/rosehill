<?php get_header(); ?>
  <main>
    <div class="events">
      <div class="container">
        <?php 
          if(have_posts()){
            while(have_posts()){
              the_post();
              the_content();
            }
          } ?>
          
        <?php if(have_rows('events')): while(have_rows('events')): the_row(); ?>
          <div class="event">
            <h2><?php the_sub_field('event_title'); ?><span> &mdash; <?php the_sub_field('event_price'); ?></span></h2>
            <?php the_sub_field('event_details'); ?>
          </div>
        <?php endwhile; endif; ?>
      </div>
    </div>
  </main>
<?php get_footer(); ?>