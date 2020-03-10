<?php get_header(); ?>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Discography</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
  </div>
</div>

<div class="container">
  <div class="disco bg-secondary text-light">
    <h3 class="display-4 ml-5">My Life</h3>
    <span class="disco__release lead ml-5">Release date: 2018</span>
    <div class="row mt-5">
      <div class="col-12 col-md-5">
        <img class="disco__img shadow-lg rounded" src="<?php echo get_theme_file_uri('/src/images/album.jpg') ?>"
          alt="">
      </div>
      <div class="col-12 col-md-7">
        <div class="disco__content mt-5 mt-md-0">
          <p class="disco__description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea dolor dolorem
            sapiente assumenda suscipit vero,
            rem voluptatum iure nam, quaerat ipsa recusandae ratione, natus blanditiis voluptates earum distinctio et
            incidunt?</p>
          <div class="disco__links">
            <h4 class="disco__listen">Where to listen:</h4>
            <ul class="disco__links">
              <li><a class="text-light" href="#">Amazon</a></li>
              <li><a class="text-light" href="#">Spotify</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>