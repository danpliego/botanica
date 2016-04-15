<?php
/**
 * Template Name: Colors
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/homepage', 'slider'); ?>
  <?php get_template_part('templates/color-gallery', 'color-gallery'); ?>
<?php endwhile; ?>
