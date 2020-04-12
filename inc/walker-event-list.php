<?php 
  function walker_event_list(){
    $args = array(
      'post_type' => 'walker-events',
      'posts_per_page' => 3
    );

    $events = new WP_Query($args);

    while ($events->have_posts()): $events->the_post(); ?>
<div class="events__event">
  <div class="d-flex align-items-center mb-2">
    <i class="events__icon fa fa-music" aria-hidden="true"></i>
    <h5><a href="<?php the_permalink(); ?>" class="text-light"><?php the_title(); ?></a></h5>
  </div>
  <div class="ml-5">
    <div class="events__date">
      Event Date: <?= get_field('date') ?>
    </div>
    <?php the_excerpt(); ?>
  </div>
</div>
<?php endwhile;
  }
?>