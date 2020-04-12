<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="container my-5">
  <?php the_post_thumbnail( 'large', array('class' => 'd-block mx-auto img-fluid shadow') ); ?>
  <?php while(have_posts()): the_post(); ?>
  <h1 class="my-3"><?php the_title(); ?></h1>
  <div class="text-primary">
    <strong>
      <?php the_field('date') ?> starting at <?php the_field('time') ?>
    </strong>
  </div>
  <div class="text-secondary mb-3">
    <strong>
      Location: <?php the_field('location') ?>
    </strong>
  </div>
  <?php the_content(); ?>
  <?php endwhile; ?>
</div>
<?php get_footer(); ?>