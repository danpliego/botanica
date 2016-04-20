<div class="color-gallery section" id="colors">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="header media">
          <div class="media-left">
            <a href="#" class="open-menu">
              <span class="line"></span>
              <span class="line"></span>
              <span class="line"></span>
            </a>
          </div>
          <div class="media-body media-middle">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/layout/logo-icon.png" alt="Botanica" class="menu-logo" width="50px" height="50px">
          </div>
          <div class="media-right media-middle">
            <a href="<?php bloginfo('url'); ?>/estilos/" class="btn btn-default">Ver por estilos</a>
          </div>
        </div>
        <div class="colors">
          <a href="#" class="red"></a>
          <a href="#" class="yellow"></a>
          <a href="#" class="green"></a>
          <a href="#" class="purple"></a>
        </div>
        <div class="slider-container">
          <div class="title red">
            <h2>Rojo</h2>
          </div>
          <?php get_template_part('templates/content', 'page'); ?>
        </div>
      </div>
    </div>
  </div>
</div>
