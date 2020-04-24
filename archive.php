<?php get_header(); ?>

<div class="blog container">
  <h1 class="text-primary mt-5"><?php the_archive_title() ?></h1>
  <div class="blog__content row d-flex justify-content-around">

    <?php while(have_posts()): the_post(); ?>
    <?php
    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
    ?>

    <div class="blog__post col-11 col-md-5"
      style="background-image: linear-gradient( 45deg, rgba(0,0,0, 0.6), rgba(0,0,0, 0.7)), url(<?= $image[0] ?>);">
      <a class="blog__link" href="<?php the_permalink(); ?>">
        <h2><?php the_title(); ?></h2>
      </a>
      <div class="blog__tags">
        <?php the_tags() ?>
      </div>

      <p><?php the_excerpt(); ?></p>

    </div>
    <?php endwhile; ?>
    <!-- The pagination component -->

  </div>
  <div class="blog__navigation">
    <?php understrap_pagination(); ?>
  </div>

</div>

<?php get_footer(); ?>