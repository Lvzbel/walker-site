<?php get_header(); ?>

<!-- HEADER -->
<header class="jumbotron header">
  <div class="header__container">
    <h1 class="header__header display-1"><?php the_field('main_header'); ?></h1>
    <p class="header__lead lead"><?php the_field('main_header_lead'); ?></p>
    <a class="shadow btn btn-lg btn-primary" href="#">Read More</a>
  </div>
  <div id="carouselExampleCaptions" class="header__carousel carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="header__block carousel-item active">
        <div style="background-image: url(<?= get_field('main_header_img_1')['url']; ?>);" class="header__background">
        </div>
      </div>
      <div class="header__block carousel-item">
        <div style="background-image: url(<?= get_field('main_header_img_2')['url']; ?>);" class="header__background">
        </div>
      </div>
      <div class="header__block carousel-item">
        <div style="background-image: url(<?= get_field('main_header_img_3')['url']; ?>);" class="header__background">
        </div>
      </div>
    </div>
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
          <?php walker_event_list(); ?>
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
      <ul class="blog-preview">
        <?php walker_blog_list(); ?>
      </ul>
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