<?php get_header(); ?>

<div class="jumbotron jumbotron-fluid" style="background-image: url('<?= get_field('header_img')['url'] ?>')">
  <div class="container">
    <h1 class="display-4 text-light"><?php the_field('header') ?></h1>
    <p class="lead text-light"><?php the_field('header_lead') ?></p>
  </div>
</div>

<div class="container">
  <?php if( have_rows('discography') ): ?>

  <?php while( have_rows('discography') ): the_row(); ?>

  <div class="row">
    <div class="disco text-light">
      <h3 class="display-4 ml-5"><?php the_sub_field('title') ?></h3>
      <span class="disco__release lead ml-5">Release date: <?php the_sub_field('year') ?></span>
      <div class="row mt-5">
        <div class="col-12 col-md-5">
          <img class="disco__img shadow-lg rounded" src="<?= get_sub_field('album_img')['url'] ?>" alt="">
        </div>
        <div class="col-12 col-md-7">
          <div class="disco__content mt-5 mt-md-0">
            <p class="disco__description"><?php the_sub_field('description') ?></p>
            <div class="disco__links">
              <h4 class="disco__listen">Where to listen:</h4>
              <ul class="disco__links">
                <li><a class="text-light" href="<?php the_sub_field('amazon_link') ?>">Amazon</a></li>
                <li><a class="text-light" href="<?php the_sub_field('spotify_link') ?>">Spotify</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="disco__linebreak">

      </div>
    </div>
  </div>

  <?php endwhile; ?>

  <?php endif; ?>
</div>

<?php get_footer(); ?>