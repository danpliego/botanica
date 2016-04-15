<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/homepage', 'slider'); ?>
  <?php get_template_part('templates/color-gallery', 'slider'); ?>
<?php endwhile; ?>
