<?php get_header(); ?>
  <main>
    <div class="events">
      <div class="container">
        <?php the_field('events_page_intro'); ?>
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