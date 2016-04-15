<?php
/**
 * Template Name: Proyectos
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/menu', 'menu'); ?>
  <?php get_template_part('templates/proyectos-gallery', 'proyectos-gallery'); ?>
<?php endwhile; ?>
