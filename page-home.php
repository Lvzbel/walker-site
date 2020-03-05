<?php get_header(); ?>

<!-- HEADER -->
<header class="jumbotron header">
  <div class="header__container">
    <h1 class="header__header display-2">Ella Walker </h1>
    <p class="header__lead lead">Country music artist out to change what you expect from country music!</p>
    <a class="shadow btn-lg btn-primary" href="#">Read More</a>
  </div>
  <div id="carouselExampleCaptions" class="header__carousel carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="header__block carousel-item active">
        <div style="background-image: url(<?php echo get_theme_file_uri('/src/images/jumbo-1.jpg') ?>);"
          class="header__background">
        </div>
      </div>
      <div class="header__block carousel-item">
        <div style="background-image: url(<?php echo get_theme_file_uri('/src/images/jumbo-2.jpg') ?>);"
          class="header__background">
        </div>
      </div>
      <div class="header__block carousel-item">
        <div style="background-image: url(<?php echo get_theme_file_uri('/src/images/jumbo-3.jpg') ?>);"
          class="header__background">
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</header>

<!--- Main Body -->
<div class="container">
  <div class="row">
    <!-- EVENTS -->
    <div class="main__events main__block col-12 col-md-6">
      <div class="main__spacer">
        <h3>Upcoming Events</h3>
        <p>Stay up to date with everything going on about me.</p>
      </div>
      <div class="main__spacer">
        <div class="events">
          <div class="events__event">
            <i class="events__icon fa fa-music" aria-hidden="true"></i>
            <p class="events__date">
              12/12/2019</p>
            <a href="#" class="text-light">National Orange Show Event Center</a>
          </div>
          <div class="events__event">
            <i class="events__icon fa fa-music" aria-hidden="true"></i>
            <p class="events__date">
              12/12/2019</p>
            <a href="#" class="text-light">National Orange Show Event Center</a>
          </div>
          <div class="events__event">
            <i class="events__icon fa fa-music" aria-hidden="true"></i>
            <p class="events__date">
              12/12/2019</p>
            <a href="#" class="text-light">National Orange Show Event</a>
          </div>
          <div class="events__event">
            <i class="events__icon fa fa-music" aria-hidden="true"></i>
            <p class="events__date">
              12/12/2019</p>
            <a href="#" class="text-light">National Orange Show Event Center</a>
          </div>
        </div>
      </div>
      <div class="main__spacer">
        <a href="#" class="events__btn shadow-sm btn btn-primary btn-lg">View Events</a>
      </div>
    </div>
    <!-- BLOG POSTS -->
    <div class="main__blog main__block col-12 col-md-6">
      <div class="main__spacer">
        <h3>Most Recent Blog Posts</h3>
        <p>Checkout about writting and more.</p>
      </div>
      <div class="main__spacer">
        <ul class="blog-preview">
          <?php 
            $homepagePosts = new WP_Query(array(
              'posts_per_page' => 2
            ));

            while($homepagePosts->have_posts( )) { 
              $homepagePosts->the_post(  ); ?>
          <li class="blog-preview__post">
            <h5><a class="text-light" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
            <div class="blog-preview__date">
              Date posted 12/9/19
            </div>
            <p class="blog-preview__content">
              <?php the_excerpt(); ?>
            </p>
          </li>
          <?php }
          ?>
        </ul>
      </div>
      <div class="main__spacer">
        <a href="<?php echo site_url('/blog'); ?>" class="blog-preview__btn shadow-sm btn btn-secondary btn-lg">View
          Blog</a>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <!-- Who is -->
    <div class="whois">
      <h2 class="whois__header display-4">Who is Ella Walker</h2>
      <div class="row">
        <div class="col-12 col-md-6">
          <img class="whois__img shadow-lg" src="<?php echo get_theme_file_uri('/src/images/whois.jpg') ?>" alt="">
        </div>
        <div class="col-12 col-md-6">
          <div class="whois__content">
            <p class="whois__text mt-5 mt-md-0">Summary goes here!!!!!! Lorem, ipsum dolor sit amet consectetur
              adipisicing
              elit.
              Recusandae eligendi sit
              quam fuga voluptate beatae
              iste vel. At, facere assumenda? Tenetur repellendus, saepe odit quibusdam reiciendis distinctio possimus
              porro
              voluptate.
              Lorem ipsum dolor sit amt consectetur adipisicing elit. Voluptatibus, voluptates? Architecto, eligendi
              assumenda! Ipsa magni ex atque est, dicta cumque ab vitae doloremque molestiae maxime sit numquam quam
              temporibus? Minus!
            </p>
          </div>
        </div>
        <a href="#" class="whois__btn shadow-sm btn btn-primary btn-lg">Learn More</a>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>