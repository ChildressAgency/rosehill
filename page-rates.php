<?php get_header(); ?>
  <main>
    <?php
      if(have_posts()){
        while(have_posts()){
          the_post();
          the_content();
        }
      } ?>

    <?php if(have_rows('layout_type')): while(have_rows('layout_type')): the_row(); ?>
      <?php if(get_row_layout() == 'call-out-section'): ?>

        <section class="call-out-section">
          <div class="container">
            <?php the_sub_field('call_out_section_content'); ?>
          </div>
        </section>

      <?php else: ?>

        <section class="rate-section">
          <div class="container">
            <h2><?php the_sub_field('rate_title'); ?> &mdash; <span><?php the_sub_field('rate'); ?></span></h2>
            <hr />
            <?php the_sub_field('rate_information'); ?>
          </div>
        </section>

      <?php endif; ?>
    <?php endwhile; endif; ?>

  <?php if(get_field('contact_book_section_content')): ?>
    <section id="contact-book">
      <div class="container">
        <?php the_field('contact_book_section_content'); ?>
        <a href="tel:<?php the_field('phone_number', 'option'); ?>" class="book-section-phone"><?php the_field('phone_number', 'option'); ?></a>
      </div>
    </section>
  <?php endif; ?>

  <?php if(get_field('guides_and_dogs_section_content')): ?>
    <section id="guides-dogs">
      <div class="container">
        <?php the_field('guides_and_dogs_section_content'); ?>
      </div>
    </section>
  <?php endif; ?>

  <?php if(get_field('safety_notice')): ?>
    <section id="safety-notice">
      <div class="container">
        <?php the_field('safety_notice_content'); ?>
      </div>
    </section>
  <?php endif; ?>
  </main>
<?php get_footer(); ?>