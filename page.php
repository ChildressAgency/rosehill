<?php get_header(); ?>
<main>
  <div class="container">
    <?php if(have_posts()): ?>
      <article>
        <?php 
          while(have_posts()): the_post();
            the_content(); 
          endwhile;
        ?>
      </article>
    <?php endif; ?>
  </div>
</main>
<?php get_footer(); ?>