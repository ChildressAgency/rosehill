<?php get_header(); ?>
<main>
  <div class="container">
    <?php if(is_archive()): ?>
      
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <div class="post-summary">
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <?php the_excerpt(); ?>
        </div>
      <?php endwhile; endif; ?>

    <?php else: ?>

      <?php if(have_posts()): ?>
        <article>
          <?php while(have_posts()): the_post(): ?>
            <?php the_content(); ?>
          <?php endwhile; ?>
        </article>
      <?php endif; ?>

    <?php endif; ?>
  </div>
</main>
<?php get_footer(); ?>