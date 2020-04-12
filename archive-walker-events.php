<?php get_header(); ?>
<div class="container">
  <h1 class="text-primary my-5">All Events</h1>
  <?php while(have_posts()): the_post(); ?>
  <a class="d-block mx-auto" href="<?php the_permalink() ?>">
    <?php the_post_thumbnail('medium_large', array('class' => 'd-block mx-auto img-fluid shadow')); ?>
  </a>
  <h2>
    <a href="<?php the_permalink() ?>">
      <?php the_title(); ?>
    </a>
  </h2>
  <div class="text-primary">
    <strong>
      <?php the_field('date') ?> starting at <?php the_field('time') ?>
    </strong>
  </div>
  <div class="text-secondary">
    <strong>
      Location: <?php the_field('location') ?>
    </strong>
  </div>
  <div class="mb-5">
    <?php the_excerpt(); ?>
  </div>
  <?php endwhile; ?>

  <!-- The pagination component -->
  <?php understrap_pagination(); ?>
</div>
<?php get_footer(); ?>