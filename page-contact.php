<?php get_header(); ?>
<div class="contact"
  style="background-image: linear-gradient( 45deg, rgba(0,0,0, 0.4), rgba(0,0,0, 0.4) ), url(<?= get_field('contact_image')['url']; ?>);">
  <div class="container">
    <?php while(have_posts()): the_post();?>

    <div class="contact__form row d-flex justify-content-center">
      <h1><?php the_title(); ?></h1>
      <div class="col-11">
        <?php the_content(); ?>
      </div>
    </div>

    <?php endwhile; ?>
  </div>
</div>
<?php get_footer(); ?>