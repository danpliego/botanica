<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/slider-welcome', 'slider'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
