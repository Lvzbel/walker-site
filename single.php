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

<div class="wrapper" id="single-wrapper">

  <div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

    <div class="row">

      <!-- Do the left sidebar check -->
      <?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

      <main class="site-main" id="main">

        <?php while ( have_posts() ) : the_post(); ?>

        <div class="container my-5">
          <?php the_post_thumbnail('large', array('class' => 'd-block mx-auto shadow rounded')) ?>

          <h1 class="text-primary my-4"><?php the_title(); ?></h1>
          <?php the_content() ?>
        </div>

        <?php endwhile; // end of the loop. ?>

      </main><!-- #main -->

    </div><!-- .row -->

  </div><!-- #content -->

</div><!-- #single-wrapper -->

<?php get_footer(); ?>