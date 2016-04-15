<div class="menu-wrapper">
  <div class="container">
     <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/layout/logo-icon.png" alt="Botanica" class="menu-logo" width="65px">
    <ul class="menu list-unstyled">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
        endif;
      ?>
      <li>
        <a href="#">1.-Galeria</a>
        <ul class="submenu list-unstyled">
          <li>
            <a href="">Por colores</a>
          </li>
          <li>
            <a href="estilos">Por estilo</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="#">2.-Proyectos</a>
      </li>
      <li>
        <a href="#">3.-Articulos</a>
      </li>
      <li>
        <a href="#">4.-Haz una cita</a>
      </li>
    </ul>
    <a href="#" class="close-menu btn-close">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/layout/close-menu.png">
    </a>
  </div>
</div>
