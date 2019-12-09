<?php get_header(); ?>

<!-- HEADER -->
<header class="jumbotron header">
  <div class="header__container">
    <h1 class="display-2">Ella Walker </h1>
    <p>Country music artist out to change what you expect from country music!</p>
    <a class="btn btn-primary" href="#">Read More</a>
  </div>
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
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
    <div class="main__events main__block col-12 col-md-6">
      <h3>Upcoming Events</h3>
      <p>Stay up to date with everything going on about me.</p>
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
    <div class="main__blog main__block col-12 col-md-6">
      <h3>Most Recent Blog Posts</h3>
      <p>Checkout about writting and more.</p>
    </div>
  </div>
</div>

<?php get_footer(); ?>