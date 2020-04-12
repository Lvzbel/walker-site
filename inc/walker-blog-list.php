<?php 
function walker_blog_list(){
  $homepagePosts = new WP_Query(array(
    'posts_per_page' => 3
  ));

  while($homepagePosts->have_posts( )): $homepagePosts->the_post(  ); ?>

<li class="blog-preview__post">
  <div class="d-flex align-items-center mb-2">
    <i class="events__icon fa fa-newspaper-o" aria-hidden="true"></i>
    <h5><a class="text-light" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
  </div>

  <div class="ml-5">
    <div class="blog-preview__date">
      Date posted 12/9/19
    </div>
    <?php the_excerpt(); ?>
  </div>
</li>

<?php endwhile;
}  ?>