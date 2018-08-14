  <div id="book-today" class="hp-article" style="background-image:url(<?php echo get_field('book_your_hunt_section_background_image', 'option'); ?>); <?php echo get_field('book_your_hunt_section_background_image_css', 'option'); ?>">
    <div class="container">
      <h2 style="color:<?php echo get_field('book_your_hunt_section_text_color', 'option'); ?>;">Book your Hunt Today!</h2>
      <a href="tel:<?php the_field('phone_number', 'option'); ?>" class="book-section-phone" style="color:<?php echo get_field('book_your_hunt_section_text_color', 'option'); ?>;"><?php the_field('phone_number', 'option'); ?></a>
    </div>
  </div>

  <footer id="footer">
    <div class="container-fluid">
      <nav id="footer-nav">
        <?php 
          $footer_nav_args = array(
            'theme_location' => 'footer-nav',
            'menu' => '',
            'container' => '',
            'container_id' => '',
            'container_class' => '',
            'menu_class' => 'list-unstyled list-inline text-center',
            'echo' => true,
            'fallback_cb' => 'rosehill_footer_fallback_menu',
            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth' => 1,
          );
          wp_nav_menu($footer_nav_args);
        ?>
      </nav>
      <hr />
      <div class="contact-info">
        <p><?php the_field('address', 'option'); ?> <?php the_field('city_state_zip', 'option'); ?> &nbsp;&bull;&nbsp; <?php the_field('phone_number', 'option'); ?> &nbsp;&bull;&nbsp;
          <?php if(get_field('twitter', 'option')): ?>
            <a href="<?php the_field('twitter', 'option'); ?>" class="twitter text-hide" target="_blank">Twitter<i class="fab fa-twitter-square"></i></a>
          <?php endif; if(get_field('facebook', 'option')): ?>
            <a href="<?php the_field('facebook', 'option'); ?>" class="facebook text-hide" target="_blank">Facebook<i class="fab fa-facebook"></i></a>
          <?php endif; if(get_field('google_plus', 'option')): ?>
            <a href="<?php the_field('google_plus', 'option'); ?>" class="google-plus text-hide" target="_blank">Google+<i class="fab fa-google-plus-square"></i></a>
          <?php endif; if(get_field('instagram', 'option')): ?>
            <a href="<?php the_field('instagram', 'option'); ?>" class="instagram text-hide" target="_blank">Instagram<i class="fab fa-instagram"></i></a>
          <?php endif; ?>
        </p>
      </div>
      <div class="copyright">
        <p>Copyright &copy; <?php date('Y'); ?> Rose Hill Farm. All rights reserved.</p>
        <p>Website created by <a href="https://childressagency.com" target="_blank">The Childress Agency</a></p>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>

</html>