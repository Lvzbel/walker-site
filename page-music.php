<?php get_header(); ?>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Discography</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
  </div>
</div>

<div class="container">
  <div class="disco bg-secondary text-light">
    <h3>My Life</h3>
    <div class="row">
      <div class="col-12 col-md-6">
        <img class="disco__img shadow-lg rounded" src="<?php echo get_theme_file_uri('/src/images/album.jpg') ?>"
          alt="">
      </div>
      <div class="col-12 col-md-6">
        <p class="disco__description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea dolor dolorem
          sapiente assumenda suscipit vero,
          rem voluptatum iure nam, quaerat ipsa recusandae ratione, natus blanditiis voluptates earum distinctio et
          incidunt?</p>
        <span class="disco__release lead">2018</span>
        <div class="disco__links">
          <h4 class="disco__listen">Where to listen</h4>
          <ul>
            <li><a href="#">Amazon</a></li>
            <li><a href="#">Spotify</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>