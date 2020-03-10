<?php get_header(); ?>
</div>
<div class="container bg-secondary">
  <div class="bio">
    <h1 class="bio__header display-4 text-light"><?php the_field('title') ?></h1>
    <div class="bio__content row">
      <div class="col-12 col-lg-6">
        <div class="bio__container">
          <img class="bio__img mb-4 mb-md-5 mb-lg-0 shadow-lg" src="<?= get_field('image')['url'] ?>" alt="">
        </div>
      </div>
      <div class="col-12 col-lg-6 text-light">
        <div class="bio__container">
          <?php if( have_rows('description') ): ?>

          <?php while( have_rows('description') ): the_row(); ?>

          <p class="bio__text text-justify">
            <?php the_sub_field('paragraph') ?>
          </p>

          <?php endwhile; ?>

          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>