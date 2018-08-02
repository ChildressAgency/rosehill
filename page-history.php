<?php get_header(); ?>
  <main>
    <div class="container">
      <?php if(have_posts()): ?>
        <article>
          <?php 
            while(have_posts()){
              the_post();
              the_content();
            }
          ?>
        </article>
      <?php endif; ?>

      <div class="eras">
        <?php 
          $eras = get_field('eras'); 
          if($eras): ?>
            <ul class="nav nav-tabs" role="tablist">
              <?php $e=0; foreach($eras as $era): ?>
                <li role="presentation"<?php if($e==0){ echo ' class="active"'; } ?>><a href="#<?php echo sanitize_title($era['era_title']); ?>" aria-controls="<?php echo sanitize_title($era['era_title']); ?>" role="tab" data-toggle="tab"><?php echo $era['era_title']; ?></a></li>
              <?php $e++; endforeach; reset($eras); ?>
            </ul>
        <?php endif; ?>

        <div class="tab-content">
          <?php $c = 0; foreach($eras as $era): ?>
            <div class="tab-pane fade<?php if($c==0){ echo ' in active'; } ?>" id="<?php echo sanitize_title($era['title']); ?>">
              <?php echo $era['era_content']; ?>
            </div>
          <?php $c++; endforeach; ?>
        </div>
      </div>
    </div>
  </main>
<?php get_footer(); ?>