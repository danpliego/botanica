<?php
/**
 * Template Name: Colors
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/menu', 'menu'); ?>
  <?php get_template_part('templates/color-gallery', 'color-gallery'); ?>
<?php endwhile; ?>
