<?php get_header(); ?>
  <main>
    <div class="container">
      <?php 
        if(have_posts()){
          while(have_posts()){
            the_post();
            the_content();
          }
        } ?>

      <?php if(have_rows('faqs')): while(have_rows('faqs')): the_row(); ?>
        <div class="faq">
          <h4><?php the_sub_field('question'); ?></h4>
          <?php the_sub_field('answer'); ?>
        </div>
      <?php endwhile; endif; ?>
    </div>
  </main>
<?php get_footer(); ?>