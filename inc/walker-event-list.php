<?php 
  function walker_event_list(){
    $args = array(
      'post_type' => 'walker-events',
      'posts_per_page' => 3
    );

    $events = new WP_Query($args);

    while ($events->have_posts()): $events->the_post(); ?>
<h3><?php the_title(); ?></h3>
<?php endwhile;
  }
?>