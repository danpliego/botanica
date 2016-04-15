<?php
/**
 * Template Name: Estilos
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/menu', 'menu'); ?>
  <?php get_template_part('templates/estilos-gallery', 'estilos-gallery'); ?>
<?php endwhile; ?>
