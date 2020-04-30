<?php get_header(); ?>

<div class="container">
  <h1 class="text-primary my-5"><?php the_field('header') ?></h1>

  <div class="row mb-5">
    <?php if( have_rows('discography') ): ?>

    <?php while( have_rows('discography') ): the_row(); ?>
    <div class="disco col-12 col-md-6 mb-3 mb-md-0">

      <div class="disco__box text-light py-4 px-3">
        <h2 class="text-center"><?php the_sub_field('title') ?></h2>
        <p class="disco__release lead text-center">Release date: <?php the_sub_field('year') ?></p>
        <div class="row mt-5">
          <div class="col-12 col-md-5">
            <img class="disco__img shadow-lg rounded" src="<?= get_sub_field('album_img')['url'] ?>" alt="">
          </div>
          <div class="col-12 col-md-7">
            <div class="disco__content mt-5 mt-md-0">
              <p class="disco__description"><?php the_sub_field('description') ?></p>
            </div>
          </div>
        </div>
        <div class="disco__links mt-4">
          <h4 class="disco__listen">Where to listen:</h4>
          <ul class="disco__links">
            <li><a class="text-light" href="<?php the_sub_field('amazon_link') ?>">Amazon</a></li>
            <li><a class="text-light" href="<?php the_sub_field('spotify_link') ?>">Spotify</a></li>
          </ul>
        </div>
      </div>
    </div>

    <?php endwhile; ?>

    <?php endif; ?>
  </div>
</div>

<?php get_footer(); ?>