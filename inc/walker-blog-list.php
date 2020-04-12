<?php 
function walker_blog_list(){
  $homepagePosts = new WP_Query(array(
    'posts_per_page' => 3
  ));

  while($homepagePosts->have_posts( )): $homepagePosts->the_post(  ); ?>

<li class="blog-preview__post">
  <h5><a class="text-light" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
  <div class="blog-preview__date">
    Date posted 12/9/19
  </div>
  <p class="blog-preview__content">
    <?php the_excerpt(); ?>
  </p>
</li>

<?php endwhile;
}  ?>