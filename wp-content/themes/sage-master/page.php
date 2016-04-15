<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/menu', 'menu'); ?>
  <div class="container">
    <div class="col-sm-10 col-sm-offset-1">
      <div class="section">
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
        </div>
        <?php get_template_part('templates/content', 'page'); ?>
      </div>
    </div>
  </div>
<?php endwhile; ?>
